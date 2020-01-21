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
<div class="row">
    <div class="col-md-12">	
        <label>Biography:</label>
        <textarea id="summernote1" name="biography" rows="10"></textarea>
        <button class="btn btn-primary btn-sm" type="submit" id="btnSaveUpload">Save</button>
        <div class="result"></div>
    </div>
</div>

