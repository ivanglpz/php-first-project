<?php
require_once 'collections/users.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents("php://input"), true);
    $email = $data['email'];
    $name = $data['name'];
    $users = new Users();
    $result = $users->createNewUser($name,$email);
    echo $result;
}
?>