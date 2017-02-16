<?php echo $this->Html->script(array('acordeon', 'tooltip', 'datepicker', 'moment', 'bootstrap-datetimepicker')); ?>
<div class="row">
	<div class="col-xs-6 col-sm-3">
	    <?php echo $this->Form->input('created', array('label' => 'Creado*', 'id' => 'datetimepicker1', 'type' => 'text', 'class' => 'input-group date', 'class' => 'form-control', 'span class' => 'fa fa-calendar')); ?>
    </div>
</div><hr />
<div class="row"><!--<div class="subtitulo">Datos del curso</div>-->
   <div class="col-md-6 col-sm-6 col-xs-12">
	   <div class="unit"><strong><h3>Datos Generales</h3></strong><hr />
			<?php
                echo $this->Form->input('curso_id', array('label' => 'Curso*', 'empty' => 'Ingrese un curso...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
                /*$nombres = array('Matematica de primero' => 'Matematica de primero', 'Matematica de segundo' => 'Matematica de segundo',
                                 'Matematica de tercero' => 'Matematica de tercero', 'Lengua de primero' => 'Lengua de primero', 
                                 'Lengua de segundo' => 'Lengua de segundo', 'Lengua de tercero' => 'Lengua de tercero',
                                 'Historia de primero' => 'Historia de primero', 'Historia de segundo' => 'Historia de segundo',
                                 'Historia de tercero' => 'Historia de tercero');*/
                echo $this->Form->input('nombre', array('label' => 'Nombre', 'empty' => 'Ingrese un nombre...',/* 'options' => $nombres,*/ 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción.'));
                /*$alias = array( 'MATEMÁTICA' => array(
                               'MAT1_1' => 'MAT1_1', 'MAT1_2' => 'MAT1_2', 'MAT1_3' => 'MAT1_3', 'MAT1_4' => 'MAT1_4',
                               'MAT2_1' => 'MAT2_1', 'MAT2_2' => 'MAT2_2', 'MAT2_3' => 'MAT2_3', 'MAT2_4' => 'MAT2_4',
                               'MAT3_1' => 'MAT3_1', 'MAT3_2' => 'MAT3_2', 'MAT3_3' => 'MAT3_3', 'MAT3_4' => 'MAT3_4'
                              ),
                             'LENGUA' => array(
                               'LEN1_1' => 'LEN1_1', 'LEN1_2' => 'LEN1_2', 'LEN1_3' => 'LEN1_3', 'LEN1_4' => 'LEN1_4',
                               'LEN2_1' => 'LEN2_1', 'LEN2_2' => 'LEN2_2', 'LEN2_3' => 'LEN2_3', 'LEN2_4' => 'LEN2_4', 
                               'LEN3_1' => 'LEN3_1', 'LEN3_2' => 'LEN3_2', 'LEN3_3' => 'LEN3_3', 'LEN3_4' => 'LEN3_4'
                              ), 		
                             'HISTORIA' => array(
                               'HIS1_1' => 'HIS1_1', 'HIS1_2' => 'HIS1_2', 'HIS1_3' => 'HIS1_3','HIS1_4' => 'HIS1_4',
                               'HIS2_1' => 'HIS2_1', 'HIS2_2' => 'HIS2_2', 'HIS2_3' => 'HIS2_3','HIS2_4' => 'HIS2_4',
                               'HIS3_1' => 'HIS3_1', 'HIS3_2' => 'HIS3_2', 'HIS3_3' => 'HIS3_3','HIS3_4' => 'HIS3_4'
                              )
                        );*/          
                echo $this->Form->input('alia', array('label' => 'Alia', 'empty' => 'Ingrese un alia...',/* 'options' => $alias,*/ 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
                $formaciones = array('Cs Naturales' => 'Cs Naturales', 'Cs Sociales' =>'Cs Sociales', 'Cs Exactas' =>'Cs Exactas',
                                     'Lengua' =>'Lengua');
                echo $this->Form->input('campo_formacion', array('label' => 'Campo de formación', 'empty' => 'Ingrese un campo de formación...', 'options' => $formaciones, 'between' => '<br>', 'class' =>  'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca el nombre del campo de formación', 'placeholder' => 'Campo de formación'));
                $formatos = array('Asignatura' => 'Asignatura', 'Seminario' =>'Seminario', 'Taller' =>'Taller');
                echo $this->Form->input('formato', array('label' => 'Formato', 'empty' => 'Ingrese un formato...', 'options' => $formatos, 'between' => '<br>', 'class' =>  'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca el nombre del formato', 'placeholder' => 'Formato'));
                $tipos_dictado = array('Presencial' => 'Presencial', 'A Distancia - Semipresencial' => 'A Distancia - Semipresencial',
                                       'A Distancia - Asistida' => 'A Distancia - Asistida', 'A Distancia - Abierta' => 'A Distancia - Abierta',
                                       'A Distancia - Virtual' => 'A Distancia - Virtual');
                echo $this->Form->input('dictado', array('label' => 'Dictado', 'empty' => 'Ingrese un tipo de dictado...', 'options' => $tipos_dictado, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
                $tipos_obligatoriedad = array('Obligatoria' => 'Obligatoria', 'Elegible' => 'Elegible', 'Optativa' => 'Optativa',
                                              'Obligatoria reemplazable por otra' => 'Obligatoria reemplazable por otra');
                echo $this->Form->input('obligatoriedad', array('label' => 'Obligatoriedad', 'empty' => 'Ingrese un tipo de obligatoriedad...', 'options' => $tipos_obligatoriedad, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
                echo $this->Form->input('contenido', array('label' => 'Contenidos', 'type' => 'file', 'class' => 'file', 'data-show-upload' => 'false', 'data-show-caption' => 'true'));
           ?>
        </div>
   </div>     
   <div class="col-md-6 col-sm-6 col-xs-12"><!--<div class="subtitulo">Datos de contacto</div>-->
		<div class="unit"><strong><h3>Datos Específicos</h3></strong><hr />
			<?php		
				$tipos_carga_horaria = array('Hora Cátedra' => 'Hora Cátedra', 'Hora Reloj' => 'Hora Reloj');
				echo $this->Form->input('carga_horaria_en', array('label' => 'Carga horaria en', 'empty' => 'Ingrese una carga horaria...', 'options' => $tipos_carga_horaria, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
				echo $this->Form->input('carga_horaria_semanal', array('label' => 'Carga horaria semanal', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese un número', 'Placeholder' => 'Ingrese la carga horaria...'));
				$tipos_duracion_en = array('Años' => 'Años', 'Cuatrimestres' => 'Cuatrimestres', 'Semestres' => 'Semestres');
				echo $this->Form->input('duracion_en', array('label' => 'Duración en', 'empty' => 'Ingrese una duración...', 'options' => $tipos_duracion_en, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
				echo $this->Form->input('duracion', array('label' => 'Duración', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca una número', 'Placeholder' => 'Ingrese una duración...'));
				$tipos_escala_numerica = array('Si' => 'Si', 'No' => 'No');
				echo $this->Form->input('escala_numerica', array('label' => 'Escala numérica', 'empty' => 'Ingrese una escala numérica...', 'options' => $tipos_escala_numerica, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
				echo $this->Form->input('nota_minima', array('label' => 'Nota mínima', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca la nota mínima', 'Placeholder' => 'Ingrese una nota mínima...'));
            ?>
        </div>
             <script type="text/javascript">
            $('#datetimepicker1').datetimepicker({ 
			useCurrent: true, //this is important as the functions sets the default date value to the current value
			format: 'YYYY-MM-DD hh:mm',
			}).on('dp.change', function (e) {
                  var specifiedDate = new Date(e.date);
				  if (specifiedDate.getMinutes() == 0)
				  {
					  specifiedDate.setMinutes(1);
					  $(this).data('DateTimePicker').date(specifiedDate);
				  }
               });
     </script>
  </div>
</div>
