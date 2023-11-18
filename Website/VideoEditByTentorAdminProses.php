<?php 
    include 'Koneksi.php';

    if (!empty($_POST['VideoYoutube']) and !empty($_POST['AsalWebsite']) and !empty($_POST['MateriNo'])) {
        $linkYoutube = $_POST['VideoYoutube'];
        $AsalWebsite = $_POST['AsalWebsite'];
        $NoMateri = $_POST['MateriNo'];

        $CekKetersediaan = "SELECT * FROM video_materi WHERE nama_kelas = '$AsalWebsite' and materi_no = '$NoMateri'";
        $eksekusiCekKetersediaan = mysqli_query($apaya, $CekKetersediaan);

        if ($AsalWebsite == 'Elementary') {

            if (mysqli_fetch_array($eksekusiCekKetersediaan) == 0) {
                $uploadLinkYoutube = "INSERT INTO `video_materi`(`id`, `nama_kelas`, `link_materi`, `materi_no`) VALUES ('','$AsalWebsite','$linkYoutube', '$NoMateri')";
                $eksekusiUploadLinkYoutube = mysqli_query($apaya, $uploadLinkYoutube);
                header("location:Dashboard2TentorAdmin.php");
            }
            else {
                $updateLinkYoutube = "UPDATE `video_materi` SET `link_materi`='$linkYoutube' WHERE nama_kelas = '$AsalWebsite' and materi_no = '$NoMateri'";
                $eksekusiUpdateLinkYoutube = mysqli_query($apaya, $updateLinkYoutube);
                header("location:Dashboard2TentorAdmin.php");
            }
        }

        else if ($AsalWebsite == 'Intermediate') {
            if (mysqli_fetch_array($eksekusiCekKetersediaan) == 0) {
                $uploadLinkYoutube = "INSERT INTO `video_materi`(`id`, `nama_kelas`, `link_materi`, `materi_no`) VALUES ('','$AsalWebsite','$linkYoutube', '$NoMateri')";
                $eksekusiUploadLinkYoutube = mysqli_query($apaya, $uploadLinkYoutube);
                header("location:Dashboard2TentorAdmin.php");
            }
            else {
                $updateLinkYoutube = "UPDATE `video_materi` SET `link_materi`='$linkYoutube' WHERE nama_kelas = '$AsalWebsite' and materi_no = '$NoMateri'";
                $eksekusiUpdateLinkYoutube = mysqli_query($apaya, $updateLinkYoutube);
                header("location:Dashboard2TentorAdmin.php");
            }
        }

        else if ($AsalWebsite == 'Advanced') {
            if (mysqli_fetch_array($eksekusiCekKetersediaan) == 0) {
                $uploadLinkYoutube = "INSERT INTO `video_materi`(`id`, `nama_kelas`, `link_materi`, `materi_no`) VALUES ('','$AsalWebsite','$linkYoutube', '$NoMateri')";
                $eksekusiUploadLinkYoutube = mysqli_query($apaya, $uploadLinkYoutube);
                header("location:Dashboard2TentorAdmin.php");
            }
            else {
                $updateLinkYoutube = "UPDATE `video_materi` SET `link_materi`='$linkYoutube' WHERE nama_kelas = '$AsalWebsite' and materi_no = '$NoMateri'";
                $eksekusiUpdateLinkYoutube = mysqli_query($apaya, $updateLinkYoutube);
                header("location:Dashboard2TentorAdmin.php");
            }
        }
    }

?>