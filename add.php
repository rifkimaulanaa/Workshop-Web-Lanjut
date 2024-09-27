<?php 
include("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM ti2e");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <a href="index.php">Go Home</a>
    <br/><br/>

    <form action="add.php" method="POST" name="form1">

    <table width='25%' border=0>

    <tr> 
        <td>Nim</td>
        <td> <input type="text" name="nim"> </td>
    </tr>


    <tr> 
        <td>Nama</td>
        <td> <input type="text" name="name"> </td>
    </tr>

    <tr> 
        <td>Email</td>
        <td> <input type="text" name="email"> </td>
    </tr>

    <tr> 
        <td>No HP</td>
        <td> <input type="text" name="no_hp"> </td>
    </tr>

    <tr> 
        <td>Alamat</td>
        <td> <input type="text" name="alamat"> </td>
    </tr>

    <tr> 
        <td>Jenis Kelamin</td>
        <td> <input type="text" name="jekel"> </td>
    </tr>

    <tr> 
        <td>Tanggal Lahir</td>
        <td> <input type="text" name="tgl_lahir"> </td>
    </tr>

    <tr> 
        <td> <input type="submit" name="Submit" value="Tambahkan"> </td>
    </tr>

</table>
</form>

    <?php 
    if(isset($_POST['Submit'])) {
        $nim = $_POST['nim'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $nohp = $_POST['no_hp'];
        $alamat= $_POST['alamat'];
        $jekel = $_POST['jekel'];
        $tgl = $_POST['tgl_lahir'];
        
        include ("config.php");

        $result = mysqli_query($mysqli, "INSERT INTO ti2e(nim,nama,email,no_hp,alamat,jekel,tgl_lahir) VALUES('$nim','$name','$email','$nohp','$alamat','$jekel','$tgl')");

        echo "Mahasiswa berhasil di tambahkan. <a href='index.php'>View users</a>";
    }

    
    ?>

</body>
</html>