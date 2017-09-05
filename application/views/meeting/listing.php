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

    <h1>List of talks</h1>
    <h2>Annual meetings of the Indian Academy of Sciences - 2017</h2>
    <ul class="list-unstyled">
<?php foreach ($data as $row) { ?>
    	<li class="journal-article-list">
            <p class="journal-article-list-title"><?=$row['talk']['title']?></p>
            <p class="journal-article-list-authors">
            	<span><?=$row['speaker']['name']?></span>
        	</p>
            <div class="journal-article-list-meta">
                <span>Edit: <a href="<?=BASE_URL . 'meeting/editTalk/' . $row['talk']['id']?>"><?=BASE_URL . 'meeting/editTalk/' . $row['talk']['id']?></a></span>
            </div>
	    </li>
<?php } ?>
    </ul>
</div>