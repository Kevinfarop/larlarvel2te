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

                <?php if($students): ?>
                   
<form class="mt-3" action="<?php echo e(route('home.update', $students->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
        
                        <div class="form-group">

                          <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo e($students->name); ?>">

                        </div>

                        <div class="form-group">

                            <input type="email" class="form-control" name="email" placeholder="E-mail" value="<?php echo e($students->email); ?>">

                          </div>

                          <div class="form-group">

                            <input type="text" class="form-control" name="tel" placeholder="Tel" value="<?php echo e($students->tel); ?>">

                          </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                      </form>
                      <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kevinfarop\Desktop\Study file\workspace\text1\resources\views/edit.blade.php ENDPATH**/ ?>