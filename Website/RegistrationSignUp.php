<?php
	include 'Koneksi.php';

	



		// $lihat = mysqli_num_rows($cek or die (mysqli_error()));

		

		// $query = mysqli_query($apaya, $masukin);

		// echo mysqli_num_rows($coba);

		// echo strpos($email, "gmail.com");

        
        $nama = $_POST["Nama"];
		$email = $_POST["Email"];
		$password = $_POST["Password"];

		// $masukin = "INSERT INTO `login_student`(`id_student`, `email_student`, `password_student`) VALUES ('','$email','$password')";

		$student = "SELECT * FROM login_student WHERE email_student = '$email'";

		preg_match('/@gmail.com/', $email, $cekStudent, PREG_OFFSET_CAPTURE);

		$cariStudent = mysqli_query($apaya, $student);
        
        
        $simpanEmailStudent = "";
        while ($LihatEmailStudent = mysqli_fetch_array($cariStudent)) {
			$simpanEmailStudent = $LihatEmailStudent["email_student"];
            $simpanNamaStudent = $LihatEmailStudent["nama_student"];
		}
        

        if ($cekStudent == true) {
            if ($email == $simpanEmailStudent) {
            }
            else {
                $masukinAkunStudent = "INSERT INTO `login_student`(`id_student`, `nama_student`, `email_student`, `password_student`) VALUES ('', '$nama', '$email','$password')";
                $eksekusiAkunStudent = mysqli_query($apaya, $masukinAkunStudent);

                $masukinSertif = "INSERT INTO `sertifikat_student`(`id`, `nama_student`, `namasertifikat_student`) VALUES ('','$nama','$nama')";
                $eksekusiSertif = mysqli_query($apaya, $masukinSertif);

                $masukinProfilStudent = "INSERT INTO `student`(`id`, `nama_student`, `namalengkap_student`, `kota_student`, `kodepos_student`, `provinsi_student`, `notelp_student`, `tgllahir_student`, `tempat_lahir`, `pendidikan_terakhir`, `perusahaan`, `pekerjaan`, `status_profil`) VALUES ('','$nama','','','','','','','','','','','')";
                $eksekusiProfil = mysqli_query($apaya, $masukinProfilStudent);
                
                header("location:Dashboard1.php");
            }
        }
        else {
            
        }

?>