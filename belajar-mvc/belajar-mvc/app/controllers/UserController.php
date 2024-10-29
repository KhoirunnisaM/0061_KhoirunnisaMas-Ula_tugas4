<?php
require_once 'app/models/User.php';
require_once 'config/database.php';

class UserController {
    private $userModel;

    public function __construct() {
        $db = getDBConnection();
        $this->userModel = new User($db);
    }

    public function index() {
        $users = $this->userModel->getAllUsers();
        require 'app/views/userList.php';
    }

    public function detail($id) {
        $user = $this->userModel->getUserById($id);
        require 'app/views/userDetail.php';
    }

    public function edit($id) {
        $user = $this->userModel->getUserById($id);
        require 'app/views/userEdit.php';
    }

    public function update($id, $name, $email) {
        $this->userModel->updateUser($id, $name, $email);
        header("Location: index.php");
        exit;
    }

    public function delete($id) {
        $this->userModel->deleteUser($id);
        header("Location: index.php");
        exit;
    }

    public function create() {
        require 'app/views/userCreate.php';
    }

    public function store($name, $email) {
        $this->userModel->createUser($name, $email);
        header("Location: index.php");
        exit;
    }
}
