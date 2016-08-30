<?php
if($_GET!==''){
	$id=$_GET['id'];
        if( !empty($id) && $id=='123' ){
            echo date('Y-m-d H:i:s');//执行成功
        }
        else{
			echo 'Error';
			// $arr = array ('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5);
			// echo json_encode($arr);
        }
}