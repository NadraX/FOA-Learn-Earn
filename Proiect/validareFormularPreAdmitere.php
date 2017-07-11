<?php

    include 'updateBDPreAdmitere.php';

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

    $v_Numarul_Chitantei=$_POST["chitantaNr"];
    $v_Suma=$_POST["suma"];

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
    //$v_nrDeTelefon=$_POST["nrDeTelefon"];
    //$v_email=$_POST["email"];
    $v_cnp=$_POST["cnp"];
    $v_tipAct=$_POST["tipAct"];
    $v_serieBuletin=$_POST["serieBuletin"];
    $v_nrBuletin=$_POST["nrBuletin"];
    $v_eliberatDe=$_POST["eliberatDe"];
    $v_liceuNume=$_POST["liceuNume"];
    $v_proba=$_POST["proba"];
    $v_localitate=$_POST["localitate"];
    $v_judet=$_POST["judet"];
    $v_tara=$_POST["tara"];
    $v_localitate_Liceu=$_POST["localitateLiceu"];
    $v_judet_Liceu=$_POST["judetLiceu"];
    $v_tara_Liceu=$_POST["taraLiceu"];
    //$v_codPostal=$_POST["codPostal"];

    updateNrChitantei($v_idFormular,$v_Numarul_Chitantei);
    updateSuma($v_idFormular,$v_Suma);

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
    //updateTelefon($v_idFormular,$v_nrDeTelefon);
    //updateEmail($v_idFormular,$v_email);
    updateCNP($v_idFormular,$v_cnp);
    updateTipAct($v_idFormular,$v_tipAct);
    updateSerieBuletin($v_idFormular,$v_serieBuletin);
    updateNumarBuletin($v_idFormular,$v_nrBuletin);
    updateBuletinEliberatDe($v_idFormular,$v_eliberatDe);
    updateNumeLiceu($v_idFormular,$v_liceuNume);
    updateMaterieTest($v_idFormular,$v_proba);
    updateLocalitateNastere($v_idFormular,$v_localitate);
    updateJudetNastere($v_idFormular,$v_judet);
    updateTaraNastere($v_idFormular,$v_tara);
    updateLocalitateLiceu($v_idFormular,$v_localitate_Liceu);
    updateJudetLiceu($v_idFormular,$v_judet_Liceu);
    updateTaraLiceu($v_idFormular,$v_tara_Liceu);
    //updateCodPostal($v_idFormular,$v_codPostal);

    updateDataNasterii($v_idFormular,$v_DataDay,$v_DataMonth,$v_DataYear);
    updateDataEliberareBuletin($v_idFormular,$v_DataEliberareBuletinDay,$v_DataEliberareBuletinMonth,$v_DataEliberareBuletinYear);
    updateDataExpirareBuletin($v_idFormular,$v_DataExpirareBuletinDay,$v_DataExpirareBuletinMonth,$v_DataExpirareBuletinYear);

    validare($v_idFormular);

    header('Location: administrator.php?success=1');




?>