<?php
require_once 'model/model.php';
class User extends Model {
    public function __construct()
    {
        parent::__construct();
        $this->table = 'users';
    }

    public function getUserByEmail($email) {
        $query = "SELECT * FROM $this->table where email=" . "'" .  $email . "'";

        $result = $this->connection->query($query);
        $user = $result->fetch_assoc();
        return $user;
    }
}

?>