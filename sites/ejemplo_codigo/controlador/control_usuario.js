
function btn_guardar_dato()
{
	 var nombre = $("#nombre").val();
	 var apellido = $("#apellido").val();
	 var edad = $("#edad").val();

	 //alert(nombre+" - "+apellido+" - "+edad);

	 var ob = {nombre:nombre, apellido:apellido, edad:edad};

	 $.ajax({
                type: "POST",
                url:"../modelo/modelo_registrar_datos.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                 $("#panel_respuesta").html(data);
                 btn_listar_datos();

                 setTimeout(function(){
                  $("#panel_respuesta").html("");
                 },2000);
                

                }
             });
}

function btn_listar_datos()
{
	 var ob = "";

	 $.ajax({
                type: "POST",
                url:"../modelo/modelo_listar_datos.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                 $("#panel_listado").html(data);

                }
             });
}

function btn_editar(ID_usuario)
{
	 var ob = {ID_usuario:ID_usuario};

	 $.ajax({
                type: "POST",
                url:"../vista/vista_editar_datos.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                 $("#panel_editar").html(data);

                }
             });
}

function btn_guardar_edicion()
{    
     var ID_usuario = $("#ID_usuario").val();
	 var nombre = $("#nombre_ed").val();
	 var apellido = $("#apellido_ed").val();
	 var edad = $("#edad_ed").val();

	 //alert(nombre+" - "+apellido+" - "+edad);

	 var ob = {nombre:nombre, apellido:apellido, edad:edad,ID_usuario:ID_usuario};

	 $.ajax({
                type: "POST",
                url:"../modelo/modelo_guardar_datos.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                 $("#panel_respuesta_edicion").html(data);
                 //btn_listar_datos();

                 setTimeout(function(){
                  $("#panel_respuesta_edicion").html("");
                 },2000);

                 setTimeout(function(){
                  $("#myModal_editar").modal("hide").fadeIn("slow");
                 },2500);

                 setTimeout(function(){
                  btn_listar_datos();
                 },3000);
                

                }
             });
}


function btn_eliminar(ID_usuario)
{
	 var ob = {ID_usuario:ID_usuario};

	 $.ajax({
                type: "POST",
                url:"../vista/vista_eliminar_datos.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                 $("#panel_eliminar").html(data);

                }
             });
}

function btn_eliminar_dato()
{    
     var ID_usuario = $("#ID_usuario").val();

	 var ob = {ID_usuario:ID_usuario};

	 $.ajax({
                type: "POST",
                url:"../modelo/modelo_eliminar_datos.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                 $("#panel_eliminar").html(data);
                 //btn_listar_datos();

                 setTimeout(function(){
                  $("#panel_eliminar").html("");
                 },2000);

                 setTimeout(function(){
                  $("#myModal_eliminar").modal("hide").fadeIn("slow");
                 },2500);

                 setTimeout(function(){
                  btn_listar_datos();
                 },3000);
                 $('#ModalAgregar').modal('hide');
if ($('.modal-backdrop').is(':visible')) {
  $('body').removeClass('modal-open'); 
  $('.modal-backdrop').remove(); 
};
                

                }
             });
}

function select_usuario()
{ //id="select_usuario"
  
 var ID_usuario =  $("#select_usuario").val();
// alert("Hola select = "+ID_usuario);

    var ob = {ID_usuario:ID_usuario};

     $.ajax({
                type: "POST",
                url:"../modelo/modelo_mostrar_datos.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                 $("#panel_selector").html(data);
            
                }
             });
}