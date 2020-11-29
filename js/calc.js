var f_agence=0.06;
var f_notaire=0.04;
var garantieA=500;
var garantieBseuil=200000;
var garantieBpercent=0.012;
var garantieBpercentbis=0.01;
var garantieCpercent=0.0097;
var garantieCajout=400;

function calcFraisAgence(){
	return $(".prix-vente").val()*f_agence;
}

function calcFraisNotaire(fn){
	return $(".prix-vente").val()*f_notaire;
}

function calcFraisBase(){
	var pv=parseFloat($(".prix-vente").val());
	var constr=parseFloat($(".construction-travaux").val());
	var fa=parseFloat($(".frais-agence").val());
	var fn=parseFloat($(".frais-notaire").val());
	return pv+constr+fa+fn;	
}

function calcGaranties(){
	var ga=parseFloat($(".casden").val());
	var gb=parseFloat($(".saccef").val());
	var gc=parseFloat($(".credit-log").val());
	var gd=parseFloat($(".ppd-hypo").val());
	return ga+gb+gc+gd;
}

function calcGarantieA(check){
	if(check){
            $("input[name='casden']").val(500);
	}
	else $("input[name='casden']").val(0);
}

function calcGarantieB(check){
	if(check){
		if((calcFraisBase()<garantieBseuil)){
                        $("input[name='saccef']").val((calcFraisBase()*garantieBpercent).toFixed(2));
		}
		else $("input[name='saccef']").val((calcFraisBase()*garantieBpercentbis).toFixed(2));
	}
	else $("input[name='saccef']").val(0);	
}

function calcGarantieC(check){
	if(check)
		$("input[name='credit-log']").val(calcFraisBase()*garantieCpercent+garantieCajout).toFixed(2);
	else return 0;
}

function calcGarantieD(check){
	return 0;
}

function calcTotalSansApport(){
	return calcFraisBase()+calcGaranties();
}

function calcTotalAvecApport(){
	var apport=parseFloat($(".apport").val());
	return calcTotalSansApport()-apport;
}

function garA(){
	var checked=$("input[name='casden-check']").is(':checked');
	$("input[name='casden']").val(calcGarantieA(checked));
	changeTotals();
}

function garB(){
	var checked=$("input[name='saccef-check']").is(':checked');
	$("input[name='saccef']").val(calcGarantieB(checked));
	changeTotals();
}

function garC(){
	var checked=$("input[name='credit-log-check']").is(':checked');
	$("input[name='credit-log']").val(calcGarantieC(checked));
	changeTotals();
}

function garD(){
	var checked=$("input[name='ppd-hypo-check']").is(':checked');
	$("input[name='ppd-hypo']").val(calcGarantieD(checked));
	changeTotals();
}

function cleanGarantie(){
    $("input[name='casden']").val("0");
    $("input[name='saccef']").val("0");
    $("input[name='credit-log']").val("0");
    $("input[name='ppd-hypo']").val("0");
}

function garantieTest(){
        cleanGarantie();
        var getGarantie=$("input[name='garantie-check']:checked").val();
        console.log(getGarantie);
        if(getGarantie=="casden"){
            calcGarantieA(true);
        }
        else if(getGarantie=="saccef"){
            calcGarantieB(true);
        }
        else if(getGarantie=="credit-log"){
            calcGarantieC(true);
        }
        else if(getGarantie=="ppd"){
            calcGarantieD(true);
        }
        
        changeTotals();
}

function garAll(){
	garA();
	garB();
	garC();
	garD();
	changeTotals();
}

function changeTotals(){
	$("input[name='total']").val(calcTotalSansApport());
	$("input[name='total-financer']").val(calcTotalAvecApport());
	calcMensualite();
}

function calcMensualite(){
	var total_fi=parseFloat($(".total-financer").val());
	var taux=parseFloat($(".taux").val());
	var duree=parseFloat($(".duree-souhaitee").val());

	var calc1=(total_fi*((taux/100)/12));
	var calc2=1-Math.pow((1+(taux/100)/12),-duree);
	$("input[name='mensualite']").val((calc1/calc2).toFixed(2));
	calcTauxEndettement();
	calcEtalement();
}

function calcRevenusMensuels(){
	var emp=parseFloat($(".emprunteur").val());
	var coemp=parseFloat($(".co-emprunteur").val());
	$("input[name='total-revenus']").val(emp+coemp);
	calcTauxEndettement();
}

function calcTauxEndettement(){
	var total_rev=parseFloat($(".total-revenus").val());
	var mens=parseFloat($(".mensualite-souhaitee").val());
	$("input[name='taux-endettement']").val(((mens/total_rev)*100).toFixed(2));
	var tauxTot = ((mens/total_rev)*100).toFixed(2);

	if(tauxTot <= 33.33) {
		$(".resultatTot").html('<p class="text-success">Votre taux d\'endettement est de <strong>'+tauxTot +'%</strong></p>');
	} 
	if(tauxTot > 33.33){
		$(".resultatTot").html('<p class="text-danger">Votre taux d\'endettement est de <strong>'+tauxTot +'%</strong></p>');
	}
}

function calcEtalement(){
	var total_fi=parseFloat($(".total-financer").val());
	var duree=parseFloat($(".duree-souhaitee").val());
	var mens=parseFloat($(".mensualite-souhaitee").val());
	var calculDuree = (mens*12)*duree;

	console.log(calculDuree);
}


$(document).ready(function() {

	$("input[name='prix-vente']").change(function(){
		$("input[name='frais-agence']").val(calcFraisAgence());
		$("input[name='frais-notaire']").val(calcFraisNotaire());
                garantieTest();
		//garAll();
	});

	$("input[name='construction-travaux']").change(function(){
		garantieTest();
                //garAll();
	});

	$("input[name='casden-check']").click(garA);

	$("input[name='saccef-check']").click(garB);

	$("input[name='credit-log-check']").click(garC);
	
	$("input[name='ppd-hypo-check']").click(garD);
        
        $("input[name='garantie-check']").click(garantieTest);
	
	$("input[name='apport']").change(function(){
		changeTotals();
	});

	$("input[name='taux']").change(function(){
		calcMensualite();
	});

	$("input[name='duree-souhaitee']").change(function(){
		calcMensualite();
	});

	$("input[name='mensualite-souhaitee']").change(function(){
		calcTauxEndettement();
	});

	$("input[name='mensualite-souhaitee']").change(function(){
		calcEtalement();
	});

	$("input[name='emprunteur']").change(function(){
		calcRevenusMensuels();
	});

	$("input[name='co-emprunteur']").change(function(){
		calcRevenusMensuels();
	});
	
//Dev test
	//$("input[name='prix-vente']").val("15000");
	//$("input[name='construction-travaux']").val("10000");
	//$("input[name='apport']").val("50000");
	//$("input[name='taux']").val("3");
	//$("input[name='duree-souhaitee']").val("10");


});