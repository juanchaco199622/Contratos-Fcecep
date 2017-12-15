<?php
	include 'informe1.php';
	require 'conexion.php';

	$query = "SELECT C.id_contrato, C.nombre_contrato,C.fecha_inicio_contrato, C.fecha_fin_contrato,
	C.descripcion_contrato, P.identificador_proveedor, P.nombre_proveedor,e.nombre_empresa
  FROM tb_contrato AS C INNER JOIN tb_proveedor AS P ON(C.id_proveedor = P.id_proveedor)
	INNER JOIN tb_empresa AS e ON(C.id_empresa = e.id_empresa)ORDER BY id_contrato";
    	$resultado = $mysqli->query($query);

    	$pdf = new PDF();
    	$pdf->AliasNbPages();
    	$pdf->AddPage();

    	$pdf->SetFillColor(232,232,232);
    	$pdf->SetFont('Arial','B',10);
    	$pdf->Cell(10,6,'ID',1,0,'C',1);
      $pdf->Cell(30,6,'CONTRATO',1,0,'C',1);
      $pdf->Cell(30,6,'DESCRIPCION',1,0,'C',1);
      $pdf->Cell(30,6,'PROVEEDOR',1,0,'C',1);
			$pdf->Cell(30,6,'EMPRESA',1,0,'C',1);
      $pdf->Cell(25,6,'FECHA INICIO',1,0,'C',1);
      $pdf->Cell(25,6,'FECHA FIN',1,1,'C',1);

    	$pdf->SetFont('Arial','',10);

    	while($row = $resultado->fetch_assoc())
    	{
    		$pdf->Cell(10,6,utf8_decode($row['id_contrato']),1,0,'C');
    		$pdf->Cell(30,6,utf8_decode($row['nombre_contrato']),1,0,'C');
        $pdf->Cell(30,6,utf8_decode($row['descripcion_contrato']),1,0,'C');
        $pdf->Cell(30,6,utf8_decode($row['nombre_proveedor']),1,0,'C');
				$pdf->Cell(30,6,utf8_decode($row['nombre_empresa']),1,0,'C');
        $pdf->Cell(25,6,utf8_decode($row['fecha_inicio_contrato']),1,0,'C');
        $pdf->Cell(25,6,utf8_decode($row['fecha_fin_contrato']),1,1,'C');


      }
    	 $pdf->Output();
 ?>
