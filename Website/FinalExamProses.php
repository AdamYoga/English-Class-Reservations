<?php 
    include 'Koneksi.php';

    $tanggal = date("d-m-y");
    $asalWebsite = $_POST['AsalWebsite'];
    $nilai = 0;
    $jawabanBenar = 0;
    $jawaban1 = $_POST['Jawaban1'];
    $jawaban2 = $_POST['Jawaban2'];
    $jawaban3 = $_POST['Jawaban3'];
    $jawaban4 = $_POST['Jawaban4'];
    $jawaban5 = $_POST['Jawaban5'];
    $jawaban6 = $_POST['Jawaban6'];
    $jawaban7 = $_POST['Jawaban7'];
    $jawaban8 = $_POST['Jawaban8'];
    $jawaban9 = $_POST['Jawaban9'];
    $jawaban10 = $_POST['Jawaban10'];

    $nama = "";
    $lihatNama = "SELECT * FROM login_student WHERE status_login = 'Baru saja' ";
    $eksekusiLihatNama = mysqli_query($apaya, $lihatNama);

    while ($CariNama = mysqli_fetch_array($eksekusiLihatNama)) {
        $nama = $CariNama['nama_student'];
    }

    if ($jawaban1 == 'Jawaban Benar') {
        $nilai += 10;
        $jawabanBenar ++;
    }

    if ($jawaban2 == 'Jawaban Benar') {
        $nilai += 10;
        $jawabanBenar ++;
    }

    if ($jawaban3 == 'Jawaban Benar') {
        $nilai += 10;
        $jawabanBenar ++;
    }

    if ($jawaban4 == 'Jawaban Benar') {
        $nilai += 10;
        $jawabanBenar ++;
    }

    if ($jawaban5 == 'Jawaban Benar') {
        $nilai += 10;
        $jawabanBenar ++;
    }

    if ($jawaban6 == 'Jawaban Benar') {
        $nilai += 10;
        $jawabanBenar ++;
    }

    if ($jawaban7 == 'Jawaban Benar') {
        $nilai += 10;
        $jawabanBenar ++;
    }

    if ($jawaban8 == 'Jawaban Benar') {
        $nilai += 10;
        $jawabanBenar ++;
    }

    if ($jawaban9 == 'Jawaban Benar') {
        $nilai += 10;
        $jawabanBenar ++;
    }

    if ($jawaban10 == 'Jawaban Benar') {
        $nilai += 10;
        $jawabanBenar ++;
    }


    $statusKuis = "";
    if ($nilai >= 80) {
        $statusKuis = "Lulus";
    }

    else {
        $statusKuis = "Belum lulus";
    }

    $cekKuis = "SELECT * FROM `final_exam` WHERE nama = '$nama' and nama_exam = '$asalWebsite'";
    $eksekusiCekKuis = mysqli_query($apaya, $cekKuis);

    if (mysqli_fetch_array($eksekusiCekKuis) > 0) {
        $hapusBaruSaja = "UPDATE `final_exam` SET `waktu_pengerjaan`='' WHERE waktu_pengerjaan = 'Baru saja'";
        $eksekusiHapusBaruSaja = mysqli_query($apaya, $hapusBaruSaja);

        $updateKeKuis = "UPDATE `final_exam` SET `tgl_exam`='$tanggal',`jawaban_benar`='$jawabanBenar',`nilai`='$nilai',`status_exam`='$statusKuis', `waktu_pengerjaan`='Baru saja' WHERE `nama` = '$nama' ";
        $eksekusiUpdateKeKuis = mysqli_query($apaya, $updateKeKuis); 
        header('location: HasilNilaiExam.php');
    }

    else {
        $masukKeKuis = "INSERT INTO `final_exam`(`id_exam`, `nama`,`nama_exam`, `tgl_exam`, `jawaban_benar`, `nilai`, `status_exam`, `waktu_pengerjaan`) VALUES ('', '$nama','$asalWebsite','$tanggal','$jawabanBenar','$nilai', '$statusKuis', 'Baru saja')";
        $eksekusiMasukKeKuis = mysqli_query($apaya, $masukKeKuis);
        header('location: HasilNilaiExam.php');
    }

?>