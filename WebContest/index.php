
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" content="text/html" http-equiv="Content-Type">
    <title>課程分類</title>
    <link rel="stylesheet" type="text/css" href="css/cata.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <script src='js/jquery.min.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="http://cdn.bootcss.com/jquery/1.9.1/jquery.js"></script>
    <script src="./control.js"></script>
    <style>
      .message_box{
        width: 20%;
        height: 90%;
        position : fixed;
        right:0px;
        border-style:ridge;
        word-wrap:break-word;
        overflow-x: hidden;
        overflow-y: auto;
        background-color: white;
        opacity: 1;
      }
      p{
        font-size: 10px;
        padding: 5px 5px 5px 6px;    
      }
      #topm{
      	background-color : black;
      	color : white;
      	width : 100%;
      	font-size:20px;
      	text-align : center;	
      }
      #bottom{
      	position:fixed;
	      bottom:0px;
        right: 0px;
        width: 20%;
        height: 10%;
        position : fixed;
      }
      #bottombtn{
      	position:relative;
	     bottom:0px;
      }
      #top_logo{
        width: 100%;
        height: 100%;
        
        position: absolute;
        left: 0px;
      }
    </style>


  </head>

  <body>
    <div class="container">
      
      <div class="container" id="chatroom" style="display: none;" value="1">  
        <div class="message_box">
          <div id="topm">Let's Talk!</div>
          <div id="chat" ></div>
        </div>  
        <div id="bottom">
          <input id="name" size="15" type="text" value="Name">
          <input id="message" type="text" size="100%" value="Say something...">
          <input id="btn_post" type="button" value="Enter" class="btn btn-info" style="width: 100%;position: absolute;">
        </div>     
      </div>

      <div id="top_logo"> 
        <div class="page">
        <div class="top">
          <div class="logo" style="text-align: center;">線上學習平台</div>  
          <p><button style="right: 0px;position: absolute;" onclick="clickfunc()">123</button></p>
        </div>
      </div>
    </div>  
  </body>
  
  <script>
    function clickfunc()
    {
      var x = document.getElementById("chatroom");
      var y = document.getElementById("top_logo");
      if($(x).attr("value") == 1)
      {
        $(x).css("display","block");
        $(x).attr("value","2");
        $(y).css("width","80%");
      }
      else
      {
        $(x).css("display","none");
        $(x).attr("value","1");
        $(y).css("width","100%");
      }
    }
  </script>
</html>
