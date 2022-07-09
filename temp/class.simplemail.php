<?php

	class simplemail{
		public $to=NULL;
		public $cc=NULL;
		public $bcc=NULL;
		public $from=NULL;
		public $subject=NULL;
		public $body=NULL;
		public $htmlbody=NULL;
		public $send_text=TRUE;
		public $send_html=FALSE;
		public $message='';
		public $headers='';
		
	public function send( $to=NULL, $subject=NULL,$message=NULL,$headers=NULL)
		{
		if(func_num_args() >=3)
			{
				$this->to=$to;
				$this->subject=$subject;
				$this->message=$message;
				
					if($headers)
						{
							$this-> headers=$headers;
						}
					else
						if($this->from)
							{
								$this->headers.="From:".$this->from."\r\n";
							}
						if($this->cc)
							{
								$this->headers.="cc:".$this->cc."\r\n";
							}
						if($this->bcc)
							{
								$this->headers.="Bcc :".$this->bcc."\r\n";
							}
						if($this->send_text and !$this->send_html)
							{
								$this->message=$this->body;
							}
						else if ($this->send_html and !$this->send_text)
							{
								$this->message=$this->htmlbody;
								$this->headers.="MIME-Version: 1.0\r\n";
								$this->headers.="content-type: text/html;".
								"charset=iso-8859-1\r\n";
							}
						else
							{
								$_boundary="==MP_Bound_xycc948==";
								$this->headers="MIME-Version: 1.0\r\n";
								$this->headers.="content-type: multipart/alternative;".
								"boundry=\"$_boundary\"\r\n";
								
								$this->message="This Multipart Message in "."MIME format\n";
								$this->message.="--$_boundary\n";
								$this->message.="content-type: text/plain;".
								"charset=\"iso-8859-1\"\n";
								$this->message.="Cntent-transfer-encording: 7bit\n\n";
								$this->message.=$this->body."\n";
								$this->message.="--$_boundary\n";
								$this->message.="content-type: text/html;".
								"charset=iso-8859-1\r\n";
								$this->message.="Cntent-transfer-encording: 7bit\n\n";
								$this->message.=$this->htmlbody."\n";
								$this->message.="--$_boundary--";
							}
						}
					if(!mail($this->to,$this->subject,$this->message,$this->headers))
						{
							throw new Exception('sendin mail failed.');
							return FALSE;
						}
					else
						{
							return TRUE;
						}
					
				}
			}
?>
								
								
								
			
		
