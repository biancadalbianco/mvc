<?php if (!defined('DIR_BASE')) exit; ?>

<div class="wrap">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
		google.charts.load('current', {
			'packages': ['corechart']
		});
		google.charts.setOnLoadCallback(drawChart);

		function drawChart() {
			
			// Grafico Ano
			var data = google.visualization.arrayToDataTable([
				['Ano', 'Valor'],
				<?php	foreach ($data['values'] as $valor) {
					$dataAno=explode('-',$valor['date']);?>['<?php echo $dataAno[1];?>',<?php echo $valor['value'];?>], <?php } ?>
			]);
			var options = {
				title: 'Grafico do ano de 2022',
				curveType: 'function'};
			var chart = new google.visualization.LineChart(document.getElementById('chart_ano'));
			chart.draw(data, options);

			// Grafico Mês

			var data = google.visualization.arrayToDataTable([
				['Mês', 'Valor'],
				<?php	foreach ($data['values1'] as $valor) {
					$dataMes=explode('-',$valor['date']);?>['<?php echo $dataMes[2];?>',<?php echo $valor['value'];?>],<?php } ?>
			]);
			var options = {
				title: 'Grafico do mês 10 de 2022',
				curveType: 'function'};
			var chart = new google.visualization.LineChart(document.getElementById('chart_mes'));
			chart.draw(data, options);
			
			// Grafico Dia

			var data = google.visualization.arrayToDataTable([
				['Dia', 'Valor'],
				
				<?php foreach ($data['values2'] as $valor) {
					$dataDia=explode('-',$valor['date']);?>['<?php echo $dataDia[2];?>',<?php echo $valor['value'];?>],<?php } ?>
			]);
			var options = {
				title: 'Grafico do Dia 05/02/2022',
				curveType: 'function'};
			var chart = new google.visualization.LineChart(document.getElementById('chart_dia'));
			chart.draw(data, options);
		}
	</script>
	</head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 m-5 bg-info text-center rounded pt-4 pb-4">
                    <p class="text-white fs-5">Saldo Atual</p>
                    <div class="mt-3"><p class="text-white fs-2">R$:<?php echo $data['cash_balance'];?></p></div>
                </div>
                <div class="col-12 col-md-3 m-5 bg-success text-center rounded pt-4 pb-4">
                    <p class="text-white fs-5">Entrada</p>
                    <div class="mt-3"><p class="text-white fs-2">R$:<?php echo $data['input'];?></p></div>
                </div>
                <div class="col-12 col-md-3 m-5 bg-danger text-center rounded pt-4 pb-4">
                    <p class="text-white fs-5">Saida</p>
                    <div class="mt-3"><p class="text-white fs-2">R$:<?php echo $data['output'];?></p></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                <div id="chart_ano" style="width: 80%; height: 500px; margin-left:10%;" class="col"></div>
                </div>
            </div>
			<div class="row">
                <div class="col-12">
                <div id="chart_mes" style="width: 80%; height: 500px; margin-left:10%;" class="col"></div>
                </div>
				<div class="row">
                <div class="col-12">
                <div id="chart_dia" style="width: 80%; height: 500px; margin-left:10%;" class="col"></div>
                </div>
            </div>
        </div>
    </body>
</div>