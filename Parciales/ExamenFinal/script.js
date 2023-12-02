let contenido = document.getElementById('contenido');
function pregunta1(){
    titulo.innerHTML = `pregunta 1`;
    fetch(`index.php`)
    .then(response => response.text())
    .then(data => contenido.innerHTML = data);
}
function pregunta3(){
    titulo.innerHTML = `pregunta 3`
    ajax.open("GET", `alumnos.html`, false)
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            contenido.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}


function pregunta4(){
    titulo.innerHTML = `pregunta 4`;
    fetch(`pregunta4.php`)
    .then(response => response.text())
    .then(data => contenido.innerHTML = data);
     sub_menu.innerHTML = `
 <div>
<a href="editar_libro.php?id=<?php echo $libro["id"] ?>">Editar</a>
<a href="eliminar.php?id=<?php echo $libro["id"] ?>">Eliminar</a>
<a href="insertar_libro_form.php">Insertar</a>
</div> `;


}

function pregunta5(){
    titulo.innerHTML=`pregunta 5`
    var ajax = new XMLHttpRequest()
    ajax.open("GET", `pregunta5.html`, false)
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            contenido.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}

function cambiarElemento(){
    let alto = document.getElementById('alto').value
    let ancho = document.getElementById('ancho').value
    let color = document.getElementById('color').value
    let elemento_id = document.getElementById('elemento').value
    let elemento = document.getElementById(elemento_id)
    elemento.style.height = `${alto}px`
    elemento.style.width = `${ancho}px`
    elemento.style.backgroundColor = color;
}