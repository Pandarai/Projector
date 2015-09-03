

function drawGhostArc(ctx){
    ctx.beginPath();
    ctx.strokeStyle = "#BBBBBB";
    ctx.lineWidth = 10;
    ctx.arc(95,95,60,0.5*Math.PI,(2.5*Math.PI));
    ctx.stroke();
    ctx.closePath();
}

function getMiles(name, projectRepo) {
    'use strict';
    var response;
    $.ajax({
        url: "https://api.github.com/repos/" + name + "/" + projectRepo + '/milestones',
        method: "GET",
        async: false,
        success: function (result) {
            response = result;
        }
    });
    return response;
}

function getClosedIssues(miles){
    'use strict';
    var response;
    $.ajax({
        url: "api/getClosedIssues.php",
        method: "POST",
        async: false,
        data: {'miles': miles},
        success: function(result) {
            response = result;
        }
    });
    return response;
}

$(document).ready(function(){
    var gitName = $('#github').attr('name');
    var gitProjectRepo = $('#Repo').attr('name');
    var percentageComplete = 0;
    var ctx = $("#graph")[0].getContext('2d');
    drawGhostArc(ctx);
    var miles = getMiles(gitName, gitProjectRepo);
    var issue_array = JSON.parse(getClosedIssues(miles));

    if(issue_array['all_issues'] != 0){
        percentageComplete = (100/issue_array['all_issues'])*issue_array['closed_issues'];
    } else {
        percentageComplete = 0;
    }

    if(percentageComplete != 0){
        percentageComplete = (2/100)*percentageComplete;
    } else {
        percentageComplete = 0;
    }

    ctx.beginPath();
    ctx.strokeStyle = "rgb(110,100,180)";
    ctx.lineWidth = 10;
    ctx.arc(95,95,60,0.5*Math.PI,((percentageComplete+0.5)*Math.PI));
    ctx.stroke();
    ctx.closePath();

});
