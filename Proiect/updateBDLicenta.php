<?php

//----------------------------------------------------------------------------------------------

// UPDATE TAXA INSCRIERE

function updateNrChitantei($id_formular,$nume)
{

    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, "UPDATE Formular_licenta
                        SET nr_chitanta='$nume'  where id='$id_formular'");
    oci_execute($s);
    oci_close($c);
}


function updateSuma($id_formular,$nume)
{

    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, "UPDATE Formular_licenta
                        SET suma='$nume'  where id='$id_formular'");
    oci_execute($s);
    oci_close($c);
}

function updateEsteScutit($id_formular,$nume)
{
    if ($nume == "DA" || $nume == "da"  || $nume == "Da" || $nume == "dA" ) $nume = 1;
    else $nume = 0;

    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, "UPDATE Formular_licenta
                        SET scutit='$nume'  where id='$id_formular'");
    oci_execute($s);
    oci_close($c);
}

function updateMotivScutire($id_formular,$nume)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, "UPDATE Formular_licenta
                        SET motiv_scutire='$nume'  where id='$id_formular'");
    oci_execute($s);
    oci_close($c);
}

//----------------------------------------------------------------------------------------------

// UPDATE DATE PERSONALE

function updateNumeNastere($id_formular,$nume)
{

    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into date_personale_licenta dp
                                using formular_licenta f 
                                on (f.id=dp.formular_id)
                                when matched then 
                                update set dp.nume_familie_nastere='$nume'  where f.id='$id_formular'");
    @oci_execute($s);
    @oci_close($c);
}

function updateNumeActual($id_formular,$nume)
{

    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into date_personale_licenta dp
                                using formular_licenta f 
                                on (f.id=dp.formular_id)
                                when matched then 
                                update set dp.nume_familie_actual='$nume'  where f.id='$id_formular'");
    @oci_execute($s);
    @oci_close($c);
}

function updatePrenume($id_formular,$prenume)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.prenume_candidat='$prenume'
                                                 where f.id='$id_formular'");

    @oci_execute($s);
    @oci_close($c);

}

function updateInitialaTata($id_formular,$initialaTata)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.initialele_tatalui_mamei='$initialaTata'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updatePrenumeTata($id_formular,$prenumeTata)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.prenume_tata='$prenumeTata'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updatePrenumeMama($id_formular,$prenumeMama)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.prenume_mama='$prenumeMama'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateCetatenie($id_formular,$cetatenie)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.cetatenia='$cetatenie'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateSex($id_formular,$sex)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.sex='$sex'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateStareCivila($id_formular,$stareCivila)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.stare_civila='$stareCivila'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateLocalitateNastere($id_formular,$localitate)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.localitatea_nasterii='$localitate'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateJudetNastere($id_formular,$judet)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.judetul_nasterii='$judet'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateTaraNastere($id_formular,$tara)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.tara_nasterii='$tara'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDataNasterii($id_formular,$dataDay,$dataMonth,$dataYear)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.data_nasterii=date '$dataYear-$dataMonth-$dataDay'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNationalitate($id_formular,$nationalitate)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.nationalitate='$nationalitate'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateEtnie($id_formular,$etnie)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.etnie='$etnie'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}
function updateLimbaMaterna($id_formular,$limbaMaterna)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.limba_materna='$limbaMaterna'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

//----------------------------------------------------------------------------------------------

// UPDATE DATE ACT IDENTITATE

function updateCNP($id_formular,$cnp)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.cnp='$cnp'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateTipAct($id_formular,$v_tipAct)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.tip_act_ident='$v_tipAct'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateSerieBuletin($id_formular,$serieBuletin)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.serie_act='$serieBuletin'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNumarBuletin($id_formular,$numarBuletin)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.numar_act='$numarBuletin'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateBuletinEliberatDe($id_formular,$buletinEliberatDe)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.eliberat_de='$buletinEliberatDe'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDataEliberareBuletin($id_formular,$dataEliberareDay,$dataEliberareMonth,$dataEliberareYear)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.data_eliberarii=date '$dataEliberareYear-$dataEliberareMonth-$dataEliberareDay'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDataExpirareBuletin($id_formular,$dataExpirareDay,$dataExpirareMonth,$dataExpirareYear)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.data_expirarii=date '$dataExpirareYear-$dataExpirareMonth-$dataExpirareDay'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

