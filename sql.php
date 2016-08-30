<?php
    if($_GET){
        $id=$_GET['i_num'];
        // echo $id;
        if(!empty($id) && $id=='123' ){
            echo date('Y-m-d H:i:s');//执行成功
        }
        else{
        	echo $_GET['i_num'];
            // echo 0;//执行失败
        }
    }
?>