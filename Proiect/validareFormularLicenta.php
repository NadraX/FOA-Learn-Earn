<?php

    include 'updateBDLicenta.php';

    $v_idFormular = $_POST["idFormular"];

    $v_DataEliberareBuletinDay = $_POST["dataEliberariiDay"];
    $v_DataEliberareBuletinMonth = $_POST["dataEliberariiMonth"];
    $v_DataEliberareBuletinYear = $_POST["dataEliberariiYear"];

    $v_DataExpirareBuletinDay = $_POST["dataExpirariiDay"];
    $v_DataExpirareBuletinMonth = $_POST["dataExpirariiMonth"];
    $v_DataExpirareBuletinYear = $_POST["dataExpirariiYear"];

    $v_DataDay = $_POST["dataNasteriiDay"];
    $v_DataMonth = $_POST["dataNasteriiMonth"];
    $v_DataYear = $_POST["dataNasteriiYear"];  
    
    //$v_tipBuletin = $_POST["tipBuletin"];
    
    //$v_liceuNume = $_POST["liceuNume"];
    //$v_proba = $_POST["proba"];
    

//-------------------------------------------------------------------------------------------

// UPDATE TAXA DE INSCRIERE

    $v_Numarul_Chitantei = $_POST["chitantaNr"];
    updateNrChitantei($v_idFormular, $v_Numarul_Chitantei);

    $v_Suma = $_POST["suma"];
    updateSuma($v_idFormular, $v_Suma);

    $v_EsteScutit = $_POST["esteScutit"];
    //updateEsteScutit($v_idFormular ,$v_EsteScutit);

    $v_MotivScutire = $_POST["motivScutire"];
    //updateMotivScutire($v_idFormular, $v_MotivScutire);

//-------------------------------------------------------------------------------------------

