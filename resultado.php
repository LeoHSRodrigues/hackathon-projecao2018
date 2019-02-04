<?php
$teste = $_POST['teste'];
//print_r ($teste);
$contador = 0;
$flag = 0;
$flag1 = 0;
foreach ($teste as $valor){
	if ($valor%2 == 0){
		$contador++;
		$flag++;
	}
	else{
		$contador = &$contador;
	$contador = $contador + 2;
	$flag1++;
	}	
}
if ($flag < $flag1){

}
else{

}
?>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Highlight-Blue.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>

	  <div id="container-speed">
	  </div>
	  <div style="float:right;" id="container"></div>
	  <input type="button" class="btn btn-primary d-flex m-auto" onclick="location.href = 'form.php';" value="Tentar Novamente"><br/>
	  <input type="button" class="btn btn-primary d-flex m-auto" onclick="location.href = 'index.html';" value="Voltar">
	<style>
	body{
		padding-left:200px;
		padding-right:200px;
	}
	div{
		display:inline-block;
		width: 400px;
	}
	</style>
	<script>
 $(document).ready(function() {
            var chart = {
               plotBackgroundColor: null,
               plotBorderWidth: null,
               plotShadow: false
            };
            var title = {
               text: 'Alimentos Escolhidos'   
            };      
            var tooltip = {
               pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            };
            var plotOptions = {
               pie: {
                  allowPointSelect: true,
                  cursor: 'pointer',
                  
                  dataLabels: {
                     enabled: false           
                  },
                  
                  showInLegend: true
               }
            };
            var series = [{
               type: 'pie',
               name: 'total',
               data: [
                  ['Saudáveis',   <?php echo $flag ?>],
                  ['Não saudável',       <?php echo $flag1 ?>],
               ]
            }];     
            var json = {};   
            json.chart = chart; 
            json.title = title;     
            json.tooltip = tooltip;  
            json.series = series;
            json.plotOptions = plotOptions;
            $('#container').highcharts(json);  
         });
		 
var gaugeOptions = {

  chart: {
    type: 'solidgauge'
  },

  title: "",

  pane: {
    center: ['50%', '85%'],
    size: '100%',
    startAngle: -90,
    endAngle: 90,
    background: {
      backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
      innerRadius: '60%',
      outerRadius: '100%',
      shape: 'arc'
    }
  },

  tooltip: {
    enabled: false
  },

  // the value axis
  yAxis: {
    stops: [
      [0.1, '#55BF3B'], // green
      [0.5, '#DDDF0D'], // yellow
      [0.9, '#DF5353'] // red
    ],
    lineWidth: 0,
    minorTickInterval: null,
    tickAmount: 2,
    title: {
      y: -120
    },
    labels: {
      y: 12
    }
  },

  plotOptions: {
    solidgauge: {
      dataLabels: {
        y: 5,
        borderWidth: 0,
        useHTML: true
      }
    }
  }
};

// The speed gauge
var chartSpeed = Highcharts.chart('container-speed', Highcharts.merge(gaugeOptions, {
  yAxis: {
    min: 0,
    max: 20,
    title: {
      text: 'Índice de saúde Alimentar'
    }
  },

  credits: {
    enabled: false
  },

  series: [{
    name: 'Índice',
    data: [<?php  echo $contador ?>],
    dataLabels: {
      format: '<div style="text-align:center"><span style="font-size:25px;color:' +
        ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
        '<span style="font-size:12px;color:silver">Índice de saúde alimentar</span></div>'
    },
    tooltip: {
      valueSuffix: ' Índice de saúde alimentar'
    }
  }]

}));
      </script>