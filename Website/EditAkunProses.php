<?php
	include 'Koneksi.php';

	



		// $lihat = mysqli_num_rows($cek or die (mysqli_error()));

		

		// $query = mysqli_query($apaya, $masukin);

		// echo mysqli_num_rows($coba);

		// echo strpos($email, "gmail.com");

        
        $nama = $_POST["Nama"];
        $telepon = $_POST["Telepon"];
        $kota = $_POST["Kota"];
        $tempatLahir = $_POST["TempatLahir"];
        $tanggalLahir = $_POST["TanggalLahir"];
        $pendidikanTerakhir = $_POST["PendidikanTerakhir"];
        $perusahaan = $_POST["Perusahaan"];
        $pekerjaan = $_POST["Pekerjaan"];

        


        $cariIdStudent = "SELECT * FROM login_student WHERE status_login = 'Baru saja'";
        $eksekusicariIdStudent = mysqli_query($apaya, $cariIdStudent);

        $simpanAkunStudent = "";
        while ($LihatAkunStudent = mysqli_fetch_array($eksekusicariIdStudent)) {
            $simpanAkunStudent = $LihatAkunStudent["nama_student"];
        }

        $Profil = "SELECT * FROM student WHERE nama_student = '$simpanAkunStudent'";
        $EksekusiProfil = mysqli_query($apaya, $Profil);

        if (mysqli_fetch_array($EksekusiProfil) == 0) {
            $masukinProfilStudent = "INSERT INTO `student`(`id`, `nama_student`, `namalengkap_student`, `kota_student`, `kodepos_student`, `provinsi_student`, `notelp_student`, `tgllahir_student`, `tempat_lahir`, `pendidikan_terakhir`, `perusahaan`, `pekerjaan`, `status_profil`) VALUES ('','$simpanAkunStudent','','','','','','','','','','','')";
            $eksekusiAkunStudent = mysqli_query($apaya, $masukinProfilStudent);

            $masukinProfilStudent = "UPDATE `student` SET `namalengkap_student`='$nama',`kota_student`='$kota',`kodepos_student`= 12344, `provinsi_student`='Jawa Timur',`notelp_student`='$telepon',`tgllahir_student`='$tanggalLahir',`tempat_lahir`='$tempatLahir',`pendidikan_terakhir`='$pendidikanTerakhir',`perusahaan`='$perusahaan',`pekerjaan`='$pekerjaan' WHERE nama_student = '$simpanAkunStudent'";
            $eksekusiAkunStudent = mysqli_query($apaya, $masukinProfilStudent);
                
        }

        else {
            $masukinProfilStudent = "UPDATE `student` SET `namalengkap_student`='$nama',`kota_student`='$kota',`kodepos_student`= 12344, `provinsi_student`='Jawa Timur',`notelp_student`='$telepon',`tgllahir_student`='$tanggalLahir',`tempat_lahir`='$tempatLahir',`pendidikan_terakhir`='$pendidikanTerakhir',`perusahaan`='$perusahaan',`pekerjaan`='$pekerjaan' WHERE nama_student = '$simpanAkunStudent'";
            $eksekusiAkunStudent = mysqli_query($apaya, $masukinProfilStudent);
        }


        $Profil = "SELECT * FROM student WHERE nama_student = '$simpanAkunStudent'";
        $EksekusiProfil = mysqli_query($apaya, $Profil);

        $Nama = "";
        $Kota = "";
        $KodePos = "";
        $Provinsi = "";
        $Telp = "";
        $TglLahir = "";
        $TempatLahir = "";
        $PendidikanTerakhir = "";
        $Perusahaan = "";
        $Pekerjaan = "";

        while ($LihatProfilStudent = mysqli_fetch_array($EksekusiProfil)) {
            $Nama = $LihatProfilStudent["nama_student"];
            $Kota = $LihatProfilStudent["kota_student"];
            $KodePos = $LihatProfilStudent["kodepos_student"];
            $Provinsi = $LihatProfilStudent["provinsi_student"];
            $Telp = $LihatProfilStudent["notelp_student"];
            $TglLahir = $LihatProfilStudent["tgllahir_student"];
            $TempatLahir = $LihatProfilStudent["tempat_lahir"];
            $PendidikanTerakhir = $LihatProfilStudent["pendidikan_terakhir"];
            $Perusahaan = $LihatProfilStudent["perusahaan"];
            $Pekerjaan = $LihatProfilStudent["pekerjaan"];
        }





        // cek lengkap tidaknya data pada database


        while ($LihatAkunStudent = mysqli_fetch_array($eksekusicariIdStudent)) {
            $simpanAkunStudent = $LihatAkunStudent["nama_student"];
        }


        

        if (empty($Nama) or empty($Kota) or empty($KodePos) or empty($Provinsi) or empty($Telp) or empty($TglLahir) or empty($TempatLahir) or empty($PendidikanTerakhir) or empty($Perusahaan) or empty($Pekerjaan) ) {
            $UpdateStatus = "UPDATE `student` SET `status_profil`='Belum Lengkap' WHERE nama_student = '$simpanAkunStudent'";
            $EksekusiUpdateStatus = mysqli_query($apaya, $UpdateStatus);
        }
        else {
            $UpdateStatus = "UPDATE `student` SET `status_profil`='Sudah Lengkap' WHERE nama_student = '$simpanAkunStudent'";
            $EksekusiUpdateStatus = mysqli_query($apaya, $UpdateStatus);
        }


        
        // $cariProfil = "SELECT * FROM `student` ORDER BY `id` DESC LIMIT 1;";
        // $EksekusiCariProfil = mysqli_query($apaya, $cariProfil);

        // $ID = "";



        // while ($LihatProfil = mysqli_fetch_array($EksekusiCariProfil)) {
        //     $ID = $LihatProfil["id"];
        // }


        // if (empty($nama) or empty($telepon) or empty($kota) or empty($tempatLahir) or empty($tanggalLahir) or empty($pendidikanTerakhir) or empty($perusahaan) or empty($pekerjaan) ) {
        //     $UpdateStatus = "UPDATE `student` SET `status_profil`='Belum Lengkap' WHERE id = $ID";
        //     $EksekusiUpdateStatus = mysqli_query($apaya, $UpdateStatus);
        // }

        // else {
        //     $UpdateStatus = "UPDATE `student` SET `status_profil`='Sudah Lengkap' WHERE id = $ID";
        //     $EksekusiUpdateStatus = mysqli_query($apaya, $UpdateStatus);
        // }

        header("location:Dashboard2.php");
        

?>