// UPDATE DATE PERSONALE
    $v_Numele_De_Familie = $_POST["numeDeFamilie"];
    updateNumeNastere($v_idFormular, $v_Numele_De_Familie);

    $v_Numele_De_Familie_Actual = $_POST["numeDeFamilieActual"];
    updateNumeActual($v_idFormular, $v_Numele_De_Familie_Actual);

    $v_Prenume = $_POST["prenume"];
    updatePrenume($v_idFormular ,$v_Prenume);

    $v_PrenumeMama = $_POST["prenumeMama"];
    updatePrenumeMama($v_idFormular ,$v_PrenumeMama);

    $v_PrenumeTata = $_POST["prenumeTata"];
    updatePrenumeTata($v_idFormular ,$v_PrenumeTata);

    $v_initialaTata = $_POST["initialaTata"];
    updateInitialaTata($v_idFormular ,$v_initialaTata);

    $v_cetatenie = $_POST["cetatenie"];
    updateCetatenie($v_idFormular ,$v_cetatenie);

    &v_Stare_civila = $_POST["stareCivila"];
    updateStareCivila($v_idFormular,v_Stare_civila);

    $v_sex = $_POST["sex"];
    updateSex($v_idFormular ,$v_sex);

    $v_nationalitate = $_POST["nationalitate"];
    updateNationalitate($v_idFormular ,$v_nationalitate);

    $v_etnie = $_POST["etnie"];
    updateEtnie($v_idFormular ,$v_etnie);

    $v_limbaMaterna = $_POST["limbaMaterna"];
    updateLimbaMaterna($v_idFormular ,$v_limbaMaterna);

    $v_nrDeTelefon = $_POST["nrDeTelefon"];
    updateTelefon($v_idFormular ,$v_nrDeTelefon);

    $v_email = $_POST["email"];
    updateEmail($v_idFormular ,$v_email);

    $v_cnp = $_POST["cnp"];
    updateCNP($v_idFormular ,$v_cnp);

    $v_serieBuletin = $_POST["serieBuletin"];
    updateSerieBuletin($v_idFormular ,$v_serieBuletin);

    $v_nrBuletin = $_POST["nrBuletin"];
    updateNumarBuletin($v_idFormular ,$v_nrBuletin);

    $v_eliberatDe = $_POST["eliberatDe"];
    updateBuletinEliberatDe($v_idFormular ,$v_eliberatDe);


    //updateLiceulAbsolvit($v_idFormular ,$v_liceuNume);


    //updateMaterieTest($v_idFormular ,$v_proba);

    $v_localitate = $_POST["localitateNastere"];
    updateLocalitateNastere($v_idFormular ,$v_localitate);

    $v_judet = $_POST["judetNastere"];
    updateJudetNastere($v_idFormular ,$v_judet);

    $v_tara = $_POST["taraNastere"];
    updateTaraNastere($v_idFormular ,$v_tara);

    $v_strada = $_POST["strada"];
    updateStrada($v_idFormular ,$v_strada);

    $v_numar = $_POST["numar"];
    updateNrStrada($v_idFormular ,$v_numar);

    $v_bloc = $_POST["bloc"];
    updateNrBloc($v_idFormular ,$v_bloc);

    $v_scara = $_POST["scara"];
    updateScara($v_idFormular ,$v_scara);

    $v_apartament = $_POST["apartament"];
    updateApartament($v_idFormular ,$v_apartament);

    $v_localitate_Liceu = $_POST["localitateLiceu"];
    updateLocalitateLiceu($v_idFormular ,$v_localitate_Liceu);

    $v_judet_Liceu = $_POST["judetLiceu"];
    updateJudetLiceu($v_idFormular ,$v_judet_Liceu);

    $v_tara_Liceu = $_POST["taraLiceu"];
    updateTaraLiceu($v_idFormular ,$v_tara_Liceu);

    $v_codPostal = $_POST["codPostal"];
    updateCodPostal($v_idFormular ,$v_codPostal);
    

    updateDataNasterii($v_idFormular ,$v_DataDay ,$v_DataMonth ,$v_DataYear);


    updateDataEliberareBuletin($v_idFormular ,$v_DataEliberareBuletinDay ,$v_DataEliberareBuletinMonth ,$v_DataEliberareBuletinYear);


    updateDataExpirareBuletin($v_idFormular ,$v_DataExpirareBuletinDay ,$v_DataExpirareBuletinMonth ,$v_DataExpirareBuletinYear);

    $v_persoanaCu_Dizabilitati = $_POST["persoanaCuDizabilitati"];
    updatePersoanaCuDizabilitati($v_idFormular ,$v_persoanaCu_Dizabilitati);


    //-------------------------------------------------------------------------------------------

    // UPDATE CERINTE SPECIFICE FACULTATII

$v_Medie_Generala_Bac = $_POST["medieGeneralaBac"];
updateMedieGeneraleBac($v_idFormular ,$v_Medie_Generala_Bac);

$v_Medie_Disciplina_Max = $_POST["medieDisciplinaMax"];
updateMedieDisciplinaMax($v_idFormular ,$v_Medie_Disciplina_Max);

$v_Optiune_Test_Scris = $_POST["optiuneTestScris"];
updateOptiuneTestScris($v_idFormular ,$v_Optiune_Test_Scris);

$v_Solicita_Echivalare = $_POST["solicitaEchivalare"];
updateSolicitaEchivalare($v_idFormular ,$v_Solicita_Echivalare);

$v_An_Participare_Preadmitere = $_POST["anParticiparePreadmitere"];
updateAnParticiparePreadmitere($v_idFormular ,$v_An_Participare_Preadmitere);

$v_Vrea_Nota_Preadmitere = $_POST["vreaNotaPreadmitere"];
updateVreaNotaPreadmitere($v_idFormular ,$v_Vrea_Nota_Preadmitere);

$v_Vrea_Sa_Sustina_Examen = $_POST["vreaSaSustinaExamen"];
updateVreaSaSustinaExamen($v_idFormular ,$v_Vrea_Sa_Sustina_Examen);

//----------------------------------------------------------------------------------------

//  Studiile preuniversitare absolvite, nivel liceu

$v_Liceul_Absolvit = $_POST["liceulAbsolvit"];
updateLiceulAbsolvit($v_idFormular ,$v_Liceul_Absolvit);

$v_Profil_Liceu = $_POST["profilLiceu"];
updateProfilLiceu($v_idFormular ,$v_Profil_Liceu);

