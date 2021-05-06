<?php $this->load->view('admin/template/base'); ?>
<?php $this->load->view('admin/template/sidebar'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="">
            <div class="card" style="width:100%;">
                <div class="card-body">
                    <h2 class="card-title" style="color: black;">Tambah Data Materi</h2>
                    <hr>
                    <p class="card-text"> After I ran into Helen at a restaurant, I realized she was just office pretty drop-dead date put in in a deck for our standup today. Who's responsible for the ask for this request? who's responsible for the ask for this request? but moving the goalposts gain traction.
                    </p>
                    <a href="#detail" class="btn btn-success">Saya paham dan
                        ingin melanjutkan ⭢</a>
                </div>
            </div>
            <div class="card card-success">
                <div class="col-md-12 text-center">
                    <p class="registration-title font-weight-bold display-4 mt-4" style="color:black; font-size: 50px;">
                        Tambah Materi</p>
                    <p style="line-height:-30px;margin-top:-20px;">Silahkan isi data data yang diperlukan
                        dibawah </p>
                    <hr>
                </div>
                <div id="detail" class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="<?= base_url('admin/tambah_materi') ?>">
                        <div class="col-md-12 bg-white" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px">
                            <form method="post" enctype="multipart/form-data" action="<?= base_url('guru/add_materi') ?>">
                                <input type="hidden" name="id">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4">Nama Guru</label>
                                        <input autocomplete="off" required type="text" list="nama_guru" onkeyup="autofill()" id="namaguru" name="nama_guru" class="form-control">
                                        <small>List guru sudah tersedia di autocomplete, kalian hanya
                                            tinggal klik input area nya atau dengan cara menulis namanya dan
                                            klik guru yang akan dipilih.</small>
                                        <datalist id=nama_guru>
                                            <?php
                                            include "koneksi.php";
                                            $qry = mysqli_query($koneksi, "SELECT nama_guru From guru");
                                            while ($t = mysqli_fetch_array($qry)) {
                                                echo "<option value='$t[nama_guru]'>";
                                            }
                                            ?>
                                        </datalist>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nama Mata Pelajaran</label>
                                    <input type="text" class="form-control" name="nama_mapel" id="nama_mapel" required placeholder="Pilih nama guru yang valid agar nama mapel muncul" readonly>
                                    <small>Jika nama mapel sudah berganti artinya nama guru yang kamu
                                        masukan di input area adalah valid! jika tidak muncul nama mapel
                                        anda harus klik input area nama guru dan pilih guru yang tersedia
                                        disana.</small>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input required type="file" name="video" required class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="inputGroupFile01">Upload
                                                Video
                                                Materi Disini</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Deskripsi Materi</label>
                                    <textarea class="form-control" required name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputState">Kelas</label>
                                    <select required id="inputState" name="kelas" class="form-control">
                                        <option selected>Pilih disini</option>
                                        <option value="X">X ( Kelas Sepuluh )</option>
                                        <option value="XI">XI ( Kelas Sebelas )</option>
                                        <option value="XII">XII ( Kelas Dua Belas )</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-block btn-success">Tambah
                                    materi ⭢</button>
                        </div>
                    </form>
                </div>
            </div>
            <br>
        </div>
    </section>
</div>
</div>
<!-- End Main Content -->
<?php $this->load->view('admin/template/footer'); ?>