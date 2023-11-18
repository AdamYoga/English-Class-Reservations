<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced</title>
    <link rel="stylesheet" href="Advanced.css">
    <script src="https://kit.fontawesome.com/1e12127065.js" crossorigin="anonymous"></script>

</head>
<body>

    <main class="SubMateri">
        <div class="SubMateriBagian SubMateriTitle" style="width: 95%;">
            Sub Materi
            <i class="fa-solid fa-xmark" style="margin-left: 90%;" id="CloseSubMateri"></i>
        </div>
        
        <hr style="border-color: #89C2D9; width: 98%; margin-top: -10px;">
        <div class="SubMateriBagian">
            <form action="VideoStudent.php" method="post">
                <input type="hidden" name="dariWebsite" value="Advanced">
                <input type="hidden" name="MateriNo" value="1">

                <button type="submit"> <img src="../Bahan/Materi.png" class="SubMateriSubBagian"> </button>
                <div class="SubMateriSubBagian" style="width: 70px;">Materi 1</div>
            </form>

            <form action="VideoStudent.php" method="post">
                <input type="hidden" name="dariWebsite" value="Advanced">
                <input type="hidden" name="MateriNo" value="2">

                <button type="submit"> <img src="../Bahan/Materi.png" class="SubMateriSubBagian"> </button>
                <div class="SubMateriSubBagian" style="width: 70px;">Materi 2</div>
            </form>

            <form action="VideoStudent.php" method="post">
                <input type="hidden" name="dariWebsite" value="Advanced">
                <input type="hidden" name="MateriNo" value="3">

                <button type="submit"> <img src="../Bahan/Materi.png" class="SubMateriSubBagian"> </button>
                <div class="SubMateriSubBagian" style="width: 70px;">Materi 3</div>
            </form>

            <form action="VideoStudent.php" method="post">
                <input type="hidden" name="dariWebsite" value="Advanced">
                <input type="hidden" name="MateriNo" value="4">

                <button type="submit"> <img src="../Bahan/Materi.png" class="SubMateriSubBagian"> </button>
                <div class="SubMateriSubBagian" style="width: 70px;">Materi 4</div>
            </form>

            <form action="VideoStudent.php" method="post">
                <input type="hidden" name="dariWebsite" value="Advanced">
                <input type="hidden" name="MateriNo" value="5">

                <button type="submit"> <img src="../Bahan/Materi.png" class="SubMateriSubBagian"> </button>
                <div class="SubMateriSubBagian" style="width: 70px;">Materi 5</div>
            </form>

            <form action="Kuis.php" method="post"> 
                <input type="hidden" name="AsalWebsite" value="Advanced">
                <button type="submit"> <img src="../Bahan/Materi.png" class="SubMateriSubBagian"> </button>
                <div class="SubMateriSubBagian" style="width: 70px;">Kuis</div>
            </form>
        </div>
    </main>


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
			<a href="LevelCourse.php"> <div class="SubNavigasi SubNavigasiFokus">Kelas</div> </a>
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

    
    <main class="Advanced">
        <div class="AdvancedPerBagian Satu">
            <img src="../Bahan/Kelas_Advanced.png" class="AdvancedCoverBuku">
            <div class="AdvancedKontenSatu">
                <div class="AdvancedSubKontenSatu">
                    <?php
                        include 'Koneksi.php';

                        $cariIdStudent = "SELECT * FROM login_student WHERE status_login = 'Baru saja'";
                        $eksekusicariIdStudent = mysqli_query($apaya, $cariIdStudent);
                        
                        $simpanNamaStudent = "";

                        if (mysqli_num_rows($eksekusicariIdStudent) > 0) {
                            while ($LihatAkunStudent = mysqli_fetch_array($eksekusicariIdStudent)) {
                                $simpanNamaStudent = $LihatAkunStudent["nama_student"];
                            }
                            
                            
                            // untuk Debug
                            // echo $simpanNamaStudent;
                            
                            // echo "Kelas$simpanIDStudent";
                            
                        }

                        $cariIdStudent = "SELECT * FROM pesanan WHERE nama_pembeli = '$simpanNamaStudent'";
                        $eksekusicariIdStudent = mysqli_query($apaya, $cariIdStudent);

                        $Status = "";
                        $StatusTombol = "";
                        $simpanAkunStudent = "";
                        while ($LihatAkunStudent = mysqli_fetch_array($eksekusicariIdStudent)) {
                            if ($LihatAkunStudent["nama_produk"] == 'Kelas Advanced' ) {
                                $simpanAkunStudent = $LihatAkunStudent["nama_produk"];
                            }
                        }

                        if ($simpanAkunStudent == 'Kelas Advanced' ) {
                            $Status = 'Anda Sudah Berlangganan';
                            $StatusTombol = "";
                        ?>
                            Advanced <p style="margin-left: 10px; font-size: 20px; width: 500px;"> &nbsp  <?php echo '(', $Status, ')' ; ?></p>
                        
                        <?php
                        }

                        
                        else {
                            $Status = 'Anda Belum Berlangganan';
                            $StatusTombol = 'Beli Langganan';
                        

                        
                    ?>
                    
                    Advanced <p style="margin-left: 10px; font-size: 20px; width: 500px;"> &nbsp  <?php echo '(', $Status, ')' ; ?></p>
                    
                    <form action="PaymentProses.php" method="post" style="margin-left: 15%;" >
                        <input type="hidden" name='Beli' value="BeliAdvanced">
                        <input type="submit" value="<?php echo $StatusTombol; ?>" class="ElementaryKontenSatuTombolBerlangganan" style="font-size: 40px; border: none; text-align: center; color: white;">
                    </form>

                    <?php 
                        }
                    ?>
                </div>
                <div class="AdvancedSubKontenSatu" style="font-size: 25px;">
                    <img src="../Bahan/Tingkat_Susah.png" width="40px">&nbsp;
                    Level - Lanjut
                </div>
                <div class="AdvancedSubKontenSatu" style="font-size: 25px; width: auto;">
                    Pelajari kemampuan dasar agar mampu berkomunikasi menggunakan bahasa inggris dalam situasi sehari-hari dengan tata bahasa dan kata-kata yang sederhana.
                </div>
            </div>
        </div>
        <div class="AdvancedPerBagian Dua" style="font-size: 35px;">
            Hal Yang Didapat
        </div>
        <div class="AdvancedPerBagian Tiga">
            <div class="AdvancedSubKontenTiga">
                <?php 

                    $SimpanStatusSertif = "";
                    $CekSertif = "SELECT * FROM sertifikat_student WHERE nama_student = '$simpanNamaStudent'";
                    $eksekusiCekSertif = mysqli_query($apaya, $CekSertif);    
                    while ($LihatSertif = mysqli_fetch_array($eksekusiCekSertif)) {
                        $SimpanStatusSertif = $LihatSertif['softfile'];
                    }


                    if (!empty($SimpanStatusSertif)) { ?>
                        <a href="<?php echo $SimpanStatusSertif ;?>" download=""> <img src="../Bahan/Sertifikat.png" class="AdvancedSubKontenSubTiga"> </a>
                    <?php } if (empty($SimpanStatusSertif)) {?>
                        <img src="../Bahan/Sertifikat.png" class="AdvancedSubKontenSubTiga"> <?php } ?>

                    <div class="AdvancedSubKontenSubTiga AdvancedSubKontenSubTigaDeskripsi">
                    <div class="AdvancedSubKontenSubTigaSubDeskripsi" style="font-weight: 600; font-size: 20px;">Sertifikat</div>
                    <div class="AdvancedSubKontenSubTigaSubDeskripsi" style="font-weight: 400; font-size: 17px;">Dapatkan sertifikat setelah menyelsaikan kelas ini .</div>
                </div>
            </div>
            
            <?php  if ($simpanAkunStudent == 'Kelas Advanced') { ?>
                    
                    <form action="Kuis.php" method="post">
                        <input type="hidden" name="AsalWebsite" value="Advanced">  
                        <button type="submit" class="AdvancedSubKontenTiga">
                            <img src="../Bahan/Kuis.png" class="AdvancedSubKontenSubTiga">
                            <div class="AdvancedSubKontenSubTiga AdvancedSubKontenSubTigaDeskripsi">
                                <div class="AdvancedSubKontenSubTigaSubDeskripsi" style="font-weight: 600; font-size: 20px;">Kuis</div>
                                <div class="AdvancedSubKontenSubTigaSubDeskripsi" style="font-weight: 400; font-size: 17px;">Kuis pilihan ganda membantu memahami materi yang dipelajari.</div>
                            </div>
                        </button>
                    </form>

                <?php } ?>

                <?php if ($simpanAkunStudent != 'Kelas Advanced') {?>

                    <div type="submit" class="AdvancedSubKontenTiga">
                        <img src="../Bahan/Kuis.png" class="AdvancedSubKontenSubTiga">
                        <div class="AdvancedSubKontenSubTiga AdvancedSubKontenSubTigaDeskripsi">
                            <div class="AdvancedSubKontenSubTigaSubDeskripsi" style="font-weight: 600; font-size: 20px;">Kuis</div>
                            <div class="AdvancedSubKontenSubTigaSubDeskripsi" style="font-weight: 400; font-size: 17px;">Kuis pilihan ganda membantu memahami materi yang dipelajari.</div>
                        </div>
                    </div>
            

                <?php } ?>

                <?php  if ($simpanAkunStudent == 'Kelas Advanced') { ?>
                    
                    <form class="AdvancedSubKontenTiga" action="FinalExam.php" method="post" >
                        <input type="hidden" name="AsalWebsite" value="Advanced" >  
                        <button type="submit" class="AdvancedSubKontenTiga" style="border: none;">
                            <img src="../Bahan/Kuis.png" class="AdvancedSubKontenSubTiga">
                            <div class="AdvancedSubKontenSubTiga AdvancedSubKontenSubTigaDeskripsi">
                                <div class="AdvancedSubKontenSubTigaSubDeskripsi" style="font-weight: 600; font-size: 20px;">Ujian</div>
                                <div class="AdvancedSubKontenSubTigaSubDeskripsi" style="font-weight: 400; font-size: 17px;">Kuis pilihan ganda membantu memahami materi yang dipelajari.</div>
                            </div>
                        </button>
                    </form>

                <?php } ?>


                <?php  if ($simpanAkunStudent != 'Kelas Advanced') { ?>

                    <div class="AdvancedSubKontenTiga">
                        <img src="../Bahan/Ujian.png" class="AdvancedSubKontenSubTiga">
                        <div class="AdvancedSubKontenSubTiga AdvancedSubKontenSubTigaDeskripsi">
                            <div class="AdvancedSubKontenSubTigaSubDeskripsi" style="font-weight: 600; font-size: 20px;">Ujian</div>
                            <div class="AdvancedSubKontenSubTigaSubDeskripsi" style="font-weight: 400; font-size: 17px;">Kuis pilihan ganda membantu memahami materi yang dipelajari.</div>
                        </div>
                    </div>

                <?php } ?>
        </div>
        <div class="AdvancedPerBagian Empat">
            <i style="font-style: normal; font-weight: 600; font-size: 35px;">Silabus</i>
            <i style="font-style: normal; font-weight: 400; font-size: 17px;">Materi yang dipelajari 
                pada kelas ini.</i>
        </div>
        <div class="AdvancedPerBagian Lima">
            <div class="AdvancedSubBagianLima">
                <i style="font-weight: 600; font-size: 30px; font-style: normal;">Lesson 1</i>
                <i style="font-weight: 300; font-size: 20px; font-style: normal;">Deskripsi 
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi 
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi 
                    Deskripsi </i>
            </div>
            <div class="AdvancedSubBagianLima AdvancedSubBagianLimaRataBawah">
                <img src="../Bahan/Materi.png" class="AdvancedSubBagianSubLima" id="TombolBukaSubMateri1">
                <div class="AdvancedSubBagianSubLima" style="width: 128px;">5 Sub Materi</div>
                <img src="../Bahan/Kuis_SubMateri.png" class="AdvancedSubBagianSubLima">
                <div class="AdvancedSubBagianSubLima" style="width: auto;">1 kuis Sub/Materi</div>
            </div>
        </div>
        <div class="AdvancedPerBagian Lima">
            <div class="AdvancedSubBagianLima">
                <i style="font-weight: 600; font-size: 30px; font-style: normal;">Lesson 2</i>
                <i style="font-weight: 300; font-size: 20px; font-style: normal;">Deskripsi 
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi 
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi 
                    Deskripsi </i>
            </div>
            <div class="AdvancedSubBagianLima AdvancedSubBagianLimaRataBawah">
                <img src="../Bahan/Materi.png" class="AdvancedSubBagianSubLima" id="TombolBukaSubMateri2">
                <div class="AdvancedSubBagianSubLima" style="width: 128px;">5 Sub Materi</div>
                <img src="../Bahan/Kuis_SubMateri.png" class="AdvancedSubBagianSubLima">
                <div class="AdvancedSubBagianSubLima" style="width: auto;">1 kuis Sub/Materi</div>
            </div>
        </div>
        <div class="AdvancedPerBagian Lima">
            <div class="AdvancedSubBagianLima">
                <i style="font-weight: 600; font-size: 30px; font-style: normal;">Lesson 3</i>
                <i style="font-weight: 300; font-size: 20px; font-style: normal;">Deskripsi 
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi 
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi 
                    Deskripsi </i>
            </div>
            <div class="AdvancedSubBagianLima AdvancedSubBagianLimaRataBawah">
                <img src="../Bahan/Materi.png" class="AdvancedSubBagianSubLima" id="TombolBukaSubMateri3">
                <div class="AdvancedSubBagianSubLima" style="width: 128px;">5 Sub Materi</div>
                <img src="../Bahan/Kuis_SubMateri.png" class="AdvancedSubBagianSubLima">
                <div class="AdvancedSubBagianSubLima" style="width: auto;">1 kuis Sub/Materi</div>
            </div>
        </div>
        <div class="AdvancedPerBagian Lima">
            <div class="AdvancedSubBagianLima">
                <i style="font-weight: 600; font-size: 30px; font-style: normal;">Lesson 4</i>
                <i style="font-weight: 300; font-size: 20px; font-style: normal;">Deskripsi 
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi 
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi 
                    Deskripsi </i>
            </div>
            <div class="AdvancedSubBagianLima AdvancedSubBagianLimaRataBawah">
                <img src="../Bahan/Materi.png" class="AdvancedSubBagianSubLima" id="TombolBukaSubMateri4">
                <div class="AdvancedSubBagianSubLima" style="width: 128px;">5 Sub Materi</div>
                <img src="../Bahan/Kuis_SubMateri.png" class="AdvancedSubBagianSubLima">
                <div class="AdvancedSubBagianSubLima" style="width: auto;">1 kuis Sub/Materi</div>
            </div>
        </div>
        <div class="AdvancedPerBagian Lima">
            <div class="AdvancedSubBagianLima">
                <i style="font-weight: 600; font-size: 30px; font-style: normal;">Lesson 5</i>
                <i style="font-weight: 300; font-size: 20px; font-style: normal;">Deskripsi 
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi 
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi 
                    Deskripsi </i>
            </div>
            <div class="AdvancedSubBagianLima AdvancedSubBagianLimaRataBawah">
                <img src="../Bahan/Materi.png" class="AdvancedSubBagianSubLima" id="TombolBukaSubMateri5">
                <div class="AdvancedSubBagianSubLima" style="width: 128px;">5 Sub Materi</div>
                <img src="../Bahan/Kuis_SubMateri.png" class="AdvancedSubBagianSubLima">
                <div class="AdvancedSubBagianSubLima" style="width: auto;">1 kuis Sub/Materi</div>
            </div>
        </div>
        <div class="AdvancedPerBagian Lima">
            <div class="AdvancedSubBagianLima">
                <i style="font-weight: 600; font-size: 30px; font-style: normal;">Lesson 6</i>
                <i style="font-weight: 300; font-size: 20px; font-style: normal;">Deskripsi 
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi 
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi 
                    Deskripsi </i>
            </div>
            <div class="AdvancedSubBagianLima AdvancedSubBagianLimaRataBawah">
                <img src="../Bahan/Materi.png" class="AdvancedSubBagianSubLima" id="TombolBukaSubMateri6">
                <div class="AdvancedSubBagianSubLima" style="width: 128px;">5 Sub Materi</div>
                <img src="../Bahan/Kuis_SubMateri.png" class="AdvancedSubBagianSubLima">
                <div class="AdvancedSubBagianSubLima" style="width: auto;">1 kuis Sub/Materi</div>
            </div>
        </div>
        
        <div class="AdvancedPerBagian Lima">
            <div class="AdvancedSubBagianLima">
                <i style="font-weight: 600; font-size: 30px; font-style: normal;">Lesson 7</i>
                <i style="font-weight: 300; font-size: 20px; font-style: normal;">Deskripsi 
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi 
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi 
                    Deskripsi </i>
            </div>
            <div class="AdvancedSubBagianLima AdvancedSubBagianLimaRataBawah">
                <img src="../Bahan/Materi.png" class="AdvancedSubBagianSubLima" id="TombolBukaSubMateri7">
                <div class="AdvancedSubBagianSubLima" style="width: 128px;">5 Sub Materi</div>
                <img src="../Bahan/Kuis_SubMateri.png" class="AdvancedSubBagianSubLima">
                <div class="AdvancedSubBagianSubLima" style="width: auto;">1 kuis Sub/Materi</div>
            </div>
        </div>
        <div class="AdvancedPerBagian Lima">
            <div class="AdvancedSubBagianLima">
                <i style="font-weight: 600; font-size: 30px; font-style: normal;">Lesson 8</i>
                <i style="font-weight: 300; font-size: 20px; font-style: normal;">Deskripsi 
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi 
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi 
                    Deskripsi </i>
            </div>
            <div class="AdvancedSubBagianLima AdvancedSubBagianLimaRataBawah">
                <img src="../Bahan/Materi.png" class="AdvancedSubBagianSubLima" id="TombolBukaSubMateri8">
                <div class="AdvancedSubBagianSubLima" style="width: 128px;">5 Sub Materi</div>
                <img src="../Bahan/Kuis_SubMateri.png" class="AdvancedSubBagianSubLima">
                <div class="AdvancedSubBagianSubLima" style="width: auto;">1 kuis Sub/Materi</div>
            </div>
        </div>
        <div class="AdvancedPerBagian Lima">
            <div class="AdvancedSubBagianLima">
                <i style="font-weight: 600; font-size: 30px; font-style: normal;">Lesson 9</i>
                <i style="font-weight: 300; font-size: 20px; font-style: normal;">Deskripsi 
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi 
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi 
                    Deskripsi </i>
            </div>
            <div class="AdvancedSubBagianLima AdvancedSubBagianLimaRataBawah">
                <img src="../Bahan/Materi.png" class="AdvancedSubBagianSubLima" id="TombolBukaSubMateri9">
                <div class="AdvancedSubBagianSubLima" style="width: 128px;">5 Sub Materi</div>
                <img src="../Bahan/Kuis_SubMateri.png" class="AdvancedSubBagianSubLima">
                <div class="AdvancedSubBagianSubLima" style="width: auto;">1 kuis Sub/Materi</div>
            </div>
        </div>
        <div class="AdvancedPerBagian Lima">
            <div class="AdvancedSubBagianLima">
                <i style="font-weight: 600; font-size: 30px; font-style: normal;">Lesson 10</i>
                <i style="font-weight: 300; font-size: 20px; font-style: normal;">Deskripsi 
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi 
                    Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi 
                    Deskripsi </i>
            </div>
            <div class="AdvancedSubBagianLima AdvancedSubBagianLimaRataBawah">
                <img src="../Bahan/Materi.png" class="AdvancedSubBagianSubLima" id="TombolBukaSubMateri10">
                <div class="AdvancedSubBagianSubLima" style="width: 128px;">5 Sub Materi</div>
                <img src="../Bahan/Kuis_SubMateri.png" class="AdvancedSubBagianSubLima">
                <div class="AdvancedSubBagianSubLima" style="width: auto;">1 kuis Sub/Materi</div>
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
<script src="Advanced.js"></script>


</html>