<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Portfolio</h1>
    <a href="/admin/portfolio/create" class="btn btn-primary">
        <i class="fas fa-plus"></i> Add Portfolio
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
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($portfolio)): ?>
                        <?php foreach($portfolio as $item): ?>
                            <tr>
                                <td><?= $item['id'] ?></td>
                                <td><?= esc($item['title']) ?></td>
                                <td><?= esc($item['description']) ?></td>
                                <td>
                                    <?php if (!empty($item['image'])): ?>
                                        <img src="/uploads/portfolio/<?= esc($item['image']) ?>" width="80" alt="">
                                    <?php else: ?>
                                        <span class="text-muted">No image</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="/admin/portfolio/edit/<?= $item['id'] ?>" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="/admin/portfolio/delete/<?= $item['id'] ?>" method="post" class="d-inline" onsubmit="return confirm('Delete this portfolio?')">
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
                            <td colspan="5" class="text-center">No portfolio found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
