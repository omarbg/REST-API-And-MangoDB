<?php
//PREPARE DATABASE
// connect to mongodb
$m = new MongoClient();

//echo "Connection to database successfully </br>";
// select a database
$db = $m->slimdb;
//echo "Database slimdb selected </br>";
//select collection
$db->createCollection("users");

$users_collection = $db->users;

//echo "Collection created succsessfully </br>";

$users = array(
  array('userid' => '1','firstname' => 'omar ','lastname' => 'bouguima','email' => 'omar@gmail.com','phone' => '+21621987651'),
  array('userid' => '2','firstname' => 'walid','lastname' => 'Toukabri','email' => 'walid@yahoo.com','phone' => '+21654987411'),
  array('userid' => '3','firstname' => 'mahdi','lastname' => 'kawach','email' => 'mahdi@gmail.com','phone' => '+21659847785'),
  array('userid' => '4','firstname' => 'mohamed ali','lastname' => 'klay','email' => 'mohamed@yahoo.fr','phone' => '+21654872189'),
  array('userid' => '5','firstname' => 'nadia','lastname' => 'fileli','email' => 'nadia@yahoo.com','phone' => '+21654875410')
);


foreach ($users as $user) {
    $users_collection->insert($user);
//    echo 'user insrted </br>';
}
$db->createCollection('orders');


$orders_collection = $db->orders;

$orders = array(
    array('orderid' => '1', 'userid' => '1', 'total' => '200', 'date' => '02-02-2015 09:06:06', 'status' => '1'),
    array('orderid' => '2', 'userid' => '2', 'total' => '450', 'date' => '08-02-2016 09:06:50', 'status' => '1'),
    array('orderid' => '3', 'userid' => '1', 'total' => '500', 'date' => '02-02-2015 09:06:06', 'status' => '1'),
    array('orderid' => '4', 'userid' => '2', 'total' => '350', 'date' => '08-02-2016 09:06:50', 'status' => '1'),
    array('orderid' => '5', 'userid' => '1', 'total' => '600', 'date' => '02-04-2014 09:06:06', 'status' => '1'),
    array('orderid' => '6', 'userid' => '4', 'total' => '350', 'date' => '08-06-2016 09:06:50', 'status' => '2'),
    array('orderid' => '7', 'userid' => '3', 'total' => '500', 'date' => '02-09-2015 09:06:06', 'status' => '1'),
    array('orderid' => '8', 'userid' => '3', 'total' => '3150', 'date' => '08-06-2016 09:06:50', 'status' => '2')
);

foreach ($orders as $order) {
    $orders_collection->insert($order);
//    echo 'order insrted </br>';
}
