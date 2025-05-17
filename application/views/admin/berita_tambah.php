<div class="container mt-4">
    <h2>Tambah Berita</h2>
    <form method="POST" action="<?= base_url('berita/simpan') ?>">
        <div class="form-group">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <input type="text" name="id_kategori" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Isi</label>
            <textarea name="isi" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label>Tag</label>
            <input type="text" name="tag" class="form-control">
        </div>
        <div class="form-group">
            <label>Gambar</label>
            <input type="text" name="gambar" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="<?= base_url('berita/list') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div> 