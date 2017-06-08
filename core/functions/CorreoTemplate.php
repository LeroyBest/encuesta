<?php
function EmailTemplate($nombre,$link) {
  $HTML = '
  <html>
  <body style="background: #FFFFFF;font-family: Verdana; font-size: 14px;color:#1c1b1b;">
  <div style="">
      <h2>Hola '.$nombre.'</h2>
      <p style="font-size:17px;">Tengo el gusto de invitarte a participar en una nueva encuesta.</p>
  	  <p>Espero te resulte interesante.</p>
	  <p></p>
	  <p>Saludos</p>

	 <p style="padding:15px;background-color:#ECF8FF;">
  		Enlace: <a style="font-weight:bold;color: #2BA6CB;" href="'.$link.'" target="_blank">clic aquí &raquo;</a>
  	</p>
	<p style="font-size:10px;">Por ser un remitente de uso masivo, le agradecemos no dirija sus consultas a esta dirección.
	</p>
  </div>
  </body>
  </html>
  ';
      return $HTML;
}
?>
