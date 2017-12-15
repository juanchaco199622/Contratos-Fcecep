<?php
  require_once('./pdf/mpdf.php');

  $mpdf = new mPDF('c','A4');
  $mpdf->writeHTML('<div> Hola ..... </div>');
  $mpdf->Output('rs.pdf', 'I');

 ?>
