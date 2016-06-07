<?php 
$m = new MongoClient();
$db= $m->bird;
echo "connected to database";
$coll=$db->bird;
$coll-> remove(array("size" => "small"),
echo "document remove";
?> 
