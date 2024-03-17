<?php  

$mahasiswa = [
[
    'gambar' => 'alucard.jpg',
    'nrp' => '233040180',
    'nama' => 'Alucard',
    'email' => 'alucardganteng21@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'layla.jpg',
    'nrp' => '233040181',
    'nama' => 'Layla',
    'email' => 'laylasayangmamah24@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'zilong.jpg',
    'nrp' => '233040182',
    'nama' => 'Zilong',
    'email' => 'zilongjagobanget40@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'fanny.jpg',
    'nrp' => '233040183',
    'nama' => 'Fanny',
    'email' => 'fannydarat@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'franco.jpg',
    'nrp' => '233040184',
    'nama' => 'Franco',
    'email' => 'franconarikangin28@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'angela.jpg',
    'nrp' => '233040185',
    'nama' => 'Angela',
    'email' => 'angelapengenglory50@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'jawhead.jpg',
    'nrp' => '233040186',
    'nama' => 'Spiderman',
    'email' => 'jawheadspace@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'leomord.jpg',
    'nrp' => '233040187',
    'nama' => 'Leomord',
    'email' => 'leomordnaikkeledai@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'khufra.jpg',
    'nrp' => '233040188',
    'nama' => 'Khufra',
    'email' => 'khufrakara@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'hayabusa.jpg',
    'nrp' => '233040189',
    'nama' => 'Hayabusa',
    'email' => 'hayasoftboy@gmail.com',
    'jurusan' => 'Teknik Informatika'
],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5a</title>
</head>
<body>
<h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $m) { ?>
    <ul>
        <li>
            <img src="img/<?= $m['gambar']; ?>" width = 200px >
        </li>
        <li>NRP : <?= $m['nrp']; ?></li>
        <li>Nama : <?= $m['nama']; ?></li>
        <li>Email : <?= $m['email']; ?></li>
        <li>Jurusan : <?= $m['jurusan']; ?></li>
        </li>
    </ul>
    <?php } ?>
</body>
</html>