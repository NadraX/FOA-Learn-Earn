
<?php
/*
class Validare
{
/*
function validareLiceu($p_liceu){
    if(!$p_liceu){
        return false;
    }
    else
         if (!ctype_alpha(str_replace(' ', '', $p_liceu)))){
            return false;
        }
        else{
            return true;
        }
}

function validareExStareSpeciala($p_speciala){
     if(!$p_speciala){
        return false;
    }
    else
         if (!ctype_alpha(str_replace(' ', '', $p_speciala))){
            return false;
        }
        else{
            return true;
        }
}

function validareFacultate($p_facultate){
    if(!$p_facultate){
        return false;
    }
    else
         if (!ctype_alpha(str_replace(' ', '', $p_facultate))){
            return false;
        }
        else{
            return true;
        }
}


function validareChitanta($p_chitanta){
    if(!$p_chitanta){
        return false;
    }
    else
        if(!ctype_digit($p_chitanta)){
            return false;
        }
        else{
            return true;
        }
}


function validarePreferinta($p_preferinta){
    if(!$p_preferinta){
        return false;
    }
    else
        if(!ctype_digit($p_preferinta)){
            return false;
        }
        else{
            return true;
        }
}


function motivulScutirii($p_scutire){
    if(!$p_scutire){
        return false;
    }
    else
         if (!ctype_alpha(str_replace(' ', '', str_replace(',', '', str_replace('.', '', $p_scutire))))){
            return false;
        }
        else{
            return true;
        }
}

function validareSuma($p_suma){
    if(!$p_suma){
        return false;
    }
    else
        if(!ctype_digit($p_suma)){
            return false;
        }
        else{
            return true;
        }
}
/*
function validBuletinDataEliberarii($p_data)
{
    //If in dd/mm/yyyy format
    if (preg_match("^\d{2}/\d{2}/\d{4}^", $p_data))
    {
        //Extract date into array
        $date_array = explode('/', $p_data);
        //If it is not a date
        if(! checkdate($date_array[1], $date_array[0], $date_array[2]))
        {
            return false;
        }
    }
    //If not in dd/mm/yyyy format
    else
    {
        return false;
    }
    return true;
}

function validBuletinEliberatDe($p_eliberat_de)
{
    if (!$p_eliberat_de)
    {
        return false;
    }
    else if (!preg_match('/^[a-zA-Z ]*$/', str_replace(' ', '', $p_eliberat_de)))
    {
        return false;
    }
    return true;
}
public function validCetatetnie($p_cetatenie)
{
    if (!$p_cetatenie)
    {
        return false;
    }
    else if (!preg_match('/^romana|maghiara|rusa|basarabeana|asiatica|africana|americana$/', strtolower($p_cetatenie)))
    {
        return false;
    }
    return true;
}
function validCNP($p_cnp)
    {
        // CNP must have 13 characters
        if(strlen($p_cnp) != 13) {
            return 0;
        }

        $cnp = str_split($p_cnp);

        if($cnp[0]<=0 || $cnp[0]>=3)
            return 0;

        $an=$cnp[1]*10+$cnp[2];
        $luna=$cnp[3]*10+$cnp[4];
        $zi=$cnp[5]*10+$cnp[6];

        if(checkdate($luna,$zi,$an)==0)
            return 0;

        if($cnp[7]<0 || $cnp[7]>9)
            return 0;

        if($cnp[8]<0 || $cnp[8]>9)
            return 0;

        if($cnp[9]<0 || $cnp[9]>9)
            return 0;

        if($cnp[10]<0 || $cnp[10]>9)
            return 0;

        if($cnp[11]<0 || $cnp[11]>9)
            return 0;

        if($cnp[12]<0 || $cnp[12]>9)
            return 0;

        return 1;
    }
function checkData_Nasterii($dataNastere) {
    if(strlen($dataNastere)!=10)
        return 0;
    if(substr($dataNastere,-5,1)!='.')
        return 0;
    if(substr($dataNastere,-8,1)!='.')
        return 0;
    if(substr($dataNastere,-4,4)<1950 || substr($dataNastere,-4,4)>2010)
        return 0;
    if(substr($dataNastere,-7,2)!= '01' && substr($dataNastere,-7,2)!= '02' && substr($dataNastere,-7,2)!= '03' && substr($dataNastere,-7,2)!= '04' &&
       substr($dataNastere,-7,2)!= '05' && substr($dataNastere,-7,2)!= '06' && substr($dataNastere,-7,2)!= '07' && substr($dataNastere,-7,2)!= '08' &&
       substr($dataNastere,-7,2)!= '09' && substr($dataNastere,-7,2)!= '10' && substr($dataNastere,-7,2)!= '11' && substr($dataNastere,-7,2)!= '12')
          return 0;
    if(substr($dataNastere,-7,2) == '01' || substr($dataNastere,-7,2) == '03' || substr($dataNastere,-7,2) == '05' || substr($dataNastere,-7,2) == '07' ||
       substr($dataNastere,-7,2) == '08' || substr($dataNastere,-7,2) == '10' || substr($dataNastere,-7,2) == '12'){
        if(substr($dataNastere,-10,2) < '01' || substr($dataNastere,-10,2) > '31')
            return 0;
    }
    if(substr($dataNastere,-7,2) == '04' || substr($dataNastere,-7,2) == '06' || substr($dataNastere,-7,2) == '09' || substr($dataNastere,-7,2) == '11') {
        if(substr($dataNastere,-10,2) < '01' || substr($dataNastere,-10,2) > '30')
            return 0;
    }
    if(substr($dataNastere,-7,2) == '02'){
        if(an_bisect(intval(substr($dataNastere,-4,4)))){
            if(substr($dataNastere,-10,2) < '01' || substr($dataNastere,-10,2) > '29')
                return 0;
        }
        else
            if(substr($dataNastere,-10,2) < '01' || substr($dataNastere,-10,2) > '28')
                return 0;
    }


    return 1;
}
function an_bisect($year)
{
    return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year %400) == 0)));
}
/*function validEmail($p_email)
{
    if (!$p_email) {
        return false;
    } else if (!preg_match('/(?i)[a-z0-9\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/', $p_email)) {
        return false;
    }
    return true;
}
function validEmail($p_email)
{
    if(filter_var($p_email, FILTER_VALIDATE_EMAIL))
        return 1;
    else
        return 0;
}
function validEtnie($p_etnie)
{
    if (!$p_etnie)
    {
        return false;
    }
    else if (!preg_match('/^roman|rom|maghiar|britanic|bulgar|italian|slav|slovac|spaniol|sarb|suedez$/', strtolower($p_etnie)))
    {
        return false;
    }
    return true;
}

function validLimbaMaterna($p_limba)
{
    if (!$p_limba)
    {
        return false;
    }
    else if (!preg_match('/^romana|maghiara|rusa|engleza|franceza|spaniola|italiana|portugheza|japoneza$/', strtolower($p_limba)))
    {
        return false;
    }
    return true;
}
function validNumarBuletin($p_numar)
    {
        if(!preg_match('/^[0123456789]{6}$/', $p_numar))
            return 0;
        return 1;
    }
/*
function validNume($p_nume)
{
    if (!$p_nume)
    {
       return false;
    }
    else if (!preg_match('/^[a-zA-Z ]*$/', $p_nume))
    {
        return false;
    }
    return true;
}
    function validNume($p_nume)
    {
        if(!$p_nume)
           return 0;
        else
            if(!preg_match('/^[a-zA-Z ]*$/', str_replace(' ', '', str_replace('-', '', $p_nume))))
                return 0;
			else if(strlen(str_replace(' ', '', str_replace('-', '', $p_nume)))<3)
					return 0;
        return 1;
    }
    function validPremume($p_prenume)
    {
        if (!ctype_alpha(str_replace(' ','',str_replace('-', '', $p_prenume))))
            return 0;
		
		if(strlen(str_replace(' ', '', str_replace('-', '', $p_prenume)))<3)
					return 0;
				
        return 1;
    }
function validSerieBuletin($p_serie)
{
    if (!$p_serie)
        return 0;
    else
        if(!preg_match('/^[A-Z]{2}$/', $p_serie))
            return 0;
    return 1;
}
function validSex($p_sex)  // pentru QA, normal ar fi fara strtoupper, pentru ca nu se pot introduce in baza de date m/f
{
    if(strlen($p_sex) != 1) {
        return false;
    }
    else if (!preg_match('/^M|F$/', strtoupper($p_sex)))
    {
        return false;
    }
    return true;
}
function validStareCivila($p_stare_civila)
{
    if (!$p_stare_civila)
    {
        return false;
    }
    else if (!preg_match('/^casatorit|divortat|necasatorit$/', strtolower($p_stare_civila)))
    {
        return false;
    }
    return true;
}
    function validareNumar($p_numar)
    {
        if($p_numar=='-')
            return 1;
        else
            if(ctype_digit($p_numar))
                return 1;
        return 0;
    }

    function validareBloc($p_bloc)
    {
        if($p_bloc=='-')
            return 1;
        if(ctype_alnum($p_bloc))
            return 1;
        return 0;
    }

    function validareEtaj($p_etaj)
    {
        if($p_etaj=='-')
            return 1;

        if($p_etaj=='p')
            return 1;

        if($p_etaj=='Parter')
            return 1;

        if($p_etaj=='parter')
            return 1;
        if($p_etaj>0)
            return 1;
        return 0;
    }
    function validTelefon($p_nr)
    {
        if(!is_numeric($p_nr) || strlen($p_nr) < 10 || strlen($p_nr) > 10)
            return 0;
        else
            if(preg_match("/^07[0-9]{8}$/", $p_nr))
                return 1;
            else
                return 0;
    }



function check_nationalitate($nationalitate) {
    if($nationalitate != 'daneza' && $nationalitate != 'engleza' && $nationalitate != 'estoniana' && $nationalitate != 'finlandeza' &&
      $nationalitate != 'islandeza' && $nationalitate != 'irlandeza' && $nationalitate != 'letoniana' && $nationalitate != 'lituaniana' &&
      $nationalitate != 'nord irlandeza' && $nationalitate != 'norvegiana' && $nationalitate != 'scotiana' && $nationalitate != 'suedeza' &&
      $nationalitate != 'britanica' && $nationalitate != 'galeza' && $nationalitate != 'austriaca' && $nationalitate != 'belgiana' &&
      $nationalitate != 'franceza' && $nationalitate != 'germana' && $nationalitate != 'olandeza' && $nationalitate != 'elvetiana' &&
      $nationalitate != 'albaneza' && $nationalitate != 'croata' && $nationalitate != 'cipriota' && $nationalitate != 'greca' &&
      $nationalitate != 'Italiana' && $nationalitate != 'portugheza' && $nationalitate != 'sarba' && $nationalitate != 'slovena' &&
      $nationalitate != 'spaniola' && $nationalitate != 'belarusa' && $nationalitate != 'bulgara' && $nationalitate != 'ceha' &&
      $nationalitate != 'maghiara' && $nationalitate != 'poloneza' && $nationalitate != 'romana' && $nationalitate != 'rusa' &&
      $nationalitate != 'slovaca' && $nationalitate != 'ucraineana' && $nationalitate != 'canadiana' && $nationalitate != 'mexicana' &&
      $nationalitate != 'americana' && $nationalitate != 'cubaneza' && $nationalitate != 'guatemaleza' && $nationalitate != 'jamaicana' &&
      $nationalitate != 'argentiniana' && $nationalitate != 'boliviana' && $nationalitate != 'braziliana' && $nationalitate != 'chiliana' &&
      $nationalitate != 'columbiana' && $nationalitate != 'ecuadoriana' && $nationalitate != 'paraguayana' && $nationalitate != 'peruana' &&
      $nationalitate != 'uruguayana' && $nationalitate != 'venezueleana' && $nationalitate != 'georgiana' && $nationalitate != 'iraniana' &&
      $nationalitate != 'iraqiana' && $nationalitate != 'israeliana' && $nationalitate != 'iordaniana' && $nationalitate != 'kuweitiana' &&
      $nationalitate != 'libaneza' && $nationalitate != 'palestiniana' && $nationalitate != 'din Arabia de Sud' && $nationalitate != 'siriana' &&
      $nationalitate != 'turca' && $nationalitate != 'yemeneana' && $nationalitate != 'yemenita' && $nationalitate != 'afgana' &&
      $nationalitate != 'din Banglades' && $nationalitate != 'indiana' && $nationalitate != 'cazaca' && $nationalitate != 'nepaleza' &&
      $nationalitate != 'pakistaneza' && $nationalitate != 'sri lankez' && $nationalitate != 'chineza' && $nationalitate != 'japoneza' &&
      $nationalitate != 'mongoleza' && $nationalitate != 'nord koreana' && $nationalitate != 'sud koreana' && $nationalitate != 'taiwaneza' &&
      $nationalitate != 'cambodgiana' && $nationalitate != 'indoneziana' && $nationalitate != 'laotiana' && $nationalitate != 'lao' &&
      $nationalitate != 'malaeziana' && $nationalitate != 'birmaneza' && $nationalitate != 'filipineza' && $nationalitate != 'singaporeza' &&
      $nationalitate != 'tailandeza' && $nationalitate != 'vietnameza' && $nationalitate != 'australiana' && $nationalitate != 'fijiana' &&
      $nationalitate != 'neo zeelandeza' && $nationalitate != 'algeriana' && $nationalitate != 'egipteana' && $nationalitate != 'ganaiana' &&
      $nationalitate != 'ivoriana' && $nationalitate != 'libaneza' && $nationalitate != 'marocana' && $nationalitate != 'nigeriana' &&
      $nationalitate != 'tunisiana' && $nationalitate != 'etiopiana' && $nationalitate != 'keniana' && $nationalitate != 'somaleza' &&
      $nationalitate != 'sudaneza' && $nationalitate != 'tanzaneza' && $nationalitate != 'ugandeza' && $nationalitate != 'angoleza' &&
      $nationalitate != 'botswaneza' && $nationalitate != 'congoleza' && $nationalitate != 'malagasa' && $nationalitate != 'mozambicana' &&
      $nationalitate != 'namibiana' && $nationalitate != 'sud African' && $nationalitate != 'zambiana' && $nationalitate != 'zimbabueana')
        return 0;


    return 1;
}

/*function validTipBuletin($p_tip)
{
    if (!$p_tip)
    {
        return false;
    }
    else if (!preg_match('/^[a-zA-Z.]*$/', $p_tip))
    {
        return false;
    }
    return true;
} 
function validTipBuletin($p_tip)
{
    if(!ctype_alpha(str_replace('.','',str_replace(' ', '', $p_tip))))
        return 0;
    return 1;
}

function validareStrada($p_Strada)
{
    if(!ctype_alpha(str_replace(' ', '', $p_Strada)))
        return 0;
    return 1;
}
function validEliberareBuletin($p_eliberat)
{
    if(!ctype_alpha(str_replace(',','',str_replace('.','',str_replace(' ', '', $p_eliberat)))))
        return 0;
    return 1;
}
 function validareMedieBac($input){
        if(ctype_digit(str_replace(array(".", ","), '', $input)) == 0)
            return -1;
        if($input >= 6 and $input <= 10)
            return 1;
        return 0;
    }
    function validareNotaMatematica($input){
        if(ctype_digit(str_replace(array(".", ","), '', $input)) == 0)
            return -1;

        if($input > 0 and $input <= 10)
            return 1;
        return 0;
    }
    function validareProbaAlegere($input){
        if(ctype_digit(str_replace(array(".", ","), '', $input)) == 0)
            return -1;

        if($input > 0 and $input <= 10)
            return 1;
        return 0;
    }
    function validareNotaConcurs($input){
        if(ctype_digit(str_replace(array(".", ","), '', $input)) == 0)
            return -1;

        if($input > 0 and $input <= 10)
            return 1;
        return 0;
    }
function validare_domiciliu($id,$numar,$bloc,$etaj,$apartament,$cod_postal,$locatie)
{
    if(!ctype_digit($id))
    return 2;
    if(!ctype_digit($numar))
    return 3;
    if(!ctype_alnum($bloc) || strlen($bloc) > 6  )
    return 4;
    if(!ctype_alnum($etaj) || strlen($etaj) > 6 )
    return 5;
    if(!ctype_digit($apartament))
    return 6;
    if(!ctype_digit($cod_postal) || $cod_postal>999999 || $cod_postal<111111)
        return 7;
    if(!ctype_digit($locatie))
        return 8;
    return 1;
}
function validateDate($date)
{
    $d = DateTime::createFromFormat('Y-m-d', $date);
    return $d && $d->format('Y-m-d') === $date;
}
function FilieraValidare(String $Filiera)
{
    if(strlen($Filiera)<=40 && ctype_alpha(str_replace(array(' ','-'),'',$Filiera))==1)
        if(strlen($Filiera)>0)
            return 1;
        else
            return 0;
    else
        return 0;
}
function ProfilValidare(String $Profil)
{
    if(strlen($Profil)<=10 && ctype_alpha(str_replace(array(' ','-','.'),'',$Profil))==1)
        if(strlen($Profil)>0)
            return 1;
        else
            return 0;
    else
        return 0;
}
function SpecializareValidare(String $Specializare)
{
    if(strlen($Specializare)<=55 && ctype_alpha(str_replace(array(' ','-','.'),'',$Specializare))==1)
        if(strlen($Specializare)>0)
            return 1;
        else
            return 0;
    else
        return 0;
}
function An_AbsolvireValidare(String $An_Absolvire)
{
    if($An_Absolvire <= 2018)
        if($An_Absolvire >= 1980)
            return 1;
        else
            return 0;
    else
        return 0;
}
function Data_InceputValidare(String $Data_Inceput, String $Data_Sfarsit)
{
    if($Data_Inceput <= "2017-12-31")
        if($Data_Inceput >= "1980-01-01")
            if($Data_Inceput<$Data_Sfarsit)
                if(validateDate($Data_Inceput)==1 && validateDate($Data_Sfarsit)==1)
                    return 1;
                else
                    return 0;
            else
                return 0;
        else
            return 0;
    else
        return 0;
}
function Data_SfarsitValidare(String $Data_Inceput, String $Data_Sfarsit)
{
    if($Data_Sfarsit <= "2017-12-31")
        if($Data_Sfarsit >= "1980-01-01")
            if($Data_Sfarsit>$Data_Inceput)
                if(validateDate($Data_Inceput)==1 && validateDate($Data_Sfarsit)==1)
                    return 1;
                else
                    return 0;
            else
                return 0;
        else
            return 0;
    else
        return 0;
}

function validareNume($nume)
{
    if(ctype_alpha($nume) == 0) return "Numele trebuie sa contina doar litere!";
    if(strlen($nume) > 100) return "Dimensiunea numelui a depasit limita de caractere admisa!";
    return "corect";
}
function validareProfil($Profil)
{
    if(ctype_alpha(str_replace(array(' ', '-'), '', $Profil)) == 0) return "Profilul trebuie sa contina doar litere!";
    if(strlen($Profil) > 20) return "Dimensiunea profilului a depasit limita de caractere admisa!";
    return "corect";
}
function validareDiplomaNr($Diploma_Nr)
{
    if(ctype_digit($Diploma_Nr) == 0) return "Seria diplomei de bac nu este valida!";
    return "corect";
}
function validareData($Data_Inceput, $Diploma_Data_Eliberarii, $Data_Sfarsit)
{
    $data_curenta = "2018-01-01";

    if($Data_Inceput > $data_curenta or $Diploma_Data_Eliberarii > $data_curenta or $Data_Sfarsit > $data_curenta or $Data_Inceput > $Data_Sfarsit or $Data_Sfarsit > $Diploma_Data_Eliberarii) return "Formatul datei nu este valid!";
    return "corect";
}
function validareDiplomaSerie($Diploma_Serie)
{
    if(ctype_alpha($Diploma_Serie) == 0) return "Seria diplomei de bac nu este valida!";
    if(strlen($Diploma_Serie) > 1) return "Dimensiunea seriei la diploma de bac nu este valida!";
    return "corect";
}
function validareDiplomaEmisa($Diploma_Emisa)
{
    if(ctype_alpha($Diploma_Emisa) == 0) return "Institutia care a emis diploma nu este valida!";

    if(strlen($Diploma_Emisa) > 30) return "Dimensiunea institutiei care a emis diploma a depasit limita de caractere admisa!";
    return "corect";
}
function validare_locatie($id,$tara,$judet,$localitate,$strada)
{
    if(!ctype_digit($id))
    return 2;
    if(!ctype_alpha($tara) || strlen($tara) >200)
    return 3;
    if(!ctype_alpha($judet) || strlen($judet) > 60 )
    return 4;
    if(!ctype_alpha($localitate) || strlen($localitate) > 100 )
    return 5;
    if(!ctype_alpha($strada) || strlen($strada)>30)
    return 6;
    return 1;
}
function validareNationala($input){
        if($input == "Da" or $input == "Nu")
            return 1;
        else return 0;
    }
function validareDisciplina($input){
        if($input == "Matematica" or $input == "Informatica" or $input == "Fizica" or $input == "Chimie")
            return 1;
        else return 0;
    }

function validareDomiciliuStabil($input){
      if($input == "Rural" or $input == "Urban")
            return 1;
        else return 0;
}

function validareCazareStudii($input){
      if($input == "1" or $input == "0")
            return 1;
        else return 0;
}

function validareCazareExamen($input){
      if($input == "1" or $input == "0")
            return 1;
        else return 0;
}

function validareAn($input){
        $data = gmdate('Y');
        if(ctype_digit($input) == 0)
            return -1;
        if($input >= 1950 and $input <= $data)
            return 1;
        else return 0;
    }
function validarePremiulObtinut($input){
        if($input == "Locul 1" or $input == "Locul 2" or $input == "Locul 3")
            return 1;
        else return 0;
    }
}  // finalul initial
*/
function validareTipAplicare($tip_aplicare)
{
    if(strlen($tip_aplicare)<5 || strlen($tip_aplicare)>30)
        return 0;
    if(ctype_alpha($tip_aplicare) == 0) return 0;
    return 1;
}
function validAreProbaConcurs($tip_aplicare)
{
    if((strcmp($tip_aplicare,'matematica')==0)||(strcmp($tip_aplicare,'informatica')==0))
        return 1;
    return 0;
}
function validarLimbaStudiu($limba_studiu)
{
    if((strcmp($limba_studiu,'engleza')==0)||(strcmp($limba_studiu,'romana')==0))
        return 1;
    return 0;
}
function validarFrecventa($frecventa)
{
    if((strcmp($frecventa,'z')==0)||(strcmp($frecventa,'s')==0))// zi sau seral
        return 1;
    return 0;
}
function validareOptional($optional)
{
    if(strlen($optional)>50)
        return 0;
    if(ctype_alpha($optional) == 0) return 0;
    return 1;
}


function validareCazare($cazare)
{
    if($cazare<0||$cazare>1)
        return 0;
    return 1;
}
function validareLogin($username, $password)
{

$user = 'ADMITERE1';
// Oracle DB user password
$pass = 'ADMITERE1';
// Oracle DB connection string
$connection_string = 'localhost/xe';
//Connect to an Oracle database
$connection = oci_connect(
$user,
$pass,
$connection_string
);

   $stmt=oci_parse($connection, 'select u.username, u.parola from useri u
where u.username = :username and u.parola = :password');
oci_bind_by_name($stmt, ':username',$username);
oci_bind_by_name($stmt, ':password',$password);
 if(!$stmt){
     $error=oci_error($connection);
     trigger_error(htmlentities($error
['message'],ENT_QUOTES),E_USER_ERROR);
     }
 $result=oci_execute($stmt);
 if(!$result) {
    $error = oci_error($stmt);
    trigger_error(htmlentities($error['message'], ENT_QUOTES),
E_USER_ERROR);
}
$count=0;
while ($row = oci_fetch_assoc($stmt)) {
    $count++;
  echo '<script type="text/javascript">
                       window.location = "administrator.php"
                     </script>';

}

 if(!$count){
        $message_error="User-ul/Parola sunt incorecte";
        print htmlentities($message_error);
    }

oci_free_statement($stmt);
}
/*
function validEtnie($p_etnie)
{
    if (!$p_etnie)
    {
        return -1;
    }
    else if (!preg_match('/^roman|rrom|maghiar|moldovean$/', strtolower($p_etnie)))
    {
        return 1;
    }
    return 0;
} */

//fct buna
	function validInitialaTata($p_initTata)
    {
        if(!$p_initTata)
            return -1;
        if(strlen($p_initTata) > 14 || strlen($p_initTata) < 2)
            return 1; // lungime incorecta

		$lung=strlen($p_initTata);

		if($lung%2==1)
            return 3;//Format incorect

        $initialaTata=str_split($p_initTata);

        if($lung==2)  // C. (Costel)
        {
            if(!preg_match('/^[A-Z]$/', $initialaTata[0]))
                return 2;//caract incorecte
            else 
				if( $initialaTata[1]!='.')
                    return 3;//caractere incorecte
                else
					return 0;
            }
            else
				if($lung==4)  // C.I.(Costel Ion)
				{
                        if(!preg_match('/^[A-Z]$/', $initialaTata[0]))
                            return 2;//caractere incorecte
                        else 
							if($initialaTata[1]!='.')
                                return 3;//caractere incorecte
                             else 
								 if(!preg_match('/^[A-Z]$/', $initialaTata[2]))
                                      return 2;//caractere incorecte
                                  else 
									  if($initialaTata[3]!='.')
                                           return 3;//caractere incorecte
                                       else
										   return 0;
                }
                else
                    if($lung==6) 
					{
						if(!preg_match('/^[A-Z]$/', $initialaTata[0]))
                            return 2;
                         else 
							 if($initialaTata[1]!='.')
                                return 3;
							else 
								if(!preg_match('/^[A-Z]$/', $initialaTata[2]))
									return 2;
								else 
									if($initialaTata[3]!='.')
										return 3;
									else
										if(!preg_match('/^[A-Z]$/', $initialaTata[4]))
											return 2;
										else
											if($initialaTata[5]!='.')
												return 3;
											else
												return 0;
                    }
					else
						if($lung==8) 
						{
							if(!preg_match('/^[A-Z]$/', $initialaTata[0]))
								return 2;
							 else 
								 if($initialaTata[1]!='.')
									return 3;
								else 
									if(!preg_match('/^[A-Z]$/', $initialaTata[2]))
										return 2;
									else 
										if($initialaTata[3]!='.')
											return 3;
										else
											if(!preg_match('/^[A-Z]$/', $initialaTata[4]))
												return 2;
											else
												if($initialaTata[5]!='.')
													return 3;
												else
													if(!preg_match('/^[A-Z]$/', $initialaTata[6]))
														return 2;
													else
														if($initialaTata[7]!='.')
															return 3;
														else
															return 0;
						}
						else
							if($lung==10) 
							{
								if(!preg_match('/^[A-Z]$/', $initialaTata[0]))
									return 2;
								 else 
									 if($initialaTata[1]!='.')
										return 3;
									else 
										if(!preg_match('/^[A-Z]$/', $initialaTata[2]))
											return 2;
										else 
											if($initialaTata[3]!='.')
												return 3;
											else
												if(!preg_match('/^[A-Z]$/', $initialaTata[4]))
													return 2;
												else
													if($initialaTata[5]!='.')
														return 3;
													else
														if(!preg_match('/^[A-Z]$/', $initialaTata[6]))
															return 2;
														else
															if($initialaTata[7]!='.')
																return 3;
															else
																if(!preg_match('/^[A-Z]$/', $initialaTata[8]))
																	return 2;
																else
																	if($initialaTata[9]!='.')
																		return 3;
																	else
																		return 0;
							}
							else
								if($lung==12) 
								{
									if(!preg_match('/^[A-Z]$/', $initialaTata[0]))
										return 2;
									 else 
										 if($initialaTata[1]!='.')
											return 3;
										else 
											if(!preg_match('/^[A-Z]$/', $initialaTata[2]))
												return 2;
											else 
												if($initialaTata[3]!='.')
													return 3;
												else
													if(!preg_match('/^[A-Z]$/', $initialaTata[4]))
														return 2;
													else
														if($initialaTata[5]!='.')
															return 3;
														else
															if(!preg_match('/^[A-Z]$/', $initialaTata[6]))
																return 2;
															else
																if($initialaTata[7]!='.')
																	return 3;
																else
																	if(!preg_match('/^[A-Z]$/', $initialaTata[8]))
																		return 2;
																	else
																		if($initialaTata[9]!='.')
																			return 3;
																		else
																			if(!preg_match('/^[A-Z]$/', $initialaTata[10]))
																				return 2;
																			else
																				if($initialaTata[11]!='.')
																					return 3;
																				else
																					return 0;
								}
								else
									if($lung==14) 
									{
										if(!preg_match('/^[A-Z]$/', $initialaTata[0]))
											return 2;
										 else 
											 if($initialaTata[1]!='.')
												return 3;
											else 
												if(!preg_match('/^[A-Z]$/', $initialaTata[2]))
													return 2;
												else 
													if($initialaTata[3]!='.')
														return 3;
													else
														if(!preg_match('/^[A-Z]$/', $initialaTata[4]))
															return 2;
														else
															if($initialaTata[5]!='.')
																return 3;
															else
																if(!preg_match('/^[A-Z]$/', $initialaTata[6]))
																	return 2;
																else
																	if($initialaTata[7]!='.')
																		return 3;
																	else
																		if(!preg_match('/^[A-Z]$/', $initialaTata[8]))
																			return 2;
																		else
																			if($initialaTata[9]!='.')
																				return 3;
																			else
																				if(!preg_match('/^[A-Z]$/', $initialaTata[10]))
																					return 2;
																				else
																					if($initialaTata[11]!='.')
																						return 3;
																					else
																						if(!preg_match('/^[A-Z]$/', $initialaTata[12]))
																							return 2;
																						else
																							if($initialaTata[13]!='.')
																								return 3;
																							else
																								return 0;
									}
									else
										if($lung==16) 
										{
											if(!preg_match('/^[A-Z]$/', $initialaTata[0]))
												return 2;
											 else 
												 if($initialaTata[1]!='.')
													return 3;
												else 
													if(!preg_match('/^[A-Z]$/', $initialaTata[2]))
														return 2;
													else 
														if($initialaTata[3]!='.')
															return 3;
														else
															if(!preg_match('/^[A-Z]$/', $initialaTata[4]))
																return 2;
															else
																if($initialaTata[5]!='.')
																	return 3;
																else
																	if(!preg_match('/^[A-Z]$/', $initialaTata[6]))
																		return 2;
																	else
																		if($initialaTata[7]!='.')
																			return 3;
																		else
																			if(!preg_match('/^[A-Z]$/', $initialaTata[8]))
																				return 2;
																			else
																				if($initialaTata[9]!='.')
																					return 3;
																				else
																					if(!preg_match('/^[A-Z]$/', $initialaTata[10]))
																						return 2;
																					else
																						if($initialaTata[11]!='.')
																							return 3;
																						else
																							if(!preg_match('/^[A-Z]$/', $initialaTata[12]))
																								return 2;
																							else
																								if($initialaTata[13]!='.')
																									return 3;
																								else
																									if(!preg_match('/^[A-Z]$/', $initialaTata[14]))
																										return 2;
																									else
																										if($initialaTata[15]!='.')
																											return 3;
																										else
																											return 0;
										}

    }
    // functii copuate din clasa pentru ca nu stiu sa lucrez cu clase in php
    /*
    -
    -
    -
    -
    -
    -
    -
    -
    -
    -
    -
    -
    */


//fct buna
    function validBuletinDataEliberarii($p_data)
{
    //If in dd/mm/yyyy format
    if (preg_match("^\d{2}/\d{2}/\d{4}^", $p_data))
    {
        //Extract date into array
        $date_array = explode('/', $p_data);
        //If it is not a date
        if(! checkdate($date_array[1], $date_array[0], $date_array[2]))
        {
            return 1; //false
        }
    }
    //If not in dd/mm/yyyy format
    else
    {
        return 1;//false
    }
    return 0;//corect
}





//fct buna
function validBuletinEliberatDe($p_eliberat_de)
{
    if (!$p_eliberat_de)
    {
        return -1;
    }
	if(strlen($p_eliberat_de)<3)
	{
		return 2;
	}
    else if (!preg_match('/^[a-zA-Z ]*$/', $p_eliberat_de))
    {
        return 1;
    }
    
    return 0;
}




//function validCetatetnie($p_cetatenie)
//{
//    if (!$p_cetatenie)
//    {
//        return false;
//    }
//    else if (!preg_match('/^romana|maghiara|rusa|basarabeana|asiatica|africana|americana$/', $p_cetatenie))
//    {
//        return false;
//    }
//    return true;
//}


//fct buna
function validCetatetnie($nationalitate)
{
    if(!$nationalitate)
        return -1;
    $nationalitate = strtolower($nationalitate);
    if($nationalitate != 'romana')
        return 1; // cetatenie incorecta
    return 0;
}



//fct buna
function validCNP($p_cnp)
    {
    if(!$p_cnp)
            return -1;
        // CNP must have 13 characters
        if(strlen($p_cnp) != 13) {
            return 1;//numar invalid de caractere
        }

        $cnp = str_split($p_cnp);

        if($cnp[0]<=0 || $cnp[0]>=3)
            return 2;//caracter

        $an=$cnp[1]*10+$cnp[2];
        $luna=$cnp[3]*10+$cnp[4];
        $zi=$cnp[5]*10+$cnp[6];

        if(checkdate($luna,$zi,$an)==0)
            return 3;

        if($cnp[7]<0 || $cnp[7]>9)
            return 4;

        if($cnp[8]<0 || $cnp[8]>9)
            return 4;

        if($cnp[9]<0 || $cnp[9]>9)
            return 4;

        if($cnp[10]<0 || $cnp[10]>9)
            return 4;

        if($cnp[11]<0 || $cnp[11]>9)
            return 4;

        if($cnp[12]<0 || $cnp[12]>9)
            return 4;

        return 0; //corect
    }


//no need
function checkData_Nasterii($dataNastere) {
    if(!$dataNastere)
            return -1;
    if(strlen($dataNastere)!=10)
        return 1;//numar incorect de caractere
    
    if(substr($dataNastere,-5,1)!='.')
        return 2; // format incorect
    if(substr($dataNastere,-8,1)!='.')
        return 2; // format incorect
    if(substr($dataNastere,-4,4)<1950 || substr($dataNastere,-4,4)>2010)
        return 3; // an incorect
    if(substr($dataNastere,-7,2)!= '01' && substr($dataNastere,-7,2)!= '02' && substr($dataNastere,-7,2)!= '03' && substr($dataNastere,-7,2)!= '04' &&
       substr($dataNastere,-7,2)!= '05' && substr($dataNastere,-7,2)!= '06' && substr($dataNastere,-7,2)!= '07' && substr($dataNastere,-7,2)!= '08' &&
       substr($dataNastere,-7,2)!= '09' && substr($dataNastere,-7,2)!= '10' && substr($dataNastere,-7,2)!= '11' && substr($dataNastere,-7,2)!= '12')
          return 4; // luna incorecta
    if(substr($dataNastere,-7,2) == '01' || substr($dataNastere,-7,2) == '03' || substr($dataNastere,-7,2) == '05' || substr($dataNastere,-7,2) == '07' ||
       substr($dataNastere,-7,2) == '08' || substr($dataNastere,-7,2) == '10' || substr($dataNastere,-7,2) == '12'){
        if(substr($dataNastere,-10,2) < '01' || substr($dataNastere,-10,2) > '31')
            return 5; // zi incorecta
    }
    if(substr($dataNastere,-7,2) == '04' || substr($dataNastere,-7,2) == '06' || substr($dataNastere,-7,2) == '09' || substr($dataNastere,-7,2) == '11') {
        if(substr($dataNastere,-10,2) < '01' || substr($dataNastere,-10,2) > '30')
            return 5; // zi incorecta
    }
    if(substr($dataNastere,-7,2) == '02'){
        if(an_bisect(intval(substr($dataNastere,-4,4)))){
            if(substr($dataNastere,-10,2) < '01' || substr($dataNastere,-10,2) > '29')
                return 5; // zi incorecta
        }
        else
            if(substr($dataNastere,-10,2) < '01' || substr($dataNastere,-10,2) > '28')
                return 5; // zi incorecta
    }


    return 0;
}


function an_bisect($year)
{
    return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year %400) == 0)));
}


/*function validEmail($p_email)
{
    if (!$p_email) {
        return false;
    } else if (!preg_match('/(?i)[a-z0-9\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/', $p_email)) {
        return false;
    }
    return true;
}*/


//fct buna
function validEmail($p_email)
{
    if(!$p_email)
        return -1;
    
    if(filter_var($p_email, FILTER_VALIDATE_EMAIL))
        return 0; // corect
    else
        return 1;  // incorect email
}




//function validEtnie($p_etnie)
//{
//    if (!$p_etnie)
//    {
//        return false;
//    }
//    else if (!preg_match('/^roman|rom|maghiar|britanic|bulgar|italian|slav|slovac|spaniol|sarb|suedez$/', $p_etnie))
//    {
//        return false;
//    }
//    return true;
//}


//fct buna
function validEtnie($nationalitate)
{
    if(!$nationalitate)
        return -1;
    $nationalitate = strtolower($nationalitate);
    if($nationalitate != 'danez' && $nationalitate != 'englez' && $nationalitate != 'estonian' && $nationalitate != 'finlandez' &&
      $nationalitate != 'islandez' && $nationalitate != 'irlandez' && $nationalitate != 'letonian' && $nationalitate != 'lituanian' &&
      $nationalitate != 'nord irlandez' && $nationalitate != 'norvegian' && $nationalitate != 'scotian' && $nationalitate != 'suedez' &&
      $nationalitate != 'britanic' && $nationalitate != 'galez' && $nationalitate != 'austriac' && $nationalitate != 'belgian' &&
      $nationalitate != 'francez' && $nationalitate != 'german' && $nationalitate != 'olandez' && $nationalitate != 'elvetian' &&
      $nationalitate != 'albanez' && $nationalitate != 'croat' && $nationalitate != 'cipriot' && $nationalitate != 'grec' &&
      $nationalitate != 'italian' && $nationalitate != 'portughez' && $nationalitate != 'sarb' && $nationalitate != 'sloven' &&
      $nationalitate != 'spaniol' && $nationalitate != 'belarus' && $nationalitate != 'bulgar' && $nationalitate != 'ceh' &&
      $nationalitate != 'maghiar' && $nationalitate != 'polonez' && $nationalitate != 'roman' && $nationalitate != 'rus' &&
      $nationalitate != 'slovac' && $nationalitate != 'ucrainean' && $nationalitate != 'canadian' && $nationalitate != 'mexican' &&
      $nationalitate != 'american' && $nationalitate != 'cubanez' && $nationalitate != 'guatemalez' && $nationalitate != 'jamaican' &&
      $nationalitate != 'argentinian' && $nationalitate != 'bolivian' && $nationalitate != 'brazilian' && $nationalitate != 'chilian' &&
      $nationalitate != 'columbian' && $nationalitate != 'ecuadorian' && $nationalitate != 'paraguayan' && $nationalitate != 'peruan' &&
      $nationalitate != 'uruguayan' && $nationalitate != 'venezuelean' && $nationalitate != 'georgian' && $nationalitate != 'iranian' &&
      $nationalitate != 'iraqian' && $nationalitate != 'israelian' && $nationalitate != 'iordanian' && $nationalitate != 'kuweitian' &&
      $nationalitate != 'libanez' && $nationalitate != 'palestinian' && $nationalitate != 'din arabia de sud' && $nationalitate != 'sirian' &&
      $nationalitate != 'turc' && $nationalitate != 'yemenean' && $nationalitate != 'yemenit' && $nationalitate != 'afgan' &&
      $nationalitate != 'din banglades' && $nationalitate != 'indian' && $nationalitate != 'cazac' && $nationalitate != 'nepalez' &&
      $nationalitate != 'pakistanez' && $nationalitate != 'sri lankez' && $nationalitate != 'chinez' && $nationalitate != 'japonez' &&
      $nationalitate != 'mongolez' && $nationalitate != 'nord korean' && $nationalitate != 'sud korean' && $nationalitate != 'taiwanez' &&
      $nationalitate != 'cambodgian' && $nationalitate != 'indonezian' && $nationalitate != 'laotian' && $nationalitate != 'lao' &&
      $nationalitate != 'malaezian' && $nationalitate != 'birmanez' && $nationalitate != 'filipinez' && $nationalitate != 'singaporez' &&
      $nationalitate != 'tailandez' && $nationalitate != 'vietnamez' && $nationalitate != 'australian' && $nationalitate != 'fijian' &&
      $nationalitate != 'neo zeelandez' && $nationalitate != 'algerian' && $nationalitate != 'egiptean' && $nationalitate != 'ganaian' &&
      $nationalitate != 'ivorian' && $nationalitate != 'libanez' && $nationalitate != 'marocan' && $nationalitate != 'nigerian' &&
      $nationalitate != 'tunisian' && $nationalitate != 'etiopian' && $nationalitate != 'kenian' && $nationalitate != 'somalez' &&
      $nationalitate != 'sudanez' && $nationalitate != 'tanzanez' && $nationalitate != 'ugandez' && $nationalitate != 'angolez' &&
      $nationalitate != 'botswaneza' && $nationalitate != 'congolez' && $nationalitate != 'malagas' && $nationalitate != 'mozambican' &&
      $nationalitate != 'namibian' && $nationalitate != 'sud africa' && $nationalitate != 'zambian' && $nationalitate != 'zimbabuean' && $nationalitate != 'rrom' && $nationalitate != 'moldovean')
        return 1; // nu exista acea nationalitate
		
    return 0;

}







//function validLimbaMaterna($p_limba)
//{
//    if (!$p_limba)
//    {
//        return false;
//    }
//    else if (!preg_match('/^romana|maghiara|rusa|engleza|franceza|spaniola|italiana|portugheza|japoneza$/', $p_limba))
//    {
//        return false;
//    }
//    return true;
//}


//fct buna
function validLimbaMaterna($p_limba)
{
    if(!$p_limba)
        return -1;
    if(strlen($p_limba)<3 || strlen($p_limba)>20)
        return 1;//numar insuficient de caractere
    
    if(!ctype_alpha($p_limba))
        return 2; // caractere invalida 
    
    return 0;
}





//fct buna
function validNumarBuletin($p_numar)
    {
    if(!$p_numar)
        return -1;
	else
		if(strlen($p_numar)!==6)
			return 2;
		else
			if(!preg_match('/^[0123456789]{6}$/', $p_numar))
					return 1;
        return 0;
    }
/*
function validNume($p_nume)
{
    if (!$p_nume)
    {
       return false;
    }
    else if (!preg_match('/^[a-zA-Z ]*$/', $p_nume))
    {
        return false;
    }
    return true;
}*/


//fct buna
    function validNume($p_nume) 
    {
        if(!$p_nume)
            return -1;
        else
            if(!preg_match('/^[a-zA-Z ]*$/', $p_nume))
                return 1;//caract incorecte
        else 
            if(strlen($p_nume)<3 || strlen($p_nume)>30)
                return 2; // lungime gresita
        return 0;//corect
    }



//fct buna
    function validPremume($p_prenume)
    {
        if(!$p_prenume)
            return -1;
		
		if($p_prenume=='-')
			return 0;
		
        if (!ctype_alpha(str_replace(' ','',str_replace('-', '', $p_prenume))))
            return 1;//caractere incorecte
        else if(strpos($p_prenume, '--') !== false)
            return 1;//caractere incorecte
        else if(strpos($p_prenume, '  ') !== false)
            return 1;//caractere incorecte
        else 
            if(strlen($p_prenume)<3 || strlen($p_prenume)>30)
                return 2; // lungime gresita
        return 0;
    }



//fct buna
function validSerieBuletin($p_serie)
{
    if (!$p_serie)
        return -1;
    else
		if(strlen($p_serie)!==2)
			return 2;
		else
			if(!preg_match('/^[A-Z]{2}$/', $p_serie))
				return 1;//caract incorecte
    return 0;//correct
}

 
//fct buna
function validSex($p_sex)
{
    if(strlen($p_sex) != 1) {
        return -1;
    }
    else if (!preg_match('/^M|F$/', $p_sex) && $p_sex!='Feminin' && $p_sex!='Masculin')
    {
        return 1;//incorect sex
    }
    
    return 0;
}

//fct buna
function validareScutit($input){
     
      if(!$input)
          return -1;
      if($input == "0" or $input == "1")
            return 0;//correct
        else return 1;//error
}


//fct buna
function validareStareSocialaSpeciala($input){
      if(!$input)
          return -1;
      if($input == "0" or $input == "1")
            return 0;
        else return 1;//error
}


//fct buna
function validStareCivila($p_stare_civila)
{
    if (!$p_stare_civila)
    {
        return -1;
    }
//    else if (!preg_match('/^casatorit|necasatorit$/', $p_stare_civila))
//    {
//        return false;
//    }
    return 0;
}


//fct buna
function validareNumar($p_numar)
    {
        if(!$p_numar)
            return -1;
        if($p_numar=='-')
            return 0; // e corect
    
        if(!ctype_alnum($p_numar))
            return 1;//caractere incorecte
    
        if(strlen($p_numar)<1 || strlen(p_numar)>10)
            return 2; // numar incorect
    
        return 0;//contine caractere incorecte
    }


//fct buna
    function validareBloc($p_bloc)
    {
        if(!$p_bloc)
            return -1;
        if($p_bloc=='-')
            return 0;
        if (!ctype_alnum($p_bloc))
            return 1; // caractere incorecte
        if(strlen($p_bloc)<1 || strlen($p_bloc)> 10)
            return 2; //lungime incorecta
        return 0;
    }

//fct buna
    function validareEtaj($p_etaj)
    {
		if(!$p_etaj)
			return -1;
		
		 if($p_etaj=="-")
            return 0;
		
        if($p_etaj == "Parter" || $p_etaj == "parter" || $p_etaj == "PARTER" || $p_etaj == "p" || $p_etaj == "P" || $p_etaj == "D" || $p_etaj == "d" || $p_etaj == "Demisol" || $p_etaj == "DEMISOL" || $p_etaj == "darter")
            return 0;
		
        if(!$p_etaj)
            return -1;
		
		if(!ctype_alnum($p_etaj))
            return 1; //caractere interzise
        
		if($p_etaj < 0 || $p_etaj > 163)
            return 2; // numar invalid de etaj
		
       return 0; // corect
    }



//fct buna
    function validTelefon($p_nr)
    {
        if(!$p_nr)
            return -1;
        
        if(!is_numeric($p_nr) || strlen($p_nr) < 10 || strlen($p_nr) > 14)
            return 1; // numar nasol de caractere
        
        if(!ctype_digit($p_nr))
            return 2; // caractere incorecte
                    
        return 0; // corect
    }



//fct buna
function check_nationalitate($nationalitate) {
    if(!$nationalitate)
        return -1;
	$nationalitate = strtolower($nationalitate);
    if($nationalitate != 'daneza' && $nationalitate != 'engleza' && $nationalitate != 'estoniana' && $nationalitate != 'finlandeza' &&
      $nationalitate != 'islandeza' && $nationalitate != 'irlandeza' && $nationalitate != 'letoniana' && $nationalitate != 'lituaniana' &&
      $nationalitate != 'nord irlandeza' && $nationalitate != 'norvegiana' && $nationalitate != 'scotiana' && $nationalitate != 'suedeza' &&
      $nationalitate != 'britanica' && $nationalitate != 'galeza' && $nationalitate != 'austriaca' && $nationalitate != 'belgiana' &&
      $nationalitate != 'franceza' && $nationalitate != 'germana' && $nationalitate != 'olandeza' && $nationalitate != 'elvetiana' &&
      $nationalitate != 'albaneza' && $nationalitate != 'croata' && $nationalitate != 'cipriota' && $nationalitate != 'greca' &&
      $nationalitate != 'italiana' && $nationalitate != 'portugheza' && $nationalitate != 'sarba' && $nationalitate != 'slovena' &&
      $nationalitate != 'spaniola' && $nationalitate != 'belarusa' && $nationalitate != 'bulgara' && $nationalitate != 'ceha' &&
      $nationalitate != 'maghiara' && $nationalitate != 'poloneza' && $nationalitate != 'romana' && $nationalitate != 'rusa' &&
      $nationalitate != 'slovaca' && $nationalitate != 'ucraineana' && $nationalitate != 'canadiana' && $nationalitate != 'mexicana' &&
      $nationalitate != 'americana' && $nationalitate != 'cubaneza' && $nationalitate != 'guatemaleza' && $nationalitate != 'jamaicana' &&
      $nationalitate != 'argentiniana' && $nationalitate != 'boliviana' && $nationalitate != 'braziliana' && $nationalitate != 'chiliana' &&
      $nationalitate != 'columbiana' && $nationalitate != 'ecuadoriana' && $nationalitate != 'paraguayana' && $nationalitate != 'peruana' &&
      $nationalitate != 'uruguayana' && $nationalitate != 'venezueleana' && $nationalitate != 'georgiana' && $nationalitate != 'iraniana' &&
      $nationalitate != 'iraqiana' && $nationalitate != 'israeliana' && $nationalitate != 'iordaniana' && $nationalitate != 'kuweitiana' &&
      $nationalitate != 'libaneza' && $nationalitate != 'palestiniana' && $nationalitate != 'din arabia de sud' && $nationalitate != 'siriana' &&
      $nationalitate != 'turca' && $nationalitate != 'yemeneana' && $nationalitate != 'yemenita' && $nationalitate != 'afgana' &&
      $nationalitate != 'din banglades' && $nationalitate != 'indiana' && $nationalitate != 'cazaca' && $nationalitate != 'nepaleza' &&
      $nationalitate != 'pakistaneza' && $nationalitate != 'sri lankez' && $nationalitate != 'chineza' && $nationalitate != 'japoneza' &&
      $nationalitate != 'mongoleza' && $nationalitate != 'nord koreana' && $nationalitate != 'sud koreana' && $nationalitate != 'taiwaneza' &&
      $nationalitate != 'cambodgiana' && $nationalitate != 'indoneziana' && $nationalitate != 'laotiana' && $nationalitate != 'lao' &&
      $nationalitate != 'malaeziana' && $nationalitate != 'birmaneza' && $nationalitate != 'filipineza' && $nationalitate != 'singaporeza' &&
      $nationalitate != 'tailandeza' && $nationalitate != 'vietnameza' && $nationalitate != 'australiana' && $nationalitate != 'fijiana' &&
      $nationalitate != 'neo zeelandeza' && $nationalitate != 'algeriana' && $nationalitate != 'egipteana' && $nationalitate != 'ganaiana' &&
      $nationalitate != 'ivoriana' && $nationalitate != 'libaneza' && $nationalitate != 'marocana' && $nationalitate != 'nigeriana' &&
      $nationalitate != 'tunisiana' && $nationalitate != 'etiopiana' && $nationalitate != 'keniana' && $nationalitate != 'somaleza' &&
      $nationalitate != 'sudaneza' && $nationalitate != 'tanzaneza' && $nationalitate != 'ugandeza' && $nationalitate != 'angoleza' &&
      $nationalitate != 'botswaneza' && $nationalitate != 'congoleza' && $nationalitate != 'malagasa' && $nationalitate != 'mozambicana' &&
      $nationalitate != 'namibiana' && $nationalitate != 'sud african' && $nationalitate != 'zambiana' && $nationalitate != 'zimbabueana')
        return 1; // nu exista acea nationalitate
		
    return 0;
}

/*function validTipBuletin($p_tip)
{
    if (!$p_tip)
    {
        return false;
    }
    else if (!preg_match('/^[a-zA-Z.]*$/', $p_tip))
    {
        return false;
    }
    return true;
} */


//fct buna
function validTipBuletin($p_tip)
{
    if(!$p_tip)
        return -1;
    if(!ctype_alpha(str_replace('.','',str_replace(' ', '', $p_tip))))
        return 1;
    
    return 0;
}


//fct buna
function validareStrada($p_Strada)
{
    if(!ctype_alpha(str_replace(' ', '', str_replace('-','',$p_Strada))))
        return 1;//caractere incorecte
    
    return 0;
}


//fct buna
function validEliberareBuletin($p_eliberat)
{
    if(!$p_eliberat)
        return -1;
	if(strlen($p_eliberat)<3)
		return 2;
    if(!ctype_alpha(str_replace(',','',str_replace('.','',str_replace(' ', '', $p_eliberat)))))
        return 1;
    return 0;
}


//fct buna
 function validareMedieBac($input){
     
        if(!$input)
            return -1;
     
        if(ctype_digit(str_replace(array(".", ","), '', $input)) == 0)
            return 1; //caractere incorecte , nu exista cifra
		
        if($input < 6 || $input > 10)
            return 2;  // numar medie incorect
		
		if($input=='10') 
			return 0;
		else {
			$nota=str_split($input);
			if($nota[0]<'6' && $nota[0]>'9')
				return 2; // medie incorecta
			else 
				if(strlen($input)==1)
					return 0; // media 6,7,8 sau 9
				else
					if($nota[1]!=',' && $nota[1]!='.')
						return 2; // cevadiferit de 6,...
					else
						if(strlen($input)==2)
							return 2; // e doar 6. sau 6,
						else {
							$nr_caractere_permise=substr_count($input, ',') + substr_count($input, '.');
							if($nr_caractere_permise>1)
								return 2;// poate fi 6.5,4
							else 
								if(!ctype_digit(substr($input,2))) // daca dupa 6, urmeaza unul sau mai multe caractere non-numerice 
									return 1; // poate fi 6.A56
								else
									return 0;
						}
		}
			
		
		
        return 0;//corect
    }


//fct buna
    function validareNotaMatematica($input){
        if(!$input)
            return -1;
        
        if(ctype_digit(str_replace(array(".", ","), '', $input)) == 0)
            return 1; //caractere incorecte,nu exista cifra

        if($input < 0 || $input > 10)
            return 2; //numar incorect al notei
        
        return 0;//corect
    }


//fct buna
    function validareAnParticiparePreadmitere($anParticipare){
        if(!$anParticipare)
            return -1;
        if(!ctype_digit($anParticipare))
            return 1;//caractere incorecte
        if($anParticipare <1980 || $anParticipare> 2019)
            return 2; // an incorect
        return 0;//corect
    }

//fct buna
    function validareProbaAlegere($input){
        if(!ctype_digit(str_replace(array(".", ","), '', $input)))
            return 1;//caract ilegale

        if($input < 0 || $input > 10)
            return 2; //nr ilegal
        return 0;
    }
    function validareNotaConcurs($input){
        if(ctype_digit(str_replace(array(".", ","), '', $input)) == 0)
            return -1;

        if($input > 0 and $input <= 10)
            return 1;
        return 0;
    }
//nu se mai foloseste , e impartita pe fiecare
function validare_domiciliu($id,$numar,$bloc,$etaj,$apartament,$cod_postal,$locatie)
{
    if(!ctype_digit($id))
    return 2;
    if(!ctype_digit($numar))
    return 3;
    if(!ctype_alnum($bloc) || strlen($bloc) > 6  )
    return 4;
    if(!ctype_alnum($etaj) || strlen($etaj) > 6 )
    return 5;
    if(!ctype_digit($apartament))
    return 6;
    if(!ctype_digit($cod_postal) || $cod_postal>999999 || $cod_postal<100000)
        return 7;
    if(!ctype_digit($locatie))
        return 8;
    return 1;
}

//fct buna
function validApartament($p_apartament){
    if(!$p_apartament)
            return -1;
    if($p_apartament<1 || $p_apartament>50)
        return 1; // numar incorect
    
    return 0;//corect
}

function validateDate($date)
{
    $d = DateTime::createFromFormat('Y-m-d', $date);
    return $d && $d->format('Y-m-d') === $date;
}


//fct buna
function FilieraValidare(String $Filiera)
{
    if(!$Filiera)
        return -1;
    if(!ctype_alpha(str_replace(array(' ','-'),'',$Filiera)))
        return 1;//caract ilegale
    if(strlen($Filiera)>40 || strlen($Filiera)<0)
        return 2;//numar incor de caract
    return 0;//corect
}

//fct buna
function ProfilValidare(String $Profil)
{
    if(!$Profil)
        return -1;
    if(!ctype_alpha(str_replace(array(' ','-','.'),'',$Profil)))
        return 1;//caract incor
    if(strlen($Profil)<2 || strlen($Profil)>30 )
        return 2;//lungime incor
    return 0;
}


//fct buna
function SpecializareValidare(String $Specializare)
{
    if(!$Specializare)
        return -1;
    if(!ctype_alpha(str_replace(array(' ','-','.'),'',$Specializare)))
        return 1; // caractere ilegale
    if(strlen($Specializare)>55 || strlen($Specializare)<1)
        return 2;//numar incorect de caract
        return 0;
}


//fct buna
function An_AbsolvireValidare(String $An_Absolvire)
{
    if(!$An_Absolvire)
        return -1;
    
    if(!ctype_digit($An_Absolvire))
      return 2; // caractere incorecte
    
    
    else if($An_Absolvire > 2018 || $An_Absolvire < 1980)
            return 1; // an incorect
    
    return 0;
        
}

//vad ca nu e folosita in formular
function Data_InceputValidare(String $Data_Inceput, String $Data_Sfarsit)
{
    if($Data_Inceput <= "2017-12-31")
        if($Data_Inceput >= "1980-01-01")
            if($Data_Inceput<$Data_Sfarsit)
                if(validateDate($Data_Inceput)==1 && validateDate($Data_Sfarsit)==1)
                    return 1;
                else
                    return 0;
            else
                return 0;
        else
            return 0;
    else
        return 0;
}


//vad la fel ca nu e folosita in formular
function Data_SfarsitValidare(String $Data_Inceput, String $Data_Sfarsit)
{
    if($Data_Sfarsit <= "2017-12-31")
        if($Data_Sfarsit >= "1980-01-01")
            if($Data_Sfarsit>$Data_Inceput)
                if(validateDate($Data_Inceput)==1 && validateDate($Data_Sfarsit)==1)
                    return 1;
                else
                    return 0;
            else
                return 0;
        else
            return 0;
    else
        return 0;
}

//function validareNume($nume)
//{
//    if(ctype_alpha($nume) == 0) return "Numele trebuie sa contina doar litere!";
//    if(strlen($nume) > 100) return "Dimensiunea numelui a depasit limita de caractere admisa!";
//    return "corect";
//}

//
//function validareProfil($Profil) // pot exista inseruti de genul "-    - - - - a - - - -" care sunt considerate corect...
//{
//    if(ctype_alpha(str_replace(array(' ', '-'), '', $Profil)) == 0) return "Profilul trebuie sa contina doar litere!";
//    if(strlen($Profil) > 20) return "Dimensiunea profilului a depasit limita de caractere admisa!";
//    return "corect";
//}


//fct buna
function validareDiplomaNr($Diploma_Nr)
{
    if(!$Diploma_Nr)
        return -1;
    if(!ctype_digit($Diploma_Nr)) return 1;//caractere invalide
    
    if($Diploma_Nr < 1 || $Diploma_Nr > 99999999)return 2; //numar invalid
    
    return 0;
}



//fct buna
function validareData($Data_Inceput, $Diploma_Data_Eliberarii, $Data_Sfarsit)
{
    if(!$Data_Inceput || !$Diploma_Data_Eliberarii || !$Data_Sfarsit)
        return -1;
    $data_curenta = "2018-01-01";

    if($Data_Inceput > $data_curenta or $Diploma_Data_Eliberarii > $data_curenta or $Data_Sfarsit > $data_curenta or $Data_Inceput > $Data_Sfarsit or $Data_Sfarsit > $Diploma_Data_Eliberarii) return 1; // format invalid
    return 0; // corect
}


//fct buna
function validareDiplomaSerie($Diploma_Serie)
{
    if(!ctype_alpha($Diploma_Serie) == 0) return 1; // caractere incore
    else if(strlen($Diploma_Serie) < 1 || strlen($Diploma_Serie) > 9) return 2;// numar incorect caract
    return 0;
}



//ftc buna
function validareDiplomaEmisa($Diploma_Emisa)
{
    if(!$p_liceu){
        return -1;
    }
    
    if(strlen($Diploma_Liceu)<1 || strlen($Diploma_Liceu)>70)
        return 1; // numar incorect de caract

    return 0; // corect
        

}


//fct buna
function validareNumarFoaieMatricola($nrFoaie){
    if(!ctype_digit($nrFoaie))
        return 1; // caractere interzise
    else if($nrFoaie <1 || $nrFoaie > 999999999)
        return 2; //numar incorect
    
    return 0;//corect
}


//fct buna
function validareNrActRecunoastere($nrAct){
    if(!ctype_digit($nrAct))
        return 1; //caractere interzise
    else if($nrAct<1 || $nrAct>999999999)
        return 2; //numar incorect
    return 0;
}




//nu se mai foloseste , sunt functii separate
function validare_locatie($id,$tara,$judet,$localitate,$strada)
{
    if(!ctype_digit($id))
    return 2;
    if(!ctype_alpha($tara) || strlen($tara) >200)
    return 3;
    if(!ctype_alpha($judet) || strlen($judet) > 60 )
    return 4;
    if(!ctype_alpha($localitate) || strlen($localitate) > 100 )
    return 5;
    if(!ctype_alpha($strada) || strlen($strada)>30)
    return 6;
    return 1;
}


//fct buna
function validTara($p_tara){
    if(!$p_tara)
        return -1;
    if(strlen($p_tara)>36 || strlen($p_tara)<4)
        return 1;//numar incorect caractere
    if(!(ctype_alpha(str_replace(array(" ", "-"), '', $p_tara))))
        return 2;//caractere invalide
    return 0;
}


//fct buna
function validLocalitate($p_localitate){
    if(!$p_localitate)
        return -1;
    if(strlen($p_localitate)>85 || strlen($p_localitate)<3)
        return 1;//numar incorect caractere
    if(!(ctype_alpha(str_replace(array(" ", "-"), '', $p_localitate))))
        return 2;//caractere invalide
    return 0;
}



//fct buna
function validSerieBAC($bac)
 {
  if(!$bac)
      return -1;
  if(!(ctype_alpha($bac)))
   return 1;
    
  return 0;
 }
 
 //fct buna
function validNumarBAC($bac)
 {
  if(!$bac)
      return -1;
  if(!(ctype_digit($bac)))
   return 1;
    
  return 0;
 }


//fct buna
function validDurata($durata)
 {
    if(!$durata)
        return -1;
    if($durata<2 || $durata>12)
        return 1; //nr incorect
    if(!ctype_digit($durata))
        return 2;//caractere incorecte
    return 0;
 }


//fct buna
function validareNationala($input){
        if($input == 1 or $input == 0)
            return 0;
        else return 1; //eroare
    }


//fct buna
function validareDisciplina($input){
        if(!$input)
            return -1;
        if($input == "Matematica" or $input == "Informatica" or $input == "Fizica" or $input == "Chimie")
            return 0;//corect
        else return 1;//incorect
    }

//fct buna
function validareAn($input){
        if(!$input)
            return -1;
		
        $data = gmdate('Y');

        if(!ctype_digit($input))
            return 1;// caractere incorecte

        if($input < 1950 || $input > $data)
            return 2;//eroare , an incorect

         return 0;
    }



//fct buna
function validarePremiulObtinut($input){
        if(!$input)
            return -1;
        
        if($input == "Locul 1" or $input == "Locul 2" or $input == "Locul 3")
            return 0;
    
        return 1;
    }
	

//fct buna
function validareCodPostal($p_codPostal){
    if(!($p_codPostal))
        return -1;
    if($p_codPostal<1000 || $p_codPostal>999999)
        return 1; // numar incorect pt codul postal
    return 0;
}


//fct buna
function validareLiceu($p_liceu){
    if(!$p_liceu){
        return -1;
    }

    if(strlen($p_liceu) <1 || strlen($p_liceu)>70)
        return 1;//lungime prea mare
    
    return 0; // corect
        
}


//function validareCodPostal($input)
	//{
		//if($input < 010011 || $input > 927250 || $input > 010019 && $input < 010021 || $input > 010028 && $input < 010031 || $input > 010039 && $input < 010041 || $input > 010046 && $input < 010051 || $input > 010056 && $input < 010061 || $input > 010069 && $input < 010071 || $input > 010074 && $input < 010081 || $input > 010086 && $input < 010091 || $input > 010099 && $input < 010101 || $input > 010109 && $input < 010111 || $input > 010119 && $input < 010121 || $input > 010126 && $input < 010131 || $input > 010139 && $input < 010141 || $input > 010149 && $input < 010151 || $input > 010159 && $input < 010161 || $input > 010169 && $input < 010171 || $input > 010179 && $input < 010181 || $input > 010188 && $input < 010191 || $input > 010198 && $input < 010201 || $input > 010209 && $input < 010211 || $input > 010219 && $input < 010221 || $input > 010226 && $input < 010231 || $input > 010238 && $input < 010241 || $input > 010243 && $input < 010251 || $input > 010259 && $input < 010261 || $input > 010263 && $input < 010271 || $input > 010271 && $input < 010281 || $input > 010289 && $input < 010291 || $input > 010298 && $input < 010301 || $input > 010308 && $input < 010311 || $input > 010314 && $input < 010321 || $input > 010326 && $input < 010331 || $input > 010337 && $input < 010341 || $input > 010346 && $input < 010351 || $input > 010355 && $input < 010361 || $input > 010367 && $input < 010371 || $input > 010375 && $input < 010381 || $input > 010386 && $input < 010391 || $input > 010395 && $input < 010401 || $input > 010407 && $input < 010411 || $input > 010416 && $input < 010421 || $input > 010424 && $input < 010431 || $input > 010437 && $input < 010441 || $input > 010449 && $input < 010451 || $input > 010459 && $input < 010461 || $input > 010465 && $input < 010471 || $input > 010478 && $input < 010481 || $input > 010487 && $input < 010491 || $input > 010498 && $input < 010501 || $input > 010507 && $input < 010511 || $input > 010518 && $input < 010521 || $input > 010528 && $input < 010531 || $input > 010539 && $input < 010541 || $input > 010544 && $input < 010551 || $input > 010559 && $input < 010561 || $input > 010567 && $input < 010571 || $input > 010579 && $input < 010581 || $input > 010588 && $input < 010591 || $input > 010599 && $input < 010601 || $input > 010605 && $input < 010611 || $input > 010617 && $input < 010621 || $input > 010629 && $input < 010631 || $input > 010639 && $input < 010641 || $input > 010648 && $input < 010651 || $input > 010654 && $input < 010661 || $input > 010669 && $input < 010671 || $input > 010673 && $input < 010701 || $input > 010709 && $input < 010711 || $input > 010719 && $input < 010721 || $input > 010725 && $input < 010731 || $input > 010738 && $input < 010741 || $input > 010748 && $input < 010751 || $input > 010759 && $input < 010761 || $input > 010767 && $input < 010771 || $input > 010779 && $input < 010781 || $input > 010787 && $input < 010791 || $input > 010799 && $input < 010801 || $input > 010808 && $input < 010811 || $input > 010819 && $input < 010821 || $input > 010828 && $input < 010831 || $input > 010838 && $input < 010841 || $input > 010849 && $input < 010851 || $input > 010859 && $input < 010861 || $input > 010869 && $input < 010871 || $input > 010874 && $input < 010881 || $input > 010889 && $input < 010891 || $input > 010899 && $input < 010901 || $input > 010905 && $input < 010911 || $input > 010919 && $input < 010921 || $input > 010928 && $input < 010931 || $input > 010938 && $input < 010941 || $input > 010948 && $input < 010951 || $input > 010956 && $input < 010961 || $input > 010968 && $input < 010971 || $input > 010976 && $input < 010981 || $input > 010989 && $input < 010991 || $input > 010996 && $input < 011011 || $input > 011018 && $input < 011021 || $input > 011028 && $input < 011031 || $input > 011039 && $input < 011041 || $input > 011045 && $input < 011047 || $input > 011048 && $input < 011051 || $input > 011059 && $input < 011061 || $input > 011066 && $input < 011071 || $input > 011078 && $input < 011081 || $input > 011089 && $input < 011091 || $input > 011098 && $input < 011101 || $input > 011104 && $input < 011131 || $input > 011138 && $input < 011141 || $input > 011147 && $input < 011151 || $input > 011159 && $input < 011161 || $input > 011166 && $input < 011171 || $input > 011179 && $input < 011181 || $input > 011189 && $input < 011191 || $input > 011198 && $input < 011201 || $input > 011209 && $input < 011211 || $input > 011219 && $input < 011221 || $input > 011227 && $input < 011231 || $input > 011239 && $input < 011241 || $input > 011248 && $input < 011251 || $input > 011259 && $input < 011261 || $input > 011266 && $input < 011271 || $input > 011278 && $input < 011281 || $input > 011287 && $input < 011291 || $input > 011297 && $input < 011301 || $input > 011306 && $input < 011311 || $input > 011318 && $input < 011321 || $input > 011326 && $input < 011331 || $input > 011337 && $input < 011341 || $input > 011349 && $input < 011351 || $input > 011359 && $input < 011361 || $input > 011369 && $input < 011371 || $input > 011379 && $input < 011381 || $input > 011389 && $input < 011391 || $input > 011399 && $input < 011401 || $input > 011408 && $input < 011411 || $input > 011417 && $input < 011421 || $input > 011428 && $input < 011431 || $input > 011438 && $input < 011441 || $input > 011448 && $input < 011451 || $input > 011459 && $input < 011461 || $input > 011469 && $input < 011471 || $input > 011478 && $input < 011481 || $input > 011482 && $input < 011491 || $input > 011497 && $input < 011501 || $input > 011509 && $input < 011511 || $input > 011514 && $input < 011531 || $input > 011539 && $input < 011541 || $input > 011548 && $input < 011551 || $input > 011557 && $input < 011561 || $input > 011564 && $input < 011571 || $input > 011578 && $input < 011581 || $input > 011586 && $input < 011591 || $input > 011598 && $input < 011601 || $input > 011609 && $input < 011611 || $input > 011618 && $input < 011621 || $input > 011626 && $input < 011631 || $input > 011638 && $input < 011641 || $input > 011648 && $input < 011651 || $input > 011658 && $input < 011661 || $input > 011667 && $input < 011671 || $input > 011678 && $input < 011681 || $input > 011688 && $input < 011691 || $input > 011694 && $input < 011701 || $input > 011704 && $input < 011711 || $input > 011717 && $input < 011721 || $input > 011728 && $input < 011731 || $input > 011737 && $input < 011741 || $input > 011746 && $input < 011751 || $input > 011756 && $input < 011761 || $input > 011769 && $input < 011771 || $input > 011778 && $input < 011781 || $input > 011788 && $input < 011791 || $input > 011796 && $input < 011801 || $input > 011808 && $input < 011811 || $input > 011818 && $input < 011821 || $input > 011827 && $input < 011831 || $input > 011838 && $input < 011841 || $input > 011849 && $input < 011851 || $input > 011858 && $input < 011861 || $input > 011868 && $input < 011871 || $input > 011879 && $input < 011881 || $input > 011889 && $input < 011891 || $input > 011895 && $input < 011901 || $input > 011908 && $input < 011911 || $input > 011914 && $input < 011921 || $input > 011925 && $input < 011931 || $input > 011938 && $input < 011941 || $input > 011948 && $input < 011951 || $input > 011958 && $input < 011961 || $input > 011964 && $input < 011971 || $input > 011976 && $input < 011981 || $input > 011988 && $input < 011991 || $input > 011999 && $input < 012011 || $input > 012018 && $input < 012051 || $input > 012056 && $input < 012061 || $input > 012065 && $input < 012071 || $input > 012076 && $input < 012081 || $input > 012089 && $input < 012091 || $input > 012095 && $input < 012101 || $input > 012104 && $input < 012111 || $input > 012116 && $input < 012121 || $input > 012128 && $input < 012131 || $input > 012136 && $input < 012141 || $input > 012148 && $input < 012151 || $input > 012158 && $input < 012161 || $input > 012168 && $input < 012171 || $input > 012178 && $input < 012181 || $input > 012186 && $input < 012191 || $input > 012197 && $input < 012201 || $input > 012207 && $input < 012211 || $input > 012219 && $input < 012221 || $input > 012226 && $input < 012231 || $input > 012236 && $input < 012241 || $input > 012249 && $input < 012251 || $input > 012257 && $input < 012261 || $input > 012268 && $input < 012271 || $input > 012275 && $input < 012281 || $input > 012288 && $input < 012291 || $input > 012296 && $input < 012301 || $input > 012307 && $input < 012311 || $input > 012317 && $input < 012321 || $input > 012329 && $input < 012351 || $input > 012359 && $input < 012361 || $input > 012369 && $input < 012371 || $input > 012371 && $input < 012378 || $input > 012378 && $input < 012381 || $input > 012389 && $input < 012391 || $input > 012399 && $input < 012401 || $input > 012407 && $input < 012411 || $input > 012417 && $input < 012421 || $input > 012428 && $input < 012431 || $input > 012437 && $input < 012441 || $input > 012449 && $input < 012451 || $input > 012458 && $input < 012461 || $input > 012468 && $input < 012471 || $input > 012478 && $input < 012481 || $input > 012484 && $input < 012491 || $input > 012496 && $input < 012501 || $input > 012506 && $input < 012511 || $input > 012518 && $input < 012521 || $input > 012526 && $input < 012531 || $input > 012538 && $input < 012541 || $input > 012548 && $input < 012551 || $input > 012558 && $input < 012561 || $input > 012566 && $input < 012571 || $input > 012578 && $input < 012581 || $input > 012586 && $input < 012591 || $input > 012596 && $input < 012601 || $input > 012609 && $input < 012611 || $input > 012619 && $input < 012621 || $input > 012628 && $input < 012631 || $input > 012638 && $input < 012641 || $input > 012648 && $input < 012651 || $input > 012659 && $input < 012661 || $input > 012669 && $input < 012671 || $input > 012676 && $input < 012681 || $input > 012689 && $input < 012691 || $input > 012698 && $input < 012701 || $input > 012708 && $input < 012711 || $input > 012716 && $input < 012721 || $input > 012729 && $input < 012731 || $input > 012738 && $input < 012741 || $input > 012748 && $input < 012751 || $input > 012757 && $input < 012761 || $input > 012766 && $input < 012771 || $input > 012776 && $input < 012781 || $input > 012788 && $input < 012791 || $input > 012799 && $input < 012801 || $input > 012808 && $input < 012811 || $input > 012817 && $input < 012821 || $input > 012829 && $input < 012831 || $input > 012838 && $input < 012841 || $input > 012849 && $input < 012851 || $input > 012858 && $input < 012861 || $input > 012868 && $input < 012871 || $input > 012878 && $input < 012881 || $input > 012888 && $input < 012901 || $input > 012907 && $input < 012911 || $input > 012916 && $input < 012921 || $input > 012926 && $input < 012931 || $input > 012936 && $input < 012941 || $input > 012944 && $input < 012947 || $input > 012949 && $input < 012951 || $input > 012957 && $input < 012961 || $input > 012966 && $input < 012971 || $input > 012978 && $input < 012981 || $input > 012988 && $input < 012991 || $input > 012996 && $input < 013011 || $input > 013018 && $input < 013021 || $input > 013028 && $input < 013031 || $input > 013039 && $input < 013041 || $input > 013048 && $input < 013051 || $input > 013058 && $input < 013061 || $input > 013066 && $input < 013071 || $input > 013078 && $input < 013081 || $input > 013087 && $input < 013091 || $input > 013096 && $input < 013101 || $input > 013108 && $input < 013111 || $input > 013119 && $input < 013121 || $input > 013128 && $input < 013131 || $input > 013138 && $input < 013141 || $input > 013147 && $input < 013151 || $input > 013158 && $input < 013161 || $input > 013169 && $input < 013171 || $input > 013178 && $input < 013181 || $input > 013189 && $input < 013191 || $input > 013199 && $input < 013201 || $input > 013209 && $input < 013211 || $input > 013219 && $input < 013221 || $input > 013229 && $input < 013231 || $input > 013238 && $input < 013241 || $input > 013249 && $input < 013251 || $input > 013259 && $input < 013261 || $input > 013268 && $input < 013271 || $input > 013279 && $input < 013281 || $input > 013288 && $input < 013291 || $input > 013299 && $input < 013301 || $input > 013309 && $input < 013311 || $input > 013319 && $input < 013321 || $input > 013329 && $input < 013331 || $input > 013339 && $input < 013341 || $input > 013349 && $input < 013351 || $input > 013356 && $input < 013361 || $input > 013368 && $input < 013371 || $input > 013378 && $input < 013381 || $input > 013382 && $input < 013391 || $input > 013396 && $input < 013401 || $input > 013408 && $input < 013411 || $input > 013418 && $input < 013421 || $input > 013424 && $input < 013431 || $input > 013439 && $input < 013441 || $input > 013448 && $input < 013451 || $input > 013456 && $input < 013461 || $input > 013466 && $input < 013471 || $input > 013474 && $input < 013481 || $input > 013486 && $input < 013491 || $input > 013496 && $input < 013501 || $input > 013505 && $input < 013511 || $input > 013519 && $input < 013521 || $input > 013528 && $input < 013531 || $input > 013535 && $input < 013541 || $input > 013547 && $input < 013551 || $input > 013558 && $input < 013561 || $input > 013568 && $input < 013571 || $input > 013578 && $input < 013581 || $input > 013586 && $input < 013591 || $input > 013596 && $input < 013601 || $input > 013606 && $input < 013609 || $input > 013609 && $input < 013611 || $input > 013613 && $input < 013621 || $input > 013626 && $input < 013631 || $input > 013637 && $input < 013641 || $input > 013649 && $input < 013681 || $input > 013686 && $input < 013691 || $input > 013695 && $input < 013701 || $input > 013706 && $input < 013711 || $input > 013718 && $input < 013721 || $input > 013726 && $input < 013731 || $input > 013738 && $input < 013741 || $input > 013749 && $input < 013751 || $input > 013758 && $input < 013761 || $input > 013769 && $input < 013771 || $input > 013779 && $input < 013781 || $input > 013789 && $input < 013791 || $input > 013799 && $input < 013801 || $input > 013805 && $input < 013811 || $input > 013814 && $input < 013821 || $input > 013824 && $input < 013831 || $input > 013838 && $input < 013841 || $input > 013848 && $input < 013851 || $input > 013859 && $input < 013861 || $input > 013868 && $input < 013871 || $input > 013878 && $input < 013881 || $input > 013888 && $input < 013891 || $input > 013898 && $input < 013901 || $input > 013908 && $input < 013911 || $input > 013914 && $input < 013921 || $input > 013925 && $input < 013931 || $input > 013937 && $input < 013941 || $input > 013948 && $input < 013951 || $input > 013955 && $input < 013961 || $input > 013968 && $input < 013971 || $input > 013978 && $input < 013981 || $input > 013989 && $input < 013991 || $input > 013998 && $input < 014011 || $input > 014019 && $input < 014021 || $input > 014025 && $input < 014027 || $input > 014027 && $input < 014029 || $input > 014029 && $input < 014031 || $input > 014039 && $input < 014041 || $input > 014049 && $input < 014051 || $input > 014059 && $input < 014061 || $input > 014067 && $input < 014069 || $input > 014069 && $input < 014071 || $input > 014076 && $input < 014101 || $input > 014109 && $input < 014111 || $input > 014114 && $input < 014121 || $input > 014128 && $input < 014131 || $input > 014136 && $input < 014141 || $input > 014147 && $input < 014151 || $input > 014155 && $input < 014161 || $input > 014164 && $input < 014171 || $input > 014179 && $input < 014181 || $input > 014189 && $input < 014191 || $input > 014196 && $input < 014201 || $input > 014206 && $input < 014211 || $input > 014216 && $input < 014221 || $input > 014225 && $input < 014231 || $input > 014237 && $input < 014241 || $input > 014243 && $input < 014251 || $input > 014257 && $input < 014261 || $input > 014266 && $input < 014271 || $input > 014277 && $input < 014281 || $input > 014286 && $input < 014291 || $input > 014295 && $input < 014301 || $input > 014307 && $input < 014311 || $input > 014314 && $input < 014321 || $input > 014326 && $input < 014331 || $input > 014336 && $input < 014341 || $input > 014347 && $input < 014351 || $input > 014358 && $input < 014361 || $input > 014369 && $input < 014371 || $input > 014376 && $input < 014381 || $input > 014385 && $input < 014391 || $input > 014391 && $input < 014393 || $input > 014398 && $input < 014451 || $input > 014459 && $input < 014461 || $input > 014467 && $input < 014471 || $input > 014476 && $input < 014481 || $input > 014483 && $input < 014551 || $input > 014559 && $input < 014561 || $input > 014569 && $input < 014571 || $input > 014579 && $input < 014581 || $input > 014584 && $input < 014591 || $input > 014598 && $input < 014601 || $input > 014609 && $input < 014611 || $input > 014619 && $input < 014621 || $input > 014627 && $input < 014631 || $input > 014639 && $input < 014641 || $input > 014649 && $input < 014651 || $input > 014659 && $input < 014661 || $input > 014665 && $input < 015011 || $input > 015016 && $input < 015021 || $input > 015021 && $input < 015025 || $input > 015025 && $input < 015031 || $input > 015031 && $input < 015033 || $input > 015033 && $input < 015035 || $input > 015035 && $input < 015037 || $input > 015037 && $input < 015041 || $input > 015041 && $input < 015045 || $input > 015045 && $input < 015051 || $input > 015051 && $input < 015055 || $input > 015055 && $input < 015101 || $input > 015101 && $input < 015105 || $input > 015105 && $input < 015111 || $input > 015111 && $input < 015115 || $input > 015116 && $input < 015118 || $input > 015118 && $input < 015121 || $input > 015121 && $input < 015125 || $input > 015125 && $input < 015131 || $input > 015131 && $input < 015133 || $input > 015133 && $input < 015135 || $input > 015135 && $input < 015141 || $input > 015141 && $input < 015143 || $input > 015143 && $input < 015145 || $input > 015145 && $input < 015147 || $input > 015147 && $input < 015151 || $input > 015151 && $input < 015155 || $input > 015155 && $input < 015201 || $input > 015201 && $input < 015205 || $input > 015205 && $input < 015211 || $input > 015211 && $input < 015213 || $input > 015213 && $input < 015215 || $input > 015215 && $input < 015217 || $input > 015217 && $input < 015221 || $input > 015221 && $input < 015225 || $input > 015225 && $input < 015231 || $input > 015231 && $input < 015233 || $input > 015233 && $input < 015236 || $input > 015236 && $input < 015238 || $input > 015238 && $input < 015241 || $input > 015241 && $input < 015245 || $input > 015245 && $input < 020011 || $input > 020017 && $input < 020021 || $input > 020026 && $input < 020031 || $input > 020039 && $input < 020041 || $input > 020048 && $input < 020051 || $input > 020057 && $input < 020061 || $input > 020065 && $input < 020071 || $input > 020079 && $input < 020081 || $input > 020085 && $input < 020091 || $input > 020099 && $input < 020101 || $input > 020109 && $input < 020111 || $input > 020114 && $input < 020121 || $input > 020127 && $input < 020131 || $input > 020133 && $input < 020141 || $input > 020149 && $input < 020151 || $input > 020155 && $input < 020161 || $input > 020165 && $input < 020171 || $input > 020177 && $input < 020181 || $input > 020188 && $input < 020191 || $input > 020199 && $input < 020201 || $input > 020207 && $input < 020211 || $input > 020219 && $input < 020221 || $input > 020226 && $input < 020231 || $input > 020237 && $input < 020241 || $input > 020246 && $input < 020251 || $input > 020258 && $input < 020261 || $input > 020269 && $input < 020271 || $input > 020276 && $input < 020281 || $input > 020285 && $input < 020291 || $input > 020296 && $input < 020301 || $input > 020305 && $input < 020308 || $input > 020309 && $input < 020311 || $input > 020317 && $input < 020321 || $input > 020325 && $input < 020331 || $input > 020339 && $input < 020341 || $input > 020349 && $input < 020351 || $input > 020359 && $input < 020361 || $input > 020362 && $input < 020371 || $input > 020378 && $input < 020381 || $input > 020384 && $input < 020391 || $input > 020397 && $input < 020451 || $input > 020459 && $input < 020461 || $input > 020469 && $input < 020471 || $input > 020479 && $input < 020481 || $input > 020488 && $input < 020491 || $input > 020499 && $input < 020501 || $input > 020507 && $input < 020511 || $input > 020513 && $input < 020521 || $input > 020528 && $input < 020531 || $input > 020537 && $input < 020541 || $input > 020548 && $input < 020551 || $input > 020557 && $input < 020561 || $input > 020566 && $input < 020571 || $input > 020575 && $input < 020581 || $input > 020589 && $input < 020591 || $input > 020597 && $input < 020601 || $input > 020609 && $input < 020611 || $input > 020619 && $input < 020621 || $input > 020626 && $input < 020631 || $input > 020638 && $input < 020641 || $input > 020649 && $input < 020651 || $input > 020658 && $input < 020661 || $input > 020669 && $input < 020671 || $input > 020676 && $input < 020681 || $input > 020689 && $input < 020691 || $input > 020695 && $input < 020701 || $input > 020706 && $input < 020711 || $input > 020717 && $input < 020721 || $input > 020725 && $input < 020731 || $input > 020738 && $input < 020741 || $input > 020749 && $input < 020751 || $input > 020758 && $input < 020761 || $input > 020766 && $input < 020771 || $input > 020779 && $input < 020781 || $input > 020786 && $input < 020791 || $input > 020797 && $input < 020801 || $input > 020806 && $input < 020851 || $input > 020859 && $input < 020861 || $input > 020868 && $input < 020871 || $input > 020878 && $input < 020881 || $input > 020889 && $input < 020891 || $input > 020899 && $input < 020901 || $input > 020905 && $input < 020912 || $input > 020918 && $input < 020921 || $input > 020926 && $input < 020931 || $input > 020939 && $input < 020941 || $input > 020948 && $input < 020951 || $input > 020956 && $input < 020961 || $input > 020969 && $input < 020971 || $input > 020979 && $input < 020981 || $input > 020988 && $input < 020991 || $input > 020998 && $input < 021011 || $input > 021016 && $input < 021021 || $input > 021026 && $input < 021031 || $input > 021034 && $input < 021041 || $input > 021047 && $input < 021051 || $input > 021056 && $input < 021061 || $input > 021065 && $input < 021101 || $input > 021109 && $input < 021111 || $input > 021119 && $input < 021121 || $input > 021128 && $input < 021131 || $input > 021137 && $input < 021141 || $input > 021146 && $input < 021151 || $input > 021159 && $input < 021161 || $input > 021169 && $input < 021171 || $input > 021179 && $input < 021181 || $input > 021188 && $input < 021191 || $input > 021199 && $input < 021201 || $input > 021204 && $input < 021211 || $input > 021218 && $input < 021221 || $input > 021227 && $input < 021231 || $input > 021238 && $input < 021241 || $input > 021245 && $input < 021251 || $input > 021256 && $input < 021301 || $input > 021309 && $input < 021311 || $input > 021319 && $input < 021321 || $input > 021329 && $input < 021331 || $input > 021338 && $input < 021341 || $input > 021346 && $input < 021351 || $input > 021359 && $input < 021361 || $input > 021369 && $input < 021371 || $input > 021378 && $input < 021381 || $input > 021389 && $input < 021391 || $input > 021399 && $input < 021401 || $input > 021409 && $input < 021411 || $input > 021419 && $input < 021421 || $input > 021429 && $input < 021431 || $input > 021434 && $input < 021441 || $input > 021446 && $input < 021451 || $input > 021459 && $input < 021461 || $input > 021469 && $input < 021471 || $input > 021476 && $input < 021481 || $input > 021487 && $input < 021491 || $input > 021495 && $input < 021501 || $input > 021509 && $input < 021511 || $input > 021518 && $input < 021521 || $input > 021529 && $input < 021531 || $input > 021539 && $input < 021541 || $input > 021544 && $input < 021551 || $input > 021556 && $input < 021561 || $input > 021568 && $input < 021571 || $input > 021578 && $input < 021581 || $input > 021587 && $input < 021591 || $input > 021599 && $input < 021601 || $input > 021609 && $input < 021611 || $input > 021619 && $input < 021621 || $input > 021627 && $input < 021631 || $input > 021639 && $input < 021641 || $input > 021648 && $input < 021651 || $input > 021659 && $input < 021661 || $input > 021666 && $input < 021671 || $input > 021679 && $input < 021681 || $input > 021689 && $input < 021691 || $input > 021699 && $input < 021701 || $input > 021709 && $input < 021711 || $input > 021719 && $input < 021721 || $input > 021729 && $input < 021731 || $input > 021736 && $input < 021741 || $input > 021747 && $input < 021751 || $input > 021759 && $input < 021761 || $input > 021764 && $input < 021771 || $input > 021775 && $input < 021781 || $input > 021785 && $input < 021791 || $input > 021798 && $input < 021801 || $input > 021806 && $input < 021811 || $input > 021815 && $input < 021821 || $input > 021825 && $input < 021831 || $input > 021838 && $input < 021841 || $input > 021844 && $input < 021851 || $input > 021857 && $input < 021861 || $input > 021868 && $input < 021871 || $input > 021876 && $input < 021881 || $input > 021888 && $input < 021891 || $input > 021896 && $input < 021901 || $input > 021904 && $input < 021911 || $input > 021919 && $input < 021921 || $input > 021928 && $input < 021931 || $input > 021938 && $input < 021941 || $input > 021944 && $input < 021946 || $input > 021949 && $input < 021951 || $input > 021958 && $input < 021961 || $input > 021969 && $input < 021971 || $input > 021979 && $input < 021981 || $input > 021988 && $input < 021991 || $input > 021998 && $input < 022011 || $input > 022016 && $input < 022101 || $input > 022109 && $input < 022111 || $input > 022119 && $input < 022121 || $input > 022129 && $input < 022131 || $input > 022133 && $input < 022141 || $input > 022147 && $input < 022151 || $input > 022159 && $input < 022161 || $input > 022167 && $input < 022171 || $input > 022177 && $input < 022181 || $input > 022186 && $input < 022191 || $input > 022199 && $input < 022201 || $input > 022204 && $input < 022251 || $input > 022257 && $input < 022261 || $input > 022266 && $input < 022271 || $input > 022277 && $input < 022281 || $input > 022287 && $input < 022291 || $input > 022294 && $input < 022301 || $input > 022307 && $input < 022311 || $input > 022319 && $input < 022321 || $input > 022329 && $input < 022331 || $input > 022339 && $input < 022341 || $input > 022348 && $input < 022351 || $input > 022356 && $input < 022361 || $input > 022365 && $input < 022371 || $input > 022378 && $input < 022381 || $input > 022384 && $input < 022391 || $input > 022395 && $input < 022401 || $input > 022406 && $input < 022411 || $input > 022418 && $input < 022421 || $input > 022427 && $input < 022431 || $input > 022435 && $input < 022441 || $input > 022448 && $input < 022451 || $input > 022456 && $input < 022461 || $input > 022462 && $input < 022501 || $input > 022504 && $input < 022511 || $input > 022516 && $input < 022521 || $input > 022529 && $input < 022531 || $input > 022538 && $input < 022541 || $input > 022548 && $input < 022551 || $input > 022556 && $input < 022561 || $input > 022568 && $input < 022571 || $input > 022578 && $input < 022581 || $input > 022588 && $input < 022591 || $input > 022598 && $input < 022601 || $input > 022604 && $input < 022611 || $input > 022619 && $input < 022621 || $input > 022629 && $input < 022631 || $input > 022639 && $input < 022641 || $input > 022649 && $input < 022651 || $input > 022659 && $input < 022661 || $input > 022666 && $input < 022671 || $input > 022676 && $input < 022681 || $input > 022689 && $input < 022691 || $input > 022699 && $input < 022701 || $input > 022709 && $input < 022711 || $input > 022718 && $input < 022721 || $input > 022727 && $input < 022731 || $input > 022739 && $input < 022741 || $input > 022746 && $input < 022751 || $input > 022756 && $input < 022761 || $input > 022769 && $input < 022771 || $input > 022777 && $input < 022781 || $input > 022785 && $input < 022791 || $input > 022796 && $input < 022801 || $input > 022806 && $input < 022811 || $input > 022817 && $input < 022821 || $input > 022826 && $input < 022831 || $input > 022839 && $input < 022841 || $input > 022848 && $input < 022851 || $input > 022855 && $input < 022861 || $input > 022866 && $input < 022871 || $input > 022875 && $input < 022881 || $input > 022887 && $input < 022891 || $input > 022899 && $input < 022901 || $input > 022907 && $input < 022911 || $input > 022916 && $input < 022921 || $input > 022928 && $input < 022931 || $input > 022936 && $input < 022941 || $input > 022949 && $input < 022951 || $input > 022959 && $input < 022961 || $input > 022969 && $input < 022971 || $input > 022978 && $input < 022981 || $input > 022989 && $input < 022991 || $input > 022999 && $input < 023011 || $input > 023016 && $input < 023021 || $input > 023025 && $input < 023031 || $input > 023035 && $input < 023041 || $input > 023049 && $input < 023051 || $input > 023058 && $input < 023061 || $input > 023069 && $input < 023071 || $input > 023078 && $input < 023081 || $input > 023088 && $input < 023091 || $input > 023096 && $input < 023101 || $input > 023108 && $input < 023111 || $input > 023118 && $input < 023121 || $input > 023128 && $input < 023131 || $input > 023139 && $input < 023141 || $input > 023146 && $input < 023151 || $input > 023156 && $input < 023161 || $input > 023168 && $input < 023171 || $input > 023177 && $input < 023251 || $input > 023258 && $input < 023261 || $input > 023268 && $input < 023271 || $input > 023277 && $input < 023281 || $input > 023287 && $input < 023291 || $input > 023296 && $input < 023301 || $input > 023309 && $input < 023311 || $input > 023314 && $input < 023321 || $input > 023326 && $input < 023331 || $input > 023338 && $input < 023341 || $input > 023346 && $input < 023351 || $input > 023356 && $input < 023361 || $input > 023365 && $input < 023371 || $input > 023373 && $input < 023381 || $input > 023388 && $input < 023391 || $input > 023397 && $input < 023401 || $input > 023409 && $input < 023411 || $input > 023416 && $input < 023421 || $input > 023427 && $input < 023431 || $input > 023438 && $input < 023441 || $input > 023448 && $input < 023451 || $input > 023455 && $input < 023461 || $input > 023468 && $input < 023471 || $input > 023478 && $input < 023481 || $input > 023488 && $input < 023491 || $input > 023498 && $input < 023551 || $input > 023557 && $input < 023561 || $input > 023569 && $input < 023571 || $input > 023575 && $input < 023581 || $input > 023589 && $input < 023591 || $input > 023596 && $input < 023601 || $input > 023605 && $input < 023611 || $input > 023615 && $input < 023621 || $input > 023624 && $input < 023626 || $input > 023628 && $input < 023631 || $input > 023638 && $input < 023641 || $input > 023647 && $input < 023651 || $input > 023656 && $input < 023661 || $input > 023662 && $input < 023664 || $input > 023669 && $input < 023671 || $input > 023679 && $input < 023681 || $input > 023687 && $input < 023691 || $input > 023694 && $input < 023701 || $input > 023709 && $input < 023711 || $input > 023717 && $input < 023719 || $input > 023719 && $input < 023721 || $input > 023729 && $input < 023731 || $input > 023738 && $input < 023741 || $input > 023749 && $input < 023751 || $input > 023759 && $input < 023761 || $input > 023766 && $input < 023771 || $input > 023776 && $input < 023781 || $input > 023789 && $input < 023791 || $input > 023798 && $input < 023801 || $input > 023808 && $input < 023811 || $input > 023818 && $input < 023821 || $input > 023828 && $input < 023831 || $input > 023836 && $input < 023841 || $input > 023849 && $input < 023851 || $input > 023858 && $input < 023861 || $input > 023868 && $input < 023871 || $input > 023878 && $input < 023881 || $input > 023886 && $input < 023951 || $input > 023959 && $input < 023961 || $input > 023966 && $input < 023971 || $input > 023977 && $input < 023981 || $input > 023986 && $input < 023991 || $input > 023998 && $input < 024011 || $input > 024015 && $input < 024021 || $input > 024026 && $input < 024031 || $input > 024038 && $input < 024041 || $input > 024049 && $input < 024051 || $input > 024059 && $input < 024061 || $input > 024066 && $input < 024071 || $input > 024079 && $input < 024081 || $input > 024087 && $input < 024091 || $input > 024098 && $input < 024101 || $input > 024107 && $input < 030011 || $input > 030019 && $input < 030021 || $input > 030029 && $input < 030031 || $input > 030039 && $input < 030041 || $input > 030047 && $input < 030051 || $input > 030058 && $input < 030061 || $input > 030069 && $input < 030071 || $input > 030079 && $input < 030081 || $input > 030089 && $input < 030091 || $input > 030099 && $input < 030101 || $input > 030109 && $input < 030111 || $input > 030119 && $input < 030121 || $input > 030128 && $input < 030131 || $input > 030149 && $input < 030151 || $input > 030153 && $input < 030161 || $input > 030168 && $input < 030171 || $input > 030177 && $input < 030181 || $input > 030188 && $input < 030191 || $input > 030198 && $input < 030201 || $input > 030207 && $input < 030211 || $input > 030218 && $input < 030221 || $input > 030222 && $input < 030231 || $input > 030239 && $input < 030241 || $input > 030247 && $input < 030251 || $input > 030256 && $input < 030301 || $input > 030309 && $input < 030311 || $input > 030319 && $input < 030321 || $input > 030329 && $input < 030331 || $input > 030337 && $input < 030341 || $input > 030343 && $input < 030351 || $input > 030358 && $input < 030361 || $input > 030368 && $input < 030371 || $input > 030377 && $input < 030381 || $input > 030384 && $input < 030391 || $input > 030398 && $input < 030401 || $input > 030408 && $input < 030411 || $input > 030414 && $input < 030421 || $input > 030429 && $input < 030431 || $input > 030438 && $input < 030441 || $input > 030448 && $input < 030451 || $input > 030457 && $input < 030461 || $input > 030467 && $input < 030471 || $input > 030476 && $input < 030481 || $input > 030484 && $input < 030491 || $input > 030495 && $input < 030501 || $input > 030508 && $input < 030551 || $input > 030556 && $input < 030561 || $input > 030565 && $input < 030571 || $input > 030577 && $input < 030581 || $input > 030584 && $input < 030591 || $input > 030596 && $input < 030601 || $input > 030608 && $input < 030611 || $input > 030619 && $input < 030621 || $input > 030629 && $input < 030631 || $input > 030634 && $input < 030641 || $input > 030642 && $input < 030645 || $input > 030647 && $input < 030651 || $input > 030658 && $input < 030661 || $input > 030669 && $input < 030671 || $input > 030679 && $input < 030681 || $input > 030689 && $input < 030691 || $input > 030698 && $input < 030701 || $input > 030709 && $input < 030711 || $input > 030719 && $input < 030771 || $input > 030777 && $input < 030781 || $input > 030789 && $input < 030791 || $input > 030796 && $input < 030801 || $input > 030806 && $input < 030811 || $input > 030819 && $input < 030821 || $input > 030829 && $input < 030831 || $input > 030837 && $input < 030841 || $input > 030845 && $input < 030851 || $input > 030859 && $input < 030861 || $input > 030866 && $input < 030871 || $input > 030874 && $input < 030881 || $input > 030887 && $input < 030891 || $input > 030897 && $input < 030901 || $input > 030905 && $input < 030911 || $input > 030917 && $input < 030921 || $input > 030929 && $input < 030931 || $input > 030939 && $input < 030941 || $input > 030946 && $input < 030951 || $input > 030956 && $input < 030961 || $input > 030969 && $input < 030971 || $input > 030971 && $input < 030981 || $input > 030987 && $input < 030991 || $input > 030998 && $input < 031011 || $input > 031016 && $input < 031021 || $input > 031025 && $input < 031031 || $input > 031034 && $input < 031041 || $input > 031046 && $input < 031051 || $input > 031059 && $input < 031061 || $input > 031069 && $input < 031071 || $input > 031074 && $input < 031081 || $input > 031088 && $input < 031091 || $input > 031098 && $input < 031101 || $input > 031109 && $input < 031111 || $input > 031115 && $input < 031121 || $input > 031126 && $input < 031131 || $input > 031137 && $input < 031141 || $input > 031149 && $input < 031151 || $input > 031159 && $input < 031161 || $input > 031169 && $input < 031171 || $input > 031179 && $input < 031181 || $input > 031187 && $input < 031191 || $input > 031197 && $input < 031201 || $input > 031208 && $input < 031211 || $input > 031217 && $input < 031221 || $input > 031229 && $input < 031231 || $input > 031236 && $input < 031241 || $input > 031249 && $input < 031251 || $input > 031258 && $input < 031261 || $input > 031267 && $input < 031271 || $input > 031279 && $input < 031281 || $input > 031289 && $input < 031291 || $input > 031299 && $input < 031301 || $input > 031303 && $input < 031305 || $input > 031309 && $input < 031311 || $input > 031318 && $input < 031321 || $input > 031329 && $input < 031331 || $input > 031334 && $input < 031401 || $input > 031409 && $input < 031411 || $input > 031416 && $input < 031421 || $input > 031429 && $input < 031431 || $input > 031433 && $input < 031441 || $input > 031446 && $input < 031451 || $input > 031457 && $input < 031461 || $input > 031467 && $input < 031471 || $input > 031478 && $input < 031481 || $input > 031485 && $input < 031491 || $input > 031496 && $input < 031501 || $input > 031509 && $input < 031511 || $input > 031515 && $input < 031517 || $input > 031519 && $input < 031521 || $input > 031528 && $input < 031531 || $input > 031539 && $input < 031541 || $input > 031543 && $input < 031551 || $input > 031556 && $input < 031561 || $input > 031566 && $input < 031571 || $input > 031575 && $input < 031581 || $input > 031585 && $input < 031591 || $input > 031598 && $input < 031601 || $input > 031606 && $input < 031611 || $input > 031615 && $input < 031621 || $input > 031629 && $input < 031631 || $input > 031634 && $input < 031641 || $input > 031648 && $input < 031651 || $input > 031655 && $input < 031661 || $input > 031669 && $input < 031671 || $input > 031673 && $input < 031681 || $input > 031685 && $input < 031691 || $input > 031697 && $input < 031701 || $input > 031704 && $input < 031711 || $input > 031719 && $input < 031721 || $input > 031726 && $input < 031731 || $input > 031739 && $input < 031741 || $input > 031749 && $input < 031751 || $input > 031759 && $input < 031761 || $input > 031764 && $input < 031771 || $input > 031779 && $input < 031781 || $input > 031789 && $input < 031791 || $input > 031793 && $input < 031801 || $input > 031809 && $input < 031811 || $input > 031818 && $input < 031821 || $input > 031828 && $input < 031831 || $input > 031839 && $input < 031841 || $input > 031849 && $input < 031851 || $input > 031856 && $input < 031861 || $input > 031868 && $input < 031871 || $input > 031879 && $input < 031881 || $input > 031884 && $input < 031891 || $input > 031895 && $input < 031901 || $input > 031909 && $input < 031911 || $input > 031918 && $input < 031921 || $input > 031926 && $input < 031931 || $input > 031936 && $input < 031941 || $input > 031949 && $input < 032011 || $input > 032019 && $input < 032021 || $input > 032024 && $input < 032031 || $input > 032035 && $input < 032041 || $input > 032049 && $input < 032051 || $input > 032056 && $input < 032061 || $input > 032068 && $input < 032071 || $input > 032079 && $input < 032081 || $input > 032089 && $input < 032091 || $input > 032099 && $input < 032101 || $input > 032109 && $input < 032111 || $input > 032116 && $input < 032121 || $input > 032127 && $input < 032131 || $input > 032138 && $input < 032141 || $input > 032149 && $input < 032151 || $input > 032159 && $input < 032161 || $input > 032168 && $input < 032171 || $input > 032174 && $input < 032251 || $input > 032258 && $input < 032261 || $input > 032267 && $input < 032271 || $input > 032275 && $input < 032281 || $input > 032285 && $input < 032291 || $input > 032296 && $input < 032301 || $input > 032309 && $input < 032311 || $input > 032319 && $input < 032321 || $input > 032329 && $input < 032331 || $input > 032339 && $input < 032341 || $input > 032349 && $input < 032351 || $input > 032359 && $input < 032361 || $input > 032369 && $input < 032371 || $input > 032378 && $input < 032381 || $input > 032389 && $input < 032391 || $input > 032396 && $input < 032401 || $input > 032405 && $input < 032411 || $input > 032415 && $input < 032421 || $input > 032429 && $input < 032431 || $input > 032437 && $input < 032441 || $input > 032449 && $input < 032451 || $input > 032459 && $input < 032461 || $input > 032469 && $input < 032471 || $input > 032475 && $input < 032481 || $input > 032489 && $input < 032491 || $input > 032499 && $input < 032501 || $input > 032507 && $input < 032511 || $input > 032514 && $input < 032521 || $input > 032526 && $input < 032531 || $input > 032539 && $input < 032541 || $input > 032547 && $input < 032551 || $input > 032556 && $input < 032561 || $input > 032568 && $input < 032571 || $input > 032579 && $input < 032581 || $input > 032585 && $input < 032591 || $input > 032597 && $input < 032601 || $input > 032609 && $input < 032611 || $input > 032613 && $input < 032621 || $input > 032625 && $input < 032701 || $input > 032709 && $input < 032711 || $input > 032719 && $input < 032721 || $input > 032729 && $input < 032731 || $input > 032737 && $input < 032741 || $input > 032749 && $input < 032751 || $input > 032758 && $input < 032761 || $input > 032769 && $input < 032771 || $input > 032778 && $input < 032781 || $input > 032787 && $input < 032791 || $input > 032799 && $input < 032801 || $input > 032804 && $input < 032811 || $input > 032814 && $input < 032851 || $input > 032856 && $input < 032861 || $input > 032868 && $input < 032871 || $input > 032877 && $input < 032881 || $input > 032886 && $input < 032891 || $input > 032899 && $input < 032901 || $input > 032905 && $input < 032911 || $input > 032918 && $input < 032921 || $input > 032929 && $input < 032931 || $input > 032936 && $input < 032941 || $input > 032949 && $input < 032951 || $input > 032955 && $input < 032961 || $input > 032968 && $input < 032971 || $input > 032978 && $input < 032981 || $input > 032988 && $input < 032991 || $input > 032998 && $input < 033011 || $input > 033015 && $input < 033021 || $input > 033029 && $input < 033031 || $input > 033038 && $input < 033041 || $input > 033049 && $input < 033051 || $input > 033056 && $input < 033061 || $input > 033068 && $input < 033071 || $input > 033079 && $input < 033081 || $input > 033086 && $input < 033091 || $input > 033094 && $input < 033101 || $input > 033107 && $input < 040011 || $input > 040012 && $input < 040021 || $input > 040023 && $input < 040031 || $input > 040039 && $input < 040041 || $input > 040043 && $input < 040051 || $input > 040059 && $input < 040061 || $input > 040069 && $input < 040071 || $input > 040074 && $input < 040081 || $input > 040081 && $input < 040091 || $input > 040096 && $input < 040101 || $input > 040107 && $input < 040111 || $input > 040119 && $input < 040121 || $input > 040129 && $input < 040131 || $input > 040136 && $input < 040141 || $input > 040147 && $input < 040151 || $input > 040157 && $input < 040161 || $input > 040166 && $input < 040171 || $input > 040179 && $input < 040181 || $input > 040185 && $input < 040191 || $input > 040199 && $input < 040201 || $input > 040208 && $input < 040211 || $input > 040219 && $input < 040221 || $input > 040223 && $input < 040231 || $input > 040238 && $input < 040241 || $input > 040247 && $input < 040251 || $input > 040257 && $input < 040261 || $input > 040269 && $input < 040271 || $input > 040278 && $input < 040281 || $input > 040289 && $input < 040291 || $input > 040298 && $input < 040301 || $input > 040309 && $input < 040311 || $input > 040317 && $input < 040321 || $input > 040328 && $input < 040331 || $input > 040337 && $input < 040341 || $input > 040349 && $input < 040351 || $input > 040354 && $input < 040361 || $input > 040367 && $input < 040371 || $input > 040378 && $input < 040381 || $input > 040386 && $input < 040391 || $input > 040396 && $input < 040401 || $input > 040409 && $input < 040411 || $input > 040415 && $input < 040421 || $input > 040429 && $input < 040431 || $input > 040439 && $input < 040441 || $input > 040444 && $input < 040501 || $input > 040509 && $input < 040511 || $input > 040514 && $input < 040521 || $input > 040526 && $input < 040531 || $input > 040532 && $input < 040541 || $input > 040548 && $input < 040551 || $input > 040558 && $input < 040561 || $input > 040568 && $input < 040571 || $input > 040576 && $input < 040581 || $input > 040589 && $input < 040591 || $input > 040595 && $input < 040651 || $input > 040659 && $input < 040661 || $input > 040667 && $input < 040671 || $input > 040679 && $input < 040681 || $input > 040684 && $input < 040691 || $input > 040698 && $input < 040701 || $input > 040708 && $input < 040711 || $input > 040719 && $input < 040721 || $input > 040729 && $input < 040731 || $input > 040736 && $input < 040741 || $input > 040749 && $input < 040751 || $input > 040759 && $input < 040761 || $input > 040767 && $input < 040771 || $input > 040779 && $input < 040781 || $input > 040787 && $input < 040791 || $input > 040799 && $input < 040801 || $input > 040807 && $input < 040811 || $input > 040814 && $input < 040821 || $input > 040829 && $input < 040831 || $input > 040835 && $input < 040841 || $input > 040847 && $input < 040851 || $input > 040854 && $input < 040861 || $input > 040867 && $input < 040871 || $input > 040874 && $input < 040881 || $input > 040889 && $input < 040891 || $input > 040896 && $input < 040901 || $input > 040906 && $input < 040911 || $input > 040917 && $input < 040921 || $input > 040929 && $input < 040931 || $input > 040939 && $input < 040941 || $input > 040946 && $input < 040951 || $input > 040956 && $input < 040961 || $input > 040969 && $input < 040971 || $input > 040975 && $input < 040981 || $input > 040989 && $input < 040991 || $input > 040999 && $input < 041011 || $input > 041018 && $input < 041021 || $input > 041028 && $input < 041031 || $input > 041039 && $input < 041041 || $input > 041049 && $input < 041051 || $input > 041055 && $input < 041061 || $input > 041068 && $input < 041071 || $input > 041079 && $input < 041081 || $input > 041089 && $input < 041091 || $input > 041097 && $input < 041101 || $input > 041109 && $input < 041111 || $input > 041118 && $input < 041121 || $input > 041128 && $input < 041201 || $input > 041209 && $input < 041211 || $input > 041219 && $input < 041221 || $input > 041229 && $input < 041231 || $input > 041239 && $input < 041241 || $input > 041249 && $input < 041251 || $input > 041257 && $input < 041261 || $input > 041267 && $input < 041271 || $input > 041277 && $input < 041281 || $input > 041283 && $input < 041291 || $input > 041299 && $input < 041301 || $input > 041309 && $input < 041311 || $input > 041319 && $input < 041321 || $input > 041329 && $input < 041331 || $input > 041337 && $input < 041341 || $input > 041348 && $input < 041351 || $input > 041356 && $input < 041361 || $input > 041368 && $input < 041371 || $input > 041378 && $input < 041381 || $input > 041388 && $input < 041391 || $input > 041398 && $input < 041401 || $input > 041403 && $input < 041405 || $input > 041408 && $input < 041411 || $input > 041418 && $input < 041421 || $input > 041425 && $input < 041431 || $input > 041438 && $input < 041441 || $input > 041449 && $input < 041451 || $input > 041459 && $input < 041461 || $input > 041469 && $input < 041471 || $input > 041479 && $input < 041481 || $input > 041486 && $input < 041491 || $input > 041494 && $input < 041501 || $input > 041507 && $input < 041511 || $input > 041517 && $input < 041521 || $input > 041529 && $input < 041531 || $input > 041539 && $input < 041541 || $input > 041549 && $input < 041551 || $input > 041558 && $input < 041561 || $input > 041567 && $input < 041571 || $input > 041573 && $input < 041581 || $input > 041581 && $input < 041651 || $input > 041658 && $input < 041661 || $input > 041665 && $input < 041671 || $input > 041678 && $input < 041681 || $input > 041686 && $input < 041691 || $input > 041696 && $input < 041701 || $input > 041708 && $input < 041711 || $input > 041719 && $input < 041721 || $input > 041729 && $input < 041731 || $input > 041739 && $input < 041741 || $input > 041746 && $input < 041751 || $input > 041759 && $input < 041761 || $input > 041762 && $input < 041771 || $input > 041779 && $input < 041781 || $input > 041789 && $input < 041791 || $input > 041799 && $input < 041801 || $input > 041809 && $input < 041811 || $input > 041817 && $input < 041821 || $input > 041823 && $input < 041831 || $input > 041839 && $input < 041901 || $input > 041909 && $input < 041911 || $input > 041919 && $input < 041921 || $input > 041929 && $input < 041931 || $input > 041939 && $input < 041941 || $input > 041944 && $input < 041951 || $input > 041958 && $input < 041961 || $input > 041969 && $input < 041971 || $input > 041976 && $input < 041981 || $input > 041988 && $input < 041991 || $input > 041994 && $input < 042011 || $input > 042018 && $input < 042021 || $input > 042028 && $input < 042031 || $input > 042039 && $input < 042041 || $input > 042047 && $input < 042051 || $input > 042056 && $input < 042061 || $input > 042067 && $input < 042071 || $input > 042079 && $input < 042081 || $input > 042089 && $input < 042091 || $input > 042099 && $input < 042101 || $input > 042107 && $input < 042111 || $input > 042116 && $input < 042121 || $input > 042126 && $input < 042131 || $input > 042138 && $input < 042141 || $input > 042149 && $input < 042151 || $input > 042159 && $input < 042161 || $input > 042169 && $input < 042171 || $input > 042179 && $input < 042181 || $input > 042186 && $input < 042191 || $input > 042196 && $input < 050011 || $input > 050019 && $input < 050021 || $input > 050029 && $input < 050031 || $input > 050038 && $input < 050041 || $input > 050048 && $input < 050051 || $input > 050052 && $input < 050061 || $input > 050068 && $input < 050071 || $input > 050072 && $input < 050081 || $input > 050089 && $input < 050091 || $input > 050099 && $input < 050101 || $input > 050108 && $input < 050111 || $input > 050114 && $input < 050121 || $input > 050129 && $input < 050131 || $input > 050137 && $input < 050141 || $input > 050143 && $input < 050151 || $input > 050159 && $input < 050161 || $input > 050164 && $input < 050171 || $input > 050179 && $input < 050181 || $input > 050189 && $input < 050191 || $input > 050198 && $input < 050201 || $input > 050208 && $input < 050211 || $input > 050219 && $input < 050221 || $input > 050229 && $input < 050231 || $input > 050239 && $input < 050251 || $input > 050256 && $input < 050261 || $input > 050268 && $input < 050271 || $input > 050278 && $input < 050281 || $input > 050288 && $input < 050291 || $input > 050298 && $input < 050301 || $input > 050309 && $input < 050311 || $input > 050319 && $input < 050321 || $input > 050327 && $input < 050331 || $input > 050337 && $input < 050341 || $input > 050349 && $input < 050351 || $input > 050355 && $input < 050361 || $input > 050369 && $input < 050371 || $input > 050378 && $input < 050381 || $input > 050388 && $input < 050451 || $input > 050457 && $input < 050461 || $input > 050468 && $input < 050471 || $input > 050475 && $input < 050481 || $input > 050488 && $input < 050491 || $input > 050497 && $input < 050501 || $input > 050507 && $input < 050511 || $input > 050515 && $input < 050521 || $input > 050528 && $input < 050531 || $input > 050539 && $input < 050541 || $input > 050544 && $input < 050551 || $input > 050559 && $input < 050561 || $input > 050568 && $input < 050571 || $input > 050579 && $input < 050581 || $input > 050584 && $input < 050586 || $input > 050589 && $input < 050591 || $input > 050598 && $input < 050651 || $input > 050659 && $input < 050661 || $input > 050664 && $input < 050671 || $input > 050677 && $input < 050681 || $input > 050689 && $input < 050691 || $input > 050696 && $input < 050701 || $input > 050701 && $input < 050703 || $input > 050703 && $input < 050705 || $input > 050707 && $input < 050711 || $input > 050719 && $input < 050721 || $input > 050729 && $input < 050731 || $input > 050738 && $input < 050741 || $input > 050742 && $input < 050751 || $input > 050753 && $input < 050761 || $input > 050763 && $input < 050771 || $input > 050779 && $input < 050781 || $input > 050789 && $input < 050791 || $input > 050798 && $input < 050801 || $input > 050805 && $input < 050811 || $input > 050815 && $input < 050821 || $input > 050827 && $input < 050831 || $input > 050833 && $input < 050841 || $input > 050848 && $input < 050851 || $input > 050859 && $input < 050861 || $input > 050867 && $input < 050871 || $input > 050876 && $input < 050881 || $input > 050886 && $input < 050891 || $input > 050899 && $input < 050901 || $input > 050909 && $input < 050911 || $input > 050919 && $input < 051011 || $input > 051018 && $input < 051021 || $input > 051029 && $input < 051031 || $input > 051039 && $input < 051041 || $input > 051049 && $input < 051051 || $input > 051054 && $input < 051061 || $input > 051065 && $input < 051071 || $input > 051079 && $input < 051081 || $input > 051088 && $input < 051091 || $input > 051098 && $input < 051101 || $input > 051108 && $input < 051111 || $input > 051116 && $input < 051121 || $input > 051126 && $input < 051131 || $input > 051135 && $input < 051141 || $input > 051149 && $input < 051151 || $input > 051159 && $input < 051161 || $input > 051169 && $input < 051171 || $input > 051177 && $input < 051181 || $input > 051188 && $input < 051191 || $input > 051199 && $input < 051201 || $input > 051207 && $input < 051211 || $input > 051214 && $input < 051221 || $input > 051226 && $input < 051231 || $input > 051239 && $input < 051241 || $input > 051247 && $input < 051251 || $input > 051254 && $input < 051261 || $input > 051266 && $input < 051271 || $input > 051274 && $input < 051281 || $input > 051286 && $input < 051291 || $input > 051298 && $input < 051301 || $input > 051304 && $input < 051311 || $input > 051319 && $input < 051321 || $input > 051326 && $input < 051331 || $input > 051335 && $input < 051341 || $input > 051349 && $input < 051351 || $input > 051358 && $input < 051361 || $input > 051369 && $input < 051371 || $input > 051379 && $input < 051381 || $input > 051385 && $input < 051391 || $input > 051399 && $input < 051401 || $input > 051407 && $input < 051411 || $input > 051419 && $input < 051421 || $input > 051427 && $input < 051431 || $input > 051435 && $input < 051441 || $input > 051449 && $input < 051451 || $input > 051459 && $input < 051461 || $input > 051469 && $input < 051471 || $input > 051478 && $input < 051481 || $input > 051489 && $input < 051491 || $input > 051498 && $input < 051501 || $input > 051505 && $input < 051511 || $input > 051515 && $input < 051521 || $input > 051529 && $input < 051531 || $input > 051539 && $input < 051541 || $input > 051545 && $input < 051551 || $input > 051559 && $input < 051561 || $input > 051569 && $input < 051571 || $input > 051577 && $input < 051581 || $input > 051587 && $input < 051591 || $input > 051599 && $input < 051601 || $input > 051605 && $input < 051701 || $input > 051708 && $input < 051711 || $input > 051718 && $input < 051721 || $input > 051729 && $input < 051731 || $input > 051738 && $input < 051741 || $input > 051742 && $input < 051744 || $input > 051749 && $input < 051751 || $input > 051759 && $input < 051761 || $input > 051769 && $input < 051771 || $input > 051779 && $input < 051781 || $input > 051789 && $input < 051791 || $input > 051796 && $input < 051801 || $input > 051804 && $input < 051811 || $input > 051818 && $input < 051821 || $input > 051829 && $input < 051831 || $input > 051836 && $input < 051841 || $input > 051846 && $input < 051851 || $input > 051859 && $input < 051861 || $input > 051869 && $input < 051871 || $input > 051874 && $input < 051881 || $input > 051887 && $input < 051891 || $input > 051899 && $input < 051901 || $input > 051909 && $input < 051911 || $input > 051919 && $input < 051921 || $input > 051929 && $input < 051931 || $input > 051938 && $input < 051941 || $input > 051942 && $input < 051951 || $input > 051957 && $input < 051961 || $input > 051968 && $input < 051971 || $input > 051979 && $input < 051981 || $input > 051986 && $input < 051991 || $input > 051999 && $input < 052011 || $input > 052019 && $input < 052021 || $input > 052026 && $input < 052031 || $input > 052036 && $input < 052041 || $input > 052047 && $input < 052051 || $input > 052054 && $input < 052061 || $input > 052069 && $input < 052071 || $input > 052078 && $input < 052081 || $input > 052084 && $input < 052091 || $input > 052097 && $input < 052102 || $input > 052105 && $input < 052151 || $input > 052159 && $input < 052161 || $input > 052168 && $input < 052171 || $input > 052178 && $input < 052181 || $input > 052186 && $input < 052191 || $input > 052199 && $input < 052201 || $input > 052208 && $input < 052211 || $input > 052218 && $input < 052221 || $input > 052229 && $input < 052231 || $input > 052239 && $input < 052241 || $input > 052249 && $input < 052251 || $input > 052259 && $input < 052261 || $input > 052269 && $input < 052271 || $input > 052279 && $input < 052281 || $input > 052287 && $input < 052291 || $input > 052299 && $input < 052301 || $input > 052309 && $input < 052311 || $input > 052316 && $input < 052321 || $input > 052329 && $input < 052331 || $input > 052337 && $input < 052341 || $input > 052348 && $input < 052351 || $input > 052359 && $input < 052361 || $input > 052369 && $input < 052371 || $input > 052378 && $input < 052381 || $input > 052389 && $input < 052391 || $input > 052396 && $input < 052401 || $input > 052409 && $input < 052411 || $input > 052418 && $input < 052421 || $input > 052427 && $input < 052431 || $input > 052439 && $input < 052441 || $input > 052444 && $input < 052451 || $input > 052459 && $input < 052461 || $input > 052469 && $input < 052471 || $input > 052473 && $input < 052481 || $input > 052489 && $input < 052491 || $input > 052499 && $input < 052501 || $input > 052509 && $input < 052511 || $input > 052518 && $input < 052521 || $input > 052529 && $input < 052531 || $input > 052536 && $input < 052541 || $input > 052549 && $input < 052551 || $input > 052559 && $input < 052561 || $input > 052567 && $input < 052571 || $input > 052579 && $input < 052581 || $input > 052586 && $input < 052591 || $input > 052598 && $input < 052601 || $input > 052608 && $input < 052611 || $input > 052619 && $input < 052621 || $input > 052628 && $input < 052631 || $input > 052639 && $input < 052641 || $input > 052649 && $input < 052651 || $input > 052659 && $input < 052662 || $input > 052663 && $input < 052751 || $input > 052759 && $input < 052761 || $input > 052768 && $input < 052771 || $input > 052779 && $input < 052781 || $input > 052787 && $input < 052821 || $input > 052829 && $input < 052831 || $input > 052839 && $input < 060011 || $input > 060016 && $input < 060021 || $input > 060029 && $input < 060031 || $input > 060033 && $input < 060041 || $input > 060044 && $input < 060051 || $input > 060057 && $input < 060061 || $input > 060061 && $input < 060071 || $input > 060075 && $input < 060101 || $input > 060106 && $input < 060109 || $input > 060109 && $input < 060111 || $input > 060119 && $input < 060121 || $input > 060129 && $input < 060131 || $input > 060139 && $input < 060141 || $input > 060144 && $input < 060151 || $input > 060157 && $input < 060201 || $input > 060209 && $input < 060211 || $input > 060217 && $input < 060221 || $input > 060228 && $input < 060231 || $input > 060239 && $input < 060241 || $input > 060249 && $input < 060251 || $input > 060259 && $input < 060261 || $input > 060269 && $input < 060271 || $input > 060279 && $input < 060281 || $input > 060289 && $input < 060291 || $input > 060293 && $input < 060301 || $input > 060308 && $input < 060311 || $input > 060319 && $input < 060321 || $input > 060325 && $input < 060331 || $input > 060339 && $input < 060341 || $input > 060346 && $input < 060351 || $input > 060355 && $input < 060361 || $input > 060369 && $input < 060371 || $input > 060379 && $input < 060381 || $input > 060382 && $input < 060391 || $input > 060399 && $input < 060401 || $input > 060406 && $input < 060451 || $input > 060459 && $input < 060461 || $input > 060468 && $input < 060471 || $input > 060476 && $input < 060481 || $input > 060485 && $input < 060491 || $input > 060495 && $input < 060501 || $input > 060509 && $input < 060511 || $input > 060515 && $input < 060521 || $input > 060525 && $input < 060531 || $input > 060537 && $input < 060541 || $input > 060543 && $input < 060551 || $input > 060555 && $input < 060561 || $input > 060569 && $input < 060571 || $input > 060578 && $input < 060581 || $input > 060589 && $input < 060591 || $input > 060598 && $input < 060601 || $input > 060609 && $input < 060611 || $input > 060617 && $input < 060621 || $input > 060629 && $input < 060631 || $input > 060639 && $input < 060641 || $input > 060649 && $input < 060651 || $input > 060656 && $input < 060661 || $input > 060669 && $input < 060751 || $input > 060758 && $input < 060761 || $input > 060768 && $input < 060771 || $input > 060777 && $input < 060781 || $input > 060787 && $input < 060791 || $input > 060798 && $input < 060801 || $input > 060805 && $input < 060811 || $input > 060816 && $input < 060821 || $input > 060828 && $input < 060831 || $input > 060839 && $input < 060841 || $input > 060849 && $input < 060851 || $input > 060859 && $input < 060861 || $input > 060869 && $input < 060871 || $input > 060879 && $input < 060881 || $input > 060889 && $input < 060891 || $input > 060899 && $input < 060901 || $input > 060909 && $input < 060911 || $input > 060916 && $input < 060921 || $input > 060928 && $input < 060931 || $input > 060939 && $input < 060941 || $input > 060948 && $input < 060951 || $input > 060956 && $input < 060961 || $input > 060969 && $input < 060971 || $input > 060978 && $input < 060981 || $input > 060989 && $input < 060991 || $input > 060998 && $input < 061011 || $input > 061019 && $input < 061021 || $input > 061028 && $input < 061031 || $input > 061039 && $input < 061041 || $input > 061048 && $input < 061051 || $input > 061053 && $input < 061055 || $input > 061055 && $input < 061061 || $input > 061066 && $input < 061071 || $input > 061079 && $input < 061081 || $input > 061089 && $input < 061091 || $input > 061099 && $input < 061101 || $input > 061109 && $input < 061111 || $input > 061119 && $input < 061121 || $input > 061129 && $input < 061131 || $input > 061135 && $input < 061141 || $input > 061145 && $input < 061151 || $input > 061159 && $input < 061161 || $input > 061166 && $input < 061171 || $input > 061178 && $input < 061181 || $input > 061185 && $input < 061191 || $input > 061196 && $input < 061201 || $input > 061209 && $input < 061211 || $input > 061213 && $input < 061215 || $input > 061219 && $input < 061221 || $input > 061227 && $input < 061231 || $input > 061239 && $input < 061301 || $input > 061309 && $input < 061311 || $input > 061319 && $input < 061321 || $input > 061329 && $input < 061331 || $input > 061334 && $input < 061341 || $input > 061346 && $input < 061348 || $input > 061349 && $input < 061351 || $input > 061359 && $input < 061361 || $input > 061369 && $input < 061371 || $input > 061378 && $input < 061381 || $input > 061389 && $input < 061391 || $input > 061398 && $input < 061401 || $input > 061409 && $input < 061411 || $input > 061418 && $input < 061421 || $input > 061429 && $input < 061431 || $input > 061434 && $input < 061441 || $input > 061449 && $input < 061451 || $input > 061452 && $input < 061461 || $input > 061468 && $input < 061471 || $input > 061478 && $input < 061481 || $input > 061488 && $input < 061491 || $input > 061495 && $input < 061501 || $input > 061509 && $input < 061511 || $input > 061515 && $input < 061521 || $input > 061528 && $input < 061531 || $input > 061539 && $input < 061541 || $input > 061545 && $input < 061551 || $input > 061557 && $input < 061561 || $input > 061569 && $input < 061571 || $input > 061576 && $input < 061581 || $input > 061587 && $input < 061591 || $input > 061599 && $input < 061601 || $input > 061606 && $input < 061611 || $input > 061617 && $input < 061621 || $input > 061629 && $input < 061631 || $input > 061634 && $input < 061641 || $input > 061649 && $input < 061651 || $input > 061654 && $input < 061661 || $input > 061668 && $input < 061671 || $input > 061679 && $input < 061681 || $input > 061683 && $input < 061691 || $input > 061699 && $input < 061701 || $input > 061709 && $input < 061711 || $input > 061717 && $input < 061721 || $input > 061729 && $input < 061731 || $input > 061738 && $input < 061741 || $input > 061746 && $input < 061751 || $input > 061756 && $input < 061761 || $input > 061765 && $input < 061771 || $input > 061773 && $input < 061781 || $input > 061787 && $input < 061791 || $input > 061793 && $input < 061901 || $input > 061906 && $input < 061911 || $input > 061916 && $input < 061921 || $input > 061928 && $input < 061931 || $input > 061936 && $input < 061941 || $input > 061949 && $input < 061951 || $input > 061957 && $input < 061961 || $input > 061967 && $input < 061971 || $input > 061979 && $input < 061981 || $input > 061987 && $input < 061991 || $input > 061999 && $input < 062011 || $input > 062019 && $input < 062021 || $input > 062027 && $input < 062031 || $input > 062037 && $input < 062041 || $input > 062049 && $input < 062051 || $input > 062059 && $input < 062061 || $input > 062069 && $input < 062071 || $input > 062079 && $input < 062081 || $input > 062089 && $input < 062091 || $input > 062092 && $input < 062101 || $input > 062102 && $input < 062111 || $input > 062112 && $input < 062131 || $input > 062137 && $input < 062141 || $input > 062143 && $input < 062151 || $input > 062159 && $input < 062161 || $input > 062161 && $input < 062163 || $input > 062164 && $input < 062171 || $input > 062178 && $input < 062181 || $input > 062189 && $input < 062191 || $input > 062199 && $input < 062201 || $input > 062209 && $input < 062211 || $input > 062219 && $input < 062223 || $input > 062229 && $input < 062231 || $input > 062239 && $input < 062241 || $input > 062249 && $input < 062251 || $input > 062257 && $input < 062259 || $input > 062259 && $input < 062261 || $input > 062269 && $input < 062271 || $input > 062279 && $input < 062281 || $input > 062289 && $input < 062291 || $input > 062299 && $input < 062301 || $input > 062309 && $input < 062311 || $input > 062317 && $input < 062321 || $input > 062326 && $input < 062331 || $input > 062339 && $input < 062341 || $input > 062346 && $input < 062351 || $input > 062359 && $input < 062361 || $input > 062369 && $input < 062371 || $input > 062379 && $input < 062381 || $input > 062388 && $input < 062391 || $input > 062397 && $input < 062401 || $input > 062401 && $input < 070000 || $input > 070001 && $input < 075100 || $input > 075101 && $input < 077005 || $input > 077006 && $input < 077010 || $input > 077010 && $input < 077015 || $input > 077017 && $input < 077020 || $input > 077020 && $input < 077025 || $input > 077025 && $input < 077030 || $input > 077033 && $input < 077035 || $input > 077042 && $input < 077045 || $input > 077046 && $input < 077050 || $input > 077053 && $input < 077055 || $input > 077056 && $input < 077060 || $input > 077062 && $input < 077065 || $input > 077068 && $input < 077070 || $input > 077071 && $input < 077075 || $input > 077078 && $input < 077080 || $input > 077080 && $input < 077085 || $input > 077086 && $input < 077090 || $input > 077091 && $input < 077095 || $input > 077097 && $input < 077100 || $input > 077107 && $input < 077110 || $input > 077111 && $input < 077115 || $input > 077118 && $input < 077120 || $input > 077120 && $input < 077125 || $input > 077131 && $input < 077135 || $input > 077135 && $input < 077140 || $input > 077145 && $input < 077150 || $input > 077152 && $input < 077155 || $input > 077158 && $input < 077160 || $input > 077160 && $input < 077165 || $input > 077168 && $input < 077170 || $input > 077170 && $input < 077175 || $input > 077177 && $input < 077180 || $input > 077181 && $input < 077185 || $input > 077187 && $input < 077190 || $input > 077191 && $input < 080011 || $input > 080018 && $input < 080021 || $input > 080029 && $input < 080031 || $input > 080039 && $input < 080041 || $input > 080047 && $input < 080049 || $input > 080049 && $input < 080051 || $input > 080055 && $input < 080061 || $input > 080069 && $input < 080071 || $input > 080079 && $input < 080081 || $input > 080089 && $input < 080091 || $input > 080096 && $input < 080101 || $input > 080106 && $input < 080111 || $input > 080116 && $input < 080121 || $input > 080129 && $input < 080131 || $input > 080139 && $input < 080141 || $input > 080141 && $input < 080151 || $input > 080159 && $input < 080161 || $input > 080169 && $input < 080181 || $input > 080187 && $input < 080191 || $input > 080199 && $input < 080201 || $input > 080203 && $input < 080205 || $input > 080207 && $input < 080211 || $input > 080215 && $input < 080232 || $input > 080235 && $input < 080241 || $input > 080244 && $input < 080246 || $input > 080246 && $input < 080248 || $input > 080249 && $input < 080251 || $input > 080259 && $input < 080261 || $input > 080263 && $input < 080265 || $input > 080266 && $input < 080271 || $input > 080279 && $input < 080291 || $input > 080299 && $input < 080301 || $input > 080309 && $input < 080311 || $input > 080319 && $input < 080321 || $input > 080327 && $input < 080331 || $input > 080339 && $input < 080341 || $input > 080344 && $input < 080347 || $input > 080347 && $input < 080349 || $input > 080349 && $input < 080351 || $input > 080351 && $input < 080353 || $input > 080353 && $input < 080355 || $input > 080355 && $input < 080361 || $input > 080366 && $input < 080371 || $input > 080376 && $input < 080381 || $input > 080389 && $input < 080391 || $input > 080399 && $input < 080401 || $input > 080406 && $input < 080411 || $input > 080415 && $input < 080421 || $input > 080429 && $input < 080431 || $input > 080438 && $input < 080441 || $input > 080449 && $input < 080451 || $input > 080459 && $input < 080461 || $input > 080461 && $input < 080471 || $input > 080479 && $input < 080481 || $input > 080489 && $input < 080491 || $input > 080498 && $input < 080501 || $input > 080509 && $input < 080511 || $input > 080511 && $input < 080521 || $input > 080529 && $input < 080531 || $input > 080539 && $input < 080541 || $input > 080544 && $input < 080549 || $input > 080549 && $input < 080551 || $input > 080559 && $input < 080561 || $input > 080569 && $input < 080571 || $input > 080579 && $input < 080581 || $input > 080583 && $input < 080591 || $input > 080599 && $input < 080601 || $input > 080606 && $input < 080611 || $input > 080619 && $input < 080621 || $input > 080629 && $input < 080631 || $input > 080632 && $input < 080641 || $input > 080649 && $input < 080651 || $input > 080659 && $input < 080661 || $input > 080669 && $input < 080671 || $input > 080679 && $input < 080681 || $input > 080683 && $input < 080691 || $input > 080699 && $input < 080701 || $input > 080702 && $input < 080711 || $input > 080719 && $input < 080721 || $input > 080726 && $input < 080731 || $input > 080734 && $input < 080841 || $input > 080841 && $input < 080851 || $input > 080852 && $input < 080861 || $input > 080861 && $input < 080881 || $input > 080882 && $input < 085100 || $input > 085103 && $input < 085200 || $input > 085203 && $input < 087005 || $input > 087008 && $input < 087010 || $input > 087013 && $input < 087015 || $input > 087016 && $input < 087020 || $input > 087024 && $input < 087026 || $input > 087027 && $input < 087030 || $input > 087033 && $input < 087035 || $input > 087038 && $input < 087040 || $input > 087048 && $input < 087050 || $input > 087051 && $input < 087055 || $input > 087064 && $input < 087066 || $input > 087066 && $input < 087070 || $input > 087071 && $input < 087075 || $input > 087078 && $input < 087080 || $input > 087082 && $input < 087085 || $input > 087088 && $input < 087090 || $input > 087092 && $input < 087095 || $input > 087098 && $input < 087100 || $input > 087103 && $input < 087105 || $input > 087106 && $input < 087110 || $input > 087110 && $input < 087115 || $input > 087117 && $input < 087120 || $input > 087122 && $input < 087125 || $input > 087134 && $input < 087136 || $input > 087136 && $input < 087140 || $input > 087144 && $input < 087146 || $input > 087146 && $input < 087150 || $input > 087153 && $input < 087155 || $input > 087157 && $input < 087160 || $input > 087160 && $input < 087165 || $input > 087165 && $input < 087170 || $input > 087171 && $input < 087175 || $input > 087177 && $input < 087180 || $input > 087181 && $input < 087185 || $input > 087187 && $input < 087190 || $input > 087193 && $input < 087195 || $input > 087198 && $input < 087200 || $input > 087203 && $input < 087205 || $input > 087207 && $input < 087210 || $input > 087210 && $input < 087215 || $input > 087218 && $input < 087220 || $input > 087222 && $input < 087225 || $input > 087226 && $input < 087230 || $input > 087234 && $input < 087236 || $input > 087238 && $input < 087240 || $input > 087240 && $input < 087245 || $input > 087246 && $input < 087250 || $input > 087254 && $input < 087256 || $input > 087258 && $input < 087260 || $input > 087261 && $input < 100001 || $input > 100005 && $input < 100008 || $input > 100012 && $input < 100015 || $input > 100019 && $input < 100022 || $input > 100025 && $input < 100028 || $input > 100032 && $input < 100035 || $input > 100039 && $input < 100042 || $input > 100046 && $input < 100049 || $input > 100054 && $input < 100057 || $input > 100062 && $input < 100065 || $input > 100067 && $input < 100070 || $input > 100081 && $input < 100084 || $input > 100088 && $input < 100091 || $input > 100093 && $input < 100096 || $input > 100101 && $input < 100104 || $input > 100107 && $input < 100110 || $input > 100114 && $input < 100117 || $input > 100122 && $input < 100125 || $input > 100129 && $input < 100132 || $input > 100137 && $input < 100140 || $input > 100145 && $input < 100147 || $input > 100151 && $input < 100154 || $input > 100159 && $input < 100162 || $input > 100166 && $input < 100169 || $input > 100173 && $input < 100176 || $input > 100181 && $input < 100184 || $input > 100190 && $input < 100192 || $input > 100197 && $input < 100200 || $input > 100205 && $input < 100208 || $input > 100209 && $input < 100211 || $input > 100213 && $input < 100215 || $input > 100218 && $input < 100221 || $input > 100226 && $input < 100229 || $input > 100233 && $input < 100236 || $input > 100248 && $input < 100251 || $input > 100256 && $input < 100259 || $input > 100264 && $input < 100267 || $input > 100272 && $input < 100275 || $input > 100280 && $input < 100283 || $input > 100289 && $input < 100291 || $input > 100295 && $input < 100298 || $input > 100302 && $input < 100304 || $input > 100307 && $input < 100310 || $input > 100312 && $input < 100315 || $input > 100320 && $input < 100323 || $input > 100326 && $input < 100329 || $input > 100332 && $input < 100335 || $input > 100338 && $input < 100341 || $input > 100346 && $input < 100349 || $input > 100353 && $input < 100356 || $input > 100361 && $input < 100364 || $input > 100367 && $input < 100370 || $input > 100373 && $input < 100376 || $input > 100379 && $input < 100382 || $input > 100385 && $input < 100388 || $input > 100392 && $input < 100395 || $input > 100400 && $input < 100403 || $input > 100406 && $input < 100409 || $input > 100414 && $input < 100416 || $input > 100421 && $input < 100424 || $input > 100427 && $input < 100430 || $input > 100434 && $input < 100437 || $input > 100441 && $input < 100444 || $input > 100449 && $input < 100452 || $input > 100458 && $input < 100461 || $input > 100470 && $input < 100473 || $input > 100478 && $input < 100481 || $input > 100486 && $input < 100489 || $input > 100494 && $input < 100496 || $input > 100503 && $input < 100506 || $input > 100507 && $input < 100509 || $input > 100511 && $input < 100514 || $input > 100517 && $input < 100519 || $input > 100522 && $input < 100525 || $input > 100529 && $input < 100531 || $input > 100534 && $input < 100537 || $input > 100540 && $input < 100543 || $input > 100548 && $input < 100550 || $input > 100555 && $input < 100558 || $input > 100562 && $input < 100565 || $input > 100570 && $input < 100573 || $input > 100578 && $input < 100581 || $input > 100585 && $input < 105100 || $input > 105100 && $input < 105200 || $input > 105204 && $input < 105250 || $input > 105250 && $input < 105300 || $input > 105301 && $input < 105400 || $input > 105410 && $input < 105500 || $input > 105500 && $input < 105550 || $input > 105550 && $input < 105600 || $input > 105600 && $input < 105700 || $input > 105704 && $input < 105800 || $input > 105801 && $input < 105900 || $input > 105900 && $input < 106100 || $input > 106100 && $input < 106200 || $input > 106202 && $input < 106300 || $input > 106316 && $input < 106400 || $input > 106400 && $input < 107005 || $input > 107007 && $input < 107010 || $input > 107013 && $input < 107015 || $input > 107016 && $input < 107020 || $input > 107031 && $input < 107035 || $input > 107043 && $input < 107045 || $input > 107047 && $input < 107050 || $input > 107051 && $input < 107055 || $input > 107066 && $input < 107070 || $input > 107072 && $input < 107075 || $input > 107077 && $input < 107080 || $input > 107080 && $input < 107082 || $input > 107084 && $input < 107086 || $input > 107088 && $input < 107090 || $input > 107090 && $input < 107100 || $input > 107103 && $input < 107105 || $input > 107105 && $input < 107110 || $input > 107116 && $input < 107120 || $input > 107121 && $input < 107125 || $input > 107130 && $input < 107140 || $input > 107144 && $input < 107146 || $input > 107146 && $input < 107150 || $input > 107152 && $input < 107155 || $input > 107156 && $input < 107160 || $input > 107160 && $input < 107165 || $input > 107167 && $input < 107170 || $input > 107173 && $input < 107175 || $input > 107177 && $input < 107180 || $input > 107180 && $input < 107185 || $input > 107194 && $input < 107196 || $input > 107199 && $input < 107201 || $input > 107203 && $input < 107210 || $input > 107214 && $input < 107216 || $input > 107217 && $input < 107220 || $input > 107224 && $input < 107226 || $input > 107226 && $input < 107230 || $input > 107234 && $input < 107236 || $input > 107236 && $input < 107240 || $input > 107248 && $input < 107250 || $input > 107262 && $input < 107265 || $input > 107269 && $input < 107271 || $input > 107272 && $input < 107275 || $input > 107278 && $input < 107280 || $input > 107280 && $input < 107285 || $input > 107288 && $input < 107290 || $input > 107294 && $input < 107296 || $input > 107296 && $input < 107300 || $input > 107302 && $input < 107305 || $input > 107314 && $input < 107316 || $input > 107316 && $input < 107320 || $input > 107324 && $input < 107326 || $input > 107326 && $input < 107330 || $input > 107333 && $input < 107335 || $input > 107338 && $input < 107340 || $input > 107343 && $input < 107345 || $input > 107347 && $input < 107350 || $input > 107352 && $input < 107355 || $input > 107359 && $input < 107361 || $input > 107365 && $input < 107375 || $input > 107379 && $input < 107381 || $input > 107384 && $input < 107386 || $input > 107389 && $input < 107395 || $input > 107403 && $input < 107405 || $input > 107408 && $input < 107410 || $input > 107414 && $input < 107416 || $input > 107419 && $input < 107421 || $input > 107421 && $input < 107425 || $input > 107428 && $input < 107430 || $input > 107434 && $input < 107436 || $input > 107438 && $input < 107440 || $input > 107444 && $input < 107446 || $input > 107449 && $input < 107451 || $input > 107452 && $input < 107460 || $input > 107464 && $input < 107466 || $input > 107469 && $input < 107471 || $input > 107471 && $input < 107475 || $input > 107477 && $input < 107480 || $input > 107483 && $input < 107485 || $input > 107489 && $input < 107491 || $input > 107492 && $input < 107495 || $input > 107499 && $input < 107501 || $input > 107505 && $input < 107510 || $input > 107510 && $input < 107515 || $input > 107519 && $input < 107521 || $input > 107521 && $input < 107525 || $input > 107530 && $input < 107535 || $input > 107539 && $input < 107541 || $input > 107543 && $input < 107545 || $input > 107546 && $input < 107550 || $input > 107554 && $input < 107556 || $input > 107556 && $input < 107560 || $input > 107562 && $input < 107565 || $input > 107569 && $input < 107571 || $input > 107571 && $input < 107575 || $input > 107577 && $input < 107580 || $input > 107581 && $input < 107585 || $input > 107587 && $input < 107590 || $input > 107593 && $input < 107595 || $input > 107604 && $input < 107606 || $input > 107606 && $input < 107610 || $input > 107612 && $input < 107615 || $input > 107618 && $input < 107620 || $input > 107624 && $input < 107626 || $input > 107629 && $input < 107631 || $input > 107634 && $input < 107636 || $input > 107637 && $input < 107640 || $input > 107641 && $input < 107645 || $input > 107645 && $input < 107650 || $input > 107657 && $input < 110001 || $input > 110006 && $input < 110009 || $input > 110026 && $input < 110028 || $input > 110033 && $input < 110036 || $input > 110036 && $input < 110039 || $input > 110044 && $input < 110046 || $input > 110055 && $input < 110057 || $input > 110063 && $input < 110065 || $input > 110069 && $input < 110072 || $input > 110075 && $input < 110078 || $input > 110081 && $input < 110085 || $input > 110090 && $input < 110093 || $input > 110098 && $input < 110101 || $input > 110104 && $input < 110107 || $input > 110114 && $input < 110117 || $input > 110121 && $input < 110124 || $input > 110126 && $input < 110128 || $input > 110129 && $input < 110132 || $input > 110135 && $input < 110138 || $input > 110144 && $input < 110147 || $input > 110155 && $input < 110157 || $input > 110168 && $input < 110171 || $input > 110177 && $input < 110180 || $input > 110203 && $input < 110206 || $input > 110211 && $input < 110214 || $input > 110219 && $input < 110221 || $input > 110229 && $input < 110231 || $input > 110236 && $input < 110240 || $input > 110247 && $input < 110250 || $input > 110260 && $input < 110263 || $input > 110277 && $input < 110280 || $input > 110288 && $input < 110291 || $input > 110308 && $input < 110310 || $input > 110318 && $input < 110320 || $input > 110326 && $input < 110328 || $input > 110332 && $input < 110335 || $input > 110341 && $input < 110343 || $input > 110352 && $input < 110354 || $input > 110359 && $input < 110362 || $input > 110381 && $input < 110384 || $input > 110390 && $input < 110392 || $input > 110401 && $input < 110403 || $input > 110410 && $input < 110412 || $input > 110416 && $input < 110418 || $input > 110421 && $input < 110423 || $input > 110426 && $input < 110429 || $input > 110435 && $input < 110437 || $input > 110442 && $input < 115100 || $input > 115101 && $input < 115200 || $input > 115206 && $input < 115300 || $input > 115301 && $input < 115400 || $input > 115404 && $input < 115500 || $input > 115504 && $input < 117005 || $input > 117012 && $input < 117025 || $input > 117028 && $input < 117030 || $input > 117038 && $input < 117040 || $input > 117042 && $input < 117045 || $input > 117049 && $input < 117051 || $input > 117053 && $input < 117055 || $input > 117059 && $input < 117061 || $input > 117062 && $input < 117065 || $input > 117069 && $input < 117071 || $input > 117074 && $input < 117076 || $input > 117076 && $input < 117080 || $input > 117084 && $input < 117086 || $input > 117087 && $input < 117090 || $input > 117094 && $input < 117096 || $input > 117099 && $input < 117101 || $input > 117103 && $input < 117110 || $input > 117118 && $input < 117120 || $input > 117124 && $input < 117126 || $input > 117128 && $input < 117130 || $input > 117133 && $input < 117135 || $input > 117136 && $input < 117140 || $input > 117141 && $input < 117145 || $input > 117149 && $input < 117151 || $input > 117159 && $input < 117161 || $input > 117162 && $input < 117165 || $input > 117165 && $input < 117170 || $input > 117174 && $input < 117176 || $input > 117179 && $input < 117181 || $input > 117182 && $input < 117190 || $input > 117192 && $input < 117195 || $input > 117199 && $input < 117201 || $input > 117204 && $input < 117206 || $input > 117207 && $input < 117210 || $input > 117210 && $input < 117220 || $input > 117224 && $input < 117226 || $input > 117227 && $input < 117230 || $input > 117234 && $input < 117236 || $input > 117242 && $input < 117245 || $input > 117248 && $input < 117250 || $input > 117259 && $input < 117261 || $input > 117269 && $input < 117271 || $input > 117273 && $input < 117275 || $input > 117279 && $input < 117281 || $input > 117283 && $input < 117285 || $input > 117289 && $input < 117291 || $input > 117291 && $input < 117295 || $input > 117299 && $input < 117301 || $input > 117302 && $input < 117305 || $input > 117314 && $input < 117316 || $input > 117319 && $input < 117330 || $input > 117334 && $input < 117336 || $input > 117339 && $input < 117341 || $input > 117344 && $input < 117346 || $input > 117346 && $input < 117350 || $input > 117352 && $input < 117355 || $input > 117357 && $input < 117360 || $input > 117366 && $input < 117370 || $input > 117370 && $input < 117375 || $input > 117376 && $input < 117380 || $input > 117392 && $input < 117395 || $input > 117399 && $input < 117401 || $input > 117402 && $input < 117405 || $input > 117405 && $input < 117410 || $input > 117414 && $input < 117416 || $input > 117419 && $input < 117421 || $input > 117424 && $input < 117426 || $input > 117426 && $input < 117430 || $input > 117432 && $input < 117435 || $input > 117439 && $input < 117441 || $input > 117451 && $input < 117455 || $input > 117459 && $input < 117461 || $input > 117468 && $input < 117470 || $input > 117474 && $input < 117476 || $input > 117477 && $input < 117480 || $input > 117484 && $input < 117486 || $input > 117486 && $input < 117490 || $input > 117491 && $input < 117495 || $input > 117499 && $input < 117501 || $input > 117501 && $input < 117505 || $input > 117509 && $input < 117511 || $input > 117512 && $input < 117515 || $input > 117517 && $input < 117520 || $input > 117524 && $input < 117526 || $input > 117529 && $input < 117531 || $input > 117531 && $input < 117535 || $input > 117538 && $input < 117540 || $input > 117543 && $input < 117545 || $input > 117546 && $input < 117550 || $input > 117559 && $input < 117561 || $input > 117564 && $input < 117566 || $input > 117569 && $input < 117575 || $input > 117584 && $input < 117586 || $input > 117586 && $input < 117590 || $input > 117594 && $input < 117596 || $input > 117597 && $input < 117600 || $input > 117604 && $input < 117606 || $input > 117608 && $input < 117610 || $input > 117614 && $input < 117616 || $input > 117617 && $input < 117620 || $input > 117628 && $input < 117630 || $input > 117631 && $input < 117635 || $input > 117636 && $input < 117640 || $input > 117644 && $input < 117646 || $input > 117654 && $input < 117656 || $input > 117656 && $input < 117660 || $input > 117661 && $input < 117665 || $input > 117669 && $input < 117671 || $input > 117672 && $input < 117675 || $input > 117679 && $input < 117681 || $input > 117682 && $input < 117685 || $input > 117689 && $input < 117691 || $input > 117691 && $input < 117695 || $input > 117699 && $input < 117701 || $input > 117704 && $input < 117706 || $input > 117706 && $input < 117710 || $input > 117711 && $input < 117715 || $input > 117719 && $input < 117721 || $input > 117723 && $input < 117725 || $input > 117729 && $input < 117731 || $input > 117731 && $input < 117735 || $input > 117736 && $input < 117740 || $input > 117744 && $input < 117746 || $input > 117748 && $input < 117750 || $input > 117759 && $input < 117761 || $input > 117764 && $input < 117766 || $input > 117769 && $input < 117771 || $input > 117773 && $input < 117780 || $input > 117784 && $input < 117786 || $input > 117786 && $input < 117790 || $input > 117799 && $input < 117801 || $input > 117809 && $input < 117811 || $input > 117813 && $input < 117815 || $input > 117819 && $input < 117821 || $input > 117824 && $input < 117826 || $input > 117829 && $input < 117831 || $input > 117834 && $input < 117836 || $input > 117837 && $input < 117840 || $input > 117843 && $input < 120001 || $input > 120006 && $input < 120009 || $input > 120014 && $input < 120017 || $input > 120021 && $input < 120024 || $input > 120026 && $input < 120029 || $input > 120033 && $input < 120036 || $input > 120040 && $input < 120043 || $input > 120046 && $input < 120049 || $input > 120049 && $input < 120051 || $input > 120052 && $input < 120055 || $input > 120055 && $input < 120057 || $input > 120058 && $input < 120061 || $input > 120064 && $input < 120067 || $input > 120069 && $input < 120072 || $input > 120077 && $input < 120080 || $input > 120083 && $input < 120086 || $input > 120089 && $input < 120092 || $input > 120094 && $input < 120097 || $input > 120099 && $input < 120103 || $input > 120107 && $input < 120110 || $input > 120115 && $input < 120118 || $input > 120121 && $input < 120124 || $input > 120127 && $input < 120130 || $input > 120133 && $input < 120136 || $input > 120140 && $input < 120143 || $input > 120145 && $input < 120148 || $input > 120151 && $input < 120154 || $input > 120159 && $input < 120162 || $input > 120164 && $input < 120167 || $input > 120172 && $input < 120174 || $input > 120178 && $input < 120181 || $input > 120184 && $input < 120187 || $input > 120191 && $input < 120194 || $input > 120197 && $input < 120200 || $input > 120204 && $input < 120207 || $input > 120209 && $input < 120212 || $input > 120214 && $input < 120217 || $input > 120219 && $input < 120222 || $input > 120226 && $input < 120229 || $input > 120231 && $input < 120234 || $input > 120238 && $input < 120241 || $input > 120243 && $input < 120246 || $input > 120248 && $input < 120251 || $input > 120254 && $input < 120257 || $input > 120257 && $input < 120260 || $input > 120262 && $input < 120265 || $input > 120267 && $input < 120271 || $input > 120274 && $input < 120277 || $input > 120282 && $input < 125100 || $input > 125109 && $input < 125200 || $input > 125201 && $input < 125300 || $input > 125300 && $input < 127005 || $input > 127009 && $input < 127011 || $input > 127011 && $input < 127015 || $input > 127018 && $input < 127020 || $input > 127020 && $input < 127025 || $input > 127029 && $input < 127031 || $input > 127039 && $input < 127041 || $input > 127044 && $input < 127046 || $input > 127049 && $input < 127055 || $input > 127059 && $input < 127061 || $input > 127063 && $input < 127065 || $input > 127066 && $input < 127070 || $input > 127070 && $input < 127075 || $input > 127079 && $input < 127081 || $input > 127084 && $input < 127086 || $input > 127086 && $input < 127090 || $input > 127092 && $input < 127095 || $input > 127099 && $input < 127101 || $input > 127102 && $input < 127105 || $input > 127114 && $input < 127116 || $input > 127117 && $input < 127120 || $input > 127124 && $input < 127126 || $input > 127126 && $input < 127130 || $input > 127139 && $input < 127141 || $input > 127141 && $input < 127145 || $input > 127154 && $input < 127156 || $input > 127158 && $input < 127160 || $input > 127164 && $input < 127166 || $input > 127167 && $input < 127170 || $input > 127174 && $input < 127176 || $input > 127176 && $input < 127180 || $input > 127198 && $input < 127200 || $input > 127204 && $input < 127206 || $input > 127206 && $input < 127210 || $input > 127214 && $input < 127216 || $input > 127219 && $input < 127221 || $input > 127224 && $input < 127226 || $input > 127229 && $input < 127231 || $input > 127233 && $input < 127240 || $input > 127242 && $input < 127245 || $input > 127246 && $input < 127250 || $input > 127251 && $input < 127255 || $input > 127258 && $input < 127260 || $input > 127264 && $input < 127266 || $input > 127268 && $input < 127270 || $input > 127274 && $input < 127276 || $input > 127276 && $input < 127280 || $input > 127284 && $input < 127286 || $input > 127287 && $input < 127290 || $input > 127291 && $input < 127295 || $input > 127299 && $input < 127301 || $input > 127304 && $input < 127306 || $input > 127307 && $input < 127315 || $input > 127316 && $input < 127320 || $input > 127323 && $input < 127325 || $input > 127327 && $input < 127330 || $input > 127332 && $input < 127335 || $input > 127339 && $input < 127341 || $input > 127344 && $input < 127346 || $input > 127349 && $input < 127355 || $input > 127359 && $input < 127361 || $input > 127364 && $input < 127366 || $input > 127367 && $input < 127375 || $input > 127382 && $input < 127385 || $input > 127387 && $input < 127390 || $input > 127399 && $input < 127401 || $input > 127404 && $input < 127406 || $input > 127406 && $input < 127410 || $input > 127411 && $input < 127415 || $input > 127424 && $input < 127426 || $input > 127434 && $input < 127436 || $input > 127439 && $input < 127441 || $input > 127444 && $input < 127446 || $input > 127447 && $input < 127450 || $input > 127454 && $input < 127456 || $input > 127459 && $input < 127461 || $input > 127463 && $input < 127470 || $input > 127474 && $input < 127476 || $input > 127476 && $input < 127480 || $input > 127489 && $input < 127491 || $input > 127491 && $input < 127495 || $input > 127499 && $input < 127501 || $input > 127503 && $input < 127505 || $input > 127507 && $input < 127510 || $input > 127513 && $input < 127515 || $input > 127516 && $input < 127520 || $input > 127521 && $input < 127525 || $input > 127529 && $input < 127531 || $input > 127532 && $input < 127535 || $input > 127538 && $input < 127540 || $input > 127541 && $input < 127545 || $input > 127549 && $input < 127551 || $input > 127552 && $input < 127555 || $input > 127559 && $input < 127561 || $input > 127564 && $input < 127566 || $input > 127567 && $input < 127575 || $input > 127578 && $input < 127580 || $input > 127585 && $input < 127595 || $input > 127599 && $input < 127601 || $input > 127602 && $input < 127605 || $input > 127605 && $input < 127610 || $input > 127614 && $input < 127616 || $input > 127619 && $input < 127621 || $input > 127622 && $input < 127630 || $input > 127634 && $input < 127636 || $input > 127637 && $input < 127640 || $input > 127643 && $input < 127645 || $input > 127654 && $input < 127656 || $input > 127656 && $input < 127660 || $input > 127662 && $input < 127665 || $input > 127667 && $input < 127670 || $input > 127670 && $input < 127675 || $input > 127679 && $input < 127681 || $input > 127684 && $input < 127686 || $input > 127687 && $input < 127695 || $input > 127699 && $input < 127701 || $input > 127709 && $input < 127711 || $input > 127711 && $input < 127715 || $input > 127724 && $input < 127726 || $input > 127726 && $input < 130001 || $input > 130004 && $input < 130007 || $input > 130012 && $input < 130015 || $input > 130018 && $input < 130021 || $input > 130025 && $input < 130028 || $input > 130031 && $input < 130034 || $input > 130038 && $input < 130041 || $input > 130045 && $input < 130048 || $input > 130052 && $input < 130055 || $input > 130056 && $input < 130059 || $input > 130062 && $input < 130065 || $input > 130067 && $input < 130070 || $input > 130073 && $input < 130076 || $input > 130078 && $input < 130081 || $input > 130083 && $input < 130086 || $input > 130089 && $input < 130092 || $input > 130095 && $input < 130098 || $input > 130101 && $input < 130104 || $input > 130105 && $input < 130108 || $input > 130111 && $input < 130114 || $input > 130116 && $input < 130120 || $input > 130122 && $input < 130125 || $input > 130128 && $input < 130131 || $input > 130132 && $input < 130135 || $input > 130137 && $input < 130140 || $input > 130146 && $input < 130148 || $input > 130150 && $input < 130153 || $input > 130155 && $input < 130158 || $input > 130160 && $input < 130163 || $input > 130164 && $input < 130167 || $input > 130169 && $input < 135100 || $input > 135102 && $input < 135200 || $input > 135200 && $input < 135300 || $input > 135300 && $input < 135400 || $input > 135406 && $input < 135500 || $input > 135505 && $input < 137005 || $input > 137007 && $input < 137010 || $input > 137011 && $input < 137015 || $input > 137015 && $input < 137020 || $input > 137029 && $input < 137031 || $input > 137031 && $input < 137035 || $input > 137039 && $input < 137041 || $input > 137041 && $input < 137045 || $input > 137046 && $input < 137050 || $input > 137052 && $input < 137055 || $input > 137056 && $input < 137060 || $input > 137061 && $input < 137065 || $input > 137067 && $input < 137070 || $input > 137073 && $input < 137075 || $input > 137078 && $input < 137080 || $input > 137084 && $input < 137086 || $input > 137086 && $input < 137090 || $input > 137099 && $input < 137101 || $input > 137104 && $input < 137106 || $input > 137107 && $input < 137115 || $input > 137117 && $input < 137120 || $input > 137121 && $input < 137125 || $input > 137129 && $input < 137131 || $input > 137133 && $input < 137135 || $input > 137139 && $input < 137141 || $input > 137154 && $input < 137156 || $input > 137159 && $input < 137161 || $input > 137161 && $input < 137165 || $input > 137167 && $input < 137170 || $input > 137174 && $input < 137176 || $input > 137187 && $input < 137190 || $input > 137191 && $input < 137195 || $input > 137195 && $input < 137200 || $input > 137204 && $input < 137206 || $input > 137207 && $input < 137210 || $input > 137214 && $input < 137216 || $input > 137216 && $input < 137220 || $input > 137229 && $input < 137231 || $input > 137231 && $input < 137235 || $input > 137238 && $input < 137240 || $input > 137243 && $input < 137245 || $input > 137246 && $input < 137250 || $input > 137257 && $input < 137260 || $input > 137274 && $input < 137276 || $input > 137276 && $input < 137280 || $input > 137282 && $input < 137285 || $input > 137292 && $input < 137295 || $input > 137299 && $input < 137301 || $input > 137302 && $input < 137305 || $input > 137314 && $input < 137316 || $input > 137316 && $input < 137320 || $input > 137321 && $input < 137325 || $input > 137326 && $input < 137330 || $input > 137332 && $input < 137335 || $input > 137337 && $input < 137340 || $input > 137340 && $input < 137345 || $input > 137354 && $input < 137356 || $input > 137357 && $input < 137360 || $input > 137361 && $input < 137365 || $input > 137366 && $input < 137370 || $input > 137377 && $input < 137380 || $input > 137389 && $input < 137391 || $input > 137393 && $input < 137395 || $input > 137397 && $input < 137400 || $input > 137404 && $input < 137406 || $input > 137406 && $input < 137410 || $input > 137414 && $input < 137416 || $input > 137420 && $input < 137425 || $input > 137427 && $input < 137430 || $input > 137431 && $input < 137435 || $input > 137437 && $input < 137440 || $input > 137443 && $input < 137445 || $input > 137449 && $input < 137451 || $input > 137453 && $input < 137455 || $input > 137459 && $input < 137461 || $input > 137463 && $input < 137465 || $input > 137469 && $input < 137471 || $input > 137476 && $input < 137485 || $input > 137489 && $input < 137491 || $input > 137492 && $input < 137495 || $input > 137498 && $input < 137500 || $input > 137501 && $input < 137505 || $input > 137509 && $input < 137511 || $input > 137512 && $input < 137515 || $input > 137523 && $input < 137525 || $input > 137529 && $input < 137531 || $input > 137533 && $input < 137535 || $input > 137537 && $input < 137540 || $input > 137543 && $input < 140001 || $input > 140005 && $input < 140009 || $input > 140013 && $input < 140017 || $input > 140022 && $input < 140025 || $input > 140030 && $input < 140032 || $input > 140038 && $input < 140040 || $input > 140045 && $input < 140047 || $input > 140053 && $input < 140056 || $input > 140060 && $input < 140064 || $input > 140069 && $input < 140072 || $input > 140075 && $input < 140078 || $input > 140082 && $input < 140085 || $input > 140090 && $input < 140093 || $input > 140098 && $input < 140101 || $input > 140106 && $input < 140110 || $input > 140113 && $input < 145100 || $input > 145100 && $input < 145200 || $input > 145200 && $input < 145300 || $input > 145301 && $input < 145400 || $input > 145400 && $input < 147005 || $input > 147007 && $input < 147010 || $input > 147013 && $input < 147015 || $input > 147017 && $input < 147020 || $input > 147023 && $input < 147025 || $input > 147030 && $input < 147035 || $input > 147035 && $input < 147040 || $input > 147042 && $input < 147045 || $input > 147045 && $input < 147050 || $input > 147050 && $input < 147055 || $input > 147063 && $input < 147065 || $input > 147067 && $input < 147070 || $input > 147070 && $input < 147075 || $input > 147078 && $input < 147080 || $input > 147081 && $input < 147085 || $input > 147085 && $input < 147090 || $input > 147091 && $input < 147095 || $input > 147098 && $input < 147100 || $input > 147106 && $input < 147110 || $input > 147112 && $input < 147115 || $input > 147116 && $input < 147120 || $input > 147124 && $input < 147126 || $input > 147126 && $input < 147130 || $input > 147132 && $input < 147135 || $input > 147137 && $input < 147140 || $input > 147141 && $input < 147145 || $input > 147148 && $input < 147150 || $input > 147152 && $input < 147155 || $input > 147157 && $input < 147160 || $input > 147161 && $input < 147165 || $input > 147165 && $input < 147170 || $input > 147171 && $input < 147175 || $input > 147175 && $input < 147180 || $input > 147183 && $input < 147185 || $input > 147187 && $input < 147190 || $input > 147191 && $input < 147195 || $input > 147195 && $input < 147200 || $input > 147203 && $input < 147205 || $input > 147208 && $input < 147210 || $input > 147210 && $input < 147215 || $input > 147215 && $input < 147220 || $input > 147221 && $input < 147225 || $input > 147227 && $input < 147230 || $input > 147231 && $input < 147235 || $input > 147238 && $input < 147240 || $input > 147240 && $input < 147245 || $input > 147245 && $input < 147250 || $input > 147250 && $input < 147255 || $input > 147259 && $input < 147261 || $input > 147261 && $input < 147265 || $input > 147265 && $input < 147270 || $input > 147274 && $input < 147276 || $input > 147277 && $input < 147280 || $input > 147281 && $input < 147285 || $input > 147287 && $input < 147290 || $input > 147293 && $input < 147295 || $input > 147296 && $input < 147300 || $input > 147302 && $input < 147305 || $input > 147307 && $input < 147310 || $input > 147312 && $input < 147315 || $input > 147318 && $input < 147320 || $input > 147324 && $input < 147326 || $input > 147326 && $input < 147330 || $input > 147331 && $input < 147335 || $input > 147337 && $input < 147340 || $input > 147340 && $input < 147345 || $input > 147350 && $input < 147355 || $input > 147357 && $input < 147360 || $input > 147361 && $input < 147365 || $input > 147368 && $input < 147370 || $input > 147371 && $input < 147375 || $input > 147376 && $input < 147380 || $input > 147384 && $input < 147386 || $input > 147386 && $input < 147390 || $input > 147394 && $input < 147396 || $input > 147397 && $input < 147400 || $input > 147402 && $input < 147405 || $input > 147405 && $input < 147410 || $input > 147412 && $input < 147415 || $input > 147417 && $input < 147420 || $input > 147420 && $input < 147425 || $input > 147428 && $input < 147430 || $input > 147435 && $input < 147440 || $input > 147443 && $input < 147445 || $input > 147445 && $input < 200001 || $input > 200004 && $input < 200008 || $input > 200012 && $input < 200016 || $input > 200020 && $input < 200023 || $input > 200027 && $input < 200030 || $input > 200030 && $input < 200032 || $input > 200034 && $input < 200037 || $input > 200041 && $input < 200044 || $input > 200053 && $input < 200056 || $input > 200061 && $input < 200064 || $input > 200068 && $input < 200071 || $input > 200075 && $input < 200078 || $input > 200082 && $input < 200085 || $input > 200089 && $input < 200092 || $input > 200096 && $input < 200099 || $input > 200103 && $input < 200106 || $input > 200117 && $input < 200120 || $input > 200125 && $input < 200127 || $input > 200131 && $input < 200134 || $input > 200139 && $input < 200142 || $input > 200147 && $input < 200150 || $input > 200154 && $input < 200157 || $input > 200162 && $input < 200166 || $input > 200174 && $input < 200177 || $input > 200182 && $input < 200185 || $input > 200189 && $input < 200192 || $input > 200196 && $input < 200199 || $input > 200204 && $input < 200207 || $input > 200212 && $input < 200215 || $input > 200219 && $input < 200222 || $input > 200226 && $input < 200229 || $input > 200233 && $input < 200236 || $input > 200240 && $input < 200243 || $input > 200247 && $input < 200250 || $input > 200254 && $input < 200257 || $input > 200261 && $input < 200264 || $input > 200268 && $input < 200271 || $input > 200275 && $input < 200278 || $input > 200283 && $input < 200286 || $input > 200291 && $input < 200294 || $input > 200298 && $input < 200301 || $input > 200305 && $input < 200308 || $input > 200312 && $input < 200315 || $input > 200326 && $input < 200330 || $input > 200334 && $input < 200337 || $input > 200342 && $input < 200345 || $input > 200356 && $input < 200359 || $input > 200364 && $input < 200366 || $input > 200372 && $input < 200374 || $input > 200378 && $input < 200381 || $input > 200385 && $input < 200388 || $input > 200392 && $input < 200395 || $input > 200399 && $input < 200402 || $input > 200406 && $input < 200409 || $input > 200413 && $input < 200416 || $input > 200421 && $input < 200423 || $input > 200433 && $input < 200436 || $input > 200440 && $input < 200443 || $input > 200446 && $input < 200453 || $input > 200454 && $input < 200456 || $input > 200460 && $input < 200463 || $input > 200467 && $input < 200470 || $input > 200474 && $input < 200477 || $input > 200481 && $input < 200484 || $input > 200487 && $input < 200490 || $input > 200491 && $input < 200493 || $input > 200494 && $input < 200497 || $input > 200502 && $input < 200504 || $input > 200509 && $input < 200512 || $input > 200516 && $input < 200519 || $input > 200523 && $input < 200526 || $input > 200530 && $input < 200533 || $input > 200536 && $input < 200538 || $input > 200542 && $input < 200545 || $input > 200549 && $input < 200552 || $input > 200554 && $input < 200556 || $input > 200556 && $input < 200559 || $input > 200563 && $input < 200566 || $input > 200570 && $input < 200573 || $input > 200577 && $input < 200580 || $input > 200585 && $input < 200588 || $input > 200592 && $input < 200595 || $input > 200599 && $input < 200602 || $input > 200606 && $input < 200609 || $input > 200611 && $input < 200617 || $input > 200621 && $input < 200624 || $input > 200628 && $input < 200631 || $input > 200636 && $input < 200638 || $input > 200642 && $input < 200645 || $input > 200650 && $input < 200653 || $input > 200653 && $input < 200657 || $input > 200657 && $input < 200662 || $input > 200665 && $input < 200667 || $input > 200671 && $input < 200674 || $input > 200678 && $input < 200681 || $input > 200685 && $input < 200688 || $input > 200692 && $input < 200695 || $input > 200699 && $input < 200702 || $input > 200706 && $input < 200709 || $input > 200713 && $input < 200716 || $input > 200721 && $input < 200723 || $input > 200727 && $input < 200730 || $input > 200734 && $input < 200737 || $input > 200742 && $input < 200745 || $input > 200748 && $input < 200751 || $input > 200756 && $input < 200759 || $input > 200764 && $input < 200767 || $input > 200769 && $input < 200774 || $input > 200778 && $input < 200782 || $input > 200782 && $input < 200785 || $input > 200786 && $input < 200789 || $input > 200791 && $input < 200794 || $input > 200797 && $input < 200800 || $input > 200801 && $input < 200810 || $input > 200815 && $input < 200818 || $input > 200820 && $input < 205100 || $input > 205101 && $input < 205200 || $input > 205203 && $input < 205300 || $input > 205306 && $input < 205400 || $input > 205400 && $input < 207005 || $input > 207007 && $input < 207010 || $input > 207014 && $input < 207016 || $input > 207016 && $input < 207020 || $input > 207022 && $input < 207025 || $input > 207028 && $input < 207030 || $input > 207030 && $input < 207035 || $input > 207039 && $input < 207041 || $input > 207044 && $input < 207046 || $input > 207048 && $input < 207055 || $input > 207055 && $input < 207060 || $input > 207060 && $input < 207065 || $input > 207068 && $input < 207070 || $input > 207070 && $input < 207075 || $input > 207079 && $input < 207081 || $input > 207081 && $input < 207085 || $input > 207089 && $input < 207091 || $input > 207091 && $input < 207095 || $input > 207099 && $input < 207101 || $input > 207101 && $input < 207105 || $input > 207109 && $input < 207111 || $input > 207111 && $input < 207115 || $input > 207119 && $input < 207121 || $input > 207122 && $input < 207125 || $input > 207129 && $input < 207131 || $input > 207132 && $input < 207135 || $input > 207139 && $input < 207141 || $input > 207144 && $input < 207146 || $input > 207146 && $input < 207150 || $input > 207155 && $input < 207160 || $input > 207162 && $input < 207165 || $input > 207166 && $input < 207170 || $input > 207171 && $input < 207175 || $input > 207181 && $input < 207185 || $input > 207191 && $input < 207195 || $input > 207197 && $input < 207200 || $input > 207201 && $input < 207205 || $input > 207206 && $input < 207210 || $input > 207212 && $input < 207215 || $input > 207218 && $input < 207220 || $input > 207221 && $input < 207225 || $input > 207225 && $input < 207230 || $input > 207232 && $input < 207235 || $input > 207244 && $input < 207246 || $input > 207246 && $input < 207250 || $input > 207253 && $input < 207255 || $input > 207259 && $input < 207261 || $input > 207264 && $input < 207266 || $input > 207266 && $input < 207270 || $input > 207270 && $input < 207275 || $input > 207276 && $input < 207280 || $input > 207287 && $input < 207290 || $input > 207291 && $input < 207295 || $input > 207297 && $input < 207300 || $input > 207302 && $input < 207305 || $input > 207306 && $input < 207310 || $input > 207314 && $input < 207316 || $input > 207319 && $input < 207321 || $input > 207324 && $input < 207330 || $input > 207334 && $input < 207336 || $input > 207336 && $input < 207340 || $input > 207340 && $input < 207345 || $input > 207347 && $input < 207350 || $input > 207351 && $input < 207355 || $input > 207356 && $input < 207360 || $input > 207361 && $input < 207365 || $input > 207367 && $input < 207370 || $input > 207371 && $input < 207375 || $input > 207375 && $input < 207380 || $input > 207380 && $input < 207385 || $input > 207389 && $input < 207391 || $input > 207394 && $input < 207396 || $input > 207399 && $input < 207405 || $input > 207409 && $input < 207411 || $input > 207411 && $input < 207415 || $input > 207417 && $input < 207420 || $input > 207424 && $input < 207426 || $input > 207428 && $input < 207430 || $input > 207432 && $input < 207435 || $input > 207441 && $input < 207445 || $input > 207446 && $input < 207450 || $input > 207452 && $input < 207455 || $input > 207457 && $input < 207460 || $input > 207461 && $input < 207465 || $input > 207472 && $input < 207475 || $input > 207479 && $input < 207481 || $input > 207482 && $input < 207485 || $input > 207488 && $input < 207490 || $input > 207490 && $input < 207495 || $input > 207499 && $input < 207501 || $input > 207502 && $input < 207505 || $input > 207506 && $input < 207510 || $input > 207513 && $input < 207515 || $input > 207516 && $input < 207520 || $input > 207521 && $input < 207525 || $input > 207527 && $input < 207530 || $input > 207533 && $input < 207535 || $input > 207535 && $input < 207540 || $input > 207544 && $input < 207546 || $input > 207547 && $input < 207550 || $input > 207554 && $input < 207556 || $input > 207559 && $input < 207561 || $input > 207563 && $input < 207570 || $input > 207571 && $input < 207575 || $input > 207584 && $input < 207586 || $input > 207588 && $input < 207590 || $input > 207591 && $input < 207595 || $input > 207595 && $input < 207600 || $input > 207601 && $input < 207605 || $input > 207606 && $input < 207610 || $input > 207610 && $input < 207615 || $input > 207619 && $input < 207621 || $input > 207623 && $input < 207625 || $input > 207629 && $input < 207631 || $input > 207633 && $input < 207635 || $input > 207636 && $input < 210001 || $input > 210008 && $input < 210101 || $input > 210109 && $input < 210112 || $input > 210116 && $input < 210118 || $input > 210122 && $input < 210124 || $input > 210127 && $input < 210129 || $input > 210132 && $input < 210134 || $input > 210138 && $input < 210140 || $input > 210144 && $input < 210146 || $input > 210150 && $input < 210152 || $input > 210156 && $input < 210158 || $input > 210161 && $input < 210163 || $input > 210167 && $input < 210169 || $input > 210173 && $input < 210175 || $input > 210178 && $input < 210180 || $input > 210185 && $input < 210187 || $input > 210196 && $input < 210198 || $input > 210202 && $input < 210204 || $input > 210207 && $input < 210209 || $input > 210213 && $input < 210215 || $input > 210219 && $input < 210221 || $input > 210229 && $input < 210231 || $input > 210236 && $input < 210238 || $input > 210241 && $input < 210243 || $input > 210247 && $input < 210249 || $input > 210253 && $input < 210255 || $input > 210260 && $input < 215100 || $input > 215104 && $input < 215200 || $input > 215208 && $input < 215300 || $input > 215304 && $input < 215400 || $input > 215400 && $input < 215500 || $input > 215510 && $input < 215600 || $input > 215600 && $input < 217005 || $input > 217009 && $input < 217011 || $input > 217011 && $input < 217015 || $input > 217028 && $input < 217030 || $input > 217031 && $input < 217035 || $input > 217039 && $input < 217041 || $input > 217042 && $input < 217045 || $input > 217049 && $input < 217051 || $input > 217058 && $input < 217060 || $input > 217074 && $input < 217076 || $input > 217077 && $input < 217080 || $input > 217084 && $input < 217086 || $input > 217087 && $input < 217090 || $input > 217094 && $input < 217096 || $input > 217097 && $input < 217100 || $input > 217104 && $input < 217106 || $input > 217106 && $input < 217110 || $input > 217112 && $input < 217115 || $input > 217119 && $input < 217121 || $input > 217123 && $input < 217125 || $input > 217129 && $input < 217131 || $input > 217133 && $input < 217135 || $input > 217139 && $input < 217141 || $input > 217141 && $input < 217145 || $input > 217149 && $input < 217151 || $input > 217159 && $input < 217161 || $input > 217162 && $input < 217165 || $input > 217169 && $input < 217171 || $input > 217179 && $input < 217181 || $input > 217184 && $input < 217186 || $input > 217186 && $input < 217190 || $input > 217194 && $input < 217196 || $input > 217197 && $input < 217200 || $input > 217204 && $input < 217206 || $input > 217209 && $input < 217211 || $input > 217212 && $input < 217220 || $input > 217222 && $input < 217225 || $input > 217229 && $input < 217231 || $input > 217231 && $input < 217235 || $input > 217239 && $input < 217241 || $input > 217242 && $input < 217245 || $input > 217254 && $input < 217256 || $input > 217257 && $input < 217260 || $input > 217268 && $input < 217270 || $input > 217277 && $input < 217280 || $input > 217283 && $input < 217285 || $input > 217289 && $input < 217291 || $input > 217293 && $input < 217295 || $input > 217304 && $input < 217306 || $input > 217307 && $input < 217310 || $input > 217314 && $input < 217316 || $input > 217319 && $input < 217321 || $input > 217321 && $input < 217325 || $input > 217329 && $input < 217331 || $input > 217333 && $input < 217335 || $input > 217339 && $input < 217341 || $input > 217342 && $input < 217345 || $input > 217349 && $input < 217351 || $input > 217354 && $input < 217356 || $input > 217357 && $input < 217365 || $input > 217366 && $input < 217370 || $input > 217374 && $input < 217376 || $input > 217377 && $input < 217380 || $input > 217384 && $input < 217386 || $input > 217387 && $input < 217390 || $input > 217394 && $input < 217396 || $input > 217397 && $input < 217400 || $input > 217404 && $input < 217406 || $input > 217418 && $input < 217420 || $input > 217429 && $input < 217431 || $input > 217434 && $input < 217436 || $input > 217437 && $input < 217445 || $input > 217449 && $input < 217451 || $input > 217453 && $input < 217455 || $input > 217459 && $input < 217461 || $input > 217464 && $input < 217466 || $input > 217466 && $input < 217470 || $input > 217474 && $input < 217476 || $input > 217476 && $input < 217480 || $input > 217484 && $input < 217486 || $input > 217487 && $input < 217490 || $input > 217492 && $input < 217495 || $input > 217499 && $input < 217501 || $input > 217504 && $input < 217506 || $input > 217507 && $input < 217515 || $input > 217524 && $input < 217526 || $input > 217526 && $input < 217530 || $input > 217533 && $input < 217535 || $input > 217538 && $input < 217540 || $input > 217542 && $input < 217545 || $input > 217553 && $input < 220001 || $input > 220016 && $input < 220019 || $input > 220023 && $input < 220026 || $input > 220030 && $input < 220033 || $input > 220037 && $input < 220040 || $input > 220044 && $input < 220047 || $input > 220051 && $input < 220054 || $input > 220057 && $input < 220060 || $input > 220065 && $input < 220067 || $input > 220072 && $input < 220075 || $input > 220079 && $input < 220082 || $input > 220086 && $input < 220089 || $input > 220094 && $input < 220097 || $input > 220100 && $input < 220103 || $input > 220106 && $input < 220109 || $input > 220113 && $input < 220116 || $input > 220121 && $input < 220124 || $input > 220127 && $input < 220130 || $input > 220135 && $input < 220138 || $input > 220142 && $input < 220145 || $input > 220150 && $input < 220153 || $input > 220157 && $input < 220160 || $input > 220164 && $input < 220167 || $input > 220171 && $input < 220174 || $input > 220178 && $input < 220181 || $input > 220186 && $input < 220189 || $input > 220193 && $input < 220196 || $input > 220202 && $input < 220205 || $input > 220208 && $input < 220211 || $input > 220216 && $input < 220219 || $input > 220229 && $input < 220232 || $input > 220236 && $input < 220238 || $input > 220239 && $input < 220242 || $input > 220248 && $input < 220251 || $input > 220256 && $input < 225100 || $input > 225108 && $input < 225200 || $input > 225200 && $input < 225300 || $input > 225309 && $input < 225400 || $input > 225404 && $input < 227005 || $input > 227005 && $input < 227010 || $input > 227014 && $input < 227016 || $input > 227019 && $input < 227021 || $input > 227024 && $input < 227026 || $input > 227027 && $input < 227030 || $input > 227034 && $input < 227036 || $input > 227037 && $input < 227040 || $input > 227042 && $input < 227045 || $input > 227049 && $input < 227051 || $input > 227052 && $input < 227055 || $input > 227064 && $input < 227066 || $input > 227067 && $input < 227070 || $input > 227073 && $input < 227075 || $input > 227079 && $input < 227081 || $input > 227081 && $input < 227085 || $input > 227094 && $input < 227096 || $input > 227098 && $input < 227100 || $input > 227104 && $input < 227106 || $input > 227109 && $input < 227111 || $input > 227113 && $input < 227120 || $input > 227123 && $input < 227125 || $input > 227129 && $input < 227131 || $input > 227134 && $input < 227136 || $input > 227139 && $input < 227145 || $input > 227146 && $input < 227150 || $input > 227152 && $input < 227155 || $input > 227156 && $input < 227160 || $input > 227164 && $input < 227166 || $input > 227166 && $input < 227170 || $input > 227172 && $input < 227175 || $input > 227179 && $input < 227181 || $input > 227184 && $input < 227186 || $input > 227188 && $input < 227195 || $input > 227195 && $input < 227200 || $input > 227204 && $input < 227206 || $input > 227211 && $input < 227215 || $input > 227218 && $input < 227220 || $input > 227223 && $input < 227225 || $input > 227229 && $input < 227231 || $input > 227231 && $input < 227235 || $input > 227238 && $input < 227240 || $input > 227242 && $input < 227245 || $input > 227248 && $input < 227250 || $input > 227254 && $input < 227256 || $input > 227259 && $input < 227261 || $input > 227262 && $input < 227270 || $input > 227274 && $input < 227276 || $input > 227276 && $input < 227280 || $input > 227282 && $input < 227285 || $input > 227289 && $input < 227291 || $input > 227293 && $input < 227295 || $input > 227299 && $input < 227301 || $input > 227302 && $input < 227305 || $input > 227319 && $input < 227321 || $input > 227322 && $input < 227325 || $input > 227326 && $input < 227330 || $input > 227331 && $input < 227335 || $input > 227336 && $input < 227340 || $input > 227344 && $input < 227346 || $input > 227347 && $input < 227350 || $input > 227351 && $input < 227355 || $input > 227357 && $input < 227360 || $input > 227364 && $input < 227366 || $input > 227369 && $input < 227371 || $input > 227374 && $input < 227376 || $input > 227377 && $input < 227380 || $input > 227383 && $input < 227385 || $input > 227386 && $input < 227390 || $input > 227394 && $input < 227396 || $input > 227399 && $input < 227401 || $input > 227404 && $input < 227406 || $input > 227407 && $input < 227410 || $input > 227414 && $input < 227416 || $input > 227416 && $input < 227420 || $input > 227421 && $input < 227425 || $input > 227425 && $input < 227430 || $input > 227434 && $input < 227436 || $input > 227438 && $input < 227440 || $input > 227440 && $input < 227445 || $input > 227449 && $input < 227451 || $input > 227453 && $input < 227455 || $input > 227459 && $input < 227461 || $input > 227461 && $input < 227465 || $input > 227467 && $input < 227470 || $input > 227474 && $input < 227476 || $input > 227479 && $input < 227481 || $input > 227482 && $input < 227490 || $input > 227493 && $input < 227495 || $input > 227496 && $input < 227500 || $input > 227503 && $input < 227505 || $input > 227509 && $input < 227511 || $input > 227513 && $input < 230001 || $input > 230005 && $input < 230007 || $input > 230009 && $input < 230011 || $input > 230013 && $input < 230015 || $input > 230017 && $input < 230019 || $input > 230022 && $input < 230025 || $input > 230030 && $input < 230032 || $input > 230034 && $input < 230037 || $input > 230039 && $input < 230041 || $input > 230044 && $input < 230047 || $input > 230051 && $input < 230053 || $input > 230055 && $input < 230057 || $input > 230060 && $input < 230062 || $input > 230067 && $input < 230070 || $input > 230072 && $input < 230075 || $input > 230077 && $input < 230079 || $input > 230089 && $input < 230091 || $input > 230096 && $input < 230099 || $input > 230104 && $input < 230107 || $input > 230111 && $input < 230113 || $input > 230116 && $input < 230119 || $input > 230123 && $input < 230125 || $input > 230128 && $input < 235100 || $input > 235103 && $input < 235200 || $input > 235200 && $input < 235300 || $input > 235302 && $input < 235400 || $input > 235401 && $input < 235500 || $input > 235505 && $input < 235600 || $input > 235613 && $input < 237005 || $input > 237009 && $input < 237011 || $input > 237012 && $input < 237015 || $input > 237015 && $input < 237020 || $input > 237024 && $input < 237026 || $input > 237031 && $input < 237035 || $input > 237039 && $input < 237041 || $input > 237043 && $input < 237045 || $input > 237046 && $input < 237050 || $input > 237053 && $input < 237055 || $input > 237056 && $input < 237060 || $input > 237061 && $input < 237065 || $input > 237072 && $input < 237075 || $input > 237075 && $input < 237080 || $input > 237084 && $input < 237086 || $input > 237095 && $input < 237100 || $input > 237101 && $input < 237105 || $input > 237109 && $input < 237111 || $input > 237112 && $input < 237115 || $input > 237119 && $input < 237121 || $input > 237121 && $input < 237125 || $input > 237131 && $input < 237135 || $input > 237137 && $input < 237140 || $input > 237148 && $input < 237150 || $input > 237154 && $input < 237156 || $input > 237157 && $input < 237160 || $input > 237162 && $input < 237165 || $input > 237169 && $input < 237171 || $input > 237171 && $input < 237175 || $input > 237177 && $input < 237180 || $input > 237183 && $input < 237185 || $input > 237191 && $input < 237195 || $input > 237195 && $input < 237200 || $input > 237201 && $input < 237205 || $input > 237208 && $input < 237210 || $input > 237211 && $input < 237215 || $input > 237216 && $input < 237220 || $input > 237222 && $input < 237225 || $input > 237227 && $input < 237230 || $input > 237230 && $input < 237235 || $input > 237236 && $input < 237240 || $input > 237244 && $input < 237246 || $input > 237247 && $input < 237250 || $input > 237252 && $input < 237255 || $input > 237256 && $input < 237260 || $input > 237264 && $input < 237266 || $input > 237266 && $input < 237270 || $input > 237276 && $input < 237280 || $input > 237282 && $input < 237285 || $input > 237292 && $input < 237295 || $input > 237298 && $input < 237300 || $input > 237303 && $input < 237305 || $input > 237308 && $input < 237310 || $input > 237315 && $input < 237325 || $input > 237328 && $input < 237330 || $input > 237333 && $input < 237335 || $input > 237339 && $input < 237341 || $input > 237342 && $input < 237345 || $input > 237349 && $input < 237351 || $input > 237351 && $input < 237355 || $input > 237362 && $input < 237365 || $input > 237368 && $input < 237370 || $input > 237372 && $input < 237375 || $input > 237375 && $input < 237380 || $input > 237381 && $input < 237385 || $input > 237389 && $input < 237391 || $input > 237392 && $input < 237395 || $input > 237397 && $input < 237400 || $input > 237405 && $input < 237410 || $input > 237411 && $input < 237415 || $input > 237419 && $input < 237421 || $input > 237422 && $input < 237425 || $input > 237428 && $input < 237430 || $input > 237430 && $input < 237435 || $input > 237435 && $input < 237440 || $input > 237443 && $input < 237445 || $input > 237452 && $input < 237455 || $input > 237456 && $input < 237460 || $input > 237464 && $input < 237466 || $input > 237466 && $input < 237470 || $input > 237474 && $input < 237476 || $input > 237477 && $input < 237480 || $input > 237482 && $input < 237485 || $input > 237490 && $input < 237495 || $input > 237497 && $input < 237500 || $input > 237501 && $input < 237505 || $input > 237511 && $input < 237515 || $input > 237515 && $input < 237520 || $input > 237523 && $input < 237525 || $input > 237527 && $input < 237530 || $input > 237534 && $input < 237536 || $input > 237537 && $input < 237540 || $input > 237540 && $input < 237545 || $input > 237549 && $input < 237551 || $input > 237551 && $input < 237555 || $input > 237557 && $input < 237560 || $input > 237569 && $input < 237571 || $input > 237574 && $input < 237576 || $input > 237576 && $input < 237580 || $input > 237583 && $input < 240001 || $input > 240008 && $input < 240011 || $input > 240015 && $input < 240019 || $input > 240023 && $input < 240027 || $input > 240032 && $input < 240036 || $input > 240037 && $input < 240039 || $input > 240039 && $input < 240041 || $input > 240042 && $input < 240046 || $input > 240053 && $input < 240056 || $input > 240061 && $input < 240065 || $input > 240070 && $input < 240074 || $input > 240078 && $input < 240082 || $input > 240087 && $input < 240091 || $input > 240094 && $input < 240096 || $input > 240096 && $input < 240100 || $input > 240101 && $input < 240107 || $input > 240108 && $input < 240112 || $input > 240118 && $input < 240122 || $input > 240122 && $input < 240124 || $input > 240125 && $input < 240127 || $input > 240127 && $input < 240131 || $input > 240136 && $input < 240140 || $input > 240144 && $input < 240148 || $input > 240152 && $input < 240156 || $input > 240161 && $input < 240165 || $input > 240168 && $input < 240174 || $input > 240174 && $input < 240176 || $input > 240176 && $input < 240178 || $input > 240178 && $input < 240181 || $input > 240181 && $input < 240183 || $input > 240187 && $input < 240190 || $input > 240195 && $input < 240199 || $input > 240204 && $input < 240208 || $input > 240211 && $input < 240215 || $input > 240219 && $input < 240223 || $input > 240228 && $input < 240232 || $input > 240235 && $input < 240239 || $input > 240241 && $input < 240243 || $input > 240243 && $input < 240247 || $input > 240250 && $input < 240254 || $input > 240258 && $input < 240262 || $input > 240267 && $input < 240272 || $input > 240275 && $input < 240277 || $input > 240278 && $input < 240281 || $input > 240286 && $input < 240290 || $input > 240294 && $input < 240298 || $input > 240303 && $input < 240307 || $input > 240307 && $input < 240309 || $input > 240309 && $input < 240312 || $input > 240312 && $input < 240401 || $input > 240448 && $input < 240450 || $input > 240462 && $input < 240464 || $input > 240490 && $input < 240492 || $input > 240497 && $input < 240501 || $input > 240607 && $input < 240609 || $input > 240636 && $input < 240638 || $input > 240649 && $input < 240702 || $input > 240704 && $input < 240706 || $input > 240718 && $input < 240720 || $input > 240727 && $input < 240730 || $input > 240757 && $input < 240759 || $input > 240763 && $input < 245100 || $input > 245106 && $input < 245200 || $input > 245203 && $input < 245300 || $input > 245308 && $input < 245400 || $input > 245408 && $input < 245500 || $input > 245508 && $input < 245600 || $input > 245605 && $input < 245700 || $input > 245703 && $input < 245800 || $input > 245806 && $input < 245900 || $input > 245908 && $input < 247005 || $input > 247009 && $input < 247011 || $input > 247012 && $input < 247015 || $input > 247019 && $input < 247021 || $input > 247021 && $input < 247025 || $input > 247028 && $input < 247030 || $input > 247034 && $input < 247036 || $input > 247036 && $input < 247040 || $input > 247044 && $input < 247046 || $input > 247047 && $input < 247050 || $input > 247052 && $input < 247055 || $input > 247059 && $input < 247061 || $input > 247063 && $input < 247065 || $input > 247069 && $input < 247071 || $input > 247072 && $input < 247075 || $input > 247079 && $input < 247081 || $input > 247081 && $input < 247085 || $input > 247089 && $input < 247091 || $input > 247092 && $input < 247095 || $input > 247099 && $input < 247101 || $input > 247102 && $input < 247105 || $input > 247109 && $input < 247111 || $input > 247111 && $input < 247115 || $input > 247118 && $input < 247120 || $input > 247123 && $input < 247125 || $input > 247128 && $input < 247130 || $input > 247134 && $input < 247136 || $input > 247139 && $input < 247141 || $input > 247144 && $input < 247146 || $input > 247146 && $input < 247150 || $input > 247152 && $input < 247155 || $input > 247159 && $input < 247161 || $input > 247169 && $input < 247171 || $input > 247174 && $input < 247176 || $input > 247179 && $input < 247181 || $input > 247184 && $input < 247186 || $input > 247188 && $input < 247195 || $input > 247199 && $input < 247201 || $input > 247209 && $input < 247211 || $input > 247219 && $input < 247221 || $input > 247221 && $input < 247225 || $input > 247234 && $input < 247236 || $input > 247239 && $input < 247241 || $input > 247243 && $input < 247250 || $input > 247254 && $input < 247256 || $input > 247264 && $input < 247266 || $input > 247266 && $input < 247270 || $input > 247274 && $input < 247276 || $input > 247284 && $input < 247286 || $input > 247286 && $input < 247290 || $input > 247294 && $input < 247296 || $input > 247299 && $input < 247301 || $input > 247301 && $input < 247305 || $input > 247309 && $input < 247311 || $input > 247313 && $input < 247315 || $input > 247319 && $input < 247321 || $input > 247322 && $input < 247325 || $input > 247329 && $input < 247331 || $input > 247331 && $input < 247335 || $input > 247337 && $input < 247340 || $input > 247342 && $input < 247345 || $input > 247349 && $input < 247351 || $input > 247354 && $input < 247356 || $input > 247356 && $input < 247360 || $input > 247364 && $input < 247366 || $input > 247366 && $input < 247370 || $input > 247373 && $input < 247375 || $input > 247379 && $input < 247381 || $input > 247384 && $input < 247386 || $input > 247389 && $input < 247395 || $input > 247399 && $input < 247401 || $input > 247401 && $input < 247405 || $input > 247409 && $input < 247411 || $input > 247413 && $input < 247415 || $input > 247419 && $input < 247421 || $input > 247424 && $input < 247426 || $input > 247429 && $input < 247431 || $input > 247434 && $input < 247436 || $input > 247436 && $input < 247440 || $input > 247444 && $input < 247446 || $input > 247446 && $input < 247450 || $input > 247464 && $input < 247466 || $input > 247468 && $input < 247470 || $input > 247474 && $input < 247476 || $input > 247476 && $input < 247480 || $input > 247484 && $input < 247486 || $input > 247489 && $input < 247491 || $input > 247492 && $input < 247500 || $input > 247504 && $input < 247506 || $input > 247506 && $input < 247510 || $input > 247511 && $input < 247515 || $input > 247519 && $input < 247521 || $input > 247522 && $input < 247525 || $input > 247528 && $input < 247530 || $input > 247534 && $input < 247536 || $input > 247537 && $input < 247540 || $input > 247544 && $input < 247546 || $input > 247549 && $input < 247551 || $input > 247551 && $input < 247555 || $input > 247559 && $input < 247561 || $input > 247564 && $input < 247566 || $input > 247567 && $input < 247575 || $input > 247579 && $input < 247581 || $input > 247582 && $input < 247585 || $input > 247588 && $input < 247590 || $input > 247593 && $input < 247595 || $input > 247599 && $input < 247601 || $input > 247601 && $input < 247605 || $input > 247609 && $input < 247611 || $input > 247611 && $input < 247615 || $input > 247619 && $input < 247621 || $input > 247629 && $input < 247631 || $input > 247634 && $input < 247636 || $input > 247639 && $input < 247645 || $input > 247649 && $input < 247651 || $input > 247654 && $input < 247656 || $input > 247659 && $input < 247661 || $input > 247662 && $input < 247665 || $input > 247674 && $input < 247676 || $input > 247678 && $input < 247680 || $input > 247688 && $input < 247690 || $input > 247699 && $input < 247701 || $input > 247702 && $input < 247705 || $input > 247709 && $input < 247711 || $input > 247712 && $input < 247715 || $input > 247715 && $input < 247725 || $input > 247734 && $input < 247736 || $input > 247736 && $input < 247740 || $input > 247747 && $input < 247750 || $input > 247752 && $input < 247755 || $input > 247759 && $input < 247761 || $input > 247764 && $input < 247766 || $input > 247769 && $input < 247771 || $input > 247774 && $input < 247776 || $input > 247777 && $input < 300001 || $input > 300006 && $input < 300010 || $input > 300016 && $input < 300020 || $input > 300024 && $input < 300028 || $input > 300030 && $input < 300034 || $input > 300038 && $input < 300041 || $input > 300045 && $input < 300048 || $input > 300051 && $input < 300054 || $input > 300058 && $input < 300061 || $input > 300066 && $input < 300070 || $input > 300074 && $input < 300077 || $input > 300081 && $input < 300085 || $input > 300088 && $input < 300092 || $input > 300096 && $input < 300100 || $input > 300104 && $input < 300107 || $input > 300111 && $input < 300115 || $input > 300121 && $input < 300124 || $input > 300129 && $input < 300133 || $input > 300138 && $input < 300142 || $input > 300146 && $input < 300150 || $input > 300154 && $input < 300158 || $input > 300162 && $input < 300166 || $input > 300169 && $input < 300172 || $input > 300176 && $input < 300179 || $input > 300182 && $input < 300185 || $input > 300188 && $input < 300191 || $input > 300195 && $input < 300199 || $input > 300203 && $input < 300206 || $input > 300211 && $input < 300215 || $input > 300219 && $input < 300222 || $input > 300226 && $input < 300229 || $input > 300233 && $input < 300236 || $input > 300239 && $input < 300242 || $input > 300247 && $input < 300251 || $input > 300256 && $input < 300260 || $input > 300265 && $input < 300269 || $input > 300274 && $input < 300278 || $input > 300283 && $input < 300287 || $input > 300292 && $input < 300295 || $input > 300299 && $input < 300302 || $input > 300305 && $input < 300308 || $input > 300311 && $input < 300314 || $input > 300318 && $input < 300320 || $input > 300332 && $input < 300334 || $input > 300337 && $input < 300341 || $input > 300346 && $input < 300350 || $input > 300351 && $input < 300353 || $input > 300353 && $input < 300358 || $input > 300363 && $input < 300367 || $input > 300372 && $input < 300375 || $input > 300379 && $input < 300383 || $input > 300386 && $input < 300389 || $input > 300393 && $input < 300397 || $input > 300402 && $input < 300406 || $input > 300410 && $input < 300414 || $input > 300418 && $input < 300422 || $input > 300426 && $input < 300430 || $input > 300434 && $input < 300438 || $input > 300442 && $input < 300446 || $input > 300458 && $input < 300462 || $input > 300467 && $input < 300471 || $input > 300475 && $input < 300478 || $input > 300482 && $input < 300486 || $input > 300489 && $input < 300493 || $input > 300496 && $input < 300500 || $input > 300503 && $input < 300507 || $input > 300510 && $input < 300514 || $input > 300518 && $input < 300521 || $input > 300524 && $input < 300528 || $input > 300532 && $input < 300536 || $input > 300539 && $input < 300543 || $input > 300548 && $input < 300551 || $input > 300554 && $input < 300558 || $input > 300562 && $input < 300566 || $input > 300571 && $input < 300575 || $input > 300580 && $input < 300584 || $input > 300588 && $input < 300592 || $input > 300596 && $input < 300600 || $input > 300606 && $input < 300609 || $input > 300613 && $input < 300617 || $input > 300621 && $input < 300625 || $input > 300629 && $input < 300633 || $input > 300640 && $input < 300642 || $input > 300654 && $input < 300658 || $input > 300661 && $input < 300664 || $input > 300668 && $input < 300671 || $input > 300674 && $input < 300677 || $input > 300682 && $input < 300685 || $input > 300689 && $input < 300692 || $input > 300704 && $input < 300706 || $input > 300710 && $input < 300713 || $input > 300716 && $input < 300719 || $input > 300724 && $input < 300727 || $input > 300737 && $input < 300740 || $input > 300745 && $input < 300748 || $input > 300752 && $input < 300755 || $input > 300759 && $input < 300762 || $input > 300766 && $input < 300769 || $input > 300779 && $input < 300789 || $input > 300789 && $input < 305100 || $input > 305102 && $input < 305200 || $input > 305201 && $input < 305300 || $input > 305310 && $input < 305400 || $input > 305400 && $input < 305500 || $input > 305502 && $input < 305600 || $input > 305600 && $input < 307005 || $input > 307008 && $input < 307010 || $input > 307014 && $input < 307016 || $input > 307016 && $input < 307020 || $input > 307029 && $input < 307031 || $input > 307032 && $input < 307035 || $input > 307037 && $input < 307040 || $input > 307041 && $input < 307045 || $input > 307048 && $input < 307050 || $input > 307054 && $input < 307056 || $input > 307056 && $input < 307060 || $input > 307061 && $input < 307065 || $input > 307065 && $input < 307070 || $input > 307074 && $input < 307076 || $input > 307076 && $input < 307080 || $input > 307083 && $input < 307085 || $input > 307092 && $input < 307095 || $input > 307095 && $input < 307100 || $input > 307102 && $input < 307105 || $input > 307107 && $input < 307110 || $input > 307114 && $input < 307116 || $input > 307117 && $input < 307120 || $input > 307122 && $input < 307125 || $input > 307133 && $input < 307135 || $input > 307137 && $input < 307140 || $input > 307142 && $input < 307145 || $input > 307148 && $input < 307150 || $input > 307153 && $input < 307155 || $input > 307157 && $input < 307160 || $input > 307160 && $input < 307165 || $input > 307169 && $input < 307171 || $input > 307172 && $input < 307175 || $input > 307176 && $input < 307180 || $input > 307183 && $input < 307185 || $input > 307189 && $input < 307191 || $input > 307194 && $input < 307196 || $input > 307196 && $input < 307200 || $input > 307201 && $input < 307205 || $input > 307208 && $input < 307210 || $input > 307211 && $input < 307215 || $input > 307217 && $input < 307220 || $input > 307221 && $input < 307225 || $input > 307228 && $input < 307230 || $input > 307236 && $input < 307240 || $input > 307242 && $input < 307245 || $input > 307247 && $input < 307250 || $input > 307252 && $input < 307255 || $input > 307255 && $input < 307260 || $input > 307264 && $input < 307266 || $input > 307273 && $input < 307275 || $input > 307278 && $input < 307280 || $input > 307283 && $input < 307285 || $input > 307291 && $input < 307295 || $input > 307297 && $input < 307300 || $input > 307303 && $input < 307305 || $input > 307308 && $input < 307310 || $input > 307312 && $input < 307315 || $input > 307316 && $input < 307320 || $input > 307323 && $input < 307325 || $input > 307334 && $input < 307336 || $input > 307336 && $input < 307340 || $input > 307344 && $input < 307346 || $input > 307347 && $input < 307350 || $input > 307353 && $input < 307355 || $input > 307359 && $input < 307361 || $input > 307362 && $input < 307365 || $input > 307367 && $input < 307370 || $input > 307372 && $input < 307375 || $input > 307377 && $input < 307380 || $input > 307382 && $input < 307385 || $input > 307387 && $input < 307390 || $input > 307393 && $input < 307395 || $input > 307396 && $input < 307400 || $input > 307403 && $input < 307405 || $input > 307407 && $input < 307410 || $input > 307414 && $input < 307416 || $input > 307416 && $input < 307420 || $input > 307424 && $input < 307426 || $input > 307426 && $input < 307430 || $input > 307432 && $input < 307435 || $input > 307439 && $input < 307441 || $input > 307441 && $input < 307445 || $input > 307449 && $input < 307451 || $input > 307451 && $input < 307455 || $input > 307457 && $input < 307460 || $input > 307464 && $input < 307466 || $input > 307467 && $input < 307470 || $input > 307471 && $input < 310001 || $input > 310006 && $input < 310009 || $input > 310013 && $input < 310016 || $input > 310019 && $input < 310022 || $input > 310025 && $input < 310028 || $input > 310032 && $input < 310035 || $input > 310042 && $input < 310045 || $input > 310049 && $input < 310052 || $input > 310059 && $input < 310062 || $input > 310070 && $input < 310074 || $input > 310081 && $input < 310084 || $input > 310087 && $input < 310090 || $input > 310096 && $input < 310099 || $input > 310104 && $input < 310106 || $input > 310110 && $input < 310112 || $input > 310114 && $input < 310117 || $input > 310119 && $input < 310122 || $input > 310127 && $input < 310130 || $input > 310135 && $input < 310137 || $input > 310141 && $input < 310144 || $input > 310148 && $input < 310150 || $input > 310154 && $input < 310156 || $input > 310165 && $input < 310167 || $input > 310171 && $input < 310174 || $input > 310179 && $input < 310181 || $input > 310184 && $input < 310187 || $input > 310192 && $input < 310195 || $input > 310202 && $input < 310204 || $input > 310225 && $input < 310227 || $input > 310234 && $input < 310237 || $input > 310242 && $input < 310245 || $input > 310251 && $input < 310253 || $input > 310259 && $input < 310261 || $input > 310265 && $input < 310267 || $input > 310275 && $input < 310278 || $input > 310284 && $input < 310287 || $input > 310295 && $input < 310298 || $input > 310304 && $input < 310307 || $input > 310308 && $input < 310310 || $input > 310312 && $input < 310315 || $input > 310324 && $input < 310327 || $input > 310333 && $input < 310336 || $input > 310341 && $input < 310345 || $input > 310350 && $input < 310353 || $input > 310353 && $input < 310355 || $input > 310360 && $input < 310362 || $input > 310365 && $input < 310368 || $input > 310372 && $input < 310375 || $input > 310378 && $input < 310381 || $input > 310382 && $input < 310384 || $input > 310385 && $input < 310388 || $input > 310392 && $input < 310395 || $input > 310404 && $input < 310407 || $input > 310419 && $input < 310422 || $input > 310431 && $input < 310434 || $input > 310448 && $input < 310451 || $input > 310461 && $input < 310464 || $input > 310475 && $input < 310477 || $input > 310491 && $input < 310493 || $input > 310508 && $input < 315100 || $input > 315101 && $input < 315200 || $input > 315201 && $input < 315300 || $input > 315301 && $input < 315400 || $input > 315402 && $input < 315500 || $input > 315500 && $input < 315600 || $input > 315601 && $input < 315700 || $input > 315703 && $input < 317005 || $input > 317008 && $input < 317010 || $input > 317012 && $input < 317015 || $input > 317018 && $input < 317020 || $input > 317023 && $input < 317025 || $input > 317028 && $input < 317030 || $input > 317034 && $input < 317036 || $input > 317038 && $input < 317040 || $input > 317044 && $input < 317046 || $input > 317046 && $input < 317050 || $input > 317053 && $input < 317055 || $input > 317057 && $input < 317060 || $input > 317068 && $input < 317070 || $input > 317071 && $input < 317075 || $input > 317077 && $input < 317080 || $input > 317082 && $input < 317085 || $input > 317090 && $input < 317095 || $input > 317099 && $input < 317101 || $input > 317104 && $input < 317106 || $input > 317106 && $input < 317110 || $input > 317123 && $input < 317125 || $input > 317127 && $input < 317130 || $input > 317130 && $input < 317135 || $input > 317137 && $input < 317140 || $input > 317141 && $input < 317145 || $input > 317149 && $input < 317151 || $input > 317154 && $input < 317156 || $input > 317156 && $input < 317160 || $input > 317164 && $input < 317166 || $input > 317169 && $input < 317171 || $input > 317172 && $input < 317180 || $input > 317189 && $input < 317191 || $input > 317191 && $input < 317195 || $input > 317198 && $input < 317200 || $input > 317202 && $input < 317205 || $input > 317206 && $input < 317210 || $input > 317211 && $input < 317215 || $input > 317218 && $input < 317220 || $input > 317221 && $input < 317225 || $input > 317226 && $input < 317230 || $input > 317233 && $input < 317235 || $input > 317238 && $input < 317240 || $input > 317241 && $input < 317245 || $input > 317249 && $input < 317251 || $input > 317251 && $input < 317255 || $input > 317256 && $input < 317260 || $input > 317264 && $input < 317266 || $input > 317267 && $input < 317270 || $input > 317274 && $input < 317276 || $input > 317281 && $input < 317285 || $input > 317288 && $input < 317290 || $input > 317292 && $input < 317295 || $input > 317295 && $input < 317300 || $input > 317302 && $input < 317305 || $input > 317305 && $input < 317310 || $input > 317315 && $input < 317320 || $input > 317320 && $input < 317325 || $input > 317327 && $input < 317330 || $input > 317335 && $input < 317340 || $input > 317342 && $input < 317345 || $input > 317348 && $input < 317350 || $input > 317351 && $input < 317355 || $input > 317358 && $input < 317360 || $input > 317365 && $input < 317375 || $input > 317384 && $input < 317386 || $input > 317386 && $input < 317390 || $input > 317394 && $input < 317396 || $input > 317398 && $input < 317400 || $input > 317402 && $input < 317405 || $input > 317408 && $input < 317410 || $input > 317412 && $input < 317415 || $input > 317416 && $input < 317420 || $input > 317421 && $input < 317425 || $input > 317427 && $input < 320001 || $input > 320006 && $input < 320011 || $input > 320014 && $input < 320018 || $input > 320022 && $input < 320026 || $input > 320030 && $input < 320034 || $input > 320038 && $input < 320042 || $input > 320046 && $input < 320050 || $input > 320054 && $input < 320058 || $input > 320062 && $input < 320066 || $input > 320071 && $input < 320075 || $input > 320079 && $input < 320084 || $input > 320088 && $input < 320092 || $input > 320096 && $input < 320100 || $input > 320104 && $input < 320108 || $input > 320112 && $input < 320116 || $input > 320119 && $input < 320125 || $input > 320130 && $input < 320135 || $input > 320139 && $input < 320143 || $input > 320147 && $input < 320151 || $input > 320154 && $input < 320158 || $input > 320162 && $input < 320166 || $input > 320170 && $input < 320174 || $input > 320176 && $input < 320180 || $input > 320184 && $input < 320188 || $input > 320192 && $input < 320196 || $input > 320201 && $input < 320205 || $input > 320210 && $input < 320214 || $input > 320219 && $input < 320223 || $input > 320228 && $input < 320232 || $input > 320236 && $input < 325100 || $input > 325100 && $input < 325150 || $input > 325150 && $input < 325200 || $input > 325201 && $input < 325300 || $input > 325300 && $input < 325400 || $input > 325401 && $input < 325500 || $input > 325502 && $input < 325550 || $input > 325550 && $input < 325600 || $input > 325606 && $input < 325700 || $input > 325702 && $input < 327005 || $input > 327011 && $input < 327015 || $input > 327018 && $input < 327020 || $input > 327032 && $input < 327035 || $input > 327036 && $input < 327040 || $input > 327043 && $input < 327045 || $input > 327047 && $input < 327050 || $input > 327051 && $input < 327055 || $input > 327063 && $input < 327065 || $input > 327067 && $input < 327070 || $input > 327071 && $input < 327075 || $input > 327077 && $input < 327080 || $input > 327083 && $input < 327085 || $input > 327086 && $input < 327090 || $input > 327094 && $input < 327096 || $input > 327097 && $input < 327100 || $input > 327103 && $input < 327105 || $input > 327108 && $input < 327110 || $input > 327114 && $input < 327116 || $input > 327119 && $input < 327121 || $input > 327124 && $input < 327126 || $input > 327129 && $input < 327131 || $input > 327134 && $input < 327136 || $input > 327139 && $input < 327141 || $input > 327144 && $input < 327146 || $input > 327149 && $input < 327151 || $input > 327154 && $input < 327156 || $input > 327158 && $input < 327160 || $input > 327161 && $input < 327165 || $input > 327169 && $input < 327171 || $input > 327172 && $input < 327175 || $input > 327177 && $input < 327180 || $input > 327181 && $input < 327185 || $input > 327186 && $input < 327190 || $input > 327190 && $input < 327195 || $input > 327196 && $input < 327200 || $input > 327204 && $input < 327206 || $input > 327206 && $input < 327210 || $input > 327213 && $input < 327215 || $input > 327216 && $input < 327220 || $input > 327220 && $input < 327225 || $input > 327227 && $input < 327230 || $input > 327231 && $input < 327235 || $input > 327237 && $input < 327240 || $input > 327242 && $input < 327245 || $input > 327246 && $input < 327250 || $input > 327251 && $input < 327255 || $input > 327258 && $input < 327260 || $input > 327261 && $input < 327265 || $input > 327266 && $input < 327270 || $input > 327273 && $input < 327275 || $input > 327275 && $input < 327280 || $input > 327281 && $input < 327285 || $input > 327288 && $input < 327290 || $input > 327290 && $input < 327295 || $input > 327312 && $input < 327315 || $input > 327316 && $input < 327320 || $input > 327321 && $input < 327325 || $input > 327327 && $input < 327330 || $input > 327339 && $input < 327341 || $input > 327344 && $input < 327346 || $input > 327349 && $input < 327351 || $input > 327354 && $input < 327356 || $input > 327357 && $input < 327360 || $input > 327363 && $input < 327365 || $input > 327368 && $input < 327370 || $input > 327374 && $input < 327376 || $input > 327379 && $input < 327381 || $input > 327381 && $input < 327385 || $input > 327386 && $input < 327390 || $input > 327391 && $input < 327395 || $input > 327398 && $input < 327400 || $input > 327401 && $input < 327405 || $input > 327409 && $input < 327411 || $input > 327411 && $input < 327415 || $input > 327415 && $input < 327420 || $input > 327421 && $input < 327425 || $input > 327427 && $input < 327430 || $input > 327432 && $input < 327435 || $input > 327439 && $input < 327441 || $input > 327442 && $input < 327445 || $input > 327445 && $input < 327450 || $input > 327451 && $input < 330001 || $input > 330008 && $input < 330011 || $input > 330015 && $input < 330018 || $input > 330022 && $input < 330025 || $input > 330027 && $input < 330030 || $input > 330034 && $input < 330037 || $input > 330041 && $input < 330044 || $input > 330048 && $input < 330051 || $input > 330055 && $input < 330058 || $input > 330062 && $input < 330065 || $input > 330069 && $input < 330072 || $input > 330075 && $input < 330078 || $input > 330081 && $input < 330084 || $input > 330088 && $input < 330091 || $input > 330094 && $input < 330097 || $input > 330101 && $input < 330104 || $input > 330107 && $input < 330110 || $input > 330114 && $input < 330117 || $input > 330121 && $input < 330124 || $input > 330128 && $input < 330131 || $input > 330134 && $input < 330137 || $input > 330141 && $input < 330144 || $input > 330148 && $input < 330151 || $input > 330155 && $input < 330158 || $input > 330162 && $input < 330165 || $input > 330169 && $input < 330172 || $input > 330176 && $input < 330179 || $input > 330183 && $input < 331001 || $input > 331010 && $input < 331013 || $input > 331018 && $input < 331021 || $input > 331025 && $input < 331028 || $input > 331032 && $input < 331035 || $input > 331040 && $input < 331042 || $input > 331047 && $input < 331049 || $input > 331053 && $input < 331056 || $input > 331060 && $input < 331063 || $input > 331068 && $input < 331071 || $input > 331075 && $input < 331078 || $input > 331089 && $input < 331092 || $input > 331096 && $input < 331099 || $input > 331104 && $input < 331107 || $input > 331112 && $input < 331115 || $input > 331120 && $input < 331122 || $input > 331125 && $input < 331128 || $input > 331131 && $input < 331134 || $input > 331138 && $input < 331141 || $input > 331146 && $input < 331148 || $input > 331152 && $input < 331155 || $input > 331160 && $input < 331162 || $input > 331167 && $input < 332001 || $input > 332009 && $input < 332012 || $input > 332016 && $input < 332019 || $input > 332021 && $input < 332024 || $input > 332026 && $input < 332029 || $input > 332031 && $input < 332034 || $input > 332037 && $input < 332040 || $input > 332042 && $input < 332045 || $input > 332047 && $input < 332050 || $input > 332054 && $input < 332057 || $input > 332062 && $input < 332065 || $input > 332067 && $input < 332070 || $input > 332074 && $input < 332077 || $input > 332080 && $input < 332083 || $input > 332087 && $input < 332090 || $input > 332095 && $input < 332098 || $input > 332103 && $input < 332106 || $input > 332111 && $input < 335100 || $input > 335101 && $input < 335200 || $input > 335205 && $input < 335300 || $input > 335312 && $input < 335400 || $input > 335409 && $input < 335450 || $input > 335450 && $input < 335500 || $input > 335503 && $input < 335600 || $input > 335600 && $input < 335700 || $input > 335700 && $input < 335800 || $input > 335804 && $input < 335900 || $input > 335906 && $input < 336100 || $input > 336102 && $input < 336200 || $input > 336201 && $input < 336250 || $input > 336250 && $input < 337005 || $input > 337009 && $input < 337011 || $input > 337019 && $input < 337021 || $input > 337024 && $input < 337026 || $input > 337029 && $input < 337031 || $input > 337031 && $input < 337035 || $input > 337038 && $input < 337040 || $input > 337043 && $input < 337045 || $input > 337049 && $input < 337051 || $input > 337054 && $input < 337056 || $input > 337057 && $input < 337065 || $input > 337067 && $input < 337070 || $input > 337073 && $input < 337075 || $input > 337079 && $input < 337081 || $input > 337083 && $input < 337085 || $input > 337089 && $input < 337091 || $input > 337093 && $input < 337095 || $input > 337099 && $input < 337101 || $input > 337109 && $input < 337111 || $input > 337119 && $input < 337121 || $input > 337124 && $input < 337126 || $input > 337129 && $input < 337135 || $input > 337139 && $input < 337141 || $input > 337142 && $input < 337145 || $input > 337154 && $input < 337156 || $input > 337169 && $input < 337171 || $input > 337171 && $input < 337175 || $input > 337184 && $input < 337186 || $input > 337188 && $input < 337190 || $input > 337194 && $input < 337196 || $input > 337203 && $input < 337205 || $input > 337209 && $input < 337211 || $input > 337212 && $input < 337215 || $input > 337219 && $input < 337221 || $input > 337224 && $input < 337226 || $input > 337229 && $input < 337235 || $input > 337243 && $input < 337245 || $input > 337249 && $input < 337251 || $input > 337254 && $input < 337256 || $input > 337257 && $input < 337265 || $input > 337268 && $input < 337270 || $input > 337274 && $input < 337276 || $input > 337284 && $input < 337286 || $input > 337289 && $input < 337291 || $input > 337291 && $input < 337295 || $input > 337298 && $input < 337300 || $input > 337304 && $input < 337306 || $input > 337308 && $input < 337310 || $input > 337319 && $input < 337321 || $input > 337322 && $input < 337325 || $input > 337329 && $input < 337331 || $input > 337333 && $input < 337335 || $input > 337339 && $input < 337341 || $input > 337349 && $input < 337351 || $input > 337354 && $input < 337356 || $input > 337358 && $input < 337365 || $input > 337374 && $input < 337376 || $input > 337377 && $input < 337380 || $input > 337384 && $input < 337386 || $input > 337389 && $input < 337391 || $input > 337392 && $input < 337400 || $input > 337404 && $input < 337406 || $input > 337406 && $input < 337410 || $input > 337424 && $input < 337426 || $input > 337429 && $input < 337431 || $input > 337432 && $input < 337440 || $input > 337444 && $input < 337446 || $input > 337454 && $input < 337456 || $input > 337459 && $input < 337461 || $input > 337461 && $input < 337465 || $input > 337468 && $input < 337470 || $input > 337474 && $input < 337476 || $input > 337478 && $input < 337480 || $input > 337484 && $input < 337486 || $input > 337488 && $input < 337490 || $input > 337498 && $input < 337500 || $input > 337504 && $input < 337506 || $input > 337509 && $input < 337511 || $input > 337514 && $input < 337520 || $input > 337523 && $input < 337525 || $input > 337529 && $input < 337531 || $input > 337534 && $input < 337536 || $input > 337536 && $input < 337540 || $input > 337544 && $input < 337546 || $input > 337547 && $input < 337550 || $input > 337554 && $input < 337556 || $input > 337559 && $input < 337561 || $input > 337564 && $input < 400001 || $input > 400006 && $input < 400009 || $input > 400015 && $input < 400018 || $input > 400024 && $input < 400027 || $input > 400033 && $input < 400036 || $input > 400041 && $input < 400044 || $input > 400068 && $input < 400071 || $input > 400076 && $input < 400079 || $input > 400084 && $input < 400087 || $input > 400091 && $input < 400094 || $input > 400098 && $input < 400101 || $input > 400107 && $input < 400110 || $input > 400114 && $input < 400116 || $input > 400121 && $input < 400124 || $input > 400126 && $input < 400129 || $input > 400134 && $input < 400136 || $input > 400142 && $input < 400145 || $input > 400148 && $input < 400151 || $input > 400153 && $input < 400156 || $input > 400162 && $input < 400165 || $input > 400171 && $input < 400174 || $input > 400180 && $input < 400183 || $input > 400188 && $input < 400191 || $input > 400197 && $input < 400200 || $input > 400207 && $input < 400209 || $input > 400214 && $input < 400217 || $input > 400250 && $input < 400252 || $input > 400290 && $input < 400293 || $input > 400296 && $input < 400299 || $input > 400301 && $input < 400304 || $input > 400306 && $input < 400309 || $input > 400312 && $input < 400315 || $input > 400317 && $input < 400320 || $input > 400322 && $input < 400325 || $input > 400328 && $input < 400331 || $input > 400332 && $input < 400335 || $input > 400339 && $input < 400341 || $input > 400344 && $input < 400347 || $input > 400380 && $input < 400383 || $input > 400384 && $input < 400387 || $input > 400390 && $input < 400393 || $input > 400409 && $input < 400412 || $input > 400414 && $input < 400416 || $input > 400420 && $input < 400422 || $input > 400513 && $input < 400515 || $input > 400520 && $input < 400522 || $input > 400537 && $input < 400539 || $input > 400542 && $input < 400545 || $input > 400549 && $input < 400551 || $input > 400554 && $input < 400557 || $input > 400562 && $input < 400565 || $input > 400569 && $input < 400572 || $input > 400578 && $input < 400581 || $input > 400581 && $input < 400584 || $input > 400587 && $input < 400591 || $input > 400653 && $input < 400655 || $input > 400660 && $input < 400663 || $input > 400664 && $input < 400667 || $input > 400672 && $input < 400675 || $input > 400693 && $input < 400696 || $input > 400699 && $input < 401001 || $input > 401003 && $input < 401006 || $input > 401009 && $input < 401012 || $input > 401018 && $input < 401021 || $input > 401027 && $input < 401030 || $input > 401033 && $input < 401036 || $input > 401042 && $input < 401044 || $input > 401050 && $input < 401053 || $input > 401055 && $input < 401058 || $input > 401065 && $input < 401067 || $input > 401074 && $input < 401076 || $input > 401082 && $input < 401085 || $input > 401091 && $input < 401094 || $input > 401101 && $input < 401103 || $input > 401109 && $input < 401112 || $input > 401118 && $input < 401121 || $input > 401127 && $input < 401130 || $input > 401136 && $input < 401139 || $input > 401145 && $input < 401148 || $input > 401154 && $input < 401157 || $input > 401163 && $input < 401165 || $input > 401181 && $input < 401183 || $input > 401189 && $input < 405100 || $input > 405100 && $input < 405200 || $input > 405204 && $input < 405300 || $input > 405303 && $input < 405400 || $input > 405401 && $input < 407005 || $input > 407014 && $input < 407016 || $input > 407016 && $input < 407025 || $input > 407026 && $input < 407030 || $input > 407039 && $input < 407041 || $input > 407043 && $input < 407045 || $input > 407049 && $input < 407051 || $input > 407051 && $input < 407055 || $input > 407059 && $input < 407061 || $input > 407062 && $input < 407065 || $input > 407069 && $input < 407071 || $input > 407079 && $input < 407081 || $input > 407082 && $input < 407085 || $input > 407089 && $input < 407091 || $input > 407094 && $input < 407096 || $input > 407097 && $input < 407105 || $input > 407108 && $input < 407110 || $input > 407116 && $input < 407120 || $input > 407124 && $input < 407126 || $input > 407126 && $input < 407130 || $input > 407132 && $input < 407135 || $input > 407142 && $input < 407145 || $input > 407149 && $input < 407151 || $input > 407159 && $input < 407161 || $input > 407164 && $input < 407166 || $input > 407166 && $input < 407170 || $input > 407174 && $input < 407176 || $input > 407176 && $input < 407180 || $input > 407182 && $input < 407185 || $input > 407189 && $input < 407191 || $input > 407194 && $input < 407196 || $input > 407199 && $input < 407205 || $input > 407209 && $input < 407211 || $input > 407219 && $input < 407221 || $input > 407222 && $input < 407225 || $input > 407226 && $input < 407230 || $input > 407234 && $input < 407236 || $input > 407238 && $input < 407240 || $input > 407244 && $input < 407246 || $input > 407248 && $input < 407250 || $input > 407254 && $input < 407256 || $input > 407262 && $input < 407265 || $input > 407267 && $input < 407270 || $input > 407282 && $input < 407285 || $input > 407289 && $input < 407291 || $input > 407293 && $input < 407295 || $input > 407304 && $input < 407306 || $input > 407306 && $input < 407310 || $input > 407312 && $input < 407315 || $input > 407319 && $input < 407321 || $input > 407324 && $input < 407326 || $input > 407329 && $input < 407335 || $input > 407343 && $input < 407345 || $input > 407354 && $input < 407356 || $input > 407356 && $input < 407360 || $input > 407362 && $input < 407365 || $input > 407367 && $input < 407370 || $input > 407374 && $input < 407376 || $input > 407376 && $input < 407380 || $input > 407384 && $input < 407386 || $input > 407386 && $input < 407390 || $input > 407391 && $input < 407395 || $input > 407399 && $input < 407401 || $input > 407402 && $input < 407405 || $input > 407407 && $input < 407410 || $input > 407414 && $input < 407416 || $input > 407416 && $input < 407420 || $input > 407424 && $input < 407426 || $input > 407434 && $input < 407436 || $input > 407436 && $input < 407440 || $input > 407442 && $input < 407445 || $input > 407459 && $input < 407461 || $input > 407462 && $input < 407465 || $input > 407468 && $input < 407470 || $input > 407474 && $input < 407476 || $input > 407478 && $input < 407480 || $input > 407484 && $input < 407486 || $input > 407493 && $input < 407495 || $input > 407497 && $input < 407500 || $input > 407501 && $input < 407505 || $input > 407509 && $input < 407511 || $input > 407513 && $input < 407515 || $input > 407524 && $input < 407526 || $input > 407528 && $input < 407530 || $input > 407534 && $input < 407536 || $input > 407536 && $input < 407540 || $input > 407540 && $input < 407545 || $input > 407547 && $input < 407550 || $input > 407554 && $input < 407556 || $input > 407556 && $input < 407560 || $input > 407579 && $input < 407581 || $input > 407582 && $input < 407585 || $input > 407587 && $input < 407590 || $input > 407591 && $input < 407595 || $input > 407599 && $input < 407601 || $input > 407601 && $input < 410001 || $input > 410005 && $input < 410008 || $input > 410011 && $input < 410013 || $input > 410013 && $input < 410017 || $input > 410021 && $input < 410025 || $input > 410028 && $input < 410032 || $input > 410035 && $input < 410039 || $input > 410044 && $input < 410048 || $input > 410053 && $input < 410057 || $input > 410061 && $input < 410065 || $input > 410068 && $input < 410072 || $input > 410074 && $input < 410078 || $input > 410082 && $input < 410085 || $input > 410098 && $input < 410100 || $input > 410104 && $input < 410108 || $input > 410110 && $input < 410114 || $input > 410121 && $input < 410123 || $input > 410136 && $input < 410138 || $input > 410144 && $input < 410147 || $input > 410156 && $input < 410159 || $input > 410163 && $input < 410166 || $input > 410172 && $input < 410174 || $input > 410178 && $input < 410181 || $input > 410184 && $input < 410188 || $input > 410192 && $input < 410195 || $input > 410197 && $input < 410202 || $input > 410205 && $input < 410209 || $input > 410214 && $input < 410219 || $input > 410224 && $input < 410227 || $input > 410232 && $input < 410234 || $input > 410244 && $input < 410248 || $input > 410252 && $input < 410256 || $input > 410259 && $input < 410264 || $input > 410266 && $input < 410269 || $input > 410273 && $input < 410276 || $input > 410279 && $input < 410282 || $input > 410286 && $input < 410290 || $input > 410292 && $input < 410297 || $input > 410299 && $input < 410302 || $input > 410307 && $input < 410310 || $input > 410314 && $input < 410318 || $input > 410320 && $input < 410325 || $input > 410328 && $input < 410332 || $input > 410335 && $input < 410339 || $input > 410342 && $input < 410346 || $input > 410349 && $input < 410353 || $input > 410357 && $input < 410361 || $input > 410365 && $input < 410369 || $input > 410374 && $input < 410377 || $input > 410382 && $input < 410386 || $input > 410390 && $input < 410394 || $input > 410397 && $input < 410401 || $input > 410406 && $input < 410410 || $input > 410415 && $input < 410419 || $input > 410424 && $input < 410428 || $input > 410433 && $input < 410437 || $input > 410439 && $input < 410443 || $input > 410446 && $input < 410450 || $input > 410453 && $input < 410457 || $input > 410460 && $input < 410464 || $input > 410469 && $input < 410473 || $input > 410477 && $input < 410481 || $input > 410486 && $input < 410490 || $input > 410493 && $input < 410495 || $input > 410499 && $input < 410503 || $input > 410508 && $input < 410512 || $input > 410516 && $input < 410518 || $input > 410524 && $input < 410526 || $input > 410528 && $input < 410532 || $input > 410580 && $input < 410583 || $input > 410587 && $input < 410591 || $input > 410609 && $input < 415100 || $input > 415103 && $input < 415200 || $input > 415201 && $input < 415300 || $input > 415302 && $input < 415400 || $input > 415402 && $input < 415500 || $input > 415500 && $input < 415600 || $input > 415600 && $input < 415700 || $input > 415700 && $input < 415800 || $input > 415805 && $input < 417005 || $input > 417009 && $input < 417011 || $input > 417013 && $input < 417015 || $input > 417018 && $input < 417020 || $input > 417023 && $input < 417025 || $input > 417029 && $input < 417031 || $input > 417031 && $input < 417035 || $input > 417037 && $input < 417040 || $input > 417048 && $input < 417050 || $input > 417054 && $input < 417056 || $input > 417056 && $input < 417060 || $input > 417069 && $input < 417071 || $input > 417071 && $input < 417075 || $input > 417078 && $input < 417080 || $input > 417084 && $input < 417086 || $input > 417086 && $input < 417090 || $input > 417094 && $input < 417096 || $input > 417098 && $input < 417100 || $input > 417106 && $input < 417110 || $input > 417119 && $input < 417121 || $input > 417138 && $input < 417140 || $input > 417149 && $input < 417151 || $input > 417153 && $input < 417155 || $input > 417159 && $input < 417161 || $input > 417162 && $input < 417165 || $input > 417169 && $input < 417171 || $input > 417172 && $input < 417175 || $input > 417177 && $input < 417180 || $input > 417184 && $input < 417186 || $input > 417187 && $input < 417190 || $input > 417193 && $input < 417195 || $input > 417197 && $input < 417200 || $input > 417203 && $input < 417205 || $input > 417209 && $input < 417211 || $input > 417211 && $input < 417215 || $input > 417226 && $input < 417230 || $input > 417244 && $input < 417246 || $input > 417248 && $input < 417250 || $input > 417273 && $input < 417275 || $input > 417284 && $input < 417286 || $input > 417288 && $input < 417290 || $input > 417297 && $input < 417300 || $input > 417303 && $input < 417305 || $input > 417309 && $input < 417311 || $input > 417313 && $input < 417315 || $input > 417317 && $input < 417320 || $input > 417324 && $input < 417326 || $input > 417326 && $input < 417330 || $input > 417333 && $input < 417335 || $input > 417339 && $input < 417341 || $input > 417342 && $input < 417345 || $input > 417349 && $input < 417351 || $input > 417352 && $input < 417355 || $input > 417358 && $input < 417360 || $input > 417369 && $input < 417371 || $input > 417372 && $input < 417375 || $input > 417384 && $input < 417386 || $input > 417388 && $input < 417390 || $input > 417394 && $input < 417396 || $input > 417397 && $input < 417400 || $input > 417404 && $input < 417406 || $input > 417406 && $input < 417410 || $input > 417419 && $input < 417421 || $input > 417421 && $input < 417425 || $input > 417426 && $input < 417430 || $input > 417432 && $input < 417435 || $input > 417439 && $input < 417441 || $input > 417441 && $input < 417445 || $input > 417446 && $input < 417450 || $input > 417452 && $input < 417455 || $input > 417459 && $input < 417461 || $input > 417461 && $input < 417495 || $input > 417502 && $input < 417515 || $input > 417516 && $input < 417520 || $input > 417524 && $input < 417526 || $input > 417527 && $input < 417530 || $input > 417539 && $input < 417541 || $input > 417541 && $input < 417545 || $input > 417547 && $input < 417550 || $input > 417553 && $input < 417555 || $input > 417559 && $input < 417561 || $input > 417563 && $input < 417565 || $input > 417568 && $input < 417570 || $input > 417572 && $input < 417575 || $input > 417578 && $input < 417580 || $input > 417589 && $input < 417591 || $input > 417591 && $input < 417595 || $input > 417601 && $input < 417605 || $input > 417608 && $input < 417610 || $input > 417613 && $input < 417615 || $input > 417618 && $input < 417620 || $input > 417623 && $input < 417625 || $input > 417628 && $input < 420001 || $input > 420006 && $input < 420008 || $input > 420084 && $input < 420086 || $input > 420175 && $input < 420177 || $input > 420181 && $input < 420184 || $input > 420186 && $input < 420189 || $input > 420189 && $input < 420198 || $input > 420198 && $input < 425100 || $input > 425103 && $input < 425200 || $input > 425202 && $input < 425300 || $input > 425302 && $input < 427005 || $input > 427007 && $input < 427010 || $input > 427012 && $input < 427015 || $input > 427023 && $input < 427025 || $input > 427029 && $input < 427031 || $input > 427031 && $input < 427035 || $input > 427039 && $input < 427041 || $input > 427042 && $input < 427045 || $input > 427049 && $input < 427051 || $input > 427054 && $input < 427056 || $input > 427056 && $input < 427060 || $input > 427063 && $input < 427065 || $input > 427071 && $input < 427075 || $input > 427077 && $input < 427080 || $input > 427081 && $input < 427085 || $input > 427091 && $input < 427095 || $input > 427095 && $input < 427100 || $input > 427103 && $input < 427105 || $input > 427109 && $input < 427111 || $input > 427112 && $input < 427115 || $input > 427116 && $input < 427120 || $input > 427125 && $input < 427130 || $input > 427131 && $input < 427135 || $input > 427139 && $input < 427141 || $input > 427141 && $input < 427145 || $input > 427147 && $input < 427150 || $input > 427154 && $input < 427156 || $input > 427157 && $input < 427160 || $input > 427162 && $input < 427165 || $input > 427169 && $input < 427171 || $input > 427171 && $input < 427175 || $input > 427176 && $input < 427180 || $input > 427184 && $input < 427186 || $input > 427188 && $input < 427190 || $input > 427190 && $input < 427200 || $input > 427204 && $input < 427206 || $input > 427207 && $input < 427210 || $input > 427210 && $input < 427215 || $input > 427220 && $input < 427230 || $input > 427231 && $input < 427235 || $input > 427235 && $input < 427240 || $input > 427243 && $input < 427245 || $input > 427246 && $input < 427250 || $input > 427251 && $input < 427255 || $input > 427256 && $input < 427260 || $input > 427264 && $input < 427266 || $input > 427266 && $input < 427270 || $input > 427273 && $input < 427275 || $input > 427279 && $input < 427281 || $input > 427281 && $input < 427285 || $input > 427286 && $input < 427290 || $input > 427293 && $input < 427295 || $input > 427299 && $input < 427301 || $input > 427302 && $input < 427305 || $input > 427309 && $input < 427311 || $input > 427312 && $input < 427315 || $input > 427318 && $input < 427320 || $input > 427324 && $input < 427326 || $input > 427327 && $input < 427330 || $input > 427334 && $input < 427336 || $input > 427339 && $input < 427341 || $input > 427341 && $input < 427345 || $input > 427349 && $input < 427351 || $input > 427351 && $input < 427355 || $input > 427357 && $input < 427360 || $input > 427368 && $input < 427370 || $input > 427374 && $input < 427376 || $input > 427379 && $input < 427381 || $input > 427381 && $input < 427385 || $input > 427389 && $input < 430001 || $input > 430003 && $input < 430011 || $input > 430018 && $input < 430021 || $input > 430023 && $input < 430031 || $input > 430034 && $input < 430041 || $input > 430044 && $input < 430051 || $input > 430054 && $input < 430061 || $input > 430069 && $input < 430071 || $input > 430077 && $input < 430081 || $input > 430087 && $input < 430091 || $input > 430096 && $input < 430101 || $input > 430103 && $input < 430111 || $input > 430115 && $input < 430121 || $input > 430124 && $input < 430131 || $input > 430136 && $input < 430141 || $input > 430146 && $input < 430151 || $input > 430156 && $input < 430161 || $input > 430165 && $input < 430171 || $input > 430174 && $input < 430181 || $input > 430184 && $input < 430191 || $input > 430196 && $input < 430201 || $input > 430204 && $input < 430211 || $input > 430214 && $input < 430221 || $input > 430225 && $input < 430231 || $input > 430235 && $input < 430241 || $input > 430245 && $input < 430251 || $input > 430253 && $input < 430261 || $input > 430265 && $input < 430271 || $input > 430275 && $input < 430281 || $input > 430285 && $input < 430291 || $input > 430295 && $input < 430301 || $input > 430308 && $input < 430311 || $input > 430316 && $input < 430321 || $input > 430325 && $input < 430331 || $input > 430339 && $input < 430341 || $input > 430344 && $input < 430351 || $input > 430353 && $input < 430361 || $input > 430366 && $input < 430372 || $input > 430376 && $input < 430381 || $input > 430386 && $input < 430391 || $input > 430397 && $input < 430401 || $input > 430407 && $input < 430411 || $input > 430415 && $input < 430421 || $input > 430425 && $input < 430431 || $input > 430435 && $input < 435100 || $input > 435103 && $input < 435200 || $input > 435200 && $input < 435250 || $input > 435250 && $input < 435300 || $input > 435300 && $input < 435400 || $input > 435402 && $input < 435500 || $input > 435505 && $input < 435600 || $input > 435613 && $input < 435700 || $input > 435701 && $input < 437005 || $input > 437007 && $input < 437010 || $input > 437012 && $input < 437015 || $input > 437016 && $input < 437020 || $input > 437021 && $input < 437025 || $input > 437027 && $input < 437030 || $input > 437033 && $input < 437035 || $input > 437037 && $input < 437040 || $input > 437042 && $input < 437045 || $input > 437047 && $input < 437050 || $input > 437053 && $input < 437055 || $input > 437056 && $input < 437060 || $input > 437063 && $input < 437065 || $input > 437065 && $input < 437070 || $input > 437071 && $input < 437075 || $input > 437077 && $input < 437080 || $input > 437080 && $input < 437085 || $input > 437089 && $input < 437091 || $input > 437092 && $input < 437095 || $input > 437098 && $input < 437100 || $input > 437104 && $input < 437106 || $input > 437109 && $input < 437111 || $input > 437113 && $input < 437125 || $input > 437133 && $input < 437135 || $input > 437137 && $input < 437140 || $input > 437140 && $input < 437145 || $input > 437149 && $input < 437151 || $input > 437151 && $input < 437155 || $input > 437158 && $input < 437160 || $input > 437163 && $input < 437165 || $input > 437167 && $input < 437170 || $input > 437170 && $input < 437175 || $input > 437175 && $input < 437180 || $input > 437180 && $input < 437185 || $input > 437189 && $input < 437191 || $input > 437192 && $input < 437195 || $input > 437195 && $input < 437200 || $input > 437202 && $input < 437205 || $input > 437208 && $input < 437210 || $input > 437210 && $input < 437215 || $input > 437215 && $input < 437220 || $input > 437220 && $input < 437225 || $input > 437237 && $input < 437240 || $input > 437240 && $input < 437245 || $input > 437245 && $input < 437250 || $input > 437251 && $input < 437255 || $input > 437256 && $input < 437260 || $input > 437260 && $input < 437265 || $input > 437265 && $input < 437270 || $input > 437274 && $input < 437276 || $input > 437277 && $input < 437280 || $input > 437284 && $input < 437286 || $input > 437287 && $input < 437290 || $input > 437290 && $input < 437295 || $input > 437295 && $input < 437300 || $input > 437301 && $input < 437305 || $input > 437305 && $input < 437310 || $input > 437312 && $input < 437315 || $input > 437318 && $input < 437320 || $input > 437320 && $input < 437325 || $input > 437329 && $input < 437331 || $input > 437332 && $input < 437335 || $input > 437339 && $input < 437341 || $input > 437343 && $input < 437345 || $input > 437349 && $input < 437351 || $input > 437352 && $input < 437355 || $input > 437359 && $input < 437361 || $input > 437363 && $input < 437365 || $input > 437366 && $input < 437370 || $input > 437374 && $input < 437376 || $input > 437376 && $input < 437380 || $input > 437384 && $input < 437386 || $input > 437387 && $input < 437390 || $input > 437390 && $input < 440001 || $input > 440001 && $input < 440004 || $input > 440007 && $input < 440010 || $input > 440014 && $input < 440017 || $input > 440021 && $input < 440024 || $input > 440027 && $input < 440030 || $input > 440034 && $input < 440037 || $input > 440039 && $input < 440042 || $input > 440046 && $input < 440049 || $input > 440052 && $input < 440055 || $input > 440058 && $input < 440060 || $input > 440064 && $input < 440067 || $input > 440070 && $input < 440073 || $input > 440075 && $input < 440078 || $input > 440080 && $input < 440083 || $input > 440086 && $input < 440089 || $input > 440092 && $input < 440095 || $input > 440098 && $input < 440101 || $input > 440105 && $input < 440108 || $input > 440111 && $input < 440114 || $input > 440118 && $input < 440120 || $input > 440129 && $input < 440132 || $input > 440136 && $input < 440139 || $input > 440141 && $input < 440144 || $input > 440146 && $input < 440149 || $input > 440152 && $input < 440155 || $input > 440157 && $input < 440160 || $input > 440164 && $input < 440167 || $input > 440171 && $input < 440174 || $input > 440177 && $input < 440180 || $input > 440183 && $input < 440186 || $input > 440190 && $input < 440192 || $input > 440193 && $input < 440196 || $input > 440204 && $input < 440207 || $input > 440211 && $input < 440214 || $input > 440218 && $input < 440221 || $input > 440224 && $input < 440227 || $input > 440230 && $input < 440233 || $input > 440234 && $input < 440237 || $input > 440240 && $input < 440243 || $input > 440247 && $input < 440250 || $input > 440254 && $input < 440257 || $input > 440261 && $input < 440264 || $input > 440268 && $input < 440271 || $input > 440274 && $input < 440277 || $input > 440278 && $input < 445100 || $input > 445101 && $input < 445200 || $input > 445202 && $input < 445300 || $input > 445305 && $input < 447005 || $input > 447008 && $input < 447010 || $input > 447012 && $input < 447015 || $input > 447017 && $input < 447020 || $input > 447024 && $input < 447026 || $input > 447026 && $input < 447030 || $input > 447033 && $input < 447035 || $input > 447037 && $input < 447040 || $input > 447044 && $input < 447046 || $input > 447046 && $input < 447050 || $input > 447051 && $input < 447055 || $input > 447057 && $input < 447060 || $input > 447063 && $input < 447065 || $input > 447067 && $input < 447070 || $input > 447073 && $input < 447075 || $input > 447075 && $input < 447080 || $input > 447081 && $input < 447085 || $input > 447089 && $input < 447091 || $input > 447091 && $input < 447095 || $input > 447097 && $input < 447100 || $input > 447102 && $input < 447105 || $input > 447112 && $input < 447115 || $input > 447119 && $input < 447121 || $input > 447122 && $input < 447125 || $input > 447133 && $input < 447135 || $input > 447135 && $input < 447140 || $input > 447140 && $input < 447145 || $input > 447149 && $input < 447151 || $input > 447152 && $input < 447155 || $input > 447158 && $input < 447160 || $input > 447164 && $input < 447166 || $input > 447167 && $input < 447170 || $input > 447174 && $input < 447176 || $input > 447176 && $input < 447180 || $input > 447183 && $input < 447185 || $input > 447189 && $input < 447191 || $input > 447192 && $input < 447195 || $input > 447197 && $input < 447200 || $input > 447204 && $input < 447206 || $input > 447208 && $input < 447210 || $input > 447214 && $input < 447216 || $input > 447216 && $input < 447220 || $input > 447224 && $input < 447226 || $input > 447227 && $input < 447230 || $input > 447234 && $input < 447236 || $input > 447236 && $input < 447240 || $input > 447241 && $input < 447245 || $input > 447247 && $input < 447250 || $input > 447252 && $input < 447255 || $input > 447258 && $input < 447260 || $input > 447264 && $input < 447266 || $input > 447266 && $input < 447270 || $input > 447272 && $input < 447275 || $input > 447276 && $input < 447280 || $input > 447294 && $input < 447296 || $input > 447297 && $input < 447300 || $input > 447300 && $input < 447310 || $input > 447313 && $input < 447315 || $input > 447316 && $input < 447320 || $input > 447323 && $input < 447325 || $input > 447327 && $input < 447330 || $input > 447332 && $input < 447335 || $input > 447337 && $input < 447340 || $input > 447341 && $input < 447345 || $input > 447348 && $input < 447350 || $input > 447350 && $input < 447355 || $input > 447357 && $input < 447360 || $input > 447364 && $input < 450001 || $input > 450002 && $input < 450006 || $input > 450012 && $input < 450015 || $input > 450021 && $input < 450025 || $input > 450027 && $input < 450030 || $input > 450038 && $input < 450041 || $input > 450047 && $input < 450052 || $input > 450056 && $input < 450058 || $input > 450062 && $input < 450066 || $input > 450070 && $input < 450074 || $input > 450077 && $input < 450081 || $input > 450084 && $input < 450086 || $input > 450086 && $input < 450090 || $input > 450093 && $input < 450097 || $input > 450099 && $input < 450103 || $input > 450104 && $input < 450108 || $input > 450113 && $input < 450116 || $input > 450119 && $input < 450121 || $input > 450132 && $input < 450135 || $input > 450137 && $input < 450141 || $input > 450146 && $input < 450151 || $input > 450155 && $input < 450158 || $input > 450164 && $input < 450166 || $input > 450167 && $input < 455100 || $input > 455104 && $input < 455200 || $input > 455204 && $input < 455300 || $input > 455303 && $input < 457005 || $input > 457006 && $input < 457010 || $input > 457014 && $input < 457016 || $input > 457032 && $input < 457035 || $input > 457037 && $input < 457040 || $input > 457042 && $input < 457045 || $input > 457048 && $input < 457050 || $input > 457054 && $input < 457056 || $input > 457056 && $input < 457060 || $input > 457061 && $input < 457065 || $input > 457066 && $input < 457070 || $input > 457072 && $input < 457075 || $input > 457077 && $input < 457080 || $input > 457082 && $input < 457085 || $input > 457088 && $input < 457090 || $input > 457094 && $input < 457096 || $input > 457103 && $input < 457105 || $input > 457107 && $input < 457110 || $input > 457114 && $input < 457116 || $input > 457118 && $input < 457120 || $input > 457124 && $input < 457126 || $input > 457126 && $input < 457130 || $input > 457138 && $input < 457140 || $input > 457144 && $input < 457146 || $input > 457154 && $input < 457156 || $input > 457157 && $input < 457160 || $input > 457169 && $input < 457171 || $input > 457171 && $input < 457175 || $input > 457179 && $input < 457181 || $input > 457183 && $input < 457185 || $input > 457188 && $input < 457190 || $input > 457194 && $input < 457196 || $input > 457199 && $input < 457201 || $input > 457204 && $input < 457210 || $input > 457219 && $input < 457221 || $input > 457239 && $input < 457241 || $input > 457241 && $input < 457245 || $input > 457248 && $input < 457250 || $input > 457253 && $input < 457255 || $input > 457263 && $input < 457265 || $input > 457268 && $input < 457270 || $input > 457272 && $input < 457275 || $input > 457278 && $input < 457280 || $input > 457284 && $input < 457286 || $input > 457286 && $input < 457290 || $input > 457307 && $input < 457310 || $input > 457319 && $input < 457321 || $input > 457322 && $input < 457325 || $input > 457326 && $input < 457330 || $input > 457334 && $input < 457336 || $input > 457336 && $input < 457340 || $input > 457341 && $input < 457345 || $input > 457349 && $input < 457351 || $input > 457351 && $input < 457355 || $input > 457357 && $input < 457360 || $input > 457364 && $input < 457366 || $input > 457367 && $input < 457370 || $input > 457374 && $input < 500001 || $input > 500003 && $input < 500007 || $input > 500010 && $input < 500014 || $input > 500015 && $input < 500019 || $input > 500020 && $input < 500024 || $input > 500026 && $input < 500030 || $input > 500031 && $input < 500035 || $input > 500036 && $input < 500040 || $input > 500041 && $input < 500045 || $input > 500047 && $input < 500051 || $input > 500053 && $input < 500057 || $input > 500059 && $input < 500063 || $input > 500064 && $input < 500068 || $input > 500069 && $input < 500073 || $input > 500075 && $input < 500079 || $input > 500080 && $input < 500084 || $input > 500086 && $input < 500090 || $input > 500092 && $input < 500096 || $input > 500097 && $input < 500101 || $input > 500103 && $input < 500107 || $input > 500108 && $input < 500112 || $input > 500113 && $input < 500117 || $input > 500118 && $input < 500122 || $input > 500123 && $input < 500127 || $input > 500128 && $input < 500132 || $input > 500133 && $input < 500137 || $input > 500138 && $input < 500142 || $input > 500142 && $input < 500146 || $input > 500148 && $input < 500152 || $input > 500153 && $input < 500157 || $input > 500159 && $input < 500163 || $input > 500165 && $input < 500167 || $input > 500171 && $input < 500173 || $input > 500174 && $input < 500177 || $input > 500178 && $input < 500182 || $input > 500183 && $input < 500187 || $input > 500190 && $input < 500193 || $input > 500194 && $input < 500198 || $input > 500199 && $input < 500203 || $input > 500205 && $input < 500209 || $input > 500210 && $input < 500214 || $input > 500214 && $input < 500218 || $input > 500218 && $input < 500222 || $input > 500223 && $input < 500227 || $input > 500228 && $input < 500232 || $input > 500234 && $input < 500238 || $input > 500240 && $input < 500244 || $input > 500246 && $input < 500250 || $input > 500251 && $input < 500255 || $input > 500256 && $input < 500260 || $input > 500260 && $input < 500264 || $input > 500265 && $input < 500269 || $input > 500271 && $input < 500275 || $input > 500277 && $input < 500281 || $input > 500284 && $input < 500288 || $input > 500290 && $input < 500294 || $input > 500295 && $input < 500299 || $input > 500302 && $input < 500306 || $input > 500308 && $input < 500312 || $input > 500314 && $input < 500318 || $input > 500318 && $input < 500322 || $input > 500323 && $input < 500326 || $input > 500327 && $input < 500331 || $input > 500334 && $input < 500338 || $input > 500338 && $input < 500342 || $input > 500343 && $input < 500348 || $input > 500348 && $input < 500352 || $input > 500352 && $input < 500356 || $input > 500356 && $input < 500360 || $input > 500361 && $input < 500365 || $input > 500367 && $input < 500371 || $input > 500372 && $input < 500376 || $input > 500377 && $input < 500381 || $input > 500382 && $input < 500386 || $input > 500389 && $input < 500392 || $input > 500393 && $input < 500397 || $input > 500398 && $input < 500402 || $input > 500403 && $input < 500407 || $input > 500409 && $input < 500412 || $input > 500414 && $input < 500418 || $input > 500419 && $input < 500423 || $input > 500423 && $input < 500427 || $input > 500428 && $input < 500432 || $input > 500435 && $input < 500439 || $input > 500440 && $input < 500444 || $input > 500446 && $input < 500449 || $input > 500450 && $input < 500454 || $input > 500455 && $input < 500459 || $input > 500461 && $input < 500464 || $input > 500466 && $input < 500470 || $input > 500475 && $input < 500481 || $input > 500486 && $input < 505100 || $input > 505100 && $input < 505200 || $input > 505200 && $input < 505300 || $input > 505303 && $input < 505400 || $input > 505401 && $input < 505500 || $input > 505501 && $input < 505600 || $input > 505600 && $input < 505700 || $input > 505700 && $input < 505800 || $input > 505801 && $input < 507005 || $input > 507005 && $input < 507010 || $input > 507015 && $input < 507020 || $input > 507020 && $input < 507025 || $input > 507028 && $input < 507030 || $input > 507030 && $input < 507035 || $input > 507046 && $input < 507050 || $input > 507055 && $input < 507060 || $input > 507061 && $input < 507065 || $input > 507067 && $input < 507070 || $input > 507072 && $input < 507075 || $input > 507075 && $input < 507080 || $input > 507083 && $input < 507085 || $input > 507086 && $input < 507090 || $input > 507099 && $input < 507101 || $input > 507101 && $input < 507105 || $input > 507107 && $input < 507110 || $input > 507117 && $input < 507120 || $input > 507121 && $input < 507125 || $input > 507136 && $input < 507150 || $input > 507151 && $input < 507155 || $input > 507158 && $input < 507160 || $input > 507160 && $input < 507165 || $input > 507166 && $input < 507170 || $input > 507170 && $input < 507175 || $input > 507176 && $input < 507180 || $input > 507184 && $input < 507186 || $input > 507187 && $input < 507190 || $input > 507190 && $input < 507195 || $input > 507197 && $input < 507200 || $input > 507204 && $input < 507206 || $input > 507207 && $input < 507210 || $input > 507211 && $input < 507215 || $input > 507223 && $input < 507225 || $input > 507225 && $input < 507230 || $input > 507232 && $input < 507235 || $input > 507241 && $input < 507245 || $input > 507248 && $input < 507250 || $input > 507254 && $input < 507256 || $input > 507257 && $input < 507260 || $input > 507264 && $input < 507266 || $input > 507268 && $input < 507270 || $input > 507272 && $input < 510001 || $input > 510012 && $input < 510014 || $input > 510014 && $input < 510016 || $input > 510017 && $input < 510021 || $input > 510022 && $input < 510026 || $input > 510026 && $input < 510029 || $input > 510034 && $input < 510037 || $input > 510037 && $input < 510039 || $input > 510042 && $input < 510045 || $input > 510050 && $input < 510053 || $input > 510057 && $input < 510061 || $input > 510066 && $input < 510070 || $input > 510070 && $input < 510072 || $input > 510073 && $input < 510077 || $input > 510090 && $input < 510093 || $input > 510097 && $input < 510101 || $input > 510106 && $input < 510109 || $input > 510122 && $input < 510124 || $input > 510129 && $input < 510134 || $input > 510138 && $input < 510141 || $input > 510147 && $input < 510149 || $input > 510179 && $input < 510181 || $input > 510187 && $input < 510189 || $input > 510194 && $input < 510197 || $input > 510202 && $input < 510205 || $input > 510211 && $input < 510213 || $input > 510299 && $input < 510301 || $input > 510309 && $input < 510311 || $input > 510319 && $input < 510321 || $input > 510329 && $input < 510331 || $input > 510339 && $input < 510341 || $input > 510348 && $input < 510351 || $input > 510359 && $input < 510361 || $input > 510369 && $input < 510371 || $input > 510379 && $input < 510381 || $input > 510383 && $input < 510399 || $input > 510399 && $input < 510401 || $input > 510408 && $input < 515100 || $input > 515103 && $input < 515200 || $input > 515210 && $input < 515300 || $input > 515305 && $input < 515400 || $input > 515408 && $input < 515500 || $input > 515521 && $input < 515600 || $input > 515607 && $input < 515700 || $input > 515705 && $input < 515800 || $input > 515802 && $input < 515850 || $input > 515850 && $input < 515900 || $input > 515904 && $input < 516100 || $input > 516118 && $input < 517005 || $input > 517009 && $input < 517011 || $input > 517014 && $input < 517016 || $input > 517019 && $input < 517021 || $input > 517023 && $input < 517030 || $input > 517034 && $input < 517036 || $input > 517038 && $input < 517040 || $input > 517044 && $input < 517046 || $input > 517049 && $input < 517051 || $input > 517054 && $input < 517056 || $input > 517059 && $input < 517061 || $input > 517061 && $input < 517065 || $input > 517069 && $input < 517071 || $input > 517074 && $input < 517076 || $input > 517079 && $input < 517081 || $input > 517084 && $input < 517086 || $input > 517089 && $input < 517091 || $input > 517094 && $input < 517096 || $input > 517099 && $input < 517101 || $input > 517104 && $input < 517110 || $input > 517113 && $input < 517115 || $input > 517119 && $input < 517121 || $input > 517124 && $input < 517126 || $input > 517129 && $input < 517131 || $input > 517134 && $input < 517136 || $input > 517139 && $input < 517141 || $input > 517144 && $input < 517146 || $input > 517149 && $input < 517151 || $input > 517154 && $input < 517156 || $input > 517157 && $input < 517160 || $input > 517169 && $input < 517171 || $input > 517174 && $input < 517176 || $input > 517179 && $input < 517181 || $input > 517184 && $input < 517186 || $input > 517189 && $input < 517191 || $input > 517194 && $input < 517196 || $input > 517199 && $input < 517201 || $input > 517201 && $input < 517205 || $input > 517207 && $input < 517210 || $input > 517212 && $input < 517215 || $input > 517218 && $input < 517220 || $input > 517224 && $input < 517226 || $input > 517229 && $input < 517231 || $input > 517231 && $input < 517235 || $input > 517238 && $input < 517240 || $input > 517244 && $input < 517246 || $input > 517246 && $input < 517250 || $input > 517254 && $input < 517256 || $input > 517267 && $input < 517270 || $input > 517270 && $input < 517275 || $input > 517277 && $input < 517280 || $input > 517289 && $input < 517291 || $input > 517294 && $input < 517296 || $input > 517297 && $input < 517305 || $input > 517307 && $input < 517310 || $input > 517314 && $input < 517316 || $input > 517319 && $input < 517321 || $input > 517324 && $input < 517326 || $input > 517329 && $input < 517335 || $input > 517344 && $input < 517346 || $input > 517349 && $input < 517351 || $input > 517354 && $input < 517356 || $input > 517357 && $input < 517360 || $input > 517369 && $input < 517371 || $input > 517374 && $input < 517376 || $input > 517377 && $input < 517385 || $input > 517393 && $input < 517395 || $input > 517399 && $input < 517401 || $input > 517403 && $input < 517405 || $input > 517406 && $input < 517410 || $input > 517414 && $input < 517416 || $input > 517419 && $input < 517421 || $input > 517424 && $input < 517426 || $input > 517429 && $input < 517431 || $input > 517434 && $input < 517436 || $input > 517437 && $input < 517445 || $input > 517449 && $input < 517451 || $input > 517454 && $input < 517456 || $input > 517458 && $input < 517465 || $input > 517468 && $input < 517470 || $input > 517474 && $input < 517476 || $input > 517476 && $input < 517480 || $input > 517484 && $input < 517486 || $input > 517489 && $input < 517491 || $input > 517494 && $input < 517496 || $input > 517499 && $input < 517501 || $input > 517504 && $input < 517515 || $input > 517519 && $input < 517521 || $input > 517521 && $input < 517525 || $input > 517528 && $input < 517530 || $input > 517533 && $input < 517535 || $input > 517539 && $input < 517541 || $input > 517541 && $input < 517545 || $input > 517549 && $input < 517551 || $input > 517554 && $input < 517556 || $input > 517557 && $input < 517565 || $input > 517569 && $input < 517571 || $input > 517571 && $input < 517575 || $input > 517579 && $input < 517581 || $input > 517583 && $input < 517585 || $input > 517588 && $input < 517590 || $input > 517594 && $input < 517596 || $input > 517599 && $input < 517601 || $input > 517604 && $input < 517610 || $input > 517611 && $input < 517615 || $input > 517619 && $input < 517621 || $input > 517624 && $input < 517626 || $input > 517629 && $input < 517631 || $input > 517633 && $input < 517640 || $input > 517642 && $input < 517645 || $input > 517649 && $input < 517651 || $input > 517652 && $input < 517655 || $input > 517658 && $input < 517660 || $input > 517664 && $input < 517666 || $input > 517672 && $input < 517675 || $input > 517684 && $input < 517686 || $input > 517689 && $input < 517691 || $input > 517694 && $input < 517696 || $input > 517696 && $input < 517700 || $input > 517704 && $input < 517706 || $input > 517709 && $input < 517711 || $input > 517714 && $input < 517716 || $input > 517719 && $input < 517721 || $input > 517724 && $input < 517726 || $input > 517729 && $input < 517731 || $input > 517734 && $input < 517736 || $input > 517737 && $input < 517745 || $input > 517748 && $input < 517750 || $input > 517753 && $input < 517755 || $input > 517759 && $input < 517761 || $input > 517762 && $input < 517765 || $input > 517769 && $input < 517771 || $input > 517771 && $input < 517775 || $input > 517779 && $input < 517781 || $input > 517782 && $input < 517785 || $input > 517789 && $input < 517791 || $input > 517791 && $input < 517795 || $input > 517799 && $input < 517801 || $input > 517804 && $input < 517806 || $input > 517808 && $input < 517815 || $input > 517819 && $input < 517821 || $input > 517821 && $input < 517825 || $input > 517829 && $input < 517831 || $input > 517834 && $input < 517836 || $input > 517839 && $input < 517841 || $input > 517844 && $input < 517846 || $input > 517849 && $input < 517851 || $input > 517854 && $input < 517856 || $input > 517859 && $input < 517861 || $input > 517864 && $input < 517866 || $input > 517869 && $input < 517871 || $input > 517872 && $input < 517875 || $input > 517879 && $input < 517881 || $input > 517884 && $input < 517886 || $input > 517889 && $input < 517891 || $input > 517894 && $input < 517896 || $input > 517896 && $input < 520001 || $input > 520005 && $input < 520008 || $input > 520010 && $input < 520013 || $input > 520016 && $input < 520019 || $input > 520020 && $input < 520023 || $input > 520024 && $input < 520027 || $input > 520028 && $input < 520031 || $input > 520034 && $input < 520036 || $input > 520039 && $input < 520041 || $input > 520042 && $input < 520044 || $input > 520047 && $input < 520050 || $input > 520056 && $input < 520059 || $input > 520061 && $input < 520063 || $input > 520065 && $input < 520067 || $input > 520068 && $input < 520071 || $input > 520072 && $input < 520076 || $input > 520077 && $input < 520080 || $input > 520082 && $input < 520085 || $input > 520086 && $input < 520089 || $input > 520090 && $input < 520092 || $input > 520093 && $input < 525100 || $input > 525105 && $input < 525200 || $input > 525201 && $input < 525300 || $input > 525303 && $input < 525400 || $input > 525401 && $input < 527005 || $input > 527006 && $input < 527010 || $input > 527012 && $input < 527015 || $input > 527020 && $input < 527030 || $input > 527031 && $input < 527035 || $input > 527037 && $input < 527040 || $input > 527044 && $input < 527046 || $input > 527046 && $input < 527050 || $input > 527052 && $input < 527055 || $input > 527058 && $input < 527060 || $input > 527062 && $input < 527065 || $input > 527072 && $input < 527075 || $input > 527076 && $input < 527080 || $input > 527080 && $input < 527085 || $input > 527088 && $input < 527090 || $input > 527091 && $input < 527095 || $input > 527098 && $input < 527100 || $input > 527101 && $input < 527105 || $input > 527107 && $input < 527110 || $input > 527112 && $input < 527115 || $input > 527122 && $input < 527125 || $input > 527126 && $input < 527130 || $input > 527134 && $input < 527136 || $input > 527137 && $input < 527140 || $input > 527148 && $input < 527150 || $input > 527153 && $input < 527155 || $input > 527158 && $input < 527160 || $input > 527161 && $input < 527165 || $input > 527167 && $input < 527170 || $input > 527170 && $input < 527175 || $input > 527178 && $input < 527180 || $input > 527180 && $input < 527185 || $input > 527186 && $input < 527190 || $input > 527193 && $input < 530001 || $input > 530003 && $input < 530100 || $input > 530105 && $input < 530110 || $input > 530114 && $input < 530120 || $input > 530123 && $input < 530130 || $input > 530133 && $input < 530140 || $input > 530144 && $input < 530150 || $input > 530154 && $input < 530160 || $input > 530164 && $input < 530170 || $input > 530176 && $input < 530180 || $input > 530185 && $input < 530190 || $input > 530194 && $input < 530200 || $input > 530204 && $input < 530210 || $input > 530213 && $input < 530220 || $input > 530225 && $input < 530230 || $input > 530233 && $input < 530240 || $input > 530242 && $input < 535100 || $input > 535101 && $input < 535200 || $input > 535200 && $input < 535300 || $input > 535300 && $input < 535400 || $input > 535401 && $input < 535500 || $input > 535504 && $input < 535600 || $input > 535600 && $input < 535700 || $input > 535708 && $input < 535800 || $input > 535802 && $input < 537005 || $input > 537014 && $input < 537016 || $input > 537018 && $input < 537020 || $input > 537021 && $input < 537025 || $input > 537027 && $input < 537030 || $input > 537030 && $input < 537035 || $input > 537037 && $input < 537040 || $input > 537044 && $input < 537046 || $input > 537050 && $input < 537055 || $input > 537056 && $input < 537060 || $input > 537066 && $input < 537070 || $input > 537071 && $input < 537075 || $input > 537076 && $input < 537080 || $input > 537084 && $input < 537086 || $input > 537087 && $input < 537090 || $input > 537092 && $input < 537095 || $input > 537099 && $input < 537101 || $input > 537104 && $input < 537106 || $input > 537107 && $input < 537115 || $input > 537118 && $input < 537120 || $input > 537124 && $input < 537126 || $input > 537128 && $input < 537130 || $input > 537132 && $input < 537135 || $input > 537136 && $input < 537140 || $input > 537141 && $input < 537145 || $input > 537149 && $input < 537151 || $input > 537159 && $input < 537161 || $input > 537161 && $input < 537165 || $input > 537169 && $input < 537171 || $input > 537179 && $input < 537181 || $input > 537184 && $input < 537186 || $input > 537188 && $input < 537195 || $input > 537195 && $input < 537200 || $input > 537203 && $input < 537205 || $input > 537209 && $input < 537211 || $input > 537217 && $input < 537225 || $input > 537227 && $input < 537230 || $input > 537232 && $input < 537235 || $input > 537244 && $input < 537246 || $input > 537246 && $input < 537250 || $input > 537253 && $input < 537255 || $input > 537269 && $input < 537271 || $input > 537272 && $input < 537275 || $input > 537275 && $input < 537280 || $input > 537282 && $input < 537285 || $input > 537286 && $input < 537290 || $input > 537292 && $input < 537295 || $input > 537303 && $input < 537305 || $input > 537314 && $input < 537316 || $input > 537319 && $input < 537321 || $input > 537324 && $input < 537326 || $input > 537326 && $input < 537330 || $input > 537333 && $input < 537335 || $input > 537337 && $input < 537340 || $input > 537344 && $input < 537346 || $input > 537348 && $input < 537350 || $input > 537350 && $input < 537355 || $input > 537356 && $input < 537360 || $input > 537364 && $input < 537366 || $input > 537366 && $input < 540001 || $input > 540008 && $input < 540011 || $input > 540015 && $input < 540018 || $input > 540023 && $input < 540026 || $input > 540031 && $input < 540034 || $input > 540040 && $input < 540042 || $input > 540046 && $input < 540049 || $input > 540053 && $input < 540056 || $input > 540061 && $input < 540064 || $input > 540069 && $input < 540072 || $input > 540077 && $input < 540080 || $input > 540085 && $input < 540088 || $input > 540092 && $input < 540095 || $input > 540099 && $input < 540102 || $input > 540106 && $input < 540109 || $input > 540113 && $input < 540116 || $input > 540121 && $input < 540124 || $input > 540128 && $input < 540131 || $input > 540136 && $input < 540139 || $input > 540140 && $input < 540142 || $input > 540143 && $input < 540146 || $input > 540151 && $input < 540154 || $input > 540159 && $input < 540162 || $input > 540167 && $input < 540170 || $input > 540175 && $input < 540178 || $input > 540183 && $input < 540186 || $input > 540191 && $input < 540194 || $input > 540199 && $input < 540202 || $input > 540207 && $input < 540210 || $input > 540214 && $input < 540217 || $input > 540221 && $input < 540224 || $input > 540229 && $input < 540232 || $input > 540237 && $input < 540240 || $input > 540245 && $input < 540248 || $input > 540253 && $input < 540256 || $input > 540261 && $input < 540264 || $input > 540269 && $input < 540272 || $input > 540277 && $input < 540280 || $input > 540285 && $input < 540288 || $input > 540293 && $input < 540296 || $input > 540300 && $input < 540303 || $input > 540307 && $input < 540311 || $input > 540314 && $input < 540318 || $input > 540322 && $input < 540326 || $input > 540331 && $input < 540334 || $input > 540337 && $input < 540342 || $input > 540347 && $input < 540349 || $input > 540354 && $input < 540357 || $input > 540362 && $input < 540365 || $input > 540370 && $input < 540373 || $input > 540378 && $input < 540381 || $input > 540386 && $input < 540389 || $input > 540394 && $input < 540397 || $input > 540402 && $input < 540405 || $input > 540410 && $input < 540413 || $input > 540418 && $input < 540421 || $input > 540426 && $input < 540429 || $input > 540434 && $input < 540437 || $input > 540442 && $input < 540445 || $input > 540450 && $input < 540453 || $input > 540458 && $input < 540461 || $input > 540466 && $input < 540469 || $input > 540474 && $input < 540477 || $input > 540482 && $input < 540485 || $input > 540490 && $input < 540493 || $input > 540498 && $input < 540501 || $input > 540506 && $input < 540509 || $input > 540514 && $input < 540517 || $input > 540522 && $input < 540525 || $input > 540530 && $input < 540533 || $input > 540538 && $input < 540541 || $input > 540546 && $input < 540549 || $input > 540554 && $input < 540556 || $input > 540562 && $input < 540565 || $input > 540570 && $input < 545100 || $input > 545108 && $input < 545200 || $input > 545206 && $input < 545300 || $input > 545302 && $input < 545400 || $input > 545407 && $input < 545500 || $input > 545504 && $input < 545600 || $input > 545603 && $input < 547005 || $input > 547009 && $input < 547011 || $input > 547019 && $input < 547021 || $input > 547021 && $input < 547025 || $input > 547029 && $input < 547031 || $input > 547037 && $input < 547040 || $input > 547043 && $input < 547045 || $input > 547049 && $input < 547051 || $input > 547051 && $input < 547055 || $input > 547059 && $input < 547061 || $input > 547062 && $input < 547065 || $input > 547069 && $input < 547071 || $input > 547074 && $input < 547076 || $input > 547079 && $input < 547085 || $input > 547088 && $input < 547090 || $input > 547091 && $input < 547095 || $input > 547096 && $input < 547100 || $input > 547104 && $input < 547106 || $input > 547106 && $input < 547110 || $input > 547114 && $input < 547116 || $input > 547116 && $input < 547120 || $input > 547123 && $input < 547125 || $input > 547126 && $input < 547130 || $input > 547137 && $input < 547140 || $input > 547144 && $input < 547146 || $input > 547148 && $input < 547150 || $input > 547154 && $input < 547156 || $input > 547157 && $input < 547160 || $input > 547163 && $input < 547165 || $input > 547168 && $input < 547170 || $input > 547188 && $input < 547190 || $input > 547192 && $input < 547195 || $input > 547203 && $input < 547205 || $input > 547208 && $input < 547210 || $input > 547219 && $input < 547221 || $input > 547221 && $input < 547225 || $input > 547229 && $input < 547231 || $input > 547231 && $input < 547235 || $input > 547239 && $input < 547241 || $input > 547241 && $input < 547244 || $input > 547249 && $input < 547251 || $input > 547251 && $input < 547255 || $input > 547258 && $input < 547260 || $input > 547269 && $input < 547271 || $input > 547271 && $input < 547275 || $input > 547284 && $input < 547286 || $input > 547292 && $input < 547295 || $input > 547299 && $input < 547301 || $input > 547304 && $input < 547306 || $input > 547306 && $input < 547310 || $input > 547314 && $input < 547316 || $input > 547317 && $input < 547320 || $input > 547323 && $input < 547325 || $input > 547329 && $input < 547331 || $input > 547334 && $input < 547336 || $input > 547336 && $input < 547340 || $input > 547344 && $input < 547346 || $input > 547349 && $input < 547351 || $input > 547352 && $input < 547360 || $input > 547362 && $input < 547365 || $input > 547369 && $input < 547371 || $input > 547371 && $input < 547375 || $input > 547382 && $input < 547385 || $input > 547389 && $input < 547391 || $input > 547394 && $input < 547396 || $input > 547396 && $input < 547400 || $input > 547404 && $input < 547406 || $input > 547407 && $input < 547410 || $input > 547414 && $input < 547416 || $input > 547418 && $input < 547420 || $input > 547424 && $input < 547426 || $input > 547428 && $input < 547430 || $input > 547433 && $input < 547435 || $input > 547457 && $input < 547460 || $input > 547461 && $input < 547465 || $input > 547469 && $input < 547471 || $input > 547474 && $input < 547476 || $input > 547476 && $input < 547480 || $input > 547489 && $input < 547491 || $input > 547494 && $input < 547496 || $input > 547499 && $input < 547501 || $input > 547502 && $input < 547505 || $input > 547508 && $input < 547510 || $input > 547512 && $input < 547515 || $input > 547519 && $input < 547521 || $input > 547523 && $input < 547525 || $input > 547526 && $input < 547530 || $input > 547532 && $input < 547535 || $input > 547538 && $input < 547540 || $input > 547544 && $input < 547546 || $input > 547547 && $input < 547550 || $input > 547559 && $input < 547561 || $input > 547561 && $input < 547565 || $input > 547568 && $input < 547570 || $input > 547571 && $input < 547575 || $input > 547577 && $input < 547580 || $input > 547586 && $input < 547590 || $input > 547593 && $input < 547595 || $input > 547598 && $input < 547600 || $input > 547602 && $input < 547605 || $input > 547609 && $input < 547611 || $input > 547612 && $input < 547615 || $input > 547619 && $input < 547621 || $input > 547632 && $input < 547635 || $input > 547642 && $input < 547645 || $input > 547647 && $input < 547650 || $input > 547651 && $input < 547655 || $input > 547656 && $input < 547660 || $input > 547664 && $input < 547666 || $input > 547669 && $input < 550001 || $input > 550001 && $input < 550003 || $input > 550006 && $input < 550009 || $input > 550013 && $input < 550017 || $input > 550021 && $input < 550024 || $input > 550028 && $input < 550031 || $input > 550036 && $input < 550039 || $input > 550043 && $input < 550046 || $input > 550049 && $input < 550052 || $input > 550052 && $input < 550056 || $input > 550058 && $input < 550062 || $input > 550064 && $input < 550068 || $input > 550070 && $input < 550073 || $input > 550077 && $input < 550081 || $input > 550094 && $input < 550096 || $input > 550099 && $input < 550101 || $input > 550109 && $input < 550112 || $input > 550114 && $input < 550117 || $input > 550119 && $input < 550122 || $input > 550126 && $input < 550129 || $input > 550132 && $input < 550135 || $input > 550138 && $input < 550141 || $input > 550145 && $input < 550148 || $input > 550151 && $input < 550154 || $input > 550156 && $input < 550159 || $input > 550160 && $input < 550163 || $input > 550166 && $input < 550169 || $input > 550173 && $input < 550176 || $input > 550179 && $input < 550182 || $input > 550185 && $input < 550188 || $input > 550191 && $input < 550194 || $input > 550197 && $input < 550200 || $input > 550202 && $input < 550205 || $input > 550211 && $input < 550214 || $input > 550218 && $input < 550222 || $input > 550228 && $input < 550231 || $input > 550235 && $input < 550238 || $input > 550242 && $input < 550245 || $input > 550249 && $input < 550253 || $input > 550257 && $input < 550260 || $input > 550264 && $input < 550267 || $input > 550273 && $input < 550275 || $input > 550278 && $input < 550281 || $input > 550286 && $input < 550289 || $input > 550293 && $input < 550296 || $input > 550300 && $input < 550303 || $input > 550305 && $input < 550308 || $input > 550311 && $input < 550314 || $input > 550317 && $input < 550320 || $input > 550321 && $input < 550324 || $input > 550327 && $input < 550330 || $input > 550332 && $input < 550335 || $input > 550337 && $input < 550340 || $input > 550341 && $input < 550344 || $input > 550346 && $input < 550350 || $input > 550352 && $input < 550355 || $input > 550357 && $input < 550360 || $input > 550362 && $input < 550365 || $input > 550367 && $input < 550370 || $input > 550372 && $input < 550375 || $input > 550378 && $input < 550381 || $input > 550384 && $input < 550387 || $input > 550390 && $input < 550393 || $input > 550396 && $input < 550399 || $input > 550403 && $input < 550406 || $input > 550410 && $input < 551001 || $input > 551006 && $input < 551009 || $input > 551014 && $input < 551017 || $input > 551022 && $input < 551025 || $input > 551030 && $input < 551033 || $input > 551037 && $input < 551040 || $input > 551045 && $input < 551047 || $input > 551047 && $input < 551050 || $input > 551055 && $input < 551058 || $input > 551063 && $input < 551066 || $input > 551071 && $input < 551074 || $input > 551079 && $input < 551082 || $input > 551086 && $input < 551089 || $input > 551090 && $input < 551093 || $input > 551094 && $input < 551097 || $input > 551098 && $input < 551101 || $input > 551102 && $input < 551105 || $input > 551109 && $input < 551112 || $input > 551115 && $input < 551118 || $input > 551121 && $input < 551124 || $input > 551126 && $input < 551129 || $input > 551132 && $input < 551134 || $input > 551140 && $input < 551143 || $input > 551143 && $input < 555100 || $input > 555102 && $input < 555200 || $input > 555203 && $input < 555250 || $input > 555250 && $input < 555300 || $input > 555301 && $input < 555400 || $input > 555400 && $input < 555500 || $input > 555502 && $input < 555600 || $input > 555601 && $input < 555700 || $input > 555706 && $input < 557005 || $input > 557007 && $input < 557010 || $input > 557011 && $input < 557015 || $input > 557017 && $input < 557020 || $input > 557027 && $input < 557030 || $input > 557032 && $input < 557035 || $input > 557039 && $input < 557041 || $input > 557041 && $input < 557045 || $input > 557047 && $input < 557050 || $input > 557052 && $input < 557055 || $input > 557056 && $input < 557060 || $input > 557062 && $input < 557065 || $input > 557067 && $input < 557070 || $input > 557071 && $input < 557075 || $input > 557075 && $input < 557080 || $input > 557083 && $input < 557085 || $input > 557085 && $input < 557090 || $input > 557092 && $input < 557095 || $input > 557095 && $input < 557100 || $input > 557102 && $input < 557105 || $input > 557110 && $input < 557115 || $input > 557124 && $input < 557126 || $input > 557126 && $input < 557130 || $input > 557131 && $input < 557135 || $input > 557136 && $input < 557140 || $input > 557141 && $input < 557145 || $input > 557148 && $input < 557150 || $input > 557152 && $input < 557155 || $input > 557162 && $input < 557165 || $input > 557170 && $input < 557175 || $input > 557178 && $input < 557180 || $input > 557180 && $input < 557185 || $input > 557185 && $input < 557190 || $input > 557196 && $input < 557200 || $input > 557201 && $input < 557205 || $input > 557205 && $input < 557210 || $input > 557214 && $input < 557216 || $input > 557216 && $input < 557220 || $input > 557220 && $input < 557225 || $input > 557229 && $input < 557231 || $input > 557234 && $input < 557236 || $input > 557236 && $input < 557240 || $input > 557249 && $input < 557251 || $input > 557251 && $input < 557255 || $input > 557256 && $input < 557260 || $input > 557263 && $input < 557265 || $input > 557266 && $input < 557270 || $input > 557271 && $input < 557275 || $input > 557276 && $input < 557280 || $input > 557281 && $input < 557285 || $input > 557286 && $input < 557290 || $input > 557291 && $input < 557295 || $input > 557295 && $input < 600001 || $input > 600005 && $input < 600008 || $input > 600012 && $input < 600015 || $input > 600019 && $input < 600022 || $input > 600026 && $input < 600029 || $input > 600033 && $input < 600036 || $input > 600040 && $input < 600043 || $input > 600046 && $input < 600049 || $input > 600052 && $input < 600055 || $input > 600059 && $input < 600062 || $input > 600066 && $input < 600069 || $input > 600073 && $input < 600076 || $input > 600080 && $input < 600083 || $input > 600087 && $input < 600090 || $input > 600094 && $input < 600097 || $input > 600101 && $input < 600104 || $input > 600108 && $input < 600111 || $input > 600115 && $input < 600118 || $input > 600122 && $input < 600125 || $input > 600129 && $input < 600132 || $input > 600136 && $input < 600139 || $input > 600143 && $input < 600146 || $input > 600150 && $input < 600153 || $input > 600157 && $input < 600160 || $input > 600164 && $input < 600167 || $input > 600171 && $input < 600174 || $input > 600178 && $input < 600181 || $input > 600185 && $input < 600188 || $input > 600192 && $input < 600195 || $input > 600199 && $input < 600202 || $input > 600206 && $input < 600209 || $input > 600213 && $input < 600216 || $input > 600220 && $input < 600223 || $input > 600227 && $input < 600230 || $input > 600234 && $input < 600237 || $input > 600241 && $input < 600244 || $input > 600248 && $input < 600251 || $input > 600255 && $input < 600258 || $input > 600262 && $input < 600265 || $input > 600269 && $input < 600272 || $input > 600277 && $input < 600279 || $input > 600283 && $input < 600286 || $input > 600290 && $input < 600293 || $input > 600298 && $input < 600300 || $input > 600304 && $input < 600307 || $input > 600311 && $input < 600314 || $input > 600318 && $input < 600321 || $input > 600325 && $input < 600328 || $input > 600332 && $input < 600335 || $input > 600339 && $input < 600342 || $input > 600346 && $input < 600349 || $input > 600354 && $input < 600356 || $input > 600360 && $input < 600363 || $input > 600367 && $input < 600370 || $input > 600374 && $input < 600377 || $input > 600381 && $input < 600384 || $input > 600388 && $input < 600391 || $input > 600395 && $input < 600398 || $input > 600402 && $input < 600405 || $input > 600408 && $input < 601001 || $input > 601007 && $input < 601010 || $input > 601014 && $input < 601017 || $input > 601021 && $input < 601024 || $input > 601028 && $input < 601031 || $input > 601035 && $input < 601038 || $input > 601042 && $input < 601045 || $input > 601049 && $input < 601052 || $input > 601056 && $input < 601059 || $input > 601063 && $input < 601066 || $input > 601070 && $input < 601073 || $input > 601077 && $input < 601080 || $input > 601084 && $input < 601087 || $input > 601091 && $input < 601094 || $input > 601098 && $input < 601101 || $input > 601105 && $input < 601108 || $input > 601112 && $input < 601115 || $input > 601119 && $input < 601122 || $input > 601126 && $input < 601129 || $input > 601133 && $input < 601136 || $input > 601140 && $input < 601143 || $input > 601147 && $input < 601150 || $input > 601152 && $input < 601155 || $input > 601159 && $input < 605100 || $input > 605102 && $input < 605200 || $input > 605202 && $input < 605300 || $input > 605305 && $input < 605400 || $input > 605401 && $input < 605500 || $input > 605502 && $input < 605600 || $input > 605602 && $input < 607005 || $input > 607009 && $input < 607011 || $input > 607013 && $input < 607015 || $input > 607016 && $input < 607020 || $input > 607024 && $input < 607026 || $input > 607026 && $input < 607030 || $input > 607033 && $input < 607035 || $input > 607038 && $input < 607040 || $input > 607044 && $input < 607046 || $input > 607048 && $input < 607050 || $input > 607054 && $input < 607056 || $input > 607057 && $input < 607060 || $input > 607062 && $input < 607065 || $input > 607071 && $input < 607075 || $input > 607079 && $input < 607081 || $input > 607081 && $input < 607085 || $input > 607091 && $input < 607095 || $input > 607099 && $input < 607101 || $input > 607107 && $input < 607110 || $input > 607114 && $input < 607116 || $input > 607117 && $input < 607120 || $input > 607124 && $input < 607126 || $input > 607127 && $input < 607130 || $input > 607138 && $input < 607140 || $input > 607144 && $input < 607146 || $input > 607149 && $input < 607151 || $input > 607154 && $input < 607156 || $input > 607156 && $input < 607160 || $input > 607164 && $input < 607166 || $input > 607167 && $input < 607170 || $input > 607170 && $input < 607175 || $input > 607179 && $input < 607181 || $input > 607183 && $input < 607185 || $input > 607189 && $input < 607191 || $input > 607193 && $input < 607195 || $input > 607198 && $input < 607200 || $input > 607203 && $input < 607205 || $input > 607209 && $input < 607211 || $input > 607212 && $input < 607215 || $input > 607224 && $input < 607226 || $input > 607226 && $input < 607230 || $input > 607233 && $input < 607235 || $input > 607237 && $input < 607240 || $input > 607244 && $input < 607246 || $input > 607248 && $input < 607250 || $input > 607254 && $input < 607256 || $input > 607257 && $input < 607260 || $input > 607264 && $input < 607266 || $input > 607267 && $input < 607270 || $input > 607279 && $input < 607281 || $input > 607282 && $input < 607285 || $input > 607289 && $input < 607291 || $input > 607291 && $input < 607295 || $input > 607296 && $input < 607300 || $input > 607308 && $input < 607310 || $input > 607313 && $input < 607315 || $input > 607319 && $input < 607321 || $input > 607323 && $input < 607325 || $input > 607329 && $input < 607331 || $input > 607334 && $input < 607336 || $input > 607339 && $input < 607341 || $input > 607341 && $input < 607345 || $input > 607349 && $input < 607351 || $input > 607351 && $input < 607355 || $input > 607359 && $input < 607361 || $input > 607362 && $input < 607365 || $input > 607369 && $input < 607371 || $input > 607371 && $input < 607375 || $input > 607379 && $input < 607381 || $input > 607382 && $input < 607385 || $input > 607386 && $input < 607390 || $input > 607398 && $input < 607400 || $input > 607404 && $input < 607406 || $input > 607409 && $input < 607411 || $input > 607411 && $input < 607415 || $input > 607419 && $input < 607421 || $input > 607423 && $input < 607425 || $input > 607434 && $input < 607436 || $input > 607444 && $input < 607446 || $input > 607454 && $input < 607456 || $input > 607459 && $input < 607461 || $input > 607461 && $input < 607465 || $input > 607469 && $input < 607471 || $input > 607472 && $input < 607475 || $input > 607478 && $input < 607480 || $input > 607484 && $input < 607486 || $input > 607486 && $input < 607490 || $input > 607494 && $input < 607496 || $input > 607499 && $input < 607501 || $input > 607504 && $input < 607506 || $input > 607507 && $input < 607510 || $input > 607514 && $input < 607516 || $input > 607516 && $input < 607520 || $input > 607524 && $input < 607526 || $input > 607527 && $input < 607530 || $input > 607534 && $input < 607536 || $input > 607537 && $input < 607540 || $input > 607544 && $input < 607546 || $input > 607546 && $input < 607550 || $input > 607554 && $input < 607556 || $input > 607556 && $input < 607560 || $input > 607564 && $input < 607566 || $input > 607569 && $input < 607571 || $input > 607572 && $input < 607580 || $input > 607582 && $input < 607585 || $input > 607589 && $input < 607591 || $input > 607599 && $input < 607601 || $input > 607601 && $input < 607605 || $input > 607609 && $input < 607611 || $input > 607613 && $input < 607615 || $input > 607618 && $input < 607620 || $input > 607624 && $input < 607626 || $input > 607627 && $input < 607630 || $input > 607632 && $input < 607635 || $input > 607639 && $input < 607641 || $input > 607641 && $input < 607645 || $input > 607649 && $input < 607651 || $input > 607653 && $input < 607655 || $input > 607661 && $input < 607665 || $input > 607669 && $input < 607671 || $input > 607674 && $input < 607676 || $input > 607679 && $input < 607681 || $input > 607683 && $input < 607690 || $input > 607691 && $input < 610001 || $input > 610007 && $input < 610010 || $input > 610013 && $input < 610016 || $input > 610019 && $input < 610022 || $input > 610025 && $input < 610028 || $input > 610031 && $input < 610033 || $input > 610036 && $input < 610039 || $input > 610043 && $input < 610046 || $input > 610049 && $input < 610052 || $input > 610055 && $input < 610058 || $input > 610061 && $input < 610064 || $input > 610067 && $input < 610070 || $input > 610073 && $input < 610076 || $input > 610079 && $input < 610082 || $input > 610085 && $input < 610088 || $input > 610091 && $input < 610094 || $input > 610097 && $input < 610100 || $input > 610103 && $input < 610106 || $input > 610109 && $input < 610112 || $input > 610115 && $input < 610118 || $input > 610121 && $input < 610124 || $input > 610127 && $input < 610130 || $input > 610133 && $input < 610136 || $input > 610139 && $input < 610142 || $input > 610145 && $input < 610148 || $input > 610151 && $input < 610154 || $input > 610157 && $input < 610160 || $input > 610162 && $input < 610165 || $input > 610168 && $input < 610171 || $input > 610174 && $input < 610177 || $input > 610180 && $input < 610183 || $input > 610186 && $input < 610189 || $input > 610192 && $input < 610195 || $input > 610197 && $input < 610200 || $input > 610203 && $input < 610206 || $input > 610209 && $input < 610212 || $input > 610216 && $input < 610219 || $input > 610222 && $input < 610225 || $input > 610229 && $input < 610231 || $input > 610234 && $input < 610237 || $input > 610246 && $input < 610249 || $input > 610258 && $input < 610261 || $input > 610264 && $input < 610267 || $input > 610270 && $input < 610273 || $input > 610276 && $input < 610279 || $input > 610282 && $input < 610285 || $input > 610287 && $input < 610290 || $input > 610292 && $input < 611001 || $input > 611005 && $input < 611008 || $input > 611011 && $input < 611014 || $input > 611017 && $input < 611020 || $input > 611022 && $input < 611025 || $input > 611029 && $input < 611032 || $input > 611035 && $input < 611038 || $input > 611041 && $input < 611044 || $input > 611047 && $input < 611050 || $input > 611053 && $input < 611056 || $input > 611059 && $input < 611062 || $input > 611065 && $input < 611068 || $input > 611071 && $input < 611074 || $input > 611077 && $input < 611080 || $input > 611083 && $input < 611086 || $input > 611089 && $input < 611092 || $input > 611095 && $input < 611098 || $input > 611101 && $input < 611104 || $input > 611107 && $input < 611110 || $input > 611113 && $input < 611116 || $input > 611119 && $input < 611122 || $input > 611124 && $input < 611127 || $input > 611130 && $input < 611133 || $input > 611136 && $input < 611139 || $input > 611142 && $input < 611145 || $input > 611148 && $input < 611151 || $input > 611153 && $input < 611156 || $input > 611157 && $input < 611160 || $input > 611162 && $input < 615100 || $input > 615106 && $input < 615200 || $input > 615203 && $input < 617005 || $input > 617005 && $input < 617010 || $input > 617013 && $input < 617015 || $input > 617019 && $input < 617021 || $input > 617023 && $input < 617025 || $input > 617028 && $input < 617030 || $input > 617034 && $input < 617036 || $input > 617037 && $input < 617040 || $input > 617044 && $input < 617046 || $input > 617049 && $input < 617051 || $input > 617054 && $input < 617060 || $input > 617063 && $input < 617065 || $input > 617067 && $input < 617070 || $input > 617073 && $input < 617075 || $input > 617079 && $input < 617081 || $input > 617082 && $input < 617085 || $input > 617094 && $input < 617096 || $input > 617097 && $input < 617100 || $input > 617104 && $input < 617106 || $input > 617109 && $input < 617111 || $input > 617119 && $input < 617121 || $input > 617121 && $input < 617125 || $input > 617125 && $input < 617127 || $input > 617128 && $input < 617130 || $input > 617130 && $input < 617135 || $input > 617137 && $input < 617140 || $input > 617143 && $input < 617145 || $input > 617152 && $input < 617155 || $input > 617163 && $input < 617165 || $input > 617169 && $input < 617171 || $input > 617171 && $input < 617175 || $input > 617179 && $input < 617181 || $input > 617183 && $input < 617185 || $input > 617188 && $input < 617190 || $input > 617198 && $input < 617200 || $input > 617202 && $input < 617205 || $input > 617207 && $input < 617210 || $input > 617214 && $input < 617216 || $input > 617219 && $input < 617221 || $input > 617222 && $input < 617230 || $input > 617232 && $input < 617235 || $input > 617238 && $input < 617240 || $input > 617246 && $input < 617250 || $input > 617254 && $input < 617256 || $input > 617257 && $input < 617260 || $input > 617264 && $input < 617266 || $input > 617266 && $input < 617270 || $input > 617273 && $input < 617275 || $input > 617276 && $input < 617280 || $input > 617284 && $input < 617286 || $input > 617289 && $input < 617291 || $input > 617292 && $input < 617300 || $input > 617303 && $input < 617305 || $input > 617309 && $input < 617311 || $input > 617311 && $input < 617315 || $input > 617318 && $input < 617320 || $input > 617323 && $input < 617325 || $input > 617329 && $input < 617331 || $input > 617332 && $input < 617335 || $input > 617336 && $input < 617340 || $input > 617344 && $input < 617346 || $input > 617349 && $input < 617351 || $input > 617352 && $input < 617360 || $input > 617364 && $input < 617366 || $input > 617368 && $input < 617370 || $input > 617373 && $input < 617375 || $input > 617383 && $input < 617385 || $input > 617387 && $input < 617390 || $input > 617392 && $input < 617395 || $input > 617400 && $input < 617410 || $input > 617411 && $input < 617415 || $input > 617419 && $input < 617421 || $input > 617429 && $input < 617431 || $input > 617432 && $input < 617435 || $input > 617439 && $input < 617441 || $input > 617442 && $input < 617445 || $input > 617449 && $input < 617451 || $input > 617451 && $input < 617455 || $input > 617458 && $input < 617460 || $input > 617460 && $input < 617465 || $input > 617466 && $input < 617470 || $input > 617476 && $input < 617480 || $input > 617483 && $input < 617485 || $input > 617487 && $input < 617490 || $input > 617492 && $input < 617495 || $input > 617503 && $input < 617505 || $input > 617509 && $input < 617511 || $input > 617513 && $input < 617515 || $input > 617516 && $input < 620001 || $input > 620006 && $input < 620009 || $input > 620012 && $input < 620015 || $input > 620018 && $input < 620021 || $input > 620024 && $input < 620027 || $input > 620031 && $input < 620034 || $input > 620037 && $input < 620040 || $input > 620043 && $input < 620046 || $input > 620051 && $input < 620053 || $input > 620057 && $input < 620060 || $input > 620064 && $input < 620067 || $input > 620072 && $input < 620075 || $input > 620077 && $input < 620080 || $input > 620084 && $input < 620087 || $input > 620091 && $input < 620094 || $input > 620095 && $input < 620098 || $input > 620101 && $input < 620104 || $input > 620107 && $input < 620110 || $input > 620114 && $input < 620117 || $input > 620119 && $input < 620122 || $input > 620125 && $input < 620128 || $input > 620130 && $input < 620133 || $input > 620137 && $input < 620139 || $input > 620141 && $input < 620144 || $input > 620146 && $input < 620149 || $input > 620152 && $input < 620155 || $input > 620158 && $input < 620160 || $input > 620162 && $input < 620165 || $input > 620167 && $input < 620170 || $input > 620172 && $input < 620175 || $input > 620177 && $input < 625100 || $input > 625103 && $input < 625200 || $input > 625206 && $input < 625300 || $input > 625301 && $input < 625400 || $input > 625405 && $input < 627005 || $input > 627009 && $input < 627011 || $input > 627012 && $input < 627015 || $input > 627015 && $input < 627020 || $input > 627022 && $input < 627025 || $input > 627029 && $input < 627031 || $input > 627039 && $input < 627041 || $input > 627041 && $input < 627045 || $input > 627046 && $input < 627050 || $input > 627052 && $input < 627055 || $input > 627057 && $input < 627060 || $input > 627068 && $input < 627070 || $input > 627074 && $input < 627076 || $input > 627078 && $input < 627080 || $input > 627084 && $input < 627086 || $input > 627087 && $input < 627090 || $input > 627094 && $input < 627096 || $input > 627103 && $input < 627105 || $input > 627108 && $input < 627110 || $input > 627114 && $input < 627116 || $input > 627119 && $input < 627121 || $input > 627124 && $input < 627126 || $input > 627128 && $input < 627135 || $input > 627144 && $input < 627146 || $input > 627148 && $input < 627150 || $input > 627151 && $input < 627155 || $input > 627156 && $input < 627160 || $input > 627164 && $input < 627166 || $input > 627169 && $input < 627171 || $input > 627171 && $input < 627175 || $input > 627183 && $input < 627185 || $input > 627194 && $input < 627196 || $input > 627196 && $input < 627200 || $input > 627208 && $input < 627210 || $input > 627217 && $input < 627220 || $input > 627223 && $input < 627225 || $input > 627234 && $input < 627236 || $input > 627244 && $input < 627246 || $input > 627249 && $input < 627251 || $input > 627253 && $input < 627260 || $input > 627261 && $input < 627265 || $input > 627269 && $input < 627271 || $input > 627273 && $input < 627275 || $input > 627278 && $input < 627280 || $input > 627289 && $input < 627291 || $input > 627293 && $input < 627295 || $input > 627298 && $input < 627300 || $input > 627303 && $input < 627305 || $input > 627309 && $input < 627311 || $input > 627311 && $input < 627315 || $input > 627317 && $input < 627320 || $input > 627322 && $input < 627325 || $input > 627328 && $input < 627330 || $input > 627331 && $input < 627335 || $input > 627339 && $input < 627341 || $input > 627344 && $input < 627346 || $input > 627346 && $input < 627350 || $input > 627359 && $input < 627361 || $input > 627361 && $input < 627365 || $input > 627369 && $input < 627371 || $input > 627371 && $input < 627375 || $input > 627379 && $input < 627381 || $input > 627383 && $input < 627385 || $input > 627387 && $input < 627390 || $input > 627399 && $input < 627401 || $input > 627402 && $input < 627405 || $input > 627409 && $input < 627411 || $input > 627411 && $input < 627415 || $input > 627419 && $input < 627421 || $input > 627429 && $input < 627431 || $input > 627431 && $input < 627435 || $input > 627439 && $input < 627441 || $input > 627441 && $input < 627445 || $input > 627449 && $input < 627451 || $input > 627451 && $input < 627455 || $input > 627459 && $input < 700001 || $input > 700006 && $input < 700009 || $input > 700015 && $input < 700019 || $input > 700025 && $input < 700028 || $input > 700032 && $input < 700036 || $input > 700040 && $input < 700044 || $input > 700051 && $input < 700054 || $input > 700058 && $input < 700062 || $input > 700067 && $input < 700070 || $input > 700075 && $input < 700079 || $input > 700083 && $input < 700087 || $input > 700094 && $input < 700098 || $input > 700102 && $input < 700106 || $input > 700111 && $input < 700115 || $input > 700119 && $input < 700123 || $input > 700128 && $input < 700132 || $input > 700137 && $input < 700141 || $input > 700145 && $input < 700151 || $input > 700156 && $input < 700160 || $input > 700165 && $input < 700169 || $input > 700174 && $input < 700177 || $input > 700182 && $input < 700186 || $input > 700190 && $input < 700194 || $input > 700198 && $input < 700202 || $input > 700207 && $input < 700211 || $input > 700216 && $input < 700220 || $input > 700224 && $input < 700229 || $input > 700233 && $input < 700237 || $input > 700243 && $input < 700246 || $input > 700251 && $input < 700255 || $input > 700260 && $input < 700264 || $input > 700269 && $input < 700272 || $input > 700278 && $input < 700280 || $input > 700287 && $input < 700289 || $input > 700299 && $input < 700301 || $input > 700306 && $input < 700308 || $input > 700313 && $input < 700317 || $input > 700321 && $input < 700325 || $input > 700329 && $input < 700333 || $input > 700337 && $input < 700341 || $input > 700347 && $input < 700349 || $input > 700353 && $input < 700357 || $input > 700361 && $input < 700365 || $input > 700370 && $input < 700373 || $input > 700377 && $input < 700380 || $input > 700385 && $input < 700389 || $input > 700393 && $input < 700397 || $input > 700401 && $input < 700407 || $input > 700428 && $input < 700430 || $input > 700436 && $input < 700439 || $input > 700447 && $input < 700451 || $input > 700457 && $input < 700460 || $input > 700465 && $input < 700468 || $input > 700476 && $input < 700478 || $input > 700500 && $input < 700502 || $input > 700509 && $input < 700511 || $input > 700517 && $input < 700519 || $input > 700525 && $input < 700527 || $input > 700531 && $input < 700534 || $input > 700549 && $input < 700551 || $input > 700556 && $input < 700559 || $input > 700562 && $input < 700569 || $input > 700576 && $input < 700579 || $input > 700585 && $input < 700587 || $input > 700592 && $input < 700595 || $input > 700600 && $input < 700603 || $input > 700609 && $input < 700611 || $input > 700636 && $input < 700638 || $input > 700642 && $input < 700646 || $input > 700654 && $input < 700656 || $input > 700662 && $input < 700665 || $input > 700666 && $input < 700668 || $input > 700682 && $input < 700684 || $input > 700698 && $input < 700702 || $input > 700707 && $input < 700710 || $input > 700725 && $input < 700729 || $input > 700739 && $input < 700931 || $input > 700937 && $input < 700940 || $input > 700940 && $input < 700946 || $input > 700946 && $input < 700950 || $input > 700951 && $input < 705100 || $input > 705101 && $input < 705200 || $input > 705205 && $input < 705300 || $input > 705311 && $input < 707005 || $input > 707008 && $input < 707010 || $input > 707014 && $input < 707016 || $input > 707017 && $input < 707020 || $input > 707023 && $input < 707025 || $input > 707029 && $input < 707031 || $input > 707032 && $input < 707035 || $input > 707039 && $input < 707041 || $input > 707041 && $input < 707045 || $input > 707049 && $input < 707051 || $input > 707051 && $input < 707055 || $input > 707066 && $input < 707070 || $input > 707073 && $input < 707075 || $input > 707086 && $input < 707100 || $input > 707102 && $input < 707105 || $input > 707107 && $input < 707110 || $input > 707110 && $input < 707115 || $input > 707118 && $input < 707120 || $input > 707124 && $input < 707126 || $input > 707129 && $input < 707131 || $input > 707132 && $input < 707140 || $input > 707142 && $input < 707145 || $input > 707146 && $input < 707150 || $input > 707153 && $input < 707155 || $input > 707159 && $input < 707161 || $input > 707169 && $input < 707171 || $input > 707171 && $input < 707175 || $input > 707175 && $input < 707180 || $input > 707182 && $input < 707185 || $input > 707196 && $input < 707200 || $input > 707204 && $input < 707206 || $input > 707208 && $input < 707210 || $input > 707219 && $input < 707221 || $input > 707222 && $input < 707225 || $input > 707229 && $input < 707231 || $input > 707231 && $input < 707235 || $input > 707237 && $input < 707240 || $input > 707241 && $input < 707245 || $input > 707248 && $input < 707250 || $input > 707254 && $input < 707256 || $input > 707257 && $input < 707260 || $input > 707262 && $input < 707265 || $input > 707268 && $input < 707270 || $input > 707274 && $input < 707276 || $input > 707276 && $input < 707280 || $input > 707283 && $input < 707285 || $input > 707288 && $input < 707290 || $input > 707292 && $input < 707295 || $input > 707302 && $input < 707305 || $input > 707309 && $input < 707311 || $input > 707314 && $input < 707316 || $input > 707319 && $input < 707325 || $input > 707333 && $input < 707335 || $input > 707337 && $input < 707340 || $input > 707340 && $input < 707345 || $input > 707346 && $input < 707350 || $input > 707353 && $input < 707355 || $input > 707356 && $input < 707360 || $input > 707362 && $input < 707365 || $input > 707374 && $input < 707376 || $input > 707376 && $input < 707380 || $input > 707384 && $input < 707386 || $input > 707392 && $input < 707395 || $input > 707397 && $input < 707400 || $input > 707403 && $input < 707405 || $input > 707408 && $input < 707410 || $input > 707410 && $input < 707415 || $input > 707417 && $input < 707420 || $input > 707423 && $input < 707425 || $input > 707429 && $input < 707431 || $input > 707432 && $input < 707435 || $input > 707439 && $input < 707441 || $input > 707443 && $input < 707445 || $input > 707453 && $input < 707455 || $input > 707462 && $input < 707465 || $input > 707469 && $input < 707471 || $input > 707473 && $input < 707475 || $input > 707479 && $input < 707481 || $input > 707482 && $input < 707485 || $input > 707489 && $input < 707491 || $input > 707491 && $input < 707495 || $input > 707496 && $input < 707500 || $input > 707511 && $input < 707515 || $input > 707518 && $input < 707520 || $input > 707524 && $input < 707526 || $input > 707526 && $input < 707530 || $input > 707534 && $input < 707536 || $input > 707539 && $input < 707541 || $input > 707541 && $input < 707545 || $input > 707549 && $input < 707551 || $input > 707553 && $input < 707555 || $input > 707558 && $input < 707560 || $input > 707562 && $input < 707565 || $input > 707568 && $input < 707570 || $input > 707572 && $input < 707575 || $input > 707584 && $input < 707586 || $input > 707587 && $input < 707590 || $input > 707594 && $input < 707596 || $input > 707596 && $input < 707600 || $input > 707604 && $input < 710001 || $input > 710007 && $input < 710010 || $input > 710014 && $input < 710019 || $input > 710026 && $input < 710028 || $input > 710033 && $input < 710038 || $input > 710043 && $input < 710048 || $input > 710053 && $input < 710058 || $input > 710062 && $input < 710067 || $input > 710071 && $input < 710076 || $input > 710080 && $input < 710085 || $input > 710089 && $input < 710095 || $input > 710100 && $input < 710105 || $input > 710109 && $input < 710114 || $input > 710118 && $input < 710124 || $input > 710128 && $input < 710133 || $input > 710137 && $input < 710142 || $input > 710147 && $input < 710152 || $input > 710156 && $input < 710161 || $input > 710166 && $input < 710171 || $input > 710176 && $input < 710182 || $input > 710186 && $input < 710191 || $input > 710195 && $input < 710200 || $input > 710206 && $input < 710210 || $input > 710214 && $input < 710220 || $input > 710224 && $input < 710233 || $input > 710234 && $input < 710236 || $input > 710239 && $input < 710244 || $input > 710248 && $input < 710252 || $input > 710256 && $input < 710261 || $input > 710265 && $input < 710270 || $input > 710273 && $input < 710278 || $input > 710284 && $input < 710287 || $input > 710292 && $input < 710297 || $input > 710302 && $input < 710307 || $input > 710313 && $input < 710318 || $input > 710321 && $input < 710326 || $input > 710330 && $input < 710332 || $input > 710332 && $input < 710335 || $input > 710339 && $input < 710345 || $input > 710350 && $input < 710355 || $input > 710360 && $input < 710365 || $input > 710370 && $input < 710375 || $input > 710380 && $input < 710382 || $input > 710383 && $input < 715100 || $input > 715103 && $input < 715200 || $input > 715203 && $input < 715300 || $input > 715305 && $input < 717005 || $input > 717009 && $input < 717011 || $input > 717011 && $input < 717015 || $input > 717019 && $input < 717021 || $input > 717029 && $input < 717031 || $input > 717031 && $input < 717035 || $input > 717038 && $input < 717040 || $input > 717041 && $input < 717045 || $input > 717047 && $input < 717050 || $input > 717052 && $input < 717055 || $input > 717056 && $input < 717060 || $input > 717064 && $input < 717066 || $input > 717067 && $input < 717070 || $input > 717072 && $input < 717075 || $input > 717079 && $input < 717081 || $input > 717082 && $input < 717085 || $input > 717088 && $input < 717090 || $input > 717094 && $input < 717096 || $input > 717114 && $input < 717116 || $input > 717117 && $input < 717120 || $input > 717123 && $input < 717125 || $input > 717127 && $input < 717130 || $input > 717134 && $input < 717136 || $input > 717136 && $input < 717140 || $input > 717142 && $input < 717145 || $input > 717149 && $input < 717151 || $input > 717151 && $input < 717155 || $input > 717164 && $input < 717166 || $input > 717166 && $input < 717170 || $input > 717179 && $input < 717181 || $input > 717183 && $input < 717185 || $input > 717189 && $input < 717191 || $input > 717191 && $input < 717195 || $input > 717207 && $input < 717209 || $input > 717216 && $input < 717220 || $input > 717227 && $input < 717230 || $input > 717234 && $input < 717236 || $input > 717239 && $input < 717241 || $input > 717241 && $input < 717245 || $input > 717249 && $input < 717251 || $input > 717254 && $input < 717256 || $input > 717256 && $input < 717260 || $input > 717264 && $input < 717266 || $input > 717267 && $input < 717270 || $input > 717274 && $input < 717276 || $input > 717277 && $input < 717280 || $input > 717283 && $input < 717285 || $input > 717286 && $input < 717290 || $input > 717292 && $input < 717295 || $input > 717298 && $input < 717300 || $input > 717302 && $input < 717305 || $input > 717308 && $input < 717310 || $input > 717313 && $input < 717315 || $input > 717317 && $input < 717320 || $input > 717329 && $input < 717331 || $input > 717332 && $input < 717335 || $input > 717336 && $input < 717340 || $input > 717343 && $input < 717345 || $input > 717349 && $input < 717351 || $input > 717353 && $input < 717355 || $input > 717358 && $input < 717360 || $input > 717364 && $input < 717366 || $input > 717366 && $input < 717370 || $input > 717374 && $input < 717376 || $input > 717376 && $input < 717380 || $input > 717382 && $input < 717385 || $input > 717392 && $input < 717395 || $input > 717404 && $input < 717406 || $input > 717406 && $input < 717410 || $input > 717410 && $input < 717415 || $input > 717419 && $input < 717421 || $input > 717424 && $input < 717426 || $input > 717427 && $input < 717435 || $input > 717439 && $input < 717441 || $input > 717442 && $input < 717445 || $input > 717447 && $input < 717449 || $input > 717457 && $input < 717460 || $input > 717467 && $input < 717470 || $input > 717472 && $input < 717475 || $input > 717479 && $input < 717481 || $input > 717481 && $input < 720001 || $input > 720005 && $input < 720008 || $input > 720009 && $input < 720011 || $input > 720014 && $input < 720017 || $input > 720019 && $input < 720021 || $input > 720024 && $input < 720026 || $input > 720029 && $input < 720031 || $input > 720039 && $input < 720042 || $input > 720046 && $input < 720049 || $input > 720049 && $input < 720051 || $input > 720054 && $input < 720057 || $input > 720059 && $input < 720061 || $input > 720063 && $input < 720066 || $input > 720069 && $input < 720071 || $input > 720071 && $input < 720074 || $input > 720078 && $input < 720082 || $input > 720082 && $input < 720084 || $input > 720087 && $input < 720089 || $input > 720089 && $input < 720091 || $input > 720094 && $input < 720097 || $input > 720099 && $input < 720101 || $input > 720104 && $input < 720106 || $input > 720112 && $input < 720115 || $input > 720119 && $input < 720123 || $input > 720127 && $input < 720131 || $input > 720136 && $input < 720139 || $input > 720139 && $input < 720141 || $input > 720149 && $input < 720151 || $input > 720159 && $input < 720161 || $input > 720161 && $input < 720164 || $input > 720169 && $input < 720172 || $input > 720176 && $input < 720179 || $input > 720179 && $input < 720181 || $input > 720185 && $input < 720188 || $input > 720189 && $input < 720191 || $input > 720193 && $input < 720196 || $input > 720199 && $input < 720201 || $input > 720201 && $input < 720204 || $input > 720209 && $input < 720213 || $input > 720217 && $input < 720221 || $input > 720225 && $input < 720228 || $input > 720229 && $input < 720231 || $input > 720235 && $input < 720237 || $input > 720239 && $input < 720241 || $input > 720242 && $input < 720245 || $input > 720249 && $input < 720253 || $input > 720258 && $input < 720262 || $input > 720266 && $input < 720269 || $input > 720269 && $input < 720271 || $input > 720275 && $input < 720278 || $input > 720279 && $input < 720281 || $input > 720285 && $input < 725100 || $input > 725100 && $input < 725200 || $input > 725202 && $input < 725300 || $input > 725301 && $input < 725400 || $input > 725400 && $input < 725500 || $input > 725502 && $input < 725600 || $input > 725601 && $input < 725700 || $input > 725703 && $input < 727005 || $input > 727009 && $input < 727011 || $input > 727011 && $input < 727015 || $input > 727017 && $input < 727020 || $input > 727021 && $input < 727025 || $input > 727027 && $input < 727030 || $input > 727030 && $input < 727035 || $input > 727035 && $input < 727040 || $input > 727046 && $input < 727050 || $input > 727050 && $input < 727055 || $input > 727057 && $input < 727060 || $input > 727064 && $input < 727066 || $input > 727069 && $input < 727071 || $input > 727071 && $input < 727075 || $input > 727079 && $input < 727081 || $input > 727084 && $input < 727086 || $input > 727086 && $input < 727090 || $input > 727101 && $input < 727105 || $input > 727108 && $input < 727110 || $input > 727114 && $input < 727116 || $input > 727116 && $input < 727120 || $input > 727121 && $input < 727125 || $input > 727127 && $input < 727130 || $input > 727130 && $input < 727135 || $input > 727136 && $input < 727140 || $input > 727144 && $input < 727146 || $input > 727153 && $input < 727155 || $input > 727160 && $input < 727170 || $input > 727174 && $input < 727176 || $input > 727178 && $input < 727180 || $input > 727182 && $input < 727185 || $input > 727185 && $input < 727190 || $input > 727194 && $input < 727196 || $input > 727198 && $input < 727200 || $input > 727204 && $input < 727206 || $input > 727206 && $input < 727210 || $input > 727211 && $input < 727215 || $input > 727222 && $input < 727225 || $input > 727226 && $input < 727230 || $input > 727239 && $input < 727241 || $input > 727248 && $input < 727250 || $input > 727251 && $input < 727255 || $input > 727256 && $input < 727260 || $input > 727262 && $input < 727265 || $input > 727269 && $input < 727271 || $input > 727274 && $input < 727276 || $input > 727276 && $input < 727280 || $input > 727282 && $input < 727285 || $input > 727294 && $input < 727296 || $input > 727296 && $input < 727300 || $input > 727301 && $input < 727305 || $input > 727305 && $input < 727310 || $input > 727316 && $input < 727320 || $input > 727320 && $input < 727325 || $input > 727327 && $input < 727330 || $input > 727332 && $input < 727335 || $input > 727339 && $input < 727341 || $input > 727341 && $input < 727345 || $input > 727345 && $input < 727350 || $input > 727357 && $input < 727360 || $input > 727363 && $input < 727365 || $input > 727368 && $input < 727370 || $input > 727374 && $input < 727376 || $input > 727381 && $input < 727385 || $input > 727388 && $input < 727390 || $input > 727394 && $input < 727396 || $input > 727396 && $input < 727400 || $input > 727401 && $input < 727405 || $input > 727409 && $input < 727411 || $input > 727411 && $input < 727415 || $input > 727416 && $input < 727420 || $input > 727420 && $input < 727425 || $input > 727428 && $input < 727430 || $input > 727434 && $input < 727436 || $input > 727437 && $input < 727440 || $input > 727441 && $input < 727445 || $input > 727449 && $input < 727451 || $input > 727452 && $input < 727455 || $input > 727456 && $input < 727460 || $input > 727462 && $input < 727465 || $input > 727470 && $input < 727475 || $input > 727481 && $input < 727485 || $input > 727486 && $input < 727490 || $input > 727492 && $input < 727495 || $input > 727495 && $input < 727500 || $input > 727502 && $input < 727505 || $input > 727511 && $input < 727515 || $input > 727519 && $input < 727521 || $input > 727522 && $input < 727525 || $input > 727539 && $input < 727541 || $input > 727544 && $input < 727546 || $input > 727547 && $input < 727555 || $input > 727564 && $input < 727566 || $input > 727569 && $input < 727571 || $input > 727573 && $input < 727580 || $input > 727581 && $input < 727585 || $input > 727585 && $input < 727590 || $input > 727593 && $input < 727595 || $input > 727597 && $input < 727600 || $input > 727603 && $input < 727605 || $input > 727605 && $input < 727610 || $input > 727611 && $input < 727615 || $input > 727616 && $input < 727620 || $input > 727624 && $input < 727626 || $input > 727628 && $input < 727630 || $input > 727634 && $input < 727636 || $input > 727644 && $input < 727646 || $input > 727648 && $input < 730001 || $input > 730010 && $input < 730015 || $input > 730021 && $input < 730025 || $input > 730030 && $input < 730035 || $input > 730042 && $input < 730045 || $input > 730051 && $input < 730054 || $input > 730059 && $input < 730064 || $input > 730068 && $input < 730073 || $input > 730077 && $input < 730082 || $input > 730086 && $input < 730091 || $input > 730096 && $input < 730101 || $input > 730105 && $input < 730110 || $input > 730115 && $input < 730120 || $input > 730124 && $input < 730129 || $input > 730133 && $input < 730138 || $input > 730143 && $input < 730148 || $input > 730152 && $input < 730157 || $input > 730162 && $input < 730167 || $input > 730171 && $input < 730176 || $input > 730180 && $input < 730185 || $input > 730189 && $input < 730194 || $input > 730198 && $input < 730203 || $input > 730208 && $input < 730213 || $input > 730217 && $input < 730222 || $input > 730228 && $input < 730232 || $input > 730237 && $input < 730242 || $input > 730242 && $input < 731001 || $input > 731005 && $input < 731010 || $input > 731013 && $input < 731018 || $input > 731023 && $input < 731030 || $input > 731035 && $input < 731040 || $input > 731045 && $input < 731049 || $input > 731055 && $input < 731058 || $input > 731062 && $input < 731067 || $input > 731071 && $input < 731076 || $input > 731079 && $input < 731085 || $input > 731089 && $input < 731097 || $input > 731102 && $input < 731107 || $input > 731112 && $input < 731117 || $input > 731121 && $input < 731126 || $input > 731129 && $input < 731135 || $input > 731140 && $input < 731145 || $input > 731149 && $input < 731154 || $input > 731158 && $input < 731163 || $input > 731166 && $input < 731171 || $input > 731176 && $input < 731181 || $input > 731185 && $input < 731190 || $input > 731194 && $input < 731199 || $input > 731203 && $input < 731208 || $input > 731212 && $input < 731217 || $input > 731221 && $input < 731226 || $input > 731231 && $input < 735100 || $input > 735100 && $input < 735200 || $input > 735206 && $input < 737005 || $input > 737008 && $input < 737010 || $input > 737014 && $input < 737016 || $input > 737017 && $input < 737020 || $input > 737023 && $input < 737025 || $input > 737029 && $input < 737031 || $input > 737034 && $input < 737036 || $input > 737038 && $input < 737045 || $input > 737054 && $input < 737056 || $input > 737056 && $input < 737060 || $input > 737062 && $input < 737065 || $input > 737072 && $input < 737075 || $input > 737079 && $input < 737081 || $input > 737089 && $input < 737091 || $input > 737099 && $input < 737101 || $input > 737102 && $input < 737105 || $input > 737108 && $input < 737110 || $input > 737117 && $input < 737130 || $input > 737133 && $input < 737135 || $input > 737139 && $input < 737141 || $input > 737142 && $input < 737145 || $input > 737149 && $input < 737151 || $input > 737151 && $input < 737155 || $input > 737158 && $input < 737160 || $input > 737164 && $input < 737166 || $input > 737166 && $input < 737170 || $input > 737173 && $input < 737175 || $input > 737179 && $input < 737181 || $input > 737184 && $input < 737186 || $input > 737186 && $input < 737190 || $input > 737194 && $input < 737196 || $input > 737196 && $input < 737200 || $input > 737204 && $input < 737206 || $input > 737209 && $input < 737211 || $input > 737213 && $input < 737220 || $input > 737224 && $input < 737226 || $input > 737226 && $input < 737230 || $input > 737238 && $input < 737240 || $input > 737243 && $input < 737245 || $input > 737249 && $input < 737251 || $input > 737251 && $input < 737255 || $input > 737264 && $input < 737266 || $input > 737266 && $input < 737270 || $input > 737274 && $input < 737276 || $input > 737289 && $input < 737291 || $input > 737292 && $input < 737295 || $input > 737304 && $input < 737306 || $input > 737309 && $input < 737311 || $input > 737314 && $input < 737316 || $input > 737316 && $input < 737320 || $input > 737323 && $input < 737325 || $input > 737329 && $input < 737331 || $input > 737333 && $input < 737335 || $input > 737344 && $input < 737346 || $input > 737347 && $input < 737350 || $input > 737354 && $input < 737356 || $input > 737356 && $input < 737360 || $input > 737362 && $input < 737365 || $input > 737368 && $input < 737370 || $input > 737374 && $input < 737376 || $input > 737377 && $input < 737380 || $input > 737384 && $input < 737386 || $input > 737386 && $input < 737390 || $input > 737393 && $input < 737395 || $input > 737399 && $input < 737401 || $input > 737403 && $input < 737405 || $input > 737419 && $input < 737421 || $input > 737422 && $input < 737425 || $input > 737429 && $input < 737431 || $input > 737434 && $input < 737436 || $input > 737439 && $input < 737445 || $input > 737449 && $input < 737451 || $input > 737459 && $input < 737461 || $input > 737469 && $input < 737471 || $input > 737472 && $input < 737475 || $input > 737479 && $input < 737481 || $input > 737482 && $input < 737485 || $input > 737489 && $input < 737491 || $input > 737492 && $input < 737495 || $input > 737499 && $input < 737501 || $input > 737502 && $input < 737505 || $input > 737508 && $input < 737510 || $input > 737513 && $input < 737515 || $input > 737519 && $input < 737521 || $input > 737522 && $input < 737525 || $input > 737529 && $input < 737531 || $input > 737539 && $input < 737541 || $input > 737544 && $input < 737546 || $input > 737546 && $input < 737550 || $input > 737554 && $input < 737556 || $input > 737559 && $input < 737561 || $input > 737561 && $input < 737565 || $input > 737567 && $input < 737570 || $input > 737571 && $input < 737575 || $input > 737579 && $input < 737581 || $input > 737581 && $input < 737585 || $input > 737589 && $input < 737591 || $input > 737593 && $input < 737595 || $input > 737599 && $input < 737601 || $input > 737604 && $input < 737606 || $input > 737607 && $input < 737615 || $input > 737618 && $input < 737620 || $input > 737622 && $input < 737625 || $input > 737629 && $input < 737631 || $input > 737638 && $input < 800001 || $input > 800005 && $input < 800008 || $input > 800012 && $input < 800015 || $input > 800018 && $input < 800021 || $input > 800025 && $input < 800028 || $input > 800032 && $input < 800035 || $input > 800038 && $input < 800041 || $input > 800045 && $input < 800048 || $input > 800052 && $input < 800055 || $input > 800058 && $input < 800062 || $input > 800066 && $input < 800069 || $input > 800073 && $input < 800076 || $input > 800080 && $input < 800083 || $input > 800087 && $input < 800090 || $input > 800095 && $input < 800098 || $input > 800102 && $input < 800105 || $input > 800109 && $input < 800112 || $input > 800116 && $input < 800119 || $input > 800123 && $input < 800126 || $input > 800131 && $input < 800134 || $input > 800139 && $input < 800142 || $input > 800146 && $input < 800149 || $input > 800153 && $input < 800156 || $input > 800160 && $input < 800163 || $input > 800167 && $input < 800170 || $input > 800176 && $input < 800179 || $input > 800183 && $input < 800186 || $input > 800190 && $input < 800193 || $input > 800198 && $input < 800201 || $input > 800205 && $input < 800208 || $input > 800212 && $input < 800215 || $input > 800219 && $input < 800222 || $input > 800227 && $input < 800230 || $input > 800235 && $input < 800238 || $input > 800242 && $input < 800245 || $input > 800249 && $input < 800251 || $input > 800255 && $input < 800258 || $input > 800262 && $input < 800265 || $input > 800269 && $input < 800272 || $input > 800276 && $input < 800279 || $input > 800284 && $input < 800287 || $input > 800291 && $input < 800294 || $input > 800298 && $input < 800302 || $input > 800306 && $input < 800309 || $input > 800313 && $input < 800316 || $input > 800320 && $input < 800322 || $input > 800326 && $input < 800329 || $input > 800333 && $input < 800336 || $input > 800340 && $input < 800343 || $input > 800346 && $input < 800350 || $input > 800354 && $input < 800357 || $input > 800361 && $input < 800364 || $input > 800368 && $input < 800371 || $input > 800375 && $input < 800378 || $input > 800382 && $input < 800385 || $input > 800390 && $input < 800393 || $input > 800397 && $input < 800400 || $input > 800403 && $input < 800407 || $input > 800411 && $input < 800414 || $input > 800418 && $input < 800421 || $input > 800425 && $input < 800428 || $input > 800432 && $input < 800435 || $input > 800439 && $input < 800442 || $input > 800446 && $input < 800449 || $input > 800453 && $input < 800456 || $input > 800460 && $input < 800463 || $input > 800467 && $input < 800470 || $input > 800474 && $input < 800477 || $input > 800481 && $input < 800484 || $input > 800488 && $input < 800491 || $input > 800496 && $input < 800499 || $input > 800503 && $input < 800506 || $input > 800511 && $input < 800514 || $input > 800517 && $input < 800521 || $input > 800525 && $input < 800528 || $input > 800532 && $input < 800535 || $input > 800539 && $input < 800542 || $input > 800546 && $input < 800549 || $input > 800553 && $input < 800556 || $input > 800560 && $input < 800563 || $input > 800567 && $input < 800571 || $input > 800574 && $input < 800577 || $input > 800581 && $input < 800584 || $input > 800588 && $input < 800591 || $input > 800595 && $input < 800598 || $input > 800602 && $input < 800605 || $input > 800609 && $input < 800612 || $input > 800616 && $input < 800619 || $input > 800623 && $input < 800626 || $input > 800630 && $input < 800633 || $input > 800637 && $input < 800640 || $input > 800644 && $input < 800647 || $input > 800651 && $input < 800654 || $input > 800658 && $input < 800661 || $input > 800665 && $input < 800668 || $input > 800672 && $input < 800675 || $input > 800679 && $input < 800682 || $input > 800687 && $input < 800690 || $input > 800694 && $input < 800697 || $input > 800702 && $input < 805100 || $input > 805100 && $input < 805200 || $input > 805202 && $input < 805300 || $input > 805300 && $input < 807005 || $input > 807006 && $input < 807010 || $input > 807014 && $input < 807016 || $input > 807016 && $input < 807020 || $input > 807023 && $input < 807025 || $input > 807025 && $input < 807030 || $input > 807031 && $input < 807035 || $input > 807039 && $input < 807041 || $input > 807044 && $input < 807046 || $input > 807046 && $input < 807050 || $input > 807053 && $input < 807055 || $input > 807058 && $input < 807060 || $input > 807063 && $input < 807065 || $input > 807068 && $input < 807070 || $input > 807072 && $input < 807075 || $input > 807077 && $input < 807080 || $input > 807083 && $input < 807085 || $input > 807089 && $input < 807091 || $input > 807091 && $input < 807095 || $input > 807095 && $input < 807100 || $input > 807100 && $input < 807105 || $input > 807105 && $input < 807110 || $input > 807111 && $input < 807115 || $input > 807119 && $input < 807121 || $input > 807122 && $input < 807125 || $input > 807126 && $input < 807130 || $input > 807131 && $input < 807135 || $input > 807137 && $input < 807140 || $input > 807143 && $input < 807145 || $input > 807149 && $input < 807151 || $input > 807153 && $input < 807155 || $input > 807161 && $input < 807165 || $input > 807165 && $input < 807170 || $input > 807171 && $input < 807175 || $input > 807177 && $input < 807180 || $input > 807180 && $input < 807185 || $input > 807185 && $input < 807190 || $input > 807191 && $input < 807195 || $input > 807195 && $input < 807200 || $input > 807204 && $input < 807206 || $input > 807206 && $input < 807210 || $input > 807212 && $input < 807215 || $input > 807219 && $input < 807221 || $input > 807224 && $input < 807226 || $input > 807228 && $input < 807235 || $input > 807236 && $input < 807240 || $input > 807241 && $input < 807245 || $input > 807246 && $input < 807250 || $input > 807257 && $input < 807260 || $input > 807261 && $input < 807265 || $input > 807266 && $input < 807270 || $input > 807272 && $input < 807275 || $input > 807277 && $input < 807280 || $input > 807280 && $input < 807285 || $input > 807286 && $input < 807290 || $input > 807292 && $input < 807295 || $input > 807295 && $input < 807300 || $input > 807302 && $input < 807305 || $input > 807306 && $input < 807310 || $input > 807314 && $input < 807316 || $input > 807316 && $input < 807320 || $input > 807321 && $input < 807325 || $input > 807327 && $input < 807330 || $input > 807331 && $input < 807335 || $input > 807336 && $input < 810001 || $input > 810005 && $input < 810008 || $input > 810012 && $input < 810015 || $input > 810019 && $input < 810022 || $input > 810026 && $input < 810029 || $input > 810033 && $input < 810036 || $input > 810041 && $input < 810044 || $input > 810048 && $input < 810051 || $input > 810055 && $input < 810058 || $input > 810062 && $input < 810065 || $input > 810069 && $input < 810072 || $input > 810076 && $input < 810079 || $input > 810083 && $input < 810086 || $input > 810090 && $input < 810093 || $input > 810098 && $input < 810101 || $input > 810105 && $input < 810108 || $input > 810112 && $input < 810115 || $input > 810119 && $input < 810122 || $input > 810126 && $input < 810129 || $input > 810133 && $input < 810136 || $input > 810140 && $input < 810143 || $input > 810148 && $input < 810151 || $input > 810156 && $input < 810159 || $input > 810162 && $input < 810165 || $input > 810169 && $input < 810172 || $input > 810176 && $input < 810179 || $input > 810183 && $input < 810186 || $input > 810191 && $input < 810194 || $input > 810199 && $input < 810202 || $input > 810206 && $input < 810209 || $input > 810214 && $input < 810217 || $input > 810220 && $input < 810223 || $input > 810226 && $input < 810229 || $input > 810234 && $input < 810237 || $input > 810241 && $input < 810244 || $input > 810247 && $input < 810249 || $input > 810249 && $input < 810252 || $input > 810256 && $input < 810259 || $input > 810264 && $input < 810267 || $input > 810267 && $input < 810269 || $input > 810271 && $input < 810274 || $input > 810278 && $input < 810281 || $input > 810285 && $input < 810288 || $input > 810292 && $input < 810295 || $input > 810300 && $input < 810303 || $input > 810307 && $input < 810310 || $input > 810315 && $input < 810318 || $input > 810322 && $input < 810325 || $input > 810330 && $input < 810333 || $input > 810336 && $input < 810339 || $input > 810343 && $input < 810346 || $input > 810350 && $input < 810353 || $input > 810358 && $input < 810361 || $input > 810366 && $input < 810369 || $input > 810374 && $input < 810377 || $input > 810381 && $input < 810384 || $input > 810388 && $input < 810391 || $input > 810396 && $input < 810399 || $input > 810404 && $input < 810407 || $input > 810411 && $input < 810414 || $input > 810418 && $input < 810421 || $input > 810425 && $input < 810428 || $input > 810433 && $input < 810436 || $input > 810440 && $input < 810443 || $input > 810447 && $input < 810450 || $input > 810454 && $input < 810457 || $input > 810461 && $input < 810464 || $input > 810468 && $input < 810471 || $input > 810475 && $input < 810478 || $input > 810483 && $input < 810486 || $input > 810491 && $input < 810494 || $input > 810498 && $input < 810501 || $input > 810506 && $input < 810509 || $input > 810514 && $input < 810517 || $input > 810522 && $input < 810525 || $input > 810529 && $input < 810532 || $input > 810535 && $input < 810538 || $input > 810542 && $input < 815100 || $input > 815100 && $input < 815200 || $input > 815206 && $input < 815300 || $input > 815303 && $input < 817005 || $input > 817005 && $input < 817010 || $input > 817014 && $input < 817016 || $input > 817016 && $input < 817020 || $input > 817023 && $input < 817025 || $input > 817027 && $input < 817030 || $input > 817033 && $input < 817035 || $input > 817042 && $input < 817045 || $input > 817049 && $input < 817051 || $input > 817051 && $input < 817055 || $input > 817061 && $input < 817065 || $input > 817067 && $input < 817070 || $input > 817070 && $input < 817075 || $input > 817076 && $input < 817080 || $input > 817084 && $input < 817086 || $input > 817086 && $input < 817090 || $input > 817096 && $input < 817100 || $input > 817102 && $input < 817105 || $input > 817107 && $input < 817110 || $input > 817113 && $input < 817115 || $input > 817116 && $input < 817120 || $input > 817123 && $input < 817125 || $input > 817134 && $input < 817136 || $input > 817136 && $input < 817140 || $input > 817144 && $input < 817146 || $input > 817146 && $input < 817150 || $input > 817153 && $input < 817155 || $input > 817156 && $input < 817160 || $input > 817163 && $input < 817165 || $input > 817166 && $input < 817170 || $input > 817171 && $input < 817175 || $input > 817178 && $input < 817180 || $input > 817183 && $input < 817185 || $input > 817185 && $input < 817190 || $input > 817191 && $input < 817195 || $input > 817197 && $input < 817200 || $input > 817202 && $input < 817205 || $input > 817206 && $input < 817210 || $input > 817212 && $input < 817215 || $input > 817216 && $input < 817220 || $input > 817221 && $input < 820001 || $input > 820007 && $input < 820009 || $input > 820014 && $input < 820017 || $input > 820022 && $input < 820025 || $input > 820030 && $input < 820033 || $input > 820037 && $input < 820040 || $input > 820045 && $input < 820048 || $input > 820053 && $input < 820056 || $input > 820061 && $input < 820064 || $input > 820069 && $input < 820072 || $input > 820078 && $input < 820080 || $input > 820082 && $input < 820085 || $input > 820089 && $input < 820091 || $input > 820101 && $input < 820103 || $input > 820103 && $input < 820106 || $input > 820109 && $input < 820112 || $input > 820116 && $input < 820119 || $input > 820123 && $input < 820126 || $input > 820131 && $input < 820134 || $input > 820139 && $input < 820142 || $input > 820147 && $input < 820150 || $input > 820153 && $input < 820155 || $input > 820161 && $input < 820164 || $input > 820169 && $input < 820172 || $input > 820177 && $input < 820180 || $input > 820185 && $input < 820187 || $input > 820192 && $input < 820195 || $input > 820200 && $input < 820203 || $input > 820208 && $input < 820211 || $input > 820216 && $input < 820219 || $input > 820222 && $input < 820226 || $input > 820230 && $input < 820233 || $input > 820238 && $input < 820241 || $input > 820249 && $input < 825100 || $input > 825100 && $input < 825200 || $input > 825202 && $input < 825300 || $input > 825300 && $input < 825400 || $input > 825400 && $input < 827005 || $input > 827012 && $input < 827015 || $input > 827020 && $input < 827025 || $input > 827029 && $input < 827031 || $input > 827032 && $input < 827035 || $input > 827036 && $input < 827040 || $input > 827043 && $input < 827045 || $input > 827048 && $input < 827050 || $input > 827053 && $input < 827055 || $input > 827057 && $input < 827060 || $input > 827062 && $input < 827065 || $input > 827065 && $input < 827070 || $input > 827078 && $input < 827080 || $input > 827080 && $input < 827085 || $input > 827085 && $input < 827090 || $input > 827093 && $input < 827095 || $input > 827097 && $input < 827100 || $input > 827100 && $input < 827105 || $input > 827108 && $input < 827110 || $input > 827111 && $input < 827115 || $input > 827117 && $input < 827120 || $input > 827121 && $input < 827125 || $input > 827125 && $input < 827130 || $input > 827133 && $input < 827135 || $input > 827142 && $input < 827145 || $input > 827147 && $input < 827150 || $input > 827154 && $input < 827156 || $input > 827157 && $input < 827160 || $input > 827162 && $input < 827165 || $input > 827165 && $input < 827170 || $input > 827173 && $input < 827175 || $input > 827176 && $input < 827180 || $input > 827180 && $input < 827185 || $input > 827185 && $input < 827190 || $input > 827195 && $input < 827200 || $input > 827201 && $input < 827205 || $input > 827205 && $input < 827210 || $input > 827212 && $input < 827215 || $input > 827217 && $input < 827220 || $input > 827224 && $input < 827226 || $input > 827227 && $input < 827230 || $input > 827230 && $input < 827235 || $input > 827237 && $input < 900001 || $input > 900008 && $input < 900012 || $input > 900016 && $input < 900020 || $input > 900051 && $input < 900055 || $input > 900058 && $input < 900062 || $input > 900064 && $input < 900068 || $input > 900070 && $input < 900075 || $input > 900077 && $input < 900082 || $input > 900083 && $input < 900088 || $input > 900091 && $input < 900095 || $input > 900097 && $input < 900102 || $input > 900105 && $input < 900109 || $input > 900111 && $input < 900116 || $input > 900119 && $input < 900122 || $input > 900125 && $input < 900130 || $input > 900133 && $input < 900137 || $input > 900140 && $input < 900144 || $input > 900147 && $input < 900152 || $input > 900155 && $input < 900160 || $input > 900162 && $input < 900167 || $input > 900170 && $input < 900175 || $input > 900178 && $input < 900182 || $input > 900184 && $input < 900189 || $input > 900191 && $input < 900196 || $input > 900199 && $input < 900203 || $input > 900206 && $input < 900210 || $input > 900212 && $input < 900217 || $input > 900219 && $input < 900224 || $input > 900229 && $input < 900233 || $input > 900238 && $input < 900241 || $input > 900243 && $input < 900247 || $input > 900251 && $input < 900255 || $input > 900259 && $input < 900263 || $input > 900266 && $input < 900270 || $input > 900273 && $input < 900277 || $input > 900280 && $input < 900284 || $input > 900287 && $input < 900292 || $input > 900295 && $input < 900299 || $input > 900303 && $input < 900307 || $input > 900311 && $input < 900316 || $input > 900320 && $input < 900326 || $input > 900330 && $input < 900337 || $input > 900341 && $input < 900345 || $input > 900350 && $input < 900354 || $input > 900357 && $input < 900362 || $input > 900367 && $input < 900371 || $input > 900380 && $input < 900382 || $input > 900384 && $input < 900388 || $input > 900390 && $input < 900394 || $input > 900396 && $input < 900402 || $input > 900403 && $input < 900407 || $input > 900409 && $input < 900412 || $input > 900415 && $input < 900419 || $input > 900421 && $input < 900426 || $input > 900427 && $input < 900432 || $input > 900434 && $input < 900438 || $input > 900440 && $input < 900455 || $input > 900457 && $input < 900462 || $input > 900464 && $input < 900469 || $input > 900472 && $input < 900476 || $input > 900478 && $input < 900482 || $input > 900483 && $input < 900487 || $input > 900489 && $input < 900493 || $input > 900494 && $input < 900497 || $input > 900498 && $input < 900502 || $input > 900504 && $input < 900507 || $input > 900508 && $input < 900511 || $input > 900514 && $input < 900517 || $input > 900520 && $input < 900524 || $input > 900527 && $input < 900532 || $input > 900534 && $input < 900538 || $input > 900540 && $input < 900544 || $input > 900546 && $input < 900552 || $input > 900554 && $input < 900559 || $input > 900562 && $input < 900565 || $input > 900567 && $input < 900572 || $input > 900575 && $input < 900580 || $input > 900581 && $input < 900587 || $input > 900592 && $input < 900597 || $input > 900600 && $input < 900604 || $input > 900608 && $input < 900612 || $input > 900615 && $input < 900619 || $input > 900622 && $input < 900627 || $input > 900630 && $input < 900634 || $input > 900636 && $input < 900642 || $input > 900643 && $input < 900647 || $input > 900649 && $input < 900652 || $input > 900654 && $input < 900657 || $input > 900659 && $input < 900663 || $input > 900665 && $input < 900669 || $input > 900670 && $input < 900673 || $input > 900676 && $input < 900682 || $input > 900685 && $input < 900690 || $input > 900693 && $input < 900696 || $input > 900699 && $input < 900702 || $input > 900705 && $input < 900709 || $input > 900711 && $input < 900716 || $input > 900717 && $input < 900720 || $input > 900721 && $input < 900725 || $input > 900728 && $input < 900732 || $input > 900735 && $input < 900742 || $input > 900746 && $input < 905100 || $input > 905101 && $input < 905200 || $input > 905200 && $input < 905300 || $input > 905300 && $input < 905350 || $input > 905350 && $input < 905360 || $input > 905360 && $input < 905400 || $input > 905401 && $input < 905500 || $input > 905504 && $input < 905550 || $input > 905550 && $input < 905560 || $input > 905560 && $input < 905600 || $input > 905602 && $input < 905700 || $input > 905701 && $input < 905800 || $input > 905803 && $input < 905900 || $input > 905902 && $input < 906100 || $input > 906100 && $input < 907005 || $input > 907007 && $input < 907010 || $input > 907018 && $input < 907020 || $input > 907028 && $input < 907030 || $input > 907032 && $input < 907035 || $input > 907038 && $input < 907040 || $input > 907042 && $input < 907045 || $input > 907048 && $input < 907050 || $input > 907052 && $input < 907055 || $input > 907056 && $input < 907060 || $input > 907061 && $input < 907065 || $input > 907074 && $input < 907076 || $input > 907076 && $input < 907080 || $input > 907082 && $input < 907085 || $input > 907087 && $input < 907090 || $input > 907091 && $input < 907095 || $input > 907099 && $input < 907101 || $input > 907101 && $input < 907105 || $input > 907106 && $input < 907110 || $input > 907113 && $input < 907115 || $input > 907119 && $input < 907121 || $input > 907121 && $input < 907125 || $input > 907126 && $input < 907130 || $input > 907130 && $input < 907135 || $input > 907135 && $input < 907140 || $input > 907142 && $input < 907145 || $input > 907156 && $input < 907160 || $input > 907163 && $input < 907165 || $input > 907169 && $input < 907171 || $input > 907172 && $input < 907175 || $input > 907177 && $input < 907180 || $input > 907184 && $input < 907186 || $input > 907186 && $input < 907190 || $input > 907191 && $input < 907195 || $input > 907197 && $input < 907200 || $input > 907204 && $input < 907206 || $input > 907207 && $input < 907210 || $input > 907211 && $input < 907215 || $input > 907218 && $input < 907220 || $input > 907224 && $input < 907226 || $input > 907226 && $input < 907230 || $input > 907236 && $input < 907240 || $input > 907246 && $input < 907250 || $input > 907251 && $input < 907255 || $input > 907257 && $input < 907260 || $input > 907261 && $input < 907265 || $input > 907267 && $input < 907270 || $input > 907271 && $input < 907275 || $input > 907281 && $input < 907285 || $input > 907288 && $input < 907290 || $input > 907291 && $input < 907295 || $input > 907295 && $input < 907300 || $input > 907300 && $input < 907305 || $input > 907305 && $input < 910001 || $input > 910005 && $input < 910010 || $input > 910014 && $input < 910019 || $input > 910036 && $input < 910040 || $input > 910045 && $input < 910048 || $input > 910054 && $input < 910058 || $input > 910062 && $input < 910067 || $input > 910071 && $input < 910077 || $input > 910081 && $input < 910085 || $input > 910089 && $input < 910093 || $input > 910098 && $input < 910102 || $input > 910105 && $input < 910110 || $input > 910120 && $input < 910125 || $input > 910132 && $input < 910134 || $input > 910139 && $input < 910144 || $input > 910149 && $input < 910153 || $input > 910158 && $input < 910160 || $input > 910165 && $input < 915100 || $input > 915104 && $input < 915200 || $input > 915202 && $input < 915300 || $input > 915303 && $input < 915400 || $input > 915400 && $input < 917005 || $input > 917007 && $input < 917010 || $input > 917015 && $input < 917020 || $input > 917020 && $input < 917025 || $input > 917025 && $input < 917030 || $input > 917030 && $input < 917035 || $input > 917035 && $input < 917040 || $input > 917041 && $input < 917045 || $input > 917047 && $input < 917050 || $input > 917053 && $input < 917055 || $input > 917059 && $input < 917061 || $input > 917061 && $input < 917065 || $input > 917067 && $input < 917080 || $input > 917083 && $input < 917085 || $input > 917087 && $input < 917090 || $input > 917094 && $input < 917096 || $input > 917096 && $input < 917100 || $input > 917104 && $input < 917106 || $input > 917106 && $input < 917110 || $input > 917110 && $input < 917115 || $input > 917118 && $input < 917120 || $input > 917124 && $input < 917126 || $input > 917126 && $input < 917130 || $input > 917134 && $input < 917136 || $input > 917142 && $input < 917145 || $input > 917147 && $input < 917150 || $input > 917151 && $input < 917155 || $input > 917156 && $input < 917160 || $input > 917163 && $input < 917165 || $input > 917165 && $input < 917170 || $input > 917172 && $input < 917175 || $input > 917177 && $input < 917180 || $input > 917183 && $input < 917185 || $input > 917185 && $input < 917190 || $input > 917192 && $input < 917195 || $input > 917197 && $input < 917200 || $input > 917203 && $input < 917205 || $input > 917206 && $input < 917210 || $input > 917210 && $input < 917215 || $input > 917219 && $input < 917221 || $input > 917222 && $input < 917225 || $input > 917226 && $input < 917230 || $input > 917232 && $input < 917235 || $input > 917236 && $input < 917240 || $input > 917240 && $input < 917245 || $input > 917245 && $input < 917250 || $input > 917254 && $input < 917256 || $input > 917257 && $input < 917260 || $input > 917260 && $input < 917265 || $input > 917268 && $input < 917270 || $input > 917271 && $input < 917275 || $input > 917282 && $input < 917285 || $input > 917285 && $input < 917290 || $input > 917291 && $input < 917295 || $input > 917296 && $input < 920001 || $input > 920007 && $input < 920012 || $input > 920018 && $input < 920022 || $input > 920025 && $input < 920030 || $input > 920036 && $input < 920041 || $input > 920044 && $input < 920049 || $input > 920051 && $input < 920055 || $input > 920058 && $input < 920063 || $input > 920066 && $input < 920072 || $input > 920075 && $input < 920080 || $input > 920087 && $input < 920092 || $input > 920096 && $input < 925100 || $input > 925102 && $input < 925150 || $input > 925150 && $input < 925200 || $input > 925200 && $input < 925300 || $input > 925300 && $input < 927005 || $input > 927006 && $input < 927010 || $input > 927013 && $input < 927015 || $input > 927015 && $input < 927020 || $input > 927021 && $input < 927025 || $input > 927026 && $input < 927030 || $input > 927033 && $input < 927035 || $input > 927037 && $input < 927040 || $input > 927046 && $input < 927050 || $input > 927051 && $input < 927055 || $input > 927058 && $input < 927060 || $input > 927061 && $input < 927065 || $input > 927065 && $input < 927070 || $input > 927071 && $input < 927075 || $input > 927078 && $input < 927080 || $input > 927083 && $input < 927085 || $input > 927086 && $input < 927090 || $input > 927092 && $input < 927095 || $input > 927097 && $input < 927100 || $input > 927107 && $input < 927110 || $input > 927111 && $input < 927115 || $input > 927118 && $input < 927120 || $input > 927120 && $input < 927125 || $input > 927125 && $input < 927130 || $input > 927130 && $input < 927135 || $input > 927135 && $input < 927140 || $input > 927140 && $input < 927145 || $input > 927147 && $input < 927150 || $input > 927151 && $input < 927155 || $input > 927156 && $input < 927160 || $input > 927160 && $input < 927165 || $input > 927168 && $input < 927170 || $input > 927172 && $input < 927175 || $input > 927176 && $input < 927180 || $input > 927183 && $input < 927185 || $input > 927185 && $input < 927190 || $input > 927198 && $input < 927200 || $input > 927201 && $input < 927205 || $input > 927208 && $input < 927210 || $input > 927211 && $input < 927215 || $input > 927217 && $input < 927220 || $input > 927224 && $input < 927226 || $input > 927226 && $input < 927230 || $input > 927232 && $input < 927235 || $input > 927236 && $input < 927240 || $input > 927243 && $input < 927245 || $input > 927246 && $input < 927250)
		//if(strlen($input)!=6)
		   // return 0;
		//else
			//return 1;
//}



//fct buna
	function validarePreferinte($preferinte)
	{
        for($i=1;$i<12;$i++){
            $frecv[$i]=0;
			if($preferinte[$i]<1||$preferinte[$i]>11)
				return 1;
		}

        for($i=1;$i<12;$i++)
            $frecv[$preferinte[$i]]++;

        for($i=1;$i<12;$i++)
            if($frecv[$i]==0||$frecv[$i]>1)
                return 1;
				
        return 0;//corect
    }

//fct buna
	function validChitanta($chitanta)
	{
        if(!$chitanta)
            return -1;
		if(!(ctype_digit($chitanta)))
			return 1;
		if($chitanta<0)
			return 2;
		return 0;
	}

//fct buna
	function validSuma($suma)
	{
        if(!$suma)
            return -1;
		if($suma<0)
			return 1;
		return 0;//corect
	}

//fct buna
	function validRadio($data)
	{
        if(!$data)
            return -1;
		if($data!==1&&$data!==2&&$data!==3)
			return 1;
		return 0;
	}

//fct buna
	function validRadioFinal($data)
	{
        if(!$data)
            return -1;
		if($data!==1&&$data!==2&&$data!==3&&$data!==4&&$data!==5)
			return 1;
		return 0;
	}

//fct buna
	function validScutire($scutire)
	{
		if(!$scutire)
			return -1;
		if(strlen($scutire)<6 || strlen($scutire)>50)
			return 2;
		if(!(ctype_alpha(str_replace(' ', '', $scutire))))
			return 1;
		return 0;
	}
	
//fct buna
function validareNrSemCuBursa($nrSem){
	if($nrSem >=0 && $nrSem <= 16)
		return 0; //corect
	
	if(!$nRSem)
		return -1;
	
	return 1;//prea multe semestre
}

//fct buna
function validareAniStudii($ani){
	if(!$ani)
		return -1;
    if(!ctype_digit($ani))
        return 1; // caractere interzise
    else if($ani <1 || $ani > 6)
        return 2; //numar incorect
    return 0;//corect
}
    /*
    -
    -
    -
    -
    -
    -
    -
    --
    -
    -
    -
    -
    -
    -
    -
    -
    */
	
	//© 2017 GitHub, Inc. Terms Privacy Security Status Help
?>