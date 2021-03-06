<!-- Author :bhavik chudasama -->
<!-- shows my videos -->
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!DOCTYPE HTML>
	<head>
		<title>Tube</title>
		
	</head>
	<body>
		<!---start-wrap---->
			<!---start-header---->
                
			<!---End-header---->
		</div>
		<div class="clear"> </div>
		<!---start-content---->
		<div class="main-content">
			<div class="wrap">
			<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<div class="right-content">
				<div class="right-content-heading">
					<div class="right-content-heading-left">
						<h3>My videos</h3>
					</div>
					<div class="right-content-heading-right">
						<div class="social-icons">
			                <ul>
			                    <li><a class="facebook" href="#" target="_blank"> </a></li>
			                    <li><a class="twitter" href="#" target="_blank"></a></li>
			                    <li><a class="googleplus" href="#" target="_blank"></a></li>
			                    <li><a class="pinterest" href="#" target="_blank"></a></li>
			                    <li><a class="dribbble" href="#" target="_blank"></a></li>
			                    <li><a class="vimeo" href="#" target="_blank"></a></li>
			                </ul>
					</div>
					</div>
					<div class="clear"> </div>
				</div>
				<!-- shows all videos by user -->
				<?php $__currentLoopData = $data2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="content-grid">
					<h3></h3>
						<a href="singlepage.html"><img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($row->image); ?>" title="allbum-name"width="200" height="200" /></a>
						<h3></h3>
						<h3><?php echo e($row->vname); ?>.</h3>
					<a class="button" href="<?php echo e(route('crud.show', $row->id)); ?>">Watch now</a>
						<form action="<?php echo e(route('crud.destroy', $row->id)); ?>" method="post">
				
					 
						
				<a href="<?php echo e(route('crud.edit', $row->id)); ?>" class="btn btn-warning">Edit</a>
				<?php echo csrf_field(); ?> 
				 <?php echo method_field('DELETE'); ?> 
				 <button type="submit" class="btn btn-danger">Delete</button> 
 					
			</form>				
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
					
					
					
					<div class="clear"> </div>
					
					<!---start-pagenation----->
					
					<!---End-pagenation----->
				</div>
			</div>
			<div class="clear"> </div>
			</div>
		</div>
		<div class="clear"> </div>
		<!---End-content---->
		<!---start-copy-right---->
		<div class="copy-right">
			<p> &copy; 2020 Videos. All rights reserved | Design by gebster</p>
		</div>
		<!---End-copy-right---->
		<!---End-wrap---->
	</body>
</html>
<?php /**PATH /var/www/Tube/resources/views/vidshow.blade.php ENDPATH**/ ?>