<?php
class Controller{
	public $dbHelper;
	function __construct($dbHelper){
		$this->dbHelper=$dbHelper;
	}
    function def($req,$res){
        $res->send("hello");
    }
    function get($req,$res,$id){
        $res->send($id);
    }
}
?>