<!-- Titel der Webseite überschrieben -->
<?php $__env->startSection('title', 'Administratoransicht'); ?>


<?php $__env->startSection("wrapper_content"); ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center">Willkommen auf der Administratorseite der elektronischen Rechnungsplattform der Firma ELK Fertighaus GmbH!</h1><br><br>
        </div>
    </div>
    <!-- Informationen für den Administrator-->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-users fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo e($suppliers); ?></div>
                            <div>Lieferanten</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo e($unlockedSuppliers); ?></div>
                            <div>freigeschaltene Lieferanten</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo e($newSuppliers); ?></div>
                            <div>neue Lieferanten</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo e($bills); ?></div>
                            <div>offene Rechnungen</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            <h4 class="page-header"></h4>
        </div>
    </div>

    <!-- ELK Haus Bild -->
    <div class="row">
        <div class="col-lg-12">
            <img src="../img/elkhaus.jpg" alt="ELK Fertighaus GmbH" class="img-responsive img-circle" style="display: block; margin-left: auto; margin-right: auto;">
        </div>
    </div>
<?php $__env->stopSection(true); ?>
<?php echo $__env->make("layouts.masterBackend", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>