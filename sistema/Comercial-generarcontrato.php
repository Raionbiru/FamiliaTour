
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php  

require("funciones.php");

$ruc = leerParam("ruc","");
$electronica = leerParam("electronica","");
$registro = leerParam("registro","");
$domicilio = leerParam("domicilio","");
$gerente = leerParam("gerente","");
$dni = leerParam("dni","");
$asiento = leerParam("asiento","");
$ruc2 = leerParam("ruc2","");
$partida = leerParam("partida","");
$registro2 = leerParam("registro2","");
$domicilio2 = leerParam("domicilio2","");
$dni2 = leerParam("dni2","");
$asiento2 = leerParam("asiento2","");

$tipo = leerParam("tipo","");

if ($tipo=="pdf") {
	ob_start();
    require("fpdf181/fpdf.php");
    
    class PDF extends FPDF
    {
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('assets/images/Logo_blanco.png',10,5,33);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(30,10,'Contrato');
        // Salto de línea
        $this->Ln(20);
    }
    
    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
    }
    
    // Creación del objeto de la clase heredada
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();

    
    $pdf->SetFont("Arial","",12);
    $pdf->SetY(20);
    $pdf->SetX(5);
    $pdf->Cell(10,10,iconv('UTF-8', 'ISO-8859-2', 'Conste por el presente documento el contrato de FAMILIA TOUR, que celebran de una parte AAA,'));
    
    $pdf->SetY(25);
    $pdf->SetX(5);
    $pdf->Cell(10,10,iconv('UTF-8', 'ISO-8859-2', 'identificada con R.U.C. N '.$ruc.' inscrita en la partida electrónica N° '.$electronica.' del Registro '));
    
    $pdf->SetY(30);
    $pdf->SetX(5);
    $pdf->Cell(10,10,iconv('UTF-8', 'ISO-8859-2', 'de Personas Jurídicas de '.$registro.', con domicilio en '.$domicilio.' , debidamente representada '));

    $pdf->SetY(35);
    $pdf->SetX(5);
    $pdf->Cell(10,10,iconv('UTF-8', 'ISO-8859-2', 'por su gerente general don '.$gerente.', identificado con el D.N.I. N° '.$dni.', con poderes inscritos'));

    $pdf->SetY(40);
    $pdf->SetX(5);
    $pdf->Cell(10,10,iconv('UTF-8', 'ISO-8859-2', 'en el asiento '.$asiento.' de la referida partida electrónica, a quien en lo sucesivo se denominará'));

    $pdf->SetY(45);
    $pdf->SetX(5);
    $pdf->Cell(10,10,iconv('UTF-8', 'ISO-8859-2', 'EL COMITENTE; y, de otra parte BBB, identificada con R.U.C. N° '.$ruc2.', inscrita en la partida'));

    $pdf->SetY(50);
    $pdf->SetX(5);
    $pdf->Cell(10,10,iconv('UTF-8', 'ISO-8859-2', 'electrónica N° '.$partida.' del Registrode Personas Jurídicas de '.$registro2.' ,  con domicilio'));

    $pdf->SetY(55);
    $pdf->SetX(5);
    $pdf->Cell(10,10,iconv('UTF-8', 'ISO-8859-2', 'en '.$domicilio2.' , identificado con D.N.I. N° '.$dni2.', con poderes inscritos en el asiento'));

    $pdf->SetY(60);
    $pdf->SetX(5);
    $pdf->Cell(10,10,iconv('UTF-8', 'ISO-8859-2', ''.$asiento2.' de la referida partida electrónica, a quien en lo sucesivo se denominará LA LOCADORA;'));

    $pdf->SetY(65);
    $pdf->SetX(5);
    $pdf->Cell(10,10,iconv('UTF-8', 'ISO-8859-2', 'en los términos contenidos en las cláusulas siguientes: .'));
    
    
    $pdf->output();
	ob_end_flush();
}else if ($tipo == "descargar"){
    ob_start();
    require("fpdf181/fpdf.php");
    
    class PDF extends FPDF
    {
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('assets/images/Logo_blanco.png',10,5,33);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(30,10,'Contrato');
        // Salto de línea
        $this->Ln(20);
    }
    
    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
    }
    
    // Creación del objeto de la clase heredada
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();

    
    $pdf->SetFont("Arial","",12);
    $pdf->SetY(20);
    $pdf->SetX(5);
    $pdf->Cell(10,10,iconv('UTF-8', 'ISO-8859-2', 'Conste por el presente documento el contrato de FAMILIA TOUR, que celebran de una parte AAA,'));
    
    $pdf->SetY(25);
    $pdf->SetX(5);
    $pdf->Cell(10,10,iconv('UTF-8', 'ISO-8859-2', 'identificada con R.U.C. N '.$ruc.' inscrita en la partida electrónica N° '.$electronica.' del Registro '));
    
    $pdf->SetY(30);
    $pdf->SetX(5);
    $pdf->Cell(10,10,iconv('UTF-8', 'ISO-8859-2', 'de Personas Jurídicas de '.$registro.', con domicilio en '.$domicilio.' , debidamente representada '));

    $pdf->SetY(35);
    $pdf->SetX(5);
    $pdf->Cell(10,10,iconv('UTF-8', 'ISO-8859-2', 'por su gerente general don '.$gerente.', identificado con el D.N.I. N° '.$dni.', con poderes inscritos'));

    $pdf->SetY(40);
    $pdf->SetX(5);
    $pdf->Cell(10,10,iconv('UTF-8', 'ISO-8859-2', 'en el asiento '.$asiento.' de la referida partida electrónica, a quien en lo sucesivo se denominará'));

    $pdf->SetY(45);
    $pdf->SetX(5);
    $pdf->Cell(10,10,iconv('UTF-8', 'ISO-8859-2', 'EL COMITENTE; y, de otra parte BBB, identificada con R.U.C. N° '.$ruc2.', inscrita en la partida'));

    $pdf->SetY(50);
    $pdf->SetX(5);
    $pdf->Cell(10,10,iconv('UTF-8', 'ISO-8859-2', 'electrónica N° '.$partida.' del Registrode Personas Jurídicas de '.$registro2.' ,  con domicilio'));

    $pdf->SetY(55);
    $pdf->SetX(5);
    $pdf->Cell(10,10,iconv('UTF-8', 'ISO-8859-2', 'en '.$domicilio2.' , identificado con D.N.I. N° '.$dni2.', con poderes inscritos en el asiento'));

    $pdf->SetY(60);
    $pdf->SetX(5);
    $pdf->Cell(10,10,iconv('UTF-8', 'ISO-8859-2', ''.$asiento2.' de la referida partida electrónica, a quien en lo sucesivo se denominará LA LOCADORA;'));

    $pdf->SetY(65);
    $pdf->SetX(5);
    $pdf->Cell(10,10,iconv('UTF-8', 'ISO-8859-2', 'en los términos contenidos en las cláusulas siguientes: .'));
    
    
    $pdf->Output('reporte.pdf','D');
	ob_end_flush();
}

?>