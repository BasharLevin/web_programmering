let canvas = document.getElementById ("canvas");
canvas.width = 600;
canvas.height = 400;
let ctx = canvas.getContext ("2d");
canvas.style.backgroundColor ="black";

let x = 50;
let y = 100;
let xSpeed = 5.2;
let ySpeed = 4.5;
let radie = 10;
let yPos = 150
let score = [0]
function animation()
{
    ctx.beginPath();
    ctx.fillStyle = "rgba(0,0,0,0.2)"
    ctx.fillRect(0,0,canvas.width, canvas.height);
    ctx.beginPath();
    ctx.fillStyle = "lime"
    ctx.fillRect(579,yPos,4,100)
    ctx.fill()
    ctx.beginPath()
    ctx.arc(x,y,radie,0,2*Math.PI,true);
    ctx.fillStyle = "lime"
    ctx.closePath();
    ctx.fill();
    ctx.fillStyle ="lime";
    ctx.fillText(score  , 20,100);
    ctx.font ="bold 30pt verdana";
    x+=xSpeed;
    y+=ySpeed;
    if(x>=590 || x<=10){ // canvas.width - radie
        xSpeed = -xSpeed;
    }
    if (y>=390 || y<=10){ // canvas.height - radie
        ySpeed = -ySpeed;
    }
    /*if ((x >=570 && x < 575) &&(y>yPos && y<(yPos+100))) {
        xSpeed = -xSpeed;
    }*/

    if((x<=590 && x > 580) &&(y>yPos && y<(yPos+100)))
    {
        xSpeed = -xSpeed;

    }

    if (x<10 ){ ctx.fillStyle ="lime";
        ctx.fillText(score ++ , 20,100);

    }
    if(x>590 ){

        alert("GAME OVER");
        document.location.reload();




    }
    requestAnimationFrame(animation);
}
animation();

let arrow = window.addEventListener("keydown",function(){
    var key=event.keyCode;
    if(key==38) Up();
    if(key==40) Down();
},false);


function Up()
{
    if(yPos>0) yPos-=50;
}
function Down()
{
    if(yPos<300) yPos+=50;
}

