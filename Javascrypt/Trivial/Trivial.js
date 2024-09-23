const preguntas = [
    { categoria: "Geografía", pregunta: "¿Cuál es la capital de Francia?", respuesta: "París" },
    { categoria: "Arte", pregunta: "¿Cuál es el río más largo del mundo?", respuesta: "Amazonas" },
    { categoria: "Espectáculos", pregunta: "¿Quién escribió 'Cien años de soledad'?", respuesta: "Gabriel García Márquez" },
    { categoria: "Historia", pregunta: "¿Cuál es el planeta más cercano al sol?", respuesta: "Mercurio" },
    { categoria: "Ciencias", pregunta: "¿En qué año llegó el hombre a la luna?", respuesta: "1969" },
    { categoria: "Deportes", pregunta: "¿Cuál es el océano más grande del mundo?", respuesta: "Pacífico" }
];

let puntos = 0;
let respuestasIncorrectas = 0;

function mostrarPreguntas() {
    let mensaje = "Introduce el número de la pregunta:\n";
    preguntas.forEach((item, index) => {
        mensaje += `${index + 1}. ${item.categoria}\n`;
    });
    return mensaje;
}

function manejarPregunta(numeroPregunta) {
    const preguntaSeleccionada = preguntas[numeroPregunta - 1];
    const respuesta = prompt(preguntaSeleccionada.pregunta);
    if (respuesta.toLowerCase() === preguntaSeleccionada.respuesta.toLowerCase()) {
        puntos++;
        alert("¡Correcto!");
    } else {
        respuestasIncorrectas++;
        alert("Incorrecto. La respuesta correcta es: " + preguntaSeleccionada.respuesta);
    }
    preguntas.splice(numeroPregunta - 1, 1);
}

function verificarEstado() {
    if (puntos >= 4) {
        alert("¡Has ganado!");
        return true;
    }
    if (respuestasIncorrectas >= 3) {
        alert("Has perdido.");
        return true;
    }
    return false;
}

function iniciarTrivial() {
    while (preguntas.length > 0) {
        const mensaje = mostrarPreguntas();
        const numeroPregunta = parseInt(prompt(mensaje));

        if (numeroPregunta >= 1 && numeroPregunta <= preguntas.length) {
            manejarPregunta(numeroPregunta);
            if (verificarEstado()) {
                break;
            }
        } else {
            alert("Número de pregunta inválido. Debe ser entre 1 y " + preguntas.length + ".");
        }
    }

    if (preguntas.length === 0 && puntos < 4 && respuestasIncorrectas < 3) {
        alert("¡Has respondido todas las preguntas!");
    }
}

document.getElementById('Iniciar').onclick = iniciarTrivial;