<?php 
include("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM ti2e");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <a href="add.php">Tambah Mahasiswa</a><br/><br/>

    <table width='80%' border=1>
    <tr>
        <th>ID</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No Hp</th>
        <th>Email</th>
        <th>Update</th>
    </tr>
    <?php 
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['nim']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['alamat']."</td>";
        echo "<td>".$user_data['no_hp']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
    }
        
        ?>

</body>
</html>