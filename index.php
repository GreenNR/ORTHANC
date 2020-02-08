<!doctype html>

<?php session_start(); ?>

<html lang="ko">

    <head>
        <meta charset="utf-8">
        <title>ORTHANC</title>
        
		<style>
		  *{background-color: black ; }
		  body {color: white ;}
		  
		  .textbox input[type="text"],
		  .textbox input[type="password"]
		  {
		      width: 100%; /* 원하는 너비 설정 */ 
		      height: auto; /* 높이값 초기화 */ 
		      line-height : normal; /* line-height 초기화 */ 
		      padding: .8em .5em; /* 원하는 여백 설정, 상하단 여백으로 높이를 조절 */ 
		      font-family: inherit; /* 폰트 상속 */ 
		      border: 1px solid #999;
		      border-radius: 0; /* iSO 둥근모서리 제거 */ 
		      outline-style: none; /* 포커스시 발생하는 효과 제거를 원한다면 */ 
		      -webkit-appearance: none; /* 브라우저별 기본 스타일링 제거 */ 
		      -moz-appearance: none; 
		      appearance: none;
		      color: white
		  }		  		  
	    </style>
    </head>
    
    
    <body>

    	<img id="MainLogo" src ="img\mainlogo_dark.png" style="padding:20px; width:370px; height:170px; 
    	position:absolute; left:0;right:0; margin-left:auto;margin-right:auto; top:120px; cursor:pointer;"
    	onclick="location.href='index.php';">

		<div class="textbox" style="position:absolute; width:160px;left:0; right:0; margin-left:auto; margin-right:auto;
		top:400px">
			<form>
		    	<p><input type="text" name="user_id" placeholder="ID" autofocus/></p>
		    	<p><input type="password" name="user_pw" placeholder="PASSWORD" /></p>
		    	<p><input type="submit" value="LOGIN" style="color:white" /></p>
	    	</form>
	    </div>
	    
	    	    	   
    
    
    
    
    </body>
</html>