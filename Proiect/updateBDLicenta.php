<?php



function updateNumeNastere($id_formular,$nume)
{

    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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

    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.sex='$sex'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNationalitate($id_formular,$nationalitate)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.limba_materna='$limbaMaterna'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateTelefon($id_formular,$telefon)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.email='$email'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDataNasterii($id_formular,$dataDay,$dataMonth,$dataYear)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.data_nasterii=date '$dataYear-$dataMonth-$dataDay'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}



function updateCNP($id_formular,$cnp)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.cnp='$cnp'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

/*
function updateTipBuletin($id_formular,$tipBuletin)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.tip_buletin='$tipBuletin'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}
*/
function updateSerieBuletin($id_formular,$serieBuletin)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.serie_ci='$serieBuletin'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNumarBuletin($id_formular,$numarBuletin)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.numar_ci='$numarBuletin'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateBuletinEliberatDe($id_formular,$buletinEliberatDe)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.data_expirarii=date '$dataExpirareYear-$dataExpirareMonth-$dataExpirareDay'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}


function updateStrada($id_formular,$strada)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.bloc='$nrBloc'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateApartament($id_formular,$apartament)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.apartament='$apartament'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateScara($id_formular,$apartament)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.scara='$apartament'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateMaterieTest($id_formular,$materieTest)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " update formular_licenta  set optiune_test_scris='$materieTest'
                                                 where id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNumeLiceu($id_formular,$numeLiceu)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.intitutie_liceu='$numeLiceu'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateCodPostal($id_formular,$codPostal)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.cod_postal='$codPostal'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateLocalitateNastere($id_formular,$localitate)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.tara_nasterii='$tara'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}


function updatePersoanaCuDizabilitati($id_formular,$pcd)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  date_personale_licenta dp
                                                 using formular_licenta f 
                                                 on (f.id=dp.formular_id)
                                                 when matched then
                                                 update set dp.persoana_cu_dizabilitati='$pcd'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function validare($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " update formular_licenta set stare=1 where id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function respingere($id_formular)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, "update formular_licenta set stare=-1 where id='$id_formular'");

    @oci_execute($s);
    @oci_close($c);

}

//----------------------------------------------------------------------------------------------

// UPDATE CERINTE SPECIFICE FACULTATII
function updateMedieGeneraleBac($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  cerinte_licenta c
                                                 using formular_licenta f 
                                                 on (f.id=c.formular_id)
                                                 when matched then
                                                 update set c.optiune_test_scris='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateSolicitaEchivalare($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  cerinte_licenta c
                                                 using formular_licenta f 
                                                 on (f.id=c.formular_id)
                                                 when matched then
                                                 update set c.solicita_echivalare='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}


function updateAnParticiparePreadmitere($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  cerinte_licenta c
                                                 using formular_licenta f 
                                                 on (f.id=c.formular_id)
                                                 when matched then
                                                 update set c.vrea_sa_sustina_examen='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

//----------------------------------------------------------------------------------------------------------

//  Studiile preuniversitare absolvite, nivel liceu

function updateLiceulAbsolvit($id_formular,$liceu)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.emisa_de_liceu='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDataEmiteriiDiploma($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.data_emiterii_diploma='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNrFoiiMatricole($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.serie_act_rec_echiv='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDataRecEchiv($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.data_rec_echiv='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

//-----------------------------------------------------------------------------------------------

//  Studiile universitare de licenta in curs

function updateStudentAltaFac($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.student_alta_fac='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateTaraFac($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.localitate_fac='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDenumireInstitutieFac($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.nr_semestre_bursa_fac='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

//------------------------------------------------------------------------------------------------

// Studiile universitare de licenta absolvite

function updateAnulAbsolvirii($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.licenta_emisa_de='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDataEmiteriiLicenta($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.data_emiterii_licenta='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateNrSupliment($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
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
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.serie_acr_rec_echiv_abs='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}

function updateDataEchivAbs($id_formular,$valoareNoua)
{
    $c = @oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = @oci_parse($c, " merge into  date_preg_anterioara_licenta dpa
                                                 using formular_licenta f 
                                                 on (f.id=dpa.formular_id)
                                                 when matched then
                                                 update set dpa.data_echiv_abs='$valoareNoua'
                                                 where f.id='$id_formular' ");

    @oci_execute($s);
    @oci_close($c);

}



?>