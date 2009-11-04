<?
class Message
{
	var $status;
	var $text;
	var $package;
	
	function Message($status, $text, $package="")
	{
		$this->status = $status;
		$this->text = $text;
		$this->package = $package;
	}
	
	function __toString()
	{
		return json_encode($this);
	}
}

	if($_POST)
	{
		$name = $_POST["name"];
		$email = $_POST["email"];
		$body = $_POST["body"];
		
		if (strlen($name) < 3) { echo new Message(-1,"Preencha o campo Nome","name"); die(); }
		if (strlen($email) < 6) { echo new Message(-1, "Preencha o campo E-mail", "email"); die(); }
		if (strlen($body) < 2) { echo new Message(-1, "Preencha o campo Mensagem", "body"); die(); }

		$headers = "From: {$name}<$email>\r\n";
						
		if(mail("luanlmd@gmail.com",$subject, $body ,$headers)) { echo new Message(1, "Mensagem enviada com sucesso!"); }
		else { echo new Message(-1, "Ocorreu um erro ao tentar enviar sua mensagem,\n por favor tente novamente mais tarde."); }
	}
?>
