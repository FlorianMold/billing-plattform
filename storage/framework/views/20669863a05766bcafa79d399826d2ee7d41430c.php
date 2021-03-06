<?php $__env->startSection('title', 'E-Mail'); ?>

<?php $__env->startSection('wrapper_content'); ?>
  @parent
  <div class="row">
    <div class="col-md-12">
      <!-- Hier werden die Fehler aus der Form angezeigt -->
      <?php if($errors->any()): ?>
        <br>
        <div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert">&times;</a>
          <?php foreach($errors->all() as $error): ?>
            <?php echo e($error); ?>

            <br>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
      <h3 class="page-header text-center">E-Mail vom automatisierten Rechnungssystem</h3>
      <?php if(session('success_accountingSystem')): ?>
        <div class="col-md-12 alert alert-success success_accountingSystem"><?php echo e(session('success_accountingSystem')); ?></div>
      <?php endif; ?>
      <?php if(!(isset($emailAccountingSystem))): ?>
        <div class="col-md-12 alert alert-danger">Sie müssen eine E-Mail Adresse angeben, an welche die Rechnungen gesendet werden solln. Wenn keine E-Mail vorhanden ist, können keine Rechnungen von Ihnen geholt werden!</div>
      <?php endif; ?>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <?php echo Form::open(array('url' => '/backend/email/update/accountingSystem')); ?>

      <?php if(isset($emailAccountingSystem)): ?>
        <?php echo Form::text('email', $emailAccountingSystem->emailaddress, array('class' => 'form-control emailAccountingSystem')); ?>

      <?php else: ?>
        <?php echo Form::text('email', null, array('class' => 'form-control emailAccountingSystem', 'placeholder' => 'example@ex.le')); ?>

      <?php endif; ?>
      <a class="btn btn-danger btn-md removeAccountingEmail" style="margin-top:10px; margin-left: 10px; float:right" data-toggle="tooltip" data-placement="top" title="Feld leeren"><span class="glyphicon glyphicon-remove"></span></a>
      <a href="/backend/email" class="btn btn-info btn-md" style="margin-top:10px; margin-left: 10px; float:right" data-toggle="tooltip" data-placement="top" title="alte E-Mail wieder hineinschreiben"><span class="glyphicon glyphicon-refresh"></span></a>
      <button type="submit" class="btn btn-success btn-md submit_accountingEmail" style="margin-top:10px; float:right" data-toggle="tooltip" data-placement="top" title="Rechnungssystem E-Mail speichern"><span class="glyphicon glyphicon-ok"></span></button>
      <?php echo Form::close(); ?>

    </div>

    <div class="row"></div>
      <div class="col-md-12">
        <h3 class="page-header text-center">E-Mail für die Buchhaltungsbenachrichtigung</h3>
        <?php if(session('success_accounter')): ?>
          <div class="col-md-12 alert alert-success success_accounter"><?php echo e(session('success_accounter')); ?></div>
        <?php endif; ?>
        <?php if(!(isset($emailAccounter))): ?>
          <div class="col-md-12 alert alert-danger">Sie müssen eine E-Mail Adresse angeben, an die die Benachrichtigungen für die Buchhaltung gesendet werden! Wenn Sie keine E-Mail angeben, bekommt die Buchhaltung keine Benachrichtigungen.</div>
        <?php endif; ?>
      </div>
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <?php echo Form::open(array('url' => '/backend/email/update/accounter')); ?>

          <?php if(isset($emailAccounter)): ?>
            <?php echo Form::text('email', $emailAccounter->emailaddress, array('class' => 'form-control emailAccounter')); ?>

          <?php else: ?>
            <?php echo Form::text('email', null, array('class' => 'form-control emailAccounter', 'placeholder' => 'example@ex.le')); ?>

          <?php endif; ?>
          <a class="btn btn-danger btn-md removeAccounterEmail" style="margin-top:10px; margin-left: 10px; float:right" data-toggle="tooltip" data-placement="top" title="Feld leeren"><span class="glyphicon glyphicon-remove"></span></a>
          <a href="/backend/email" class="btn btn-info btn-md" style="margin-top:10px; margin-left: 10px; float:right" data-toggle="tooltip" data-placement="top" title="alte E-Mail wieder hineinschreiben"><span class="glyphicon glyphicon-refresh"></span></a>
          <button type="submit" class="btn btn-success btn-md submit_accounterEmail" style="margin-top:10px; float:right" data-toggle="tooltip" data-placement="top" title="Buchhalter E-Mail speichern"><span class="glyphicon glyphicon-ok"></span></button>
        <?php echo Form::close(); ?>

      </div>

    <div class="row"></div>
    <div class="col-md-12">
      <h3 class="page-header text-center">E-Mail für die Administratorbenachrichtigungen</h3>
      <?php if(session('success_admin')): ?>
        <div class="col-md-12 alert alert-success success_admin"><?php echo e(session('success_admin')); ?></div>
      <?php endif; ?>
      <?php if(!(isset($emailAdminInfo))): ?>
        <div class="alert alert-danger">Sie müssen eine E-Mail Adresse angeben, an welche die Benachrichtigungen für den Administrator gesendet werden sollen! Wenn keine E-Mail vorhanden ist, bekommt der Administrator keine Benachrichtigungen!</div>
      <?php endif; ?>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <?php echo Form::open(array('url' => '/backend/email/update/admin')); ?>

        <?php if(isset($emailAdminInfo)): ?>
          <?php echo Form::text('email', $emailAdminInfo->emailaddress, array('class' => 'form-control emailAdminInfo')); ?>

        <?php else: ?>
          <?php echo Form::text('email', null, array('class' => 'form-control emailAdminInfo', 'placeholder' => 'example@ex.le')); ?>

        <?php endif; ?>
        <a class="btn btn-danger btn-md removeAdminEmail" style="margin-top:10px; margin-left: 10px; float:right" data-toggle="tooltip" data-placement="top" title="Feld leeren"><span class="glyphicon glyphicon-remove"></span></a>
        <a href="/backend/email" class="btn btn-info btn-md" style="margin-top:10px; margin-left: 10px; float:right" data-toggle="tooltip" data-placement="top" title="alte E-Mail wieder hineinschreiben"><span class="glyphicon glyphicon-refresh"></span></a>
        <button type="submit" class="btn btn-success btn-md submit_adminEmail" style="margin-top:10px; float:right" data-toggle="tooltip" data-placement="top" title="Administrator E-Mail speichern"><span class="glyphicon glyphicon-ok"></span></button>
      <?php echo Form::close(); ?>

    </div>
  </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.masterBackend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>