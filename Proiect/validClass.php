
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


//fct buna
function validInitialaTata($p_initTata)
{
	if(!$p_initTata)
		return -1;
	if(strlen($p_initTata) > 14 || strlen($p_initTata) < 2)
		return 1; // lungime incorecta

	$p_initTata_diacritice=str_replace(array('.','Ă','Î','Ș','Ț','Â'),'',$p_initTata);
	if(!preg_match('/(([A-ZĂÎȘȚÂ]\.)+)$/', $p_initTata))
		return 3;//Format incorect
	if(!preg_match('/^[A-Z]*$/', $p_initTata_diacritice))
		return 2;//caract incorecte
	return 0;
	
	/*
	$lung=strlen($p_initTata);
	
	if($lung%2==1){
		if(!preg_match('/(([A-ZĂÎȘȚÂ]\.)+)$/', $p_initTata))
			return 3;//Format incorect
		else
			return 0;
	}

    $initialaTata=str_split($p_initTata);

    if($lung==2)  // C. (Costel)
    {
        if(!preg_match('/^[A-Z]$/', $initialaTata[0]))
            return 2;//caract incorecte
        else 
			if( $initialaTata[1]!='.')
                return 3;//Format incorect
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
						return 3;//Format incorect
					else 
						if(!preg_match('/^[A-Z]$/', $initialaTata[2]))
							return 2;//caractere incorecte
						else 
							if($initialaTata[3]!='.')
								return 3;//Format incorect
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
                            return 3;//Format incorect
						else 
							if(!preg_match('/^[A-Z]$/', $initialaTata[2]))
								return 2;
							else 
								if($initialaTata[3]!='.')
									return 3;//Format incorect
								else
									if(!preg_match('/^[A-Z]$/', $initialaTata[4]))
										return 2;
									else
										if($initialaTata[5]!='.')
											return 3;//Format incorect
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
									}*/

}


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


//fct buna
function validCetatetnie($nationalitate)
{
	$nationalitate_diacritice=str_replace(array('ă','î','ș','ț','â','Ă','Î','Ș','Ț','Â'),'',$nationalitate);
    if(!$nationalitate)
        return -1;
   // $nationalitate = strtolower($nationalitate);
   // if($nationalitate != 'romana')
	if(!preg_match('/^[a-zA-Z ]*$/', $nationalitate_diacritice))
        return 1; // cetatenie incorecta
    return 0;
}


