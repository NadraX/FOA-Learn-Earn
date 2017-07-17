<?php

//----------------------------------------------------------------------------------

//TAXA DE INSCRIERE

function updateNrChitantei($id_formular, $nr) 
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, "UPDATE formular_master
                         set nr_chitanta = '$nr' where id = '$id_formular'");
    oci_execute($s);
    oci_close($c);
}

function updateSuma($id_formular, $nume)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, "UPDATE formular_master
                        SET suma='$nume'  where id='$id_formular'");
    oci_execute($s);
    oci_close($c);
}

function updateEsteScutit($id_formular, $nume)
{
    if ($nume == "DA" || $nume == "da"  || $nume == "Da" || $nume == "dA" ) $nume = 1;
    else $nume = 2;

    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, "UPDATE formular_master
                        SET scutit='$nume'  where id='$id_formular'");
    oci_execute($s);
    oci_close($c);
}

function updateMotivScutire($id_formular, $nume)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, "UPDATE formular_master
                        SET motiv_scutire='$nume'  where id='$id_formular'");
    oci_execute($s);
    oci_close($c);
}

//----------------------------------------------------------------------------------

//DATE PERSONALE

function updateNumeNastere($id_formular, $nume)
{

    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into date_personale_master dp
                                using formular_master f 
                                on (f.id=dp.formular_id)
                                when matched then 
                                update set dp.nume_familie_nastere='$nume'  where f.id='$id_formular'");
    @oci_execute($s);
    @oci_close($c);
}

function updateNumeActual($id_formular, $nume)
{

    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into date_personale_master dp
                                using formular_master f 
                                on (f.id=dp.formular_id)
                                when matched then 
                                update set dp.nume_familie_actual='$nume'  where f.id='$id_formular'");
    @oci_execute($s);
    @oci_close($c);
}

function updatePrenume($id_formular, $prenume)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.prenume_candidat='$prenume'
                                                 where f.id='$id_formular'");

    @oci_execute($s);
    @oci_close($c);

}

function updateInitialaTata($id_formular, $initialaTata)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.initialele_tatalui_mamei='$initialaTata'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updatePrenumeTata($id_formular, $prenumeTata)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.prenume_tata='$prenumeTata'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updatePrenumeMama($id_formular, $prenumeMama)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.prenume_mama='$prenumeMama'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateCetatenie($id_formular, $cetatenie)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.cetatenia='$cetatenie'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateStareCivila($id_formular, $stareCivila)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8', 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.stare_civila='$stareCivila'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateSex($id_formular, $sex)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.sex='$sex'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNationalitate($id_formular, $nationalitate)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.nationalitate='$nationalitate'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateEtnie($id_formular, $etnie)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.etnie='$etnie'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateLimbaMaterna($id_formular, $limbaMaterna)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.limba_materna='$limbaMaterna'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateTelefon($id_formular, $telefon)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.telefon='$telefon'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateEmail($id_formular, $email)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.email='$email'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDataNasterii($id_formular, $dataDay, $dataMonth, $dataYear)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.data_nasterii=date '$dataYear-$dataMonth-$dataDay'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}



function updateCNP($id_formular, $cnp)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.cnp='$cnp'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}


function updateTipAct($id_formular, $tipAct)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.tip_act_ident='$tipAct'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateSerieBuletin($id_formular, $serieBuletin)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.serie_act='$serieBuletin'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNumarBuletin($id_formular, $numarBuletin)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.numar_act='$numarBuletin'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateBuletinEliberatDe($id_formular, $buletinEliberatDe)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.eliberat_de='$buletinEliberatDe'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDataEliberareBuletin($id_formular, $dataEliberareDay, $dataEliberareMonth, $dataEliberareYear)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.data_eliberarii=date '$dataEliberareYear-$dataEliberareMonth-$dataEliberareDay'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDataExpirareBuletin($id_formular, $dataExpirareDay, $dataExpirareMonth, $dataExpirareYear)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.data_expirarii=date '$dataExpirareYear-$dataExpirareMonth-$dataExpirareDay'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

//DOMICILIUL CANDIDATULUI

function updateDomiciliu($id_formular, $domiciliu)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.mediu_domiciliu='$domiciliu'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);
}


function updateStrada($id_formular, $strada)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.strada='$strada'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNrStrada($id_formular, $nrStrada)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.numar='$nrStrada'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNrBloc($id_formular, $nrBloc)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.bloc='$nrBloc'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateApartament($id_formular, $apartament)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.apartament='$apartament'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateScara($id_formular, $apartament)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.scara='$apartament'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateEtaj($id_formular, $etaj)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.etaj='$etaj'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);
}

