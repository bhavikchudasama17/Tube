<!-- Author:bhavik chudasama
sidebar with login -->
<div class="left-sidebar">
				<div class="sidebar-boxs">
					<!-- shows all categories -->
					<div class="type-videos">
					<h3>Categories</h3>	
						<ul>
							<?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li><a href="<?php echo e(route('cat.show',$row1->id)); ?>"><?php echo e($row1->category); ?></a></li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
						
					</div>
				</div>
				<div class="copy-right">
			<p> &copy; 2020 Videos. All rights reserved | Design by gebster</p>
		</div>
			</div><?php /**PATH /var/www/Tube (1)/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>