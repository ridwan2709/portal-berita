<!-- News Detail Start -->
<div class="container-fluid py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- News Detail Start -->
                <div class="position-relative mb-3">
                    <img class="img-fluid w-100" src="img/news-700x435-1.jpg" style="object-fit: cover;">
                    <div class="overlay position-relative bg-light">
                        <div class="mb-3">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href=""><?= $single_berita->tag; ?></a>
                            <a class="text-body" href=""><small><?= $single_berita->tanggal; ?></small></a>
                        </div>
                        <h1 class="mb-3 text-secondary text-uppercase font-weight-bold"><?= $single_berita->judul; ?></h1>
                        <div class="d-flex align-items-center mb-4">
                            <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
                            <small><?= $single_berita->user_id; ?></small>
                        </div>
                        <p><?= $single_berita->isi; ?></p>
                    </div>
                </div>
                <!-- News Detail End -->
            </div>

            <div class="col-lg-4">
                <!-- Trending News Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Trending News</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        <?php $count = 0; foreach ($berita as $trending) : ?>
                            <?php if($count < 3): ?>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" 
                                            href=""><?= $trending->tag ?></a>
                                        <a class="text-body" href=""><small><?= $trending->tanggal ?></small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" 
                                        href="<?= base_url('web/single/'.$trending->id) ?>"><?= $trending->judul ?></a>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php $count++; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- Trending News End -->
            </div>
        </div>
    </div>
</div>
<!-- News Detail End -->