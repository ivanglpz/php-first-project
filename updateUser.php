<?php
require_once 'collections/users.php';
if ($_SERVER["REQUEST_METHOD"] == "PUT") {
    $data = json_decode(file_get_contents("php://input"), true);
    $name = $data['name'];
    $id = $data['id'];

    $users = new Users();
    $result = $users->updateUserById($id,$name);
    echo $result;
}
?>