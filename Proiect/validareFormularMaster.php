<?php

    include 'updateBDMaster.php';

    $v_idFormular=$_POST["idFormular"];

    $v_DataEliberareBuletinDay=$_POST["dataEliberariiDay"];
    $v_DataEliberareBuletinMonth=$_POST["dataEliberariiMonth"];
    $v_DataEliberareBuletinYear=$_POST["dataEliberariiYear"];

    $v_DataExpirareBuletinDay=$_POST["dataExpirariiDay"];
    $v_DataExpirareBuletinMonth=$_POST["dataExpirariiMonth"];
    $v_DataExpirareBuletinYear=$_POST["dataExpirariiYear"];

    $v_DataDay=$_POST["dataNasteriiDay"];
    $v_DataMonth=$_POST["dataNasteriiMonth"];
    $v_DataYear=$_POST["dataNasteriiYear"];

    $v_Numele_De_Familie=$_POST["numeDeFamilie"];
    $v_Numele_De_Familie_Actual=$_POST["numeDeFamilieActual"];
    $v_Prenume=$_POST["prenume"];
    $v_PrenumeMama=$_POST["prenumeMama"];
    $v_PrenumeTata=$_POST["prenumeTata"];
    $v_initialaTata=$_POST["initialaTata"];
    $v_cetatenie=$_POST["cetatenie"];
    $v_sex=$_POST["sex"];
    $v_nationalitate=$_POST["nationalitate"];
    $v_etnie=$_POST["etnie"];
    $v_limbaMaterna=$_POST["limbaMaterna"];
    $v_nrDeTelefon=$_POST["nrDeTelefon"];
    $v_email=$_POST["email"];
    $v_cnp=$_POST["cnp"];
    //$v_tipBuletin=$_POST["tipBuletin"];
    $v_serieBuletin=$_POST["serieBuletin"];
    $v_nrBuletin=$_POST["nrBuletin"];
    $v_eliberatDe=$_POST["eliberatDe"];
    //$v_liceuNume=$_POST["liceuNume"];
    //$v_proba=$_POST["proba"];
    $v_localitate=$_POST["localitate"];
    $v_judet=$_POST["judet"];
    $v_tara=$_POST["tara"];
    $v_strada=$_POST["strada"];
    $v_numar=$_POST["numar"];
    $v_bloc=$_POST["bloc"];
    $v_scara=$_POST["scara"];
    $v_apartament=$_POST["apartament"];

    $v_codPostal=$_POST["codPostal"];
    $v_persoanaCu_Dizabilitati=$_POST["persoanaCuDizabilitati"];


    updateNumeNastere($v_idFormular,$v_Numele_De_Familie);
    updateNumeActual($v_idFormular,$v_Numele_De_Familie_Actual);
    updatePrenume($v_idFormular,$v_Prenume);
    updatePrenumeMama($v_idFormular,$v_PrenumeMama);
    updatePrenumeTata($v_idFormular,$v_PrenumeTata);
    updateInitialaTata($v_idFormular,$v_initialaTata);
    updateCetatenie($v_idFormular,$v_cetatenie);
    updateSex($v_idFormular,$v_sex);
    updateNationalitate($v_idFormular,$v_nationalitate);
    updateEtnie($v_idFormular,$v_etnie);
    updateLimbaMaterna($v_idFormular,$v_limbaMaterna);
    updateTelefon($v_idFormular,$v_nrDeTelefon);
    updateEmail($v_idFormular,$v_email);
    updateCNP($v_idFormular,$v_cnp);

    updateSerieBuletin($v_idFormular,$v_serieBuletin);
    updateNumarBuletin($v_idFormular,$v_nrBuletin);
    updateBuletinEliberatDe($v_idFormular,$v_eliberatDe);
    //updateLiceulAbsolvit($v_idFormular,$v_liceuNume);
    //updateMaterieTest($v_idFormular,$v_proba);
    updateLocalitateNastere($v_idFormular,$v_localitate);
    updateJudetNastere($v_idFormular,$v_judet);
    updateTaraNastere($v_idFormular,$v_tara);
    updateStrada($v_idFormular,$v_strada);
    updateNrStrada($v_idFormular,$v_numar);
    updateNrBloc($v_idFormular,$v_bloc);
    updateScara($v_idFormular,$v_scara);
    updateApartament($v_idFormular,$v_apartament);

    updateCodPostal($v_idFormular,$v_codPostal);

    updateDataNasterii($v_idFormular,$v_DataDay,$v_DataMonth,$v_DataYear);
    updateDataEliberareBuletin($v_idFormular,$v_DataEliberareBuletinDay,$v_DataEliberareBuletinMonth,$v_DataEliberareBuletinYear);
    updateDataExpirareBuletin($v_idFormular,$v_DataExpirareBuletinDay,$v_DataExpirareBuletinMonth,$v_DataExpirareBuletinYear);

    updatePersoanaCuDizabilitati($v_idFormular,$v_persoanaCu_Dizabilitati);


    //-------------------------------------------------------------------------------------------
