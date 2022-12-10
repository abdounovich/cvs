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

 <form  method="post" action="<?php echo e(route('registrations.store')); ?>">
    <?php echo csrf_field(); ?>




<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" >النقل</label>
    </div>

    <div class="col col-10  p-2">





            <select id="my-select" class="custom-select" name="transport">
                <option value="1"> نعم</option>
                <option value="0">لا </option>

            </select>
    </div>

</div>


<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" > المدة بالأشهر </label>
    </div>

    <div class="col col-10  p-2">


        <input class="  form-control ml-4 " type="text" name="duree" id="duree">
    </div>

</div>


<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" > المبلغ المدفوع  بالدينار </label>
    </div>

    <div class="col col-10  p-2">


        <input class="  form-control ml-4 " type="text" name="prix_abonnement" id="prix_abonnement">
    </div>

</div>


<div class="row m-2">

<div class="col col-2 p-2">
    <label  class="h4 text-white" for="fin" > المبلغ المتبقي بالدينار </label>
</div>

<div class="col col-10  p-2">


    <input class="  form-control ml-4 " type="text" name="prix_reste" id="prix_reste">
</div>

</div>


<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" >الوثائق المقدمة  </label>
    </div>

    <div class="col col-10  p-2">
        <select multiple="multiple" class="form-control"    
        name="documents[]" id="documents[]" required>
        <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
        <option value="<?php echo e($document->nom); ?>"><?php echo e($document->nom); ?></option>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
          
            </select>

    </div>

</div>



















<div class="row m-2">

    <div class="col col-2 p-2">
     <label  class="h4 text-white" for="fin" >الفوج    :</label>
    </div>
    <div class="col col-10 p-2">
        <select name="groupe" class="custom-select form-group">
            <?php $__currentLoopData = $groupes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $groupe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($groupe->id); ?>"><?php echo e($groupe->nom); ?></option>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select></div>

</div>



<input type="hidden" name="nom" value="<?php echo e($nom); ?>">
<input type="hidden" name="prenom" value="<?php echo e($prenom); ?>">
<input type="hidden" name="date_naissance" value="<?php echo e($date_naissance); ?>">
<input type="hidden" name="address" value="<?php echo e($address); ?>">
<input type="hidden" name="nom_pere" value="<?php echo e($nom_pere); ?>">
<input type="hidden" name="email" value="<?php echo e($email); ?>">
<input type="hidden" name="sexe" value="<?php echo e($sexe); ?>">

<input type="hidden" name="telephone" value="<?php echo e($telephone); ?>">
<input type="hidden" name="telephone_pere" value="<?php echo e($telephone_pere); ?>">


  



<div class="row m-2 ">


    <input class=" p-2 btn btn-primary col col-12"   type="submit" value="إضافة">
</div>
</form>


</div>








<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\1\Desktop\cvs-main\resources\views/registration3.blade.php ENDPATH**/ ?>