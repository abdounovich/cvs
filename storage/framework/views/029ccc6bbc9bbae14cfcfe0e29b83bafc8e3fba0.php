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

 <form  method="post" action="/registration1">
    <?php echo csrf_field(); ?>


<div class="row m-2">

    <div class="col col-2 p-2  ">
        <label  class="h4 text-white" for="fin" >الإسم  :</label>
    </div>

    <div class="col col-10  p-2 ">
        <input class="  form-control ml-4 " type="text" name="prenom" id="prenom">
    </div>

</div>


<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" >اللقب  :</label>
    </div>

    <div class="col col-10  p-2">
        <input class="  form-control ml-4 " type="text" name="nom" id="nom">
    </div>

</div>



<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" >تاريخ الميلاد </label>
    </div>

    <div class="col col-10  p-2">

<input type="date" class="  form-control ml-4 " onmouseout="date();" name="date_naissance" id="date_naissance">

    </div>

</div>





<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" >العنوان</label>
    </div>

    <div class="col col-10  p-2">
        <input class="  form-control ml-4 " type="text" name="address" id="address">
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




























<div class="row m-2 ">


    <input class=" p-2 btn btn-primary col col-12"   type="submit" value="إستمرار">
</div>
</form>


</div>









<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\1\Desktop\cvs-main\resources\views/registration1.blade.php ENDPATH**/ ?>