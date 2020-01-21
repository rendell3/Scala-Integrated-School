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
        <div class="result"></div>
    </div>
</div>


