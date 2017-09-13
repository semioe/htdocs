<?php
class obj extends Controller{
    function def($req,$res){
        //$res->send("hello!");
        $res->render("hello");
    }
	function all($req,$res){
        $json=$this->dbHelper->get_json("select * from objs order by id desc");
		$res->send($json);
    }
	function get($req,$res,$id){
		$json=$this->dbHelper->get_json("select * from objs where id='$id'");
		$res->send($json);
	}
}
?>