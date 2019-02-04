<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackathon</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Highlight-Blue.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<link href="image-picker.css" rel="stylesheet" type="text/css">
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/highcharts-more.js"></script>
	<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
	<style>
	 img {
  width: 250px;
  height: 250px;
  }
	</style>
</head>

<body><div>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><a href="index.html" class="navbar-brand">Perdidos na TI</a>
        </div>
    </nav>
</div>
    <div class="contact-clean">
        <form method="post" action="resultado.php">
		<div id="esconder">
            <h2 class="text-center">Escolha os alimentos que você consumiria no dia-dia:</h2>              		
                <div class="col">
				<select required class="image-picker" name="teste[]" multiple="multiple">
					  <optgroup label="">
						<option data-img-src="assets/img/chocolate.jpg" value="1">Alimento 1</option>
						<option data-img-src="assets/img/abacate.jpg" value="2">Alimento 1</option>
						<option data-img-src="assets/img/batata_frita.jpg" value="3">Alimento 1</option>
						<option data-img-src="assets/img/banana.jpg" value="4">Alimento 1</option>
						<option data-img-src="assets/img/cahorro_quente.jpg" value="5">Alimento 1</option>
						<option data-img-src="assets/img/cenoura_cozida.jpg" value="6">Alimento 1</option>
						<option data-img-src="assets/img/coxinha_frita.jpg" value="7">Alimento 1</option>
						<option data-img-src="assets/img/frango.jpg" value="8">Alimento 1</option>
						<option data-img-src="assets/img/doces.jpg" value="9">Alimento 1</option>
						<option data-img-src="assets/img/maca.jpg" value="10">Alimento 1</option>
						<option data-img-src="assets/img/pastel.jpg" value="11">Alimento 1</option>
						<option data-img-src="assets/img/ovos.jpg" value="12">Alimento 1</option>
						<option data-img-src="assets/img/pizza.png" value="13">Alimento 1</option>
						<option data-img-src="assets/img/peixe.jpg" value="14">Alimento 1</option>
						<option data-img-src="assets/img/quibe_frito.jpg" value="15">Alimento 1</option>
						<option data-img-src="assets/img/sucos_saudaveis.jpg" value="16">Alimento 1</option>
						<option data-img-src="assets/img/refrigerantes.jpg" value="17">Alimento 1</option>
						<option data-img-src="assets/img/tomate.jpg" value="18">Alimento 1</option>
						<option data-img-src="assets/img/salgadinhos.jpg" value="19">Alimento 1</option>
						<option data-img-src="assets/img/uva.jpg" value="20">Alimento 1</option>
					  </optgroup>
					</select>
				</div>
				<div class="form-group">
				<input type="submit"class="btn btn-primary d-flex m-auto" name="submit" value="Finalizar"></div>
        </form>
				<input type="button" class="btn btn-primary d-flex m-auto" onclick="location.href = 'index.html';" value="Voltar"></div>
		</div>
		<div class="outer form-group">
	  <div id="container-speed" ></div>
	</div>
	</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/image-picker.js"></script>
		<script>
$(".image-picker").imagepicker({
	
  // show/hide the regular select box
  hide_select: true,

  // show/hide image labels
  show_label: false,

  // callback functions
  initialized: undefined,
  changed: undefined,
  clicked: undefined,
  selected: undefined,

  // set the max number of selectable options 
  limit: 10,

  // called when the limit cap has been reached
  limit_reached: undefined,

  // using Font Awesome icons instead
  font_awesome: false
})
</script>
</body>

</html>