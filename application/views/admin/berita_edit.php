<div class="container mt-4">
    <h2>Edit Berita</h2>
    <form method="POST" action="<?= base_url('berita/update/'.$berita->id) ?>" enctype="multipart/form-data">
        <div class="form-group">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="<?= htmlspecialchars($berita->judul) ?>" required>
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <select name="id_kategori" class="form-control" required>
                <option value="">Pilih Kategori</option>
                <?php foreach($kategori as $row): ?>
                <option value="<?= $row->id ?>" <?= $berita->id_kategori == $row->id ? 'selected' : '' ?>><?= $row->name ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Isi</label>
            <textarea name="isi" id="editor" class="form-control" required><?= htmlspecialchars($berita->isi) ?></textarea>
        </div>
        <div class="form-group">
            <label>Tag</label>
            <input type="text" name="tag" class="form-control" value="<?= htmlspecialchars($berita->tag) ?>">
        </div>
        <!-- tampilkan gambar lama -->
        <?php if (!empty($berita->gambar)): ?>
	    <img src="<?= base_url('assets/uploads/' . $berita->gambar) ?>" alt="Gambar Berita" style="max-width: 200px;">
        <?php endif; ?>

        <!-- upload file -->
        <input type="file" name="gambar" class="form-control" accept="image/*" required>

        <!-- hidden input untuk gambar lama -->
        <input type="hidden" name="gambar_lama" value="<?= htmlspecialchars($berita->gambar) ?>">

        <button type="submit" class="btn btn-success">Update</button>
        <a href="<?= base_url('berita') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div> 