function updateMaterieTest($id_formular, $materieTest)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " update formular_master  set optiune_test_scris='$materieTest'
                                                 where id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateTaraDomiciliu($id_formular, $taraDomiciliu)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.tara_domiciliu='$taraDomiciliu'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);
}

function updateJudetDomiciliu($id_formular, $judetDomiciliu)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.judet_domiciliu='$judetDomiciliu'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);
}

function updateLocalitateDomiciliu($id_formular, $localitateDomiciliu)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.localitate_domiciliu='$localitateDomiciliu'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);
}

function updateNumeLiceu($id_formular, $numeLiceu)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.intitutie_liceu='$numeLiceu'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateCodPostal($id_formular, $codPostal)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.cod_postal='$codPostal'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateLocalitateNastere($id_formular, $localitate)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.localitatea_nasterii='$localitate'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateJudetNastere($id_formular, $judet)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.judetul_nasterii='$judet'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateTaraNastere($id_formular, $tara)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.tara_nasterii='$tara'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

//----------------------------------------------------------------------------------------------

// CAZARE STUDII

function updateSolicitaCazare($id_formular, $cazareStudii)
{
    if ($cazareStudii == 'DA' || $cazareStudii == 'da' || $cazareStudii == 'Da' || $cazareStudii == 'dA') $cazareStudii = 1;
    else $cazareStudii = 2;
    
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.solicita_cazare_studii='$cazareStudii'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

//----------------------------------------------------------------------------------------------

// ALTE DATE PERSONALE

function updatePersoanaCuDizabilitati($id_formular, $pcd)
{
    if ($pcd == 'DA' || $pcd == 'da' || $pcd == 'Da' || $pcd == 'dA') $pcd = 1;
    else $pcd = 2;
    
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.persoana_cu_dizabilitati='$pcd'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateStareSpeciala($id_formular, $stareSpeciala)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_master dp
                                                 using formular_master f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.stare_sociala_speciala='$stareSpeciala'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);
}

//----------------------------------------------------------------------------------------------

// UPDATE CERINTE SPECIFICE FACULTATII

function updateMedieExamenLicenta($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  cerinte_master c
                                                 using formular_master f 
                                                 on (f.id=c.formular_id)
                                                 when matched then
                                                 update set c.medie_examen_licenta='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateMedieAdmitere($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  cerinte_master c
                                                 using formular_master f 
                                                 on (f.id=c.formular_id)
                                                 when matched then
                                                 update set c.medie_admitere='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updatePreferinta1($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  ordine_preferinte_master op
                                                 using formular_master f 
                                                 on (f.id=op.formular_id)
                                                 when matched then
                                                 update set op.preferinta_1='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updatePreferinta2($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  ordine_preferinte_master op
                                                 using formular_master f 
                                                 on (f.id=op.formular_id)
                                                 when matched then
                                                 update set op.preferinta_2='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updatePreferinta3($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  ordine_preferinte_master op
                                                 using formular_master f 
                                                 on (f.id=op.formular_id)
                                                 when matched then
                                                 update set op.preferinta_3='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updatePreferinta4($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  ordine_preferinte_master op
                                                 using formular_master f 
                                                 on (f.id=op.formular_id)
                                                 when matched then
                                                 update set op.preferinta_4='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updatePreferinta5($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  ordine_preferinte_master op
                                                 using formular_master f 
                                                 on (f.id=op.formular_id)
                                                 when matched then
                                                 update set op.preferinta_5='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updatePreferinta6($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  ordine_preferinte_master op
                                                 using formular_master f 
                                                 on (f.id=op.formular_id)
                                                 when matched then
                                                 update set op.preferinta_6='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updatePreferinta7($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  ordine_preferinte_master op
                                                 using formular_master f 
                                                 on (f.id=op.formular_id)
                                                 when matched then
                                                 update set op.preferinta_7='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updatePreferinta8($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  ordine_preferinte_master op
                                                 using formular_master f 
                                                 on (f.id=op.formular_id)
                                                 when matched then
                                                 update set op.preferinta_8='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updatePreferinta9($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  ordine_preferinte_master op
                                                 using formular_master f 
                                                 on (f.id=op.formular_id)
                                                 when matched then
                                                 update set op.preferinta_9='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updatePreferinta10($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  ordine_preferinte_master op
                                                 using formular_master f 
                                                 on (f.id=op.formular_id)
                                                 when matched then
                                                 update set op.preferinta_10='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updatePreferinta11($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  ordine_preferinte_master op
                                                 using formular_master f 
                                                 on (f.id=op.formular_id)
                                                 when matched then
                                                 update set op.preferinta_11='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateOptiuneAdmitereTaxa($id_formular, $valoareNoua)
{
    if ($valoareNoua == 'DA' || $valoareNoua == 'da' || $valoareNoua == 'Da' || $valoareNoua == 'dA') $valoareNoua = 1;
    else $valoareNoua = 2;
    
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  ordine_preferinte_master op
                                                 using formular_master f 
                                                 on (f.id=op.formular_id)
                                                 when matched then
                                                 update set op.optiune_admitere_taxa='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

//----------------------------------------------------------------------------------------------------------
// PANA AICI E OK

//Informatii privind documentele de studii depuse la dosar

function updateDiplomaBacOriginal($v_idFormular, $v_Diploma_Bac_Original)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, "update informatii_documente_master set diploma_bac_original = '$v_Diploma_Bac_Original' where formular_id = '$v_idFormular'");

    @oci_execute($s);
    @oci_close($c);

}

