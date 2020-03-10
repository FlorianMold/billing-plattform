<body>
    <img src="<?php echo $message->embed('public/img/elk.jpg'); ?>" height="130" width="400" class="img-responsive center-block">
    <h2>ELK Fertighaus GmbH - Rechnungsaustauschplattform!</h2>
    <br>
    <h3>Sehr geehrte Damen und Herren,</h3>
    <p>Ihr Benutzer des Unternehmens <b><?php echo e($user->adr_name); ?></b> wurde nun für unsere Rechnungsplattform freigeschaltet!</p>
    <p>Bitte melden Sie sich nun auf unserer Rechnungsplattform (<a href="<?php echo e($url); ?>">Rechnungsplattform</a>) mit ihrer angegebenen Email und ihrem gesetzten Passwort an.</p>
    <p>Bei weiteren Fragen wenden Sie sich bitte an das Unternehmen ELK Fertighaus GmbH - Standort Schrems.</p>
    <br>
    <p>Hier nocheinmal die Url, falls Sie den Link nicht öffnen können:</p>
    <p><?php echo e($url); ?></p>
    <p>Hier ist die Url unserer Webseite, auf welcher Sie Informationen über unser Unternehmen finden können:</p>
    <a href="http://www.elk.at/">www.elk.at</a>
</body>