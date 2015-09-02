$(document).ready(function(){
    $("#milestones").on('DOMNodeInserted', '.mile', function(e){
        $(this).draggable({helper: 'clone', cursorAt: {left: 50}, containment: '.row'});
    });

    $("#drop-area").droppable({
        accept: ".mile",
        helper: "clone",
        activate: function() {
            $("#drop-area").removeClass("drop-area").addClass("drop-hover");
        },
        deactivate: function() {
            $("#drop-area").removeClass("drop-hover").addClass("drop-area");
        },
        drop: function() {
            $("#drop-area").removeClass("drop-hover");
            $("#drop-area").droppable("disable");
        }
    });

    $("#drop-area").on("drop", function(event, ui){
        'use strict';
        console.log(ui);
        $("#drop-area").html($(ui['draggable']).clone());
    });

});
