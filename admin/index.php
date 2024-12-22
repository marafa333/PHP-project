<?php require_once "./init.php" ?>
<?php require_once "./views/header.php" ?>
      <?php require_once "./views/side.php" ?>
              <div class="row">
                  <div class="col-lg-12 main-chart">                  
                  	<div class="row mtbox">
                  		<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                  			<div class="box1">
					  			<span class="li_heart"></span>
					  			<h3><?php echo sum( 'trainers','id',$conn );  ?>
								  </h3>
                  			</div>
					  			<p>Trainers</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_cloud"></span>
					  			<h3><?php echo sum( 'abouts','id',$conn );  ?></h3>
                  			</div>
					  			<p>Why Us</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_stack"></span>
					  			<h3><?php echo sum( 'contacts','id',$conn );  ?></h3>
                  			</div>
					  			<p>Contact</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_news"></span>
					  			<h3><?php echo sum( 'users','id',$conn );  ?></h3>
                  			</div>
					  			<p>Users</p>
                  		</div>                  	
                  	</div><!-- /row mt -->	
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->                  
                  </div>
                  <?php require_once "./views/footer.php" ?>