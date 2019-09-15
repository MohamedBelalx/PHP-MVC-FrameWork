<?php


class Controller
{
    public function model($model)
    {
        require('../app/model/'.$model.'.php');

        return new $model;
    }

    public function view($view,$data=[])
    {
        if(file_exists('../app/view/'.$view.'.php'))
        {
            require('../app/view/'.$view.'.php');
        }else
        {
            echo 'Can not find This view';
        }
    }
}
?>