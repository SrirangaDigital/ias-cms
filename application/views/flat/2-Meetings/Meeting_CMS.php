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

    <h1>Meeting CMS</h1>
    <h2>Annual meetings of the Indian Academy of Sciences - 2017</h2>
    <div class="cover-image-carousel-nogap" id="icons">
        <a href="Add_Talk/" class="info-icon">
            <i class="fa fa-plus"></i><br />
            Add a talk
        </a>
        <a href="<?=BASE_URL?>meeting/listing" class="info-icon">
            <i class="fa fa-edit"></i><br />
            Edit information
        </a>
        <a href="<?=BASE_URL?>" class="info-icon">
            <i class="fa fa-list-ol"></i><br />
            See list
        </a>
    </div>
</div>