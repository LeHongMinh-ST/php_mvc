<?php
require_once 'controllers/admin/AdminController.php'; 
class HomeAdminController extends AdminController{
    public function index()
    {
        $this->view(URL_MASTER_ADMIN,[
            'page'=>'dashboard'
        ]);
    }
}
?>