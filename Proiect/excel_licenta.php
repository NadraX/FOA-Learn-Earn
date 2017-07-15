<?php

require('PHPExcel/Classes/PHPExcel/IOFactory.php');


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

    $myfile = fopen("csv_licenta.csv", "a") or die("Eroare la deschiderea/crearea fisierulu!");
	fwrite($myfile, $nr_chitanta."\t");
    fwrite($myfile, $suma."\t");

    //Scutit da/nu
    $raspuns_scutire = 'NU';
    if($scutit == 1) $raspuns_scutire = 'DA';
    fwrite($myfile, $raspuns_scutire."\t");

    fwrite($myfile, $motiv_scutire."\t");

    //Date personale

    fwrite($myfile, mb_strtoupper($nume_familie_nastere, 'UTF-8')."\t");
    fwrite($myfile, mb_strtoupper($initialele_tatalui_mamei, 'UTF-8')."\t");
    fwrite($myfile, mb_strtoupper($nume_familie_actual, 'UTF-8')."\t");
    fwrite($myfile, mb_strtoupper($prenume_candidat, 'UTF-8')."\t");
    fwrite($myfile, mb_strtoupper($prenume_mama, 'UTF-8')."\t");
    fwrite($myfile, mb_strtoupper($prenume_tata, 'UTF-8')."\t");
    fwrite($myfile, $cnp."\t");
    fwrite($myfile, $data_nasterii."\t");
    fwrite($myfile, $sex."\t");
    fwrite($myfile, $tara_nasterii."\t");
    fwrite($myfile, $judetul_nasterii."\t");
    fwrite($myfile, $localitatea_nasterii."\t");
    fwrite($myfile, $cetatenia."\t");
    fwrite($myfile, $nationalitate."\t");
    fwrite($myfile, $etnie."\t");
    fwrite($myfile, $limba_materna."\t");
    fwrite($myfile, $stare_civila."\t");
    fwrite($myfile, $tip_act_ident."\t");
    fwrite($myfile, $serie_ci."\t");
    fwrite($myfile, $numar_ci."\t");
    fwrite($myfile, $eliberat_de."\t");
    fwrite($myfile, $data_eliberarii."\t");
    fwrite($myfile, $data_expirarii."\t");

    //Verificare domiciliu (rural vs urban)

    $raspuns_domiciliu_stabil = 'Rural';
    if($mediu_domiciliu == 2) $raspuns_domiciliu_stabil = 'Urban';

    fwrite($myfile, $raspuns_domiciliu_stabil."\t");
    fwrite($myfile, $strada."\t");
    fwrite($myfile, $numar."\t");
    fwrite($myfile, $bloc."\t");
    fwrite($myfile, $scara."\t");
    fwrite($myfile, $etaj."\t");
    fwrite($myfile, $apartament."\t");
    fwrite($myfile, $localitate_domiciliu."\t");
    fwrite($myfile, $judet_domiciliu."\t");
    fwrite($myfile, $cod_postal."\t");
    fwrite($myfile, $tara_domiciliu."\t");
    fwrite($myfile, $telefon."\t");
    fwrite($myfile, $email."\t");

    //Raspuns in cazul solicitarii pt cazari
	 
	 $raspuns_cazare_studii = 'NU';
     $raspuns_cazare_test = 'NU';
	 if($solicita_cazare_studii == 1) $raspuns_cazare_studii = 'DA';
     if($raspuns_cazare_test == 1) $raspuns_cazare_test = 'DA';
      //Conditii speciale ale candidatului (dizabilitati / stare sociala)
	 
	 $raspuns_dizabilitati = 'NU';
	 if($persoana_cu_dizabilitati == 1) $raspuns_dizabilitati = 'DA';
	 
	 $raspuns_stare_sociala_speciala = 'NU';
	 if($stare_sociala_speciala == 2) $raspuns_stare_sociala_speciala = 'Orfan de un parinte';
	 if($stare_sociala_speciala == 3) $raspuns_stare_sociala_speciala = 'Orfan de ambii parinti';
	 if($stare_sociala_speciala == 4) $raspuns_stare_sociala_speciala = 'Provenit din case de copii';
	 if($stare_sociala_speciala == 5) $raspuns_stare_sociala_speciala = 'Provenit din plasament familial';
	 if($stare_sociala_speciala == 6) $raspuns_stare_sociala_speciala = 'Provenit din familie monoparentala';
     
    fwrite($myfile, $raspuns_cazare_studii."\t");
    fwrite($myfile, $raspuns_cazare_test."\t");
    fwrite($myfile, $raspuns_dizabilitati."\t");
    fwrite($myfile, $raspuns_stare_sociala_speciala."\t");
    
    //Preg anterioara

    fwrite($myfile, $liceul_absolvit."\t");
    fwrite($myfile, $localitate_liceu."\t");
    fwrite($myfile, $tara_liceu."\t");
    fwrite($myfile, $judet_liceu."\t");
    fwrite($myfile, $profil_liceu."\t");
    fwrite($myfile, $durata_studiilor_liceu."\t");
    fwrite($myfile, $anul_absolvirii_liceu."\t");
    fwrite($myfile, $forma_invatamant_liceu."\t");
    fwrite($myfile, $serie_diploma_bac."\t");
    fwrite($myfile, $nr_diploma_bac."\t");
    fwrite($myfile, $data_emiterii_diploma."\t");
    fwrite($myfile, $nr_foii_matricole."\t");
    fwrite($myfile, $nr_act_rec_echiv."\t");
    fwrite($myfile, $serie_act_rec_echiv."\t");
    fwrite($myfile, $data_rec_echiv."\t");

    //Raspuns daca candidatul este student la alta facultate/univ
	$raspuns_alta_facultate = 'NU';
	if($student_alta_fac == 1) $raspuns_alta_facultate = 'DA';
    fwrite($myfile, $raspuns_alta_facultate."\t");

    fwrite($myfile, $tara_fac."\t");
    fwrite($myfile, $localitate_fac."\t");
    fwrite($myfile, $judet_fac."\t");
    fwrite($myfile, $domeniu_licenta_fac."\t");
    fwrite($myfile, mb_strtoupper($denumire_institutie_fac, 'UTF-8')."\t");
    fwrite($myfile, $denumire_alta_facultate."\t");
    fwrite($myfile, $specializare_fac."\t");
    fwrite($myfile, $forma_invatamant_fac."\t");
    fwrite($myfile, $anul_fac."\t");
    fwrite($myfile, $nr_semestre_buget_fac."\t");
    fwrite($myfile, $nr_semestre_bursa_fac."\t");

    //Raspuns cu/fara diploma de licenta
	 
    $raspuns_diploma_licenta = 'FARA DIPLOMA';
	if($cu_licenta == 1) $raspuns_diploma_licenta = 'CU DIPLOMA';

    fwrite($myfile, $anul_absolvirii."\t");
    fwrite($myfile, $raspuns_diploma_licenta."\t");
    fwrite($myfile, $tara_fac_abs."\t");
    fwrite($myfile, $localitate_fac_abs."\t");
    fwrite($myfile, $judet_fac_abs."\t");
    fwrite($myfile, mb_strtoupper($denumire_institutie_abs, 'UTF-8')."\t");
    fwrite($myfile, $denumire_facultate_abs."\t");
    fwrite($myfile, $domeniu_licenta_abs."\t");
    fwrite($myfile, $specializare_abs."\t");
    fwrite($myfile, $titlut_obtinut."\t");
    fwrite($myfile, $forma_invatamant_abs."\t");

    fwrite($myfile, $nr_semestre_buget_abs."\t");
    fwrite($myfile, $nr_semestre_bursa_abs."\t");
    fwrite($myfile, $durata_studiilor_abs."\t");
    fwrite($myfile, $serie_diploma_licenta."\t");
    fwrite($myfile, $nr_diploma_licenta."\t");
    fwrite($myfile, $data_emiterii_licenta."\t");
    fwrite($myfile, $nr_supliment."\t");

    fwrite($myfile, $nr_act_rec_echiv_abs."\t");
    fwrite($myfile, $serie_acr_rec_echiv_abs."\t");
    fwrite($myfile, $data_echiv_abs."\t");

    //Cerinte licenta

    fwrite($myfile, $medie_generala_bac."\t");
    fwrite($myfile, $medie_disciplina_max."\t");
    fwrite($myfile, $optiune_test_scris."\t");

    //Echivalare cu diploma MEN
	 
	$raspuns_echiv_olimp = 'NU';
	if($solicita_echivalare == 1) $raspuns_echiv_olimp = 'DA';
    fwrite($myfile, $raspuns_echiv_olimp."\t");

    //             Pentru examenul de preadmitere

     $raspuns_particip_preadmitere = 'NU';
	 if($vrea_nota_preadmitere == 1) $raspuns_particip_preadmitere = 'DA';
	 fwrite($myfile, $raspuns_particip_preadmitere."\t");

	 $raspuns_doreste_sa_dea_din_nou = 'NU';
	 if($vrea_sa_sustina_examen == 1) $raspuns_doreste_sa_dea_din_nou = 'DA';
     fwrite($myfile, $raspuns_doreste_sa_dea_din_nou."\t");

    //Optiuni_licenta

    fwrite($myfile, $preferinta_1."\t");
    fwrite($myfile, $preferinta_2."\t");
    fwrite($myfile, $preferinta_3."\t");
    fwrite($myfile, $preferinta_4."\t");

    $rasp_stare_taxa = null;
    if($stare_taxa == 1) $rasp_stare_taxa = 'Da';
    if($stare_taxa == 2) $rasp_stare_taxa = 'Nu';
    if($stare_taxa == 3) $rasp_stare_taxa = 'Numai cu Taxa';
    
    fwrite($myfile, $rasp_stare_taxa."\t");

      //Info doc licenta
 
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


    fwrite($myfile, $raspuns_diploma_bac_original."\t");
    fwrite($myfile, $raspuns_diploma_bac_copie."\t");

    fwrite($myfile, $raspuns_adeverinta_original."\t");
    fwrite($myfile, $raspuns_adeverinta_copie."\t");

    fwrite($myfile, $raspuns_echiv_studii_original."\t");
    fwrite($myfile, $raspuns_echiv_studii_copie."\t");

    fwrite($myfile, $raspuns_diploma_olimpiada."\t");

     //Participa la alte concursuri
	 $raspuns_altundeva = 'NU';
	 if($participa_altundeva == 1) $raspuns_altundeva = 'DA';

    fwrite($myfile, $raspuns_altundeva."\t");
    fwrite($myfile, mb_strtoupper($universitate1, 'UTF-8')."\t");
    fwrite($myfile, $facultate1."\t");
    fwrite($myfile, mb_strtoupper($universitate2, 'UTF-8')."\t");
    fwrite($myfile, $facultate2."\t");
    fwrite($myfile, mb_strtoupper($universitate3, 'UTF-8')."\t");
    fwrite($myfile, $facultate3."\t");

    //Chestionar licenta

    $site_admitere_raspuns = '';
	if($site_admitere == 1) $site_admitere_raspuns = 'X';
    fwrite($myfile, $site_admitere_raspuns."\t");
    
    $site_facultate_raspuns = '';
    if($site_facultate == 1) $site_facultate_raspuns = 'X';
    fwrite($myfile, $site_facultate_raspuns."\t");

    $brosura_pliant_raspuns = '';
	if($brosura_pliant == 1) $brosura_pliant_raspuns = 'X';
    fwrite($myfile, $brosura_pliant_raspuns."\t");

    $pagina_facebook_raspuns = '';
    if($pagina_facebook == 1) $pagina_facebook_raspuns = 'X';
    fwrite($myfile, $pagina_facebook_raspuns."\t");

    $prieteni_raspuns = '';
	if($prieteni == 1) $prieteni_raspuns = 'X';
    fwrite($myfile, $prieteni_raspuns."\t");

    $sapatamana_portilor_raspuns = '';
	if($sapatamana_portilor == 1) $sapatamana_portilor_raspuns = 'X';
    fwrite($myfile, $sapatamana_portilor_raspuns."\t");

    $prezentare_in_liceu_raspuns = '';
    if($prezentare_in_liceu == 1) $prezentare_in_liceu_raspuns = 'X';
    fwrite($myfile, $prezentare_in_liceu_raspuns."\t");

    $profesori_raspuns = '';
	if($profesori == 1) $profesori_raspuns = 'X';
    fwrite($myfile, $profesori_raspuns."\t");

    $presa_raspuns = '';
	if($presa == 1) $presa_raspuns = 'X';
    fwrite($myfile, $presa_raspuns."\t");

    fwrite($myfile, $alte_surse."\t");

    fwrite($myfile, $prestigiu."\t");
    fwrite($myfile, $calitate."\t");
    fwrite($myfile, $sfat_persoane."\t");
    fwrite($myfile, $statut_profesie."\t");
    fwrite($myfile, $colegii."\t");
    fwrite($myfile, $materiile."\t");
    fwrite($myfile, $informatiile_universitatii."\t");
    fwrite($myfile, $apropierea);

    fwrite($myfile, "\n");
    oci_close($c);
    
    echo '<script>window.location.href = "Validare_Excel.php";</script>';
    fclose($myfile);

    $objReader = PHPExcel_IOFactory::createReader('CSV');

    $objReader->setDelimiter("\n");
    $objReader->setDelimiter("\t");
    $objReader->setInputEncoding('UTF-8');

    $objPHPExcel = $objReader->load('csv_licenta.csv');
       
    $objPHPExcel->getActiveSheet()->setTitle('Licenta');

    $objPHPExcel->getActiveSheet()->setCellValue('A1', 'Nr Chitanta');
    $objPHPExcel->getActiveSheet()->setCellValue('B1', 'Suma');
    $objPHPExcel->getActiveSheet()->setCellValue('C1', 'Scutit');
    $objPHPExcel->getActiveSheet()->setCellValue('D1', 'Motiv Scutire');
    $objPHPExcel->getActiveSheet()->setCellValue('E1', 'Nume Familie Nastere');
    $objPHPExcel->getActiveSheet()->setCellValue('F1', 'Initiale tata');
    $objPHPExcel->getActiveSheet()->setCellValue('G1', 'Nume familie actual');
    $objPHPExcel->getActiveSheet()->setCellValue('H1', 'Prenume candidat');
    $objPHPExcel->getActiveSheet()->setCellValue('I1', 'Prenume mama');
    $objPHPExcel->getActiveSheet()->setCellValue('J1', 'Prenume tata');
    $objPHPExcel->getActiveSheet()->setCellValue('K1', 'CNP');
    $objPHPExcel->getActiveSheet()->setCellValue('L1', 'Data nasterii');
    $objPHPExcel->getActiveSheet()->setCellValue('M1', 'Sex');
    $objPHPExcel->getActiveSheet()->setCellValue('N1', 'Tara nasterii');
    $objPHPExcel->getActiveSheet()->setCellValue('O1', 'Judetul nasterii');
    $objPHPExcel->getActiveSheet()->setCellValue('P1', 'Localitatea nasterii');
    $objPHPExcel->getActiveSheet()->setCellValue('Q1', 'Cetatenia');
    $objPHPExcel->getActiveSheet()->setCellValue('R1', 'Nationalitate');
    $objPHPExcel->getActiveSheet()->setCellValue('S1', 'Etnie');
    $objPHPExcel->getActiveSheet()->setCellValue('T1', 'Limba materna');
    $objPHPExcel->getActiveSheet()->setCellValue('U1', 'Stare civila');
    $objPHPExcel->getActiveSheet()->setCellValue('V1', 'Tip act de identitate');
    $objPHPExcel->getActiveSheet()->setCellValue('W1', 'Serie act');
    $objPHPExcel->getActiveSheet()->setCellValue('X1', 'Numar act');
    $objPHPExcel->getActiveSheet()->setCellValue('Y1', 'Eliberat de');
    $objPHPExcel->getActiveSheet()->setCellValue('Z1', 'Data eliberarii');
    $objPHPExcel->getActiveSheet()->setCellValue('AA1', 'Data expirarii');
    $objPHPExcel->getActiveSheet()->setCellValue('AB1', 'Mediu domiciliu');
    $objPHPExcel->getActiveSheet()->setCellValue('AC1', 'Strada');
    $objPHPExcel->getActiveSheet()->setCellValue('AD1', 'Numar');
    $objPHPExcel->getActiveSheet()->setCellValue('AE1', 'Bloc');
    $objPHPExcel->getActiveSheet()->setCellValue('AF1', 'Scara');
    $objPHPExcel->getActiveSheet()->setCellValue('AG1', 'Etaj');
    $objPHPExcel->getActiveSheet()->setCellValue('AH1', 'Apartament');
    $objPHPExcel->getActiveSheet()->setCellValue('AI1', 'Localitate');
    $objPHPExcel->getActiveSheet()->setCellValue('AJ1', 'Judet');
    $objPHPExcel->getActiveSheet()->setCellValue('AK1', 'Cod postal');
    $objPHPExcel->getActiveSheet()->setCellValue('AL1', 'Tara');
    $objPHPExcel->getActiveSheet()->setCellValue('AM1', 'Telefon');
    $objPHPExcel->getActiveSheet()->setCellValue('AN1', 'E-mail');
    $objPHPExcel->getActiveSheet()->setCellValue('AO1', 'Solicita cazare studii pe timpul studiilor');
    $objPHPExcel->getActiveSheet()->setCellValue('AP1', 'Solicita cazare in perioada testului');
    $objPHPExcel->getActiveSheet()->setCellValue('AQ1', 'Persoana cu dizabilitati');
    $objPHPExcel->getActiveSheet()->setCellValue('AR1', 'Stare sociala speciala');
    

    //Preg anterioara

    $objPHPExcel->getActiveSheet()->setCellValue('AS1', 'Liceul absolvit');
    $objPHPExcel->getActiveSheet()->setCellValue('AT1', 'Localitate liceu');
    $objPHPExcel->getActiveSheet()->setCellValue('AU1', 'Tara liceu');
    $objPHPExcel->getActiveSheet()->setCellValue('AV1', 'Judet liceu');
    $objPHPExcel->getActiveSheet()->setCellValue('AW1', 'Profil liceu');
    $objPHPExcel->getActiveSheet()->setCellValue('AX1', 'Durata studiilor liceu');
    $objPHPExcel->getActiveSheet()->setCellValue('AY1', 'Anul absolvirii liceu');
    $objPHPExcel->getActiveSheet()->setCellValue('AZ1', 'Forma invatamant liceu');
    $objPHPExcel->getActiveSheet()->setCellValue('BA1', 'Serie diploma bac');
    $objPHPExcel->getActiveSheet()->setCellValue('BB1', 'Nr diploma bac');
    $objPHPExcel->getActiveSheet()->setCellValue('BC1', 'Data emiterii diploma');
    $objPHPExcel->getActiveSheet()->setCellValue('BD1', 'Nr foii matricole');
    $objPHPExcel->getActiveSheet()->setCellValue('BE1', 'Nr act rec echiv');
    $objPHPExcel->getActiveSheet()->setCellValue('BF1', 'Serie act rec echi');
    $objPHPExcel->getActiveSheet()->setCellValue('BG1', 'Data rec echiv');
    $objPHPExcel->getActiveSheet()->setCellValue('BH1', 'Student la alta facultate');
    $objPHPExcel->getActiveSheet()->setCellValue('BI1', 'Tara fac');
    $objPHPExcel->getActiveSheet()->setCellValue('BJ1', 'Localitate fac');
    $objPHPExcel->getActiveSheet()->setCellValue('BK1', 'Judet fac');
    $objPHPExcel->getActiveSheet()->setCellValue('BL1', 'Domeniul fac');
    $objPHPExcel->getActiveSheet()->setCellValue('BM1', 'Denumire institutie fac');
    $objPHPExcel->getActiveSheet()->setCellValue('BN1', 'Denumire facultate');
    $objPHPExcel->getActiveSheet()->setCellValue('BO1', 'Specializare');
    $objPHPExcel->getActiveSheet()->setCellValue('BP1', 'Forma invatamant fac');
    $objPHPExcel->getActiveSheet()->setCellValue('BQ1', 'An');
    $objPHPExcel->getActiveSheet()->setCellValue('BR1', 'Nr sem buget');
    $objPHPExcel->getActiveSheet()->setCellValue('BS1', 'Nr sem bursa');

    //Studii univ absolv.

    $objPHPExcel->getActiveSheet()->setCellValue('BT1', 'An absolvire');
    $objPHPExcel->getActiveSheet()->setCellValue('BU1', 'Cu/fara diploma de licenta');
    $objPHPExcel->getActiveSheet()->setCellValue('BV1', 'Tara');
    $objPHPExcel->getActiveSheet()->setCellValue('BW1', 'Localitatea');
    $objPHPExcel->getActiveSheet()->setCellValue('BX1', 'Judetul');

    $objPHPExcel->getActiveSheet()->setCellValue('BY1', 'Denumire institutie');
    $objPHPExcel->getActiveSheet()->setCellValue('BZ1', 'Facultatea');
    $objPHPExcel->getActiveSheet()->setCellValue('CA1', 'Domeniul');
    $objPHPExcel->getActiveSheet()->setCellValue('CB1', 'Program studii/Specializare');
    $objPHPExcel->getActiveSheet()->setCellValue('CC1', 'Titlul obtinut');
    $objPHPExcel->getActiveSheet()->setCellValue('CD1', 'Forma de invatamant');
    $objPHPExcel->getActiveSheet()->setCellValue('CE1', 'Numar semestre bugetar');
    $objPHPExcel->getActiveSheet()->setCellValue('CF1', 'Nr. semestre bursier');
    $objPHPExcel->getActiveSheet()->setCellValue('CG1', 'Durata studii');
    $objPHPExcel->getActiveSheet()->setCellValue('CH1', 'Dipl. licenta Seria');
    $objPHPExcel->getActiveSheet()->setCellValue('CI1', 'Dipl. licenta Nr');
    $objPHPExcel->getActiveSheet()->setCellValue('CJ1', 'Data emitere');
    $objPHPExcel->getActiveSheet()->setCellValue('CK1', 'Nr.foaie matr.');

    $objPHPExcel->getActiveSheet()->setCellValue('CL1', 'Act de recunoastere Nr');
    $objPHPExcel->getActiveSheet()->setCellValue('CM1', 'Act de recunoastere Serie');
    $objPHPExcel->getActiveSheet()->setCellValue('CN1', 'Act de recunoastere Data echivalarii');

         //Cerinte licenta

    $objPHPExcel->getActiveSheet()->setCellValue('CO1', 'Media generala la examenul de bacalaureat');
    $objPHPExcel->getActiveSheet()->setCellValue('CP1', 'Media la disciplina mate/info');
    $objPHPExcel->getActiveSheet()->setCellValue('CQ1', 'Optiunea pentru testul scris');
    $objPHPExcel->getActiveSheet()->setCellValue('CR1', 'Solicitati echivalare cu diploma olimpiada organizata MEN');
    $objPHPExcel->getActiveSheet()->setCellValue('CS1', 'Participat la preadmitere '.$an_participare_preadmitere.' si doreste luarea in considerare');
    $objPHPExcel->getActiveSheet()->setCellValue('CT1', 'Doreste sa sustina din nou testul scris');

         //Optiuni_licenta

    $objPHPExcel->getActiveSheet()->setCellValue('CU1', 'Preferinta_1');
    $objPHPExcel->getActiveSheet()->setCellValue('CV1', 'Preferinta_2');
    $objPHPExcel->getActiveSheet()->setCellValue('CW1', 'Preferinta_3');
    $objPHPExcel->getActiveSheet()->setCellValue('CX1', 'Preferinta_4');
    $objPHPExcel->getActiveSheet()->setCellValue('CY1', 'Acceptarea inmatricularii in caz ca nu a fost admis pe buget');

         //Info doc licenta

    $objPHPExcel->getActiveSheet()->setCellValue('CZ1', 'Diploma de BAC (original)');
    $objPHPExcel->getActiveSheet()->setCellValue('DA1', 'Diploma de BAC (copie legaliz)');

    $objPHPExcel->getActiveSheet()->setCellValue('DB1', 'Adeverinta (original)');
    $objPHPExcel->getActiveSheet()->setCellValue('DC1', 'Adeverinta (copie legaliz)');

    $objPHPExcel->getActiveSheet()->setCellValue('DD1', 'Document echivalare studii (original)');
    $objPHPExcel->getActiveSheet()->setCellValue('DE1', 'Document echivalare studii (copie legaliz)');
    $objPHPExcel->getActiveSheet()->setCellValue('DF1', 'Diploma de olimpiada (original)');

    $objPHPExcel->getActiveSheet()->setCellValue('DG1', 'Participa altundeva');
    $objPHPExcel->getActiveSheet()->setCellValue('DH1', 'Universitatea_1');
    $objPHPExcel->getActiveSheet()->setCellValue('DI1', 'Facultatea_1');
    $objPHPExcel->getActiveSheet()->setCellValue('DJ1', 'Universitatea_2');
    $objPHPExcel->getActiveSheet()->setCellValue('DK1', 'Facultatea_2');
    $objPHPExcel->getActiveSheet()->setCellValue('DL1', 'Universitatea_3');
    $objPHPExcel->getActiveSheet()->setCellValue('DM1', 'Facultatea_3');

         //Chestionar licenta

    $objPHPExcel->getActiveSheet()->setCellValue('DN1', 'Site admitere');
    $objPHPExcel->getActiveSheet()->setCellValue('DO1', 'Site facultate');
    $objPHPExcel->getActiveSheet()->setCellValue('DP1', 'Brosura sau pliant despre admitere');
    $objPHPExcel->getActiveSheet()->setCellValue('DQ1', 'Pagina facebook');
    $objPHPExcel->getActiveSheet()->setCellValue('DR1', 'Prieteni');
    $objPHPExcel->getActiveSheet()->setCellValue('DS1', 'Saptamana Portilor Deschise la UAIC');
    $objPHPExcel->getActiveSheet()->setCellValue('DT1', 'Prezentare in liceu');
    $objPHPExcel->getActiveSheet()->setCellValue('DU1', 'Profesori din liceu');
    $objPHPExcel->getActiveSheet()->setCellValue('DV1', 'Presa');
    $objPHPExcel->getActiveSheet()->setCellValue('DW1', 'Alte surse');

    $objPHPExcel->getActiveSheet()->setCellValue('DX1', 'Prestigiu');
    $objPHPExcel->getActiveSheet()->setCellValue('DY1', 'Calitate');
    $objPHPExcel->getActiveSheet()->setCellValue('DZ1', 'Sfat persoane');
    $objPHPExcel->getActiveSheet()->setCellValue('EA1', 'Statut profesie');
    $objPHPExcel->getActiveSheet()->setCellValue('EB1', 'Colegii');
    $objPHPExcel->getActiveSheet()->setCellValue('EC1', 'Materiile');
    $objPHPExcel->getActiveSheet()->setCellValue('ED1', 'Informatiile universitatii');
    $objPHPExcel->getActiveSheet()->setCellValue('EE1', 'Apropierea');
    
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save('excel_licenta.xlsx');

    //Licenta & preadmitere
    $objPHPExcel_preadmitere = PHPExcel_IOFactory::load('excel_preadmitere.xlsx');
    $objPHPExcel_licenta = PHPExcel_IOFactory::load('excel_licenta.xlsx');

    $worksheet = $objPHPExcel_preadmitere->getActiveSheet();
    $objPHPExcel_licenta->addExternalSheet($worksheet);
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel_licenta, 'Excel2007');
    $objWriter->save('excel_licenta.xlsx');
    
    $objPHPExcel_master = PHPExcel_IOFactory::load('excel_master.xlsx');
    $objPHPExcel_final = PHPExcel_IOFactory::load('excel_licenta.xlsx');

    $worksheet = $objPHPExcel_master->getActiveSheet();
    $objPHPExcel_final->addExternalSheet($worksheet);
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel_final, 'Excel2007');
    $objWriter->save('excel_final.xlsx');

?>