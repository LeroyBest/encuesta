<?php

/*
 * @author : nicolas Lattuada 
 * send emails with pdf attachment
 */

class AttachMailer{
    
    private $from, $to, $subject, $mess, $hash, $output;
    private $documents = Array();
    
    /*
     * @params from: adresse de l'envoyeur(+reponse)
     *            to : adresse a qui on envoie
     *            subject : le sujet du message
     *            mess : le message lui meme(format html)
     */
    function __construct($_from, $_to, $_subject, $_mess){
        $this->from = $_from;
        $this->to = $_to;
        $this->subject = $_subject;
        $this->mess = $_mess;
        $this->hash = md5(date('r', time()));
    }
    
    /*
     * @params url du document ajout
     */    
    public function attachFile($url, $name = ""){
        $attachment = chunk_split(base64_encode(file_get_contents($url)));
        $docName    = $name == "" ? basename($url) : $name;
        $randomHash = $this->hash;
		$eol = PHP_EOL;
		$separator = md5(time());
			$docOutput= "--".$separator.$eol;
			//$message .= "Content-Type: application/pdf; name=\"".$fileName."\"".$eol; 
			$docOutput .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol; 
			$docOutput .= "Content-Transfer-Encoding: base64".$eol;
			$docOutput .= "Content-Disposition: attachment".$eol.$eol;
			$docOutput .= $attachment.$eol;
        /*$docOutput = "--PHP-alt-$randomHash--\r\n \r\n"
                     ."--PHP-mixed-$randomHash \r\n"
                     ."Content-Type: application/pdf; name=".$docName."\r\n"
                     ."Content-Transfer-Encoding: base64 \r\n"
                     ."Content-Disposition: attachment \r\n\r\n"
                     .$attachment . "\r\n";*/
        $this->documents[] = $docOutput;
    }
    
    private function makeMessage(){
	    $eol = PHP_EOL;
		$separator = md5(time());
        $randomHash = $this->hash;
		    $messageOutput = "--".$separator.$eol;
			$messageOutput .= "Content-Transfer-Encoding: 7bit".$eol.$eol;
			//$message .= "Thanks for filling online application form. Your online admission registration number is E0000". mysql_insert_id() . "." .$eol;
			$messageOutput .=$this->mess.$eol;
			$messageOutput .= "--".$separator.$eol;
			$messageOutput .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
			$messageOutput .= "Content-Transfer-Encoding: 8bit".$eol.$eol;

			/*$message .= "--".$separator.$eol;
			//$message .= "Content-Type: application/pdf; name=\"".$fileName."\"".$eol; 
			$message .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol; 
			$message .= "Content-Transfer-Encoding: base64".$eol;
			$message .= "Content-Disposition: attachment".$eol.$eol;
			$message .= $attachment.$eol;
			$message .= "--".$separator."--";*/
        /*$messageOutput = "--PHP-mixed-$randomHashrn"
                         ."Content-Type: multipart/alternative; boundary=PHP-alt-$randomHash \r\n \r\n"
                         ."--PHP-alt-$randomHash \r\n"
                         ."Content-Type: text/plain; charset='iso-8859-1'\r\n"
                         ."Content-Transfer-Encoding: 7bit \r\n \r\n"
                         .$this->mess . "\r\n \r\n"
                         ."--PHP-alt-$randomHash \r\n"
                         ."Content-Type: text/html; charset='iso-8859-1'\r\n"
                         ."Content-Transfer-Encoding: 7bit\r\n \r\n"
                         . $this->mess . "\r\n";*/
                         
        foreach($this->documents as $document){
            $messageOutput .= $document; 
        }
        //$messageOutput .="--PHP-mixed-$randomHash;--";
		$messageOutput .= "--".$separator.$eol;
        $this->output = $messageOutput;
    }
    
    public function send(){
		$eol = PHP_EOL;
		$separator = md5(time());
        $this->makeMessage();
        $from = $this->from;
        $randomHash = $this->hash;
        //$headers = "From: $fromrnReply-To: $from";
        //$headers .= "\r\n Content-Type: multipart/mixed; boundary=PHP-mixed-'$randomHash'";
		$headers = 'From: PH Park Place <'.$from.'>'.$eol;
		$headers .= 'MIME-Version: 1.0' .$eol;
		$headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"";
        $mail_sent = @mail( $this->to, $this->subject, $this->output, $headers );
        return $mail_sent ? true : false;
    }
    
}
