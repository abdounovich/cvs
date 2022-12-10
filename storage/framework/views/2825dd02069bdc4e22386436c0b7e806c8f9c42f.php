<?php $__env->startSection('title', 'Clients'); ?>



<?php $__env->startSection('content'); ?>




<?php if(\Session::has('success')): ?>
    <div class="alert   alert-success  text-dark  text-right ">
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

<div class="bg-dark text-right p-2 m-2 rounded">

 <form  method="post" action="<?php echo e(route('creneaus.store')); ?>">
    <?php echo csrf_field(); ?>

<div class="row p-2">

    <div class="col col-2  ">
        <label  class="h4 text-white" for="fin" >إسم الحصة  :</label>
    </div>

    <div class="col col-10 ">
        <input class="  form-control  " type="text" name="nom" id="nom">
    </div>

</div>



<div class="row p-2">

    <div class="col col-2 ">
        <label  class="h4 text-white" for="fin" >اليوم  :</label>
    </div>

    <div class="col col-10 ">
        <?php
            $jours=array();
            $jours=['الجمعة','السبت','الأحد','الإثنين','الثلاثاء','الأربعاء','الخميس'];
        ?>
        <select name="jour" class="custom-select form-group" >
            <?php $__currentLoopData = $jours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($jour); ?>"><?php echo e($jour); ?></option>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
    </div>

</div>



<div class="row p-2">

    <div class="col col-2 ">
     <label  class="h4 text-white" for="debut" >البداية   :</label>
    </div>
    <div class="col col-10">
       <input type="time" class="form-control" name="debut" id="debut"></div>

</div>



<div class="row p-2">

    <div class="col col-2 ">
     <label  class="h4 text-white" for="debut" >النهاية   :</label>
    </div>
    <div class="col col-10">
       <input type="time" name="fin" class="form-control" id="fin"></div>

</div>



<div class="row p-2">

    <div class="col col-2 ">
     <label  class="h4 text-white" for="fin" >الفوج   :</label>
    </div>
    <div class="col col-10 ">
        <select name="groupe" class="custom-select form-group" aria-label="Default select example">
            <?php $__currentLoopData = $groupes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $groupe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($groupe->id); ?>"><?php echo e($groupe->nom); ?></option>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select></div>

</div>







    <input class="  btn btn-success col col-12 p-2"   type="submit" value="إضافة">

</form>


</div>








<?php $__empty_1 = true; $__currentLoopData = $groupes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $groupe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    




<?php endif; ?>

<div class="m-2 p-2">
    <table class="table table-bordred bg-dark">
  
<?php $__currentLoopData = $groupes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $groupe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tbody class="text-white text-center">
<tr>
        <td colspan="4" class="text-center bg-info text-white"><?php echo e($groupe->nom); ?></td>

</tr>
 <?php $__currentLoopData = $groupe->creanau; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $creanau): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
   
       
    <td>
        <?php echo e($creanau->nom); ?>

            </td> 
            <td>
                <?php echo e($creanau->jour); ?> -> 
                   
                        <?php echo e($creanau->debut); ?> |  
                            <?php echo e($creanau->fin); ?>

                                
                            </td>   
                            <td ><a href="<?php echo e(route('creneaus.edit',$creanau->id)); ?>"  class="btn btn-warning">تعديـــل</a></td>
                            <td>
                            <form action="<?php echo e(route('creneaus.destroy',$creanau->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                <input type="submit"  class="btn btn-danger" value="حذف">
                
                                <?php echo method_field('DELETE'); ?>
                            </form></td>
</tr> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    




    </table>
</div>









    





<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\1\Desktop\cvs-main\resources\views/creneaus/index.blade.php ENDPATH**/ ?>