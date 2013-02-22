<?php 

$dbh = new PDO('mysql:host=xserve1.dc.fubra.net;dbname=bytewire-bytewire', 'bytewire-zjav', 'HhHNKzelzJrF08DH');
$dbh->setFetchMode(PDO::FETCH_OBJ);
foreach($dbh->query("SELECT * FROM user_social_link") as $row)
{
	print_r($row);
}

?>

