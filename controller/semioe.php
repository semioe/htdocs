<?php
class semioe extends Controller{
    function def($req,$res){
        //$res->send("hello!");
        $res->render("hello");
    }
	function all($req,$res){
        $res->send("lamp");
        //$res->render("lamp");
    }
	function get($req,$res,$id){
		//$json=$this->dbHelper->get_json("select * from lamps where id='$id'");
		$res->send($id);
	}
}
?>