<?php 
$m = new MongoClient();
$db= $m->bird;
echo "connected to database";
$coll= $db-> birds;
echo "pets collection selected";
$document = $coll->find();
foreach($document as $doc){
	echo ($doc["name"]);
}
echo "document found";
?> 
