<?php
require_once 'model/Post.php';
require_once 'controllers/admin/AdminController.php';

class PostAdminController extends AdminController {

    private $model;

    public function __construct()
    {
        $this->model = new Post();
    }

    public function index() {
        $posts = $this->model->select();
        $this->view('Post/list.php' , ['posts' => $posts]);
    }

    public function create() {
        $this->view('Post/add_process.php' , []);
    }

    public function store($data) {
        $this->model->insert($data);
        $this->redirect('index.php?mod=post&act=list');
    }

    public function show($id) {

        $post = $this->model->find($id);

        $this->view('Post/detail.php' , ['posts' => $post]);
    }

    public function edit($id) {
        $post = $this->model->find($id);
        $this->view('Post/edit_process.php' , ['post' => $post]);
    }

    public function update($id , $data) {
        $this->model->update($id , $data);
        $this->redirect('index.php?mod=post&act=list');
    }

    public function destro($id) {
        $this->model->delete($id);
        $this->redirect('index.php?mod=post&act=list');
    }

}
?>