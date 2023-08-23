<?php
    require('../Models/MKelas.php');

    Class CKelas{

        function SimpanData($nama){
            
            $db=new Mkelas();
            return $db->Simpan($nama);

        }

        function UpdateData($nama,$edit){

            $db=new Mkelas();
            return $db->Update($nama,$edit);

        }

        function DeleteData($nama){

            $db=new Mkelas();
            return $db->Delete($nama);

        }
    }
?>