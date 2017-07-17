<?php

    include 'updateBDMaster.php';

    $v_idFormular = $_POST["idFormular"];

//-------------------------------------------------------------------------------------------

// UPDATE TAXA DE INSCRIERE    

    $v_Numarul_Chitantei = $_POST["chitantaNr"];
    updateNrChitantei($v_idFormular, $v_Numarul_Chitantei);

    $v_Suma = $_POST["suma"];
    updateSuma($v_idFormular, $v_Suma);

    $v_EsteScutit = $_POST["scutit"];
    updateEsteScutit($v_idFormular, $v_EsteScutit);

    $v_MotivScutire = $_POST["motivScutire"];
    updateMotivScutire($v_idFormular, $v_MotivScutire);

//-------------------------------------------------------------------------------------------

// UPDATE DATE PERSONALE

    $v_Numele_De_Familie = $_POST["numeDeFamilie"];
    updateNumeNastere($v_idFormular, $v_Numele_De_Familie);

    $v_Numele_De_Familie_Actual = $_POST["numeDeFamilieActual"];
    updateNumeActual($v_idFormular, $v_Numele_De_Familie_Actual);

    $v_initialaTata = $_POST["initialaTata"];
    updateInitialaTata($v_idFormular, $v_initialaTata);

    $v_Prenume = $_POST["prenume"];
    updatePrenume($v_idFormular, $v_Prenume);

    $v_PrenumeTata = $_POST["prenumeTata"];
    updatePrenumeTata($v_idFormular, $v_PrenumeTata);
    
    $v_PrenumeMama = $_POST["prenumeMama"];
    updatePrenumeMama($v_idFormular, $v_PrenumeMama);
    
    $v_stareCivila = $_POST["stareCivila"];
    updateStareCivila($v_idFormular, $v_stareCivila);

    $v_sex = $_POST["sex"];
    updateSex($v_idFormular, $v_sex);

    $v_tara = $_POST["taraNastere"];
    updateTaraNastere($v_idFormular, $v_tara);
    
    $v_judet = $_POST["judetNastere"];
    updateJudetNastere($v_idFormular, $v_judet);

    $v_localitate = $_POST["localitateNastere"];
    updateLocalitateNastere($v_idFormular, $v_localitate);

    $v_DataDay = $_POST["dataNasteriiDay"];
    $v_DataMonth = $_POST["dataNasteriiMonth"];
    $v_DataYear = $_POST["dataNasteriiYear"];
    updateDataNasterii($v_idFormular, $v_DataDay, $v_DataMonth, $v_DataYear);

    $v_nationalitate = $_POST["nationalitate"];
    updateNationalitate($v_idFormular, $v_nationalitate);
    
    $v_cetatenie = $_POST["cetatenie"];
    updateCetatenie($v_idFormular, $v_cetatenie); 

    $v_etnie = $_POST["etnie"];
    updateEtnie($v_idFormular, $v_etnie);

    $v_limbaMaterna = $_POST["limbaMaterna"];
    updateLimbaMaterna($v_idFormular, $v_limbaMaterna);

//-------------------------------------------------------------------------------------------

// DATE ACT IDENTITATE

    $v_cnp = $_POST["cnp"];
    updateCNP($v_idFormular, $v_cnp);

    $v_tipAct = $_POST["tipAct"];
    updateTipAct($v_idFormular, $v_tipAct);

    $v_serieBuletin = $_POST["serieBuletin"];
    updateSerieBuletin($v_idFormular, $v_serieBuletin);

    $v_nrBuletin = $_POST["nrBuletin"];
    updateNumarBuletin($v_idFormular, $v_nrBuletin);

    $v_eliberatDe = $_POST["eliberatDe"];
    updateBuletinEliberatDe($v_idFormular, $v_eliberatDe);

    $v_DataEliberareBuletinDay = $_POST["dataEliberariiDay"];
    $v_DataEliberareBuletinMonth = $_POST["dataEliberariiMonth"];
    $v_DataEliberareBuletinYear = $_POST["dataEliberariiYear"];
    updateDataEliberareBuletin($v_idFormular, $v_DataEliberareBuletinDay, $v_DataEliberareBuletinMonth, $v_DataEliberareBuletinYear);

    $v_DataExpirareBuletinDay = $_POST["dataExpirariiDay"];
    $v_DataExpirareBuletinMonth = $_POST["dataExpirariiMonth"];
    $v_DataExpirareBuletinYear = $_POST["dataExpirariiYear"];
    updateDataExpirareBuletin($v_idFormular, $v_DataExpirareBuletinDay, $v_DataExpirareBuletinMonth, $v_DataExpirareBuletinYear);

