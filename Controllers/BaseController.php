<?php
class BaseController{
    protected function view($path, array $data=[]){
//        echo "<pre>";
//        print_r($data);
//        echo "</pre>";
        foreach ($data as $key=>$value){
            $$key=$value;
        }
        return include "./app/view/".$path;
    }
    protected function model($path){
        return include "./app/model/".$path;
    }
}