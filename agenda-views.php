<?php
//conexão
include_once 'crud/php_action/db_connect.php';
//header
include_once 'crud/includes/header.php';
//conexao
$resultado_agendamentos = "SELECT aluno_agendamento, servidor_agendamento, data_horario FROM agendamentos";
?>
<!DOCTYPE html>
<html lang="pt-br">

<!--<head>
	<meta charset='utf-8' />
	<link href='css/fullcalendar.min.css' rel='stylesheet' />
	<link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
	<script src='js/moment.min.js'></script>
	<script src='js/jquery.min.js'></script>
	<script src='js/fullcalendar.min.js'></script>
	<script src='/locale/pt-br.js'></script>
	<script>
		$(document).ready(function() {

			$('#calendar').fullCalendar({
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay,listWeek'
				},
				defaultDate: Date(),
				navLinks: true, // can click day/week names to navigate views
				editable: true,
				eventLimit: true, // allow "more" link when too many events
				events: [
					<?php
							$resultado = mysqli_query($connect, $sql);
							while($dados = mysqli_fetch_array($resultado)){
								?>
								{
								id: '<?php echo $dados['id_agendamento']; ?>',
								nomealuno: '<?php echo $dados['aluno_agendamento']; ?>',
								nomeservidor: '<?php echo $dados['servidor_agendamento']; ?>',
								data_horario: '<?php echo $dados['data_horario']; ?>',
								} ,<?php
							}
						?>
				]
			});

		});
	</script>
</head>
<body>

	<div id='calendar'></div>

</body>
</html>
-->