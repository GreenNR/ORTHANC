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
		      width: 100%; /* ���ϴ� �ʺ� ���� */ 
		      height: auto; /* ���̰� �ʱ�ȭ */ 
		      line-height : normal; /* line-height �ʱ�ȭ */ 
		      padding: .8em .5em; /* ���ϴ� ���� ����, ���ϴ� �������� ���̸� ���� */ 
		      font-family: inherit; /* ��Ʈ ��� */ 
		      border: 1px solid #999;
		      border-radius: 0; /* iSO �ձٸ𼭸� ���� */ 
		      outline-style: none; /* ��Ŀ���� �߻��ϴ� ȿ�� ���Ÿ� ���Ѵٸ� */ 
		      -webkit-appearance: none; /* �������� �⺻ ��Ÿ�ϸ� ���� */ 
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