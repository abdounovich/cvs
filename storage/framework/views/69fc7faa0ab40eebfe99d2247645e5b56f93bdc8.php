<?php $__env->startSection('title', 'Acceuil'); ?>



<?php $__env->startSection('content'); ?>






  
<div class="container">
    <div class="row">

        <div class="col col-4 ">  <div class="card rounded bg-primary text-color p-2 shadow" style="opacity: 0.8" >
        <i class="m-4 p-2 fa fa-address-card fa-5x d-flex align-self-center text-premier  "></i>
        <div class="h3 p-2 text-light   d-flex align-self-center"> المشتركين   </div>
        <div class="h1 text-light  d-flex align-self-center"><?php echo e($registrations->count()); ?></div>

        <a  href="/registrations"  class=" text-deuxieme m-4 p-2 btn btn-dark  btn d-flex align-self-center">تصفح الجميع</a>
         </div>
        </div>
      

        <div class="col col-4 ">  <div class="card rounded bg-primary  text-deuxieme p-2 shadow" style="opacity: 0.8" >
            <i class="m-4 p-2 fa fa-server fa-5x d-flex align-self-center text-premier "></i>
            <div class="h3 p-2 text-light    d-flex align-self-center"> الأفــواج   </div>
            <div class="h1 text-light  d-flex align-self-center"><?php echo e($groupes->count()); ?></div>
    
            <a  href="/groupes"  class=" text-white m-4 p-2 btn btn-dark  btn d-flex align-self-center">تصفح الجميع</a>
             </div>
            </div>


            
            <div class="col col-4 ">  <div class="card rounded bg-primary text-deuxieme p-2 shadow" style="opacity: 0.8" >
                <i class="m-4 p-2 fa fa-calendar-check-o fa-5x d-flex align-self-center text-premier "></i>
            <div class="h3 p-2 text-light   d-flex align-self-center"> الحصص     </div>
            <div class="h1 text-light  d-flex align-self-center"><?php echo e($crenaus->count()); ?></div>
    
            <a href="/creneaus" class=" text-deuxieme m-4 p-2 btn btn-dark  btn d-flex align-self-center">تصفح الجميع</a>
             </div>
            </div>
    </div>
</div>






<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\1\Desktop\cvs-main\resources\views/home.blade.php ENDPATH**/ ?>