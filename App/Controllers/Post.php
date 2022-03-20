<?php 
class Posts{
    public function index(){
        echo 'Posts::index';
    }
    public function add(){
        echo 'Posts::add';
    }
    public function edit($id){
        echo "Posts::edit id: {$id}";
    }
}