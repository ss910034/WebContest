var count=0,has=0,count1=1;
var cla=[];
var i=0;
$(".tded").click(
	function(){
		$(this).addClass("tde");
		if(!($(".order").text().match($(this).text())))
		{
			$(".order").append($(this).text()+" > ");
			$(".hidval").val($(".hidval").val()+" "+$(this).text());
		}
		else
		{
			id = $(this).text()+" > ";
			id1 = $(this).text()+" ";
			var re = new RegExp(id, 'g');
			var re1 = new RegExp(id1, 'g');
			$(".order").text($(".order").text().replace(re,''));
			$(".hidval").val($(".hidval").val().replace(re1,''));
			$(this).removeClass("tde");
		}
		if(count==0)
			$(".hidval").val($(this).text());
		count++;
	}
);
$(".navicon").click(
	function(){
		if(count1%2)
			$("header").addClass("nav-open");
		else
			$("header").removeClass("nav-open");
		count1++;
	}
);