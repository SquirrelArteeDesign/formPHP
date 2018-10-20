<?php


	class Mail{

		public $opt,$mailer;

		// Informações do E-mail
		public $email = '';//Trocar e-mail aqui!
		public $senha = '';//Trocar senha aqui!
		public $host = ''; //Trocar pelo seu host
		public $port = ''; //Trocar pela porta SMTP



		public function __construct(Array $parametros){
			include('classes/phpmailer/PHPMailerAutoload.php');
			$this->mailer = new PHPMailer();

			$this->mailer->Host = $this->host; 
			$this->mailer->Port = $this->port; 
			$this->mailer->Username = $this->email;
			$this->mailer->Password = $this->senha;
			$this->mailer->IsSMTP();
			$this->mailer->SMTPDebug = 0;
			$this->mailer->SMTPAuth = true;
			$this->mailer->SMTPSecure = 'ssl';
			$this->mailer->IsHTML(true);
			$this->mailer->SingleTo = true;


			$this->mailer->From = $this->email;
			$this->mailer->FromName = $this->email;

			$this->mailer->Subject = 'Assunto do E-mail';

			$this->addAdress($this->email,'nome do destinatário');

			$body = '';
			foreach ($parametros as $key => $value) {
				$body.=ucfirst($key).": ".utf8_decode($value);
				$body.="<hr>";
			}
	
			$this->mailer->Body = $body;
		}

		public function addAdress($mail,$nome){
			$this->mailer->addAddress($mail,$nome);
			return $this;
		}

		public function sendMail(){
			$this->mailer->CharSet = "utf-8";
			if($this->mailer->send()){
				return true;
			}else{
				return false;
			}
		}


	}

?>