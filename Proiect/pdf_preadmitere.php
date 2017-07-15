
<?php
header('Content-type: text/plain; charset=utf-8');
                    
 if(isset($_POST['Submit'])) {
require('FPDF/tfpdf.php');
class PDF extends tFPDF
{

function Footer()
{
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
	
}
                
      $id_formular=$_POST['id_formular'];
      $username = 'ADMITERE1';
      $password = 'ADMITERE1';
      $connection_string = 'localhost/xe';

      $c = oci_connect($username, $password, $connection_string, 'AL32UTF8');
      $s = oci_parse($c, " BEGIN  SELECT dpc.nume_familie_nastere, dpc.initialele_tatalui_mamei, dpc.nume_familie_actual, dpc.prenume_candidat, dpc.prenume_tata,
      dpc.prenume_mama, dpc.cnp, dpc.sex, TO_CHAR(dpc.data_nasterii, 'dd month yyyy', 'NLS_DATE_LANGUAGE=romanian'), dpc.tara_nasterii, dpc.judetul_nasterii, dpc.localitatea_nasterii,
      dpc.cetatenia, dpc.nationalitate, dpc.etnie, dpc.limba_materna, dpc.tip_act_ident,dpc.serie_act, dpc.numar_act, dpc.eliberat_de, TO_CHAR(dpc.data_eliberarii, 'dd month yyyy', 'NLS_DATE_LANGUAGE=romanian'),
      TO_CHAR(dpc.data_expirarii, 'dd month yyyy', 'NLS_DATE_LANGUAGE=romanian'), dpc.institutie_liceu, dpc.tara_liceu, dpc.localitate_liceu, dpc.judet_liceu, f.optiune_test_scris, f.nr_chitanta, f.suma INTO :nume_familie_nastere, :initialele_tatalui_mamei, :nume_familie_actual, :prenume_candidat, :prenume_tata, :prenume_mama, :cnp, :sex, :data_nasterii, :tara_nasterii, :judetul_nasterii, :localitatea_nasterii, :cetatenia, :nationalitate, :etnie, :limba_materna, :tip_act_ident, :serie_act, :numar_act,
      :eliberat_de, :data_eliberarii, :data_expirarii, :institutie_liceu, :tara_liceu, :localitate_liceu, :judet_liceu, :optiune_test_scris, :nr_chitanta, :suma FROM Date_personale_preadmitere dpc
      JOIN Formular_preadmitere f ON f.id=dpc.Formular_id WHERE f.id='$id_formular'; end; ");
     
      oci_bind_by_name($s, ":nume_familie_nastere", $nume_familie_nastere, 100);
      oci_bind_by_name($s, ":initialele_tatalui_mamei", $initialele_tatalui_mamei, 100);
      oci_bind_by_name($s, ":nume_familie_actual", $nume_familie_actual, 100);
      oci_bind_by_name($s, ":prenume_candidat", $prenume_candidat, 100);
      oci_bind_by_name($s, ":prenume_tata", $prenume_tata, 100);
      oci_bind_by_name($s, ":prenume_mama", $prenume_mama, 100);
      oci_bind_by_name($s, ":cnp", $cnp, 100);
      oci_bind_by_name($s, ":sex", $sex, 100);
      oci_bind_by_name($s, ":data_nasterii", $data_nasterii, 100);
      oci_bind_by_name($s, ":tara_nasterii", $tara_nasterii, 100);
      oci_bind_by_name($s, ":judetul_nasterii", $judetul_nasterii, 100);
      oci_bind_by_name($s, ":localitatea_nasterii", $localitatea_nasterii, 100);
      oci_bind_by_name($s, ":cetatenia", $cetatenia, 100);
      oci_bind_by_name($s, ":nationalitate", $nationalitate, 100);
      oci_bind_by_name($s, ":etnie", $etnie, 100);
      oci_bind_by_name($s, ":limba_materna", $limba_materna, 100);
	  oci_bind_by_name($s, ":tip_act_ident", $tip_act_ident, 100);
      oci_bind_by_name($s, ":serie_act", $serie_act, 100);
      oci_bind_by_name($s, ":numar_act", $numar_act, 100);
      oci_bind_by_name($s, ":eliberat_de", $eliberat_de, 100);
      oci_bind_by_name($s, ":data_eliberarii", $data_eliberarii, 100);
      oci_bind_by_name($s, ":data_expirarii", $data_expirarii, 100);
      oci_bind_by_name($s, ":institutie_liceu", $institutie_liceu, 100);
      oci_bind_by_name($s, ":tara_liceu", $tara_liceu, 100);
      oci_bind_by_name($s, ":localitate_liceu", $localitate_liceu, 100);
      oci_bind_by_name($s, ":judet_liceu", $judet_liceu, 100);
      oci_bind_by_name($s, ":optiune_test_scris", $optiune_test_scris, 100);
      oci_bind_by_name($s, ":nr_chitanta", $nr_chitanta, 100);
      oci_bind_by_name($s, ":suma", $suma, 100);
	 
      oci_execute($s);
      oci_close($c);
        
	  $pdf = new PDF('P', 'mm', 'A4' );
	  $pdf->AliasNbPages();
	  $pdf->AddPage();
     
    $pdf->AddFont('DejaVu','','DejaVuSerif.ttf',true);
    $pdf->AddFont('DejaVu','B','DejaVuSerif-Bold.ttf',true);
    $pdf->AddFont('DejaVu','I','DejaVuSerif-Italic.ttf',true); 
     
    $pdf->Ln(-4);
    $pdf->Image('imagini/fii.png',12,12,20);
    $pdf->SetFont('DejaVu','B',9);
    $pdf->Cell(56);
    $pdf->Cell(30,20,'UNIVERSITATEA "ALEXANDRU IOAN CUZA" DIN IAȘI',0,0,'C');
    $pdf->Ln(5);
    $pdf->Cell(37);
    $pdf->Cell(30,20,'FACULTATEA DE INFORMATICĂ',0,0,'C');
    $pdf->Ln(14);
	$pdf->Cell(58);
	$pdf->SetFont('DejaVu','B',12);
	$pdf->Cell(50, 20, 'FIȘĂ DE ÎNSCRIERE - PRE-ADMITERE SESIUNEA', 0, 0, 'C');
	$pdf->Cell(44);
	$pdf->SetFont('DejaVu','B',12);
	$pdf->Cell(10, 20, 'IULIE 2017', 0, 0, 'C');
	
	$pdf->Ln(6);
	$pdf->Cell(71);
	$pdf->SetFont('DejaVu','B',10);
	$pdf->Cell(10, 20, 'Dosar nr. ', 0, 0, 'C');
	
	$pdf->Cell(9.5);
	$pdf->Cell(5, 20, '..............', 0, 0, 'C');
	
	$pdf->Cell(9.5);
	$pdf->Cell(5, 20, 'Data', 0, 0, 'C');
	
	$pdf->Cell(13.5);
	$pdf->Cell(5, 20, '.......................', 0, 0, 'C');
	
	$pdf->Ln(14);
	$pdf->Cell(25);
	$x = $pdf->GetX();
	$y = $pdf->GetY();
	
	$pdf->SetFont('DejaVu','B',9);
	$pdf->MultiCell(40, 10, 'Taxa de înscriere', 1, 1);
	$pdf->SetXY($x + 40, $y);
	$pdf->SetFont('DejaVu','',9);
	$pdf->MultiCell(60, 10,'Chitanța nr. '.$nr_chitanta,1,  1);
	$pdf->SetXY($x + 100, $y);	
	$pdf->MultiCell(40, 10,'Suma: '.$suma,1,  1);
	 
	  $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 65, 210-10, 65);

	  $pdf->Ln(13);
	  $pdf->SetFont('DejaVu','B',10);
	  $pdf->Cell(10);

	  $pdf->Cell(0,0,'I. INFORMAȚII GENERALE',0,1);
	  $pdf->SetLineWidth(0);
	  $pdf->Line(20, 70, 210-20, 70);

	  $pdf->Ln(2);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',8);

	  $pdf->Cell(10);
	  $pdf->MultiCell(95, 10, 'Numele de familie la naștere (din certificatul de naștere)', 0, 1);
	  $pdf->SetXY($x + 144, $y);
	  $pdf->MultiCell(45, 10,'Inițiala(ele) tatălui',0,  1);

	  $pdf->Ln(-3);
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',7);

	  $pdf->Cell(10);
	  $pdf->MultiCell(130, 6, ''.strtoupper($nume_familie_nastere), 1, 1);
	  $pdf->SetXY($x + 145, $y);
	  $pdf->MultiCell(35, 6,''.strtoupper($initialele_tatalui_mamei),1,  1);

	  $pdf->Ln(1);
	  $pdf->SetFont('DejaVu','B',8);
	  $pdf->Cell(0,10,'Numele de familie actual (după căsătorie, modificare la cerere conform actului doveditor, dacă este cazul)',0,0,'C');
	  
	  $pdf->Ln(7);
	  $pdf->Cell(10);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->Cell(170,6,''.strtoupper($nume_familie_actual),1,0,'L');
	  
	  $pdf->Ln(5);
	  $pdf->Cell(9);
	  $pdf->SetFont('DejaVu','B',8);
	  $pdf->Cell(0,10,'Prenumele candidatului',0,0,'L');
	  
	  $pdf->Ln(7);
	  $pdf->Cell(10);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->Cell(170,6,''.strtoupper($prenume_candidat),1,0,'L');
	  
	  $pdf->Ln(9);
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->Cell(10);
	  
	  $pdf->MultiCell(60, 6, 'Prenumele părinților (din certificatul de naștere al candidatului)', 1, 1);
	  $pdf->SetXY($x + 70, $y);
	  $pdf->MultiCell(12, 12,'Mama',1,  1);
	  $pdf->SetXY($x + 82, $y);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->MultiCell(43, 12,''.strtoupper($prenume_mama),1,  1);
	  $pdf->SetXY($x + 125, $y);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->MultiCell(12, 12,'Tata',1,  1);
	  $pdf->SetXY($x + 137, $y);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->MultiCell(43, 12,''.strtoupper($prenume_tata),1,  1);

	  $pdf->Ln(4);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',8);

	  $pdf->Cell(10);
	  $pdf->MultiCell(13, 6, 'CNP', 1, 1);
	  $pdf->SetXY($x + 23, $y);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->MultiCell(30, 6,''.$cnp,1,  1);
	  $pdf->SetXY($x + 68, $y);
	  $pdf->SetFont('DejaVu','B',8);
	  $pdf->MultiCell(31, 6, 'Data nașterii', 1, 1);
	  $pdf->SetXY($x + 99, $y);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->MultiCell(36, 6,''.$data_nasterii,1,  1);
	  $pdf->SetXY($x + 150, $y);
	  $pdf->SetFont('DejaVu','B',8);
	  $pdf->MultiCell(15, 6, 'Sexul', 1, 1);
	  $pdf->SetXY($x + 165, $y);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->MultiCell(15, 6,''.$sex,1,  1);
	 
	 
	  $pdf->Ln(1);
	  $pdf->SetFont('DejaVu','B',8);
	  $pdf->Cell(0,10,'Locul nașterii',0,0,'C');
	  
	  $pdf->Ln(7);
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',8);

	  $pdf->Cell(10);
	  $pdf->MultiCell(56, 6, 'Țara', 1, 1);
	  $pdf->SetXY($x + 66, $y);
	  $pdf->MultiCell(57, 6,'Județul',1,  1);
	  $pdf->SetXY($x + 123, $y);
	  $pdf->MultiCell(57, 6,'Localitatea',1,  1);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',7);

	  $pdf->Cell(10);
	  $pdf->MultiCell(56, 6, ''.$tara_nasterii, 1, 1);
	  $pdf->SetXY($x + 66, $y);
	  $pdf->MultiCell(57, 6,''.$judetul_nasterii,1,  1);
	  $pdf->SetXY($x + 123, $y);
	  $pdf->MultiCell(57, 6,''.$localitatea_nasterii,1,  1);

	  $pdf->Ln(5);
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',8);

	  $pdf->Cell(10);
	  $pdf->MultiCell(42, 6, 'Cetățenia', 1, 1);
	  $pdf->SetXY($x + 52, $y);
	  $pdf->MultiCell(42, 6,'Naționalitatea',1,  1);
	  $pdf->SetXY($x + 94, $y);
	  $pdf->MultiCell(43, 6,'Etnia',1,  1);
	  $pdf->SetXY($x + 137, $y);
	  $pdf->MultiCell(43, 6,'Limba maternă',1,  1);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',7);

	  $pdf->Cell(10);
	  $pdf->MultiCell(42, 6, ''.$cetatenia, 1, 1);
	  $pdf->SetXY($x + 52, $y);
	  $pdf->MultiCell(42, 6,''.$nationalitate,1,  1);
	  $pdf->SetXY($x + 94, $y);
	  $pdf->MultiCell(43, 6,''.$etnie,1,  1);
	  $pdf->SetXY($x + 137, $y);
	  $pdf->MultiCell(43, 6,''.$limba_materna,1,  1);
	  
	  $pdf->Ln(2);
	  $pdf->SetFont('DejaVu','B',8);
	  $pdf->Cell(0,10,'Actul de identitate/Documentul de călătorie',0,0,'C'); 
	  
	  $pdf->Ln(7);
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();
	  $pdf->SetFont('DejaVu','B',8);

	  $pdf->Cell(10);
	  $pdf->MultiCell(80, 6, 'Tip', 1, 1);
	  $pdf->SetXY($x + 90, $y);
	  $pdf->MultiCell(45, 6,'Seria',1,  1);
	  $pdf->SetXY($x + 135, $y);
	  $pdf->MultiCell(45, 6,'Numărul',1,  1);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',7);

	  $pdf->Cell(10);
	  $pdf->MultiCell(80, 6, ''.$tip_act_ident, 1, 1);
	  $pdf->SetXY($x + 90, $y);
	  $pdf->MultiCell(45, 6,''.$serie_act,1,  1);
	  $pdf->SetXY($x + 135, $y);
	  $pdf->MultiCell(45, 6,''.$numar_act,1,  1);

	  $pdf->Ln(5);
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();
	  $pdf->SetFont('DejaVu','B',8);

	  $pdf->Cell(10);
	  $pdf->MultiCell(80, 6, 'Eliberat de', 1, 1);
	  $pdf->SetXY($x + 90, $y);
	  $pdf->MultiCell(45, 6,'Data eliberării',1,  1);
	  $pdf->SetXY($x + 135, $y);
	  $pdf->MultiCell(45, 6,'Data expirării',1,  1);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',7);

	  $pdf->Cell(10);
	  $pdf->MultiCell(80, 6, ''.$eliberat_de, 1, 1);
	  $pdf->SetXY($x + 90, $y);
	  $pdf->MultiCell(45, 6,''.$data_eliberarii,1,  1);
	  $pdf->SetXY($x + 135, $y);
	  $pdf->MultiCell(45, 6,''.$data_expirarii,1,  1);

      $pdf->Ln(2);
	  $pdf->SetFont('DejaVu','B',8);
	  $pdf->Cell(0,10,'Studiile pre-universitare unde sunteți înmatriculat',0,0,'C');

	  $pdf->Ln(8);
	  $pdf->SetFont('DejaVu','B',8);
	  $pdf->Cell(0,10,'Instituția',0,0,'C');

	  $pdf->Ln(7);
      $pdf->Cell(10);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->Cell(170,6,''.$institutie_liceu,1,0,'L');
	 
     $pdf->Ln(10); 
     $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
	 $pdf->MultiCell(50, 6,'Țara',1,  1); 
     $pdf->SetXY($x + 60, $y);
	 $pdf->MultiCell(70, 6,'Localitate',1,  1); 
     $pdf->SetXY($x + 130, $y);
	 $pdf->MultiCell(50, 6,'Județul',1,  1);
	 
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',7);
	 $pdf->Cell(10);
	 $pdf->MultiCell(50, 6,''.$tara_liceu,1,  1); 
     $pdf->SetXY($x + 60, $y);
	 $pdf->MultiCell(70, 6,''.$localitate_liceu,1,  1); 
     $pdf->SetXY($x + 130, $y);
	 $pdf->MultiCell(50, 6,''.$judet_liceu,1,  1);
      
     // Optiunea pt testul scris 
     
     $pdf->Ln(3);
	 $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(0,10,'Opțiunea pentru testul scris: (Matematică, Informatică (Pascal), Informatică (C)) ',0,0,'C'); 
     
     $pdf->Ln(9);
     $pdf->Cell(70);
	 $pdf->SetFont('DejaVu','B',7);
	 $pdf->Cell(50,6,''.$optiune_test_scris,1,0,'C'); 
    
      
	  $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 280, 210-10, 280);
	  $pdf->SetLineWidth(0);
	  
	  $pdf->Output();
     
            }
         
 

?>