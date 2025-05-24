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
