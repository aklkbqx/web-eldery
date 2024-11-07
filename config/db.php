<?php 
try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;",$username,$password);
    // echo "Connection Successfully!";
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
?>
