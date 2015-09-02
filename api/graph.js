

function drawGhostArc(ctx){
    ctx.beginPath();
    ctx.strokeStyle = "#BBBBBB";
    ctx.lineWidth = 10;
    ctx.arc(95,95,60,0.5*Math.PI,(2.5*Math.PI));
    ctx.stroke();
    ctx.closePath();
}


$(document).ready(function(){

    var ctx = $("#graph")[0].getContext('2d');
    drawGhostArc(ctx);

    ctx.beginPath();
    ctx.strokeStyle = "rgb(100,180,110)";
    ctx.lineWidth = 10;
    ctx.arc(95,95,60,1*Math.PI,(1.8*Math.PI));
    ctx.stroke();
    ctx.closePath();
    ctx.beginPath();
    ctx.strokeStyle = "rgb(110,100,180)";
    ctx.lineWidth = 10;
    ctx.arc(95,95,60,0.5*Math.PI,(1*Math.PI));
    ctx.stroke();
    ctx.closePath();

});
