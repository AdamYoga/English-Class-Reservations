<?php
	include 'Koneksi.php';

	



		// $lihat = mysqli_num_rows($cek or die (mysqli_error()));

		

		// $query = mysqli_query($apaya, $masukin);

		// echo mysqli_num_rows($coba);

		// echo strpos($email, "gmail.com");

		$namaSertif = $_POST["NamaSertif"];

        $cariIdStudent = "SELECT * FROM login_student WHERE status_login = 'Baru saja'";
		$eksekusicariIdStudent = mysqli_query($apaya, $cariIdStudent);
		$simpanNamaStudent = "";
                        
		if (mysqli_num_rows($eksekusicariIdStudent) > 0) {
			while ($LihatAkunStudent = mysqli_fetch_array($eksekusicariIdStudent)) {
				$simpanNamaStudent = $LihatAkunStudent["nama_student"];
			}
		}

        $masukinProfilStudent = "UPDATE `sertifikat_student` SET `namasertifikat_student`='$namaSertif' WHERE nama_student = '$simpanNamaStudent'";
        $eksekusiAkunStudent = mysqli_query($apaya, $masukinProfilStudent);
        // header("location:Dashboard2.html");
		echo $simpanNamaStudent;
		echo "</br>";
		echo "sudah bisa";
        

?>

