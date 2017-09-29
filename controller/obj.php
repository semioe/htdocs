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
		
		
		if(isset($_REQUEST['status'])){
			$status=$_REQUEST['status'];
			if($status==="true"){
				$res->send("power_on");
				$this->dbHelper->exec("update objs set obj_status='power_on'");
			}
			if($status==="false"){
				$this->dbHelper->exec("update objs set obj_status='power_off'");
				$res->send("power_off");
			}
		}else{
			$res->send($json);
		}
	}
}
?>