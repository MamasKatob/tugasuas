<h3>Aplikasi Data Mahasiswa</h3><hr>
<?php

include_once("koneksi.php");
 
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY nim DESC");
?>
 
<html>
<head>    
    <title>Tampilan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="folder/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="folder/font-awesome/css/font-awesome.min.css">
    <!-- <style>
        a{text-decoration: none;}
    </style> -->
</head>
 
<body>

<a href="input.php"><h2><input class="btn" type="submit" value="Tambah Data"></h2>
    <table width='80%' border=1>
 
    <tr>
        <th>Nim</th> <th>Nama</th> <th>Jurusan</th> <th>Opsi</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nim']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['jurusan']."</td>";    
        echo "<td><a href='form-edit.php?nim=$user_data[nim]'>Edit</a> | <a href='hapus.php?nim=$user_data[nim]'>Hapus</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>