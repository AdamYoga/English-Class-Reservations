<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Edit Oleh Tentor dan Admin</title>
    <link rel="stylesheet" href="Video.css">
    <script src="https://kit.fontawesome.com/1e12127065.js" crossorigin="anonymous"></script>
</head>
<body>

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

                        $AsalWebsite = "";
                        $MateriNo = "";
                        if (!empty($_POST['dariWebsite'])) {
                            $AsalWebsite = $_POST['dariWebsite'];
                            $MateriNo =  $_POST['MateriNo'];
                        }
                            
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
                    <a href="Dashboard2.php"> <i class="fa-solid fa-house"></i> </a>
                </div>
                <div class="AccountTempatNama">
                    Dashboard
                </div>
            </div>
            <div class="AccountPerBagian">
                <div class="AccountTempatLogo">
                    <a href="EditAkun.php">
                        <i class="fa-solid fa-id-badge"></i>
                    </a>
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
			<a href="Dashboard2.php"> <div class="SubNavigasi ">Home</div> </a>
			<a href="Dashboard1SudahLogin.php"> <div class="SubNavigasi">Modul</div> </a>
			<a href="LevelCourse.php"> <div class="SubNavigasi">Kelas</div> </a>
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

    <main class="Video">
        <section class="KotakVideo" style="border: none; background-color: none;   height: 97px;">
            <div class="KontenVideo" style=" justify-content: left;">
                <a href="Dashboard2TentorAdmin.php"> <i class="fa-solid fa-arrow-left fa-2x"></i> </a>
            </div>
            <div class="KontenVideo" style="margin-left: 30%; margin-right: 30%; font-size: 35px; font-weight: 600;">
                Materi Video
            </div>
            <div class="KontenVideo">

            </div>
        </section>


        <?php 
            $link = "";
            $LihatVideoMateri = "SELECT * FROM video_materi WHERE nama_kelas = '$AsalWebsite' and materi_no = '$MateriNo'";
            $eksekusiLihatVideoMateri = mysqli_query($apaya, $LihatVideoMateri);
            
            while ($ListVideo = mysqli_fetch_array($eksekusiLihatVideoMateri)) {
                $link = $ListVideo['link_materi'];
            }
        ?>
        
        <section class="KotakVideo" >
            <iframe width="100%" <?php echo $link;?> ></iframe>
        </section>

        <section class="KotakVideo" style=" background-color: none; height: 97px;">
            
            <?php 
                
            if ($AsalWebsite == 'Elementary') {
                
            ?>

            <form action="VideoEditByTentorAdminProses.php" method="post">
                <?php 
                    if ($MateriNo == 1) { ?>
                        <input type="hidden" name="MateriNo" value="1">
                    <?php } 
                    else if ($MateriNo == 2) { ?>
                        <input type="hidden" name="MateriNo" value="2">
                    <?php } 
                    else if ($MateriNo == 3) { ?>
                        <input type="hidden" name="MateriNo" value="3">
                    <?php }
                    else if ($MateriNo == 4) { ?>
                        <input type="hidden" name="MateriNo" value="4">
                    <?php }
                    else if ($MateriNo == 5) { ?>
                        <input type="hidden" name="MateriNo" value="2">
                    <?php } ?>

    
                
                <input type="hidden" name="AsalWebsite" value="Elementary">
                <input type="text" name="VideoYoutube" placeholder="Letakkan link disini" required>
                <input type="submit" name="" class="TombolSimpanVideo" value="simpan">
            </form>

            <?php } ?>

            <?php 
                
                if ($AsalWebsite == 'Intermediate') {

            ?>

            <form action="VideoEditByTentorAdminProses.php" method="post">

                <?php 
                    if ($MateriNo == 1) { ?>
                        <input type="hidden" name="MateriNo" value="1">
                    <?php } 
                    else if ($MateriNo == 2) { ?>
                        <input type="hidden" name="MateriNo" value="2">
                    <?php } 
                    else if ($MateriNo == 3) { ?>
                        <input type="hidden" name="MateriNo" value="3">
                    <?php }
                    else if ($MateriNo == 4) { ?>
                        <input type="hidden" name="MateriNo" value="4">
                    <?php }
                    else if ($MateriNo == 5) { ?>
                        <input type="hidden" name="MateriNo" value="2">
                    <?php } ?>        

                <input type="hidden" name="AsalWebsite" value="Intermediate">
                <input type="text" name="VideoYoutube" placeholder="Letakkkan link disini" required>
                <input type="submit" name="" class="TombolSimpanVideo" value="simpan">
            </form>

            <?php  } ?>

            <?php 
                if ($AsalWebsite == 'Advanced') {

            ?>

            <form action="VideoEditByTentorAdminProses.php" method="post">

                <?php 
                    if ($MateriNo == 1) { ?>
                        <input type="hidden" name="MateriNo" value="1">
                    <?php } 
                    else if ($MateriNo == 2) { ?>
                        <input type="hidden" name="MateriNo" value="2">
                    <?php } 
                    else if ($MateriNo == 3) { ?>
                        <input type="hidden" name="MateriNo" value="3">
                    <?php }
                    else if ($MateriNo == 4) { ?>
                        <input type="hidden" name="MateriNo" value="4">
                    <?php }
                    else if ($MateriNo == 5) { ?>
                        <input type="hidden" name="MateriNo" value="2">
                    <?php } ?>

                <input type="hidden" name="AsalWebsite" value="Advanced">
                <input type="text" name="VideoYoutube" placeholder="Letakkkan link disini" required>
                <input type="submit" name="" class="TombolSimpanVideo" value="simpan">
            </form>

            <?php }  ?>

        </section>
    </main>

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
        <div class="FooterCopyright">
            <i class="fa-regular fa-copyright"></i>
            2022 IEC
        </div>
    </footer>

</body>
<script src="HasilNilai.js"></script>
</html>