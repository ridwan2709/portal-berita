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
    
    <!-- Featured News Slider End -->

    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <?php
                                    $kategori_id = $this->input->get('kategori');
                                    if ($kategori_id) {
                                        // Ambil nama kategori dari database
                                        $kategori_row = $this->db->where('id', $kategori_id)->get('categories')->row();
                                        $judul_kategori = $kategori_row ? $kategori_row->name : 'Kategori Tidak Ditemukan';
                                    } else {
                                        $judul_kategori = 'Semua Berita';
                                    }
                                ?>
                                <h4 class="m-0 text-uppercase font-weight-bold"><?= htmlspecialchars($judul_kategori) ?></h4>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="<?= base_url('web') ?>">View All</a>
                            </div>
                        </div>

                        <?php $count = 0; foreach ($berita as $value): ?>
                            <?php if($count < 5): ?>
                            <div class="col-lg-6">
                                <div class="position-relative mb-3">
                                    <img class="img-fluid w-100" src="<?= base_url('assets/uploads/'.$value->gambar) ?>" style="object-fit: cover;">
                                    <div class="bg-white border border-top-0 p-4">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                href=""><?= $value->tag; ?></a>
                                            <a class="text-body" href=""><small><?= $value->tanggal; ?></small></a>
                                        </div>
                                        <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href=""><?= $value->judul; ?></a>
                                        <p class="m-0"><?= substr($value->isi, 0, 50) . '...' ?></p>
                                    </div>
                                    <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle mr-2" src="assets/uploads/logomu.png" width="25" height="25" alt="">
                                            <small><?= $this->db->get_where('user', ['id' => $value->user_id])->row()->username ?></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php $count++; ?>
                       <?php endforeach; ?>
                    </div>
                </div>
                
                <div class="col-lg-4">

                    <!-- Popular News Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Tranding Topik</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3 mt-3">
                            <?php $count = 0; foreach ($berita as $tranding) : ?>
                                <?php if($count < 3): ?>
                                    <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                        <img class="img-fluid" src="<?= base_url('assets/uploads/'.$tranding->gambar) ?>" style="width: 110px; height: 110px; object-fit: cover;" alt="">
                                        <div class="trending-topik w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                <div class="mb-2">
                                     <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href=""><?= $tranding->tag ?></a>
                                        <a class="text-body" href=""><small><?= $tranding->tanggal ?></small></a>
                                </div>
                                     <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="<?= base_url('web/single/'.$tranding->id) ?>"><?= $tranding->judul ?></a>
                                        </div>


                                    </div>
                                <?php endif; ?>
                                <?php $count++; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- Popular News End -->
                    <!-- Categories Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Kategori</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3 mt-3">
                            <?php
                            $categories = $this->db->get('categories')->result();
                            foreach($categories as $category): ?>
                                <a href="<?= base_url('web?kategori=' . urlencode($category->id)) ?>" class="btn btn-sm btn-outline-secondary m-1">
                                    <?= htmlspecialchars($category->name) ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- Categories End -->

                    <!-- Tags End -->
                </div>
            </div>
        </div>
    </div>
    <!-- News With Sidebar End -->