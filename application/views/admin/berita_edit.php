<div class="container mt-4">
    <h2>Edit Berita</h2>
    <form method="POST" action="<?= base_url('berita/update/'.$berita->id) ?>">
        <div class="form-group">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="<?= $berita->judul ?>" required>
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <input type="text" name="id_kategori" class="form-control" value="<?= $berita->id_kategori ?>" required>
        </div>
        <div class="form-group">
            <label>Isi</label>
            <textarea name="isi" class="form-control" required><?= $berita->isi ?></textarea>
        </div>
        <div class="form-group">
            <label>Tag</label>
            <input type="text" name="tag" class="form-control" value="<?= $berita->tag ?>">
        </div>
        <div class="form-group">
            <label>Gambar</label>
            <input type="text" name="gambar" class="form-control" value="<?= $berita->gambar ?>">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="<?= base_url('berita/list') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div> 