<?php
require_once 'MysqliDb.php';
require_once './PHPMailer-master/PHPMailerAutoload.php';
require_once './helper.php';

$modelo    = isset ($_POST['modelo']) ? $_POST['modelo'] : null;
$categoria = isset ($_POST['categoria']) ? $_POST['categoria'] : null;
$accion    = isset ($_POST['accion']) ? $_POST['accion'] : null;

$db = new MysqliDb (Array (
	'host'     => 'localhost',
	'username' => 'root', 
	'password' => '',
	'db'       => 'seguropa_db',
	'charset'  => 'utf8'
));

if (!empty ($accion)) {
	switch ($accion) {
		case 'cotizar':
			// Obtener la categoría
			$categoria = getCategoryByNameslug($categoria);
			// Obtener los seguros
			$seguros   = getProductsByCategory($categoria['id']);
			?>

<div class="center contratar" id="_contratar">
	<div class="content-inner">
		<form id="cotizar">
			<div class="left-side-title">
				<span class="fa fa-mobile left-side-icon"></span>
				<h3>
					<span><?php echo str_replace(' ', '</span><strong>', $categoria['nombre']) ?></strong>
				</h3>
			</div>
			<div class="form-inputs right-side-inputs">
				<h2><span class="number-globe">1</span> Elegí tu seguro y cotizalo</h2>

				<pre>
				<?php // var_dump($seguros); ?>
				</pre>
				
				<?php foreach ($seguros as $seguro) { ?>
					<?php $seguro_sano = strtolower (sanear_string(str_replace (' ', '_', $seguro['nombre']))) ?>
					<div class="form-line border-bottom input-check">
						<input type="checkbox" data-parent="<?php echo $seguro['pertenencia'] ?>" id="<?php echo $seguro_sano ?>" name="<?php echo $seguro_sano ?>" value="<?php echo $seguro['id'] ?>">
						<label for="<?php echo $seguro_sano ?>"><?php echo $seguro['nombre'] ?></label>
					</div>
				<?php } ?>
				<div class="form-line">
					<a href="#/seguro/<?php echo strtolower (sanear_string($categoria['nombre'])) ?>/cancelar" class="btn left"><span class="fa fa-angle-left"></span><span>Cancelar</span></a>
					<a href="#/seguro/<?php echo strtolower (sanear_string($categoria['nombre'])) ?>/contratar" class="btn"><span>Continuar</span><span class="fa fa-angle-right"></span></a>
				</div>
			</div>
			<div class="clear"></div>
		</form>
	</div>
</div>

			<?php
		break;
	}
}

function getCategoryByNameslug($nameslug) {
	global $db;
	// Traer la categoría según el nombre del registro
	$db->where('nombre_sano', $nameslug);
	$categoria = $db->getOne('categoria');
	return $categoria;
}

function getProductsByCategory($catid) {
	global $db;
	// Traer los seruguros según la categoría
	$db->where('categoria', $catid);
	$seguros = $db->get('seguro');
	return $seguros;
}
?>