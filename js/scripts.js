$(document).ready(function()
{
	$.get("antispam.php", null,
	function(data)
	{
		$("#contact form").append("<input type=\"hidden\" name=\"antispam\" value=\""+ data +"\" />");
	});

	$("#contact input:button").click(function(){ 
	$(this).attr("disabled","disabled").attr("value","enviando...");
		$.post($("#contact form").attr("action"), $("#contact form").serialize(),
		function(data)
		{
			alert(data.text);
			$("#contact input:button").removeAttr("disabled").attr("value","Enviar");
			if (data.status == 1) { $("#contact form")[0].reset(); }
			else { $("#"+data.package).focus(); }
		},"json");
		return false;
	});
});
