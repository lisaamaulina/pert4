<?php
require('../Controllers/CKelas.php');
?>

<a href="UpdateKelas.php">Update</a>
<a href="DeleteKelas.php">Delete</a>

<form action="" method="post">
    <table>
        <tr>
            <td>Nama kelas</td><td>:</td>
            <td>
                <input type="text" name="nama">
            </td>
        </tr>
        <tr>
            <td colspan="3" align="right">
                <input type="submit" name="simpan" value="Simpan">
            </td>
        </tr>
    </table>
</form>

<?php
    if(isset($_POST['simpan'])){
        $kelas = new Ckelas(); 
        echo $kelas->SimpanData($_POST['nama']);     
    }
?>