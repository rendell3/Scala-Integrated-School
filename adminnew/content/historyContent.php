<section role="main" class="content-body">
	<header class="page-header">
		<h2></h2>
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="#">
						<i class="fa fa-arrow-right"></i>
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
					<a class="mb-xs mt-xs mr-xs modal-with-zoom-anim btn btn-primary" href="#modalAnim" id="modalani">Add <?php echo $title;?></a>

					<div id="modalAnim" class="zoom-anim-dialog modal-block modal-block-lg mfp-hide">
						<form id="serialize">
							<header class="panel-heading">
								<h2 class="panel-title">Adding Transaction</h2>
							</header>
							<div class="panel-body">
								<div class="form-group">
									<label class="col-sm-1 control-label">Title: </label>
									<div class="col-sm-11">
										<input type="hidden" name="trxid" id="trxid" class="form-control">
										<input type="text" name="title" id="title" class="form-control">
										<input type="hidden" name="type" id="type" class="form-control" value="<?php echo $_GET['type'];?>">
									</div>
								</div>

								<textarea id="summernote1" name="content" rows="10"></textarea>
								<div class="result"></div>
							</div>
							<footer class="panel-footer">
								<div class="row">
									<div class="col-md-12 text-right">
										<button class="btn btn-primary btn-sm save" type="button" id="btnSave">Save</button>
										<button class="btn btn-primary btn-sm update" type="button" id="btnUpdate">Update Changes</button>
										<button class="btn btn-default modal-dismiss">Cancel</button>
									</div>
								</div>
							</footer>
						</form>
					</div>

					<table class="table table-bordered table-striped mb-none" id="datatable-default">
						<thead>
							<tr>
								<th>ID</th>
								<th>Title</th>
								<th>Date Created</th>
								<th style="width: 20%;"></th>
							</tr>
						</thead>
						<tbody>
							<?php
							$content = $_GET['type'];
							// listing_content($content);
							$select= $conn->prepare("SELECT * FROM tblinformation WHERE SETTINGSNAME = ?");
							$select->execute([$content]);
							while ($rows = $select->fetch()) {
								?>
								<tr>
									<td><?php echo $rows['ID'];?></td>
									<td><?php echo $rows['TITLE'];?></td>
									<td><?php echo $rows['DATECREATED'];?></td>
									<td><center><button type="button" class="mb-xs mt-xs mr-xs btn btn-sm btn-primary btnedit" key="<?php echo $rows['ID'];?>"><i class="fa fa-edit"></i> Edit</button><button type="button" class="mb-xs mt-xs mr-xs btn btn-sm btn-danger btndelete"  key="<?php echo $rows['ID'];?>"><i class="fa fa-times"></i> Delete</button></center></td>
								</tr>
								<?php
							}
							?>
						</tbody>
					</table>

				</div>
			</section>
		</div>
	</div>
</section>

