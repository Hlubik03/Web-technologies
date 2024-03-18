var lopta_x;						// pozicia lopty x [px]
var lopta_y;						// pozicia lopty y [px]
var lopta_smer_x;					// smer pohybu x [kladny - zlava doprava / zaporny naopak]
var lopta_smer_y;					// smer pohybu y [kladny - zhora nadol / zaporny naopak]
var lopta_rychlost_x = 500;			// rychlost lopty v smere x [pixelov za sekundu]
var lopta_rychlost_y = 400;			// rychlost lopty v smere y [pixelov za sekundu]
var padlo_x = 0;					// pozicia padla x
var padlo_y = 580;					// pozicia padla y [nemeni sa]
var mys_x;							// pozicia mysi x
var mys_y;							// pozicia mysi y
var interval = 0.01;				// ako casto pocitame pohyb lopty [sekundy]
var milis;							// cas intervalu v milisekundach
var lopta;							// globalna referencia na loptu
var padlo;							// globalna referencia na padlo
var plocha;							// globalna referencia na plochu
var casovac;						// globalna referencia na casovac

window.onload = function() {		// spusti sa po nacitani obj. window
	nastav();
	milis = parseInt(interval*1000)
	casovac = setInterval(hra,milis)
};

function vratPoziciu(element) {			// vypocita a vrati presnu poziciu elementu v ramci zobrazovanej casti okna 
	elem_x = (element.offsetLeft - element.scrollLeft + element.clientLeft);
	elem_y = (element.offsetTop - element.scrollTop + element.clientTop);
	return {x: elem_x, y: elem_y};		// vracia objekt s dvomi hodnotami
}

document.onmousemove = function(e) {	// definuje event listener pre udalost pohybu mysi v ramci aktivneho dokumentu
	mys_x = e.clientX;					// zapise x suradnicu mysi do glob. premennej
	mys_y = e.clientY;					// zapise y suradnicu mysi do glob. premennej
}

function nastav(){
	lopta_rychlost_x = 500;			
	lopta_rychlost_y = 400;	
	pocet_odrazov= 0;
	lopta_x= 275;
	lopta_y=275;
	lopta = document.getElementById('lopta');
	lopta.style.left= lopta_x+ "px";
	lopta.style.top= lopta_y+ "px";
	lopta_smer_x=1;
	lopta_smer_y=-1;

	padlo_x=0;
	padlo_y=580;
	padlo = document.getElementById('padlo');
	padlo.style.left= padlo_x+ "px";
	padlo.style.top= padlo_y+ "px";

	plocha=document.getElementById("plocha");

}


function hra(){
	lopta_x += lopta_smer_x * lopta_rychlost_x * interval;
	lopta_y += lopta_smer_y * lopta_rychlost_y * interval;
	console.log(lopta_x ,lopta_y);
	lopta.style.left = lopta_x + "px";
	lopta.style.top = lopta_y + "px";
	if(lopta_x + 50 >= 600 || lopta_x <= 0)
		lopta_smer_x = -lopta_smer_x

	if(lopta_y + 50 >= 700 || lopta_y <= 0)
		lopta_smer_y = -lopta_smer_y

	var plocha_pozicia = vratPoziciu(plocha);
	padlo_x= mys_x - 75;
	if(padlo_x < plocha_pozicia.x) padlo_x = plocha_pozicia.x;
	if(padlo_x > plocha_pozicia.x + 600-150) padlo_x=plocha_pozicia + 600-150;
	padlo.style.left=padlo_x- plocha_pozicia.x + "px";

	var padlo_l = padlo_x -plocha_pozicia.x;
	var padlo_p = padlo_x + 150 - plocha_pozicia.x;
	var lopta_s = lopta_x + 25;

	if(lopta_y + 50 >= padlo_y){
		if(lopta_s >= padlo_l && lopta_s <= padlo_p){
			lopta_smer_y=-lopta_smer_y
			lopta_rychlost_x += 50;
			lopta_rychlost_y += 50;
			pocet_odrazov++;
		}
	
		else{
			clearInterval(casovac);
			alert('Game over, pocet ='+pocet_odrazov);
			nastav();
			casovac= setInterval(hra,milis)
		}
	}
	
}

