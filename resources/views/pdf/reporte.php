<style type="text/css">
	@page {
   size: 21.5cm 26cm;

}
.tabla1{
	margin-left: 3cm;
	margin-top: -0.8cm;
	line-height:20pt;
}
.tabla2{
	margin-left: 6cm;
	margin-top: 1.5cm;
}
.tabla3{
	margin-left: 2cm;
	margin-top: 0.3cm;
	margin-right: 5cm;
}
.tabla4{
	margin-left: 4.5cm;
	margin-top: 0.3cm;
	margin-right: 1cm;
}
.tabla5{
	margin-left: 1cm;
	margin-top: 0.3cm;
	margin-right: 1cm;
}
.inter{

}

</style>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="tabla1">
<table  border="0" width="100%">
  <tr><td width="70%" style="line-height:20pt;">Andres Ortiz Gutierrez</td><td>34</td></tr>
  <tr><td>Z. Villa Dolores C. Ruiz Nro 13</td><td>79866543</td></tr>
  <tr><td>cristales</td><td>armazon</td></tr>
  <tr><td>organicos</td><td>medidas</td></tr>
</table>
</div>

<div class="tabla2">
<table  border="0" width="100%" style="line-height:15pt;">
  <tr><td width="25%" class="inter" >1</td><td width="25%">2</td><td width="25%">3</td><td width="25%">4</td></tr>
  <tr><td>1</td><td>2</td><td>5</td><td>4</td></tr>
  <tr><td>1</td><td>2</td><td>3</td><td>4</td></tr>
  <tr><td>1</td><td>2</td><td>3</td><td>4</td></tr>
</table>
</div>
<div class="tabla3">
<table  border="0" width="100%" style="line-height:20pt;">
  <tr><td width="25%">1</td><td width="25%">250 Bs.</td></tr>
  <tr><td>1</td><td>100 Bs.</td></tr>
  <tr><td></td><td>150 Bs.</td></tr>

</table>
</div>
<div class="tabla4">
<table  border="0" width="100%" style="line-height:20pt;">
  <tr><td width="100%">Observaciones que podria tenerse del producto</td></tr>
</table>
</div>
<div class="tabla5">
<table  border="0" width="100%" style="line-height:20pt;">
  <tr><td width="100%">Observaciones que podria tenerse del producto</td></tr>
</table>
</div>

</body>
</html>
 <?php
require_once(public_path().'/dompdf/dompdf_config.inc.php');
$dompdf= new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf= $dompdf->output();
$filename='Reporte.pdf';
//convierte la hoja actual en pdf
$dompdf->stream($filename, array("Attachment"=>0));
//descarga directamente el pdf



  ?>
