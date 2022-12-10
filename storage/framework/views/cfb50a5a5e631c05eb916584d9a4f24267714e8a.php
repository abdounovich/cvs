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


<div class="text-right"><form action="<?php echo e(route('registrations.destroy',$registration->id)); ?>" method="POST">
    
    <?php echo csrf_field(); ?>
<input type="submit"  class="btn btn-danger text-right mr-2" value="  حذف المشترك ">

    <?php echo method_field('DELETE'); ?>
</form></div>
<div class="bg-dark p-2 m-2 text-right">

 <form  method="post" action="/registration/edit/<?php echo e($registration->id); ?>">
    <?php echo csrf_field(); ?>



<div class="row m-2">

    <div class="col col-2 p-2  ">
        <label  class="h4 text-white" for="fin" >الإسم  :</label>
    </div>

    <div class="col col-10  p-2 ">
        <input class="  form-control ml-4 " value="<?php echo e($registration->prenom); ?>" type="text" name="prenom" id="prenom">
    </div>

</div>


<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" >اللقب  :</label>
    </div>

    <div class="col col-10  p-2">
        <input class="  form-control ml-4 " value="<?php echo e($registration->nom); ?>" type="text" name="nom" id="nom">
    </div>

</div>



<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" >تاريخ الميلاد </label>
    </div>

    <div class="col col-10  p-2">

<input type="date"  class="  form-control ml-4 " value="<?php echo e($registration->date_naissance); ?>" name="date_naissance" id="date_naissance">

    </div>

</div>





<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" >العنوان</label>
    </div>

    <div class="col col-10  p-2">
        <input class="  form-control ml-4 " type="text" name="address" value="<?php echo e($registration->address); ?>" id="address">
    </div>

</div>









<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" >الجنس </label>
    </div>

    <div class="col col-10  p-2">



            <select id="my-select" class="custom-select" name="sexe">
                <option value="ذكر">ذكر</option>
                <option value="أنثى">أنثى</option>

            </select>
    </div>

</div>

<?php
        $age = date_diff(date_create($registration->date_naissance), date_create('now'))->y;

?>
<?php if($age<15): ?>
    

<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" >إسم الأب</label>
    </div>

    <div class="col col-10  p-2">
        <input class="  form-control ml-4 "  value="<?php echo e($registration->nom_pere); ?>" type="text" name="nom_pere" id="nom_pere">
    </div>

</div>




<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" >هاتف الأب  :</label>
    </div>

    <div class="col col-10  p-2">
        <input class="  form-control ml-4 " value="<?php echo e($registration->telephone_pere); ?>" type="text" name="telephone_pere" id="telephone_pere">
    </div>

</div>

<?php else: ?>
    
<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" >الهاتف  :</label>
    </div>

    <div class="col col-10  p-2">
        <input class="  form-control ml-4 " value="<?php echo e($registration->telephone); ?>" type="text" name="telephone" id="telephone">
    </div>

</div>


<?php endif; ?>









<div class="row m-2" >

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" >الإيميل </label>
    </div>

    <div class="col col-10  p-2">


        <input class="  form-control ml-4 " value="<?php echo e($registration->email); ?>" type="text" name="email" id="email">
    </div>

</div>



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
        <label  class="h4 text-white" for="fin" > مدة الإشتراك بالأشهر </label>
    </div>

    <div class="col col-10  p-2">


        <input class="  form-control ml-4 " value="<?php echo e($registration->duree); ?>" type="number" name="duree" id="duree">
    </div>

</div>


<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" > المبلغ المدفوع  بالدينار </label>
    </div>

    <div class="col col-10  p-2">


        <input class="  form-control ml-4 " value="<?php echo e($registration->prix_abonnement); ?>" type="number" name="prix_abonnement" id="prix_abonnement">
    </div>

</div>


<div class="row m-2">

<div class="col col-2 p-2">
    <label  class="h4 text-white" for="fin" > المبلغ المتبقي بالدينار </label>
</div>

<div class="col col-10  p-2">


    <input class="  form-control ml-4 " type="number" value="<?php echo e($registration->prix_reste); ?>" name="prix_reste" id="prix_reste">
</div>

</div>


<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" >الوثائق المقدمة  </label>
       
    </div>

    <div class="col col-10  p-2">


        
            <?php
              $docs = json_decode($registration->documents, true);

 ?>

        <select multiple="multiple" class="form-control"    
        name="documents[]" id="documents[]" required>
      
                    
                  <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>        

    
                <option <?php $__currentLoopData = $docs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php if($doc==$document->nom): ?>
                                    selected  <?php endif; ?>
  
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                value="<?php echo e($document->nom); ?>"><?php echo e($document->nom); ?>



       </option> 
       
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </select>

    </div>

</div>



















<div class="row m-2">

    <div class="col col-2 p-2">
     <label  class="h4 text-white" for="fin" >الفوج   :</label>
    </div>
    <div class="col col-10 p-2">


        <select name="groupe_id" class="custom-select form-group">
            <?php $__currentLoopData = $groupes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $groupe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option <?php if($groupe->id==$registration->groupe->id): ?>
                selected
            <?php endif; ?> value="<?php echo e($groupe->id); ?>"><?php echo e($groupe->nom); ?></option>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 


          </select></div>

</div>






























<div class="row m-2 ">


    <input class=" p-2 btn btn-primary col col-12"   type="submit" value="تعديل">
</div>
</form>


</div>









<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\1\Desktop\cvs-main\resources\views/registration.blade.php ENDPATH**/ ?>