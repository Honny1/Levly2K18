window.onload=function() {
    canv=document.getElementById("gc");
    ctx=canv.getContext("2d");
    document.addEventListener("keydown",keyPush);
    setInterval(game, 1000 / 5);
}

let px=py=10;
let gs=tc=20;
let ax=ay=15;
let xv=yv=0;
let trail=[];
let tail = 5;
let aa = 0;
let zz = 0;
let counter =0;

function game() {
    px+=xv;
    py+=yv;
    if(px<0) {
        px= tc-1;
    }
    if(px>tc-1) {
        px= 0;
    }
    if(py<0) {
        py= tc-1;
    }
    if(py>tc-1) {
        py= 0;
    }
    ctx.fillStyle="black";
    ctx.fillRect(0,0,canv.width,canv.height);

    ctx.fillStyle="lime";
    for(var i=0;i<trail.length;i++) {
        ctx.fillRect(trail[i].x*gs,trail[i].y*gs,gs-2,gs-2);
        if (trail[i].x == px && trail[i].y == py) {
            tail = 5;
            endGame();
        }
    }
    trail.push({x:px,y:py});
    while(trail.length>tail) {
        trail.shift();
    }
    if (ax == px && ay == py) {
        x = 1;
        tail++;
        ax=Math.floor(Math.random()*tc);
        ay = Math.floor(Math.random() * tc);
        aa = tail - 5;
        if (tail > 5) {
            nwm = "score: " + aa;
            if (aa>6969){
                nwm="Heslo je:python"
            }
            document.getElementById("nwm").innerHTML = nwm;
        }
    }
    ctx.fillStyle="red";
    ctx.fillRect(ax*gs,ay*gs,gs-2,gs-2);
}

function keyPush(evt) {
    switch(evt.keyCode) {
        case 37:
            xv=-1;yv=0;
            break;
        case 38:
            xv=0;yv=-1;
            break;
        case 39:
            xv=1;yv=0;
            break;
        case 40:
            xv=0;yv=1;
            break;
        case 87:
            xv=-1;yv=0;
            break;
        case 65:
            xv=0;yv=-1;
            break;
        case 68:
            xv=1;yv=0;
            break;
        case 83:
            xv=0;yv=1;
            break;
    }
}

function endGame() {
    if (aa >= 1) {
        if (zz == 0) {
            zz += 1;
            alert1();
        }
    }
}

function alert1() {
    
	if(counter==5){
		alert("Rada zkus se podívat do zdrojového kódu.")
	}
	else{
		alert("Zkusit znovu. Když mě porazíš dostaneš odměnu.");
		counter+=1;
	}
    zz = 0;
    aa = 0;
    nwm = "Score:0";
    document.getElementById("nwm").innerHTML = nwm; 
}
