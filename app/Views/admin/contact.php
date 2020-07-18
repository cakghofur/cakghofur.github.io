<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <?php foreach ($alamat as $a) : ?>

                <ul>
                    <li><?= $a['tes']; ?></li>
                    <li><?= $a['nama']; ?></li>
                </ul>

            <?php endforeach; ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>