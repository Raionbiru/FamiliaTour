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
    require('fpdf181/fpdf.php');
    $conexion=conectar();
    
    class PDF extends FPDF{
        var $widths;
        var $aligns;
    
        function SetWidths($w){
            $this->widths=$w;
        }
    
        function SetAligns($a){
        $this->aligns=$a;
        }
    
        function Row($data){
        $nb=0;
            for($i=0;$i<count($data);$i++)
                $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
        $h=5*$nb;
        $this->CheckPageBreak($h);

            for($i=0;$i<count($data);$i++){
                
                $w=$this->widths[$i];
                $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';

                $x=$this->GetX();
                $y=$this->GetY();
                
                $this->Rect($x,$y,$w,$h);
        
                $this->MultiCell($w,5,$data[$i],0,$a,'true');

                $this->SetXY($x+$w,$y);
            }

        $this->Ln($h);
        }
    
        function CheckPageBreak($h){
            if($this->GetY()+$h>$this->PageBreakTrigger)
                $this->AddPage($this->CurOrientation);
        }
    
        function NbLines($w,$txt){
            $cw=&$this->CurrentFont['cw'];

            if($w==0)
                $w=$this->w-$this->rMargin-$this->x;

            $wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
            $s=str_replace("\r",'',$txt);
            $nb=strlen($s);

            if($nb>0 and $s[$nb-1]=="\n")
                $nb--;
            
            $sep=-1;
            $i=0;
            $j=0;
            $l=0;
            $nl=1;

            while($i<$nb){
                $c=$s[$i];
                
                if($c=="\n"){
                    $i++;
                    $sep=-1;
                    $j=$i;
                    $l=0;
                    $nl++;
                    continue;
                }
                
                if($c==' ')
                    $sep=$i;
                $l+=$cw[$c];
                
                if($l>$wmax){
                    
                    if($sep==-1){
                        if($i==$j)
                            $i++;
                    }
                    
                    else
                        $i=$sep+1;
                    
                    $sep=-1;
                    $j=$i;
                    $l=0;
                    $nl++;
                }
                
                else
                    $i++;
            }
            return $nl;
        }
    
        function Header(){

            $this->Image('assets/images/transparent-logo2019.png' , 20 ,8, 43 , 18,'PNG');
            //$this->Image('assets/images/transparent-logo2019.png' , 45 ,13, 117 , 20,'PNG');
            //$this->Image('assets/images/transparent-logo2019.png' , 20 ,33, 22 , 21,'PNG');
            //$this->Image('assets/images/transparent-logo2019.png' , 163 ,10, 35 , 20,'PNG');
            
            $this->SetFont('Arial','',11);
            $this->Text(47,40,utf8_decode('"2019,  AÑO DE LA LUCHA CONTRA LA CORRUPCIÓN E IMPUNIDAD"'),0,'C', 0);
            $this->SetFont('Arial','',10);
            $this->Text(120,73,utf8_decode('Asunto: Contrato de Tour'),0,'C', 0);
            
            $this->Ln(27);
        }
    
    }
        
        
        $pdf=new PDF('P','mm','A4');
        //$pdf->Open();
        $pdf->AddPage();
        $pdf->SetMargins(20,20,20);
        $pdf->Ln(55);
    
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(0,6,'A QUIEN CORRESPONDA:',0,1);
        $pdf->Ln(20);
        
        $pdf->SetFont('Arial','',11);
        //$pdf->MultiCell(177,6, utf8_decode('El que suscribe, Encargado(a) del Departamento de Titulación del CECyTE. Hace constar que el (a) C. '.utf8_decode($fila['nombre']).', con Clave ').utf8_decode($fila['clave_emp']). utf8_decode('; concluyó sus actividades en la empresa ').utf8_decode($fila['empresa'].', de la ciudad de  '.$fila['ciudad']). utf8_decode('; con un salario base de ').utf8_decode($fila['salario_base']) ,0,'J');
        $pdf->MultiCell(177,6, utf8_decode('El que suscribe, Encargado(a) de la Agencia '.utf8_decode('_____________').'. Hace constar que el Tour '.utf8_decode('_____________').', con Clave ').utf8_decode('_____________'). utf8_decode('; concluyó sus actividades en la empresa ').utf8_decode('_____________'.', de la ciudad de  '.'_____________'). utf8_decode('; con un costo de ').utf8_decode('_____________.') ,0,'J');
        
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $pdf->Ln(8);
        
        $pdf->MultiCell(177,6,utf8_decode('A petición del interesado, se expide el presente documento en la ciudad de Arequipa, Arequipa. A los '." ".date('d')." dias del mes de ".$meses[date('n')-1]. " de ".date('Y')."." ),0,'J');
        $pdf->Ln(50);
        
        $pdf->SetFont('Arial','',11);
        $pdf->SetFillColor(255); 
        
        $pdf->SetXY(20, 205);
        $pdf->Cell(70, 15, 'Empresa:', 0, 0, 'C', 1);
        
        $pdf->SetXY(20, 230);
        $pdf->Cell(70, 5, '______________________', 0, 0, 'C', 1);     
        
        $pdf->SetXY(145, 205);
        $pdf->Cell(10, 15, 'Cliente.', 0, 0, 'C', 1);
        
        $pdf->SetXY(145, 230);
        $pdf->Cell(10, 5, '_______________________________________', 0, 0, 'C', 1);
        
        $pdf->SetXY(20, 235);
        $pdf->Cell(70, 5, 'Nombre del Encargado', 0, 0, 'C', 1);     
        
        $pdf->SetXY(110, 235);
        $pdf->Cell(80, 5, 'Nombre de Agencia', 0, 0, 'C', 1);
        
        $pdf->SetXY(20, 240);
        $pdf->Cell(70, 5, 'Encargado del Departamento', 0, 0, 'C', 1);  
        
        $pdf->SetXY(110, 240);
        $pdf->Cell(80, 5, 'Encargado de Agencia', 0, 0, 'C', 1);             
        $y      =   130;
        
        $pdf->Ln(40);
        //$pdf->Image('imagenes/banerinferior_cecyte.jpg' , 2 ,273, 206 , 23,'JPG');
    
    $pdf->Output();

	ob_end_flush();
}else if ($tipo == "descargar"){
    ob_start();
    require('fpdf181/fpdf.php');
    $conexion=conectar();
    
    class PDF extends FPDF{
        var $widths;
        var $aligns;
    
        function SetWidths($w){
            $this->widths=$w;
        }
    
        function SetAligns($a){
        $this->aligns=$a;
        }
    
        function Row($data){
        $nb=0;
            for($i=0;$i<count($data);$i++)
                $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
        $h=5*$nb;
        $this->CheckPageBreak($h);

            for($i=0;$i<count($data);$i++){
                
                $w=$this->widths[$i];
                $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';

                $x=$this->GetX();
                $y=$this->GetY();
                
                $this->Rect($x,$y,$w,$h);
        
                $this->MultiCell($w,5,$data[$i],0,$a,'true');

                $this->SetXY($x+$w,$y);
            }

        $this->Ln($h);
        }
    
        function CheckPageBreak($h){
            if($this->GetY()+$h>$this->PageBreakTrigger)
                $this->AddPage($this->CurOrientation);
        }
    
        function NbLines($w,$txt){
            $cw=&$this->CurrentFont['cw'];

            if($w==0)
                $w=$this->w-$this->rMargin-$this->x;

            $wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
            $s=str_replace("\r",'',$txt);
            $nb=strlen($s);

            if($nb>0 and $s[$nb-1]=="\n")
                $nb--;
            
            $sep=-1;
            $i=0;
            $j=0;
            $l=0;
            $nl=1;

            while($i<$nb){
                $c=$s[$i];
                
                if($c=="\n"){
                    $i++;
                    $sep=-1;
                    $j=$i;
                    $l=0;
                    $nl++;
                    continue;
                }
                
                if($c==' ')
                    $sep=$i;
                $l+=$cw[$c];
                
                if($l>$wmax){
                    
                    if($sep==-1){
                        if($i==$j)
                            $i++;
                    }
                    
                    else
                        $i=$sep+1;
                    
                    $sep=-1;
                    $j=$i;
                    $l=0;
                    $nl++;
                }
                
                else
                    $i++;
            }
            return $nl;
        }
    
        function Header(){

            $this->Image('assets/images/transparent-logo2019.png' , 20 ,8, 43 , 18,'PNG');
            //$this->Image('assets/images/transparent-logo2019.png' , 45 ,13, 117 , 20,'PNG');
            //$this->Image('assets/images/transparent-logo2019.png' , 20 ,33, 22 , 21,'PNG');
            //$this->Image('assets/images/transparent-logo2019.png' , 163 ,10, 35 , 20,'PNG');
            
            $this->SetFont('Arial','',11);
            $this->Text(47,40,utf8_decode('"2019,  AÑO DE LA LUCHA CONTRA LA CORRUPCIÓN E IMPUNIDAD"'),0,'C', 0);
            $this->SetFont('Arial','',10);
            $this->Text(120,73,utf8_decode('Asunto: Contrato de Tour'),0,'C', 0);
            
            $this->Ln(27);
        }
    
    }
        
        
        $pdf=new PDF('P','mm','A4');
        //$pdf->Open();
        $pdf->AddPage();
        $pdf->SetMargins(20,20,20);
        $pdf->Ln(55);
    
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(0,6,'A QUIEN CORRESPONDA:',0,1);
        $pdf->Ln(20);
        
        $pdf->SetFont('Arial','',11);
        //$pdf->MultiCell(177,6, utf8_decode('El que suscribe, Encargado(a) del Departamento de Titulación del CECyTE. Hace constar que el (a) C. '.utf8_decode($fila['nombre']).', con Clave ').utf8_decode($fila['clave_emp']). utf8_decode('; concluyó sus actividades en la empresa ').utf8_decode($fila['empresa'].', de la ciudad de  '.$fila['ciudad']). utf8_decode('; con un salario base de ').utf8_decode($fila['salario_base']) ,0,'J');
        $pdf->MultiCell(177,6, utf8_decode('El que suscribe, Encargado(a) de la Agencia '.utf8_decode('_____________').'. Hace constar que el Tour '.utf8_decode('_____________').', con Clave ').utf8_decode('_____________'). utf8_decode('; concluyó sus actividades en la empresa ').utf8_decode('_____________'.', de la ciudad de  '.'_____________'). utf8_decode('; con un costo de ').utf8_decode('_____________.') ,0,'J');
        
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $pdf->Ln(8);
        
        $pdf->MultiCell(177,6,utf8_decode('A petición del interesado, se expide el presente documento en la ciudad de Arequipa, Arequipa. A los '." ".date('d')." dias del mes de ".$meses[date('n')-1]. " de ".date('Y')."." ),0,'J');
        $pdf->Ln(50);
        
        $pdf->SetFont('Arial','',11);
        $pdf->SetFillColor(255); 
        
        $pdf->SetXY(20, 205);
        $pdf->Cell(70, 15, 'Empresa:', 0, 0, 'C', 1);
        
        $pdf->SetXY(20, 230);
        $pdf->Cell(70, 5, '______________________', 0, 0, 'C', 1);     
        
        $pdf->SetXY(145, 205);
        $pdf->Cell(10, 15, 'Cliente.', 0, 0, 'C', 1);
        
        $pdf->SetXY(145, 230);
        $pdf->Cell(10, 5, '_______________________________________', 0, 0, 'C', 1);
        
        $pdf->SetXY(20, 235);
        $pdf->Cell(70, 5, 'Nombre del Encargado', 0, 0, 'C', 1);     
        
        $pdf->SetXY(110, 235);
        $pdf->Cell(80, 5, 'Nombre de Agencia', 0, 0, 'C', 1);
        
        $pdf->SetXY(20, 240);
        $pdf->Cell(70, 5, 'Encargado del Departamento', 0, 0, 'C', 1);  
        
        $pdf->SetXY(110, 240);
        $pdf->Cell(80, 5, 'Encargado de Agencia', 0, 0, 'C', 1);             
        $y      =   130;
        
        $pdf->Ln(40);
        //$pdf->Image('imagenes/banerinferior_cecyte.jpg' , 2 ,273, 206 , 23,'JPG');
    
    $pdf->Output('Contrato.pdf','D');
	ob_end_flush();
}

?>