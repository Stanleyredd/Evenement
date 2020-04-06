<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 6-4-2020
 * Time: 12:05
 */

$db['user'] = 'root';
$db['password'] = '';
$db['database'] = 'evenement';
$db['host'] = 'localhost';



$dsn = 'mysql:dbname='.$db['database'].';host='.$db['host'];
$user = $db['user'];
$password = $db['password'];

try {
    $dbh = new PDO($dsn, $user, $password);
}catch (PDOException $e) {
echo "error ". $e->getMessage();


}