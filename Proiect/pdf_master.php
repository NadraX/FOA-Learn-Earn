
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
                                  dpc.stare_civila,
                                  dpc.tip_act_ident,
                                  dpc.serie_act, dpc.numar_act, dpc.eliberat_de, TO_CHAR(dpc.data_eliberarii, 'dd month yyyy', 'NLS_DATE_LANGUAGE=romanian'),
                                  TO_CHAR(dpc.data_expirarii, 'dd month yyyy', 'NLS_DATE_LANGUAGE=romanian'), dpc.mediu_domiciliu, dpc.tara_domiciliu, dpc.judet_domiciliu, dpc.localitate_domiciliu,
                                  dpc.strada, dpc.numar,
                                  dpc.bloc, dpc.scara, dpc.etaj, dpc.apartament, dpc.cod_postal, dpc.telefon, dpc.email, dpc.solicita_cazare_studii,dpc.stare_sociala_speciala, dpc.persoana_cu_dizabilitati,
                                  
                                  dpl.liceul_absolvit, dpl.tara_liceu, dpl.localitate_liceu,
                                  dpl.judet_liceu, dpl.profil_liceu, dpl.durata_studiilor_liceu, dpl.anul_absolvirii_liceu, dpl.forma_invatamant_liceu, dpl.serie_diploma_bac, dpl.nr_diploma_bac, TO_CHAR(dpl.data_emiterii_diploma, 'dd month yyyy', 'NLS_DATE_LANGUAGE=romanian'), dpl.nr_foii_matricole, dpl.nr_act_rec_echiv, dpl.serie_act_rec_echiv, TO_CHAR(dpl.data_rec_echiv, 'dd month yyyy', 'NLS_DATE_LANGUAGE=romanian'), dpl.tara_fac, dpl.localitate_fac, dpl.judet_fac, dpl.denumire_institutie_fac,dpl.denumire_facultate, dpl.denumire_domeniu_licenta, dpl.specializare,
                                  dpl.titlu_obtinut, dpl.forma_invatamant_fac, dpl.nr_sem_buget, dpl.nr_sem_bursa, dpl.durata_studii, dpl.diplo_licenta_serie, dpl.diplo_licenta_nr, TO_CHAR(dpl.dipl_data_emitere, 'dd month yyyy', 'NLS_DATE_LANGUAGE=romanian'), dpl.nr_foaie_matricola, dpl.act_rec_licenta, dpl.nr_act_rec_licenta,
                                  dpl.serie_act_rec_licenta, TO_CHAR(dpl.data_act_rec_licenta, 'dd month yyyy', 'NLS_DATE_LANGUAGE=romanian'), dpl.in_curs_student_alta_fac, dpl.in_curs_tara_master, dpl.in_curs_localitate_master, dpl.in_curs_judet_master, 
                                  dpl.in_curs_denum_instit_master, dpl.in_curs_denum_facultate_master, dpl.in_curs_denum_domeniu_master, dpl.in_curs_specializare_master, dpl.in_curs_forma_invat_master,
                                  
                                  dpl.in_curs_an_master, dpl.in_curs_nr_sem_buget_master, dpl.in_curs_nr_sem_bursa_master, dpl.absolvent_an, dpl.absolvent_tara, dpl.absolvent_localitate,  dpl.absolvent_judet, 
                                  dpl.absolvent_denumire_instit,  dpl.absolvent_denumire_facult,  dpl.absolvent_domeniu,  dpl.absolvent_specializare, dpl.absolvent_titlu_obtinut,  dpl.absolvent_forma_invat, dpl.absolvent_nr_sem_buget, 
                                  dpl.absolvent_nr_sem_bursa, dpl.absolvent_diplo_serie, dpl.absolvent_diplo_nr, TO_CHAR(dpl.absolvent_dipl_data_emitere, 'dd month yyyy', 'NLS_DATE_LANGUAGE=romanian'), dpl.absolvent_nr_foaie_matricola, 
                                  dpl.absolvent_act_rec_nr, dpl.absolvent_act_rec_serie, TO_CHAR(dpl.absolvent_act_rec_data_echiv, 'dd month yyyy', 'NLS_DATE_LANGUAGE=romanian'), dpl.absolvent_durata_studiilor , dpl.absolvent_cu_diploma ,cl.medie_examen_licenta, cl.medie_admitere,
                                  ol.preferinta_1, ol.preferinta_2, ol.preferinta_3, ol.preferinta_4, ol.preferinta_5, ol.preferinta_6, ol.preferinta_7, ol.preferinta_8, ol.preferinta_9, ol.preferinta_10, ol.preferinta_11, ol.optiune_admitere_taxa, 
                                  il.diploma_bac_original, il.doc_echiv_preuniv_original, il.diploma_licenta_original, il.dipl_echiv_licenta_original, il.particip_altundeva, il.universitate1, il.facultate1, il.universitate2, il.facultate2, il.universitate3,  il.facultate3,
                                  ch.site_admitere, ch.site_facultate, ch.pagina_facebook, ch.prieteni, ch.presa, ch.alte_surse, ch.prestigiu, ch.calitate, ch.sfat_persoane, ch.statut_profesie, ch.colegii, ch.materiile, ch.informatiile_universitatii, ch.apropierea, ch.prof_facultate
                             
                                  
                                  INTO :nr_chitanta, :suma, :scutit, :motiv_scutire, :nume_familie_nastere,
                                  :initialele_tatalui_mamei, :nume_familie_actual, :prenume_candidat, :prenume_tata, :prenume_mama, :cnp, :sex, :data_nasterii,
                                  :tara_nasterii, :judetul_nasterii, :localitatea_nasterii, :cetatenia, :nationalitate, :etnie, :limba_materna, :stare_civila, :tip_act_ident, :serie_act, :numar_act,
                                  :eliberat_de, :data_eliberarii, :data_expirarii, :mediu_domiciliu, :tara_domiciliu, :judet_domiciliu, :localitate_domiciliu, :strada, :numar , :bloc , :scara , :etaj , :apartament , :cod_postal, :telefon , :email , :solicita_cazare_studii , :stare_sociala_speciala , :persoana_cu_dizabilitati ,
                                  
                                  :liceul_absolvit , :tara_liceu , :localitate_liceu , :judet_liceu , :profil_liceu , :durata_studiilor_liceu , :anul_absolvirii_liceu , :forma_invatamant_liceu , :serie_diploma_bac , :nr_diploma_bac, :data_emiterii_diploma , :nr_foii_matricole, :nr_act_rec_echiv, :serie_act_rec_echiv, :data_rec_echiv , :tara_fac , :localitate_fac , :judet_fac , :denumire_institutie_fac , :denumire_facultate, :denumire_domeniu_licenta , :specializare ,
                                  
                                  
                                  
                                  :titlu_obtinut , :forma_invatamant_fac , :nr_sem_buget , :nr_sem_bursa , :durata_studii , :diplo_licenta_serie , :diplo_licenta_nr, :dipl_data_emitere , :nr_foaie_matricola , :act_rec_licenta , :nr_act_rec_licenta , :serie_act_rec_licenta , :data_act_rec_licenta , :in_curs_student_alta_fac , :in_curs_tara_master , :in_curs_localitate_master , :in_curs_judet_master, :in_curs_denum_instit_master , :in_curs_denum_facultate_master , :in_curs_denum_domeniu_master , :in_curs_specializare_master , :in_curs_forma_invat_master ,
                                  
                                  :in_curs_an_master , :in_curs_nr_sem_buget_master , :in_curs_nr_sem_bursa_master , :absolvent_an , :absolvent_tara , :absolvent_localitate , :absolvent_judet , :absolvent_denumire_instit, :absolvent_denumire_facult , :absolvent_domeniu , :absolvent_specializare , :absolvent_titlu_obtinut, :absolvent_forma_invat , :absolvent_nr_sem_buget , 
                                  :absolvent_nr_sem_bursa , :absolvent_diplo_serie , :absolvent_diplo_nr , :absolvent_dipl_data_emitere, :absolvent_nr_foaie_matricola ,
                                  :absolvent_act_rec_nr , :absolvent_act_rec_serie , :absolvent_act_rec_data_echiv , :absolvent_durata_studiilor,:absolvent_cu_diploma , :medie_examen_licenta , :medie_admitere , 
                                  :preferinta_1 , :preferinta_2 ,:preferinta_3 , :preferinta_4 , :preferinta_5 , :preferinta_6 , :preferinta_7 , :preferinta_8 , :preferinta_9 , :preferinta_10 , :preferinta_11 , :optiune_admitere_taxa ,
                                  
                                  :diploma_bac_original , :doc_echiv_preuniv_original , :diploma_licenta_original , :dipl_echiv_licenta_original, :participa_altundeva , :universitate1, :facultate1, :universitate2, :facultate2, :universitate3, :facultate3, 
                                  :site_admitere , :site_facultate, :pagina_facebook , :prieteni, :presa , :alte_surse , :prestigiu , :calitate , :sfat_persoane , :statut_profesie , :colegii , :materiile , :informatiile_universitatii , :apropierea, :prof_facultate FROM Date_personale_master dpc
                                                 
                                                 JOIN Formular_master f ON f.id=dpc.formular_id
                                                 JOIN Date_preg_anterioara_master dpl ON dpl.formular_id = f.id
                                                 
                                                 JOIN Cerinte_master cl ON cl.formular_id = f.id
                                                 JOIN Ordine_preferinte_master ol ON ol.formular_id = f.id
                                                 JOIN Informatii_documente_master il ON il.formular_id = f.id
                                                 JOIN Chestionar_master ch ON ch.formular_id = f.id
                                                 
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
      oci_bind_by_name($s, ":serie_act", $serie_act, 100);
      oci_bind_by_name($s, ":numar_act", $numar_act, 100);
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
     oci_bind_by_name($s, ":tara_fac", $tara_fac, 100);
     oci_bind_by_name($s, ":localitate_fac", $localitate_fac, 100);
     oci_bind_by_name($s, ":judet_fac", $judet_fac, 100);
     oci_bind_by_name($s, ":denumire_institutie_fac", $denumire_institutie_fac, 100);
     oci_bind_by_name($s, ":denumire_facultate", $denumire_facultate, 100);
     oci_bind_by_name($s, ":denumire_domeniu_licenta", $denumire_domeniu_licenta, 100);
     oci_bind_by_name($s, ":specializare", $specializare, 100);
   
     oci_bind_by_name($s, ":titlu_obtinut", $titlu_obtinut, 100);
     oci_bind_by_name($s, ":forma_invatamant_fac", $forma_invatamant_fac, 100);
     oci_bind_by_name($s, ":nr_sem_buget", $nr_sem_buget, 100);
     oci_bind_by_name($s, ":nr_sem_bursa", $nr_sem_bursa, 100);
     oci_bind_by_name($s, ":durata_studii", $durata_studii, 100);
     oci_bind_by_name($s, ":diplo_licenta_serie", $diplo_licenta_serie, 100);
     oci_bind_by_name($s, ":diplo_licenta_nr", $diplo_licenta_nr, 100);
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
     oci_bind_by_name($s, ":absolvent_titlu_obtinut", $absolvent_titlu_obtinut, 100);
     oci_bind_by_name($s, ":absolvent_nr_sem_bursa", $absolvent_nr_sem_bursa, 100);
     oci_bind_by_name($s, ":absolvent_diplo_serie", $absolvent_diplo_serie, 100);
     oci_bind_by_name($s, ":absolvent_diplo_nr", $absolvent_diplo_nr, 100);
     oci_bind_by_name($s, ":absolvent_dipl_data_emitere", $absolvent_dipl_data_emitere, 100);
     oci_bind_by_name($s, ":absolvent_nr_foaie_matricola", $absolvent_nr_foaie_matricola, 100);
     oci_bind_by_name($s, ":absolvent_act_rec_nr", $absolvent_act_rec_nr, 100);
     oci_bind_by_name($s, ":absolvent_act_rec_serie", $absolvent_act_rec_serie, 100);
     oci_bind_by_name($s, ":absolvent_act_rec_data_echiv", $absolvent_act_rec_data_echiv, 100);
     oci_bind_by_name($s, ":absolvent_durata_studiilor", $absolvent_durata_studiilor, 100);
     oci_bind_by_name($s, ":absolvent_cu_diploma", $absolvent_cu_diploma, 100);
     
     
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
     
	  $pdf = new tFPDF('P', 'mm', 'A4' );
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
	$pdf->Cell(50, 20, 'Studii universitare de MASTER - forma de învățământ:', 0, 0, 'C');
	
	$pdf->Ln(5);
	$pdf->Cell(72);
	$pdf->SetFont('DejaVu','I',9);
	$pdf->Cell(50, 20, 'învățământ cu frecvență; învățământ cu frecvență redusă;', 0, 0, 'C');
	
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

	  $pdf->Ln(1);
	  $pdf->SetFont('DejaVu','B',8);
	  $pdf->Cell(0,10,'Numele de familie actual (după căsătorie, modificare la cerere conform actului doveditor, dacă este cazul)',0,0,'C');
	  
	  $pdf->Ln(7);
	  $pdf->Cell(10);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->Cell(170,6,''.mb_strtoupper($nume_familie_actual, 'UTF-8'),1,0,'L');
	  
	  $pdf->Ln(5);
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
	  $pdf->MultiCell(45, 6,'Numarul',1,  1);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',7);

	  $pdf->Cell(10);
	  $pdf->MultiCell(80, 6, ''.$tip_act_ident, 1, 1);
	  $pdf->SetXY($x + 90, $y);
	  $pdf->MultiCell(45, 6,''.$serie_act,1,  1);
	  $pdf->SetXY($x + 135, $y);
	  $pdf->MultiCell(45, 6,''.$numar_act,1,  1);

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
	  
      //Conditii speciale ale candidatului (dizabilitati / stare sociala)
	 
	 $raspuns_dizabilitati = 'NU';
	 if($persoana_cu_dizabilitati == 1) $raspuns_dizabilitati = 'DA';
	 
	 $raspuns_stare_sociala_speciala = 'NU';
	 if($stare_sociala_speciala == 2) $raspuns_stare_sociala_speciala = 'Orfan de un părinte';
	 if($stare_sociala_speciala == 3) $raspuns_stare_sociala_speciala = 'Orfan de ambii părinți';
	 if($stare_sociala_speciala == 4) $raspuns_stare_sociala_speciala = 'Provenit din case de copii';
	 if($stare_sociala_speciala == 5) $raspuns_stare_sociala_speciala = 'Provenit din plasament familial';
	 if($stare_sociala_speciala == 6) $raspuns_stare_sociala_speciala = 'Provenit din familie monoparentală';
     
	 $pdf->Ln(8);
	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',7.6);
	 $pdf->Cell(10);
     $pdf->MultiCell(51, 6, 'Solicit. caz. pe timpul studiilor', 1, 1);
     $pdf->SetXY($x + 61, $y);
	 $pdf->MultiCell(67, 6, 'Candidat încadrat în categ. pers.cu dizabil.', 1, 1);
	 $pdf->SetXY($x + 128, $y);
	 $pdf->MultiCell(52, 6,'Stare socială specială',1,  1);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',7);

     $pdf->Cell(10);
     $pdf->MultiCell(51, 6, ''.$raspuns_cazare_studii, 1, 1);
     $pdf->SetXY($x + 61, $y);
	 $pdf->MultiCell(67, 6, ''.$raspuns_dizabilitati, 1, 1);
	 $pdf->SetXY($x + 128, $y);
	 $pdf->MultiCell(52, 6,''.$raspuns_stare_sociala_speciala,1,  1);
	 
	 $pdf->SetLineWidth(0.5);
	 $pdf->Line(10, 135.5, 210-10, 135.5);

	 $pdf->Ln(23);
	 $pdf->SetFont('DejaVu','B',10);
	 $pdf->Cell(10);

	 $pdf->Cell(0,0,'II. DATE PRIVIND PREGATIREA ANTERIOARĂ A CANDIDATULUI',0,1);
	 $pdf->SetLineWidth(0);
	 $pdf->Line(20, 141.5, 210-20, 141.5); 
	 
	 $pdf->Ln(10);
	 $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(0,10,'II.a.Studiile preuniversitare absolvite, nivel liceu',0,0,'C');

      $pdf->Ln(7);
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
   
	 $pdf->Ln(5);
    
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
      
     $pdf->Ln(8);
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
     
     //Pagina 3

	  $pdf->AddPage();
	  $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 15, 210-10, 15);

      $pdf->SetLineWidth(0);
	  $pdf->Ln(7);

      //II.b stuff
      $pdf->SetFont('DejaVu','B',8);
	  $pdf->Cell(0,10,'II.b.Studiile universitare de licenta absolvite',0,0,'C');

     $pdf->Ln(7); 
     $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',7.6);
	 $pdf->Cell(10);
	 $pdf->MultiCell(27, 6,'Țara',1,  1); 
     $pdf->SetXY($x + 37, $y);
	 $pdf->MultiCell(35, 6,'Localitate',1,  1); 
     $pdf->SetXY($x + 72, $y);
	 $pdf->MultiCell(20, 6,'Județul',1,  1);
     $pdf->SetXY($x + 92, $y);
	 $pdf->MultiCell(53, 6,'Domeniul',1,  1);
     $pdf->SetXY($x + 145, $y);
     $pdf->MultiCell(35, 6,'Formă de învățământ',1,  1);  
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',6.5);
	 $pdf->Cell(10);
	 $pdf->MultiCell(27, 6,''.$tara_fac,1,  1); 
     $pdf->SetXY($x + 37, $y);
	 $pdf->MultiCell(35, 6,''.$localitate_fac,1,  1); 
     $pdf->SetXY($x + 72, $y);
	 $pdf->MultiCell(20, 6,''.$judet_fac,1,  1);
     $pdf->SetXY($x + 92, $y);
	 $pdf->MultiCell(53, 6,''.$denumire_domeniu_licenta,1,  1);
     $pdf->SetXY($x + 145, $y);
	 $pdf->MultiCell(35, 6,''.$forma_invatamant_fac,1,  1);
     
     $pdf->Ln(2); 
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
	 $pdf->MultiCell(70, 6,''.$denumire_facultate,1,  1);
      
	 $pdf->Ln(2);
    
	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
	 $pdf->MultiCell(55, 6,'Program studii/Specializare',1,  1); 
     $pdf->SetXY($x + 65, $y);
	 $pdf->MultiCell(45, 6,'Titlul obținut',1,  1);
     $pdf->SetXY($x + 110, $y);
	 $pdf->MultiCell(38, 6,'Nr. sem. buget',1,  1);
     $pdf->SetXY($x + 148, $y);
     $pdf->MultiCell(32, 6,'Nr. sem. bursă',1,  1);
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',7);
	 $pdf->Cell(10);
	 $pdf->MultiCell(55, 6,''.$specializare,1,  1); 
     $pdf->SetXY($x + 65, $y);
	 $pdf->MultiCell(45, 6,''.$titlu_obtinut,1,  1);
     $pdf->SetXY($x + 110, $y);
	 $pdf->MultiCell(38, 6,''.$nr_sem_buget,1,  1);
     $pdf->SetXY($x + 148, $y);
     $pdf->MultiCell(32, 6,''.$nr_sem_bursa,1,  1);
      
    
     $pdf->Ln(2);
    
	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
	 $pdf->MultiCell(23, 6,'Durată studii',1,  1); 
     $pdf->SetXY($x + 33, $y);
	 $pdf->MultiCell(35, 6,'Dipl. master Seria',1,  1);
     $pdf->SetXY($x + 68, $y);
	 $pdf->MultiCell(32, 6,'Dipl. master Nr',1,  1); 
     $pdf->SetXY($x + 100, $y);
	 $pdf->MultiCell(40, 6,'Dată emitere',1,  1);
     $pdf->SetXY($x + 140, $y);
	 $pdf->MultiCell(40, 6,'Nr.foaie matr.',1,  1); 
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',7);
	 $pdf->Cell(10);
	 $pdf->MultiCell(23, 6,''.$durata_studii,1,  1); 
     $pdf->SetXY($x + 33, $y);
	 $pdf->MultiCell(35, 6,''.$diplo_licenta_serie,1,  1);
     $pdf->SetXY($x + 68, $y);
	 $pdf->MultiCell(32, 6,''.$diplo_licenta_nr,1,  1); 
     $pdf->SetXY($x + 100, $y);
	 $pdf->MultiCell(40, 6,''.$data_emitere,1,  1);
     $pdf->SetXY($x + 140, $y);
	 $pdf->MultiCell(40, 6,''.$nr_foaie_matricola,1,  1); 
      
     //Alte observatii facult.
     
     $pdf->Ln(1);
	 $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(0,10,'Alte observații (pentru cazurile în care candidatul a absolvit studiile anterioare în străinătate)',0,0,'C');

     $pdf->Ln(7); 
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
	 $pdf->MultiCell(50, 6, ''.$nr_act_rec_licenta, 1, 1);
	 $pdf->SetXY($x + 60, $y);
	 $pdf->MultiCell(60, 6,''.$serie_act_rec_licenta,1,  1); 
     $pdf->SetXY($x + 120, $y);
	 $pdf->MultiCell(60, 6,''.$data_act_rec_licenta,1,  1);
     
     //Emitere dipl. master
	 
	  $pdf->Ln(-1);
	  $pdf->SetFont('DejaVu','B',8);
	  $pdf->Cell(0,10,'Dipl. master Emisă de',0,0,'C');

	  $pdf->Ln(7);
      $pdf->Cell(10);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->Cell(170,6,''.mb_strtoupper($denumire_institutie_fac, 'UTF-8'),1,0,'L');
     
      
      //II.c stuff
     
      $pdf->Ln(11); 
	  $pdf->SetFont('DejaVu','B',8);
	  $pdf->Cell(0,10,'II.c.Studiile universitare de master în curs',0,0,'C');

       //Raspuns daca candidatul este student la alta facultate/univ
	 $raspuns_alta_facultate = 'NU';
	 if($in_curs_student_alta_fac == 1) $raspuns_alta_facultate = 'DA';
      
     $pdf->Ln(7); 
     $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
	 $pdf->MultiCell(40, 6, 'Student la altă fac/univ', 1, 1);
	 $pdf->SetXY($x + 50, $y);
	 $pdf->MultiCell(27, 6,'Țara',1,  1); 
     $pdf->SetXY($x + 77, $y);
	 $pdf->MultiCell(32, 6,'Localitatea',1,  1); 
     $pdf->SetXY($x + 109, $y);
	 $pdf->MultiCell(26, 6,'Județul',1,  1);
     $pdf->SetXY($x + 135, $y);
	 $pdf->MultiCell(45, 6,'Domeniul',1,  1);
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',6.5);
	 $pdf->Cell(10);
	 $pdf->MultiCell(40, 6, ''.$raspuns_alta_facultate, 1, 1);
	 $pdf->SetXY($x + 50, $y);
	 $pdf->MultiCell(27, 6,''.$in_curs_tara_master,1,  1); 
     $pdf->SetXY($x + 77, $y);
	 $pdf->MultiCell(32, 6,''.$in_curs_localitate_master,1,  1); 
     $pdf->SetXY($x + 109, $y);
	 $pdf->MultiCell(26, 6,''.$in_curs_judet_master,1,  1);
     $pdf->SetXY($x + 135, $y);
	 $pdf->MultiCell(45, 6,''.$in_curs_denum_domeniu_master,1,  1);
     
     $pdf->Ln(2); 
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
	 
	 $pdf->MultiCell(100, 6,''.mb_strtoupper($in_curs_denum_instit_master, 'UTF-8'),1,  1);
     $pdf->SetXY($x + 110, $y);
	 $pdf->MultiCell(70, 6,''.$in_curs_denum_facultate_master,1,  1);
      
	 $pdf->Ln(2);
    
	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
	 $pdf->MultiCell(54, 6,'Program de studii/Specializare',1,  1); 
     $pdf->SetXY($x + 64, $y);
	 $pdf->MultiCell(44, 6,'Forma de învățământ',1,  1); 
     $pdf->SetXY($x + 108, $y);
	 $pdf->MultiCell(10, 6,'Anul',1,  1);
     $pdf->SetXY($x + 118, $y);
	 $pdf->MultiCell(31, 6,'Nr. sem. buget',1,  1);
     $pdf->SetXY($x + 149, $y);
	 $pdf->MultiCell(31, 6,'Nr. sem. bursă',1,  1);
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',7);
	 $pdf->Cell(10);
	 $pdf->MultiCell(54, 6,''.$in_curs_specializare_master,1,  1); 
     $pdf->SetXY($x + 64, $y);
	 $pdf->MultiCell(44, 6,''.$in_curs_forma_invat_master,1,  1); 
     $pdf->SetXY($x + 108, $y);
	 $pdf->MultiCell(10, 6,''.$in_curs_an_master,1,  1);
     $pdf->SetXY($x + 118, $y);
	 $pdf->MultiCell(31, 6,''.$in_curs_nr_sem_buget_master,1,  1);
     $pdf->SetXY($x + 149, $y);
	 $pdf->MultiCell(31, 6,''.$in_curs_nr_sem_bursa_master,1,  1);
      
     
     
                                            //                  II.c studii absolvite
      
     $pdf->Ln(7);

     $pdf->SetFont('DejaVu','B',8);
     $pdf->Cell(0,10,'II.c.Studiile universitare de master absolvite',0,0,'C');

     //Raspuns cu/fara diploma de master
	 
     $raspuns_diploma_master = null;
	 if($absolvent_cu_diploma == 1) $raspuns_diploma_master = 'CU DIPLOMA';
     else if($absolvent_cu_diploma == 2) $raspuns_diploma_master = 'FĂRĂ DIPLOMĂ';
     
     $pdf->Ln(7); 
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
	 $pdf->MultiCell(27, 6, ''.$absolvent_an, 1, 1);
	 $pdf->SetXY($x + 37, $y);
	 $pdf->MultiCell(44, 6,''.$raspuns_diploma_master,1,  1); 
     $pdf->SetXY($x + 81, $y);
	 $pdf->MultiCell(27, 6,''.$absolvent_tara,1,  1); 
     $pdf->SetXY($x + 108, $y);
	 $pdf->MultiCell(42, 6,''.$absolvent_localitate,1,  1); 
     $pdf->SetXY($x + 150, $y);
	 $pdf->MultiCell(30, 6,''.$absolvent_judet,1,  1);
      
     $pdf->Ln(2); 
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
	 
	 $pdf->MultiCell(100, 6,''.mb_strtoupper($absolvent_denumire_instit, 'UTF-8'),1,  1);
     $pdf->SetXY($x + 110, $y);
	 $pdf->MultiCell(70, 6,''.$absolvent_denumire_facult,1,  1); 
     
	 $pdf->Ln(2);
    
	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',7.6);
	 $pdf->Cell(10);
     $pdf->MultiCell(27, 6,'Domeniul',1,  1);
     $pdf->SetXY($x + 37, $y);
	 $pdf->MultiCell(45, 6,'Program studii/Specializare',1,  1); 
     $pdf->SetXY($x + 82, $y);
	 $pdf->MultiCell(33, 6,'Titlul obținut',1,  1);
     $pdf->SetXY($x + 115, $y);
	 $pdf->MultiCell(35, 6,'Forma de învățământ',1,  1); 
     $pdf->SetXY($x + 150, $y);
	 $pdf->MultiCell(30, 6,'Nr.sem buget',1,  1);
  
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',7);
	 $pdf->Cell(10);
     $pdf->MultiCell(27, 6,''.$absolvent_domeniu,1,  1);
     $pdf->SetXY($x + 37, $y);
	 $pdf->MultiCell(45, 6,''.$absolvent_specializare,1,  1); 
     $pdf->SetXY($x + 82, $y);
	 $pdf->MultiCell(33, 6,''.$absolvent_titlu_obtinut,1,  1);
     $pdf->SetXY($x + 115, $y);
	 $pdf->MultiCell(35, 6,''.$absolvent_forma_invat,1,  1); 
     $pdf->SetXY($x + 150, $y);
	 $pdf->MultiCell(30, 6,''.$absolvent_nr_sem_buget,1,  1);
      
    
     $pdf->Ln(2);
    
	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',7.6);
	 $pdf->Cell(10);
     $pdf->MultiCell(32, 6,'Nr. semestre bursă',1,  1);
     $pdf->SetXY($x + 42, $y);
	 $pdf->MultiCell(23, 6,'Durată studii',1,  1); 
     $pdf->SetXY($x + 65, $y);
	 $pdf->MultiCell(32, 6,'Dipl. master Seria',1,  1);
     $pdf->SetXY($x + 97, $y);
	 $pdf->MultiCell(26, 6,'Dipl. master Nr',1,  1); 
     $pdf->SetXY($x + 123, $y);
	 $pdf->MultiCell(30, 6,'Dată emitere',1,  1);
     $pdf->SetXY($x + 153, $y);
	 $pdf->MultiCell(27, 6,'Nr.foaie matr.',1,  1); 
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',7);
	 $pdf->Cell(10);
     $pdf->MultiCell(32, 6,''.$absolvent_nr_sem_bursa,1,  1);
     $pdf->SetXY($x + 42, $y);
	 $pdf->MultiCell(23, 6,''.$absolvent_durata_studiilor,1,  1); 
     $pdf->SetXY($x + 65, $y);
	 $pdf->MultiCell(32, 6,''.$absolvent_diplo_serie,1,  1);
     $pdf->SetXY($x + 97, $y);
	 $pdf->MultiCell(26, 6,''.$absolvent_diplo_nr,1,  1); 
     $pdf->SetXY($x + 123, $y);
	 $pdf->MultiCell(30, 6,''.$absolvent_dipl_data_emitere,1,  1);
     $pdf->SetXY($x + 153, $y);
	 $pdf->MultiCell(27, 6,''.$absolvent_nr_foaie_matricola,1,  1); 
      
      
      
    //Observatii II.c
      
     $pdf->Ln(1);
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
	 $pdf->MultiCell(50, 6, ''.$absolvent_act_rec_nr, 1, 1);
	 $pdf->SetXY($x + 60, $y);
	 $pdf->MultiCell(60, 6,''.$absolvent_act_rec_serie,1,  1); 
     $pdf->SetXY($x + 120, $y);
	 $pdf->MultiCell(60, 6,''.$absolvent_act_rec_data_echiv,1,  1);

     //Emitere dipl. master
	 
	  $pdf->Ln(-1);
	  $pdf->SetFont('DejaVu','B',8);
	  $pdf->Cell(0,10,'Dipl. master Emisă de',0,0,'C');

	  $pdf->Ln(7);
      $pdf->Cell(10);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->Cell(170,6,''.mb_strtoupper($absolvent_denumire_instit, 'UTF-8'),1,0,'L');
     
     //Linie pt footer
      
     $pdf->SetLineWidth(0.5);
	 $pdf->Line(10, 270.5, 210-10, 270.5);
      
      
      
    //                          III. Cerinte pt fac.  
    
      
     $pdf->AddPage();
	 $pdf->SetLineWidth(0.5);
	 $pdf->Line(10, 15, 210-10, 15);

	 $pdf->Ln(8);
     $pdf->SetFont('DejaVu','B',10);
	 $pdf->Cell(10);
      
	 $pdf->Cell(0,0,'III. CERINȚE SPECIFICE FACULTĂȚII',0,1);
	 $pdf->SetLineWidth(0);
	 $pdf->Line(21, 20, 210-20, 21); 
	 
	 $pdf->Ln(11);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',8);

	  $pdf->Cell(10);
	  $pdf->MultiCell(85, 6, 'Media E.C.T.S.', 1, 1);
	  $pdf->SetXY($x + 95, $y);
	  $pdf->MultiCell(85, 6,'Notă licență',1,  1);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',7);

	  $pdf->Cell(10);
	  $pdf->MultiCell(85, 6, ''.$medie_examen_licenta, 1, 1);
	  $pdf->SetXY($x + 95, $y);
	  $pdf->MultiCell(85, 6,''.$medie_admitere,1,  1);
	  
	  $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 52, 210-10, 52);

	  $pdf->Ln(14);
	  $pdf->SetFont('DejaVu','B',10);
	  $pdf->Cell(10);

	  $pdf->Cell(0,0,'IV. OPȚIUNEA DE ADMITERE, ÎN ORDINEA PREFERINȚELOR',0,1);
	  $pdf->SetLineWidth(0);
	  $pdf->Line(20, 57.5, 210-20, 57.5); 

	  $pdf->Ln(11);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',8);

	  $pdf->Cell(10);
	  $pdf->MultiCell(50, 6, 'Ordine preferință', 1, 1);
	  $pdf->SetXY($x + 60, $y);
	  $pdf->MultiCell(120, 6,'Domeniul/Programul',1,  1);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',7);

	  $pdf->Cell(10);
	  $pdf->MultiCell(50, 6, '1', 1, 1);
	  $pdf->SetXY($x + 60, $y);
	  $pdf->MultiCell(120, 6,''.$preferinta_1,1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',7);

	  $pdf->Cell(10);
	  $pdf->MultiCell(50, 6, '2', 1, 1);
	  $pdf->SetXY($x + 60, $y);
	  $pdf->MultiCell(120, 6,''.$preferinta_2,1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',7);

	  $pdf->Cell(10);
	  $pdf->MultiCell(50, 6, '3', 1, 1);
	  $pdf->SetXY($x + 60, $y);
	  $pdf->MultiCell(120, 6,''.$preferinta_3,1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',7);

	  $pdf->Cell(10);
	  $pdf->MultiCell(50, 6, '4', 1, 1);
	  $pdf->SetXY($x + 60, $y);
	  $pdf->MultiCell(120, 6,''.$preferinta_4,1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',7);

	  $pdf->Cell(10);
	  $pdf->MultiCell(50, 6, '5', 1, 1);
	  $pdf->SetXY($x + 60, $y);
	  $pdf->MultiCell(120, 6,''.$preferinta_5,1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',7);

	  $pdf->Cell(10);
	  $pdf->MultiCell(50, 6, '6', 1, 1);
	  $pdf->SetXY($x + 60, $y);
	  $pdf->MultiCell(120, 6,''.$preferinta_6,1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',7);

	  $pdf->Cell(10);
	  $pdf->MultiCell(50, 6, '7', 1, 1);
	  $pdf->SetXY($x + 60, $y);
	  $pdf->MultiCell(120, 6,''.$preferinta_7,1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',7);

	  $pdf->Cell(10);
	  $pdf->MultiCell(50, 6, '8', 1, 1);
	  $pdf->SetXY($x + 60, $y);
	  $pdf->MultiCell(120, 6,''.$preferinta_8,1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',7);

	  $pdf->Cell(10);
	  $pdf->MultiCell(50, 6, '9', 1, 1);
	  $pdf->SetXY($x + 60, $y);
	  $pdf->MultiCell(120, 6,''.$preferinta_9,1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',7);

	  $pdf->Cell(10);
	  $pdf->MultiCell(50, 6, '10', 1, 1);
	  $pdf->SetXY($x + 60, $y);
	  $pdf->MultiCell(120, 6,''.$preferinta_10,1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',7);

	  $pdf->Cell(10);
	  $pdf->MultiCell(50, 6, '11', 1, 1);
	  $pdf->SetXY($x + 60, $y);
	  $pdf->MultiCell(120, 6,''.$preferinta_11,1,  1);
	  
	  $pdf->Ln(4);

	  $pdf->SetFont('DejaVu','B',8);
	  $pdf->Cell(0,10,'Acceptarea înmatriculării în caz că nu a fost admis pe buget',0,0,'C');

      $stare_taxa = null;
      if($optiune_admitere_taxa == 1) $stare_taxa = 'Da';
      if($optiune_admitere_taxa == 2) $stare_taxa = 'Nu';
      if($optiune_admitere_taxa == 3) $stare_taxa = 'Numai cu Taxă';
          
	  $pdf->Ln(7);
	  $pdf->Cell(69.5);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->Cell(50,6,''.$stare_taxa,1,0,'C');

      $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 171, 210-10, 171);

	  $pdf->Ln(25);
	  $pdf->Cell(10);
      
      //Preferinte
      
      $pdf->SetFont('DejaVu','B',10);
	  $pdf->Cell(0,0,'V. INFORMAȚII PRIVIND DOCUMENTELE DE STUDII DEPUSE LA DOSAR',0,1);
	  $pdf->SetLineWidth(0);
	  $pdf->Line(20, 176.5, 210-20, 176.5);
      
      
	  $raspuns_diploma_bac_original = 'NU';
	  $raspuns_diploma_bac_copie = 'NU';
     
	  $raspuns_diploma_licenta_original = 'NU';
	  $raspuns_diploma_licenta_copie = 'NU';
     
	  $raspuns_echiv_studii_original = 'NU';
	  $raspuns_echiv_studii_copie = 'NU';
     
	  $raspuns_echiv_licenta_original = 'NU'; 
	  $raspuns_echiv_licenta_copie = 'NU';
          
	  if($diploma_bac_original == 1) $raspuns_diploma_bac_original = 'DA';
      else if($diploma_bac_original == 2) $raspuns_diploma_bac_copie = 'DA';
     
	  if($doc_echiv_preuniv_original == 1) $raspuns_echiv_studii_original = 'DA';
      else if($doc_echiv_preuniv_original == 2) $raspuns_echiv_studii_copie = 'DA';
     
	  if($diploma_licenta_original == 1) $raspuns_diploma_licenta_original = 'DA';
      else if($diploma_licenta_original == 2) $raspuns_diploma_licenta_copie = 'DA';
     
	  if($dipl_echiv_licenta_original == 1) $raspuns_echiv_licenta_original = 'DA';
      else if($dipl_echiv_licenta_original == 2) $raspuns_echiv_licenta_copie = 'DA';
  
     
      $pdf->Ln(12); 
      $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('DejaVu','B',7.6);
	  $pdf->Cell(57);
	  $pdf->MultiCell(64, 6, 'Diplomă de BAC (original)', 1, 1);
	  $pdf->SetXY($x + 121, $y);
      $pdf->SetFont('DejaVu','B',7);
	  $pdf->MultiCell(10, 6,''.$raspuns_diploma_bac_original,1,  1);
      
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',7.6);
	 $pdf->Cell(57);
     $pdf->MultiCell(64, 6, 'Diplomă de BAC (copie legaliz)', 1, 1);
     $pdf->SetXY($x + 121, $y);
     $pdf->SetFont('DejaVu','B',7);
     $pdf->MultiCell(10, 6,''.$raspuns_diploma_bac_copie,1,  1);
     
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',7.6);
	 $pdf->Cell(57);
     $pdf->MultiCell(64, 6, 'Doc. echiv. studii preuniv.(original)', 1, 1);
	 $pdf->SetXY($x + 121, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(10, 6,''.$raspuns_echiv_studii_original,1,  1);
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',7.6);
	 $pdf->Cell(57);
     $pdf->MultiCell(64, 6, 'Doc. echiv. studii preuniv(copie legaliz)', 1, 1);
	 $pdf->SetXY($x + 121, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(10, 6,''.$raspuns_echiv_studii_copie,1,  1);
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',7.6);
	 $pdf->Cell(57);
     $pdf->MultiCell(64, 6, 'Diplomă de licență (original)', 1, 1);
	 $pdf->SetXY($x + 121, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(10, 6,''.$raspuns_diploma_licenta_original,1,  1);
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',7.6);
	 $pdf->Cell(57);
     $pdf->MultiCell(64, 6, 'Diplomă de licență (copie legaliz)', 1, 1);
	 $pdf->SetXY($x + 121, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(10, 6,''.$raspuns_diploma_licenta_copie,1,  1);
    
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',7.6);
	 $pdf->Cell(57);
     $pdf->MultiCell(64, 6, 'Doc. echiv studii licență (original)', 1, 1);
	 $pdf->SetXY($x + 121, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(10, 6,''.$raspuns_echiv_licenta_original,1,  1);
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',7.6);
	 $pdf->Cell(57);
     $pdf->MultiCell(64, 6, 'Doc. echiv studii licență (copie legaliz)', 1, 1);
	 $pdf->SetXY($x + 121, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(10, 6,''.$raspuns_echiv_licenta_copie,1,  1);
      
     //Participa si la alte concursuri de admitere
     
     $raspuns_participa_alt = 'NU';
     if($participa_altundeva == 1) $raspuns_participa_alt = 'DA';
     
     $pdf->Ln(12);
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',7.6);
	 $pdf->Cell(57);
     $pdf->MultiCell(64, 6, 'Particip. la alt/e concurs/uri de admitere', 1, 1);
	 $pdf->SetXY($x + 121, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(10, 6,''.$raspuns_participa_alt,1,  1); 
      
      
    //Linie footer...
      
    
     $pdf->SetLineWidth(0.5);
	 $pdf->Line(10, 274.5, 210-10, 274.5);  
    
   //Pagina 5   
    
     $pdf->AddPage();
     $pdf->SetLineWidth(0.5);
	 $pdf->Line(10, 15, 210-10, 15);
    
     $pdf->SetLineWidth(0);
	 $pdf->Ln(4);  
	 $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(0,10,'La ce alte concursuri de admitere participă',0,0,'C');

     $pdf->Ln(8.5); 
     $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
     $pdf->MultiCell(95, 6, 'Denumirea instituției de învățământ superior', 1, 1);
     $pdf->SetXY($x + 105, $y);
	 $pdf->MultiCell(75, 6,'Facultatea',1,  1);
      
      
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
	 $pdf->Line(10, 50.5, 210-10, 50.5);
      
	 $pdf->Ln(7);
	 $pdf->SetFont('DejaVu','B',10);
	 $pdf->Cell(10);

	 $pdf->Cell(0,0,'V. CONDIȚII DE ÎNCHEIERE A CONTRACTULUI',0,1);
	 $pdf->SetLineWidth(0);
	 $pdf->Line(20, 56, 210-20, 56);
      
	  $pdf->Ln(1.5);
	  $pdf->Cell(20);
	  $pdf->SetFont('DejaVu','B',8);
	  $pdf->Cell(0,10,'Taxe',0,0,'L');
	  
	  $pdf->Ln(3.5);
	  $pdf->Cell(25);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->Cell(0,10,'-Taxă de înscriere: 300 Ron',0,0,'L');
	 
	  $pdf->Ln(3.5);
	  $pdf->Cell(25);
	  $pdf->Cell(0,10,'-Taxă de școlarizare: 3900 Ron',0,0,'L');
	 
	  $pdf->Ln(3.5);
	  $pdf->Cell(20);
	  $pdf->SetFont('DejaVu','B',8);
	  $pdf->Cell(0,10,'Acte necesare',0,0,'L');
	  
	  $pdf->Ln(3.5);
	  $pdf->Cell(25);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->Cell(0,10,'-fișă de înscriere tip;',0,0,'L');
	  
	  $pdf->Ln(3.5);
	  $pdf->Cell(25);
	  $pdf->Cell(0,10,'-diplomă de bacalaureat și diplomă de licență (sau echivalentul ei), în original, sau atestate de echivalare',0,0,'L');
	  
	  $pdf->Ln(3.5);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'emise de C.N.R.E.D.;',0,0,'L');
	  
	  $pdf->Ln(3.5);
	  $pdf->Cell(25);
	  $pdf->Cell(0,10,'-foaia matricolă din facultate - nivel licență (cu media ECTS); aceasta nu este necesară în cazul în care media', 0, 0, 'L');
	  
	  $pdf->Ln(3.5);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'ECTS de nivel licență apare în documentele de la punctul anterior;',0,0,'L');
	 
	  $pdf->Ln(3.5);
	  $pdf->Cell(25);
	  $pdf->Cell(0,10,'-în cazul candidaților care sunt deja studenți/absolvenți/exmatriculați la studii de master:',0,0,'L');
	  
	  $pdf->Ln(3.5);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'adeverință din care să rezulte numărul de semestre urmate la buget/taxă, precum și numărul de semestre',0,0,'L');
	 
	  $pdf->Ln(3.5);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'în care a beneficiat de bursă, dacă este cazul;',0,0,'L');
	 
	  $pdf->Ln(3.5);
	  $pdf->Cell(25);
	  $pdf->Cell(0,10,'-original și copie după cerificatul de naștere;',0,0,'L');
	  
	  $pdf->Ln(3);
	  $pdf->Cell(25);
	  $pdf->Cell(0,10,'-original și copie după cartea de identitate;',0,0,'L');
	 
	  $pdf->Ln(3.5);
	  $pdf->Cell(25);
	  $pdf->Cell(0,10,'-original și copie după certificatul de căsătorie sau documentul care atestă schimbarea numelui;',0,0,'L');
	 
	  $pdf->Ln(3.5);
	  $pdf->Cell(25);
	  $pdf->Cell(0,10,'-două fotografii tip buletin',0,0,'L');
	  
	  $pdf->Ln(3.5);
	  $pdf->Cell(25);
	  $pdf->Cell(0,10,'-chitanță ce dovedește plata taxei de înscriere sau actele necesare pentru scutirea de plata taxei',0,0,'L');
	  
	  $pdf->Ln(3.5);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'(strict în condițiile metodologiei universităţii - art. 34-35);',0,0,'L');
	 
	  $pdf->Ln(3.5);
	  $pdf->Cell(25);
	  $pdf->Cell(0,10,'-adeverință medicală tip;',0,0,'L');
	  
	  $pdf->Ln(3.5);
	  $pdf->Cell(25);
	  $pdf->Cell(0,10,'-adeverință din care să rezulte calitatea de masterand (pentru masteranzii care urmează o a doua specializare);',0,0,'L');
	 
	  $pdf->Ln(3.5);
	  $pdf->Cell(25);
	  $pdf->Cell(0,10,'-dosar plic;',0,0,'L');
	  
	  $pdf->Ln(3.5);
	  $pdf->Cell(25);
	  $pdf->Cell(0,10,'-Important: este necesară de asemenea depunerea la dosar a unui abstract a lucrării de licență și a 3 referințe',0,0,'L');
	  
	  $pdf->Ln(3.5);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'bibliografice din contextul lucrării de licenţă (acestea vor constitui punctul de plecare al discuţiilor',0,0,'L');
	 
	  
	  $pdf->Ln(3.5);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'din cadrul interviului). Dacă lucrarea de licenţă este în alt domeniu decât Informatica, se vor menţiona',0,0,'L');
	  
	  $pdf->Ln(3.5);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'doar 3 referinţe bibliografice din domeniul Informatică pe care candidatul le-a studiat;',0,0,'L');
	  
      //Chestionaaaarrrr
      
      
      $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 150.5, 210-10, 150.5);

	  $pdf->Ln(15);
	  $pdf->Cell(10);

      
      
      //Preferinte
      
      $pdf->SetFont('DejaVu','B',10);
	  $pdf->Cell(0,0,'VII. CHESTIONAR PRIVIND ALEGEREA DUMNEAVOASTRĂ',0,1);
	  $pdf->SetLineWidth(0);
	  $pdf->Line(20, 156, 210-20, 156);
      
      //Prima intrebare
      
      $pdf->Ln(2);
      $pdf->Cell(10);
	  $pdf->SetFont('DejaVu','B',7);
	  $pdf->Cell(20,10,' De unde ați aflat despre admiterea la Universitatea',0,0,'L');
      
      $pdf->Cell(155,10,'Cât de importanți au fost următorii factori în alegerea facultății,',0,0,'R');  
      
      $pdf->Ln(4);
      $pdf->Cell(10);
      $pdf->Cell(20,10,'"Alexandru Ioan Cuza" din Iași (UAIC)?',0,0,'L');
      
      $pdf->Cell(149,10,'apreciați cât de mult a contat fiecare în opțiunea dv. privind',0,0,'R');
      
      $pdf->Ln(4);
      $pdf->Cell(141.5,10,'alegerea programului de master?',0,0,'R');
      
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
	 $pdf->MultiCell(62, 6, 'Prestigiul Universității/facultății', 1, 1);
     $pdf->SetXY($x + 160, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(20, 6,''.$prestigiu,1,  1);
      
     $site_facultate_raspuns = '';
	 if($site_facultate == 1) $site_facultate_raspuns = 'X';
     
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
     $pdf->MultiCell(62, 6, 'Site-ul facultății', 1, 1);
	 $pdf->SetXY($x + 72, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(15, 6,''.$site_facultate_raspuns,1,  1);
      
     //Chestionar 2 linia 3
      $x = $pdf->GetX();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->SetXY($x + 98, $y);
	 $pdf->MultiCell(62, 6, 'Calitatea educației la UAIC ', 1, 1);
     $pdf->SetXY($x + 160, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(20, 6,''.$calitate,1,  1); 
      
     $pagina_facebook_raspuns = '';
	 if($pagina_facebook == 1) $pagina_facebook_raspuns = 'X';
     
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
     $pdf->MultiCell(62, 6, 'Pagina de Facebook a Universității', 1, 1);
	 $pdf->SetXY($x + 72, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(15, 6,''.$pagina_facebook_raspuns,1,  1);

     //Chestionar 2 linia 4
      $x = $pdf->GetX();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->SetXY($x + 98, $y);
	 $pdf->MultiCell(62, 6, 'Sfatul persoanelor apropiate ', 1, 1);
     $pdf->SetXY($x + 160, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(20, 6,''.$sfat_persoane,1,  1);  
      
     $prieteni_raspuns = '';
	 if($prieteni == 1) $prieteni_raspuns = 'X';
     
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
     $pdf->MultiCell(62, 6, 'Prieteni, cunoștințe, rude', 1, 1);
	 $pdf->SetXY($x + 72, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(15, 6,''.$prieteni_raspuns,1,  1);
     
      //Chestionar 2 linia 5
      $x = $pdf->GetX();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->SetXY($x + 98, $y);
	 $pdf->MultiCell(62, 6, 'Statutul profesiei pentru care optați', 1, 1);
     $pdf->SetXY($x + 160, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(20, 6,''.$statut_profesie,1,  1);   
      
     $profesori_raspuns = '';
	 if($profesori == 1) $profesori_raspuns = 'X';
     
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
     $pdf->MultiCell(62, 6, 'Profesorii din facultate', 1, 1);
	 $pdf->SetXY($x + 72, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(15, 6,''.$profesori_raspuns,1,  1);
     
      //Chestionar 2 linia 6
      $x = $pdf->GetX();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->SetXY($x + 98, $y);
	 $pdf->MultiCell(62, 6, 'Colegii', 1, 1);
     $pdf->SetXY($x + 160, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(20, 6,''.$colegii,1,  1);   
      
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
      
      //Chestionar 2 linia 7
      $x = $pdf->GetX();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->SetXY($x + 98, $y);
	 $pdf->MultiCell(62, 6, 'Materiile care se studiază', 1, 1);
     $pdf->SetXY($x + 160, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(20, 6,''.$materiile,1,  1);    
      
     $x = $pdf->GetX();
     $y = $pdf->GetY();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
     $pdf->MultiCell(62, 6, 'Alte surse (mentionați care)...', 1, 1);
	 $pdf->SetXY($x + 72, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(15, 6,''.$alte_surse,1,  1);
     
      //Chestionar 2 linia 8
      $x = $pdf->GetX();

     $pdf->SetFont('DejaVu','B',8);
	 $pdf->SetXY($x + 98, $y);
	 $pdf->MultiCell(62, 6, 'Informațiile furnizate de Universitate', 1, 1);
     $pdf->SetXY($x + 160, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(20, 6,''.$informatiile_universitatii,1,  1);  
     
      //Chestionar 2 linia 9
      $x = $pdf->GetX();
      $y = $pdf->GetY();
      
     $pdf->SetFont('DejaVu','B',8);
	 $pdf->SetXY($x + 98, $y);
	 $pdf->MultiCell(62, 6, 'Apropierea de domiciliu', 1, 1);
     $pdf->SetXY($x + 160, $y);
     $pdf->SetFont('DejaVu','B',7);
	 $pdf->MultiCell(20, 6,''.$apropierea,1,  1);  
       
     //VIII
      
     $pdf->Ln(1);
     
     $pdf->SetFont('DejaVu','B',8);
	 $pdf->Cell(10);
	 $pdf->Cell(0,10,'VIII. Declar pe propria răspundere, cunoscând consecințele administrative și juridice ale declarațiilor',0,0,'L');
     $pdf->Ln(5);
     $pdf->Cell(10);
	 $pdf->Cell(0,10,'inexacte/false, ca datele furnizate în această fișă sunt conforme cu realitatea și că am luat la ',0,0,'L');
     $pdf->Ln(5);
     $pdf->Cell(10);
	 $pdf->Cell(0,10,'cunoștință prevederile metodologiei de admitere.',0,0,'L');
     
      
     //IX
      
     $pdf->SetFont('DejaVu','B',8);
     $pdf->Ln(9);
	 $pdf->Cell(10);
	 $pdf->Cell(0,10,'IX. Datele declarate de Dumneavoastra sunt prelucrate de Universitatea "Alexandru Ioan Cuza" din Iasi,',0,0,'L');
     $pdf->Ln(5);
     $pdf->Cell(10);
	 $pdf->Cell(0,10,'în conformitate cu prevederile Legii 677/2001, privind protecția persoanelor cu privire la prelucrarea',0,0,'L');
     $pdf->Ln(5);
     $pdf->Cell(10);
	 $pdf->Cell(0,10,'datelor cu caracter personal și libera circulație a acestor date, modificată și completată.',0,0,'L');
      
     $pdf->Ln(13);
	 $x = $pdf->GetX();
     $y = $pdf->GetY();
      
	 $pdf->Cell(10);
     $pdf->SetFont('DejaVu','B',8);
	 $pdf->MultiCell(85, 6, 'Semnatura ................................', 0, 1);
     $pdf->SetXY($x + 110, $y);
	 $pdf->MultiCell(70, 6,'Data ......................................', 0,  1);  
       
	 
	  //Linie footer pag. 5
      
     $pdf->SetLineWidth(0.5);
	 $pdf->Line(10, 280, 210-10, 280);
      
	  $pdf->SetLineWidth(0);
	  $pdf->Output();
            
         }
 

?>