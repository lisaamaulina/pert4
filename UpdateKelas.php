<?php
require('../Controllers/CKelas.php');
?>

<a href="AddKelas.php">Add</a>
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
        <td>Edit</td><td>:</td>
            <td>
                <input type="text" name="edit">
            </td>
        </tr>
        <tr>
            <td colspan="3" align="right">
                <input type="submit" name="update" value="Update">
            </td>
        </tr>
    </table>
</form>

<?php
    if(isset($_POST['update'])){
        $kelas = new Ckelas(); 
        echo $kelas->UpdateData($_POST['nama'], $_POST['edit']);     
    }
?>