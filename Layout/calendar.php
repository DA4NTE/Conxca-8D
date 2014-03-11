<!doctype html>
<html>
  
<head>
    <meta charset="utf-8" />
    

    <title>Agenda de Cabina Interactiva</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="../recursos/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../recursos/css/RegalCalendar.min.css" rel="stylesheet" type="text/css" />
    <link href="../recursos/css/Solicitud_Agenda.css" rel="stylesheet" type="text/css" />
    
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
    <script src="../recursos/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="../recursos/js/RegalCalendar.js" type="text/javascript"></script>
    <script src="../recursos/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../recursos/js/jquery.nicescroll.min.js" type="text/javascript"></script>
    <?php include("consulta.php"); ?>
    <?php include ("consultamia.php"); ?>
  
    <script type="text/javascript">
        $(document).ready(function () {
            $('#rCalendar').RegalCalendar({
				theme: 'red',
				base: 'white',
				show: 'mouseenter',
				modal: false,
				enter: 'fadeInRight',
				minDate: new Date(2012, 1 - 1, 1),
				maxDate: new Date(2014, 12 - 1, 31),
				tooltip: 'youtube',
				inputDate: '#inputDate', 
				inputEvent: '#inputEvent', 
				inputLocation: '#inputLocation',
				twitter: '@Angel'
			});
			$('#mCalendar').RegalCalendar({ theme: 'orange', base: 'white', show: 'mouseenter', modal: true, minDate: new Date(2012, 1 - 1, 1), maxDate: new Date(2014, 12 - 1, 31), tooltip: 'youtube',twitter: '@RegalCalendar' });
            $('#cyanCalendar').RegalCalendar({ theme: 'cyan', enter: 'fadeInLeft', exit: 'bounceOutDown', animation: 'fadeInLeft',twitter: '@RegalCalendar' });
			$('#redCalendar').RegalCalendar({ theme: 'red', tooltip: 'light', enter: 'fadeInUpBig', exit: 'fadeOutDownBig', animation: 'fadeInUpBig',twitter: '@RegalCalendar' });
			$('#yellowCalendar').RegalCalendar({ theme: 'yellow', tooltip: 'dark', enter: 'rotateInUpLeft', exit: 'rotateOutDownRight', animation: 'rotateInUpLeft',twitter: '@RegalCalendar' });
			$('#blueCalendar').RegalCalendar({ theme: 'blue', tooltip: 'tipsy', enter: 'lightSpeedIn', exit: 'lightSpeedOut', animation: 'lightSpeedIn',twitter: '@RegalCalendar' });
			$('#orangeCalendar').RegalCalendar({ theme: 'orange', tooltip: 'jtools', enter: 'rollIn', exit: 'rollOut', animation: 'rollIn',twitter: '@RegalCalendar' });
			$('#pinkCalendar').RegalCalendar({ theme: 'pink', tooltip: 'youtube', enter: 'fadeInLeft', exit: 'bounceOutDown', animation: 'fadeInLeft',twitter: '@RegalCalendar' });
			$('#greenCalendar').RegalCalendar({ theme: 'green', base: 'black', tooltip:'dark', enter: 'fadeInLeft', exit: 'bounceOutDown', animation: 'fadeInLeft', twitter: false });
			
            $("html").niceScroll();
            $('.bs-docs-sidenav a').click(function () { $('html, body').scrollTo($(this).attr('data-href'), 1000) });
			
    });
        
        </script>
    
   <!-- <script>
           
            function pregunta(){ 
    if (confirm('¿Estas seguro de enviar este formulario?')){ 
       document.calendar-copia.submit() 
    } 
      
                $("#solicitud").modal('show');
}
                
             
        
        </script>-->
  
    
<!--
    <script type="text/javascript">
  
        
        window.onload = function(){
            var okButton = document.getElementById('ok');
            okButton.onclick = okayClick;
        };
        
        function okayClick(){
            
            
            alert("consulta a la base de datos");
        }
        
        
        $(document).keydown(function(e){

  if (e.keyCode == 13){  

  close_modal();
  }

    });
        
        function close_modal(){             
    $('#solicitud')   
}
        
      
        
    </script>
