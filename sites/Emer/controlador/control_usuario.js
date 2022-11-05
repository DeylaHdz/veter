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

function btn_editar(ID_mascota)
{
	 var ob = {ID_mascota:ID_mascota};

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
     var ID_mascota = $("#ID_mascota").val();
	 var nombre = $("#nombre_ed").val();
	 var apellido = $("#apellido_ed").val();
	 var edad = $("#edad_ed").val();

	 //alert(nombre+" - "+apellido+" - "+edad);

	 var ob = {nombre:nombre, apellido:apellido, edad:edad,ID_mascota:ID_mascota};

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


function btn_eliminar(ID_mascota)
{
	 var ob = {ID_mascota:ID_mascota};

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
     var ID_mascota = $("#ID_mascota").val();

	 var ob = {ID_mascota:ID_mascota};

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
                  $("#myModal_eliminar").modal("hide1").fadeIn("slow");
                 },2500);

                 setTimeout(function(){
                  btn_listar_datos();
                 },3000);
                

                }
             });
}

function select_usuario()
{ //id="select_usuario"
  
 var ID_mascota =  $("#select_usuario").val();
// alert("Hola select = "+ID_usuario);

    var ob = {ID_mascota:ID_mascota};

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