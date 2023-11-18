<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Edit Akun</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="EditAkun.css">
        <script src="https://kit.fontawesome.com/1e12127065.js" crossorigin="anonymous"></script>
    </head>


    <main class="wrap">
        <div id="kiri">
            <h2>Notifikasi</h2>
        </div>
        <div id="kanan">
            <a href="#">
                <i style="float: right; color: black;" class="fa fa-times fa-3x" id="CloseNotifikasi" aria-hidden="true"></i>
            </a>
        </div>
        <div id="main">
            <hr style="width: 100%;">
            <i style="margin-top: 30px;" class="fa fa-bell-o fa-5x" aria-hidden="true"></i>
            <p>Belum Ada Notifikasi Baru</p>
        </div>
    </main>

    <main class="AccountBG">
        <section class="AccountTitle">
            Akun
            <i class="fa-solid fa-xmark AccountTitleLogo" id="CloseAccountBG"></i>
        </section>
        <div class="AccountRataTengah">
            <div class="AccountPerBagian">
                <div class="AccountTempatLogo">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="AccountTempatNama">
                    <div class="AccountPembagianTempatNama">
                        <?php 
                        include 'Koneksi.php';
                            
                        $cariIdStudent = "SELECT * FROM login_student WHERE status_login = 'Baru saja'";
                        $eksekusicariIdStudent = mysqli_query($apaya, $cariIdStudent);
                        
                        if (mysqli_num_rows($eksekusicariIdStudent) > 0) {
                            while ($LihatAkunStudent = mysqli_fetch_array($eksekusicariIdStudent)) {
                                $simpanNamaStudent = $LihatAkunStudent["nama_student"];
                                $simpanEmailStudent = $LihatAkunStudent["email_student"];
                                $simpanIDStudent = $LihatAkunStudent["id_student"];
                            }
                            $simpanNamaStudent = $simpanNamaStudent;
                            $simpanEmailStudent = $simpanEmailStudent;
                            $simpanIDStudent = $simpanIDStudent;
                            

                            echo $simpanNamaStudent;
                            // untuk Debug
                            // echo "Kelas$simpanIDStudent";
                            
                        }

                        else {
                            echo "Login dulu";
                            // echo $coba;
                        }
                        ?>
                    </div>
                    <div class="AccountPembagianTempatNama">
                        <div class="AccountTulisanTipis">                            
                            <?php 
                            if (mysqli_num_rows($eksekusicariIdStudent) > 0) {
                                echo $simpanEmailStudent; 
                            }
                            else {
                                echo "Buka Dashboard1.html untuk Login";
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="AccountGarisBawahHeader"></div>

            <div class="AccountPerBagian">
                <div class="AccountTempatLogo">
                <a href="Dashboard2.php">
                    <i class="fa-solid fa-house"></i>
                </a>
                </div>
                <div class="AccountTempatNama">
                    Dashboard
                </div>
            </div>
            <div class="AccountPerBagian">
                <div class="AccountTempatLogo">
                    
                        <i class="fa-solid fa-id-badge"></i>
                    
                </div>
                <div class="AccountTempatNama">
                    Profil
                </div>
            </div>
            <div class="AccountPerBagian">
                <div class="AccountTempatLogo">
                    <a href="Setting1.php">
                        <i class="fa-solid fa-gears"></i>
                    </a>
                </div>
                <div class="AccountTempatNama">
                    Pengaturan
                </div>
            </div>
            <div class="AccountPerBagian">
                <div class="AccountTempatLogo">
                    <a href="PaymentHistoryScreen.php">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                </div>
                <div class="AccountTempatNama">
                    Riwayat Pembelian
                </div>
            </div>
            <div class="AccountPerBagian">
                <div class="AccountTempatLogo">
                    <i class="fa-solid fa-circle-question"></i>
                </div>
                <div class="AccountTempatNama">
                    Informasi
                </div>
            </div>

            <div class="AccountGarisAtasFooter"></div>

            <div class="AccountPerBagian">
                <div class="AccountTempatLogo">
                    <a href="Dashboard1.php">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </a>
                </div>
                <div class="AccountTempatNama">
                    Log out
                </div>
            </div>

            <div class="AccountGarisBawahFooter"></div>
        </div>
    </main>



    <header class="header">
        <img src="../Bahan/Logo_SetelahLogin.png" width="750" height="640" alt="" class="TempatLogoHeader LogoHeader"/>
        <nav class="Navigasi">
            <a href="Dashboard2.php">
                <div class="SubNavigasi ">Home</div>
            </a>
            <a href="Dashboard1SudahLogin.php">
                <div class="SubNavigasi">Modul</div>
            </a>
            <a href="LevelCourse.php">
                <div class="SubNavigasi">Kelas</div>
            </a>
                <!-- <div class="SubNavigasi">About Us</div> -->
        </nav>
        <section class="SearchDanAkun">
            <!-- <div class="FrameNya">
                <i class="fa-solid fa-magnifying-glass GambarKacaLup"></i>
                <input type="text" class="HeaderFormText" placeholder="Get Ready for Class!">	
            </div> -->
            <div class="Akun" id="MenuPengguna">
                <a href="#">
                    <i class="fa-solid fa-id-badge fa-2x"></i>
                </a>
            </div>
            <div class="Akun Jarak" >
                <a href="#">
                    <i class="fa-regular fa-bell fa-2x" id="Notifikasi"></i>
                </a>
            </div>
        </section>
    </header>
    

    <section class="Pembatas"></section>

    <section class="order" id="order">
        <h1>Profil</h1>

        <?php 
            include 'Koneksi.php';
                
            $cariIdStudent = "SELECT * FROM login_student WHERE status_login = 'Baru saja'";
            $eksekusicariIdStudent = mysqli_query($apaya, $cariIdStudent);

            $simpanAkunStudent = "";
            while ($LihatAkunStudent = mysqli_fetch_array($eksekusicariIdStudent)) {
                $simpanAkunStudent = $LihatAkunStudent["nama_student"];
            }


            $Profil = "SELECT * FROM student WHERE nama_student = '$simpanAkunStudent'";
            $EksekusiProfil = mysqli_query($apaya, $Profil);

            $Nama = "";
            $Kota = "";
            $KodePos = "";
            $Provinsi = "";
            $Telp = "";
            $TglLahir = "";
            $TempatLahir = "";
            $PendidikanTerakhir = "";
            $Perusahaan = "";
            $Pekerjaan = "";
            $Status = "";

            while ($LihatProfilStudent = mysqli_fetch_array($EksekusiProfil)) {
                $Nama = $LihatProfilStudent["namalengkap_student"];
                $Kota = $LihatProfilStudent["kota_student"];
                $KodePos = $LihatProfilStudent["kodepos_student"];
                $Provinsi = $LihatProfilStudent["provinsi_student"];
                $Telp = $LihatProfilStudent["notelp_student"];
                $TglLahir = $LihatProfilStudent["tgllahir_student"];
                $TempatLahir = $LihatProfilStudent["tempat_lahir"];
                $PendidikanTerakhir = $LihatProfilStudent["pendidikan_terakhir"];
                $Perusahaan = $LihatProfilStudent["perusahaan"];
                $Pekerjaan = $LihatProfilStudent["pekerjaan"];
                $Status = $LihatProfilStudent["status_profil"];
            }

        ?>

        <form action="EditAkunProses.php" method="post">
            <h2>Data Diri <?php if (!empty($Status)) {echo '(', $Status, ')';}?> </h2>
            <div class="inputBox">
                <div class="input">
                    <span>Nama Lengkap</span>
                    
                    <input type="text" placeholder="Nama Lengkap" value="<?php echo $Nama; ?>" name="Nama">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>Nomor Telepon</span>
                    <input type="text" placeholder="No Telepon" value="<?php echo $Telp; ?>" name="Telepon">
                </div>
            </div>

            <h2>Kota/Kabupaten</h2>
            <div class="inputBox">
                <div class="input">
                    <span>Kota/Kabupaten saat ini</span>
                    <input type="text" placeholder="Kota/Kabupaten" value="<?php echo $Kota; ?>" name="Kota">
                </div>
            </div>
            
            <div class="inputBox1">
                <div class="input1">
                    <span>Tempat Lahir</span>
                    <input placeholder="Tempat Lahir" value="<?php echo $TempatLahir; ?>" name="TempatLahir">
                </div>
                
                <div class="input2">
                    <span>Tanggal Lahir</span>
                    <input type="date" value="<?php echo $TglLahir; ?>" name="TanggalLahir">
                </div>
            </div>

            <h2>Pendidikan & Profesi</h2>
            <div class="inputBox">
                <div class="input">
                    <span>Pendidikan Terakhir</span>
                    <input type="text" placeholder="Pendidikan" value="<?php echo $PendidikanTerakhir; ?>" name="PendidikanTerakhir">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>Perusahaan / Institusi saat ini</span>
                    <input type="text" placeholder="Perusahaan / institusi" value="<?php echo $Perusahaan; ?>" name="Perusahaan">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>Pekerjaan / Profesi saat ini</span>
                    <input type="text" placeholder="Contoh: Project Manager" value="<?php echo $Pekerjaan;?>" name="Pekerjaan">
                </div>
            </div>
        
            <input type="submit" value="Simpan" class="button">
            <input type="button" value="Batal" class="button2">
        </form>
    </section>

    <footer class="Footer">
        <img src="../Bahan/Garis_Footer.png" class="GarisAtasFooter">
            <div class="Footer FooterPalingKiri">
                <img src="../Bahan/Logo.png" class="Footer FooterPalingKiri FooterTempatLogoKonten">
                <div class="Footer FooterPalingKiri FooterTempatNamaCourse">
                    Infinity English Course
                </div>
                <div class="Footer FooterPalingKiri FooterTempatDefinisiCourse">
                    IEC merupakan salah satu tempat kursus bahasa inggris berbasis online.
                </div>
                <div class="Footer FooterPalingKiri FooterTempatKonten">
                    <i class="fa-brands fa-youtube fa-2x"></i>
                    <i class="fa-brands fa-instagram fa-2x JarakLogoFooter"></i>
                    <i class="fa-brands fa-facebook-f fa-2x JarakLogoFooter"></i>
                </div>
            </div>
            <div class="Footer FooterKonten">
                <div class="Footer FooterKonten FooterTempatTitleAlamatDanLinks">
                    Alamat
                </div>
                <div class="Footer FooterKonten FooterTempatDeskripsiKonten">
                    Jalan T-Rex Nomor 127, Jurasic, La La Land
                    Disney Land 25816
                </div>
            </div>
            <div class="Footer FooterKonten">
                <div class="Footer FooterKonten FooterTempatTitleAlamatDanLinks">
                    Quick Links
                </div>
                <div class="Footer FooterKonten FooterTempatLinks">
                    Home<br>
                    Modul<br>
                    Kelas<br>
                    About Us<br>
                </div>
            </div>
        <img src="../Bahan/Garis_Footer.png" class="GarisBawahFooter">
    </footer>

<script src="EditAkun.js"></script>
</html>