// PANA AICI E OK

    // UPDATE CERINTE SPECIFICE FACULTATII

$v_Medie_Examen_Licenta=$_POST["medieExamenLicenta"];
updateMedieExamenLicenta($v_idFormular,$v_Medie_Examen_Licenta);

$v_Medie_Admitere=$_POST["medieAdmitere"];
updateMedieAdmitere($v_idFormular,$v_Medie_Admitere);

$v_Preferinta_1=$_POST["preferinta1"];
updatePreferinta1($v_idFormular,$v_Preferinta_1);

$v_Preferinta_2=$_POST["preferinta2"];
updatePreferinta2($v_idFormular,$v_Preferinta_2);

$v_Preferinta_3=$_POST["preferinta3"];
updatePreferinta3($v_idFormular,$v_Preferinta_3);

$v_Preferinta_4=$_POST["preferinta4"];
updatePreferinta4($v_idFormular,$v_Preferinta_4);

$v_Preferinta_5=$_POST["preferinta5"];
updatePreferinta5($v_idFormular,$v_Preferinta_5);

$v_Preferinta_6=$_POST["preferinta6"];
updatePreferinta6($v_idFormular,$v_Preferinta_6);

$v_Preferinta_7=$_POST["preferinta7"];
updatePreferinta7($v_idFormular,$v_Preferinta_7);

$v_Preferinta_8=$_POST["preferinta8"];
updatePreferinta8($v_idFormular,$v_Preferinta_8);

$v_Preferinta_9=$_POST["preferinta9"];
updatePreferinta9($v_idFormular,$v_Preferinta_9);

$v_Preferinta_10=$_POST["preferinta10"];
updatePreferinta10($v_idFormular,$v_Preferinta_10);

$v_Preferinta_11=$_POST["preferinta11"];
updatePreferinta11($v_idFormular,$v_Preferinta_11);

$v_Optiune_Admitere_Taxa=$_POST["optiuneAdmitereTaxa"];
updateOptiuneAdmitereTaxa($v_idFormular,$v_Optiune_Admitere_Taxa);


//----------------------------------------------------------------------------------------
// PANA AICI E OK

// Informatii privind documentele de studii depuse la dosar

$v_Diploma_Bac_Original=$_POST["diplomaBacOriginal"];
updateDiplomaBacOriginal($v_idFormular,$v_Diploma_Bac_Original);

$v_Diploma_Bac_Copie=$_POST["diplomaBacCopie"];
updateDiplomaBacCopie($v_idFormular,$v_Diploma_Bac_Copie);

$v_Doc_Echiv_Preuniv_Original=$_POST["docEchivPreunivOriginal"];
updateDocEchivPreunivOriginal($v_idFormular,$v_Doc_Echiv_Preuniv_Original);

$v_Doc_Echiv_Preuniv_Copie=$_POST["docEchivPreunivCopie"];
updateDocEchivPreunivCopie($v_idFormular,$v_Doc_Echiv_Preuniv_Copie);

