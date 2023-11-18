<?php
	include 'Koneksi.php';

	
		$email = $_POST["KirimEmail"];
		$password = $_POST["KirimPassword"];
		$asalWebsite = $_POST["asalWebsite"];

		// $masukin = "INSERT INTO `login_student`(`id_student`, `email_student`, `password_student`) VALUES ('','$email','$password')";

		$student = "SELECT * FROM login_student WHERE email_student = '$email'";
		$tentor = "SELECT * FROM login_tentor WHERE email_tentor = '$email'";
		$admin = "SELECT * FROM login_admin WHERE email_admin = '$email'";



		// $lihat = mysqli_num_rows($cek or die (mysqli_error()));

		

		// $query = mysqli_query($apaya, $masukin);

		// echo mysqli_num_rows($coba);

		// echo strpos($email, "gmail.com");

		preg_match('/@gmail.com/', $email, $cekStudent, PREG_OFFSET_CAPTURE);

		preg_match('/@isTentor.com/', $email, $cekTentor, PREG_OFFSET_CAPTURE);

		preg_match('/@isAdmin.com/', $email, $cekAdmin, PREG_OFFSET_CAPTURE);

		$cariStudent = mysqli_query($apaya, $student);
		$cariTentor = mysqli_query($apaya, $tentor);
		$cariAdmin = mysqli_query($apaya, $admin);
		
		while ($LihatPasswordStudent = mysqli_fetch_array($cariStudent)) {
			$simpanPasswordStudent = $LihatPasswordStudent["password_student"];
		}

		$simpanPasswordStudent = $simpanPasswordStudent;

		while ($LihatPasswordTentor = mysqli_fetch_array($cariTentor)) {
			$simpanPasswordTentor = $LihatPasswordTentor["password_tentor"];
		}

		// $simpanPasswordTentor = $simpanPasswordTentor;

		while ($LihatPasswordAdmin = mysqli_fetch_array($cariAdmin)) {
			$simpanPasswordAdmin = $LihatPasswordAdmin["password_admin"];
		}

		// $simpanPasswordAdmin = $simpanPasswordAdmin;


		$pesanError = "SELECT * FROM `pesan_error_umum`";
		$eksekusiPesanError = mysqli_query($apaya, $pesanError);


		if ($cekStudent == true) {
			if( mysqli_num_rows($cariStudent) == '1' ) {
				
				

				if ($password == $simpanPasswordStudent) {
					$cekStatus = "SELECT * FROM login_student WHERE status_login = 'Baru saja'";
					$eksekusiCekStatus = mysqli_query($apaya, $cekStatus);

					while ($LihatEmailStudent = mysqli_fetch_array($eksekusiCekStatus)) {
						$simpanEmailStudent = $LihatEmailStudent["email_student"];
					}

					// $simpanEmailStudent = $simpanEmailStudent;

					if( mysqli_num_rows($eksekusiCekStatus) == '1' ) {
						$statusLogin = "UPDATE `login_student` SET `status_login`= '' WHERE email_student = '$simpanEmailStudent'";
						$eksekusiStatusLogin = mysqli_query($apaya, $statusLogin);
						
					}

					
					$statusLogin = "UPDATE `login_student` SET `status_login`= 'Baru saja' WHERE email_student = '$email'";
					$eksekusiStatusLogin = mysqli_query($apaya, $statusLogin);

					if (mysqli_fetch_array($eksekusiPesanError) > 0 ) {
						$hapusError = "DELETE FROM `pesan_error_umum` WHERE status_error = 'Perlu Diperbaiki'";
						$eksekusiHapusError = mysqli_query($apaya, $hapusError);
					}

					header("location:Dashboard2.php");
				}

				else {
					if (mysqli_fetch_array($eksekusiPesanError) > 0 ) {
						$hapusError = "DELETE FROM `pesan_error_umum` WHERE status_error = 'Perlu Diperbaiki'";
						$eksekusiHapusError = mysqli_query($apaya, $hapusError);
					}

					$tambahPesanError = "INSERT INTO `pesan_error_umum`(`id`, `pesanerrorumum`, `status_error`) VALUES ('','password salah, cek kembali', 'Perlu Diperbaiki')";
					$eksekusiTambahPesanError = mysqli_query($apaya, $tambahPesanError);
					if ($asalWebsite == 'Dashboard1') {
						header("location:Dashboard1.php");
					}

					else if ($asalWebsite == 'Dashboard1Modul') {
						header("location:Dashboard1Modul.php");
					}

					else if ($asalWebsite == 'Dashboard1Kelas') {
						header("location:Dashboard1Kelas.php");
					}

					
				}
			}
			else {
				if (mysqli_fetch_array($eksekusiPesanError) > 0 ) {
					$hapusError = "DELETE FROM `pesan_error_umum` WHERE status_error = 'Perlu Diperbaiki'";
					$eksekusiHapusError = mysqli_query($apaya, $hapusError);
				}

				$tambahPesanError = "INSERT INTO `pesan_error_umum`(`id`, `pesanerrorumum`, `status_error`) VALUES ('','Tidak dapat menemukan akun, cek kembali', 'Perlu Diperbaiki')";
				$eksekusiTambahPesanError = mysqli_query($apaya, $tambahPesanError);
				if ($asalWebsite == 'Dashboard1') {
					header("location:Dashboard1.php");
				}

				else if ($asalWebsite == 'Dashboard1Modul') {
					header("location:Dashboard1Modul.php");
				}

				else if ($asalWebsite == 'Dashboard1Kelas') {
					header("location:Dashboard1Kelas.php");
				}

				
				
				
			} 
		}

		elseif ($cekTentor == true) {
			if( mysqli_num_rows($cariTentor) == '1' ) {

				if ($password == $simpanPasswordTentor) {

					if (mysqli_fetch_array($eksekusiPesanError) > 0 ) {
						$hapusError = "DELETE FROM `pesan_error_umum` WHERE status_error = 'Perlu Diperbaiki'";
						$eksekusiHapusError = mysqli_query($apaya, $hapusError);
					}

					header("location:Dashboard2TentorAdmin.php");
				}

				else {
					if (mysqli_fetch_array($eksekusiPesanError) > 0 ) {
						$hapusError = "DELETE FROM `pesan_error_umum` WHERE status_error = 'Perlu Diperbaiki'";
						$eksekusiHapusError = mysqli_query($apaya, $hapusError);
					}

					$tambahPesanError = "INSERT INTO `pesan_error_umum`(`id`, `pesanerrorumum`, `status_error`) VALUES ('','password salah', 'Perlu Diperbaiki')";
					$eksekusiTambahPesanError = mysqli_query($apaya, $tambahPesanError);
					if ($asalWebsite == 'Dashboard1') {
						header("location:Dashboard1.php");
					}

					else if ($asalWebsite == 'Dashboard1Modul') {
						header("location:Dashboard1Modul.php");
					}

					else if ($asalWebsite == 'Dashboard1Kelas') {
						header("location:Dashboard1Kelas.php");
					}

					
				}
			}
		}

		elseif ($cekAdmin == true) {
			if( mysqli_num_rows($cariAdmin) == '1' ) {

				if ($password == $simpanPasswordAdmin) {

					if (mysqli_fetch_array($eksekusiPesanError) > 0 ) {
						$hapusError = "DELETE FROM `pesan_error_umum` WHERE status_error = 'Perlu Diperbaiki'";
						$eksekusiHapusError = mysqli_query($apaya, $hapusError);
					}


					header("location:Dashboard2TentorAdmin.php");
					 
				}

				else {

					if (mysqli_fetch_array($eksekusiPesanError) > 0 ) {
						$hapusError = "DELETE FROM `pesan_error_umum` WHERE status_error = 'Perlu Diperbaiki'";
						$eksekusiHapusError = mysqli_query($apaya, $hapusError);
					}

					$tambahPesanError = "INSERT INTO `pesan_error_umum`(`id`, `pesanerrorumum`, `status_error`) VALUES ('','password salah', 'Perlu Diperbaiki')";
					$eksekusiTambahPesanError = mysqli_query($apaya, $tambahPesanError);
					if ($asalWebsite == 'Dashboard1') {
						header("location:Dashboard1.php");
					}

					else if ($asalWebsite == 'Dashboard1Modul') {
						header("location:Dashboard1Modul.php");
					}

					else if ($asalWebsite == 'Dashboard1Kelas') {
						header("location:Dashboard1Kelas.php");
					}

					
				}
			}
		}

		else {

			if (mysqli_fetch_array($eksekusiPesanError) > 0 ) {
				$hapusError = "DELETE FROM `pesan_error_umum` WHERE status_error = 'Perlu Diperbaiki'";
				$eksekusiHapusError = mysqli_query($apaya, $hapusError);
			}

			$tambahPesanError = "INSERT INTO `pesan_error_umum`(`id`, `pesanerrorumum`, `status_error`) VALUES ('','Cek penulisan akun anda', 'Perlu Diperbaiki')";
			$eksekusiTambahPesanError = mysqli_query($apaya, $tambahPesanError);
			if ($asalWebsite == 'Dashboard1') {
				header("location:Dashboard1.php");
			}

			else if ($asalWebsite == 'Dashboard1Modul') {
				header("location:Dashboard1Modul.php");
			}

			else if ($asalWebsite == 'Dashboard1Kelas') {
				header("location:Dashboard1Kelas.php");
			}


		}
?>

