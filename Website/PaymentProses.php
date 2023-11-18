<?php
	include 'Koneksi.php';

        $simpanNamaStudent = "";

        $cariNamaStudent = "SELECT * FROM login_student WHERE status_login = 'Baru saja'";
        $eksekusicariNamaStudent = mysqli_query($apaya, $cariNamaStudent);

        while ($LihatNamaStudent = mysqli_fetch_array($eksekusicariNamaStudent)) {
                $simpanNamaStudent = $LihatNamaStudent["nama_student"];
        }

        if (!empty($_POST['BeliKedua'])) {
                $beliKedua = $_POST['BeliKedua']; //dari payment.php

                $nama = $_POST["Nama"];
                $tanggal = $_POST["Tanggal"];
                $pembayaran = $_POST["Pembayaran"];

                $simpanIDPesanan = "";
                // $simpanNamaStudent = "";

                // $cariNamaStudent = "SELECT * FROM login_student WHERE status_login = 'Baru saja'";
                // $eksekusicariNamaStudent = mysqli_query($apaya, $cariNamaStudent);

                // while ($LihatNamaStudent = mysqli_fetch_array($eksekusicariNamaStudent)) {
                //         $simpanNamaStudent = $LihatNamaStudent["nama_student"];
                // }
							

                $cariIdPesanan = "SELECT * FROM pesanan ORDER BY id_pesanan DESC LIMIT 1";
                $eksekusicariIdPesanan = mysqli_query($apaya, $cariIdPesanan);

                while ($LihatIDPesanan = mysqli_fetch_array($eksekusicariIdPesanan)) {
                        $simpanIDPesanan = $LihatIDPesanan["id_pesanan"];
                }

                

                $untukInvoice = '20230122';
                $ekesekusiInvoice = $untukInvoice.$simpanIDPesanan;


                if (!empty($simpanIDPesanan)) {
                        if (is_uploaded_file($_FILES['BuktiBayar']['tmp_name'])) {
                                $gambar = addslashes(file_get_contents($_FILES['BuktiBayar']['tmp_name']));  
                                $namaGambar = getimageSize($_FILES['BuktiBayar']['tmp_name']);

                                
                                $sql = "UPDATE `pesanan` SET `tgl_Pesanan`= '$tanggal',`nama_pembeli`='$simpanNamaStudent',`metode_pembayaran`='$pembayaran',`bukti_pembayaran`='$gambar',`nama_file`='".$namaGambar['mime']."',`invoice`='$ekesekusiInvoice',`status_pembayaran`='Lunas' WHERE id_pesanan = $simpanIDPesanan";
                                $eksekusiSql = mysqli_query($apaya, $sql);

                                if ($eksekusiSql) {
                                        header("location: PaymentHistoryScreen.php");
                                }
                                
                        }

                }
        }

        else if (!empty($_POST['Beli'])) {
                $beliPertama = $_POST['Beli'];

                $simpanNamaStudent = "";

                $cariNamaStudent = "SELECT * FROM login_student WHERE status_login = 'Baru saja'";
                $eksekusicariNamaStudent = mysqli_query($apaya, $cariNamaStudent);

                while ($LihatNamaStudent = mysqli_fetch_array($eksekusicariNamaStudent)) {
                        $simpanNamaStudent = $LihatNamaStudent["nama_student"];
                }
                

                if ($beliPertama == 'BeliTOEFL') {
                        $detailPembelian = "INSERT INTO `pesanan`(`id_pesanan`, `tgl_Pesanan`, `nama_pembeli`, `metode_pembayaran`, `bukti_pembayaran`, `nama_file`
                        , `nama_produk`, `invoice`, `harga`, `status_pembayaran`) 
                        VALUES ('','','$simpanNamaStudent','','','','TOEFL','','250000','Belum Lunas')";

                        $eksekusiDetailPembelian = mysqli_query($apaya, $detailPembelian);
                        header("location: Payment.php");
                }

                else if ($beliPertama == 'BeliTOEIC') {
                        $detailPembelian= "INSERT INTO `pesanan`(`id_pesanan`, `tgl_Pesanan`, `nama_pembeli`, `metode_pembayaran`, `bukti_pembayaran`, `nama_file`
                        , `nama_produk`, `invoice`, `harga`, `status_pembayaran`) 
                        VALUES ('','','$simpanNamaStudent','','','','TOEIC','','550000','Belum Lunas')";

                        $eksekusiDetailPembelian = mysqli_query($apaya, $detailPembelian);
                        header("location: Payment.php");
                }

                else if ($beliPertama == 'BeliElementary') {
                        $detailPembelian= "INSERT INTO `pesanan`(`id_pesanan`, `tgl_Pesanan`, `nama_pembeli`, `metode_pembayaran`, `bukti_pembayaran`, `nama_file`
                        , `nama_produk`, `invoice`, `harga`, `status_pembayaran`) 
                        VALUES ('','','$simpanNamaStudent','','','','Kelas Elementary','','100000','Belum Lunas')";

                        $eksekusiDetailPembelian = mysqli_query($apaya, $detailPembelian);
                        header("location: Payment.php");
                }

                else if ($beliPertama == 'BeliIntermediate') {
                        $detailPembelian= "INSERT INTO `pesanan`(`id_pesanan`, `tgl_Pesanan`, `nama_pembeli`, `metode_pembayaran`, `bukti_pembayaran`, `nama_file`
                        , `nama_produk`, `invoice`, `harga`, `status_pembayaran`) 
                        VALUES ('','','$simpanNamaStudent','','','','Kelas Intermediate','','150000','Belum Lunas')";

                        $eksekusiDetailPembelian = mysqli_query($apaya, $detailPembelian);
                        header("location: Payment.php");
                }

                else if ($beliPertama == 'BeliAdvanced') {
                        $detailPembelian= "INSERT INTO `pesanan`(`id_pesanan`, `tgl_Pesanan`, `nama_pembeli`, `metode_pembayaran`, `bukti_pembayaran`, `nama_file`
                        , `nama_produk`, `invoice`, `harga`, `status_pembayaran`) 
                        VALUES ('','','$simpanNamaStudent','','','','Kelas Advanced','','200000','Belum Lunas')";

                        $eksekusiDetailPembelian = mysqli_query($apaya, $detailPembelian);
                        header("location: Payment.php");
                }


        }
?>