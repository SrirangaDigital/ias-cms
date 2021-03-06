<div class="col-md-3 clear-paddings subnav">
    <ul>
        <li><a href="<?=BASE_URL?>meeting/add/<?=MEETING_ID?>/">Add a talk</a></li>
        <li><a href="<?=BASE_URL?>meeting/listing/<?=MEETING_ID?>/">Edit information</a></li>
        <li><a href="<?=BASE_URL?>Listing/Meetings">Archive</a></li>
    </ul>
</div>
<script>
$(document).ready(function() {

    $( ".journal-article-list-meta .delete" ).on('click', function( event ) {

        var proceed = confirm('Do you really want to delete this talk');
        if (proceed){

            var id = $(this).attr('data-id');
            var url = base_url + 'meeting/deleteTalk/' + id;
            var deleteTalk = $.get( url );

            deleteTalk.done(function( data ) {

                if (data === id) {

                    $('.modal-body-spinner').show();
                    var gitdone = $.get( base_url + 'gitcvs/updateRepo');
                    gitdone.done(function(gitdata){
                    
                        $('.journal-article-list#' + id).remove();
                        $('.modal-body-spinner').hide();
                        return new ContentTools.FlashUI('ok');
                    });
                }
                else{

                    return new ContentTools.FlashUI('no');
                }
            });
        }
    });
});
</script>
<div class="col-md-9 clear-paddings">
    <!-- Breadcrumb will be inserted here -->
    <?=$this->printBreadcrumb($path)?>

    <h1>List of talks</h1>
    <h2><?=constant($data['meetingID'] . '_TITLE')?></h2>
    <ul class="list-unstyled">
<?php
if(!$data['talks']) echo '<li>Talks are yet to be added</li>';
foreach ($data['talks'] as $row) {
    $deleteID = str_replace('/', '_', $row['talk']['id']);
?>
    	<li class="journal-article-list" id="<?=$deleteID?>">
            <p class="journal-article-list-title"><?=$row['talk']['title']?></p>
            <p class="journal-article-list-authors">
            	<span><?=$row['speaker']['name']?></span>
        	</p>
            <div class="journal-article-list-meta">
                <span>Edit: <a class="edit" href="<?=BASE_URL . 'meeting/editTalk/' . $row['talk']['id']?>"><?=BASE_URL . 'meeting/editTalk/' . $row['talk']['id']?></a></span>
                <span><a class="delete" href="#" data-id="<?=$deleteID?>">Delete</a></span>
            </div>
	    </li>
<?php } ?>
    </ul>
</div>