let princial = document.getElementById('principal')
let menu = document.getElementById('menu')
let titulo =  document.getElementById("titulo")
let historial = document.getElementById("historial")


function pregunta1(){
    titulo.innerHTML=`pregunta 1`
    var ajax = new XMLHttpRequest()
    ajax.open("GET", `botones.html`, false);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById("menu").innerHTML = ajax.responseText;
           
        }
    }
    ajax.send();
    historial.innerHTML = 
    `<div>Estudiante: Maria Alejandra Zanabria Vega</div>
    <div>CU: 35-3992</div>
    <div>presiono 1</div>`;
}

function pregunta2(){
    titulo.innerHTML=`pregunta 2`
    var ajax = new XMLHttpRequest()
    ajax.open("GET", `tabla.html`, false);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById("principal").innerHTML = ajax.responseText;
           
        }
    }
    ajax.send();
    historial.innerHTML=`presiono 2`
}

function calcular(){
    let form = document.getElementById('calc_form')
    let datos = new FormData(form)
    let table = document.getElementById('table')
    table.innerHTML = ""
    fetch("calcular.php", {method: 'POST', body: datos})
    .then(response => response.json())
    .then(data => {
        data.forEach(fila => {
            table.innerHTML += `<tr>
                <td>${fila.valor1}</td>
                <td>${fila.signo}</td>
                <td>${fila.valor2}</td>
                <td>${fila.signo2}</td>
                <td>${fila.resultado}</td>
            </tr>`
        });
    });
}


function pregunta3(){
    titulo.innerHTML=`pregunta 3`
    var ajax = new XMLHttpRequest()
    ajax.open("GET", `formulario.html`, false);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById("principal").innerHTML = ajax.responseText;
            addFucntion();
        }
    }
    ajax.send();
    historial.innerHTML = `presiono 3`;
}


function pregunta5(){
    titulo.innerHTML=`pregunta 5`
    var ajax = new XMLHttpRequest()
    ajax.open("GET", `seleccionar.html`, false);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById("principal").innerHTML = ajax.responseText;
           
        }
    }
    ajax.send();
    historial.innerHTML=`presiono 5`
}

function llamar(mes,anio)
{ 
        var ajax = new XMLHttpRequest()
        ajax.open("GET", `calendario.php`, false);
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                document.getElementById("principal").innerHTML = ajax.responseText;
               
            }
        }
        url= "calendario.php?mes="+mes+"&anio="+anio;
        ajax.send();

}