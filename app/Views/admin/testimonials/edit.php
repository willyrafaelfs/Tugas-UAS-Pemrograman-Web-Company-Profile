<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800">Edit Testimonial</h1>

<div class="card shadow mb-4">
    <div class="card-body">
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>
        <form action="/admin/testimonials/update/<?= $testimonial['id'] ?>" method="post">
            <?= csrf_field() ?>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="<?= esc($testimonial['name']) ?>" required>
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" name="message" rows="4" required><?= esc($testimonial['message']) ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
            <a href="/admin/testimonials" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
    