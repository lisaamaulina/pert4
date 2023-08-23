<?php
require('../Controllers/CKelas.php');
?>

<a href="UpdateKelas.php">Update</a>
<a href="AddKelas.php">Add</a>

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
                <input type="submit" name="delete" value="Delete">
            </td>
        </tr>
    </table>
</form>

<?php
    if(isset($_POST['delete'])){
        $kelas = new Ckelas(); 
        echo $kelas->DeleteData($_POST['nama']);     
    }
?>