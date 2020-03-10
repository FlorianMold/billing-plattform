<!-- Mail zum Passwort zurücksetzen -->
<body>
<img src="<?php echo $message->embed('public/img/elk.jpg'); ?>" height="130" width="400" class="img-responsive center-block">
<h2>ELK Fertighaus GmbH Rechnungsaustauschplattform!</h2><br>
<h3>Hallo <?php echo e($user->username); ?>,</h3>
<b>Wir haben eine Anfrage erhalten, das Passwort Ihres Accounts zurückzusetzen.</b>
<p>Wenn Sie eine Zurücksetzungs-Anfrage für <?php echo e($user->username); ?> gestellt haben, klicken Sie bitte auf die Schaltfläche unten. Sollte diese Anfrage nicht von Ihnen stammen, können Sie diese E-Mail ignorieren.</p>
<br>
<a href="<?php echo e($url); ?>" class="btn btn-lg btn-primary center-block">Passwort zurücksetzen</a><br><br>
<br><br>
<p>Hier ist die Adresse unserer Webseite, auf der Sie weitere Informationen über unser Unternehmen finden können.</p>
<a href="http://www.elk.at/">www.elk.at</a>
</body>