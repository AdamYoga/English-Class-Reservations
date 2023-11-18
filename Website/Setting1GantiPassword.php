<?php
	include 'Koneksi.php';
        echo "<br/>";

        $cariPasswordStudent = "SELECT * FROM login_student WHERE status_login = 'Baru saja'";
        $eksekusiCariPasswordStudent = mysqli_query($apaya, $cariPasswordStudent);

        $simpanPasswordStudent = "";
        while ($LihatPasswordStudent = mysqli_fetch_array($eksekusiCariPasswordStudent)) {
            $simpanPasswordStudent = $LihatPasswordStudent["password_student"];
        }

        if (empty($_POST["Password"]) and empty($_POST["KonfirmasiPassword"])) {
            echo "Isi bagian Password dan Konfirmasi Password";
        }

        else if (empty($_POST["Password"])) {
            echo "Isi bagian Password";
        }

        else if (empty($_POST["KonfirmasiPassword"])){
            echo "Isi bagian Konfirmasi Password";
        }


        else {
            $konfirmasiPassword = $_POST["KonfirmasiPassword"];
            $password = $_POST["Password"];

            $gantiPassword = "UPDATE `login_student` SET `password_student`= '$password' WHERE password_student = '$simpanPasswordStudent'";
            $eksekusiGantiPassword = mysqli_query($apaya, $gantiPassword);

            if ($eksekusiGantiPassword) {
                echo "Password uda diganti";
            }
            else {
                echo "Password belum diganti";
            }
        }
?>