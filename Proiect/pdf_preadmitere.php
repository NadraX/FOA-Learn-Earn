
<?php
header('Content-type: text/plain; charset=utf-8');
include 'adminMainPage.php';
                    
 if(isset($_POST['Submit'])) {
require('FPDF/fpdf.php');
class PDF extends FPDF
{

function Header()
{
    $id_formular=$_POST['id_formular'];
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " BEGIN  SELECT nr_chitanta, suma INTO :nr_chitanta, :suma FROM Formular_preadmitere WHERE id='$id_formular'; END; ");
    oci_bind_by_name($s, ":nr_chitanta", $nr_chitanta, 100);
    oci_bind_by_name($s, ":suma", $suma, 100);
    oci_execute($s);
    oci_close($c);
    
    $this->Ln(-4);
    $this->Image('imagini/fii.png',12,12,20);
    $this->SetFont('Arial','B',9);
    $this->Cell(50);
    $this->Cell(30,20,'UNIVERSITATEA "ALEXANDRU IOAN CUZA" DIN IASI',0,0,'C');
    $this->Ln(5);
    $this->Cell(34.5);
    $this->Cell(30,20,'FACULTATEA DE INFORMATICA',0,0,'C');
    $this->Ln(18);
	$this->Cell(65);
	$this->SetFont('Arial','B',12);
	$this->Cell(50, 20, 'FISA DE INSCRIERE - PRE-ADMITERE SESIUNEA', 0, 0, 'C');
	$this->Cell(32.5);
	$this->SetFont('Arial','BU',12);
	$this->Cell(10, 20, 'IULIE 2017', 0, 0, 'C');
	
	$this->Ln(12);
	$this->Cell(71);
	$this->SetFont('Arial','B',10);
	$this->Cell(10, 20, 'Dosar nr. ', 0, 0, 'C');
	
	$this->Cell(7.5);
	$this->SetFont('Arial','B',10);
	$this->Cell(5, 20, '..............', 0, 0, 'C');
	
	$this->Cell(7.5);
	$this->SetFont('Arial','B',10);
	$this->Cell(5, 20, 'Data', 0, 0, 'C');
	
	$this->Cell(11);
	$this->SetFont('Arial','B',10);
	$this->Cell(5, 20, '.......................', 0, 0, 'C');
	
	$this->Ln(16);
	$this->Cell(40);
	$x = $this->GetX();
	$y = $this->GetY();
	
	$this->SetFont('Arial','B',10);
	$this->MultiCell(40, 10, 'Taxa de inscriere', 1, 1);
	$this->SetXY($x + 40, $y);
	$this->SetFont('Arial','',10);
	$this->MultiCell(40, 10,'Chitanta nr. '.$nr_chitanta,1,  1);
	$this->SetXY($x + 80, $y);	
	$this->MultiCell(40, 10,'Suma: '.$suma,1,  1);

}

function Footer()
{
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}
                
      $id_formular=$_POST['id_formular'];
    
      $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
      $s = oci_parse($c, " BEGIN  SELECT dpc.nume_familie_nastere, dpc.initialele_tatalui_mamei, dpc.nume_familie_actual, dpc.prenume_candidat, dpc.prenume_tata,
                                  dpc.prenume_mama, dpc.cnp, dpc.sex, dpc.data_nasterii, dpc.tara_nasterii, dpc.judetul_nasterii, dpc.localitatea_nasterii,
                                  dpc.cetatenia, dpc.nationalitate, dpc.etnie, dpc.limba_materna, dpc.serie_ci, dpc.numar_ci, dpc.eliberat_de, dpc.data_eliberarii,
                                  dpc.data_expirarii, dpc.institutie_liceu, dpc.tara_liceu, dpc.localitate_liceu, dpc.judet_liceu, f.optiune_test_scris INTO :nume_familie_nastere,
                                  :initialele_tatalui_mamei, :nume_familie_actual, :prenume_candidat, :prenume_tata, :prenume_mama, :cnp, :sex, :data_nasterii,
                                  :tara_nasterii, :judetul_nasterii, :localitatea_nasterii, :cetatenia, :nationalitate, :etnie, :limba_materna, :serie_ci, :numar_ci,
                                  :eliberat_de, :data_eliberarii, :data_expirarii, :institutie_liceu, :tara_liceu, :localitate_liceu, :judet_liceu, :optiune_test_scris FROM Date_personale_preadmitere dpc
                                                 JOIN Formular_preadmitere f ON f.id=dpc.Formular_id
                                                 WHERE f.id='$id_formular'; end; ");
     
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
      oci_bind_by_name($s, ":serie_ci", $serie_ci, 100);
      oci_bind_by_name($s, ":numar_ci", $numar_ci, 100);
      oci_bind_by_name($s, ":eliberat_de", $eliberat_de, 100);
      oci_bind_by_name($s, ":data_eliberarii", $data_eliberarii, 100);
      oci_bind_by_name($s, ":data_expirarii", $data_expirarii, 100);
      oci_bind_by_name($s, ":institutie_liceu", $institutie_liceu, 100);
      oci_bind_by_name($s, ":tara_liceu", $tara_liceu, 100);
      oci_bind_by_name($s, ":localitate_liceu", $localitate_liceu, 100);
      oci_bind_by_name($s, ":judet_liceu", $judet_liceu, 100);
      oci_bind_by_name($s, ":optiune_test_scris", $optiune_test_scris, 100);
     
      oci_execute($s);
      oci_close($c);
        
	  $pdf = new PDF('P', 'mm', 'A4' );
	  $pdf->AliasNbPages();
	  $pdf->AddPage();
	  $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 72, 210-10, 72);

	  $pdf->Ln(8);
	  $pdf->SetFont('Times','B',11);
	  $pdf->Cell(10);

	  $pdf->Cell(0,0,'I. INFORMATII GENERALE '.$id_formular,0,1);
	  $pdf->SetLineWidth(0);
	  $pdf->Line(20, 77, 210-20, 77);

	  $pdf->Ln(2);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','BI',10);

	  $pdf->Cell(10);
	  $pdf->MultiCell(90, 10, '1. Numele de familie la nastere (din certificatul de nastere)', 0, 1);
	  $pdf->SetXY($x + 145, $y);
	  $pdf->MultiCell(45, 10,'2. Initiala (ele) tatalui',0,  1);

	  $pdf->Ln(-3);
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(10);
	  $pdf->MultiCell(120, 6, ''.$nume_familie_nastere, 1, 1);
	  $pdf->SetXY($x + 150, $y);
	  $pdf->MultiCell(10, 6,''.$initialele_tatalui_mamei,1,  1);

	  $pdf->Ln(1);
	  $pdf->SetFont('Times','BI',10);
	  $pdf->Cell(0,10,'3. Numele de familie actual (dupa casatorie, infiere, modificare la cerere conform actului doveditor, daca este cazul)',0,0,'C');
	  
	  $pdf->Ln(7);
	  $pdf->Cell(10);
	  $pdf->SetFont('Times','B',9);
	  $pdf->Cell(170,6,''.$nume_familie_actual,1,0,'L');
	  
	  $pdf->Ln(5);
	  $pdf->Cell(9);
	  $pdf->SetFont('Times','BI',10);
	  $pdf->Cell(0,10,'4. Prenumele candidatului',0,0,'L');
	  
	  $pdf->Ln(7);
	  $pdf->Cell(10);
	  $pdf->SetFont('Times','B',9);
	  $pdf->Cell(170,6,''.$prenume_candidat,1,0,'L');
	  
	  $pdf->Ln(9);
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','BI',10);
	  $pdf->Cell(10);
	  
	  $pdf->MultiCell(60, 6, '5. Prenumele parintilor (din certificatul de nastere al candidatului)', 1, 1);
	  $pdf->SetXY($x + 70, $y);
	  $pdf->MultiCell(12, 12,'Mama',1,  1);
	  $pdf->SetXY($x + 82, $y);
	  $pdf->SetFont('Times','B',9);
	  $pdf->MultiCell(43, 12,''.$prenume_mama,1,  1);
	  $pdf->SetXY($x + 125, $y);
	  $pdf->SetFont('Times','BI',10);
	  $pdf->MultiCell(12, 12,'Tata',1,  1);
	  $pdf->SetXY($x + 137, $y);
	  $pdf->SetFont('Times','B',9);
	  $pdf->MultiCell(43, 12,''.$prenume_tata,1,  1);

	  $pdf->Ln(4);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','BI',10);

	  $pdf->Cell(10);
	  $pdf->MultiCell(13, 6, '6. CNP', 1, 1);
	  $pdf->SetXY($x + 23, $y);
	  $pdf->SetFont('Times','B',9);
	  $pdf->MultiCell(90, 6,''.$cnp,1,  1);
	  $pdf->SetXY($x + 150, $y);
	  $pdf->SetFont('Times','BI',10);
	  $pdf->MultiCell(15, 6, '7. Sexul', 1, 1);
	  $pdf->SetXY($x + 165, $y);
	  $pdf->SetFont('Times','B',9);
	  $pdf->MultiCell(15, 6,''.$sex,1,  1);

	  $pdf->SetFont('Times','BI',10);
	  $pdf->Cell(0,10,'8. Data nasterii (zz/ll/aaa)',0,0,'C');
	  
	  $pdf->Ln(7);

	  $pdf->SetFont('Times','B',9);
	  $pdf->Cell(75);
	  $pdf->Cell(40,6,''.$data_nasterii,1,0,'C');
	  
	  $pdf->Ln(6);
	  $pdf->SetFont('Times','BI',10);
	  $pdf->Cell(0,10,'9. Locul nasterii',0,0,'C');
	  
	  $pdf->Ln(7);
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','BI',10);

	  $pdf->Cell(12);
	  $pdf->MultiCell(55, 6, 'Tara', 1, 1);
	  $pdf->SetXY($x + 67, $y);
	  $pdf->MultiCell(55, 6,'Judetul',1,  1);
	  $pdf->SetXY($x + 122, $y);
	  $pdf->MultiCell(55, 6,'Localitatea',1,  1);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(12);
	  $pdf->MultiCell(55, 6, ''.$tara_nasterii, 1, 1);
	  $pdf->SetXY($x + 67, $y);
	  $pdf->MultiCell(55, 6,''.$judetul_nasterii,1,  1);
	  $pdf->SetXY($x + 122, $y);
	  $pdf->MultiCell(55, 6,''.$localitatea_nasterii,1,  1);

	  $pdf->Ln(5);
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','BI',10);

	  $pdf->Cell(15);
	  $pdf->MultiCell(40, 6, 'Cetatenia (tara)', 1, 1);
	  $pdf->SetXY($x + 55, $y);
	  $pdf->MultiCell(40, 6,'Nationalitatea',1,  1);
	  $pdf->SetXY($x + 95, $y);
	  $pdf->MultiCell(40, 6,'Etnia',1,  1);
	  $pdf->SetXY($x + 135, $y);
	  $pdf->MultiCell(40, 6,'Limba materna',1,  1);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(15);
	  $pdf->MultiCell(40, 6, ''.$cetatenia, 1, 1);
	  $pdf->SetXY($x + 55, $y);
	  $pdf->MultiCell(40, 6,''.$nationalitate,1,  1);
	  $pdf->SetXY($x + 95, $y);
	  $pdf->MultiCell(40, 6,''.$etnie,1,  1);
	  $pdf->SetXY($x + 135, $y);
	  $pdf->MultiCell(40, 6,''.$limba_materna,1,  1);
	  
	  $pdf->Ln(2);
	  $pdf->SetFont('Times','BI',10);
	  $pdf->Cell(0,10,'11. Actul de identitate/Documentul de calatorie',0,0,'C'); 
	  
	  $pdf->Ln(7);
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();
	  $pdf->SetFont('Times','BI',10);

	  $pdf->Cell(12);
	  $pdf->MultiCell(55, 6, 'Tip', 1, 1);
	  $pdf->SetXY($x + 67, $y);
	  $pdf->MultiCell(55, 6,'Seria',1,  1);
	  $pdf->SetXY($x + 122, $y);
	  $pdf->MultiCell(55, 6,'Numarul',1,  1);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(12);
	  $pdf->MultiCell(55, 6, 'CI', 1, 1);
	  $pdf->SetXY($x + 67, $y);
	  $pdf->MultiCell(55, 6,''.$serie_ci,1,  1);
	  $pdf->SetXY($x + 122, $y);
	  $pdf->MultiCell(55, 6,''.$numar_ci,1,  1);

	  $pdf->Ln(5);
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();
	  $pdf->SetFont('Times','BI',10);

	  $pdf->Cell(23);
	  $pdf->MultiCell(70, 6, 'Eliberat de', 1, 1);
	  $pdf->SetXY($x + 93, $y);
	  $pdf->MultiCell(40, 6,'Data eliberarii',1,  1);
	  $pdf->SetXY($x + 133, $y);
	  $pdf->MultiCell(40, 6,'Data expirarii',1,  1);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(23);
	  $pdf->MultiCell(70, 6, ''.$eliberat_de, 1, 1);
	  $pdf->SetXY($x + 93, $y);
	  $pdf->MultiCell(40, 6,''.$data_eliberarii,1,  1);
	  $pdf->SetXY($x + 133, $y);
	  $pdf->MultiCell(40, 6,''.$data_expirarii,1,  1);

      $pdf->Ln(2);
	 $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(0,10,'Studiile pre-universitare unde sunteti inmatriculat',0,0,'C');

     $pdf->Ln(8.5); 
     $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(12);
	 $pdf->MultiCell(78, 6, 'Institutia', 1, 1);
	 $pdf->SetXY($x + 90, $y);
	 $pdf->MultiCell(25, 6,'Tara',1,  1); 
     $pdf->SetXY($x + 115, $y);
	 $pdf->MultiCell(35, 6,'Localitate',1,  1); 
     $pdf->SetXY($x + 150, $y);
	 $pdf->MultiCell(25, 6,'Judetul',1,  1);
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','B',9);
	 $pdf->Cell(12);
	 $pdf->MultiCell(78, 6, ''.$institutie_liceu, 1, 1);
	 $pdf->SetXY($x + 90, $y);
	 $pdf->MultiCell(25, 6,''.$tara_liceu,1,  1); 
     $pdf->SetXY($x + 115, $y);
	 $pdf->MultiCell(35, 6,''.$localitate_liceu,1,  1); 
     $pdf->SetXY($x + 150, $y);
	 $pdf->MultiCell(25, 6,''.$judet_liceu,1,  1);
      
     // Optiunea pt testul scris 
     
     $pdf->Ln(3);
	 $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(0,10,'Optiunea pentru testul scris: (Matematica, Informatica (Pascal), Informatica (C)) ',0,0,'C'); 
     
     $pdf->Ln(9);
     $pdf->Cell(70);
	 $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(50,6,''.$optiune_test_scris,1,0,'C'); 
    
      
	  $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 280, 210-10, 280);
	  $pdf->SetLineWidth(0);
	  
	  $pdf->Output();
     
            }
         
 

?>