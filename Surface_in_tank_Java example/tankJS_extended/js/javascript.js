// Definovanie premennych (globalne)
var F = 0.8;
var k11 = 0.5;
var q0s = 0.5;
var hs = (q0s/k11)*(q0s/k11);
var x = hs;
var dt = 0.01;
var t = 0;
var q0 = q0s;

//Nastavenie pri nacitani subora

let pause = document.getElementById('pause');
let start = document.getElementById('start');
let stop = document.getElementById('stop');
let slider= document.getElementById('slider');
let set=document.getElementById('set');
let level=document.getElementById('level');

pause.disabled=true;
stop.disabled=true;

//Zaciatocna vyska kvapaliny
level.style.height = 300 - 100*x +"px" ;

//Zaciatocny graf

let data= Array(300).fill(hs);
let res=[];

//vytvorenie dvojic > [cas, vyska hladiny]
for(let i=0; i < data.length; i++){
	res.push([i,data[i]]);
}


console.log(data);
console.log(res);

let plot=$.plot("#graph",[res],{
	yaxis:{min:0,max:3},
	xaxis:{show:false}
});

//Start simulacie
start.onclick=function(){
		simulacia();
	pause.disabled=false;
	stop.disabled=false;
	start.disabled=true;
	start.innerHTML="Start";
}

//Pauza simulacie

pause.onclick=function(){
	clearInterval(myTimer);
	pause.disabled=true;
	stop.disabled=false;
	start.disabled=false
	start.innerHTML="Continue";
}

//Stop simulacie

stop.onclick=function(){
	clearInterval(myTimer);
	data = Array(300).fill(hs);
	x= hs;
	q0 = q0s;
	pause.disabled=true;
	stop.disabled=true;
	start.disabled=false;
	start.innerHTML="Start";
}

//Zmena pritoku - slider
slider.onchange = function(){
	q0=slider.value * 0.01;
	document.getElementById('q0').value=q0;
}


//Zmena pritoku - ciselna
set.onclick = function(){
	q0= document.getElementById('q0').value;
	slider.value = q0*100;
}

//Simulacia
function simulacia(){
	plot.setData([rk4()]);
	plot.draw();
	//opakovanie simulacie kazdych td sekund
	myTimer = setTimeout(simulacia,dt*1000)
}

// Numericke riesenie diferencialnej rovnice zasobnika kvapaliny
function rk4() {
	var x_n = x;

	var k1 = dt * model();

	x = x_n + k1/2
	var k2 = dt * model();

	x = x_n + k2/2
	var k3 = dt * model();

	x = x_n + k3
	var k4 = dt * model();

	x = x_n + (k1 + 2*k2 + 2*k3 + k4)/6;
	t = t + dt;

	if(x < 0.001)
		x = 0.001;

	//Odstranenie prvej vysky
	data = data.slice(1);
	// Pridanie aktualnej vysky
	data.push(x);

	let res=[];

	// Nastavenie vysky v zasobniky
	level.style.height = 300 - 100*x +"px" ;


	//vytvorenie dvojic > [cas, vyska hladiny]
	for(let i=0; i < data.length; i++){
		res.push([i,data[i]]);
}
	console.log(x)
	return res;
}

// Model zasobnika kvapaliny
function model() {
	var dx = q0/F - k11*Math.sqrt(x)/F;
	return dx;
}
