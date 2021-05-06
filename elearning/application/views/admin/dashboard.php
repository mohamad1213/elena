<?php $this->load->view('admin/template/base'); ?>
<?php $this->load->view('admin/template/sidebar'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1 style="font-size: 27px; letter-spacing:-0.5px; color:black;">Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Siswa</h4>
                        </div>
                        <div class="card-body">
                            <?php echo $this->db->count_all('siswa'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Guru</h4>
                        </div>
                        <div class="card-body">
                            <?php echo $this->db->count_all('guru'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Materi</h4>
                        </div>
                        <div class="card-body">
                            <?php echo $this->db->count_all('materi'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Kelas</h4>
                        </div>
                        <div class="card-body">
                            3
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="card" style="width:100%;">
                <div class="card-body">
                    <h2 class="card-title" style="color: black;">Tambah Materi?</h2>
                    <hr>
                    <p class="card-text">After I ran into Helen at a restaurant, I realized she was just office pretty drop-dead date put in in a deck for our standup today. Who's responsible for the ask for this request? who's responsible for the ask for this request? but moving the goalposts gain traction.</p>
                    <a href="<?= base_url('admin/tambah_materi') ?>" class="btn btn-success">Tambah Materi ⭢</a>
                </div>
            </div>
        </div>
        <div class="">
            <div class="hero text-white hero-bg-image" data-background="<?= base_url('assets/') ?>stisla-assets/img/unsplash/eberhard-grossgasteiger-1207565-unsplash.jpg">
                <div class=" hero-inner">
                    <h1>Selamat Datang, <?php
                                        $data['user'] = $this->db->get_where('admin', ['email' =>
                                        $this->session->userdata('email')])->row_array();
                                        echo $data['user']['username'];
                                        ?>!</h1>
                    <p class="lead">After I ran into Helen at a restaurant, I realized she was just office pretty drop-dead date put in in a deck for our standup today. Who's responsible for the ask for this request? but moving the goalposts gain traction.</p>
                    <div class="mt-4">
                        <a href="<?= base_url('admin/data_siswa') ?>" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i>
                            Data Siswa</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('admin/template/footer'); ?>