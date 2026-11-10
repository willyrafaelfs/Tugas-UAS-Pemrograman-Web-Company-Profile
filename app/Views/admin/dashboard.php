<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1 class="mb-4">Dashboard Admin</h1>
<p class="lead">Selamat datang kembali, <?= esc(session()->get('username') ?? 'Admin') ?>!</p>
<p>Berikut adalah ringkasan data website Anda:</p>

<div class="row g-4 mb-4">
    <!-- Services -->
    <div class="col-md-3 col-sm-6">
        <div class="card text-center h-100 shadow-sm">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <i class="fas fa-handshake fa-3x mb-3 text-primary"></i> 
                    <h4 class="card-title">Services</h4>
                    <p class="card-text">Total: <strong><?= $totalServices ?></strong></p>
                </div>
                <a href="<?= base_url('admin/services') ?>" class="btn btn-sm btn-outline-primary mt-3">Kelola Services</a>
            </div>
        </div>
    </div>

    <!-- Products -->
    <div class="col-md-3 col-sm-6">
        <div class="card text-center h-100 shadow-sm">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <i class="fas fa-box-open fa-3x mb-3 text-success"></i>
                    <h4 class="card-title">Products</h4>
                    <p class="card-text">Total: <strong><?= $totalProducts ?></strong></p>
                </div>
                <a href="<?= base_url('admin/products') ?>" class="btn btn-sm btn-outline-success mt-3">Kelola Products</a>
            </div>
        </div>
    </div>

    <!-- Portfolio -->
    <div class="col-md-3 col-sm-6">
        <div class="card text-center h-100 shadow-sm">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <i class="fas fa-briefcase fa-3x mb-3 text-info"></i>
                    <h4 class="card-title">Portfolio</h4>
                    <p class="card-text">Total: <strong><?= $totalPortfolio ?></strong></p>
                </div>
                <a href="<?= base_url('admin/portfolio') ?>" class="btn btn-sm btn-outline-info mt-3">Kelola Portfolio</a>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div class="col-md-3 col-sm-6">
        <div class="card text-center h-100 shadow-sm">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <i class="fas fa-comment-alt fa-3x mb-3 text-warning"></i>
                    <h4 class="card-title">Testimonials</h4>
                    <p class="card-text">Total: <strong><?= $totalTestimonials ?></strong></p>
                </div>
                <a href="<?= base_url('admin/testimonials') ?>" class="btn btn-sm btn-outline-warning mt-3">Kelola Testimonials</a>
            </div>
        </div>
    </div>

    <!-- Contact Messages -->
    <div class="col-md-3 col-sm-6">
        <div class="card text-center h-100 shadow-sm">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <i class="fas fa-envelope fa-3x mb-3 text-danger"></i>
                    <h4 class="card-title">Contact Messages</h4>
                    <p class="card-text">Total: <strong><?= $totalContacts ?></strong></p>
                </div>
                <a href="<?= base_url('admin/contact') ?>" class="btn btn-sm btn-outline-danger mt-3">Lihat Pesan</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
    