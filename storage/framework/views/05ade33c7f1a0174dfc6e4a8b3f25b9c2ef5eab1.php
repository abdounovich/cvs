

<?php $__env->startSection('title', 'المشتركين'); ?>



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



<div class="p-2 m-5  d-flex justify-content-right"> <a class="btn btn-primary  rounded text-white " title="إضافة مشترك جديد"  href="registration1"><i class=" p-1 fa fa-plus fa-4x "></i>
</a></div>
 <!-- Search Widget -->
 <div class="card  m-4 bg-info" >
    <form class="card-body " action="/search" method="GET" role="search">

        <?php echo e(csrf_field()); ?>

        <div class="input-group ">
            <input type="text" class="form-control" placeholder="ابحث..." name="request">
            <span class="input-group-btn">
        <button class="btn btn-secondary" type="submit">بحث</button>
      </span>
        </div>
    </form>
</div>
<div class=" p-2 m-2 text-right">



    







    






<?php if($registrations->count()==0): ?>
<div class="h3 text-white bg-dark mx-2  text-center mt-4 p-4">لا يوجد أي مشترك</div>

    <?php else: ?>
    <table class="table table-dark text-white table-bordered  table-striped">
        <thead class="thead-light">
          <tr>            
                <th>#</th>
                <th>الإسم</th>
                <th>اللقب</th>
                <th>تاريخ الميلاد</th>
    
                <th>الفوج</th>
    
                <th>الوثائق 
                  </th>
                <th>   مبلغ الإشتراك</th>
    <th></th>
    
            </tr>
        </thead>
                <?php $__currentLoopData = $registrations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tbody>
       <tr>
                <td><?php echo e($loop->index+1); ?></td>
               <td> <a  class="text-white" href="registration/<?php echo e($registration->id); ?>"><?php echo e($registration->nom); ?> </a></td>
                <td><?php echo e($registration->prenom); ?></td>
                <td><?php echo e($registration->date_naissance); ?></td>
    
                <td>           <span class="badge badge-pill badge-primary"> <?php echo e($registration->groupe->nom); ?></span>
    
    <?php $__currentLoopData = $registration->groupe->creanau; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $creanau): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div>  <?php echo e($creanau->jour); ?> : <?php echo e($creanau->debut); ?> | <?php echo e($creanau->fin); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
    
                <td><?php
                    $array=json_decode($registration->documents, true);
    
                ?> 
               
                    
    
                 <?php $__currentLoopData = $array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                 <p class="badge badge-success p-2 "> <?php echo e($item); ?></p>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    
    
    
             
    
                </td>
                <td> 
                    <?php if($registration->prix_reste>0): ?>
                                        <span class="badge badge-danger p-2">باقي <?php echo e($registration->prix_reste); ?> دج</span>
                                       
    
    
                    <?php else: ?>
                    <span class="badge badge-success p-2"> <?php echo e($registration->prix_abonnement); ?> دج</span>
    
                    <?php endif; ?>
                     </td>
                     <td> <p><a class="text-warning btn btn-link text-center" href="/badge/<?php echo e($registration->id); ?>">البادج </a></p>
                        <a class="text-warning btn btn-link text-center" href="/receipe/<?php echo e($registration->id); ?>"> إثبات الدفع </a></td>
            </tr>
       
    
        </tbody><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    </table>
    
    
    </div>
<?php endif; ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\1\Desktop\cvs-main\resources\views/search.blade.php ENDPATH**/ ?>