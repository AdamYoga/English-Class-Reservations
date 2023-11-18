<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai</title>
    <link rel="stylesheet" href="HasilNilai.css">
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
			<div class="SubNavigasi SubNavigasiFokus">Kelas</div>
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

    <main class="HasilNilai">
        <div class="RapiKotakTabel" style="height: 10px;  font-size: 35px;">Hasil Nilai</div>
        <div class="RapiKotakTabel">
            <div class="KotakTabel">
                <div class="RapiDalamKonten">
                    <p style="font-size: 30px; font-weight: 600;">Total Soal</p>
                    <div class="KontenDalamTabel">10</div>
                </div>
            </div>
            <div class="KotakTabel">
                <?php 
                    include 'Koneksi.php';

                    $lihatNilai = "";
                    $lihatJawabanBenar = "";
                    $lihatStatusKuis = "";
                    
                    $kuis = "SELECT * FROM final_exam WHERE waktu_pengerjaan = 'Baru saja'";
                    $eksekusiKuis = mysqli_query($apaya, $kuis);
                    
                    while ($lihatKuis = mysqli_fetch_array($eksekusiKuis)) {
                        $lihatNilai = $lihatKuis['nilai'];
                        $lihatJawabanBenar = $lihatKuis['jawaban_benar'];
                        $lihatStatusKuis = $lihatKuis['status_exam'];
                    }

                    
                ?>

                <div class="RapiDalamKonten">
                    <p style="width: auto; font-size: 30px; font-weight: 600;">Jawaban Benar</p>
                    <div class="KontenDalamTabel"><?php echo $lihatJawabanBenar;?></div>
                </div>
            </div>
            <div class="KotakTabel" style="width: 80%;">
                <div class="RapiDalamKonten" style="width: 600px; flex-wrap: nowrap;">
                    <p style="font-size: 30px; font-weight: 600;">Nilai :</p>
                    <div class="KontenDalamTabel"><?php echo $lihatNilai. '  ('.$lihatStatusKuis.')';?></div>
                </div>
            </div>
        </div>
        
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