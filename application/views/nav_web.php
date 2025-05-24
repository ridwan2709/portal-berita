    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-4 text-uppercase text-primary">SMK<span class="text-white font-weight-normal">M-U</span></h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <?php
                        $uri1 = $this->uri->segment(1);
                        $uri2 = $this->uri->segment(2);
                    ?>
                    <a href="<?php echo base_url('web')?>" class="nav-item nav-link <?php echo ($uri1 == 'web' && ($uri2 == '' || $uri2 == null)) ? 'active' : ''; ?>">Home</a>
                    <a href="<?php echo base_url('web/kategori')?>" class="nav-item nav-link <?php echo ($uri1 == 'web' && $uri2 == 'kategori') ? 'active' : ''; ?>">Category</a>
                    <a href="#contact" class="nav-item nav-link ">Contact</a>
                </div>
                
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

