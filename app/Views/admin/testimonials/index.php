<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Testimonials</h1>
    <a href="/admin/testimonials/create" class="btn btn-primary">
        <i class="fas fa-plus"></i> Add Testimonial
    </a>
</div>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('success') ?>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
<?php endif; ?>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($testimonials)): ?>
                        <?php foreach($testimonials as $testimonial): ?>
                            <tr>
                                <td><?= $testimonial['id'] ?></td>
                                <td><?= esc($testimonial['name']) ?></td>
                                <td><?= esc($testimonial['message']) ?></td>
                                <td>
                                    <a href="/admin/testimonials/edit/<?= $testimonial['id'] ?>" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="/admin/testimonials/delete/<?= $testimonial['id'] ?>" method="post" class="d-inline" onsubmit="return confirm('Delete this testimonial?')">
                                        <?= csrf_field() ?>
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="text-center">No testimonials found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
