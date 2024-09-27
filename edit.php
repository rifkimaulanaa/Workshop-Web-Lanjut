<?php 
include("config.php");

if (isset($_POST['update'])) 
{
        $id= $_POST['id'];
        $nim = $_POST['nim'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $nohp = $_POST['no_hp'];
        $alamat= $_POST['alamat'];
        $jekel = $_POST['jekel'];
        $tgl = $_POST['tgl_lahir'];

        $result = mysqli_query($mysqli,"UPDATE ti2e SET nama='$name', email='$email', no_hp='$nohp', alamat='$alamat', jekel='$jekel', tgl_lahir='$tgl' WHERE  nim='$nim'");
        if ($result) {
            header("Location: index.php");
        }
}
    ?>

<?php 
    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "SELECT * FROM ti2e WHERE id=$id");

    while($user_data = mysqli_fetch_array($result)) 
    {
     $nim = $user_data['nim'];
     $name = $user_data['nama'];
     $email = $user_data['email'];
     $nohp = $user_data['no_hp'];
     $alamat = $user_data['alamat'];
     $jekel = $user_data['jekel'];
     $tgl = $user_data['tgl_lahir'];   
    }
    
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form action="edit.php" method="post" name="update_mahasiswa">
        <table border="0">
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" value=<?php echo $nim; ?>'></td>
            </tr>

            <tr>
                <td>Nama</td>
                <td><input type="text" name="name" value='<?php echo $name; ?>'></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value='<?php echo $email; ?>'></td>
            </tr>

            <tr>
                <td>No Hp</td>
                <td><input type="text" name="no_hp" value='<?php echo $nohp; ?>'></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value='<?php echo $alamat; ?>'></td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="text" name="jekel" value='<?php echo $jekel; ?>'></td>
            </tr>

            <tr>
                <td>Tgl Lahir</td>
                <td><input type="text" name="tgl_lahir" value='<?php echo $tgl; ?>'></td>
            </tr>

            <tr>
                <td><input type="hidden" name="id" value='<?php echo $_GET['id']; ?>'></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>

        </table>
    </form>
</body>
</html>
