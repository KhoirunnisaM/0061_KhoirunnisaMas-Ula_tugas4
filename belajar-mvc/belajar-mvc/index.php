<?php
require_once 'app/controllers/UserController.php';

$controller = new UserController();
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? intval($_GET['id']) : null;

switch ($action) {
    case 'detail':
        $controller->detail($id);
        break;
    case 'edit':
        $controller->edit($id);
        break;
    case 'update':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $controller->update($id, $name, $email);
        }
        break;
    case 'delete':
        $controller->delete($id);
        break;
    case 'create':
        $controller->create();
        break;
    case 'store':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $controller->store($name, $email);
        }
        break;
    default:
        $controller->index();
        break;
}
