<?php
    header('Content-type: text/html; charset=UTF8');
    ?>
	<html>  
    <head>
	<link rel="stylesheet" type="text/css" href="./css/index1.css">
    <title>我的留言板.添加留言</title>  
    </head>  
    <body background="./img/1.jpeg" style="background-size:cover;" >  
    <center>  
    <h2>我的留言板</h2> 
    <input type = "button" value = "添加留言" onclick="location.href='add.php'" class="button"/>
    <input type = "button" value = "查看留言" onclick="location.href='show.php'" class="button"/>
	<input type = "button" value = "退出登陆" onclick="location.href='index.php'" class="button"/>
    <hr width = "70%"> 
    </center>
	<div class="k1">
    <form action = "doAdd.php" method = "post">  
    <h1 style="text-align:center">分享此刻心情
    </h1>
    <label>
    <span>留言者 :</span>
    <input type="text" name="author" placeholder="你的名字" />
    </label>
    <label>
    <span>留言对象 :</span>
    <input type="text" name="person" placeholder="他的名字" />
    </label>
    <label>
    <span>主题 :</span>
    <input type="text" name="title" placeholder="主题" />
    </label>
    <label>
    <span>信息 :</span>
    <textarea name="content" placeholder="你的信息"></textarea>
    </label>
    <div style="margin-left:125px">
    <input type="submit" value="提交" class="submit">
    <input type = "reset" value = "重置" class="reset">
    </div>
	</div>
    </form>
    </body>  
    </html>