-->
    
    
    <style type="text/css">

        body {
            background-image: url(../recursos/img/fondo.jpg);
            background-size: 100%;
            
        }
		.container { margin-top:40px;}
        div.row { margin-top: 40px; !important}
        ul.bs-docs-sidenav a { cursor:pointer }
		ul.bs-docs-sidenav { position:fixed; top:100px }
		section { margin:100px 0}
		h2 { font-size:20px }
		.com { color: #93a1a1; }
		.lit { color: #195f91; }
		.pun, .opn, .clo { color: #93a1a1; }
		.fun { color: #dc322f; }x
		.str, .atv { color: #D14; }
		.kwd, .prettyprint .tag { color: #1e347b; }
		.typ, .atn, .dec, .var { color: teal; }
		.pln { color: #48484c; }

		.prettyprint {
			padding: 8px;
			background-color: #f7f7f9;
			border: 1px solid #e1e1e8;
		}
		.prettyprint.linenums {
			-webkit-box-shadow: inset 40px 0 0 #fbfbfc, inset 41px 0 0 #ececf0;
			-moz-box-shadow: inset 40px 0 0 #fbfbfc, inset 41px 0 0 #ececf0;
			box-shadow: inset 40px 0 0 #fbfbfc, inset 41px 0 0 #ececf0;
		}

		/* Specify class=linenums on a pre to get line numbering */
		ol.linenums {
			margin: 0 0 0 33px; /* IE indents via margin-left */
		}
		ol.linenums li {
			padding-left: 12px;
			color: #bebec5;
			line-height: 20px;
			text-shadow: 0 1px 0 #fff;
		}
		.regalcalendar {
			
			display:inline-block;
            height: 400px;
           
		}
        
        
        
        .tamañodiv
        {
            height: 400px;
            width: 50%;
            background: rgba(255,255,255,.4);
            background-position: 50%;
            /*margin-left: 337px;*/
            margin-top: 27px;
            border-radius: 15px 15px 15px 15px;    
        }
        
        .semaforo{
        
            height:99px;
            width:13%;
            background-repeat:no-repeat;
            margin-left: 1000px;
            margin-top: -300px;
          
            
        }
        
        .text
        {
            text-align:left;
        }
        .text2
        {
           float: left;
        }
       
        
        
        
    </style>
</head>
 

    
<body>

    
    
  
    <div>
        
    </div>
<br>
<br>
<br>
<div  align="center" class="tamañodiv">
    
   <div id="rCalendar" class="regalcalendar" align="center">
      
    <span class="event" data-title="Event 2" data-location="France" data-date="30/04/2013" data-icon="Puzzles" data-time="16:00">
    Description of the event
    </span>
    </div>
  </div>
   <br>
   <br>
    
    
    <form align="center"  method="post" class="text">
   <label>

    Fecha 

</label>
    <input type="text" id="inputDate" name="consulta" class="text" />
    <br>
 <label>
     
     <p align="center">
          <input type="submit" value="aceptar" name ="modal" class="text2" > </p>
        
              
  </form>  
         

        
        
        <?php
        
        
        $nueva_variable=$_POST['consulta'];
       $result = mysql_query("SELECT * FROM agenda WHERE Fecha = '$nueva_variable' ", $link);
    

//obtenemos los datos resultado de la consulta
    $row = mysql_fetch_array($result);


//echo $row['id']."<br />";
echo $row['Id_Estatus']."<br />";
//echo $row['fecha']."<br />";


$variable_definida =  $row['Id_Estatus'];


if ($variable_definida == "2")
{
    $imagen .= "../recursos/img/semaforo_amarillo.png";
  # echo "<div data-toggle='modal' data-target='#solicitud'> </div>";
    
        
   echo'<p align="center">
          <input type="submit" value="Registrar" name ="modal" data-toggle="modal" data-target="#solicitud"> </p>';
 }
else if ($variable_definida == "1")
{
    $imagen .= "../recursos/img/semaforo_rojo.png";
    
}
else
{
    $imagen .= "../recursos/img/semaforo_verde.png";
    
}


echo "<div align='center' class='semaforo'>
    <img src='$imagen'/>
   </div>";
        
         
  ?>
        
        <!-- Modal -->
<div class="modal fade" id="solicitud" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
        <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        
            
        <div class="titulo" style="display:inline-block">
               <span class="img" style="display-inline-block"><img src="Img/calendarioB.png" alt="User"/></span>
               <h4 class="modal-title" id="myModalLabel" style="display:inline-block">SOLICITUD DE VISITA </h4>
           
        </div> 
            
            
            
      </div>
      
        <div class="modal-body">
         <div class="row" style="margin:0 auto">
        <div class="col-md-4">    
        <form method="post" action="" onsubmit="envsolicitud();">
            
                <span class="obligatorios"><p align=right>Campos obligatorios(*)</p></span>
      <p><span class="nota"><b>Nota: Ingrese los datos con mayúsculas y sin acentos.</b></span></p>
            <div class="input-group moverNG">
               <span class="co"><b>*</b></span> <label for="lNgrupos">Número de grupos</label> 
                <input type="text" class="inputs" name="fngrup" />

            </div>
            
             <div class="input-group moverTDA">
               <span class="co"><b>*</b></span> <label for="ltalumnos">Total de alumnos</label> 
                 <input type="text" class="inputs" name="ftalum" />
            </div>
            
            <div class="input-group moverH">
               <span class="co"><b>*</b></span> <label for="lhora">Hora de la visita</label> 
                 <input type="text" class="inputs" name="fhor" />
            </div>
             <div class="input-group moverMDLV">
               <label for="lhora">Motivo de la visita</label> 

               <textarea rows="10" cols="20" wrap="soft" class="inputs"></textarea>
            </div>
            
           
        
        </div>    
        </div>    
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary BotonES">Enviar solicitud</button>
          </form>
      </div>
    </div>
  </div>
</div>
        <!-- sfcsd-->
           
        
        
     
     
    
</body>
</html>
