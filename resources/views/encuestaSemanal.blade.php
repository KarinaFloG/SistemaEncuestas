@extends('layouts.app')

@section('content')
<!--Aqui inica el body-->
<div style="text-align: center;">
	<table class="table table-responsive-sm"  border="1" style="margin: 0 auto;">
    	<tr>
        	<td>Imagen</td>
        	<td><h3>Encuesta de evaluación de la práctica</h3></td>
        	<td>
        		<table class="table table-striped">
        			<tr>
        				<td>Código</td>
        				<td>FODO 32</td>
        			</tr>
        			<tr>
        				<td>Versión</td>
        				<td>02</td>
        			</tr>
        			<tr>
        				<td>Página</td>
        				<td>1/1</td>
        			</tr>
        			<tr>
        				<td>Sección ISO</td>
        				<td>7.1.6,8.2.1,8.5.1,8.5.2</td>
        			</tr>
        			<tr>
        				<td>Fecha de emisión</td>
        				<td>21 Septiembre 2017</td>
        			</tr>
        		</table>
        	</td>
    	</tr>
    	<tr>
        	<td colspan="2">Facultad de ingeniería</td>
        	<td colspan="1">Área/Departamento: Laboratorio de Química</td>
    	</tr>
    	<tr>
        	<td colspan="3"><p><b>ESTIMADO ALUMNO:</b>Con la finalidad de mejorar el servicio (Profesor, manual de prácticas, personal de laboratorio, instalaciones y equipo) que te brinda el laboratorio, te solicitamos responder con veracidad la siguiente encuesta y proporcionar cualquier comentario adicional que resulte relevante</p></td>
    	</tr>
    	<tr>
        	<td colspan="3">
				<table width="100%" class="tablas-datos table-striped">
        			<tr>
        				<td>
        					<form action="">
        						<div class="form-group">
        							<label for="">Alumno:</label>
        							<input type="text" name="Alumno">
        						</div>
        					</form>
        				</td>
        				<td>
        					<form action="">
        						<div class="form-group">
        							<label for="">Grupo:</label>
        							<input type="text" name="Grupo">
        						</div>
        					</form>	
        				</td>
        			</tr>

        			<tr>
        				<td>
        					<form action="">
        						<div class="form-group">
        							<label for="">Práctica:</label>
        							<input type="text" name="Practica">
        						</div>
        					</form>	
        				</td>
        				<td>
        					<form action="">
        						<div class="form-group">
        							<label for="">Semestre:</label>
        							<input type="text" name="Semestre">
        						</div>
        					</form>	
        				</td>
        			</tr>

        			<tr>
        				<td>
        					<form action="">
        						<div class="form-group">
        							<label for="">Brigada:</label>
        							<input type="text" name="Brigada">
        						</div>
        					</form>	
        				</td>
        				<td>
        					<form action="">
        						<div class="form-group">
        							<label for="">Fecha:</label>
        							<input type="text" name="Fecha">
        						</div>
        					</form>	
        				</td>
        			</tr>

        			<tr>
        				<td>
        					<form action="">
        						<div class="form-group">
        							<label for="">Asignatura:</label>
        							<input type="text" name="Asignatura">
        						</div>
        					</form>	
        				</td>
        			</tr>


        		</table>
        	</td>
    	</tr>
    	<tr>
        	<td><b>Responde según la siguiente escala:<br>100:Muy bueno  &nbsp &nbsp 80:Buena <br> 60:Regular &nbsp &nbsp &nbsp &nbsp &nbsp 50:Mala</b></td>
        	<td>
        		<table width="100%" class="tablas-datos table-responsive-md"  border="1">
        			<tr align="center" >
        				<td width="25%"><b>100</b></td>
        				<td width="25%"><b>80</b></td>
        				<td width="25%"><b>50</b></td>
        				<td width="25%"><b>60</b></td>
        			</tr>	
        		</table>
        	</td>
        	<td><b>Si lo deseas, justifica la calificación que anotaste</b></td>
    	</tr>

    	<tr>
        	<td colspan="3"><b>A.- DESARROLLO DE LAS PRÁCTICAS</b></td>
    	</tr>


    	<tr>
        	<td>1.- La disponibilidad del equipo y material para realizar <br> la práctica fue:</td>
        	<td>
        		<table width="100%" class="tablas-datos table-responsive-md"  border="1">
        			<tr align="center" >
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>
        				</td>
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>        					
        				</td>
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>        					
        				</td>
        				<td width="25%">
 							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>       					
        				</td>
        			</tr>	
        		</table>
        	</td>
        	<td>
        		<form action="">
        			<div class="form-group">
        				<label for="">Justificación:</label>
        				<input type="text" name="Justificacion">
        			</div>
        		</form>        		
        	</td>
    	</tr>

    	<tr>
        	<td>2.- El funcionamiento del equipo para desarrollar <br> la práctica fue:</td>
        	<td>
        		<table width="100%" class="tablas-datos table-responsive-md"  border="1">
        			<tr align="center" >
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>
        				</td>
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>        					
        				</td>
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>        					
        				</td>
        				<td width="25%">
 							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>       					
        				</td>
        			</tr>	
        		</table>
        	</td>
        	<td>
        		<form action="">
        			<div class="form-group">
        				<label for="">Justificación:</label>
        				<input type="text" name="Justificacion">
        			</div>
        		</form>       		
        	</td>
    	</tr>

    	<tr>
        	<td>3.- La disponibilidad de la página web fue:</td>
        	<td>
        		<table width="100%" class="tablas-datos table-responsive-md"  border="1">
        			<tr align="center" >
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>
        				</td>
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>        					
        				</td>
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>        					
        				</td>
        				<td width="25%">
 							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>       					
        				</td>
        			</tr>	
        		</table>
        	</td>
        	<td>
        		<form action="">
        			<div class="form-group">
        				<label for="">Justificación:</label>
        				<input type="text" name="Justificacion">
        			</div>
        		</form>        		
        	</td>
    	</tr>

    	<tr>
        	<td colspan="3"><b>B.- PERSONAL DEL LABORATORIO</b></td>
    	</tr>

    	<tr>
        	<td>4.- En caso de haber requerido la atención por <br> parte del personal de laboratorio fue:</td>
        	<td>
        		<table width="100%" class="tablas-datos table-responsive-md"  border="1">
        			<tr align="center" >
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>
        				</td>
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>        					
        				</td>
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>        					
        				</td>
        				<td width="25%">
 							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>       					
        				</td>
        			</tr>	
        		</table>
        	</td>
        	<td>
        		<form action="">
        			<div class="form-group">
        				<label for="">Justificación:</label>
        				<input type="text" name="Justificacion">
        			</div>
        		</form>       		
        	</td>
    	</tr>

    	<tr>
        	<td colspan="3"><b>C.- PROFESOR</b></td>
    	</tr>

    	<tr>
        	<td>5.- La manera en que el profesor explicó el <br> desarrollo de práctica fue:</td>
        	<td>
        		<table width="100%" class="tablas-datos table-responsive-md"  border="1">
        			<tr align="center" >
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>
        				</td>
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>        					
        				</td>
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>        					
        				</td>
        				<td width="25%">
 							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>       					
        				</td>
        			</tr>	
        		</table>
        	</td>
        	<td>
        		<form action="">
        			<div class="form-group">
        				<label for="">Justificación:</label>
        				<input type="text" name="Justificacion">
        			</div>
        		</form>        		
        	</td>
    	</tr>

    	<tr>
        	<td>6.- La aclaración de dudas durante el <br> desarrollo de la práctica fue:</td>
        	<td>
        		<table width="100%" class="tablas-datos table-responsive-md"  border="1">
        			<tr align="center" >
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>
        				</td>
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>        					
        				</td>
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>        					
        				</td>
        				<td width="25%">
 							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>       					
        				</td>
        			</tr>	
        		</table>
        	</td>
        	<td>
        		<form action="">
        			<div class="form-group">
        				<label for="">Justificación:</label>
        				<input type="text" name="Justificacion">
        			</div>
        		</form>       		
        	</td>
    	</tr>

    	<tr>
        	<td>7.- La supervisión a tu brigada durante el <br> desarrollo de la práctica fue:</td>
        	<td>
        		<table width="100%" class="tablas-datos table-responsive-md"  border="1">
        			<tr align="center" >
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>
        				</td>
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>        					
        				</td>
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>        					
        				</td>
        				<td width="25%">
 							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>       					
        				</td>
        			</tr>	
        		</table>
        	</td>
        	<td>
        		<form action="">
        			<div class="form-group">
        				<label for="">Justificación:</label>
        				<input type="text" name="Justificacion">
        			</div>
        		</form>        		
        	</td>
    	</tr>

    	<tr>
        	<td>8.- La puntualidad al iniciar la práctica fue: </td>
        	<td>
        		<table width="100%" class="tablas-datos table-responsive-md"  border="1">
        			<tr align="center" >
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>
        				</td>
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>        					
        				</td>
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>        					
        				</td>
        				<td width="25%">
 							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>       					
        				</td>
        			</tr>	
        		</table>
        	</td>
        	<td>
        		<form action="">
        			<div class="form-group">
        				<label for="">Justificación:</label>
        				<input type="text" name="Justificacion">
        			</div>
        		</form>        		
        	</td>
    	</tr>

    	<tr>
        	<td colspan="3"><b>D.- INSTALACIONES</b></td>
    	</tr>

    	<tr>
        	<td>9.- Las instalaciones del laboratorio fueron:</td>
        	<td>
        		<table width="100%" class="tablas-datos table-responsive-md"  border="1">
        			<tr align="center" >
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>
        				</td>
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>        					
        				</td>
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>        					
        				</td>
        				<td width="25%">
 							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>       					
        				</td>
        			</tr>	
        		</table>
        	</td>
        	<td>
        		<form action="">
        			<div class="form-group">
        				<label for="">Justificación:</label>
        				<input type="text" name="Justificacion">
        			</div>
        		</form>      		
        	</td>
    	</tr>

    	<tr>
        	<td>10.- ¿Se cuenta con las mesas, sillas y/o <br> bancos necesarios para la realización de las prácticas? </td>
        	<td>
        		<table width="100%" class="tablas-datos table-responsive-md"  border="1">
        			<tr align="center" >
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>
        				</td>
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>        					
        				</td>
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>        					
        				</td>
        				<td width="25%">
 							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>       					
        				</td>
        			</tr>	
        		</table>
        	</td>
        	<td>
        		<form action="">
        			<div class="form-group">
        				<label for="">Justificación:</label>
        				<input type="text" name="Justificacion">
        			</div>
        		</form>        		
        	</td>
    	</tr>

    	<tr>
        	<td>11.- Consideras que el orden, la limpieza y las <br> condiciones de seguridad fueron: </td>
         	<td>
        		<table width="100%" class="tablas-datos table-responsive-md"  border="1">
        			<tr align="center" >
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>
        				</td>
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>        					
        				</td>
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>        					
        				</td>
        				<td width="25%">
 							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>       					
        				</td>
        			</tr>	
        		</table>
        	</td>
        	<td>
        		<form action="">
        			<div class="form-group">
        				<label for="">Justificación:</label>
        				<input type="text" name="Justificacion">
        			</div>
        		</form>        		
        	</td>
    	</tr>
    	<tr>
        	<td colspan="3"><b>E.- SATISFACCIÓN DEL SERVICIO</b></td>
    	</tr>

    	<tr>
        	<td>12.- Mi satisfacción respecto al servicio <br> proporcionado en el laboratorio fue:</td>
        	<td>
        		<table width="100%" class="tablas-datos table-responsive-md"  border="1">
        			<tr align="center" >
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>
        				</td>
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>        					
        				</td>
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>        					
        				</td>
        				<td width="25%">
 							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>       					
        				</td>
        			</tr>	
        		</table>
        	</td>
        	<td>
        		<form action="">
        			<div class="form-group">
        				<label for="">Justificación:</label>
        				<input type="text" name="Justificacion">
        			</div>
        		</form>       		
        	</td>
    	</tr>

    	<tr>
        	<td>13.-¿El servicio proporcionado en el laboratorio <br> cumplió con tus expectativas iniciales en cuanto a los conocimientos <br> y habilidades adquiridas?</td>
        	<td>
        		<table width="100%" class="tablas-datos table-responsive-md"  border="1">
        			<tr align="center" >
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>
        				</td>
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>        					
        				</td>
        				<td width="25%">
							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>        					
        				</td>
        				<td width="25%">
 							<div class="form-check">
  								<input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
							</div>       					
        				</td>
        			</tr>	
        		</table>
        	</td>
        	<td>
         		<form action="">
        			<div class="form-group">
        				<label for="">Justificación:</label>
        				<input type="text" name="Justificacion">
        			</div>
        		</form>       		
        	</td>
    	</tr>

    	<tr>
        	<td colspan="3"><b>F.-ATENCIÓN A FALLAS</b></td>
    	</tr> 

    	<tr>
        	<td>14a.- ¿Se presentaron fallas en el equipo <br> durante las prácticas?</td>
			<td>
        		<table width="100%" class="tablas-datos table-responsive-md"  border="1">
        			<tr align="center" >
        				<td width="50%">
							<div class="form-check form-check-inline">
  								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  								<label class="form-check-label" for="inlineCheckbox1">Sí</label>
							</div>  
        				</td>
        				<td width="50%">
							<div class="form-check form-check-inline">
  								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  								<label class="form-check-label" for="inlineCheckbox1">No</label>
							</div>     					
        				</td>
        			</tr>	
        		</table>
        	</td>       	
        	<td>
        		<form action="">
        			<div class="form-group">
        				<label for="">Justificación:</label>
        				<input type="text" name="Justificacion">
        			</div>
        		</form>        		
        	</td>
    	</tr>  

    	<tr>
        	<td>14b.- ¿Las fallas se atendieron <br> oportunamente?</td>
			<td>
        		<table width="100%" class="tablas-datos table-responsive-md"  border="1">
        			<tr align="center" >
        				<td width="33.33%">
							<div class="form-check form-check-inline">
  								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  								<label class="form-check-label" for="inlineCheckbox1">Sí</label>
							</div>  
        				</td>
        				<td width="33.33%">
							<div class="form-check form-check-inline">
  								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  								<label class="form-check-label" for="inlineCheckbox1">No</label>
							</div>     					
        				</td>
        				<td width="33.33%"><p>No aplica</p></td>
        			</tr>	
        		</table>
			</td>
        	<td>
        		<form action="">
        			<div class="form-group">
        				<label for="">Justificación:</label>
        				<input type="text" name="Justificacion">
        			</div>
        		</form>        		
        	</td>
    	</tr> 	

    	<tr>
        	<td colspan="3"><b>G.-OBJETIVOS DE LA PRÁCTICA</b></td>
    	</tr>

    	<tr>
        	<td>15.- ¿El profesor dio a conocer el objetivo <br> al inicio de la práctica?</td>
        	<td>
        		<table width="100%" class="tablas-datos table-responsive-md"  border="1">
        			<tr align="center" >
        				<td width="50%">
							<div class="form-check form-check-inline">
  								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  								<label class="form-check-label" for="inlineCheckbox1">Sí</label>
							</div>  
        				</td>
        				<td width="50%">
							<div class="form-check form-check-inline">
  								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  								<label class="form-check-label" for="inlineCheckbox1">No</label>
							</div>     					
        				</td>
        			</tr>	
        		</table>        		
        	</td>
        	<td>
        		<form action="">
        			<div class="form-group">
        				<label for="">Justificación:</label>
        				<input type="text" name="Justificacion">
        			</div>
        		</form>        		
        	</td>
    	</tr>

    	<tr>
        	<td>16.- ¿Consideras que se cumplieron los <br> objetivos de la práctica?</td>
        	<td>
        		<table width="100%" class="tablas-datos table-responsive-md"  border="1">
        			<tr align="center" >
        				<td width="50%">
							<div class="form-check form-check-inline">
  								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  								<label class="form-check-label" for="inlineCheckbox1">Sí</label>
							</div>  
        				</td>
        				<td width="50%">
							<div class="form-check form-check-inline">
  								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  								<label class="form-check-label" for="inlineCheckbox1">No</label>
							</div>     					
        				</td>
        			</tr>	
        		</table>         		
        	</td>
        	<td>
        		<form action="">
        			<div class="form-group">
        				<label for="">Justificación:</label>
        				<input type="text" name="Justificacion">
        			</div>
        		</form>
        	</td>
    	</tr>

    	<tr>
        	<td colspan="3"><b>Si deseas dejar una queja, sugerencia o felicitación te invitamos a usar el buzón del laboratorio</b></td>
    	</tr>
    	<tr>
        	<td colspan="3"><p>Nuestro compromiso es brindarte un servicio de calidad <b>GRACIAS POR TU COLABORACIÓN</b></p></td>
    	</tr>

</table>

</div>
@endsection