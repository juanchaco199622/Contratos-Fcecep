
    $(".id_pais").change(function(){
      pais = $(".id_pais").val();
      $(".id_ciudad").empty();
      $(".id_ciudad").load("php/proveedor/seleccionar_ciudad.php?id_pais="+pais);
    });
