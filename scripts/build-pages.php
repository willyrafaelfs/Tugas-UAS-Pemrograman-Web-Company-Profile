<?php

declare(strict_types=1);

if ($argc !== 2) {
    fwrite(STDERR, "Usage: php scripts/build-pages.php <application-url>\n");
    exit(1);
}

if (! extension_loaded('dom')) {
    throw new RuntimeException('The DOM PHP extension is required to build the static Pages site.');
}

$html = file_get_contents($argv[1]);

if ($html === false) {
    throw new RuntimeException('Could not fetch the application homepage from ' . $argv[1]);
}

$document = new DOMDocument();
$previousErrorSetting = libxml_use_internal_errors(true);
$loaded = $document->loadHTML($html, LIBXML_NONET | LIBXML_HTML_NODEFDTD);
libxml_clear_errors();
libxml_use_internal_errors($previousErrorSetting);

if (! $loaded) {
    throw new RuntimeException('Could not parse the application homepage HTML.');
}

$xpath = new DOMXPath($document);

foreach ($xpath->query('//a[contains(@href, "/admin/login")]') as $adminLink) {
    $navigationItem = $adminLink->parentNode;

    if ($navigationItem !== null && strtolower($navigationItem->nodeName) === 'li') {
        $navigationItem->parentNode?->removeChild($navigationItem);
    } else {
        $adminLink->parentNode?->removeChild($adminLink);
    }
}

foreach ($xpath->query('//form[contains(concat(" ", normalize-space(@class), " "), " contact-form ")]') as $form) {
    $notice = $document->createElement('div');
    $notice->setAttribute('class', 'alert alert-info');
    $notice->setAttribute('role', 'status');
    $notice->appendChild($document->createTextNode(
        'This is a static preview. The contact form and admin panel are available in the full PHP application.'
    ));
    $form->parentNode?->replaceChild($notice, $form);
}

$outputDirectory = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'pages-build';

if (! is_dir($outputDirectory) && ! mkdir($outputDirectory, 0775, true) && ! is_dir($outputDirectory)) {
    throw new RuntimeException('Could not create the Pages output directory.');
}

$indexPath = $outputDirectory . DIRECTORY_SEPARATOR . 'index.html';

if (file_put_contents($indexPath, $document->saveHTML()) === false) {
    throw new RuntimeException('Could not write the static Pages homepage.');
}

foreach (['assets/onova', 'uploads'] as $directory) {
    $source = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $directory);
    $destination = $outputDirectory . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $directory);

    if (! is_dir($source)) {
        throw new RuntimeException('Required public directory is missing: ' . $source);
    }

    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($source, FilesystemIterator::SKIP_DOTS),
        RecursiveIteratorIterator::SELF_FIRST
    );

    foreach ($iterator as $item) {
        $target = $destination . DIRECTORY_SEPARATOR . $iterator->getSubPathName();

        if ($item->isDir()) {
            if (! is_dir($target) && ! mkdir($target, 0775, true) && ! is_dir($target)) {
                throw new RuntimeException('Could not create public asset directory: ' . $target);
            }
        } elseif (! copy($item->getPathname(), $target)) {
            throw new RuntimeException('Could not copy public asset: ' . $item->getPathname());
        }
    }
}

echo "Static Pages site created in {$outputDirectory}\n";
