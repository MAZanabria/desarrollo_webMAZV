let contenido = document.getElementById("contenido");

function pregunta1() {
    var ajax = new XMLHttpRequest()
    ajax.open("GET", `tresenraya.html`, false);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById("contenido").innerHTML = ajax.responseText;
            addFucntion();
        }
    }
    ajax.send();
}

turno = "X";
let mensaje = document.getElementById("mensaje");
mensaje.innerHTML = "Turno de: " + turno;

function marcar(cell) {
    if (turno == "X") {
        cell.innerHTML = turno;
        turno = "O";
        mensaje.innerHTML = "Turno de: " + turno;
    } else {
        cell.innerHTML = turno;
        turno = "X";
        mensaje.innerHTML = "Turno de: " + turno;
    }
}

function addFucntion() {
    cells = document.getElementsByClassName("cell");
    for (let i = 0; i < cells.length; i++) {
        cells[i].onclick = function () {
            marcar(this);
        }
    }
    turno = document.getElementById("turno");
    turno.innerHTML = "Turno de: " + valor_turno;
}


function pregunta2(){
    var ajax = new XMLHttpRequest()
    ajax.open("GET", `tabla.html`, false);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById("contenido").innerHTML = ajax.responseText;
            addFucntion();
        }
    }
    ajax.send();
    
}

function crearTabla(){
   let numero1 = parseInt(document.getElementById('numero1').value);
   var hasta = parseInt(document.getElementById('hasta').value);
   if(isNaN(numero1) || numero1 >= 10 || isNaN(hasta) || hasta <= 1){
    var operacion = document.querySelector('operacion');
   var resultados = document.querySelector('resultados');
   switch(operacion){
    case 'suma':
        resultados = numero1 + hasta;
        break;
    case 'resta':
        resultados = numero1 - hasta;
    break;
    case 'multiplicacion':
        resultados = numero1 * hasta;
    break;
    case 'division':
        resultados = numero1 / hasta;
    break;
     }
   }
  
   
}


