    <!-- Featured News Slider Start -->
    <div class="container-fluid pt-5 mb-3">
        <div class="container">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">Berita Viral</h4>
            </div>
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">
                <?php foreach ($berita as $news) : ?>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="<?= base_url('assets/uploads/'.$news->gambar) ?>" alt="gambar berita" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href=""><?= $news->tag; ?></a>
                            <a class="text-white" href=""><small><?= $news->tanggal; ?></small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="<?= base_url('web/single/'.$news->id) ?>"><?= $news->judul; ?></a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<!-- Berita terbaru 5 data -->
<div class="container-fluid pt-5 mb-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h4 class="m-0 text-uppercase font-weight-bold">Berita Terbaru</h4>
                    <a href="<?= base_url('web/kategori') ?>" class="btn btn-sm">Lihat Semua <i class="fa fa-chevron-right"></i></a>
                </div>
                <div class="row">
                    <?php foreach ($berita as $news) : ?>
                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="<?= base_url('assets/uploads/'.$news->gambar) ?>" alt="gambar berita" style="object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $news->judul ?></h5>
                                    <p class="card-text"><?= substr($news->isi, 0, 100) ?>...</p>
                                    <!-- pembuat berita -->
                                    <p class="card-text"><small class="text-muted"><i class="fa fa-user"></i> <?= $this->db->get_where('user', ['id' => $news->user_id])->row()->username ?></small></p>
                                    <!-- tanggal berita -->
                                    <p class="card-text"><small class="text-muted"><i class="fa fa-calendar"></i> <?= $news->tanggal ?></small></p>
                                    <a href="<?= base_url('web/single/'.$news->id) ?>" class="btn btn-primary btn-sm rounded-pill">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        
    </div>
</div>

