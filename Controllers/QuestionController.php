<?php
class QuestionController extends BaseController {
    public $QuestionModel;
    public function __construct()
    {
        $this->model("QuestionModel.php");
        $this->QuestionModel=new QuestionModel();
    }

    public function show(){
      
        $this->view("question/show.php",[
            'pageTitle'=>"This is page question"
        ]);
    }
}