//----------------------------------------------------------------------------------------------

// UPDATE DOMICILIU

function updateDomiciliuStabil($id_formular,$mediu_domiciliu)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.mediu_domiciliu='$mediu_domiciliu'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateStrada($id_formular,$strada)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.strada='$strada'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNrStrada($id_formular,$nrStrada)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.numar='$nrStrada'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNrBloc($id_formular,$nrBloc)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.bloc='$nrBloc'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateScara($id_formular,$apartament)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.scara='$apartament'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateEtaj($id_formular,$etaj)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.etaj='$etaj'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateApartament($id_formular,$apartament)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.apartament='$apartament'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateLocalitateDomiciliu($id_formular, $localitateDomiciliu)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.localitate_domiciliu='$localitateDomiciliu'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateJudetDomiciliu($id_formular, $judetDomiciliu)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.judet_domiciliu='$judetDomiciliu'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateCodPostal($id_formular,$codPostal)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.cod_postal='$codPostal'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateTaraDomiciliu($id_formular, $taraDomiciliu)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.tara_domiciliu='$taraDomiciliu'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

//----------------------------------------------------------------------------------------------

// UPDATE DATE DE CONTACT

function updateTelefon($id_formular,$telefon)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.telefon='$telefon'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateEmail($id_formular,$email)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.email='$email'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

//----------------------------------------------------------------------------------------------

// UPDATE SOLICITA CAZARE

function updateSolicitaCazareStudii($id_formular,$nume)
{
    if ($nume == "DA" || $nume == "da"  || $nume == "Da" || $nume == "dA" ) $nume = 1;
    else $nume = 0;

    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.solicita_cazare_studii='$nume'
                                                 where f.id='$id_formular' ");
    oci_execute($s);
    oci_close($c);
}

function updateSolicitaCazareExamen($id_formular,$nume)
{
    if ($nume == "DA" || $nume == "da"  || $nume == "Da" || $nume == "dA" ) $nume = 1;
    else $nume = 0;

    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.solicita_cazare_admitere='$nume'
                                                 where f.id='$id_formular' ");
    oci_execute($s);
    oci_close($c);
}

//----------------------------------------------------------------------------------------------

// UPDATE STARI SPECIALE

function updatePersoanaCuDizabilitati($id_formular,$pcd)
{
    if ($pcd == "DA" || $pcd == "da"  || $pcd == "Da" || $pcd == "dA" ) $nume = 1;
    else $pcd = 0;
    
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.persoana_cu_dizabilitati='$pcd'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateStareSpeciala($id_formular,$nume)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.stare_sociala_speciala='$nume'
                                                 where f.id='$id_formular' ");
    oci_execute($s);
    oci_close($c);
}

//----------------------------------------------------------------------------------------------

// UPDATE STUDII PREUNIVERSITARE

function updateNumeLiceu($id_formular,$numeLiceu)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.intitutie_liceu='$numeLiceu'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}
    
function updateMaterieTest($id_formular,$materieTest)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " update formular_licenta  set optiune_test_scris='$materieTest'
                                                 where id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

//----------------------------------------------------------------------------------------------------------

//  Studiile preuniversitare absolvite, nivel liceu

function updateLiceulAbsolvit($id_formular,$liceu)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.liceul_absolvit='$liceu'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}


