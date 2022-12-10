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

 <form  method="post" action="<?php echo e(route('documents.store')); ?>">
    <?php echo csrf_field(); ?>



    <div class="p-2 text-right" >
     <label  class="h4 text-white m-2" for="fin" >إسم الوثيقة  :</label>
  
    <input class="form-control my-4  p-2 " type="text" name="nom" id="nom">


    

    <input class=" col col-12 btn btn-success text-center"   type="submit" value="إضافة">
</div>
</form>
</div>






    <?php if(empty($documents)): ?>
 لا توجد مجموعة 
<?php endif; ?>

<div class="m-2 p-2">
    <table class="table table-bordred bg-dark">
    <thead class="thead-light text-center">
        <tr>
            <th>#</th>
            <th>إسم الوثيقة</th>
            <th></th>
            <th></th>



        </tr>
    </thead>
   

<?php if(isset($documents)): ?>
<?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tbody class="text-white text-center">
<tr>
        <td><?php echo e($loop->index+1); ?></td>
        <td><?php echo e($document->nom); ?></td>
        <td><a href="<?php echo e(route('documents.edit',$document->id)); ?>"  class="btn btn-warning">تعديـــل</a>
            <td ><form action="<?php echo e(route('documents.destroy',$document->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
<input type="submit"  class="btn btn-danger" value="حذف">

                <?php echo method_field('DELETE'); ?>
            </form></td>

</tr></tbody>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php endif; ?>





    </table>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\1\Desktop\cvs-main\resources\views/documents/index.blade.php ENDPATH**/ ?>