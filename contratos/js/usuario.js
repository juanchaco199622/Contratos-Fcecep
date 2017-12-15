
//Inicio Usuario
  $("#opciones a.usuario").click(function(e){
      alert("Listado usuarios");
        e.preventDefault();
         url = $(this).attr("href");
         $.post( url, function(data) {
            if(url!="#")
              $("#contenedor").removeClass("hide");
              $("#contenedor").addClass("show");
              $("#titulo").html("Listado de Usuarios");
                  $("#contenido" ).html(data);
         });
      });

      // Inactivar  Usuario
      $("#contenido").on("click","a.inactivarUsuario",function(){
        //Recupera datos del formulario
        var codigo = $(this).attr("codigo");
        if ( confirm("¿Realmente desea inactivar el Usuario?")){
          $.ajax({
                method: "post",
                  url: "./php/usuario/usuario_controlador.php",
                  data: {codigo: codigo, accion:'borrar', estado : 0},
                  dataType: "html"
              })  .done(function( result ) {
                $("#titulo").html("Listado de usuario");
            $( "#contenido" ).load("./php/usuario/index.php");
              });
        }
      });

      //Activacion de Usuario
      $("#contenido").on("click","a.activarUsuario",function(){
        //Recupera datos del formulario
        var codigo = $(this).attr("codigo");
        if ( confirm("¿Realmente desea activar el Usuario")){
          $.ajax({
                method: "post",
                  url: "./php/usuario/usuario_controlador.php",
                  data: {codigo: codigo, accion:'borrar', estado : 1},
                  dataType: "html"
              })  .done(function( result ) {
            $("#titulo").html("Listado de  usuario");
            $( "#contenido" ).load("./php/usuario/index.php");

              });
        }
      });

//Editar
      $("#contenido").on("click","a.editarUsuario",function(){
      		$("#titulo").html("Editar Usuario");
      		//Recupera datos del fromulario
      		var codigo = $(this).attr("codigo");
      		$.ajax({
      			type:"post",
      			url:"./php/usuario/usuario_editar.php",
      			data:"codigo=" + codigo,
      			dataType:"html"
              	}) .done(function( result ) {
              		$("#contenido").html(result);
              	});
      	});
// Actualizar
$("#contenido").on("click","button#actualizarUsuario",function(){

    $("#titulo").html("Listado");
        var datos=$("#fusuario").serialize();
            $.ajax({
      type:"post",
      url:"./php/usuario/usuario_controlador.php",
      data: datos,
      dataType:"html"
          }) .done(function( result ) {
            $( "#contenido" ).load("./php/usuario/index.php");
          });
  });
  //Cerrrar
  $("#contenido").on("click","button.btncerrarUsuario",function(){
  	$("#contenedor").removeClass("show");
  			$("#contenedor").addClass("hide");
  })
//Cerrar 2
$("#contenido").on("click","button.btncerrarUsuario2",function(){
  $("#titulo").html("Listado ");
  $( "#contenido" ).load("./php/usuario/index.php");
})
