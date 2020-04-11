<?php
include("./Model/Model.php");

class Controller
{
    public $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function dispmessage()
    {
        $name = "";
        $msg = "";
        if (isset($_POST['submit'])) {
            $msg = $this->model->message();
            $name = $_POST['name'];
        }
        include("./View/View.php");
    }
}