// DOMICILIUL CANDIDATULUI
    $v_domiciliulCandidatului = $_POST["domiciliuStabil"];
    updateDomiciliu($v_idFormular, $v_domiciliulCandidatului);

    $v_strada = $_POST["strada"];
    updateStrada($v_idFormular, $v_strada);

    $v_numar = $_POST["numar"];
    updateNrStrada($v_idFormular, $v_numar);

    $v_bloc = $_POST["bloc"];
    updateNrBloc($v_idFormular, $v_bloc);

    $v_scara = $_POST["scara"];
    updateScara($v_idFormular, $v_scara);

    $v_etaj = $_POST["etaj"];
    updateEtaj($v_idFormular, $v_etaj);

    $v_apartament = $_POST["apartament"];
    updateApartament($v_idFormular, $v_apartament);
    
    $v_localitateDomiciliu = $_POST["localitate"];
    updateLocalitateDomiciliu($v_idFormular, $v_localitateDomiciliu);

    $v_judetDomiciliu = $_POST["judet"];
    updateJudetDomiciliu($v_idFormular, $v_judetDomiciliu);

    $v_codPostal = $_POST["codPostal"];
    updateCodPostal($v_idFormular, $v_codPostal);

    $v_taraDomiciliu = $_POST["tara"];
    updateTaraDomiciliu($v_idFormular, $v_taraDomiciliu);

//DATE DE CONTACT

    $v_nrDeTelefon = $_POST["nrDeTelefon"];
    updateTelefon($v_idFormular, $v_nrDeTelefon);

    $v_email = $_POST["email"];
    updateEmail($v_idFormular, $v_email);

//SOLICITA CAZARE

    $v_solicitaCazare = $_POST["cazareStudii"];
    updateSolicitaCazare($v_idFormular, $v_solicitaCazare);

//ALTE DATE PERSONALE

    $v_persoanaCu_Dizabilitati = $_POST["persoanaCuDizabilitati"];
    updatePersoanaCuDizabilitati($v_idFormular, $v_persoanaCu_Dizabilitati);

    $v_persoanaCu_StareSpeciala = $_POST["stare-speciala"];
    updateStareSpeciala($v_idFormular, $v_persoanaCu_StareSpeciala);

//----------------------------------------------------------------------------------------

