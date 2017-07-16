<?php

require('PHPExcel/Classes/PHPExcel/IOFactory.php');


      $id_formular=$_POST['id_formular'];
      $username = 'ADMITERE1';
      $password = 'ADMITERE1';
      $connection_string = 'localhost/xe';

      $c = oci_connect($username, $password, $connection_string, 'AL32UTF8');
      $s = oci_parse($c, " BEGIN  SELECT f.nr_chitanta, f.suma, f.scutit, f.motiv_scutire, dpc.nume_familie_nastere, dpc.initialele_tatalui_mamei, dpc.nume_familie_actual, dpc.prenume_candidat, dpc.prenume_tata,
                                  dpc.prenume_mama, dpc.cnp, dpc.sex, dpc.data_nasterii, dpc.tara_nasterii, dpc.judetul_nasterii, dpc.localitatea_nasterii,
                                  dpc.cetatenia, dpc.nationalitate, dpc.etnie, dpc.limba_materna,
                                  dpc.stare_civila,
                                  dpc.tip_act_ident,
                                  dpc.serie_act, dpc.numar_act, dpc.eliberat_de, dpc.data_eliberarii,
                                  dpc.data_expirarii, dpc.mediu_domiciliu, dpc.tara_domiciliu, dpc.judet_domiciliu, dpc.localitate_domiciliu,
                                  dpc.strada, dpc.numar,
                                  dpc.bloc, dpc.scara, dpc.etaj, dpc.apartament, dpc.cod_postal, dpc.telefon, dpc.email, dpc.solicita_cazare_studii,dpc.stare_sociala_speciala, dpc.persoana_cu_dizabilitati,
                                  
                                  dpl.liceul_absolvit, dpl.tara_liceu, dpl.localitate_liceu,
                                  dpl.judet_liceu, dpl.profil_liceu, dpl.durata_studiilor_liceu, dpl.anul_absolvirii_liceu, dpl.forma_invatamant_liceu, dpl.serie_diploma_bac, dpl.nr_diploma_bac, dpl.data_emiterii_diploma, dpl.nr_foii_matricole, dpl.nr_act_rec_echiv, dpl.serie_act_rec_echiv, dpl.data_rec_echiv, dpl.tara_fac, dpl.localitate_fac, dpl.judet_fac, dpl.denumire_institutie_fac,dpl.denumire_facultate, dpl.denumire_domeniu_licenta, dpl.specializare,
                                  dpl.titlu_obtinut, dpl.forma_invatamant_fac, dpl.nr_sem_buget, dpl.nr_sem_bursa, dpl.durata_studii, dpl.diplo_licenta_serie, dpl.diplo_licenta_nr, dpl.dipl_data_emitere, dpl.nr_foaie_matricola, dpl.act_rec_licenta, dpl.nr_act_rec_licenta,
                                  dpl.serie_act_rec_licenta, dpl.data_act_rec_licenta, dpl.in_curs_student_alta_fac, dpl.in_curs_tara_master, dpl.in_curs_localitate_master, dpl.in_curs_judet_master, 
                                  dpl.in_curs_denum_instit_master, dpl.in_curs_denum_facultate_master, dpl.in_curs_denum_domeniu_master, dpl.in_curs_specializare_master, dpl.in_curs_forma_invat_master,
                                  
                                  dpl.in_curs_an_master, dpl.in_curs_nr_sem_buget_master, dpl.in_curs_nr_sem_bursa_master, dpl.absolvent_an, dpl.absolvent_tara, dpl.absolvent_localitate,  dpl.absolvent_judet, 
                                  dpl.absolvent_denumire_instit,  dpl.absolvent_denumire_facult,  dpl.absolvent_domeniu,  dpl.absolvent_specializare, dpl.absolvent_titlu_obtinut,  dpl.absolvent_forma_invat, dpl.absolvent_nr_sem_buget, 
                                  dpl.absolvent_nr_sem_bursa, dpl.absolvent_diplo_serie, dpl.absolvent_diplo_nr, dpl.absolvent_dipl_data_emitere, dpl.absolvent_nr_foaie_matricola, 
                                  dpl.absolvent_act_rec_nr, dpl.absolvent_act_rec_serie, dpl.absolvent_act_rec_data_echiv, dpl.absolvent_durata_studiilor , dpl.absolvent_cu_diploma ,cl.medie_examen_licenta, cl.medie_admitere,
                                  ol.preferinta_1, ol.preferinta_2, ol.preferinta_3, ol.preferinta_4, ol.preferinta_5, ol.preferinta_6, ol.preferinta_7, ol.preferinta_8, ol.preferinta_9, ol.preferinta_10, ol.preferinta_11, ol.optiune_admitere_taxa, 
                                  il.diploma_bac_original, il.diploma_bac_copie, il.doc_echiv_preuniv_original, il.doc_echiv_preuniv_copie, il.diploma_licenta_original, il.diploma_licenta_copie, il.dipl_echiv_licenta_original, il.dipl_echiv_licenta_copie, il.particip_altundeva, il.universitate1, il.facultate1, il.universitate2, il.facultate2, il.universitate3,  il.facultate3,
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
                                  
                                  :diploma_bac_original , :diploma_bac_copie, :doc_echiv_preuniv_original , :doc_echiv_preuniv_copie, :diploma_licenta_original , :diploma_licenta_copie,  :dipl_echiv_licenta_original, :dipl_echiv_licenta_copie, :participa_altundeva , :universitate1, :facultate1, :universitate2, :facultate2, :universitate3, :facultate3, 
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
     oci_bind_by_name($s, ":diploma_bac_copie", $diploma_bac_copie, 100);
     
     oci_bind_by_name($s, ":doc_echiv_preuniv_original", $doc_echiv_preuniv_original, 100);
     oci_bind_by_name($s, ":doc_echiv_preuniv_copie", $doc_echiv_preuniv_copie, 100);
     
     oci_bind_by_name($s, ":diploma_licenta_original", $diploma_licenta_original, 100);
     oci_bind_by_name($s, ":diploma_licenta_copie", $diploma_licenta_copie, 100);
     
     oci_bind_by_name($s, ":dipl_echiv_licenta_original", $dipl_echiv_licenta_original, 100);
     oci_bind_by_name($s, ":dipl_echiv_licenta_copie", $dipl_echiv_licenta_copie, 100);
     
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

    $myfile = fopen("csv_master.csv", "a") or die("Eroare la deschiderea/crearea fisierulu!");
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
    fwrite($myfile, mb_strtoupper($prenume_tata, 'UTF-8')."\t");
    fwrite($myfile, mb_strtoupper($prenume_mama, 'UTF-8')."\t");
    fwrite($myfile, $cnp."\t");
    fwrite($myfile, $sex."\t");
    fwrite($myfile, $data_nasterii."\t");
    fwrite($myfile, $tara_nasterii."\t");
    fwrite($myfile, $judetul_nasterii."\t");
    fwrite($myfile, $localitatea_nasterii."\t");
    fwrite($myfile, $cetatenia."\t");
    fwrite($myfile, $nationalitate."\t");
    fwrite($myfile, $etnie."\t");
    fwrite($myfile, $limba_materna."\t");
    fwrite($myfile, $stare_civila."\t");
    fwrite($myfile, $tip_act_ident."\t");
    fwrite($myfile, $serie_act."\t");
    fwrite($myfile, $numar_act."\t");
    fwrite($myfile, $eliberat_de."\t");
    fwrite($myfile, $data_eliberarii."\t");
    fwrite($myfile, $data_expirarii."\t");

    //Verificare domiciliu (rural vs urban)

    $raspuns_domiciliu_stabil = 'Rural';
    if($mediu_domiciliu == 2) $raspuns_domiciliu_stabil = 'Urban';

    fwrite($myfile, $raspuns_domiciliu_stabil."\t");
    fwrite($myfile, $tara_domiciliu."\t");
    fwrite($myfile, $judet_domiciliu."\t");
    fwrite($myfile, $localitate_domiciliu."\t");
    fwrite($myfile, $strada."\t");
    fwrite($myfile, $numar."\t");
    fwrite($myfile, $bloc."\t");
    fwrite($myfile, $scara."\t");
    fwrite($myfile, $etaj."\t");
    fwrite($myfile, $apartament."\t");
    fwrite($myfile, $cod_postal."\t");
    fwrite($myfile, $telefon."\t");
    fwrite($myfile, $email."\t");

    //Raspuns in cazul solicitarii pt cazari
	 
	 $raspuns_cazare_studii = 'NU';
	 if($solicita_cazare_studii == 1) $raspuns_cazare_studii = 'DA';
	  
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
    fwrite($myfile, $raspuns_stare_sociala_speciala."\t");
    fwrite($myfile, $raspuns_dizabilitati."\t");
    //Preg anterioara

    fwrite($myfile, $liceul_absolvit."\t");
    fwrite($myfile, $tara_liceu."\t");
    fwrite($myfile, $localitate_liceu."\t");
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
    fwrite($myfile, $tara_fac."\t");
    fwrite($myfile, $localitate_fac."\t");
    fwrite($myfile, $judet_fac."\t");
    fwrite($myfile, mb_strtoupper($denumire_institutie_fac, 'UTF-8')."\t");
    fwrite($myfile, $denumire_facultate."\t");
    fwrite($myfile, $denumire_domeniu_licenta."\t");
    fwrite($myfile, $specializare."\t");

    fwrite($myfile, $titlu_obtinut."\t");
    fwrite($myfile, $forma_invatamant_fac."\t");
    fwrite($myfile, $nr_sem_buget."\t");
    fwrite($myfile, $nr_sem_bursa."\t");
    fwrite($myfile, $durata_studii."\t");
    fwrite($myfile, $diplo_licenta_serie."\t");
    fwrite($myfile, $diplo_licenta_nr."\t");
    fwrite($myfile, $data_emitere."\t");
    fwrite($myfile, $nr_foaie_matricola."\t");
    fwrite($myfile, $act_rec_licenta."\t");
    fwrite($myfile, $nr_act_rec_licenta."\t");
    fwrite($myfile, $serie_act_rec_licenta."\t");
    fwrite($myfile, $data_act_rec_licenta."\t");

      //Raspuns daca candidatul este student la alta facultate/univ
	 $raspuns_alta_facultate = 'NU';
	 if($in_curs_student_alta_fac == 1) $raspuns_alta_facultate = 'DA';

    fwrite($myfile, $raspuns_alta_facultate."\t");
    fwrite($myfile, $in_curs_tara_master."\t");
    fwrite($myfile, $in_curs_localitate_master."\t");
    fwrite($myfile, $in_curs_judet_master."\t");

    fwrite($myfile, mb_strtoupper($in_curs_denum_instit_master, 'UTF-8')."\t");
    fwrite($myfile, $in_curs_denum_facultate_master."\t");
    fwrite($myfile, $in_curs_denum_domeniu_master."\t");
    fwrite($myfile, $in_curs_specializare_master."\t");
    fwrite($myfile, $in_curs_forma_invat_master."\t");
    fwrite($myfile, $in_curs_an_master."\t");
    fwrite($myfile, $in_curs_nr_sem_buget_master."\t");
    fwrite($myfile, $in_curs_nr_sem_bursa_master."\t");
    fwrite($myfile, $absolvent_an."\t");

    fwrite($myfile, $absolvent_tara."\t");
    fwrite($myfile, $absolvent_localitate."\t");
    fwrite($myfile, $absolvent_judet."\t");
    fwrite($myfile, mb_strtoupper($absolvent_denumire_instit, 'UTF-8')."\t");
    fwrite($myfile, $absolvent_denumire_facult."\t");
    fwrite($myfile, $absolvent_domeniu."\t");
    fwrite($myfile, $absolvent_specializare."\t");
    fwrite($myfile, $absolvent_forma_invat."\t");
    fwrite($myfile, $absolvent_nr_sem_buget."\t");
    fwrite($myfile, $absolvent_titlu_obtinut."\t");
    fwrite($myfile, $absolvent_nr_sem_bursa."\t");
    fwrite($myfile, $absolvent_diplo_serie."\t");
    fwrite($myfile, $absolvent_diplo_nr."\t");
    fwrite($myfile, $absolvent_dipl_data_emitere."\t");
    fwrite($myfile, $absolvent_nr_foaie_matricola."\t");
    fwrite($myfile, $absolvent_act_rec_nr."\t");
    fwrite($myfile, $absolvent_act_rec_serie."\t");
    fwrite($myfile, $absolvent_act_rec_data_echiv."\t");
    fwrite($myfile, $absolvent_durata_studiilor."\t");

      //Raspuns cu/fara diploma de master
	 
	 $raspuns_diploma_master = 'FARA DIPLOMA';
	 if($absolvent_cu_diploma == 1) $raspuns_diploma_master = 'CU DIPLOMA';

    fwrite($myfile, $raspuns_diploma_master."\t");


    //Cerinte master

    fwrite($myfile, $medie_examen_licenta."\t");
    fwrite($myfile, $medie_admitere."\t");

    //Optiuni_master

    fwrite($myfile, $preferinta_1."\t");
    fwrite($myfile, $preferinta_2."\t");
    fwrite($myfile, $preferinta_3."\t");
    fwrite($myfile, $preferinta_4."\t");
    fwrite($myfile, $preferinta_5."\t");
    fwrite($myfile, $preferinta_6."\t");
    fwrite($myfile, $preferinta_7."\t");
    fwrite($myfile, $preferinta_8."\t");
    fwrite($myfile, $preferinta_9."\t");
    fwrite($myfile, $preferinta_10."\t");
    fwrite($myfile, $preferinta_11."\t");

    $stare_taxa = null;
    if($optiune_admitere_taxa == 1) $stare_taxa = 'Da';
    if($optiune_admitere_taxa == 2) $stare_taxa = 'Nu';
    if($optiune_admitere_taxa == 3) $stare_taxa = 'Numai cu Taxa';
    
    fwrite($myfile, $stare_taxa."\t");

    //Info doc master
 
      $raspuns_diploma_bac_original = 'NU';
	  $raspuns_diploma_bac_copie = 'NU';
     
	  $raspuns_diploma_licenta_original = 'NU';
	  $raspuns_diploma_licenta_copie = 'NU';
     
	  $raspuns_echiv_studii_original = 'NU';
	  $raspuns_echiv_studii_copie = 'NU';
     
	  $raspuns_echiv_licenta_original = 'NU'; 
	  $raspuns_echiv_licenta_copie = 'NU';
          
	  if($diploma_bac_original == 1) $raspuns_diploma_bac_original = 'DA';
      if($diploma_bac_copie == 1) $raspuns_diploma_bac_copie = 'DA';
     
	  if($doc_echiv_preuniv_original == 1) $raspuns_echiv_studii_original = 'DA';
      if($doc_echiv_preuniv_copie == 1) $raspuns_echiv_studii_copie = 'DA';
     
	  if($diploma_licenta_original == 1) $raspuns_diploma_licenta_original = 'DA';
      if($diploma_licenta_copie == 1) $raspuns_diploma_licenta_copie = 'DA';
     
	  if($dipl_echiv_licenta_original == 1) $raspuns_echiv_licenta_original = 'DA';
      if($dipl_echiv_licenta_copie == 1) $raspuns_echiv_licenta_copie = 'DA';


    fwrite($myfile, $raspuns_diploma_bac_original."\t");
    fwrite($myfile, $raspuns_diploma_bac_copie."\t");

    fwrite($myfile, $raspuns_echiv_studii_original."\t");
    fwrite($myfile, $raspuns_echiv_studii_copie."\t");

    fwrite($myfile, $raspuns_diploma_licenta_original."\t");
    fwrite($myfile, $raspuns_diploma_licenta_copie."\t");

    fwrite($myfile, $raspuns_echiv_licenta_original."\t");
    fwrite($myfile, $raspuns_echiv_licenta_copie."\t");

     //Participa si la alte concursuri de admitere
     
     $raspuns_participa_alt = 'NU';
     if($participa_altundeva == 1) $raspuns_participa_alt = 'DA';

    fwrite($myfile, $raspuns_participa_alt."\t");
    fwrite($myfile, mb_strtoupper($universitate1, 'UTF-8')."\t");
    fwrite($myfile, $facultate1."\t");
    fwrite($myfile, mb_strtoupper($universitate2, 'UTF-8')."\t");
    fwrite($myfile, $facultate2."\t");
    fwrite($myfile, mb_strtoupper($universitate3, 'UTF-8')."\t");
    fwrite($myfile, $facultate3."\t");

    //Chestionar master

    $site_admitere_raspuns = '';
    if($site_admitere == 1) $site_admitere_raspuns = 'X';
    fwrite($myfile, $site_admitere_raspuns."\t");
    
    $site_facultate_raspuns = '';
    if($site_facultate == 1) $site_facultate_raspuns = 'X';
    fwrite($myfile, $site_facultate_raspuns."\t");

    $pagina_facebook_raspuns = '';
    if($pagina_facebook == 1) $pagina_facebook_raspuns = 'X';
    fwrite($myfile, $pagina_facebook_raspuns."\t");

    $prieteni_raspuns = '';
	if($prieteni == 1) $prieteni_raspuns = 'X';
    fwrite($myfile, $prieteni_raspuns."\t");

    $presa_raspuns = '';
	if($presa == 1) $presa_raspuns = 'X';
    fwrite($myfile, $presa_raspuns."\t");

    $profesori_raspuns = '';
	if($profesori == 1) $profesori_raspuns = 'X';
    fwrite($myfile, $profesori_raspuns);

    fwrite($myfile, $alte_surse."\t");


    fwrite($myfile, $prestigiu."\t");
    fwrite($myfile, $calitate."\t");
    fwrite($myfile, $sfat_persoane."\t");
    fwrite($myfile, $statut_profesie."\t");
    fwrite($myfile, $colegii."\t");
    fwrite($myfile, $materiile."\t");
    fwrite($myfile, $informatiile_universitatii."\t");
    fwrite($myfile, $apropierea."\t");

    fwrite($myfile, "\n");
    oci_close($c);
    
    echo '<script>window.location.href = "Validare_Excel.php";</script>';
    fclose($myfile);

    $objReader = PHPExcel_IOFactory::createReader('CSV');

    $objReader->setDelimiter("\n");
    $objReader->setDelimiter("\t");
    $objReader->setInputEncoding('UTF-8');

    $objPHPExcel = $objReader->load('csv_master.csv');
       
    $objPHPExcel->getActiveSheet()->setTitle('Master');

    $objPHPExcel->getActiveSheet()->setCellValue('A1', 'Nr Chitanta');
    $objPHPExcel->getActiveSheet()->setCellValue('B1', 'Suma');
    $objPHPExcel->getActiveSheet()->setCellValue('C1', 'Scutit');
    $objPHPExcel->getActiveSheet()->setCellValue('D1', 'Motiv Scutire');
    $objPHPExcel->getActiveSheet()->setCellValue('E1', 'Nume Familie Nastere');
    $objPHPExcel->getActiveSheet()->setCellValue('F1', 'Initiale tata');
    $objPHPExcel->getActiveSheet()->setCellValue('G1', 'Nume familie actual');
    $objPHPExcel->getActiveSheet()->setCellValue('H1', 'Prenume candidat');
    $objPHPExcel->getActiveSheet()->setCellValue('I1', 'Prenume tata');
    $objPHPExcel->getActiveSheet()->setCellValue('J1', 'Prenume mama');
    $objPHPExcel->getActiveSheet()->setCellValue('K1', 'CNP');
    $objPHPExcel->getActiveSheet()->setCellValue('L1', 'Sex');
    $objPHPExcel->getActiveSheet()->setCellValue('M1', 'Data nasterii');
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
    $objPHPExcel->getActiveSheet()->setCellValue('AC1', 'Tara domiciliu');
    $objPHPExcel->getActiveSheet()->setCellValue('AD1', 'Judet domiciliu');
    $objPHPExcel->getActiveSheet()->setCellValue('AE1', 'Localitate domiciliu');
    $objPHPExcel->getActiveSheet()->setCellValue('AF1', 'Strada');
    $objPHPExcel->getActiveSheet()->setCellValue('AG1', 'Numar');
    $objPHPExcel->getActiveSheet()->setCellValue('AH1', 'Bloc');
    $objPHPExcel->getActiveSheet()->setCellValue('AI1', 'Scara');
    $objPHPExcel->getActiveSheet()->setCellValue('AJ1', 'Etaj');
    $objPHPExcel->getActiveSheet()->setCellValue('AK1', 'Apartament');
    $objPHPExcel->getActiveSheet()->setCellValue('AL1', 'Cod postal');
    $objPHPExcel->getActiveSheet()->setCellValue('AM1', 'Telefon');
    $objPHPExcel->getActiveSheet()->setCellValue('AN1', 'E-mail');
    $objPHPExcel->getActiveSheet()->setCellValue('AO1', 'Solicita cazare studii');
    $objPHPExcel->getActiveSheet()->setCellValue('AP1', 'Stare sociala speciala');
    $objPHPExcel->getActiveSheet()->setCellValue('AQ1', 'Persoane cu dizabilitati');

    //Preg anterioara

    $objPHPExcel->getActiveSheet()->setCellValue('AR1', 'Liceul absolvit');
    $objPHPExcel->getActiveSheet()->setCellValue('AS1', 'Tara liceu');
    $objPHPExcel->getActiveSheet()->setCellValue('AT1', 'Localitate liceu');
    $objPHPExcel->getActiveSheet()->setCellValue('AU1', 'Judet liceu');
    $objPHPExcel->getActiveSheet()->setCellValue('AV1', 'Profil liceu');
    $objPHPExcel->getActiveSheet()->setCellValue('AW1', 'Durata studiilor liceu');
    $objPHPExcel->getActiveSheet()->setCellValue('AX1', 'Anul absolvirii liceu');
    $objPHPExcel->getActiveSheet()->setCellValue('AY1', 'Forma invatamant liceu');
    $objPHPExcel->getActiveSheet()->setCellValue('AZ1', 'Serie diploma bac');
    $objPHPExcel->getActiveSheet()->setCellValue('BA1', 'Nr diploma bac');
    $objPHPExcel->getActiveSheet()->setCellValue('BB1', 'Data emiterii diploma');
    $objPHPExcel->getActiveSheet()->setCellValue('BC1', 'Nr foii matricole');
    $objPHPExcel->getActiveSheet()->setCellValue('BD1', 'Nr act rec echiv');
    $objPHPExcel->getActiveSheet()->setCellValue('BE1', 'Serie act rec echi');
    $objPHPExcel->getActiveSheet()->setCellValue('BF1', 'Data rec echiv');
    $objPHPExcel->getActiveSheet()->setCellValue('BG1', 'Tara fac');
    $objPHPExcel->getActiveSheet()->setCellValue('BH1', 'Localitate fac');
    $objPHPExcel->getActiveSheet()->setCellValue('BI1', 'Judet fac');
    $objPHPExcel->getActiveSheet()->setCellValue('BJ1', 'Denumire institutie fac');
    $objPHPExcel->getActiveSheet()->setCellValue('BK1', 'Denumire facultate');
    $objPHPExcel->getActiveSheet()->setCellValue('BL1', 'Denumire domeniu licenta');
    $objPHPExcel->getActiveSheet()->setCellValue('BM1', 'Specializare');

    $objPHPExcel->getActiveSheet()->setCellValue('BN1', 'Titlu obtinut');
    $objPHPExcel->getActiveSheet()->setCellValue('BO1', 'Forma invatamant fac');
    $objPHPExcel->getActiveSheet()->setCellValue('BP1', 'Nr sem buget');
    $objPHPExcel->getActiveSheet()->setCellValue('BQ1', 'Nr sem bursa');
    $objPHPExcel->getActiveSheet()->setCellValue('BR1', 'Durata studii');
    $objPHPExcel->getActiveSheet()->setCellValue('BS1', 'Dipl licenta serie');
    $objPHPExcel->getActiveSheet()->setCellValue('BT1', 'Dipl licenta nr');
    $objPHPExcel->getActiveSheet()->setCellValue('BU1', 'Diplm data emitere');
    $objPHPExcel->getActiveSheet()->setCellValue('BV1', 'Nr foaie matricola');
    $objPHPExcel->getActiveSheet()->setCellValue('BW1', 'Act rec licenta');
    $objPHPExcel->getActiveSheet()->setCellValue('BX1', 'Nr act rec licenta');
    $objPHPExcel->getActiveSheet()->setCellValue('BY1', 'Serie act rec licenta');
    $objPHPExcel->getActiveSheet()->setCellValue('BZ1', 'Data act rec licenta');
    $objPHPExcel->getActiveSheet()->setCellValue('CA1', 'In curs student alta fac');
    $objPHPExcel->getActiveSheet()->setCellValue('CB1', 'In curs tara master');
    $objPHPExcel->getActiveSheet()->setCellValue('CC1', 'In curs localitate master');
    $objPHPExcel->getActiveSheet()->setCellValue('CD1', 'In curs judet master');

    $objPHPExcel->getActiveSheet()->setCellValue('CE1', 'In curs denum institutie master');
    $objPHPExcel->getActiveSheet()->setCellValue('CF1', 'In curs denum facultate master');
    $objPHPExcel->getActiveSheet()->setCellValue('CG1', 'In curs denum domeniu master');
    $objPHPExcel->getActiveSheet()->setCellValue('CH1', 'In curs specializare master');
    $objPHPExcel->getActiveSheet()->setCellValue('CI1', 'In curs forma invat master');
    $objPHPExcel->getActiveSheet()->setCellValue('CJ1', 'In curs an master');
    $objPHPExcel->getActiveSheet()->setCellValue('CK1', 'In curs nr sem buget master');
    $objPHPExcel->getActiveSheet()->setCellValue('CL1', 'In curs nr sem bursa master');
    $objPHPExcel->getActiveSheet()->setCellValue('CM1', 'Absolvent an');

    $objPHPExcel->getActiveSheet()->setCellValue('CN1', 'Absolvent tara');
    $objPHPExcel->getActiveSheet()->setCellValue('CO1', 'Absolvent localitate');
    $objPHPExcel->getActiveSheet()->setCellValue('CP1', 'Absolvent judet');
    $objPHPExcel->getActiveSheet()->setCellValue('CQ1', 'Absolvent denum instit');
    $objPHPExcel->getActiveSheet()->setCellValue('CR1', 'Absolvent denum facult');
    $objPHPExcel->getActiveSheet()->setCellValue('CS1', 'Absolvent domeniu');
    $objPHPExcel->getActiveSheet()->setCellValue('CT1', 'Absolvent specializare');
    $objPHPExcel->getActiveSheet()->setCellValue('CU1', 'Absolvent forma invat');
    $objPHPExcel->getActiveSheet()->setCellValue('CV1', 'Absolvent nr sem buget');
    $objPHPExcel->getActiveSheet()->setCellValue('CW1', 'Absolvent titlu obtinut');
    $objPHPExcel->getActiveSheet()->setCellValue('CX1', 'Absolvent nr sem bursa');
    $objPHPExcel->getActiveSheet()->setCellValue('CY1', 'Absolvent dipl serie');
    $objPHPExcel->getActiveSheet()->setCellValue('CZ1', 'Absolvent dipl nr');
    $objPHPExcel->getActiveSheet()->setCellValue('DA1', 'Absolvent dipl data emiterii');
    $objPHPExcel->getActiveSheet()->setCellValue('DB1', 'Absolvent nr foaie matricola');
    $objPHPExcel->getActiveSheet()->setCellValue('DC1', 'Absolvent act rec nr');
    $objPHPExcel->getActiveSheet()->setCellValue('DD1', 'Absolvent act rec serie');
    $objPHPExcel->getActiveSheet()->setCellValue('DE1', 'Absolvent act rec data echivalarii');
    $objPHPExcel->getActiveSheet()->setCellValue('DF1', 'Absolvent durata studiilor');
    $objPHPExcel->getActiveSheet()->setCellValue('DG1', 'Absolvent cu diploma');


         //Cerinte licenta

    $objPHPExcel->getActiveSheet()->setCellValue('DH1', 'Medie examen licenta');
    $objPHPExcel->getActiveSheet()->setCellValue('DI1', 'Medie admitere');

         //Optiuni_licenta

    $objPHPExcel->getActiveSheet()->setCellValue('DJ1', 'Preferinta_1');
    $objPHPExcel->getActiveSheet()->setCellValue('DK1', 'Preferinta_2');
    $objPHPExcel->getActiveSheet()->setCellValue('DL1', 'Preferinta_3');
    $objPHPExcel->getActiveSheet()->setCellValue('DM1', 'Preferinta_4');
    $objPHPExcel->getActiveSheet()->setCellValue('DN1', 'Preferinta_5');
    $objPHPExcel->getActiveSheet()->setCellValue('DO1', 'Preferinta_6');
    $objPHPExcel->getActiveSheet()->setCellValue('DP1', 'Preferinta_7');
    $objPHPExcel->getActiveSheet()->setCellValue('DQ1', 'Preferinta_8');
    $objPHPExcel->getActiveSheet()->setCellValue('DR1', 'Preferinta_9');
    $objPHPExcel->getActiveSheet()->setCellValue('DS1', 'Preferinta_10');
    $objPHPExcel->getActiveSheet()->setCellValue('DT1', 'Preferinta_11');
    $objPHPExcel->getActiveSheet()->setCellValue('DU1', 'Optiuni admitere taxa');

         //Info doc licenta

    $objPHPExcel->getActiveSheet()->setCellValue('DV1', 'Dipl bac original');
    $objPHPExcel->getActiveSheet()->setCellValue('DW1', 'Dipl bac copie');

    $objPHPExcel->getActiveSheet()->setCellValue('DX1', 'Doc echiv preuniv original');
    $objPHPExcel->getActiveSheet()->setCellValue('DY1', 'Doc echiv preuniv copie');

    $objPHPExcel->getActiveSheet()->setCellValue('DZ1', 'Dipl licenta original');
    $objPHPExcel->getActiveSheet()->setCellValue('EA1', 'Dipl licenta copie');

    $objPHPExcel->getActiveSheet()->setCellValue('EB1', 'Dipl echiv licenta original');
    $objPHPExcel->getActiveSheet()->setCellValue('EC1', 'Dipl echiv licenta copie');

    $objPHPExcel->getActiveSheet()->setCellValue('ED1', 'Participa altundeva');
    $objPHPExcel->getActiveSheet()->setCellValue('EE1', 'Universitatea_1');
    $objPHPExcel->getActiveSheet()->setCellValue('EF1', 'Facultatea_1');
    $objPHPExcel->getActiveSheet()->setCellValue('EG1', 'Universitatea_2');
    $objPHPExcel->getActiveSheet()->setCellValue('EH1', 'Facultatea_2');
    $objPHPExcel->getActiveSheet()->setCellValue('EI1', 'Universitatea_3');
    $objPHPExcel->getActiveSheet()->setCellValue('EJ1', 'Facultatea_3');

         //Chestionar licenta

    $objPHPExcel->getActiveSheet()->setCellValue('EK1', 'Site admitere');
    $objPHPExcel->getActiveSheet()->setCellValue('EL1', 'Site facultate');
    $objPHPExcel->getActiveSheet()->setCellValue('EM1', 'Pagina facebook');
    $objPHPExcel->getActiveSheet()->setCellValue('EN1', 'Prieteni');
    $objPHPExcel->getActiveSheet()->setCellValue('EO1', 'Presa');
    $objPHPExcel->getActiveSheet()->setCellValue('EP1', 'Profesori');
    $objPHPExcel->getActiveSheet()->setCellValue('EQ1', 'Alte surse');

    $objPHPExcel->getActiveSheet()->setCellValue('ER1', 'Prestigiu');
    $objPHPExcel->getActiveSheet()->setCellValue('ES1', 'Calitate');
    $objPHPExcel->getActiveSheet()->setCellValue('ET1', 'Sfat persoane');
    $objPHPExcel->getActiveSheet()->setCellValue('EU1', 'Statut profesie');
    $objPHPExcel->getActiveSheet()->setCellValue('EV1', 'Colegii');
    $objPHPExcel->getActiveSheet()->setCellValue('EW1', 'Materiile');
    $objPHPExcel->getActiveSheet()->setCellValue('EX1', 'Informatiile universitatii');
    $objPHPExcel->getActiveSheet()->setCellValue('EY1', 'Apropierea');
    
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save('excel_master.xlsx');
/*
    $objPHPExcel_master = PHPExcel_IOFactory::load('excel_master.xlsx');
    $objPHPExcel_preadmitere = PHPExcel_IOFactory::load('excel_preadmitere.xlsx');

    $worksheet = $objPHPExcel_preadmitere->getActiveSheet();
    $objPHPExcel_master->addExternalSheet($worksheet);
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel_master, 'Excel2007');
    $objWriter->save('excel_master.xlsx');
    
    $objPHPExcel_licenta = PHPExcel_IOFactory::load('excel_licenta.xlsx');
    $objPHPExcel_final = PHPExcel_IOFactory::load('excel_master.xlsx');

    $worksheet = $objPHPExcel_licenta->getActiveSheet();
    $objPHPExcel_final->addExternalSheet($worksheet);
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel_final, 'Excel2007');
    $objWriter->save('excel_final.xlsx');
*/
?>