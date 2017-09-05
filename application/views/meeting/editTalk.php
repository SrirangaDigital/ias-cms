<div class="col-md-3 clear-paddings subnav">
    <ul>
        <li><a href="<?=BASE_URL?>Meetings/Add_Talk/">Add a talk</a></li>
        <li><a href="<?=BASE_URL?>meeting/listing/">Edit information</a></li>
        <li><a href="<?=BASE_URL?>meeting/listing/">See list</a></li>
    </ul>
</div>
<script>
$(document).ready(function() {

    $( "#editTalk" ).submit(function( event ) {
     
        event.preventDefault();

        var editDiv = $('[data-name="main-content"]');
        var url = $(this).attr( "action" );
        console.log(url);

        var editedContents = {};
        editedContents.speaker = {};
        editedContents.talk = {};

        editedContents.speaker.id = $('.speaker-name').attr('data-id');
        editedContents.speaker.name = $.trim($('.speaker-name').html());
        editedContents.speaker.affiliation = $.trim($('.speaker-affiliation').html());
        editedContents.speaker.biodata = $.trim($('.speaker-biodata').html());

        editedContents.talk.id = $('.talk-title').attr('data-id');
        editedContents.talk.title = $.trim($('.talk-title').html());
        editedContents.talk.abstract = $.trim($('.talk-abstract').html());

        var posting = $.post( url, { data : editedContents } );

        posting.done(function( data ) {
          
            if(data === 'True') {

                return new ContentTools.FlashUI('ok')
            }
        });
    });
});
</script>
<div class="col-md-9 clear-paddings">
    <!-- Breadcrumb will be inserted here -->
    <?=$this->printBreadcrumb($path)?>
    <div data-editable data-name="main-content">
        <h1 class="speaker-name" data-id="<?=$data['speaker']['id']?>"><?=$data['speaker']['name']?></h1>
        <h2 class="speaker-affiliation"><?=$data['speaker']['affiliation']?></h2>
        <h4>Speaker Biodata</h4>
        <p class="speaker-biodata"><?=$data['speaker']['biodata']?></p>
        <h3 class="talk-title" data-id="<?=$data['talk']['id']?>"><?=$data['talk']['title']?></h3>
        <h4>Abstract of the Talk</h4>
        <p class="talk-abstract"><?=$data['talk']['abstract']?></p>
    </div>
    <div id="content"></div>
    <form method="POST" class="form-inline updateDataArchive" role="form" id="editTalk" action="<?=BASE_URL?>meeting/saveTalk">
        <input class="updateSubmit" type="submit" id="submit" value="Save talk">
    </form>   
</div>