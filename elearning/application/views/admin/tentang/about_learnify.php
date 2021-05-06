<?php $this->load->view('admin/template/base'); ?>
<?php $this->load->view('admin/template/sidebar'); ?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1 style="font-size: 27px; letter-spacing:-0.5px; color:black;">Tentang Project E-Lok </h1>
        </div>
        <div class="">
            <video class="afterglow" autoplay id="myvideo" width="1280" height="720">
                <source type="video/mp4" src="<?= base_url('assets/') ?>learnify.mp4" />
            </video>
        </div>
        <br>
        <div class="">
            <div class="card" style="width:100%;">
                <div class="card-body">
                    <h2 class="card-title" style="color: black;">Tentang E-Lok</h2>
                    <hr>
                    <p class="card-text">Web Edukasi Open Source yang dibuat oleh Syauqi Zaidan Khairan Khalaf. <br> Learnify adalah Web edukasi yang dilengkapi video, materi dan sistem ujian yang tersedia secara gratis. <br> Learnify dibuat ditujukan agar para siswa dan guru dapat terus belajar dan mengajar dimana saja dan kapan saja. </p>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- End Main Content -->

<?php $this->load->view('admin/template/footer'); ?>