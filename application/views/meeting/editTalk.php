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

    <h1><?=$data['speaker']['name']?></h1>
    <h2><?=$data['speaker']['affiliation']?></h2>
    <h4>Speaker Biodata</h4>
    <p><?=$data['speaker']['biodata']?></p>
    <h3><?=$data['talk']['title']?></h3>
    <h4>Abstract of the Talk</h4>
    <p><?=$data['talk']['abstract']?></p>
</div>