
function buscarDatos(){
  var datoConsulta = $("#caja_busqueda").val();

  $.ajax({
    url: "detalles.php",
    data: 'consulta='+datoConsulta,
    dataType: "text",
    method: "POST",
    success: function(r){
      $("#resultadoShow").html(r);
    },
    error: function(){
      console.log("error");
    }
  });
}

