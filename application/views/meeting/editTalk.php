<div class="col-md-3 clear-paddings subnav">
    <ul>
        <li><a href="<?=BASE_URL?>meeting/add/<?=MEETING_ID?>/">Add a talk</a></li>
        <li><a href="<?=BASE_URL?>meeting/listing/<?=MEETING_ID?>/">Edit information</a></li>
        <li><a href="<?=BASE_URL?>Listing/Meetings">Archive</a></li>
    </ul>
</div>
<script>
$(document).ready(function() {

    $( "#editTalk" ).submit(function( event ) {
     
        event.preventDefault();

        var editDiv = $('[data-name="main-content"]');
        var url = $(this).attr( "action" );
        
        var editedContents = {};
        editedContents.speaker = {};
        editedContents.talk = {};
        editedContents.externalLink = {};

        // editedContents.speaker.id = $('.speaker-name').attr('data-id');
        editedContents.speaker.name = $.trim($('.speaker-name').html());
        editedContents.speaker.affiliation = $.trim($('.speaker-affiliation').html());
        editedContents.speaker.biodata = $.trim($('.speaker-biodata').html());

        editedContents.talk.id = $('.talk-title').attr('data-id');
        editedContents.talk.session = $.trim($('.talk-session').html());
        editedContents.talk.chairperson = $.trim($('.talk-chairperson').html());
        editedContents.talk.title = $.trim($('.talk-title').html());
        editedContents.talk.abstract = $.trim($('.talk-abstract').html());

        externalLinks = $.trim($('.externalLink').val()).split(";");
        $.each(externalLinks, function(index, value){
            individualLink = value.split("|");
            editedContents.externalLink[individualLink[0]] = individualLink[1];
        });

        var posting = $.post( url, { data : editedContents } );

        posting.done(function( data ) {
          
            if(data === 'True') {

                $('.modal-body-spinner').show();
                var gitdone = $.get( base_url+'gitcvs/updateRepo');
                gitdone.done(function(gitdata){
    
                    $('.modal-body-spinner').hide();
                    return new ContentTools.FlashUI('ok');
                });
            }
            else{

                return new ContentTools.FlashUI('no');
            }
        });
    });

    $(".fileinput").on("change.bs.fileinput", function(e) {
        var formData = new FormData();
        formData.append('profilePicture', $('#profilePicture')[0].files[0]);
        
        console.log(formData);
        $.ajax({
            url: "<?=BASE_URL?>meeting/addPicture/<?=$data['talk']['id']?>",
            type: "POST",
            data: formData,
            enctype: 'multipart/form-data',
            success: function (msg) {

                console.log(msg)
            },
            contentType: false,
            processData: false
        });
        e.preventDefault();
    });
});
</script>
<div class="col-md-9 clear-paddings">
    <!-- Breadcrumb will be inserted here -->
    <?=$this->printBreadcrumb($path)?>
    <div data-editable data-name="main-content">

        <div class="fileinput fileinput-new uploadImage" data-provides="fileinput">
            <div class="fileinput-preview" data-trigger="fileinput">
                <img src="<?=DATA_URL . 'meetings/' . $data['talk']['id']?>/profile.jpg">
            </div>
            <div>
                <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" id="profilePicture" name="profilePicture"></span>
                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
            </div>
        </div>
        <h1 class="speaker-name" data-id="<?=$data['talk']['id']?>"><?=$data['speaker']['name']?></h1>
        <h2 class="speaker-affiliation"><?=$data['speaker']['affiliation']?></h2>
        <h4>Speaker Biodata</h4>
        <p class="speaker-biodata"><?=$data['speaker']['biodata']?></p>

        <h2 class="talk-session"><?=$data['talk']['session']?></h2>
        <h2 class="talk-chairperson"><?=$data['talk']['chairperson']?></h2>
        <h3 class="talk-title" data-id="<?=$data['talk']['id']?>"><?=$data['talk']['title']?></h3>
        <h4>Abstract of the Talk</h4>
        <p class="talk-abstract"><?=$data['talk']['abstract']?></p>
<?php
if(isset($data['externalLink'])) {
    $combinedlink = [];
    foreach ($data['externalLink'] as $key => $value) {
        array_push($combinedlink, $key . '|' . $value);
    }
    echo '<input type="hidden" class="externalLink" name="externalLink" value="' . implode(';', array_values($combinedlink)) . '">';
}
?>
    </div>
    <div id="content"></div>
    <form method="POST" class="form-inline updateDataArchive" role="form" id="editTalk" action="<?=BASE_URL?>meeting/saveTalk">
        <input class="updateSubmit" type="submit" id="submit" value="Save talk">
    </form>   
</div>