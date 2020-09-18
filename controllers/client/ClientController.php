<?php
require_once 'controllers/Controller.php';
require_once 'model/Category.php';
class ClientController extends Controller {
    public function getCLientMenu()
    {   
        $categories = new Category();
        return $categories->select();
    }

    public function view($path, $data = [])
    {
        $categories_menu = $this->getCLientMenu();
        extract($data);
        require_once "views/" . $path;
    }
}
?>