$v_Durata_Studiilor = $_POST["durataStudiilorLiceu"];
updateDurataStudiilorLiceu($v_idFormular ,$v_Durata_Studiilor);

$v_Anul_Absolvirii_Liceu = $_POST["anulAbsolviriiLiceu"];
updateAnulAbsolviriiLiceu($v_idFormular ,$v_Anul_Absolvirii_Liceu);

$v_Forma_Invatamant_Liceu = $_POST["formaInvatamantLiceu"];
updateFormaInvatamantLiceu($v_idFormular ,$v_Forma_Invatamant_Liceu);

$v_Serie_Diploma_Bac = $_POST["serieDiplomaBac"];
updateSerieDiplomaBac($v_idFormular ,$v_Serie_Diploma_Bac);

$v_Nr_Diploma_Bac = $_POST["nrDiplomaBac"];
updateNrDiplomaBac($v_idFormular ,$v_Nr_Diploma_Bac);

$v_Emisa_De_Liceu = $_POST["emisaDeLiceu"];
updateEmisaDeLiceu($v_idFormular ,$v_Emisa_De_Liceu);

$v_Data_Emiterii_Diploma = $_POST["dataEmiteriiDiploma"];
updateDataEmiteriiDiploma($v_idFormular ,$v_Data_Emiterii_Diploma);

$v_Nr_Foii_Matricole = $_POST["nrFoiiMatricole"];
updateNrFoiiMatricole($v_idFormular ,$v_Nr_Foii_Matricole);

$v_Nr_Act_Rec_Echiv = $_POST["nrActRecEchiv"];
updateNrActRecEchiv($v_idFormular ,$v_Nr_Act_Rec_Echiv);

$v_Serie_Act_Rec_Echiv = $_POST["serieActRecEchiv"];
updateSerieActRecEchiv($v_idFormular ,$v_Serie_Act_Rec_Echiv);

$v_Data_Rec_Echiv = $_POST["dataRecEchiv"];
updateDataRecEchiv($v_idFormular ,$v_Data_Rec_Echiv);

//---------------------------------------------------------------------------------------------------

//  Studiile universitare de licenta in curs

$v_Student_Alta_Fac = $_POST["studentAltaFac"];
updateStudentAltaFac($v_idFormular ,$v_Student_Alta_Fac);

$v_Tara_Fac = $_POST["taraFac"];
updateTaraFac($v_idFormular ,$v_Tara_Fac);

$v_Judet_Fac = $_POST["judetFac"];
updateJudetFac($v_idFormular ,$v_Judet_Fac);

$v_Localitate_Fac = $_POST["localitateFac"];
updateLocalitateFac($v_idFormular ,$v_Localitate_Fac);

$v_Denumire_Institutie_Fac = $_POST["denumireInstitutieFac"];
updateDenumireInstitutieFac($v_idFormular ,$v_Denumire_Institutie_Fac);

//$v_Durata_Studii_Fac = $_POST["durataStudiiFac"];
//updateDurataStudiiFac($v_idFormular ,$v_Durata_Studii_Fac);

$v_Denumire_Alta_Facultate = $_POST["denumireAltaFac"];
updateDenumireAltaFacultate($v_idFormular ,$v_Denumire_Alta_Facultate);

$v_Domeniu_Licenta_Fac = $_POST["domeniuLicentaFac"];
updateDomeniuLicentaFac($v_idFormular ,$v_Domeniu_Licenta_Fac);

$v_Specializare_Fac = $_POST["specializareFac"];
updateSpecializareFac($v_idFormular ,$v_Specializare_Fac);

$v_Forma_Invatamant_Fac = $_POST["formaInvatamantFac"];
updateFormaInvatamantFac($v_idFormular ,$v_Forma_Invatamant_Fac);

$v_Anul_Fac = $_POST["anulFac"];
updateAnulFac($v_idFormular ,$v_Anul_Fac);

$v_Nr_Semestre_Buget_Fac = $_POST["nrSemestreBugetFac"];
updateNrSemestreBugetFac($v_idFormular ,$v_Nr_Semestre_Buget_Fac);

$v_Nr_Semestre_Bursa_Fac = $_POST["nrSemestreBursaFac"];
updateNrSemestreBursaFac($v_idFormular ,$v_Nr_Semestre_Bursa_Fac);

