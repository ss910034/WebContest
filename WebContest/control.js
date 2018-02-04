var ws = new WebSocket("ws://35.167.45.151:8080/");

ws.onmessage = function(e){
  print(e.data);
};

ws.onopen = function(e){
  log("websocket hello");
  console.log(e);
};

ws.onclose = function(e){
  log("websocket close");
  console.log(e);
};

$(function(){
  $("#btn_post").click(post);
  $("#message").keydown(function(e){
    if(e.keyCode == 13) post();
  });
});

var post = function(){
  var name = $("#name").val();
  if(name == "__No_Login__")
    alert("Please login!!");
  else
  {
    var mes = $("#message").val();
    ws.send(name+" : "+mes);
    $("input#message").val("");
  }
};


var log = function(msg){
  console.log(msg);
  
};

var print = function(msg){
  $("#chat").append("<p>" + msg + "</p>");
  $scrollHeight=$(".message_box")[0].scrollHeight; //scroll的高度   
  $(".message_box").animate({ scrollTop: $scrollHeight}, 200);
};
