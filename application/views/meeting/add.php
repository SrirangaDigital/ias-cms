<?php
	$meetingID = $data['meetingID'];
?>
<div class="col-md-3 clear-paddings subnav">
    <ul>
        <li><a href="<?=BASE_URL?>meeting/add/<?=MEETING_ID?>/">Add a talk</a></li>
        <li><a href="<?=BASE_URL?>meeting/listing/<?=MEETING_ID?>/">Edit information</a></li>
        <li><a href="<?=BASE_URL?>Listing/Meetings">Archive</a></li>
    </ul>
</div>
<div class="col-md-9 clear-paddings">
    <!-- Breadcrumb will be inserted here -->
    <?=$this->printBreadcrumb($path)?>

    <h1>Add a talk</h1>
    <h2><?=MEETING?></h2>

<?php if(isset($_SESSION['login'])) {?>
    <form method="POST" class="form-inline updateDataArchive" role="form" id="updateData" action="<?=BASE_URL?>meeting/addTalk" enctype="multipart/form-data">
        
        <div class="fileinput fileinput-new uploadImage" data-provides="fileinput">
            <div class="fileinput-preview" data-trigger="fileinput"><p>Upload a picture with face prominently visible. Height should be greater than 400px (300dpi)</p></div>
            <div>
                <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" id="profile-picture" name="profilePicture"></span>
                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
            </div>
        </div>

        <p>Speaker</p>
        <div class="form-group">
            <label class="edit key">Name</label>
            <input type="text" class="form-control edit value" name="speaker-name" id="speaker-name" required>
        </div>
        <div class="form-group">
            <label class="edit key">Affiliation</label>
            <input type="text" class="form-control edit value" name="speaker-affiliation" required>
        </div>
        <div class="form-group">
            <label class="edit key">Brief Biodata</label>
            <textarea class="form-control edit value" name="speaker-biodata" placeholder="In about 500 words" required></textarea>
        </div>
        <p>Talk</p>
        <div class="form-group">
            <label class="edit key">Session</label>
            <input type="text" class="form-control edit value" name="talk-session" required>
        </div>        
        <div class="form-group">
            <label class="edit key">Chairperson</label>
            <input type="text" class="form-control edit value" name="talk-chairperson" required>
        </div>        
        <div class="form-group">
            <label class="edit key">Title</label>
            <input type="text" class="form-control edit value" name="talk-title" required>
        </div>
        <div class="form-group">
            <label class="edit key">Abstract</label>
            <textarea class="form-control edit value" name="talk-abstract" placeholder="In about 500 words" required></textarea>
        </div>
        <input name="meetingID" type="hidden" id="meetingID" value="<?=$meetingID?>">
        <input class="updateSubmit" type="submit" id="submit" value="Add talk">
    </form>
<?php } else{ ?>
    <p><a href="<?=BASE_URL?>user/login">Please login to add new Talk</a></p>
<?php  } ?>   
</div>