//  Studiile preuniversitare absolvite, nivel liceu

    $v_Liceul_Absolvit = $_POST["liceulAbsolvit"];
    updateLiceulAbsolvit($v_idFormular, $v_Liceul_Absolvit);

    $v_localitate_Liceu = $_POST["localitateLiceu"];
    updateLocalitateLiceu($v_idFormular, $v_localitate_Liceu);

    $v_judet_Liceu = $_POST["judetLiceu"];
    updateJudetLiceu($v_idFormular, $v_judet_Liceu);

    $v_tara_Liceu = $_POST["taraLiceu"];
    updateTaraLiceu($v_idFormular, $v_tara_Liceu);

    $v_Profil_Liceu = $_POST["profilLiceu"];
    updateProfilLiceu($v_idFormular, $v_Profil_Liceu);

    $v_Durata_Studiilor = $_POST["durataStudiilorLiceu"];
    updateDurataStudiilorLiceu($v_idFormular, $v_Durata_Studiilor);

    $v_Anul_Absolvirii_Liceu = $_POST["anulAbsolviriiLiceu"];
    updateAnulAbsolviriiLiceu($v_idFormular, $v_Anul_Absolvirii_Liceu);

    $v_Forma_Invatamant_Liceu = $_POST["formaInvatamantLiceu"];
    updateFormaInvatamantLiceu($v_idFormular, $v_Forma_Invatamant_Liceu);

    $v_Serie_Diploma_Bac = $_POST["serieDiplomaBac"];
    updateSerieDiplomaBac($v_idFormular, $v_Serie_Diploma_Bac);

    $v_Nr_Diploma_Bac = $_POST["nrDiplomaBac"];
    updateNrDiplomaBac($v_idFormular, $v_Nr_Diploma_Bac);

    $v_Emisa_De_Liceu = $_POST["emisaDeLiceu"];
    updateEmisaDeLiceu($v_idFormular, $v_Emisa_De_Liceu);

    $v_Emitere_Diploma_Bac_Day = $_POST["dataEmitereBacDay"];
    $v_Emitere_Diploma_Bac_Month = $_POST["dataEmitereBacMonth"];
    $v_Emitere_Diploma_Bac_Year = $_POST["dataEmitereBacYear"];
    updateDataEliberareBac($v_idFormular, $v_Emitere_Diploma_Bac_Day, $v_Emitere_Diploma_Bac_Month, $v_Emitere_Diploma_Bac_Year);

    $v_Nr_Foii_Matricole = $_POST["nrFoiiMatricole"];
    updateNrFoiiMatricole($v_idFormular, $v_Nr_Foii_Matricole);

    $v_Nr_Act_Rec_Echiv = $_POST["nrActRecEchiv"];
    updateNrActRecEchiv($v_idFormular, $v_Nr_Act_Rec_Echiv);

    $v_Serie_Act_Rec_Echiv = $_POST["serieActRecEchiv"];
    updateSerieActRecEchiv($v_idFormular, $v_Serie_Act_Rec_Echiv);

    $v_Eliberare_Bac_Day= $_POST["dataEchivDay"];
    $v_Eliberare_Bac_Month = $_POST["dataEchivMonth"];
    $v_Eliberare_Bac_Year = $_POST["dataEchivYear"];
    updateDataEchivalareBac($v_idFormular, $v_Eliberare_Bac_Day, $v_Eliberare_Bac_Month, $v_Eliberare_Bac_Year);

//---------------------------------------------------------------------------------------------------

//  Studiile universitare de licenta absolvite

    $v_Denumire_Institutie_Fac = $_POST["denumireInstitutieFac"];
    updateDenumireInstitutieFac($v_idFormular, $v_Denumire_Institutie_Fac);

    $v_Denumire_Facultate = $_POST["denumireFac"];
    updateDenumireFacultate($v_idFormular, $v_Denumire_Facultate);

    $v_Denumire_Domeniu_Licenta = $_POST["denumireDomeniuLicenta"];
    updateDenumireDomeniuLicenta($v_idFormular, $v_Denumire_Domeniu_Licenta);

    $v_Specializare = $_POST["specializare"];
    updateSpecializare($v_idFormular, $v_Specializare);

    $v_Titlu_Obtinut = $_POST["titluObtinut"];
    updateTitluObtinut($v_idFormular, $v_Titlu_Obtinut);

    $v_Forma_Invatamant_Fac = $_POST["formaInvatamantFac"];
    updateFormaInvatamantFac($v_idFormular, $v_Forma_Invatamant_Fac);

    $v_Durata_Studii = $_POST["durataStudii"];
    updateDurataStudii($v_idFormular, $v_Durata_Studii);

    $v_Nr_Sem_Buget = $_POST["nrSemBuget"];
    updateNrSemBuget($v_idFormular, $v_Nr_Sem_Buget);

    $v_Nr_Sem_Bursa = $_POST["nrSemBursa"];
    updateNrSemBursa($v_idFormular, $v_Nr_Sem_Bursa);

    $v_Localitate_Fac = $_POST["localitateFac"];
    updateLocalitateFac($v_idFormular, $v_Localitate_Fac);

    $v_Judet_Fac = $_POST["judetFac"];
    updateJudetFac($v_idFormular, $v_Judet_Fac);

    $v_Tara_Fac = $_POST["taraFac"];
    updateTaraFac($v_idFormular, $v_Tara_Fac);
    
    $v_Diplo_Licenta_Serie = $_POST["diploLicentaSerie"];
    updateDiploLicentaSerie($v_idFormular, $v_Diplo_Licenta_Serie);

    $v_Diplo_Licenta_Nr = $_POST["diploLicentaNr"];
    updateDiploLicentaNr($v_idFormular, $v_Diplo_Licenta_Nr);

    /*$v_Dipl_Emisa_De = $_POST["diplEmisaDe"];
    updateDiplEmisaDe($v_idFormular, $v_Dipl_Emisa_De);*/
    
    $v_Dipl_Data_Emitere_Day = $_POST["dataEmitereLicentaDay"];
    $v_Dipl_Data_Emitere_Month = $_POST["dataEmitereLicentaMonth"];
    $v_Dipl_Data_Emitere_Year = $_POST["dataEmitereLicentaYear"];
    updateDiplDataEmitere($v_idFormular, $v_Dipl_Data_Emitere_Day, $v_Dipl_Data_Emitere_Month, $v_Dipl_Data_Emitere_Year);

    $v_Nr_Foaie_Matricola = $_POST["nrFoaieMatricola"];
    updateNrFoaieMatricola($v_idFormular, $v_Nr_Foaie_Matricola);

    $v_Nr_Act_Rec_Licenta = $_POST["nrActRecLicenta"];
    updateNrActRecLicenta($v_idFormular, $v_Nr_Act_Rec_Licenta);

    $v_Serie_Act_Rec_Licenta = $_POST["serieActRecLicenta"];
    updateSerieActRecLicenta($v_idFormular, $v_Serie_Act_Rec_Licenta);

    $v_Dipl_Licenta_Echiv_Day = $_POST["dataLicentaEchivDay"];
    $v_Dipl_Licenta_Echiv_Month = $_POST["dataLicentaEchivMonth"];
    $v_Dipl_Licenta_Echiv_Year = $_POST["dataLicentaEchivYear"];
    updateDataActRecLicenta($v_idFormular, $v_Dipl_Licenta_Echiv_Day, $v_Dipl_Licenta_Echiv_Month, $v_Dipl_Licenta_Echiv_Year);

