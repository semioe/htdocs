<?php
class index extends Controller{
    function def($req,$res){
        //$res->send("hello!");
        $res->render("hello");
    }
}
?>