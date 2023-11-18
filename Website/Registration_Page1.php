<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registration Page</title>
        <link rel="stylesheet" type="text/css" href="Registration_Page1.css">
        <script src="https://kit.fontawesome.com/1e12127065.js" crossorigin="anonymous"></script>
    </head>

    <header class="header">
		<a href="Dashboard1.php">    
            <img src="../Bahan/Logo.png" width="750" height="640" alt="" class="TempatLogoHeader LogoHeader"/>
        </a>
        <nav class="Navigasi">
			<div class="SubNavigasi">Home</div>
			<div class="SubNavigasi">Modul</div>
			<div class="SubNavigasi">Kelas</div>
			<div class="SubNavigasi">About Us</div>
		</nav>
		<section class="SearchDanAkun">
			<div class="FrameNya">
                <form method="post" action="Pencarian.php">

                    <?php
                    
                        include 'Koneksi.php';

                        $simpanPesan = "";
                        $bacaPesan = "SELECT * FROM `pesanerror_pencarian`";
                        $eksekusiBacaPesan = mysqli_query($apaya, $bacaPesan);

                        while ($CariBacaPesan = mysqli_fetch_array($eksekusiBacaPesan)) {
                            $simpanPesan = $CariBacaPesan["Pesan"];
                        }
                    ?>

                    <input type="text" class="HeaderFormText" name="Cari" style="font-size: 20px;" placeholder="<?php echo $simpanPesan; ?>">
                    <!-- <i class="fa-solid fa-magnifying-glass GambarKacaLup"></i> -->
                    <input type="hidden" name="AsalWebsite" value="Registration">
                    <button type="submit" class="GambarKacaLup" name="submit">
                        <i class="fa-solid fa-magnifying-glass "></i>
                    </button>
                </form>
            </div>
			<div class="Akun">
                <a href="Dashboard1.php">
                    <div class="Akun">Masuk</div>
                </a>
            </div>
            <div class="Akun Jarak">
                <a href="">
                    <div class="Akun HeaderTombolDaftar">Daftar</div>
                </a>
            </div>
		</section>
	</header>

    <section class="Pembatas"></section>

    <section class="order" id="order">
        <h3><center> Daftar Akun IEC </center></h3>

        <form action="RegistrationSignUp.php" method="post">
            <div class="inputBox">
                <div class="input">
                    <span>Nama Lengkap</span>
                    <input type="text" placeholder="Nama Lengkap" name="Nama" required>
                    <p>Masukkan nama asli, nama akan digunakan untuk data sertifikat</p>
                </div>
            </div>

            <div class="inputBox">
                <div class="input">
                    <span>Email</span>
                    <input type="email" placeholder="Masukkan E-mail Baru" name="Email" required>
                    <p>Gunakan email aktif</p>
                </div>
            </div>

            <div class="inputBox">
                <div class="input">
                    <span>Password</span>
                    <input type="password" placeholder="Masukkan Password Baru" name="Password" required>
                    <p>Masukkan minimal 8 karakter dengan kombinasi huruf dan angka</p>
                </div>
                <input type="submit" value="Daftar" class="button">
                
                
            </div>
            <h5 class="RapikanTombolDaftarDanMasuk">Sudah punya akun? &nbsp; <a href="Dashboard1.php">Masuk Sekarang</a></h5>
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
</html>