<body>
    <img src="<?php echo $message->embed('public/img/elk.jpg'); ?>" height="130" width="400" class="img-responsive center-block">
    <h2>ELK Fertighaus GmbH Rechnungsaustauschplattform!</h2>
    <br>
    <p>Der Buchhalter mit dieser E-Mail ( <b><?php echo e($user->email); ?></b> ) wurde freigeschaltet.</p>
    <p>Das bedeutet, dass Sie sich ab jetzt mit ihrer E-Mail an der Plattform anmelden können.</p>
    <br>
    <p>Hier ist die Url unserer Webseite, auf welcher Sie Informationen über unser Unternehmen finden können:</p>
    <a href="http://www.elk.at/">www.elk.at</a>
</body>