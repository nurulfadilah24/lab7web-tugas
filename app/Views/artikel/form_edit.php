<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>

<form action="" method="post">
    <p>
        <input type="text" name="judul" value="<?= esc($data['judul']); ?>" required>
    </p>
    <p>
        <textarea name="isi" cols="50" rows="10" required><?= esc($data['isi']); ?></textarea>
    </p>
    <p>
        <input type="submit" value="Kirim" class="btn btn-large btn-primary">
    </p>
</form>

<?= $this->include('template/admin_footer'); ?>