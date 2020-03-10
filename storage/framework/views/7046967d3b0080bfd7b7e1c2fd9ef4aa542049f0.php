<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ELK Rechnungsplattform - <?php echo $__env->yieldContent('title'); ?></title>

    <meta name="description" content="ELK-Rechnungsplattform">
    <meta name="author" content="Florian Mold und Michael Vogler">
    <meta name="_token" content="<?php echo csrf_token(); ?>"/>

    <!-- CSS-Section, damit man nachträglich in den Seiten etwas hinzufügen kann -->
    <?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::asset('font-awesome/css/font-awesome.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::asset('css/style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::asset('css/dataTables.bootstrap.min.css')); ?>">
        <?php echo $__env->yieldSection(); ?>

</head>
<body>

<div class="container-fluid">

    <!--Header-Section, damit dieser bei Nichtverwendung überschrieben werden kann -->
    <?php $__env->startSection('header'); ?>
    <div class="row">
        <br>
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <div class="col-md-6">
                <img src="img/elk.jpg" class="img-responsive" alt="Elk Firmenlogo">
            </div>
            <div class="col-md-6" >
                <div class="dropdown" style="float:right;">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Angemeldet als <strong>
                            <?php if (isset($userinfo)): ?>
                                <?php echo e($userinfo->username); ?>

                                <?php endif; ?>
                        </strong>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="logout" id="logout">Abmelden</a></li>
                        <li><a href="changePassword/<?php if (isset($userid)): ?><?php echo e($userid); ?><?php endif; ?>">Passwort ändern</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3">
        </div>
    </div>
    <?php echo $__env->yieldSection(); ?>
    <!-- Ende des Headers -->


    <br><br>

        <!-- Hier wird der Content von der Blade-Template Engine eingefügt -->
        <?php echo $__env->yieldContent('content'); ?>


    <!-- Footer -->
    <div class="row footer" style="background-color:gray;">
        <div class="col-md-3">
        </div>
        <div class="col-md-6 text-center">
        <div class="col-md-3">
            <a href="http://www.elk.at/">Startseite</a>
        </div>
        <div class="col-md-3">
            <a href="http://www.elk.at/kontakt/">Kontakt</a>
        </div>
        <div class="col-md-3">
            <a href="http://www.elk.at/impressum/">Impressum</a>
        </div>
        <div class="col-md-3">
            <a href="http://www.elk.at/datenschutz/">Datenschutz</a>
        </div>
        </div>
        <div class="col-md-3">
        </div>
    </div>
    <!-- Ende des Footers -->

</div>

<!-- Hier werden die Popups von der Blade-Template Engine eingefügt -->
<?php $__env->startSection('popups'); ?>
<?php echo $__env->make('includes.change_password_popup', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldSection(); ?>


<!-- JS-Section, damit man nachträglich in den Seiten etwas hinzufügen kann -->
<?php $__env->startSection('js'); ?>
    <script type="text/javascript" src="<?php echo e(URL::asset('js/jquery.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(URL::asset('js/bootstrap.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(URL::asset('js/scripts.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(URL::asset('js/jquery.dataTables.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(URL::asset('js/dataTables.bootstrap.min.js')); ?>"></script>

    <script>
        $(document).ready(function() {
            $('.dataTables').DataTable({
                responsive: true,
                "language": {
                    "search": "Suche:",
                    "lengthMenu": "_MENU_ Einträge pro Seite anzeigen",
                    "zeroRecords": "Es gibt keine Einträge!",
                    "info": "Seite _PAGE_ von _PAGES_",
                    "infoEmpty": "Keine Einträge verfügbar!",
                    "infoFiltered": "(von _MAX_ Einträgen gefiltert)",
                    "oPaginate": {
                        sFirst: "Erste",
                        sLast: "Letzte",
                        sNext: "Nächste",
                        sPrevious: "Vorherige"
                    }
                }
            });
        });
    </script>
<?php echo $__env->yieldSection(); ?>

</body>
</html>