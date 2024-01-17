<?php
//perulangan php'

$mahasiswa = 
  ["Kairi", "1202172060", "sistem informasi", "kairi@telkomuniversity.ac.id"];
?>
<DOCTYPE html>
<html>
<head>
<title> Latihan Daftare Mahasiswa</title>

</head>
<body>
<h1> Daftar Mahasiswa</h1>

<ul>
 <?php foreach ($mahasiswa as $mhs) : ?>
    <li><?= $mhs; ?></li>
<?php endforeach; ?>
</ul>

</body>
</html>         