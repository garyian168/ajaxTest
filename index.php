<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>

<body>
<button class="trigger" id="touch">触发</button>
<div class="log"></div>

<button class="trigger01">触发</button>
<div class="log01"></div> 

<div id="show_message"></div>

</body>
<script src="http://cdn.bootcss.com/jquery/1.9.1/jquery.min.js"></script>
<script>
var val1=123;


$(document).ready(function(){//ajax回调函数 按以下顺序执行
       
    $('.log').ajaxStart(function() {
        $(this).text('请求前执行ajaxStart，开始请求，Loading...');
        alert('请求前执行ajaxStart，开始请求，Loading...');
    });
    $('.log').ajaxSend(function() {
        $(this).text('Ajax请求即将发送ajaxSend，正在请求，加载中...）');
        alert('Ajax请求即将发送ajaxSend，正在请求，加载中...）');
    });
    $('.log').ajaxSuccess(function() {
        $(this).text('Ajax请求成功ajaxSuccess');
        alert('Ajax请求成功ajaxSuccess');
    });
    $('.log').ajaxError(function() {
        $(this).text('ajax请求失败ajaxError');
        alert('ajax请求失败ajaxError');
    });
    $('.log').ajaxComplete(function() {
        $(this).text('是否成功都会执行ajaxComplete');
        alert('是否成功都会执行ajaxComplete');
    });
    $('.log').ajaxStop(function() {
        $(this).text('Ajax请求完成ajaxStop');
        alert('Ajax请求完成ajaxStop');
    });
       
    $('.trigger').click(function() {
        $.get("sql.php",{"id":val1},function(data,status){
            if(status == "success"){
                alert("外部内容加载成功！");
                alert(data);
            }
            if(status == "error"){
                alert("Error: "+xhr.status+": "+xhr.statusText);
            }
        });
    });
})

//判断是否在数组内
// function in_array(arr, obj) {
// var i = arr.length;
// while (i--) {
// if (arr[i] === obj) {
// return true;
// }
// }
// return false;
// }
 

 
// var arr = new Array('php技术博客', 'php个人技术博客', 'php博客');
// in_array(arr, 'php技术博客');//返回true
// (in_array(arr, 'jquery技术博客'));//返回false


</script>
</html>