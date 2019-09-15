<?php

class Posts extends Controller
{
    public function __construct()
    {
        echo 'Posts loded';
    }
    public function index()
    {
        $this->view('mo');
    }
    public function edit($id)
    {
        echo $id;
    }
}

?>