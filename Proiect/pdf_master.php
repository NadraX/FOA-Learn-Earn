
<?php
header('Content-type: text/plain; charset=utf-8');
 if(isset($_POST['Submit'])) {
require('FPDF/fpdf.php');
class PDF extends FPDF
{

function Header()
{
    $id_formular=$_POST['id_formular'];
      $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
      $s = oci_parse($c, " BEGIN  SELECT nr_chitanta, suma, scutit, motiv_scutire INTO :nr_chitanta, :suma, :scutit, :motiv_scutire FROM Formular_master WHERE id='$id_formular'; END; ");
      oci_bind_by_name($s, ":nr_chitanta", $nr_chitanta, 100);
      oci_bind_by_name($s, ":suma", $suma, 100);
      oci_bind_by_name($s, ":scutit", $scutit, 100);
      oci_bind_by_name($s, ":motiv_scutire", $motiv_scutire, 100);
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
    $this->Ln(10);
	$this->Cell(65);
	$this->SetFont('Arial','B',12);
	$this->Cell(50, 20, 'FISA DE INSCRIERE - ADMITERE SESIUNEA', 0, 0, 'C');
	$this->Cell(27);
	$this->SetFont('Arial','BU',12);
	$this->Cell(10, 20, 'IULIE 2017', 0, 0, 'C');
	
	$this->Ln(5);
	$this->Cell(76);
	$this->SetFont('Arial','B',10);
	$this->Cell(50, 20, 'Studii universitare de MASTER - forma de invatamant:', 0, 0, 'C');
	
	$this->Ln(5);
	$this->Cell(76.5);
	$this->SetFont('Arial','I',9);
	$this->Cell(50, 20, 'invatamant cu frecventa; invatamant cu frecventa redusa', 0, 0, 'C');
	
	$this->Ln(10);
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
	$this->Cell(20);
	$x = $this->GetX();
	$y = $this->GetY();
	
	$this->SetFont('Arial','B',10);
	$this->MultiCell(34, 10, 'Taxa de inscriere', 1, 1);
	$this->SetXY($x + 34, $y);
	$this->SetFont('Arial','',10);
	$this->MultiCell(30, 10,'Chitanta nr.'.$nr_chitanta,1,  1);
	$this->SetXY($x + 64, $y);	
	$this->MultiCell(20, 10,'Suma '.$suma,1,  1);
    $this->SetXY($x + 84, $y);	
	$this->MultiCell(25, 10,'Scutit: '.$scutit,1,  1);
    $this->SetXY($x + 109, $y);	
	$this->MultiCell(40, 10,'Motivul scutirii:'.$motiv_scutire,1,  1);

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
                                  dpc.cetatenia, dpc.nationalitate, dpc.etnie, dpc.limba_materna,
                                  dpc.stare_civila, dpc.serie_ci, dpc.numar_ci, dpc.eliberat_de, dpc.data_eliberarii,
                                  dpc.data_expirarii, dpc.mediu_domiciliu, dpc.tara_domiciliu, dpc.judet_domiciliu, dpc.localitate_domiciliu,
                                  dpc.strada, dpc.numar,
                                  dpc.bloc, dpc.scara, dpc.etaj, dpc.apartament, dpc.cod_postal, dpc.telefon, dpc.email, dpc.solicita_cazare_studii,dpc.orfan_de_ambii_parinti, dpc.orfan_de_un_parinte, dpc.provenit_case_de_copii, dpc.provenit_plasament_familial, dpc.provenit_familie_monoparentala, dpc.persoana_cu_dizabilitati,
                                  
                                  dpl.liceul_absolvit, dpl.tara_liceu, dpl.localitate_liceu,
                                  dpl.judet_liceu, dpl.profil_liceu, dpl.durata_studiilor_liceu, dpl.anul_absolvirii_liceu, dpl.forma_invatamant_liceu, dpl.serie_diploma_bac, dpl.nr_diploma_bac, dpl.emisa_de_liceu, dpl.data_emiterii_diploma, dpl.nr_foii_matricole, dpl.nr_act_rec_echiv, dpl.serie_act_rec_echiv, dpl.data_rec_echiv, dpl.tara_fac, dpl.localitate_fac, dpl.judet_fac, dpl.denumire_institutie_fac, dpl.denumire_domeniu_licenta, dpl.specializare,
                                  
                                  dpl.titlu_obtinut, dpl.forma_invatamant_fac, dpl.nr_sem_buget, dpl.nr_sem_bursa, dpl.durata_studii, dpl.diplo_licenta_serie, dpl.diplo_licenta_nr, dpl.dipl_emisa_de, dpl.dipl_data_emitere, dpl.nr_foaie_matricola, dpl.act_rec_licenta, dpl.nr_act_rec_licenta,
                                  dpl.serie_act_rec_licenta, dpl.data_act_rec_licenta, dpl.in_curs_student_alta_fac, dpl.in_curs_tara_master, dpl.in_curs_localitate_master, dpl.in_curs_judet_master, 
                                  dpl.in_curs_denum_instit_master, dpl.in_curs_denum_facultate_master, dpl.in_curs_denum_domeniu_master, dpl.in_curs_specializare_master, dpl.in_curs_forma_invat_master,
                                  
                                  dpl.in_curs_an_master, dpl.in_curs_nr_sem_buget_master, dpl.in_curs_nr_sem_bursa_master, dpl.absolvent_an, dpl.absolvent_tara, dpl.absolvent_localitate,  dpl.absolvent_judet, 
                                  dpl.absolvent_denumire_instit,  dpl.absolvent_denumire_facult,  dpl.absolvent_domeniu,  dpl.absolvent_specializare,  dpl.absolvent_forma_invat, dpl.absolvent_nr_sem_buget, 
                                  dpl.absolvent_nr_sem_bursa, dpl.absolvent_diplo_serie, dpl.absolvent_diplo_nr, dpl.absolvent_diplo_emisa_de, dpl.absolvent_dipl_data_emitere, dpl.absolvent_nr_foaie_matricola, 
                                  dpl.absolvent_act_rec_nr, dpl.absolvent_act_rec_serie, dpl.absolvent_act_rec_data_echiv, cl.medie_examen_licenta, cl.medie_admitere,
                                  ol.preferinta_1, ol.preferinta_2, ol.preferinta_3, ol.preferinta_4, ol.preferinta_5, ol.preferinta_6, ol.preferinta_7, ol.preferinta_8, ol.preferinta_9, ol.preferinta_10, ol.preferinta_11, ol.optiune_admitere_taxa, 
                                  il.diploma_bac_original, il.doc_echiv_preuniv_original, il.diploma_licenta_original, il.dipl_echiv_licenta_original, il.particip_altundeva, il.universitate1, il.facultate1, il.universitate2, il.facultate2, il.universitate3,  il.facultate3,
                                  ch.site_admitere, ch.site_facultate, ch.pagina_facebook, ch.prieteni, ch.presa, ch.alte_surse, ch.prestigiu, ch.calitate, ch.sfat_persoane, ch.statut_profesie, ch.colegii, ch.materiile, ch.informatiile_universitatii, ch.apropierea, ch.prof_facultate
                             
                                  
                                  INTO :nume_familie_nastere,
                                  :initialele_tatalui_mamei, :nume_familie_actual, :prenume_candidat, :prenume_tata, :prenume_mama, :cnp, :sex, :data_nasterii,
                                  :tara_nasterii, :judetul_nasterii, :localitatea_nasterii, :cetatenia, :nationalitate, :etnie, :limba_materna, :stare_civila, :serie_ci, :numar_ci,
                                  :eliberat_de, :data_eliberarii, :data_expirarii, :mediu_domiciliu, :tara_domiciliu, :judet_domiciliu, :localitate_domiciliu, :strada, :numar , :bloc , :scara , :etaj , :apartament , :cod_postal, :telefon , :email , :solicita_cazare_studii , :orfan_de_ambii_parinti , :orfan_de_un_parinte , :provenit_case_de_copii , :provenit_plasament_familial ,  :provenit_familie_monoparentala , :persoana_cu_dizabilitati ,
                                  
                                  :liceul_absolvit , :tara_liceu , :localitate_liceu , :judet_liceu , :profil_liceu , :durata_studiilor_liceu , :anul_absolvirii_liceu , :forma_invatamant_liceu , :serie_diploma_bac , :nr_diploma_bac , :emisa_de_liceu , :data_emiterii_diploma , :nr_foii_matricole, :nr_act_rec_echiv, :serie_act_rec_echiv, :data_rec_echiv , :tara_fac , :localitate_fac , :judet_fac , :denumire_institutie_fac , :denumire_domeniu_licenta , :specializare ,
                                  
                                  
                                  
                                  :titlu_obtinut , :forma_invatamant_fac , :nr_sem_buget , :nr_sem_bursa , :durata_studii , :diplo_licenta_serie , :diplo_licenta_nr , :dipl_emisa_de , :dipl_data_emitere , :nr_foaie_matricola , :act_rec_licenta , :nr_act_rec_licenta , :serie_act_rec_licenta , :data_act_rec_licenta , :in_curs_student_alta_fac , :in_curs_tara_master , :in_curs_localitate_master , :in_curs_judet_master, :in_curs_denum_instit_master , :in_curs_denum_facultate_master , :in_curs_denum_domeniu_master , :in_curs_specializare_master , :in_curs_forma_invat_master ,
                                  
                                  :in_curs_an_master , :in_curs_nr_sem_buget_master , :in_curs_nr_sem_bursa_master , :absolvent_an , :absolvent_tara , :absolvent_localitate , :absolvent_judet , :absolvent_denumire_instit, :absolvent_denumire_facult , :absolvent_domeniu , :absolvent_specializare , :absolvent_forma_invat , :absolvent_nr_sem_buget , 
                                  :absolvent_nr_sem_bursa , :absolvent_diplo_serie , :absolvent_diplo_nr , :absolvent_diplo_emisa_de , :absolvent_dipl_data_emitere, :absolvent_nr_foaie_matricola ,
                                  :absolvent_act_rec_nr , :absolvent_act_rec_serie , :absolvent_act_rec_data_echiv , :medie_examen_licenta , :medie_admitere , 
                                  :preferinta_1 , :preferinta_2 ,:preferinta_3 , :preferinta_4 , :preferinta_5 , :preferinta_6 , :preferinta_7 , :preferinta_8 , :preferinta_9 , :preferinta_10 , :preferinta_11 , :optiune_admitere_taxa ,
                                  
                                  :diploma_bac_original , :doc_echiv_preuniv_original , :diploma_licenta_original , :dipl_echiv_licenta_original, :participa_altundeva , :universitate1, :facultate1, :universitate2, :facultate2, :universitate3, :facultate3, 
                                  :site_admitere , :site_facultate, :pagina_facebook , :prieteni, :presa , :alte_surse , :prestigiu , :calitate , :sfat_persoane , :statut_profesie , :colegii , :materiile , :informatiile_universitatii , :apropierea, :prof_facultate


                                  FROM Date_personale_master dpc
                                                 
                                                 JOIN Formular_master f ON f.id=dpc.formular_id
                                                 JOIN Date_preg_anterioara_master dpl ON dpl.formular_id = f.id
                                                 
                                                 JOIN Cerinte_master cl ON cl.formular_id = f.id
                                                 JOIN Ordine_preferinte_master ol ON ol.formular_id = f.id
                                                 JOIN Informatii_documente_master il ON il.formular_id = f.id
                                                 JOIN Chestionar_master ch ON ch.formular_id = f.id
                                                 
                                                 WHERE f.id='$id_formular'; END; ");

     
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
      oci_bind_by_name($s, ":serie_ci", $serie_ci, 100);
      oci_bind_by_name($s, ":numar_ci", $numar_ci, 100);
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
      oci_bind_by_name($s, ":orfan_de_ambii_parinti", $orfan_de_ambii_parinti, 100);
      oci_bind_by_name($s, ":orfan_de_un_parinte", $orfan_de_un_parinte, 100);
      oci_bind_by_name($s, ":provenit_case_de_copii", $provenit_case_de_copii, 100);
      oci_bind_by_name($s, ":provenit_plasament_familial", $provenit_plasament_familial, 100);
      oci_bind_by_name($s, ":provenit_familie_monoparentala", $provenit_familie_monoparentala, 100);
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
     oci_bind_by_name($s, ":emisa_de_liceu", $emisa_de_liceu, 100);
     oci_bind_by_name($s, ":data_emiterii_diploma", $data_emiterii_diploma, 100);
     oci_bind_by_name($s, ":nr_foii_matricole", $nr_foii_matricole, 100);
     oci_bind_by_name($s, ":nr_act_rec_echiv", $nr_act_rec_echiv, 100);
     oci_bind_by_name($s, ":serie_act_rec_echiv", $serie_act_rec_echiv, 100);
     oci_bind_by_name($s, ":data_rec_echiv", $data_rec_echiv, 100);
     oci_bind_by_name($s, ":tara_fac", $tara_fac, 100);
     oci_bind_by_name($s, ":localitate_fac", $localitate_fac, 100);
     oci_bind_by_name($s, ":judet_fac", $judet_fac, 100);
     oci_bind_by_name($s, ":denumire_institutie_fac", $denumire_institutie_fac, 100);
     oci_bind_by_name($s, ":specializare", $specializare, 100);
     
     oci_bind_by_name($s, ":denumire_domeniu_licenta", $denumire_domeniu_licenta, 100);
     
     
     
     
     oci_bind_by_name($s, ":titlu_obtinut", $titlu_obtinut, 100);
     oci_bind_by_name($s, ":forma_invatamant_fac", $forma_invatamant_fac, 100);
     oci_bind_by_name($s, ":nr_sem_buget", $nr_sem_buget, 100);
     oci_bind_by_name($s, ":nr_sem_bursa", $nr_sem_bursa, 100);
     oci_bind_by_name($s, ":durata_studii", $durata_studii, 100);
     oci_bind_by_name($s, ":diplo_licenta_serie", $diplo_licenta_serie, 100);
     oci_bind_by_name($s, ":diplo_licenta_nr", $diplo_licenta_nr, 100);
     oci_bind_by_name($s, ":dipl_emisa_de", $dipl_emisa_de, 100);
     oci_bind_by_name($s, ":dipl_data_emitere", $data_emitere, 100);
     oci_bind_by_name($s, ":nr_foaie_matricola", $nr_foaie_matricola, 100);
     oci_bind_by_name($s, ":act_rec_licenta", $act_rec_licenta, 100);
     oci_bind_by_name($s, ":nr_act_rec_licenta", $nr_act_rec_licenta, 100);
     oci_bind_by_name($s, ":serie_act_rec_licenta", $serie_act_rec_licenta, 100);
     oci_bind_by_name($s, ":data_act_rec_licenta", $data_act_rec_licenta, 100);
     oci_bind_by_name($s, ":in_curs_student_alta_fac", $in_curs_student_alta_fac, 100);
     oci_bind_by_name($s, ":in_curs_tara_master", $in_curs_tara_master, 100);
     oci_bind_by_name($s, ":in_curs_localitate_master", $in_curs_localitate_master, 100);
     oci_bind_by_name($s, ":in_curs_judet_master", $in_curs_judet_master, 100);
     
     oci_bind_by_name($s, ":in_curs_denum_instit_master", $in_curs_denum_instit_master, 100);
     oci_bind_by_name($s, ":in_curs_denum_facultate_master", $in_curs_denum_facultate_master, 100);
     oci_bind_by_name($s, ":in_curs_denum_domeniu_master", $in_curs_denum_domeniu_master, 100);
     oci_bind_by_name($s, ":in_curs_specializare_master", $in_curs_specializare_master, 100);
     oci_bind_by_name($s, ":in_curs_forma_invat_master", $in_curs_forma_invat_master, 100);
     oci_bind_by_name($s, ":in_curs_an_master", $in_curs_an_master, 100);
     oci_bind_by_name($s, ":in_curs_nr_sem_buget_master", $in_curs_nr_sem_buget_master, 100);
     oci_bind_by_name($s, ":in_curs_nr_sem_bursa_master", $in_curs_nr_sem_bursa_master, 100);
     oci_bind_by_name($s, ":absolvent_an", $absolvent_an, 100);
     
     
     
     
     oci_bind_by_name($s, ":absolvent_tara", $absolvent_tara, 100);
     oci_bind_by_name($s, ":absolvent_localitate", $absolvent_localitate, 100);
     oci_bind_by_name($s, ":absolvent_judet", $absolvent_judet, 100);
     oci_bind_by_name($s, ":absolvent_denumire_instit", $absolvent_denumire_instit, 100);
     oci_bind_by_name($s, ":absolvent_denumire_facult", $absolvent_denumire_facult, 100);
     oci_bind_by_name($s, ":absolvent_domeniu", $absolvent_domeniu, 100);
     oci_bind_by_name($s, ":absolvent_specializare", $absolvent_specializare, 100);
     oci_bind_by_name($s, ":absolvent_forma_invat", $absolvent_forma_invat, 100);
     oci_bind_by_name($s, ":absolvent_nr_sem_buget", $absolvent_nr_sem_buget, 100);
     oci_bind_by_name($s, ":absolvent_nr_sem_bursa", $absolvent_nr_sem_bursa, 100);
     oci_bind_by_name($s, ":absolvent_diplo_serie", $absolvent_diplo_serie, 100);
     oci_bind_by_name($s, ":absolvent_diplo_nr", $absolvent_diplo_nr, 100);
     oci_bind_by_name($s, ":absolvent_diplo_emisa_de", $absolvent_diplo_emisa_de, 100);
     oci_bind_by_name($s, ":absolvent_dipl_data_emitere", $absolvent_dipl_data_emitere, 100);
     oci_bind_by_name($s, ":absolvent_nr_foaie_matricola", $absolvent_nr_foaie_matricola, 100);
     oci_bind_by_name($s, ":absolvent_act_rec_nr", $absolvent_act_rec_nr, 100);
     oci_bind_by_name($s, ":absolvent_act_rec_serie", $absolvent_act_rec_serie, 100);
     oci_bind_by_name($s, ":absolvent_act_rec_data_echiv", $absolvent_act_rec_data_echiv, 100);
     
     
     //Cerinte licenta
     
     oci_bind_by_name($s, ":medie_examen_licenta", $medie_examen_licenta, 100);
     oci_bind_by_name($s, ":medie_admitere", $medie_admitere, 100);
     
     //Optiuni_licenta
     
     oci_bind_by_name($s, ":preferinta_1", $preferinta_1, 100);
     oci_bind_by_name($s, ":preferinta_2", $preferinta_2, 100);
     oci_bind_by_name($s, ":preferinta_3", $preferinta_3, 100);
     oci_bind_by_name($s, ":preferinta_4", $preferinta_4, 100);
     oci_bind_by_name($s, ":preferinta_5", $preferinta_5, 100);
     oci_bind_by_name($s, ":preferinta_6", $preferinta_6, 100);
     oci_bind_by_name($s, ":preferinta_7", $preferinta_7, 100);
     oci_bind_by_name($s, ":preferinta_8", $preferinta_8, 100);
     oci_bind_by_name($s, ":preferinta_9", $preferinta_9, 100);
     oci_bind_by_name($s, ":preferinta_10", $preferinta_10, 100);
     oci_bind_by_name($s, ":preferinta_11", $preferinta_11, 100);
     oci_bind_by_name($s, ":optiune_admitere_taxa", $optiune_admitere_taxa, 100);
     
     //Info doc licenta
     
     oci_bind_by_name($s, ":diploma_bac_original", $diploma_bac_original, 100);
     oci_bind_by_name($s, ":doc_echiv_preuniv_original", $doc_echiv_preuniv_original, 100);
     oci_bind_by_name($s, ":diploma_licenta_original", $diploma_licenta_original, 100);
     oci_bind_by_name($s, ":dipl_echiv_licenta_original", $dipl_echiv_licenta_original, 100);
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
     oci_bind_by_name($s, ":pagina_facebook", $pagina_facebook, 100);
     oci_bind_by_name($s, ":prieteni", $prieteni, 100);
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
     oci_bind_by_name($s, ":prof_facultate", $profesori, 100);
        
     
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

	  $pdf->Cell(0,0,'I. INFORMATII GENERALE',0,1);
	  $pdf->SetLineWidth(0);
	  $pdf->Line(20, 77, 210-20, 77);

	  $pdf->Ln(3);

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
	  
	  $pdf->Ln(10);
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

	  $pdf->Ln(7);
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
	  
	  $pdf->SetFont('Times','BI',10);
	  $pdf->Cell(0,10,'10. Starea civila',0,0,'C');
	  
	  $pdf->Ln(7);
	  $pdf->Cell(69.5);
	  $pdf->SetFont('Times','B',9);
	  $pdf->Cell(50,6,''.$stare_civila,1,0,'C');
	  
	  $pdf->Ln(7);
	  $pdf->SetFont('Times','BI',10);
	  $pdf->Cell(0,10,'11. Actul de identitate/Documentul de calatorie',0,0,'C'); 
	  
	  $pdf->Ln(7);
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();
	  $pdf->SetFont('Times','BI',11);

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

	  $pdf->Ln(7);
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();
	  $pdf->SetFont('Times','BI',11);

	  $pdf->Cell(20);
	  $pdf->MultiCell(70, 6, 'Eliberat de', 1, 1);
	  $pdf->SetXY($x + 90, $y);
	  $pdf->MultiCell(40, 6,'Data eliberarii',1,  1);
	  $pdf->SetXY($x + 130, $y);
	  $pdf->MultiCell(40, 6,'Data expirarii',1,  1);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(20);
	  $pdf->MultiCell(70, 6, ''.$eliberat_de, 1, 1);
	  $pdf->SetXY($x + 90, $y);
	  $pdf->MultiCell(40, 6,''.$data_eliberarii,1,  1);
	  $pdf->SetXY($x + 130, $y);
	  $pdf->MultiCell(40, 6,''.$data_expirarii,1,  1);

	  $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 270, 210-10, 270);
	  $pdf->SetLineWidth(0);
	  
      //Pagina 2
      
	  $pdf->AddPage();
	  $pdf->Ln(7);
	  $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 72, 210-10, 72);
	  $pdf->SetFont('Times','BI',10);
	  $pdf->Cell(0,10,'12. Domiciliul stabil',0,0,'C');
      
      $pdf->SetLineWidth(0);
      
      $pdf->Ln(7);
	  $pdf->Cell(70);
	  $pdf->SetFont('Times','B',9);
	  $pdf->Cell(50,6,''.$mediu_domiciliu,1,0,'C');
      
	  $pdf->Ln(8);
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','BI',10);

	  $pdf->Cell(15);
	  $pdf->MultiCell(60, 6, '1. Strada', 0, 1);
	  $pdf->SetXY($x + 120, $y);
	  $pdf->MultiCell(95, 6,'2. Numarul',0,  1);

	  $pdf->Ln(-0.5);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(15);

	  $pdf->MultiCell(95, 6, ''.$strada, 1, 1);
	  $pdf->SetXY($x + 120, $y);
	  $pdf->MultiCell(60, 6,''.$numar,1,  1);
	  
	  $pdf->Ln(1.5);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','BI',10);

	  $pdf->Cell(15);
   	  $pdf->MultiCell(45, 6, 'Bloc', 0, 1);
	  $pdf->SetXY($x + 100, $y);
	  $pdf->MultiCell(35, 6,'Scara',0,  1);
	  $pdf->SetXY($x + 125, $y);
	  $pdf->MultiCell(35, 6,'Etaj',0,  1);
	  $pdf->SetXY($x + 150, $y);
	  $pdf->MultiCell(35, 6,'Apartament',0,  1);

	 $pdf->Ln(-0.5);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','B',9);

	 $pdf->Cell(15);

	 $pdf->MultiCell(65, 6, ''.$bloc, 1, 1);
	 $pdf->SetXY($x + 100, $y);
	 $pdf->MultiCell(25, 6,''.$scara,1,  1);
	 $pdf->SetXY($x + 125, $y);
	 $pdf->MultiCell(25, 6,''.$etaj,1,  1);
	 $pdf->SetXY($x + 150, $y);
	 $pdf->MultiCell(25, 6,''.$apartament,1,  1);


	 $pdf->Ln(1.5);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','BI',10);

	 $pdf->Cell(15);
	 $pdf->MultiCell(85, 6, 'Localitate', 0, 1);
	 $pdf->SetXY($x + 110, $y);
	 $pdf->MultiCell(95, 6,'Judet',0,  1);

	 $pdf->Ln(-0.5);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','B',9);

	 $pdf->Cell(15);

	 $pdf->MultiCell(60, 6, ''.$localitate_domiciliu, 1, 1);
	 $pdf->SetXY($x + 105, $y);
	 $pdf->MultiCell(60, 6,''.$judet_domiciliu,1,  1);

	 $pdf->Ln(1.5);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','BI',10);

	 $pdf->Cell(15);
	 $pdf->MultiCell(85, 6, 'Cod postal', 0, 1);
	 $pdf->SetXY($x + 85, $y);
	 $pdf->MultiCell(95, 6,'Tara',0,  1);

	 $pdf->Ln(-0.5);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','B',9);
	 $pdf->Cell(15);

	 $pdf->MultiCell(60, 6, ''.$cod_postal, 1, 1);
	 $pdf->SetXY($x + 85, $y);
	 $pdf->MultiCell(70, 6,''.$tara_domiciliu,1,  1);
    
	 $pdf->Ln(1.5);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(15);
	 $pdf->MultiCell(50, 6, 'Nr. telefon', 0, 1);
	 $pdf->SetXY($x + 85, $y);
	 $pdf->MultiCell(105, 6,'E-mail',0,  1);
      
	 $pdf->Ln(-0.5);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','B',9);

	 $pdf->Cell(15);

    
	 $pdf->MultiCell(50, 6, ''.$telefon, 1, 1);
	 $pdf->SetXY($x + 85, $y);
	 $pdf->MultiCell(95, 6,''.$email,1,  1);

	 $pdf->Ln(5);
	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(23);
	 $pdf->MultiCell(62, 6, '13. Solicitati cazare pe timpul studiilor?', 1, 1);
	 $pdf->SetXY($x + 85, $y);
	 $pdf->MultiCell(90, 6,'14. Solicitati cazare in perioada testului scris de admitere?',1,  1);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','B',9);

     $pdf->Cell(23);
	 $pdf->MultiCell(62, 6, ''.$solicita_cazare_studii, 1, 1);
	 $pdf->SetXY($x + 85, $y);
	 $pdf->MultiCell(90, 6,'Nu',1,  1);
	  
	 $pdf->Ln(5);
	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(19);
	 $pdf->MultiCell(110, 6, '15. Candidat care se incadreaza in categoria persoanelor cu dizabilitati', 1, 1);
	 $pdf->SetXY($x + 129, $y);
	 $pdf->MultiCell(50, 6,'16. Stare sociala speciala',1,  1);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','B',9);

     $pdf->Cell(19);
	 $pdf->MultiCell(110, 6, ''.$persoana_cu_dizabilitati, 1, 1);
	 $pdf->SetXY($x + 129, $y);
	 $pdf->MultiCell(50, 6,''.$orfan_de_un_parinte,1,  1);
	 
	 $pdf->SetLineWidth(0.5);
	 $pdf->Line(10, 191.5, 210-10, 191.5);

	 $pdf->Ln(8);
	 $pdf->SetFont('Times','B',11);
	 $pdf->Cell(10);

	 $pdf->Cell(0,0,'II. DATE PRIVIND PREGATIREA ANTERIOARA A CANDIDATULUI',0,1);
	 $pdf->SetLineWidth(0);
	 $pdf->Line(20, 196.5, 210-20, 196.5); 
	 
	 $pdf->Ln(3);
	 $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(0,10,'II.a.Studiile preuniversitare absolvite, nivel liceu',0,0,'C');

     $pdf->Ln(8.5); 
     $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(5);
	 $pdf->MultiCell(55, 6, 'Institutia unde a absolvit', 1, 1);
	 $pdf->SetXY($x + 60, $y);
	 $pdf->MultiCell(25, 6,'Localitate',1,  1); 
     $pdf->SetXY($x + 85, $y);
	 $pdf->MultiCell(13, 6,'Judetul',1,  1); 
     $pdf->SetXY($x + 98, $y);
	 $pdf->MultiCell(31, 6,'Profilul/Domeniul',1,  1);
     $pdf->SetXY($x + 129, $y);
	 $pdf->MultiCell(28, 6,'Durata studiilor',1,  1);
     $pdf->SetXY($x + 157, $y);
	 $pdf->MultiCell(28, 6,'Anul absolvirii',1,  1);
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','B',9);
	 $pdf->Cell(5);
	 $pdf->MultiCell(55, 6, ''.$liceul_absolvit, 1, 1);
	 $pdf->SetXY($x + 60, $y);
	 $pdf->MultiCell(25, 6,''.$localitate_liceu,1,  1); 
     $pdf->SetXY($x + 85, $y);
	 $pdf->MultiCell(13, 6,''.$judet_liceu,1,  1); 
     $pdf->SetXY($x + 98, $y);
	 $pdf->MultiCell(31, 6,''.$profil_liceu,1,  1);
     $pdf->SetXY($x + 129, $y);
	 $pdf->MultiCell(28, 6,''.$durata_studiilor_liceu,1,  1);
     $pdf->SetXY($x + 157, $y);
	 $pdf->MultiCell(28, 6,''.$anul_absolvirii_liceu,1,  1);
    
      
      
	 $pdf->Ln(5);
    
	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(0.1);
	 $pdf->MultiCell(35, 6, 'Forma de invatamant', 1, 1);
	 $pdf->SetXY($x + 35.1, $y);
	 $pdf->MultiCell(30, 6,'Dipl. BAC Seria:',1,  1); 
     $pdf->SetXY($x + 65.1, $y);
	 $pdf->MultiCell(35, 6,'Dipl. BAC Numarul:',1,  1); 
     $pdf->SetXY($x + 100.1, $y);
	 $pdf->MultiCell(34, 6,'Dipl. BAC Emisa de:',1,  1);
     $pdf->SetXY($x + 134.1, $y);
	 $pdf->MultiCell(23, 6,'Data emiterii',1,  1);
     $pdf->SetXY($x + 157.1, $y);
	 $pdf->MultiCell(35, 6,'Numar foie matricola',1,  1);
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','B',9);
	 $pdf->Cell(0.1);
	 $pdf->MultiCell(35, 6, ''.$forma_invatamant_liceu, 1, 1);
	 $pdf->SetXY($x + 35.1, $y);
	 $pdf->MultiCell(30, 6,''.$serie_diploma_bac,1,  1); 
     $pdf->SetXY($x + 65.1, $y);
	 $pdf->MultiCell(35, 6,''.$nr_diploma_bac,1,  1); 
     $pdf->SetXY($x + 100.1, $y);
	 $pdf->MultiCell(34, 6,''.$emisa_de_liceu,1,  1);
     $pdf->SetXY($x + 134.1, $y);
	 $pdf->MultiCell(23, 6,''.$data_emiterii_diploma,1,  1);
     $pdf->SetXY($x + 157.1, $y);
	 $pdf->MultiCell(35, 6,''.$nr_foii_matricole,1,  1);
      
      
    //Observatii II.a
      
     $pdf->Ln(3);
	 $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(0,10,'Alte observatii (pentru cazurile in care candidatul a absolvit studiile anterioare in strainatate) ',0,0,'C');

     $pdf->Ln(8.5); 
     $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(25);
	 $pdf->MultiCell(40, 6, 'Act de recunoastere Nr:', 1, 1);
	 $pdf->SetXY($x + 65, $y);
	 $pdf->MultiCell(41, 6,'Act de recunoastere Serie:',1,  1); 
     $pdf->SetXY($x + 106, $y);
	 $pdf->MultiCell(57, 6,'Act de recunoastere Data echivalarii:',1,  1);
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','B',9);
	 $pdf->Cell(25);
	 $pdf->MultiCell(40, 6, ''.$nr_act_rec_echiv, 1, 1);
	 $pdf->SetXY($x + 65, $y);
	 $pdf->MultiCell(41, 6,''.$serie_act_rec_echiv,1,  1); 
     $pdf->SetXY($x + 106, $y);
	 $pdf->MultiCell(57, 6,''.$data_rec_echiv,1,  1);
      
      
      
      
      //Linie pt footer
 
	 $pdf->SetLineWidth(0.5);
	 $pdf->Line(10, 270.5, 210-10, 270.5);

	 $pdf->Ln(16);
	 $pdf->SetFont('Times','B',11);
	 $pdf->Cell(10);

	 $pdf->AddPage();
	  $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 72, 210-10, 72);

      $pdf->SetLineWidth(0);
	  $pdf->Ln(7);

      //II.b stuff
      $pdf->SetFont('Times','BI',10);
	  $pdf->Cell(0,10,'II.b.Studiile universitare de licenta absolvite',0,0,'C');

      
      
     $pdf->Ln(8.5); 
     $x = $pdf->GetX();
	 $y = $pdf->GetY();

	$pdf->SetFont('Times','BI',10);
	 $pdf->Cell(30.1);
	 $pdf->MultiCell(15, 6,'Tara',1,  1); 
     $pdf->SetXY($x + 45.1, $y);
	 $pdf->MultiCell(23, 6,'Localitatea',1,  1); 
     $pdf->SetXY($x + 68.1, $y);
	 $pdf->MultiCell(15, 6,'Judetul',1,  1);
     $pdf->SetXY($x + 83.1, $y);
	 $pdf->MultiCell(41, 6,'Denumire institutie',1,  1);
     $pdf->SetXY($x + 124.1, $y);
	 $pdf->MultiCell(28, 6,'Facultatea',1,  1);
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','B',9);
	 $pdf->Cell(30.1);
	 $pdf->MultiCell(15, 6,''.$tara_fac,1,  1); 
     $pdf->SetXY($x + 45.1, $y);
	 $pdf->MultiCell(23, 6,''.$localitate_fac,1,  1); 
     $pdf->SetXY($x + 68.1, $y);
	 $pdf->MultiCell(15, 6,''.$judet_fac,1,  1);
     $pdf->SetXY($x + 83.1, $y);
	 $pdf->MultiCell(41, 6,''.$denumire_institutie_fac,1,  1);
     $pdf->SetXY($x + 124.1, $y);
	 $pdf->MultiCell(28, 6,''.$denumire_institutie_fac,1,  1);
     
      
      
	 $pdf->Ln(5);
    
	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(8);
     $pdf->MultiCell(28, 6,'Domeniul',1,  1);
     $pdf->SetXY($x + 36, $y);
	 $pdf->MultiCell(48, 6,'Program de studii/Specializare',1,  1); 
     $pdf->SetXY($x + 84, $y);
	 $pdf->MultiCell(25, 6,'Titlul obtinut',1,  1);
     $pdf->SetXY($x + 109, $y);
	 $pdf->MultiCell(35, 6,'Forma de invatamant',1,  1); 
     $pdf->SetXY($x + 144, $y);
	 $pdf->MultiCell(38, 6,'Numar semestre bugetar',1,  1);
  
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','B',9);
	 $pdf->Cell(8);
     $pdf->MultiCell(28, 6,''.$denumire_domeniu_licenta,1,  1);
     $pdf->SetXY($x + 36, $y);
	 $pdf->MultiCell(48, 6,'Informatica',1,  1); 
     $pdf->SetXY($x + 84, $y);
	 $pdf->MultiCell(25, 6,''.$titlu_obtinut,1,  1);
     $pdf->SetXY($x + 109, $y);
	 $pdf->MultiCell(35, 6,''.$forma_invatamant_fac,1,  1); 
     $pdf->SetXY($x + 144, $y);
	 $pdf->MultiCell(38, 6,''.$nr_sem_buget,1,  1);
      
    
     $pdf->Ln(5);
    
	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(0.1);
     $pdf->MultiCell(32, 6,'Nr. semestre bursier',1,  1);
     $pdf->SetXY($x + 32.1, $y);
	 $pdf->MultiCell(23, 6,'Durata studii',1,  1); 
     $pdf->SetXY($x + 55.1, $y);
	 $pdf->MultiCell(29, 6,'Dipl. master Seria',1,  1);
     $pdf->SetXY($x + 84.1, $y);
	 $pdf->MultiCell(26, 6,'Dipl. master Nr',1,  1); 
     $pdf->SetXY($x + 110.1, $y);
	 $pdf->MultiCell(36, 6,'Dipl. master Emisa de',1,  1);
     $pdf->SetXY($x + 146.1, $y);
	 $pdf->MultiCell(22, 6,'Data emitere',1,  1);
     $pdf->SetXY($x + 168.1, $y);
	 $pdf->MultiCell(24, 6,'Nr.foaie matr.',1,  1); 
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','B',9);
	 $pdf->Cell(0.1);
     $pdf->MultiCell(32, 6,''.$nr_sem_bursa,1,  1);
     $pdf->SetXY($x + 32.1, $y);
	 $pdf->MultiCell(23, 6,''.$durata_studii,1,  1); 
     $pdf->SetXY($x + 55.1, $y);
	 $pdf->MultiCell(29, 6,''.$diplo_licenta_serie,1,  1);
     $pdf->SetXY($x + 84.1, $y);
	 $pdf->MultiCell(26, 6,''.$diplo_licenta_nr,1,  1); 
     $pdf->SetXY($x + 110.1, $y);
	 $pdf->MultiCell(36, 6,''.$dipl_emisa_de,1,  1);
     $pdf->SetXY($x + 146.1, $y);
	 $pdf->MultiCell(22, 6,''.$data_emitere,1,  1);
     $pdf->SetXY($x + 168.1, $y);
	 $pdf->MultiCell(24, 6,''.$nr_foaie_matricola,1,  1);
      
      
      
      //II.c stuff
      $pdf->Ln(5); 
	  $pdf->SetFont('Times','BI',10);
	  $pdf->Cell(0,10,'II.c.Studiile universitare de master in curs',0,0,'C');

      
      
     $pdf->Ln(8.5); 
     $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(5);
	 $pdf->MultiCell(40, 6, 'Student la alta facult/univ', 1, 1);
	 $pdf->SetXY($x + 45, $y);
	 $pdf->MultiCell(15, 6,'Tara',1,  1); 
     $pdf->SetXY($x + 60, $y);
	 $pdf->MultiCell(23, 6,'Localitatea',1,  1); 
     $pdf->SetXY($x + 83, $y);
	 $pdf->MultiCell(15, 6,'Judetul',1,  1);
     $pdf->SetXY($x + 98, $y);
	 $pdf->MultiCell(41, 6,'Denumire institutie',1,  1);
     $pdf->SetXY($x + 139, $y);
	 $pdf->MultiCell(28, 6,'Facultatea',1,  1);
     $pdf->SetXY($x + 167, $y);
	 $pdf->MultiCell(18, 6,'Domeniul',1,  1);
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','B',9);
	 $pdf->Cell(5);
	 $pdf->MultiCell(40, 6, ''.$in_curs_student_alta_fac, 1, 1);
	 $pdf->SetXY($x + 45, $y);
	 $pdf->MultiCell(15, 6,''.$in_curs_tara_master,1,  1); 
     $pdf->SetXY($x + 60, $y);
	 $pdf->MultiCell(23, 6,''.$in_curs_localitate_master,1,  1); 
     $pdf->SetXY($x + 83, $y);
	 $pdf->MultiCell(15, 6,''.$in_curs_judet_master,1,  1);
     $pdf->SetXY($x + 98, $y);
	 $pdf->MultiCell(41, 6,''.$in_curs_denum_instit_master,1,  1);
     $pdf->SetXY($x + 139, $y);
	 $pdf->MultiCell(28, 6,''.$in_curs_denum_facultate_master,1,  1);
     $pdf->SetXY($x + 167, $y);
	 $pdf->MultiCell(18, 6,''.$in_curs_denum_domeniu_master,1,  1);
     
      
      
	 $pdf->Ln(5);
    
	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(12);
	 $pdf->MultiCell(48, 6,'Program de studii/Specializare',1,  1); 
     $pdf->SetXY($x + 60, $y);
	 $pdf->MultiCell(35, 6,'Forma de invatamant',1,  1); 
     $pdf->SetXY($x + 95, $y);
	 $pdf->MultiCell(10, 6,'Anul',1,  1);
     $pdf->SetXY($x + 105, $y);
	 $pdf->MultiCell(38, 6,'Numar semestre bugetar',1,  1);
     $pdf->SetXY($x + 143, $y);
	 $pdf->MultiCell(38, 6,'Numar semestre bursier',1,  1);
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','B',9);
	 $pdf->Cell(12);
	 $pdf->MultiCell(48, 6,''.$in_curs_specializare_master,1,  1); 
     $pdf->SetXY($x + 60, $y);
	 $pdf->MultiCell(35, 6,''.$in_curs_forma_invat_master,1,  1); 
     $pdf->SetXY($x + 95, $y);
	 $pdf->MultiCell(10, 6,''.$in_curs_an_master,1,  1);
     $pdf->SetXY($x + 105, $y);
	 $pdf->MultiCell(38, 6,''.$in_curs_nr_sem_buget_master,1,  1);
     $pdf->SetXY($x + 143, $y);
	 $pdf->MultiCell(38, 6,''.$in_curs_nr_sem_bursa_master,1,  1);
      
     
                                            //                  II.c studii absolvite
      
     $pdf->Ln(5);

     $pdf->SetFont('Times','BI',10);
     $pdf->Cell(0,10,'II.c.Studiile universitare de master absolvite',0,0,'C');

      
      
     $pdf->Ln(8.5); 
     $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(0.1);
	 $pdf->MultiCell(26, 6, 'Anul absolvirii', 1, 1);
	 $pdf->SetXY($x + 26.1, $y);
	 $pdf->MultiCell(44, 6,'Cu/Fara diploma de master',1,  1); 
     $pdf->SetXY($x + 70.1, $y);
	 $pdf->MultiCell(15, 6,'Tara',1,  1); 
     $pdf->SetXY($x + 85.1, $y);
	 $pdf->MultiCell(23, 6,'Localitatea',1,  1); 
     $pdf->SetXY($x + 108.1, $y);
	 $pdf->MultiCell(15, 6,'Judetul',1,  1);
     $pdf->SetXY($x + 123.1, $y);
	 $pdf->MultiCell(41, 6,'Denumire institutie',1,  1);
     $pdf->SetXY($x + 164.1, $y);
	 $pdf->MultiCell(28, 6,'Facultatea',1,  1);
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','B',9);
	 $pdf->Cell(0.1);
	 $pdf->MultiCell(26, 6, ''.$absolvent_an, 1, 1);
	 $pdf->SetXY($x + 26.1, $y);
	 $pdf->MultiCell(44, 6,'Cu diploma de Licenta',1,  1); 
     $pdf->SetXY($x + 70.1, $y);
	 $pdf->MultiCell(15, 6,''.$absolvent_tara,1,  1); 
     $pdf->SetXY($x + 85.1, $y);
	 $pdf->MultiCell(23, 6,''.$absolvent_localitate,1,  1); 
     $pdf->SetXY($x + 108.1, $y);
	 $pdf->MultiCell(15, 6,''.$absolvent_judet,1,  1);
     $pdf->SetXY($x + 123.1, $y);
	 $pdf->MultiCell(41, 6,''.$absolvent_denumire_instit,1,  1);
     $pdf->SetXY($x + 164.1, $y);
	 $pdf->MultiCell(28, 6,''.$absolvent_denumire_facult,1,  1);
     
      
      
	 $pdf->Ln(5);
    
	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(14);
     $pdf->MultiCell(18, 6,'Domeniul',1,  1);
     $pdf->SetXY($x + 32, $y);
	 $pdf->MultiCell(48, 6,'Program de studii/Specializare',1,  1); 
     $pdf->SetXY($x + 80, $y);
	 $pdf->MultiCell(25, 6,'Titlul obtinut',1,  1);
     $pdf->SetXY($x + 105, $y);
	 $pdf->MultiCell(35, 6,'Forma de invatamant',1,  1); 
     $pdf->SetXY($x + 140, $y);
	 $pdf->MultiCell(38, 6,'Numar semestre bugetar',1,  1);
  
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','B',9);
	 $pdf->Cell(14);
     $pdf->MultiCell(18, 6,''.$absolvent_domeniu,1,  1);
     $pdf->SetXY($x + 32, $y);
	 $pdf->MultiCell(48, 6,''.$absolvent_specializare,1,  1); 
     $pdf->SetXY($x + 80, $y);
	 $pdf->MultiCell(25, 6,''.$titlu_obtinut,1,  1);
     $pdf->SetXY($x + 105, $y);
	 $pdf->MultiCell(35, 6,''.$absolvent_forma_invat,1,  1); 
     $pdf->SetXY($x + 140, $y);
	 $pdf->MultiCell(38, 6,''.$absolvent_nr_sem_buget,1,  1);
      
    
     $pdf->Ln(5);
    
	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(0.1);
     $pdf->MultiCell(32, 6,'Nr. semestre bursier',1,  1);
     $pdf->SetXY($x + 32.1, $y);
	 $pdf->MultiCell(23, 6,'Durata studii',1,  1); 
     $pdf->SetXY($x + 55.1, $y);
	 $pdf->MultiCell(29, 6,'Dipl. master Seria',1,  1);
     $pdf->SetXY($x + 84.1, $y);
	 $pdf->MultiCell(26, 6,'Dipl. master Nr',1,  1); 
     $pdf->SetXY($x + 110.1, $y);
	 $pdf->MultiCell(36, 6,'Dipl. master Emisa de',1,  1);
     $pdf->SetXY($x + 146.1, $y);
	 $pdf->MultiCell(22, 6,'Data emitere',1,  1);
     $pdf->SetXY($x + 168.1, $y);
	 $pdf->MultiCell(24, 6,'Nr.foaie matr.',1,  1); 
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','B',9);
	 $pdf->Cell(0.1);
     $pdf->MultiCell(32, 6,''.$absolvent_nr_sem_bursa,1,  1);
     $pdf->SetXY($x + 32.1, $y);
	 $pdf->MultiCell(23, 6,'4 ani',1,  1); 
     $pdf->SetXY($x + 55.1, $y);
	 $pdf->MultiCell(29, 6,''.$absolvent_diplo_serie,1,  1);
     $pdf->SetXY($x + 84.1, $y);
	 $pdf->MultiCell(26, 6,''.$absolvent_diplo_nr,1,  1); 
     $pdf->SetXY($x + 110.1, $y);
	 $pdf->MultiCell(36, 6,''.$absolvent_diplo_emisa_de,1,  1);
     $pdf->SetXY($x + 146.1, $y);
	 $pdf->MultiCell(22, 6,''.$absolvent_dipl_data_emitere,1,  1);
     $pdf->SetXY($x + 168.1, $y);
	 $pdf->MultiCell(24, 6,''.$absolvent_nr_foaie_matricola,1,  1); 
      
      
      
    //Observatii II.c
      
     $pdf->Ln(3);
	 $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(0,10,'Alte observatii (pentru cazurile in care candidatul a absolvit studiile anterioare in strainatate) ',0,0,'C');

     $pdf->Ln(8.5); 
     $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(25);
	 $pdf->MultiCell(40, 6, 'Act de recunoastere Nr:', 1, 1);
	 $pdf->SetXY($x + 65, $y);
	 $pdf->MultiCell(41, 6,'Act de recunoastere Serie:',1,  1); 
     $pdf->SetXY($x + 106, $y);
	 $pdf->MultiCell(57, 6,'Act de recunoastere Data echivalarii:',1,  1);
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','B',9);
	 $pdf->Cell(25);
	 $pdf->MultiCell(40, 6, ''.$absolvent_act_rec_nr, 1, 1);
	 $pdf->SetXY($x + 65, $y);
	 $pdf->MultiCell(41, 6,''.$absolvent_act_rec_serie,1,  1); 
     $pdf->SetXY($x + 106, $y);
	 $pdf->MultiCell(57, 6,''.$absolvent_act_rec_data_echiv,1,  1);

     
     //Linie pt footer
      
     $pdf->SetLineWidth(0.5);
	 $pdf->Line(10, 270.5, 210-10, 270.5);
      
      
      
    //                          III. Cerinte pt fac.  
    
      
     $pdf->AddPage();
	 $pdf->SetLineWidth(0.5);
	 $pdf->Line(10, 72, 210-10, 72);

	 $pdf->Ln(8);
     $pdf->SetFont('Times','B',11);
	 $pdf->Cell(10);
      
	 $pdf->Cell(0,0,'III. CERINTE SPECIFICE FACULTATII',0,1);
	 $pdf->SetLineWidth(0);
	 $pdf->Line(20, 77.5, 210-20, 77.5); 
	 
	 $pdf->Ln(6);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','BI',10);

	  $pdf->Cell(25);
	  $pdf->MultiCell(70, 6, 'Media generala la examenul de licenta', 1, 1);
	  $pdf->SetXY($x + 95, $y);
	  $pdf->MultiCell(70, 6,'Media de admitere',1,  1);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(25);
	  $pdf->MultiCell(70, 6, ''.$medie_examen_licenta, 1, 1);
	  $pdf->SetXY($x + 95, $y);
	  $pdf->MultiCell(70, 6,''.$medie_admitere,1,  1);
	  
	  $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 98, 210-10, 98);

	  $pdf->Ln(8);
	  $pdf->SetFont('Times','B',11);
	  $pdf->Cell(10);

	  $pdf->Cell(0,0,'IV. OPTIUNI DE ADMITERE, IN ORDINEA PREFERINTELOR',0,1);
	  $pdf->SetLineWidth(0);
	  $pdf->Line(20, 103.5, 210-20, 103.5); 

	  $pdf->Ln(7);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','BI',10);

	  $pdf->Cell(40);
	  $pdf->MultiCell(70, 6, 'Domeniul/Programul', 1, 1);
	  $pdf->SetXY($x + 110, $y);
	  $pdf->MultiCell(40, 6,'Ordinea preferintelor',1,  1);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(40);
	  $pdf->MultiCell(70, 6, 'Ingineria sistemelor software (buget)', 1, 1);
	  $pdf->SetXY($x + 110, $y);
	  $pdf->MultiCell(40, 6,''.$preferinta_1,1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(40);
	  $pdf->MultiCell(70, 6, 'Lingvistica computationala (buget)', 1, 1);
	  $pdf->SetXY($x + 110, $y);
	  $pdf->MultiCell(40, 6,''.$preferinta_2,1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(40);
	  $pdf->MultiCell(70, 6, 'Optimizare computationala (buget)', 1, 1);
	  $pdf->SetXY($x + 110, $y);
	  $pdf->MultiCell(40, 6,''.$preferinta_3,1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(40);
	  $pdf->MultiCell(70, 6, 'Securitatea informatiei (buget)', 1, 1);
	  $pdf->SetXY($x + 110, $y);
	  $pdf->MultiCell(40, 6,''.$preferinta_4,1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(40);
	  $pdf->MultiCell(70, 6, 'Sisteme distribuite (buget)', 1, 1);
	  $pdf->SetXY($x + 110, $y);
	  $pdf->MultiCell(40, 6,''.$preferinta_5,1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(40);
	  $pdf->MultiCell(70, 6, 'Ingineria sistemelor software (taxa)', 1, 1);
	  $pdf->SetXY($x + 110, $y);
	  $pdf->MultiCell(40, 6,''.$preferinta_6,1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(40);
	  $pdf->MultiCell(70, 6, 'Lingvistica computationala (taxa)', 1, 1);
	  $pdf->SetXY($x + 110, $y);
	  $pdf->MultiCell(40, 6,''.$preferinta_7,1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(40);
	  $pdf->MultiCell(70, 6, 'Optimizare computationala (taxa)', 1, 1);
	  $pdf->SetXY($x + 110, $y);
	  $pdf->MultiCell(40, 6,''.$preferinta_8,1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(40);
	  $pdf->MultiCell(70, 6, 'Securitatea informatiei (taxa)', 1, 1);
	  $pdf->SetXY($x + 110, $y);
	  $pdf->MultiCell(40, 6,''.$preferinta_9,1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(40);
	  $pdf->MultiCell(70, 6, 'Sisteme distribuite (taxa)', 1, 1);
	  $pdf->SetXY($x + 110, $y);
	  $pdf->MultiCell(40, 6,''.$preferinta_10,1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(40);
	  $pdf->MultiCell(70, 6, 'Studii avansate in informatica (taxa)', 1, 1);
	  $pdf->SetXY($x + 110, $y);
	  $pdf->MultiCell(40, 6,''.$preferinta_11,1,  1);
	  
	  $pdf->Ln(2);

	  $pdf->SetFont('Times','BI',10);
	  $pdf->Cell(0,10,'Acceptarea inmatricularii in caz ca nu a fost admis pe buget',0,0,'C');

	  $pdf->Ln(7);
	  $pdf->Cell(69.5);
	  $pdf->SetFont('Times','B',9);
	  $pdf->Cell(50,6,''.$optiune_admitere_taxa,1,0,'C');

      $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 203, 210-10, 203);

	  $pdf->Ln(17);
	  $pdf->Cell(10);
      
      //Preferinte
      
      $pdf->SetFont('Times','B',11);
	  $pdf->Cell(0,0,'V. INFORMATII PRIVIND DOCUMENTELE DE STUDII DEPUSE LA DOSAR ',0,1);
	  $pdf->SetLineWidth(0);
	  $pdf->Line(20, 208.5, 210-20, 208.5);
      
      $pdf->Ln(8.5); 
      $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','BI',10);
	  $pdf->Cell(57);
	  $pdf->MultiCell(64, 6, 'Diploma de BAC (original)', 1, 1);
	  $pdf->SetXY($x + 121, $y);
      $pdf->SetFont('Times','B',9);
	  $pdf->MultiCell(10, 6,''.$diploma_bac_original,1,  1);
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(57);
     $pdf->MultiCell(64, 6, 'Diploma de BAC (copie legaliz)', 1, 1);
     $pdf->SetXY($x + 121, $y);
     $pdf->SetFont('Times','B',9);
     $pdf->MultiCell(10, 6,'X',1,  1);
     
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(57);
     $pdf->MultiCell(64, 6, 'Document echiv. studii preuniv. (original)', 1, 1);
	 $pdf->SetXY($x + 121, $y);
     $pdf->SetFont('Times','B',9);
	 $pdf->MultiCell(10, 6,''.$doc_echiv_preuniv_original,1,  1);
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(57);
     $pdf->MultiCell(64, 6, 'Docum. echiv studii preuniv(copie legaliz)', 1, 1);
	 $pdf->SetXY($x + 121, $y);
     $pdf->SetFont('Times','B',9);
	 $pdf->MultiCell(10, 6,'X',1,  1);
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(57);
     $pdf->MultiCell(64, 6, 'Diploma de licenta (original)', 1, 1);
	 $pdf->SetXY($x + 121, $y);
     $pdf->SetFont('Times','B',9);
	 $pdf->MultiCell(10, 6,''.$diploma_licenta_original,1,  1);
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(57);
     $pdf->MultiCell(64, 6, 'Diploma de licenta (copie legaliz)', 1, 1);
	 $pdf->SetXY($x + 121, $y);
     $pdf->SetFont('Times','B',9);
	 $pdf->MultiCell(10, 6,'X',1,  1);
    
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(57);
     $pdf->MultiCell(64, 6, 'Docum. echiv studii licenta (original)', 1, 1);
	 $pdf->SetXY($x + 121, $y);
     $pdf->SetFont('Times','B',9);
	 $pdf->MultiCell(10, 6,''.$dipl_echiv_licenta_original,1,  1);
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(57);
     $pdf->MultiCell(64, 6, 'Docum. echiv studii licenta (copie legaliz)', 1, 1);
	 $pdf->SetXY($x + 121, $y);
     $pdf->SetFont('Times','B',9);
	 $pdf->MultiCell(10, 6,'X',1,  1);
      
      
     $pdf->Ln(4);
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(57);
     $pdf->MultiCell(64, 6, 'Participati la alt/e concurs/uri de admitere', 1, 1);
	 $pdf->SetXY($x + 121, $y);
     $pdf->SetFont('Times','B',9);
	 $pdf->MultiCell(10, 6,''.$participa_altundeva,1,  1); 
      
      
    //Linie footer...
      
    
     $pdf->SetLineWidth(0.5);
	 $pdf->Line(10, 274.5, 210-10, 274.5);  
    
   //Pagina 5   
    
     $pdf->AddPage();
     $pdf->SetLineWidth(0.5);
	 $pdf->Line(10, 72, 210-10, 72);
    
     $pdf->SetLineWidth(0);
	 $pdf->Ln(4);  
	 $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(0,10,'La ce alte concursuri de admitere participa',0,0,'C');

     $pdf->Ln(8.5); 
     $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(51);
      $pdf->MultiCell(50, 6, 'Universitatea', 1, 1);
	  $pdf->SetXY($x + 101, $y);
	  $pdf->MultiCell(37, 6,'Domeniul/Specializarea',1,  1);
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(51);
     $pdf->MultiCell(50, 6, ''.$universitate1, 1, 1);
	  $pdf->SetXY($x + 101, $y);
	  $pdf->MultiCell(37, 6,''.$facultate1,1,  1);
      
     
      $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(51);
     $pdf->MultiCell(50, 6, ''.$universitate2, 1, 1);
	  $pdf->SetXY($x + 101, $y);
	  $pdf->MultiCell(37, 6,''.$facultate2,1,  1);
      
      $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(51);
     $pdf->MultiCell(50, 6, ''.$universitate3, 1, 1);
	  $pdf->SetXY($x + 101, $y);
	  $pdf->MultiCell(37, 6,''.$facultate3,1,  1);
      
      
	 $pdf->SetLineWidth(0.5);
	 $pdf->Line(10, 110.5, 210-10, 110.5);
      
	 $pdf->Ln(10);
	 $pdf->SetFont('Times','B',11);
	 $pdf->Cell(10);

	 $pdf->Cell(0,0,'VI. CERINTE SPECIFICE FACULTATII',0,1);
	 $pdf->SetLineWidth(0);
	 $pdf->Line(20, 116, 210-20, 116);
      
	  $pdf->Ln(1);
	  $pdf->Cell(20);
	  $pdf->SetFont('Times','BI',10);
	  $pdf->Cell(0,10,'Taxe',0,0,'L');
	  
	  $pdf->Ln(4);
	  $pdf->Cell(30);
	  $pdf->SetFont('Times','B',9);
	  $pdf->Cell(0,10,'-Taxa de inscriere: 300 Ron',0,0,'L');
	  
	  $pdf->Ln(4);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'-Taxa de scolarizare: 3900 Ron',0,0,'L');
	  
	  
	  $pdf->Ln(4);
	  $pdf->Cell(20);
	  $pdf->SetFont('Times','BI',10);
	  $pdf->Cell(0,10,'Acte necesare',0,0,'L');
	  
	  $pdf->Ln(4);
	  $pdf->Cell(30);
	  $pdf->SetFont('Times','B',9);
	  $pdf->Cell(0,10,'-fisa de inscriere tip',0,0,'L');
	  
	  $pdf->Ln(4);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'-diploma de bacalaureat si diploma de licenta (sau echivalentul ei), originale sau copii legalizate',0,0,'L');
	  
	  $pdf->Ln(4);
	  $pdf->Cell(35);
	  $pdf->Cell(0,10,'insotite de dovada ca originalele sunt depuse la alta facultate',0,0,'L');
	  
	  $pdf->Ln(4);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'-foaia matricola din facultate - nivel licenta (cu media ECTS)', 0, 0, 'L');
	  
	  $pdf->Ln(4);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'-certificat de nastere, in copie legalizata',0,0,'L');
	  
	  $pdf->Ln(4);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'-copie simpla carte de identitate;',0,0,'L');
	  
	  $pdf->Ln(4);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'-doua fotografii tip buletin',0,0,'L');
	  
	  $pdf->Ln(4);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'-chitanta ce dovedeste plata taxei de inscriere',0,0,'L');
	  
	  $pdf->Ln(4);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'-adeverinta medicala tip',0,0,'L');
	  
	  $pdf->Ln(4);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'-adeverinta din care sa rezulte calitatea de masterand',0,0,'L');
	  
	  $pdf->Ln(4);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'-certificatul de casatorie sau documentul care atesta schimbarea numelui, in copie legalizata',0,0,'L');
	  
	  $pdf->Ln(4);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'-dosar plic',0,0,'L');
	  
	  $pdf->Ln(4);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'-candidatii absolventi de studii universitare de licenta de la universitatile particulare vor',0,0,'L');
	  
	  $pdf->Ln(4);
	  $pdf->Cell(35);
	  $pdf->Cell(0,10,'prezenta, la inscriere, o dovada a acreditarii specializarii absolvite.',0,0,'L');
	  
	  
      //Chestionaaaarrrr
      
      
      $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 193, 210-10, 193);

	  $pdf->Ln(13);
	  $pdf->SetFont('Times','B',11);
	  $pdf->Cell(10);

      
      
      //Preferinte
      
      $pdf->SetFont('Times','B',11);
	  $pdf->Cell(0,0,'VII. CHESTIONAR PRIVIND ALEGEREA DUMNEAVOASTRA',0,1);
	  $pdf->SetLineWidth(0);
	  $pdf->Line(20, 198, 210-20, 198);
      
      //Prima intrebare
      
      $pdf->Ln(2);

	  $pdf->SetFont('Times','BI',10);
	  $pdf->Cell(20,10,' De unde ati aflat despre admiterea la Universitatea',0,0,'L');
      
      $pdf->Cell(175,10,'Cat de importanti au fost urmatorii factorii in alegerea facultatii, apreciati',0,0,'R');  
      
      $pdf->Ln(4);
      $pdf->Cell(20,10,'"Alexandru Ioan Cuza" din Iasi (UAIC)?',0,0,'L');
      
      $pdf->Cell(175,10,'cat a contat fiecare in optiunea dv. privind alegerea programului de master?',0,0,'R');
      
      $pdf->Ln(10); 
      $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',10);
	  $pdf->Cell(3);
	  $pdf->MultiCell(64, 6, 'Surse de informare', 1, 1);
	  $pdf->SetXY($x + 67, $y);
	  $pdf->MultiCell(30, 6,'Bifati',1,  1);
      
      
      //Chestionar 2 linia 1
      $x = $pdf->GetX();

	  $pdf->SetXY($x + 105, $y);
	  $pdf->MultiCell(64, 6, 'Factorii care v-au influentat', 1, 1);
	  $pdf->SetXY($x + 169, $y);
	  $pdf->MultiCell(20, 6,'Importanta',1,  1);
      
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     
     $pdf->SetFont('Times','BI',9);
	 $pdf->Cell(3);
     $pdf->MultiCell(64, 6, 'Site-ul dedicat admiterii (admitere.uaic.ro) ', 1, 1);
     $pdf->SetXY($x + 67, $y);
     $pdf->SetFont('Times','B',9);
     $pdf->MultiCell(30, 6,''.$site_admitere,1,  1);
     
     //Chestionar 2 linia 2
      $x = $pdf->GetX();

     $pdf->SetFont('Times','BI',9);
	 $pdf->SetXY($x + 105, $y);
	 $pdf->MultiCell(64, 6, 'Prestigiul Universitatii/facultatii', 1, 1);
     $pdf->SetXY($x + 169, $y);
     $pdf->SetFont('Times','B',9);
	 $pdf->MultiCell(20, 6,''.$prestigiu,1,  1);
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','BI',9);
	 $pdf->Cell(3);
     $pdf->MultiCell(64, 6, 'Site-ul facultatii', 1, 1);
	 $pdf->SetXY($x + 67, $y);
     $pdf->SetFont('Times','B',9);
	 $pdf->MultiCell(30, 6,''.$site_facultate,1,  1);
      
     //Chestionar 2 linia 3
      $x = $pdf->GetX();

     $pdf->SetFont('Times','BI',9);
	 $pdf->SetXY($x + 105, $y);
	 $pdf->MultiCell(64, 6, 'Calitatea educatiei la UAIC ', 1, 1);
     $pdf->SetXY($x + 169, $y);
     $pdf->SetFont('Times','B',9);
	 $pdf->MultiCell(20, 6,''.$calitate,1,  1); 
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','BI',9);
	 $pdf->Cell(3);
     $pdf->MultiCell(64, 6, 'Pagina de Facebook a Universitatii', 1, 1);
	 $pdf->SetXY($x + 67, $y);
     $pdf->SetFont('Times','B',9);
	 $pdf->MultiCell(30, 6,''.$pagina_facebook,1,  1);

     //Chestionar 2 linia 4
      $x = $pdf->GetX();

     $pdf->SetFont('Times','BI',9);
	 $pdf->SetXY($x + 105, $y);
	 $pdf->MultiCell(64, 6, 'Sfatul persoanelor apropiate ', 1, 1);
     $pdf->SetXY($x + 169, $y);
     $pdf->SetFont('Times','B',9);
	 $pdf->MultiCell(20, 6,''.$sfat_persoane,1,  1);  
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','BI',9);
	 $pdf->Cell(3);
     $pdf->MultiCell(64, 6, 'Prieteni, cunostinte, rude', 1, 1);
	 $pdf->SetXY($x + 67, $y);
     $pdf->SetFont('Times','B',9);
	 $pdf->MultiCell(30, 6,''.$prieteni,1,  1);
     
      //Chestionar 2 linia 5
      $x = $pdf->GetX();

     $pdf->SetFont('Times','BI',9);
	 $pdf->SetXY($x + 105, $y);
	 $pdf->MultiCell(64, 6, 'Statutul profesiei pentru care optati', 1, 1);
     $pdf->SetXY($x + 169, $y);
     $pdf->SetFont('Times','B',9);
	 $pdf->MultiCell(20, 6,''.$statut_profesie,1,  1);   
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','BI',9);
	 $pdf->Cell(3);
     $pdf->MultiCell(64, 6, 'Profesorii din facultate', 1, 1);
	 $pdf->SetXY($x + 67, $y);
     $pdf->SetFont('Times','B',9);
	 $pdf->MultiCell(30, 6,''.$profesori,1,  1);
     
      //Chestionar 2 linia 6
      $x = $pdf->GetX();

     $pdf->SetFont('Times','BI',9);
	 $pdf->SetXY($x + 105, $y);
	 $pdf->MultiCell(64, 6, 'Colegii', 1, 1);
     $pdf->SetXY($x + 169, $y);
     $pdf->SetFont('Times','B',9);
	 $pdf->MultiCell(20, 6,''.$colegii,1,  1);   
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','BI',9);
	 $pdf->Cell(3);
     $pdf->MultiCell(64, 6, 'Presa', 1, 1);
	 $pdf->SetXY($x + 67, $y);
     $pdf->SetFont('Times','B',9);
	 $pdf->MultiCell(30, 6,''.$presa,1,  1);
      
      //Chestionar 2 linia 7
      $x = $pdf->GetX();

     $pdf->SetFont('Times','BI',9);
	 $pdf->SetXY($x + 105, $y);
	 $pdf->MultiCell(64, 6, 'Materiile care se studiaza', 1, 1);
     $pdf->SetXY($x + 169, $y);
     $pdf->SetFont('Times','B',9);
	 $pdf->MultiCell(20, 6,''.$materiile,1,  1);    
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('Times','BI',9);
	 $pdf->Cell(3);
     $pdf->MultiCell(64, 6, 'Alte surse (mentionati care)...', 1, 1);
	 $pdf->SetXY($x + 67, $y);
     $pdf->SetFont('Times','B',9);
	 $pdf->MultiCell(30, 6,''.$alte_surse,1,  1);
     
      //Chestionar 2 linia 8
      $x = $pdf->GetX();

     $pdf->SetFont('Times','BI',9);
	 $pdf->SetXY($x + 105, $y);
	 $pdf->MultiCell(64, 6, 'Informatiile furnizate de Universitate', 1, 1);
     $pdf->SetXY($x + 169, $y);
     $pdf->SetFont('Times','B',9);
	 $pdf->MultiCell(20, 6,''.$informatiile_universitatii,1,  1);  
     
      //Chestionar 2 linia 9
      $x = $pdf->GetX();
      $y = $pdf->GetY();
      
     $pdf->SetFont('Times','BI',9);
	 $pdf->SetXY($x + 105, $y);
	 $pdf->MultiCell(64, 6, 'Apropierea de domiciliu', 1, 1);
     $pdf->SetXY($x + 169, $y);
     $pdf->SetFont('Times','B',9);
	 $pdf->MultiCell(20, 6,''.$apropierea,1,  1);  
      
     //Linie footer pag. 5
      
     $pdf->SetLineWidth(0.5);
	 $pdf->Line(10, 276, 210-10, 276);
      
     //Pagina 6
      
     //VIII
      
     $pdf->AddPage();
     $pdf->Ln(7);
	 $pdf->SetLineWidth(0.5);
	 $pdf->Line(10, 72, 210-10, 72); 
      
     $pdf->SetFont('Times','B',11);
	 $pdf->Cell(1);
	 $pdf->Cell(0,10,'VIII. Declar pe propria raspundere, cunoscand consecintele administrative si juridice ale declaratiilor',0,0,'L');
     $pdf->Ln(5);
     $pdf->Cell(1);
	 $pdf->Cell(0,10,'inexacte/false, ca datele furnizate in aceasta fisa sunt conforme cu realitatea si ca am luat ',0,0,'L');
     $pdf->Ln(5);
     $pdf->Cell(1);
	 $pdf->Cell(0,10,'cunostinta prevederile metodologiei de admitere.',0,0,'L');
     
      
     //IX
      
     $pdf->SetFont('Times','B',11);
     $pdf->Ln(9);
	 $pdf->Cell(1);
	 $pdf->Cell(0,10,'IX. Datele declarate de Dumneavoastra sunt prelucrate de Universitatea "Alexandru Ioan Cuza" din Iasi,',0,0,'L');
     $pdf->Ln(5);
     $pdf->Cell(1);
	 $pdf->Cell(0,10,'in conformitate cu prevederile Legii 677/2001, privind protectia persoanelor cu privire la prelucrarea',0,0,'L');
     $pdf->Ln(5);
     $pdf->Cell(1);
	 $pdf->Cell(0,10,'datelor cu caracter personal si libera circulatie a acestor date, modificata si completata.',0,0,'L');
      
	  
	  $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 270, 210-10, 270);
	  $pdf->SetLineWidth(0);
	  $pdf->Output();
            
         }
 

?>