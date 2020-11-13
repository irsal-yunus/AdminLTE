<?php $__env->startSection('styles'); ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo e(url('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Halaman Product</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Products </li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Produk</h3>
                        </div>    
                    <div class="card-body">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap" id="datatable">
                                <thead>
                                <tr>
                                    <th> Nama Produk </th>
                                    <th> Satuan </th>
                                    <th> Harga Beli </th>
                                    <th> Harga Jual </th>
                                    <th> Created At </th>

                                </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($product->name); ?></td>
                                        <td><?php echo e($product->satuan); ?></td>
                                        <td><?php echo e($product->buy_price); ?></td>
                                        <td><?php echo e($product->sell_price); ?></td>
                                        <td><?php echo e($product->created_at); ?></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascripts'); ?>
<!-- DataTables -->
<script src="<?php echo e(url('AdminLTE/plugins/datatables/jquery.dataTables.js')); ?>"></script>
<script src="<?php echo e(url('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.js')); ?>"></script>
<script> 
    $ ( function () {
        $('#datatable').DataTable();
    })
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/irsal/git/laravel-adminlte/resources/views/product/index.blade.php ENDPATH**/ ?>