$v_Diploma_Licenta_Original=$_POST["diplomaLicentaOriginal"];
updateDiplomaLicentaOriginal($v_idFormular,$v_Diploma_Licenta_Original);

$v_Diploma_Licenta_Copie=$_POST["diplomaLicentaCopie"];
updateDiplomaLicentaCopie($v_idFormular,$v_Diploma_Licenta_Copie);

$v_Particip_Altundeva=$_POST["participAltundeva"];
updateParticipAltundeva($v_idFormular,$v_Particip_Altundeva);

//----------------------------------------------------------------------------------------
// PANA AICI E OK

//  Studiile preuniversitare absolvite, nivel liceu

$v_localitate_Liceu=$_POST["localitateLiceu"];
$v_judet_Liceu=$_POST["judetLiceu"];
$v_tara_Liceu=$_POST["taraLiceu"];

updateLocalitateLiceu($v_idFormular,$v_localitate_Liceu);
updateJudetLiceu($v_idFormular,$v_judet_Liceu);
updateTaraLiceu($v_idFormular,$v_tara_Liceu);

$v_Liceul_Absolvit=$_POST["liceulAbsolvit"];
updateLiceulAbsolvit($v_idFormular,$v_Liceul_Absolvit);

$v_Profil_Liceu=$_POST["profilLiceu"];
updateProfilLiceu($v_idFormular,$v_Profil_Liceu);

$v_Durata_Studiilor=$_POST["durataStudiilorLiceu"];
updateDurataStudiilorLiceu($v_idFormular,$v_Durata_Studiilor);

$v_Anul_Absolvirii_Liceu=$_POST["anulAbsolviriiLiceu"];
updateAnulAbsolviriiLiceu($v_idFormular,$v_Anul_Absolvirii_Liceu);

$v_Forma_Invatamant_Liceu=$_POST["formaInvatamantLiceu"];
updateFormaInvatamantLiceu($v_idFormular,$v_Forma_Invatamant_Liceu);

$v_Serie_Diploma_Bac=$_POST["serieDiplomaBac"];
updateSerieDiplomaBac($v_idFormular,$v_Serie_Diploma_Bac);

$v_Nr_Diploma_Bac=$_POST["nrDiplomaBac"];
updateNrDiplomaBac($v_idFormular,$v_Nr_Diploma_Bac);

$v_Emisa_De_Liceu=$_POST["emisaDeLiceu"];
updateEmisaDeLiceu($v_idFormular,$v_Emisa_De_Liceu);

$v_Data_Emiterii_Diploma=$_POST["dataEmiteriiDiploma"];
updateDataEmiteriiDiploma($v_idFormular,$v_Data_Emiterii_Diploma);

$v_Nr_Foii_Matricole=$_POST["nrFoiiMatricole"];
updateNrFoiiMatricole($v_idFormular,$v_Nr_Foii_Matricole);

$v_Nr_Act_Rec_Echiv=$_POST["nrActRecEchiv"];
updateNrActRecEchiv($v_idFormular,$v_Nr_Act_Rec_Echiv);

$v_Serie_Act_Rec_Echiv=$_POST["serieActRecEchiv"];
updateSerieActRecEchiv($v_idFormular,$v_Serie_Act_Rec_Echiv);

$v_Data_Rec_Echiv=$_POST["dataRecEchiv"];
updateDataRecEchiv($v_idFormular,$v_Data_Rec_Echiv);

//---------------------------------------------------------------------------------------------------
// PANA AICI E OK

//  Studiile universitare de licenta absolvite


$v_Tara_Fac=$_POST["taraFac"];
updateTaraFac($v_idFormular,$v_Tara_Fac);

$v_Judet_Fac=$_POST["judetFac"];
updateJudetFac($v_idFormular,$v_Judet_Fac);

$v_Localitate_Fac=$_POST["localitateFac"];
updateLocalitateFac($v_idFormular,$v_Localitate_Fac);