//-----------------------------------------------------------------------------------------------------
// PANA AICI E OK

// Studiile universitare de master in curs

    $v_Student_Alta_Fac = $_POST["inCursStudentAltaFac"];
    updateInCursStudentAltaFac($v_idFormular, $v_Student_Alta_Fac);

    $v_Tara_Fac = $_POST["inCursTaraMaster"];
    updateInCursTaraMaster($v_idFormular, $v_Tara_Fac);

    $v_Judet_Fac = $_POST["inCursJudetMaster"];
    updateInCursJudetMaster($v_idFormular, $v_Judet_Fac);

    $v_Localitate_Fac = $_POST["inCursLocalitateMaster"];
    updateInCursLocalitateMaster($v_idFormular, $v_Localitate_Fac);

    $v_Denumire_Institutie_Fac = $_POST["inCursDenumInstitutieMaster"];
    updateInCursDenumInstitutieMaster($v_idFormular, $v_Denumire_Institutie_Fac);

    $v_Denumire_Facultate = $_POST["inCursDenumFacultateMaster"];
    updateInCursDenumFacultateMaster($v_idFormular, $v_Denumire_Facultate);

    $v_Denumire_Domeniu_Licenta = $_POST["inCursDenumDomeniuMaster"];
    updateInCursDenumDomeniuMaster($v_idFormular, $v_Denumire_Domeniu_Licenta);

    $v_Specializare = $_POST["inCursSpecializareMaster"];
    updateInCursSpecializareMaster($v_idFormular, $v_Specializare);

    $v_Forma_Invatamant_Fac = $_POST["inCursFormaInvatMaster"];
    updateInCursFormaInvatMaster($v_idFormular, $v_Forma_Invatamant_Fac);

    $v_An_Master = $_POST["inCursAnMaster"];
    updateInCursAnMaster($v_idFormular, $v_An_Master);

    $v_Nr_Sem_Buget = $_POST["inCursNrSemBugetMaster"];
    updateInCursNrSemBugetMaster($v_idFormular, $v_Nr_Sem_Buget);

    $v_Nr_Sem_Bursa = $_POST["inCursNrSemBursaMaster"];
    updateInCursNrSemBursaMaster($v_idFormular, $v_Nr_Sem_Bursa);

//----------------------------------------------------------------------------------------------------

