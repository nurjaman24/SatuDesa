<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Satu Pintu Dokumen Desa (Satu Desa)</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon	============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('asset/img/logo/IconBaruSatuDesa.png')?>">
    <!-- Google Fonts	============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS	============================================ -->
    <link rel="stylesheet" href="<?= base_url('asset/css/bootstrap.min.css')?>">
    <!-- Bootstrap CSS	============================================ -->
    <link rel="stylesheet" href="<?= base_url('asset/css/font-awesome.min.css')?>">
    <!-- owl.carousel CSS	============================================ -->
    <link rel="stylesheet" href="<?= base_url('asset/css/owl.carousel.css')?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/owl.theme.css')?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/owl.transitions.css')?>">
    <!-- animate CSS	============================================ -->
    <link rel="stylesheet" href="<?= base_url('asset/css/animate.css')?>">
    <!-- normalize CSS	============================================ -->
    <link rel="stylesheet" href="<?= base_url('asset/css/normalize.css')?>">
    <!-- main CSS	============================================ -->
    <link rel="stylesheet" href="<?= base_url('asset/css/main.css')?>">
    <!-- morrisjs CSS	============================================ -->
    <link rel="stylesheet" href="<?= base_url('asset/css/morrisjs/morris.css')?>">
    <!-- mCustomScrollbar CSS	============================================ -->
    <link rel="stylesheet" href="<?= base_url('asset/css/scrollbar/jquery.mCustomScrollbar.min.css')?>">
    <!-- metisMenu CSS	============================================ -->
    <link rel="stylesheet" href="<?= base_url('asset/css/metisMenu/metisMenu.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/metisMenu/metisMenu-vertical.css')?>">
    <!-- calendar CSS	============================================ -->
    <link rel="stylesheet" href="<?= base_url('asset/css/calendar/fullcalendar.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/calendar/fullcalendar.print.min.css')?>">
    <!-- forms CSS	============================================ -->
    <link rel="stylesheet" href="<?= base_url('asset/css/form/all-type-forms.css')?>">
    <!-- style CSS	============================================ -->
    <link rel="stylesheet" href="<?= base_url('asset/style.css')?>">
    <!-- responsive CSS	============================================ -->
    <link rel="stylesheet" href="<?= base_url('asset/css/responsive.css')?>">
    <!-- modernizr JS ============================================ -->
    <script src="<?= base_url('asset/js/vendor/modernizr-2.8.3.min.js')?>"></script>
