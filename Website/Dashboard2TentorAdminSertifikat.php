<?php 

    include 'Koneksi.php';
    if (!empty($_POST['MetodeEksekusi'])) {
        $Metode = $_POST['MetodeEksekusi'];
        $Student = $_POST['Student'];
        $File = $_FILES['gambar']['name'];
        $LokasiFile = '../Bahan/'.$File;

        
        if ($Metode == 'Tambah') {
            $EditSertif = "UPDATE `sertifikat_student` SET `softfile`='$LokasiFile' WHERE nama_student = '$Student' ";
            $eksekusiEditSertif = mysqli_query($apaya, $EditSertif);
            header('location: Dashboard2TentorAdmin.php');
        }
        else if ($Metode == 'Hapus') {
            $EditSertif = "UPDATE `sertifikat_student` SET `softfile`='' WHERE nama_student = '$Student' ";
            $eksekusiEditSertif = mysqli_query($apaya, $EditSertif);
            header('location: Dashboard2TentorAdmin.php');
        }
        


    }

?>