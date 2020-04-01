<?php
// $mahasiswa = [
//     [
//         "nama" => "Moch Rafi",
//         "nim" => "1101154125",
//         "email" => "mochrafinuroktafian@gmail.com"
//     ],
//     [
//         "nama" => "Asep Michael",
//         "nim" => "1101154130",
//         "email" => "asepmichael@gmail.com"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
