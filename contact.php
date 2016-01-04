<?php

$field_name = $_POST['InputName'];

$field_email = $_POST['InputEmail'];

$field_message = $_POST['InputMessage'];



$mail_to = 'dermiqpro@hotmail.com';

$subject = 'Poruka sa sajta DermiqPro '.$field_name;



$body_message = 'Od: '.$field_name."\n";

$body_message .= 'E-mail: '.$field_email."\n";

$body_message .= 'Tekst poruke: '.$field_message;



$headers = 'From: '.$field_email."\r\n";

$headers .= 'Reply-To: '.$field_email."\r\n";



$mail_status = mail($mail_to, $subject, $body_message, $headers);



if ($mail_status) { ?>

	<script language="javascript" type="text/javascript">

		alert('Vasa poruka je uspesno poslata. Kontaktiracemo vas u najkracem roku.');

		window.location = 'kontakt.php';

	</script>

<?php

}

else { ?>

	<script language="javascript" type="text/javascript">

		alert('Doslo je do greske, poruka nije poslata.');

		window.location = 'kontakt.php';

	</script>

<?php

}

?>