function updateDiplomaBacCopie($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, "update informatii_documente_master set diploma_bac_copie = '$valoareNoua' where formular_id = '$id_formular'");

    @oci_execute($s);
    @oci_close($c);

}

function updateDocEchivPreunivOriginal($v_idFormular, $v_Doc_Echiv_Preuniv_Original)
{
    
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, "update informatii_documente_master set doc_echiv_preuniv_original = '$v_Doc_Echiv_Preuniv_Original' where formular_id = '$v_idFormular'");

    @oci_execute($s);
    @oci_close($c);

}

function updateDocEchivPreunivCopie($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  informatii_documente_master idm
                                                 using formular_master f 
                                                 on (f.id=idm.formular_id)
                                                 when matched then
                                                 update set idm.doc_echiv_preuniv_copie='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDiplomaLicentaOriginal($v_idFormular, $v_Diploma_Licenta_Original)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, "UPDATE informatii_documente_master set diploma_licenta_original = '$v_Diploma_Licenta_Original' where formular_id = '$v_idFormular'");

    @oci_execute($s);
    @oci_close($c);

}

function updateDiplomaLicentaCopie($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  informatii_documente_master idm
                                                 using formular_master f 
                                                 on (f.id=idm.formular_id)
                                                 when matched then
                                                 update set idm.diploma_licenta_copie='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}


//-----------------------------------------------------------------------------------------------------------
// PANA AICI E OK

//  Studiile preuniversitare absolvite, nivel liceu

function updateLiceulAbsolvit($id_formular, $liceu)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.liceul_absolvit='$liceu'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}


