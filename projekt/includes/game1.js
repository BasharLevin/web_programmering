let rityta = document.getElementById("canvas");
let c = rityta.getContext("2d");

rityta.style.border ="solid 1px black";



rityta.addEventListener('mousedown', drawCircle, false  );
function drawCircle (){

    let x = event.pageX;
    let y = event.pageY;

    let maxRadi = 30;
    let MnRadi = 10;
    let radie = MnRadi+(Math.random()*(maxRadi -MnRadi) )
    let colors = ["red", "blue","green","lime","yellow"]
    let numColors = colors.length
    let colorIndex = Math.random()*(numColors-1)
    colorIndex = Math.round(colorIndex);
    let color =colors[colorIndex];
    let speedX=Math.round(Math.random()*10) //
    let speedY =Math.round(Math.random()*10)

    function anima()
    {


        c.beginPath();
        //c.clearRect(0,0,600,400)
        c.fillStyle = "rgba(0,0,0,0.2)"
        c.fillRect(0,0,600,400 );
        c.fillStyle=  color;
        c.arc(x,y,radie,0,2*Math.PI, true);
        c.fill();
        c.closePath();
        x+=speedX
        y+=speedY

        if(x>=600-radie || x<=radie){
            speedX = -speedX;
        }
        if (y>=400-radie || y<=radie){
            speedY = -speedY;
        }

        requestAnimationFrame(anima)


    }
    anima()  }




