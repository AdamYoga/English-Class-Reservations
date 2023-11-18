<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
		<title>Dashboard 1</title>
		<link href="Dashboard1Kelas.css" rel="stylesheet" type="text/css">
		<script src="https://kit.fontawesome.com/1e12127065.js" crossorigin="anonymous"></script>
		
	</head>

<body>
	<main class="Dashboard1" id="Dashboard">

        <div class="BGLogin1">
            <div class="TitleLogin1">
                Masuk
            </div>

                <i class="fa-solid fa-xmark fa-2x CloseLogin1"></i>
                <div class="GarisBawahHeaderLogin1"></div>
                
                <form action="DashboardLogin.php" method="post"> <!-- action="DashboardLogin.php" -->
                
                    <input type="hidden" name="asalWebsite" value="Dashboard1Kelas">
                    <input type="email" class="BGLLogin1 FormEmailLogin1" placeholder="E-mail" name="KirimEmail" required>
                    <input type="password" class="FormPasswordLogin1" placeholder="Password" name="KirimPassword" required>
                    <div class="TombolLupaPasswordLogin1" style="color: red;">
						<?php 
							include 'Koneksi.php';
							
							$pesanError = "";
							$bacaError = "SELECT * FROM `pesan_error_umum`";
							$eksekusiBacaError = mysqli_query($apaya, $bacaError);

							while ($listError = mysqli_fetch_array($eksekusiBacaError)) {
								$pesanError = $listError['pesanerrorumum'];
							}

							echo $pesanError;
						?>
					</div>
                    <button type="submit">
                        <div class="TombolMasukLogin1">
                            Masuk
                        </div>
                    </button>
                </form>
                

                <div class="TulisanSudahPunyaAkunLogin1">Belum Punya Akun? &nbsp; 
                    <a href=""><div class="TombolDaftarLogin1">Daftar</div></a>
                </div>
		</div>

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

                    <input type="text" class="HeaderFormText" name="Cari" style="font-size: 20px;" placeholder="<?php echo $simpanPesan; ?>" required>
                    <input type="hidden" name="AsalWebsite" value="Dashboard1Kelas">
                    <!-- <i class="fa-solid fa-magnifying-glass GambarKacaLup"></i> -->
                    <button type="submit" class="GambarKacaLup" name="submit">
                        <i class="fa-solid fa-magnifying-glass "></i>
                    </button>
                </form>
				</div>
				<div class="Akun" id="coba">
					<div class="Akun">Masuk</div>
				</div>
				<div class="Akun Jarak">
                    <a href="Registration_Page1.php">
                        <div class="Akun HeaderTombolDaftar">Daftar</div>
                    </a>
				</div>
			</section>
		</header>
			
		<section class="Pembatas" id="HalamanUtama"></section>

        <section>
            <div class="TitleLevel" id="Kelas">
                Level
            </div>

            <div class="TataLetakKartu">
                <div class="Kartu KartuLevelPalingKiri KartuLevel">
                    <div class="Level">Elementary</div>
                    <div class="Level LevelHarga">Rp100.000</div>
                    <div class="Level LevelBagianDeskripsi">Program untuk pemula yang ingin melatih kemampuan bahasa Inggris dari dasar.
                        Menggunakan bahasa inggris sederhana dalam kehidupan sehari-hari.
                        Mampu menulis pesan dan karangan singkat dalam bahasa inggris.</div>
                    <form action="PaymentProses.php" method="post">
                        <input type="hidden" name="Beli" class="Kartu KontenModul TombolModul" value="BeliElementary">
                        <input type="submit" class="Kartu KontenModul TombolModul" value="Daftar">
                    </form>
                </div>

                <div class="Kartu KartuLevel">
                    <div class="Level">Intermediate</div>
                    <div class="Level LevelHarga">Rp150.000</div>
                    <div class="Level LevelBagianDeskripsi">Memahami dan mengerti cara berbicara, membaca, dan menulis dalam bahasa Inggris di lingkungan sekitar. 
                        Mampu berdiskusi tentang topik umum dan menulis karangan singkat tanpa persiapan sebelumnya.</div>
                    <form action="PaymentProses.php" method="post">
                        <input type="hidden" name="Beli" class="Kartu KontenModul TombolModul" value="BeliIntermediate">
                        <input type="submit" class="Kartu KontenModul TombolModul" value="Daftar">
                    </form>
                </div>

                <div class="Kartu KartuLevel">
                    <div class="Level">Advanced</div>
                    <div class="Level LevelHarga">Rp200.000</div>
                    <div class="Level LevelBagianDeskripsi">Memahami percakapan Inggris yang rumit dan literatur panjang tanpa panduan.
                        Mampu menulis karangan yang panjang dan berstruktur baik. </div>
                    <form action="PaymentProses.php" method="post">
                        <input type="hidden" name="Beli" class="Kartu KontenModul TombolModul" value="BeliAdvanced">
                        <input type="submit" class="Kartu KontenModul TombolModul" value="Daftar">
                    </form>
                </div>
            </div>
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
					Home
					Modul
					Kelas
					About Us
				</div>
			</div>
		<img src="../Bahan/Garis_Footer.png" class="GarisBawahFooter">
	</footer>
    </main>
</body>
<script src="Dashboard1Kelas.js"></script>
</html>