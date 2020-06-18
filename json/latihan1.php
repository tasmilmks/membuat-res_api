//file JSON dengan PHP
<?php
// $mahasiswa= [
// ["nama"=>"tasmil",
// "nrp"=>"011291",
// "email"=>"illungbriton@gmail.com"
// ],
// ["nama"=>"erdin",
// "nrp"=>"011292",
// "email"=>"illungbriton@gmail.com"
// ]
// ];
// $data=json_encode($mahasiswa);
// echo $data;
$dbh=new PDO('mysql:host=localhost;dbname=eringkas','root','');
$db=$dbh->prepare('select *from puskesmas');
$db->execute();
$pegawai=$db->fetchAll(PDO::FETCH_ASSOC);
$data=json_encode($pegawai);
echo $data;

?>
