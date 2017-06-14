<?php

error_reporting(0);
ini_set('display_errors', 0); 

        function nrFormularePreadmitere()
        {
            $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
            $s = oci_parse($c, " begin  select count(f.id) into :bv from formular_preadmitere f ;
                                       end;");
            oci_bind_by_name($s, ":bv", $v, 10);
            oci_execute($s);
            oci_close($c);
            return $v;
        }

function nrFormulareLicenta()
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select count(f.id) into :bv from formular_licenta f ;
                                       end;");
    oci_bind_by_name($s, ":bv", $v, 10);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function nrFormulareMaster()
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select count(f.id) into :bv from formular_master f ;
                                       end;");
    oci_bind_by_name($s, ":bv", $v, 10);
    oci_execute($s);
    oci_close($c);
    return $v;
}

        function nrIntrebari()
        {
            $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
            $s = oci_parse($c, " begin  select count(id) into :bv from intrebare; end; ");
            oci_bind_by_name($s, ":bv", $v, 10);
            oci_execute($s);
            oci_close($c);
            return $v;
        }

        function getNumeNastere($id_formular)
        {
            $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
            $s = oci_parse($c, " begin  select dp.nume_familie_nastere into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
            oci_bind_by_name($s, ":bv", $v, 100);
            oci_execute($s);
            oci_close($c);
            return $v;
        }

function getNumeActual($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.nume_familie_actual into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}
function getPrenume($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.prenume_candidat into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getInitialaTata($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.initialele_tatalui_mamei into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}



function getPrenumeTata($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.prenume_tata into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getPrenumeMama($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.prenume_mama into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getCetatenie($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.cetatenia into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getSex($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.sex into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getNationalitate($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.nationalitate into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getEtnie($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.etnie into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getLimbaMaterna($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.limba_materna into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}
/*
function getTelefon($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.telefon into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getEmail($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.email into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}
*/
function getDataDay($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select to_char(dp.data_nasterii,'DD') into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getDataMonth($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select to_char(dp.data_nasterii,'MM') into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getDataYear($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select to_char(dp.data_nasterii,'YYYY') into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getCNP($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.cnp into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}


function getTipBuletin($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.tip_buletin into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getSerieBuletin($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.serie_ci into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getNumarBuletin($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.numar_ci into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getBuletinEliberatDe($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.eliberat_de into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}


function getBuletinEliberareDay($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select to_char(dp.data_eliberarii,'DD') into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getBuletinEliberareMonth($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select to_char(dp.data_eliberarii,'MM') into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getBuletinEliberareYear($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select to_char(dp.data_eliberarii,'YYYY') into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getBuletinExpirareDay($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select to_char(dp.data_expirarii,'DD') into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getBuletinExpirareMonth($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select to_char(dp.data_expirarii,'MM') into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getBuletinExpirareYear($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select to_char(dp.data_expirarii,'YYYY') into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

/*
function getStrada($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.strada into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getNrStrada($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.numar_domiciliu into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getNrBloc($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.bloc_domiciliu into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getApartament($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.apartament_domiciliu into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}
*/
function getMaterieTest($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select f.optiune_test_scris into :bv from formular_preadmitere f 
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getNumeLiceu($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.institutie_liceu into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}
/*
function getCodPostal($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.cod_postal_domiciliu into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}
*/
function getLocalitateNastere($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.localitatea_nasterii into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getJudetNastere($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.judetul_nasterii into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getTaraNastere($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.tara_nasterii into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getLocalitateLiceu($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.localitate_liceu into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getJudetLiceu($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.judet_liceu into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getTaraLiceu($id_formular)
{
    $c = oci_connect("ADMITERE1", "ADMITERE1", "localhost/xe");
    $s = oci_parse($c, " begin  select dp.tara_liceu into :bv from date_personale_preadmitere dp
                                                 join formular_preadmitere f on f.id=dp.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}
?>