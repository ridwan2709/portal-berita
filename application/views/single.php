<!-- News Detail Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
            <style>
    /* Ukuran font untuk tag */
    .trending-tag {
        font-size: 11px;
    }

    /* Ukuran font untuk tanggal */
    .trending-tanggal {
        font-size: 12px;
        color: #777;
    }

    /* Ukuran font untuk judul berita terkait */
    .trending-judul {
        font-size: 14px;
        font-weight: bold;
        line-height: 1.4;
        color: #222;
    }
</style>

                <!-- News Detail Start -->
                <div class="position-relative mb-3">
                    <img class="img-fluid w-100" src="<?= base_url('assets/uploads/'.$single_berita->gambar) ?>" style="object-fit: cover; height: 500px;">
                    <div class=" position-relative bg-light p-4">
                        <div class="mb-3">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href=""><?= $single_berita->tag; ?></a>
                            <a class="text-body" href=""><small><i class="far fa-calendar-alt mr-1"></i><?= date('d M Y', strtotime($single_berita->tanggal)); ?></small></a>
                            <a class="text-body ml-2" href=""><small><i class="far fa-user mr-1"></i><?= $single_berita->user_id; ?></small></a>
                        </div>
                        <h1 class="mb-3 text-secondary text-uppercase font-weight-bold"><?= $single_berita->judul; ?></h1>
                        
                        <div class="news-content mb-4">
                            <?= $single_berita->isi; ?>
                        </div>

                        <!-- Share Buttons -->
                        <div class="share-buttons mb-4">
                            <h5 class="mb-3">Bagikan Berita:</h5>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?= current_url() ?>" class="btn btn-primary mr-2" target="_blank">
                                <i class="fab fa-facebook-f"></i> Facebook
                            </a>
                            <a href="https://twitter.com/intent/tweet?url=<?= current_url() ?>&text=<?= $single_berita->judul ?>" class="btn btn-info mr-2" target="_blank">
                                <i class="fab fa-twitter"></i> Twitter
                            </a>
                            <a href="https://wa.me/?text=<?= $single_berita->judul ?>%20<?= current_url() ?>" class="btn btn-success" target="_blank">
                                <i class="fab fa-whatsapp"></i> WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
                <!-- News Detail End -->
            </div>

            <div class="col-lg-4">
                <!-- Trending News Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Berita Terkait</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        <?php $count = 0; foreach ($berita as $trending) : ?>
                            <?php if($count < 5): ?>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="<?= base_url('assets/uploads/'.$trending->gambar) ?>" style="width: 110px; height: 110px; object-fit: cover;" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
    <div class="mb-2">
        <a class="trending-tag badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" 
            href=""><?= $trending->tag ?></a>
        <a class="trending-tanggal text-body" href="">
            <small><?= date('d M Y', strtotime($trending->tanggal)) ?></small>
        </a>
    </div>
    <a class="trending-judul h6 m-0 text-secondary text-uppercase font-weight-bold" 
        href="<?= base_url('web/single/'.$trending->id) ?>">
        <?= $trending->judul ?>
    </a>
</div>

                            </div>
                            <?php endif; ?>
                            <?php $count++; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- Trending News End -->

                <!-- Tags Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-sm btn-outline-secondary m-1"><?= $single_berita->tag ?></a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Berita</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Update</a>
                        </div>
                    </div>
                </div>
                <!-- Tags End -->
            </div>
        </div>
    </div>
</div>
<!-- News Detail End -->