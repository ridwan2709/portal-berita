<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="section-title mb-4 text-center">
                <h2 class="m-0 text-uppercase font-weight-bold">Daftar Kategori</h2>
                <p class="text-muted mt-2">Pilih kategori untuk melihat berita terkait</p>
            </div>
            <div class="row">
                <?php if (!empty($kategori)): ?>
                    <?php foreach ($kategori as $kat): ?>
                        <div class="col-md-6 mb-4">
                            <a href="<?= base_url('web?kategori=' . urlencode($kat->id)) ?>" class="text-decoration-none">
                                <div class="card shadow-sm border-0 h-100 kategori-card transition">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="mr-3">
                                            <span class="badge badge-primary p-3" style="font-size: 1.5rem;">
                                                <i class="fa fa-folder-open"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <h5 class="card-title mb-1 text-secondary text-uppercase font-weight-bold"><?= htmlspecialchars($kat->name) ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12">
                        <div class="alert alert-info text-center">
                            Belum ada kategori tersedia.
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<style>
    .kategori-card:hover {
        box-shadow: 0 0.5rem 1.5rem rgba(0,0,0,0.10)!important;
        transform: translateY(-4px) scale(1.02);
        transition: all 0.2s;
        background: #f8f9fa;
    }
    .kategori-card {
        transition: all 0.2s;
    }
</style>