//-----------------------------------------------------------------------------------------------------

// Studiile universitare de licenta absolvite

$v_Anul_Absolvirii = $_POST["anulAbsolvirii"];
updateAnulAbsolvirii($v_idFormular ,$v_Anul_Absolvirii);

$v_Tara_Fac_Abs = $_POST["taraFacAbs"];
updateTaraFacAbs($v_idFormular ,$v_Tara_Fac_Abs);

$v_Judet_Fac_Abs = $_POST["judetFacAbs"];
updateJudetFacAbs($v_idFormular ,$v_Judet_Fac_Abs);

$v_Localitate_Fac_Abs = $_POST["localitateFacAbs"];
updateLocalitateFacAbs($v_idFormular ,$v_Localitate_Fac_Abs);

$v_Denumire_Institutie_Abs = $_POST["denumireInstitutieAbs"];
updateDenumireInstitutieAbs($v_idFormular ,$v_Denumire_Institutie_Abs);

$v_Denumire_Facultate_Abs = $_POST["denumireFacultateAbs"];
updateDenumireFacultateAbs($v_idFormular ,$v_Denumire_Facultate_Abs);

$v_Domeniu_Licenta_Abs = $_POST["domeniuLicentaAbs"];
updateDomeniuLicentaAbs($v_idFormular ,$v_Domeniu_Licenta_Abs);

$v_Specializare_Abs = $_POST["specializareAbs"];
updateSpecializareAbs($v_idFormular ,$v_Specializare_Abs);

$v_Titlu_Obtinut = $_POST["titluObtinut"];
updateTitluObtinut($v_idFormular ,$v_Titlu_Obtinut);

$v_Forma_Invatamant_Abs = $_POST["formaInvatamantAbs"];
updateFormaInvatamantAbs($v_idFormular ,$v_Forma_Invatamant_Abs);

$v_Nr_Semestre_Buget_Abs = $_POST["nrSemestreBugetAbs"];
updateNrSemestreBugetFac($v_idFormular ,$v_Nr_Semestre_Buget_Abs);

$v_Nr_Semestre_Bursa_Abs = $_POST["nrSemestreBursaAbs"];
updateNrSemestreBursaFac($v_idFormular ,$v_Nr_Semestre_Bursa_Abs);

$v_Durata_Studiilor_Abs = $_POST["durataStudiilorAbs"];
updateDurataStudiilorAbs($v_idFormular ,$v_Durata_Studiilor_Abs);

$v_Serie_Diploma_Licenta = $_POST["serieDiplomaLicenta"];
updateSerieDiplomaLicenta($v_idFormular ,$v_Serie_Diploma_Licenta);

$v_Nr_Diploma_Licenta = $_POST["nrDiplomaLicenta"];
updateNrDiplomaLicenta($v_idFormular ,$v_Nr_Diploma_Licenta);

$v_Licenta_Emisa_De = $_POST["licentaEmisaDe"];
updateLicentaEmisaDe($v_idFormular ,$v_Licenta_Emisa_De);

$v_Data_Emiterii_Licenta = $_POST["dataEmiteriiLicenta"];
updateDataEmiteriiLicenta($v_idFormular ,$v_Data_Emiterii_Licenta);

$v_Nr_Supliment = $_POST["nrSupliment"];
updateNrSupliment($v_idFormular ,$v_Nr_Supliment);

$v_Nr_Act_Rec_Echiv_Abs = $_POST["nrActRecEchivAbs"];
updateNrActRecEchivAbs($v_idFormular ,$v_Nr_Act_Rec_Echiv_Abs);

$v_Serie_Act_Rec_Echiv_Abs = $_POST["serieActRecEchivAbs"];
updateSerieActRecEchivAbs($v_idFormular ,$v_Serie_Act_Rec_Echiv_Abs);

$v_Data_Echiv_Abs = $_POST["dataEchivAbs"];
updateDataEchivAbs($v_idFormular ,$v_Data_Echiv_Abs);


//----------------------------------------------------------------------------------------------------

validare($v_idFormular);
header('Location: administrator.php?success=1');

?>