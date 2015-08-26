$(document).ready(function(){
    $("#milestones").on('DOMNodeInserted', '.mile', function(e){
        $(this).draggable({helper: 'clone', cursorAt: {left: 50}});
    });

});
