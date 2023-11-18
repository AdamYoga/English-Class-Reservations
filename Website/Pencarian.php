<?php 
    include 'Koneksi.php';

    if (isset($_POST['submit'])) {

        $cari = $_POST['Cari'];
        preg_match('/modul/', $cari, $cekTypo1, PREG_OFFSET_CAPTURE);
        preg_match('/kelas/', $cari, $cekTypo2, PREG_OFFSET_CAPTURE);
        
        if ($cekTypo1 == true) {
            $pesan = "UPDATE `pesanerror_pencarian` SET `Pesan`= 'Get Ready for Class!' WHERE id = '1' ";
            $eksekusiPesan = mysqli_query($apaya, $pesan);
            header("location:Dashboard1Modul.php");
        }

        else if ($cekTypo2 == true) {
            $pesan = "UPDATE `pesanerror_pencarian` SET `Pesan`= 'Get Ready for Class!' WHERE id = '1' ";
            $eksekusiPesan = mysqli_query($apaya, $pesan);
            header("location:Dashboard1Kelas.php");
        }

        else if ($cekTypo1 != true) {
            $asalwebsite = $_POST['AsalWebsite'];
            
            $pesan = "UPDATE `pesanerror_pencarian` SET `Pesan`=' Coba modul atau kelas ' WHERE id = '1' ";
            $eksekusiPesan = mysqli_query($apaya, $pesan);
            
            if ($asalwebsite == 'Dashboard1') {
                header("location:Dashboard1.php");
            }
            else if ($asalwebsite == 'Dashboard1Modul') {
                header("location:Dashboard1Modul.php");
            }
            else if ($asalwebsite == 'Dashboard1Kelas') {
                header("location:Dashboard1Kelas.php");
            }
            else if ($asalwebsite == 'Registration') {
                header("location:Registration_Page1.php");
            }
        }

        else if ($cekTypo2 != true) {
            $pesan = "UPDATE `pesanerror_pencarian` SET `Pesan`=' Coba modul atau kelas ' WHERE id = '1' ";
            $eksekusiPesan = mysqli_query($apaya, $pesan);
            
            if ($asalwebsite == 'Dashboard1') {
                header("location:Dashboard1.php");
            }
            else if ($asalwebsite == 'Dashboard1Modul') {
                header("location:Dashboard1Modul.php");
            }
            else if ($asalwebsite == 'Dashboard1Kelas') {
                header("location:Dashboard1Kelas.php");
            }
            else if ($asalwebsite == 'Registration') {
                header("location:Registration_Page1.php");
            }
        }
    }

    

?>