function updateLocalitateLiceu($id_formular,$localitate)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.localitate_liceu='$localitate'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateJudetLiceu($id_formular,$judet)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.judet_liceu='$judet'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateTaraLiceu($id_formular,$tara)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.tara_liceu='$tara'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateProfilLiceu($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.profil_liceu='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDurataStudiilorLiceu($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.durata_studiilor_liceu='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateAnulAbsolviriiLiceu($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.anul_absolvirii_liceu='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateFormaInvatamantLiceu($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.forma_invatamant_liceu='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateSerieDiplomaBac($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.serie_diploma_bac='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNrDiplomaBac($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.nr_diploma_bac='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateEmisaDeLiceu($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.emisa_de_liceu='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDataEmiteriiDiploma($id_formular,$dataEliberareBacDay,$dataEliberareBacMonth,$dataEliberareBacYear)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.data_emiterii_diploma=date '$dataEliberareBacYear-$dataEliberareBacMonth-$dataEliberareBacDay'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNrFoiiMatricole($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.nr_foii_matricole='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNrActRecEchiv($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.nr_act_rec_echiv='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateSerieActRecEchiv($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.serie_act_rec_echiv='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDataEchivLiceu($id_formular,$dataEchivLiceuDay,$dataEchivLiceuMonth,$dataEchivLiceuYear)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.data_rec_echiv=date '$dataEchivLiceuYear-$dataEchivLiceuMonth-$dataEchivLiceuDay'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

//-----------------------------------------------------------------------------------------------

//  Studiile universitare de licenta in curs

function updateStudentAltaFac($id_formular,$valoareNoua)
{
    if ($valoareNoua == "DA" || $valoareNoua == "da"  || $valoareNoua == "Da" || $valoareNoua == "dA" ) $valoareNoua = 1;
    else $valoareNoua = 0;
    
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.student_alta_fac='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDenumireInstitutieFac($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.denumire_institutie_fac='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDurataStudiiFac($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.durata_studii_fac='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDenumireAltaFacultate($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.denumire_alta_facultate='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDomeniuLicentaFac($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.domeniu_licenta_fac='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateSpecializareFac($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.specializare_fac='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateFormaInvatamantFac($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.forma_invatamant_fac='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateAnulFac($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.anul_fac='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNrSemestreBugetFac($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.nr_semestre_buget_fac='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNrSemestreBursaFac($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.nr_semestre_bursa_fac='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateTaraFac($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.tara_fac='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateJudetFac($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.judet_fac='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateLocalitateFac($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.localitate_fac='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

//------------------------------------------------------------------------------------------------

// Studiile universitare de licenta absolvite

function updateAnulAbsolvirii($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.anul_absolvirii='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}


function updateTaraFacAbs($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.tara_fac_abs='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateJudetFacAbs($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.judet_fac_abs='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateLocalitateFacAbs($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.localitate_fac_abs='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDenumireInstitutieAbs($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.denumire_institutie_abs='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDenumireFacultateAbs($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.denumire_facultate_abs='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDomeniuLicentaAbs($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.domeniu_licenta_abs='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateSpecializareAbs($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.specializare_abs='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateTitluObtinut($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.titlut_obtinut='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateFormaInvatamantAbs($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.forma_invatamant_abs='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}


function updateNrSemestreBugetAbs($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.nr_semestre_buget_abs='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNrSemestreBursaAbs($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.nr_semestre_bursa_abs='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDurataStudiilorAbs($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.durata_studiilor_abs='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateSerieDiplomaLicenta($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.serie_diploma_licenta='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNrDiplomaLicenta($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.nr_diploma_licenta='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateLicentaEmisaDe($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.licenta_emisa_de='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDataEmitereLicenta($id_formular,$dataEmitereLicentaDay,$dataEmitereLicentaMonth,$dataEmitereLicentaYear)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.data_emiterii_licenta=date '$dataEmitereLicentaYear-$dataEmitereLicentaMonth-$dataEmitereLicentaDay'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNrSupliment($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.nr_supliment='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNrActRecEchivAbs($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.nr_act_rec_echiv_abs='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateSerieActRecEchivAbs($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.serie_acr_rec_echiv_abs='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDataEchivAbs($id_formular,$dataEchivAbsDay,$dataEchivAbsMonth,$dataEchivAbsYear)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.data_echiv_abs=date '$dataEchivAbsYear-$dataEchivAbsMonth-$dataEchivAbsDay'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

//----------------------------------------------------------------------------------------------

// UPDATE CERINTE SPECIFICE FACULTATII

function updateSolicitaEchivalare($id_formular,$valoareNoua)
{
    if ($valoareNoua == "DA" || $valoareNoua == "da"  || $valoareNoua == "Da" || $valoareNoua == "dA" ) $valoareNoua = 1;
    else $valoareNoua = 0;
    
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  cerinte_licenta c
                                                 using formular_licenta f 
                                                 on (f.id=c.formular_id)
                                                 when matched then
                                                 update set c.solicita_echivalare='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateMedieGeneraleBac($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  cerinte_licenta c
                                                 using formular_licenta f 
                                                 on (f.id=c.formular_id)
                                                 when matched then
                                                 update set c.medie_generala_bac='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateMedieDisciplinaMax($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  cerinte_licenta c
                                                 using formular_licenta f 
                                                 on (f.id=c.formular_id)
                                                 when matched then
                                                 update set c.medie_disciplina_max='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateOptiuneTestScris($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  cerinte_licenta c
                                                 using formular_licenta f 
                                                 on (f.id=c.formular_id)
                                                 when matched then
                                                 update set c.optiune_test_scris='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateAnParticiparePreadmitere($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  cerinte_licenta c
                                                 using formular_licenta f 
                                                 on (f.id=c.formular_id)
                                                 when matched then
                                                 update set c.an_participare_preadmitere='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateVreaNotaPreadmitere($id_formular,$valoareNoua)
{
    if ($valoareNoua == "DA" || $valoareNoua == "da"  || $valoareNoua == "Da" || $valoareNoua == "dA" ) $valoareNoua = 1;
    else $valoareNoua = 0;
    
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  cerinte_licenta c
                                                 using formular_licenta f 
                                                 on (f.id=c.formular_id)
                                                 when matched then
                                                 update set c.vrea_nota_preadmitere='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateVreaSaSustinaExamen($id_formular,$valoareNoua)
{
    if ($valoareNoua == "DA" || $valoareNoua == "da"  || $valoareNoua == "Da" || $valoareNoua == "dA" ) $valoareNoua = 1;
    else $valoareNoua = 0;
    
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  cerinte_licenta c
                                                 using formular_licenta f 
                                                 on (f.id=c.formular_id)
                                                 when matched then
                                                 update set c.vrea_sa_sustina_examen='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

//----------------------------------------------------------------------------------------------

// Opțiuni de admitere în ordinea preferințelor

function updatePreferinta1($id_formular,$preferintaNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  Optiuni_licenta ol
                                                 using formular_licenta f 
                                                 on (f.id=ol.formular_id)
                                                 when matched then
                                                 update set ol.preferinta_1='$preferintaNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updatePreferinta2($id_formular,$preferintaNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  Optiuni_licenta ol
                                                 using formular_licenta f 
                                                 on (f.id=ol.formular_id)
                                                 when matched then
                                                 update set ol.preferinta_2='$preferintaNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updatePreferinta3($id_formular,$preferintaNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  Optiuni_licenta ol
                                                 using formular_licenta f 
                                                 on (f.id=ol.formular_id)
                                                 when matched then
                                                 update set ol.preferinta_3='$preferintaNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updatePreferinta4($id_formular,$preferintaNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  Optiuni_licenta ol
                                                 using formular_licenta f 
                                                 on (f.id=ol.formular_id)
                                                 when matched then
                                                 update set ol.preferinta_4='$preferintaNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateAcceptaTaxa($id_formular,$valoareNoua)
{
    if ($valoareNoua == "DA" || $valoareNoua == "da"  || $valoareNoua == "Da" || $valoareNoua == "dA" ) $valoareNoua = 1;
    else $valoareNoua = 0;
    
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  Optiuni_licenta ol
                                                 using formular_licenta f 
                                                 on (f.id=ol.formular_id)
                                                 when matched then
                                                 update set ol.stare_taxa='$valoareNoua'
                                                 where f.id='$id_formular'");

    @oci_execute($s);
    @oci_close($c);

}

//----------------------------------------------------------------------------------------------

// Opțiuni de admitere în ordinea preferințelor

function updateDiplomaBacDoc($id_formular, $valoareNoua)
{
    if ($valoareNoua == "DA" || $valoareNoua == "da"  || $valoareNoua == "Da" || $valoareNoua == "dA" ) $valoareNoua = 1;
    else $valoareNoua = 0;
    
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  Informatii_documente_licenta idl
                                                 using formular_licenta f 
                                                 on (f.id=idl.formular_id)
                                                 when matched then
                                                 update set idl.diploma_bac_original='$valoareNoua'
                                                 where f.id='$id_formular'");

    @oci_execute($s);
    @oci_close($c);
}

function updateAdeverintaDoc($id_formular, $valoareNoua)
{
    if ($valoareNoua == "DA" || $valoareNoua == "da"  || $valoareNoua == "Da" || $valoareNoua == "dA" ) $valoareNoua = 1;
    else $valoareNoua = 0;
    
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  Informatii_documente_licenta idl
                                                 using formular_licenta f 
                                                 on (f.id=idl.formular_id)
                                                 when matched then
                                                 update set idl.adeverinta_original='$valoareNoua'
                                                 where f.id='$id_formular'");

    @oci_execute($s);
    @oci_close($c);
}

function updateEchivalareStudiiDoc($id_formular, $valoareNoua)
{
    if ($valoareNoua == "DA" || $valoareNoua == "da"  || $valoareNoua == "Da" || $valoareNoua == "dA" ) $valoareNoua = 1;
    else $valoareNoua = 0;
    
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  Informatii_documente_licenta idl
                                                 using formular_licenta f 
                                                 on (f.id=idl.formular_id)
                                                 when matched then
                                                 update set idl.document_echiv_studii_original='$valoareNoua'
                                                 where f.id='$id_formular'");

    @oci_execute($s);
    @oci_close($c);
}

function updateDiplomaOlimpiadaDoc($id_formular, $valoareNoua)
{
    if ($valoareNoua == "DA" || $valoareNoua == "da"  || $valoareNoua == "Da" || $valoareNoua == "dA" ) $valoareNoua = 1;
    else $valoareNoua = 0;
    
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  Informatii_documente_licenta idl
                                                 using formular_licenta f 
                                                 on (f.id=idl.formular_id)
                                                 when matched then
                                                 update set idl.diploma_olimpiada='$valoareNoua'
                                                 where f.id='$id_formular'");

    @oci_execute($s);
    @oci_close($c);
}

//----------------------------------------------------------------------------------------------

// ALTE CONCURSURI

function updateParticipaAlteConcursuri($id_formular, $valoareNoua)
{
    if ($valoareNoua == "DA" || $valoareNoua == "da"  || $valoareNoua == "Da" || $valoareNoua == "dA" ) $valoareNoua = 1;
    else $valoareNoua = 0;
    
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  Informatii_documente_licenta idl
                                                 using formular_licenta f 
                                                 on (f.id=idl.formular_id)
                                                 when matched then
                                                 update set idl.participa_altundeva='$valoareNoua'
                                                 where f.id='$id_formular'");

    @oci_execute($s);
    @oci_close($c);
}

function updateAltaUniversitate1($id_formular, $universitate)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  Informatii_documente_licenta idl
                                                 using formular_licenta f 
                                                 on (f.id=idl.formular_id)
                                                 when matched then
                                                 update set idl.universitate1='$universitate'
                                                 where f.id='$id_formular'");

    @oci_execute($s);
    @oci_close($c);
}

function updateAltaFacultate1($id_formular, $facultate)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  Informatii_documente_licenta idl
                                                 using formular_licenta f 
                                                 on (f.id=idl.formular_id)
                                                 when matched then
                                                 update set idl.facultate1='$facultate'
                                                 where f.id='$id_formular'");

    @oci_execute($s);
    @oci_close($c);
}

function updateAltaUniversitate2($id_formular, $universitate)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  Informatii_documente_licenta idl
                                                 using formular_licenta f 
                                                 on (f.id=idl.formular_id)
                                                 when matched then
                                                 update set idl.universitate2='$universitate'
                                                 where f.id='$id_formular'");

    @oci_execute($s);
    @oci_close($c);
}

function updateAltaFacultate2($id_formular, $facultate)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  Informatii_documente_licenta idl
                                                 using formular_licenta f 
                                                 on (f.id=idl.formular_id)
                                                 when matched then
                                                 update set idl.facultate2='$facultate'
                                                 where f.id='$id_formular'");

    @oci_execute($s);
    @oci_close($c);
}

function updateAltaUniversitate3($id_formular, $universitate)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  Informatii_documente_licenta idl
                                                 using formular_licenta f 
                                                 on (f.id=idl.formular_id)
                                                 when matched then
                                                 update set idl.universitate3='$universitate'
                                                 where f.id='$id_formular'");

    @oci_execute($s);
    @oci_close($c);
}

function updateAltaFacultate3($id_formular, $facultate)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, " merge into  Informatii_documente_licenta idl
                                                 using formular_licenta f 
                                                 on (f.id=idl.formular_id)
                                                 when matched then
                                                 update set idl.facultate3='$facultate'
                                                 where f.id='$id_formular'");

    @oci_execute($s);
    @oci_close($c);
}

// ------------------------------------------------------------------------------------------------------------

function validare($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, "update formular_licenta set stare=1 where id='$id_formular'");

    @oci_execute($s);
    @oci_close($c);

}

function respingere($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = @oci_parse($c, "update formular_licenta set stare=-1 where id='$id_formular'");

    @oci_execute($s);
    @oci_close($c);
}

?>