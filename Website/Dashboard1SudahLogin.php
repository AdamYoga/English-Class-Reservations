<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
		<title>Dashboard 1</title>
		<link href="Dashboard1SudahLogin.css" rel="stylesheet" type="text/css">
		<script src="https://kit.fontawesome.com/1e12127065.js" crossorigin="anonymous"></script>
		
	</head>

<body>
	<main class="Dashboard1" id="Dashboard">

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
				<div class="SubNavigasi SubNavigasiFokus">Modul</div>
				<a href="LevelCourse.php"><div class="SubNavigasi">Kelas</div> </a>
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
                        <?php 
						
								$cekPembelian = "SELECT * FROM `pesanan` WHERE nama_pembeli = '$simpanNamaStudent' and nama_produk = 'TOEFL'";
								$eksekusiCekPembelian = mysqli_query($apaya, $cekPembelian);
								if (empty(mysqli_num_rows($eksekusiCekPembelian))) {
						
						?>

						<form action="PaymentProses.php" method="post">
							<input type="hidden" name="Beli" class="Kartu KontenModul TombolModul" value="BeliTOEFL">
							<input type="submit" class="Kartu KontenModul TombolModul" value="Beli">
						</form>

						<?php } if (!empty(mysqli_num_rows($eksekusiCekPembelian))) { ?>

						<a href="../Bahan/asking-giving-opinion-English 1.pdf" download=""> <div class="Kartu KontenModul TombolModul">Download</div> </a>

						<?php } ?>
                        
                    </div>

                    <div class="Kartu ">
                        <img src="../Bahan/TOEIC.png" width="1000" height="4000" alt="" class="Kartu GambarModul"/>
                        <div class="Kartu KontenModul">TOEIC</div>
                        <div class="Kartu KontenModulHarga">Rp550.000</div>
                        <img src="../Bahan/Bintang_Modul.png" class="Kartu KontenModul">
                        <?php 
						
								$cekPembelian = "SELECT * FROM `pesanan` WHERE nama_pembeli = '$simpanNamaStudent' and nama_produk = 'TOEIC'";
								$eksekusiCekPembelian = mysqli_query($apaya, $cekPembelian);
								if (empty(mysqli_num_rows($eksekusiCekPembelian))) {
						
						?>
						<form action="PaymentProses.php" method="post">
							<input type="hidden" name="Beli" class="Kartu KontenModul TombolModul" value="BeliTOEIC">
							<input type="submit" class="Kartu KontenModul TombolModul" value="Beli">
						</form>

						<?php } if (!empty(mysqli_num_rows($eksekusiCekPembelian))) { ?>

						<a href="../Bahan/asking-giving-opinion-English 1.pdf" download=""> <div class="Kartu KontenModul TombolModul">Download</div> </a>

                        <?php } ?>
                    </div>
                </div>
            </section>
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
						<a href="#HalamanUtama">Home</a><br>
						<a href="#Modul">Modul</a><br>
						<a href="#Kelas">Kelas</a><br>
						<a href="#TentangKami">About Us</a><br>
					</div>
				</div>
			<img src="../Bahan/Garis_Footer.png" class="GarisBawahFooter">
		</footer>
	</main>	
</body>

<script src="Dashboard1SudahLogin.js"></script>

</html>