function updateLocalitateLiceu($id_formular, $localitate)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.localitate_liceu='$localitate'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateJudetLiceu($id_formular, $judet)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.judet_liceu='$judet'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateTaraLiceu($id_formular, $tara)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.tara_liceu='$tara'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateProfilLiceu($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.profil_liceu='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDurataStudiilorLiceu($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.durata_studiilor_liceu='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateAnulAbsolviriiLiceu($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.anul_absolvirii_liceu='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateFormaInvatamantLiceu($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.forma_invatamant_liceu='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateSerieDiplomaBac($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.serie_diploma_bac='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNrDiplomaBac($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.nr_diploma_bac='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateEmisaDeLiceu($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.emisa_de_liceu='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDataEliberareBac($id_formular, $dataEmitereDay, $dataEmitereMonth, $dataEmitereYear)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  Date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.data_emiterii_diploma=date '$dataEmitereYear-$dataEmitereMonth-$dataEmitereDay'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNrFoiiMatricole($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.nr_foii_matricole='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNrActRecEchiv($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.nr_act_rec_echiv='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);
}

function updateSerieActRecEchiv($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.serie_act_rec_echiv='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDataEchivalareBac($id_formular, $dataEchivBacDay, $dataEchivBacMonth, $dataEchivBacYear)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  Date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.data_rec_echiv=date '$dataEchivBacYear-$dataEchivBacMonth-$dataEchivBacDay'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

//-----------------------------------------------------------------------------------------------
// PANA AICI E OK

//  Studiile universitare de licenta absolvite

function updateDenumireInstitutieFac($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.denumire_institutie_fac='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDurataStudii($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.durata_studii='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDenumireFacultate($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.denumire_facultate='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDenumireDomeniuLicenta($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.denumire_domeniu_licenta='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateSpecializare($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.specializare='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateTitluObtinut($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.titlu_obtinut='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateFormaInvatamantFac($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.forma_invatamant_fac='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNrSemBuget($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.nr_sem_buget='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNrSemBursa($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.nr_sem_bursa='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateLocalitateFac($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.localitate_fac='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateJudetFac($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.judet_fac='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateTaraFac($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.tara_fac='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDiploLicentaSerie($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.diplo_licenta_serie='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDiploLicentaNr($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.diplo_licenta_nr='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDiplEmisaDe($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.dipl_emisa_de='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDiplDataEmitere($id_formular, $dataEmitereLicentaDay, $dataEmitereLicentaMonth, $dataEmitereLicentaYear)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  Date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.dipl_data_emitere=date '$dataEmitereLicentaYear-$dataEmitereLicentaMonth-$dataEmitereLicentaDay'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNrFoaieMatricola($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.nr_foaie_matricola='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNrActRecLicenta($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.nr_act_rec_licenta='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateSerieActRecLicenta($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.serie_act_rec_licenta='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDataActRecLicenta($id_formular, $dataLicentaEchivDay, $dataLicentaEchivMonth, $dataLicentaEchivYear)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, "UPDATE date_preg_anterioara_master set data_act_rec_licenta = date '$dataLicentaEchivYear-$dataLicentaEchivMonth-$dataLicentaEchivDay' where formular_id = '$id_formular'");

    @oci_execute($s);
    @oci_close($c);
}


//------------------------------------------------------------------------------------------------
// PANA AICI E OK

// Studiile universitare de master in curs


function updateInCursStudentAltaFac($id_formular, $valoareNoua)
{
    if ($valoareNoua == 'DA' || $valoareNoua == 'da' || $valoareNoua == 'Da' || $valoareNoua == 'dA') $valoareNoua = 1;
    else $valoareNoua = 2;
    
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.in_curs_student_alta_fac='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}


function updateInCursTaraMaster($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.in_curs_tara_master='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateInCursJudetMaster($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.in_curs_judet_master='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateInCursLocalitateMaster($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.in_curs_localitate_master='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateInCursDenumInstitutieMaster($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.in_curs_denum_institutie_master='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateInCursDenumFacultateMaster($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.in_curs_denum_facultate_master='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateInCursDenumDomeniuMaster($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.in_curs_denum_domeniu_master='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateInCursSpecializareMaster($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.in_curs_specializare_master='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateInCursFormaInvatMaster($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.in_curs_forma_invat_master='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateInCursAnMaster($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.in_curs_an_master='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateInCursNrSemBugetMaster($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.in_curs_nr_sem_buget_master='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateInCursNrSemBursaMaster($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.in_curs_nr_sem_bursa_master='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}


//-------------------------------------------------------------------------------------------------------------------
// PANA AICI E OK

// Absolvent al studiilor de master



function updateAbsolventAn($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.absolvent_an='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}


function updateAbsolventTara($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.absolvent_tara='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateAbsolventJudet($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.absolvent_judet='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateAbsolventLocalitate($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.absolvent_localitate='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateAbsolventDenimireInstit($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.absolvent_denumire_instit='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateAbsolventDenumireFacult($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.absolvent_denumire_facult='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateAbsolventDomeniu($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.absolvent_domeniu='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateAbsolventSpecializare($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.absolvent_specializare='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateTitlulObtinut($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.absolvent_titlu_obtinut='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);
}

function updateAbsolventFormaInvat($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.absolvent_forma_invat='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateAbsolventNrSemBuget($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.absolvent_nr_sem_buget='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateAbsolventNrSemBursa($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.absolvent_nr_sem_bursa='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateAbsolventAreDiploma($v_idFormular, $v_Are_Diploma_Abs)
{
    if ($v_Are_Diploma_Abs == 'DA' || $v_Are_Diploma_Abs == 'da' || $v_Are_Diploma_Abs == 'Da' || $v_Are_Diploma_Abs == 'dA') $v_Are_Diploma_Abs=1;
    else $v_Are_Diploma_Abs = 2;
    
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, "UPDATE date_preg_anterioara_master set absolvent_cu_diploma = :abs_diploma where formular_id = '$v_idFormular'");

    oci_bind_by_name($s, ':abs_diploma', $v_Are_Diploma_Abs);

    @oci_execute($s);
    @oci_close($c);
}

function updateAbsolventDiploSerie($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.absolvent_diplo_serie='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateAbsolventDiploNr($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.absolvent_diplo_nr='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateAbsolventDiploEmisaDe($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.absolvent_diplo_emisa_de='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateAbsolventDiplDataEmitere($v_idFormular, $v_Abs_Data_Emitere_Day, $v_Abs_Data_Emitere_Month, $v_Abs_Data_Emitere_Year)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " UPDATE date_preg_anterioara_master set absolvent_dipl_data_emitere = date '$v_Abs_Data_Emitere_Year-$v_Abs_Data_Emitere_Month-$v_Abs_Data_Emitere_Day' where formular_id = '$v_idFormular'");

    @oci_execute($s);
    @oci_close($c);
}

function updateAbsolventNrFoaieMatricola($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.absolvent_nr_foaie_matricola='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateAbsolventNrEchivalare($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.absolvent_act_rec_nr='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);
}

function updateAbsolventSerieEchivalare($id_formular, $valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_master dpa
                                                 using formular_master f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.absolvent_act_rec_serie='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);
}

function updateEchivalareMaster($v_idFormular, $v_Master_Echiv_Day, $v_Master_Echiv_Month, $v_Master_Echiv_Year)
{
    $v_Master_Echiv_Day= $_POST["dataMasterEchivDay"];
    $v_Master_Echiv_Month = $_POST["dataMasterEchivMonth"];
    $v_Master_Echiv_Year = $_POST["dataMasterEchivYear"];
    
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, "UPDATE date_preg_anterioara_master set absolvent_act_rec_data_echiv = date '$v_MAster_Echiv_Year-$v_Master_Echiv_Month-$v_Master_Echiv_Day ' where formular_id = '$v_idFormular'");

    @oci_execute($s);
    @oci_close($c);
}

// -----------------------------------------------------------------------------------------------

function updateParticipAltundeva($v_idFormular, $v_Particip_Altundeva)
{
    if ($v_Particip_Altundeva == 'DA' || $v_Particip_Altundeva == 'da' || $v_Particip_Altundeva == 'Da' || $v_Particip_Altundeva == 'dA') $v_Particip_Altundeva = 1;
    else $v_Particip_Altundeva = 2;
    
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, "UPDATE informatii_documente_master set particip_altundeva = '$v_Particip_Altundeva' where formular_id = '$v_idFormular'");

    @oci_execute($s);
    @oci_close($c);

}

function updateUniversitate1($v_idFormular, $v_Universitate_1)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, "UPDATE informatii_documente_master set universitate1 = :univ1 where formular_id = '$v_idFormular'");

    oci_bind_by_name($s, ':univ1', $v_Universitate_1);

    @oci_execute($s);
    @oci_close($c);
}

function updateFacultate1($v_idFormular, $v_Facultate_1)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, "UPDATE informatii_documente_master set facultate1='$v_Facultate_1'
                                                 where formular_id='$v_idFormular'");

    @oci_execute($s);
    @oci_close($c);
}

function updateUniversitate2($v_idFormular, $v_Universitate_2)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, "UPDATE informatii_documente_master set universitate2='$v_Universitate_2'
                                                 where formular_id='$v_idFormular'");

    @oci_execute($s);
    @oci_close($c);
}

function updateFacultate2($v_idFormular, $v_Facultate_2)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, "UPDATE informatii_documente_master set facultate1='$v_Facultate_2'
                                                 where formular_id='$v_idFormular'");

    @oci_execute($s);
    @oci_close($c);
}

function updateUniversitate3($v_idFormular, $v_Universitate_3)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, "UPDATE informatii_documente_master set universitate3='$v_Universitate_3'
                                                 where formular_id='$v_idFormular'");

    @oci_execute($s);
    @oci_close($c);
}

function updateFacultate3($v_idFormular, $v_Facultate_3)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, "UPDATE informatii_documente_master set facultate1='$v_Facultate_3'
                                                 where formular_id='$v_idFormular'");

    @oci_execute($s);
    @oci_close($c);
}

// ------------------------------------------------------------------------------------------------

function updateAlteSurse($v_idFormular, $v_Alte_Surse)
{   
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, "UPDATE chestionar_master set alte_surse='$v_Alte_Surse'
                                                 where formular_id='$v_idFormular'");
    @oci_execute($s);
    @oci_close($c);
}

// ------------------------------------------------------------------------------------------------

function validare($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " update formular_master set stare=1 where id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function respingere($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, "update formular_master set stare=-1 where id='$id_formular'");

    @oci_execute($s);
    @oci_close($c);

}


?>