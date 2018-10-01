function seleccion() {
    if (document.registroNovedad.campo[0].checked == true) {
        document.getElementById('operacion').style.display = 'none';
        document.getElementById('agente').style.display = 'block';
        document.getElementById('seleccionOperacion').value = "";
    }
    else if (document.registroNovedad.campo[1].checked == true) {
        document.getElementById('agente').style.display = 'none';
        document.getElementById('operacion').style.display = 'block';
        document.getElementById('seleccionAgente').value = "";
    }
}