<?php $__env->startSection('title', 'Clients'); ?>



<?php $__env->startSection('content'); ?>




<?php if(\Session::has('success')): ?>
    <div class="alert  alert-success  text-dark text-right ">
        <ul>
            <li class="p-2"><?php echo \Session::get('success'); ?></li>
        </ul>
    </div>
<?php endif; ?>

<?php if(\Session::has('erreur')): ?>
    <div class="alert  alert-danger  text-right ">
        <ul>
            <li class="p-2"><?php echo \Session::get('erreur'); ?></li>
        </ul>
    </div>
<?php endif; ?>

<div class="bg-dark p-2 m-2">

 <form  method="POST" action="<?php echo e(route('groupes.update',$groupe->id)); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>



    <div class="p-2 text-right" >
     <label  class="h4 text-white m-2" for="fin" >إسم الفوج  :</label>
  
    <input class="form-control my-4  p-2 " value="<?php echo e($groupe->nom); ?>" type="text" name="nom" id="nom">


    

    <input class=" col col-12 btn btn-success text-center"   type="submit" value="حفظ التعديلات">
</div>
</form>
</div>






  




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\1\Desktop\cvs-main\resources\views/groupes/edit.blade.php ENDPATH**/ ?>