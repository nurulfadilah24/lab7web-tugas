<?= $this->include('template/header'); ?>

<article class="entry">
    <h2><?= $artikel['judul']; ?></h2>

    <img src="<?= base_url('/gambar/' . $artikel['gambar']); ?>" 
         alt="<?= $artikel['judul']; ?>" width="400">

    <p><?= $artikel['isi']; ?></p>
</article>

<a href="<?= base_url('/artikel'); ?>">← Kembali</a>

<?= $this->include('template/footer'); ?>