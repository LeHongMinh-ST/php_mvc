<?php
require_once 'controllers/client/ClientController.php';
require_once 'model/Category.php';
require_once 'model/Post.php';
class HomeClientController extends ClientController{

    public function index()
    {
        $this->view(URL_MASTER_CLIENT,[
            'page'=>'home'
        ]);
    }

    public function category($slug)
    {
        $model = new Category();
        $category = $model->first(['slug'=>$slug]);//Lấy ra categroy tương ứng vs slug

        $model = new Post();
        $posts = $model->findWhere(['category_id'=>$category['id']]);//Lấy ra các bài post thuộc category vừa tìm được

        $this->view(URL_MASTER_CLIENT,[
            'page'      =>'category',
            'posts'     =>$posts,
            'category_post'  =>$category
        ]);
    }

    public function post($slug)
    {
        $model = new Post();
        $post = $model->first(['slug'=>$slug]);

        $this->view(URL_MASTER_CLIENT,[
            'page'      =>'post',
            'post'      => $post,
            
        ]);
    }
}
?>