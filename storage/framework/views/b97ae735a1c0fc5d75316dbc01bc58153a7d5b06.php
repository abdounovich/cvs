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

<div class="bg-dark p-2 m-2 text-right">

 <form  method="post" action="/registration2b">
    <?php echo csrf_field(); ?>







<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" >الهاتف  :</label>
    </div>

    <div class="col col-10  p-2">
        <input class="  form-control ml-4 " type="text" name="telephone" id="telephone">
    </div>

</div>





<div class="row m-2" >

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" >الإيميل </label>
    </div>

    <div class="col col-10  p-2">


        <input class="  form-control ml-4 " type="text" name="email" id="email">
    </div>

</div>























<input type="hidden" name="nom" value="<?php echo e($nom); ?>">
<input type="hidden" name="prenom" value="<?php echo e($prenom); ?>">
<input type="hidden" name="date_naissance" value="<?php echo e($date_naissance); ?>">
<input type="hidden" name="address" value="<?php echo e($address); ?>">
<input type="hidden" name="sexe" value="<?php echo e($sexe); ?>">


<div class="row m-2 ">


    <input class=" p-2 btn btn-primary col col-12"   type="submit" value="إضافة">
</div>
</form>


</div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\1\Desktop\cvs-main\resources\views/registration2b.blade.php ENDPATH**/ ?>