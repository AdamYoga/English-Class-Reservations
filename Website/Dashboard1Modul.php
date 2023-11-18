<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
		<title>Dashboard 1</title>
		<link href="Dashboard1Modul.css" rel="stylesheet" type="text/css">
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

					<input type="hidden" name="asalWebsite" value="Dashboard1Modul">
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
					<input type="hidden" name="AsalWebsite" value="Dashboard1Modul">
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
            <div class="Modul TitleModul" id="Modul">
                Modul
            </div>
                <div class="TataLetakKartu">
                    <div class="Kartu KartuModulPalingKiri">
                        <img src="../Bahan/TOEFL.png" width="1000" height="4000" alt="" class="Kartu GambarModul"/>
                        <div class="Kartu KontenModul">TOEFL</div>
                        <div class="Kartu KontenModulHarga">Rp250.000</div>
                        <img src="../Bahan/Bintang_Modul.png" class="Kartu KontenModul">
                        <a href="">
                            <form action="PaymentProses.php" method="post">
                                <input type="hidden" name="Beli" class="Kartu KontenModul TombolModul" value="BeliTOEFL">
                                <input type="submit" class="Kartu KontenModul TombolModul" value="Beli">
                            </form>
                        </a>
                    </div>

                    <div class="Kartu ">
                        <img src="../Bahan/TOEIC.png" width="1000" height="4000" alt="" class="Kartu GambarModul"/>
                        <div class="Kartu KontenModul">TOEIC</div>
                        <div class="Kartu KontenModulHarga">Rp550.000</div>
                        <img src="../Bahan/Bintang_Modul.png" class="Kartu KontenModul">
                        <a href="">
                            <form action="PaymentProses.php" method="post">
                                <input type="hidden" name="Beli" class="Kartu KontenModul TombolModul" value="BeliTOEIC">
                                <input type="submit" class="Kartu KontenModul TombolModul" value="Beli">
                            </form>
                        </a>
                    </div>
                </div>
            </section>
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
					Home
					Modul
					Kelas
					About Us
				</div>
			</div>
		<img src="../Bahan/Garis_Footer.png" class="GarisBawahFooter">
	</footer>

</body>
<script src="Dashboard1Modul.js"></script>
</html>
