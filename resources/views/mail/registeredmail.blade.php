<!-- Mail bei der Regisitrierung -->
<body>
<img src="<?php echo $message->embed('public/img/elk.jpg'); ?>" height="130" width="400" class="img-responsive center-block">
<h2>ELK Fertighaus GmbH Rechnungsaustauschplattform!</h2><br>
<h3>Hallo {{$user->username}},</h3>
<b>Sie haben sich erfolgreich beim elektronischen Rechnungsaustausch der Firma ELK Fertighause GmbH registriert.</b>
<p>Wenn Sie vom Administrator freigeschaltet werden, können Sie mit dem Rechnungsupload beginnen.</p>
<br><br>
<p>Hier ist die Adresse unserer Webseite, auf der Sie weitere Informationen über unser Unternehmen finden können.</p>
<a href="http://www.elk.at/">www.elk.at</a>
</body>