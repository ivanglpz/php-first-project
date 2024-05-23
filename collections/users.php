<?php
require_once 'db/db.php';

class Users  {
    private $database;
    private $db;
    private $sql = "SELECT * FROM users";
    private $sql_create_user = "INSERT INTO users (id,name,email) VALUES (:id, :name, :email)";
    private $sql_delete_user = "DELETE FROM users WHERE id = :id";
    private $sql_update_user = "UPDATE users SET name = :name WHERE id = :id";
    public function __construct() {
        $this->database = new Database();
        $this->db = $this->database->getConnection();
    }

    public function getCountUsers() {
        $stmt = $this->db->prepare($this->sql);

        $stmt->execute();

        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return count($users);
    }

    public function getUsers () {
        $stmt = $this->db->prepare($this->sql);
        $stmt->execute();

        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }
    public function createNewUser($name,$email){
        $stmt = $this->db->prepare($this->sql_create_user);
        $new_id = $this->getCountUsers() + 1;
        $stmt->bindParam(":id", $new_id);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
         if ($stmt->execute()) {
            return "Registro guardado exitosamente.";
        } else {
            return "Error al guardar el registro.";
        }
    }
    public function deleteUserById($id){
        $stmt = $this->db->prepare($this->sql_delete_user);
        $stmt->bindParam(":id", $id);

        if ($stmt->execute()) {
            return "Registro eliminado exitosamente.";
        } else {
            return "Error al eliminar el registro.";
        }
    }
    public function updateUserById($id, $name) {
        $stmt = $this->db->prepare($this->sql_update_user);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":name", $name);
        if ($stmt->execute()) {
            return "Registro actualizado exitosamente.";
        } else {
            return "Error al actualizar el registro.";
        }
    }
}
?>
