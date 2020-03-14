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
			<section class="panel">
				<header class="panel-heading">
					<div class="panel-actions">
						<a href="#" class="fa fa-caret-down"></a>
						<a href="#" class="fa fa-times"></a>
					</div>

					<h2 class="panel-title"><?php echo $title;?> Form</h2>

				</header>
				<div class="panel-body">
					<a class="mb-xs mt-xs mr-xs modal-with-zoom-anim btn btn-primary" href="#modalAnim">Add <?php echo $title;?></a>

					<div id="modalAnim" class="zoom-anim-dialog modal-block modal-block-lg mfp-hide">
						<form id="serialize">
							<header class="panel-heading">
								<h2 class="panel-title">Adding Transaction</h2>
							</header>
							<div class="panel-body">
								<div class="row">
								    <div class="col-md-12">
								        <label>Mission</label>
								         <input type="hidden" class="form-control" name="type" id="type" value="<?php echo $_GET['type'];?>">
								        <textarea id="summernote1" name="mission" rows="10"></textarea>
								    </div>
								</div>

								<div class="row">
								    <div class="col-md-12">
								        <label>Vision:</label>
								        <textarea id="summernote2" name="vision" rows="10"></textarea>
								        <button class="btn btn-primary btn-sm" type="button" id="btnSave">Save</button>
								    </div>
								</div>
								<div class="result"></div>
							</div>
							<footer class="panel-footer">
								<div class="row">
									<div class="col-md-12 text-right">
										<button class="btn btn-primary btn-sm" type="button" id="btnSave">Save</button>
										<button class="btn btn-default modal-dismiss">Cancel</button>
									</div>
								</div>
							</footer>
						</form>
					</div>
				</div>
			</section>
		</div>
	</div>
</section>

