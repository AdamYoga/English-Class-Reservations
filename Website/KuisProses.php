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

    $nama = "";
    $lihatNama = "SELECT * FROM login_student WHERE status_login = 'Baru saja' ";
    $eksekusiLihatNama = mysqli_query($apaya, $lihatNama);

    while ($CariNama = mysqli_fetch_array($eksekusiLihatNama)) {
        $nama = $CariNama['nama_student'];
    }

    if ($jawaban1 == 'Jawaban Benar') {
        $nilai += 20;
        $jawabanBenar ++;
    }

    if ($jawaban2 == 'Jawaban Benar') {
        $nilai += 20;
        $jawabanBenar ++;
    }

    if ($jawaban3 == 'Jawaban Benar') {
        $nilai += 20;
        $jawabanBenar ++;
    }

    if ($jawaban4 == 'Jawaban Benar') {
        $nilai += 20;
        $jawabanBenar ++;
    }

    if ($jawaban5 == 'Jawaban Benar') {
        $nilai += 20;
        $jawabanBenar ++;
    }


    $statusKuis = "";
    if ($nilai >= 80) {
        $statusKuis = "Lulus";
    }

    else {
        $statusKuis = "Belum lulus";
    }

    $cekKuis = "SELECT * FROM `kuis` WHERE nama = '$nama' and nama_kuis = '$asalWebsite'";
    $eksekusiCekKuis = mysqli_query($apaya, $cekKuis);

    $hapusBaruSaja = "UPDATE `kuis` SET `waktu_pengerjaan`='' WHERE waktu_pengerjaan = 'Baru saja'";
    $eksekusiHapusBaruSaja = mysqli_query($apaya, $hapusBaruSaja);

    if (mysqli_fetch_array($eksekusiCekKuis) > 0) {
        $updateKeKuis = "UPDATE `kuis` SET `tgl_kuis`='$tanggal',`jawaban_benar`='$jawabanBenar',`nilai`='$nilai',`status_kuis`='$statusKuis', `waktu_pengerjaan`='Baru saja' WHERE `nama` = '$nama' ";
        $eksekusiUpdateKeKuis = mysqli_query($apaya, $updateKeKuis); 
        header('location: HasilNilaiKuis.php');
    }

    else {
        $masukKeKuis = "INSERT INTO `kuis`(`id_kuis`, `nama`,`nama_kuis`, `tgl_kuis`, `jawaban_benar`, `nilai`, `status_kuis`, `waktu_pengerjaan`) VALUES ('', '$nama','$asalWebsite','$tanggal','$jawabanBenar','$nilai', '$statusKuis', 'Baru saja')";
        $eksekusiMasukKeKuis = mysqli_query($apaya, $masukKeKuis);
        header('location: HasilNilaiKuis.php');
    }

?>