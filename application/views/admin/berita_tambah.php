<div class="container mt-4">
    <h2>Tambah Berita</h2>
    <form method="POST" action="<?= base_url('berita/simpan') ?>" enctype="multipart/form-data">
        <div class="form-group">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <select name="id_kategori" class="form-control" required>
                <option value="">Pilih Kategori</option>
                <?php foreach($kategori as $row): ?>
                <option value="<?= $row->id ?>"><?= $row->name ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Isi</label>
            <textarea name="isi" id="editor" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label>Tag</label>
            <input type="text" name="tag" class="form-control">
        </div>
        <div class="form-group">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control" accept="image/*" required>
            <small class="form-text text-muted">Format yang diizinkan: JPG, JPEG, PNG. Maksimal ukuran: 2MB</small>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="<?= base_url('berita') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>