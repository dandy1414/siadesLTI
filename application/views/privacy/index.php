<section>
    <div class="container pt-5">
    <br>
    <br>
    <br>
        <h1 align="center">Privacy Policy</h1>
        <?php foreach ($privacy as $row) : ?>
        <div class="container pt-5">
        <p><?= $row->isi; ?> </p>
        </div>
        <?php endforeach; ?>
    </div>
</section>