$v_Denumire_Institutie_Fac=$_POST["denumireInstitutieFac"];
updateDenumireInstitutieFac($v_idFormular,$v_Denumire_Institutie_Fac);

$v_Durata_Studii=$_POST["durataStudii"];
updateDurataStudii($v_idFormular,$v_Durata_Studii);

$v_Denumire_Facultate=$_POST["denumireFac"];
updateDenumireFacultate($v_idFormular,$v_Denumire_Facultate);

$v_Denumire_Domeniu_Licenta=$_POST["denumireDomeniuLicenta"];
updateDenumireDomeniuLicenta($v_idFormular,$v_Denumire_Domeniu_Licenta);

$v_Specializare=$_POST["specializare"];
updateSpecializare($v_idFormular,$v_Specializare);

$v_Forma_Invatamant_Fac=$_POST["formaInvatamantFac"];
updateFormaInvatamantFac($v_idFormular,$v_Forma_Invatamant_Fac);

$v_Nr_Sem_Buget=$_POST["nrSemBuget"];
updateNrSemBuget($v_idFormular,$v_Nr_Sem_Buget);

$v_Nr_Sem_Bursa=$_POST["nrSemBursa"];
updateNrSemBursa($v_idFormular,$v_Nr_Sem_Bursa);

$v_Titlu_Obtinut=$_POST["titluObtinut"];
updateTitluObtinut($v_idFormular,$v_Titlu_Obtinut);

$v_Diplo_Licenta_Serie=$_POST["diploLicentaSerie"];
updateDiploLicentaSerie($v_idFormular,$v_Diplo_Licenta_Serie);

$v_Diplo_Licenta_Nr=$_POST["diploLicentaNr"];
updateDiploLicentaNr($v_idFormular,$v_Diplo_Licenta_Nr);

$v_Dipl_Emisa_De=$_POST["diplEmisaDe"];
updateDiplEmisaDe($v_idFormular,$v_Dipl_Emisa_De);

$v_Dipl_Data_Emitere=$_POST["diplDataEmitere"];
updateDiplDataEmitere($v_idFormular,$v_Dipl_Data_Emitere);

$v_Nr_Foaie_Matricola=$_POST["nrFoaieMatricola"];
updateNrFoaieMatricola($v_idFormular,$v_Nr_Foaie_Matricola);

$v_Nr_Act_Rec_Licenta=$_POST["nrActRecLicenta"];
updateNrActRecLicenta($v_idFormular,$v_Nr_Act_Rec_Licenta);

$v_Serie_Act_Rec_Licenta=$_POST["serieActRecLicenta"];
updateSerieActRecLicenta($v_idFormular,$v_Serie_Act_Rec_Licenta);

$v_Data_Act_Rec_Licenta=$_POST["dataActRecLicenta"];
updateDataActRecLicenta($v_idFormular,$v_Data_Act_Rec_Licenta);

//-----------------------------------------------------------------------------------------------------
// PANA AICI E OK

// Studiile universitare de master in curs

$v_Student_Alta_Fac=$_POST["inCursStudentAltaFac"];
updateInCursStudentAltaFac($v_idFormular,$v_Student_Alta_Fac);

$v_Tara_Fac=$_POST["inCursTaraMaster"];
updateInCursTaraMaster($v_idFormular,$v_Tara_Fac);

$v_Judet_Fac=$_POST["inCursJudetMaster"];
updateInCursJudetMaster($v_idFormular,$v_Judet_Fac);

$v_Localitate_Fac=$_POST["inCursLocalitateMaster"];
updateInCursLocalitateMaster($v_idFormular,$v_Localitate_Fac);

$v_Denumire_Institutie_Fac=$_POST["inCursDenumInstitutieMaster"];
updateInCursDenumInstitutieMaster($v_idFormular,$v_Denumire_Institutie_Fac);


$v_Denumire_Facultate=$_POST["inCursDenumFacultateMaster"];
updateInCursDenumFacultateMaster($v_idFormular,$v_Denumire_Facultate);

