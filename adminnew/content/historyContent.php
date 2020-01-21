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
			<form id="form1" class="form-horizontal">
				<section class="panel">
					<header class="panel-heading">
						<div class="panel-actions">
							<a href="#" class="fa fa-caret-down"></a>
							<a href="#" class="fa fa-times"></a>
						</div>

						<h2 class="panel-title"><?php echo $title;?> Form</h2>

					</header>
					<div class="panel-body">
						<div class="form-group">
							<label class="col-sm-1 control-label">Title: </label>
							<div class="col-sm-11">
								<input type="text" name="title" class="form-control">
							</div>
						</div>

						<textarea id="summernote1" name="content" rows="10"></textarea>

					</div>
					<footer class="panel-footer">
						 <button class="btn btn-primary btn-sm" type="button" id="btnSave">Save</button>
					</footer>
				</section>
			</form>
		</div>
	</div>
</section>

