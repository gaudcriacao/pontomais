document.getElementById("qtdresultado").addEventListener("change", calcular);

function calcular(val){

	var result = eval(val * 7);

	//if(result >= 60){
		//document.getElementById('qtdresultado').innerHTML = ((result % 3600)/60).toFixed(1) + " hora(s)";
	//}else{
		document.getElementById('qtdresultado').innerHTML = result;
<<<<<<< Updated upstream
		document.getElementById('um-clique').innerHTML = '<span><strong>1</strong><br>clique</span>';
=======
		document.getElementById('um-clique').innerHTML = '<span>Em Poucos<strong>Cliques</strong></span>';
>>>>>>> Stashed changes
	//}
}