//fct buna
/*
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
    }*/

	function validCNP($p_cnp)
    {
		if(!$p_cnp)
            return -1;
        // CNP must have 13 characters
        if(strlen($p_cnp) != 13) {
            return 1;//numar invalid de caractere
        }

        $cnp = str_split($p_cnp); 

        if($cnp[0]==0)
            return 2;// nu poate fi 0 prima

        $an=$cnp[1]*10+$cnp[2];
        $luna=$cnp[3]*10+$cnp[4];
        $zi=$cnp[5]*10+$cnp[6];

        if(checkdate($luna,$zi,$an)==0)
            return 3;  // nu corespunde cu o data valida
		// 				  2			  7			  9  		  1			  4			  6			  3			  5			  8			  2			   7			9
		$checkC = $cnp[0]*2 + $cnp[1]*7 + $cnp[2]*9 + $cnp[3]*1 + $cnp[4]*4 + $cnp[5]*6 + $cnp[6]*3 + $cnp[7]*5 + $cnp[8]*8 + $cnp[9]*2 + $cnp[10]*7 + $cnp[11]*9;
		$checkC = $checkC % 11;
		
		if($checkC==10)
			$checkC=1;
		
		if($checkC==$cnp[12])
			return 0;  //corect
		else 
			return 4;  // nu corespunde formulei;
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


//fct buna
function validEtnie($nationalitate)
{
    if(!$nationalitate)
        return -1;
   /* $nationalitate = strtolower($nationalitate);
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
      $nationalitate != 'namibian' && $nationalitate != 'sud africa' && $nationalitate != 'zambian' && $nationalitate != 'zimbabuean' && 
	  $nationalitate != 'rrom' && $nationalitate != 'moldovean')
        return 1; // nu exista acea nationalitate
	*/
	$nationalitate_diacritice=str_replace(array('ă','î','ș','ț','â','Ă','Î','Ș','Ț','Â'),'',$nationalitate);
    if(!$nationalitate)
        return -1;
	if(!preg_match('/^[a-zA-Z ]*$/', $nationalitate_diacritice))
        return 1; // cetatenie incorecta
    return 0;

}


//fct buna
function validLimbaMaterna($p_limba)
{
	$p_limba_diacritice=str_replace(array('ă','î','ș','ț','â','Ă','Î','Ș','Ț','Â'),'',$p_limba);
    if(!$p_limba)
        return -1;
    if(strlen($p_limba)<3 || strlen($p_limba)>20)
        return 1;//numar insuficient de caractere
    
    if(!ctype_alpha($p_limba_diacritice))
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


//fct buna
    function validNume($p_nume) 
    {	$p_nume_diacritice=str_replace(array('ă','î','ș','ț','â','Ă','Î','Ș','Ț','Â'),'',$p_nume);
        
		if(!$p_nume)
			return -1;
		else 
			if(strlen($p_nume)<1 || strlen($p_nume)>30)
                return 2; // lungime gresita
			else
				if(!preg_match('/^[a-zA-Z ]*$/', $p_nume_diacritice))
					return 1;//caract incorecte

        return 0;//corect
    }



//fct buna
    function validPrenume($p_prenume)
    {
		$p_prenume_diacritice=str_replace(array('ă','î','ș','ț','â','Ă','Î','Ș','Ț','Â'),'',$p_prenume);
        if(!$p_prenume)
            return -1;
		$prenume=str_split($p_prenume);
		$lungime=strlen($p_prenume);
		if($prenume[$lungime-1]=='-')
			return 3;
		if($p_prenume=='-')
			return 0;
		if(strlen($p_prenume)<1 || strlen($p_prenume)>30)
			return 2; // lungime gresita
		else
			if(!ctype_alpha(str_replace(' ','',str_replace('-', '', $p_prenume_diacritice))))
				return 1;//caractere incorecte
			else 
				if(strpos($p_prenume, '--') !== false)
					return 1;//caractere incorecte
				else
					if(strpos($p_prenume, '  ') !== false)
						return 1;//caractere incorecte
					
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


//fct buna
function validTipBuletin($p_tip)
{
    if(!$p_tip)
        return -1;
    if(!ctype_alpha(str_replace('.','',str_replace(' ', '', str_replace('-', '', $p_tip)))))
        return 1;
    
    return 0;
}


//fct buna
function validareStrada($p_Strada)
{
	$p_Strada_diacritice=str_replace(array('ă','î','ș','ț','â','Ă','Î','Ș','Ț','Â'),'',$p_Strada);
	if(!$p_Strada)
		return -1;
    if(!ctype_alpha(str_replace(' ', '', str_replace('-','',$p_Strada_diacritice))))
        return 1;//caractere incorecte
    
    return 0;
}


//fct buna
function validEliberareBuletin($p_eliberat)
{
	$p_eliberat_diacritice=str_replace(array('ă','î','ș','ț','â','Ă','Î','Ș','Ț','Â'),'',$p_eliberat);
    if(!$p_eliberat)
        return -1;
	if(strlen($p_eliberat)<3)
		return 2;
    if(!ctype_alpha(str_replace(',','',str_replace('.','',str_replace(' ', '', $p_eliberat_diacritice)))))
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
 function validareMedieAlegere($input){
     
        if(!$input)
            return -1;
		
		if($input=='-')  // poate fi si -
			return 0;
     
        if(ctype_digit(str_replace(array(".", ","), '', $input)) == 0)
            return 1; //caractere incorecte , nu exista cifra
		
        if($input < 5 || $input > 10)
            return 2;  // numar medie incorect
		
		if($input=='10') 
			return 0;
		else {
			$nota=str_split($input);
			if($nota[0]<'5' && $nota[0]>'9')
				return 2; // medie incorecta
			else 
				if(strlen($input)==1)
					return 0; // media 5,6,7,8 sau 9
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
	$Profil_diacritice=str_replace(array('ă','î','ș','ț','â','Ă','Î','Ș','Ț','Â'),'',$Profil);
    if(!$Profil)
        return -1;
    if(!ctype_alpha(str_replace(array(' ','-','.'),'',$Profil_diacritice)))
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
	$p_tara_diacritice=str_replace(array('ă','î','ș','ț','â','Ă','Î','Ș','Ț','Â'),'',$p_tara);
    if(!$p_tara)
        return -1;
    if(strlen($p_tara)>36 || strlen($p_tara)<4)
        return 1;//numar incorect caractere
    if(!(ctype_alpha(str_replace(array(" ", "-"), '', $p_tara_diacritice))))
        return 2;//caractere invalide
    return 0;
}


//fct buna
function validLocalitate($p_localitate){
	$p_localitate_diacritice=str_replace(array('ă','î','ș','ț','â','Ă','Î','Ș','Ț','Â'),'',$p_localitate);
    if(!$p_localitate)
        return -1;
    if(strlen($p_localitate)>85 || strlen($p_localitate)<3)
        return 1;//numar incorect caractere
    if(!(ctype_alpha(str_replace(array(" ", "-"), '', $p_localitate_diacritice))))
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
function validareAnFacultate($input){
        if(!$input)
            return -1;
		

        if(!ctype_digit($input))
            return 1;// caractere incorecte

        if($input < 1 || $input > 9)
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
		if(!(ctype_alnum($chitanta)))
			return 1;
		//if($chitanta<0)
		//	return 2;
		return 0;
	}


//fct buna
	function validSuma($suma)
	{
		if($suma==0)
			return 0;
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
		if($data!==1&&$data!==2)
			return 1;
		return 0;
	}
	
	//fct buna
	function validRadio3($data)
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
		$p_scutire_diacritice=str_replace(array('ă','î','ș','ț','â','Ă','Î','Ș','Ț','Â'),'',$scutire);
		if(!$scutire)
			return -1;
		if(strlen($scutire)<6 || strlen($scutire)>50)
			return 2;
		if(!(ctype_alpha(str_replace(' ', '', $p_scutire_diacritice))))
			return 1;
		return 0;
	}
	
	//fct buna
	function validAlteSurse($scutire)
	{
		$p_scutire_diacritice=str_replace(array('ă','î','ș','ț','â','Ă','Î','Ș','Ț','Â'),'',$scutire);
		if(!$scutire)
			return -1;
		if(strlen($scutire)<4 || strlen($scutire)>50)
			return 2;
		if(!(ctype_alpha(str_replace(' ', '', $p_scutire_diacritice))))
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

	
	//© 2017 GitHub, Inc. Terms Privacy Security Status Help
?>