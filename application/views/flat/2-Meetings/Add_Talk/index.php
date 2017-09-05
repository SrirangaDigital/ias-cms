<div class="col-md-3 clear-paddings subnav">
    <ul>
        <li><a href="<?=BASE_URL?>Meetings/Add_Talk/">Add a talk</a></li>
        <li><a href="<?=BASE_URL?>meeting/listing/">Edit information</a></li>
        <li><a href="<?=BASE_URL?>meeting/listing/">See list</a></li>
    </ul>
</div>
<div class="col-md-9 clear-paddings">
    <!-- Breadcrumb will be inserted here -->
    <?=$this->printBreadcrumb($path)?>

    <h1>Add a talk</h1>
    <h2>Annual meetings of the Indian Academy of Sciences - 2017</h2>

    <form method="POST" class="form-inline updateDataArchive" role="form" id="updateData" action="<?=BASE_URL?>meeting/addTalk">
        <p>Speaker</p>
        <div class="form-group">
            <label class="edit key">Name</label>
            <input type="text" class="form-control edit value" name="speaker-name">
        </div>
        <div class="form-group">
            <label class="edit key">Affiliation</label>
            <input type="text" class="form-control edit value" name="speaker-affiliation">
        </div>
        <div class="form-group">
            <label class="edit key">Brief Biodata</label>
            <textarea class="form-control edit value" name="speaker-biodata" placeholder="In about 500 words"></textarea>
        </div>
        <p>Talk</p>
        <div class="form-group">
            <label class="edit key">Title</label>
            <input type="text" class="form-control edit value" name="talk-title">
        </div>
        <div class="form-group">
            <label class="edit key">Abstract</label>
            <textarea class="form-control edit value" name="talk-abstract" placeholder="In about 500 words"></textarea>
        </div>
        <input class="updateSubmit" type="submit" id="submit" value="Add talk">
    </form>
</div>