
<?php
//header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Europe/Bucharest');
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
      $s = oci_parse($c, " BEGIN  SELECT f.nr_chitanta, f.suma, f.scutit, f.motiv_scutire, dpc.nume_familie_nastere, dpc.initialele_tatalui_mamei, dpc.nume_familie_actual, dpc.prenume_candidat, dpc.prenume_tata,
                                  dpc.prenume_mama, dpc.cnp, dpc.sex, TO_CHAR(dpc.data_nasterii, 'dd month yyyy', 'NLS_DATE_LANGUAGE=romanian'), dpc.tara_nasterii, dpc.judetul_nasterii, dpc.localitatea_nasterii,
                                  dpc.cetatenia, dpc.nationalitate, dpc.etnie, dpc.limba_materna,
                                  dpc.stare_civila, dpc.tip_act_ident,dpc.serie_act, dpc.numar_act, dpc.eliberat_de, TO_CHAR(dpc.data_eliberarii, 'dd month yyyy', 'NLS_DATE_LANGUAGE=romanian'),
                                  TO_CHAR(dpc.data_expirarii, 'dd month yyyy', 'NLS_DATE_LANGUAGE=romanian'), dpc.mediu_domiciliu, dpc.tara_domiciliu, dpc.judet_domiciliu, dpc.localitate_domiciliu,
                                  dpc.strada, dpc.numar,
                                  dpc.bloc, dpc.scara, dpc.etaj, dpc.apartament, dpc.cod_postal, dpc.telefon, dpc.email, dpc.solicita_cazare_studii,
                                  dpc.solicita_cazare_admitere, dpc.stare_sociala_speciala, dpc.persoana_cu_dizabilitati, 
                                  dpl.liceul_absolvit, dpl.tara_liceu, dpl.localitate_liceu,
                                  dpl.judet_liceu, dpl.profil_liceu, dpl.durata_studiilor_liceu, dpl.anul_absolvirii_liceu, dpl.forma_invatamant_liceu, dpl.serie_diploma_bac, dpl.nr_diploma_bac, TO_CHAR(dpl.data_emiterii_diploma, 'dd month yyyy', 'NLS_DATE_LANGUAGE=romanian'), dpl.nr_foii_matricole, dpl.nr_act_rec_echiv, dpl.serie_act_rec_echiv, TO_CHAR(dpl.data_rec_echiv, 'dd month yyyy', 'NLS_DATE_LANGUAGE=romanian'), dpl.student_alta_fac, dpl.tara_fac, dpl.localitate_fac, dpl.judet_fac, dpl.denumire_institutie_fac,
								  dpl.denumire_alta_facultate,  dpl.domeniu_licenta_fac, dpl.specializare_fac, dpl.forma_invatamant_fac, dpl.anul_fac, dpl.nr_semestre_buget_fac, dpl.nr_semestre_bursa_fac, dpl.anul_absolvirii, dpl.cu_licenta, dpl.tara_fac_abs, dpl.localitate_fac_abs, dpl.judet_fac_abs, dpl.denumire_institutie_abs,
                                  dpl.denumire_facultate_abs, dpl.domeniu_licenta_abs, dpl.specializare_abs, dpl.titlut_obtinut, dpl.forma_invatamant_abs, dpl.nr_semestre_buget_abs, dpl.nr_semestre_bursa_abs, dpl.durata_studiilor_abs, dpl.serie_diploma_licenta, dpl.nr_diploma_licenta, TO_CHAR(dpl.data_emiterii_licenta, 'dd month yyyy', 'NLS_DATE_LANGUAGE=romanian'), dpl.nr_supliment, dpl.nr_act_rec_echiv_abs, dpl.serie_acr_rec_echiv_abs, TO_CHAR(dpl.data_echiv_abs, 'dd month yyyy', 'NLS_DATE_LANGUAGE=romanian'), cl.medie_generala_bac, cl.medie_disciplina_max, cl.optiune_test_scris, cl.solicita_echivalare, cl.an_participare_preadmitere, cl.vrea_nota_preadmitere, cl.vrea_sa_sustina_examen,
                                  ol.stare_taxa, il.diploma_bac_original, il.adeverinta_original, il.document_echiv_studii_original, il.diploma_olimpiada,
								  il.participa_altundeva, il.universitate1, il.facultate1, il.universitate2, il.facultate2, il.universitate3,  il.facultate3,
                                  ch.site_admitere, ch.site_facultate, ch.brosura_pliant, ch.pagina_facebook, ch.prieteni, ch.sapatamana_portilor, ch.prezentare_in_liceu, ch.presa, ch.alte_surse, ch.prestigiu, ch.calitate, ch.sfat_persoane, ch.statut_profesie, ch.colegii, ch.materiile, ch.informatiile_universitatii, ch.apropierea, ch.profesori,
								  ol.preferinta_1, ol.preferinta_2, ol.preferinta_3, ol.preferinta_4
                                  
                                  INTO :nr_chitanta, :suma, :scutit, :motiv_scutire, :nume_familie_nastere,
                                  :initialele_tatalui_mamei, :nume_familie_actual, :prenume_candidat, :prenume_tata, :prenume_mama, :cnp, :sex, :data_nasterii,
                                  :tara_nasterii, :judetul_nasterii, :localitatea_nasterii, :cetatenia, :nationalitate, :etnie, :limba_materna, :stare_civila, :tip_act_ident, :serie_act, :numar_act,
                                  :eliberat_de, :data_eliberarii, :data_expirarii, :mediu_domiciliu, :tara_domiciliu, :judet_domiciliu, :localitate_domiciliu, :strada, :numar , :bloc , :scara , :etaj , :apartament , :cod_postal, :telefon , :email , :solicita_cazare_studii , :solicita_cazare_admitere ,   :stare_sociala_speciala, :persoana_cu_dizabilitati , :liceul_absolvit , :tara_liceu , :localitate_liceu , :judet_liceu , :profil_liceu , :durata_studiilor_liceu , :anul_absolvirii_liceu , :forma_invatamant_liceu , :serie_diploma_bac , :nr_diploma_bac, :data_emiterii_diploma , :nr_foii_matricole, :nr_act_rec_echiv , :serie_act_rec_echiv , :data_rec_echiv , :student_alta_fac , :tara_fac , :localitate_fac , :judet_fac , :denumire_institutie_fac , :denumire_alta_facultate , :domeniu_licenta_fac , :specializare_fac , :forma_invatamant_fac , :anul_fac , :nr_semestre_buget_fac , :nr_semestre_bursa_fac , :anul_absolvirii , :cu_licenta , :tara_fac_abs , :localitate_fac_abs , :judet_fac_abs , :denumire_institutie_abs , :denumire_facultate_abs , :domeniu_licenta_abs , :specializare_abs , :titlut_obtinut , :forma_invatamant_abs , :nr_semestre_buget_abs , :nr_semestre_bursa_abs , :durata_studiilor_abs , :serie_diploma_licenta , :nr_diploma_licenta , :data_emiterii_licenta , :nr_supliment , :nr_act_rec_echiv_abs , :serie_acr_rec_echiv_abs , :data_echiv_abs, :medie_generala_bac , :medie_disciplina_max , :optiune_test_scris , :solicita_echivalare , :an_participare_preadmitere , :vrea_nota_preadmitere , :vrea_sa_sustina_examen , :stare_taxa , :diploma_bac_original , :adeverinta_original , :document_echiv_studii_original , :diploma_olimpiada , :participa_altundeva , :universitate1, :facultate1, :universitate2, :facultate2, :universitate3, :facultate3, :site_admitere , :site_facultate , :brosura_pliant , :pagina_facebook , :prieteni , :sapatamana_portilor , :prezentare_in_liceu , :presa , :alte_surse , :prestigiu , :calitate , :sfat_persoane , :statut_profesie , :colegii , :materiile , :informatiile_universitatii , :apropierea, :profesori, :preferinta_1, :preferinta_2, :preferinta_3, :preferinta_4


                                  FROM Date_personale_licenta dpc
                                                 
                                                 JOIN Formular_licenta f ON f.id=dpc.Formular_id
                                                 JOIN Date_preg_anterioara_licenta dpl ON dpl.formular_id = f.id
                                                 JOIN Cerinte_licenta cl ON cl.formular_id = f.id
                                                 JOIN Optiuni_licenta ol ON ol.formular_id = f.id
                                                 JOIN Informatii_documente_licenta il ON il.formular_id = f.id
                                                 JOIN Chestionar_licenta ch ON ch.formular_id = f.id
                                                 
                                                 WHERE f.id='$id_formular'; END; ");

     //Pt header
	 
	  oci_bind_by_name($s, ":nr_chitanta", $nr_chitanta, 100);
      oci_bind_by_name($s, ":suma", $suma, 100);
      oci_bind_by_name($s, ":scutit", $scutit, 100);
      oci_bind_by_name($s, ":motiv_scutire", $motiv_scutire, 100);
	 
     //Date_personale
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
      oci_bind_by_name($s, ":stare_civila", $stare_civila, 100);
	  oci_bind_by_name($s, ":tip_act_ident", $tip_act_ident, 100);
      oci_bind_by_name($s, ":serie_act", $serie_ci, 100);
      oci_bind_by_name($s, ":numar_act", $numar_ci, 100);
      oci_bind_by_name($s, ":eliberat_de", $eliberat_de, 100);
      oci_bind_by_name($s, ":data_eliberarii", $data_eliberarii, 100);
      oci_bind_by_name($s, ":data_expirarii", $data_expirarii, 100);
      oci_bind_by_name($s, ":mediu_domiciliu", $mediu_domiciliu, 100);
      oci_bind_by_name($s, ":tara_domiciliu", $tara_domiciliu, 100);
      oci_bind_by_name($s, ":judet_domiciliu", $judet_domiciliu, 100);
      oci_bind_by_name($s, ":localitate_domiciliu", $localitate_domiciliu, 100);
      oci_bind_by_name($s, ":strada", $strada, 100);
      oci_bind_by_name($s, ":numar", $numar, 100);
      oci_bind_by_name($s, ":bloc", $bloc, 100);
      oci_bind_by_name($s, ":scara", $scara, 100);
      oci_bind_by_name($s, ":etaj", $etaj, 100);
      oci_bind_by_name($s, ":apartament", $apartament, 100);
      oci_bind_by_name($s, ":cod_postal", $cod_postal, 100);
      oci_bind_by_name($s, ":telefon", $telefon, 100);
      oci_bind_by_name($s, ":email", $email, 100);
      oci_bind_by_name($s, ":solicita_cazare_studii", $solicita_cazare_studii, 100);
      oci_bind_by_name($s, ":solicita_cazare_admitere", $solicita_cazare_admitere, 100);
      oci_bind_by_name($s, ":stare_sociala_speciala", $stare_sociala_speciala, 100);
      oci_bind_by_name($s, ":persoana_cu_dizabilitati", $persoana_cu_dizabilitati, 100);
      
     //Preg anterioare
     
     oci_bind_by_name($s, ":liceul_absolvit", $liceul_absolvit, 100);
     oci_bind_by_name($s, ":tara_liceu", $tara_liceu, 100);
     oci_bind_by_name($s, ":localitate_liceu", $localitate_liceu, 100);
     oci_bind_by_name($s, ":judet_liceu", $judet_liceu, 100);
     oci_bind_by_name($s, ":profil_liceu", $profil_liceu, 100);
     oci_bind_by_name($s, ":durata_studiilor_liceu", $durata_studiilor_liceu, 100);
     oci_bind_by_name($s, ":anul_absolvirii_liceu", $anul_absolvirii_liceu, 100);
     oci_bind_by_name($s, ":forma_invatamant_liceu", $forma_invatamant_liceu, 100);
     oci_bind_by_name($s, ":serie_diploma_bac", $serie_diploma_bac, 100);
     oci_bind_by_name($s, ":nr_diploma_bac", $nr_diploma_bac, 100);
     oci_bind_by_name($s, ":data_emiterii_diploma", $data_emiterii_diploma, 100);
     oci_bind_by_name($s, ":nr_foii_matricole", $nr_foii_matricole, 100);
     oci_bind_by_name($s, ":nr_act_rec_echiv", $nr_act_rec_echiv, 100);
     oci_bind_by_name($s, ":serie_act_rec_echiv", $serie_act_rec_echiv, 100);
     oci_bind_by_name($s, ":data_rec_echiv", $data_rec_echiv, 100);
     oci_bind_by_name($s, ":student_alta_fac", $student_alta_fac, 100);
     oci_bind_by_name($s, ":tara_fac", $tara_fac, 100);
     oci_bind_by_name($s, ":localitate_fac", $localitate_fac, 100);
     oci_bind_by_name($s, ":judet_fac", $judet_fac, 100);
     oci_bind_by_name($s, ":denumire_institutie_fac", $denumire_institutie_fac, 100);
	 oci_bind_by_name($s, ":denumire_alta_facultate", $denumire_alta_facultate, 100);
     oci_bind_by_name($s, ":domeniu_licenta_fac", $domeniu_licenta_fac, 100);
     oci_bind_by_name($s, ":specializare_fac", $specializare_fac, 100);
     oci_bind_by_name($s, ":forma_invatamant_fac", $forma_invatamant_fac, 100);
     oci_bind_by_name($s, ":anul_fac", $anul_fac, 100);
     oci_bind_by_name($s, ":nr_semestre_buget_fac", $nr_semestre_buget_fac, 100);
     oci_bind_by_name($s, ":nr_semestre_bursa_fac", $nr_semestre_bursa_fac, 100);
     oci_bind_by_name($s, ":anul_absolvirii", $anul_absolvirii, 100);
     oci_bind_by_name($s, ":cu_licenta", $cu_licenta, 100);
     oci_bind_by_name($s, ":tara_fac_abs", $tara_fac_abs, 100);
     oci_bind_by_name($s, ":localitate_fac_abs", $localitate_fac_abs, 100);
     oci_bind_by_name($s, ":judet_fac_abs", $judet_fac_abs, 100);
     oci_bind_by_name($s, ":denumire_institutie_abs", $denumire_institutie_abs, 100);
     oci_bind_by_name($s, ":denumire_facultate_abs", $denumire_facultate_abs, 100);
     oci_bind_by_name($s, ":domeniu_licenta_abs", $domeniu_licenta_abs, 100);
     oci_bind_by_name($s, ":specializare_abs", $specializare_abs, 100);
     oci_bind_by_name($s, ":titlut_obtinut", $titlut_obtinut, 100);
     oci_bind_by_name($s, ":forma_invatamant_abs", $forma_invatamant_abs, 100);
     
     oci_bind_by_name($s, ":nr_semestre_buget_abs", $nr_semestre_buget_abs, 100);
     oci_bind_by_name($s, ":nr_semestre_bursa_abs", $nr_semestre_bursa_abs, 100);
     oci_bind_by_name($s, ":durata_studiilor_abs", $durata_studiilor_abs, 100);
     oci_bind_by_name($s, ":serie_diploma_licenta", $serie_diploma_licenta, 100);
     oci_bind_by_name($s, ":nr_diploma_licenta", $nr_diploma_licenta, 100);
     oci_bind_by_name($s, ":data_emiterii_licenta", $data_emiterii_licenta, 100);
     oci_bind_by_name($s, ":nr_supliment", $nr_supliment, 100);
     oci_bind_by_name($s, ":nr_act_rec_echiv_abs", $nr_act_rec_echiv_abs, 100);
     oci_bind_by_name($s, ":serie_acr_rec_echiv_abs", $serie_acr_rec_echiv_abs, 100);
     oci_bind_by_name($s, ":data_echiv_abs", $data_echiv_abs, 100);
     
     
     //Cerinte licenta
     
     oci_bind_by_name($s, ":medie_generala_bac", $medie_generala_bac, 100);
     oci_bind_by_name($s, ":medie_disciplina_max", $medie_disciplina_max, 100);
     oci_bind_by_name($s, ":optiune_test_scris", $optiune_test_scris, 100);
     oci_bind_by_name($s, ":solicita_echivalare", $solicita_echivalare, 100);
     oci_bind_by_name($s, ":an_participare_preadmitere", $an_participare_preadmitere, 100);
     oci_bind_by_name($s, ":vrea_nota_preadmitere", $vrea_nota_preadmitere, 100);
     oci_bind_by_name($s, ":vrea_sa_sustina_examen", $vrea_sa_sustina_examen, 100);
     
     //Optiuni_licenta
     
    // oci_bind_by_name($s, ":in_romana", $in_romana, 100);
     //oci_bind_by_name($s, ":in_engleza", $in_engleza, 100);
     oci_bind_by_name($s, ":stare_taxa", $stare_taxa, 100);
     
     //Info doc licenta
     
     oci_bind_by_name($s, ":diploma_bac_original", $diploma_bac_original, 100);
     oci_bind_by_name($s, ":adeverinta_original", $adeverinta_original, 100);
     oci_bind_by_name($s, ":document_echiv_studii_original", $document_echiv_studii_original, 100);
     oci_bind_by_name($s, ":diploma_olimpiada", $diploma_olimpiada, 100);
     oci_bind_by_name($s, ":participa_altundeva", $participa_altundeva, 100);
     oci_bind_by_name($s, ":universitate1", $universitate1, 100);
     oci_bind_by_name($s, ":facultate1", $facultate1, 100);
     oci_bind_by_name($s, ":universitate2", $universitate2, 100);
     oci_bind_by_name($s, ":facultate2", $facultate2, 100);
     oci_bind_by_name($s, ":universitate3", $universitate3, 100);
     oci_bind_by_name($s, ":facultate3", $facultate3, 100);
     
     //Chestionar licenta
     
     oci_bind_by_name($s, ":site_admitere", $site_admitere, 100);
     oci_bind_by_name($s, ":site_facultate", $site_facultate, 100);
     oci_bind_by_name($s, ":brosura_pliant", $brosura_pliant, 100);
     oci_bind_by_name($s, ":pagina_facebook", $pagina_facebook, 100);
     oci_bind_by_name($s, ":prieteni", $prieteni, 100);
     oci_bind_by_name($s, ":sapatamana_portilor", $sapatamana_portilor, 100);
     oci_bind_by_name($s, ":prezentare_in_liceu", $prezentare_in_liceu, 100);
     oci_bind_by_name($s, ":presa", $presa, 100);
     oci_bind_by_name($s, ":alte_surse", $alte_surse, 100);
     oci_bind_by_name($s, ":prestigiu", $prestigiu, 100);
     oci_bind_by_name($s, ":calitate", $calitate, 100);
     oci_bind_by_name($s, ":sfat_persoane", $sfat_persoane, 100);
     oci_bind_by_name($s, ":statut_profesie", $statut_profesie, 100);
     oci_bind_by_name($s, ":colegii", $colegii, 100);
     oci_bind_by_name($s, ":materiile", $materiile, 100);
     oci_bind_by_name($s, ":informatiile_universitatii", $informatiile_universitatii, 100);
     oci_bind_by_name($s, ":apropierea", $apropierea, 100); 
     oci_bind_by_name($s, ":profesori", $profesori, 100); 
     
	 //Optiuni licenta
	 
	 oci_bind_by_name($s, ":preferinta_1", $preferinta_1, 100); 
	 oci_bind_by_name($s, ":preferinta_2", $preferinta_2, 100); 
	 oci_bind_by_name($s, ":preferinta_3", $preferinta_3, 100); 
	 oci_bind_by_name($s, ":preferinta_4", $preferinta_4, 100); 
	 
     
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
    $pdf->Ln(10);
	$pdf->Cell(58);
	$pdf->SetFont('DejaVu','B',12);
	$pdf->Cell(50, 20, 'FIȘĂ DE ÎNSCRIERE - ADMITERE SESIUNEA', 0, 0, 'C');
	$pdf->Cell(38.5);
	$pdf->SetFont('DejaVu','B',12);
	$pdf->Cell(10, 20, 'IULIE 2017', 0, 0, 'C');
	
	$pdf->Ln(5);
	$pdf->Cell(72);
	$pdf->SetFont('DejaVu','B',10);
	$pdf->Cell(50, 20, 'Studii universitare de LICENȚĂ - forma de învățământ:', 0, 0, 'C');
	
	$pdf->Ln(5);
	$pdf->Cell(72);
	$pdf->SetFont('DejaVu','I',9);
	$pdf->Cell(50, 20, 'învățământ cu frecvență; învățământ cu frecvență redusă; învățământ la distanță', 0, 0, 'C');
	
	$pdf->Ln(10);
	$pdf->Cell(67);
	$pdf->SetFont('DejaVu','B',10);
	$pdf->Cell(10, 20, 'Dosar nr. ', 0, 0, 'C');
	
	$pdf->Cell(9.5);
	$pdf->Cell(5, 20, '..............', 0, 0, 'C');
	
	$pdf->Cell(9.5);
	$pdf->Cell(5, 20, 'Data', 0, 0, 'C');
	
	$pdf->Cell(13.5);
	$pdf->Cell(5, 20, '.......................', 0, 0, 'C');
	
	//Verificare daca este scutit sau nu
	$raspuns = 'NU';
	if($scutit == 1) $raspuns = 'DA';
	
	$pdf->Ln(16);
	$x = $pdf->GetX();
	$y = $pdf->GetY();
	
	$pdf->SetFont('DejaVu','B',9);
	$pdf->MultiCell(34, 10, 'Taxa de înscriere', 1, 1);
	$pdf->SetXY($x + 34, $y);
	$pdf->SetFont('DejaVu','',9);
	$pdf->MultiCell(47, 10,'Chitanța nr. '.$nr_chitanta,1,  1);
	$pdf->SetXY($x + 81, $y);	
	$pdf->MultiCell(25, 10,'Suma: '.$suma,1,  1);
    $pdf->SetXY($x + 106, $y);	
	$pdf->MultiCell(19, 10,'Scutit:'.$raspuns,1,  1);
    $pdf->SetXY($x + 125, $y);	
	$pdf->MultiCell(65, 10,'Motivul scutirii: '.$motiv_scutire,1,  1);
	 
	  $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 72, 210-10, 72);

	  $pdf->Ln(8);
	  $pdf->SetFont('DejaVu','B',10);
	  $pdf->Cell(10);

	  $pdf->Cell(0,0,'I. INFORMAȚII GENERALE',0,1);
	  $pdf->SetLineWidth(0);
	  $pdf->Line(20, 77, 210-20, 77);

	  $pdf->Ln(3);

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
	  $pdf->MultiCell(130, 6, ''.mb_strtoupper($nume_familie_nastere, 'UTF-8'), 1, 1);
	  $pdf->SetXY($x + 145, $y);
	  $pdf->MultiCell(35, 6,''.mb_strtoupper($initialele_tatalui_mamei, 'UTF-8'),1,  1);

	  $pdf->Ln(2);
	  $pdf->SetFont('DejaVu','B',8);
	  $pdf->Cell(0,10,'Numele de familie actual (după căsătorie, modificare la cerere conform actului doveditor, dacă este cazul)',0,0,'C');
	  
	  $pdf->Ln(7);
	  $pdf->Cell(10);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->Cell(170,6,''.mb_strtoupper($nume_familie_actual, 'UTF-8'),1,0,'L');
	  
	  $pdf->Ln(8);
	  $pdf->Cell(9);
	  $pdf->SetFont('DejaVu','B',8);
	  $pdf->Cell(0,10,'Prenumele candidatului',0,0,'L');
	  
	  $pdf->Ln(7);
	  $pdf->Cell(10);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->Cell(170,6,''.mb_strtoupper($prenume_candidat, 'UTF-8'),1,0,'L');
	  
	  $pdf->Ln(13);
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->Cell(10);
	  
	  $pdf->MultiCell(60, 6, 'Prenumele părinților (din certificatul de naștere al candidatului)', 1, 1);
	  $pdf->SetXY($x + 70, $y);
	  $pdf->MultiCell(12, 12,'Mama',1,  1);
	  $pdf->SetXY($x + 82, $y);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->MultiCell(43, 12,''.mb_strtoupper($prenume_mama, 'UTF-8'),1,  1);
	  $pdf->SetXY($x + 125, $y);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->MultiCell(12, 12,'Tata',1,  1);
	  $pdf->SetXY($x + 137, $y);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->MultiCell(43, 12,''.mb_strtoupper($prenume_tata, 'UTF-8'),1,  1);

	  $pdf->Ln(7);

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
	  
	  $pdf->Ln(3);
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

	  $pdf->Ln(7);
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
	  $pdf->Cell(0,10,'Starea civilă',0,0,'C');
	  
	  $pdf->Ln(7);
	  $pdf->Cell(69.5);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->Cell(50,6,''.$stare_civila,1,0,'C');
	  
	  $pdf->Ln(9);
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
	  $pdf->MultiCell(45, 6,''.$serie_ci,1,  1);
	  $pdf->SetXY($x + 135, $y);
	  $pdf->MultiCell(45, 6,''.$numar_ci,1,  1);

	  $pdf->Ln(8);
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

	  $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 270, 210-10, 270);
	  $pdf->SetLineWidth(0);
	  
      
      //Pagina 2
      
	  $pdf->AddPage();
	  $pdf->Ln(7);
	  $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 15, 210-10, 15);
	  $pdf->SetFont('DejaVu','B',8);
	  $pdf->Cell(0,10,'Domiciliul stabil',0,0,'C');
      
      $pdf->SetLineWidth(0);
      
      $pdf->Ln(7);
	  $pdf->Cell(70);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->Cell(50,6,''.$mediu_domiciliu,1,0,'C');
      
	  $pdf->Ln(8);
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',8);

	  $pdf->Cell(10);
	  $pdf->MultiCell(60, 6, 'Strada', 0, 1);
	  $pdf->SetXY($x + 125, $y);
	  $pdf->MultiCell(95, 6,'Numărul',0,  1);

	  $pdf->Ln(-0.5);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',7);

	  $pdf->Cell(10);

	  $pdf->MultiCell(110, 6, ''.$strada, 1, 1);
	  $pdf->SetXY($x + 125, $y);
	  $pdf->MultiCell(55, 6,''.$numar,1,  1);
	  
	  $pdf->Ln(1.5);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',8);

	  $pdf->Cell(10);
   	  $pdf->MultiCell(50, 6, 'Bloc', 0, 1);
	  $pdf->SetXY($x + 90, $y);
	  $pdf->MultiCell(30, 6,'Scara',0,  1);
	  $pdf->SetXY($x + 120, $y);
	  $pdf->MultiCell(30, 6,'Etaj',0,  1);
	  $pdf->SetXY($x + 150, $y);
	  $pdf->MultiCell(30, 6,'Apartament',0,  1);

	 $pdf->Ln(-0.5);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',7);

	 $pdf->Cell(10);

	 $pdf->MultiCell(75, 6, ''.$bloc, 1, 1);
	 $pdf->SetXY($x + 90, $y);
	 $pdf->MultiCell(30, 6,''.$scara,1,  1);
	 $pdf->SetXY($x + 120, $y);
	 $pdf->MultiCell(30, 6,''.$etaj,1,  1);
	 $pdf->SetXY($x + 150, $y);
	 $pdf->MultiCell(30, 6,''.$apartament,1,  1);


	 $pdf->Ln(1.5);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',8);

	 $pdf->Cell(10);
	 $pdf->MultiCell(85, 6, 'Localitate', 0, 1);
	 $pdf->SetXY($x + 90, $y);
	 $pdf->MultiCell(95, 6,'Județ',0,  1);

	 $pdf->Ln(-0.5);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',7);

	 $pdf->Cell(10);

	 $pdf->MultiCell(75, 6, ''.$localitate_domiciliu, 1, 1);
	 $pdf->SetXY($x + 90, $y);
	 $pdf->MultiCell(90, 6,''.$judet_domiciliu,1,  1);

	 $pdf->Ln(1.5);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',8);

	 $pdf->Cell(10);
	 $pdf->MultiCell(85, 6, 'Cod poștal', 0, 1);
	 $pdf->SetXY($x + 90, $y);
	 $pdf->MultiCell(95, 6,'Țara',0,  1);

	 $pdf->Ln(-0.5);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',7);
	 $pdf->Cell(10);

	 $pdf->MultiCell(75, 6, ''.$cod_postal, 1, 1);
	 $pdf->SetXY($x + 90, $y);
	 $pdf->MultiCell(90, 6,''.$tara_domiciliu,1,  1);
    
	 $pdf->Ln(1.5);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
	 $pdf->MultiCell(85, 6, 'Nr. telefon', 0, 1);
	 $pdf->SetXY($x + 90, $y);
	 $pdf->MultiCell(95, 6,'E-mail',0,  1);
      
	 $pdf->Ln(-0.5);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',7);

	 $pdf->Cell(10);

    
	 $pdf->MultiCell(75, 6, ''.$telefon, 1, 1);
	 $pdf->SetXY($x + 90, $y);
	 $pdf->MultiCell(90, 6,''.$email,1,  1);

	 //Raspuns in cazul solicitarii pt cazari
	 
	 $raspuns_cazare_studii = 'NU';
	 if($solicita_cazare_studii == 1) $raspuns_cazare_studii = 'DA';
	 
	 $raspuns_cazare_test = 'NU';
	 if($solicita_cazare_admitere == 1) $raspuns_cazare_test = 'DA';
	 
	 $pdf->Ln(5);
	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
	 $pdf->MultiCell(70, 6, 'Solicitați cazare pe timpul studiilor?', 1, 1);
	 $pdf->SetXY($x + 80, $y);
	 $pdf->MultiCell(100, 6,'Solicitați cazare în perioada testului scris de admitere?',1,  1);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',7);

     $pdf->Cell(10);
	 $pdf->MultiCell(70, 6, ''.$raspuns_cazare_studii, 1, 1);
	 $pdf->SetXY($x + 80, $y);
	 $pdf->MultiCell(100, 6,''.$raspuns_cazare_test,1,  1);
	  
	 //Conditii speciale ale candidatului (dizabilitati / stare sociala)
	 
	 $raspuns_dizabilitati = 'NU';
	 if($persoana_cu_dizabilitati == 1) $raspuns_dizabilitati = 'DA';
	 
	 $raspuns_stare_sociala_speciala = 'NU';
	 if($stare_sociala_speciala == 2) $raspuns_stare_sociala_speciala = 'Orfan de un părinte';
	 if($stare_sociala_speciala == 3) $raspuns_stare_sociala_speciala = 'Orfan de ambii părinți';
	 if($stare_sociala_speciala == 4) $raspuns_stare_sociala_speciala = 'Provenit din case de copii';
	 if($stare_sociala_speciala == 5) $raspuns_stare_sociala_speciala = 'Provenit din plasament familial';
	 if($stare_sociala_speciala == 6) $raspuns_stare_sociala_speciala = 'Provenit din familie monoparentală';
	 
	 $pdf->Ln(5);
	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
	 $pdf->MultiCell(107, 6, 'Candidat care se încadrează în categ. persoanelor cu dizabilități', 1, 1);
	 $pdf->SetXY($x + 117, $y);
	 $pdf->MultiCell(63, 6,'Stare socială specială',1,  1);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',7);

     $pdf->Cell(10);
	 $pdf->MultiCell(107, 6, ''.$raspuns_dizabilitati, 1, 1);
	 $pdf->SetXY($x + 117, $y);
	 $pdf->MultiCell(63, 6,''.$raspuns_stare_sociala_speciala,1,  1);
	 
	 $pdf->SetLineWidth(0.5);
	 $pdf->Line(10, 141.5, 210-10, 141.5);

	 $pdf->Ln(15);
	 $pdf->SetFont('DejaVu','B',10);
	 $pdf->Cell(10);

	 $pdf->Cell(0,0,'II. DATE PRIVIND PREGATIREA ANTERIOARĂ A CANDIDATULUI',0,1);
	 $pdf->SetLineWidth(0);
	 $pdf->Line(20, 147, 210-20, 147); 
	 
	 $pdf->Ln(4);
	 $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(0,10,'II.a.Studiile preuniversitare absolvite, nivel liceu',0,0,'C');

	  $pdf->Ln(9);
	  $pdf->SetFont('DejaVu','B',8);
	  $pdf->Cell(0,10,'Instituția unde a absolvit',0,0,'C');
     
	  $pdf->Ln(7);
      $pdf->Cell(10);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->Cell(170,6,''.$liceul_absolvit,1,0,'L');
	 
     $pdf->Ln(12); 
     $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',7.6);
	 $pdf->Cell(10);
	 $pdf->MultiCell(40, 6,'Localitate',1,  1); 
     $pdf->SetXY($x + 50, $y);
     $pdf->MultiCell(27, 6,'Țara',1,  1); 
     $pdf->SetXY($x + 77, $y);
	 $pdf->MultiCell(23, 6,'Județul',1,  1); 
     $pdf->SetXY($x + 100, $y);
	 $pdf->MultiCell(37, 6,'Profil/Domeniu',1,  1);
     $pdf->SetXY($x + 137, $y);
	 $pdf->MultiCell(22, 6,'Durată studii',1,  1);
     $pdf->SetXY($x + 159, $y);
	 $pdf->MultiCell(21, 6,'An absolvire',1,  1);
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',6.5);
	 $pdf->Cell(10);
	 $pdf->MultiCell(40, 6,''.$localitate_liceu,1,  1); 
     $pdf->SetXY($x + 50, $y);
     $pdf->MultiCell(27, 6,''.$tara_liceu,1,  1); 
     $pdf->SetXY($x + 77, $y);
	 $pdf->MultiCell(23, 6,''.$judet_liceu,1,  1); 
     $pdf->SetXY($x + 100, $y);
	 $pdf->MultiCell(37, 6,''.$profil_liceu,1,  1);
     $pdf->SetXY($x + 137, $y);
	 $pdf->MultiCell(22, 6,''.$durata_studiilor_liceu,1,  1);
     $pdf->SetXY($x + 159, $y);
	 $pdf->MultiCell(21, 6,''.$anul_absolvirii_liceu,1,  1);
    
      
      
	 $pdf->Ln(7);
    
	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
	 $pdf->MultiCell(40, 6, 'Forma de învățământ', 1, 1);
	 $pdf->SetXY($x + 50, $y);
	 $pdf->MultiCell(30, 6,'Dipl. BAC Seria:',1,  1); 
     $pdf->SetXY($x + 80, $y);
	 $pdf->MultiCell(35, 6,'Dipl. BAC Numărul:',1,  1); 
     $pdf->SetXY($x + 115, $y);
	 $pdf->MultiCell(30, 6,'Data emiterii',1,  1);
     $pdf->SetXY($x + 145, $y);
	 $pdf->MultiCell(35, 6,'Nr. foie matricolă',1,  1);
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',7);
	 $pdf->Cell(10);
	 $pdf->MultiCell(40, 6, ''.$forma_invatamant_liceu, 1, 1);
	 $pdf->SetXY($x + 50, $y);
	 $pdf->MultiCell(30, 6,''.$serie_diploma_bac,1,  1); 
     $pdf->SetXY($x + 80, $y);
	 $pdf->MultiCell(35, 6,''.$nr_diploma_bac,1,  1); 
     $pdf->SetXY($x + 115, $y);
	 $pdf->MultiCell(30, 6,''.$data_emiterii_diploma,1,  1);
     $pdf->SetXY($x + 145, $y);
	 $pdf->MultiCell(35, 6,''.$nr_foii_matricole,1,  1);
     
    //Observatii II.a
      
     $pdf->Ln(3);
	 $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(0,10,'Alte observații (pentru cazurile în care candidatul a absolvit studiile anterioare în străinătate)',0,0,'C');

     $pdf->Ln(8.5); 
     $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
	 $pdf->MultiCell(50, 6, 'Act de recunoaștere Nr', 1, 1);
	 $pdf->SetXY($x + 60, $y);
	 $pdf->MultiCell(60, 6,'Act de recunoaștere Serie',1,  1); 
     $pdf->SetXY($x + 120, $y);
	 $pdf->MultiCell(60, 6,'Act de recunoaștere Data echiv.',1,  1);
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',7);
	 $pdf->Cell(10);
	 $pdf->MultiCell(50, 6, ''.$nr_act_rec_echiv, 1, 1);
	 $pdf->SetXY($x + 60, $y);
	 $pdf->MultiCell(60, 6,''.$serie_act_rec_echiv,1,  1); 
     $pdf->SetXY($x + 120, $y);
	 $pdf->MultiCell(60, 6,''.$data_rec_echiv,1,  1);
      
      $pdf->Ln(4);
	  $pdf->SetFont('DejaVu','B',8);
	  $pdf->Cell(0,10,'Dipl. BAC Emisă de:',0,0,'C');

	  $pdf->Ln(7);
      $pdf->Cell(10);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->Cell(170,6,''.$liceul_absolvit,1,0,'L'); 
      
      
      //Linie pt footer
 
	 $pdf->SetLineWidth(0.5);
	 $pdf->Line(10, 270.5, 210-10, 270.5);
      
                                                                                            
      $pdf->AddPage();
	 
	  $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 15, 210-10, 15);
      $pdf->SetLineWidth(0);

	  $pdf->Ln(7);

	  $pdf->SetFont('DejaVu','B',8);
	  $pdf->Cell(0,10,'II.b.Studiile universitare în curs',0,0,'C');

     //Raspuns daca candidatul este student la alta facultate/univ
	 $raspuns_alta_facultate = 'NU';
	 if($student_alta_fac == 1) $raspuns_alta_facultate = 'DA';
      
     $pdf->Ln(8.5); 
     $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
	 $pdf->MultiCell(40, 6, 'Student altă facult/univ', 1, 1);
	 $pdf->SetXY($x + 50, $y);
	 $pdf->MultiCell(27, 6,'Țara',1,  1); 
     $pdf->SetXY($x + 77, $y);
	 $pdf->MultiCell(35, 6,'Localitatea',1,  1); 
     $pdf->SetXY($x + 112, $y);
	 $pdf->MultiCell(20, 6,'Județul',1,  1);
     $pdf->SetXY($x + 132, $y);
	 $pdf->MultiCell(48, 6,'Domeniul',1,  1);
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',6.5);
	 $pdf->Cell(10);
	 $pdf->MultiCell(40, 6, ''.$raspuns_alta_facultate, 1, 1);
	 $pdf->SetXY($x + 50, $y);
	 $pdf->MultiCell(27, 6,''.$tara_fac,1,  1); 
     $pdf->SetXY($x + 77, $y);
	 $pdf->MultiCell(35, 6,''.$localitate_fac,1,  1); 
     $pdf->SetXY($x + 112, $y);
	 $pdf->MultiCell(20, 6,''.$judet_fac,1,  1);
     $pdf->SetXY($x + 132, $y);
	 $pdf->MultiCell(48, 6,''.$domeniu_licenta_fac,1,  1);
     
	 $pdf->Ln(6); 
     $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
	 
	 $pdf->MultiCell(100, 6,'Denumire instituție',1,  1);
     $pdf->SetXY($x + 110, $y);
	 $pdf->MultiCell(70, 6,'Facultatea',1,  1);
     
     $x = $pdf->GetX();
	 $y = $pdf->GetY();
	 
	 $pdf->SetFont('DejaVu','B',7);
	 $pdf->Cell(10);
	 
	 $pdf->MultiCell(100, 6,''.mb_strtoupper($denumire_institutie_fac, 'UTF-8'),1,  1);
     $pdf->SetXY($x + 110, $y);
	 $pdf->MultiCell(70, 6,''.$denumire_alta_facultate,1,  1);
      
	 $pdf->Ln(5);
    
	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',7.6);
	 $pdf->Cell(10);
	 $pdf->MultiCell(49, 6,'Program de studii/Specializare',1,  1); 
     $pdf->SetXY($x + 59, $y);
	 $pdf->MultiCell(35, 6,'Forma de învățământ',1,  1); 
     $pdf->SetXY($x + 94, $y);
	 $pdf->MultiCell(10, 6,'Anul',1,  1);
     $pdf->SetXY($x + 104, $y);
	 $pdf->MultiCell(38, 6,'Număr semestre buget',1,  1);
     $pdf->SetXY($x + 142, $y);
	 $pdf->MultiCell(38, 6,'Număr semestre bursă',1,  1);
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',7);
	 $pdf->Cell(10);
	 $pdf->MultiCell(49, 6,''.$specializare_fac,1,  1); 
     $pdf->SetXY($x + 59, $y);
	 $pdf->MultiCell(35, 6,''.$forma_invatamant_fac,1,  1); 
     $pdf->SetXY($x + 94, $y);
	 $pdf->MultiCell(10, 6,''.$anul_fac,1,  1);
     $pdf->SetXY($x + 104, $y);
	 $pdf->MultiCell(38, 6,''.$nr_semestre_buget_fac,1,  1);
     $pdf->SetXY($x + 142, $y);
	 $pdf->MultiCell(38, 6,''.$nr_semestre_bursa_fac,1,  1);
      
     
                                            //                  II.b studii absolvite
      
	 
	 
     $pdf->Ln(7);

     $pdf->SetFont('DejaVu','B',8);
     $pdf->Cell(0,10,'II.b.Studiile universitare absolvite',0,0,'C');

     //Raspuns cu/fara diploma de licenta
	 
	 $raspuns_diploma_licenta = null;
	 if($cu_licenta == 1) $raspuns_diploma_licenta = 'CU DIPLOMA';
     else if($cu_licenta == 2) $raspuns_diploma_licenta = 'FĂRĂ DIPLOMĂ';
     
     $pdf->Ln(8.5); 
     $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
	 $pdf->MultiCell(27, 6, 'Anul absolvirii', 1, 1);
	 $pdf->SetXY($x + 37, $y);
	 $pdf->MultiCell(44, 6,'Cu/Fără dipl. de licență',1,  1); 
     $pdf->SetXY($x + 81, $y);
	 $pdf->MultiCell(27, 6,'Țara',1,  1); 
     $pdf->SetXY($x + 108, $y);
	 $pdf->MultiCell(42, 6,'Localitatea',1,  1); 
     $pdf->SetXY($x + 150, $y);
	 $pdf->MultiCell(30, 6,'Județul',1,  1);
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',6.5);
	 $pdf->Cell(10);
	 $pdf->MultiCell(27, 6, ''.$anul_absolvirii, 1, 1);
	 $pdf->SetXY($x + 37, $y);
	 $pdf->MultiCell(44, 6,''.$raspuns_diploma_licenta,1,  1); 
     $pdf->SetXY($x + 81, $y);
	 $pdf->MultiCell(27, 6,''.$tara_fac_abs,1,  1); 
     $pdf->SetXY($x + 108, $y);
	 $pdf->MultiCell(42, 6,''.$localitate_fac_abs,1,  1); 
     $pdf->SetXY($x + 150, $y);
	 $pdf->MultiCell(30, 6,''.$judet_fac_abs,1,  1);
     
     $pdf->Ln(6); 
     $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
	 
	 $pdf->MultiCell(100, 6,'Denumire instituție',1,  1);
     $pdf->SetXY($x + 110, $y);
	 $pdf->MultiCell(70, 6,'Facultatea',1,  1);
     
     $x = $pdf->GetX();
	 $y = $pdf->GetY();
	 
	 $pdf->SetFont('DejaVu','B',7);
	 $pdf->Cell(10);
	 
	 $pdf->MultiCell(100, 6,''.mb_strtoupper($denumire_institutie_abs, 'UTF-8'),1,  1);
     $pdf->SetXY($x + 110, $y);
	 $pdf->MultiCell(70, 6,''.$denumire_facultate_abs,1,  1); 
      
	 $pdf->Ln(5);
    
	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',7.6);
	 $pdf->Cell(10);
     $pdf->MultiCell(27, 6,'Domeniul',1,  1);
     $pdf->SetXY($x + 37, $y);
	 $pdf->MultiCell(45, 6,'Program studii/Specializare',1,  1); 
     $pdf->SetXY($x + 82, $y);
	 $pdf->MultiCell(52, 6,'Titlul obținut',1,  1);
     $pdf->SetXY($x + 134, $y);
	 $pdf->MultiCell(22, 6,'Forma învăț',1,  1); 
     $pdf->SetXY($x + 156, $y);
	 $pdf->MultiCell(24, 6,'Nr.sem. buget',1,  1);
  
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',7);
	 $pdf->Cell(10);
     $pdf->MultiCell(27, 6,''.$domeniu_licenta_abs,1,  1);
     $pdf->SetXY($x + 37, $y);
	 $pdf->MultiCell(45, 6,''.$specializare_abs,1,  1); 
     $pdf->SetXY($x + 82, $y);
	 $pdf->MultiCell(52, 6,''.$titlut_obtinut,1,  1);
     $pdf->SetXY($x + 134, $y);
	 $pdf->MultiCell(22, 6,''.$forma_invatamant_abs,1,  1); 
     $pdf->SetXY($x + 156, $y);
	 $pdf->MultiCell(24, 6,''.$nr_semestre_buget_abs,1,  1);
      
    
     $pdf->Ln(5);
    
	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',7.6);
	 $pdf->Cell(10);
     $pdf->MultiCell(32, 6,'Nr. semestre bursă',1,  1);
     $pdf->SetXY($x + 42, $y);
	 $pdf->MultiCell(23, 6,'Durată studii',1,  1); 
     $pdf->SetXY($x + 65, $y);
	 $pdf->MultiCell(32, 6,'Dipl. licență Seria',1,  1);
     $pdf->SetXY($x + 97, $y);
	 $pdf->MultiCell(26, 6,'Dipl. licență Nr',1,  1); 
     $pdf->SetXY($x + 123, $y);
	 $pdf->MultiCell(30, 6,'Dată emitere',1,  1);
     $pdf->SetXY($x + 153, $y);
	 $pdf->MultiCell(27, 6,'Nr.foaie matr.',1,  1); 
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',7);
	 $pdf->Cell(10);
     $pdf->MultiCell(32, 6,''.$nr_semestre_bursa_abs,1,  1);
     $pdf->SetXY($x + 42, $y);
	 $pdf->MultiCell(23, 6,''.$durata_studiilor_abs,1,  1); 
     $pdf->SetXY($x + 65, $y);
	 $pdf->MultiCell(32, 6,''.$serie_diploma_licenta,1,  1);
     $pdf->SetXY($x + 97, $y);
	 $pdf->MultiCell(26, 6,''.$nr_diploma_licenta,1,  1); 
     $pdf->SetXY($x + 123, $y);
	 $pdf->MultiCell(30, 6,''.$data_emiterii_licenta,1,  1);
     $pdf->SetXY($x + 153, $y);
	 $pdf->MultiCell(27, 6,''.$nr_supliment,1,  1); 
      
      
      
    //Observatii II.b
      
     $pdf->Ln(1);
	 $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(0,10,'Alte observații (pentru cazurile în care candidatul a absolvit studiile anterioare în străinătate)',0,0,'C');

     $pdf->Ln(8.5); 
     $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',7);
	 $pdf->Cell(10);
	 $pdf->MultiCell(50, 6, 'Act de recunoaștere Nr', 1, 1);
	 $pdf->SetXY($x + 60, $y);
	 $pdf->MultiCell(60, 6,'Act de recunoaștere Serie',1,  1); 
     $pdf->SetXY($x + 120, $y);
	 $pdf->MultiCell(60, 6,'Act de recunoaștere Data echiv.',1,  1);
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',7);
	 $pdf->Cell(10);
	 $pdf->MultiCell(50, 6, ''.$nr_act_rec_echiv_abs, 1, 1);
	 $pdf->SetXY($x + 60, $y);
	 $pdf->MultiCell(60, 6,''.$serie_acr_rec_echiv_abs,1,  1); 
     $pdf->SetXY($x + 120, $y);
	 $pdf->MultiCell(60, 6,''.$data_echiv_abs,1,  1);

	 //Emitere dipl. licenta
	 
	  $pdf->Ln(1);
	  $pdf->SetFont('DejaVu','B',8);
	  $pdf->Cell(0,10,'Dipl. licență Emisă de',0,0,'C');

	  $pdf->Ln(7);
      $pdf->Cell(10);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->Cell(170,6,''.mb_strtoupper($denumire_institutie_abs, 'UTF-8'),1,0,'L');
	 
	 
      
    //                          III. Cerinte pt fac.  
      
      
     $pdf->SetLineWidth(0.5);
	 $pdf->Line(10, 198, 210-10, 198);   
      
     $pdf->Ln(20);
	 $pdf->SetFont('DejaVu','B',10);
	 $pdf->Cell(10);
      
	 $pdf->Cell(0,0,'III. CERINȚE SPECIFICE FACULTĂȚII',0,1);
	 $pdf->SetLineWidth(0);
	 $pdf->Line(20, 204, 210-20, 204); 
	 
	 $pdf->Ln(8);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',8);

	  $pdf->Cell(10);
	  $pdf->MultiCell(90, 6, 'Media generală la examenul de bacalaureat', 1, 1);
	  $pdf->SetXY($x + 100, $y);
	  $pdf->MultiCell(80, 6,'Media la disciplină mate/info',1,  1);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',7);

	  $pdf->Cell(10);
	  $pdf->MultiCell(90, 6, ''.$medie_generala_bac, 1, 1);
	  $pdf->SetXY($x + 100, $y);
	  $pdf->MultiCell(80, 6,''.$medie_disciplina_max,1,  1);
	  
	 //Echivalare cu diploma MEN
	 
	 $raspuns_echiv_olimp = 'NU';
	 if($solicita_echivalare == 1) $raspuns_echiv_olimp = 'DA';
	 
	  $pdf->Ln(4);
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
	 $pdf->MultiCell(70, 6, 'Opțiunea pentru testul scris', 1, 1);
	 $pdf->SetXY($x + 80, $y);
	 $pdf->MultiCell(100, 6,'Solicitați echivalare cu diploma olimpiadă organizată MEN',1,  1);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',7);

     $pdf->Cell(10);
	 $pdf->MultiCell(70, 6, ''.$optiune_test_scris, 1, 1);
	 $pdf->SetXY($x + 80, $y);
	 $pdf->MultiCell(100, 6,''.$raspuns_echiv_olimp,1,  1);
      
     //             Pentru examenul de preadmitere
     
	 $raspuns_particip_preadmitere = 'NU';
	 if($vrea_nota_preadmitere == 1) $raspuns_particip_preadmitere = 'DA';
	 
	 $raspuns_doreste_sa_dea_din_nou = 'NU';
	 if($vrea_sa_sustina_examen == 1) $raspuns_doreste_sa_dea_din_nou = 'DA';
	 
     $pdf->Ln(4);
     $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',7.6);
	 $pdf->Cell(10);
	 $pdf->MultiCell(105, 6, 'Particip. la preadmiterea din '.$an_participare_preadmitere.' și doreste luarea în considerare', 1, 1);
	 $pdf->SetXY($x + 115, $y);
	 $pdf->MultiCell(65, 6,'Dorește să susțină din nou testul scris',1,  1);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',7);

     $pdf->Cell(10);
	 $pdf->MultiCell(105, 6, ''.$raspuns_particip_preadmitere, 1, 1);
	 $pdf->SetXY($x + 115, $y);
	 $pdf->MultiCell(65, 6,''.$raspuns_doreste_sa_dea_din_nou,1,  1);
      
	  //Linie footer pagina  3
	 
	  $pdf->SetLineWidth(0.5);
	  $pdf->Line(20, 270, 210-20, 270);    
	  
	 
	 //Pagina 4
	 
	  $pdf->AddPage();
	  $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 15, 210-10, 15);

	  $pdf->Ln(8);
	  $pdf->SetFont('DejaVu','B',10);
	  $pdf->Cell(10);

      
      
      //Preferinte
      
      
	  $pdf->Cell(0,0,'IV. OPȚIUNEA DE ADMITERE, ÎN ORDINEA PREFERINȚELOR',0,1);
	  $pdf->SetLineWidth(0);
	  $pdf->Line(21, 20, 210-20, 21);

      
      $pdf->Ln(8.5); 
      $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',8);
	  $pdf->Cell(65);
	  $pdf->MultiCell(60, 6, 'Ordinea preferințelor', 1, 1);
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',7);
	 $pdf->Cell(65);
     $pdf->MultiCell(60, 6, ''.$preferinta_1, 1, 1);
     
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',7);
	 $pdf->Cell(65);
     $pdf->MultiCell(60, 6, ''.$preferinta_2, 1, 1);
      
	 $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',7);
	 $pdf->Cell(65);
     $pdf->MultiCell(60, 6, ''.$preferinta_3, 1, 1); 
	 
	 $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',7);
	 $pdf->Cell(65);
     $pdf->MultiCell(60, 6, ''.$preferinta_4, 1, 1);
      
	  $pdf->Ln(2);

	  $pdf->SetFont('DejaVu','B',8);
	  $pdf->Cell(0,10,'Acceptarea înmatriculării în caz că nu a fost admis pe buget',0,0,'C');

	  $pdf->Ln(8);
	  $pdf->Cell(69.5);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->Cell(50,6,''.$stare_taxa,1,0,'C');
	  
      
      //        Informatii privind some stuff..
      
      
      $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 82, 210-10, 82);

	  $pdf->Ln(19);
	  $pdf->Cell(10);

      
      
      //Preferinte
      
      $pdf->SetFont('DejaVu','B',10);
	  $pdf->Cell(0,0,'V. INFORMAȚII PRIVIND DOCUMENTELE DE STUDII DEPUSE LA DOSAR',0,1);
	  $pdf->SetLineWidth(0);
	  $pdf->Line(20, 88, 210-20, 88);
      
      
      //Informatii privind doc. de studii depuse la dosar
     
	 $raspuns_diploma_bac_original = 'NU';
	 $raspuns_diploma_bac_copie = 'NU';
	 $raspuns_adeverinta_original = 'NU';
	 $raspuns_adeverinta_copie = 'NU';
	 $raspuns_echiv_studii_original = 'NU';
	 $raspuns_echiv_studii_copie = 'NU';
	 $raspuns_diploma_olimpiada = 'NU'; 
	 
	 if($diploma_bac_original == 1) $raspuns_diploma_bac_original = 'DA';
     else $raspuns_diploma_bac_copie = 'DA';
	 if($adeverinta_original == 1) $raspuns_adeverinta_original = 'DA';
     else $raspuns_adeverinta_copie = 'DA';
	 if($document_echiv_studii_original == 1) $raspuns_echiv_studii_original = 'DA';
	 else $raspuns_echiv_studii_copie = 'DA';
	 if($diploma_olimpiada == 1) $raspuns_diploma_olimpiada = 'DA';
	 
      $pdf->Ln(8.5); 
      $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',8);
	  $pdf->Cell(57);
	  $pdf->MultiCell(64, 6, 'Diplomă de BAC (original)', 1, 1);
	  $pdf->SetXY($x + 121, $y);
      $pdf->SetFont('DejaVu','B',7);
	  $pdf->MultiCell(10, 6,''.$raspuns_diploma_bac_original,1,  1);
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(57);
     $pdf->MultiCell(64, 6, 'Diplomă de BAC (copie legaliz)', 1, 1);
     $pdf->SetXY($x + 121, $y);
     $pdf->SetFont('DejaVu','B',7);
     $pdf->MultiCell(10, 6,''.$raspuns_diploma_bac_copie,1,  1);
     
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(57);
     $pdf->MultiCell(64, 6, 'Adeverință (original)', 1, 1);
	 $pdf->SetXY($x + 121, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(10, 6,''.$raspuns_adeverinta_original,1,  1);
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(57);
     $pdf->MultiCell(64, 6, 'Adeverință (copie legaliz)', 1, 1);
	 $pdf->SetXY($x + 121, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(10, 6,''.$raspuns_adeverinta_copie,1,  1);
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(57);
     $pdf->MultiCell(64, 6, 'Document echiv. studii (original)', 1, 1);
	 $pdf->SetXY($x + 121, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(10, 6,''.$raspuns_echiv_studii_original,1,  1);
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(57);
     $pdf->MultiCell(64, 6, 'Document echiv. studii (copie legaliz)', 1, 1);
	 $pdf->SetXY($x + 121, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(10, 6,''.$raspuns_echiv_studii_copie,1,  1);
    
	 $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(57);
     $pdf->MultiCell(64, 6, 'Diplomă de olimpiadă (original)', 1, 1);
	 $pdf->SetXY($x + 121, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(10, 6,''.$raspuns_diploma_olimpiada,1,  1);
      
	 //Participa la alte concursuri
	 $raspuns_altundeva = 'NU';
	 if($participa_altundeva == 1) $raspuns_altundeva = 'DA';
	 
     $pdf->Ln(7);
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',7.6);
	 $pdf->Cell(57);
     $pdf->MultiCell(64, 6, 'Particip. la alt/e concurs/uri de admitere', 1, 1);
	 $pdf->SetXY($x + 121, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(10, 6,''.$raspuns_altundeva,1,  1); 
      
      
    
      $pdf->Ln(2);
	 $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(0,10,'La ce alte concursuri de admitere participă',0,0,'C');

     $pdf->Ln(7); 
     $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
     $pdf->MultiCell(95, 6, 'Universitatea', 1, 1);
     $pdf->SetXY($x + 105, $y);
	 $pdf->MultiCell(75, 6,'Domeniul/Specializarea',1,  1);
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',7);
	 $pdf->Cell(10);
     $pdf->MultiCell(95, 6, ''.mb_strtoupper($universitate1, 'UTF-8'), 1, 1);
	 $pdf->SetXY($x + 105, $y);
	 $pdf->MultiCell(75, 6,''.$facultate1,1,  1);
      
     
     $x = $pdf->GetX();
     $y = $pdf->GetY();

	 $pdf->Cell(10);
     $pdf->MultiCell(95, 6, ''.mb_strtoupper($universitate2, 'UTF-8'), 1, 1);
	 $pdf->SetXY($x + 105, $y);
	 $pdf->MultiCell(75, 6,''.$facultate2,1,  1);
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();
     
	 $pdf->Cell(10);
     $pdf->MultiCell(95, 6, ''.mb_strtoupper($universitate3, 'UTF-8'), 1, 1);
	 $pdf->SetXY($x + 105, $y);
	 $pdf->MultiCell(75, 6,''.$facultate3,1,  1);
      
      
	 $pdf->SetLineWidth(0.5);
	 $pdf->Line(10, 194.5, 210-10, 194.5);

	 $pdf->Ln(16);
	 $pdf->SetFont('DejaVu','B',10);
	 $pdf->Cell(10);

	 $pdf->Cell(0,0,'VI. CONDIȚII DE ÎNCHEIERE A CONTRACTULUI',0,1);
	 $pdf->SetLineWidth(0);
	 $pdf->Line(20, 200, 210-20, 200); 
	  
	 $pdf->Ln(6);
	 $pdf->Cell(15);
	  $pdf->SetFont('DejaVu','B',8);
	  $pdf->Cell(0,10,'Taxe',0,0,'L');
	  
	  $pdf->Ln(6);
	  $pdf->Cell(25);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->Cell(0,10,'-Taxă de înscriere: 300 Ron',0,0,'L');
	  
	  $pdf->Ln(4);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'Pentru participanții la edițiile anterioare ale concursului elevilor de liceu care nu vor susține din nou',0,0,'L');
	 
	  $pdf->Ln(4);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'testul scris, taxa de înscriere de la momentul concursului(100 RON) va fi scăzută din taxa de înscriere',0,0,'L');
	 
	  $pdf->Ln(4);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'la concursul de admitere.',0,0,'L');
	 
	  $pdf->Ln(5);
	  $pdf->Cell(25);
	  $pdf->Cell(0,10,'-Taxă de școlarizare: 3500 Ron',0,0,'L');
	  
	  
	  $pdf->Ln(6);
	  $pdf->Cell(15);
	  $pdf->SetFont('DejaVu','B',8);
	  $pdf->Cell(0,10,'Acte necesare',0,0,'L');
	  
	  $pdf->Ln(6);
	  $pdf->Cell(25);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->Cell(0,10,'-fișă de înscriere',0,0,'L');
	  
	  $pdf->Ln(5);
	  $pdf->Cell(25);
	  $pdf->Cell(0,10,'-trei fotografii tip buletin de identitate',0,0,'L');
	  
	  $pdf->Ln(5);
	  $pdf->Cell(25);
	  $pdf->Cell(0,10,'-diplomă de bacalaureat sau echivalentă cu aceasta, recunoscută de M.E.N.C.S.',0,0,'L');
	  
	  $pdf->Ln(5);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'-candidații care au promovat examenul de bacalaureat în sesiunea iunie-iulie 2017 pot prezenta la înscriere', 0, 0, 'L');
      
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'în locul diplomei de bacalaureat, adeverința eliberată de liceu, în care se mentionează atât media generală, cât ',0,0,'L');
	 
	  $pdf->Ln(5);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'și notele obținute la probele susținute și notele la disciplinele care se iau în calcul la stabilirea mediei',0,0,'L');
	 
	 
       //Linie pt footer
 
	  $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 270.5, 210-10, 270.5);
	 
      //Pagina noua
      
      $pdf->AddPage();
	  $pdf->Ln(7);
	  $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 15, 210-10, 15);
	  $pdf->SetLineWidth(0);
	 
	  $pdf->Ln(5);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'-dacă un candidat nu depune la o specializare diploma în original, va depune și o adeverință de la',0,0,'L');
	 
	  $pdf->Ln(5);
	  $pdf->Cell(33);
	  $pdf->Cell(0,10,' facultatea unde are actele în original',0,0,'L');
	 
	  $pdf->Ln(5);
	  $pdf->Cell(25);
	  $pdf->Cell(0,10,'-original și copie după cartea de identitate (care atestă domiciliul în România) sau pașaport',0,0,'L');
	 
	  $pdf->Ln(5);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'(pentru candidații din țările membre UE, SEE și Elveția)',0,0,'L');
	  
	  $pdf->Ln(5);
	  $pdf->Cell(25);
	  $pdf->Cell(0,10,'-original și copie după certificatul de naștere',0,0,'L');
	  
	  $pdf->Ln(5);
	  $pdf->Cell(25);
	  $pdf->Cell(0,10,'-original și copie după cerificatul de căsătorie sau documentul care atestă schimbarea numelui(dacă este cazul)',0,0,'L');
	  
	  $pdf->Ln(5);
	  $pdf->Cell(25);
	  $pdf->Cell(0,10,'-adeverință medicală tip (eliberată de medicul de familie)',0,0,'L');
	  
	  $pdf->Ln(5);
	  $pdf->Cell(25);
	  $pdf->Cell(0,10,'-chitanță care dovedește plata taxei de înscriere sau actele necesare pentru sctutirea de plata taxei',0,0,'L');
	  
	  $pdf->Ln(5);
	  $pdf->Cell(25);
	  $pdf->Cell(0,10,'-dosar plic',0,0,'L');
	  
	  $pdf->Ln(5);
	  $pdf->Cell(25);
	  $pdf->Cell(0,10,'-Candidații cetățeni români cu domiciliul în Romania, dar cu studii efectuate în străinătate',0,0,'L');
	 
	  $pdf->Ln(5);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'(inclusiv Republica Moldova) vor prezenta la înscriere diploma de bacalaureat echivalată ',0,0,'L');
	 
	  $pdf->Ln(5);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'de către M.E.N.C.S (CNRED)',0,0,'L');
	  
	  
      //    Chestionar
      
      $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 94.5, 210-10, 94.5);

	  $pdf->Ln(21);
	  $pdf->Cell(10);

      
      
      //Preferinte
      
      $pdf->SetFont('DejaVu','B',10);
	  $pdf->Cell(0,0,'VII. CHESTIONAR PRIVIND ALEGEREA DUMNEAVOASTRĂ',0,1);
	  $pdf->SetLineWidth(0);
	  $pdf->Line(20, 100.5, 210-20, 100.5);
      
      //Prima intrebare
      
      $pdf->Ln(4);
      $pdf->Cell(10);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->Cell(20,10,' De unde ați aflat despre admiterea la Universitatea',0,0,'L');
      
      $pdf->Cell(155,10,'Cat de importanti au fost urmatorii factori in alegerea facultatii,',0,0,'R');  
      
      $pdf->Ln(4);
      $pdf->Cell(10);
      $pdf->Cell(20,10,'"Alexandru Ioan Cuza" din Iași (UAIC)?',0,0,'L');
      
      $pdf->Cell(148,10,'apreciati cat de mult a contat fiecare in optiunea dv. privind',0,0,'R');
      
      $pdf->Ln(4);
      $pdf->Cell(121,10,'alegerea facultatii?',0,0,'R');
     
      $pdf->Ln(10); 
      $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',8);
	  $pdf->Cell(10);
	  $pdf->MultiCell(62, 6, 'Surse de informare', 1, 1);
	  $pdf->SetXY($x + 72, $y);
	  $pdf->MultiCell(15, 6,'Bifati',1,  1);
      
      
      //Chestionar 2 linia 1
      $x = $pdf->GetX();

	  $pdf->SetXY($x + 98, $y);
	  $pdf->MultiCell(62, 6, 'Factorii care v-au influențat', 1, 1);
	  $pdf->SetXY($x + 160, $y);
	  $pdf->MultiCell(20, 6,'Importanța',1,  1);      
      
	 $site_admitere_raspuns = '';
	 if($site_admitere == 1) $site_admitere_raspuns = 'X';
	 
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
     $pdf->MultiCell(62, 6, 'Site-ul dedicat admiterii', 1, 1);
     $pdf->SetXY($x + 72, $y);
     $pdf->SetFont('DejaVu','B',7);
     $pdf->MultiCell(15, 6,''.$site_admitere_raspuns,1,  1);
     
     //Chestionar 2 linia 2
      $x = $pdf->GetX();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->SetXY($x + 98, $y);
	 $pdf->MultiCell(62, 6, 'Prestigiul Universitatii/facultatii', 1, 1);
     $pdf->SetXY($x + 160, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(20, 6,''.$prestigiu,1,  1);
      
	 $site_facultate_raspuns = '';
	 if($site_facultate == 1) $site_facultate_raspuns = 'X';
	 
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
     $pdf->MultiCell(62, 6, 'Site-ul facultatii', 1, 1);
	 $pdf->SetXY($x + 72, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(15, 6,''.$site_facultate_raspuns,1,  1);
      
     //Chestionar 2 linia 3
      $x = $pdf->GetX();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->SetXY($x + 98, $y);
	 $pdf->MultiCell(62, 6, 'Calitatea educatiei la UAIC ', 1, 1);
     $pdf->SetXY($x + 160, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(20, 6,''.$calitate,1,  1); 
      
	 $brosura_pliant_raspuns = '';
	 if($brosura_pliant == 1) $brosura_pliant_raspuns = 'X';
	 
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
     $pdf->MultiCell(62, 6, 'Brosura sau pliant despre admitere', 1, 1);
	 $pdf->SetXY($x + 72, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(15, 6,''.$brosura_pliant_raspuns,1,  1);

     //Chestionar 2 linia 4
      $x = $pdf->GetX();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->SetXY($x + 98, $y);
	 $pdf->MultiCell(62, 6, 'Sfatul persoanelor apropiate ', 1, 1);
     $pdf->SetXY($x + 160, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(20, 6,''.$sfat_persoane,1,  1);  

	 $pagina_facebook_raspuns = '';
	 if($pagina_facebook == 1) $pagina_facebook_raspuns = 'X';
	 
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
     $pdf->MultiCell(62, 6, 'Pagina de Facebook a Universitatii', 1, 1);
	 $pdf->SetXY($x + 72, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(15, 6,''.$pagina_facebook_raspuns,1,  1);
     
      //Chestionar 2 linia 5
      $x = $pdf->GetX();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->SetXY($x + 98, $y);
	 $pdf->MultiCell(62, 6, 'Statutul profesiei pentru care optati', 1, 1);
     $pdf->SetXY($x + 160, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(20, 6,''.$statut_profesie,1,  1);   
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

	 $prieteni_raspuns = '';
	 if($prieteni == 1) $prieteni_raspuns = 'X';
	 
     $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
     $pdf->MultiCell(62, 6, 'Prieteni, cunostinte, rude', 1, 1);
	 $pdf->SetXY($x + 72, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(15, 6,''.$prieteni_raspuns,1,  1);
     
      //Chestionar 2 linia 6
      $x = $pdf->GetX();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->SetXY($x + 98, $y);
	 $pdf->MultiCell(62, 6, 'Colegii', 1, 1);
     $pdf->SetXY($x + 160, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(20, 6,''.$colegii,1,  1);   
      
	 $sapatamana_portilor_raspuns = '';
	 if($sapatamana_portilor == 1) $sapatamana_portilor_raspuns = 'X';
	 
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
     $pdf->MultiCell(62, 6, 'Saptamana Portilor Deschise la UAIC', 1, 1);
	 $pdf->SetXY($x + 72, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(15, 6,''.$sapatamana_portilor_raspuns,1,  1);
      
      //Chestionar 2 linia 7
      $x = $pdf->GetX();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->SetXY($x + 98, $y);
	 $pdf->MultiCell(62, 6, 'Materiile care se studiaza', 1, 1);
     $pdf->SetXY($x + 160, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(20, 6,''.$materiile,1,  1);    
      
	 $prezentare_in_liceu_raspuns = '';
	 if($prezentare_in_liceu == 1) $prezentare_in_liceu_raspuns = 'X';
	 
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
     $pdf->MultiCell(62, 6, 'Am participat la o prezentare in liceu', 1, 1);
	 $pdf->SetXY($x + 72, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(15, 6,''.$prezentare_in_liceu_raspuns,1,  1);
     
      //Chestionar 2 linia 8
      $x = $pdf->GetX();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->SetXY($x + 98, $y);
	 $pdf->MultiCell(62, 6, 'Informatiile furnizate de Universitate', 1, 1);
     $pdf->SetXY($x + 160, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(20, 6,''.$informatiile_universitatii,1,  1);  
      
	 $profesori_raspuns = '';
	 if($profesori == 1) $profesori_raspuns = 'X';
	 
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
     $pdf->MultiCell(62, 6, 'Profesorii din liceu', 1, 1);
	 $pdf->SetXY($x + 72, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(15, 6,''.$profesori_raspuns,1,  1);
     
      //Chestionar 2 linia 9
      $x = $pdf->GetX();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->SetXY($x + 98, $y);
	 $pdf->MultiCell(62, 6, 'Apropierea de domiciliu', 1, 1);
     $pdf->SetXY($x + 160, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(20, 6,''.$apropierea,1,  1);  
      
	 $presa_raspuns = '';
	 if($presa == 1) $presa_raspuns = 'X';
	 
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
     $pdf->MultiCell(62, 6, 'Presa', 1, 1);
	 $pdf->SetXY($x + 72, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(15, 6,''.$presa_raspuns,1,  1);
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
     $pdf->MultiCell(62, 6, 'Alte surse (mentionati care)', 1, 1);
	 $pdf->SetXY($x + 72, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(15, 6,''.$alte_surse,1,  1);
     
     //VIII
      
     $pdf->SetFont('DejaVu','B',8);
     $pdf->Ln(7);
	 $pdf->Cell(10);
	 $pdf->Cell(0,10,'VIII. Declar pe propria raspundere, cunoscand consecintele administrative și juridice ale declarațiilor',0,0,'L');
     $pdf->Ln(5);
     $pdf->Cell(10);
	 $pdf->Cell(0,10,'inexacte/false, că datele furnizate în această fișă sunt conforme cu realitatea și că am luat la ',0,0,'L');
     $pdf->Ln(5);
     $pdf->Cell(10);
	 $pdf->Cell(0,10,'cunoștință prevederile metodologiei de admitere.',0,0,'L');
     
      
     //IX
      
      $pdf->SetFont('DejaVu','B',8);
     $pdf->Ln(11);
	 $pdf->Cell(10);
	 $pdf->Cell(0,10,'IX. Datele declarate de Dumneavoastră sunt prelucrate de Universitatea "Alexandru Ioan Cuza" din,',0,0,'L');
     $pdf->Ln(5);
     $pdf->Cell(10);
	 $pdf->Cell(0,10,'Iași, în conformitate cu prevederile Legii 677/2001, privind protecția persoanelor cu privire la',0,0,'L');
     $pdf->Ln(5);
     $pdf->Cell(10);
	 $pdf->Cell(0,10,'prelucrarea datelor cu caracter personal și libera circulație a acestor date, modificată și completată.',0,0,'L');
      
     $pdf->Ln(30);
	 $x = $pdf->GetX();
     $y = $pdf->GetY();
      
	 $pdf->Cell(10);
     $pdf->SetFont('DejaVu','B',8);
	 $pdf->MultiCell(85, 6, 'Semnatura ................................', 0, 1);
     $pdf->SetXY($x + 110, $y);
	 $pdf->MultiCell(70, 6,'Data ......................................', 0,  1); 
	 
	 //Footer pagina 5
      
	  $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 270, 210-10, 270);
	  $pdf->SetLineWidth(0);
	  $pdf->Output();
            
         }
 

?>