
$(document).click(function() { //Creamos la Funcion del Click
  var checked = $(".check-peli:checked").length; 
  //Creamos una Variable y Obtenemos el Numero de Checkbox que esten Seleccionados
  $("#resp").text(" (" + checked + ") Genero(s) " + "Seleccionado(s)"); 
  //Asignamos a la Etiqueta <p> el texto de cuantos Checkbox hay Seleccionados
})
.trigger("click"); 

$('[name="checks[]"]').click(function() {
      
  var arr = $('[name="checks[]"]:checked').map(function(){
    return this.value;
  }).get();
  
  var str = arr.join(',');
  
  $('#generoPelicula').val(str);

});

$('[name="checksEditar[]"]').click(function() {
  var arr = $('[name="checksEditar[]"]:checked').map(function(){
    return this.value;
  }).get();
  
  var str = arr.join(',');
  
  $('#generoPeliculaEditar').val(str);

});

function marcarCheckbox(source)
{
    checkboxes = document.getElementsByTagName('input'); 
    //obtenemos todos los controles del tipo Input

    for (i = 0; i < checkboxes.length; i++) 
    //recoremos todos los controles
    {
        if (checkboxes[i].type == "checkbox") 
        //entramos si esta un checkbox
        {
          checkboxes[i].checked = source.checked; 
          //si es un checkbox le damos el valor del checkbox
        }
    }
}