</head>
    <body>
        <?php
            $pesan = "Hallo Admin, Saya Mau Daftar Akun Warga, Bagaimana Caranya?";
            foreach ($tb_desa as $tdes);
            $telepon = $tdes->telepon_desa;
        ?>
        <div class="error-pagewrap">
            <div class="error-page-int">
                <hr>
                <div class="text-center m-b-md custom-login">
                    <div class="row">
                        <img src="<?= base_url('asset/img/logo/IconBaruSatuDesa.png')?>" alt="" class="" width="10%">
                        <img src="<?= base_url('asset/img/logo/ImageTextSatuDesa.png')?>" alt="" class="" width="30%">
                    </div>
                </div>
                <hr>
                <div class="tagline">
                    <marquee behavior="alternatif" direction="left">
                        "Satu Desa - Satu Pintu Dokumen Desa | Membantu mengefisiensi pelayanan administrasi desa"
                    </marquee>
                </div>
                <hr>
                <div class="content-error">
                    <div class="hpanel">
                        <div class="panel-body">
                            <form method="post" action="<?= base_url('Loginv2/auth'); ?>">
                                <div class="form-group">
                                    <label class="control-label" for="username">Nama Pengguna <code>*</code></label>
                                    <input type="text" placeholder="Contoh : adminsadesa" title="Masukan Nama Pengguna" 
                                    required="true" value="" name="username" id="" class="form-control" 
                                    autocomplete="off" autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="password">Password <code>*</code></label>
                                    <input type="password" title="Please enter your password" 
                                    placeholder="******" required="" value="" name="password" 
                                    id="showPassword" class="form-control" autocomplete="off"><br>
                                    <input type="checkbox" onclick="myFunction()"> Tampilkan Password
                                </div>
                                <!-- <div class="form-group">
                                    <label class="control-label" for="password">Akses</label>
                                    <select name="akses" id="" class="form-control" required>
                                        <option class="bg bg-info" value="">Pilih Akses Anda</option>
                                        <option value="Admin">Admin</option>
                                        <option value="AdminDesa">Admin Desa</option>
                                        <option value="Warga">Warga</option>
                                    </select>
                                </div> -->
                                <button class="btn btn-success btn-block loginbtn" type="submit">Login</button>
                            </form>
                        </div>
                        <div class="panel-footer">
                            Belum Punya Akun ?
                            <a class="" href="https://api.whatsapp.com/send?phone=<?= $telepon?>&text=<?= $pesan?>">Klik Disini</a>
                            <!--<a class="badge badge-primary btn btn-sm" href="<?= base_url('Login/register')?>">Daftar Disini</a>-->
                        </div>
                    </div>
                </div>
            </div>   
            <div class="text-center login-footer">
                <p>Copyright © 2022. All rights reserved. Developer By <a href="#" class="text-white"><b>STT YBSI</b></a></p>
            </div>
        </div>
            <!-- jquery ============================================ -->
    <script src="<?= base_url('asset/js/vendor/jquery-1.12.4.min.js')?>"></script>
    <!-- bootstrap JS ============================================ -->
    <script src="<?= base_url('asset/js/bootstrap.min.js')?>"></script>
    <!-- wow JS ============================================ -->
    <script src="<?= base_url('asset/js/wow.min.js')?>"></script>
    <!-- price-slider JS ============================================ -->
    <script src="<?= base_url('asset/js/jquery-price-slider.js')?>"></script>
    <!-- meanmenu JS ============================================ -->
    <script src="<?= base_url('asset/js/jquery.meanmenu.js')?>"></script>
    <!-- owl.carousel JS ============================================ -->
    <script src="<?= base_url('asset/js/owl.carousel.min.js')?>"></script>
    <!-- sticky JS	============================================ -->
    <script src="<?= base_url('asset/js/jquery.sticky.js')?>"></script>
    <!-- scrollUp JS ============================================ -->
    <script src="<?= base_url('asset/js/jquery.scrollUp.min.js')?>"></script>
    <!-- mCustomScrollbar JS ============================================ -->
    <script src="<?= base_url('asset/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')?>"></script>
    <script src="<?= base_url('asset/js/scrollbar/mCustomScrollbar-active.js')?>"></script>
    <!-- metisMenu JS ============================================ -->
    <script src="<?= base_url('asset/js/metisMenu/metisMenu.min.js')?>"></script>
    <script src="<?= base_url('asset/js/metisMenu/metisMenu-active.js')?>"></script>
    <!-- tab JS	============================================ -->
    <script src="<?= base_url('asset/js/tab.js')?>"></script>
    <!-- icheck JS	============================================ -->
    <script src="<?= base_url('asset/js/icheck/icheck.min.js')?>"></script>
    <script src="<?= base_url('asset/js/icheck/icheck-active.js')?>"></script>
    <!-- plugins JS	============================================ -->
    <script src="<?= base_url('asset/js/plugins.js')?>"></script>
    <!-- main JS ============================================ -->
    <script src="<?= base_url('asset/js/main.js')?>"></script>
    <!-- tawk chat JS ============================================ -->
    <!-- <script src="<?= base_url('asset/js/tawk-chat.js')?>"></script> -->
    <!-- Show/Hide Password -->
    <script>
        function myFunction() {
            var x = document.getElementById("showPassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
    </body>
</html>