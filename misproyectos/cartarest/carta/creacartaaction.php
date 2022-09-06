<?php


$db=new clsmaindbcarta($server,$user,$pass,$data);
$db->insertcarta($_POST['txtiduser'],$_POST['txtdenominacion'],$_POST['txtrubro'],$_POST['txtfinicio'],$_POST['txtobs']);

echo" <script> alert('Carta Creada!!');
window.location.href='cartas.php?';
</script>";
?>