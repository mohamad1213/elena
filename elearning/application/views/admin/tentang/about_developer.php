<?php $this->load->view('admin/template/base'); ?>
<?php $this->load->view('admin/template/sidebar'); ?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="">
            <div class="hero text-white hero-bg-image" data-background="https://images.unsplash.com/photo-1492571350019-22de08371fd3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=649&q=80">
                <div class="col-md-4 mx-auto rounded-circle bg-white p-3" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                    <img src="<?= base_url('assets/') ?>syauqi.jpg" class="card-img-top rounded-circle img-responsive" alt="...">
                </div>
            </div>
        </div>
        <br>
        <div class="">
            <div class="card" style="width:100%;">
                <div class="card-body">
                    <h2 class="card-title" style="color: black;">Advanced Informatic</h2>
                    <hr>
                    <p class="card-text">Membuat orang tertawa adalah jalan ninjaku</p>
                </div>
            </div>
        </div>
        <br>
    </section>
</div>
<!-- End Main Content -->
<?php $this->load->view('admin/template/footer'); ?>