<!DOCTYPE html>
<html>
<head>
	<title>Demo</title>
</head>

<body>
<input id="i_num" name="i_num" type="text"></input>
<button class="btn-submit">提交</button>
<div id="show"></div>

</body>
<script src="http://cdn.bootcss.com/jquery/1.9.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $(".btn-submit").click(function(){
        var i_val=$("#i_num").val();

        // $.get("test.php",{'id':i_val},function(data){
        // $("#show").html(data); 
        // });

        $.ajax({
            type: "GET",
            url: "test.php",
            data: {id:i_val},
            dataType: "html",
            cache: false,
            async: true,
            success:function(data){
                // console.log(data);
                $("#show").html(data);
                // alert(data);
            }
        })
    })
})
</script>
</html>