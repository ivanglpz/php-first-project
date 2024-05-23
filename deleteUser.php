<?php
require_once 'collections/users.php';
if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    $data = json_decode(file_get_contents("php://input"), true);
    $id = $data['id'];
    $users = new Users();
    $result = $users->deleteUserById($id);
    echo $result;
}
?>