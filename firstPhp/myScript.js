$(#sub).click(function(){

var data = $("#myForm :input").serializeArray();

$.post($("#myForm").attr("action"),data, function(info){$("#result").html(info);});

});


/*<script type="text/javascript">
// wait until the document ist ready.. otherwise the 2 ids dont exist in this moment
jQuery(document).ready(function($){
    // on every change in the input fields send a request to the php
    $('#currentbrowser').live('change', function(){
        $.get("BrowserCaptureAndRedirect.php", { currentbrowser: $('#currentbrowser').val()},
           function(data){
             $('#sitename').val(data);
        });            
    });
});
</script

*/
