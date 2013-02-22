<?php 

$dbh = new PDO('mysql:host=xserve1.dc.fubra.net;dbname=bytewire-bytewire', 'bytewire-zjav', 'HhHNKzelzJrF08DH');
$dbh->setFetchMode(PDO::FETCH_OBJ);
$row = $dbh->query("SELECT * FROM user_social_link")->fetchObject();
print_r($row);


?>

