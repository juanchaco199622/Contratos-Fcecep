
/*$("#contenido").on("click","a.nuevo_contrato",function() {
  $("#titulo").html("Nuevo Contrato");
  $( "#contenido" ).load("./php/gestion_contratos/nuevoContrato.php");

alert("Hola");
  var dateFormat = "yy-mm-dd",

    from = $( "#from" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1,

      }).on( "change", function() {

        from.datepicker( "option", "dateFormat", "yy-mm-dd" );
        to.datepicker( "option", "minDate", getDate(this));

      }),
    to = $( "#to" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
    }).on( "change", function() {
to.datepicker( "option", "dateFormat", "yy-mm-dd" );
      from.datepicker( "option", "maxDate", getDate(this));

    });

  function getDate( element ) {
    var date;
    try {
      date = $.datepicker.formatDate( dateFormat, element.value );
    } catch( error ) {
      date = null;
    }

    return date;
  }

} );*/
