<div class="container mt-4">
    <h2>Detail Berita</h2>
    <div class="card mb-4">
        <div class="card-header">
            <h4><?= $berita->judul ?></h4>
        </div>
        <div class="card-body">
            <?php if (!empty($berita->gambar)): ?>
                <img src="<?= base_url('uploads/berita/' . $berita->gambar) ?>" alt="Gambar Berita" class="img-fluid mb-3" style="max-width:400px;">
            <?php endif; ?>
            <p><strong>Kategori:</strong> <?= $berita->nama_kategori ?? '-' ?></p>
            <p><strong>Tag:</strong> <?= $berita->tag ? htmlspecialchars($berita->tag) : '-' ?></p>
            <p><strong>Tanggal:</strong> <?= date('d M Y, H:i', strtotime($berita->tanggal)) ?></p>
            <p><strong>Jumlah Dilihat:</strong> <?= isset($berita->jumlah_dilihat) ? $berita->jumlah_dilihat : '0' ?> kali</p>
            <hr>
            <div>
                <?= $berita->isi ?>
            </div>
        </div>
        <div class="card-footer">
            <a href="<?= base_url('berita') ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
