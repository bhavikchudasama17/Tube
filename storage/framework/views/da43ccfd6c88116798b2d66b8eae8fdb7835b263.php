<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <?php echo $__env->make('admin_assets.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <title >SB Admin 2 - Blank</title>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
  <?php echo $__env->make('admin_content.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php echo $__env->make('admin_content.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          
          <!-- Modal -->
          <div class="modal fade" id="createcat" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">create category</h5>

                  
                </div>
                <div class="modal-body">
                <form method="post" action="<?php echo e(route('admin.store' )); ?>" enctype="multipart/form-data">

                  <?php echo csrf_field(); ?>

                  <label >Enter category</label>

                  <input type="text" name="cat" class="form-control input-lg" />
              


                
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
              </div>
            </div>
          </div>
         
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <a href="#createcat" type="button" class="btn btn-primary" style="float : right;"data-toggle="modal" ><i class="fa fa-plus"></i></a>
        <thead>
            <tr>
                <th>CATEGORIES</th>
                 <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <td><?php echo e($row->category); ?></td>
                
                <td><a href="<?php echo e(route('admin.edit',$row->id)); ?>" class="btn btn-info btn-circle">
                    <i class="fas fa-info-circle"></i>
                  </a>
                  <form action="<?php echo e(route('admin.destroy', $row->id)); ?>" method="post">
                <?php echo csrf_field(); ?>
				 <?php echo method_field('DELETE'); ?>
					 <button type="submit" class="btn btn-danger">Delete</button>
 					
				</form>
                
                  </td>
            
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tfoot>
            <tr>
            <th>CATEGORIES</th>
                 <th>Actions</th>   
            </tr>
        </tfoot>
    </table>
    </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
     <?php echo $__env->make('admin_content.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 
  <!-- Bootstrap core JavaScript-->
<?php echo $__env->make('admin_assets.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH /var/www/Tube/resources/views/admincatindex.blade.php ENDPATH**/ ?>