<?php
	include 'Koneksi.php';
        echo "<br/>";

        if (isset($_POST["Email"])) {
            $email = $_POST["Email"];
            
            $cariIdStudent = "SELECT * FROM login_student WHERE status_login = 'Baru saja'";
            $eksekusicariIdStudent = mysqli_query($apaya, $cariIdStudent);

            while ($LihatAkunStudent = mysqli_fetch_array($eksekusicariIdStudent)) {
                $simpanAkunStudent = $LihatAkunStudent["email_student"];
            }

            $simpanAkunStudent = $simpanAkunStudent;

            preg_match('/@gmail.com/', $email, $cekStudent, PREG_OFFSET_CAPTURE);


            if ($cekStudent == true) {
                $gantiAkun = "UPDATE `login_student` SET `email_student`='$email' WHERE email_student = '$simpanAkunStudent'";
                $eksekusiGantiAkun = mysqli_query($apaya, $gantiAkun);
                header("location:Dashboard2.php");
                echo "<br/>";
                echo "Akun Sudah ada";
            }

            else {
                echo "Cek email anda, Gunakan '@gmail.com'";
            }
        }

		else {
            echo "Isi bagian email!";
        }		
?>