// Absolvent al studiilor de master

    $v_Absolvet_An = $_POST["absolventAn"];
    updateAbsolventAn($v_idFormular, $v_Absolvet_An);

    $v_Tara_Fac = $_POST["absolventTara"];
    updateAbsolventTara($v_idFormular, $v_Tara_Fac);

    $v_Judet_Fac = $_POST["absolventJudet"];
    updateAbsolventJudet($v_idFormular, $v_Judet_Fac);

    $v_Localitate_Fac = $_POST["absolventLocalitate"];
    updateAbsolventLocalitate($v_idFormular, $v_Localitate_Fac);

    $v_Denumire_Institutie_Fac = $_POST["absolventDenimireInstit"];
    updateAbsolventDenimireInstit($v_idFormular, $v_Denumire_Institutie_Fac);

    $v_Denumire_Facultate = $_POST["absolventDenumireFacult"];
    updateAbsolventDenumireFacult($v_idFormular, $v_Denumire_Facultate);

    $v_Denumire_Domeniu_Licenta = $_POST["absolventDomeniu"];
    updateAbsolventDomeniu($v_idFormular, $v_Denumire_Domeniu_Licenta);

    $v_Specializare = $_POST["absolventSpecializare"];
    updateAbsolventSpecializare($v_idFormular, $v_Specializare);

    $v_Titlut_Obtinut = $_POST["titlulObtinut"];
    updateTitlulObtinut($v_idFormular, $v_Titlut_Obtinut);
    
    $v_Forma_Invatamant_Fac = $_POST["absolventFormaInvat"];
    updateAbsolventFormaInvat($v_idFormular, $v_Forma_Invatamant_Fac);

    $v_An_Master = $_POST["absolventNrSemBuget"];
    updateAbsolventNrSemBuget($v_idFormular, $v_An_Master);

    $v_Nr_Sem_Buget = $_POST["absolventNrSemBursa"];
    updateAbsolventNrSemBursa($v_idFormular, $v_Nr_Sem_Buget);

    $v_Are_Diploma_Abs = $_POST["areDiplomaMaster"];
    updateAbsolventAreDiploma($v_idFormular, $v_Are_Diploma_Abs);

    $v_Diploma_Serie_Abs = $_POST["absolventDiploSerie"];
    updateAbsolventDiploSerie($v_idFormular, $v_Diploma_Serie_Abs);

    $v_Diploma_Numar_Abs = $_POST["absolventDiploNr"];
    updateAbsolventDiploNr($v_idFormular, $v_Diploma_Numar_Abs);

    /*$v_Abs_emisa_de = $_POST["absolventDiploEmisaDe"];
    updateAbsolventDiploEmisaDe($v_idFormular, $v_Abs_emisa_de);*/

    $v_Abs_Data_Emitere_Day = $_POST["dataMasterEmitereDay"];
    $v_Abs_Data_Emitere_Month = $_POST["dataMasterEmitereMonth"];
    $v_Abs_Data_Emitere_Year= $_POST["dataMasterEmitereYear"];
    updateAbsolventDiplDataEmitere($v_idFormular, $v_Abs_Data_Emitere_Day, $v_Abs_Data_Emitere_Month, $v_Abs_Data_Emitere_Year);

    $v_Nr_Foaie_Matricola = $_POST["absolventNrFoaieMatricola"];
    updateAbsolventNrFoaieMatricola($v_idFormular, $v_Nr_Foaie_Matricola);

    $v_Nr_Abs_Rec_Echiv = $_POST["nrActRecMaster"];
    updateAbsolventNrEchivalare($v_idFormular, $v_Nr_Abs_Rec_Echiv);

    $v_Serie_Abs_Rec_Echiv = $_POST["serieActRecMaster"];
    updateAbsolventSerieEchivalare($v_idFormular, $v_Serie_Abs_Rec_Echiv);

    $v_Master_Echiv_Day= $_POST["dataMasterEchivDay"];
    $v_Master_Echiv_Month = $_POST["dataMasterEchivMonth"];
    $v_Master_Echiv_Year = $_POST["dataMasterEchivYear"];
    updateEchivalareMaster($v_idFormular, $v_Master_Echiv_Day, $v_Master_Echiv_Month, $v_Master_Echiv_Year);

