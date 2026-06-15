<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800">Edit Product</h1>

<div class="card shadow mb-4">
    <div class="card-body">
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>
        <form action="/admin/products/update/<?= $product['id'] ?>" method="post">
            <?= csrf_field() ?>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="<?= esc($product['name']) ?>" required>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" rows="4" required><?= esc($product['description']) ?></textarea>
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="number" class="form-control" name="price" step="0.01" value="<?= esc($product['price']) ?>" required>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
            <a href="/admin/products" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
