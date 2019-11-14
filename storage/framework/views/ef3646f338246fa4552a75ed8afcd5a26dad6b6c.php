<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                
                    <table style="width:100%">

<tr>

  <th>name</th>

  <th>email</th>

  <th>tel</th>

</tr>

<?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <tr>

    <td><?php echo e($student->name); ?></td>

    <td><?php echo e($student->email); ?></td>

    <td><?php echo e($student->tel); ?></td>
<td>
<a href="<?php echo e(route('home.edit', $student->id)); ?>">Edit</a>
    <a href="<?php echo e(route('home.delete', $student->id)); ?>">Delete</a>
</td>
  </tr>
  

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
<form class="mt-3" action="<?php echo e(route('home.create')); ?>" method="POST">
    <?php echo csrf_field(); ?>

                        <div class="form-group">

                          <input type="text" class="form-control" name="name" placeholder="Name">

                        </div>

                        <div class="form-group">

                            <input type="email" class="form-control" name="email" placeholder="E-mail">

                          </div>

                          <div class="form-group">

                            <input type="text" class="form-control" name="tel" placeholder="Tel">

                          </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                      </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kevinfarop\Desktop\Study file\workspace\text1\resources\views/home.blade.php ENDPATH**/ ?>