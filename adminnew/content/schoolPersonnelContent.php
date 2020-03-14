<section role="main" class="content-body">
	<header class="page-header">
		<h2></h2>
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="index.html">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span>Pages</span></li>
				<li><span><?php echo $title;?></span></li>
			</ol>
			
			<a class="sidebar-right-toggle" data-open="sidebar-right"></a>
		</div>
	</header>
	<!-- start: page -->
	<!-- start: page -->
	<div class="row">
		<div class="col-md-12">
			<form id="serialize" class="form-horizontal"  enctype="multipart/form-data">
				<section class="panel">
					<header class="panel-heading">
						<div class="panel-actions">
							<a href="#" class="fa fa-caret-down"></a>
							<a href="#" class="fa fa-times"></a>
						</div>

						<h2 class="panel-title"><?php echo $title;?> Form</h2>

					</header>
					<div class="panel-body">
						<div class="result"></div>
						<div class="row">
							<div class="col-md-2">
								<label>Firstname:</label>
								<input type="text" name="fname" id="fname" class="form-control">
								<input type="hidden" name="type" id="type" class="form-control" value="<?php echo $_GET['type'];?>">
							</div>

							<div class="col-md-2">
								<label>Middlename:</label>
								<input type="text" name="mname" id="mname" class="form-control">
							</div>

							<div class="col-md-2">
								<label>Lastname:</label>
								<input type="text" name="lname" id="lname" class="form-control">
							</div>

							<div class="col-md-2">
								<label>Position:</label>
								<input type="text" name="position" id="position" class="form-control">
							</div>

							<div class="col-md-2">
								<label>Course:</label>
								<input type="text" name="course" id="course" class="form-control">
							</div>

							<div class="col-md-2">
								<label>Photo:</label>
								<input type="file" name="file" id="file" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-2">
								<label>Facebook:</label>
								<input type="text" name="facebook" id="facebook" class="form-control">
							</div>

							<div class="col-md-2">
								<label>Twitter:</label>
								<input type="text" name="twitter" id="twitter" class="form-control">
							</div>

							<div class="col-md-2">
								<label>Instagram:</label>
								<input type="text" name="instagram" id="instagram" class="form-control">
							</div>

							<div class="col-md-2">
								<label>Linked In:</label>
								<input type="text" name="linkedin" id="linkedin" class="form-control">
							</div>
						</div>

						<label>Bibliography</label>
						<textarea id="summernote1" name="biography" rows="10"></textarea>

					</div>
					<footer class="panel-footer">
						 <button class="btn btn-primary btn-sm" type="submit" id="btnSaveUpload">Save</button>
					</footer>
				</section>
			</form>
		</div>
	</div>
</section>

