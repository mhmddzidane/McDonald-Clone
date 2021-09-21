<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <?php
    foreach ($data as $promo) { ?>

        <h4><?= $promo['nama_promo'] ?></h4>
    <?php
    }

    ?>

</div>

<?= $this->endSection(); ?>