$v_Denumire_Domeniu_Licenta=$_POST["inCursDenumDomeniuMaster"];
updateInCursDenumDomeniuMaster($v_idFormular,$v_Denumire_Domeniu_Licenta);

$v_Specializare=$_POST["inCursSpecializareMaster"];
updateInCursSpecializareMaster($v_idFormular,$v_Specializare);

$v_Forma_Invatamant_Fac=$_POST["inCursFormaInvatMaster"];
updateInCursFormaInvatMaster($v_idFormular,$v_Forma_Invatamant_Fac);

$v_An_Master=$_POST["inCursAnMaster"];
updateInCursAnMaster($v_idFormular,$v_An_Master);

$v_Nr_Sem_Buget=$_POST["inCursNrSemBugetMaster"];
updateInCursNrSemBugetMaster($v_idFormular,$v_Nr_Sem_Buget);

$v_Nr_Sem_Bursa=$_POST["inCursNrSemBursaMaster"];
updateInCursNrSemBursaMaster($v_idFormular,$v_Nr_Sem_Bursa);


//----------------------------------------------------------------------------------------------------

// Absolvent al studiilor de master

$v_Absolvet_An=$_POST["absolventAn"];
updateAbsolventAn($v_idFormular,$v_Absolvet_An);

$v_Tara_Fac=$_POST["absolventTara"];
updateAbsolventTara($v_idFormular,$v_Tara_Fac);

$v_Judet_Fac=$_POST["absolventJudet"];
updateAbsolventJudet($v_idFormular,$v_Judet_Fac);

$v_Localitate_Fac=$_POST["absolventLocalitate"];
updateAbsolventLocalitate($v_idFormular,$v_Localitate_Fac);

$v_Denumire_Institutie_Fac=$_POST["absolventDenimireInstit"];
updateAbsolventDenimireInstit($v_idFormular,$v_Denumire_Institutie_Fac);


$v_Denumire_Facultate=$_POST["absolventDenumireFacult"];
updateAbsolventDenumireFacult($v_idFormular,$v_Denumire_Facultate);

$v_Denumire_Domeniu_Licenta=$_POST["absolventDomeniu"];
updateAbsolventDomeniu($v_idFormular,$v_Denumire_Domeniu_Licenta);

$v_Specializare=$_POST["absolventSpecializare"];
updateAbsolventSpecializare($v_idFormular,$v_Specializare);

$v_Forma_Invatamant_Fac=$_POST["absolventFormaInvat"];
updateAbsolventFormaInvat($v_idFormular,$v_Forma_Invatamant_Fac);

$v_An_Master=$_POST["absolventNrSemBuget"];
updateAbsolventNrSemBuget($v_idFormular,$v_An_Master);

$v_Nr_Sem_Buget=$_POST["absolventNrSemBursa"];
updateAbsolventNrSemBursa($v_idFormular,$v_Nr_Sem_Buget);

$v_Nr_Sem_Bursa=$_POST["absolventDiploSerie"];
updateAbsolventDiploSerie($v_idFormular,$v_Nr_Sem_Bursa);

$v_Nr_Sem_Bursa=$_POST["absolventDiploNr"];
updateAbsolventDiploNr($v_idFormular,$v_Nr_Sem_Bursa);

$v_Nr_Sem_Bursa=$_POST["absolventDiploEmisaDe"];
updateAbsolventDiploEmisaDe($v_idFormular,$v_Nr_Sem_Bursa);

$v_Nr_Sem_Bursa=$_POST["absolventDiplDataEmitere"];
updateAbsolventDiplDataEmitere($v_idFormular,$v_Nr_Sem_Bursa);

$v_Nr_Sem_Bursa=$_POST["absolventNrFoaieMatricola"];
updateAbsolventNrFoaieMatricola($v_idFormular,$v_Nr_Sem_Bursa);


//---------------------------------------------------------------------------------------------------


validare($v_idFormular);
header('Location: administrator.php?success=1');




?>