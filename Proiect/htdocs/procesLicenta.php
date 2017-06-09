<?php
include "exempluLicenta.php";

if($_POST['Submit'] == 'Register')
{
	$v_Numele_De_Familie = $_POST["Licenta_Numele_De_Familie"];  // V
	 $vNumele_De_Familie = validNume($v_Numele_De_Familie);
	 
	$v_Licenta_Initiala_Tata = $_POST["Licenta_Initiala_Tata"];  // V
	 $vLicenta_Initiala_Tata = validInitialaTata($v_Licenta_Initiala_Tata);
	
	$v_Licenta_Prenumele = $_POST["Licenta_Prenumele"];  // V
	 $vLicenta_Prenumele = validNume($v_Licenta_Prenumele);
   
    $v_Licenta_CNP = $_POST["Licenta_CNP"];  // V
	 $vLicenta_CNP = validCNP($v_Licenta_CNP);
	
	$v_Licenta_Serie_Buletin = $_POST["Licenta_Serie_Buletin"];  // V
	 $vLicenta_Serie_Buletin = validSerieBuletin($v_Licenta_Serie_Buletin);
	
	$v_Licenta_Medie_BAC = $_POST["Licenta_Medie_BAC"];  // V
	 $vLicenta_Medie_BAC = validareMedieBac($v_Licenta_Medie_BAC);
	
	$v_Licenta_Nota_MI = $_POST["Licenta_Nota_MI"];  // V
	 $vLicenta_Nota_MI = validareProbaAlegere($v_Licenta_Nota_MI);
	
	$v_Licenta_Strada = $_POST["Licenta_Strada"];
	
	$v_Licenta_Numar = $_POST["Licenta_Numar"];
	
	$v_Licenta_Bloc = $_POST["Licenta_Bloc"];
	
	$v_Licenta_Scara = $_POST["Licenta_Scara"];
	
	$v_Licenta_Etaj = $_POST["Licenta_Etaj"];
	
	$v_Licenta_Apartament = $_POST["Licenta_Apartament"];
	
	$v_Licenta_Localitate = $_POST["Licenta_Localitate"];
	
	$v_Licenta_Cod_Postal = $_POST["Licenta_Cod_Postal"];
	
	$v_Licenta_Tara = $_POST["Licenta_Tara"];

	$v_Licenta_Judet = $_POST["Licenta_Judet"];
	
	$vTest_Locuinta = validare_locatie(1,$v_Licenta_Tara,$v_Licenta_Judet,$v_Licenta_Localitate,$v_Licenta_Strada); // V
	
	$v_Licenta_Telefon = $_POST["Licenta_Telefon"];  // V
	 $vLicenta_Telefon = validTelefon($v_Licenta_Telefon);
	 
	
	$v_Licenta_Email = $_POST["Licenta_Email"];  // V
	 $vLicenta_Email = validEmail($v_Licenta_Email);
	

	//if($vNumele_De_Familie !=0 && $vLicenta_Initiala_Tata!=0 && $vLicenta_Prenumele!=0 && $vLicenta_CNP!=0 && $vLicenta_Serie_Buletin!=0 && $vLicenta_Medie_BAC!=0 && $vLicenta_Nota_MI!=0 && $vTest_Locuinta!=0 && $vLicenta_Telefon!=0 && $vLicenta_Email!=0)
    //  	echo "Bun";
	    /* aici adaugi */
	//else 
	//	echo "NuBun";
}
	  /* aici incepe adaugarea
			$stmt=oci_parse($connection, 'select u.username, u.parola, d.cnp from useri u
			join date_personale_candidat d on d.id = u.id
			where u.username = :username and u.parola = :password and d.cnp = :cnp');
			oci_bind_by_name($stmt, ':username',$username);
			oci_bind_by_name($stmt, ':password',$password);
			oci_bind_by_name($stmt, ':cnp',$cnp);
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

			// Fetch the results of the query

			//while ($row = oci_fetch_array($stmt, OCI_ASSOC+OCI_RETURN_NULLS))
			$count=0;

			while ($row = oci_fetch_assoc($stmt)) {  
				$count++;
			echo 'Login realizat cu succes';
			}


    
			if(!$count){
				$message_error="User-ul/Parola/CNP-ul sunt incorecte";
				print htmlentities($message_error);
			}
  
			oci_free_statement($stmt);
*/
	/*
	if($vNumele_De_Familie !=0)
		echo "Nume Bun";
    else 
		echo "Nume NuBun";
   
   if($vLicenta_Initiala_Tata !=0)
		echo "Initiala Bun";
    else 
		echo "Initiala NuBun";
	
	if($vLicenta_Prenumele !=0)
		echo "Prenume Bun";
    else 
		echo "Prenume NuBun";
	
	if($vLicenta_CNP !=0)
		echo "CNP Bun";
    else 
		echo "CNP NuBun";
	
	if($vLicenta_Serie_Buletin !=0)
		echo "Serie Bun";
    else 
		echo "Serie NuBun";
	
	if($vLicenta_Medie_BAC !=0)
		echo "BAC Bun";
    else 
		echo "BAC NuBun";
	
	if($vLicenta_Nota_MI !=0)
		echo "Nota Mate/Info Bun";
    else 
		echo "Nota Mate/Info NuBun";
	
	if($vTest_Locuinta !=0)
		echo "Locuinta Bun";
    else 
		echo "Locuinta NuBun";
	
	if($vLicenta_Telefon !=0)
		echo "Telefon Bun";
    else 
		echo "Telefon NuBun";
	
	if($vLicenta_Email !=0)
		echo "Mail Bun";
    else 
		echo "Mail NuBun";*/
	
//}
?>