<?php 
$m = new MongoClient();
$db= $m->bird;
echo "connected to database";
$coll= $db-> birds;
echo "pets collection selected";
$doc = array (
	"name"=>"duck",
	"color"=>"white",
	"size"=>"big"
);
$coll->insert ($doc);
echo "document inserted";
?> 
