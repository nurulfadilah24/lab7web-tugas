<?= $this->include('template/admin_header'); ?>

<h2>Edit Artikel</h2>

<form>
    <p>Judul</p>
    <input type="text" value="<?= $artikel['judul']; ?>">

    <p>Isi</p>
    <textarea><?= $artikel['isi']; ?></textarea>

    <br><br>
    <button>Simpan</button>
</form>

<?= $this->include('template/admin_footer'); ?>