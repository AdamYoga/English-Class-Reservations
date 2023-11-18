<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard 2</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Dashboard2.css">
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
                    <i class="fa-solid fa-house"></i>
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
        <a href="Dashboard1.php" class="TempatLogoHeader LogoHeader">
		    <img src="../Bahan/Logo_SetelahLogin.png" width="750" height="640" alt="" class="TempatLogoHeader LogoHeader"/>
		</a>
        <nav class="Navigasi">
			<div class="SubNavigasi SubNavigasiFokus">Home</div>
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

    <main class="Dashboard2BG">
        <div class="Dashboard2StatusLangganan">
            <div class="Dashboard2PerBagianStatusLangganan">
                <div class="Dashboard2BagianKonten">
                    <div class="Dashboard2Sambutan">
                        Selamat Datang <?php echo $simpanNamaStudent.'!'; ?>
                    </div>
                    <div class="Dashboard2Sambutan Dashboard2KataMotivasi">
                        Semoga aktivitas belajarmu Menyenangkan
                    </div>
                </div>
            </div>

            <div class="Dashboard2PerBagianStatusLangganan Dashboard2BagianLangganan">
                <div class="Dashboard2BagianKonten Dashboard2BagianDalamLangganan">
                    <div class="Dashboard2Sambutan Dashboard2titletabelstatuslangganan">
                        Status Langganan
                    </div>
                </div>
                <div class="Dashboard2BagianKonten Dashboard2BagianDalamLangganan Dashboard2TempatLangganan">
                    <div class="Dashboard2TabelLangganan">
                        <i class="fa-solid fa-folder-minus fa-3x"></i>
                        <?php 
                        
                            $CekPembelian = "SELECT * FROM pesanan WHERE nama_pembeli = '$simpanNamaStudent' ";
                            $eksekusiCekPembelian = mysqli_query($apaya, $CekPembelian);
                            
                            $banyakKelas = 0;
                            while ($listkelas = mysqli_fetch_array($eksekusiCekPembelian)) {
                                
                                if ($listkelas['nama_produk'] == 'Kelas Intermediate') {
                                    $banyakKelas += 1;
                                }
                                if ($listkelas['nama_produk'] == 'Kelas Advanced') {
                                    $banyakKelas += 1;
                                }
                                if ($listkelas['nama_produk'] == 'Kelas Elementary') {
                                    $banyakKelas += 1;
                                }
                                
                                
                            }
                            
                            if (empty($banyakKelas)) {
                        ?>

                        <div class="Dashboard2NotifikasiBelumLangganan">Anda Belum Berlangganan di IEC. Pilih level langganan anda</div>
                        <?php } if (!empty($banyakKelas)) { ?>
                            
                        <div class="Dashboard2NotifikasiBelumLangganan">Anda dapat melihat riwayat pembelian anda di menu akun</div> 
                        <?php } ?>

                        <a href="LevelCourse.php" style="text-decoration-line: none;">
                            <div class="Dashboard2PilihLevelLangganan">Pilih Level Langganan</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="Dashboard2Aktivitas">
            <div class="Dashboard2PerBagianAktivitas">
                <div class="Dashboard2TabelAktivitas">
                    <div class="Dashboard2TitleAktivitas">
                        Aktivitas Belajar
                    </div>
                    <div class="Dashboard2AktivitasGarisBawahHeader"></div>
                    
                        <?php 
                            
                            if ($banyakKelas != 0) {
                        ?>
                            <div class="Dashboard2TataLetakAktivitasIsiKosong" style="display: grid; width: 100%;">
                                <div style="display: flex; justify-content: center; align-items: center; width: auto; height: auto; font-size: 40px;">
                                    Sebanyak <?php echo $banyakKelas;?> kelas telah anda ikuti <br>
                                    
                                </div>

                                <div style="display: flex; justify-content: center; align-items: center; width: auto; height: auto; font-size: 40px;">
                                    
                                    <p style="font-size:20px;">Cek menu akun untuk lebih lengkapnya</p>
                                </div>
                            </div>
                        <?php } ?>

                        
                    

                    
                        <?php 
                            if ($banyakKelas == 0) {
                        ?>
                            <div class="Dashboard2TataLetakAktivitasIsiKosong">
                                <img src="../Bahan/Isi_Kosong.png" class="Dashboard2AktivitasIsiKosong">
                                <div class="Dashboard2AktivitasKonten">
                                    <div class="Dashboard2AktivitasTombolBelajar Dashboard2PesanBelumLangganan">Anda belum belajar apapun disini, kelas yang anda pilih akan muncul disini 
                                    </div>
                                    <a href="LevelCourse.php" class="Dashboard2AktivitasTombolBelajar">
                                        <div class="Dashboard2AktivitasTombolBelajar">Mulai Belajar</div>
                                    </a>
                                </div> 
                            </div>
                        <?php } ?>
                    
                </div>
            </div>
        </div>
    </main>
    <footer class="FooterSetelahLogin">
        <div class="FooterGarisBawah"></div>
        <div class="FooterCopyright">
            <i class="fa-regular fa-copyright"></i>
            2022 IEC
        </div>
    </footer>

</body>
<script src="Dashboard2.js"></script>
</html>