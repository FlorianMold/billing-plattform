<!-- Mail für die Benachrichtigungen -->
<body>
<img src="<?php echo $message->embed('public/img/elk.jpg'); ?>" height="130" width="400" class="img-responsive center-block">
<h2>ELK Fertighaus GmbH Rechnungsaustauschplattform!</h2><br>
<p>Ein Lieferant hat bei der Rechnung mit dieser Rechnungsnummer <b><?php echo e($billinfo->id); ?></b> einen Fehler entdeckt.</p>
<p>Unten steht die genaue Beschreibung des Fehlers:</p>
<br>
<h3><?php echo e($billinfo->mail_title); ?></h3>
<p><?php echo e($billinfo->mail_desc); ?></p>
<br><br>
<p>Hier ist die Adresse unserer Webseite, auf der Sie weitere Informationen über unser Unternehmen finden können.</p>
<a href="http://www.elk.at/">www.elk.at</a>
</body>