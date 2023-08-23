<?php
    require('../Config/Database.php');

    Class MKelas{

        function Simpan($nama){
            Global $Koneksi;
            $sql="insert into kelas values('".$nama."')";
            $cek=mysqli_query($Koneksi,$sql);

            if($cek>0){
                return "Data Berhasil Disimpan.";
            }
            else{
                return "Data Gagal Disimpan.";
            }
        }

        function Update($nama,$edit){
            Global $Koneksi;
            $sql="UPDATE kelas SET nama='$edit' WHERE nama='$nama'";
            $cek=mysqli_query($Koneksi,$sql);

            if($cek>0){
                return "Data Berhasil Diupdate.";
            }
            else{
                return "Data Gagal Diupdate.";
            }
        }

        function Delete($nama){
            Global $Koneksi;
            $sql="DELETE FROM kelas WHERE nama='$nama'";
            $cek=mysqli_query($Koneksi,$sql);

            if($cek>0){
                return "Data Berhasil Didelete.";
            }
            else{
                return "Data Gagal Didelete.";
            }
        }
    }
?>