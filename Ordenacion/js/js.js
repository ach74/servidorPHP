	function buscar() {
		var select = document.getElementById("selOrdenacion").value;
		if (select==1) {
			location.href="burbuja.php";
		}else if (select==2) {
			location.href="test01.php";
		}else if (select==3) {
			location.href="directa.php";
		}
	}

	function generar() {
		var x = document.getElementById("selGeneracion").value;
		if (x==1) {
			document.getElementById("Aleatorio").style.display="block";	
			document.getElementById("teclado").style.display="none";
			document.getElementById("jsonArchivo").style.display="none";	
		}else if (x==2) {

			document.getElementById("teclado").style.display="block";	
			document.getElementById("Aleatorio").style.display="none";
			document.getElementById("jsonArchivo").style.display="none";

			confirm("Introduce los números que quieres ordenar, utilizando como separado las comas. Ejemplo: 1,5,6,4,5,6");	
		}else if (x==3) {
			document.getElementById("jsonArchivo").style.display="block";	
			document.getElementById("Aleatorio").style.display="none";
			document.getElementById("teclado").style.display="none";
		}else{
			document.getElementById("Aleatorio").style.display="none";
			document.getElementById("teclado").style.display="none";
			document.getElementById("jsonArchivo").style.display="none";	
		}
		
	}