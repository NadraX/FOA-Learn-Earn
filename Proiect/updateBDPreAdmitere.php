<?php

function updateNrChitantei($id_formular,$nume)
{

    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, "UPDATE Formular_preadmitere
                        SET nr_chitanta='$nume'  where id='$id_formular'");
    oci_execute($s);
    oci_close($c);
}

function updateSuma($id_formular,$nume)
{

    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, "UPDATE Formular_preadmitere
                        SET suma='$nume'  where id='$id_formular'");
    oci_execute($s);
    oci_close($c);
}

function updateNumeNastere($id_formular,$nume)
{

    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into date_personale_preadmitere dp
                                using formular_preadmitere f 
                                on (f.id=dp.formular_id)
                                when matched then 
                                update set dp.nume_familie_nastere='$nume'  where f.id='$id_formular'");
    oci_execute($s);
    oci_close($c);
}

function updateNumeActual($id_formular,$nume)
{

    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into date_personale_preadmitere dp
                                using formular_preadmitere f 
                                on (f.id=dp.formular_id)
                                when matched then 
                                update set dp.nume_familie_actual='$nume'  where f.id='$id_formular'");
    oci_execute($s);
    oci_close($c);
}

function updatePrenume($id_formular,$prenume)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.prenume_candidat='$prenume'
                                                 where f.id='$id_formular'");

    oci_execute($s);
    oci_close($c);

}

function updateInitialaTata($id_formular,$initialaTata)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.initialele_tatalui_mamei='$initialaTata'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updatePrenumeTata($id_formular,$prenumeTata)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.prenume_tata='$prenumeTata'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updatePrenumeMama($id_formular,$prenumeMama)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.prenume_mama='$prenumeMama'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateCetatenie($id_formular,$cetatenie)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.cetatenie='$cetatenie'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateSex($id_formular,$sex)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.sex='$sex'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateNationalitate($id_formular,$nationalitate)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.nationalitate='$nationalitate'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateEtnie($id_formular,$etnie)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.etnie='$etnie'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}
function updateLimbaMaterna($id_formular,$limbaMaterna)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.limba_materna='$limbaMaterna'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}
/*
function updateTelefon($id_formular,$telefon)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.telefon='$telefon'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateEmail($id_formular,$email)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.email='$email'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}
*/
function updateDataNasterii($id_formular,$dataDay,$dataMonth,$dataYear)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.data_nasterii=date '$dataYear-$dataMonth-$dataDay'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}



function updateCNP($id_formular,$cnp)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.cnp='$cnp'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}


function updateTipAct($id_formular,$tipAct)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.tip_act_ident='$tipAct'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateSerieBuletin($id_formular,$serieBuletin)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.serie_act='$serieBuletin'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateNumarBuletin($id_formular,$numarBuletin)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.numar_act='$numarBuletin'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateBuletinEliberatDe($id_formular,$buletinEliberatDe)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.eliberat_de='$buletinEliberatDe'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateDataEliberareBuletin($id_formular,$dataEliberareDay,$dataEliberareMonth,$dataEliberareYear)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.data_eliberarii=date '$dataEliberareYear-$dataEliberareMonth-$dataEliberareDay'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateDataExpirareBuletin($id_formular,$dataExpirareDay,$dataExpirareMonth,$dataExpirareYear)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.data_expirarii=date '$dataExpirareYear-$dataExpirareMonth-$dataExpirareDay'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

/*
function updateStada($id_formular,$strada)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.strada='$strada'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateNrStada($id_formular,$nrStrada)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.numar_domiciliu='$nrStrada'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateNrBloc($id_formular,$nrBloc)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.bloc_domiciliu='$nrBloc'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateApartament($id_formular,$apartament)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.apartament_domiciliu='$apartament'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}
*/

function updateMaterieTest($id_formular,$materieTest)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " update formular_preadmitere  set optiune_test_scris='$materieTest'
                                                 where id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateNumeLiceu($id_formular,$numeLiceu)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.intitutie_liceu='$numeLiceu'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}
/*
function updateCodPostal($id_formular,$codPostal)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.cod_postal_domiciliu='$codPostal'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}
*/
function updateLocalitateNastere($id_formular,$localitate)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.localitatea_nasterii='$localitate'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateJudetNastere($id_formular,$judet)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.judetul_nasterii='$judet'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateTaraNastere($id_formular,$tara)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.tara_nasterii='$tara'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateLocalitateLiceu($id_formular,$localitate)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.localitate_liceu='$localitate'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateJudetLiceu($id_formular,$judet)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.judet_liceu='$judet'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateTaraLiceu($id_formular,$tara)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " merge into  date_personale_preadmitere dp
                                                 using formular_preadmitere f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.tara_liceu='$tara'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function validare($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " update formular_preadmitere set stare=1 where id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

/*function updateDataUltimeiModificari($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, " update formular_preadmitere set data_ultimei_modificari=CURRENT_TIMESTAMP where id='$id_formular' ");

    oci_execute($s);
    oci_close($c);
}*/

function respingere($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe", 'AL32UTF8');
    $s = oci_parse($c, "update formular_preadmitere set stare=-1 where id='$id_formular'");

    oci_execute($s);
    oci_close($c);

}

?>