//-------------------------------------------------------------------------------------------
    // PANA AICI E OK

    // UPDATE CERINTE SPECIFICE FACULTATII

    $v_Medie_Examen_Licenta = $_POST["medieExamenLicenta"];
    updateMedieExamenLicenta($v_idFormular, $v_Medie_Examen_Licenta);

    $v_Medie_Admitere = $_POST["medieAdmitere"];
    updateMedieAdmitere($v_idFormular, $v_Medie_Admitere);

    $v_Preferinta_1 = $_POST["preferinta1"];
    updatePreferinta1($v_idFormular, $v_Preferinta_1);

    $v_Preferinta_2 = $_POST["preferinta2"];
    updatePreferinta2($v_idFormular, $v_Preferinta_2);

    $v_Preferinta_3 = $_POST["preferinta3"];
    updatePreferinta3($v_idFormular, $v_Preferinta_3);

    $v_Preferinta_4 = $_POST["preferinta4"];
    updatePreferinta4($v_idFormular, $v_Preferinta_4);

    $v_Preferinta_5 = $_POST["preferinta5"];
    updatePreferinta5($v_idFormular, $v_Preferinta_5);

    $v_Preferinta_6 = $_POST["preferinta6"];
    updatePreferinta6($v_idFormular, $v_Preferinta_6);

    $v_Preferinta_7 = $_POST["preferinta7"];
    updatePreferinta7($v_idFormular, $v_Preferinta_7);

    $v_Preferinta_8 = $_POST["preferinta8"];
    updatePreferinta8($v_idFormular, $v_Preferinta_8);

    $v_Preferinta_9 = $_POST["preferinta9"];
    updatePreferinta9($v_idFormular, $v_Preferinta_9);

    $v_Preferinta_10 = $_POST["preferinta10"];
    updatePreferinta10($v_idFormular, $v_Preferinta_10);

    $v_Preferinta_11 = $_POST["preferinta11"];
    updatePreferinta11($v_idFormular, $v_Preferinta_11);

    $v_Optiune_Admitere_Taxa = $_POST["optiuneAdmitereTaxa"];
    updateOptiuneAdmitereTaxa($v_idFormular, $v_Optiune_Admitere_Taxa);

//----------------------------------------------------------------------------------------

// Participă la alte concursuri de admitere la studii universitare de master?

    $v_Universitate_1 = $_POST["universitate1"];
    updateUniversitate1($v_idFormular, $v_Universitate_1);

    $v_Facultate_1 = $_POST["facultate1"];
    updateFacultate1($v_idFormular, $v_Facultate_1);

    $v_Universitate_2 = $_POST["universitate2"];
    updateUniversitate1($v_idFormular, $v_Universitate_2);

    $v_Facultate_2 = $_POST["facultate2"];
    updateFacultate2($v_idFormular, $v_Facultate_2);

    $v_Universitate_3 = $_POST["universitate3"];
    updateUniversitate3($v_idFormular, $v_Universitate_3);

    $v_Facultate_3 = $_POST["facultate3"];
    updateFacultate3($v_idFormular, $v_Facultate_3);

// ALTE SURSE

    $v_Alte_Surse = $_POST["alteSurse"];
    updateAlteSurse($v_idFormular, $v_Alte_Surse);


    


//----------------------------------------------------------------------------------------

// Informatii privind documentele de studii depuse la dosar

$v_Diploma_Bac_Original = $_POST["diplomaBacOriginal"];
updateDiplomaBacOriginal($v_idFormular, $v_Diploma_Bac_Original);

$v_Doc_Echiv_Preuniv_Original = $_POST["docEchivPreunivOriginal"];
updateDocEchivPreunivOriginal($v_idFormular, $v_Doc_Echiv_Preuniv_Original);

$v_Diploma_Licenta_Original = $_POST["diplomaLicentaOriginal"];
updateDiplomaLicentaOriginal($v_idFormular, $v_Diploma_Licenta_Original);

/*
$v_Diploma_Echivalare_Licenta_Original = $_POST["echivalareStudiiLicenta"];
updateEchivalareLicenta($v_idFormular, $v_Diploma_Echivalare_Licenta_Original);
*/

$v_Particip_Altundeva = $_POST["participAltundeva"];
updateParticipAltundeva($v_idFormular, $v_Particip_Altundeva);



//---------------------------------------------------------------------------------------------------

validare($v_idFormular);

//header('Location: administrator.php?success=1');

?>