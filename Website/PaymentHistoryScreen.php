<html>
    <head>
        <title>Payment History Screen</title>
        <link rel="stylesheet" type="text/css" href="PaymentHistoryScreen.css">
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
                            
                            $simpanNamaStudent = "";
                            $simpanEmailStudent = "";
                            $simpanIDStudent = "";

                            if (mysqli_num_rows($eksekusicariIdStudent) > 0) {
                                while ($LihatAkunStudent = mysqli_fetch_array($eksekusicariIdStudent)) {
                                    $simpanNamaStudent = $LihatAkunStudent["nama_student"];
                                    $simpanEmailStudent = $LihatAkunStudent["email_student"];
                                    $simpanIDStudent = $LihatAkunStudent["id_student"];
                                }
                                
                                

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
                        
                            <i class="fa-solid fa-cart-shopping"></i>
                        
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
                <a href="LevelCourse.php"> <div class="SubNavigasi ">Kelas</div> </a>
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
        <div class="Konten">
            <h1>Riwayat Pembelian</h1>
            <table>
                <tr class="TulisanTebel">
                    <td>ID Produk</td>
                    <td>Nama Produk</td>
                    <td>Tanggal</td>
                    <td>Invoice</td>
                    <td>Total Bayar</td>
                    <td>Keterangan</td>
                </tr>
                <?php
                    include 'Koneksi.php';
                    $cariIdStudent = "SELECT * FROM pesanan WHERE nama_pembeli = '$simpanNamaStudent'";
                    $eksekusicariIdStudent = mysqli_query($apaya, $cariIdStudent);

                    while ($LihatAkunStudent = mysqli_fetch_array($eksekusicariIdStudent)) {
                    
                    

                ?>
                <tr>
                    
                    <td>
                        <?= $simpanAkunStudent = $LihatAkunStudent["id_pesanan"]; ?>
                    </td>
                    <td>
                        <?= $simpanAkunStudent = $LihatAkunStudent["nama_produk"]; ?>
                    </td>
                    <td>
                        <?= $simpanAkunStudent = $LihatAkunStudent["tgl_Pesanan"]; ?>
                    </td>
                    <td>
                        <?= $simpanAkunStudent = $LihatAkunStudent["invoice"]; ?>
                    </td>
                    <td>
                        <?= $simpanAkunStudent = $LihatAkunStudent["harga"]; ?>
                    </td>
                    <td>
                        <?= $simpanAkunStudent = $LihatAkunStudent["status_pembayaran"]; 
                        
                        ?>
                    </td>
                </tr>
                
                <?php 
                    } 
                ?>
            </table>
        </div>

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
    </body>
<script src="PaymentHistoryScreen.js"></script>
</html>