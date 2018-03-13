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

    <h1>Meeting CMS</h1>
    <h2><?=MEETING?></h2>
    <div class="cover-image-carousel-nogap" id="icons">
        <a href="<?=BASE_URL?>meeting/add/<?=MEETING_ID?>/" class="info-icon">
            <i class="fa fa-plus"></i><br />
            Add a talk
        </a>
        <a href="<?=BASE_URL?>meeting/listing/<?=MEETING_ID?>" class="info-icon">
            <i class="fa fa-edit"></i><br />
            Edit information
        </a>
        <a href="#" class="info-icon">
            <i class="fa fa-list-ol"></i><br />
            See list
        </a>
    </div>
</div>
