<!DOCTYPE HTML>
<html class="supernova">

	<head>
		<meta charset="UTF-8">
		<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.292" rel="stylesheet" type="text/css">
		<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.292">
		<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.292">
		<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?themeRevisionID=59107387cf3bfe1ec421e0c1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="style-check.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/style2.css">
		<link rel="stylesheet" type="text/css" href="css/footer.css">
		<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
		<link rel="icon" href="imagini/fii.png">

		<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
		<script type="text/javascript" src="js/bar.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

		<script type="text/javascript">
			function AltaUniv () {
				if (document.getElementById('daAltaFacultate').checked) {
					document.getElementById('AltaUniv').style.display = 'block';
				}
				else document.getElementById('AltaUniv').style.display = 'none';
			}

			function AbsolventLicenta () {
				if (document.getElementById('daAbsolventLicenta').checked) {
					document.getElementById('AbsolventLicenta').style.display = 'block';
				}
				else document.getElementById('AbsolventLicenta').style.display = 'none';
			}

			function DiplomaLicenta () {
				if (document.getElementById('daDiplomaLicenta').checked) {
					document.getElementById('DiplomaLicenta').style.display = 'block';
				}
				else document.getElementById('DiplomaLicenta').style.display = 'none';
			}

			function Preadmitere () {
				if (document.getElementById('daPreadmitere').checked) {
					document.getElementById('Sustine_Test').style.display = 'block';
				}
				else document.getElementById('Sustine_Test').style.display = 'none';
			}

			function AlteConcursuri () {
				if (document.getElementById('daAltConcurs').checked) {
					document.getElementById('AlteConcursuri').style.display = 'block';
				}
				else document.getElementById('AlteConcursuri').style.display = 'none';
			}

			function InfoROBugetF () {
				if (document.getElementById('InfoROBuget').checked) {
					document.getElementsByName("InfoROBugetDIV")[0].className = 'none';
					document.getElementsByName("InfoROBugetDIV")[0].setAttribute('draggable', true);
					document.getElementsByName("InfoROBugetDIV")[0].setAttribute('ondragstart', "return true;");
				}
				else 
					{
						document.getElementsByName("InfoROBugetDIV")[0].className = 'disabled';
						document.getElementsByName("InfoROBugetDIV")[0].setAttribute('draggable', false);
					}
			}

			function InfoROTaxaF () {
				if (document.getElementById('InfoROTaxa').checked) {
					document.getElementsByName('InfoROTaxaDIV')[0].className = 'none';
					document.getElementsByName("InfoROTaxaDIV")[0].setAttribute('draggable', true);
					document.getElementsByName("InfoROTaxaDIV")[0].setAttribute('ondragstart', "return true;");
				}
				else {
					document.getElementsByName('InfoROTaxaDIV')[0].className = 'disabled';
					document.getElementsByName("InfoROTaxaDIV")[0].setAttribute('draggable', false);
				}

			}
			function InfoENTaxaF () {
				if (document.getElementById('InfoENTaxa').checked) {
					document.getElementsByName('InfoENTaxaDIV')[0].className = 'none';
					document.getElementsByName("InfoENTaxaDIV")[0].setAttribute('draggable', true);
					document.getElementsByName("InfoENTaxaDIV")[0].setAttribute('ondragstart', "return true;");

				}
				else {
					document.getElementsByName('InfoENTaxaDIV')[0].className = 'disabled';
					document.getElementsByName("InfoENTaxaDIV")[0].setAttribute('draggable', false);
				}
			}

			function InfoENBugetF () {
				if (document.getElementById('InfoENBuget').checked) {
					document.getElementsByName('InfoENBugetDIV')[0].className = 'none';
					document.getElementsByName("InfoENBugetDIV")[0].setAttribute('draggable', true);
					document.getElementsByName("InfoENBugetDIV")[0].setAttribute('ondragstart', "return true;");
				}
				else {
					document.getElementsByName('InfoENBugetDIV')[0].className = 'disabled';
					document.getElementsByName("InfoENBugetDIV")[0].setAttribute('draggable', false);
				}
			}
		</script>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script>
			$( function() {
				$( "ul.droptrue" ).sortable({
				connectWith: "ul"
				});
	 
				$( "#sortable1, #sortable2, #sortable3, #Pref1, #Pref2, #Pref3, #Pref4" ).disableSelection();
				
			} );
		</script>
		
		<style type="text/css">

			.form-line{
				padding-top:12px;
				padding-bottom:12px;
			}

			body, html{
				margin:0;
				padding:0;
				background:#fff;
			}

			.form-all{
				margin:0px auto;
				padding-top:0px;
				width:690px;
				color:#555 !important;
				font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
				font-size:14px;
			}

			.form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
				color: false;
			}

		</style>

		<style type="text/css" id="form-designer-style">

			/* Injected CSS Code */
			/*PREFERENCES STYLE*/

			.form-all {
				font-family: Lucida Grande,Lucida Sans Unicode,Lucida Sans,Verdana,Tahoma,sans-serif, sans-serif;
			}

			.form-all .qq-upload-button,
			.form-all .form-submit-button,
			.form-all .form-submit-reset,
			.form-all .form-submit-print {
				font-family: Lucida Grande,Lucida Sans Unicode,Lucida Sans,Verdana,Tahoma,sans-serif, sans-serif;
			}

			.form-all .form-pagebreak-back-container,
			.form-all .form-pagebreak-next-container {
				font-family: Lucida Grande,Lucida Sans Unicode,Lucida Sans,Verdana,Tahoma,sans-serif, sans-serif;
			}

			.form-header-group {
				font-family: Lucida Grande,Lucida Sans Unicode,Lucida Sans,Verdana,Tahoma,sans-serif, sans-serif;
			}

			.form-label {
				font-family: Lucida Grande,Lucida Sans Unicode,Lucida Sans,Verdana,Tahoma,sans-serif, sans-serif;
			}

			.form-label.form-label-auto {
				display: block;
				float: none;
				text-align: left;
				width: 100%;
			}

			.form-line {
				margin-top: 12px 36px 12px 36px px;
				margin-bottom: 12px 36px 12px 36px px;
			}

			.form-all {
				width: 590px;
			}

			.form-label-left,
			.form-label-right {
				width: 200px;
			}

			.form-all {
				font-size: 14pxpx
			}

			.form-all .qq-upload-button,
			.form-all .qq-upload-button,
			.form-all .form-submit-button,
			.form-all .form-submit-reset,
			.form-all .form-submit-print {
				font-size: 14pxpx
			}

			.form-all .form-pagebreak-back-container,
			.form-all .form-pagebreak-next-container {
				font-size: 14pxpx
			}

			.supernova .form-all, .form-all {
				border: 1px solid transparent;
			}

			.form-all {
				color: #555;
			}

			.form-header-group .form-header {
				color: #555;
			}

			.form-header-group .form-subHeader {
				color: #555;
			}

			.form-label-top,
			.form-label-left,
			.form-label-right,
			.form-html,
			.form-checkbox-item label,
			.form-radio-item label {
				color: #555;
			}

			.form-sub-label {
				color: #6f6f6f;
			}

			.supernova body {
				background: transparent;
			}

			.form-textbox,
			.form-textarea,
			.form-radio-other-input,
			.form-checkbox-other-input,
			.form-captcha input,
			.form-spinner input {
				background-color: undefined;
			}

			.supernova {
				background-image: none;
				background-color: white;
			}

			#stage {
				background-image: none;
			}

			.form-all {
				background-image: none;
			}

			.ie-8 .form-all:before { 
				display: none;
			}

			.ie-8 {
				margin-top: auto;
				margin-top: initial;
			}

			.formular2 {
				margin: 80px;
				margin-top: 0px;
			}

			#subHeader_34 {
				margin-left: 65px;
				margin-top:30px;
			}

			.form-line {
				padding-right: 0;
				padding-left: 0;
			}

			.cid_1 {
				width: 100%;
			}

			.general_name {
				width:100%;
				padding:0px;
			}

			#num {
				width:22%;
				padding:0;
				margin:0;
			}

			#num2 {
				width:22.2%;
				padding:0;
				margin:0;
			}

			#prenum {
				width:34%;
				padding:0;
				margin:0;
			}

			#initiala {
				width: 20%;
				margin:0;
				padding:0;
			}

			#id_1 {
				padding-right: 0;
			}

			.first_1 {
				width:100%;
				height:40px;
			}

			.middle_1 {
				width:100%;
				height:40px;
			}

			.last_1 {
				width:100%;
				height:40px;
			}

			#CNP {
				width:20%;
			}

			#serie {
				width:41.5%;
			}

			.liceu{
				width:100%;
				height:40px;
			}

			.mg {
				width: 25%;
				float:left;
				height:40px;
			}

			.gen {
				width:100%;
				padding-left: 7px;
				height:40px;
			}

			#id_10 {
				padding-left: 10px;
			}

			.info-box {
				display: inline-block;
				position: relative;
				padding: 0.5px 3px 0.3px;
				background-color: #2d80bf;
				color: white;
				font-size: 12px;
				line-height: 1;
				border-radius: 20%;
				margin: 0 5px;
			}

			.info-box__content {
				width:150px;
				display: none;
				position: absolute;
				left: calc(100% + 5px);
				bottom: 100%;
				padding: 10px;
				background-color: #F0F8FF;
				color: black;
				font-size: 12px;
				border-radius: 5px;
			}

			.info-box:hover .info-box__content {
				display: block;
			}

			input[type=radio].css-checkbox {
				position:absolute; z-index:-1000; left:-1000px; overflow: hidden; clip: rect(0 0 0 0); height:1px; width:1px; margin:-1px; padding:0; border:0;
			}

			input[type=radio].css-checkbox + label.css-label {
				padding-left:50px;
				height:21px; 
				display:inline-block;
				line-height:21px;
				background-repeat:no-repeat;
				background-position: 0 0;
				font-size:18px;
				color:grey;
				vertical-align:middle;
				cursor:pointer;
			}

			input[type=radio].css-checkbox:checked + label.css-label {
				background-position: 0 -21px;
			}

			label.css-label {
				background-image:url(http://csscheckbox.com/checkboxes/u/csscheckbox_0cf84fec35537d1f4546496881280e34.png);
				-webkit-touch-callout: none;
				-webkit-user-select: none;
				-khtml-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}

			input[type=checkbox].css-checkbox {
				position:absolute; z-index:-1000; left:-1000px; overflow: hidden; clip: rect(0 0 0 0); height:1px; width:1px; margin:-1px; padding:0; border:0;
			}

			input[type=checkbox].css-checkbox + label.css-label2 {
				padding-left:50px;
				height:25px; 
				display:inline-block;
				line-height:25px;
				background-repeat:no-repeat;
				background-position: 0 0;
				font-size:15px;
				color: gray;
				vertical-align:middle;
				cursor:pointer;
			}

			input[type=checkbox].css-checkbox:checked + label.css-label2 {
				background-position: 0 -25px;
			}

			label.css-label2 {
				background-image:url(http://csscheckbox.com/checkboxes/u/csscheckbox_391ce065f36b1460c4845fa9b5173fba.png);
				-webkit-touch-callout: none;
				-webkit-user-select: none;
				-khtml-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}

			.checkbox-grid li {
				display: block;
				float: left;
				width: 50%;
			}

			.checkboxgroup{
				display:inline-block !important;
				text-align:center !important;
			}

			.checkboxgroup label {
				display:block !important;
			}

			.connected, .sortable, .exclude, .handles {
				margin: auto;
				padding: 0;
				width: 310px;
				-webkit-touch-callout: none;
				-webkit-user-select: none;
				-khtml-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}

			.sortable.grid {
				overflow: hidden;
			}

			.connected li, .sortable li, .exclude li, .handles li {
				list-style: none;
				border: 1px solid #CCC;
				background: #F6F6F6;
				font-family: "Tahoma";
				color: #1C94C4;
				margin: 5px;
				padding: 5px;
				height: 40px;
			}

			.handles span {
				cursor: move;
			}

			li.disabled {
				opacity: 0.5;
			}

			.sortable.grid li {
				line-height: 80px;
				float: left;
				width: 80px;
				height: 80px;
				text-align: center;
			}

			li.highlight {
				background: #FEE25F;
			}

			#connected {
				width: 440px;
				overflow: hidden;
				margin: auto;
			}

			.connected {
				float: left;
				width: 200px;
			}

			.connected.no2 {
				float: right;
			}

			li.sortable-placeholder {
				border: 1px dashed #CCC;
				background: none;
			}

			#sortable1, #sortable2,#Pref1,#Pref2,#Pref3,#Pref4 { 
				height:200px; list-style-type: none; margin: 0;  margin-right: 10px; background: #ecf2f9; padding: 5px; width":100%;
			}

		</style>
		
		<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/buttons/form-submit-button-steel.css?3.3.292"/>
		
		<title>Admitere licen&#355;&#259;</title>
		
	</head>
	
	<body style="overflow-x:hidden;">
		<div class="mare collapse navbar-collapse navbar nav-group nav-group--consistent">
			<div class="nav navbar-nav bar2">
				<ul style="widht:100%; height:40px; background-color:#3488CB;"></ul>
				<ul class="left-menu">
					<li class="lung"><a href="DespreFII.html">Despre FII</a></li>
					<li class="scurt"><a href="DespreFII.html">FII</a></li>
					<li><a href="paginaAdmitere.php">Admitere</a></li>
				</ul>
				<ul class="right-menu">
					<li><a href="IntrebariFrecvente.html">&#206;ntreb&#259;ri</a></li>
					<li><a href="contact.html" >Contact</a></li>
				</ul>
			</div>      
			<a href="DespreFII.html" >
				<img id="no-scroll" class="sigla" src="imagini/sigla2.png" alt="sigla" />
				<img id="scroll" class="sigla" src="imagini/sigla2-Copy.png" alt="sigla" />
			</a>
		</div>
  
		<div class="mic" style="background-color:white; height:80px; width:100%;; z-index:90;">
		<a href="#menu" id="toggle"><span></span></a>
			<div id="menu">
				<ul class="tog1">
					<li class="tog2"><a href="DespreFII.html">Despre FII</a></li>  
					<li class="tog2"><a href="paginaAdmitere.php">Admitere</a></li>
					<li class="tog2"><a href="IntrebariFrecvente.html">&#206;ntreb&#259;ri</a></li>
					<li class="tog2"><a href="contact.html">Contact</a></li>
				</ul>
			</div> 
		</div> 
		<br>
		<div class="container formular2" style="width:100%">
			<form id="myform" name="myform" style="width:90%" action="" method='post' enctype="multipart/form-data">
				<input type="hidden" name="formID" value="71274520949360" />
				<div class="">
					<ul class="form-section page-section">
						<li id="cid_34" class="form-input-wide" data-type="control_head">
							<div>
								<div class="form-header-group col-md-7" >
									<div class="header-text httal htvam ">
										<h1 id="header_34" class="form-header" data-component="header"  style="color: #3488CB;">
											Admitere licen&#355;&#259;
										</h1>
										<div id="subHeader_34" class="form-subHeader">
											<br>
											<p>V&#259; rug&#259;m completa&#355;i toate c&#226;mpurile de mai jos.</p>
											<p>Pentru orice nelămuriri ne puteţi contacta la adresele furnizate în secţiunea "Contact"</p>
											<p>Mult Succes!</p>
											<br>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<img src="https://www.odoo.com/apps/icon_image?module_id=18835" style="width:250px; height:250px; margin-top:50px; margin-left:20px" alt="Relevant textual alternative to the image" />
								</div>
							</div>
						</li>
					</ul>
					<div class="formular2">
					    <?php
							//include "exempluLicenta.php";
							include "validClass.php";
							error_reporting(0);
                            ini_set('display_errors', 0);
							$v_Numele_De_Familie_La_Nastere=$_POST["Licenta_Numele_De_Familie_La_Nastere"];
							$v_Licenta_FormaInvatamant_Liceu_First = $_POST["Licenta_FormaInvatamant_Liceu_First"];
								$vNumele_De_Familie_La_Nastere = validNume($v_Numele_De_Familie_La_Nastere);
							$v_Numele_De_Familie_Actual = $_POST["Licenta_Numele_De_Familie_Actual"];
								$vNumele_De_Familie_Actual = validNume($v_Numele_De_Familie_Actual);
							$v_Licenta_Initiala_Tata = $_POST["Licenta_Initiala_Tata"];
								$vLicenta_Initiala_Tata = validInitialaTata($v_Licenta_Initiala_Tata);
							$v_Licenta_AbsolventLicenta_FormaInvatamant=$_POST["Licenta_AbsolventLicenta_FormaInvatamant"];
							$v_Licenta_Email = $_POST["Licenta_Email"];
								$vLicenta_Email = validEmail($v_Licenta_Email);
							$v_Licenta_AbsolventLicenta_Semestre_Finantate = $_POST["Licenta_AbsolventLicenta_Semestre_Finantate"];
							$v_Liceul_Absolvit = $_POST["Liceu_Absolvit"];
							$v_Licenta_Telefon = $_POST["Licenta_Telefon"];
								$vLicenta_Telefon = validTelefon($v_Licenta_Telefon);
							$v_Licenta_Cod_Postal = $_POST["Licenta_Cod_Postal"];
								$vLicenta_Cod_Postal = validareCodPostal($v_Licenta_Cod_Postal);
							$v_Licenta_Localitate = $_POST["Licenta_Localitate"];
							$v_Licenta_Apartament = $_POST["Licenta_Apartament"];
							$v_Licenta_Etaj = $_POST["Licenta_Etaj"]; 
                                  $vLicenta_Etaj = validareEtaj($v_Licenta_Etaj);
							$v_Licenta_Nr_FoaieMatricola = $_POST["Licenta_Nr_FoaieMatricola"];
							$v_Licenta_Scara = $_POST["Licenta_Scara"];
							$v_Licenta_Bloc = $_POST["Licenta_Bloc"];
							$v_Licenta_Numar = $_POST["Licenta_Numar"];
							$v_Licenta_Strada = $_POST["Licenta_Strada"];
							$v_Licenta_Nota_MI = $_POST["Licenta_Nota_MI"];
							$v_Licenta_Medie_BAC = $_POST["Licenta_Medie_BAC"];
							$v_Licenta_FormaInvatamant_Liceu = $_POST["Licenta_FormaInvatamant_Liceu"];
							$v_Licenta_AbsolventLicenta_Semestre_Bursa = $_POST["Licenta_AbsolventLicenta_Semestre_Bursa"];
							$v_Licenta_Buletin_Eliberat_De = $_POST["Licenta_Buletin_Eliberat_De"];
							$v_Licenta_Numar_Buletin = $_POST["Licenta_Numar_Buletin"];
							$v_Licenta_Serie_Buletin = $_POST["Licenta_Serie_Buletin"];
							$v_Licenta_Tip_Buletin = $_POST["Licenta_Tip_Buletin"];
							$v_Licenta_CNP = $_POST["Licenta_CNP"];
								$vLicenta_CNP = validCNP($v_Licenta_CNP);
							$v_Licenta_Prenumele = $_POST["Licenta_Prenumele"];
							$v_Licenta_Prenume_Mama = $_POST["Licenta_Prenume_Mama"];
							$v_Licenta_Serie_ActRecunoastere = $_POST["Licenta_Serie_ActRecunoastere"];
							$v_Licenta_Domeniu_Licenta = $_POST["Licenta_Domeniu_Licenta"];
							$v_Licenta_Prenume_Tata = $_POST["Licenta_Prenume_Tata"];
							$v_Licenta_Nationalitate = $_POST["Licenta_Nationalitate"];
							$v_Licenta_Etnie = $_POST["Licenta_Etnie"];
							$v_Licenta_Limba_Materna = $_POST["Licenta_Limba_Materna"];
							$v_Master_an_expirare=$_POST["Master_Buletin_An_Expirare"];
							$v_Licenta_Emitere_DiplomaBAC = $_POST["Licenta_Emitere_DiplomaBAC"];
							$v_Licenta_AltaFacultate = $_POST["Licenta_AltaFacultate"];
							$v_id = 1;
							$v_Chitanta = $_POST["Licenta_Chitanta_nr"];
								$vChitanta = validChitanta($v_Chitanta);	
							$v_Suma_Taxa = $_POST["Licenta_Suma_Taxa"];		
							$v_Radio1 = $_POST["group1"];		
							$v_Scutire = $_POST["Licenta_Motiv_Scutire_taxa"];	
								$vscutire = validScutire($v_Scutire);
							$v_Stare_civila = $_POST["Licenta_Stare_Civila"];		
							$v_Master_Sex = $_POST["Licenta_Sex"];		
							$v_Master_luna = $_POST["Licenta_Buletin_Luna"];		
							$v_Master_an = $_POST["Licenta_Buletin_An"];		
							$v_Master_zi = $_POST["Licenta_Buletin_Ziua"];		
							$v_Master_limba = $_POST["Licenta_Limba_Aleasa"];
							$v_Licenta_Profil_Liceu = $_POST["Licenta_Profil_Liceu"];
							$v_Licenta_Durata_Liceu = $_POST["Licenta_Durata_Liceu"];
							$v_Licenta_Specializare = $_POST["Licenta_Specializare"];
							$v_Licenta_An_Liceu = $_POST["Licenta_An_Liceu"];
							$v_Radio2 = $_POST["group2"];
								$vradio2 = validRadio($v_Radio2);
							$v_Tara = $_POST["Licenta_Tara"];		
							$v_Radio5 = $_POST["group5"];
								$vradio5 = validRadio($v_Radio5);
							$v_Radio6 = $_POST["group6"];
								$vradio6 = validRadio($v_Radio6);
							$v_Radio4 = $_POST["group4"];	
								$vradio4 = validRadio($v_Radio4);
							$v_Stare_Speciala = $_POST["Licenta_Stare_speciala"];
							$v_Licenta_Nr_ActRecunoastere = $_POST["Licenta_Nr_ActRecunoastere"];
							$v_Licenta_Localitate_AltaFacultate = $_POST["Licenta_Localitate_AltaFacultate"];
							$v_Licenta_AbsolventLicenta_Univ = $_POST["Licenta_AbsolventLicenta_Univ"];
							$v_Licenta_AbsolventLicenta_Facultate = $_POST["Licenta_AbsolventLicenta_Facultate"];
							$v_Licenta_AbsolventLicenta_Domeniu_Licenta = $_POST["Licenta_AbsolventLicenta_Domeniu_Licenta"];
							$v_Licenta_AbsolventLicenta_Specializare = $_POST["Licenta_AbsolventLicenta_Specializare"];
							$v_Licenta_AbsolventLicenta_An_Facultate = $_POST["Licenta_AbsolventLicenta_An_Facultate"];
							$v_Master_nastere_luna = $_POST["Licenta_Nastere_Luna"];		
							$v_Licenta_AbsolventLicenta_Durata_Studii = $_POST["Licenta_AbsolventLicenta_Durata_Studii"];
							$v_Licenta_AlteConcursuri_Facultate3 = $_POST["Licenta_AlteConcursuri_Facultate3"];		
							$v_Licenta_AlteConcursuri_Univ3 = $_POST["Licenta_AlteConcursuri_Univ3"];	
							$v_Licenta_AlteConcursuri_Facultate2 = $_POST["Licenta_AlteConcursuri_Facultate2"];		
							$v_Licenta_AlteConcursuri_Univ2 = $_POST["Licenta_AlteConcursuri_Univ2"];
							$v_Licenta_AlteConcursuri_Univ1 = $_POST["Licenta_AlteConcursuri_Univ1"];
							$v_Licenta_AlteConcursuri_Facultate1 = $_POST["Licenta_AlteConcursuri_Facultate1"];	
							$v_Master_nastere_zi = $_POST["Licenta_Nastere_Zi"];		
							$v_Master_nastere_an = $_POST["Licenta_Nastere_An"];		
							$v_Licenta_Obiect = $_POST["Licenta_Obiect_Test_Ales"];		
							$v_Judet = $_POST["Licenta_Judet"];		
							$v_Liceu = $_POST["Licenta_Liceu"];
							$v_Licenta_Localitate_Liceu = $_POST["Licenta_Localitate_Liceu"];
							$v_Licenta_Serie_DiplomaBAC = $_POST["Licenta_Serie_DiplomaBAC"];
							$v_Licenta_Nr_DiplomaBAC = $_POST["Licenta_Nr_DiplomaBAC"];
							$v_Licenta_An_Facultate = $_POST["Licenta_An_Facultate"];
							$v_Licenta_Tara_Nastere = $_POST["Licenta_Tara_Nastere"];
							$v_Licenta_Cetatenie = $_POST["Licenta_Cetatenie"];
							$v_Licenta_Judet_Liceu=$_POST["Licenta_Judet_Liceu"];
							$v_Licenta_AbsolventLicenta_Judet_AltaFacultate=$_POST["Licenta_AbsolventLicenta_Judet_AltaFacultate"];
							$v_Licenta_AbsolventLicenta_Localitate_AltaFacultate = $_POST["Licenta_AbsolventLicenta_Localitate_AltaFacultate"];
							$v_Licenta_AltaUniversitate = $_POST["Licenta_AltaUniversitate"];
							$v_Licenta_Judet_Nastere=$_POST["Licenta_Judet_Nastere"];
							$v_Licenta_Semestre_Bursa = $_POST["Licenta_Semestre_Bursa"];
							$v_Licenta_Semestre_Finantate = $_POST["Licenta_Semestre_Finantate"];
							$v_Licenta_Emitere_DiplomaLicenta=$_POST["Licenta_Emitere_DiplomaLicenta"];
							$v_Licenta_Nr_DiplomaLicenta=$_POST["Licenta_Nr_DiplomaLicenta"];
							$v_Licenta_Serie_DiplomaLicenta=$_POST["Licenta_Serie_DiplomaLicenta"];
							$v_Licenta_AbsolventLicenta_Nr_FoaieMatricola=$_POST["Licenta_AbsolventLicenta_Nr_FoaieMatricola"];
							$v_Licenta_AbsolventLicenta_Nr_ActRecunoastere=$_POST["Licenta_AbsolventLicenta_Nr_ActRecunoastere"];
							$v_Licenta_AbsolventLicenta_Serie_ActRecunoasteree=$_POST["Licenta_AbsolventLicenta_Serie_ActRecunoastere"];
							$Site_Admitere=$_POST["Site_Admitere"];
							$Site_Facultate=$_POST["Site_Facultate"];
							$Brosura_Admitere=$_POST["Brosura_Admitere"];
							$FB_Univ=$_POST["FB_Univ"];
							$Prieteni_Rude=$_POST["Prieteni_Rude"];
							$Porti_Deschise_UAIC=$_POST["Porti_Deschise_UAIC"];
							$Prezentare_Liceu=$_POST["Prezentare_Liceu"];
							$Profesori_Liceu=$_POST["Profesori_Liceu"];
							$Presa=$_POST["Presa"];
							$v_Licenta_Tara_AltaFacultate_Licenta = $_POST["Licenta_Tara_AltaFacultate_Licenta"];
							$v_Licenta_Tara_AltaFacultate = $_POST["Licenta_Tara_AltaFacultate"];
							$v_Radio1 = $_POST["group1"];
								$vradio1 = validRadio($v_Radio1);
							$v_Radio3 = $_POST["group3"];
								$vradio3 = validRadio($v_Radio3);
							$v_Licenta_Localitate_Nastere = $_POST["Licenta_Localitate_Nastere"];
								$vLicenta_Localitate_Nastere = validareStrada($v_Licenta_Localitate_Nastere);
							$v_Radio25 = $_POST["group25"];
								$vradio25 = validRadio($v_Radio25);
							$v_Radio24 = $_POST["group24"];
								$vradio24 = validRadio($v_Radio24);
							$v_Radio23 = $_POST["group23"];
								$vradio23 = validRadio($v_Radio23);
							$v_Radio21 = $_POST["group21"];
								$vradio21 = validRadio($v_Radio21);
							$v_Radio20 = $_POST["group20"];
								$vradio20 = validRadio($v_Radio20);
							$v_Radio26 = $_POST["group26"];
								$vradio26 = validRadio($v_Radio26);
							$v_Radio27 = $_POST["group27"];
								$vradio27 = validRadio($v_Radio27);
							$v_Alte_Surse = $_POST["Alte_Surse"];
								$vAlte_Surse = validScutire($v_Alte_Surse);
							$v_Radio28 = $_POST["group28"];
								$vradio28 = validRadioFinal($v_Radio28);
							$v_Radio29 = $_POST["group29"];
								$vradio29 = validRadioFinal($v_Radio29);
							$v_Radio30 = $_POST["group30"];
								$vradio30 = validRadioFinal($v_Radio30);
							$v_Radio31 = $_POST["group31"];
								$vradio31 = validRadioFinal($v_Radio31);
							$v_Radio32 = $_POST["group32"];
								$vradio32 = validRadioFinal($v_Radio32);
							$v_Radio33 = $_POST["group33"];
								$vradio33 = validRadioFinal($v_Radio33);
							$v_Radio34 = $_POST["group34"];
								$vradio34 = validRadioFinal($v_Radio34);
							$v_Radio35 = $_POST["group35"];
								$vradio35 = validRadioFinal($v_Radio35);
							$NrPref = -1;
							$v_Licenta_AnPreadmitere = $_POST["Licenta_AnPreadmitere"];
								$vLicenta_AnPreadmitere = validareAn($v_Licenta_AnPreadmitere);
							$vOptiune1=$_POST["Optiune1"];
							$vOptiune2=$_POST["Optiune2"];
							$vOptiune3=$_POST["Optiune3"];
							$vOptiune4=$_POST["Optiune4"];
						?>
						<ul>
							<li class="form-line" data-type="control_taxa" id="id_12">
								<br>
								<label class="form-label form-label-left form-label-auto" style="color: #3488CB; font-size:larger"> I. Taxă de înscriere 	<span class="info-box"> 
																																								?
																																								<span class="info-box__content" style="width:255px;">
																																									Poate fi achitată la orice sucursală BRD sau în incinta Facultății de Informatică.
																																								</span>
																																							</span>
								</label>
								<div class="form-input jf-required cid_1">
									<table  style="width:100%">
										<tbody>
											<tr>
												<span id="chitanta" class="form-sub-label-container" style="vertical-align:top; width: 80%; margin-right: 5px;">
													<label class="form-sub-label sublabel_first" style="min-height:13px;"> Chitanța   nr. </label>
													<input type="text"  name="Licenta_Chitanta_nr" class="form-textbox first_1" size="10" placeholder="ex:2643" data-component="first"  value="<?php
																																																	if($v_Chitanta == '')		
																																																		echo '';		
																																																	else		
																																																		echo $v_Chitanta;		
																																																?>" />		
                        
													<span style="color:red">		
														<?php		
															if(isset($_POST['Submit'])) {		
															$v_Chitanta = $_POST["Licenta_Chitanta_nr"];		
															$vChitanta = validChitanta($v_Chitanta);		
															if($vChitanta==-1)
																echo "C&#226;mp necompletat!";
															else
																if($vChitanta==1)
																	echo "Câmpul conține caractere non-alfanumerice!";
															}		
														?>		
													</span>	
												</span>									
												<span id="suma" class="form-sub-label-container" style="vertical-align:top; width: 18%; margin-right: 5px;">	
													<label class="form-sub-label"  style="min-height:13px;"> Suma achitată (RON) </label> 	                       
													<input type="number" name="Licenta_Suma_Taxa" class="form-textbox middle_1" size="10" placeholder="ex: 250" data-component="middle" value="<?php 
																																																	if($v_Suma_Taxa == '')		
																																																		echo '';		
																																																	else		
																																																		echo $v_Suma_Taxa;		
																																																?>" />		
						
													<span style="color:red">		
														<?php		
															if(isset($_POST['Submit'])) {		
															$v_Suma_Taxa = $_POST["Licenta_Suma_Taxa"];		
															$vsuma = validSuma($v_Suma_Taxa);
															if($vsuma==-1)
																echo "C&#226;mp necompletat!";
															else
																if($vsuma==1)
																	echo "Sumă negativă ?!";   	
															}		
														?>		
													</span>	
												</span>
								 
											</tr>
											<tr>
												<td>
													<br>
													<label class="form-label form-label-left form-label-auto" style="color: gray; font-size:medium; width:45%; display:inline-block"> Sunteţi scutit de această taxă? 	<span class="info-box"> 
																																																							?
																																																							<span class="info-box__content" style="width:270px;">
																																																								Se depune la dosar adeverință în original care dovedește motivul precizat.
																																																							</span>
																																																						</span> 
													</label>     
					   
													<span style="width:40%">
														<input type="radio" name="group1" id="checkbox11" class="css-checkbox" value="1" <?php
																																			if($v_Radio1 == '')		
																																				echo '';		
																																			else		
																																				if($v_Radio1==1)		
																																					echo 'checked="checked"';		
																																				else 		
																																					echo '';		
																																		?> />		
														<label for="checkbox11" class="css-label" style="margin-right:100px">Da</label>
														<input type="radio" name="group1" id="checkbox13" class="css-checkbox" value="2" <?php
																																			if($v_Radio1 == '')
																																				echo '';
																																			else
																																				if($v_Radio1==2)
																																					echo 'checked="checked"';
																																				else
																																					echo '';
																																			?> />
														<label for="checkbox13" class="css-label" style="margin-right:50px;">Nu</label>
													</span>
													<span style="color:red">
														<?php		
															if(isset($_POST['Submit'])) {		
																$v_Radio1 = $_POST["group1"];		
																$vradio1 = validRadio($v_Radio1);		
																if($vradio1!==1 && $vradio1!==2)		
																	echo "Nu ați ales o opțiune!";
															}
														?>		
													</span>	
													<span id="motiv-scutire" class="form-sub-label-container" style="vertical-align:top; width: 49%; margin-right: 5px;">
														<label class="form-sub-label"  id="sublabel_last" style="min-height:13px;"> Dacă da, motivul scutirii 
																																								<span class="info-box" <?php	
																																															$v_Scutire = $_POST["Licenta_Motiv_Scutire_taxa"];	
																																															if($v_Scutire!='') 
																																																if($vscutire!==0) 
																																																	echo 'style="background-color : red;"';
																																														?>> 
																																									<?php
																																										if($v_Scutire!='')
																																											if($vscutire!==0) 
																																												echo "!"; 
																																											else 
																																												echo "?"; 
																																										else 
																																											echo "?";
																																									?> 
																																									<span class="info-box__content">
																																										Sunteți scutit de taxa de admitere în cazuri precum "copil de cadru de didactic"
																																										<?php if($vscutire>0) echo "<br><a style=\"color:red\">*Câmp completat greșit!</a>"; ?> 
																																									</span>
																																								</span>
														</label>
														<input type="text" name="Licenta_Motiv_Scutire_taxa" class="form-textbox last_1" size="15" placeholder="ex: Fiu de cadru didactic" data-component="last" value="<?php
																																																							if($v_Scutire == '')
																																																								echo '';
																																																							else
																																																								echo $v_Scutire;
																																																						?>" />
														<span style="color:red">		
															<?php		
																if(isset($_POST['Submit'])) {
																	if($v_Radio1==1) {
																		$v_Scutire = $_POST["Licenta_Motiv_Scutire_taxa"];		
																		$vscutire = validScutire($v_Scutire);		
																		if($vradio1==1)
																			if($vscutire==-1) {
																				echo "C&#226;mp necompletat!";
																			}
																			else
																				if($vscutire==1) {
																					echo "C&#226;mp conține caractere nepermise!";
																				}
																				else
																					if($vscutire==2) {
																						echo "Între 8 si 50 caractere!";
																					}
																	}
																}	
															?>		
														</span>
													</span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</li>

							<li class="form-line" data-type="control_fullname" >
								<label class="form-label form-label-left form-label-auto" id="label_1"  style="color: #3488CB; font-size:larger"> II. Date personale ale candidatului cu cetăţenie română <span class="info-box">?<span class="info-box__content">În măsura în care este posibil, datele personale se vor completa din buletin </span></span></label>
								
								<h4 style="color:red;">Informațiile se completează conform certificatului de naștere și actului de identitate.</h4>
								<br>
								<div  class="form-input jf-required cid_1">
									<div class="general_name" data-wrapper-react="true">
										<span id="num2" class="form-sub-label-container" style="vertical-align:top;">
											<label class="form-sub-label sublabel_first" style="min-height:13px;"> Numele de familie la naştere 
																																				<span class="info-box" <?php	
																																											if($v_Numele_De_Familie_La_Nastere!='') 
																																												if($vNumele_De_Familie_La_Nastere!==0) 
																																													echo 'style="background-color : red;"';
																																										?>> 
																																					<?php
																																						if($v_Numele_De_Familie_La_Nastere!='')
																																							if($vNumele_De_Familie_La_Nastere!==0) 
																																								echo "!"; 
																																							else 
																																								echo "?"; 
																																						else 
																																							echo "?";
																																					?> 
																																					<span class="info-box__content">
																																						Numele de familie din certificatul de naştere.<?php if($vNumele_De_Familie_La_Nastere>0) echo "<br><a style=\"color:red\">*Câmp completat greșit!</a>"; ?> 
																																					</span>
																																				</span>
											</label>
											<input type="text" name="Licenta_Numele_De_Familie_La_Nastere" class="form-textbox first_1" size="10" placeholder="ex: Ionescu" value="<?php 
																																														if($v_Numele_De_Familie_La_Nastere == '') 
																																															echo '';
																																														else
																																															echo $v_Numele_De_Familie_La_Nastere;
																																													?>" data-component="first" />
											<span style="color:red">
												<?php
													if(isset($_POST['Submit'])) {
														$v_Numele_De_Familie_La_Nastere=$_POST["Licenta_Numele_De_Familie_La_Nastere"];
														$vNumele_De_Familie_La_Nastere = validNume($v_Numele_De_Familie_La_Nastere);
														if($vNumele_De_Familie_La_Nastere==-1)
															echo "C&#226;mp necompletat!";
														else
															if($vNumele_De_Familie_La_Nastere==1)
																echo "C&#226;mpul conține caractere nepermise!";
															else
																if($vNumele_De_Familie_La_Nastere==2)
																	echo "C&#226;mpul trebuie sa conțină între 3 și 30 caractere!";
													}
												?>
											</span>
										</span>
										<span id="num" class="form-sub-label-container" style="vertical-align:top;"> 
											<label class="form-sub-label sublabel_first" style="min-height:13px;"> Numele de familie actual <span class="info-box" <?php	
																																										if($v_Numele_De_Familie_Actual!='') 
																																											if($vNumele_De_Familie_Actual!==0) 
																																												echo 'style="background-color : red;"';
																																									?>> 
																																				<?php
																																					if($v_Numele_De_Familie_Actual!='')
																																						if($vNumele_De_Familie_Actual!==0) 
																																							echo "!"; 
																																						else 
																																							echo "?"; 
																																					else 
																																						echo "?";
																																				?> 
																																				<span class="info-box__content">
																																					Numele dupa căsătorie, înfiere, modificare la cerere conform actului doveditor daca este cazul.
																																					<?php if($vNumele_De_Familie_Actual>0) echo "<br><a style=\"color:red\">*Câmp completat greșit!</a>"; ?> 
																																				</span>
																																			</span>
											</label> 
											<input type="text" name="Licenta_Numele_De_Familie_Actual" class="form-textbox first_1" size="10" placeholder="ex: Ionescu" data-component="first" value="<?php 
																																																			if($v_Numele_De_Familie_Actual == '') 
																																																				echo '';
																																																			else
																																																				echo $v_Numele_De_Familie_Actual;
																																																		?>" />
											<span style="color:red">
												<?php
													if(isset($_POST['Submit'])) {
														$v_Numele_De_Familie_Actual = $_POST["Licenta_Numele_De_Familie_Actual"];
														$vNumele_De_Familie_Actual = validNume($v_Numele_De_Familie_Actual);
														if($vNumele_De_Familie_Actual==-1)
															echo "C&#226;mp necompletat!";
														else
															if($vNumele_De_Familie_Actual==1)
																echo "C&#226;mpul conține caractere nepermise!";
															else
																if($vNumele_De_Familie_Actual==2)
																	echo "C&#226;mpul trebuie sa conțină între 3 și 30 caractere!";
													}
												?>
											</span>
											
										</span>
                    
										<span id="initiala" class="form-sub-label-container" style="vertical-align:top;">
											<label class="form-sub-label"  style="min-height:13px;"> Ini&#355;iala(ele) tat&#259;lui/mamei <span class="info-box" <?php	
																																										if($v_Licenta_Initiala_Tata!='') 
																																											if($vLicenta_Initiala_Tata!==0) 
																																												echo 'style="background-color : red;"';
																																									?>> 
																																				<?php
																																					if($v_Licenta_Initiala_Tata!='')
																																						if($vLicenta_Initiala_Tata!==0) 
																																							echo "!"; 
																																						else 
																																							echo "?"; 
																																					else 
																																						echo "?";
																																				?> 
																																				<span class="info-box__content">
																																					Inițialele trebuie să fie urmate de punct și fără spații între ele.
																																					<?php if($vLicenta_Initiala_Tata>0) echo "<br><a style=\"color:red\">*Nu ați respectat formatul specificat!</a>"; ?> 
																																				</span>
																																			</span>
											</label>

											<input type="text" name="Licenta_Initiala_Tata" class="form-textbox middle_1" size="10" placeholder="ex: C./C.D." data-component="first" value="<?php 
																																																if($v_Licenta_Initiala_Tata == '') 
																																																	echo '';
																																																else
																																																	echo $v_Licenta_Initiala_Tata;
																																															 ?>" />
											<span style="color:red">
												<?php
													if(isset($_POST['Submit'])) {
														$v_Licenta_Initiala_Tata = $_POST["Licenta_Initiala_Tata"];
														$vLicenta_Initiala_Tata = validInitialaTata($v_Licenta_Initiala_Tata);
														if($vLicenta_Initiala_Tata==-1)
															echo "C&#226;mp necompletat!";
														else
															if($vLicenta_Initiala_Tata==1)
																echo "Între 2 si 16 caractere!";
															else
																if($vLicenta_Initiala_Tata==2)
																	echo "Caractere nepermise!";
																else
																	if($vLicenta_Initiala_Tata==3)
																		echo "Format Incorect!";
														}
												?>
											</span>
										</span>
										<span id="prenum" class="form-sub-label-container" style="vertical-align:top;">
											<label class="form-sub-label"  id="sublabel_last" style="min-height:13px;"> Prenumele Candidatului </label>

											<input type="text" name="Licenta_Prenumele" class="form-textbox last_1" size="15" placeholder="ex: Ana-Maria / Ana Maria" data-component="last"  value="<?php 
																																																		if($v_Licenta_Prenumele == '') 
																																																			echo '';
																																																		else
																																																			echo $v_Licenta_Prenumele;
																																																	?>" />
											<span style="color:red">
												<?php
													if(isset($_POST['Submit'])) {
														$v_Licenta_Prenumele = $_POST["Licenta_Prenumele"];
														$vLicenta_Prenumele = validPrenume($v_Licenta_Prenumele);
														if($vLicenta_Prenumele==-1)
															echo "C&#226;mp necompletat!";
														else
															if($vLicenta_Prenumele==1)
																echo "C&#226;mpul conține caractere nepermise!";
															else
																if($vLicenta_Prenumele==2)
																	echo "C&#226;mpul trebuie sa conțină între 3 și 30 caractere!";
																else
																	if($vLicenta_Prenumele==3)
																		echo "Format incorect!";
														}
												?>
											</span>
										</span>
									</div>
									<br>  
								</div>
								<div  class="form-input jf-required cid_1">
									<div class="general_name" data-wrapper-react="true">
										<span  class="form-sub-label-container" style="vertical-align:top; width:25%;padding:0;margin:0;">
											<label class="form-sub-label sublabel_first" style="min-height:13px;"> Prenume Mama </label>
											<input type="text"  name="Licenta_Prenume_Mama" class="form-textbox first_1" size="10" placeholder="ex: Ana / Ana-Maria / Ana Maria " data-component="first" value="<?php 
																																																					if($v_Licenta_Prenume_Mama == '') 
																																																						echo '';
																																																					else
																																																						echo $v_Licenta_Prenume_Mama;
																																																				?>" />
											<span style="color:red">
												<?php 
													if(isset($_POST['Submit'])) {
														$v_Licenta_Prenume_Mama = $_POST["Licenta_Prenume_Mama"];
                                                        
														$vLicenta_PrenumeMama = validPrenume($v_Licenta_Prenume_Mama);
														
														if($vLicenta_PrenumeMama==-1)
															echo "C&#226;mp necompletat!";
														else
															if($vLicenta_PrenumeMama==1)
																echo "C&#226;mpul conține caractere nepermise!";
															else
																if($vLicenta_PrenumeMama==2)
																	echo "C&#226;mpul trebuie sa conțină între 3 și 30 caractere!";
																else
																	if($vLicenta_PrenumeMama==3)
																		echo "Format incorect!";
													}
												?>
											</span>
										</span>
										<span  class="form-sub-label-container" style="vertical-align:top; width:24%;padding:0;margin:0;">
											<label class="form-sub-label"  style="min-height:13px;"> Prenume Tata </label>
											<input type="text" name="Licenta_Prenume_Tata" class="form-textbox middle_1" size="10" placeholder="ex: Cristian / Cristi Ionu&#355; / Cristi-Ionu&#355;" data-component="middle" value="<?php 
																																																										if($v_Licenta_Prenume_Tata == '') 
																																																											echo '';
																																																										else
																																																											echo $v_Licenta_Prenume_Tata;
																																																									 ?>" />
											<span style="color:red">
												<?php 
													if(isset($_POST['Submit'])) {
														$v_Licenta_Prenume_Tata = $_POST["Licenta_Prenume_Tata"];
                                                       
														$vLicenta_PrenumeTata = validPrenume($v_Licenta_Prenume_Tata);
														if($vLicenta_PrenumeTata==-1)
															echo "C&#226;mp necompletat!";
														else
															if($vLicenta_PrenumeTata==1)
																echo "C&#226;mpul conține caractere nepermise!";
															else
																if($vLicenta_PrenumeTata==2)
																	echo "C&#226;mpul trebuie sa conțină între 3 și 30 caractere!";
																else
																	if($vLicenta_PrenumeTata==3)
																		echo "Format incorect!";
													}
												?>
											</span>
										</span>
										<span  class="form-sub-label-container" style="vertical-align:top; width:24%;padding:0;margin:0;">
											<label class="form-sub-label" for="input_3_country"  style="min-height:13px;">Stare civil&#259;</label>
											<select class="form-dropdown form-address-country" style="width:100%; height:40px" name="Licenta_Stare_Civila" data-component="country">
												<option value="Nu doresc să declar">Nu doresc să declar</option>
												<option value="Necasatorit(a)" <?php
																					if($v_Stare_civila=="Necasatorit(a)")
																						echo 'selected';
																					else
																						echo '';
																				?>>Nec&#259;s&#259;torit/&#259;</option>
												<option value="Casatorit(a)" <?php		
																					if($v_Stare_civila=="Casatorit(a)")
																						echo 'selected';
																					else
																						echo '';
																				?>>C&#259;s&#259;torit/&#259;</option>
                        						<option value="Divorţat(ă)/Văduv(ă)" <?php
																					if($v_Stare_civila=="Divorţat(ă)/Văduv(ă)")
																						echo 'selected';
																					else
																						echo '';
																				?>>Divor&#355;at(&#259;)/Văduv(ă)</option>
											</select>
										</span>
										<span  class="form-sub-label-container" style="vertical-align:top; width:25%;padding:0;margin:0;">
											<label class="form-sub-label" for="input_3_country"  style="min-height:13px;">Sex</label>
											<select class="form-dropdown form-address-country" style="width:100%; height:40px" name="Licenta_Sex" data-component="country">
												<option name="sexMasculin" value="M" <?php
																					if($v_Master_Sex=="M")
																						echo 'selected';
																					else
																						echo '';
																				?>>Masculin</option>
												<option name="sexFeminin" value="F" <?php
																					if($v_Master_Sex=="F")
																						echo 'selected';
																					else
																						echo '';
																				?>>Feminin</option>
												
											</select>
										</span>
									</div> 
									<br> 
								</div>
								<hr>
								<div  class="form-input jf-required cid_1">
									<br>
									<div data-wrapper-react="true">
										<span class="form-sub-label-container" style="vertical-align:top; width:24%;padding:0;margin:0;">
											<label class="form-sub-label sublabel_first"  style="min-height:13px;"> Ţara în care v-aţi născut </label>
											<input type="text" name="Licenta_Tara_Nastere" class="form-textbox middle_1" style="vertical-align:top; width:100%;padding:0;margin:0;" placeholder="ex: Rom&#226;nia" data-component="middle" value="<?php 
																																																														if($v_Licenta_Tara_Nastere == '') 
																																																															echo '';
																																																														else
																																																															echo $v_Licenta_Tara_Nastere;
																																																													?>" />
											<span style="color:red">
												<?php 
													if(isset($_POST['Submit'])) {
														$v_Licenta_Tara_Nastere = $_POST["Licenta_Tara_Nastere"];
														$vLicenta_Tara_Nastere = validTara($v_Licenta_Tara_Nastere);
														if($vLicenta_Tara_Nastere==-1)
															echo "C&#226;mp necompletat!";
														else
															if($vLicenta_Tara_Nastere==2)
																echo "C&#226;mpul conține caractere nepermise!";
															else
																if($vLicenta_Tara_Nastere==1)
																	echo "C&#226;mpul trebuie sa conțină între 4 și 36 caractere!";
													}
												?>
											</span>
										</span>
										<span class="form-sub-label-container" style="vertical-align:top; width:24%;padding:0;margin:0;">
											<label class="form-sub-label sublabel_first"  style="min-height:13px;"> Judeţul în care v-aţi născut</label>
											<select class="form-dropdown form-address-country gen" name="Licenta_Judet_Nastere" >
												<?php
													$array=array("Alba","Arad","Arges","Bacau","Bihor","BistritaNasaud","Botosani","Braila","Brasov","Bucuresti","Buzau","Calarasi","Caras-Severin","Cluj","Constanta","Covasna","Dambovita","Galati","Giurgiu","Gorj","Harghita","Hunedoara","Ialomita","Iasi","Ilfov","Maramures","Mehedinti","Mures","Neamt","Olt","Prahova","Salaj","Satu Mare","Sibiu","Suceava","Teleorman","Timisoara","Tulcea","Valcea","Vaslui","Vrancea");
													$v_Licenta_Judet_Nastere=$_POST["Licenta_Judet_Nastere"];
													for($i=0;$i<41;$i++)
													{
														echo '<option value="'.$array[$i].'" ';
														if($v_Licenta_Judet_Nastere==$array[$i])
															echo 'selected';
														echo '> '.$array[$i].' </option>';
													}
												?>
											</select>
										</span>
            
										<span class="form-sub-label-container" style="vertical-align:top; width:24%;padding:0;margin:0;">
											<label class="form-sub-label sublabel_first"  style="min-height:13px;"> Localitatea în care v-aţi născut </label>
											<input type="text" name="Licenta_Localitate_Nastere"  class="form-textbox first_1" size="20" placeholder="ex: Iaşi"  data-component="first"   value="<?php 
																																																	if($v_Licenta_Localitate_Nastere == '') 
																																																		echo '';
																																																	else
																																																		echo $v_Licenta_Localitate_Nastere;
																																																?>" />
											<span style="color:red">
												<?php 
													if(isset($_POST['Submit'])) {
														$v_Licenta_Localitate_Nastere = $_POST["Licenta_Localitate_Nastere"];
														$vLicenta_Localitate_Nastere = validLocalitate($v_Licenta_Localitate_Nastere);
														if($vLicenta_Localitate_Nastere==-1)
															echo "C&#226;mp necompletat!";
														else
															if($vLicenta_Localitate_Nastere==2)
																echo "C&#226;mpul conține caractere nepermise!";
															else
																if($vLicenta_Localitate_Nastere==1)
																	echo "C&#226;mpul trebuie sa conțină între 3 și 85 caractere!";
													}
												?>
											</span>
										</span>
										<div id="cid_10" class="form-input jf-required">
											<div data-wrapper-react="true">
												<label class="form-sub-label sublabel_first"  style="min-height:13px;"> Data naşterii </label>

												<span class="form-sub-label-container" style="vertical-align:top; ">
													<select style="height:40px;" name="Licenta_Nastere_Luna" id="input_10_month" class="form-dropdown" data-component="birthdate-month">
														<option value="January" <?php
																					if($v_Master_nastere_luna=="January")
																						echo 'selected';
																					else
																						echo '';
																				?>>Ianuarie</option>
														<option value="February" <?php
																					if($v_Master_nastere_luna=="February")
																						echo 'selected';
																					else
																						echo '';
																				?>> Februarie</option>    
														<option value="March" <?php   
																					if($v_Master_nastere_luna=="March")   
																						echo 'selected';    
																					else    
																						echo '';    
																				?>> Martie </option>    
														<option value="April" <?php   
																					if($v_Master_nastere_luna=="April")   
																						echo 'selected';    
																					else    
																						echo '';    
																				?>> Aprilie </option>   
														<option value="May" <?php    
																				if($v_Master_nastere_luna=="May")   
																					echo 'selected';    
																				else    
																					echo '';    
																			?>> Mai </option>   
														<option value="June" <?php   
																					if($v_Master_nastere_luna=="June")    
																						echo 'selected';    
																					else    
																						echo '';    
																				?>> Iunie </option>   
														<option value="July" <?php   
																					if($v_Master_nastere_luna=="July")    
																						echo 'selected';    
																					else    
																						echo '';    
																				?>> Iulie</option>    
														<option value="August" <?php   
																					if($v_Master_nastere_luna=="August")    
																						echo 'selected';    
																					else    
																						echo '';    
																				?>> August </option>    
														<option value="September" <?php    
																					if($v_Master_nastere_luna=="September")   
																						echo 'selected';    
																					else    
																						echo '';    
																				?>> Septembrie </option>    
														<option value="October" <?php    
																					if($v_Master_nastere_luna=="October")   
																						echo 'selected';    
																					else    
																						echo '';    
																				?>> Octombrie </option>   
														<option value="November" <?php   
																					if($v_Master_nastere_luna=="November")    
																						echo 'selected';    
																					else    
																						echo '';    
																				?>> Noiembrie</option>    
														<option value="December" <?php   
																					if($v_Master_nastere_luna=="December")    
																						echo 'selected';    
																					else    
																						echo '';    
																				?>> Decembrie </option>
													</select>
												</span>
												<span class="form-sub-label-container" style="vertical-align:top;">
													<select style="height:40px;" name="Licenta_Nastere_Zi" id="input_10_day" class="form-dropdown" data-component="birthdate-day">
														<?php
															$v_Licenta_Nastere_Zi=$_POST["Licenta_Nastere_Zi"];
															for($i=1;$i<=31;$i++)
															{
																echo '<option value="'.$i.'" ';
																if($v_Licenta_Nastere_Zi==$i)
																	echo 'selected';
																echo '> '.$i.' </option>';
															}
														?>
													</select>
												</span>
												<span class="form-sub-label-container" style="vertical-align:top;">
													<select style="height:40px;" name="Licenta_Nastere_An" id="input_10_year" class="form-dropdown" data-component="birthdate-year">
														<?php
															$v_Licenta_Nastere_An=$_POST["Licenta_Nastere_An"];
															for($i=2017;$i>=1920;$i--)
															{
																echo '<option value="'.$i.'" ';
																if($v_Licenta_Nastere_An==$i)
																	echo 'selected';
																echo '> '.$i.' </option>';
															}
														?>
													</select>
												</span>
											</div>
										</div>
										<br>
									</div>
									<br>
								</div>
                
								<br>
								<div  class="form-input jf-required cid_1">
									<div data-wrapper-react="true">
										<span class="form-sub-label-container" style="vertical-align:top; width:24%;padding:0;margin:0;">
											<label class="form-sub-label sublabel_first"  style="min-height:13px;"> Naţionalitate </label>
											<input type="text" name="Licenta_Nationalitate" class="form-textbox middle_1" style="vertical-align:top; width:100%;padding:0;margin:0;" placeholder="ex: Rom&#226;n&#259;" data-component="middle"  value="<?php 
																																																													if($v_Licenta_Nationalitate == '') 
																																																														echo '';
																																																													else
																																																														echo $v_Licenta_Nationalitate;
																																																												?>"/>
											<span style="color:red">
												<?php 
													if(isset($_POST['Submit'])) {
														$v_Licenta_Nationalitate = $_POST["Licenta_Nationalitate"];
														$vLicenta_Nationalitate = validCetatetnie($v_Licenta_Nationalitate);
														if($vLicenta_Nationalitate==-1)
																echo "C&#226;mp necompletat!";
															else
																if($vLicenta_Nationalitate==1)
																	echo "C&#226;mp Invalid!";
													}
												?>
											</span>	
										</span>
										<span class="form-sub-label-container" style="vertical-align:top; width:25%;padding:0;margin:0;">
											<label class="form-sub-label sublabel_first"  style="min-height:13px;"> Cetăţenie </label>
											<input type="text" name="Licenta_Cetatenie" class="form-textbox middle_1" style="vertical-align:top; width:100%;padding:0;margin:0;" placeholder="ex: Rom&#226;n&#259;"  data-component="middle"  value="<?php 
																																																													if($v_Licenta_Cetatenie == '') 
																																																														echo '';
																																																													else
																																																														echo $v_Licenta_Cetatenie;
																																																												?>"  />
											<span style="color:red">
												<?php 
													if(isset($_POST['Submit'])) {
														$v_Licenta_Cetatenie = $_POST["Licenta_Cetatenie"];
														$vLicenta_Cetatenie = validCetatetnie($v_Licenta_Cetatenie);
														if($vLicenta_Cetatenie==-1)
															echo "C&#226;mp necompletat!";
														else
															if($vLicenta_Cetatenie==1)
																echo "C&#226;mp Invalid!";
													}
												?>
											</span>																									
										</span>
            
										<span class="form-sub-label-container" style="vertical-align:top; width:24%;padding:0;margin:0;">
											<label class="form-sub-label sublabel_first"  style="min-height:13px;"> Etnie </label>
											<input type="text" name="Licenta_Etnie"  class="form-textbox first_1" size="20" placeholder="ex: Rom&#226;n&#259;"  data-component="first"  value="<?php 
																																														if($v_Licenta_Etnie == '') 
																																															echo '';
																																														else
																																															echo $v_Licenta_Etnie;
																																													?>" />
											<span style="color:red">
												<?php 
													if(isset($_POST['Submit'])) {
														$v_Licenta_Etnie = $_POST["Licenta_Etnie"];
														$vLicenta_Etnie = validEtnie($v_Licenta_Etnie);
														if($vLicenta_Etnie==-1)
															echo "C&#226;mp necompletat!";
														else
															if($vLicenta_Etnie==1)
																echo "Etnie inexistentă!";
													}
												?>
											</span>
										</span>

										<span class="form-sub-label-container" style="vertical-align:top; width:25%;padding:0;margin:0;">
											<label class="form-sub-label sublabel_first"  style="min-height:13px;"> Limba maternă </label>
											<input type="text"  name="Licenta_Limba_Materna"  class="form-textbox first_1" size="20"  placeholder="ex: Rom&#226;n&#259;"   data-component="first"  value="<?php 
																																																	if($v_Licenta_Limba_Materna == '') 
																																																		echo '';
																																																	else
																																																		echo $v_Licenta_Limba_Materna;
																																																?>" />
											<span style="color:red">
												<?php 
													if(isset($_POST['Submit'])) {
														$v_Licenta_Limba_Materna = $_POST["Licenta_Limba_Materna"];
														$vLicenta_Limba_Materna = validLimbaMaterna($v_Licenta_Limba_Materna);
														if($vLicenta_Limba_Materna==-1)
															echo "C&#226;mp necompletat!";
														else
															if($vLicenta_Limba_Materna==1)
																echo "Între 3 și 20 caractere!";
															else
																if($vLicenta_Limba_Materna==2)
																	echo "C&#226;mp Invalid!";
													}
												?>
											</span>
										</span>
										<br>
									</div>
									<br>
								</div>
								<br>
								<div  class="form-input jf-required cid_1">
									<div data-wrapper-react="true">
										<span id="CNP" class="form-sub-label-container" style="vertical-align:top; padding:0; margin:0">
											<label class="form-sub-label sublabel_first"  style="min-height:13px;"> CNP <span class="info-box" <?php	
																																					if($v_Licenta_CNP!='') 
																																						if($vLicenta_CNP!==0) 
																																							echo 'style="background-color : red;"';
																																				?>> 
																															<?php
																																if($v_Licenta_CNP!='')
																																	if($vLicenta_CNP!==0) 
																																		echo "!"; 
																																	else 
																																		echo "?"; 
																																else 
																																	echo "?";
																															?> 
																															<span class="info-box__content">
																																Codul Numeric Personal cum se găsește în actul de identitate.
																																Completați cu informațiile de pe adeverința primită de la SPCLEP în cazul în care CI nu mai este validă.
																																<?php if($vLicenta_CNP>0) echo "<a style=\"color:red\">*Câmp completat greșit!</a>"; ?> 
																															</span>
																														</span>
											</label>
											<input type="text"  name="Licenta_CNP" class="form-textbox first_1" size="20" placeholder="ex: 1960917404400" data-component="first" value="<?php 
																																															if($v_Licenta_CNP == '') 
																																																echo '';
																																															else
																																																echo $v_Licenta_CNP;
																																														?>" />
											<span style="color:red">
												<?php 
													if(isset($_POST['Submit'])) {
														$v_Licenta_CNP = $_POST["Licenta_CNP"];
														$vLicenta_CNP = validCNP($v_Licenta_CNP);
														if($vLicenta_CNP==-1)
															echo "C&#226;mp necompletat!";
														else
															if($vLicenta_CNP==1)
																echo "Obligatoriu 13 caractere!";
															else
																if($vLicenta_CNP==2)
																	echo "Nu trebuie să înceapă cu 0!";
																else
																	if($vLicenta_CNP==3)
																		echo "Dată invalidă(*YYMMDD******)";
																	else
																		if($vLicenta_CNP==4)
																			echo "CNP-ul nu corespunde formulei de pe WIKI";
													}
												?>
											</span>
										</span>
										<span  class="form-sub-label-container" style="vertical-align:top; width:8%;padding:0;margin:0;">
											<label class="form-sub-label sublabel_first"  style="min-height:13px;"> Tip act identitate </label>
											<!--<input type="text"  name="Licenta_Tip_Buletin" class="form-textbox first_1" size="20" placeholder="CI" data-component="first" value="<?php 
																																																if($v_Licenta_Tip_Buletin == '') 
																																																	echo '';
																																																else
																																																	echo $v_Licenta_Tip_Buletin;
																																															?>"/ readonly> -->
											<select class="form-dropdown form-address-country" style="width:100%; height:40px" name="Licenta_Tip_Buletin" data-component="country">
												<option name="-" value="-" <?php
																					if($v_Licenta_Tip_Buletin=="-")
																						echo 'selected';
																					else
																						echo '';
																				?>>-</option>
												<option name="CI" value="CI" <?php
																					if($v_Licenta_Tip_Buletin=="CI")
																						echo 'selected';
																					else
																						echo '';
																				?>>CI</option>
												<option name="Pasaport" value="Pasaport" <?php
																					if($v_Licenta_Tip_Buletin=="Pasaport")
																						echo 'selected';
																					else
																						echo '';
																				?>>Pașaport</option>
												<option name="Adeverinta" value="Adeverinta" <?php
																							if($v_Licenta_Tip_Buletin=="Adeverinta")
																								echo 'selected';
																							else
																								echo '';
																						?>>Adeverință</option>
												
											</select>
											<span style="color:red">
												<?php
													if(isset($_POST['Submit'])) { 
														$v_Licenta_Tip_Buletin = $_POST["Licenta_Tip_Buletin"];
														$vLicenta_Tip_Buletin = validTipBuletin($v_Licenta_Tip_Buletin);
														if($v_Licenta_Tip_Buletin=='-')
															echo "C&#226;mp necompletat!";
														//else
														//	if($vLicenta_Tip_Buletin!==0)
															//	echo "C&#226;mp invalid!";
													}
												?>
											</span>
										</span>

										<span  class="form-sub-label-container" style="vertical-align:top; width:9%;padding:0;margin:0;">
											<label class="form-sub-label sublabel_first"  style="min-height:13px;"> Serie act identitate </label>
											<input type="text"  name="Licenta_Serie_Buletin" class="form-textbox first_1" size="20" placeholder="ex: IS " data-component="first" value="<?php 
																																																if($v_Licenta_Serie_Buletin == '') 
																																																	echo '';
																																																else
																																																	echo $v_Licenta_Serie_Buletin;
																																															?>" />
											<span style="color:red">
												<?php 
													if(isset($_POST['Submit'])) {
														$v_Licenta_Serie_Buletin = $_POST["Licenta_Serie_Buletin"];  // V
														$vLicenta_Serie_Buletin = validSerieBuletin($v_Licenta_Serie_Buletin);
														if($vLicenta_Serie_Buletin==-1)
															echo "C&#226;mp necompletat!";
														else
															if($vLicenta_Serie_Buletin==1)
																echo "Caractere nepermise!";
															else
																if($vLicenta_Serie_Buletin==2)
																	echo "Obligatoriu 2 majuscule";
													}
												?>
											</span>
										</span>
										<span  class="form-sub-label-container" style="vertical-align:top; width:9%;padding:0;margin:0;">
											<label class="form-sub-label sublabel_first"  style="min-height:13px;"> Numar act identitate </label>
											<input type="number"  name="Licenta_Numar_Buletin" class="form-textbox first_1" size="20" placeholder="ex: 123456" data-component="first" value="<?php 
																																																if($v_Licenta_Numar_Buletin == '') 
																																																	echo '';
																																																else
																																																	echo $v_Licenta_Numar_Buletin;
																																															?>" />
											<span style="color:red">
												<?php 
													if(isset($_POST['Submit'])) {
														$v_Licenta_Numar_Buletin = $_POST["Licenta_Numar_Buletin"];  // V
														$vLicenta_Numar_Buletin = validNumarBuletin($v_Licenta_Numar_Buletin);
														if($vLicenta_Numar_Buletin==-1)
															echo "C&#226;mp necompletat!";
														else
															if($vLicenta_Numar_Buletin==1)
																echo "Caractere nepermise!";
															else
																if($vLicenta_Numar_Buletin==2)
																	echo "Obligatoriu 6 cifre";
													}
												?>
											</span>
										</span>
										<span  class="form-sub-label-container" style="vertical-align:top; width:9%;padding:0;margin:0;">
											<label class="form-sub-label sublabel_first"  style="min-height:13px;"> Eliberat de </label>
											<input type="text"  name="Licenta_Buletin_Eliberat_De" class="form-textbox first_1" size="20" placeholder="ex: SPCLEP IA&#350;I" data-component="first"  value="<?php 
																																																				if($v_Licenta_Buletin_Eliberat_De == '') 
																																																					echo '';
																																																				else
																																																					echo $v_Licenta_Buletin_Eliberat_De;
																																																				?>" />
											<span style="color:red">
												<?php 
													if(isset($_POST['Submit'])) {
														$v_Licenta_Buletin_Eliberat_De = $_POST["Licenta_Buletin_Eliberat_De"];  // V
														$vLicenta_Buletin_Eliberat_De = validEliberareBuletin($v_Licenta_Buletin_Eliberat_De);
														if($vLicenta_Buletin_Eliberat_De==-1)
															echo "C&#226;mp necompletat!";
														else
															if($vLicenta_Buletin_Eliberat_De==1)
																echo "Caractere nepermise!";
															else
																if($vLicenta_Buletin_Eliberat_De==2)
																echo "Minim 3 caractere!";
													}
												?>
											</span>
										</span>
										<div  class="form-input jf-required" style="vertical-align:top; padding:0;margin:0;height:40px">
											<div data-wrapper-react="true">
												<span class="form-sub-label-container" style="vertical-align:top; ">
													<label class="form-sub-label"  style="min-height:13px;">Data Eliberare</label>
													<select style="height:40px;" name="Licenta_Buletin_Luna"  class="form-dropdown" data-component="birthdate-month">
  														<?php 
															$v_Licenta_Buletin_Luna=$_POST["Licenta_Buletin_Luna"];
														?>
														<option value="January" <?php
  																					if($v_Licenta_Buletin_Luna=="January")
  																						echo 'selected';
  																					else
  																						echo '';
  																				?>>Ianuarie</option>
    													<option value="February" <?php
    																					if($v_Licenta_Buletin_Luna=="February")
    																						echo 'selected';
    																					else
    																						echo '';
    																				?>> Februarie</option>		
    													<option value="March" <?php		
    																					if($v_Licenta_Buletin_Luna=="March")		
    																						echo 'selected';		
    																					else		
    																						echo '';		
    																				?>> Martie </option>		
    													<option value="April" <?php		
    																					if($v_Licenta_Buletin_Luna=="April")		
    																						echo 'selected';		
    																					else		
    																						echo '';		
    																				?>> Aprilie </option>		
    													<option value="May"<?php		
    																					if($v_Licenta_Buletin_Luna=="May")		
    																						echo 'selected';		
    																					else		
    																						echo '';		
    																				?>> Mai </option>		
    													<option value="June"<?php		
    																					if($v_Licenta_Buletin_Luna=="June")		
    																						echo 'selected';		
    																					else		
    																						echo '';		
    																				?>> Iunie </option>		
    													<option value="July"<?php		
    																					if($v_Licenta_Buletin_Luna=="July")		
    																						echo 'selected';		
    																					else		
    																						echo '';		
    																				?>> Iulie</option>		
    													<option value="August"<?php		
    																					if($v_Licenta_Buletin_Luna=="August")		
    																						echo 'selected';		
    																					else		
    																						echo '';		
    																				?>> August </option>		
    													<option value="September"<?php		
    																					if($v_Licenta_Buletin_Luna=="September")		
    																						echo 'selected';		
    																					else		
    																						echo '';		
    																				?>> Septembrie </option>		
    													<option value="October"<?php		
    																					if($v_Licenta_Buletin_Luna=="October")		
    																						echo 'selected';		
    																					else		
    																						echo '';		
    																				?>> Octombrie </option>		
    													<option value="November"<?php		
    																					if($v_Licenta_Buletin_Luna=="November")		
    																						echo 'selected';		
    																					else		
    																						echo '';		
    																				?>> Noiembrie</option>		
    													<option value="December"<?php		
    																					if($v_Licenta_Buletin_Luna=="December")		
    																						echo 'selected';		
    																					else		
    																						echo '';		
    																				?>> Decembrie </option>
													</select>
												</span>
												<span class="form-sub-label-container" style="vertical-align:bottom;">
													<select style="height:40px;" name="Licenta_Buletin_Ziua"  class="form-dropdown" data-component="birthdate-day">
														<?php
														$v_Licenta_Buletin_Ziua=$_POST["Licenta_Buletin_Ziua"];
														for($i=1;$i<=31;$i++)
														{
															echo '<option value="'.$i.'" ';
															if($v_Licenta_Buletin_Ziua==$i)
																echo 'selected';
															echo '> '.$i.' </option>';
															}
													?>
													</select>
												</span>
												<span class="form-sub-label-container" style="vertical-align:bottom;">
													<select style="height:40px;" name="Licenta_Buletin_An"  class="form-dropdown" data-component="birthdate-year">
													<?php
														$v_Licenta_Buletin_An=$_POST["Licenta_Buletin_An"];
														for($i=2017;$i>=1920;$i--)
														{
															echo '<option value="'.$i.'" ';
															if($v_Licenta_Buletin_An==$i)
																echo 'selected';
															echo '> '.$i.' </option>';
															}
													?>
													</select>
												</span>
											</div>
										</div>
										<div  class="form-input jf-required" style="vertical-align:top;padding:0;margin:0;height:40px">
											<div data-wrapper-react="true">
												<span class="form-sub-label-container" style="vertical-align:top; ">
													<label class="form-sub-label"  style="min-height:13px;">Data Expirare</label>
													<select style="height:40px;" name="Master_Buletin_Luna"  class="form-dropdown" data-component="birthdate-month">
														<?php 
															$v_Master_Buletin_Luna=$_POST["Master_Buletin_Luna"];
														?>
														<option value="January" <?php
																					if($v_Master_Buletin_Luna=="January")
																						echo 'selected';
																					else
																						echo '';
																				?>>Ianuarie</option>
														<option value="February" <?php
																					if($v_Master_Buletin_Luna=="February")
																						echo 'selected';
																					else
																						echo '';
																				?>> Februarie</option>    
														<option value="March"   <?php   
																					if($v_Master_Buletin_Luna=="March")   
																						echo 'selected';    
																					else    
																						echo '';    
																				?>> Martie </option>    
														<option value="April"   <?php   
																					if($v_Master_Buletin_Luna=="April")   
																						echo 'selected';    
																					else    
																						echo '';    
																				?>> Aprilie </option>   
														<option value="May" <?php    
																				if($v_Master_Buletin_Luna=="May")   
																					echo 'selected';    
																				else    
																					echo '';    
																			?>> Mai </option>   
														<option value="June" <?php   
																				if($v_Master_Buletin_Luna=="June")    
																					echo 'selected';    
																				else    
																					echo '';    
																			 ?>> Iunie </option>   
														<option value="July" <?php   
																				if($v_Master_Buletin_Luna=="July")    
																					echo 'selected';    
																				else    
																					echo '';    
																			 ?>> Iulie</option>    
														<option value="August" <?php   
																					if($v_Master_Buletin_Luna=="August")    
																						echo 'selected';    
																					else    
																						echo '';    
																				?>> August </option>    
														<option value="September" <?php    
																					if($v_Master_Buletin_Luna=="September")   
																						echo 'selected';    
																					else    
																						echo '';    
																				 ?>> Septembrie </option>    
														<option value="October" <?php    
																					if($v_Master_Buletin_Luna=="October")   
																						echo 'selected';    
																					else    
																						echo '';    
																				 ?>> Octombrie </option>   
														<option value="November" <?php   
																					if($v_Master_Buletin_Luna=="November")    
																						echo 'selected';    
																					else    
																						echo '';    
																				 ?>> Noiembrie</option>    
														<option value="December" <?php   
																					if($v_Master_Buletin_Luna=="December")    
																						echo 'selected';    
																					else    
																						echo '';    
																				?>> Decembrie </option>
													</select>
												</span>
												<span class="form-sub-label-container" style="vertical-align:bottom;">
													<select style="height:40px;" name="Master_Buletin_Ziua"  class="form-dropdown" data-component="birthdate-day">
														<?php
															$v_Master_Buletin_Ziua=$_POST["Master_Buletin_Ziua"];
															for($i=1;$i<=31;$i++)
															{
																echo '<option value="'.$i.'" ';
																if($v_Master_Buletin_Ziua==$i)
																	echo 'selected';
																echo '> '.$i.' </option>';
															}
														?>
													</select>
												</span>
												<span class="form-sub-label-container" style="vertical-align:bottom;">
													<select style="height:40px;" name="Master_Buletin_An_Expirare"  class="form-dropdown" data-component="birthdate-year">
														<?php
															$v_Master_an_expirare=$_POST["Master_Buletin_An_Expirare"];
															for($i=2027;$i>=1920;$i--)
															{
																echo '<option value="'.$i.'" ';
																if($v_Master_an_expirare==$i)
																	echo 'selected';
																echo '> '.$i.' </option>';
															}
														?>
													</select>
												</span>
											</div>
										</div>
										<br>
									</div> 
									<br>                
								</div>
								<hr>
                
								<div class="form-input jf-required cid_1">
									<br>
									<table  style="width:100%">
										<tbody>
											<tr>
												<td>
													<label class="form-label form-label-left form-label-auto" id="label_3" style="color: gray; font-size:medium; width:25%; display:inline-block"> Domiciliu stabil: <span class="info-box" > 
																																																						?
																																																						<span class="info-box__content" style="width:235px;">
																																																							Completați adresa conform CI; 
																																																							Puneți "-" în câmpurile nerelevante
																																																						</span>
																																																					</span>
													</label>
                        
													<span style="width:75%">
														<input type="radio" name="group3" id="checkbox1" class="css-checkbox" value="1" <?php
																																			if($v_Radio3 == '')
																																				echo '';
																																			else
																																				if($v_Radio3==1)
																																					echo 'checked="checked"';
																																				else
																																					echo '';
																																		?> />
														<label for="checkbox1" class="css-label" style="margin-right:100px">Rural</label>
														<input type="radio" name="group3" id="checkbox2" class="css-checkbox" value="2" <?php
																																			if($v_Radio3 == '')
																																				echo '';
																																			else
																																				if($v_Radio3==2)
																																					echo 'checked="checked"';
																																				else
																																					echo '';
																																		?> />
														<label for="checkbox2" class="css-label">Urban</label>
													</span>
													<br>
													<span style="color:red">
														<?php
															if(isset($_POST['Submit'])) {
																$v_Radio3 = $_POST["group3"];
																$vradio3 = validRadio($v_Radio3);
																if($vradio3!==1 && $vradio3!==2)
																		echo "Nu ați ales o opțiune!";
															}
														?>
													</span>	
												</td>
											</tr> 

											<tr> 
												<td>
													<br>
													<span class="form-sub-label-container" style="vertical-align:top; width:44%">
														<label class="form-sub-label sublabel_first"   style="min-height:13px;">Strada </label>
														<input type="text" name="Licenta_Strada" class="form-textbox first_1" size="15"  placeholder="ex: Independen&#355;ei" data-component="first" value="<?php 
																																																				if($v_Licenta_Strada == '') 
																																																					echo '';
																																																				else
																																																					echo $v_Licenta_Strada;
																																																			?>" />
														<span style="color:red">
															<?php 
																if(isset($_POST['Submit'])) {
																	$v_Licenta_Strada = $_POST["Licenta_Strada"];  // V
																	$vLicenta_Strada = validareStrada($v_Licenta_Strada);
																	if($vLicenta_Strada==-1)
																		echo "C&#226;mp necompletat!";
																	else
																		if($vLicenta_Strada==1)
																			echo "Caractere nepermise!";
																}
															?>
														</span>
													</span>
													<span class="form-sub-label-container" style="vertical-align:top; width:10%">
														<label class="form-sub-label"   style="min-height:13px;"> Num&#259;rul</label>
														<input type="text" name="Licenta_Numar" class="form-textbox middle_1" size="15" placeholder="ex: 17 / -" data-component="middle" value="<?php 
																																																	if($v_Licenta_Numar == '') 
																																																		echo '';
																																																	else
																																																		echo $v_Licenta_Numar;
																																																?>" />
														<span style="color:red">
															<?php 
																if(isset($_POST['Submit'])) {
																	$v_Licenta_Numar = $_POST["Licenta_Numar"];  // V
																	$vLicenta_Numar = validareNumar($v_Licenta_Numar);
																	if($vLicenta_Numar==-1)
																		echo "C&#226;mp necompletat!";
																	else
																		if($vLicenta_Numar==1)
																			echo "Caractere nepermise!";
																		else
																			if($vLicenta_Numar==2)
																				echo "Între 1 și 10 caractere!";
																}
															?>
														</span>
													</span>
													<span class="form-sub-label-container" style="vertical-align:top; width:10%">
														<label class="form-sub-label"  style="min-height:13px;"> Bloc </label>
														<input type="text"  name="Licenta_Bloc" class="form-textbox last_1" size="15" placeholder="ex: 123 / - / C345" data-component="last" value="<?php 
																																																		if($v_Licenta_Bloc == '') 
																																																			echo '';
																																																		else
																																																			echo $v_Licenta_Bloc;
																																																	?>" />
														<span style="color:red">
															<?php  
																if(isset($_POST['Submit'])) {
																	$v_Licenta_Bloc = $_POST["Licenta_Bloc"];  // V
																	$vLicenta_Bloc = validareBloc($v_Licenta_Bloc);
																	if($vLicenta_Bloc==-1)
																		echo "C&#226;mp necompletat!";
																	else
																		if($vLicenta_Bloc==1)
																			echo "Caractere nepermise!";
																		else
																			if($vLicenta_Bloc==2)
																				echo "Între 1 și 10 caractere!";
																}
															?>
														</span>
													</span>
													<span class="form-sub-label-container" style="vertical-align:top; width:10%">
														<label class="form-sub-label"  style="min-height:13px;"> Scara </label>
														<input type="text" name="Licenta_Scara" class="form-textbox last_1" size="15" placeholder="ex: A / D3" data-component="last" value="<?php 
																																																if($v_Licenta_Scara == '') 
																																																	echo '';
																																																else
																																																	echo $v_Licenta_Scara;
																																															?>" />
														<span style="color:red">
															<?php 
																if(isset($_POST['Submit'])) {
																	$v_Licenta_Scara = $_POST["Licenta_Scara"];  // V
																	$vLicenta_Scara = validareBloc($v_Licenta_Scara);
																	if($vLicenta_Scara==-1)
																		echo "C&#226;mp necompletat!";
																	else
																		if($vLicenta_Scara==1)
																			echo "Caractere nepermise!";
																		else
																			if($vLicenta_Scara==2)
																				echo "Între 1 și 10 caractere!";
																}
															?>
														</span>
													</span>
													<span class="form-sub-label-container" style="vertical-align:top; width:10% ">
														<label class="form-sub-label"  style="min-height:13px;"> Etaj </label>
														<input type="text" name="Licenta_Etaj" class="form-textbox last_1" size="15" placeholder="ex: Parter / 17 / D" data-component="last" value="<?php 
																																																		if($v_Licenta_Etaj == '') 
																																																			echo '';
																																																		else
																																																			echo $v_Licenta_Etaj;
																																																	?>" />
														<span style="color:red">
															<?php 
																if(isset($_POST['Submit'])) {
																	$v_Licenta_Etaj = $_POST["Licenta_Etaj"]; 
																	$vLicenta_Etaj = validareEtaj($v_Licenta_Etaj);
																	if($vLicenta_Etaj==-1)
																		echo "C&#226;mp necompletat!";
																	else
																		if($vLicenta_Etaj==1)
																			echo "Caractere nepermise!";
																		else
																			if($vLicenta_Etaj==2)
																				echo "Etaj inexistent!";
																}
															?>
														</span>
													</span>
													<span class="form-sub-label-container" style="vertical-align:top; width:11%; margin:0px; padding:0px">
														<label class="form-sub-label"  style="min-height:13px;"> Apartament </label>
														<input type="text" name="Licenta_Apartament" class="form-textbox last_1" size="15" data-component="last" placeholder="ex: 1 / -" style="margin:0px; padding:0px" value="<?php 
																																																									if($v_Licenta_Apartament == '') 
																																																										echo '';
																																																									else
																																																										echo $v_Licenta_Apartament;
																																																								?>" />
														<span style="color:red">
															<?php  
																if(isset($_POST['Submit'])) {
																	$v_Licenta_Apartament = $_POST["Licenta_Apartament"];  // V
																	$vLicenta_Apartament = validareNumar($v_Licenta_Apartament);
																	if($vLicenta_Apartament==-1)
																		echo "C&#226;mp necompletat!";
																	else
																		if($vLicenta_Apartament==1)
																			echo "Caractere nepermise!";
																		else
																			if($vLicenta_Apartament==2)
																				echo "Între 1 și 10 caractere!";
																}
															?>
														</span>
													</span>
												</td>
											</tr>

											<tr>
												<td>
													<br>
													<span class="form-sub-label-container" style="vertical-align:top; width:24%" >
														<label class="form-sub-label" id="sublabel_3_city" style="min-height:13px;"> Localitate </label>
														<input type="text"  name="Licenta_Localitate" class="form-textbox form-address-city first_1" size="21" placeholder="ex: Ia&#351;i" data-component="city" value="<?php 
																																																							if($v_Licenta_Localitate == '') 
																																																								echo '';
																																																							else
																																																								echo $v_Licenta_Localitate;
																																																						?>" />
														<span style="color:red">
															<?php
																if(isset($_POST['Submit'])) {
																	$v_Licenta_Localitate = $_POST["Licenta_Localitate"]; 
																	$vLicenta_Localitate = validLocalitate($v_Licenta_Localitate);
																	if($vLicenta_Localitate==-1)
																		echo "C&#226;mp necompletat!";
																	else
																		if($vLicenta_Localitate==2)
																			echo "C&#226;mpul conține caractere nepermise!";
																		else
																			if($vLicenta_Localitate==1)
																				echo "C&#226;mpul trebuie sa conțină între 3 și 85 caractere!";
																}
															?>
														</span>
													</span>
													<span class="form-sub-label-container" style="vertical-align:top; width:24%">
														<label class="form-sub-label" for="input_3_country" style="min-height:13px;"> Jude&#355; </label>
														<select class="form-dropdown form-address-country gen" name="Licenta_Judet"  data-component="country">
															<?php
																$v_Licenta_Judet=$_POST["Licenta_Judet"];
																$array=array("Alba","Arad","Arges","Bacau","Bihor","BistritaNasaud","Botosani","Braila","Brasov","Bucuresti","Buzau","Calarasi","Caras-Severin","Cluj","Constanta","Covasna","Dambovita","Galati","Giurgiu","Gorj","Harghita","Hunedoara","Ialomita","Iasi","Ilfov","Maramures","Mehedinti","Mures","Neamt","Olt","Prahova","Salaj","Satu Mare","Sibiu","Suceava","Teleorman","Timisoara","Tulcea","Valcea","Vaslui","Vrancea");
																for($i=0;$i<41;$i++)
																{
																	echo '<option value="'.$array[$i].'" ';
																	if($v_Licenta_Judet==$array[$i])
																		echo 'selected';
																	echo '> '.$array[$i].' </option>';
																}
															?>
														</select>
													</span>
													<span class="form-sub-label-container" style="vertical-align:top; width:24%">
														<label class="form-sub-label"  id="sublabel_3_postal" style="min-height:13px;"> Cod po&#351;tal</label>
														<input type="text" name="Licenta_Cod_Postal" class="gen" size="16" placeholder="ex: 404400" data-component="zip" value="<?php 
																																													if($v_Licenta_Cod_Postal == '') 
																																														echo '';
																																													else
																																														echo $v_Licenta_Cod_Postal;
																																												?>" />
														<span style="color:red">
															<?php 
																if(isset($_POST['Submit'])) {
																	$v_Licenta_Cod_Postal = $_POST["Licenta_Cod_Postal"];  // V
																	$vLicenta_Cod_Postal = validareCodPostal($v_Licenta_Cod_Postal);
																	if($vLicenta_Cod_Postal==-1)
																		echo "C&#226;mp necompletat!";
																	else
																	  if($vLicenta_Cod_Postal==1)
																		echo "Între 4 si 6 cifre!";
																}
															?>
														</span>
													</span>
													<span class="form-sub-label-container" style="vertical-align:top; width:24%">
														<label class="form-sub-label" for="input_3_country"  style="min-height:13px;">&#354;ar&#259; </label>
														<select class="form-dropdown form-address-country gen" name="Licenta_Tara" data-component="country">
															<option value="Romania" <?php
																						if($v_Tara=="Romania")
																							echo 'selected';
																						else
																							echo '';
																					?>> Rom&#226;nia </option>
															<option value="Republica Moldova" <?php
																								if($v_Tara=="Republica Moldova")
																									echo 'selected';
																								else
																									echo '';
																							 ?>> Republica Moldova </option>
															<option value="Alta Optiune" <?php
																							if($v_Tara=="Alta Optiune")
																								echo 'selected';
																							else
																								echo '';
																						 ?>> Alta op&#355;iune</option>
														</select>
													</span>
												</td>
											</tr>
										</tbody>
									</table>
									<br>
								</div>
								<div data-wrapper-react="true" style="width:50%; display:inline-block;">
									<span class="form-sub-label-container" style="vertical-align:top; width:100%" >
										<label class="form-sub-label" for="input_6_phone"  style="min-height:13px;"> Num&#259;r de telefon </label>
										<input type="tel" id="input_6_phone" name="Licenta_Telefon" class="form-textbox" size="20" placeholder="ex: 0751404400"  data-component="phone"  style="width:100%; height:40px" value="<?php 
																																																									if($v_Licenta_Telefon == '') 
																																																										echo '';
																																																									else
																																																										echo $v_Licenta_Telefon;
																																																								?>" />
										<br>
										<span style="color:red">
											<?php 
												if(isset($_POST['Submit'])) {
													$v_Licenta_Telefon = $_POST["Licenta_Telefon"];
													$vLicenta_Telefon = validTelefon($v_Licenta_Telefon);
													if($vLicenta_Telefon==-1)
														echo "C&#226;mp necompletat!";
													else
														if($vLicenta_Telefon==1)
															echo "Între 10 si 14 caractere!";
														else 
															if($vLicenta_Telefon==2)
																echo "Caractere nepersmise!";
												}
											?>
										</span>
									</span>
								</div>
								<div data-wrapper-react="true" style="width:49%; display:inline-block;">
									<span class="form-sub-label-container" style="vertical-align:top; width:100%">
										<label class="form-sub-label" for="input_6_phone"  style="min-height:13px;"> E-mail </label>
										<input type="email" id="input_9" name="Licenta_Email" class="form-textbox validate[Email]" size="30" placeholder="ex: adresamea@yahoo.com" data-component="email" style="width:100%;height:40px" value="<?php 
																																																													if($v_Licenta_Email == '') 
																																																														echo '';
																																																													else
																																																														echo $v_Licenta_Email;
																																																												?>" />
										<br>
										<span style="color:red">
											<?php
												if(isset($_POST['Submit'])) {
													$v_Licenta_Email = $_POST["Licenta_Email"];
													$vLicenta_Email = validEmail($v_Licenta_Email);
													if($vLicenta_Email==-1)
														echo "C&#226;mp necompletat!";
													else
														if($vLicenta_Email==1)
															echo "E-mail incorect!";
												}
											?>
										</span>
									</span>
								</div>
								<br>
								<hr>
								<div class="form-input jf-required cid_1">
									<br>
									<table  style="width:100%">
										<tbody>
											<tr>
												<td>
													<label class="form-label form-label-left form-label-auto" style="color: gray; font-size:medium; width:45%; display:inline-block"> Solicitați cazare pe timpul studiilor? <span class="info-box">?<span class="info-box__content">Cazare în căminele Universității "Alexandru Ioan Cuza"</span></span> </label>
													<span style="width:55%">
														<input type="radio" name="group5" id="checkbox3" class="css-checkbox" value="1" <?php
																																			if($v_Radio5 == '')
																																				echo '';
																																			else
																																				if($v_Radio5==1)
																																					echo 'checked="checked"';
																																				else
																																					echo '';
																																		?> />
														<label for="checkbox3" class="css-label" style="margin-right:100px">Da</label>
														<input type="radio" name="group5" id="checkbox4" class="css-checkbox" value="2" <?php
																																			if($v_Radio5 == '')
																																				echo '';
																																			else
																																				if($v_Radio5==2)
																																					echo 'checked="checked"';
																																				else
																																					echo '';
																																		?> />
														<label for="checkbox4" class="css-label">Nu</label>
													</span>
													
													<span style="color:red">
														<?php
															if(isset($_POST['Submit'])) {
																$v_Radio5 = $_POST["group5"];
																$vradio5 = validRadio($v_Radio5);
																if($vradio5!==1 && $vradio5!==2)
																	echo "Nu ați ales o opțiune!";
															}
														?>
													</span>
												</td>
											</tr>
											<tr>
												<td>
													<label class="form-label form-label-left form-label-auto" style="color: gray; font-size:medium; width:45%; display:inline-block"> Solicitați cazare pe timpul susținerii examenului?   </label>
													<span style="width:55%">
														<input type="radio" name="group6" id="checkbox5" class="css-checkbox" value="1" <?php
																																			if($v_Radio6 == '')
																																				echo '';
																																			else
																																				if($v_Radio6==1)
																																					echo 'checked="checked"';
																																				else
																																					echo '';
																																		?> />
														<label for="checkbox5" class="css-label" style="margin-right:100px">Da</label>
														<input type="radio" name="group6" id="checkbox6" class="css-checkbox" value="2" <?php
																																			if($v_Radio6 == '')
																																				echo '';
																																			else
																																				if($v_Radio6==2)
																																					echo 'checked="checked"';
																																				else
																																					echo '';
																																		  ?> />
														<label for="checkbox6" class="css-label">Nu</label>
													</span>
													<span style="color:red">
														<?php
															  if(isset($_POST['Submit'])) {
																$v_Radio6 = $_POST["group6"];
																$vradio6 = validRadio($v_Radio6);
																if($vradio6!==1 && $vradio6!==2)
																	echo "Nu ați ales o opțiune!";
																
															  }
														?>
													</span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="form-input jf-required cid_1">
									<table  style="width:100%">
										<tbody>
											<tr>
												<td>
												  <label class="form-label form-label-left form-label-auto" style="color: gray; font-size:medium; width:45%; display:inline-block"> Vă încadrați în categoria persoanelor cu dizabilități? </label>                        
													<span style="width:55%">
														<input type="radio" name="group4" id="checkbox7" class="css-checkbox" value="1" <?php
																																			if($v_Radio4 == '')
																																				echo '';
																																			else
																																				if($v_Radio4==1)
																																					echo 'checked="checked"';
																																				else
																																					echo '';
																																		?> />   
														<label for="checkbox7" class="css-label" style="margin-right:100px">Da</label>
														<input type="radio" name="group4" id="checkbox8" class="css-checkbox" value="2" <?php
																																			if($v_Radio4 == '')
																																				echo '';
																																			else
																																				if($v_Radio4==2)
																																					echo 'checked="checked"';
																																				else
																																					echo '';
																																		?> />
														<label for="checkbox8" class="css-label">Nu</label>
													</span>
													<span style="color:red">
														<?php
															  if(isset($_POST['Submit'])) {
																$v_Radio4 = $_POST["group4"];	
																$vradio4 = validRadio($v_Radio4);
																if($vradio4!==1 && $vradio4!==2)
																	echo "Nu ați ales o opțiune!";
																
															  }
														?>
													</span>
												</td>
											</tr>
											<tr>
												<td>
													<br>
													<span class="form-sub-label-container" style="vertical-align:top; width:30%">
														<!--<label class="form-sub-label" for="input_3_country" style="min-height:13px;"> -->
														<label class="form-label form-label-left form-label-auto" style="color: gray; font-size:medium; width:45%; display:inline-block"> Stare socială specială: </label>
														<select class="form-dropdown form-address-country gen" name="Licenta_Stare_speciala"  data-component="country">
															<option value="1"<?php
																				if($v_Stare_Speciala=="1")
																					echo 'selected';
																				else
																					echo '';
																			?>>Nicio opţiune</option>
															<option value="2"<?php
																				if($v_Stare_Speciala=="2")    
																					echo 'selected';    
																				else    
																					echo '';    
																			?>>Orfan de un părinte</option>   
															<option value="3"<?php    
																				if($v_Stare_Speciala=="3")    
																					echo 'selected';    
																				else    
																					echo '';    
																			?>>Orfan de ambii părinți</option>    
															<option value="4"<?php    
																				if($v_Stare_Speciala=="4")    
																					echo 'selected';    
																				else    
																					echo '';    
																			?>>Provenit din case de copii</option>      
															<option value="5"<?php    
																				if($v_Stare_Speciala=="5")    
																					echo 'selected';    
																				else    
																					echo '';    
																			?>>Provenit din plasament familial</option>   
															<option value="6"<?php    
																				if($v_Stare_Speciala=="6")    
																				echo 'selected';    
																			  else    
																				echo '';    
																			?>>Provenit din familie monoparentală</option>    
														</select>
												 
													</span>
												
													<!--  -- in <td>
													<label class="form-label form-label-left form-label-auto" 
							 
													  style="color: gray; font-size:medium; width:100%; display:inline-block"> Stare socială specială: </label>                        
							 
													  <ul class="checkbox-grid">
							 
														<br>
							 
														<li><input type="checkbox" name="Nicio_Opt" class="css-checkbox" value="" id="Nicio_Opt" />
							 
														  <label for="Nicio_Opt" class="css-label2">Nicio Opţiune </label></li>
							 
														<li><input type="checkbox" name="Orfan_1" class="css-checkbox" value="" id="Orfan_1" />
							 
														  <label for="Orfan_1" class="css-label2">Orfan de un părinte</label></li>
							 
														<li><input type="checkbox" name="Orfan_2" class="css-checkbox" value="" id="Orfan_2" />
							 
														  <label for="Orfan_2" class="css-label2">Orfan de ambii părinţi</label></li>
							 
														<li><input type="checkbox" name="Casa_Copii" class="css-checkbox" value="" id="Casa_Copii" />
							 
														  <label for="Casa_Copii" class="css-label2">Provenit din case de copii</label></li>
							 
														<li><input type="checkbox" name="Plasament_Familial" class="css-checkbox" value="" id="Plasament_Familial" />
							 
														  <label for="Plasament_Familial" class="css-label2">Provenit din plasament familial</label></li>
							 
														<li><input type="checkbox" name="Familie_Monoparentala" class="css-checkbox" value="" id="Familie_Monoparentala" />
							 
														  <label for="Familie_Monoparentala" class="css-label2">Provenit din familie monoparentală</label></li>
							 
													  </ul> -->
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</li>


							<li class="form-line" data-type="control_fullname" >
								<label class="form-label form-label-left form-label-auto" id="label_1"  style="color: #3488CB; font-size:larger"> III. Date privind pregătirea anterioara a candidatului </label>
								<br>
								<label class="form-label form-label-left form-label-auto" id="label_1"  style="color: #3488CB; font-size:large"> III. a. Studiile preuniversitare absolvite, nivel liceu </label>

								<h4 style="color:red;">Completați datele conform diplomei de Bacalaureat sau a adeverinței echivalente.</h4>

								<div class="form-input jf-required cid_1">
									<div>
										<span class="form-sub-label-container liceu" style="vertical-align:top; width:100%;">
											<label class="form-sub-label" for="input_3_country" style="min-height:13px;"> Liceul pe care l-ați absolvit</label>             
  					 
											<input type="text" class="form-dropdown form-address-country liceu" name="Liceu_Absolvit" data-component="country" list="licee" value='<?php  
																																														if(isset($_POST['Submit'])) {
																																															$v_Liceul_Absolvit = $_POST["Liceu_Absolvit"];
																																															echo $v_Liceul_Absolvit;
																																														} 
																																													?>'>
											<datalist id="licee">
												<option value='COLEGIUL ECONOMIC "DIONISIE POP MARTIAN" ALBA IULIA'>COLEGIUL ECONOMIC "DIONISIE POP MARTIAN" ALBA IULIA</option>
												<option value='COLEGIUL NAȚIONAL "AVRAM IANCU" CÂMPENI'>COLEGIUL NAȚIONAL "AVRAM IANCU" CÂMPENI</option>
												<option value='COLEGIUL NAȚIONAL "BETHLEN GABOR" AIUD'>COLEGIUL NAȚIONAL "BETHLEN GABOR" AIUD</option>
												<option value='COLEGIUL NAȚIONAL "DAVID PRODAN" CUGIR'>COLEGIUL NAȚIONAL "DAVID PRODAN" CUGIR</option>
												<option value='COLEGIUL NAȚIONAL "HOREA, CLOȘCA ȘI CRIȘAN" ALBA IULIA'>COLEGIUL NAȚIONAL "HOREA, CLOȘCA ȘI CRIȘAN" ALBA IULIA</option>
												<option value='COLEGIUL NAȚIONAL "INOCHENTIE MICU CLAIN" BLAJ'>COLEGIUL NAȚIONAL "INOCHENTIE MICU CLAIN" BLAJ</option>
												<option value='COLEGIUL NAȚIONAL "LUCIAN BLAGA" SEBEȘ'>COLEGIUL NAȚIONAL "LUCIAN BLAGA" SEBEȘ</option>
												<option value='COLEGIUL NAȚIONAL "TITU MAIORESCU" AIUD'>COLEGIUL NAȚIONAL "TITU MAIORESCU" AIUD</option>
												<option value='COLEGIUL NAȚIONAL MILITAR "MIHAI VITEAZUL" ALBA IULIA'>COLEGIUL NAȚIONAL MILITAR "MIHAI VITEAZUL" ALBA IULIA</option>
												<option value='COLEGIUL TEHNIC "ALEXANDRU DOMSA" ALBA IULIA'>COLEGIUL TEHNIC "ALEXANDRU DOMSA" ALBA IULIA</option>
												<option value='COLEGIUL TEHNIC "APULUM" ALBA IULIA'>COLEGIUL TEHNIC "APULUM" ALBA IULIA</option>
												<option value='COLEGIUL TEHNIC "DORIN PAVEL" ALBA IULIA'>COLEGIUL TEHNIC "DORIN PAVEL" ALBA IULIA</option>
												<option value='COLEGIUL TEHNIC "I. D. LĂZĂRESCU" CUGIR'>COLEGIUL TEHNIC "I. D. LĂZĂRESCU" CUGIR</option>
												<option value='COLEGIUL TEHNIC AIUD'>COLEGIUL TEHNIC AIUD</option>
												<option value='LICEUL "CORNELIU MEDREA" ZLATNA'>LICEUL "CORNELIU MEDREA" ZLATNA</option>
												<option value='LICEUL "DR. LAZĂR CHIRILĂ" BAIA DE ARIEȘ'>LICEUL "DR. LAZĂR CHIRILĂ" BAIA DE ARIEȘ</option>
												<option value='LICEUL "HOREA, CLOȘCA ȘI CRIȘAN" ABRUD'>LICEUL "HOREA, CLOȘCA ȘI CRIȘAN" ABRUD</option>
												<option value='LICEUL CU PROGRAM SPORTIV "FLORIN FLESERIU" SEBEȘ'>LICEUL CU PROGRAM SPORTIV "FLORIN FLESERIU" SEBEȘ</option>
												<option value='LICEUL CU PROGRAM SPORTIV ALBA IULIA'>LICEUL CU PROGRAM SPORTIV ALBA IULIA</option>
												<option value='LICEUL DE ARTE "REGINA MARIA" ALBA IULIA'>LICEUL DE ARTE "REGINA MARIA" ALBA IULIA</option>
												<option value='LICEUL GERMAN SEBEȘ'>LICEUL GERMAN SEBEȘ</option>
												<option value='LICEUL TEHNOLOGIC "ȘTEFAN MANCIULEA" BLAJ'>LICEUL TEHNOLOGIC "ȘTEFAN MANCIULEA" BLAJ</option>
												<option value='LICEUL TEHNOLOGIC "ȚARA MOȚILOR" ALBAC'>LICEUL TEHNOLOGIC "ȚARA MOȚILOR" ALBAC</option>
												<option value='LICEUL TEHNOLOGIC "TIMOTEI CIPARIU" BLAJ'>LICEUL TEHNOLOGIC "TIMOTEI CIPARIU" BLAJ</option>
												<option value='LICEUL TEHNOLOGIC AGRICOL "ALEXANDRU BORZA" CIUMBRUD'>LICEUL TEHNOLOGIC AGRICOL "ALEXANDRU BORZA" CIUMBRUD</option>
												<option value='LICEUL TEHNOLOGIC DE TURISM ȘI ALIMENTAȚIE ARIEȘENI'>LICEUL TEHNOLOGIC DE TURISM ȘI ALIMENTAȚIE ARIEȘENI</option>
												<option value='LICEUL TEHNOLOGIC JIDVEI'>LICEUL TEHNOLOGIC JIDVEI</option>
												<option value='LICEUL TEHNOLOGIC OCNA MUREȘ'>LICEUL TEHNOLOGIC OCNA MUREȘ</option>
												<option value='LICEUL TEHNOLOGIC SEBEȘ'>LICEUL TEHNOLOGIC SEBEȘ</option>
												<option value='LICEUL TEHNOLOGIC SILVIC CÂMPENI'>LICEUL TEHNOLOGIC SILVIC CÂMPENI</option>
												<option value='LICEUL TEOLOGIC GRECO-CATOLIC "SFÂNTUL VASILE CEL MARE" BLAJ'>LICEUL TEOLOGIC GRECO-CATOLIC "SFÂNTUL VASILE CEL MARE" BLAJ</option>
												<option value='LICEUL TEOLOGIC ROMANO-CATOLIC "GROF MAJLATH GUSZTAV KAROLY" ALBA IULIA'>LICEUL TEOLOGIC ROMANO-CATOLIC "GROF MAJLATH GUSZTAV KAROLY" ALBA IULIA</option>
												<option value='LICEUL TEORETIC "PETRU MAIOR" OCNA MURES'>LICEUL TEORETIC "PETRU MAIOR" OCNA MURES</option>
												<option value='LICEUL TEORETIC TEIUȘ'>LICEUL TEORETIC TEIUȘ</option>
												<option value='SEMINARUL TEOLOGIC ORTODOX "SFÂNTUL SIMION ȘTEFAN" ALBA IULIA'>SEMINARUL TEOLOGIC ORTODOX "SFÂNTUL SIMION ȘTEFAN" ALBA IULIA</option>
												<option value='COLEGIUL ECONOMIC ARAD'>COLEGIUL ECONOMIC ARAD</option>
												<option value='COLEGIUL NAŢIONAL "ELENA GHIBA BIRTA" ARAD'>COLEGIUL NAŢIONAL "ELENA GHIBA BIRTA" ARAD</option>
												<option value='COLEGIUL NAŢIONAL "MOISE NICOARĂ" ARAD'>COLEGIUL NAŢIONAL "MOISE NICOARĂ" ARAD</option>
												<option value='COLEGIUL NAŢIONAL "PREPARANDIA-DIMITRIE ŢICHINDEAL" ARAD'>COLEGIUL NAŢIONAL "PREPARANDIA-DIMITRIE ŢICHINDEAL" ARAD</option>
												<option value='COLEGIUL NAŢIONAL "VASILE GOLDIŞ" ARAD'>COLEGIUL NAŢIONAL "VASILE GOLDIŞ" ARAD</option>
												<option value='COLEGIUL TEHNIC "AUREL VLAICU" ARAD'>COLEGIUL TEHNIC "AUREL VLAICU" ARAD</option>
												<option value='COLEGIUL TEHNIC DE CONSTRUCŢII ŞI PROTECŢIA MEDIULUI ARAD'>COLEGIUL TEHNIC DE CONSTRUCŢII ŞI PROTECŢIA MEDIULUI ARAD</option>
												<option value='COLEGIUL TEHNOLOGIC DE INDUSTRIE ALIMENTARĂ ARAD'>COLEGIUL TEHNOLOGIC DE INDUSTRIE ALIMENTARĂ ARAD</option>
												<option value='COLEGIUL "CSIKY GERGELY" ARAD'>COLEGIUL "CSIKY GERGELY" ARAD</option>
												<option value='LICEUL "ATANASIE MARIENESCU" LIPOVA'>LICEUL "ATANASIE MARIENESCU" LIPOVA</option>
												<option value='LICEUL "IOAN BUTEANU" GURAHONŢ'>LICEUL "IOAN BUTEANU" GURAHONŢ</option>
												<option value='LICEUL "MIHAI VITEAZUL" INEU'>LICEUL "MIHAI VITEAZUL" INEU</option>
												<option value='LICEUL "SEVER BOCU" LIPOVA'>LICEUL "SEVER BOCU" LIPOVA</option>
												<option value='LICEUL CU PROGRAM SPORTIV ARAD'>LICEUL CU PROGRAM SPORTIV ARAD</option>
												<option value='LICEUL DE ARTE "SABIN DRĂGOI" ARAD'>LICEUL DE ARTE "SABIN DRĂGOI" ARAD</option>
												<option value='LICEUL NAŢIONAL DE INFORMATICĂ ARAD'>LICEUL NAŢIONAL DE INFORMATICĂ ARAD</option>
												<option value='LICEUL TEHNOLOGIC "FRANCISC NEUMAN" ARAD'>LICEUL TEHNOLOGIC "FRANCISC NEUMAN" ARAD</option>
												<option value='LICEUL TEHNOLOGIC "ION CREANGĂ" CURTICI'>LICEUL TEHNOLOGIC "ION CREANGĂ" CURTICI</option>
												<option value='LICEUL TEHNOLOGIC "IULIU MOLDOVAN" ARAD'>LICEUL TEHNOLOGIC "IULIU MOLDOVAN" ARAD</option>
												<option value='LICEUL TEHNOLOGIC "MOGA VOIEVOD" HĂLMAGIU'>LICEUL TEHNOLOGIC "MOGA VOIEVOD" HĂLMAGIU</option>
												<option value='LICEUL TEHNOLOGIC "SAVA BRANCOVICI" INEU'>LICEUL TEHNOLOGIC "SAVA BRANCOVICI" INEU</option>
												<option value='LICEUL TEHNOLOGIC "STEFAN HELL" SÂNTANA'>LICEUL TEHNOLOGIC "STEFAN HELL" SÂNTANA</option>
												<option value='LICEUL TEHNOLOGIC "VASILE JUNCU" MINIŞ'>LICEUL TEHNOLOGIC "VASILE JUNCU" MINIŞ</option>
												<option value='LICEUL TEHNOLOGIC BELIU'>LICEUL TEHNOLOGIC BELIU</option>
												<option value='LICEUL TEHNOLOGIC CHIŞINEU CRIŞ'>LICEUL TEHNOLOGIC CHIŞINEU CRIŞ</option>
												<option value='LICEUL TEHNOLOGIC DE ELECTRONICĂ ŞI AUTOMATIZĂRI "CAIUS IACOB" ARAD'>LICEUL TEHNOLOGIC DE ELECTRONICĂ ŞI AUTOMATIZĂRI "CAIUS IACOB" ARAD</option>
												<option value='LICEUL TEHNOLOGIC DE TRANSPORTURI AUTO "HENRI COANDĂ" ARAD'>LICEUL TEHNOLOGIC DE TRANSPORTURI AUTO "HENRI COANDĂ" ARAD</option>
												<option value='LICEUL TEHNOLOGIC SĂVÂRŞIN'>LICEUL TEHNOLOGIC SĂVÂRŞIN</option>
												<option value='LICEUL TEHNOLOGIC VINGA'>LICEUL TEHNOLOGIC VINGA</option>
												<option value='LICEUL TEOLOGIC BAPTIST "ALEXA POPOVICI" ARAD'>LICEUL TEOLOGIC BAPTIST "ALEXA POPOVICI" ARAD</option>
												<option value='LICEUL TEOLOGIC PENTICOSTAL ARAD'>LICEUL TEOLOGIC PENTICOSTAL ARAD</option>
												<option value='LICEUL TEORETIC "ADAM MULLER GUTTENBRUNN" ARAD'>LICEUL TEORETIC "ADAM MULLER GUTTENBRUNN" ARAD</option>
												<option value='LICEUL TEORETIC "GHEORGHE LAZĂR" PECICA'>LICEUL TEORETIC "GHEORGHE LAZĂR" PECICA</option>
												<option value='LICEUL TEORETIC "JOZEF GREGOR TAJOVSKY" NĂDLAC'>LICEUL TEORETIC "JOZEF GREGOR TAJOVSKY" NĂDLAC</option>
												<option value='LICEUL TEORETIC "MIHAI VELICIU" CHIȘINEU-CRIȘ'>LICEUL TEORETIC "MIHAI VELICIU" CHIȘINEU-CRIȘ</option>
												<option value='LICEUL TEORETIC CERMEI'>LICEUL TEORETIC CERMEI</option>
												<option value='LICEUL TEORETIC PÂNCOTA'>LICEUL TEORETIC PÂNCOTA</option>
												<option value='LICEUL TEORETIC SEBIŞ'>LICEUL TEORETIC SEBIŞ</option>
												<option value='SEMINARUL TEOLOGIC ORTODOX ARAD'>SEMINARUL TEOLOGIC ORTODOX ARAD</option>
												<option value='COLEGIUL ECONOMIC "MARIA TEIULEANU" PITEȘTI'>COLEGIUL ECONOMIC "MARIA TEIULEANU" PITEȘTI</option>
												<option value='COLEGIUL NAȚIONAL "ALEXANDRU ODOBESCU" PITEȘTI'>COLEGIUL NAȚIONAL "ALEXANDRU ODOBESCU" PITEȘTI</option>
												<option value='COLEGIUL NAȚIONAL "DINICU GOLESCU" CÂMPULUNG'>COLEGIUL NAȚIONAL "DINICU GOLESCU" CÂMPULUNG</option>
												<option value='COLEGIUL NAȚIONAL "ION C. BRĂTIANU" PITEȘTI'>COLEGIUL NAȚIONAL "ION C. BRĂTIANU" PITEȘTI</option>
												<option value='COLEGIUL NAȚIONAL "VLAICU VODĂ" CURTEA DE ARGEȘ'>COLEGIUL NAȚIONAL "VLAICU VODĂ" CURTEA DE ARGEȘ</option>
												<option value='COLEGIUL NAȚIONAL "ZINCA GOLESCU" PITEȘTI'>COLEGIUL NAȚIONAL "ZINCA GOLESCU" PITEȘTI</option>
												<option value='COLEGIUL NAȚIONAL PEDAGOGIC "CAROL I" CÂMPULUNG'>COLEGIUL NAȚIONAL PEDAGOGIC "CAROL I" CÂMPULUNG</option>
												<option value='COLEGIUL TEHNIC "ARMAND CĂLINESCU" PITEȘTI'>COLEGIUL TEHNIC "ARMAND CĂLINESCU" PITEȘTI</option>
												<option value='COLEGIUL TEHNIC "COSTIN D. NENIȚESCU" PITEȘTI'>COLEGIUL TEHNIC "COSTIN D. NENIȚESCU" PITEȘTI</option>
												<option value='COLEGIUL TEHNIC "DIMITRIE DIMA" PITEȘTI'>COLEGIUL TEHNIC "DIMITRIE DIMA" PITEȘTI</option>
												<option value='COLEGIUL TEHNIC CÂMPULUNG'>COLEGIUL TEHNIC CÂMPULUNG</option>
												<option value='LICEUL CU PROGRAM SPORTIV "VIITORUL" PITEȘTI'>LICEUL CU PROGRAM SPORTIV "VIITORUL" PITEȘTI</option>
												<option value='LICEUL CU PROGRAM SPORTIV CÂMPULUNG'>LICEUL CU PROGRAM SPORTIV CÂMPULUNG</option>
												<option value='LICEUL DE ARTE "DINU LIPATTI" PITEȘTI'>LICEUL DE ARTE "DINU LIPATTI" PITEȘTI</option>
												<option value='LICEUL PENTICOSTAL TEOLOGIC "ELIM" PITEȘTI'>LICEUL PENTICOSTAL TEOLOGIC "ELIM" PITEȘTI</option>
												<option value='LICEUL TEHNOLOGIC "ASTRA" PITEȘTI'>LICEUL TEHNOLOGIC "ASTRA" PITEȘTI</option>
												<option value='LICEUL TEHNOLOGIC "CONSTANTIN BRÂNCUȘI" PITEȘTI'>LICEUL TEHNOLOGIC "CONSTANTIN BRÂNCUȘI" PITEȘTI</option>
												<option value='LICEUL TEHNOLOGIC "CONSTANTIN DOBRESCU" CURTEA DE ARGEȘ'>LICEUL TEHNOLOGIC "CONSTANTIN DOBRESCU" CURTEA DE ARGEȘ</option>
												<option value='LICEUL TEHNOLOGIC "DACIA" PITEȘTI'>LICEUL TEHNOLOGIC "DACIA" PITEȘTI</option>
												<option value='LICEUL TEHNOLOGIC "FERDINAND I" CURTEA DE ARGEȘ'>LICEUL TEHNOLOGIC "FERDINAND I" CURTEA DE ARGEȘ</option>
												<option value='LICEUL TEHNOLOGIC "I.C. PETRESCU" STÂLPENI'>LICEUL TEHNOLOGIC "I.C. PETRESCU" STÂLPENI</option>
												<option value='LICEUL TEHNOLOGIC "LIVIU REBREANU" MOZĂCENI'>LICEUL TEHNOLOGIC "LIVIU REBREANU" MOZĂCENI</option>
												<option value='LICEUL TEHNOLOGIC "PETRE IONESCU MUSCEL" DOMNEȘTI'>LICEUL TEHNOLOGIC "PETRE IONESCU MUSCEL" DOMNEȘTI</option>
												<option value='LICEUL TEHNOLOGIC "VICTOR SLĂVESCU" RUCĂR'>LICEUL TEHNOLOGIC "VICTOR SLĂVESCU" RUCĂR</option>
												<option value='LICEUL TEHNOLOGIC AUTO CÂMPULUNG'>LICEUL TEHNOLOGIC AUTO CÂMPULUNG</option>
												<option value='LICEUL TEHNOLOGIC AUTO CURTEA DE ARGEȘ'>LICEUL TEHNOLOGIC AUTO CURTEA DE ARGEȘ</option>
												<option value='LICEUL TEHNOLOGIC CONSTRUCȚII DE MAȘINI MIOVENI'>LICEUL TEHNOLOGIC CONSTRUCȚII DE MAȘINI MIOVENI</option>
												<option value='LICEUL TEHNOLOGIC COSTEȘTI'>LICEUL TEHNOLOGIC COSTEȘTI</option>
												<option value='LICEUL TEHNOLOGIC FORESTIER CURTEA DE ARGEȘ'>LICEUL TEHNOLOGIC FORESTIER CURTEA DE ARGEȘ</option>
												<option value='LICEUL TEHNOLOGIC NR. 1 MĂRĂCINENI'>LICEUL TEHNOLOGIC NR. 1 MĂRĂCINENI</option>
												<option value='LICEUL TEHNOLOGIC TOPOLOVENI'>LICEUL TEHNOLOGIC TOPOLOVENI</option>
												<option value='LICEUL TEHNOLOGIC VEDEA'>LICEUL TEHNOLOGIC VEDEA</option>
												<option value='LICEUL TEORETIC "DAN BARBILIAN" CÂMPULUNG'>LICEUL TEORETIC "DAN BARBILIAN" CÂMPULUNG</option>
												<option value='LICEUL TEORETIC "ION BARBU" PITEȘTI'>LICEUL TEORETIC "ION BARBU" PITEȘTI</option>
												<option value='LICEUL TEORETIC "ION CANTACUZINO" PITEȘTI'>LICEUL TEORETIC "ION CANTACUZINO" PITEȘTI</option>
												<option value='LICEUL TEORETIC "ION MIHALACHE" TOPOLOVENI'>LICEUL TEORETIC "ION MIHALACHE" TOPOLOVENI</option>
												<option value='LICEUL TEORETIC "IULIA ZAMFIRESCU" MIOVENI'>LICEUL TEORETIC "IULIA ZAMFIRESCU" MIOVENI</option>
												<option value='LICEUL TEORETIC COSTEȘTI'>LICEUL TEORETIC COSTEȘTI</option>
												<option value='SEMINARUL TEOLOGIC ORTODOX "IUSTIN PATRIARHUL" CÂMPULUNG'>SEMINARUL TEOLOGIC ORTODOX "IUSTIN PATRIARHUL" CÂMPULUNG</option>
												<option value='SEMINARUL TEOLOGIC ORTODOX "NEAGOE VODĂ BASARAB" CURTEA DE ARGEȘ'>SEMINARUL TEOLOGIC ORTODOX "NEAGOE VODĂ BASARAB" CURTEA DE ARGEȘ</option>
												<option value='COLEGIUL "GRIGORE ANTIPA" BACĂU'>COLEGIUL "GRIGORE ANTIPA" BACĂU</option>
												<option value='COLEGIUL "HENRI COANDĂ" BACĂU'>COLEGIUL "HENRI COANDĂ" BACĂU</option>
												<option value='COLEGIUL "MIHAI EMINESCU" BACĂU'>COLEGIUL "MIHAI EMINESCU" BACĂU</option>
												<option value='COLEGIUL ECONOMIC "ION GHICA" BACĂU'>COLEGIUL ECONOMIC "ION GHICA" BACĂU</option>
												<option value='COLEGIUL NAȚIONAL "COSTACHE NEGRI" TIRGU OCNA'>COLEGIUL NAȚIONAL "COSTACHE NEGRI" TIRGU OCNA</option>
												<option value='COLEGIUL NAȚIONAL "DIMITRIE CANTEMIR" ONEȘTI'>COLEGIUL NAȚIONAL "DIMITRIE CANTEMIR" ONEȘTI</option>
												<option value='COLEGIUL NAȚIONAL "FERDINAND I" BACĂU'>COLEGIUL NAȚIONAL "FERDINAND I" BACĂU</option>
												<option value='COLEGIUL NAȚIONAL "GHEORGHE VRĂNCEANU" BACĂU'>COLEGIUL NAȚIONAL "GHEORGHE VRĂNCEANU" BACĂU</option>
												<option value='COLEGIUL NAȚIONAL "GRIGORE MOISIL" ONEȘTI'>COLEGIUL NAȚIONAL "GRIGORE MOISIL" ONEȘTI</option>
												<option value='COLEGIUL NAŢIONAL "VASILE ALECSANDRI" BACĂU'>COLEGIUL NAŢIONAL "VASILE ALECSANDRI" BACĂU</option>
												<option value='COLEGIUL NAȚIONAL CATOLIC "SF. IOSIF" BACĂU'>COLEGIUL NAȚIONAL CATOLIC "SF. IOSIF" BACĂU</option>
												<option value='COLEGIUL NAȚIONAL DE ARTĂ "GEORGE APOSTU" BACĂU'>COLEGIUL NAȚIONAL DE ARTĂ "GEORGE APOSTU" BACĂU</option>
												<option value='COLEGIUL NAȚIONAL PEDAGOGIC "ȘTEFAN CEL MARE" BACĂU'>COLEGIUL NAȚIONAL PEDAGOGIC "ȘTEFAN CEL MARE" BACĂU</option>
												<option value='COLEGIUL SPORTIV "NADIA COMĂNECI" ONEȘTI'>COLEGIUL SPORTIV "NADIA COMĂNECI" ONEȘTI</option>
												<option value='COLEGIUL TEHNIC "ANGHEL SALIGNY" BACĂU'>COLEGIUL TEHNIC "ANGHEL SALIGNY" BACĂU</option>
												<option value='COLEGIUL TEHNIC "DIMITRIE GHIKA" COMĂNEȘTI'>COLEGIUL TEHNIC "DIMITRIE GHIKA" COMĂNEȘTI</option>
												<option value='COLEGIUL TEHNIC "DUMITRU MANGERON" BACĂU'>COLEGIUL TEHNIC "DUMITRU MANGERON" BACĂU</option>
												<option value='COLEGIUL TEHNIC "GHEORGHE ASACHI" ONEȘTI'>COLEGIUL TEHNIC "GHEORGHE ASACHI" ONEȘTI</option>
												<option value='COLEGIUL TEHNIC "GRIGORE COBĂLCESCU" MOINEȘTI'>COLEGIUL TEHNIC "GRIGORE COBĂLCESCU" MOINEȘTI</option>
												<option value='COLEGIUL TEHNIC "ION BORCEA" BUHUȘI'>COLEGIUL TEHNIC "ION BORCEA" BUHUȘI</option>
												<option value='COLEGIUL TEHNIC "PETRU PONI" ONEȘTI'>COLEGIUL TEHNIC "PETRU PONI" ONEȘTI</option>
												<option value='COLEGIUL TEHNIC DE COMUNICAȚII "N. VASILESCU-KARPEN" BACĂU'>COLEGIUL TEHNIC DE COMUNICAȚII "N. VASILESCU-KARPEN" BACĂU</option>
												<option value='LICEUL CU PROGRAM SPORTIV BACĂU'>LICEUL CU PROGRAM SPORTIV BACĂU</option>
												<option value='LICEUL TEHNOLOGIC "ALEXANDRU VLAHUȚĂ" PODU TURCULUI'>LICEUL TEHNOLOGIC "ALEXANDRU VLAHUȚĂ" PODU TURCULUI</option>
												<option value='LICEUL TEHNOLOGIC "GEORGETA J. CANCICOV" PARINCEA'>LICEUL TEHNOLOGIC "GEORGETA J. CANCICOV" PARINCEA</option>
												<option value='LICEUL TEHNOLOGIC "JACQUES M. ELIAS" SASCUT'>LICEUL TEHNOLOGIC "JACQUES M. ELIAS" SASCUT</option>
												<option value='LICEUL TEHNOLOGIC "PETRU RAREȘ" BACĂU'>LICEUL TEHNOLOGIC "PETRU RAREȘ" BACĂU</option>
												<option value='LICEUL TEHNOLOGIC DĂRMĂNEȘTI'>LICEUL TEHNOLOGIC DĂRMĂNEȘTI</option>
												<option value='LICEUL TEHNOLOGIC FĂGET'>LICEUL TEHNOLOGIC FĂGET</option>
												<option value='LICEUL TEHNOLOGIC ONEȘTI'>LICEUL TEHNOLOGIC ONEȘTI</option>
												<option value='LICEUL TEHNOLOGIC RĂCHITOASA'>LICEUL TEHNOLOGIC RĂCHITOASA</option>
												<option value='LICEUL TEOLOGIC "FERICITUL IEREMIA" ONEȘTI'>LICEUL TEOLOGIC "FERICITUL IEREMIA" ONEȘTI</option>
												<option value='LICEUL TEORETIC "SPIRU HARET" MOINEȘTI'>LICEUL TEORETIC "SPIRU HARET" MOINEȘTI</option>
												<option value='COLEGIUL AGRICOL NR. 1 VALEA LUI MIHAI'>COLEGIUL AGRICOL NR. 1 VALEA LUI MIHAI</option>
												<option value='COLEGIUL ECONOMIC "PARTENIE COSMA" ORADEA'>COLEGIUL ECONOMIC "PARTENIE COSMA" ORADEA</option>
												<option value='COLEGIUL NAȚIONAL "AVRAM IANCU" ȘTEI'>COLEGIUL NAȚIONAL "AVRAM IANCU" ȘTEI</option>
												<option value='COLEGIUL NAȚIONAL "EMANUIL GOJDU" ORADEA'>COLEGIUL NAȚIONAL "EMANUIL GOJDU" ORADEA</option>
												<option value='COLEGIUL NAȚIONAL "IOSIF VULCAN" ORADEA'>COLEGIUL NAȚIONAL "IOSIF VULCAN" ORADEA</option>
												<option value='COLEGIUL NAȚIONAL "MIHAI EMINESCU" ORADEA'>COLEGIUL NAȚIONAL "MIHAI EMINESCU" ORADEA</option>
												<option value='COLEGIUL NAȚIONAL "OCTAVIAN GOGA" MARGHITA'>COLEGIUL NAȚIONAL "OCTAVIAN GOGA" MARGHITA</option>
												<option value='COLEGIUL NAȚIONAL "SAMUIL VULCAN" BEIUȘ'>COLEGIUL NAȚIONAL "SAMUIL VULCAN" BEIUȘ</option>
												<option value='COLEGIUL NAȚIONAL "TEODOR NEȘ" SALONTA'>COLEGIUL NAȚIONAL "TEODOR NEȘ" SALONTA</option>
												<option value='COLEGIUL TEHNIC "ALEXANDRU ROMAN" ALEȘD'>COLEGIUL TEHNIC "ALEXANDRU ROMAN" ALEȘD</option>
												<option value='COLEGIUL TEHNIC "CONSTANTIN BRÂNCUȘI" ORADEA'>COLEGIUL TEHNIC "CONSTANTIN BRÂNCUȘI" ORADEA</option>
												<option value='COLEGIUL TEHNIC "IOAN CIORDAȘ" BEIUȘ'>COLEGIUL TEHNIC "IOAN CIORDAȘ" BEIUȘ</option>
												<option value='COLEGIUL TEHNIC "MIHAI VITEAZUL" ORADEA'>COLEGIUL TEHNIC "MIHAI VITEAZUL" ORADEA</option>
												<option value='COLEGIUL TEHNIC "TRAIAN VUIA" ORADEA'>COLEGIUL TEHNIC "TRAIAN VUIA" ORADEA</option>
												<option value='COLEGIUL TEHNIC "TRANSILVANIA" ORADEA'>COLEGIUL TEHNIC "TRANSILVANIA" ORADEA</option>
												<option value='COLEGIUL TEHNIC "UNIREA" ȘTEI'>COLEGIUL TEHNIC "UNIREA" ȘTEI</option>
												<option value='COLEGIUL TEHNIC NR. 1 VADU CRIŞULUI'>COLEGIUL TEHNIC NR. 1 VADU CRIŞULUI</option>
												<option value='LICEUL CU PROGRAM SPORTIV "BIHORUL" ORADEA'>LICEUL CU PROGRAM SPORTIV "BIHORUL" ORADEA</option>
												<option value='LICEUL DE ARTE ORADEA'>LICEUL DE ARTE ORADEA</option>
												<option value='LICEUL GRECO-CATOLIC "IULIU MANIU" ORADEA'>LICEUL GRECO-CATOLIC "IULIU MANIU" ORADEA</option>
												<option value='LICEUL ORTODOX "EPISCOP ROMAN CIOROGARIU" ORADEA'>LICEUL ORTODOX "EPISCOP ROMAN CIOROGARIU" ORADEA</option>
												<option value='LICEUL REFORMAT "LORANTFFY ZSUZSANNA" ORADEA'>LICEUL REFORMAT "LORANTFFY ZSUZSANNA" ORADEA</option>
												<option value='LICEUL TEHNOLOGIC "HOREA" MARGHITA'>LICEUL TEHNOLOGIC "HOREA" MARGHITA</option>
												<option value='LICEUL TEHNOLOGIC AGROINDUSTRIAL "TAMASI ARON" BORȘ'>LICEUL TEHNOLOGIC AGROINDUSTRIAL "TAMASI ARON" BORȘ</option>
												<option value='LICEUL TEHNOLOGIC NR. 1 CADEA'>LICEUL TEHNOLOGIC NR. 1 CADEA</option>
												<option value='LICEUL TEHNOLOGIC NR. 1 DOBREŞTI'>LICEUL TEHNOLOGIC NR. 1 DOBREŞTI</option>
												<option value='LICEUL TEHNOLOGIC NR. 1 POPEȘTI'>LICEUL TEHNOLOGIC NR. 1 POPEȘTI</option>
												<option value='LICEUL TEHNOLOGIC NR. 1 SALONTA'>LICEUL TEHNOLOGIC NR. 1 SALONTA</option>
												<option value='LICEUL TEHNOLOGIC NR. 1 ŞUNCUIUŞ'>LICEUL TEHNOLOGIC NR. 1 ŞUNCUIUŞ</option>
												<option value='LICEUL TEHNOLOGIC NR. 1 SUPLACU DE BARCĂU'>LICEUL TEHNOLOGIC NR. 1 SUPLACU DE BARCĂU</option>
												<option value='LICEUL TEHNOLOGIC SANITAR "VASILE VOICULESCU" ORADEA'>LICEUL TEHNOLOGIC SANITAR "VASILE VOICULESCU" ORADEA</option>
												<option value='LICEUL TEOLOGIC BAPTIST "EMANUEL" ORADEA'>LICEUL TEOLOGIC BAPTIST "EMANUEL" ORADEA</option>
												<option value='LICEUL TEOLOGIC PENTICOSTAL "BETEL" ORADEA'>LICEUL TEOLOGIC PENTICOSTAL "BETEL" ORADEA</option>
												<option value='LICEUL TEOLOGIC ROMANO-CATOLIC "SZENT LASZLO" ORADEA'>LICEUL TEOLOGIC ROMANO-CATOLIC "SZENT LASZLO" ORADEA</option>
												<option value='LICEUL TEORETIC "ADY ENDRE" ORADEA'>LICEUL TEORETIC "ADY ENDRE" ORADEA</option>
												<option value='LICEUL TEORETIC "ARANY JANOS" SALONTA'>LICEUL TEORETIC "ARANY JANOS" SALONTA</option>
												<option value='LICEUL TEORETIC "AUREL LAZĂR" ORADEA'>LICEUL TEORETIC "AUREL LAZĂR" ORADEA</option>
												<option value='LICEUL TEORETIC "CONSTANTIN ȘERBAN" ALEȘD'>LICEUL TEORETIC "CONSTANTIN ȘERBAN" ALEȘD</option>
												<option value='LICEUL TEORETIC "GABRIEL ŢEPELEA" BOROD'>LICEUL TEORETIC "GABRIEL ŢEPELEA" BOROD</option>
												<option value='LICEUL TEORETIC "HORVATH JANOS" MARGHITA'>LICEUL TEORETIC "HORVATH JANOS" MARGHITA</option>
												<option value='LICEUL TEORETIC "JOZEF KOZACEK" BUDOI'>LICEUL TEORETIC "JOZEF KOZACEK" BUDOI</option>
												<option value='LICEUL TEORETIC "LUCIAN BLAGA" ORADEA'>LICEUL TEORETIC "LUCIAN BLAGA" ORADEA</option>
												<option value='LICEUL TEORETIC "NICOLAE JIGA" TINCA'>LICEUL TEORETIC "NICOLAE JIGA" TINCA</option>
												<option value='LICEUL TEORETIC "ONISIFOR GHIBU" ORADEA'>LICEUL TEORETIC "ONISIFOR GHIBU" ORADEA</option>
												<option value='LICEUL TEORETIC "PETOFI SANDOR" SĂCUENI'>LICEUL TEORETIC "PETOFI SANDOR" SĂCUENI</option>
												<option value='LICEUL TEORETIC GERMAN "FRIEDRICH SCHILLER" ORADEA'>LICEUL TEORETIC GERMAN "FRIEDRICH SCHILLER" ORADEA</option>
												<option value='LICEUL TEORETIC NR.1 BRATCA'>LICEUL TEORETIC NR.1 BRATCA</option>
												<option value='LICEUL VOCAȚIONAL PEDAGOGIC "NICOLAE BOLCAȘ" BEIUȘ'>LICEUL VOCAȚIONAL PEDAGOGIC "NICOLAE BOLCAȘ" BEIUȘ</option>
												<option value='COLEGIUL ECONOMIC NĂSĂUD'>COLEGIUL ECONOMIC NĂSĂUD</option>
												<option value='COLEGIUL NAȚIONAL "ANDREI MUREȘANU" BISTRIȚA'>COLEGIUL NAȚIONAL "ANDREI MUREȘANU" BISTRIȚA</option>
												<option value='COLEGIUL NAȚIONAL "GEORGE COȘBUC" NĂSĂUD'>COLEGIUL NAȚIONAL "GEORGE COȘBUC" NĂSĂUD</option>
												<option value='COLEGIUL NAȚIONAL "LIVIU REBREANU" BISTRIȚA'>COLEGIUL NAȚIONAL "LIVIU REBREANU" BISTRIȚA</option>
												<option value='COLEGIUL NAȚIONAL "PETRU RAREȘ" BECLEAN'>COLEGIUL NAȚIONAL "PETRU RAREȘ" BECLEAN</option>
												<option value='COLEGIUL SILVIC "TRANSILVANIA" NĂSĂUD'>COLEGIUL SILVIC "TRANSILVANIA" NĂSĂUD</option>
												<option value='COLEGIUL TEHNIC "GRIGORE MOISIL" BISTRIȚA'>COLEGIUL TEHNIC "GRIGORE MOISIL" BISTRIȚA</option>
												<option value='COLEGIUL TEHNIC "INFOEL" BISTRIȚA'>COLEGIUL TEHNIC "INFOEL" BISTRIȚA</option>
												<option value='LICEUL "RADU PETRESCU" PRUNDU BÂRGĂULUI'>LICEUL "RADU PETRESCU" PRUNDU BÂRGĂULUI</option>
												<option value='LICEUL CU PROGRAM SPORTIV BISTRIȚA'>LICEUL CU PROGRAM SPORTIV BISTRIȚA</option>
												<option value='LICEUL DE ARTE "CORNELIU BABA" BISTRIȚA'>LICEUL DE ARTE "CORNELIU BABA" BISTRIȚA</option>
												<option value='LICEUL DE MUZICĂ "TUDOR JARDA" BISTRIȚA'>LICEUL DE MUZICĂ "TUDOR JARDA" BISTRIȚA</option>
												<option value='LICEUL TEHNOLOGIC "HENRI COANDĂ" BECLEAN'>LICEUL TEHNOLOGIC "HENRI COANDĂ" BECLEAN</option>
												<option value='LICEUL TEHNOLOGIC "ION CĂIAN ROMÂNUL" CĂIANU MIC'>LICEUL TEHNOLOGIC "ION CĂIAN ROMÂNUL" CĂIANU MIC</option>
												<option value='LICEUL TEHNOLOGIC "LIVIU REBREANU" MAIERU'>LICEUL TEHNOLOGIC "LIVIU REBREANU" MAIERU</option>
												<option value='LICEUL TEHNOLOGIC AGRICOL BECLEAN'>LICEUL TEHNOLOGIC AGRICOL BECLEAN</option>
												<option value='LICEUL TEHNOLOGIC AGRICOL BISTRIȚA'>LICEUL TEHNOLOGIC AGRICOL BISTRIȚA</option>
												<option value='LICEUL TEHNOLOGIC DE SERVICII BISTRIȚA'>LICEUL TEHNOLOGIC DE SERVICII BISTRIȚA</option>
												<option value='LICEUL TEHNOLOGIC FELDRU'>LICEUL TEHNOLOGIC FELDRU</option>
												<option value='LICEUL TEHNOLOGIC FORESTIER BISTRIȚA'>LICEUL TEHNOLOGIC FORESTIER BISTRIȚA</option>
												<option value='LICEUL TEHNOLOGIC LECHINȚA'>LICEUL TEHNOLOGIC LECHINȚA</option>
												<option value='LICEUL TEHNOLOGIC TELCIU'>LICEUL TEHNOLOGIC TELCIU</option>
												<option value='LICEUL TEORETIC "CONSTANTIN ROMANU VIVU" TEACA'>LICEUL TEORETIC "CONSTANTIN ROMANU VIVU" TEACA</option>
												<option value='LICEUL TEORETIC "SOLOMON HALIȚĂ" SÎNGEORZ-BĂI'>LICEUL TEORETIC "SOLOMON HALIȚĂ" SÎNGEORZ-BĂI</option>
												<option value='LICEUL TEORETIC SANITAR BISTRIȚA'>LICEUL TEORETIC SANITAR BISTRIȚA</option>
												<option value='COLEGIUL ECONOMIC "OCTAV ONICESCU" BOTOȘANI'>COLEGIUL ECONOMIC "OCTAV ONICESCU" BOTOȘANI</option>
												<option value='COLEGIUL NAȚIONAL "A. T. LAURIAN" BOTOȘANI'>COLEGIUL NAȚIONAL "A. T. LAURIAN" BOTOȘANI</option>
												<option value='COLEGIUL NAȚIONAL "GRIGORE GHICA" DOROHOI'>COLEGIUL NAȚIONAL "GRIGORE GHICA" DOROHOI</option>
												<option value='COLEGIUL NAȚIONAL "MIHAI EMINESCU" BOTOȘANI'>COLEGIUL NAȚIONAL "MIHAI EMINESCU" BOTOȘANI</option>
												<option value='COLEGIUL TEHNIC "GHEORGHE ASACHI" BOTOȘANI'>COLEGIUL TEHNIC "GHEORGHE ASACHI" BOTOȘANI</option>
												<option value='LICEUL "ALEXANDRU CEL BUN" BOTOȘANI'>LICEUL "ALEXANDRU CEL BUN" BOTOȘANI</option>
												<option value='LICEUL "DEMOSTENE BOTEZ" TRUŞEŞTI'>LICEUL "DEMOSTENE BOTEZ" TRUŞEŞTI</option>
												<option value='LICEUL "DIMITRIE CANTEMIR" DARABANI'>LICEUL "DIMITRIE CANTEMIR" DARABANI</option>
												<option value='LICEUL "DIMITRIE NEGREANU" BOTOȘANI'>LICEUL "DIMITRIE NEGREANU" BOTOȘANI</option>
												<option value='LICEUL "REGINA MARIA" DOROHOI'>LICEUL "REGINA MARIA" DOROHOI</option>
												<option value='LICEUL CU PROGRAM SPORTIV BOTOȘANI'>LICEUL CU PROGRAM SPORTIV BOTOȘANI</option>
												<option value='LICEUL DE ARTĂ "ȘTEFAN LUCHIAN" BOTOȘANI'>LICEUL DE ARTĂ "ȘTEFAN LUCHIAN" BOTOȘANI</option>
												<option value='LICEUL PEDAGOGIC "NICOLAE IORGA" BOTOȘANI'>LICEUL PEDAGOGIC "NICOLAE IORGA" BOTOȘANI</option>
												<option value='LICEUL TEHNOLOGIC "AL. VLAHUȚĂ" SENDRICENI'>LICEUL TEHNOLOGIC "AL. VLAHUȚĂ" SENDRICENI</option>
												<option value='LICEUL TEHNOLOGIC "ELIE RADU" BOTOȘANI'>LICEUL TEHNOLOGIC "ELIE RADU" BOTOȘANI</option>
												<option value='LICEUL TEHNOLOGIC "NICOLAE BĂLCESCU" FLAMINZI'>LICEUL TEHNOLOGIC "NICOLAE BĂLCESCU" FLAMINZI</option>
												<option value='LICEUL TEHNOLOGIC "PETRU RAREŞ" BOTOȘANI'>LICEUL TEHNOLOGIC "PETRU RAREŞ" BOTOȘANI</option>
												<option value='LICEUL TEHNOLOGIC "ȘTEFAN CEL MARE ȘI SFÂNT" VORONA'>LICEUL TEHNOLOGIC "ȘTEFAN CEL MARE ȘI SFÂNT" VORONA</option>
												<option value='LICEUL TEHNOLOGIC BUCECEA'>LICEUL TEHNOLOGIC BUCECEA</option>
												<option value='LICEUL TEHNOLOGIC COŢUŞCA'>LICEUL TEHNOLOGIC COŢUŞCA</option>
												<option value='LICEUL TEHNOLOGIC PLOPENII MARI'>LICEUL TEHNOLOGIC PLOPENII MARI</option>
												<option value='LICEUL TEHNOLOGIC TODIRENI'>LICEUL TEHNOLOGIC TODIRENI</option>
												<option value='LICEUL TEORETIC "ANASTASIE BAȘOTĂ" POMÂRLA'>LICEUL TEORETIC "ANASTASIE BAȘOTĂ" POMÂRLA</option>
												<option value='LICEUL TEORETIC "DR. MIHAI CIUCA" SĂVENI'>LICEUL TEORETIC "DR. MIHAI CIUCA" SĂVENI</option>
												<option value='LICEUL TEORETIC "GRIGORE ANTIPA" BOTOȘANI'>LICEUL TEORETIC "GRIGORE ANTIPA" BOTOȘANI</option>
												<option value='LICEUL "ȘTEFAN D. LUCHIAN" ȘTEFĂNEȘTI'>LICEUL "ȘTEFAN D. LUCHIAN" ȘTEFĂNEȘTI</option>
												<option value='SEMINARUL TEOLOGIC LICEAL ORTODOX "SF. GHEORGHE" BOTOȘANI'>SEMINARUL TEOLOGIC LICEAL ORTODOX "SF. GHEORGHE" BOTOȘANI</option>
												<option value='SEMINARUL TEOLOGIC LICEAL ORTODOX "SF. IOAN IACOB" DOROHOI'>SEMINARUL TEOLOGIC LICEAL ORTODOX "SF. IOAN IACOB" DOROHOI</option>
												<option value='COLEGIUL ECONOMIC "ION GHICA" BRĂILA'>COLEGIUL ECONOMIC "ION GHICA" BRĂILA</option>
												<option value='COLEGIUL NAŢIONAL "ANA ASLAN" BRĂILA'>COLEGIUL NAŢIONAL "ANA ASLAN" BRĂILA</option>
												<option value='COLEGIUL NAŢIONAL "GHEORGHE MUNTEANU MURGOCI" BRĂILA'>COLEGIUL NAŢIONAL "GHEORGHE MUNTEANU MURGOCI" BRĂILA</option>
												<option value='COLEGIUL NAŢIONAL "NICOLAE BĂLCESCU" BRĂILA'>COLEGIUL NAŢIONAL "NICOLAE BĂLCESCU" BRĂILA</option>
												<option value='COLEGIUL TEHNIC "COSTIN D. NENIŢESCU" BRĂILA'>COLEGIUL TEHNIC "COSTIN D. NENIŢESCU" BRĂILA</option>
												<option value='COLEGIUL TEHNIC "EDMOND NICOLAU" BRĂILA'>COLEGIUL TEHNIC "EDMOND NICOLAU" BRĂILA</option>
												<option value='COLEGIUL TEHNIC "PANAIT ISTRATI" BRĂILA'>COLEGIUL TEHNIC "PANAIT ISTRATI" BRĂILA</option>
												<option value='LICEUL CU PROGRAM SPORTIV BRĂILA'>LICEUL CU PROGRAM SPORTIV BRĂILA</option>
												<option value='LICEUL DE ARTE "HARICLEA DARCLEE" BRĂILA'>LICEUL DE ARTE "HARICLEA DARCLEE" BRĂILA</option>
												<option value='LICEUL PEDAGOGIC "D. P. PERPESSICIUS" BRĂILA'>LICEUL PEDAGOGIC "D. P. PERPESSICIUS" BRĂILA</option>
												<option value='LICEUL TEHNOLOGIC "A. SALIGNY" BRĂILA'>LICEUL TEHNOLOGIC "A. SALIGNY" BRĂILA</option>
												<option value='LICEUL TEHNOLOGIC "CONSTANTIN BRÂNCOVEANU" BRĂILA'>LICEUL TEHNOLOGIC "CONSTANTIN BRÂNCOVEANU" BRĂILA</option>
												<option value='LICEUL TEHNOLOGIC "GH. K. CONSTANTINESCU" BRĂILA'>LICEUL TEHNOLOGIC "GH. K. CONSTANTINESCU" BRĂILA</option>
												<option value='LICEUL TEHNOLOGIC "GRIGORE MOISIL" BRĂILA'>LICEUL TEHNOLOGIC "GRIGORE MOISIL" BRĂILA</option>
												<option value='LICEUL TEHNOLOGIC "M. BASARAB" MĂXINENI'>LICEUL TEHNOLOGIC "M. BASARAB" MĂXINENI</option>
												<option value='LICEUL TEHNOLOGIC "NICOLAE ONCESCU" IANCA'>LICEUL TEHNOLOGIC "NICOLAE ONCESCU" IANCA</option>
												<option value='LICEUL TEHNOLOGIC "NICOLAE TITULESCU" ÎNSURĂŢEI'>LICEUL TEHNOLOGIC "NICOLAE TITULESCU" ÎNSURĂŢEI</option>
												<option value='LICEUL TEORETIC "CONSTANTIN ANGELESCU" IANCA'>LICEUL TEORETIC "CONSTANTIN ANGELESCU" IANCA</option>
												<option value='LICEUL TEORETIC "GEORGE VÂLSAN" FĂUREI'>LICEUL TEORETIC "GEORGE VÂLSAN" FĂUREI</option>
												<option value='LICEUL TEORETIC "MIHAIL SEBASTIAN" BRĂILA'>LICEUL TEORETIC "MIHAIL SEBASTIAN" BRĂILA</option>
												<option value='LICEUL TEORETIC "NICOLAE IORGA" BRĂILA'>LICEUL TEORETIC "NICOLAE IORGA" BRĂILA</option>
												<option value='LICEUL TEORETIC "PANAIT CERNA" BRĂILA'>LICEUL TEORETIC "PANAIT CERNA" BRĂILA</option>
												<option value='Colegiul "Aurel Vijoli" Făgăraș'>Colegiul "Aurel Vijoli" Făgăraș</option>
												<option value='Colegiul de Științe "Grigore Antipa" Brașov'>Colegiul de Științe "Grigore Antipa" Brașov</option>
												<option value='Colegiul "Emil Racoviță" Brașov'>Colegiul "Emil Racoviță" Brașov</option>
												<option value='Colegiul Național "Andrei Șaguna" Brașov'>Colegiul Național "Andrei Șaguna" Brașov</option>
												<option value='Colegiul Național "Aprily Lajos" Brașov'>Colegiul Național "Aprily Lajos" Brașov</option>
												<option value='Colegiul Național de Informatică "Grigore Moisil" Brașov'>Colegiul Național de Informatică "Grigore Moisil" Brașov</option>
												<option value='Colegiul Național "Doamna Stanca" Făgăraș'>Colegiul Național "Doamna Stanca" Făgăraș</option>
												<option value='Colegiul Național "Dr. Ioan Meșotă" Brașov'>Colegiul Național "Dr. Ioan Meșotă" Brașov</option>
												<option value='Colegiul Național Economic "Andrei Bârseanu" Brașov'>Colegiul Național Economic "Andrei Bârseanu" Brașov</option>
												<option value='Colegiul Național "Radu Negru" Făgăraș'>Colegiul Național "Radu Negru" Făgăraș</option>
												<option value='Colegiul Național "Unirea" Brașov'>Colegiul Național "Unirea" Brașov</option>
												<option value='Colegiul "Nicolae Titulescu" Brașov'>Colegiul "Nicolae Titulescu" Brașov</option>
												<option value='Colegiul pentru Agricultură și Industrie Alimentară "Țara Bârsei" Prejmer'>Colegiul pentru Agricultură și Industrie Alimentară "Țara Bârsei" Prejmer</option>
												<option value='Colegiul Tehnic "Alexandru Bărbat" Victoria'>Colegiul Tehnic "Alexandru Bărbat" Victoria</option>
												<option value='Colegiul Tehnic de Transporturi Brașov'>Colegiul Tehnic de Transporturi Brașov</option>
												<option value='Colegiul Tehnic Energetic "Remus Răduleț" Brașov'>Colegiul Tehnic Energetic "Remus Răduleț" Brașov</option>
												<option value='Colegiul Tehnic "Maria Baiulescu" Brașov'>Colegiul Tehnic "Maria Baiulescu" Brașov</option>
												<option value='Colegiul Tehnic "Mircea Cristea" Brașov'>Colegiul Tehnic "Mircea Cristea" Brașov</option>
												<option value='Colegiul Tehnic "Simion Mehedinți" Codlea'>Colegiul Tehnic "Simion Mehedinți" Codlea</option>
												<option value='Colegiul Tehnic "Transilvania" Brașov'>Colegiul Tehnic "Transilvania" Brașov</option>
												<option value='Liceul "Andrei Mureșanu" Brașov'>Liceul "Andrei Mureșanu" Brașov</option>
												<option value='Liceul cu Program Sportiv Brașov'>Liceul cu Program Sportiv Brașov</option>
												<option value='Liceul "Petru Rareș" Feldioara'>Liceul "Petru Rareș" Feldioara</option>
												<option value='Liceul "Șt.O.Iosif" Rupea'>Liceul "Șt.O.Iosif" Rupea</option>
												<option value='Liceul Tehnologic "Dr. Ioan Șenchea" Făgăraș'>Liceul Tehnologic "Dr. Ioan Șenchea" Făgăraș</option>
												<option value='Liceul Tehnologic "Malaxa" Zărnești'>Liceul Tehnologic "Malaxa" Zărnești</option>
												<option value='Liceul Tehnologic Râșnov'>Liceul Tehnologic Râșnov</option>
												<option value='Liceul Tehnologic "Sextil Pușcariu" Bran'>Liceul Tehnologic "Sextil Pușcariu" Bran</option>
												<option value='Liceul Tehnologic Silvic "Dr. Nicolae Rucăreanu" Brașov'>Liceul Tehnologic Silvic "Dr. Nicolae Rucăreanu" Brașov</option>
												<option value='Liceul Tehnologic "Victor Jinga" Săcele'>Liceul Tehnologic "Victor Jinga" Săcele</option>
												<option value='Liceul Teologic Ortodox "Dumitru Stăniloae" Brașov'>Liceul Teologic Ortodox "Dumitru Stăniloae" Brașov</option>
												<option value='Liceul Teologic Ortodox "Sf. Constantin Brâncoveanu" Făgăraș'>Liceul Teologic Ortodox "Sf. Constantin Brâncoveanu" Făgăraș</option>
												<option value='Liceul Teoretic "George Moroianu" Săcele'>Liceul Teoretic "George Moroianu" Săcele</option>
												<option value='Liceul Teoretic "I.C. Drăgușanu" Victoria'>Liceul Teoretic "I.C. Drăgușanu" Victoria</option>
												<option value='Liceul Teoretic "Ioan Pascu" Codlea'>Liceul Teoretic "Ioan Pascu" Codlea</option>
												<option value='Liceul Teoretic "Johannes Honterus" Brașov'>Liceul Teoretic "Johannes Honterus" Brașov</option>
												<option value='Liceul Teoretic "Mihail Săulescu" Predeal'>Liceul Teoretic "Mihail Săulescu" Predeal</option>
												<option value='Liceul Teoretic "Mitropolit Ioan Mețianu" Zărnești'>Liceul Teoretic "Mitropolit Ioan Mețianu" Zărnești</option>
												<option value='Liceul Teoretic "Zajzoni Rab Istvan" Săcele'>Liceul Teoretic "Zajzoni Rab Istvan" Săcele</option>
												<option value='Liceul Vocațional de Arte Plastice "Hans Mattis-Teutsch" Brașov'>Liceul Vocațional de Arte Plastice "Hans Mattis-Teutsch" Brașov</option>
												<option value='Liceul Vocațional de Muzică "Tudor Ciortea" Brașov'>Liceul Vocațional de Muzică "Tudor Ciortea" Brașov</option>
												<option value='Colegiul Economic "Costin C. Kiriţescu"'>Colegiul Economic "Costin C. Kiriţescu"</option>
												<option value='Colegiul Economic "V. Madgearu"'>Colegiul Economic "V. Madgearu"</option>
												<option value='Colegiul Economic "Viilor"'>Colegiul Economic "Viilor"</option>
												<option value='Colegiul Economic "A.D. Xenopol"'>Colegiul Economic "A.D. Xenopol"</option>
												<option value='Colegiul Economic "Hermes"'>Colegiul Economic "Hermes"</option>
												<option value='Colegiul German "Goethe"'>Colegiul German "Goethe"</option>
												<option value='Colegiul Naţional "Aurel Vlaicu"'>Colegiul Naţional "Aurel Vlaicu"</option>
												<option value='Colegiul Naţional "Elena Cuza"'>Colegiul Naţional "Elena Cuza"</option>
												<option value='Colegiul Naţional "Gheorghe Lazăr"'>Colegiul Naţional "Gheorghe Lazăr"</option>
												<option value='Colegiul Naţional "Gheorghe Şincai"'>Colegiul Naţional "Gheorghe Şincai"</option>
												<option value='Colegiul Naţional "Grigore Moisil"'>Colegiul Naţional "Grigore Moisil"</option>
												<option value='Colegiul Naţional "I.L. Caragiale"'>Colegiul Naţional "I.L. Caragiale"</option>
												<option value='Colegiul Naţional "Ion Creangă"'>Colegiul Naţional "Ion Creangă"</option>
												<option value='Colegiul Naţional "Ion Neculce"'>Colegiul Naţional "Ion Neculce"</option>
												<option value='Colegiul Național "Matei Basarab"'>Colegiul Național "Matei Basarab"</option>
												<option value='Colegiul Naţional "Mihai Eminescu"'>Colegiul Naţional "Mihai Eminescu"</option>
												<option value='Colegiul Naţional "Octav Onicescu"'>Colegiul Naţional "Octav Onicescu"</option>
												<option value='Colegiul Naţional "Sfântul Sava"'>Colegiul Naţional "Sfântul Sava"</option>
												<option value='Colegiul Național "Cantemir Vodă"'>Colegiul Național "Cantemir Vodă"</option>
												<option value='Colegiul Național "Emil Racoviță"'>Colegiul Național "Emil Racoviță"</option>
												<option value='Colegiul Național "Iulia Hașdeu"'>Colegiul Național "Iulia Hașdeu"</option>
												<option value='Colegiul Național "Mihai Viteazul"'>Colegiul Național "Mihai Viteazul"</option>
												<option value='Colegiul Național "Spiru Haret"'>Colegiul Național "Spiru Haret"</option>
												<option value='Colegiul Național "Victor Babeș"'>Colegiul Național "Victor Babeș"</option>
												<option value='Colegiul Național Bilingv "George Coșbuc"'>Colegiul Național Bilingv "George Coșbuc"</option>
												<option value='Colegiul Naţional de Arte "Dinu Lipatti"'>Colegiul Naţional de Arte "Dinu Lipatti"</option>
												<option value='Colegiul Naţional de Informatică "Tudor Vianu"'>Colegiul Naţional de Informatică "Tudor Vianu"</option>
												<option value='Colegiul Naţional de Muzică "George Enescu"'>Colegiul Naţional de Muzică "George Enescu"</option>
												<option value='Colegiul Romano-Catolic "Sfântul Iosif"'>Colegiul Romano-Catolic "Sfântul Iosif"</option>
												<option value='Colegiul Tehnic "Anghel Saligny"'>Colegiul Tehnic "Anghel Saligny"</option>
												<option value='Colegiul Tehnic "Carol I"'>Colegiul Tehnic "Carol I"</option>
												<option value='Colegiul Tehnic "Costin D. Nenițescu"'>Colegiul Tehnic "Costin D. Nenițescu"</option>
												<option value='Colegiul Tehnic "Dinicu Golescu"'>Colegiul Tehnic "Dinicu Golescu"</option>
												<option value='Colegiul Tehnic "Gheorghe Asachi"'>Colegiul Tehnic "Gheorghe Asachi"</option>
												<option value='Colegiul Tehnic "Iuliu Maniu"'>Colegiul Tehnic "Iuliu Maniu"</option>
												<option value='Colegiul Tehnic "Media"'>Colegiul Tehnic "Media"</option>
												<option value='Colegiul Tehnic "Mihai Bravu"'>Colegiul Tehnic "Mihai Bravu"</option>
												<option value='Colegiul Tehnic "Mircea cel Bătrân"'>Colegiul Tehnic "Mircea cel Bătrân"</option>
												<option value='Colegiul Tehnic "Miron Nicolescu"'>Colegiul Tehnic "Miron Nicolescu"</option>
												<option value='Colegiul Tehnic "Petru Maior"'>Colegiul Tehnic "Petru Maior"</option>
												<option value='Colegiul Tehnic "Dimitrie Leonida"'>Colegiul Tehnic "Dimitrie Leonida"</option>
												<option value='Colegiul Tehnic "Edmond Nicolau"'>Colegiul Tehnic "Edmond Nicolau"</option>
												<option value='Colegiul Tehnic "Petru Rareș"'>Colegiul Tehnic "Petru Rareș"</option>
												<option value='Colegiul Tehnic de Aeronautică "Henri Coandă"'>Colegiul Tehnic de Aeronautică "Henri Coandă"</option>
												<option value='Colegiul Tehnic de Arhitectură Şi Lucrări Publice "Ioan N. Socolescu"'>Colegiul Tehnic de Arhitectură Şi Lucrări Publice "Ioan N. Socolescu"</option>
												<option value='Colegiul Tehnic de Industrie Alimentară "Dumitru Moţoc"'>Colegiul Tehnic de Industrie Alimentară "Dumitru Moţoc"</option>
												<option value='Colegiul Tehnic de Poştă și Telecomunicaţii "Gheorghe Airinei"'>Colegiul Tehnic de Poştă și Telecomunicaţii "Gheorghe Airinei"</option>
												<option value='Colegiul Tehnic Energetic'>Colegiul Tehnic Energetic</option>
												<option value='Colegiul Tehnic Feroviar "Mihai I"'>Colegiul Tehnic Feroviar "Mihai I"</option>
												<option value='Colegiul Tehnic Mecanic "Griviţa"'>Colegiul Tehnic Mecanic "Griviţa"</option>
												<option value='Colegiul Tehnologic "Grigore Cerchez"'>Colegiul Tehnologic "Grigore Cerchez"</option>
												<option value='Colegiul Tehnologic "Viaceslav Harnaj"'>Colegiul Tehnologic "Viaceslav Harnaj"</option>
												<option value='Liceul "Dimitrie Paciurea"'>Liceul "Dimitrie Paciurea"</option>
												<option value='Liceul cu Program Sportiv "Mircea Eliade"'>Liceul cu Program Sportiv "Mircea Eliade"</option>
												<option value='Liceul de Arte Plastice "Nicolae Tonitza"'>Liceul de Arte Plastice "Nicolae Tonitza"</option>
												<option value='Liceul de Coregrafie "Floria Capsali"'>Liceul de Coregrafie "Floria Capsali"</option>
												<option value='Liceul Greco-Catolic "Timotei Cipariu"'>Liceul Greco-Catolic "Timotei Cipariu"</option>
												<option value='Liceul Tehnologic "Dacia"'>Liceul Tehnologic "Dacia"</option>
												<option value='Liceul Tehnologic "Dimitrie Gusti"'>Liceul Tehnologic "Dimitrie Gusti"</option>
												<option value='Liceul Tehnologic "Dragomir Hurmuzescu"'>Liceul Tehnologic "Dragomir Hurmuzescu"</option>
												<option value='Liceul Tehnologic "Elie Radu"'>Liceul Tehnologic "Elie Radu"</option>
												<option value='Liceul Tehnologic "Ion I.C. Brătianu"'>Liceul Tehnologic "Ion I.C. Brătianu"</option>
												<option value='Liceul Tehnologic "Mircea Vulcănescu"'>Liceul Tehnologic "Mircea Vulcănescu"</option>
												<option value='Liceul Tehnologic "Petru Poni"'>Liceul Tehnologic "Petru Poni"</option>
												<option value='Liceul Tehnologic "Sf. Antim Ivireanu"'>Liceul Tehnologic "Sf. Antim Ivireanu"</option>
												<option value='Liceul Tehnologic "Constantin Brâncuși"'>Liceul Tehnologic "Constantin Brâncuși"</option>
												<option value='Liceul Tehnologic "Electronica Industrială"'>Liceul Tehnologic "Electronica Industrială"</option>
												<option value='Liceul Tehnologic "Sfântul Pantelimon"'>Liceul Tehnologic "Sfântul Pantelimon"</option>
												<option value='Liceul Tehnologic de Metrologie "Traian Vuia"'>Liceul Tehnologic de Metrologie "Traian Vuia"</option>
												<option value='Liceul Tehnologic Theodor Pallady'>Liceul Tehnologic Theodor Pallady</option>
												<option value='Liceul Teologic Adventist "Ştefan Demetrescu"'>Liceul Teologic Adventist "Ştefan Demetrescu"</option>
												<option value='Liceul Teologic Baptist "Logos"'>Liceul Teologic Baptist "Logos"</option>
												<option value='Liceul Teologic Penticostal "Emanuel"'>Liceul Teologic Penticostal "Emanuel"</option>
												<option value='Liceul Teoretic "Alexandru Ioan Cuza"'>Liceul Teoretic "Alexandru Ioan Cuza"</option>
												<option value='Liceul Teoretic "Alexandru Vlahuţă"'>Liceul Teoretic "Alexandru Vlahuţă"</option>
												<option value='Liceul Teoretic "Benjamin Franklin"'>Liceul Teoretic "Benjamin Franklin"</option>
												<option value='Liceul Teoretic "Constantin Brâncoveanu"'>Liceul Teoretic "Constantin Brâncoveanu"</option>
												<option value='Liceul Teoretic "Dante Alighieri"'>Liceul Teoretic "Dante Alighieri"</option>
												<option value='Liceul Teoretic "Decebal"'>Liceul Teoretic "Decebal"</option>
												<option value='Liceul Teoretic "Dimitrie Bolintineanu"'>Liceul Teoretic "Dimitrie Bolintineanu"</option>
												<option value='Liceul Teoretic "Eugen Lovinescu"'>Liceul Teoretic "Eugen Lovinescu"</option>
												<option value='Liceul Teoretic "George Călinescu"'>Liceul Teoretic "George Călinescu"</option>
												<option value='Liceul Teoretic "Ion Barbu"'>Liceul Teoretic "Ion Barbu"</option>
												<option value='Liceul Teoretic "Jean Monnet"'>Liceul Teoretic "Jean Monnet"</option>
												<option value='Liceul Teoretic "Marin Preda"'>Liceul Teoretic "Marin Preda"</option>
												<option value='Liceul Teoretic "Nichita Stănescu"'>Liceul Teoretic "Nichita Stănescu"</option>
												<option value='Liceul Teoretic "Nicolae Iorga"'>Liceul Teoretic "Nicolae Iorga"</option>
												<option value='Liceul Teoretic "Ștefan Odobleja"'>Liceul Teoretic "Ștefan Odobleja"</option>
												<option value='Liceul Teoretic "Tudor Vladimirescu"'>Liceul Teoretic "Tudor Vladimirescu"</option>
												<option value='Liceul Teoretic "Ady Endre"'>Liceul Teoretic "Ady Endre"</option>
												<option value='Liceul Teoretic "C.A. Rosetti"'>Liceul Teoretic "C.A. Rosetti"</option>
												<option value='Liceul Teoretic "Lucian Blaga"'>Liceul Teoretic "Lucian Blaga"</option>
												<option value='Liceul Teoretic "Mihail Sadoveanu"'>Liceul Teoretic "Mihail Sadoveanu"</option>
												<option value='Liceul Teoretic "Traian"'>Liceul Teoretic "Traian"</option>
												<option value='Liceul Teoretic Bilingv "Miguel de Cervantes"'>Liceul Teoretic Bilingv "Miguel de Cervantes"</option>
												<option value='Liceul Teoretic Bilingv "Ita Wegman"'>Liceul Teoretic Bilingv "Ita Wegman"</option>
												<option value='Liceul Teoretic Bulgar "Hristo Botev"'>Liceul Teoretic Bulgar "Hristo Botev"</option>
												<option value='Liceul Teoretic Waldorf'>Liceul Teoretic Waldorf</option>
												<option value='Școala Centrală'>Școala Centrală</option>
												<option value='Școala Superioară Comercială "Nicolae Kretzulescu"'>Școala Superioară Comercială "Nicolae Kretzulescu"</option>
												<option value='Seminarul Teologic Ortodox'>Seminarul Teologic Ortodox</option>
												<option value='COLEGIUL AGRICOL "DR. CONSTANTIN ANGELESCU" BUZĂU'>COLEGIUL AGRICOL "DR. CONSTANTIN ANGELESCU" BUZĂU</option>
												<option value='COLEGIUL ECONOMIC BUZĂU'>COLEGIUL ECONOMIC BUZĂU</option>
												<option value='COLEGIUL NAŢIONAL "ALEXANDRU VLAHUŢĂ" RÎMNICU SĂRAT'>COLEGIUL NAŢIONAL "ALEXANDRU VLAHUŢĂ" RÎMNICU SĂRAT</option>
												<option value='COLEGIUL NAŢIONAL "B. P. HASDEU" BUZĂU'>COLEGIUL NAŢIONAL "B. P. HASDEU" BUZĂU</option>
												<option value='COLEGIUL NAŢIONAL "MIHAI EMINESCU" BUZĂU'>COLEGIUL NAŢIONAL "MIHAI EMINESCU" BUZĂU</option>
												<option value='COLEGIUL TEHNIC BUZĂU'>COLEGIUL TEHNIC BUZĂU</option>
												<option value='LICEUL CU PROGRAM SPORTIV "IOLANDA BALAŞ ŞOTER" BUZĂU'>LICEUL CU PROGRAM SPORTIV "IOLANDA BALAŞ ŞOTER" BUZĂU</option>
												<option value='LICEUL DE ARTE "MARGARETA STERIAN" BUZĂU'>LICEUL DE ARTE "MARGARETA STERIAN" BUZĂU</option>
												<option value='LICEUL PEDAGOGIC "SPIRU HARET" BUZĂU'>LICEUL PEDAGOGIC "SPIRU HARET" BUZĂU</option>
												<option value='LICEUL TEHNOLOGIC "COSTIN NENIŢESCU" BUZĂU'>LICEUL TEHNOLOGIC "COSTIN NENIŢESCU" BUZĂU</option>
												<option value='LICEUL TEHNOLOGIC "DIMITRIE FILIPESCU" BUZĂU'>LICEUL TEHNOLOGIC "DIMITRIE FILIPESCU" BUZĂU</option>
												<option value='LICEUL TEHNOLOGIC "GRIGORE C. MOISIL" BUZĂU'>LICEUL TEHNOLOGIC "GRIGORE C. MOISIL" BUZĂU</option>
												<option value='LICEUL TEHNOLOGIC "SF. MUCENIC SAVA" BERCA'>LICEUL TEHNOLOGIC "SF. MUCENIC SAVA" BERCA</option>
												<option value='LICEUL TEHNOLOGIC "VICTOR FRUNZĂ" RÎMNICU SĂRAT'>LICEUL TEHNOLOGIC "VICTOR FRUNZĂ" RÎMNICU SĂRAT</option>
												<option value='LICEUL TEHNOLOGIC AGRICOL SMEENI'>LICEUL TEHNOLOGIC AGRICOL SMEENI</option>
												<option value='LICEUL TEHNOLOGIC LOPĂTARI'>LICEUL TEHNOLOGIC LOPĂTARI</option>
												<option value='LICEUL TEHNOLOGIC RUŞEŢU'>LICEUL TEHNOLOGIC RUŞEŢU</option>
												<option value='LICEUL TEHNOLOGIC VERNEŞTI'>LICEUL TEHNOLOGIC VERNEŞTI</option>
												<option value='LICEUL TEHNOLOGIC DE MESERII ȘI SERVICII BUZĂU'>LICEUL TEHNOLOGIC DE MESERII ȘI SERVICII BUZĂU</option>
												<option value='LICEUL TEHNOLOGIC ECONOMIC "ELINA MATEI BASARAB" RÎMNICU SĂRAT'>LICEUL TEHNOLOGIC ECONOMIC "ELINA MATEI BASARAB" RÎMNICU SĂRAT</option>
												<option value='LICEUL TEHNOLOGIC PĂTÂRLAGELE'>LICEUL TEHNOLOGIC PĂTÂRLAGELE</option>
												<option value='LICEUL TEHNOLOGIC "HENRI COANDĂ" BUZĂU'>LICEUL TEHNOLOGIC "HENRI COANDĂ" BUZĂU</option>
												<option value='LICEUL TEHNOLOGIC MĂRGĂRIŢI'>LICEUL TEHNOLOGIC MĂRGĂRIŢI</option>
												<option value='LICEUL TEORETIC "ALEXANDRU MARGHILOMAN" BUZĂU'>LICEUL TEORETIC "ALEXANDRU MARGHILOMAN" BUZĂU</option>
												<option value='LICEUL TEORETIC "NICOLAE IORGA" NEHOIU'>LICEUL TEORETIC "NICOLAE IORGA" NEHOIU</option>
												<option value='LICEUL TEORETIC "RADU VLĂDESCU" PĂTÂRLAGELE'>LICEUL TEORETIC "RADU VLĂDESCU" PĂTÂRLAGELE</option>
												<option value='LICEUL TEORETIC "ŞTEFAN CEL MARE" RÂMNICU SĂRAT'>LICEUL TEORETIC "ŞTEFAN CEL MARE" RÂMNICU SĂRAT</option>
												<option value='LICEUL TEORETIC POGOANELE'>LICEUL TEORETIC POGOANELE</option>
												<option value='SEMINARUL TEOLOGIC ORTODOX "CHESARIE EPISCOPUL" BUZĂU'>SEMINARUL TEOLOGIC ORTODOX "CHESARIE EPISCOPUL" BUZĂU</option>
												<option value='COLEGIUL AGRICOL "SANDU ALDEA" CĂLĂRAȘI'>COLEGIUL AGRICOL "SANDU ALDEA" CĂLĂRAȘI</option>
												<option value='COLEGIUL ECONOMIC CĂLĂRAȘI'>COLEGIUL ECONOMIC CĂLĂRAȘI</option>
												<option value='COLEGIUL NAȚIONAL "BARBU ȘTIRBEI" CĂLĂRAȘI'>COLEGIUL NAȚIONAL "BARBU ȘTIRBEI" CĂLĂRAȘI</option>
												<option value='COLEGIUL TEHNIC "ȘTEFAN BĂNULESCU" CĂLĂRAȘI'>COLEGIUL TEHNIC "ȘTEFAN BĂNULESCU" CĂLĂRAȘI</option>
												<option value='LICEUL "ALEXANDRU ODOBESCU" LEHLIU GARĂ'>LICEUL "ALEXANDRU ODOBESCU" LEHLIU GARĂ</option>
												<option value='LICEUL "DANUBIUS" CĂLĂRAȘI'>LICEUL "DANUBIUS" CĂLĂRAȘI</option>
												<option value='LICEUL TEHNOLOGIC "CONSTANTIN GEORGE CALINESCU" GRĂDIȘTEA'>LICEUL TEHNOLOGIC "CONSTANTIN GEORGE CALINESCU" GRĂDIȘTEA</option>
												<option value='LICEUL TEHNOLOGIC "DAN MATEESCU" CĂLĂRAȘI'>LICEUL TEHNOLOGIC "DAN MATEESCU" CĂLĂRAȘI</option>
												<option value='LICEUL TEHNOLOGIC "DUILIU ZAMFIRESCU" DRAGALINA'>LICEUL TEHNOLOGIC "DUILIU ZAMFIRESCU" DRAGALINA</option>
												<option value='LICEUL TEHNOLOGIC "ION GHICA" OLTENIȚA'>LICEUL TEHNOLOGIC "ION GHICA" OLTENIȚA</option>
												<option value='LICEUL TEHNOLOGIC "MATEI BASARAB" MÂNĂSTIREA'>LICEUL TEHNOLOGIC "MATEI BASARAB" MÂNĂSTIREA</option>
												<option value='LICEUL TEHNOLOGIC "NICOLAE BĂLCESCU" OLTENIȚA'>LICEUL TEHNOLOGIC "NICOLAE BĂLCESCU" OLTENIȚA</option>
												<option value='LICEUL TEHNOLOGIC DE TRANSPORTURI AUTO CĂLĂRAȘI'>LICEUL TEHNOLOGIC DE TRANSPORTURI AUTO CĂLĂRAȘI</option>
												<option value='LICEUL TEHNOLOGIC NR. 1 BORCEA'>LICEUL TEHNOLOGIC NR. 1 BORCEA</option>
												<option value='LICEUL TEHNOLOGIC NR. 1 FUNDULEA'>LICEUL TEHNOLOGIC NR. 1 FUNDULEA</option>
												<option value='LICEUL TEORETIC "MIHAI EMINESCU" CĂLĂRAȘI'>LICEUL TEORETIC "MIHAI EMINESCU" CĂLĂRAȘI</option>
												<option value='LICEUL TEORETIC "NEAGOE BASARAB" OLTENIȚA'>LICEUL TEORETIC "NEAGOE BASARAB" OLTENIȚA</option>
												<option value='COLEGIUL ECONOMIC AL BANATULUI MONTAN REŞIŢA'>COLEGIUL ECONOMIC AL BANATULUI MONTAN REŞIŢA</option>
												<option value='COLEGIUL NAŢIONAL "C.D. LOGA" CARANSEBEŞ'>COLEGIUL NAŢIONAL "C.D. LOGA" CARANSEBEŞ</option>
												<option value='COLEGIUL NAŢIONAL "TRAIAN DODA" CARANSEBEŞ'>COLEGIUL NAŢIONAL "TRAIAN DODA" CARANSEBEŞ</option>
												<option value='COLEGIUL NAŢIONAL "MIRCEA ELIADE" REŞIŢA'>COLEGIUL NAŢIONAL "MIRCEA ELIADE" REŞIŢA</option>
												<option value='COLEGIUL NAŢIONAL "TRAIAN LALESCU" REŞIŢA'>COLEGIUL NAŢIONAL "TRAIAN LALESCU" REŞIŢA</option>
												<option value='COLEGIUL TEHNIC CĂRĂŞAN REŞIŢA'>COLEGIUL TEHNIC CĂRĂŞAN REŞIŢA</option>
												<option value='COLEGIUL TEHNIC REŞIŢA'>COLEGIUL TEHNIC REŞIŢA</option>
												<option value='LICEUL "HERCULES" BĂILE HERCULANE'>LICEUL "HERCULES" BĂILE HERCULANE</option>
												<option value='LICEUL "MATHIAS HAMMER" ANINA'>LICEUL "MATHIAS HAMMER" ANINA</option>
												<option value='LICEUL BĂNĂŢEAN OŢELU ROŞU'>LICEUL BĂNĂŢEAN OŢELU ROŞU</option>
												<option value='LICEUL DE ARTE "SABIN PĂUŢA" REŞIŢA'>LICEUL DE ARTE "SABIN PĂUŢA" REŞIŢA</option>
												<option value='LICEUL TEHNOLOGIC "CLISURA DUNĂRII" MOLDOVA NOUĂ'>LICEUL TEHNOLOGIC "CLISURA DUNĂRII" MOLDOVA NOUĂ</option>
												<option value='LICEUL TEHNOLOGIC "CONSTANTIN LUCACI" BOCŞA'>LICEUL TEHNOLOGIC "CONSTANTIN LUCACI" BOCŞA</option>
												<option value='LICEUL TEHNOLOGIC "DACIA" CARANSEBEŞ'>LICEUL TEHNOLOGIC "DACIA" CARANSEBEŞ</option>
												<option value='LICEUL TEHNOLOGIC "DECEBAL" CARANSEBEŞ'>LICEUL TEHNOLOGIC "DECEBAL" CARANSEBEŞ</option>
												<option value='LICEUL TEHNOLOGIC "TRANDAFIR COCÂRLĂ" CARANSEBEŞ'>LICEUL TEHNOLOGIC "TRANDAFIR COCÂRLĂ" CARANSEBEŞ</option>
												<option value='LICEUL TEHNOLOGIC "IOSIF CORIOLAN BURACU" PRIGOR'>LICEUL TEHNOLOGIC "IOSIF CORIOLAN BURACU" PRIGOR</option>
												<option value='LICEUL TEHNOLOGIC "MIHAI NOVAC" ORAVIŢA'>LICEUL TEHNOLOGIC "MIHAI NOVAC" ORAVIŢA</option>
												<option value='LICEUL TEHNOLOGIC "NICOLAE STOICA DE HAŢEG" MEHADIA'>LICEUL TEHNOLOGIC "NICOLAE STOICA DE HAŢEG" MEHADIA</option>
												<option value='LICEUL TEHNOLOGIC "SF. DIMITRIE" TEREGOVA'>LICEUL TEHNOLOGIC "SF. DIMITRIE" TEREGOVA</option>
												<option value='LICEUL TEHNOLOGIC BERZOVIA'>LICEUL TEHNOLOGIC BERZOVIA</option>
												<option value='LICEUL TEOLOGIC BAPTIST REŞIŢA'>LICEUL TEOLOGIC BAPTIST REŞIŢA</option>
												<option value='LICEUL TEORETIC "GENERAL DRAGALINA" ORAVIȚA'>LICEUL TEORETIC "GENERAL DRAGALINA" ORAVIȚA</option>
												<option value='LICEUL TEORETIC "TATA OANCEA" BOCŞA'>LICEUL TEORETIC "TATA OANCEA" BOCŞA</option>
												<option value='LICEUL TEORETIC "DIACONOVICI TIETZ" REŞIŢA'>LICEUL TEORETIC "DIACONOVICI TIETZ" REŞIŢA</option>
												<option value='LICEUL TEORETIC "EFTIMIE MURGU" BOZOVICI'>LICEUL TEORETIC "EFTIMIE MURGU" BOZOVICI</option>
												<option value='LICEUL TEORETIC "TRAIAN VUIA" REŞIŢA'>LICEUL TEORETIC "TRAIAN VUIA" REŞIŢA</option>
												<option value='LICEUL TEORETIC BILINGV ROMÂNO-CROAT CARAŞOVA'>LICEUL TEORETIC BILINGV ROMÂNO-CROAT CARAŞOVA</option>
												<option value='SEMINARUL TEOLOGIC ORTODOX "EPISCOP IOAN POPASU" CARANSEBEŞ'>SEMINARUL TEOLOGIC ORTODOX "EPISCOP IOAN POPASU" CARANSEBEŞ</option>
												<option value='COLEGIUL "EMIL NEGRUȚIU" TURDA'>COLEGIUL "EMIL NEGRUȚIU" TURDA</option>
												<option value='COLEGIUL DE MUZICĂ "SIGISMUND TODUȚĂ" CLUJ-NAPOCA'>COLEGIUL DE MUZICĂ "SIGISMUND TODUȚĂ" CLUJ-NAPOCA</option>
												<option value='COLEGIUL ECONOMIC "IULIAN POP" CLUJ-NAPOCA'>COLEGIUL ECONOMIC "IULIAN POP" CLUJ-NAPOCA</option>
												<option value='COLEGIUL NAȚIONAL "ANDREI MUREȘANU" DEJ'>COLEGIUL NAȚIONAL "ANDREI MUREȘANU" DEJ</option>
												<option value='COLEGIUL NAȚIONAL "EMIL RACOVIȚĂ" CLUJ-NAPOCA'>COLEGIUL NAȚIONAL "EMIL RACOVIȚĂ" CLUJ-NAPOCA</option>
												<option value='COLEGIUL NAȚIONAL "GEORGE BARIȚIU" CLUJ-NAPOCA'>COLEGIUL NAȚIONAL "GEORGE BARIȚIU" CLUJ-NAPOCA</option>
												<option value='COLEGIUL NAȚIONAL "GEORGE COȘBUC" CLUJ-NAPOCA'>COLEGIUL NAȚIONAL "GEORGE COȘBUC" CLUJ-NAPOCA</option>
												<option value='COLEGIUL NAȚIONAL "MIHAI VITEAZUL" TURDA'>COLEGIUL NAȚIONAL "MIHAI VITEAZUL" TURDA</option>
												<option value='COLEGIUL NAȚIONAL PEDAGOGIC "GHEORGHE LAZĂR" CLUJ-NAPOCA'>COLEGIUL NAȚIONAL PEDAGOGIC "GHEORGHE LAZĂR" CLUJ-NAPOCA</option>
												<option value='COLEGIUL TEHNIC "ANA ASLAN" CLUJ-NAPOCA'>COLEGIUL TEHNIC "ANA ASLAN" CLUJ-NAPOCA</option>
												<option value='COLEGIUL TEHNIC "ANGHEL SALIGNY" CLUJ-NAPOCA'>COLEGIUL TEHNIC "ANGHEL SALIGNY" CLUJ-NAPOCA</option>
												<option value='COLEGIUL TEHNIC "DR. IOAN RAȚIU" TURDA'>COLEGIUL TEHNIC "DR. IOAN RAȚIU" TURDA</option>
												<option value='COLEGIUL TEHNIC "EDMOND NICOLAU" CLUJ-NAPOCA'>COLEGIUL TEHNIC "EDMOND NICOLAU" CLUJ-NAPOCA</option>
												<option value='COLEGIUL TEHNIC "NAPOCA" CLUJ-NAPOCA'>COLEGIUL TEHNIC "NAPOCA" CLUJ-NAPOCA</option>
												<option value='COLEGIUL TEHNIC "RALUCA RIPAN" CLUJ-NAPOCA'>COLEGIUL TEHNIC "RALUCA RIPAN" CLUJ-NAPOCA</option>
												<option value='COLEGIUL TEHNIC "VICTOR UNGUREANU" CÂMPIA TURZII'>COLEGIUL TEHNIC "VICTOR UNGUREANU" CÂMPIA TURZII</option>
												<option value='COLEGIUL TEHNIC DE COMUNICAȚII "AUGUSTIN MAIOR" CLUJ-NAPOCA'>COLEGIUL TEHNIC DE COMUNICAȚII "AUGUSTIN MAIOR" CLUJ-NAPOCA</option>
												<option value='COLEGIUL TEHNIC DE TRANSPORTURI "TRANSILVANIA" CLUJ-NAPOCA'>COLEGIUL TEHNIC DE TRANSPORTURI "TRANSILVANIA" CLUJ-NAPOCA</option>
												<option value='COLEGIUL TEHNIC ENERGETIC CLUJ-NAPOCA'>COLEGIUL TEHNIC ENERGETIC CLUJ-NAPOCA</option>
												<option value='COLEGIUL TEHNIC TURDA'>COLEGIUL TEHNIC TURDA</option>
												<option value='LICEUL CU PROGRAM SPORTIV CLUJ-NAPOCA'>LICEUL CU PROGRAM SPORTIV CLUJ-NAPOCA</option>
												<option value='LICEUL DE ARTE VIZUALE "ROMULUS LADEA" CLUJ-NAPOCA'>LICEUL DE ARTE VIZUALE "ROMULUS LADEA" CLUJ-NAPOCA</option>
												<option value='LICEUL DE COREGRAFIE ȘI ARTĂ DRAMATICĂ "OCTAVIAN STROIA" CLUJ-NAPOCA'>LICEUL DE COREGRAFIE ȘI ARTĂ DRAMATICĂ "OCTAVIAN STROIA" CLUJ-NAPOCA</option>
												<option value='LICEUL DE INFORMATICĂ "TIBERIU POPOVICIU" CLUJ-NAPOCA'>LICEUL DE INFORMATICĂ "TIBERIU POPOVICIU" CLUJ-NAPOCA</option>
												<option value='LICEUL GRECO-CATOLIC "INOCHENTIE MICU" CLUJ-NAPOCA'>LICEUL GRECO-CATOLIC "INOCHENTIE MICU" CLUJ-NAPOCA</option>
												<option value='LICEUL TEHNOLOGIC "ALEXANDRU BORZA" CLUJ-NAPOCA'>LICEUL TEHNOLOGIC "ALEXANDRU BORZA" CLUJ-NAPOCA</option>
												<option value='LICEUL TEHNOLOGIC "AUREL VLAICU" CLUJ-NAPOCA'>LICEUL TEHNOLOGIC "AUREL VLAICU" CLUJ-NAPOCA</option>
												<option value='LICEUL TEHNOLOGIC "CONSTANTIN BRÂNCUȘI" DEJ'>LICEUL TEHNOLOGIC "CONSTANTIN BRÂNCUȘI" DEJ</option>
												<option value='LICEUL TEHNOLOGIC "SOMEȘ" DEJ'>LICEUL TEHNOLOGIC "SOMEȘ" DEJ</option>
												<option value='LICEUL TEHNOLOGIC "VLĂDEASA" HUEDIN'>LICEUL TEHNOLOGIC "VLĂDEASA" HUEDIN</option>
												<option value='LICEUL TEHNOLOGIC GHERLA'>LICEUL TEHNOLOGIC GHERLA</option>
												<option value='LICEUL TEHNOLOGIC NR. 1 CLUJ-NAPOCA'>LICEUL TEHNOLOGIC NR. 1 CLUJ-NAPOCA</option>
												<option value='LICEUL TEOLOGIC ADVENTIST "MARANATHA" CLUJ-NAPOCA'>LICEUL TEOLOGIC ADVENTIST "MARANATHA" CLUJ-NAPOCA</option>
												<option value='LICEUL TEOLOGIC BAPTIST "EMANUEL" CLUJ-NAPOCA'>LICEUL TEOLOGIC BAPTIST "EMANUEL" CLUJ-NAPOCA</option>
												<option value='LICEUL TEOLOGIC REFORMAT CLUJ-NAPOCA'>LICEUL TEOLOGIC REFORMAT CLUJ-NAPOCA</option>
												<option value='LICEUL TEORETIC "ALEXANDRU PAPIU ILARIAN" DEJ'>LICEUL TEORETIC "ALEXANDRU PAPIU ILARIAN" DEJ</option>
												<option value='LICEUL TEORETIC "ANA IPĂTESCU" GHERLA'>LICEUL TEORETIC "ANA IPĂTESCU" GHERLA</option>
												<option value='LICEUL TEORETIC "APACZAI CSERE JANOS" CLUJ-NAPOCA'>LICEUL TEORETIC "APACZAI CSERE JANOS" CLUJ-NAPOCA</option>
												<option value='LICEUL TEORETIC "AVRAM IANCU" CLUJ-NAPOCA'>LICEUL TEORETIC "AVRAM IANCU" CLUJ-NAPOCA</option>
												<option value='LICEUL TEORETIC "BATHORY ISTVAN" CLUJ-NAPOCA'>LICEUL TEORETIC "BATHORY ISTVAN" CLUJ-NAPOCA</option>
												<option value='LICEUL TEORETIC "BRASSAI SAMUEL" CLUJ-NAPOCA'>LICEUL TEORETIC "BRASSAI SAMUEL" CLUJ-NAPOCA</option>
												<option value='LICEUL TEORETIC "EUGEN PORA" CLUJ-NAPOCA'>LICEUL TEORETIC "EUGEN PORA" CLUJ-NAPOCA</option>
												<option value='LICEUL TEORETIC "GELU VOIEVOD" GILĂU'>LICEUL TEORETIC "GELU VOIEVOD" GILĂU</option>
												<option value='LICEUL TEORETIC "GHEORGHE ȘINCAI" CLUJ-NAPOCA'>LICEUL TEORETIC "GHEORGHE ȘINCAI" CLUJ-NAPOCA</option>
												<option value='LICEUL TEORETIC "JOSIKA MIKLOS" TURDA'>LICEUL TEORETIC "JOSIKA MIKLOS" TURDA</option>
												<option value='LICEUL TEORETIC "LIVIU REBREANU" TURDA'>LICEUL TEORETIC "LIVIU REBREANU" TURDA</option>
												<option value='LICEUL TEORETIC "LUCIAN BLAGA" CLUJ-NAPOCA'>LICEUL TEORETIC "LUCIAN BLAGA" CLUJ-NAPOCA</option>
												<option value='LICEUL TEORETIC "MIHAI EMINESCU" CLUJ-NAPOCA'>LICEUL TEORETIC "MIHAI EMINESCU" CLUJ-NAPOCA</option>
												<option value='LICEUL TEORETIC "NICOLAE BĂLCESCU" CLUJ-NAPOCA'>LICEUL TEORETIC "NICOLAE BĂLCESCU" CLUJ-NAPOCA</option>
												<option value='LICEUL TEORETIC "OCTAVIAN GOGA" HUEDIN'>LICEUL TEORETIC "OCTAVIAN GOGA" HUEDIN</option>
												<option value='LICEUL TEORETIC "ONISIFOR GHIBU" CLUJ-NAPOCA'>LICEUL TEORETIC "ONISIFOR GHIBU" CLUJ-NAPOCA</option>
												<option value='LICEUL TEORETIC "PAVEL DAN" CÂMPIA TURZII'>LICEUL TEORETIC "PAVEL DAN" CÂMPIA TURZII</option>
												<option value='LICEUL TEORETIC "PETRU MAIOR" GHERLA'>LICEUL TEORETIC "PETRU MAIOR" GHERLA</option>
												<option value='LICEUL TEORETIC "VICTOR BABEȘ" CLUJ-NAPOCA'>LICEUL TEORETIC "VICTOR BABEȘ" CLUJ-NAPOCA</option>
												<option value='LICEUL UNITARIAN "JANOS ZSIGMOND" CLUJ-NAPOCA'>LICEUL UNITARIAN "JANOS ZSIGMOND" CLUJ-NAPOCA</option>
												<option value='SEMINARUL TEOLOGIC ORTODOX CLUJ-NAPOCA'>SEMINARUL TEOLOGIC ORTODOX CLUJ-NAPOCA</option>
												<option value='CENTRUL ŞCOLAR DE EDUCAŢIE INCLUZIVĂ "ALBATROS" CONSTANŢA'>CENTRUL ŞCOLAR DE EDUCAŢIE INCLUZIVĂ "ALBATROS" CONSTANŢA</option>
												<option value='COLEGIUL "DOBROGEA" CASTELU'>COLEGIUL "DOBROGEA" CASTELU</option>
												<option value='COLEGIUL AGRICOL POARTA ALBĂ'>COLEGIUL AGRICOL POARTA ALBĂ</option>
												<option value='COLEGIUL COMERCIAL "CAROL I" CONSTANŢA'>COLEGIUL COMERCIAL "CAROL I" CONSTANŢA</option>
												<option value='COLEGIUL ECONOMIC MANGALIA'>COLEGIUL ECONOMIC MANGALIA</option>
												<option value='COLEGIUL NAŢIONAL "KEMAL ATATURK" MEDGIDIA'>COLEGIUL NAŢIONAL "KEMAL ATATURK" MEDGIDIA</option>
												<option value='COLEGIUL NAŢIONAL "MIHAI EMINESCU" CONSTANŢA'>COLEGIUL NAŢIONAL "MIHAI EMINESCU" CONSTANŢA</option>
												<option value='COLEGIUL NAŢIONAL "MIRCEA CEL BĂTRÂN" CONSTANŢA'>COLEGIUL NAŢIONAL "MIRCEA CEL BĂTRÂN" CONSTANŢA</option>
												<option value='COLEGIUL NAŢIONAL DE ARTE "REGINA MARIA" CONSTANŢA'>COLEGIUL NAŢIONAL DE ARTE "REGINA MARIA" CONSTANŢA</option>
												<option value='COLEGIUL NAŢIONAL PEDAGOGIC "CONSTANTIN BRĂTESCU" CONSTANŢA'>COLEGIUL NAŢIONAL PEDAGOGIC "CONSTANTIN BRĂTESCU" CONSTANŢA</option>
												<option value='COLEGIUL TEHNIC "NICOLAE TITULESCU" MEDGIDIA'>COLEGIUL TEHNIC "NICOLAE TITULESCU" MEDGIDIA</option>
												<option value='COLEGIUL TEHNIC "PONTICA" CONSTANŢA'>COLEGIUL TEHNIC "PONTICA" CONSTANŢA</option>
												<option value='COLEGIUL TEHNIC "TOMIS" CONSTANŢA'>COLEGIUL TEHNIC "TOMIS" CONSTANŢA</option>
												<option value='COLEGIUL TEHNIC "VASILE PÂRVAN" CONSTANŢA'>COLEGIUL TEHNIC "VASILE PÂRVAN" CONSTANŢA</option>
												<option value='COLEGIUL TEHNIC DE MARINĂ "ALEXANDRU IOAN CUZA" CONSTANŢA'>COLEGIUL TEHNIC DE MARINĂ "ALEXANDRU IOAN CUZA" CONSTANŢA</option>
												<option value='COLEGIUL TEHNIC ENERGETIC CONSTANŢA'>COLEGIUL TEHNIC ENERGETIC CONSTANŢA</option>
												<option value='LICEUL "REGELE CAROL I" OSTROV'>LICEUL "REGELE CAROL I" OSTROV</option>
												<option value='LICEUL COBADIN COBADIN'>LICEUL COBADIN COBADIN</option>
												<option value='LICEUL CU PROGRAM SPORTIV "NICOLAE ROTARU" CONSTANŢA'>LICEUL CU PROGRAM SPORTIV "NICOLAE ROTARU" CONSTANŢA</option>
												<option value='LICEUL TEHNOLOGIC "AXIOPOLIS" CERNAVODĂ'>LICEUL TEHNOLOGIC "AXIOPOLIS" CERNAVODĂ</option>
												<option value='LICEUL TEHNOLOGIC "C.A. ROSETTI" CONSTANŢA'>LICEUL TEHNOLOGIC "C.A. ROSETTI" CONSTANŢA</option>
												<option value='LICEUL TEHNOLOGIC "CARSIUM" HÂRŞOVA'>LICEUL TEHNOLOGIC "CARSIUM" HÂRŞOVA</option>
												<option value='LICEUL TEHNOLOGIC "DIMITRIE LEONIDA" CONSTANŢA'>LICEUL TEHNOLOGIC "DIMITRIE LEONIDA" CONSTANŢA</option>
												<option value='LICEUL TEHNOLOGIC "DRAGOMIR HURMUZESCU" MEDGIDIA'>LICEUL TEHNOLOGIC "DRAGOMIR HURMUZESCU" MEDGIDIA</option>
												<option value='LICEUL TEHNOLOGIC "GHEORGHE DUCA" CONSTANŢA'>LICEUL TEHNOLOGIC "GHEORGHE DUCA" CONSTANŢA</option>
												<option value='LICEUL TEHNOLOGIC "GHEORGHE MIRON COSTIN" CONSTANŢA'>LICEUL TEHNOLOGIC "GHEORGHE MIRON COSTIN" CONSTANŢA</option>
												<option value='LICEUL TEHNOLOGIC "IOAN N. ROMAN" CONSTANŢA'>LICEUL TEHNOLOGIC "IOAN N. ROMAN" CONSTANŢA</option>
												<option value='LICEUL TEHNOLOGIC "ION BĂNESCU" MANGALIA'>LICEUL TEHNOLOGIC "ION BĂNESCU" MANGALIA</option>
												<option value='LICEUL TEHNOLOGIC "ION PODARU" OVIDIU'>LICEUL TEHNOLOGIC "ION PODARU" OVIDIU</option>
												<option value='LICEUL TEHNOLOGIC "JEAN DINU" ADAMCLISI'>LICEUL TEHNOLOGIC "JEAN DINU" ADAMCLISI</option>
												<option value='LICEUL TEHNOLOGIC "LAZĂR EDELEANU" NĂVODARI'>LICEUL TEHNOLOGIC "LAZĂR EDELEANU" NĂVODARI</option>
												<option value='LICEUL TEHNOLOGIC "MIHAI VITEAZUL" MIHAI VITEAZU'>LICEUL TEHNOLOGIC "MIHAI VITEAZUL" MIHAI VITEAZU</option>
												<option value='LICEUL TEHNOLOGIC "NICOLAE DUMITRESCU" CUMPĂNA'>LICEUL TEHNOLOGIC "NICOLAE DUMITRESCU" CUMPĂNA</option>
												<option value='LICEUL TEHNOLOGIC "NICOLAE ISTRĂŢOIU" DELENI'>LICEUL TEHNOLOGIC "NICOLAE ISTRĂŢOIU" DELENI</option>
												<option value='LICEUL TEHNOLOGIC "VIRGIL MADGEARU" CONSTANŢA'>LICEUL TEHNOLOGIC "VIRGIL MADGEARU" CONSTANŢA</option>
												<option value='LICEUL TEHNOLOGIC COGEALAC COGEALAC'>LICEUL TEHNOLOGIC COGEALAC COGEALAC</option>
												<option value='LICEUL TEHNOLOGIC DE ELECTROTEHNICĂ ŞI TELECOMUNICAŢII CONSTANŢA'>LICEUL TEHNOLOGIC DE ELECTROTEHNICĂ ŞI TELECOMUNICAŢII CONSTANŢA</option>
												<option value='LICEUL TEHNOLOGIC INDEPENDENŢA CONSTANŢA'>LICEUL TEHNOLOGIC INDEPENDENŢA CONSTANŢA</option>
												<option value='LICEUL TEHNOLOGIC TOPRAISAR TOPRAISAR'>LICEUL TEHNOLOGIC TOPRAISAR TOPRAISAR</option>
												<option value='LICEUL TEORETIC "CALLATIS" MANGALIA'>LICEUL TEORETIC "CALLATIS" MANGALIA</option>
												<option value='LICEUL TEORETIC "CARMEN SYLVA" EFORIE'>LICEUL TEORETIC "CARMEN SYLVA" EFORIE</option>
												<option value='LICEUL TEORETIC "DECEBAL" CONSTANŢA'>LICEUL TEORETIC "DECEBAL" CONSTANŢA</option>
												<option value='LICEUL TEORETIC "EMIL RACOVIŢĂ" TECHIRGHIOL'>LICEUL TEORETIC "EMIL RACOVIŢĂ" TECHIRGHIOL</option>
												<option value='LICEUL TEORETIC "GEORGE CĂLINESCU" CONSTANŢA'>LICEUL TEORETIC "GEORGE CĂLINESCU" CONSTANŢA</option>
												<option value='LICEUL TEORETIC "GEORGE EMIL PALADE" CONSTANŢA'>LICEUL TEORETIC "GEORGE EMIL PALADE" CONSTANŢA</option>
												<option value='LICEUL TEORETIC "IOAN COTOVU" HÂRŞOVA'>LICEUL TEORETIC "IOAN COTOVU" HÂRŞOVA</option>
												<option value='LICEUL TEORETIC "LUCIAN BLAGA" CONSTANŢA'>LICEUL TEORETIC "LUCIAN BLAGA" CONSTANŢA</option>
												<option value='LICEUL TEORETIC "NICOLAE BĂLCESCU" MEDGIDIA'>LICEUL TEORETIC "NICOLAE BĂLCESCU" MEDGIDIA</option>
												<option value='LICEUL TEORETIC "OVIDIUS" CONSTANŢA'>LICEUL TEORETIC "OVIDIUS" CONSTANŢA</option>
												<option value='LICEUL TEORETIC "TRAIAN" CONSTANŢA'>LICEUL TEORETIC "TRAIAN" CONSTANŢA</option>
												<option value='LICEUL TEORETIC "ANGHEL SALIGNY" CERNAVODĂ'>LICEUL TEORETIC "ANGHEL SALIGNY" CERNAVODĂ</option>
												<option value='LICEUL TEORETIC BĂNEASA BĂNEASA'>LICEUL TEORETIC BĂNEASA BĂNEASA</option>
												<option value='LICEUL TEORETIC "MIHAIL KOGĂLNICEANU" MIHAIL KOGĂLNICEANU'>LICEUL TEORETIC "MIHAIL KOGĂLNICEANU" MIHAIL KOGĂLNICEANU</option>
												<option value='LICEUL TEORETIC MURFATLAR MURFATLAR'>LICEUL TEORETIC MURFATLAR MURFATLAR</option>
												<option value='LICEUL TEORETIC NEGRU VODĂ NEGRU VODĂ'>LICEUL TEORETIC NEGRU VODĂ NEGRU VODĂ</option>
												<option value='SEMINARUL TEOLOGIC ORTODOX "SFÂNTUL CUVIOS DIONISIE EXIGUUL" CONSTANŢA'>SEMINARUL TEOLOGIC ORTODOX "SFÂNTUL CUVIOS DIONISIE EXIGUUL" CONSTANŢA</option>
												<option value='Colegiul Național "Mihai Viteazul" Sfântu Gheorghe'>Colegiul Național "Mihai Viteazul" Sfântu Gheorghe</option>
												<option value='Colegiul Național "Székely Mikó" Sfântu Gheorghe'>Colegiul Național "Székely Mikó" Sfântu Gheorghe</option>
												<option value='Liceul "Kőrösi Csoma Sándor" Covasna'>Liceul "Kőrösi Csoma Sándor" Covasna</option>
												<option value='Liceul de Arte "Plugor Sándor" Sfântu Gheorghe'>Liceul de Arte "Plugor Sándor" Sfântu Gheorghe</option>
												<option value='Liceul Pedagogic "Bod Péter" Târgu Secuiesc'>Liceul Pedagogic "Bod Péter" Târgu Secuiesc</option>
												<option value='Liceul Tehnologic "Apor Péter" Târgu Secuiesc'>Liceul Tehnologic "Apor Péter" Târgu Secuiesc</option>
												<option value='Liceul Tehnologic "Baróti Szabó Dávid" Baraolt'>Liceul Tehnologic "Baróti Szabó Dávid" Baraolt</option>
												<option value='Liceul Tehnologic "Constantin Brâncuși" Sfântu Gheorghe'>Liceul Tehnologic "Constantin Brâncuși" Sfântu Gheorghe</option>
												<option value='Liceul Tehnologic "Gábor Áron" Târgu Secuiesc'>Liceul Tehnologic "Gábor Áron" Târgu Secuiesc</option>
												<option value='Liceul Tehnologic "Kós Károly" Sfântu Gheorghe'>Liceul Tehnologic "Kós Károly" Sfântu Gheorghe</option>
												<option value='Liceul Tehnologic "Nicolae Bălcescu" Întorsura Buzăului'>Liceul Tehnologic "Nicolae Bălcescu" Întorsura Buzăului</option>
												<option value='Liceul Tehnologic "Puskás Tivadar" Sfântu Gheorghe'>Liceul Tehnologic "Puskás Tivadar" Sfântu Gheorghe</option>
												<option value='Liceul Tehnologic Economic Administrativ "Berde Áron" Sfântu Gheorghe'>Liceul Tehnologic Economic Administrativ "Berde Áron" Sfântu Gheorghe</option>
												<option value='Liceul Teologic Reformat Sfântu Gheorghe'>Liceul Teologic Reformat Sfântu Gheorghe</option>
												<option value='Liceul Teologic Reformat Târgu Secuiesc'>Liceul Teologic Reformat Târgu Secuiesc</option>
												<option value='Liceul Teoretic "Mikes Kelemen" Sfântu Gheorghe'>Liceul Teoretic "Mikes Kelemen" Sfântu Gheorghe</option>
												<option value='Liceul Teoretic "Mircea Eliade" Întorsura Buzăului'>Liceul Teoretic "Mircea Eliade" Întorsura Buzăului</option>
												<option value='Liceul Teoretic "Nagy Mózes" Târgu Secuiesc'>Liceul Teoretic "Nagy Mózes" Târgu Secuiesc</option>
												<option value='COLEGIUL ECONOMIC "ION GHICA" TÂRGOVIȘTE'>COLEGIUL ECONOMIC "ION GHICA" TÂRGOVIȘTE</option>
												<option value='COLEGIUL NAȚIONAL "CONSTANTIN CANTACUZINO" TÂRGOVIȘTE'>COLEGIUL NAȚIONAL "CONSTANTIN CANTACUZINO" TÂRGOVIȘTE</option>
												<option value='COLEGIUL NAȚIONAL "CONSTANTIN CARABELLA" TÂRGOVIȘTE'>COLEGIUL NAȚIONAL "CONSTANTIN CARABELLA" TÂRGOVIȘTE</option>
												<option value='COLEGIUL NAȚIONAL "IENĂCHIȚĂ VĂCĂRESCU" TÂRGOVIȘTE'>COLEGIUL NAȚIONAL "IENĂCHIȚĂ VĂCĂRESCU" TÂRGOVIȘTE</option>
												<option value='COLEGIUL NAȚIONAL "ION LUCA CARAGIALE" MORENI'>COLEGIUL NAȚIONAL "ION LUCA CARAGIALE" MORENI</option>
												<option value='COLEGIUL NAȚIONAL "NICOLAE TITULESCU" PUCIOASA'>COLEGIUL NAȚIONAL "NICOLAE TITULESCU" PUCIOASA</option>
												<option value='COLEGIUL NAȚIONAL "VLADIMIR STREINU" GĂEȘTI'>COLEGIUL NAȚIONAL "VLADIMIR STREINU" GĂEȘTI</option>
												<option value='LICEUL "VOIEVODUL MIRCEA" TÂRGOVIȘTE'>LICEUL "VOIEVODUL MIRCEA" TÂRGOVIȘTE</option>
												<option value='LICEUL DE ARTE "BĂLAȘA DOAMNA" TÂRGOVIȘTE'>LICEUL DE ARTE "BĂLAȘA DOAMNA" TÂRGOVIȘTE</option>
												<option value='LICEUL TEHNOLOGIC "AUREL RAINU" FIENI'>LICEUL TEHNOLOGIC "AUREL RAINU" FIENI</option>
												<option value='LICEUL TEHNOLOGIC "CONSTANTIN BRÂNCOVEANU" TÂRGOVIȘTE'>LICEUL TEHNOLOGIC "CONSTANTIN BRÂNCOVEANU" TÂRGOVIȘTE</option>
												<option value='LICEUL TEHNOLOGIC "DR. C. ANGELESCU" GĂEȘTI'>LICEUL TEHNOLOGIC "DR. C. ANGELESCU" GĂEȘTI</option>
												<option value='LICEUL TEHNOLOGIC "GOGA IONESCU" TITU'>LICEUL TEHNOLOGIC "GOGA IONESCU" TITU</option>
												<option value='LICEUL TEHNOLOGIC "IORDACHE GOLESCU" GĂEȘTI'>LICEUL TEHNOLOGIC "IORDACHE GOLESCU" GĂEȘTI</option>
												<option value='LICEUL TEHNOLOGIC "NICOLAE CIORĂNESCU" TÂRGOVIȘTE'>LICEUL TEHNOLOGIC "NICOLAE CIORĂNESCU" TÂRGOVIȘTE</option>
												<option value='LICEUL TEHNOLOGIC "NICOLAE MIHĂESCU" TÂRGOVIȘTE'>LICEUL TEHNOLOGIC "NICOLAE MIHĂESCU" TÂRGOVIȘTE</option>
												<option value='LICEUL TEHNOLOGIC "SPIRU HARET" TÂRGOVIȘTE'>LICEUL TEHNOLOGIC "SPIRU HARET" TÂRGOVIȘTE</option>
												<option value='LICEUL TEHNOLOGIC "UDREA BĂLEANU" BĂLENI'>LICEUL TEHNOLOGIC "UDREA BĂLEANU" BĂLENI</option>
												<option value='LICEUL TEHNOLOGIC DE TRANSPORTURI AUTO TÂRGOVIȘTE'>LICEUL TEHNOLOGIC DE TRANSPORTURI AUTO TÂRGOVIȘTE</option>
												<option value='LICEUL TEHNOLOGIC NUCET'>LICEUL TEHNOLOGIC NUCET</option>
												<option value='LICEUL TEHNOLOGIC PETROL MORENI'>LICEUL TEHNOLOGIC PETROL MORENI</option>
												<option value='LICEUL TEHNOLOGIC PUCIOASA'>LICEUL TEHNOLOGIC PUCIOASA</option>
												<option value='LICEUL TEHNOLOGIC TĂRTĂȘEȘTI'>LICEUL TEHNOLOGIC TĂRTĂȘEȘTI</option>
												<option value='LICEUL TEHNOLOGIC VOINEȘTI'>LICEUL TEHNOLOGIC VOINEȘTI</option>
												<option value='LICEUL TEORETIC "IANCU C VISSARION" TITU'>LICEUL TEORETIC "IANCU C VISSARION" TITU</option>
												<option value='LICEUL TEORETIC "ION GHICA" RĂCARI'>LICEUL TEORETIC "ION GHICA" RĂCARI</option>
												<option value='LICEUL TEORETIC "ION HELIADE RĂDULESCU" TÂRGOVIȘTE'>LICEUL TEORETIC "ION HELIADE RĂDULESCU" TÂRGOVIȘTE</option>
												<option value='LICEUL TEORETIC "MIHAI VITEAZUL" VIȘINA'>LICEUL TEORETIC "MIHAI VITEAZUL" VIȘINA</option>
												<option value='LICEUL TEORETIC "PETRU CERCEL" TÂRGOVIȘTE'>LICEUL TEORETIC "PETRU CERCEL" TÂRGOVIȘTE</option>
												<option value='SEMINARUL TEOLOGIC ORTODOX "SF. IOAN GURĂ DE AUR" TÂRGOVIȘTE'>SEMINARUL TEOLOGIC ORTODOX "SF. IOAN GURĂ DE AUR" TÂRGOVIȘTE</option>
												<option value='COLEGIUL "ȘTEFAN ODOBLEJA" CRAIOVA'>COLEGIUL "ȘTEFAN ODOBLEJA" CRAIOVA</option>
												<option value='COLEGIUL NAȚIONAL "CAROL I" CRAIOVA'>COLEGIUL NAȚIONAL "CAROL I" CRAIOVA</option>
												<option value='COLEGIUL NAȚIONAL "ELENA CUZA" CRAIOVA'>COLEGIUL NAȚIONAL "ELENA CUZA" CRAIOVA</option>
												<option value='COLEGIUL NAȚIONAL "FRAȚII BUZEȘTI" CRAIOVA'>COLEGIUL NAȚIONAL "FRAȚII BUZEȘTI" CRAIOVA</option>
												<option value='COLEGIUL NAȚIONAL "NICOLAE TITULESCU" CRAIOVA'>COLEGIUL NAȚIONAL "NICOLAE TITULESCU" CRAIOVA</option>
												<option value='COLEGIUL NAȚIONAL ECONOMIC "GHEORGHE CHIȚU" CRAIOVA'>COLEGIUL NAȚIONAL ECONOMIC "GHEORGHE CHIȚU" CRAIOVA</option>
												<option value='COLEGIUL NAȚIONAL PEDAGOGIC "ȘTEFAN VELOVAN" CRAIOVA'>COLEGIUL NAȚIONAL PEDAGOGIC "ȘTEFAN VELOVAN" CRAIOVA</option>
												<option value='COLEGIUL TEHNIC "COSTIN D. NENIȚESCU" CRAIOVA'>COLEGIUL TEHNIC "COSTIN D. NENIȚESCU" CRAIOVA</option>
												<option value='COLEGIUL TEHNIC "ȘTEFAN MILCU" CALAFAT'>COLEGIUL TEHNIC "ȘTEFAN MILCU" CALAFAT</option>
												<option value='COLEGIUL TEHNIC DE ARTE ȘI MESERII "CONSTANTIN BRÂNCUȘI" CRAIOVA'>COLEGIUL TEHNIC DE ARTE ȘI MESERII "CONSTANTIN BRÂNCUȘI" CRAIOVA</option>
												<option value='COLEGIUL TEHNIC DE INDUSTRIE ALIMENTARĂ CRAIOVA'>COLEGIUL TEHNIC DE INDUSTRIE ALIMENTARĂ CRAIOVA</option>
												<option value='COLEGIUL TEHNIC ENERGETIC CRAIOVA'>COLEGIUL TEHNIC ENERGETIC CRAIOVA</option>
												<option value='LICEUL "CHARLES LAUGIER" CRAIOVA'>LICEUL "CHARLES LAUGIER" CRAIOVA</option>
												<option value='LICEUL "MATEI BASARAB" CRAIOVA'>LICEUL "MATEI BASARAB" CRAIOVA</option>
												<option value='LICEUL "TRAIAN VUIA" CRAIOVA'>LICEUL "TRAIAN VUIA" CRAIOVA</option>
												<option value='LICEUL CU PROGRAM SPORTIV "PETRACHE TRIȘCU" CRAIOVA'>LICEUL CU PROGRAM SPORTIV "PETRACHE TRIȘCU" CRAIOVA</option>
												<option value='LICEUL DE ARTE "MARIN SORESCU" CRAIOVA'>LICEUL DE ARTE "MARIN SORESCU" CRAIOVA</option>
												<option value='LICEUL TEHNOLOGIC "ALEXANDRU MACEDONSKI" MELINEȘTI'>LICEUL TEHNOLOGIC "ALEXANDRU MACEDONSKI" MELINEȘTI</option>
												<option value='LICEUL TEHNOLOGIC "CONSTANTIN NICOLĂESCU-PLOPȘOR" PLENIȚA'>LICEUL TEHNOLOGIC "CONSTANTIN NICOLĂESCU-PLOPȘOR" PLENIȚA</option>
												<option value='LICEUL TEHNOLOGIC "DIMITRIE FILIȘANU" FILIAȘI'>LICEUL TEHNOLOGIC "DIMITRIE FILIȘANU" FILIAȘI</option>
												<option value='LICEUL TEHNOLOGIC "GEORGE BIBESCU" CRAIOVA'>LICEUL TEHNOLOGIC "GEORGE BIBESCU" CRAIOVA</option>
												<option value='LICEUL TEHNOLOGIC "HORIA VINTILĂ" SEGARCEA'>LICEUL TEHNOLOGIC "HORIA VINTILĂ" SEGARCEA</option>
												<option value='LICEUL TEHNOLOGIC "PETRE BANIȚĂ" CĂLĂRAȘI'>LICEUL TEHNOLOGIC "PETRE BANIȚĂ" CĂLĂRAȘI</option>
												<option value='LICEUL TEHNOLOGIC "ȘTEFAN ANGHEL" BĂILEȘTI'>LICEUL TEHNOLOGIC "ȘTEFAN ANGHEL" BĂILEȘTI</option>
												<option value='LICEUL TEHNOLOGIC AUTO CRAIOVA'>LICEUL TEHNOLOGIC AUTO CRAIOVA</option>
												<option value='LICEUL TEHNOLOGIC DE TRANSPORTURI AUTO CRAIOVA'>LICEUL TEHNOLOGIC DE TRANSPORTURI AUTO CRAIOVA</option>
												<option value='LICEUL TEHNOLOGIC TRANSPORTURI CĂI FERATE CRAIOVA'>LICEUL TEHNOLOGIC TRANSPORTURI CĂI FERATE CRAIOVA</option>
												<option value='LICEUL TEOLOGIC ADVENTIST CRAIOVA'>LICEUL TEOLOGIC ADVENTIST CRAIOVA</option>
												<option value='LICEUL TEORETIC "ADRIAN PĂUNESCU" BÂRCA'>LICEUL TEORETIC "ADRIAN PĂUNESCU" BÂRCA</option>
												<option value='LICEUL TEORETIC "CONSTANTIN BRÂNCOVEANU" DĂBULENI'>LICEUL TEORETIC "CONSTANTIN BRÂNCOVEANU" DĂBULENI</option>
												<option value='LICEUL TEORETIC "GEORGE ST. MARINCU" POIANA MARE'>LICEUL TEORETIC "GEORGE ST. MARINCU" POIANA MARE</option>
												<option value='LICEUL TEORETIC "GH. VASILICHI" CETATE'>LICEUL TEORETIC "GH. VASILICHI" CETATE</option>
												<option value='LICEUL TEORETIC "HENRI COANDĂ" CRAIOVA'>LICEUL TEORETIC "HENRI COANDĂ" CRAIOVA</option>
												<option value='LICEUL TEORETIC "INDEPENDENȚA" CALAFAT'>LICEUL TEORETIC "INDEPENDENȚA" CALAFAT</option>
												<option value='LICEUL TEORETIC "MIHAI VITEAZUL" BĂILEȘTI'>LICEUL TEORETIC "MIHAI VITEAZUL" BĂILEȘTI</option>
												<option value='LICEUL TEORETIC "TUDOR ARGHEZI" CRAIOVA'>LICEUL TEORETIC "TUDOR ARGHEZI" CRAIOVA</option>
												<option value='LICEUL TEORETIC AMĂRĂȘTII DE JOS AMĂRĂȘTII DE JOS'>LICEUL TEORETIC AMĂRĂȘTII DE JOS AMĂRĂȘTII DE JOS</option>
												<option value='LICEUL TEORETIC BECHET BECHET'>LICEUL TEORETIC BECHET BECHET</option>
												<option value='LICEUL "VOLTAIRE" CRAIOVA'>LICEUL "VOLTAIRE" CRAIOVA</option>
												<option value='SEMINARUL TEOLOGIC ORTODOX "SFÂNTUL GRIGORIE TEOLOGUL" CRAIOVA'>SEMINARUL TEOLOGIC ORTODOX "SFÂNTUL GRIGORIE TEOLOGUL" CRAIOVA</option>
												<option value='COLEGIUL DE INDUSTRIE ALIMENTARĂ "ELENA DOAMNA" GALAȚI'>COLEGIUL DE INDUSTRIE ALIMENTARĂ "ELENA DOAMNA" GALAȚI</option>
												<option value='COLEGIUL ECONOMIC "VIRGIL MADGEARU" GALAȚI'>COLEGIUL ECONOMIC "VIRGIL MADGEARU" GALAȚI</option>
												<option value='COLEGIUL NATIONAL "ALEXANDRU IOAN CUZA" GALAȚI'>COLEGIUL NATIONAL "ALEXANDRU IOAN CUZA" GALAȚI</option>
												<option value='COLEGIUL NATIONAL "CALISTRAT HOGAȘ" TECUCI'>COLEGIUL NATIONAL "CALISTRAT HOGAȘ" TECUCI</option>
												<option value='COLEGIUL NATIONAL "COSTACHE NEGRI" GALAȚI'>COLEGIUL NATIONAL "COSTACHE NEGRI" GALAȚI</option>
												<option value='COLEGIUL NATIONAL "MIHAIL KOGĂLNICEANU" GALAȚI'>COLEGIUL NATIONAL "MIHAIL KOGĂLNICEANU" GALAȚI</option>
												<option value='COLEGIUL NATIONAL "SPIRU HARET" TECUCI'>COLEGIUL NATIONAL "SPIRU HARET" TECUCI</option>
												<option value='COLEGIUL NATIONAL "VASILE ALECSANDRI" GALAȚI'>COLEGIUL NATIONAL "VASILE ALECSANDRI" GALAȚI</option>
												<option value='COLEGIUL NATIONAL DE AGRICULTURĂ ȘI ECONOMIE TECUCI'>COLEGIUL NATIONAL DE AGRICULTURĂ ȘI ECONOMIE TECUCI</option>
												<option value='COLEGIUL TEHNIC "AUREL VLAICU" GALAȚI'>COLEGIUL TEHNIC "AUREL VLAICU" GALAȚI</option>
												<option value='COLEGIUL TEHNIC "PAUL DIMO" GALAȚI'>COLEGIUL TEHNIC "PAUL DIMO" GALAȚI</option>
												<option value='COLEGIUL TEHNIC "RADU NEGRU" GALAȚI'>COLEGIUL TEHNIC "RADU NEGRU" GALAȚI</option>
												<option value='COLEGIUL TEHNIC "TRAIAN VUIA" GALAȚI'>COLEGIUL TEHNIC "TRAIAN VUIA" GALAȚI</option>
												<option value='COLEGIUL TEHNIC DE ALIMENTAȚIE ȘI TURISM "DUMITRU MOȚOC" GALAȚI'>COLEGIUL TEHNIC DE ALIMENTAȚIE ȘI TURISM "DUMITRU MOȚOC" GALAȚI</option>
												<option value='LICEUL CU PROGRAM SPORTIV GALAȚI'>LICEUL CU PROGRAM SPORTIV GALAȚI</option>
												<option value='LICEUL DE ARTE "DIMITRIE CUCLIN" GALAȚI'>LICEUL DE ARTE "DIMITRIE CUCLIN" GALAȚI</option>
												<option value='LICEUL TEHNOLOGIC "ANGHEL SALIGNY" GALAȚI'>LICEUL TEHNOLOGIC "ANGHEL SALIGNY" GALAȚI</option>
												<option value='LICEUL TEHNOLOGIC "COSTACHE CONACHI" PECHEA'>LICEUL TEHNOLOGIC "COSTACHE CONACHI" PECHEA</option>
												<option value='LICEUL TEHNOLOGIC "ELENA CARAGIANI" TECUCI'>LICEUL TEHNOLOGIC "ELENA CARAGIANI" TECUCI</option>
												<option value='LICEUL TEHNOLOGIC "EREMIA GRIGORESCU" TÂRGU BUJOR'>LICEUL TEHNOLOGIC "EREMIA GRIGORESCU" TÂRGU BUJOR</option>
												<option value='LICEUL TEHNOLOGIC "OVID CALEDONIU" TECUCI'>LICEUL TEHNOLOGIC "OVID CALEDONIU" TECUCI</option>
												<option value='LICEUL TEHNOLOGIC "PAUL BUJOR" BEREȘTI'>LICEUL TEHNOLOGIC "PAUL BUJOR" BEREȘTI</option>
												<option value='LICEUL TEHNOLOGIC "TUDOR VLADIMIRESCU" TUDOR VLADIMIRESCU'>LICEUL TEHNOLOGIC "TUDOR VLADIMIRESCU" TUDOR VLADIMIRESCU</option>
												<option value='LICEUL TEHNOLOGIC DE MARINĂ GALAȚI'>LICEUL TEHNOLOGIC DE MARINĂ GALAȚI</option>
												<option value='LICEUL TEHNOLOGIC NR. 1 COROD'>LICEUL TEHNOLOGIC NR. 1 COROD</option>
												<option value='LICEUL TEHNOLOGIC NR. 1 CUDALBI'>LICEUL TEHNOLOGIC NR. 1 CUDALBI</option>
												<option value='LICEUL TEHNOLOGIC TRANSPORTURI CĂI FERATE GALAȚI'>LICEUL TEHNOLOGIC TRANSPORTURI CĂI FERATE GALAȚI</option>
												<option value='LICEUL TEORETIC "DUNĂREA" GALAȚI'>LICEUL TEORETIC "DUNĂREA" GALAȚI</option>
												<option value='LICEUL TEORETIC "EMIL RACOVIȚĂ" GALAȚI'>LICEUL TEORETIC "EMIL RACOVIȚĂ" GALAȚI</option>
												<option value='LICEUL TEORETIC "MIRCEA ELIADE" GALAȚI'>LICEUL TEORETIC "MIRCEA ELIADE" GALAȚI</option>
												<option value='LICEUL TEORETIC "SFÂNTA MARIA" GALAȚI'>LICEUL TEORETIC "SFÂNTA MARIA" GALAȚI</option>
												<option value='SEMINARUL TEOLOGIC ORTODOX "SF. ANDREI" GALAȚI'>SEMINARUL TEOLOGIC ORTODOX "SF. ANDREI" GALAȚI</option>
												<option value='COLEGIUL NAȚIONAL "ION MAIORESCU" GIURGIU'>COLEGIUL NAȚIONAL "ION MAIORESCU" GIURGIU</option>
												<option value='COLEGIUL TEHNIC "VICEAMIRAL IOAN BĂLĂNESCU" GIURGIU'>COLEGIUL TEHNIC "VICEAMIRAL IOAN BĂLĂNESCU" GIURGIU</option>
												<option value='LICEUL "UDRISTE NASTUREL" HOTARELE'>LICEUL "UDRISTE NASTUREL" HOTARELE</option>
												<option value='LICEUL TEHNOLOGIC "MIHAI VITEAZUL" CĂLUGĂRENI'>LICEUL TEHNOLOGIC "MIHAI VITEAZUL" CĂLUGĂRENI</option>
												<option value='LICEUL TEHNOLOGIC "MIRON NICOLESCU" GIURGIU'>LICEUL TEHNOLOGIC "MIRON NICOLESCU" GIURGIU</option>
												<option value='LICEUL TEHNOLOGIC "TIU DUMITRESCU" MIHĂILEȘTI'>LICEUL TEHNOLOGIC "TIU DUMITRESCU" MIHĂILEȘTI</option>
												<option value='LICEUL TEHNOLOGIC "DIMITRIE BOLINTINEANU" GIURGIU'>LICEUL TEHNOLOGIC "DIMITRIE BOLINTINEANU" GIURGIU</option>
												<option value='LICEUL TEHNOLOGIC "ION BARBU" GIURGIU'>LICEUL TEHNOLOGIC "ION BARBU" GIURGIU</option>
												<option value='LICEUL TEHNOLOGIC GIURGIU'>LICEUL TEHNOLOGIC GIURGIU</option>
												<option value='LICEUL TEHNOLOGIC NR.1 COMANA'>LICEUL TEHNOLOGIC NR.1 COMANA</option>
												<option value='LICEUL TEHNOLOGIC NR.1 PRUNDU'>LICEUL TEHNOLOGIC NR.1 PRUNDU</option>
												<option value='LICEUL TEORETIC "NICOLAE CARTOJAN" GIURGIU'>LICEUL TEORETIC "NICOLAE CARTOJAN" GIURGIU</option>
												<option value='LICEUL TEORETIC "TUDOR VIANU" GIURGIU'>LICEUL TEORETIC "TUDOR VIANU" GIURGIU</option>
												<option value='SEMINARUL TEOLOGIC "TEOCTIST PATRIARHUL" GIURGIU'>SEMINARUL TEOLOGIC "TEOCTIST PATRIARHUL" GIURGIU</option>
												<option value='COLEGIUL "GHEORGHE TĂTĂRESCU" ROVINARI'>COLEGIUL "GHEORGHE TĂTĂRESCU" ROVINARI</option>
												<option value='COLEGIUL "MIHAI VITEAZUL" BUMBEȘTI-JIU'>COLEGIUL "MIHAI VITEAZUL" BUMBEȘTI-JIU</option>
												<option value='COLEGIUL AUTO "TRAIAN VUIA" TÂRGU JIU'>COLEGIUL AUTO "TRAIAN VUIA" TÂRGU JIU</option>
												<option value='COLEGIUL ECONOMIC "VIRGIL MADGEARU" TÂRGU JIU'>COLEGIUL ECONOMIC "VIRGIL MADGEARU" TÂRGU JIU</option>
												<option value='COLEGIUL NATIONAL "ECATERINA TEODOROIU" TÂRGU JIU'>COLEGIUL NATIONAL "ECATERINA TEODOROIU" TÂRGU JIU</option>
												<option value='COLEGIUL NATIONAL "GEORGE COȘBUC" MOTRU'>COLEGIUL NATIONAL "GEORGE COȘBUC" MOTRU</option>
												<option value='COLEGIUL NATIONAL "SPIRU HARET" TÂRGU JIU'>COLEGIUL NATIONAL "SPIRU HARET" TÂRGU JIU</option>
												<option value='COLEGIUL NATIONAL "TUDOR ARGHEZI" TÂRGU CĂRBUNEȘTI'>COLEGIUL NATIONAL "TUDOR ARGHEZI" TÂRGU CĂRBUNEȘTI</option>
												<option value='COLEGIUL NATIONAL "TUDOR VLADIMIRESCU" TÂRGU JIU'>COLEGIUL NATIONAL "TUDOR VLADIMIRESCU" TÂRGU JIU</option>
												<option value='COLEGIUL TEHNIC "GENERAL GHEORGHE MAGHERU" TÂRGU JIU'>COLEGIUL TEHNIC "GENERAL GHEORGHE MAGHERU" TÂRGU JIU</option>
												<option value='COLEGIUL TEHNIC "HENRI COANDA" TÂRGU JIU'>COLEGIUL TEHNIC "HENRI COANDA" TÂRGU JIU</option>
												<option value='COLEGIUL TEHNIC "ION MINCU" TÂRGU JIU'>COLEGIUL TEHNIC "ION MINCU" TÂRGU JIU</option>
												<option value='COLEGIUL TEHNIC MĂTĂSĂRI MĂTĂSĂRI'>COLEGIUL TEHNIC MĂTĂSĂRI MĂTĂSĂRI</option>
												<option value='COLEGIUL TEHNIC MOTRU MOTRU'>COLEGIUL TEHNIC MOTRU MOTRU</option>
												<option value='COLEGIUL TEHNIC NR 2 TÂRGU JIU'>COLEGIUL TEHNIC NR 2 TÂRGU JIU</option>
												<option value='LICEUL CU PROGRAM SPORTIV TÂRGU JIU'>LICEUL CU PROGRAM SPORTIV TÂRGU JIU</option>
												<option value='LICEUL DE ARTE "CONSTANTIN BRAILOIU" TÂRGU JIU'>LICEUL DE ARTE "CONSTANTIN BRAILOIU" TÂRGU JIU</option>
												<option value='LICEUL ENERGETIC TÂRGU JIU'>LICEUL ENERGETIC TÂRGU JIU</option>
												<option value='LICEUL TEHNOLOGIC "CONSTANTIN BRANCUSI" PEȘTIȘANI'>LICEUL TEHNOLOGIC "CONSTANTIN BRANCUSI" PEȘTIȘANI</option>
												<option value='LICEUL TEHNOLOGIC "GENERAL CONSTANTIN SANDRU" BÂLTA'>LICEUL TEHNOLOGIC "GENERAL CONSTANTIN SANDRU" BÂLTA</option>
												<option value='LICEUL TEHNOLOGIC BAIA DE FIER BAIA DE FIER'>LICEUL TEHNOLOGIC BAIA DE FIER BAIA DE FIER</option>
												<option value='LICEUL TEHNOLOGIC BÂLTENI BÂLTENI'>LICEUL TEHNOLOGIC BÂLTENI BÂLTENI</option>
												<option value='LICEUL TEHNOLOGIC BÂRSEȘTI BÂRSEȘTI'>LICEUL TEHNOLOGIC BÂRSEȘTI BÂRSEȘTI</option>
												<option value='LICEUL TEHNOLOGIC BUSTUCHIN BUSTUCHIN'>LICEUL TEHNOLOGIC BUSTUCHIN BUSTUCHIN</option>
												<option value='LICEUL TEHNOLOGIC ROȘIA DE AMARADIA ROȘIA DE AMARADIA'>LICEUL TEHNOLOGIC ROȘIA DE AMARADIA ROȘIA DE AMARADIA</option>
												<option value='LICEUL TEHNOLOGIC ROȘIA-JIU ROȘIA-JIU'>LICEUL TEHNOLOGIC ROȘIA-JIU ROȘIA-JIU</option>
												<option value='LICEUL TEHNOLOGIC STOINA STOINA'>LICEUL TEHNOLOGIC STOINA STOINA</option>
												<option value='LICEUL TEHNOLOGIC ȚICLENI ȚICLENI'>LICEUL TEHNOLOGIC ȚICLENI ȚICLENI</option>
												<option value='LICEUL TEHNOLOGIC TISMANA TISMANA'>LICEUL TEHNOLOGIC TISMANA TISMANA</option>
												<option value='LICEUL TEHNOLOGIC TURCENI TURCENI'>LICEUL TEHNOLOGIC TURCENI TURCENI</option>
												<option value='LICEUL TEOLOGIC TÂRGU JIU TÂRGU JIU'>LICEUL TEOLOGIC TÂRGU JIU TÂRGU JIU</option>
												<option value='LICEUL TEORETIC NOVACI NOVACI'>LICEUL TEORETIC NOVACI NOVACI</option>
												<option value='COLEGIUL NAȚIONAL "MÁRTON ÁRON" MIERCUREA CIUC'>COLEGIUL NAȚIONAL "MÁRTON ÁRON" MIERCUREA CIUC</option>
												<option value='COLEGIUL NAȚIONAL "MIHAI EMINESCU" TOPLIŢA'>COLEGIUL NAȚIONAL "MIHAI EMINESCU" TOPLIŢA</option>
												<option value='COLEGIUL NAŢIONAL "OCTAVIAN GOGA" MIERCUREA CIUC'>COLEGIUL NAŢIONAL "OCTAVIAN GOGA" MIERCUREA CIUC</option>
												<option value='COLEGIUL REFORMAT "BACZKAMADARASI KIS GERGELY" ODORHEIU SECUIESC'>COLEGIUL REFORMAT "BACZKAMADARASI KIS GERGELY" ODORHEIU SECUIESC</option>
												<option value='COLEGIUL TEHNIC "BÁNYAI JÁNOS" ODORHEIU SECUIESC'>COLEGIUL TEHNIC "BÁNYAI JÁNOS" ODORHEIU SECUIESC</option>
												<option value='COLEGIUL TEHNIC "BATTHYÁNY IGNÁC" GHEORGHENI'>COLEGIUL TEHNIC "BATTHYÁNY IGNÁC" GHEORGHENI</option>
												<option value='LICEUL "MARIN PREDA" ODORHEIU SECUIESC'>LICEUL "MARIN PREDA" ODORHEIU SECUIESC</option>
												<option value='LICEUL "MIRON CRISTEA" SUBCETATE'>LICEUL "MIRON CRISTEA" SUBCETATE</option>
												<option value='LICEUL DE ARTE "DR.PALLÓ IMRE" ODORHEIU SECUIESC'>LICEUL DE ARTE "DR.PALLÓ IMRE" ODORHEIU SECUIESC</option>
												<option value='LICEUL DE ARTE "NAGY ISTVÁN" MIERCUREA CIUC'>LICEUL DE ARTE "NAGY ISTVÁN" MIERCUREA CIUC</option>
												<option value='LICEUL PEDAGOGIC "BENEDEK ELEK" ODORHEIU SECUIESC'>LICEUL PEDAGOGIC "BENEDEK ELEK" ODORHEIU SECUIESC</option>
												<option value='LICEUL TEHNOLOGIC "EÖTVÖS JÓZSEF" ODORHEIU SECUIESC'>LICEUL TEHNOLOGIC "EÖTVÖS JÓZSEF" ODORHEIU SECUIESC</option>
												<option value='LICEUL TEHNOLOGIC "FOGARASY MIHÁLY" GHEORGHENI'>LICEUL TEHNOLOGIC "FOGARASY MIHÁLY" GHEORGHENI</option>
												<option value='LICEUL TEHNOLOGIC "GÁBOR ÁRON" VLĂHIȚA'>LICEUL TEHNOLOGIC "GÁBOR ÁRON" VLĂHIȚA</option>
												<option value='LICEUL TEHNOLOGIC "JOANNES KÁJONI" MIERCUREA CIUC'>LICEUL TEHNOLOGIC "JOANNES KÁJONI" MIERCUREA CIUC</option>
												<option value='LICEUL TEHNOLOGIC "KÓS KÁROLY" MIERCUREA CIUC'>LICEUL TEHNOLOGIC "KÓS KÁROLY" MIERCUREA CIUC</option>
												<option value='LICEUL TEHNOLOGIC "KÓS KÁROLY" ODORHEIU SECUIESC'>LICEUL TEHNOLOGIC "KÓS KÁROLY" ODORHEIU SECUIESC</option>
												<option value='LICEUL TEHNOLOGIC "LIVIU REBREANU" BĂLAN'>LICEUL TEHNOLOGIC "LIVIU REBREANU" BĂLAN</option>
												<option value='LICEUL TEHNOLOGIC "PETŐFI SÁNDOR" DĂNEŞTI'>LICEUL TEHNOLOGIC "PETŐFI SÁNDOR" DĂNEŞTI</option>
												<option value='LICEUL TEHNOLOGIC "PUSKÁS TIVADAR" DITRĂU'>LICEUL TEHNOLOGIC "PUSKÁS TIVADAR" DITRĂU</option>
												<option value='LICEUL TEHNOLOGIC "SÖVÉR ELEK" JOSENI'>LICEUL TEHNOLOGIC "SÖVÉR ELEK" JOSENI</option>
												<option value='LICEUL TEHNOLOGIC "SZÉKELY KÁROLY" MIERCUREA CIUC'>LICEUL TEHNOLOGIC "SZÉKELY KÁROLY" MIERCUREA CIUC</option>
												<option value='LICEUL TEHNOLOGIC "TIVAI NAGY IMRE" SÂNMARTIN'>LICEUL TEHNOLOGIC "TIVAI NAGY IMRE" SÂNMARTIN</option>
												<option value='LICEUL TEHNOLOGIC "VENCZEL JÓZSEF" MIERCUREA CIUC'>LICEUL TEHNOLOGIC "VENCZEL JÓZSEF" MIERCUREA CIUC</option>
												<option value='LICEUL TEHNOLOGIC "ZEYK DOMOKOS" CRISTURU SECUIESC'>LICEUL TEHNOLOGIC "ZEYK DOMOKOS" CRISTURU SECUIESC</option>
												<option value='LICEUL TEHNOLOGIC "ZIMMETHAUSEN" BORSEC'>LICEUL TEHNOLOGIC "ZIMMETHAUSEN" BORSEC</option>
												<option value='LICEUL TEHNOLOGIC CORBU CORBU'>LICEUL TEHNOLOGIC CORBU CORBU</option>
												<option value='LICEUL TEHNOLOGIC CORUND CORUND'>LICEUL TEHNOLOGIC CORUND CORUND</option>
												<option value='LICEUL TEOLOGIC ROMANO-CATOLIC "SEGITŐ MÁRIA" MIERCUREA CIUC'>LICEUL TEOLOGIC ROMANO-CATOLIC "SEGITŐ MÁRIA" MIERCUREA CIUC</option>
												<option value='LICEUL TEOLOGIC ROMANO-CATOLIC "SZENT ERZSÉBET" LUNCA DE SUS'>LICEUL TEOLOGIC ROMANO-CATOLIC "SZENT ERZSÉBET" LUNCA DE SUS</option>
												<option value='LICEUL TEOLOGIC UNITARIAN "BERDE MÓZES" CRISTURU SECUIESC'>LICEUL TEOLOGIC UNITARIAN "BERDE MÓZES" CRISTURU SECUIESC</option>
												<option value='LICEUL TEORETIC "DR.P. BOROS FORTUNAT" ZETEA'>LICEUL TEORETIC "DR.P. BOROS FORTUNAT" ZETEA</option>
												<option value='LICEUL TEORETIC "KEMÉNY JÁNOS" TOPLIŢA'>LICEUL TEORETIC "KEMÉNY JÁNOS" TOPLIŢA</option>
												<option value='LICEUL TEORETIC "O.C.TĂSLĂUANU" TOPLIŢA'>LICEUL TEORETIC "O.C.TĂSLĂUANU" TOPLIŢA</option>
												<option value='LICEUL TEORETIC "ORBÁN BALÁZS" CRISTURU SECUIESC'>LICEUL TEORETIC "ORBÁN BALÁZS" CRISTURU SECUIESC</option>
												<option value='LICEUL TEORETIC "SALAMON ERNŐ" GHEORGHENI'>LICEUL TEORETIC "SALAMON ERNŐ" GHEORGHENI</option>
												<option value='LICEUL TEORETIC "SFÂNTU NICOLAE" GHEORGHENI'>LICEUL TEORETIC "SFÂNTU NICOLAE" GHEORGHENI</option>
												<option value='LICEUL TEORETIC "TAMÁSI ÁRON" ODORHEIU SECUIESC'>LICEUL TEORETIC "TAMÁSI ÁRON" ODORHEIU SECUIESC</option>
												<option value='COLEGIUL ECONOMIC "EMANUIL GOJDU" HUNEDOARA'>COLEGIUL ECONOMIC "EMANUIL GOJDU" HUNEDOARA</option>
												<option value='COLEGIUL ECONOMIC "HERMES" PETROȘANI'>COLEGIUL ECONOMIC "HERMES" PETROȘANI</option>
												<option value='COLEGIUL NAȚIONAL "AUREL VLAICU" ORĂȘTIE'>COLEGIUL NAȚIONAL "AUREL VLAICU" ORĂȘTIE</option>
												<option value='COLEGIUL NAȚIONAL "AVRAM IANCU" BRAD'>COLEGIUL NAȚIONAL "AVRAM IANCU" BRAD</option>
												<option value='COLEGIUL NAȚIONAL "DECEBAL" DEVA'>COLEGIUL NAȚIONAL "DECEBAL" DEVA</option>
												<option value='COLEGIUL NAȚIONAL "IANCU DE HUNEDOARA" HUNEDOARA'>COLEGIUL NAȚIONAL "IANCU DE HUNEDOARA" HUNEDOARA</option>
												<option value='COLEGIUL NAȚIONAL "ION CONSTANTIN BRĂTIANU" HAȚEG'>COLEGIUL NAȚIONAL "ION CONSTANTIN BRĂTIANU" HAȚEG</option>
												<option value='COLEGIUL NAȚIONAL "MIHAI EMINESCU" PETROȘANI'>COLEGIUL NAȚIONAL "MIHAI EMINESCU" PETROȘANI</option>
												<option value='COLEGIUL NAȚIONAL DE INFORMATICĂ "CARMEN SYLVA" PETROȘANI'>COLEGIUL NAȚIONAL DE INFORMATICĂ "CARMEN SYLVA" PETROȘANI</option>
												<option value='COLEGIUL NAȚIONAL DE INFORMATICĂ "TRAIAN LALESCU" HUNEDOARA'>COLEGIUL NAȚIONAL DE INFORMATICĂ "TRAIAN LALESCU" HUNEDOARA</option>
												<option value='COLEGIUL NAȚIONAL PEDAGOGIC "REGINA MARIA" DEVA'>COLEGIUL NAȚIONAL PEDAGOGIC "REGINA MARIA" DEVA</option>
												<option value='COLEGIUL NAȚIONAL SPORTIV "CETATE" DEVA'>COLEGIUL NAȚIONAL SPORTIV "CETATE" DEVA</option>
												<option value='COLEGIUL TEHNIC "CONSTANTIN BRÂNCUŞI" PETRILA'>COLEGIUL TEHNIC "CONSTANTIN BRÂNCUŞI" PETRILA</option>
												<option value='COLEGIUL TEHNIC "DIMITRIE LEONIDA" PETROȘANI'>COLEGIUL TEHNIC "DIMITRIE LEONIDA" PETROȘANI</option>
												<option value='COLEGIUL TEHNIC "MATEI CORVIN" HUNEDOARA'>COLEGIUL TEHNIC "MATEI CORVIN" HUNEDOARA</option>
												<option value='COLEGIUL TEHNIC "MIHAI VITEAZU" VULCAN'>COLEGIUL TEHNIC "MIHAI VITEAZU" VULCAN</option>
												<option value='COLEGIUL TEHNIC "TRANSILVANIA" DEVA'>COLEGIUL TEHNIC "TRANSILVANIA" DEVA</option>
												<option value='COLEGIUL TEHNIC AGRICOL "ALEXANDRU BORZA" GEOAGIU'>COLEGIUL TEHNIC AGRICOL "ALEXANDRU BORZA" GEOAGIU</option>
												<option value='COLEGIUL TEHNIC DE TRANSPORT FEROVIAR "ANGHEL SALIGNY" SIMERIA'>COLEGIUL TEHNIC DE TRANSPORT FEROVIAR "ANGHEL SALIGNY" SIMERIA</option>
												<option value='COLEGIUL TEHNIC ENERGETIC "DRAGOMIR HURMUZESCU" DEVA'>COLEGIUL TEHNIC ENERGETIC "DRAGOMIR HURMUZESCU" DEVA</option>
												<option value='LICEUL DE ARTE "SIGISMUND TODUȚĂ" DEVA'>LICEUL DE ARTE "SIGISMUND TODUȚĂ" DEVA</option>
												<option value='LICEUL TEHNOLOGIC "CONSTANTIN BURSAN" HUNEDOARA'>LICEUL TEHNOLOGIC "CONSTANTIN BURSAN" HUNEDOARA</option>
												<option value='LICEUL TEHNOLOGIC "CRIȘAN" CRIȘCIOR'>LICEUL TEHNOLOGIC "CRIȘAN" CRIȘCIOR</option>
												<option value='LICEUL TEHNOLOGIC "GRIGORE MOISIL" DEVA'>LICEUL TEHNOLOGIC "GRIGORE MOISIL" DEVA</option>
												<option value='LICEUL TEHNOLOGIC "NICOLAUS OLAHUS" ORĂȘTIE'>LICEUL TEHNOLOGIC "NICOLAUS OLAHUS" ORĂȘTIE</option>
												<option value='LICEUL TEHNOLOGIC "OVID DENSUSIANU" CĂLAN'>LICEUL TEHNOLOGIC "OVID DENSUSIANU" CĂLAN</option>
												<option value='LICEUL TEHNOLOGIC "RETEZAT" URICANI'>LICEUL TEHNOLOGIC "RETEZAT" URICANI</option>
												<option value='LICEUL TEHNOLOGIC LUPENI LUPENI'>LICEUL TEHNOLOGIC LUPENI LUPENI</option>
												<option value='LICEUL TEORETIC "MIRCEA ELIADE" LUPENI'>LICEUL TEORETIC "MIRCEA ELIADE" LUPENI</option>
												<option value='LICEUL TEORETIC "SILVIU DRAGOMIR" ILIA'>LICEUL TEORETIC "SILVIU DRAGOMIR" ILIA</option>
												<option value='LICEUL TEORETIC "TEGLAS GABOR" DEVA'>LICEUL TEORETIC "TEGLAS GABOR" DEVA</option>
												<option value='LICEUL TEORETIC GHELARI GHELARI'>LICEUL TEORETIC GHELARI GHELARI</option>
												<option value='SEMINARUL TEOLOGIC ORTODOX "SFÂNTA ECATERINA" PRISLOP'>SEMINARUL TEOLOGIC ORTODOX "SFÂNTA ECATERINA" PRISLOP</option>
												<option value='COLEGIUL AGRICOL ŞI DE INDUSTRIE ALIMENTARĂ "VASILE ADAMACHI" IAŞI'>COLEGIUL AGRICOL ŞI DE INDUSTRIE ALIMENTARĂ "VASILE ADAMACHI" IAŞI</option>
												<option value='COLEGIUL ECONOMIC ADMINISTRATIV IAŞI'>COLEGIUL ECONOMIC ADMINISTRATIV IAŞI</option>
												<option value='COLEGIUL NAŢIONAL "COSTACHE NEGRUZZI" IAŞI'>COLEGIUL NAŢIONAL "COSTACHE NEGRUZZI" IAŞI</option>
												<option value='COLEGIUL NAȚIONAL "EMIL RACOVIŢĂ" IAŞI'>COLEGIUL NAȚIONAL "EMIL RACOVIŢĂ" IAŞI</option>
												<option value='COLEGIUL NAȚIONAL "GARABET IBRĂILEANU" IAȘI'>COLEGIUL NAȚIONAL "GARABET IBRĂILEANU" IAȘI</option>
												<option value='COLEGIUL NAȚIONAL "MIHAI EMINESCU" IAŞI'>COLEGIUL NAȚIONAL "MIHAI EMINESCU" IAŞI</option>
												<option value='COLEGIUL NAȚIONAL "MIHAIL SADOVEANU" PAŞCANI'>COLEGIUL NAȚIONAL "MIHAIL SADOVEANU" PAŞCANI</option>
												<option value='COLEGIUL NAȚIONAL "ȘTEFAN CEL MARE" HÎRLĂU'>COLEGIUL NAȚIONAL "ȘTEFAN CEL MARE" HÎRLĂU</option>
												<option value='COLEGIUL NAȚIONAL DE ARTĂ "OCTAV BĂNCILĂ" IAŞI'>COLEGIUL NAȚIONAL DE ARTĂ "OCTAV BĂNCILĂ" IAŞI</option>
												<option value='COLEGIUL NAȚIONAL IAŞI'>COLEGIUL NAȚIONAL IAŞI</option>
												<option value='COLEGIUL TEHNIC "DIMITRIE LEONIDA" IAŞI'>COLEGIUL TEHNIC "DIMITRIE LEONIDA" IAŞI</option>
												<option value='COLEGIUL TEHNIC "GHEORGHE ASACHI" IAŞI'>COLEGIUL TEHNIC "GHEORGHE ASACHI" IAŞI</option>
												<option value='COLEGIUL TEHNIC "IOAN C. ŞTEFĂNESCU" IAŞI'>COLEGIUL TEHNIC "IOAN C. ŞTEFĂNESCU" IAŞI</option>
												<option value='COLEGIUL TEHNIC "ION HOLBAN" IASI'>COLEGIUL TEHNIC "ION HOLBAN" IASI</option>
												<option value='COLEGIUL TEHNIC "MIHAIL STURDZA" IAŞI'>COLEGIUL TEHNIC "MIHAIL STURDZA" IAŞI</option>
												<option value='COLEGIUL TEHNIC DE CĂI FERATE "UNIREA" PAŞCANI'>COLEGIUL TEHNIC DE CĂI FERATE "UNIREA" PAŞCANI</option>
												<option value='COLEGIUL TEHNIC DE ELECTRONICĂ ŞI TELECOMUNICAŢII "GHEORGHE MÂRZESCU" IAŞI'>COLEGIUL TEHNIC DE ELECTRONICĂ ŞI TELECOMUNICAŢII "GHEORGHE MÂRZESCU" IAŞI</option>
												<option value='COLEGIUL TEHNIC DE TRANSPORTURI ȘI CONSTRUCȚII IAŞI'>COLEGIUL TEHNIC DE TRANSPORTURI ȘI CONSTRUCȚII IAŞI</option>
												<option value='LICEUL CU PROGRAM SPORTIV IAŞI'>LICEUL CU PROGRAM SPORTIV IAŞI</option>
												<option value='LICEUL PEDAGOGIC "VASILE LUPU" IAȘI'>LICEUL PEDAGOGIC "VASILE LUPU" IAȘI</option>
												<option value='LICEUL TEHNOLOGIC "HARALAMB VASILIU" PODU ILOAIEI'>LICEUL TEHNOLOGIC "HARALAMB VASILIU" PODU ILOAIEI</option>
												<option value='LICEUL TEHNOLOGIC "MIHAI BUSUIOC" PAŞCANI'>LICEUL TEHNOLOGIC "MIHAI BUSUIOC" PAŞCANI</option>
												<option value='LICEUL TEHNOLOGIC "PETRE P. CARP" ȚIBĂNEȘTI'>LICEUL TEHNOLOGIC "PETRE P. CARP" ȚIBĂNEȘTI</option>
												<option value='LICEUL TEHNOLOGIC "PETRU PONI" IAȘI'>LICEUL TEHNOLOGIC "PETRU PONI" IAȘI</option>
												<option value='LICEUL TEHNOLOGIC "PETRU RAREȘ" TÂRGU FRUMOS'>LICEUL TEHNOLOGIC "PETRU RAREȘ" TÂRGU FRUMOS</option>
												<option value='LICEUL TEHNOLOGIC "VICTOR MIHĂILESCU CRAIU" BELCEŞTI'>LICEUL TEHNOLOGIC "VICTOR MIHĂILESCU CRAIU" BELCEŞTI</option>
												<option value='LICEUL TEHNOLOGIC AGRICOL "MIHAIL KOGALNICEANU" MIROSLAVA'>LICEUL TEHNOLOGIC AGRICOL "MIHAIL KOGALNICEANU" MIROSLAVA</option>
												<option value='LICEUL TEHNOLOGIC DE MECATRONICĂ ȘI AUTOMATIZĂRI IAȘI'>LICEUL TEHNOLOGIC DE MECATRONICĂ ȘI AUTOMATIZĂRI IAȘI</option>
												<option value='LICEUL TEHNOLOGIC ECONOMIC "NICOLAE IORGA" PAŞCANI'>LICEUL TEHNOLOGIC ECONOMIC "NICOLAE IORGA" PAŞCANI</option>
												<option value='LICEUL TEHNOLOGIC ECONOMIC "VIRGIL MADGEARU" IAŞI'>LICEUL TEHNOLOGIC ECONOMIC "VIRGIL MADGEARU" IAŞI</option>
												<option value='LICEUL TEHNOLOGIC ECONOMIC DE TURISM IAŞI'>LICEUL TEHNOLOGIC ECONOMIC DE TURISM IAŞI</option>
												<option value='LICEUL TEHNOLOGIC HÎRLĂU'>LICEUL TEHNOLOGIC HÎRLĂU</option>
												<option value='LICEUL TEHNOLOGIC VLĂDENI'>LICEUL TEHNOLOGIC VLĂDENI</option>
												<option value='LICEUL TEORETIC "ALEXANDRU IOAN CUZA" IAŞI'>LICEUL TEORETIC "ALEXANDRU IOAN CUZA" IAŞI</option>
												<option value='LICEUL TEORETIC "BOGDAN VODĂ" HĂLĂUCEŞTI'>LICEUL TEORETIC "BOGDAN VODĂ" HĂLĂUCEŞTI</option>
												<option value='LICEUL TEORETIC "DIMITRIE CANTEMIR" IAŞI'>LICEUL TEORETIC "DIMITRIE CANTEMIR" IAŞI</option>
												<option value='LICEUL TEORETIC "ION NECULCE" TÂRGU FRUMOS'>LICEUL TEORETIC "ION NECULCE" TÂRGU FRUMOS</option>
												<option value='LICEUL TEORETIC "LASCAR ROSETTI" RADUCĂNENI'>LICEUL TEORETIC "LASCAR ROSETTI" RADUCĂNENI</option>
												<option value='LICEUL TEORETIC "MIRON COSTIN" IAŞI'>LICEUL TEORETIC "MIRON COSTIN" IAŞI</option>
												<option value='LICEUL TEORETIC "MIRON COSTIN" PAŞCANI'>LICEUL TEORETIC "MIRON COSTIN" PAŞCANI</option>
												<option value='LICEUL TEORETIC "VASILE ALECSANDRI" IAŞI'>LICEUL TEORETIC "VASILE ALECSANDRI" IAŞI</option>
												<option value='LICEUL TEORETIC DE INFORMATICĂ "GRIGORE MOISIL" IAŞI'>LICEUL TEORETIC DE INFORMATICĂ "GRIGORE MOISIL" IAŞI</option>
												<option value='LICEUL TEORETIC WALDORF IAŞI'>LICEUL TEORETIC WALDORF IAŞI</option>
												<option value='SEMINARUL TEOLOGIC ORTODOX "SF. VASILE CEL MARE" IAŞI'>SEMINARUL TEOLOGIC ORTODOX "SF. VASILE CEL MARE" IAŞI</option>
												<option value='COLEGIUL SILVIC "THEODOR PIETRARU" BRĂNEȘTI'>COLEGIUL SILVIC "THEODOR PIETRARU" BRĂNEȘTI</option>
												<option value='LICEUL CU PROGRAM SPORTIV NR. 1 CLINCENI'>LICEUL CU PROGRAM SPORTIV NR. 1 CLINCENI</option>
												<option value='LICEUL PENITENCIAR JILAVA'>LICEUL PENITENCIAR JILAVA</option>
												<option value='LICEUL TEHNOLOGIC "BARBU A. ŞTIRBEY" BUFTEA'>LICEUL TEHNOLOGIC "BARBU A. ŞTIRBEY" BUFTEA</option>
												<option value='LICEUL TEHNOLOGIC "CEZAR NICOLAU" BRĂNEȘTI'>LICEUL TEHNOLOGIC "CEZAR NICOLAU" BRĂNEȘTI</option>
												<option value='LICEUL TEHNOLOGIC "DOAMNA CHIAJNA" ROȘU'>LICEUL TEHNOLOGIC "DOAMNA CHIAJNA" ROȘU</option>
												<option value='LICEUL TEHNOLOGIC "DUMITRU DUMITRESCU" BUFTEA'>LICEUL TEHNOLOGIC "DUMITRU DUMITRESCU" BUFTEA</option>
												<option value='LICEUL TEHNOLOGIC "NICOLAE BĂLCESCU" VOLUNTARI'>LICEUL TEHNOLOGIC "NICOLAE BĂLCESCU" VOLUNTARI</option>
												<option value='LICEUL TEHNOLOGIC "PAMFIL ȘEICARU" CIOROGÂRLA'>LICEUL TEHNOLOGIC "PAMFIL ȘEICARU" CIOROGÂRLA</option>
												<option value='LICEUL TEHNOLOGIC "VINTILĂ BRĂTIANU" DRAGOMIREȘTI VALE'>LICEUL TEHNOLOGIC "VINTILĂ BRĂTIANU" DRAGOMIREȘTI VALE</option>
												<option value='LICEUL TEORETIC "ALEXANDRU ROSETTI" VIDRA'>LICEUL TEORETIC "ALEXANDRU ROSETTI" VIDRA</option>
												<option value='LICEUL TEORETIC "HORIA HULUBEI" MĂGURELE'>LICEUL TEORETIC "HORIA HULUBEI" MĂGURELE</option>
												<option value='LICEUL TEORETIC "IOAN PETRUŞ" OTOPENI'>LICEUL TEORETIC "IOAN PETRUŞ" OTOPENI</option>
												<option value='LICEUL TEORETIC "MIHAIL KOGĂLNICEANU" SNAGOV'>LICEUL TEORETIC "MIHAIL KOGĂLNICEANU" SNAGOV</option>
												<option value='LICEUL TEORETIC "RADU POPESCU" POPEȘTI LEORDENI'>LICEUL TEORETIC "RADU POPESCU" POPEȘTI LEORDENI</option>
												<option value='LICEUL TEORETIC "TRAIAN LALESCU" BRĂNEȘTI'>LICEUL TEORETIC "TRAIAN LALESCU" BRĂNEȘTI</option>
												<option value='LICEUL TEORETIC NR. 1 PERIŞ'>LICEUL TEORETIC NR. 1 PERIŞ</option>
												<option value='SEMINARUL TEOLOGIC LICEAL ORTODOX "SFÂNTA FILOFTEIA" BRĂNEȘTI'>SEMINARUL TEOLOGIC LICEAL ORTODOX "SFÂNTA FILOFTEIA" BRĂNEȘTI</option>
												<option value='COLEGIUL ECONOMIC "NICOLAE TITULESCU" BAIA MARE'>COLEGIUL ECONOMIC "NICOLAE TITULESCU" BAIA MARE</option>
												<option value='COLEGIUL ECONOMIC "PINTEA VITEAZUL" CAVNIC'>COLEGIUL ECONOMIC "PINTEA VITEAZUL" CAVNIC</option>
												<option value='COLEGIUL NAȚIONAL "DRAGOȘ VODĂ" SIGHETU MARMAȚIEI'>COLEGIUL NAȚIONAL "DRAGOȘ VODĂ" SIGHETU MARMAȚIEI</option>
												<option value='COLEGIUL NAȚIONAL "GHEORGHE ȘINCAI" BAIA MARE'>COLEGIUL NAȚIONAL "GHEORGHE ȘINCAI" BAIA MARE</option>
												<option value='COLEGIUL NAȚIONAL "MIHAI EMINESCU" BAIA MARE'>COLEGIUL NAȚIONAL "MIHAI EMINESCU" BAIA MARE</option>
												<option value='COLEGIUL NAȚIONAL "VASILE LUCACIU" BAIA MARE'>COLEGIUL NAȚIONAL "VASILE LUCACIU" BAIA MARE</option>
												<option value='COLEGIUL TEHNIC "ANGHEL SALIGNY" BAIA MARE'>COLEGIUL TEHNIC "ANGHEL SALIGNY" BAIA MARE</option>
												<option value='COLEGIUL TEHNIC "AUREL VLAICU" BAIA MARE'>COLEGIUL TEHNIC "AUREL VLAICU" BAIA MARE</option>
												<option value='COLEGIUL TEHNIC "C.D. NENIȚESCU" BAIA MARE'>COLEGIUL TEHNIC "C.D. NENIȚESCU" BAIA MARE</option>
												<option value='COLEGIUL TEHNIC "GEORGE BARIȚIU" BAIA MARE'>COLEGIUL TEHNIC "GEORGE BARIȚIU" BAIA MARE</option>
												<option value='COLEGIUL TEHNIC "TRANSILVANIA" BAIA MARE'>COLEGIUL TEHNIC "TRANSILVANIA" BAIA MARE</option>
												<option value='COLEGIUL TEHNIC DE TRANSPORTURI AUTO BAIA SPRIE'>COLEGIUL TEHNIC DE TRANSPORTURI AUTO BAIA SPRIE</option>
												<option value='LICEUL BORȘA BORȘA'>LICEUL BORȘA BORȘA</option>
												<option value='LICEUL CU PROGRAM SPORTIV BAIA MARE'>LICEUL CU PROGRAM SPORTIV BAIA MARE</option>
												<option value='LICEUL DE ARTE BAIA MARE'>LICEUL DE ARTE BAIA MARE</option>
												<option value='LICEUL PEDAGOGIC "REGELE FERDINAND" SIGHETU MARMAȚIEI'>LICEUL PEDAGOGIC "REGELE FERDINAND" SIGHETU MARMAȚIEI</option>
												<option value='LICEUL PEDAGOGIC "TARAS SEVCENKO" SIGHETU MARMAȚIEI'>LICEUL PEDAGOGIC "TARAS SEVCENKO" SIGHETU MARMAȚIEI</option>
												<option value='LICEUL TEHNOLOGIC "DR. FLORIAN ULMEANU" ULMENI'>LICEUL TEHNOLOGIC "DR. FLORIAN ULMEANU" ULMENI</option>
												<option value='LICEUL TEHNOLOGIC "GRIGORE MOISIL" TÂRGU LĂPUȘ'>LICEUL TEHNOLOGIC "GRIGORE MOISIL" TÂRGU LĂPUȘ</option>
												<option value='LICEUL TEHNOLOGIC "TRAIAN VUIA" TĂUȚII-MĂGHERĂUȘ'>LICEUL TEHNOLOGIC "TRAIAN VUIA" TĂUȚII-MĂGHERĂUȘ</option>
												<option value='LICEUL TEHNOLOGIC AGRICOL "ALEXIU BERINDE" SEINI'>LICEUL TEHNOLOGIC AGRICOL "ALEXIU BERINDE" SEINI</option>
												<option value='LICEUL TEHNOLOGIC FORESTIER SIGHETU MARMAȚIEI'>LICEUL TEHNOLOGIC FORESTIER SIGHETU MARMAȚIEI</option>
												<option value='LICEUL TEHNOLOGIC MARMAȚIA SIGHETU MARMAȚIEI'>LICEUL TEHNOLOGIC MARMAȚIA SIGHETU MARMAȚIEI</option>
												<option value='LICEUL TEHNOLOGIC VIȘEU DE SUS'>LICEUL TEHNOLOGIC VIȘEU DE SUS</option>
												<option value='LICEUL TEOLOGIC PENTICOSTAL BAIA MARE'>LICEUL TEOLOGIC PENTICOSTAL BAIA MARE</option>
												<option value='LICEUL TEORETIC "BOGDAN VODĂ" VISEU DE SUS'>LICEUL TEORETIC "BOGDAN VODĂ" VISEU DE SUS</option>
												<option value='LICEUL TEORETIC "EMIL RACOVIȚĂ" BAIA MARE'>LICEUL TEORETIC "EMIL RACOVIȚĂ" BAIA MARE</option>
												<option value='LICEUL TEORETIC "IOAN BUTEANU" ȘOMCUTA MARE'>LICEUL TEORETIC "IOAN BUTEANU" ȘOMCUTA MARE</option>
												<option value='LICEUL TEORETIC "LEOWEY KLARA" SIGHETU MARMAȚIEI'>LICEUL TEORETIC "LEOWEY KLARA" SIGHETU MARMAȚIEI</option>
												<option value='LICEUL TEORETIC "NEMETH LASZLO" BAIA MARE'>LICEUL TEORETIC "NEMETH LASZLO" BAIA MARE</option>
												<option value='LICEUL TEORETIC "PETRU RAREȘ" TÂRGU LĂPUȘ'>LICEUL TEORETIC "PETRU RAREȘ" TÂRGU LĂPUȘ</option>
												<option value='SEMINARUL TEOLOGIC LICEAL "SF. IOSIF MĂRTURISITORUL" BAIA MARE'>SEMINARUL TEOLOGIC LICEAL "SF. IOSIF MĂRTURISITORUL" BAIA MARE</option>
												<option value='COLEGIUL NAȚIONAL "GHEORGHE ȚIȚEICA" MEHEDINȚI'>COLEGIUL NAȚIONAL "GHEORGHE ȚIȚEICA" MEHEDINȚI</option>
												<option value='COLEGIUL NAȚIONAL "TRAIAN" MEHEDINȚI'>COLEGIUL NAȚIONAL "TRAIAN" MEHEDINȚI</option>
												<option value='COLEGIUL NAȚIONAL ECONOMIC "THEODOR COSTESCU" MEHEDINȚI'>COLEGIUL NAȚIONAL ECONOMIC "THEODOR COSTESCU" MEHEDINȚI</option>
												<option value='COLEGIUL NAȚIONAL PEDAGOGIC "ȘTEFAN ODOBLEJA" MEHEDINȚI'>COLEGIUL NAȚIONAL PEDAGOGIC "ȘTEFAN ODOBLEJA" MEHEDINȚI</option>
												<option value='COLEGIUL TEHNIC "DECEBAL" MEHEDINȚI'>COLEGIUL TEHNIC "DECEBAL" MEHEDINȚI</option>
												<option value='COLEGIUL TEHNIC "DIERNA" MEHEDINȚI'>COLEGIUL TEHNIC "DIERNA" MEHEDINȚI</option>
												<option value='COLEGIUL TEHNIC "DOMNUL TUDOR" MEHEDINȚI'>COLEGIUL TEHNIC "DOMNUL TUDOR" MEHEDINȚI</option>
												<option value='COLEGIUL TEHNIC "LORIN SĂLĂGEAN" MEHEDINȚI'>COLEGIUL TEHNIC "LORIN SĂLĂGEAN" MEHEDINȚI</option>
												<option value='COLEGIUL TEHNIC DE TRANSPORTURI AUTO MEHEDINȚI'>COLEGIUL TEHNIC DE TRANSPORTURI AUTO MEHEDINȚI</option>
												<option value='COLEGIUL TEHNOLOGIC "CONSTANTIN BRÂNCOVEANU" MEHEDINȚI'>COLEGIUL TEHNOLOGIC "CONSTANTIN BRÂNCOVEANU" MEHEDINȚI</option>
												<option value='LICEUL DE ARTĂ "I. ȘT. PAULIAN" MEHEDINȚI'>LICEUL DE ARTĂ "I. ȘT. PAULIAN" MEHEDINȚI</option>
												<option value='LICEUL TEHNOLOGIC "MATEI BASARAB" MEHEDINȚI'>LICEUL TEHNOLOGIC "MATEI BASARAB" MEHEDINȚI</option>
												<option value='LICEUL TEHNOLOGIC "TUDOR VLADIMIRESCU" MEHEDINȚI'>LICEUL TEHNOLOGIC "TUDOR VLADIMIRESCU" MEHEDINȚI</option>
												<option value='LICEUL TEHNOLOGIC HALÂNGA'>LICEUL TEHNOLOGIC HALÂNGA</option>
												<option value='LICEUL TEORETIC "DR. VICTOR GOMOIU" MEHEDINȚI'>LICEUL TEORETIC "DR. VICTOR GOMOIU" MEHEDINȚI</option>
												<option value='LICEUL TEORETIC "GHEORGHE IONESCU ȘIȘEȘTI" MEHEDINȚI'>LICEUL TEORETIC "GHEORGHE IONESCU ȘIȘEȘTI" MEHEDINȚI</option>
												<option value='LICEUL TEORETIC "TRAIAN LALESCU" MEHEDINȚI'>LICEUL TEORETIC "TRAIAN LALESCU" MEHEDINȚI</option>
												<option value='LICEUL TEORETIC CUJMIR'>LICEUL TEORETIC CUJMIR</option>
												<option value='COLEGIUL AGRICOL "TRAIAN SĂVULESCU" TÂRGU MUREȘ'>COLEGIUL AGRICOL "TRAIAN SĂVULESCU" TÂRGU MUREȘ</option>
												<option value='COLEGIUL ECONOMIC "TRANSILVANIA" TÂRGU MUREȘ'>COLEGIUL ECONOMIC "TRANSILVANIA" TÂRGU MUREȘ</option>
												<option value='COLEGIUL NAȚIONAL "ALEXANDRU PAPIU ILARIAN" TÂRGU MUREȘ'>COLEGIUL NAȚIONAL "ALEXANDRU PAPIU ILARIAN" TÂRGU MUREȘ</option>
												<option value='COLEGIUL NAȚIONAL "MIRCEA ELIADE" SIGHIȘOARA'>COLEGIUL NAȚIONAL "MIRCEA ELIADE" SIGHIȘOARA</option>
												<option value='COLEGIUL NAȚIONAL "UNIREA" TÂRGU MUREȘ'>COLEGIUL NAȚIONAL "UNIREA" TÂRGU MUREȘ</option>
												<option value='COLEGIUL SILVIC GURGHIU'>COLEGIUL SILVIC GURGHIU</option>
												<option value='COLEGIUL TEHNIC TÂRNĂVENI'>COLEGIUL TEHNIC TÂRNĂVENI</option>
												<option value='LICEUL CU PROGRAM SPORTIV "SZASZ ADALBERT" TÂRGU MUREȘ'>LICEUL CU PROGRAM SPORTIV "SZASZ ADALBERT" TÂRGU MUREȘ</option>
												<option value='LICEUL TEHNOLOGIC "AUREL PERSU" TÂRGU MUREȘ'>LICEUL TEHNOLOGIC "AUREL PERSU" TÂRGU MUREȘ</option>
												<option value='LICEUL TEHNOLOGIC "AVRAM IANCU" TÂRGU MUREȘ'>LICEUL TEHNOLOGIC "AVRAM IANCU" TÂRGU MUREȘ</option>
												<option value='LICEUL TEHNOLOGIC "CONSTANTIN BRÂNCUȘI" TÂRGU MUREȘ'>LICEUL TEHNOLOGIC "CONSTANTIN BRÂNCUȘI" TÂRGU MUREȘ</option>
												<option value='LICEUL TEHNOLOGIC "DOMOKOS KAZMER" SOVATA'>LICEUL TEHNOLOGIC "DOMOKOS KAZMER" SOVATA</option>
												<option value='LICEUL TEHNOLOGIC "ELECTROMUREȘ" TÂRGU MUREȘ'>LICEUL TEHNOLOGIC "ELECTROMUREȘ" TÂRGU MUREȘ</option>
												<option value='LICEUL TEHNOLOGIC "GHEORGHE ȘINCAI" TÂRGU MUREȘ'>LICEUL TEHNOLOGIC "GHEORGHE ȘINCAI" TÂRGU MUREȘ</option>
												<option value='LICEUL TEHNOLOGIC "IOAN BOJOR" REGHIN'>LICEUL TEHNOLOGIC "IOAN BOJOR" REGHIN</option>
												<option value='LICEUL TEHNOLOGIC "ION VLASIU" TÂRGU MUREȘ'>LICEUL TEHNOLOGIC "ION VLASIU" TÂRGU MUREȘ</option>
												<option value='LICEUL TEHNOLOGIC "LUCIAN BLAGA" REGHIN'>LICEUL TEHNOLOGIC "LUCIAN BLAGA" REGHIN</option>
												<option value='LICEUL TEHNOLOGIC "PETRU MAIOR" REGHIN'>LICEUL TEHNOLOGIC "PETRU MAIOR" REGHIN</option>
												<option value='LICEUL TEHNOLOGIC "SFÂNTUL GHEORGHE" SÂNGEORGIU DE PĂDURE'>LICEUL TEHNOLOGIC "SFÂNTUL GHEORGHE" SÂNGEORGIU DE PĂDURE</option>
												<option value='LICEUL TEHNOLOGIC "TRAIAN VUIA" TÂRGU MUREȘ'>LICEUL TEHNOLOGIC "TRAIAN VUIA" TÂRGU MUREȘ</option>
												<option value='LICEUL TEHNOLOGIC "VASILE NETEA" DEDA'>LICEUL TEHNOLOGIC "VASILE NETEA" DEDA</option>
												<option value='LICEUL TEHNOLOGIC IERNUT'>LICEUL TEHNOLOGIC IERNUT</option>
												<option value='LICEUL TEHNOLOGIC NR. 1 LUDUȘ'>LICEUL TEHNOLOGIC NR. 1 LUDUȘ</option>
												<option value='LICEUL TEHNOLOGIC NR. 1 SIGHIȘOARA'>LICEUL TEHNOLOGIC NR. 1 SIGHIȘOARA</option>
												<option value='LICEUL TEOLOGIC ROMANO-CATOLIC TÂRGU MUREȘ'>LICEUL TEOLOGIC ROMANO-CATOLIC TÂRGU MUREȘ</option>
												<option value='LICEUL TEORETIC "ANDREI BÂRSEANU" TÂRNĂVENI'>LICEUL TEORETIC "ANDREI BÂRSEANU" TÂRNĂVENI</option>
												<option value='LICEUL TEORETIC "BOCSKAI ISTVAN" MIERCUREA NIRAJULUI'>LICEUL TEORETIC "BOCSKAI ISTVAN" MIERCUREA NIRAJULUI</option>
												<option value='LICEUL TEORETIC "BOLYAI FARKAS" TÂRGU MUREȘ'>LICEUL TEORETIC "BOLYAI FARKAS" TÂRGU MUREȘ</option>
												<option value='LICEUL TEORETIC "GHEORGHE MARINESCU" TÂRGU MUREȘ'>LICEUL TEORETIC "GHEORGHE MARINESCU" TÂRGU MUREȘ</option>
												<option value='LICEUL TEORETIC "JOSEPH HALTRICH" SIGHIȘOARA'>LICEUL TEORETIC "JOSEPH HALTRICH" SIGHIȘOARA</option>
												<option value='LICEUL TEORETIC "SAMUIL MICU" SĂRMAȘU'>LICEUL TEORETIC "SAMUIL MICU" SĂRMAȘU</option>
												<option value='LICEUL VOCAȚIONAL DE ARTĂ TÂRGU MUREȘ'>LICEUL VOCAȚIONAL DE ARTĂ TÂRGU MUREȘ</option>
												<option value='LICEUL VOCAȚIONAL PEDAGOGIC "MIHAI EMINESCU" TÂRGU MUREȘ'>LICEUL VOCAȚIONAL PEDAGOGIC "MIHAI EMINESCU" TÂRGU MUREȘ</option>
												<option value='LICEUL VOCAȚIONAL REFORMAT TÂRGU MUREȘ'>LICEUL VOCAȚIONAL REFORMAT TÂRGU MUREȘ</option>
												<option value='COLEGIUL NAȚIONAL "CALISTRAT HOGAȘ" PIATRA NEAMȚ'>COLEGIUL NAȚIONAL "CALISTRAT HOGAȘ" PIATRA NEAMȚ</option>
												<option value='COLEGIUL NAȚIONAL "GHEORGHE ASACHI" PIATRA NEAMȚ'>COLEGIUL NAȚIONAL "GHEORGHE ASACHI" PIATRA NEAMȚ</option>
												<option value='COLEGIUL NAȚIONAL "PETRU RAREȘ" PIATRA NEAMȚ'>COLEGIUL NAȚIONAL "PETRU RAREȘ" PIATRA NEAMȚ</option>
												<option value='COLEGIUL NAȚIONAL "ROMAN VODĂ" ROMAN'>COLEGIUL NAȚIONAL "ROMAN VODĂ" ROMAN</option>
												<option value='COLEGIUL NAȚIONAL "ȘTEFAN CEL MARE" TÂRGU NEAMȚ'>COLEGIUL NAȚIONAL "ȘTEFAN CEL MARE" TÂRGU NEAMȚ</option>
												<option value='COLEGIUL NAȚIONAL DE INFORMATICĂ PIATRA NEAMȚ'>COLEGIUL NAȚIONAL DE INFORMATICĂ PIATRA NEAMȚ</option>
												<option value='COLEGIUL TEHNIC "DANUBIANA" ROMAN'>COLEGIUL TEHNIC "DANUBIANA" ROMAN</option>
												<option value='COLEGIUL TEHNIC "GHEORGHE CARTIANU" PIATRA NEAMȚ'>COLEGIUL TEHNIC "GHEORGHE CARTIANU" PIATRA NEAMȚ</option>
												<option value='COLEGIUL TEHNIC "ION CREANGĂ" TÂRGU NEAMȚ'>COLEGIUL TEHNIC "ION CREANGĂ" TÂRGU NEAMȚ</option>
												<option value='COLEGIUL TEHNIC "MIRON COSTIN" ROMAN'>COLEGIUL TEHNIC "MIRON COSTIN" ROMAN</option>
												<option value='COLEGIUL TEHNIC "PETRU PONI" ROMAN'>COLEGIUL TEHNIC "PETRU PONI" ROMAN</option>
												<option value='COLEGIUL TEHNIC DE TRANSPORTURI PIATRA NEAMȚ'>COLEGIUL TEHNIC DE TRANSPORTURI PIATRA NEAMȚ</option>
												<option value='COLEGIUL TEHNIC FORESTIER PIATRA NEAMȚ'>COLEGIUL TEHNIC FORESTIER PIATRA NEAMȚ</option>
												<option value='COLEGIUL TEHNOLOGIC "SPIRU HARET" PIATRA NEAMȚ'>COLEGIUL TEHNOLOGIC "SPIRU HARET" PIATRA NEAMȚ</option>
												<option value='LICEUL "CAROL I" BICAZ'>LICEUL "CAROL I" BICAZ</option>
												<option value='LICEUL "MIHAIL SADOVEANU" BORCA'>LICEUL "MIHAIL SADOVEANU" BORCA</option>
												<option value='LICEUL "VASILE CONTA" TÂRGU NEAMȚ'>LICEUL "VASILE CONTA" TÂRGU NEAMȚ</option>
												<option value='LICEUL CU PROGRAM SPORTIV PIATRA NEAMȚ'>LICEUL CU PROGRAM SPORTIV PIATRA NEAMȚ</option>
												<option value='LICEUL CU PROGRAM SPORTIV ROMAN'>LICEUL CU PROGRAM SPORTIV ROMAN</option>
												<option value='LICEUL DE ARTE "VICTOR BRAUNER" PIATRA NEAMȚ'>LICEUL DE ARTE "VICTOR BRAUNER" PIATRA NEAMȚ</option>
												<option value='LICEUL TEHNOLOGIC "DIMITRIE LEONIDA" PIATRA NEAMȚ'>LICEUL TEHNOLOGIC "DIMITRIE LEONIDA" PIATRA NEAMȚ</option>
												<option value='LICEUL TEHNOLOGIC "GH. RUSET ROZNOVANU" ROZNOV'>LICEUL TEHNOLOGIC "GH. RUSET ROZNOVANU" ROZNOV</option>
												<option value='LICEUL TEHNOLOGIC "ION CREANGĂ" PIPIRIG'>LICEUL TEHNOLOGIC "ION CREANGĂ" PIPIRIG</option>
												<option value='LICEUL TEHNOLOGIC "ION IONESCU DE LA BRAD" HORIA'>LICEUL TEHNOLOGIC "ION IONESCU DE LA BRAD" HORIA</option>
												<option value='LICEUL TEHNOLOGIC "VASILE SAV" ROMAN'>LICEUL TEHNOLOGIC "VASILE SAV" ROMAN</option>
												<option value='LICEUL TEHNOLOGIC ECONOMIC ADMINISTRATIV PIATRA NEAMȚ'>LICEUL TEHNOLOGIC ECONOMIC ADMINISTRATIV PIATRA NEAMȚ</option>
												<option value='LICEUL TEHNOLOGIC NISIPOREȘTI BOTEȘTI'>LICEUL TEHNOLOGIC NISIPOREȘTI BOTEȘTI</option>
												<option value='LICEUL TEOLOGIC "EPISCOP MELCHISEDEC" ROMAN'>LICEUL TEOLOGIC "EPISCOP MELCHISEDEC" ROMAN</option>
												<option value='LICEUL TEOLOGIC ORTODOX "CUVIOASA PARASCHEVA" AGAPIA'>LICEUL TEOLOGIC ORTODOX "CUVIOASA PARASCHEVA" AGAPIA</option>
												<option value='LICEUL TEOLOGIC ORTODOX "SFINȚII ÎMPARAȚI CONSTANTIN ȘI ELENA" PIATRA NEAMȚ'>LICEUL TEOLOGIC ORTODOX "SFINȚII ÎMPARAȚI CONSTANTIN ȘI ELENA" PIATRA NEAMȚ</option>
												<option value='LICEUL TEOLOGIC ROMANO-CATOLIC "SFÂNTUL FRANCISC DE ASSISI" ROMAN'>LICEUL TEOLOGIC ROMANO-CATOLIC "SFÂNTUL FRANCISC DE ASSISI" ROMAN</option>
												<option value='LICEUL TEORETIC "VASILE ALECSANDRI" SĂBĂOANI'>LICEUL TEORETIC "VASILE ALECSANDRI" SĂBĂOANI</option>
												<option value='SEMINARUL TEOLOGIC ORTODOX "VENIAMIN COSTACHI" MÂNĂSTIREA NEAMȚ'>SEMINARUL TEOLOGIC ORTODOX "VENIAMIN COSTACHI" MÂNĂSTIREA NEAMȚ</option>
												<option value='COLEGIUL AGRICOL "DIMITRIE PETRESCU" CARACAL'>COLEGIUL AGRICOL "DIMITRIE PETRESCU" CARACAL</option>
												<option value='COLEGIUL ECONOMIC "P. S. AURELIAN" SLATINA'>COLEGIUL ECONOMIC "P. S. AURELIAN" SLATINA</option>
												<option value='COLEGIUL NAȚIONAL "AL. I. CUZA" CORABIA'>COLEGIUL NAȚIONAL "AL. I. CUZA" CORABIA</option>
												<option value='COLEGIUL NAȚIONAL "ION MINULESCU" SLATINA'>COLEGIUL NAȚIONAL "ION MINULESCU" SLATINA</option>
												<option value='COLEGIUL NAȚIONAL "IONIȚĂ ASAN" CARACAL'>COLEGIUL NAȚIONAL "IONIȚĂ ASAN" CARACAL</option>
												<option value='COLEGIUL NAȚIONAL "RADU GRECEANU" SLATINA'>COLEGIUL NAȚIONAL "RADU GRECEANU" SLATINA</option>
												<option value='COLEGIUL NAȚIONAL AGRICOL "CAROL I" SLATINA'>COLEGIUL NAȚIONAL AGRICOL "CAROL I" SLATINA</option>
												<option value='COLEGIUL NAȚIONAL VOCAȚIONAL "NICOLAE TITULESCU" SLATINA'>COLEGIUL NAȚIONAL VOCAȚIONAL "NICOLAE TITULESCU" SLATINA</option>
												<option value='COLEGIUL TEHNIC "ALEXE MARIN" SLATINA'>COLEGIUL TEHNIC "ALEXE MARIN" SLATINA</option>
												<option value='COLEGIUL TEHNIC "DANUBIUS" CORABIA'>COLEGIUL TEHNIC "DANUBIUS" CORABIA</option>
												<option value='COLEGIUL TEHNIC "MATEI BASARAB" CARACAL'>COLEGIUL TEHNIC "MATEI BASARAB" CARACAL</option>
												<option value='COLEGIUL TEHNIC "NICOLAE BĂLCESCU" BALȘ'>COLEGIUL TEHNIC "NICOLAE BĂLCESCU" BALȘ</option>
												<option value='COLEGIUL TEHNIC BALȘ'>COLEGIUL TEHNIC BALȘ</option>
												<option value='COLEGIUL TEHNIC METALURGIC SLATINA'>COLEGIUL TEHNIC METALURGIC SLATINA</option>
												<option value='LICEUL "ȘTEFAN DIACONESCU" POTCOAVA'>LICEUL "ȘTEFAN DIACONESCU" POTCOAVA</option>
												<option value='LICEUL CU PROGRAM SPORTIV SLATINA'>LICEUL CU PROGRAM SPORTIV SLATINA</option>
												<option value='LICEUL TEHNOLOGIC "CONSTANTIN BRÂNCOVEANU" SCORNICEȘTI'>LICEUL TEHNOLOGIC "CONSTANTIN BRÂNCOVEANU" SCORNICEȘTI</option>
												<option value='LICEUL TEHNOLOGIC "CONSTANTIN FILIPESCU" CARACAL'>LICEUL TEHNOLOGIC "CONSTANTIN FILIPESCU" CARACAL</option>
												<option value='LICEUL TEHNOLOGIC "ION POPESCU-CILIENI" CILIENI'>LICEUL TEHNOLOGIC "ION POPESCU-CILIENI" CILIENI</option>
												<option value='LICEUL TEHNOLOGIC CRÂMPOIA'>LICEUL TEHNOLOGIC CRÂMPOIA</option>
												<option value='LICEUL TEHNOLOGIC DRĂGĂNEȘTI-OLT'>LICEUL TEHNOLOGIC DRĂGĂNEȘTI-OLT</option>
												<option value='LICEUL TEHNOLOGIC IANCU JIANU'>LICEUL TEHNOLOGIC IANCU JIANU</option>
												<option value='LICEUL TEHNOLOGIC IZVOARELE'>LICEUL TEHNOLOGIC IZVOARELE</option>
												<option value='LICEUL TEHNOLOGIC PIATRA-OLT'>LICEUL TEHNOLOGIC PIATRA-OLT</option>
												<option value='LICEUL TEHNOLOGIC TUFENI'>LICEUL TEHNOLOGIC TUFENI</option>
												<option value='LICEUL TEHNOLOGIC VĂLENI'>LICEUL TEHNOLOGIC VĂLENI</option>
												<option value='LICEUL TEHNOLOGIC VITOMIREȘTI'>LICEUL TEHNOLOGIC VITOMIREȘTI</option>
												<option value='LICEUL TEORETIC "ION GH. ROȘCA" OSICA DE SUS'>LICEUL TEORETIC "ION GH. ROȘCA" OSICA DE SUS</option>
												<option value='LICEUL TEORETIC "MIHAI VITEAZUL" CARACAL'>LICEUL TEORETIC "MIHAI VITEAZUL" CARACAL</option>
												<option value='LICEUL TEORETIC "PETRE PANDREA" BALȘ'>LICEUL TEORETIC "PETRE PANDREA" BALȘ</option>
												<option value='LICEUL TEORETIC "TUDOR VLADIMIRESCU" DRĂGĂNEȘTI-OLT'>LICEUL TEORETIC "TUDOR VLADIMIRESCU" DRĂGĂNEȘTI-OLT</option>
												<option value='COLEGIUL "ION KALINDERU" BUȘTENI'>COLEGIUL "ION KALINDERU" BUȘTENI</option>
												<option value='COLEGIUL "MIHAIL CANTACUZINO" SINAIA'>COLEGIUL "MIHAIL CANTACUZINO" SINAIA</option>
												<option value='COLEGIUL "SPIRU HARET" PLOIEȘTI'>COLEGIUL "SPIRU HARET" PLOIEȘTI</option>
												<option value='COLEGIUL AGRICOL "GHEORGHE IONESCU-SISEȘTI" VALEA CĂLUGĂREASCĂ'>COLEGIUL AGRICOL "GHEORGHE IONESCU-SISEȘTI" VALEA CĂLUGĂREASCĂ</option>
												<option value='COLEGIUL DE ARTĂ "CARMEN SYLVA" PLOIEȘTI'>COLEGIUL DE ARTĂ "CARMEN SYLVA" PLOIEȘTI</option>
												<option value='COLEGIUL ECONOMIC "VIRGIL MADGEARU" PLOIEȘTI'>COLEGIUL ECONOMIC "VIRGIL MADGEARU" PLOIEȘTI</option>
												<option value='COLEGIUL NAȚIONAL "ALEXANDRU IOAN CUZA" PLOIEȘTI'>COLEGIUL NAȚIONAL "ALEXANDRU IOAN CUZA" PLOIEȘTI</option>
												<option value='COLEGIUL NAȚIONAL "ION LUCA CARAGIALE" PLOIEȘTI'>COLEGIUL NAȚIONAL "ION LUCA CARAGIALE" PLOIEȘTI</option>
												<option value='COLEGIUL NATIONAL "JEAN MONNET" PLOIEȘTI'>COLEGIUL NATIONAL "JEAN MONNET" PLOIEȘTI</option>
												<option value='COLEGIUL NAȚIONAL "MIHAI VITEAZUL" PLOIEȘTI'>COLEGIUL NAȚIONAL "MIHAI VITEAZUL" PLOIEȘTI</option>
												<option value='COLEGIUL NAȚIONAL "NICHITA STĂNESCU" PLOIEȘTI'>COLEGIUL NAȚIONAL "NICHITA STĂNESCU" PLOIEȘTI</option>
												<option value='COLEGIUL NAȚIONAL "NICOLAE GRIGORESCU" CÂMPINA'>COLEGIUL NAȚIONAL "NICOLAE GRIGORESCU" CÂMPINA</option>
												<option value='COLEGIUL NAȚIONAL "NICOLAE IORGA" VĂLENII DE MUNTE'>COLEGIUL NAȚIONAL "NICOLAE IORGA" VĂLENII DE MUNTE</option>
												<option value='COLEGIUL TEHNIC "CONSTANTIN ISTRATI" CÂMPINA'>COLEGIUL TEHNIC "CONSTANTIN ISTRATI" CÂMPINA</option>
												<option value='COLEGIUL TEHNIC "ELIE RADU" PLOIEȘTI'>COLEGIUL TEHNIC "ELIE RADU" PLOIEȘTI</option>
												<option value='COLEGIUL TEHNIC "GHEORGHE LAZĂR" PLOPENI'>COLEGIUL TEHNIC "GHEORGHE LAZĂR" PLOPENI</option>
												<option value='COLEGIUL TEHNIC "LAZĂR EDELEANU" PLOIEȘTI'>COLEGIUL TEHNIC "LAZĂR EDELEANU" PLOIEȘTI</option>
												<option value='COLEGIUL TEHNIC "TOMA N. SOCOLESCU" PLOIEȘTI'>COLEGIUL TEHNIC "TOMA N. SOCOLESCU" PLOIEȘTI</option>
												<option value='COLEGIUL TEHNIC FORESTIER CÂMPINA'>COLEGIUL TEHNIC FORESTIER CÂMPINA</option>
												<option value='LICEUL "SIMION STOLNICU" COMARNIC'>LICEUL "SIMION STOLNICU" COMARNIC</option>
												<option value='LICEUL TEHNOLOGIC "1 MAI" PLOIEȘTI'>LICEUL TEHNOLOGIC "1 MAI" PLOIEȘTI</option>
												<option value='LICEUL TEHNOLOGIC "ANGHEL SALIGNY" PLOIEȘTI'>LICEUL TEHNOLOGIC "ANGHEL SALIGNY" PLOIEȘTI</option>
												<option value='LICEUL TEHNOLOGIC "CAROL I" VALEA DOFTANEI'>LICEUL TEHNOLOGIC "CAROL I" VALEA DOFTANEI</option>
												<option value='LICEUL TEHNOLOGIC "CONSTANTIN CANTACUZINO" BĂICOI'>LICEUL TEHNOLOGIC "CONSTANTIN CANTACUZINO" BĂICOI</option>
												<option value='LICEUL TEHNOLOGIC "LUDOVIC MRAZEK" PLOIEȘTI'>LICEUL TEHNOLOGIC "LUDOVIC MRAZEK" PLOIEȘTI</option>
												<option value='LICEUL TEHNOLOGIC "TASE DUMITRESCU" MIZIL'>LICEUL TEHNOLOGIC "TASE DUMITRESCU" MIZIL</option>
												<option value='LICEUL TEHNOLOGIC "TEODOR DIAMANT" BOLDEȘTI-SCĂENI'>LICEUL TEHNOLOGIC "TEODOR DIAMANT" BOLDEȘTI-SCĂENI</option>
												<option value='LICEUL TEHNOLOGIC ADMINISTRATIV ȘI DE SERVICII "VICTOR SLĂVESCU" PLOIEȘTI'>LICEUL TEHNOLOGIC ADMINISTRATIV ȘI DE SERVICII "VICTOR SLĂVESCU" PLOIEȘTI</option>
												<option value='LICEUL TEHNOLOGIC AGRICOL BĂRCĂNEȘTI'>LICEUL TEHNOLOGIC AGRICOL BĂRCĂNEȘTI</option>
												<option value='LICEUL TEHNOLOGIC AGROMONTAN "ROMEO CONSTANTINESCU" VĂLENII DE MUNTE'>LICEUL TEHNOLOGIC AGROMONTAN "ROMEO CONSTANTINESCU" VĂLENII DE MUNTE</option>
												<option value='LICEUL TEHNOLOGIC DE SERVICII "SFÂNTUL APOSTOL ANDREI" PLOIEȘTI'>LICEUL TEHNOLOGIC DE SERVICII "SFÂNTUL APOSTOL ANDREI" PLOIEȘTI</option>
												<option value='LICEUL TEHNOLOGIC DE TRANSPORTURI PLOIEȘTI'>LICEUL TEHNOLOGIC DE TRANSPORTURI PLOIEȘTI</option>
												<option value='LICEUL TEHNOLOGIC ENERGETIC CÂMPINA'>LICEUL TEHNOLOGIC ENERGETIC CÂMPINA</option>
												<option value='LICEUL TEHNOLOGIC MECANIC CÂMPINA'>LICEUL TEHNOLOGIC MECANIC CÂMPINA</option>
												<option value='LICEUL TEHNOLOGIC CIORANII DE JOS'>LICEUL TEHNOLOGIC CIORANII DE JOS</option>
												<option value='LICEUL TEHNOLOGIC GHEABA'>LICEUL TEHNOLOGIC GHEABA</option>
												<option value='LICEUL TEORETIC "AUREL VLAICU" BREAZA'>LICEUL TEORETIC "AUREL VLAICU" BREAZA</option>
												<option value='LICEUL TEORETIC "BRÂNCOVEANU VODĂ" URLAȚI'>LICEUL TEORETIC "BRÂNCOVEANU VODĂ" URLAȚI</option>
												<option value='LICEUL TEORETIC "GRIGORE TOCILESCU" MIZIL'>LICEUL TEORETIC "GRIGORE TOCILESCU" MIZIL</option>
												<option value='LICEUL TEORETIC "ȘERBAN VODĂ" SLĂNIC'>LICEUL TEORETIC "ȘERBAN VODĂ" SLĂNIC</option>
												<option value='LICEUL TEORETIC FILIPEȘTII DE PĂDURE'>LICEUL TEORETIC FILIPEȘTII DE PĂDURE</option>
												<option value='LICEUL TEORETIC AZUGA'>LICEUL TEORETIC AZUGA</option>
												<option value='COLEGIUL NATIONAL "SILVANIA" ZALĂU'>COLEGIUL NATIONAL "SILVANIA" ZALĂU</option>
												<option value='COLEGIUL NAȚIONAL "SIMION BĂRNUȚIU" ȘIMLEU SILVANIEI'>COLEGIUL NAȚIONAL "SIMION BĂRNUȚIU" ȘIMLEU SILVANIEI</option>
												<option value='COLEGIUL TEHNIC "ALESANDRU PAPIU ILARIAN" ZALĂU'>COLEGIUL TEHNIC "ALESANDRU PAPIU ILARIAN" ZALĂU</option>
												<option value='COLEGIUL TEHNIC "IULIU MANIU" ȘIMLEU SILVANIEI'>COLEGIUL TEHNIC "IULIU MANIU" ȘIMLEU SILVANIEI</option>
												<option value='LICEUL CU PROGRAM SPORTIV "AVRAM IANCU" ZALĂU'>LICEUL CU PROGRAM SPORTIV "AVRAM IANCU" ZALĂU</option>
												<option value='LICEUL DE ARTĂ "IOAN SIMA" ZALĂU'>LICEUL DE ARTĂ "IOAN SIMA" ZALĂU</option>
												<option value='LICEUL ORTODOX "SF. NICOLAE" ZALĂU'>LICEUL ORTODOX "SF. NICOLAE" ZALĂU</option>
												<option value='LICEUL PEDAGOGIC "GHEORGHE ȘINCAI" ZALĂU'>LICEUL PEDAGOGIC "GHEORGHE ȘINCAI" ZALĂU</option>
												<option value='LICEUL REFORMAT "WESSELENYI" ZALĂU'>LICEUL REFORMAT "WESSELENYI" ZALĂU</option>
												<option value='LICEUL TEHNOLOGIC "CSEREY-GOGA" CRASNA'>LICEUL TEHNOLOGIC "CSEREY-GOGA" CRASNA</option>
												<option value='LICEUL TEHNOLOGIC "GHEORGHE POP DE BĂSEȘTI" CEHU SILVANIEI'>LICEUL TEHNOLOGIC "GHEORGHE POP DE BĂSEȘTI" CEHU SILVANIEI</option>
												<option value='LICEUL TEHNOLOGIC "IOACHIM POP" ILEANDA'>LICEUL TEHNOLOGIC "IOACHIM POP" ILEANDA</option>
												<option value='LICEUL TEHNOLOGIC "IOAN OSSIAN" ȘIMLEU SILVANIEI'>LICEUL TEHNOLOGIC "IOAN OSSIAN" ȘIMLEU SILVANIEI</option>
												<option value='LICEUL TEHNOLOGIC "LIVIU REBREANU" HIDA'>LICEUL TEHNOLOGIC "LIVIU REBREANU" HIDA</option>
												<option value='LICEUL TEHNOLOGIC "MIHAI VITEAZUL" ZALĂU'>LICEUL TEHNOLOGIC "MIHAI VITEAZUL" ZALĂU</option>
												<option value='LICEUL TEHNOLOGIC "OCTAVIAN GOGA" JIBOU'>LICEUL TEHNOLOGIC "OCTAVIAN GOGA" JIBOU</option>
												<option value='LICEUL TEHNOLOGIC "VOIEVODUL GELU" ZALĂU'>LICEUL TEHNOLOGIC "VOIEVODUL GELU" ZALĂU</option>
												<option value='LICEUL TEHNOLOGIC NR. 1 GÎLGĂU'>LICEUL TEHNOLOGIC NR. 1 GÎLGĂU</option>
												<option value='LICEUL TEHNOLOGIC NR. 1 SĂRMĂȘAG'>LICEUL TEHNOLOGIC NR. 1 SĂRMĂȘAG</option>
												<option value='LICEUL TEHNOLOGIC NR. 1 SURDUC'>LICEUL TEHNOLOGIC NR. 1 SURDUC</option>
												<option value='LICEUL TEORETIC "ION AGARBICEANU" JIBOU'>LICEUL TEORETIC "ION AGARBICEANU" JIBOU</option>
												<option value='COLEGIUL ECONOMIC "GHEORGHE DRAGOȘ" SATU MARE'>COLEGIUL ECONOMIC "GHEORGHE DRAGOȘ" SATU MARE</option>
												<option value='COLEGIUL NAȚIONAL "DOAMNA STANCA" SATU MARE'>COLEGIUL NAȚIONAL "DOAMNA STANCA" SATU MARE</option>
												<option value='COLEGIUL NAŢIONAL "IOAN SLAVICI" SATU MARE'>COLEGIUL NAŢIONAL "IOAN SLAVICI" SATU MARE</option>
												<option value='COLEGIUL NATIONAL "KOLCSEY FERENC" SATU MARE'>COLEGIUL NATIONAL "KOLCSEY FERENC" SATU MARE</option>
												<option value='COLEGIUL NAȚIONAL "MIHAI EMINESCU" SATU MARE'>COLEGIUL NAȚIONAL "MIHAI EMINESCU" SATU MARE</option>
												<option value='COLEGIUL TEHNIC "ELISA ZAMFIRESCU" SATU MARE'>COLEGIUL TEHNIC "ELISA ZAMFIRESCU" SATU MARE</option>
												<option value='COLEGIUL TEHNIC "IULIU MANIU" CAREI'>COLEGIUL TEHNIC "IULIU MANIU" CAREI</option>
												<option value='COLEGIUL TEHNIC "UNIO-TRAIAN VUIA" SATU MARE'>COLEGIUL TEHNIC "UNIO-TRAIAN VUIA" SATU MARE</option>
												<option value='COLEGIUL TEHNIC DE TRANSPORTURI ȘI TELECOMUNICAȚII "ION I. C. BRĂTIANU" SATU MARE'>COLEGIUL TEHNIC DE TRANSPORTURI ȘI TELECOMUNICAȚII "ION I. C. BRĂTIANU" SATU MARE</option>
												<option value='LICEUL CU PROGRAM SPORTIV SATU MARE'>LICEUL CU PROGRAM SPORTIV SATU MARE</option>
												<option value='LICEUL DE ARTE "AUREL POPP" SATU MARE'>LICEUL DE ARTE "AUREL POPP" SATU MARE</option>
												<option value='LICEUL REFORMAT SATU MARE'>LICEUL REFORMAT SATU MARE</option>
												<option value='LICEUL ROMANO-CATOLIC "JOSEPHUS CALASANTIUS" CAREI'>LICEUL ROMANO-CATOLIC "JOSEPHUS CALASANTIUS" CAREI</option>
												<option value='LICEUL TEHNOLOGIC "ANGHEL SALIGNY" TURȚ'>LICEUL TEHNOLOGIC "ANGHEL SALIGNY" TURȚ</option>
												<option value='LICEUL TEHNOLOGIC "CONSTANTIN BRÂNCUȘI" SATU MARE'>LICEUL TEHNOLOGIC "CONSTANTIN BRÂNCUȘI" SATU MARE</option>
												<option value='LICEUL TEHNOLOGIC "GEORGE BARIȚIU" LIVADA'>LICEUL TEHNOLOGIC "GEORGE BARIȚIU" LIVADA</option>
												<option value='LICEUL TEHNOLOGIC "IONIȚĂ G. ANDRON" NEGREȘTI-OAȘ'>LICEUL TEHNOLOGIC "IONIȚĂ G. ANDRON" NEGREȘTI-OAȘ</option>
												<option value='LICEUL TEHNOLOGIC "PETOFI SANDOR" LAZURI'>LICEUL TEHNOLOGIC "PETOFI SANDOR" LAZURI</option>
												<option value='LICEUL TEHNOLOGIC "SIMION BĂRNUȚIU" CAREI'>LICEUL TEHNOLOGIC "SIMION BĂRNUȚIU" CAREI</option>
												<option value='LICEUL TEHNOLOGIC DE INDUSTRIE ALIMENTARĂ "GEORGE EMIL PALADE" SATU MARE'>LICEUL TEHNOLOGIC DE INDUSTRIE ALIMENTARĂ "GEORGE EMIL PALADE" SATU MARE</option>
												<option value='LICEUL TEHNOLOGIC TARNA MARE'>LICEUL TEHNOLOGIC TARNA MARE</option>
												<option value='LICEUL TEHNOLOGIC TĂȘNAD'>LICEUL TEHNOLOGIC TĂȘNAD</option>
												<option value='LICEUL TEOLOGIC ORTODOX "NICOLAE STEINHARDT" SATU MARE'>LICEUL TEOLOGIC ORTODOX "NICOLAE STEINHARDT" SATU MARE</option>
												<option value='LICEUL TEOLOGIC ROMANO-CATOLIC "HAM JANOS" SATU MARE'>LICEUL TEOLOGIC ROMANO-CATOLIC "HAM JANOS" SATU MARE</option>
												<option value='LICEUL TEORETIC CAREI'>LICEUL TEORETIC CAREI</option>
												<option value='LICEUL TEORETIC GERMAN "JOHANN ETTINGER" SATU MARE'>LICEUL TEORETIC GERMAN "JOHANN ETTINGER" SATU MARE</option>
												<option value='LICEUL TEORETIC NEGREȘTI-OAȘ'>LICEUL TEORETIC NEGREȘTI-OAȘ</option>
												<option value='COLEGIUL AGRICOL "D. P. BARCIANU" SIBIU'>COLEGIUL AGRICOL "D. P. BARCIANU" SIBIU</option>
												<option value='COLEGIUL ECONOMIC "G. BARIȚIU" SIBIU'>COLEGIUL ECONOMIC "G. BARIȚIU" SIBIU</option>
												<option value='COLEGIUL NAȚIONAL "GH. LAZĂR" SIBIU'>COLEGIUL NAȚIONAL "GH. LAZĂR" SIBIU</option>
												<option value='COLEGIUL NAȚIONAL "O. GOGA" SIBIU'>COLEGIUL NAȚIONAL "O. GOGA" SIBIU</option>
												<option value='COLEGIUL NAȚIONAL "SAMUEL VON BRUKENTHAL" SIBIU'>COLEGIUL NAȚIONAL "SAMUEL VON BRUKENTHAL" SIBIU</option>
												<option value='COLEGIUL NAȚIONAL PEDAGOGIC "A. ȘAGUNA" SIBIU'>COLEGIUL NAȚIONAL PEDAGOGIC "A. ȘAGUNA" SIBIU</option>
												<option value='COLEGIUL TEHNIC "A. T. LAURIAN" AGNITA'>COLEGIUL TEHNIC "A. T. LAURIAN" AGNITA</option>
												<option value='COLEGIUL TEHNIC "CIBINIUM" SIBIU'>COLEGIUL TEHNIC "CIBINIUM" SIBIU</option>
												<option value='COLEGIUL TEHNIC "INDEPENDENȚA" SIBIU'>COLEGIUL TEHNIC "INDEPENDENȚA" SIBIU</option>
												<option value='COLEGIUL TEHNIC "MEDIENSIS" MEDIAȘ'>COLEGIUL TEHNIC "MEDIENSIS" MEDIAȘ</option>
												<option value='COLEGIUL TEHNIC DE INDUSTRIE ALIMENTARĂ "TEREZIANUM" SIBIU'>COLEGIUL TEHNIC DE INDUSTRIE ALIMENTARĂ "TEREZIANUM" SIBIU</option>
												<option value='COLEGIUL TEHNIC ENERGETIC SIBIU'>COLEGIUL TEHNIC ENERGETIC SIBIU</option>
												<option value='LICEUL DE ARTĂ SIBIU'>LICEUL DE ARTĂ SIBIU</option>
												<option value='LICEUL TEHNOLOGIC "AVRAM IANCU" SIBIU'>LICEUL TEHNOLOGIC "AVRAM IANCU" SIBIU</option>
												<option value='LICEUL TEHNOLOGIC "HENRI COANDĂ" SIBIU'>LICEUL TEHNOLOGIC "HENRI COANDĂ" SIBIU</option>
												<option value='LICEUL TEHNOLOGIC "ILIE MĂCELARIU" MIERCUREA SIBIULUI'>LICEUL TEHNOLOGIC "ILIE MĂCELARIU" MIERCUREA SIBIULUI</option>
												<option value='LICEUL TEHNOLOGIC "IOAN LUPAȘ" SĂLIȘTE'>LICEUL TEHNOLOGIC "IOAN LUPAȘ" SĂLIȘTE</option>
												<option value='LICEUL TEHNOLOGIC "JOHANNES LEBEL" TĂLMACIU'>LICEUL TEHNOLOGIC "JOHANNES LEBEL" TĂLMACIU</option>
												<option value='LICEUL TEHNOLOGIC "NICOLAE TECLU" COPȘA MICĂ'>LICEUL TEHNOLOGIC "NICOLAE TECLU" COPȘA MICĂ</option>
												<option value='LICEUL TEHNOLOGIC "ȘCOALA NAȚIONALĂ DE GAZ" MEDIAȘ'>LICEUL TEHNOLOGIC "ȘCOALA NAȚIONALĂ DE GAZ" MEDIAȘ</option>
												<option value='LICEUL TEHNOLOGIC "TIMOTEI CIPARIU" DUMBRĂVENI'>LICEUL TEHNOLOGIC "TIMOTEI CIPARIU" DUMBRĂVENI</option>
												<option value='LICEUL TEHNOLOGIC AUTOMECANICA MEDIAȘ'>LICEUL TEHNOLOGIC AUTOMECANICA MEDIAȘ</option>
												<option value='LICEUL TEHNOLOGIC CISNĂDIE'>LICEUL TEHNOLOGIC CISNĂDIE</option>
												<option value='LICEUL TEHNOLOGIC CONSTRUCȚII ȘI ARHITECTURĂ "CAROL I" SIBIU'>LICEUL TEHNOLOGIC CONSTRUCȚII ȘI ARHITECTURĂ "CAROL I" SIBIU</option>
												<option value='LICEUL TEHNOLOGIC MÂRȘA'>LICEUL TEHNOLOGIC MÂRȘA</option>
												<option value='LICEUL TEOLOGIC BAPTIST "BETANIA" SIBIU'>LICEUL TEOLOGIC BAPTIST "BETANIA" SIBIU</option>
												<option value='LICEUL TEORETIC "AXENTE SEVER" MEDIAȘ'>LICEUL TEORETIC "AXENTE SEVER" MEDIAȘ</option>
												<option value='LICEUL TEORETIC "C. NOICA" SIBIU'>LICEUL TEORETIC "C. NOICA" SIBIU</option>
												<option value='LICEUL TEORETIC "GH. LAZĂR" AVRIG'>LICEUL TEORETIC "GH. LAZĂR" AVRIG</option>
												<option value='LICEUL TEORETIC "GUSTAV GUNDISCH" CISNĂDIE'>LICEUL TEORETIC "GUSTAV GUNDISCH" CISNĂDIE</option>
												<option value='LICEUL TEORETIC "ONISIFOR GHIBU" SIBIU'>LICEUL TEORETIC "ONISIFOR GHIBU" SIBIU</option>
												<option value='LICEUL TEORETIC "ST. L. ROTH" MEDIAȘ'>LICEUL TEORETIC "ST. L. ROTH" MEDIAȘ</option>
												<option value='LICEUL TEORETIC DUMBRĂVENI'>LICEUL TEORETIC DUMBRĂVENI</option>
												<option value='COLEGIUL "ALEXANDRU CEL BUN" GURA HUMORULUI'>COLEGIUL "ALEXANDRU CEL BUN" GURA HUMORULUI</option>
												<option value='COLEGIUL "ANDRONIC MOTRESCU" RĂDĂUȚI'>COLEGIUL "ANDRONIC MOTRESCU" RĂDĂUȚI</option>
												<option value='COLEGIUL "VASILE LOVINESCU" FĂLTICENI'>COLEGIUL "VASILE LOVINESCU" FĂLTICENI</option>
												<option value='COLEGIUL DE ARTĂ "CIPRIAN PORUMBESCU" SUCEAVA'>COLEGIUL DE ARTĂ "CIPRIAN PORUMBESCU" SUCEAVA</option>
												<option value='COLEGIUL ECONOMIC "DIMITRIE CANTEMIR" SUCEAVA'>COLEGIUL ECONOMIC "DIMITRIE CANTEMIR" SUCEAVA</option>
												<option value='COLEGIUL NAȚIONAL "DRAGOȘ VODĂ" CÂMPULUNG MOLDOVENESC'>COLEGIUL NAȚIONAL "DRAGOȘ VODĂ" CÂMPULUNG MOLDOVENESC</option>
												<option value='COLEGIUL NAȚIONAL "EUDOXIU HURMUZACHI" RĂDĂUȚI'>COLEGIUL NAȚIONAL "EUDOXIU HURMUZACHI" RĂDĂUȚI</option>
												<option value='COLEGIUL NAȚIONAL "MIHAI EMINESCU" SUCEAVA'>COLEGIUL NAȚIONAL "MIHAI EMINESCU" SUCEAVA</option>
												<option value='COLEGIUL NAȚIONAL "NICU GANE" FĂLTICENI'>COLEGIUL NAȚIONAL "NICU GANE" FĂLTICENI</option>
												<option value='COLEGIUL NAȚIONAL "PETRU RAREȘ" SUCEAVA'>COLEGIUL NAȚIONAL "PETRU RAREȘ" SUCEAVA</option>
												<option value='COLEGIUL NAȚIONAL "ȘTEFAN CEL MARE" SUCEAVA'>COLEGIUL NAȚIONAL "ȘTEFAN CEL MARE" SUCEAVA</option>
												<option value='COLEGIUL NAȚIONAL DE INFORMATICĂ "SPIRU HARET" SUCEAVA'>COLEGIUL NAȚIONAL DE INFORMATICĂ "SPIRU HARET" SUCEAVA</option>
												<option value='COLEGIUL NAȚIONAL MILITAR "ȘTEFAN CEL MARE" CÂMPULUNG MOLDOVENESC'>COLEGIUL NAȚIONAL MILITAR "ȘTEFAN CEL MARE" CÂMPULUNG MOLDOVENESC</option>
												<option value='COLEGIUL SILVIC "BUCOVINA" CÂMPULUNG MOLDOVENESC'>COLEGIUL SILVIC "BUCOVINA" CÂMPULUNG MOLDOVENESC</option>
												<option value='COLEGIUL TEHNIC "AL. I. CUZA" SUCEAVA'>COLEGIUL TEHNIC "AL. I. CUZA" SUCEAVA</option>
												<option value='COLEGIUL TEHNIC "LATCU VODĂ" SIRET'>COLEGIUL TEHNIC "LATCU VODĂ" SIRET</option>
												<option value='COLEGIUL TEHNIC "MIHAI BĂCESCU" FĂLTICENI'>COLEGIUL TEHNIC "MIHAI BĂCESCU" FĂLTICENI</option>
												<option value='COLEGIUL TEHNIC "PETRU MUȘAT" SUCEAVA'>COLEGIUL TEHNIC "PETRU MUȘAT" SUCEAVA</option>
												<option value='COLEGIUL TEHNIC "SAMUIL ISOPESCU" SUCEAVA'>COLEGIUL TEHNIC "SAMUIL ISOPESCU" SUCEAVA</option>
												<option value='COLEGIUL TEHNIC DE INDUSTRIE ALIMENTARĂ SUCEAVA'>COLEGIUL TEHNIC DE INDUSTRIE ALIMENTARĂ SUCEAVA</option>
												<option value='COLEGIUL TEHNIC RĂDĂUȚI'>COLEGIUL TEHNIC RĂDĂUȚI</option>
												<option value='LICEUL CU PROGRAM SPORTIV SUCEAVA'>LICEUL CU PROGRAM SPORTIV SUCEAVA</option>
												<option value='LICEUL TEHNOLOGIC "ION NISTOR" VICOVU DE SUS'>LICEUL TEHNOLOGIC "ION NISTOR" VICOVU DE SUS</option>
												<option value='LICEUL TEHNOLOGIC "IORGU VÂRNAV LITEANU" LITENI'>LICEUL TEHNOLOGIC "IORGU VÂRNAV LITEANU" LITENI</option>
												<option value='LICEUL TEHNOLOGIC "MIHAI EMINESCU" DUMBRAVENI'>LICEUL TEHNOLOGIC "MIHAI EMINESCU" DUMBRAVENI</option>
												<option value='LICEUL TEHNOLOGIC "NICANOR MOROȘAN" PÂRTEȘTII DE JOS'>LICEUL TEHNOLOGIC "NICANOR MOROȘAN" PÂRTEȘTII DE JOS</option>
												<option value='LICEUL TEHNOLOGIC "NICOLAI NANU" BROȘTENI'>LICEUL TEHNOLOGIC "NICOLAI NANU" BROȘTENI</option>
												<option value='LICEUL TEHNOLOGIC "OLTEA DOAMNA" DOLHASCA'>LICEUL TEHNOLOGIC "OLTEA DOAMNA" DOLHASCA</option>
												<option value='LICEUL TEHNOLOGIC "TOMȘA VODĂ" SOLCA'>LICEUL TEHNOLOGIC "TOMȘA VODĂ" SOLCA</option>
												<option value='LICEUL TEHNOLOGIC "VASILE COCEA" MOLDOVIȚA'>LICEUL TEHNOLOGIC "VASILE COCEA" MOLDOVIȚA</option>
												<option value='LICEUL TEHNOLOGIC "VASILE DEAC" VATRA DORNEI'>LICEUL TEHNOLOGIC "VASILE DEAC" VATRA DORNEI</option>
												<option value='LICEUL TEHNOLOGIC "VASILE GHERASIM" MARGINEA'>LICEUL TEHNOLOGIC "VASILE GHERASIM" MARGINEA</option>
												<option value='LICEUL TEHNOLOGIC CAJVANA'>LICEUL TEHNOLOGIC CAJVANA</option>
												<option value='LICEUL TEHNOLOGIC DORNA CANDRENILOR'>LICEUL TEHNOLOGIC DORNA CANDRENILOR</option>
												<option value='LICEUL TEHNOLOGIC NR. 1 CÂMPULUNG MOLDOVENESC'>LICEUL TEHNOLOGIC NR. 1 CÂMPULUNG MOLDOVENESC</option>
												<option value='LICEUL TEORETIC "ION LUCA" VATRA DORNEI'>LICEUL TEORETIC "ION LUCA" VATRA DORNEI</option>
												<option value='SEMINARUL TEOLOGIC LICEAL ORTODOX "MITROPOLITUL DOSOFTEI" SUCEAVA'>SEMINARUL TEOLOGIC LICEAL ORTODOX "MITROPOLITUL DOSOFTEI" SUCEAVA</option>
												<option value='COLEGIUL NAȚIONAL "AL. D. GHICA" ALEXANDRIA'>COLEGIUL NAȚIONAL "AL. D. GHICA" ALEXANDRIA</option>
												<option value='COLEGIUL NAȚIONAL "ALEXANDRU IOAN CUZA" ALEXANDRIA'>COLEGIUL NAȚIONAL "ALEXANDRU IOAN CUZA" ALEXANDRIA</option>
												<option value='COLEGIUL NAȚIONAL "ANASTASESCU" ROȘIORI DE VEDE'>COLEGIUL NAȚIONAL "ANASTASESCU" ROȘIORI DE VEDE</option>
												<option value='COLEGIUL NAŢIONAL "UNIREA" TURNU MĂGURELE'>COLEGIUL NAŢIONAL "UNIREA" TURNU MĂGURELE</option>
												<option value='COLEGIUL TEHNIC "ANGHEL SALIGNY" ROȘIORI DE VEDE'>COLEGIUL TEHNIC "ANGHEL SALIGNY" ROȘIORI DE VEDE</option>
												<option value='COLEGIUL TEHNIC "GENERAL D. PRAPORGESCU" TURNU MĂGURELE'>COLEGIUL TEHNIC "GENERAL D. PRAPORGESCU" TURNU MĂGURELE</option>
												<option value='LICEUL PEDAGOGIC "MIRCEA SCARLAT" ALEXANDRIA'>LICEUL PEDAGOGIC "MIRCEA SCARLAT" ALEXANDRIA</option>
												<option value='LICEUL TEHNOLOGIC "ANDREI ȘAGUNA" BOTOROAGA'>LICEUL TEHNOLOGIC "ANDREI ȘAGUNA" BOTOROAGA</option>
												<option value='LICEUL TEHNOLOGIC "EMIL RACOVIȚĂ" ROȘIORI DE VEDE'>LICEUL TEHNOLOGIC "EMIL RACOVIȚĂ" ROȘIORI DE VEDE</option>
												<option value='LICEUL TEHNOLOGIC "NICOLAE BĂLCESCU" ALEXANDRIA'>LICEUL TEHNOLOGIC "NICOLAE BĂLCESCU" ALEXANDRIA</option>
												<option value='LICEUL TEHNOLOGIC "SF. HARALAMBIE" TURNU MĂGURELE'>LICEUL TEHNOLOGIC "SF. HARALAMBIE" TURNU MĂGURELE</option>
												<option value='LICEUL TEHNOLOGIC "VIRGIL MADGEARU" ROȘIORI DE VEDE'>LICEUL TEHNOLOGIC "VIRGIL MADGEARU" ROȘIORI DE VEDE</option>
												<option value='LICEUL TEHNOLOGIC DRĂGĂNEȘTI-VLAȘCA'>LICEUL TEHNOLOGIC DRĂGĂNEȘTI-VLAȘCA</option>
												<option value='LICEUL TEHNOLOGIC MĂGURA'>LICEUL TEHNOLOGIC MĂGURA</option>
												<option value='LICEUL TEHNOLOGIC NR. 1 ALEXANDRIA'>LICEUL TEHNOLOGIC NR. 1 ALEXANDRIA</option>
												<option value='LICEUL TEORETIC "CONSTANTIN NOICA" ALEXANDRIA'>LICEUL TEORETIC "CONSTANTIN NOICA" ALEXANDRIA</option>
												<option value='LICEUL TEORETIC "MARIN PREDA" TURNU MĂGURELE'>LICEUL TEORETIC "MARIN PREDA" TURNU MĂGURELE</option>
												<option value='LICEUL TEORETIC OLTENI'>LICEUL TEORETIC OLTENI</option>
												<option value='LICEUL TEORETIC PIATRA'>LICEUL TEORETIC PIATRA</option>
												<option value='LICEUL TEORETIC VIDELE'>LICEUL TEORETIC VIDELE</option>
												<option value='LICEUL TEORETIC ZIMNICEA'>LICEUL TEORETIC ZIMNICEA</option>
												<option value='SEMINARUL TEOLOGIC ORTODOX "SF. CALINIC CERNICANUL" TURNU MĂGURELE'>SEMINARUL TEOLOGIC ORTODOX "SF. CALINIC CERNICANUL" TURNU MĂGURELE</option>
												<option value='COLEGIUL DE SILVICULTURĂ ȘI AGRICULTURĂ "CASA VERDE" TIMIȘOARA'>COLEGIUL DE SILVICULTURĂ ȘI AGRICULTURĂ "CASA VERDE" TIMIȘOARA</option>
												<option value='COLEGIUL ECONOMIC "F. S. NITTI" TIMIȘOARA'>COLEGIUL ECONOMIC "F. S. NITTI" TIMIȘOARA</option>
												<option value='COLEGIUL NAȚIONAL "ANA ASLAN" TIMIȘOARA'>COLEGIUL NAȚIONAL "ANA ASLAN" TIMIȘOARA</option>
												<option value='COLEGIUL NAȚIONAL "CONSTANTIN DIACONOVICI LOGA" TIMIȘOARA'>COLEGIUL NAȚIONAL "CONSTANTIN DIACONOVICI LOGA" TIMIȘOARA</option>
												<option value='COLEGIUL NAȚIONAL "CORIOLAN BREDICEANU" LUGOJ'>COLEGIUL NAȚIONAL "CORIOLAN BREDICEANU" LUGOJ</option>
												<option value='COLEGIUL NAȚIONAL "IULIA HAȘDEU" LUGOJ'>COLEGIUL NAȚIONAL "IULIA HAȘDEU" LUGOJ</option>
												<option value='COLEGIUL NAȚIONAL BANĂȚEAN TIMIȘOARA'>COLEGIUL NAȚIONAL BANĂȚEAN TIMIȘOARA</option>
												<option value='COLEGIUL NAȚIONAL DE ARTĂ "ION VIDU" TIMIȘOARA'>COLEGIUL NAȚIONAL DE ARTĂ "ION VIDU" TIMIȘOARA</option>
												<option value='COLEGIUL TEHNIC "AZUR" TIMIȘOARA'>COLEGIUL TEHNIC "AZUR" TIMIȘOARA</option>
												<option value='COLEGIUL TEHNIC "EMANUIL UNGUREANU" TIMIȘOARA'>COLEGIUL TEHNIC "EMANUIL UNGUREANU" TIMIȘOARA</option>
												<option value='COLEGIUL TEHNIC "HENRI COANDĂ" TIMIȘOARA'>COLEGIUL TEHNIC "HENRI COANDĂ" TIMIȘOARA</option>
												<option value='COLEGIUL TEHNIC "ION MINCU" TIMIȘOARA'>COLEGIUL TEHNIC "ION MINCU" TIMIȘOARA</option>
												<option value='COLEGIUL TEHNIC "ION I.C. BRĂTIANU" TIMIȘOARA'>COLEGIUL TEHNIC "ION I.C. BRĂTIANU" TIMIȘOARA</option>
												<option value='COLEGIUL TEHNIC "VALERIU BRANIȘTE" LUGOJ'>COLEGIUL TEHNIC "VALERIU BRANIȘTE" LUGOJ</option>
												<option value='COLEGIUL TEHNIC DE VEST TIMIȘOARA'>COLEGIUL TEHNIC DE VEST TIMIȘOARA</option>
												<option value='COLEGIUL TEHNIC ELECTROTIMIȘ TIMIȘOARA'>COLEGIUL TEHNIC ELECTROTIMIȘ TIMIȘOARA</option>
												<option value='COLEGIUL TEHNIC ENERGETIC "REGELE FERDINAND I" TIMIȘOARA'>COLEGIUL TEHNIC ENERGETIC "REGELE FERDINAND I" TIMIȘOARA</option>
												<option value='LICEUL CU PROGRAM SPORTIV "BANATUL" TIMIȘOARA'>LICEUL CU PROGRAM SPORTIV "BANATUL" TIMIȘOARA</option>
												<option value='LICEUL DE ARTE PLASTICE TIMIȘOARA'>LICEUL DE ARTE PLASTICE TIMIȘOARA</option>
												<option value='LICEUL PEDAGOGIC "CARMEN SYLVA" TIMIȘOARA'>LICEUL PEDAGOGIC "CARMEN SYLVA" TIMIȘOARA</option>
												<option value='LICEUL TEHNOLOGIC "AUREL VLAICU" LUGOJ'>LICEUL TEHNOLOGIC "AUREL VLAICU" LUGOJ</option>
												<option value='LICEUL TEHNOLOGIC "CRISTOFOR NAKO" SÂNNICOLAU MARE'>LICEUL TEHNOLOGIC "CRISTOFOR NAKO" SÂNNICOLAU MARE</option>
												<option value='LICEUL TEHNOLOGIC "ROMULUS PARASCHIVOIU" LOVRIN'>LICEUL TEHNOLOGIC "ROMULUS PARASCHIVOIU" LOVRIN</option>
												<option value='LICEUL TEHNOLOGIC "SFÂNTUL NICOLAE" DETA'>LICEUL TEHNOLOGIC "SFÂNTUL NICOLAE" DETA</option>
												<option value='LICEUL TEHNOLOGIC "TRAIAN GROZĂVESCU" NĂDRAG'>LICEUL TEHNOLOGIC "TRAIAN GROZĂVESCU" NĂDRAG</option>
												<option value='LICEUL TEHNOLOGIC DE INDUSTRIE ALIMENTARĂ TIMIȘOARA'>LICEUL TEHNOLOGIC DE INDUSTRIE ALIMENTARĂ TIMIȘOARA</option>
												<option value='LICEUL TEHNOLOGIC JIMBOLIA'>LICEUL TEHNOLOGIC JIMBOLIA</option>
												<option value='LICEUL TEHNOLOGIC TRANSPORTURI AUTO TIMIȘOARA'>LICEUL TEHNOLOGIC TRANSPORTURI AUTO TIMIȘOARA</option>
												<option value='LICEUL TEOLOGIC BAPTIST TIMIȘOARA'>LICEUL TEOLOGIC BAPTIST TIMIȘOARA</option>
												<option value='LICEUL TEOLOGIC PENTICOSTAL LOGOS TIMIȘOARA'>LICEUL TEOLOGIC PENTICOSTAL LOGOS TIMIȘOARA</option>
												<option value='LICEUL TEOLOGIC ROMANO-CATOLIC "GERHARDINUM" TIMIȘOARA'>LICEUL TEOLOGIC ROMANO-CATOLIC "GERHARDINUM" TIMIȘOARA</option>
												<option value='LICEUL TEORETIC "ALEXANDRU MOCIONI" CIACOVA'>LICEUL TEORETIC "ALEXANDRU MOCIONI" CIACOVA</option>
												<option value='LICEUL TEORETIC "BARTOK BELA" TIMIȘOARA'>LICEUL TEORETIC "BARTOK BELA" TIMIȘOARA</option>
												<option value='LICEUL TEORETIC "DAVID VONIGA" GIROC'>LICEUL TEORETIC "DAVID VONIGA" GIROC</option>
												<option value='LICEUL TEORETIC "DOSITEI OBRADOVICI" TIMIȘOARA'>LICEUL TEORETIC "DOSITEI OBRADOVICI" TIMIȘOARA</option>
												<option value='LICEUL TEORETIC "GRIGORE MOISIL" TIMIȘOARA'>LICEUL TEORETIC "GRIGORE MOISIL" TIMIȘOARA</option>
												<option value='LICEUL TEORETIC "IOAN JEBELEAN" SÂNNICOLAU MARE'>LICEUL TEORETIC "IOAN JEBELEAN" SÂNNICOLAU MARE</option>
												<option value='LICEUL TEORETIC "J.L. CALDERON" TIMIȘOARA'>LICEUL TEORETIC "J.L. CALDERON" TIMIȘOARA</option>
												<option value='LICEUL TEORETIC "NIKOLAUS LENAU" TIMIȘOARA'>LICEUL TEORETIC "NIKOLAUS LENAU" TIMIȘOARA</option>
												<option value='LICEUL TEORETIC "SFINȚII KIRIL ȘI METODII" DUDEȘTII VECHI'>LICEUL TEORETIC "SFINȚII KIRIL ȘI METODII" DUDEȘTII VECHI</option>
												<option value='LICEUL TEORETIC "TRAIAN VUIA" FĂGET'>LICEUL TEORETIC "TRAIAN VUIA" FĂGET</option>
												<option value='LICEUL TEORETIC "VLAD ȚEPEȘ" TIMIȘOARA'>LICEUL TEORETIC "VLAD ȚEPEȘ" TIMIȘOARA</option>
												<option value='LICEUL TEORETIC "WILLIAM SHAKESPEARE" TIMIȘOARA'>LICEUL TEORETIC "WILLIAM SHAKESPEARE" TIMIȘOARA</option>
												<option value='LICEUL TEORETIC PECIU NOU'>LICEUL TEORETIC PECIU NOU</option>
												<option value='LICEUL TEORETIC PERIAM'>LICEUL TEORETIC PERIAM</option>
												<option value='LICEUL TEORETIC BUZIAȘ'>LICEUL TEORETIC BUZIAȘ</option>
												<option value='LICEUL TEORETIC GĂTAIA'>LICEUL TEORETIC GĂTAIA</option>
												<option value='LICEUL TEORETIC RECAȘ'>LICEUL TEORETIC RECAȘ</option>
												<option value='LICEUL WALDORF TIMIȘOARA'>LICEUL WALDORF TIMIȘOARA</option>
												<option value='COLEGIUL "ANGHEL SALIGNY" TULCEA'>COLEGIUL "ANGHEL SALIGNY" TULCEA</option>
												<option value='COLEGIUL "BRAD SEGAL" TULCEA'>COLEGIUL "BRAD SEGAL" TULCEA</option>
												<option value='COLEGIUL AGRICOL "NICOLAE CORNĂȚEANU" TULCEA'>COLEGIUL AGRICOL "NICOLAE CORNĂȚEANU" TULCEA</option>
												<option value='COLEGIUL DOBROGEAN "SPIRU HARET" TULCEA'>COLEGIUL DOBROGEAN "SPIRU HARET" TULCEA</option>
												<option value='COLEGIUL ECONOMIC "DELTA DUNĂRII" TULCEA'>COLEGIUL ECONOMIC "DELTA DUNĂRII" TULCEA</option>
												<option value='COLEGIUL TEHNIC "HENRI COANDĂ" TULCEA'>COLEGIUL TEHNIC "HENRI COANDĂ" TULCEA</option>
												<option value='LICEUL "DIMITRIE CANTEMIR" BABADAG'>LICEUL "DIMITRIE CANTEMIR" BABADAG</option>
												<option value='LICEUL DE ARTE "GEORGE GEORGESCU" TULCEA'>LICEUL DE ARTE "GEORGE GEORGESCU" TULCEA</option>
												<option value='LICEUL TEHNOLOGIC "ION MINCU" TULCEA'>LICEUL TEHNOLOGIC "ION MINCU" TULCEA</option>
												<option value='LICEUL TEHNOLOGIC "SIMION LEONESCU" LUNCAVIŢA'>LICEUL TEHNOLOGIC "SIMION LEONESCU" LUNCAVIŢA</option>
												<option value='LICEUL TEHNOLOGIC MĂCIN'>LICEUL TEHNOLOGIC MĂCIN</option>
												<option value='LICEUL TEHNOLOGIC TOPOLOG'>LICEUL TEHNOLOGIC TOPOLOG</option>
												<option value='LICEUL TEORETIC "CONSTANTIN BRĂTESCU" ISACCEA'>LICEUL TEORETIC "CONSTANTIN BRĂTESCU" ISACCEA</option>
												<option value='LICEUL TEORETIC "GHEORGHE MUNTEANU MURGOCI" MĂCIN'>LICEUL TEORETIC "GHEORGHE MUNTEANU MURGOCI" MĂCIN</option>
												<option value='LICEUL TEORETIC "GRIGORE MOISIL" TULCEA'>LICEUL TEORETIC "GRIGORE MOISIL" TULCEA</option>
												<option value='LICEUL TEORETIC "ION CREANGĂ" TULCEA'>LICEUL TEORETIC "ION CREANGĂ" TULCEA</option>
												<option value='LICEUL TEORETIC "JEAN BART" SULINA'>LICEUL TEORETIC "JEAN BART" SULINA</option>
												<option value='SEMINARUL TEOLOGIC ORTODOX "SF. IOAN CASIAN" TULCEA'>SEMINARUL TEOLOGIC ORTODOX "SF. IOAN CASIAN" TULCEA</option>
												<option value='COLEGIUL DE SILVICULTURĂ ȘI PROTECȚIA MEDIULUI RÂMNICU VÂLCEA'>COLEGIUL DE SILVICULTURĂ ȘI PROTECȚIA MEDIULUI RÂMNICU VÂLCEA</option>
												<option value='COLEGIUL ECONOMIC RÂMNICU VÂLCEA'>COLEGIUL ECONOMIC RÂMNICU VÂLCEA</option>
												<option value='COLEGIUL ENERGETIC RÂMNICU VÂLCEA'>COLEGIUL ENERGETIC RÂMNICU VÂLCEA</option>
												<option value='COLEGIUL NAȚIONAL "ALEXANDRU LAHOVARI" RÂMNICU VÂLCEA'>COLEGIUL NAȚIONAL "ALEXANDRU LAHOVARI" RÂMNICU VÂLCEA</option>
												<option value='COLEGIUL NAȚIONAL "GIB MIHĂESCU" DRĂGĂȘANI'>COLEGIUL NAȚIONAL "GIB MIHĂESCU" DRĂGĂȘANI</option>
												<option value='COLEGIUL NAȚIONAL "MIRCEA CEL BĂTRÂN" RÂMNICU VÂLCEA'>COLEGIUL NAȚIONAL "MIRCEA CEL BĂTRÂN" RÂMNICU VÂLCEA</option>
												<option value='COLEGIUL NAȚIONAL DE INFORMATICĂ MATEI BASARAB'>COLEGIUL NAȚIONAL DE INFORMATICĂ MATEI BASARAB</option>
												<option value='LICEUL "CONSTANTIN BRÂNCOVEANU" HOREZU'>LICEUL "CONSTANTIN BRÂNCOVEANU" HOREZU</option>
												<option value='LICEUL DE ARTE "VICTOR GIULEANU" RÂMNICU VÂLCEA'>LICEUL DE ARTE "VICTOR GIULEANU" RÂMNICU VÂLCEA</option>
												<option value='LICEUL "GEORGE TARNEA" BABENI'>LICEUL "GEORGE TARNEA" BABENI</option>
												<option value='LICEUL "GHEORGHE SURDU" BREZOI'>LICEUL "GHEORGHE SURDU" BREZOI</option>
												<option value='LICEUL "PREDA BUZESCU" BERBEȘTI'>LICEUL "PREDA BUZESCU" BERBEȘTI</option>
												<option value='LICEUL SANITAR "ANTIM IVIREANU" RÂMNICU VÂLCEA'>LICEUL SANITAR "ANTIM IVIREANU" RÂMNICU VÂLCEA</option>
												<option value='LICEUL TEHNOLOGIC "CĂPITAN NICOLAE PLEȘOIANU" RÂMNICU VÂLCEA'>LICEUL TEHNOLOGIC "CĂPITAN NICOLAE PLEȘOIANU" RÂMNICU VÂLCEA</option>
												<option value='LICEUL TEHNOLOGIC "GENERAL MAGHERU" RÂMNICU VÂLCEA'>LICEUL TEHNOLOGIC "GENERAL MAGHERU" RÂMNICU VÂLCEA</option>
												<option value='LICEUL TEHNOLOGIC "HENRI COANDĂ"'>LICEUL TEHNOLOGIC "HENRI COANDĂ"</option>
												<option value='LICEUL TEHNOLOGIC "PETRACHE POENARU" BALCESTI'>LICEUL TEHNOLOGIC "PETRACHE POENARU" BALCESTI</option>
												<option value='LICEUL TEHNOLOGIC BĂILE GOVORA'>LICEUL TEHNOLOGIC BĂILE GOVORA</option>
												<option value='LICEUL TEHNOLOGIC BRĂTIANU DRĂGĂȘANI'>LICEUL TEHNOLOGIC BRĂTIANU DRĂGĂȘANI</option>
												<option value='LICEUL TEHNOLOGIC DE TURISM CĂLIMĂNEȘTI'>LICEUL TEHNOLOGIC DE TURISM CĂLIMĂNEȘTI</option>
												<option value='LICEUL TEHNOLOGIC FERDINAND I RÂMNICU VÂLCEA'>LICEUL TEHNOLOGIC FERDINAND I RÂMNICU VÂLCEA</option>
												<option value='LICEUL TEHNOLOGIC JUSTINIAN MARINA RÂMNICU VÂLCEA'>LICEUL TEHNOLOGIC JUSTINIAN MARINA RÂMNICU VÂLCEA</option>
												<option value='LICEUL TEHNOLOGIC OLTCHIM RÂMNICU VÂLCEA'>LICEUL TEHNOLOGIC OLTCHIM RÂMNICU VÂLCEA</option>
												<option value='LICEUL TEORETIC GRĂDIȘTEA'>LICEUL TEORETIC GRĂDIȘTEA</option>
												<option value='LICEUL TEORETIC LĂDEȘTI'>LICEUL TEORETIC LĂDEȘTI</option>
												<option value='LICEUL TEORETIC MĂCIUCA'>LICEUL TEORETIC MĂCIUCA</option>
												<option value='SEMINARUL TEOLOGIC ORTODOX "SF. NICOLAE" RÂMNICU VÂLCEA'>SEMINARUL TEOLOGIC ORTODOX "SF. NICOLAE" RÂMNICU VÂLCEA</option>
												<option value='COLEGIUL AGRICOL "DIMITRIE CANTEMIR" HUŞI'>COLEGIUL AGRICOL "DIMITRIE CANTEMIR" HUŞI</option>
												<option value='COLEGIUL ECONOMIC "ANGHEL RUGINĂ" VASLUI'>COLEGIUL ECONOMIC "ANGHEL RUGINĂ" VASLUI</option>
												<option value='COLEGIUL NAŢIONAL "CUZA VODĂ" HUŞI'>COLEGIUL NAŢIONAL "CUZA VODĂ" HUŞI</option>
												<option value='COLEGIUL NAȚIONAL "GH. ROȘCA CODREANU" BÂRLAD'>COLEGIUL NAȚIONAL "GH. ROȘCA CODREANU" BÂRLAD</option>
												<option value='COLEGIUL TEHNIC "ALEXANDRU IOAN CUZA" BÂRLAD'>COLEGIUL TEHNIC "ALEXANDRU IOAN CUZA" BÂRLAD</option>
												<option value='COLEGIUL TEHNIC "MARCEL GUGUIANU" ZORLENI'>COLEGIUL TEHNIC "MARCEL GUGUIANU" ZORLENI</option>
												<option value='LICEUL "ȘTEFAN CEL MARE" CODĂEȘTI'>LICEUL "ȘTEFAN CEL MARE" CODĂEȘTI</option>
												<option value='LICEUL "ȘTEFAN PROCOPIU" VASLUI'>LICEUL "ȘTEFAN PROCOPIU" VASLUI</option>
												<option value='LICEUL CU PROGRAM SPORTIV VASLUI'>LICEUL CU PROGRAM SPORTIV VASLUI</option>
												<option value='LICEUL PEDAGOGIC "IOAN POPESCU" BÂRLAD'>LICEUL PEDAGOGIC "IOAN POPESCU" BÂRLAD</option>
												<option value='LICEUL TEHNOLOGIC "DIMITRIE CANTEMIR" FĂLCIU'>LICEUL TEHNOLOGIC "DIMITRIE CANTEMIR" FĂLCIU</option>
												<option value='LICEUL TEHNOLOGIC "GHENUȚĂ COMAN" MURGENI'>LICEUL TEHNOLOGIC "GHENUȚĂ COMAN" MURGENI</option>
												<option value='LICEUL TEHNOLOGIC "IOAN CORIVAN" HUŞI'>LICEUL TEHNOLOGIC "IOAN CORIVAN" HUŞI</option>
												<option value='LICEUL TEHNOLOGIC "ION MINCU" VASLUI'>LICEUL TEHNOLOGIC "ION MINCU" VASLUI</option>
												<option value='LICEUL TEHNOLOGIC "NICOLAE IORGA" NEGREȘTI'>LICEUL TEHNOLOGIC "NICOLAE IORGA" NEGREȘTI</option>
												<option value='LICEUL TEHNOLOGIC "PETRU RAREȘ" BÂRLAD'>LICEUL TEHNOLOGIC "PETRU RAREȘ" BÂRLAD</option>
												<option value='LICEUL TEHNOLOGIC "PETRU RAREȘ" VETRIȘOAIA'>LICEUL TEHNOLOGIC "PETRU RAREȘ" VETRIȘOAIA</option>
												<option value='LICEUL TEHNOLOGIC PUIEȘTI'>LICEUL TEHNOLOGIC PUIEȘTI</option>
												<option value='LICEUL TEHNOLOGIC VLADIA'>LICEUL TEHNOLOGIC VLADIA</option>
												<option value='LICEUL TEORETIC "EMIL RACOVIȚĂ" VASLUI'>LICEUL TEORETIC "EMIL RACOVIȚĂ" VASLUI</option>
												<option value='LICEUL TEORETIC "MIHAI EMINESCU" BÂRLAD'>LICEUL TEORETIC "MIHAI EMINESCU" BÂRLAD</option>
												<option value='LICEUL TEORETIC "MIHAIL KOGĂLNICEANU" VASLUI'>LICEUL TEORETIC "MIHAIL KOGĂLNICEANU" VASLUI</option>
												<option value='SEMINARUL TEOLOGIC ORTODOX "SF. IOAN GURĂ DE AUR" HUȘI'>SEMINARUL TEOLOGIC ORTODOX "SF. IOAN GURĂ DE AUR" HUȘI</option>
												<option value='COLEGIUL ECONOMIC "MIHAIL KOGĂLNICEANU" FOCȘANI'>COLEGIUL ECONOMIC "MIHAIL KOGĂLNICEANU" FOCȘANI</option>
												<option value='COLEGIUL NAȚIONAL "AL. I. CUZA" FOCȘANI'>COLEGIUL NAȚIONAL "AL. I. CUZA" FOCȘANI</option>
												<option value='COLEGIUL NAȚIONAL "UNIREA" FOCȘANI'>COLEGIUL NAȚIONAL "UNIREA" FOCȘANI</option>
												<option value='COLEGIUL TEHNIC "EDMOND NICOLAU" FOCȘANI'>COLEGIUL TEHNIC "EDMOND NICOLAU" FOCȘANI</option>
												<option value='COLEGIUL TEHNIC "GHEORGHE ASACHI" FOCȘANI'>COLEGIUL TEHNIC "GHEORGHE ASACHI" FOCȘANI</option>
												<option value='COLEGIUL TEHNIC "GHEORGHE BALȘ" ADJUD'>COLEGIUL TEHNIC "GHEORGHE BALȘ" ADJUD</option>
												<option value='COLEGIUL TEHNIC "ION MINCU" FOCȘANI'>COLEGIUL TEHNIC "ION MINCU" FOCȘANI</option>
												<option value='COLEGIUL TEHNIC "VALERIU D. COTEA" FOCȘANI'>COLEGIUL TEHNIC "VALERIU D. COTEA" FOCȘANI</option>
												<option value='COLEGIUL TEHNIC AUTO "TRAIAN VUIA" FOCȘANI'>COLEGIUL TEHNIC AUTO "TRAIAN VUIA" FOCȘANI</option>
												<option value='LICEUL "SIMION MEHEDINȚI" VIDRA'>LICEUL "SIMION MEHEDINȚI" VIDRA</option>
												<option value='LICEUL CU PROGRAM SPORTIV FOCȘANI'>LICEUL CU PROGRAM SPORTIV FOCȘANI</option>
												<option value='LICEUL DE ARTĂ "GHEORGHE TATTARESCU" FOCȘANI'>LICEUL DE ARTĂ "GHEORGHE TATTARESCU" FOCȘANI</option>
												<option value='LICEUL PEDAGOGIC "SPIRU HARET" FOCȘANI'>LICEUL PEDAGOGIC "SPIRU HARET" FOCȘANI</option>
												<option value='LICEUL TEHNOLOGIC "ALEXANDRU IOAN CUZA" PANCIU'>LICEUL TEHNOLOGIC "ALEXANDRU IOAN CUZA" PANCIU</option>
												<option value='LICEUL TEHNOLOGIC "EREMIA GRIGORESCU" MARASESTI'>LICEUL TEHNOLOGIC "EREMIA GRIGORESCU" MARASESTI</option>
												<option value='LICEUL TEHNOLOGIC "G.G. LONGINESCU" FOCȘANI'>LICEUL TEHNOLOGIC "G.G. LONGINESCU" FOCȘANI</option>
												<option value='LICEUL TEHNOLOGIC ODOBEȘTI'>LICEUL TEHNOLOGIC ODOBEȘTI</option>
												<option value='LICEUL TEORETIC "DUILIU ZAMFIRESCU" ODOBEȘTI'>LICEUL TEORETIC "DUILIU ZAMFIRESCU" ODOBEȘTI</option>
												<option value='LICEUL TEORETIC "EMIL BOTTA" ADJUD'>LICEUL TEORETIC "EMIL BOTTA" ADJUD</option>
												<option value='LICEUL TEORETIC "GRIGORE GHEBA" DUMITRESTI'>LICEUL TEORETIC "GRIGORE GHEBA" DUMITRESTI</option>
												<option value='LICEUL TEORETIC "IOAN SLAVICI" PANCIU'>LICEUL TEORETIC "IOAN SLAVICI" PANCIU</option>
											</datalist>	 
											<br>
										</span>
									</div>
									<br>
								</div>
								<span style="color:red">
									<?php 
										if(isset($_POST['Submit'])) {
											$v_Liceul_Absolvit = $_POST["Liceu_Absolvit"];
											if($v_Liceul_Absolvit=='')
												echo "C&#226;mp necompletat!";
										}
									?>
								</span>
								<div class="form-textboxinput jf-required cid_1">
									<br>
									<table style="width:100%">
										<tbody>
											<tr>
												<td>
													<span class="form-sub-label-container" style="vertical-align:top; width:33%; display:inline-block" >
														<label class="form-sub-label" style="min-height:13px;"> Localitatea </label>
														<input type="text"  name="Licenta_Localitate_Liceu" class="form-textbox form-address-city first_1"  size="21"  placeholder="ex: Ia&#351;i" data-component="city" value="<?php 
																																																									echo $_POST["Licenta_Localitate_Liceu"];
																																																								?>" />

														<span style="color:red">
															<?php 
																if(isset($_POST['Submit'])) {
																	$v_Licenta_Localitate_Liceu = $_POST["Licenta_Localitate_Liceu"];
													
																	$vLicenta_Localitate_Liceu=validLocalitate($v_Licenta_Localitate_Liceu);
																	
																	if($vLicenta_Localitate_Liceu==-1)
																		echo "C&#226;mp necompletat!";
																	else
																		if($vLicenta_Localitate_Liceu==2)
																			echo "C&#226;mpul conține caractere nepermise!";
																		else
																			if($vLicenta_Localitate_Liceu==1)
																				echo "C&#226;mpul trebuie sa conțină între 3 și 85 caractere!";
																}
															?>
														</span>
													</span>
													<span class="form-sub-label-container" style="vertical-align:top; width:32%">
														<label class="form-sub-label" for="input_3_country" style="min-height:13px;"> Jude&#355; </label>
														<select class="form-dropdown form-address-country gen" name="Licenta_Judet_Liceu" value="<?php
																																					echo $_POST["Licenta_Judet_Liceu"];
																																				?>" data-component="country">
															<?php
																$array=array("Alba","Arad","Arges","Bacau","Bihor","BistritaNasaud","Botosani","Braila","Brasov","Bucuresti","Buzau","Calarasi","Caras-Severin","Cluj","Constanta","Covasna","Dambovita","Galati","Giurgiu","Gorj","Harghita","Hunedoara","Ialomita","Iasi","Ilfov","Maramures","Mehedinti","Mures","Neamt","Olt","Prahova","Salaj","Satu Mare","Sibiu","Suceava","Teleorman","Timisoara","Tulcea","Valcea","Vaslui","Vrancea");
																$v_Licenta_Judet_Liceu=$_POST["Licenta_Judet_Liceu"];
																for($i=0;$i<41;$i++)
																{
																	echo '<option value="'.$array[$i].'" ';
																	if($v_Licenta_Judet_Liceu==$array[$i])
																		echo 'selected';
																	echo '> '.$array[$i].' </option>';
																}
															?>
														</select>
													</span>
												  
													<span class="form-sub-label-container" style="vertical-align:top; width:32%">
														<label class="form-sub-label" for="input_3_country"  style="min-height:13px;">&#354;ar&#259; </label>
														<select class="form-dropdown form-address-country gen" name="Licenta_Tara_Liceu" data-component="country">
															<?php 
																$v_Licenta_Tara_Liceu = $_POST["Licenta_Tara_Liceu"];
															?>
															<option value="Romania" <?php
																						if($v_Licenta_Tara_Liceu=="Romania")
																							echo 'selected';
																						else
																							echo '';
																					?>> Rom&#226;nia </option>
															<option value="Republica Moldova"   <?php
																									if($v_Licenta_Tara_Liceu=="Republica Moldova")
																										echo 'selected';
																									else
																										echo '';
																								?>> Republica Moldova </option>
															<option value="Alta Optiune" <?php
																							if($v_Licenta_Tara_Liceu=="Alta Optiune")
																								echo 'selected';
																							else
																								echo '';
																						?>> Alta op&#355;iune</option>
														</select>
													</span>
												</td>
											</tr>
										</tbody>
									</table>
									<br>
								</div>
								<div class="form-input jf-required cid_1">
									<table  style="width:100%">
										<tbody>
											<tr>
												<td>
													<span class="form-sub-label-container" style="vertical-align:top; width:25%; display:inline-block" >
														<label class="form-sub-label" style="min-height:13px;"> Profilul/Domeniul </label>
														<input type="text"  name="Licenta_Profil_Liceu" class="form-textbox form-address-city first_1" size="21" placeholder="ex: Mate - Info / SN" value="<?php 
																																																				if($v_Licenta_Profil_Liceu == '') 
																																																					echo '';
																																																				else
																																																					echo $v_Licenta_Profil_Liceu;
																																																			?>" data-component="city" />
														<span style="color:red">
															<?php 
																if(isset($_POST['Submit'])) {
																	$v_Licenta_Profil_Liceu = $_POST["Licenta_Profil_Liceu"];
																	$vLicenta_Profil_Liceu = ProfilValidare($v_Licenta_Profil_Liceu);
																	if($vLicenta_Profil_Liceu==-1)
																		echo "C&#226;mp necompletat!";
																	else
																		if($vLicenta_Profil_Liceu==1)
																			echo "Caractere nepermise!";
																		else
																			if($vLicenta_Profil_Liceu==2)
																				echo "Între 2 si 30 caractere!";
																}
															?>
														</span>
													</span>
													<span class="form-sub-label-container" style="vertical-align:top; width:22%">
														<label class="form-sub-label" for="input_3_country" style="min-height:13px;"> Durata studiilor (ani) </label>
														<input type="number"  name="Licenta_Durata_Liceu" class="form-textbox form-address-city first_1" size="21" placeholder="ex: 4" value="<?php 
																																																	if($v_Licenta_Durata_Liceu == '') 
																																																		echo '';
																																																	else
																																																		echo $v_Licenta_Durata_Liceu;
																																																?>" data-component="city" />
														<span style="color:red">
															<?php 
																if(isset($_POST['Submit'])) {
																	$v_Licenta_Durata_Liceu = $_POST["Licenta_Durata_Liceu"];
																	$vLicenta_Durata_Liceu = validDurata($v_Licenta_Durata_Liceu);
																	if($vLicenta_Durata_Liceu==-1)
																		echo "C&#226;mp necompletat!";
																	else
																		if($vLicenta_Durata_Liceu==1)
																			echo "Nr. de ani invalid!";
																		else
																			if($vLicenta_Durata_Liceu==2)
																				echo "Caractere nepermise!";
																}
															?>
														</span>
													</span>
													<span class="form-sub-label-container" style="vertical-align:top; width:25%">
														<label class="form-sub-label" for="input_3_country" style="min-height:13px;"> Anul absolvirii </label>
														<input type="number"  name="Licenta_An_Liceu" class="form-textbox form-address-city first_1" size="21" placeholder="ex: 2016" value="<?php 
																																																if($v_Licenta_An_Liceu == '') 
																																																	echo '';
																																																else
																																																	echo $v_Licenta_An_Liceu;
																																															?>" data-component="city" />
														<span style="color:red">
															<?php 
																if(isset($_POST['Submit'])) {
																	$v_Licenta_An_Liceu = $_POST["Licenta_An_Liceu"];
																	$vLicenta_An_Liceu = validareAn($v_Licenta_An_Liceu);
																	if($vLicenta_An_Liceu==-1)
																		echo "C&#226;mp necompletat!";
																	else
																		if($vLicenta_An_Liceu==1)
																			echo "Caractere nepermise!";
																		else
																			if($vLicenta_An_Liceu==2)
																				echo "An incorect!";
																}
															?>
														</span>
													</span>
													<span class="form-sub-label-container" style="vertical-align:top; width:25%">
														<label class="form-sub-label" for="input_3_country"  style="min-height:13px;" >Formă învăţământ </label>
														<?php 
															$v_Licenta_FormaInvatamant_Liceu_First = $_POST["Licenta_FormaInvatamant_Liceu_First"];
														?>
														<select class="form-dropdown form-address-country gen" name="Licenta_FormaInvatamant_Liceu_First"  value="<?php 
																																									if($v_Licenta_FormaInvatamant_Liceu_First == '') 
																																										echo '';
																																									else
																																										echo $v_Licenta_FormaInvatamant_Liceu_First;
																																								  ?>" data-component="country">
															<option value="ZI" <?php   
																					if($v_Licenta_FormaInvatamant_Liceu_First=="ZI")    
																						echo 'selected';    
																					else    
																						echo '';    
																				?>> ZI </option>
															<option value="Seral" <?php   
																					if($v_Licenta_FormaInvatamant_Liceu_First=="Seral")    
																						echo 'selected';    
																					else    
																						echo '';    
																				  ?>> Seral</option>
															<option value="FR"  <?php   
																					if($v_Licenta_FormaInvatamant_Liceu_First=="FR")    
																						echo 'selected';    
																					else    
																						echo '';    
																				?>>FR</option>
															<option value="ID"  <?php   
																					if($v_Licenta_FormaInvatamant_Liceu_First=="ID")    
																						echo 'selected';    
																					else    
																						echo '';    
																				?>>ID</option>
							 
														</select>
													</span>
												</td>
											</tr>
										</tbody>
									</table>
									<br>
								</div>
								<div class="form-input jf-required cid_1">
									<table  style="width:100%">
										<tbody>
											<tr>
												<td>
													<span class="form-sub-label-container" style="vertical-align:top; width:20%; display:inline-block" >
														<label class="form-sub-label" style="min-height:13px;"> Seria diplomei de Bacalaureat/Adeveriță </label>
														<input type="text"  name="Licenta_Serie_DiplomaBAC" class="form-textbox form-address-city first_1" size="21" placeholder="ex: A" value="<?php 
																																																	if($v_Licenta_Serie_DiplomaBAC == '') 
																																																		echo '';
																																																	else
																																																		echo $v_Licenta_Serie_DiplomaBAC;
																																																?>" data-component="city" />
														<span style="color:red">
															<?php 
																if(isset($_POST['Submit'])) {
																	$v_Licenta_Serie_DiplomaBAC = $_POST["Licenta_Serie_DiplomaBAC"];
																	$vLicenta_Serie_DiplomaBAC = validSerieBAC($v_Licenta_Serie_DiplomaBAC);
																	if($vLicenta_Serie_DiplomaBAC==-1)
																		echo "C&#226;mp necompletat!";
																	else
																		if($vLicenta_Serie_DiplomaBAC==1)
																			echo "Caractere nepermise";
																}
															?>
														</span>
													</span>
													<span class="form-sub-label-container" style="vertical-align:top; width:14%">
														<label class="form-sub-label" for="input_3_country" style="min-height:13px;"> Numarul dimplomei </label>
														<input type="number"  name="Licenta_Nr_DiplomaBAC" class="form-textbox form-address-city first_1" size="21"  value="<?php 
																																												if($v_Licenta_Nr_DiplomaBAC == '') 
																																													echo '';
																																												else
																																													echo $v_Licenta_Nr_DiplomaBAC;
																																											?>" placeholder="ex: 2742987" data-component="city" />
														<span style="color:red">
															<?php 
																if(isset($_POST['Submit'])) {
																	$v_Licenta_Nr_DiplomaBAC = $_POST["Licenta_Nr_DiplomaBAC"];
																	$vLicenta_Nr_DiplomaBAC = validNumarBAC($v_Licenta_Nr_DiplomaBAC);

																	if($vLicenta_Nr_DiplomaBAC==-1)
																		echo "C&#226;mp necompletat!";
																	else
																		if($vLicenta_Nr_DiplomaBAC==1)
																			echo "Caractere nepermise";
																}
															?>
														</span>
													</span>
													<!--<span class="form-sub-label-container" style="vertical-align:top; width:27%">
														<label class="form-sub-label" for="input_3_country" style="min-height:13px;"> Emisă de </label>
														<input type="text"  name="Licenta_Emitere_DiplomaBAC" class="form-textbox form-address-city first_1" size="21" placeholder="ex: ISJ Iasi" value="<?php 
																																																			if($v_Licenta_Emitere_DiplomaBAC == '') 
																																																				echo '';
																																																			else
																																																				echo $v_Licenta_Emitere_DiplomaBAC;
																																																		?>" data-component="city" />
														<span style="color:red">
															<?php 
																if(isset($_POST['Submit'])) {
																	$v_Licenta_Emitere_DiplomaBAC = $_POST["Licenta_Emitere_DiplomaBAC"];
																	$vLicenta_Emitere_DiplomaBAC = validBuletinEliberatDe($v_Licenta_Emitere_DiplomaBAC);
																	if($vLicenta_Emitere_DiplomaBAC==-1)
																		echo "C&#226;mp necompletat!";
																	else
																		if($vLicenta_Emitere_DiplomaBAC==1)
																			echo "Caractere nepermise!";
																		else
																			if($vLicenta_Emitere_DiplomaBAC==2)
																				echo "Minim 3 caractere!";
																}
															?>
														</span>
													</span>-->
													<span>
														<div  class="form-input jf-required" style="vertical-align:top;padding:0;margin:0;height:40px">
															<div data-wrapper-react="true">
																<span class="form-sub-label-container" style="vertical-align:top; ">
																	<label class="form-sub-label"  style="min-height:13px;">Data Emitere</label>
																	<select style="height:40px;" name="Licenta_Diploma_Luna"  class="form-dropdown" data-component="birthdate-month">
																		<?php 
																			$v_Licenta_Diploma_Luna = $_POST["Licenta_Diploma_Luna"];
																		?>
																		<option value="January" <?php
																									if($v_Licenta_Diploma_Luna=="January")
																										echo 'selected';
																									else
																										echo '';
																								?> >Ianuarie</option>
																		<option value="February" <?php
																									if($v_Licenta_Diploma_Luna=="February")
																										echo 'selected';
																									else
																										echo '';
																								?>> Februarie</option>    
																		<option value="March"   <?php
																									if($v_Licenta_Diploma_Luna=="March")
																										echo 'selected';
																									else
																										echo '';
																								?>> Martie </option>    
																		<option value="April"   <?php
																									if($v_Licenta_Diploma_Luna=="April")
																										echo 'selected';
																									else
																										echo '';
																								?>> Aprilie </option>   
																		<option value="May" <?php
																								if($v_Licenta_Diploma_Luna=="May")
																									echo 'selected';
																								else
																									echo '';
																							?>> Mai </option>   
																		<option value="June" <?php
																								if($v_Licenta_Diploma_Luna=="June")
																									echo 'selected';
																								else
																									echo '';
																							?>> Iunie </option>   
																		<option value="July" <?php
																								if($v_Licenta_Diploma_Luna=="July")
																									echo 'selected';
																								else
																									echo '';
																							?>> Iulie</option>    
																		<option value="August" <?php
																									if($v_Licenta_Diploma_Luna=="August")
																										echo 'selected';
																									else
																										echo '';
																								?>> August </option>    
																		<option value="September" 	<?php
																										if($v_Licenta_Diploma_Luna=="September")
																											echo 'selected';
																										else
																											echo '';
																									?>> Septembrie </option>    
																		<option value="October" <?php
																									if($v_Licenta_Diploma_Luna=="October")
																										echo 'selected';
																									else
																										echo '';
																								?>> Octombrie </option>   
																		<option value="November" <?php
																									if($v_Licenta_Diploma_Luna=="November")
																										echo 'selected';
																									else
																										echo '';
																								?>> Noiembrie</option>    
																		<option value="December" <?php
																									if($v_Licenta_Diploma_Luna=="December")
																										echo 'selected';
																									else
																										echo '';
																								?>> Decembrie </option>
																	</select>
																</span>
																<span class="form-sub-label-container" style="vertical-align:bottom;">
																	<select style="height:40px;" name="Licenta_Diploma_Ziua"  class="form-dropdown" data-component="birthdate-day">
																		<?php
																			$v_Licenta_Diploma_Ziua=$_POST["Licenta_Diploma_Ziua"];
																			for($i=1;$i<=31;$i++)
																			{
																				echo '<option value="'.$i.'" ';
																				if($v_Licenta_Diploma_Ziua==$i)
																					echo 'selected';
																				echo '> '.$i.' </option>';
																			}
																		?>
																	</select>
																</span>
																<span class="form-sub-label-container" style="vertical-align:bottom;">
																	<select style="height:40px;" name="Licenta_Diploma_An"  class="form-dropdown" data-component="birthdate-year">
																		<?php
																			$v_Licenta_Diploma_An=$_POST["Licenta_Diploma_An"];
																			for($i=2017;$i>=1920;$i--)
																			{
																				echo '<option value="'.$i.'" ';
																				if($v_Licenta_Diploma_An==$i)
																					echo 'selected';
																				echo '> '.$i.' </option>';
																			}
																		?>
																	</select>
																</span>
															</div>
														</div>
													</span>
													<span class="form-sub-label-container" style="vertical-align:top; width:15%">
														<label class="form-sub-label" for="input_3_country" style="min-height:13px;"> Numarul Foaie Matricolă </label>
														<input type="number"  name="Licenta_Nr_FoaieMatricola" class="form-textbox form-address-city first_1" size="21" placeholder="ex: 461596" value="<?php 
																																																			if($v_Licenta_Nr_FoaieMatricola == '') 
																																																				echo '';
																																																			else
																																																				echo $v_Licenta_Nr_FoaieMatricola;
																																																		?>"  data-component="city" />
														<span style="color:red">
															<?php 
																if(isset($_POST['Submit'])) {
																	$v_Licenta_Nr_FoaieMatricola = $_POST["Licenta_Nr_FoaieMatricola"];
																	//if($v_Licenta_Nr_FoaieMatricola=='')
																	//	echo "C&#226;mp necompletat!";
																	//else
																	if($v_Licenta_Nr_FoaieMatricola!=='')
																		if(!ctype_digit($v_Licenta_Nr_FoaieMatricola))
																			echo "Caractere nepermise!";
																}
															?>
														</span>
													</span>
												</td>
											</tr>
										</tbody>
									</table>
									<br>
								</div>
								<label class="form-label form-label-left form-label-auto" id="label_3" style="color: gray; font-size:medium; width:100%; display:inline-block"> Pentru cazul în care candidatul a absolvit studiile anterioare în străinătate: </label>
								<div class="form-input jf-required cid_1">
									<table  style="width:100%">
										<tbody>
											<tr>
												<td>
													<span class="form-sub-label-container" style="vertical-align:top; width:50%; display:inline-block" >
														<label class="form-sub-label" style="min-height:13px;"> Nr. actului de de recunoaştere/echivalare (eliberat de DPIRP/CNRED) </label>
														<input type="number"  name="Licenta_Nr_ActRecunoastere" class="form-textbox form-address-city first_1" size="21" placeholder="ex: 529845" value="<?php 
																																																			if($v_Licenta_Nr_ActRecunoastere == '') 
																																																				echo '';
																																																			else
																																																				echo $v_Licenta_Nr_ActRecunoastere;
																																																		?>" data-component="city" />
														<span style="color:red">
															<?php 
																if(isset($_POST['Submit'])) {
																	$v_Licenta_Nr_ActRecunoastere = $_POST["Licenta_Nr_ActRecunoastere"];
																	if($v_Licenta_Serie_ActRecunoastere!=='') 
																		if($v_Licenta_Nr_ActRecunoastere=='')
																			echo "C&#226;mp necompletat!";
																		else
																			if(!ctype_digit($v_Licenta_Nr_ActRecunoastere))
																				echo "C&#226;mp invalid!";
																}
															?>
														</span>
													</span>
													<span class="form-sub-label-container" style="vertical-align:top; width:15%">
														<label class="form-sub-label" for="input_3_country" style="min-height:13px;"> Seria </label>
														<input type="text" name="Licenta_Serie_ActRecunoastere" class="form-textbox form-address-city first_1" size="21" placeholder="ex: B" value="<?php 
																																																		if($v_Licenta_Serie_ActRecunoastere == '') 
																																																			echo '';
																																																		else
																																																			echo $v_Licenta_Serie_ActRecunoastere;
																																																	?>" data-component="city" />
														<span style="color:red">
															<?php 
																if(isset($_POST['Submit'])) {
																	$v_Licenta_Serie_ActRecunoastere = $_POST["Licenta_Serie_ActRecunoastere"];
																	$vLicenta_Serie_ActRecunoastere = validSerieBAC($v_Licenta_Serie_ActRecunoastere);
																	if($v_Licenta_Nr_ActRecunoastere!=='') 
																		if($v_Licenta_Serie_ActRecunoastere=='')
																			echo "C&#226;mp necompletat!";
																		else
																			if($vLicenta_Serie_ActRecunoastere==1)
																				echo "Caractere nepermise";
																}
															?>
														</span>
													</span>
										  
													<span>
														<div  class="form-input jf-required" style="vertical-align:top;padding:0;margin:0;height:40px">
															<div data-wrapper-react="true">
																<span class="form-sub-label-container" style="vertical-align:top; ">
																	<label class="form-sub-label"  style="min-height:13px;">Data Echivalare</label>
																	<select style="height:40px;" name="Licenta_ActEchivalare_Luna"  class="form-dropdown" data-component="birthdate-month">
																		<?php
																			$v_Licenta_ActEchivalare_Luna= $_POST["Licenta_ActEchivalare_Luna"];
																		?>
																		<option value="January" <?php
																									if($v_Licenta_ActEchivalare_Luna=="January")
																										echo 'selected';
																									else
																										echo '';
																								?>>Ianuarie</option>
																		<option value="February" <?php
																									if($v_Licenta_ActEchivalare_Luna=="February")
																										echo 'selected';
																									else
																										echo '';
																								?>> Februarie</option>
																		<option value="March"   <?php
																									if($v_Licenta_ActEchivalare_Luna=="March")
																										echo 'selected';
																									else
																										echo '';
																								?>> Martie </option>
																		<option value="April"   <?php
																									if($v_Licenta_ActEchivalare_Luna=="April")
																										echo 'selected';
																									else
																										echo '';
																								?>> Aprilie </option>
																		<option value="May" <?php
																								if($v_Licenta_ActEchivalare_Luna=="May")
																									echo 'selected';
																								else
																									echo '';
																							?>> Mai </option>
																		<option value="June" <?php
																								if($v_Licenta_ActEchivalare_Luna=="June")
																									echo 'selected';
																								else
																									echo '';
																							?>> Iunie </option>
																		<option value="July" <?php
																								if($v_Licenta_ActEchivalare_Luna=="July")
																									echo 'selected';
																								else
																									echo '';
																							?>> Iulie</option>
																		<option value="August"  <?php
																									if($v_Licenta_ActEchivalare_Luna=="August")
																										echo 'selected';
																									else
																										echo '';
																								?>> August </option>
																		<option value="September"   <?php
																										if($v_Licenta_ActEchivalare_Luna=="September")
																											echo 'selected';
																										else
																											echo '';
																									?>> Septembrie </option>
																		<option value="October" <?php
																									if($v_Licenta_ActEchivalare_Luna=="October")
																										echo 'selected';
																									else
																										echo '';
																								?>> Octombrie </option>
																		<option value="November" <?php
																									if($v_Licenta_ActEchivalare_Luna=="November")
																										echo 'selected';
																									else
																										echo '';
																								?>> Noiembrie</option>
																		<option value="December" <?php
																									if($v_Licenta_ActEchivalare_Luna=="December")
																										echo 'selected';
																									else
																										echo '';
																								?>> Decembrie </option>
																	</select>
																</span>
																<span class="form-sub-label-container" style="vertical-align:bottom;">
																	<select style="height:40px;" name="Licenta_ActEchivalare_Ziua"  class="form-dropdown" data-component="birthdate-day">
																		<?php
																			$v_Licenta_ActEchivalare_Ziua=$_POST["Licenta_ActEchivalare_Ziua"];
																			for($i=1;$i<=31;$i++)
																			{
																				echo '<option value="'.$i.'" ';
																				if($v_Licenta_ActEchivalare_Ziua==$i)
																					echo 'selected';
																				echo '> '.$i.' </option>';
																			}
																		?>
																	</select>
																</span>
																<span class="form-sub-label-container" style="vertical-align:bottom;">
																	<select style="height:40px;" name="Licenta_ActEchivalare_An"  class="form-dropdown" data-component="birthdate-year">
																		<?php
																			$v_Licenta_ActEchivalare_An=$_POST["Licenta_ActEchivalare_An"];
																			for($i=2017;$i>=1920;$i--)
																			{
																				echo '<option value="'.$i.'" ';
																				if($v_Licenta_ActEchivalare_An==$i)
																					echo 'selected';
																				echo '> '.$i.' </option>';
																			}
																		?>
																	</select>
																</span>
															</div>
														</div>
													</span>
												</td>
											</tr>
										</tbody>
									</table>
									<br>
									<br>
								</div>
								<br>
								<label class="form-label form-label-left form-label-auto" id="label_1"  style="color: #3488CB; font-size:large"> III. b. Studiile universitare în curs/absolvite</label>
								<div class="form-input jf-required cid_1" >
									<label class="form-label form-label-left form-label-auto" id="label_3" style="color: gray; font-size:medium; width:45%; display:inline-block"> Sunteţi student la alta facultate/universitate?  </label>
									<span style="width:55%">
										<input type="radio" onClick="AltaUniv();" name="group25" id="daAltaFacultate" class="css-checkbox" value="1" <?php
																																						if($v_Radio25 == '')
																																							echo '';
																																						else
																																							if($v_Radio25==1)
																																								echo 'checked="checked"';
																																							else
																																								echo '';
																																					?>/>   
										<label for="daAltaFacultate" class="css-label" style="margin-right:100px">Da</label>
										<input type="radio" onClick="AltaUniv()" name="group25" id="nuAltaFacultate" class="css-checkbox" value="2" <?php
																																						if($v_Radio25 == '')
																																							echo '';
																																						else
																																							if($v_Radio25==2)
																																								echo 'checked="checked"';
																																							else
																																								echo '';
																																					?>/>
										<label for="nuAltaFacultate" class="css-label">Nu</label>
									</span>
									<span style="color:red">
										<?php
											if(isset($_POST['Submit'])) {
												$v_Radio25 = $_POST["group25"];
												$vradio25 = validRadio($v_Radio25);
												if($vradio25!==1 && $vradio25!==2)
													echo "Nu ați ales o opțiune!";
												//else
												//	if($vradio25==1)
												//		if($vLicenta_AltaUniversitate!==0 || $vLicenta_AltaFacultate!==0 || $vLicenta_Domeniu_Licenta!==0 || $vLicenta_Specializare!==0 || $vLicenta_An_Facultate!==0 || $vLicenta_Semestre_Finantate!==0 || $vLicenta_Semestre_Bursa!==0 || $vLicenta_Localitate_AltaFacultate!==0)
												//			echo "Erori în completarea câmpurilor aferente opțiunii alese!";
											}
										?>
									</span>
								</div>

								<div id="AltaUniv" style="display:none;">
									<div  class="form-input jf-required cid_1">
										<div class="general_name" data-wrapper-react="true">
											<span class="form-sub-label-container" style="vertical-align:top;  height: 40px; width:50%;">
												<label class="form-sub-label sublabel_first" style="min-height:13px;"> Denumirea instituţiei de învăţământ superior </label>
												<input type="text" name="Licenta_AltaUniversitate" class="form-textbox first_1" size="10" placeholder="ex: Universitatea Alexandru Ioan Cuza" value="<?php
																																																		if($v_Licenta_AltaUniversitate == '')
																																																			echo '';
																																																		else
																																																			echo $v_Licenta_AltaUniversitate;
																																																	?>" data-component="first" />
												<span style="color:red">
													<?php
														if(isset($_POST['Submit'])) {
															if($v_Radio25==1) {
																$v_Licenta_AltaUniversitate = $_POST["Licenta_AltaUniversitate"];
																	$vLicenta_AltaUniversitate = validNume($v_Licenta_AltaUniversitate);
																	if($vLicenta_AltaUniversitate==-1)
																		echo "C&#226;mp necompletat!";
																	else
																		if($vLicenta_AltaUniversitate==1)
																			echo "C&#226;mpul conține caractere nepermise!";
																		else
																			if($vLicenta_AltaUniversitate==2)
																				echo "C&#226;mpul trebuie sa conțină între 3 și 30 caractere!";
															}
														}
													?>
												</span>
											</span>
										

											<span class="form-sub-label-container" style="vertical-align:top; height: 40px; width:48%; "> 
												<label class="form-sub-label sublabel_first" style="min-height:13px;"> Facultatea </label> 
												<input type="text" name="Licenta_AltaFacultate" class="form-textbox first_1" size="10" placeholder="ex: Informatică" data-component="first" value="<?php
																																																		if($v_Licenta_AltaFacultate == '')
																																																			echo '';
																																																		else
																																																			echo $v_Licenta_AltaFacultate;
																																																	?>" />     
												<span style="color:red">
													<?php
														if(isset($_POST['Submit'])) {
															if($v_Radio25==1) {
																$v_Licenta_AltaFacultate = $_POST["Licenta_AltaFacultate"];
																	$vLicenta_AltaFacultate = validNume($v_Licenta_AltaFacultate);
																	if($vLicenta_AltaFacultate==-1)
																		echo "C&#226;mp necompletat!";
																	else
																		if($vLicenta_AltaFacultate==1)
																			echo "C&#226;mpul conține caractere nepermise!";
																		else
																			if($vLicenta_AltaFacultate==2)
																				echo "C&#226;mpul trebuie sa conțină între 3 și 30 caractere!";
															}
														}
													?>
												</span>
											</span>
									  
									  
										</div>
										<br>  
									</div>
									<div class="form-input jf-required cid_1">
										<br>
										<table  style="width:100%">
											<tbody>
												<tr>
													<td>
														<span class="form-sub-label-container" style="vertical-align:top; width:35%; display:inline-block" >
															<label class="form-sub-label" style="min-height:13px;"> Domeniul de Licenţă </label>
															<input type="text"  name="Licenta_Domeniu_Licenta" class="form-textbox form-address-city first_1" size="21" placeholder="" data-component="city" value="<?php
																																																						if($v_Licenta_Domeniu_Licenta == '')
																																																							echo '';
																																																						else
																																																							echo $v_Licenta_Domeniu_Licenta;
																																																					?>" />
																																								
															<span style="color:red">
																<?php
																	if(isset($_POST['Submit'])) {
																		if($v_Radio25==1) {
																		$v_Licenta_Domeniu_Licenta = $_POST["Licenta_Domeniu_Licenta"];
																		$vLicenta_Domeniu_Licenta = validNume($v_Licenta_Domeniu_Licenta);
																		if($vLicenta_Domeniu_Licenta==-1)
																			echo "C&#226;mp necompletat!";
																		else
																			if($vLicenta_Domeniu_Licenta==1)
																				echo "C&#226;mpul conține caractere nepermise!";
																			else
																				if($vLicenta_Domeniu_Licenta==2)
																					echo "C&#226;mpul trebuie sa conțină între 3 și 30 caractere!";
																		}
																	}
																?>
															</span>
														</span>
														<span class="form-sub-label-container" style="vertical-align:top; width:35%">
															<label class="form-sub-label" for="input_3_country" style="min-height:13px;"> Program de studii/specializare </label>
															<input type="text"  name="Licenta_Specializare" class="form-textbox form-address-city first_1" size="21" placeholder="" data-component="city" data-component="city" value="<?php
																																																											if($v_Licenta_Specializare == '')
																																																												echo '';
																																																											else
																																																												echo $v_Licenta_Specializare;
																																																										?>" />
															<span style="color:red">
																<?php
																	if(isset($_POST['Submit'])) {
																		if($v_Radio25==1) {
																			$v_Licenta_Specializare = $_POST["Licenta_Specializare"];
																			$vLicenta_Specializare = validNume($v_Licenta_Specializare);
																			if($vLicenta_Specializare==-1)
																				echo "C&#226;mp necompletat!";
																			else
																				if($vLicenta_Specializare==1)
																					echo "C&#226;mpul conține caractere nepermise!";
																				else
																					if($vLicenta_Specializare==2)
																						echo "C&#226;mpul trebuie sa conțină între 3 și 30 caractere!";
																		}
																	}
																?>
															</span>
														</span>
														<span class="form-sub-label-container" style="vertical-align:top; width:12%">
															<label class="form-sub-label" for="input_3_country" style="min-height:13px;"> An </label>
															<input type="number"  name="Licenta_An_Facultate" class="form-textbox form-address-city first_1" size="21" placeholder="ex: 3" data-component="city" value="<?php
																																																								if($v_Licenta_An_Facultate == '')
																																																									echo '';
																																																								else
																																																									echo $v_Licenta_An_Facultate;
																																																							?>" />
															<span style="color:red">
																<?php
																	if(isset($_POST['Submit'])) {
																		if($v_Radio25==1) {
																			$v_Licenta_An_Facultate = $_POST["Licenta_An_Facultate"];
																				$vLicenta_An_Facultate = validareAnFacultate($v_Licenta_An_Facultate);
																				if($vLicenta_An_Facultate==-1)
																					echo "C&#226;mp necompletat!";
																				else
																					if($vLicenta_An_Facultate==1)
																						echo "Caractere nepermise!";
																					else
																						if($vLicenta_An_Facultate==2)
																							echo "An incorect!";
																		}
																	}
																?>
															</span>
														</span>
														<span class="form-sub-label-container" style="vertical-align:top; width:15%">
															<label class="form-sub-label" for="input_3_country"  style="min-height:13px;">Formă învăţământ </label>
															<select class="form-dropdown form-address-country gen" name="Licenta_FormaInvatamant_Liceu" data-component="country">
																<?php 
																	$v_Licenta_FormaInvatamant_Liceu=$_POST["Licenta_FormaInvatamant_Liceu"];
																?>
																<option value="ZI" <?php
																						if($v_Licenta_FormaInvatamant_Liceu=="ZI")
																							echo 'selected';
																						else
																							echo '';
																					?>> ZI </option>
																<option value="Seral"   <?php
																							if($v_Licenta_FormaInvatamant_Liceu=="Seral")
																								echo 'selected';
																							else
																								echo '';
																						?>> Seral</option>
																<option value="FR" <?php
																						if($v_Licenta_FormaInvatamant_Liceu=="FR")
																							echo 'selected';
																						else
																							echo '';
																					?>>FR</option>
																<option value="ID" <?php
																						if($v_Licenta_FormaInvatamant_Liceu=="ID")
																							echo 'selected';
																						else
																							echo '';
																					?>>ID</option>
							   
															</select>
														</span>
													</td>
												</tr>
											</tbody>
										</table>
										<br>
									</div>
									<div class="form-input jf-required cid_1">
										<table  style="width:100%">
											<tbody>
												<tr>
													<td>
														<span class="form-sub-label-container" style="vertical-align:top; width:50%">
															<label class="form-sub-label" for="input_3_country" style="min-height:13px;"> Nr. Semestre finanţate de la bugetul de stat</label>
															<input type="number"  name="Licenta_Semestre_Finantate" class="form-textbox form-address-city first_1" size="21" placeholder="ex: 4" data-component="city"   value="<?php
																																																									if($v_Licenta_Semestre_Finantate == '')
																																																										echo '';
																																																									else
																																																										echo $v_Licenta_Semestre_Finantate;
																																																								?>"/>
															<span style="color:red">
																<?php
																	if(isset($_POST['Submit'])) {
																		if($v_Radio25==1) {
																			$v_Licenta_Semestre_Finantate = $_POST["Licenta_Semestre_Finantate"];
																				$vLicenta_Semestre_Finantate = validareNrSemCuBursa($v_Licenta_Semestre_Finantate);
																				if($vLicenta_Semestre_Finantate==-1)
																					echo "C&#226;mp necompletat!";
																				else
																					if($vLicenta_Semestre_Finantate==1)
																						echo "Între 0 și 16 semestre finanțate!";
																		}
																	}
																?>
															</span>
														</span>
														<span class="form-sub-label-container" style="vertical-align:top; width:48%">
															<label class="form-sub-label" for="input_3_country" style="min-height:13px;"> Nr. Semestre în care aţi beneficiat de bursă</label>
															<input type="number"  name="Licenta_Semestre_Bursa" class="form-textbox form-address-city first_1" size="21" placeholder="ex: 4" data-component="city"   value="<?php
																																																								if($v_Licenta_Semestre_Bursa == '')
																																																									echo '';
																																																								else
																																																									echo $v_Licenta_Semestre_Bursa;
																																																							?>"/>
															<span style="color:red">
																<?php
																	if(isset($_POST['Submit'])) {
																		if($v_Radio25==1) {
																			$v_Licenta_Semestre_Bursa = $_POST["Licenta_Semestre_Bursa"];
																				$vLicenta_Semestre_Bursa = validareNrSemCuBursa($v_Licenta_Semestre_Bursa);
																				if($vLicenta_Semestre_Bursa==-1)
																					echo "C&#226;mp necompletat!";
																				else
																					if($vLicenta_Semestre_Bursa==1)
																						echo "Între 0 și 16 semestre cu bursă!";
																		}
																	}
																?>
															</span>
														</span>
													</td>
												</tr>
											</tbody>
										</table>
										<br>
									</div>
									<div class="form-textboxinput jf-required cid_1">
										<table  style="width:100%">
											<tbody>
												<tr>
													<td>
														<span class="form-sub-label-container" style="vertical-align:top; width:33%; display:inline-block" >
															<label class="form-sub-label" style="min-height:13px;"> Localitatea </label>
															<input type="text"  name="Licenta_Localitate_AltaFacultate" class="form-textbox form-address-city first_1" size="21" placeholder="ex: Ia&#351;i" data-component="city"   value="<?php
																																																												if($v_Licenta_Localitate_AltaFacultate == '')
																																																													echo '';
																																																												else
																																																													echo $v_Licenta_Localitate_AltaFacultate;
																																																											?>" />
															<span style="color:red">
																<?php
																	if(isset($_POST['Submit'])) {
																		if($v_Radio25==1) {
																			$v_Licenta_Localitate_AltaFacultate = $_POST["Licenta_Localitate_AltaFacultate"];
																			$vLicenta_Localitate_AltaFacultate = validLocalitate($v_Licenta_Localitate_AltaFacultate);
																			if($vLicenta_Localitate_AltaFacultate==-1)
																				echo "C&#226;mp necompletat!";
																			else
																				if($vLicenta_Localitate_AltaFacultate==2)
																					echo "C&#226;mpul conține caractere nepermise!";
																				else
																					if($vLicenta_Localitate_AltaFacultate==1)
																						echo "C&#226;mpul trebuie sa aibe între 3 și 85 caractere!";
																		}
																	}
																?>
															</span>
														</span>
														<span class="form-sub-label-container" style="vertical-align:top; width:32%">
															<label class="form-sub-label" for="input_3_country" style="min-height:13px;"> Jude&#355; </label>
															<select class="form-dropdown form-address-country gen" name="Licenta_Judet_AltaFacultate"  data-component="country">
																<?php
																	$v_Licenta_Judet_AltaFacultate=$_POST["Licenta_Judet_AltaFacultate"];
																	$array=array("Alba","Arad","Arges","Bacau","Bihor","BistritaNasaud","Botosani","Braila","Brasov","Bucuresti","Buzau","Calarasi","Caras-Severin","Cluj","Constanta","Covasna","Dambovita","Galati","Giurgiu","Gorj","Harghita","Hunedoara","Ialomita","Iasi","Ilfov","Maramures","Mehedinti","Mures","Neamt","Olt","Prahova","Salaj","Satu Mare","Sibiu","Suceava","Teleorman","Timisoara","Tulcea","Valcea","Vaslui","Vrancea");
																	for($i=0;$i<41;$i++)
																	{
																		echo '<option value="'.$array[$i].'" ';
																		if($v_Licenta_Judet_AltaFacultate==$array[$i])
																			echo 'selected';
																		echo '> '.$array[$i].' </option>';
																	}
																?>
															</select>
														</span>
												
														<span class="form-sub-label-container" style="vertical-align:top; width:32%">
															<label class="form-sub-label" for="input_3_country"  style="min-height:13px;">&#354;ar&#259; </label>
															<select class="form-dropdown form-address-country gen" name="Licenta_Tara_AltaFacultate" data-component="country">
																<?php 
																	$v_Licenta_Tara_AltaFacultate = $_POST["Licenta_Tara_AltaFacultate"];
																?>
																<option value="Romania" <?php
																							if($v_Licenta_Tara_AltaFacultate=="Romania")
																								echo 'selected';
																							else
																								echo '';
																						?>> Rom&#226;nia </option>
																<option value="Republica Moldova"   <?php
																										if($v_Licenta_Tara_AltaFacultate=="Republica Moldova")
																											echo 'selected';
																										else
																											echo '';
																									?>> Republica Moldova </option>
																<option value="Alta Optiune" <?php
																								if($v_Licenta_Tara_AltaFacultate=="Alta Optiune")
																									echo 'selected';
																								else
																									echo '';
																							?>> Alta op&#355;iune</option>
															</select>
														</span>
													</td>
												</tr>
											</tbody>
										</table>
										<br>
									</div>
								</div>

								<div class="form-input jf-required cid_1" >
									<label class="form-label form-label-left form-label-auto" id="label_3" style="color: gray; font-size:medium; width:45%; display:inline-block"> Sunteţi absolvent al studiilor de licenţă?  </label>
									<span style="width:55%">
										<input type="radio" onClick="AbsolventLicenta();" name="group24" id="daAbsolventLicenta" class="css-checkbox" value="1" <?php
																																									if($v_Radio24 == '')
																																										echo '';
																																									else
																																										if($v_Radio24==1)
																																											echo 'checked="checked"';
																																										else
																																											echo '';
																																								?>/>   
										<label for="daAbsolventLicenta" class="css-label" style="margin-right:100px">Da</label>
										<input type="radio" onClick="AbsolventLicenta()" name="group24" id="nuAbsolventLicenta" class="css-checkbox" value="2" <?php
																																									if($v_Radio24 == '')
																																										echo '';
																																									else
																																										if($v_Radio24==2)
																																											echo 'checked="checked"';
																																										else
																																											echo '';
																																								?>/>
										<label for="nuAbsolventLicenta" class="css-label">Nu</label>
									</span>
									<span style="color:red">
										<?php
											if(isset($_POST['Submit'])) {
												$v_Radio24 = $_POST["group24"];
												$vradio24 = validRadio($v_Radio24);
												if($vradio24!==1 && $vradio24!==2)
													echo "Nu ați ales o opțiune!";
												}
										?>
									</span>
								</div>
								<div id="AbsolventLicenta" style="display:none">
									<div  class="form-input jf-required cid_1">
										<div class="general_name" data-wrapper-react="true">
											<span class="form-sub-label-container" style="vertical-align:top;  height: 40px; width:50%;">
												<label class="form-sub-label sublabel_first" style="min-height:13px;"> Denumirea instituţiei de învăţământ superior </label>
												<input type="text" name="Licenta_AbsolventLicenta_Univ" class="form-textbox first_1" size="10" placeholder="ex: Universitatea Alexandru Ioan Cuza" data-component="first" value="<?php
																																																										if($v_Licenta_AbsolventLicenta_Univ == '')
																																																											echo '';
																																																										else
																																																											echo $v_Licenta_AbsolventLicenta_Univ;
																																																									?>" />
												<span style="color:red">
														<?php
															if(isset($_POST['Submit'])) {
																if($v_Radio24==1) {
																	$v_Licenta_AbsolventLicenta_Univ = $_POST["Licenta_AbsolventLicenta_Univ"];
																		$vLicenta_AbsolventLicenta_Univ = validNume($v_Licenta_AbsolventLicenta_Univ);
																		if($vLicenta_AbsolventLicenta_Univ==-1)
																			echo "C&#226;mp necompletat!";
																		else
																			if($vLicenta_AbsolventLicenta_Univ==1)
																				echo "C&#226;mpul conține caractere nepermise!";
																			else
																				if($vLicenta_AbsolventLicenta_Univ==2)
																					echo "C&#226;mpul trebuie sa conțină între 3 și 30 caractere!";
																}
															}
														?>
												</span>
											</span>
											<span class="form-sub-label-container" style="vertical-align:top; height: 40px; width:48%; "> 
												<label class="form-sub-label sublabel_first" style="min-height:13px;"> Facultatea </label> 
												<input type="text" name="Licenta_AbsolventLicenta_Facultate" class="form-textbox first_1" size="10" placeholder="ex: Informatică" data-component="first" value="<?php
																																																					if($v_Licenta_AbsolventLicenta_Facultate == '')
																																																						echo '';
																																																					else
																																																						echo $v_Licenta_AbsolventLicenta_Facultate;
																																																				?>"/>
												<span style="color:red">
														<?php
															if(isset($_POST['Submit'])) {
																if($v_Radio24==1) {
																	$v_Licenta_AbsolventLicenta_Facultate = $_POST["Licenta_AbsolventLicenta_Facultate"];
																		$vLicenta_AbsolventLicenta_Facultate = validNume($v_Licenta_AbsolventLicenta_Facultate);
																		if($vLicenta_AbsolventLicenta_Facultate==-1)
																			echo "C&#226;mp necompletat!";
																		else
																			if($vLicenta_AbsolventLicenta_Facultate==1)
																				echo "C&#226;mpul conține caractere nepermise!";
																			else
																				if($vLicenta_AbsolventLicenta_Facultate==2)
																					echo "C&#226;mpul trebuie sa conțină între 3 și 30 caractere!";
																}
															}
														?>
												</span>
											</span>
										</div>
										<br>  
									</div>
									<div class="form-input jf-required cid_1">
										<br>
										<table  style="width:100%">
											<tbody>
												<tr>
													<td>
														<span class="form-sub-label-container" style="vertical-align:top; width:28%; display:inline-block" >
															<label class="form-sub-label" style="min-height:13px;"> Domeniul de Licenţă </label>
															<input type="text"  name="Licenta_AbsolventLicenta_Domeniu_Licenta" class="form-textbox form-address-city first_1" size="21" placeholder="" data-component="city" value="<?php
																																																											if($v_Licenta_AbsolventLicenta_Domeniu_Licenta == '')
																																																												echo '';
																																																											else
																																																												echo $v_Licenta_AbsolventLicenta_Domeniu_Licenta;
																																																										?>" />
															<span style="color:red">
																<?php
																	if(isset($_POST['Submit'])) {
																		if($v_Radio24==1) {
																			$v_Licenta_AbsolventLicenta_Domeniu_Licenta = $_POST["Licenta_AbsolventLicenta_Domeniu_Licenta"];
																				$vLicenta_AbsolventLicenta_Domeniu_Licenta = validNume($v_Licenta_AbsolventLicenta_Domeniu_Licenta);
																				if($vLicenta_AbsolventLicenta_Domeniu_Licenta==-1)
																					echo "C&#226;mp necompletat!";
																				else
																					if($vLicenta_AbsolventLicenta_Domeniu_Licenta==1)
																						echo "C&#226;mpul conține caractere nepermise!";
																					else
																						if($vLicenta_AbsolventLicenta_Domeniu_Licenta==2)
																							echo "C&#226;mpul trebuie sa conțină între 3 și 30 caractere!";
																		}
																	}
																?>
															</span>
														</span>
														<span class="form-sub-label-container" style="vertical-align:top; width:28%">
															<label class="form-sub-label" for="input_3_country" style="min-height:13px;"> Program de studii/specializare </label>
															<input type="text"  name="Licenta_AbsolventLicenta_Specializare" class="form-textbox form-address-city first_1" size="21" placeholder="" data-component="city" value="<?php
																																																											if($v_Licenta_AbsolventLicenta_Specializare == '')
																																																												echo '';
																																																											else
																																																												echo $v_Licenta_AbsolventLicenta_Specializare;
																																																										?>" />
															<span style="color:red">
																<?php
																	if(isset($_POST['Submit'])) {
																		if($v_Radio24==1) {
																			$v_Licenta_AbsolventLicenta_Specializare = $_POST["Licenta_AbsolventLicenta_Specializare"];
																				$vLicenta_AbsolventLicenta_Specializare = validNume($v_Licenta_AbsolventLicenta_Specializare);
																				if($vLicenta_AbsolventLicenta_Specializare==-1)
																					echo "C&#226;mp necompletat!";
																				else
																					if($vLicenta_AbsolventLicenta_Specializare==1)
																						echo "C&#226;mpul conține caractere nepermise!";
																					else
																						if($vLicenta_AbsolventLicenta_Specializare==2)
																							echo "C&#226;mpul trebuie sa conțină între 3 și 30 caractere!";
																		}
																	}
																?>
															</span>
														</span>
														<span class="form-sub-label-container" style="vertical-align:top; width:12%">
															<label class="form-sub-label" for="input_3_country" style="min-height:13px;"> Titlu obţinut </label>
															<input type="text"  name="Licenta_AbsolventLicenta_An_Facultate" class="form-textbox form-address-city first_1" size="21" placeholder="" data-component="city" value="<?php
																																																										if($v_Licenta_AbsolventLicenta_An_Facultate == '')
																																																											echo '';
																																																										else
																																																											echo $v_Licenta_AbsolventLicenta_An_Facultate;
																																																									?>" />
															<span style="color:red">
																<?php
																	if(isset($_POST['Submit'])) {
																		if($v_Radio24==1) {
																			$v_Licenta_AbsolventLicenta_An_Facultate = $_POST["Licenta_AbsolventLicenta_An_Facultate"];
																				$vLicenta_AbsolventLicenta_An_Facultate = validNume($v_Licenta_AbsolventLicenta_An_Facultate);
																				if($vLicenta_AbsolventLicenta_An_Facultate==-1)
																					echo "C&#226;mp necompletat!";
																				else
																					if($vLicenta_AbsolventLicenta_An_Facultate==1)
																						echo "C&#226;mpul conține caractere nepermise!";
																					else
																						if($vLicenta_AbsolventLicenta_An_Facultate==2)
																							echo "C&#226;mpul trebuie sa conțină între 3 și 30 caractere!";
																		}
																	}
																?>
															</span>
														</span>
														<span class="form-sub-label-container" style="vertical-align:top; width:15%">
															<label class="form-sub-label" for="input_3_country"  style="min-height:13px;">Formă învăţământ </label>
															<select class="form-dropdown form-address-country gen" name="Licenta_AbsolventLicenta_FormaInvatamant" data-component="country" value="<?php
																																																		if($v_Licenta_AbsolventLicenta_FormaInvatamant == '')
																																																			echo '';
																																																		else
																																																			echo $v_Licenta_AbsolventLicenta_FormaInvatamant;
																																																	?>">
																<?php 
																	$v_Licenta_AbsolventLicenta_FormaInvatamant=$_POST["Licenta_AbsolventLicenta_FormaInvatamant"]; 
																?>
																<option value="ZI" <?php
																						if($v_Licenta_AbsolventLicenta_FormaInvatamant=="ZI")
																							echo 'selected';
																						else
																							echo '';
																					?>> ZI </option>
																<option value="Seral"   <?php
																							if($v_Licenta_AbsolventLicenta_FormaInvatamant=="Seral")
																								echo 'selected';
																							else
																								echo '';
																						?>> Seral</option>
																<option value="FR" 	<?php
																						if($v_Licenta_AbsolventLicenta_FormaInvatamant=="FR")
																							echo 'selected';
																						else
																							echo '';
																					?>>FR</option>
																<option value="ID" 	<?php
																						if($v_Licenta_AbsolventLicenta_FormaInvatamant=="ID")
																							echo 'selected';
																						else
																							echo '';
																					?>>ID</option>
							   
															</select>
														</span>
														<span class="form-sub-label-container" style="vertical-align:top; width:12%">
															<label class="form-sub-label" for="input_3_country" style="min-height:13px;"> Ani Studii </label>
															<input type="text"  name="Licenta_AbsolventLicenta_Durata_Studii" class="form-textbox form-address-city first_1" size="21" placeholder="" value="<?php
																																																				if($v_Licenta_AbsolventLicenta_Durata_Studii == '')
																																																					echo '';
																																																				else
																																																					echo $v_Licenta_AbsolventLicenta_Durata_Studii;
																																																			?>"  />
															<span style="color:red">
																<?php
																	if(isset($_POST['Submit'])) {
																		if($v_Radio24==1) {
																			$v_Licenta_AbsolventLicenta_Durata_Studii = $_POST["Licenta_AbsolventLicenta_Durata_Studii"];
																				$vLicenta_AbsolventLicenta_Durata_Studii = validareAniStudii($v_Licenta_AbsolventLicenta_Durata_Studii);
																				if($vLicenta_AbsolventLicenta_Durata_Studii==-1)
																					echo "C&#226;mp necompletat!";
																				else
																					if($vLicenta_AbsolventLicenta_Durata_Studii==1)
																						echo "Caractere nepermise!";
																					else
																						if($vLicenta_AbsolventLicenta_Durata_Studii==2)
																							echo "Între 1 si 6 ani!";
																		}
																	}
																?>
															</span>
														</span>
													</td>
												</tr>
											</tbody>
										</table>
										<br>
									</div>
									<div class="form-input jf-required cid_1">
										<table  style="width:100%">
											<tbody>
												<tr>
													<td>
														<span class="form-sub-label-container" style="vertical-align:top; width:50%">
															<label class="form-sub-label" for="input_3_country" style="min-height:13px;"> Nr. Semestre finanţate de la bugetul de stat</label>
															<input type="number"  name="Licenta_AbsolventLicenta_Semestre_Finantate" class="form-textbox form-address-city first_1" size="21" placeholder="ex: 4" data-component="city" value="<?php
																																																													if($v_Licenta_AbsolventLicenta_Semestre_Finantate == '')
																																																														echo '';
																																																													else
																																																														echo $v_Licenta_AbsolventLicenta_Semestre_Finantate;
																																																												?>"/>
															<span style="color:red">
																<?php
																	if(isset($_POST['Submit'])) {
																		if($v_Radio24==1) {
																			$v_Licenta_AbsolventLicenta_Semestre_Finantate = $_POST["Licenta_AbsolventLicenta_Semestre_Finantate"];
																				$vLicenta_AbsolventLicenta_Semestre_Finantate = validareNrSemCuBursa($v_Licenta_AbsolventLicenta_Semestre_Finantate);
																				if($vLicenta_AbsolventLicenta_Semestre_Finantate==-1)
																					echo "C&#226;mp necompletat!";
																				else
																					if($vLicenta_AbsolventLicenta_Semestre_Finantate==1)
																						echo "Între 0 și 16 semestre finanțate!";
																		}
																	}
																?>
															</span>
														</span>
														<span class="form-sub-label-container" style="vertical-align:top; width:48%">
															<label class="form-sub-label" for="input_3_country" style="min-height:13px;"> Nr. Semestre în care aţi beneficiat de bursă</label>
															<input type="number"  name="Licenta_AbsolventLicenta_Semestre_Bursa" class="form-textbox form-address-city first_1" size="21" placeholder="ex: 4" data-component="city"  value="<?php
																																																												if($v_Licenta_AbsolventLicenta_Semestre_Bursa == '')
																																																													echo '';
																																																												else
																																																													echo $v_Licenta_AbsolventLicenta_Semestre_Bursa;
																																																											?>" />
															<span style="color:red">
																<?php
																	if(isset($_POST['Submit'])) {
																		if($v_Radio24==1) {
																			$v_Licenta_AbsolventLicenta_Semestre_Bursa = $_POST["Licenta_AbsolventLicenta_Semestre_Bursa"];
																				$vLicenta_AbsolventLicenta_Semestre_Bursa = validareNrSemCuBursa($v_Licenta_AbsolventLicenta_Semestre_Bursa);
																				if($vLicenta_AbsolventLicenta_Semestre_Bursa==-1)
																					echo "C&#226;mp necompletat!";
																				else
																					if($vLicenta_AbsolventLicenta_Semestre_Bursa==1)
																						echo "Între 0 și 16 semestre cu bursă!";
																		}
																	}
																?>
															</span>
														</span>
													</td>
												</tr>
											</tbody>
										</table>
										<br>
									</div>
									<div class="form-textboxinput jf-required cid_1">
										<table  style="width:100%">
											<tbody>
												<tr>
													<td>
														<span class="form-sub-label-container" style="vertical-align:top; width:33%; display:inline-block" >
															<label class="form-sub-label" style="min-height:13px;"> Localitatea </label>
															<input type="text"  name="Licenta_AbsolventLicenta_Localitate_AltaFacultate" class="form-textbox form-address-city first_1" size="21" placeholder="ex: Ia&#351;i" data-component="city" value="<?php
																																																																if($v_Licenta_AbsolventLicenta_Localitate_AltaFacultate == '')
																																																																	echo '';
																																																																else
																																																																	echo $v_Licenta_AbsolventLicenta_Localitate_AltaFacultate;
																																																															?>" />
															<span style="color:red">
																<?php
																	if(isset($_POST['Submit'])) {
																		if($v_Radio24==1) {
																			$v_Licenta_AbsolventLicenta_Localitate_AltaFacultate = $_POST["Licenta_AbsolventLicenta_Localitate_AltaFacultate"];
																			$vLicenta_AbsolventLicenta_Localitate_AltaFacultate = validLocalitate($v_Licenta_AbsolventLicenta_Localitate_AltaFacultate);
																			if($vLicenta_AbsolventLicenta_Localitate_AltaFacultate==-1)
																				echo "C&#226;mp necompletat!";
																			else
																				if($vLicenta_AbsolventLicenta_Localitate_AltaFacultate==2)
																					echo "C&#226;mpul conține caractere nepermise!";
																				else
																					if($vLicenta_AbsolventLicenta_Localitate_AltaFacultate==1)
																						echo "C&#226;mpul trebuie sa aibe între 3 și 85 caractere!";
																		}
																	}
																?>
															</span>
														</span>
														<span class="form-sub-label-container" style="vertical-align:top; width:32%">
															<label class="form-sub-label" for="input_3_country" style="min-height:13px;"> Jude&#355; </label>
															<select class="form-dropdown form-address-country gen" name="Licenta_AbsolventLicenta_Judet_AltaFacultate"  data-component="country">
																<?php
																	$array=array("Alba","Arad","Arges","Bacau","Bihor","BistritaNasaud","Botosani","Braila","Brasov","Bucuresti","Buzau","Calarasi","Caras-Severin","Cluj","Constanta","Covasna","Dambovita","Galati","Giurgiu","Gorj","Harghita","Hunedoara","Ialomita","Iasi","Ilfov","Maramures","Mehedinti","Mures","Neamt","Olt","Prahova","Salaj","Satu Mare","Sibiu","Suceava","Teleorman","Timisoara","Tulcea","Valcea","Vaslui","Vrancea");
																	$v_Licenta_AbsolventLicenta_Judet_AltaFacultate=$_POST["Licenta_AbsolventLicenta_Judet_AltaFacultate"];
																	for($i=0;$i<41;$i++)
																	{
																		echo '<option value="'.$array[$i].'" ';
																		if($v_Licenta_AbsolventLicenta_Judet_AltaFacultate==$array[$i])
																			echo 'selected';
																		echo '> '.$array[$i].' </option>';
																	}
																?>
															</select>
														</span>
												
														<span class="form-sub-label-container" style="vertical-align:top; width:32%">
															<label class="form-sub-label" for="input_3_country"  style="min-height:13px;">&#354;ar&#259; </label>
															<select class="form-dropdown form-address-country gen" name="Licenta_Tara_AltaFacultate_Licenta" data-component="country">
																<?php 
																	$v_Licenta_Tara_AltaFacultate_Licenta = $_POST["Licenta_Tara_AltaFacultate_Licenta"];
																?>
																<option value="Romania" <?php
																							if($v_Licenta_Tara_AltaFacultate_Licenta=="Romania")
																								echo 'selected';
																							else
																								echo '';
																						?>> Rom&#226;nia </option>
																<option value="Republica Moldova"   <?php
																										if($v_Licenta_Tara_AltaFacultate_Licenta=="Republica Moldova")
																											echo 'selected';
																										else
																											echo '';
																									?>> Republica Moldova </option>
																<option value="Alta Optiune" 	<?php
																									if($v_Licenta_Tara_AltaFacultate_Licenta=="Alta Optiune")
																										echo 'selected';
																									else
																										echo '';
																								?>> Alta op&#355;iune</option>
															</select>
														</span>
													</td>
												</tr>
											</tbody>
										</table>
										<br>
									</div>
									<div class="form-input jf-required cid_1" >
										<label class="form-label form-label-left form-label-auto" id="label_3" style="color: gray; font-size:medium; width:45%; display:inline-block"> Aveţi diplomă de licenţă?  </label>
										
										<span style="width:55%">
											<input type="radio" onClick="DiplomaLicenta();" name="group23" id="daDiplomaLicenta" class="css-checkbox" value="1" <?php
																																									if($v_Radio23 == '')
																																										echo '';
																																									else
																																										if($v_Radio23==1)
																																											echo 'checked="checked"';
																																										else
																																											echo '';
																																								?>/>   
											<label for="daDiplomaLicenta" class="css-label" style="margin-right:100px">Da</label>
											<input type="radio" onClick="DiplomaLicenta()" name="group23" id="nuDiplomaLicenta" class="css-checkbox" value="2" <?php
																																									if($v_Radio23 == '')
																																										echo '';
																																									else
																																										if($v_Radio23==2)
																																											echo 'checked="checked"';
																																										else
																																											echo '';
																																								?>/>
											<label for="nuDiplomaLicenta" class="css-label">Nu</label>
											<span style="color:red">
												<?php
													  if(isset($_POST['Submit'])) {
														$v_Radio23 = $_POST["group23"];
														$vradio23 = validRadio($v_Radio23);
														if($vradio23!==1 && $vradio23!==2)
															echo "Nu ați ales o opțiune!";
														
													  }
												?>
											</span>
									  </span>

									</div>
									<div id="DiplomaLicenta" style="display:none">
										<div class="form-input jf-required cid_1">
											<table  style="width:100%">
												<tbody>
													<tr>
														<td>
															<span class="form-sub-label-container" style="vertical-align:top; width:25%; display:inline-block" >
																<label class="form-sub-label" style="min-height:13px;"> Seria diplomei de Licenţă </label>
																<input type="text" name="Licenta_Serie_DiplomaLicenta" class="form-textbox form-address-city first_1" size="21" placeholder="ex: A" data-component="city" value="<?php
																																																									if($v_Licenta_Serie_DiplomaLicenta == '')
																																																										echo '';
																																																									else
																																																										echo $v_Licenta_Serie_DiplomaLicenta;
																																																								?>"/>
																<span style="color:red">
																	<?php
																		if($vradio23==1){
																			$v_Licenta_Serie_DiplomaLicenta=$_POST["Licenta_Serie_DiplomaLicenta"];
																			$vLicenta_Serie_DiplomaLicenta=validSerieBAC($v_Licenta_Serie_DiplomaLicenta);
																			if($vLicenta_Serie_DiplomaLicenta==-1)
																				echo "C&#226;mp necompletat!";
																			else
																				if($vLicenta_Serie_DiplomaLicenta==1)
																					echo "Caractere nepermise";
																		}
																	?>
																</span>
															</span>
															<span class="form-sub-label-container" style="vertical-align:top; width:14%">
																<label class="form-sub-label" for="input_3_country" style="min-height:13px;"> Numarul dimplomei </label>
																<input type="number"  name="Licenta_Nr_DiplomaLicenta" class="form-textbox form-address-city first_1" size="21" placeholder="ex: 345" data-component="city" value="<?php
																																																										if($v_Licenta_Nr_DiplomaLicenta == '')
																																																											echo '';
																																																										else
																																																											echo $v_Licenta_Nr_DiplomaLicenta;
																																																									?>"/>
																<span style="color:red">
																	<?php
																		if($vradio23==1){
																			$v_Licenta_Nr_DiplomaLicenta=$_POST["Licenta_Nr_DiplomaLicenta"];
																			if($v_Licenta_Nr_DiplomaLicenta=='')
																					echo "C&#226;mp necompletat!";
																				else
																					if(!ctype_digit($v_Licenta_Nr_DiplomaLicenta))
																						echo "Caractere nepermise!";
																		}
																	?>
																</span>

															</span>
															<!--<span class="form-sub-label-container" style="vertical-align:top; width:22%">
																<label class="form-sub-label" for="input_3_country" style="min-height:13px;"> Emisă de </label>
																<input type="text"  name="Licenta_Emitere_DiplomaLicenta" class="form-textbox form-address-city first_1" size="21" placeholder="ex: Facultatea de Informatică Iași" data-component="city" value="<?php
																																																																	if($v_Licenta_Emitere_DiplomaLicenta == '')
																																																																		echo '';
																																																																	else
																																																																		echo $v_Licenta_Emitere_DiplomaLicenta;
																																																																?>"/>
																<span style="color:red">
																	<?php
																		if($vradio23==1){
																			$v_Licenta_Emitere_DiplomaLicenta=$_POST["Licenta_Emitere_DiplomaLicenta"];
																			$vLicenta_Emitere_DiplomaLicenta=validBuletinEliberatDe($v_Licenta_Emitere_DiplomaLicenta);
																			if($vLicenta_Emitere_DiplomaLicenta==-1)
																					echo "C&#226;mp necompletat!";
																				else
																					if($vLicenta_Emitere_DiplomaLicenta==1)
																						echo "C&#226;mp invalid!";
																					else
																						if($vLicenta_Emitere_DiplomaLicenta==2)
																							echo "Minim 3 caractere!";
																		}
																	?>
																</span>
															</span>-->
															<span>
																<div  class="form-input jf-required" style="vertical-align:top;padding:0;margin:0;height:40px">
																	<div data-wrapper-react="true">
																		<span class="form-sub-label-container" style="vertical-align:top; ">
																			<label class="form-sub-label"  style="min-height:13px;">Data Emitere</label>
																			<select style="height:40px;" name="Licenta_DiplomaLicenta_Luna"  class="form-dropdown" data-component="birthdate-month">
																				<?php 
																					$v_Licenta_DiplomaLicenta_Luna = $_POST["Licenta_DiplomaLicenta_Luna"];
																				?>
																				<option value="January" <?php
																											if($v_Licenta_DiplomaLicenta_Luna=="January")
																												echo 'selected';
																											else
																												echo '';
																										?>>Ianuarie</option>
																				<option value="February" <?php
																											if($v_Licenta_DiplomaLicenta_Luna=="February")
																												echo 'selected';
																											else
																												echo '';
																										?>> Februarie</option>    
																				<option value="March" 	<?php
																											if($v_Licenta_DiplomaLicenta_Luna=="March")
																												echo 'selected';
																											else
																												echo '';
																										?>> Martie </option>    
																				<option value="April" 	<?php
																											if($v_Licenta_DiplomaLicenta_Luna=="April")
																												echo 'selected';
																											else
																												echo '';
																										?>> Aprilie </option>   
																				<option value="May" <?php
																										if($v_Licenta_DiplomaLicenta_Luna=="May")
																											echo 'selected';
																										else
																											echo '';
																									?>> Mai </option>   
																				<option value="June" 	<?php
																											if($v_Licenta_DiplomaLicenta_Luna=="June")
																												echo 'selected';
																											else
																												echo '';
																										?>> Iunie </option>   
																				<option value="July" 	<?php
																											if($v_Licenta_DiplomaLicenta_Luna=="July")
																												echo 'selected';
																											else
																												echo '';
																										?>> Iulie</option>    
																				<option value="August"	<?php
																											if($v_Licenta_DiplomaLicenta_Luna=="August")
																												echo 'selected';
																											else
																												echo '';
																										?>> August </option>    
																				<option value="September" 	<?php
																												if($v_Licenta_DiplomaLicenta_Luna=="September")
																													echo 'selected';
																												else
																													echo '';
																											?>> Septembrie </option>    
																				<option value="October" <?php
																											if($v_Licenta_DiplomaLicenta_Luna=="October")
																												echo 'selected';
																											else
																												echo '';
																										?>> Octombrie </option>   
																				<option value="November" 	<?php
																												if($v_Licenta_DiplomaLicenta_Luna=="November")
																													echo 'selected';
																												else
																													echo '';
																											?>> Noiembrie</option>    
																				<option value="December" 	<?php
																												if($v_Licenta_DiplomaLicenta_Luna=="December")
																													echo 'selected';
																												else
																													echo '';
																											?>> Decembrie </option>
																			</select>
																		</span>
																		<span class="form-sub-label-container" style="vertical-align:bottom;">
																			<select style="height:40px;" name="Licenta_DiplomaLicenta_Ziua"  class="form-dropdown" data-component="birthdate-day">
																				<?php
																					$v_Licenta_DiplomaLicenta_Ziua=$_POST["Licenta_DiplomaLicenta_Ziua"];
																					for($i=1;$i<=31;$i++)
																					{
																						echo '<option value="'.$i.'" ';
																						if($v_Licenta_DiplomaLicenta_Ziua==$i)
																							echo 'selected';
																						echo '> '.$i.' </option>';
																					}
																				?>
																			</select>
																		</span>
																		<span class="form-sub-label-container" style="vertical-align:bottom;">
																			<select style="height:40px;" name="Licenta_DiplomaLicenta_An"  class="form-dropdown" data-component="birthdate-year">
																				<?php
																					$v_Licenta_DiplomaLicenta_An=$_POST["Licenta_DiplomaLicenta_An"];
																					for($i=2017;$i>=1920;$i--)
																					{
																						echo '<option value="'.$i.'" ';
																						if($v_Licenta_DiplomaLicenta_An==$i)
																							echo 'selected';
																						echo '> '.$i.' </option>';
																					}
																				?>
																			</select>
																		</span>
																	</div>
																</div>
															</span>
															<span class="form-sub-label-container" style="vertical-align:top; width:15%">
																<label class="form-sub-label" for="input_3_country" style="min-height:13px;"> Numarul Foii Matricole </label>
																<input type="number"  name="Licenta_AbsolventLicenta_Nr_FoaieMatricola" class="form-textbox form-address-city first_1" size="21" placeholder="ex: 4" data-component="city" value="<?php
																																																														if($v_Licenta_AbsolventLicenta_Nr_FoaieMatricola == '')
																																																															echo '';
																																																														else
																																																															echo $v_Licenta_AbsolventLicenta_Nr_FoaieMatricola;
																																																													?>" />
																<span style="color:red">
																	<?php
																		if($vradio23==1){
																			$v_Licenta_AbsolventLicenta_Nr_FoaieMatricola=$_POST["Licenta_AbsolventLicenta_Nr_FoaieMatricola"];
																			if($v_Licenta_AbsolventLicenta_Nr_FoaieMatricola=='')
																					echo "C&#226;mp necompletat!";
																				else
																					if(!ctype_digit($v_Licenta_AbsolventLicenta_Nr_FoaieMatricola))
																						echo "Caractere nepermise!";
																		}
																	?>
																</span>
															</span>
														</td>
													</tr>
												</tbody>
											</table>
											<br>
										</div>
										<label class="form-label form-label-left form-label-auto" style="color: gray; font-size:medium; width:100%; display:inline-block"> Pentru cazul în care candidatul a absolvit studiile anterioare în străinătate: </label>
										<div class="form-input jf-required cid_1">
											<table  style="width:100%">
												<tbody>
													<tr>
														<td>
															<span class="form-sub-label-container" style="vertical-align:top; width:50%; display:inline-block" >
																<label class="form-sub-label" style="min-height:13px;"> Nr. actului de recunoaştere/echivalare (eliberat de DPIRP/CNRED) </label>
																<input type="number"  name="Licenta_AbsolventLicenta_Nr_ActRecunoastere" class="form-textbox form-address-city first_1" size="21" placeholder="ex: 5643" data-component="city"   value="<?php
																																																															if($v_Licenta_AbsolventLicenta_Nr_ActRecunoastere == '')
																																																																echo '';
																																																															else
																																																																echo $v_Licenta_AbsolventLicenta_Nr_ActRecunoastere;
																																																														?>"/>
																<span style="color:red">
																		<?php
																			if($vradio23==1){
																				$v_Licenta_AbsolventLicenta_Nr_ActRecunoastere=$_POST["Licenta_AbsolventLicenta_Nr_ActRecunoastere"];
																				//if($v_Licenta_AbsolventLicenta_Nr_ActRecunoastere=='')
																				//		echo "C&#226;mp necompletat!";
																				//	else
																						if(!ctype_digit($v_Licenta_AbsolventLicenta_Nr_ActRecunoastere))
																							echo "Caractere nepermise!";
																			}
																		?>
																</span>
															</span>
															<span class="form-sub-label-container" style="vertical-align:top; width:15%">
																<label class="form-sub-label" for="input_3_country" style="min-height:13px;"> Seria </label>
																<input type="text"  name="Licenta_AbsolventLicenta_Serie_ActRecunoastere" class="form-textbox form-address-city first_1" size="21" placeholder="ex: D" data-component="city" value="<?php
																																																														if($v_Licenta_AbsolventLicenta_Serie_ActRecunoasteree == '')
																																																															echo '';
																																																														else
																																																															echo $v_Licenta_AbsolventLicenta_Serie_ActRecunoasteree;
																																																													?>"/>
																<span style="color:red">
																		<?php
																			if($vradio23==1){
																				$v_Licenta_AbsolventLicenta_Serie_ActRecunoasteree=$_POST["Licenta_AbsolventLicenta_Serie_ActRecunoastere"];
																				$vLicenta_AbsolventLicenta_Serie_ActRecunoasteree=validSerieBAC($v_Licenta_AbsolventLicenta_Serie_ActRecunoasteree);
																				//if($vLicenta_AbsolventLicenta_Serie_ActRecunoasteree==-1)
																				//	echo "C&#226;mp necompletat!";
																				//else
																					if($vLicenta_AbsolventLicenta_Serie_ActRecunoasteree==1)
																						echo "Caractere nepermise";
																			}
																		?>
																</span>																																		
															</span>
											  
															<span>
																<div  class="form-input jf-required" style="vertical-align:top;padding:0;margin:0;height:40px">
																	<div data-wrapper-react="true">
																		<span class="form-sub-label-container" style="vertical-align:top; ">
																			<label class="form-sub-label"  style="min-height:13px;">Data Echivalare</label>
																			<select style="height:40px;" name="Licenta__AbsolventLicenta_ActEchivalare_Luna"  class="form-dropdown" data-component="birthdate-month">
																				<?php 
																					$v_Licenta__AbsolventLicenta_ActEchivalare_Luna=$_POST["Licenta__AbsolventLicenta_ActEchivalare_Luna"];
																				?>
																				<option value="January" <?php
																											if($v_Licenta__AbsolventLicenta_ActEchivalare_Luna=="January")
																												echo 'selected';
																											else
																												echo '';
																										?> >Ianuarie</option>
																				<option value="February" <?php
																											if($v_Licenta__AbsolventLicenta_ActEchivalare_Luna=="February")
																												echo 'selected';
																											else
																												echo '';
																										?> > Februarie</option>    
																				<option value="March" 	<?php
																											if($v_Licenta__AbsolventLicenta_ActEchivalare_Luna=="March")
																												echo 'selected';
																											else
																												echo '';
																										?> > Martie </option>    
																				<option value="April"	 <?php
																											if($v_Licenta__AbsolventLicenta_ActEchivalare_Luna=="April")
																												echo 'selected';
																											else
																												echo '';
																										?> > Aprilie </option>   
																				<option value="May" <?php
																										if($v_Licenta__AbsolventLicenta_ActEchivalare_Luna=="May")
																											echo 'selected';
																										else
																											echo '';
																									?> > Mai </option>   
																				<option value="June" 	<?php
																											if($v_Licenta__AbsolventLicenta_ActEchivalare_Luna=="June")
																												echo 'selected';
																											else
																												echo '';
																										?> > Iunie </option>   
																				<option value="July" 	<?php
																											if($v_Licenta__AbsolventLicenta_ActEchivalare_Luna=="July")
																												echo 'selected';
																											else
																												echo '';
																										?> > Iulie</option>    
																				<option value="August" <?php
																											if($v_Licenta__AbsolventLicenta_ActEchivalare_Luna=="August")
																												echo 'selected';
																											else
																												echo '';
																										?> > August </option>    
																				<option value="September" 	<?php
																												if($v_Licenta__AbsolventLicenta_ActEchivalare_Luna=="September")
																													echo 'selected';
																												else
																													echo '';
																											?> > Septembrie </option>    
																				<option value="October" <?php
																											if($v_Licenta__AbsolventLicenta_ActEchivalare_Luna=="October")
																												echo 'selected';
																											else
																												echo '';
																										?> > Octombrie </option>   
																				<option value="November" 	<?php
																												if($v_Licenta__AbsolventLicenta_ActEchivalare_Luna=="November")
																													echo 'selected';
																												else
																													echo '';
																											?> > Noiembrie</option>    
																				<option value="December" 	<?php
																												if($v_Licenta__AbsolventLicenta_ActEchivalare_Luna=="December")
																													echo 'selected';
																												else
																													echo '';
																											?> > Decembrie </option>
																			</select>
																		</span>
																		<span class="form-sub-label-container" style="vertical-align:bottom;">
																			<select style="height:40px;" name="Licenta_AbsolventLicenta_ActEchivalare_Ziua"  class="form-dropdown" data-component="birthdate-day">
																			<?php
																				$v_Licenta_AbsolventLicenta_ActEchivalare_Ziua=$_POST["Licenta_AbsolventLicenta_ActEchivalare_Ziua"];
																				for($i=1;$i<=31;$i++)
																				{
																					echo '<option value="'.$i.'" ';
																					if($v_Licenta_AbsolventLicenta_ActEchivalare_Ziua==$i)
																						echo 'selected';
																					echo '> '.$i.' </option>';
																				}
																			?>
																			</select>
																		</span>
																		<span class="form-sub-label-container" style="vertical-align:bottom;">
																			<select style="height:40px;" name="Licenta_AbsolventLicenta_ActEchivalare_An"  class="form-dropdown" data-component="birthdate-year">
																			<?php
																				$v_Licenta_AbsolventLicenta_ActEchivalare_An=$_POST["Licenta_AbsolventLicenta_ActEchivalare_An"];
																				for($i=2017;$i>=1920;$i--)
																				{
																					echo '<option value="'.$i.'" ';
																					if($v_Licenta_AbsolventLicenta_ActEchivalare_An==$i)
																						echo 'selected';
																					echo '> '.$i.' </option>';
																				}
																			?>
																			</select>
																		</span>
																	</div>
																</div>
															</span>
														</td>
													</tr>
												</tbody>
											</table>
											<br>
											<br>
										</div>
									</div>
								</div>
							</li>

							<li class="form-line" data-type="control_fullname" >
								<label class="form-label form-label-left form-label-auto"  style="color: #3488CB; font-size:larger"> IV. Cerinţe Specifice Facultăţii </label>

								<div  class="form-input jf-required cid_1" >
									<label class="form-label form-label-left form-label-auto" style="color: gray; font-size:medium; width:45%; display:inline-block"> Solicitaţi echivalare cu diploma olimpiadă organizată MEN? <span class="info-box">
																																																									?
																																																									<span class="info-box__content" style="width:250px;">
																																																										Diploma se prezintă în original comisiei de admitere pentru validare
																																																									</span>
																																																								</span>
									</label>
									
									<span style="width:55%">
										<input type="radio" name="group2" id="checkbox10" class="css-checkbox" value="1" 	<?php
																																if($v_Radio2 == '')
																																	echo '';
																																else
																																	if($v_Radio2==1)
																																		echo 'checked="checked"';
																																	else
																																		echo '';
																															?> />		
										<label for="checkbox10" class="css-label" style="margin-right:100px">Da</label>
										<input type="radio" name="group2" id="checkbox12" class="css-checkbox" value="2" <?php
																															if($v_Radio2 == '')
																																echo '';
																															else
																																if($v_Radio2==2)
																																	echo 'checked="checked"';
																																else
																																	echo '';
																														?> />
										<label for="checkbox12" class="css-label">Nu</label>
									</span>
									<span style="color:red">
										<?php
											if(isset($_POST['Submit'])) {
												$v_Radio2 = $_POST["group2"];
												$vradio2 = validRadio($v_Radio2);
												if($vradio2!==1 && $vradio2!==2)
													echo "Nu ați ales o opțiune!";
												}
										?>
									</span>
								</div>
								<br>
								<div class="form-input jf-required cid_1" style="padding-bottom: 5%">
									<br>
									<div data-wrapper-react="true" class="mg">
										<span class="form-sub-label-container" style="vertical-align:top; width:100%" >
											<label class="form-sub-label sublabel_first"  style="min-height:13px;">Media general&#259; Bacalaureat</label>
											<!--<input type="text"  name="Licenta_Medie_BAC" class="form-textbox first_1"  size="20" data-component="first"  value="<?php 
																																									//if($v_Licenta_Medie_BAC == '') 
																																									//	echo '';
																																									//else
																																									//	echo $v_Licenta_Medie_BAC;
																																								?>" />-->
											<select style="height:40px;" name="MedieBac0"  class="form-dropdown" data-component="birthdate-day">
												<?php
													$v_MedieBac0 = $_POST["MedieBac0"];
													for($i=0;$i<=1;$i++)
													{
														echo '<option value="'.$i.'" ';
														if($v_MedieBac0==$i)
															echo 'selected';
														echo '> '.$i.' </option>';
													}
												?>
											</select>
											<select style="height:40px;" name="MedieBac1"  class="form-dropdown" data-component="birthdate-day">
												<?php
													$v_MedieBac1 = $_POST["MedieBac1"];
													for($i=0;$i<=0;$i++)
													{
														echo '<option value="'.$i.'" ';
														if($v_MedieBac1==$i)
															echo 'selected';
														echo '> '.$i.' </option>';
													}
													for($i=6;$i<=9;$i++)
													{
														echo '<option value="'.$i.'" ';
														if($v_MedieBac1==$i)
															echo 'selected';
														echo '> '.$i.' </option>';
													}
												?>
											</select>
											.
											<select style="height:40px;" name="MedieBac2"  class="form-dropdown" data-component="birthdate-day">
												<?php
													$v_MedieBac2 = $_POST["MedieBac2"];
													for($i=0;$i<=9;$i++)
													{
														echo '<option value="'.$i.'" ';
														if($v_MedieBac2==$i)
															echo 'selected';
														echo '> '.$i.' </option>';
													}
												?>
											</select>
											<select style="height:40px;" name="MedieBac3"  class="form-dropdown" data-component="birthdate-day">
												<?php
													$v_MedieBac3 = $_POST["MedieBac3"];
													for($i=0;$i<=9;$i++)
													{
														echo '<option value="'.$i.'" ';
														if($v_MedieBac3==$i)
															echo 'selected';
														echo '> '.$i.' </option>';
													}
												?>
											</select>
										</span>
										<span style="color:red">
												<?php 
													if(isset($_POST['Submit'])) {
														//$v_Licenta_Medie_BAC = $_POST["Licenta_Medie_BAC"];
														$v_Licenta_Medie_BAC=$v_MedieBac0*10+$v_MedieBac1+$v_MedieBac2/10+$v_MedieBac3/100;
														$vLicenta_Medie_BAC = validareMedieBac($v_Licenta_Medie_BAC);
														if($vLicenta_Medie_BAC==-1)
															echo "C&#226;mp necompletat!";
														else
															if($vLicenta_Medie_BAC==1)
														echo "Format nepotrivit!";
															else
																if($vLicenta_Medie_BAC==2)
																	echo "Notă incorectă!";
													}
												?>
											</span>
									</div> 
									<div data-wrapper-react="true" class="mg">
										<span  class="form-sub-label-container gen" style="vertical-align:top;">
											<label class="form-sub-label sublabel_first"   style="min-height:13px;">Nota la Matematic&#259; sau Informatic&#259;<span class="info-box">
																																									?
																																									<span class="info-box__content">
																																										Nota la examenul de bacalaureat la una din cele două materii
																																									</span>
																																								</span>
											</label>
											<!--<input type="text"  name="Licenta_Nota_MI" class="form-textbox first_1" size="20" data-component="first" value="<?php 
																																								if($v_Licenta_Nota_MI == '') 
																																									echo '';
																																								else
																																									echo $v_Licenta_Nota_MI;
																																							?>" />-->
											<select style="height:40px;" name="MedieAlegere0"  class="form-dropdown" data-component="birthdate-day">
												<?php
													$v_MedieAlegere0 = $_POST["MedieAlegere0"];
													for($i=0;$i<=1;$i++)
													{
														echo '<option value="'.$i.'" ';
														if($v_MedieAlegere0==$i)
															echo 'selected';
														echo '> '.$i.' </option>';
													}
												?>
											</select>
											<select style="height:40px;" name="MedieAlegere1"  class="form-dropdown" data-component="birthdate-day">
												<?php
													$v_MedieAlegere1 = $_POST["MedieAlegere1"];
													for($i=0;$i<=0;$i++)
													{
														echo '<option value="'.$i.'" ';
														if($v_MedieAlegere1==$i)
															echo 'selected';
														echo '> '.$i.' </option>';
													}
													for($i=5;$i<=9;$i++)
													{
														echo '<option value="'.$i.'" ';
														if($v_MedieAlegere1==$i)
															echo 'selected';
														echo '> '.$i.' </option>';
													}
												?>
											</select>
											.
											<select style="height:40px;" name="MedieAlegere2"  class="form-dropdown" data-component="birthdate-day">
												<?php
													$v_MedieAlegere2 = $_POST["MedieAlegere2"];
													for($i=0;$i<=9;$i++)
													{
														echo '<option value="'.$i.'" ';
														if($v_MedieAlegere2==$i)
															echo 'selected';
														echo '> '.$i.' </option>';
													}
												?>
											</select>
											<select style="height:40px;" name="MedieAlegere3"  class="form-dropdown" data-component="birthdate-day">
												<?php
													$v_MedieAlegere3 = $_POST["MedieAlegere3"];
													for($i=0;$i<=9;$i++)
													{
														echo '<option value="'.$i.'" ';
														if($v_MedieAlegere3==$i)
															echo 'selected';
														echo '> '.$i.' </option>';
													}
												?>
											</select>
											<span style="color:red">
												<?php 
													if(isset($_POST['Submit'])) {
														//$v_Licenta_Nota_MI = $_POST["Licenta_Nota_MI"];
														$v_Licenta_Nota_MI=$v_MedieAlegere0*10+$v_MedieAlegere1+$v_MedieAlegere2/10+$v_MedieAlegere3/100;
														$vLicenta_Nota_MI = validareMedieAlegere($v_Licenta_Nota_MI);
														if($vLicenta_Nota_MI==-1)
															echo "C&#226;mp necompletat!";
														else
															if($vLicenta_Nota_MI==1)
																echo "Format nepotrivit!";
															else
																if($vLicenta_Nota_MI==2)
																	echo "Notă incorectă!";
													}
												?>
											</span>
										</span>
									</div>
									<div class="mg">
										<span class="form-sub-label-container gen" style="vertical-align:top;">
											<label class="form-sub-label" for="input_3_country"  style="min-height:13px;">Doresc &#238;nva&#355;&#259;m&#226;nt de zi</label>
											<select class="form-dropdown form-address-country" style="width:100%; height:40px" name="Licenta_Limba_Aleasa" data-component="country">
												<option value="In limba romana" <?php
																					if($v_Master_limba=="In limba romana")
																						echo 'selected';
																					else
																						echo '';
																				?>>&#206;n limba rom&#226;n&#259;</option>
												<option value="In limba engleza"<?php
																					if($v_Master_limba=="In limba engleza")
																						echo 'selected';
																					else
																						echo '';
																				?>>&#206;n limba englez&#259;</option>
											</select>
										</span>   
									</div>  
									<div data-wrapper-react="true" class="mg">
										<span class="form-sub-label-container gen" style="vertical-align:top;">
											<label class="form-sub-label" for="input_3_country"  style="min-height:13px;">Doresc să dau testul scris la materia:</label>
											<select class="form-dropdown form-address-country gen" name="Licenta_Obiect_Test_Ales"  data-component="country">
												<option value="Alege optiune"></option> 
												<option value="Matematica"<?php
																			if($v_Licenta_Obiect=="Matematica")
																				echo 'selected';
																			else
																				echo '';
																			?>>Matematic&#259;</option>
												<option value="Informatica C/C++"	<?php
																						if($v_Licenta_Obiect=="Informatica C/C++")
																							echo 'selected';
																						else
																							echo '';
																					?>>Informatic&#259; C/C++</option>
												<option value="Informatica Pascal"	<?php
																						if($v_Licenta_Obiect=="Informatica Pascal")
																							echo 'selected';
																						else
																							echo '';
																					?>>Informatic&#259; Pascal</option>
											</select>
											<span style="color:red">
												<?php 
													if(isset($_POST['Submit'])) {
														$v_Licenta_Obiect_Test_Ales = $_POST["Licenta_Obiect_Test_Ales"];
														if($v_Licenta_Obiect_Test_Ales=='Alege optiune')
															echo "C&#226;mp necompletat!";
													}
												?>
											</span>
										</span>   
									</div> 
								</div>       
								<br>
								
								<div  class="form-input jf-required cid_1" style="display:inline-block">
									<br>
									
									<label class="form-label  form-label-auto" style="color: gray; font-size:medium; width:70%; display:inline-block; padding-top:4%;"> 
										Aţi participat la preadmitere la Facultatea de Informatică din Iaşi în anul  <input type="number"  name="Licenta_AnPreadmitere" class="form-textbox form-address-city first_1" style="width:100px" placeholder="ex: 2016"  value="<?php echo $_POST["Licenta_AnPreadmitere"]; ?>"  data-component="city" />
										şi doriţi luarea în considerare a notei la examenul din sesiunea curentă?  <span class="info-box">
																															?
																															<span class="info-box__content">
																																Opţiune valabilă la o singură sesiune de admitere
																															</span>
																														</span> 
										<span style="color:red">
											<?php 
												$v_Licenta_AnPreadmitere=$_POST["Licenta_AnPreadmitere"];
												$vLicenta_AnPreadmitere = validareAn($v_Licenta_AnPreadmitere);
												if($v_Radio21==1)
												{
													if($vLicenta_AnPreadmitere==-1)
														echo "An necompletat!";
													else
														if($vLicenta_AnPreadmitere==1)
															echo "Caractere nepermise!";
														else
															if($vLicenta_AnPreadmitere==2)
																echo "An incorect!";
												}
											?> 
										</span>
									</label>
									<span style="width:23%;">
										<input type="radio"  onClick="Preadmitere()" name="group21" id="daPreadmitere" class="css-checkbox" value="1" 	<?php
																																							if($v_Radio21 == '')
																																								echo '';
																																							else
																																								if($v_Radio21==1)
																																									echo 'checked="checked"';
																																								else
																																									echo '';
																																						?>/>   
										<label for="daPreadmitere" class="css-label" style="margin-right:100px">Da</label>
										<input type="radio" onClick="Preadmitere()" name="group21" id="nuPreadmitere" class="css-checkbox" value="2" <?php
																																						if($v_Radio21 == '')
																																							echo '';
																																						else
																																							if($v_Radio21==2)
																																								echo 'checked="checked"';
																																							else
																																								echo '';
																																					?>/>
										<label for="nuPreadmitere" class="css-label">Nu</label>
									</span>
									<span style="color:red">
										<?php
											if(isset($_POST['Submit'])) {
												$v_Radio21 = $_POST["group21"];
												$vradio21 = validRadio($v_Radio21);
												if($v_Licenta_AnPreadmitere!=='')
													if($vradio21!==1 && $vradio21!==2)
														echo "C&#226;mp necompletat!";
											}
										?>
									</span>
								</div>
								<span style="color:red">
									<?php 
										if(isset($_POST['Submit'])) {
											$v_Licenta_AnPreadmitere = $_POST["Licenta_AnPreadmitere"];
											$vLicenta_AnPreadmitere = validareAn($v_Licenta_AnPreadmitere);
											//if($v_Licenta_AnPreadmitere=='')
											//	echo "An necompletat!";
											//else
											if($v_Licenta_AnPreadmitere!=='') 
												if($vLicenta_AnPreadmitere!==0)
													echo "An invalid!";
										}
									?>
								</span>

								<div id="Sustine_Test" style="display:none">
									<div  class="form-input jf-required cid_1" style="display:inline-block">
										<br>
										<label class="form-label  form-label-auto" style="color: gray; font-size:medium; width:70%; display:inline-block; padding-top:4%;"> 
											Doriţi să susţineţi din nou testul scris în această sesiune de admitere? <span class="info-box">
																														?
																														<span class="info-box__content">
																															În acest caz va fi luată în considerare nota cea mai mare
																														</span>
																													 </span> 
										</label>

										<span style="width:23%;">
											<input type="radio"  name="group20" id="daTest" class="css-checkbox" value="1" 	<?php
																																if($v_Radio20 == '')
																																	echo '';
																																else
																																	if($v_Radio20==1)
																																		echo 'checked="checked"';
																																	else
																																		echo '';
																															?>/>   
											<label for="daTest" class="css-label" style="margin-right:100px">Da</label>
											<input type="radio" name="group20" id="nuTest" class="css-checkbox" value="2" 	<?php
																																if($v_Radio20 == '')
																																	echo '';
																																else
																																	if($v_Radio20==2)
																																		echo 'checked="checked"';
																																	else
																																		echo '';
																															?>/>
											<label for="nuTest" class="css-label">Nu</label>
										</span>
										<span style="color:red">
											<?php
												if(isset($_POST['Submit'])) {
													if($vradio21==1){
														$v_Radio20 = $_POST["group20"];
														$vradio20 = validRadio($v_Radio20);
														if($vradio20!==1 && $vradio20!==2)
															echo "C&#226;mp necompletat!";
													}
												}
											?>
										</span>
									</div>
								</div>
								<br>
								<label class="form-label  form-label-auto" style="color: gray; font-size:medium; width:70%; display:inline-block; padding-top:4%;"> 
									Informaţii despre echivalarea examenului: 
								</label>
								<p>
									Pot fi înscrişi fără susţinerea testului scris candidaţii, absolvenţi de liceu cu diploma de bacalaureat, care au obţinut performanţe
									recunoscute în concursuri internaţionale şi naţionale, în clasele IX-XII: <br>○ Medalie sau premiu la Olimpiada Internaţională la 
									disciplinele Informatică, Matematică, Fizică, Chimie<br>
									○ Medalie sau premiu la concursurile şcolare internaţionale de informatică sau matematică 
									(altele decât Olimpiadele Internaţionale) recunoscute de M.E.N. <br>○ Medalie sau premiu 
									la Olimpiada Naţională la disciplinele Informatică, Matematică, Fizică, Chimie <br>○ Medalie sau premiu 
									la concursurile de informatică sau matematică cu finanţare M.E.N. Absolvenţii de liceu care au participat la faza
									naţională a Olimpiadei de Informatică, Matematică, Fizică sau Chimie, în clasa a XI-a sau a XII-a, pot cere înlocuirea 
									cu nota 10 a mediei generale de la Bacalaureat, dar cu obligaţia de a susţine testul scris.<br>Candidaţii vor atașa acestei fișe 
									diplomele scanate care dovedesc participările/rezultatele obţinute la aceste competiţii.
								</p>
							</li>
              
							<li class="form-line" data-type="control_cazare" id="id_12">
								<label class="form-label form-label-left form-label-auto" style="color: #3488CB; font-size:larger"> V. Opţiuni de admitere, în ordinea preferinţelor  </label>
								
								
								<!--<label class="form-label  form-label-auto" style="color: gray; font-size:medium; width:100%; display:inline-block; padding-top:1%;"> Glisaţi opţiunile dorite din lista "Opţiuni disponibile" în "Preferinţe" iar apoi ordonaţi-le în ordinea dorită (nu trebuie selectate toate opţiunile):</label>

								<section style="display:inline-block; height:250px; width:47%; float:left;">
									<label class="form-label  form-label-auto" style="color: gray; font-size:medium; width:70%; display:inline-block; padding-top:1%;"> 
										Opţiuni disponibile:
									</label>
									<ul id="sortable1" class="droptrue sortable" style="float:left; width:100%">
										<li class="ui-state-default">Informatică Limba Română - Buget</li>
										<li class="ui-state-default">Informatică Limba Română - Taxă</li>
										<li class="ui-state-default">Informatică Limba Engleză - Buget</li>
										<li class="ui-state-default">Informatică Limba Engleză - Taxă	</li>
									</ul>
								</section>
								<section style="display:inline-block;  height:250px; width:47%; float:right;">
									<label class="form-label  form-label-auto" style="color: gray; font-size:medium; width:70%; display:inline-block; padding-top:1%;"> 
										Preferinţe:
									</label>
									<ul id="sortable2" class="droptrue sortable" style="float:right; width:100%;">
										<ul id="navbar">
											
										</ul>
									</ul>
									<br>
									<br>
									
									<!--<input type="radio" name="group999" id="AlesOptiuni" class="css-checkbox" value="1" />
									<label for="AlesOptiuni" class="css-label">Am ales opțiunile dorite!</label>
								</section>
								
								<center>
									<input type="checkbox" name="AlesOptiuni" class="css-checkbox" value="1" id="AlesOptiuni" />
									<label for="AlesOptiuni" class="css-label2" > Am ales opțiunile in opdinea preferințelor mele! </label> 
									<br>
									<span style="color:red">
										<?php 
										//	if(isset($_POST['Submit'])) {
										//		$v_AlesOptiuni = $_POST["AlesOptiuni"];
										//		if($v_AlesOptiuni=='')
										//			echo "Opțiuni nealese!";
										//	}
										?>
									</span>
								</center>
								<script>
									function myFunction(){
												$('#myform').submit(function() {
													var lis = document.getElementById("sortable2").getElementsByTagName("li");
													var li="<li>";
													var eoli="</li>";
													var li0=lis[0].textContent;
													var li1=lis[1].textContent;
													var li2=lis[2].textContent;
													var li3=lis[3].textContent;
													
									//				if(li0!=='')
									//					document.writeln(li.concat(li0,eoli));
									//				if(li!=='')
									//					document.writeln(li.concat(li1,eoli));
									//				if(li2!=='')
									//					document.writeln(li.concat(li2,eoli));
									//				if(li3!=='')
									//					document.writeln(li.concat(li3,eoli));
												});
												
									};
								</script>
								
								<!--<label class="form-label  form-label-auto" style="color: gray; font-size:medium; width:100%; display:inline-block; padding-top:1%;"> 
									Glisaţi opţiunile dorite din lista "Opţiuni disponibile" în "Preferinţe" iar apoi ordonaţi-le în ordinea dorită 
									(nu trebuie selectate toate opţiunile):
								</label>
								
								<section style="display:inline-block; height:250px; width:47%; float:left;">
									<label class="form-label  form-label-auto" style="color: gray; font-size:medium; width:70%; display:inline-block; padding-top:1%;"> 
										<li>Opţiuni disponibile:</li>
									</label>
									<ul id="sortable1" class="droptrue sortable" style="float:left; width:100% " name="Lista1">
										<!--<script>
											var countL1above = $("ul li").length;
											var Pref1 = $("#Pref1 ul").children().length;
											var Pref2 = $("#Pref2 ul").children().length;
											var Pref3 = $("#Pref3 ul").children().length;
											var Pref4 = $("#Pref4 ul").children().length;
											if(Pref1==0 && Pref2==0 && Pref3==0 && Pref4==0)
												document.write("<li class=\"ui-state-default\" value = \"1\">Informatică Limba Română - Buget</li> <li class=\"ui-state-default\" value = \"2\">Informatică Limba Română - Taxă</li> <li class=\"ui-state-default\" value = \"3\">Informatică Limba Engleză - Buget</li> <li class=\"ui-state-default\" value = \"4\">Informatică Limba Engleză - Taxă</li>");
											else
												document.write($( "ul.sortable1" ).find( allListElements));
										</script>-->
									<!--	<script>
										//	document.write("<li class=\"ui-state-default\" value = \"1\">Informatică Limba Română - Buget</li> <li class=\"ui-state-default\" value = \"2\">Informatică Limba Română - Taxă</li> <li class=\"ui-state-default\" value = \"3\">Informatică Limba Engleză - Buget</li> <li class=\"ui-state-default\" value = \"4\">Informatică Limba Engleză - Taxă</li>");
										</script>
										<li class="ui-state-default" value = "1">Informatică Limba Română - Buget</li>
										<li class="ui-state-default" value = "2">Informatică Limba Română - Taxă</li>
										<li class="ui-state-default" value = "3">Informatică Limba Engleză - Buget</li>
										<li class="ui-state-default" value = "4">Informatică Limba Engleză - Taxă</li>
										<script>
											//if(this.parentNode.parentNode.parentNode.innerText);
											var countL1 = $("ul li").length - countL1above;
										</script>
										
									</ul>
								</section>
								<section style="display:inline-block;  height:250px; width:47%; float:right;">
									<label class="form-label  form-label-auto" style="color: gray; font-size:medium; width:70%; display:inline-block; padding-top:1%;"> 
										<li>Preferinţe:</li>
									 </label>
										<script>
											var countL2above = $("ul li").length;
										</script>
									<ul id="Pref1" class="droptrue sortable" style="float:right; width:100%; height:23%" name="Lista2">
										<!-- Aici trebuie trace li-urile de mai sus -->
									<!--	<script>
											//if($( ".Pref1" ).empty())
											//	document.writeln("Oh well");
											//else
											//	document.write($( "ul.Pref1" ).find( allListElements));
										</script>
									</ul>
									<br><br><br><br>
									<ul id="Pref2" class="droptrue sortable" style="float:right; width:100%; height:23%" name="Lista2">
										<!-- Aici trebuie trace li-urile de mai sus -->
									<!--	<script>
										//	if($( ".Pref2" ).empty())
											//	document.writeln("Oh well");
										//	else
											//	document.write($( "ul.Pref2" ).find( allListElements));
										</script>
									</ul>
									<br><br><br>
									<ul id="Pref3" class="droptrue sortable" style="float:right; width:100%; height:23%" name="Lista2">
										<!-- Aici trebuie trace li-urile de mai sus -->
									<!--	<script>
											//if($( ".Pref3" ).empty())
											//	document.writeln("Oh well");
										//	else
										//		document.write($( "ul.Pref3" ).find( allListElements));
										</script>
									</ul>
									<br><br><br>
									<ul id="Pref4" class="droptrue sortable" style="float:right; width:100%; height:23%" name="Lista2">
										<!-- Aici trebuie trace li-urile de mai sus -->
									<!--	<script>
											//if($( ".Pref4" ).empty())
											//	document.writeln("Oh well");
											//else
											//	document.write($( "ul.Pref4" ).find( allListElements));
										</script>
									</ul>
								</section> 
								
								<script>
									var countL2 = $("ul li").length - countL2above;
								</script>
								
								<span style="color:red">
									<?php
										//$NrPref = "<script>document.writeln(countL2);</script>";
										//echo $NrPref;
									?>
								</span>
										<li class="ui-state-default" value = "1">Informatică Limba Română - Buget</li>
										<li class="ui-state-default" value = "2">Informatică Limba Română - Taxă</li>
										<li class="ui-state-default" value = "3">Informatică Limba Engleză - Buget</li>
										<li class="ui-state-default" value = "4">Informatică Limba Engleză - Taxă</li>
								-->
								<section>
									<h5 class="form-label  form-label-auto" style="color: gray; font-size:medium; width:100%; display:inline-block; padding-top:1%;">
										Ordonaţi opţiunile de mai jos în ordinea preferinţelor dumneavoastră!
									</h5>
									<label>Preferință 1(obligatoriu) &nbsp; &nbsp; &nbsp; &nbsp;</label>
									<select class="clasaPreferinte" style="width:18%" name="Optiune1" data-component="country">
										<option value="Selectati" <?php
																		if($vOptiune1=="Selectați")
																			echo 'selected';
																		else
																			echo '';
																	?>>Selectați</option> 
										<option value="Informatică Limba Română - Buget" <?php
																							if($vOptiune1=="Informatică Limba Română - Buget")
																								echo 'selected';
																							else
																								echo '';
																						?>>Informatică Limba Română - Buget</option> 
										<option value="Informatică Limba Română - Taxă" <?php
																							if($vOptiune1=="Informatică Limba Română - Taxă")
																								echo 'selected';
																							else
																								echo '';
																						?>>Informatică Limba Română - Taxă</option>
										<option value="Informatică Limba Engleză - Buget" <?php
																							if($vOptiune1=="Informatică Limba Engleză - Buget")
																								echo 'selected';
																							else
																								echo '';
																						?>>Informatică Limba Engleză - Buget</option>
										<option value="Informatică Limba Engleză - Taxă" <?php
																							if($vOptiune1=="Informatică Limba Engleză - Taxă")
																								echo 'selected';
																							else
																								echo '';
																						?>>Informatică Limba Engleză - Taxă</option>
									</select>
									<span style="color:red">	
										<?php
											if(isset($_POST['Submit'])) {		
												$vOptiune1=$_POST["Optiune1"];
												if($_POST["Optiune1"] == 'Selectati')		
													echo "Preferință neselectată!";		
											}	
										?>
									</span>
									<br><br>
									<label>Preferință 2(opțional) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</label>
									<select class="clasaPreferinte" style="width:18%" name="Optiune2"  data-component="country">
										<option value="Selectati" <?php
																		if($vOptiune2=="Selectați")
																			echo 'selected';
																		else
																			echo '';
																	?>>-</option> 
										<option value="Informatică Limba Română - Buget" <?php
																							if($vOptiune2=="Informatică Limba Română - Buget")
																								echo 'selected';
																							else
																								echo '';
																						?>>Informatică Limba Română - Buget</option> 
										<option value="Informatică Limba Română - Taxă" <?php
																							if($vOptiune2=="Informatică Limba Română - Taxă")
																								echo 'selected';
																							else
																								echo '';
																						?>>Informatică Limba Română - Taxă</option>
										<option value="Informatică Limba Engleză - Buget" <?php
																							if($vOptiune2=="Informatică Limba Engleză - Buget")
																								echo 'selected';
																							else
																								echo '';
																						?>>Informatică Limba Engleză - Buget</option>
										<option value="Informatică Limba Engleză - Taxă" <?php
																							if($vOptiune2=="Informatică Limba Engleză - Taxă")
																								echo 'selected';
																							else
																								echo '';
																						?>>Informatică Limba Engleză - Taxă</option>
									</select>
									<br><br>
									<label>Preferință 3(opțional) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</label>
									<select class="clasaPreferinte" style="width:18%" name="Optiune3"  data-component="country">
										<option value="Selectati" <?php
																		if($vOptiune3=="Selectați")
																			echo 'selected';
																		else
																			echo '';
																	?>>-</option> 
										<option value="Informatică Limba Română - Buget" <?php
																							if($vOptiune3=="Informatică Limba Română - Buget")
																								echo 'selected';
																							else
																								echo '';
																						?>>Informatică Limba Română - Buget</option> 
										<option value="Informatică Limba Română - Taxă" <?php
																							if($vOptiune3=="Informatică Limba Română - Taxă")
																								echo 'selected';
																							else
																								echo '';
																						?>>Informatică Limba Română - Taxă</option>
										<option value="Informatică Limba Engleză - Buget" <?php
																							if($vOptiune3=="Informatică Limba Engleză - Buget")
																								echo 'selected';
																							else
																								echo '';
																						?>>Informatică Limba Engleză - Buget</option>
										<option value="Informatică Limba Engleză - Taxă" <?php
																							if($vOptiune3=="Informatică Limba Engleză - Taxă")
																								echo 'selected';
																							else
																								echo '';
																						?>>Informatică Limba Engleză - Taxă</option>
									</select>
									<br><br>
									<label>Preferință 4(opțional) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;</label>
									<select class="clasaPreferinte" style="width:18%" name="Optiune4"  data-component="country">
										<option value="Selectati" <?php
																		if($vOptiune4=="Selectați")
																			echo 'selected';
																		else
																			echo '';
																	?>>-</option> 
										<option value="Informatică Limba Română - Buget" <?php
																							if($vOptiune4=="Informatică Limba Română - Buget")
																								echo 'selected';
																							else
																								echo '';
																						?>>Informatică Limba Română - Buget</option> 
										<option value="Informatică Limba Română - Taxă" <?php
																							if($vOptiune4=="Informatică Limba Română - Taxă")
																								echo 'selected';
																							else
																								echo '';
																						?>>Informatică Limba Română - Taxă</option>
										<option value="Informatică Limba Engleză - Buget" <?php
																							if($vOptiune4=="Informatică Limba Engleză - Buget")
																								echo 'selected';
																							else
																								echo '';
																						?>>Informatică Limba Engleză - Buget</option>
										<option value="Informatică Limba Engleză - Taxă" <?php
																							if($vOptiune4=="Informatică Limba Engleză - Taxă")
																								echo 'selected';
																							else
																								echo '';
																						?>>Informatică Limba Engleză - Taxă</option>
									</select>
									<script>  
											$(".clasaPreferinte").on('change', function() {
												HandleDropdowns($(this));
											});

											function HandleDropdowns(element) {
												var $element = element;
												var value = $element.val();
										  
												$.each($(".clasaPreferinte").not($element), function() { //loop all remaining select elements
													var subValue = $(this).val();
													if (subValue === value) { // if value is same reset
														$(this).val('Selectati');
														console.log('resetting ' + $(this).attr('id')); // demo purpose
													}
												});  
											}
										</script>
								</section>
								<span style="color:red">	
									<?php
										$vOptiune1=$_POST["Optiune1"];
										$vOptiune2=$_POST["Optiune2"];
										$vOptiune3=$_POST["Optiune3"];
										$vOptiune4=$_POST["Optiune4"];
									?>
								</span>

								<!--	<span style="color:red">		
										<?php 		
										//	if(isset($_POST['Submit'])) {		
										//		$Preferinte[1] = $_POST["IngineriaSistemelorSoftwareTaxa"];		
										//		$Preferinte[2] = $_POST["SistemeDistribuiteTaxa"];		
										//		$Preferinte[3] = $_POST["SecuritateaInformatieiTaxa"];		
										//		$Preferinte[4] = $_POST["OptimizareaComputationalaTaxa"];		

										//		$vPreferinte = validarePreferinte($Preferinte);		
										//		if($vPreferinte==0)		
										//			echo "C&#226;mpuri invalide!";		
										//	}		
										?>		
									</span>-->
							
								<div  class="form-input jf-required cid_1" style="display:inline-block">
									<script> 
									//	var Pref1 = $("#Pref1 ul").children().length; 
									//	var Pref2 = $("#Pref2 ul").children().length; 
									//	var Pref3 = $("#Pref3 ul").children().length; 
									//	var Pref4 = $("#Pref4 ul").children().length; 
										//if(Pref1==0 && Pref2==0 && Pref3==0 && Pref4==0) 
										//	document.write("<span style=\"color:red\">Preferinte necompletate</span>"); 
									</script> 
									<br>
									<br>
									<!-- <br><br> -->
									<label class="form-label  form-label-auto" style="color: gray; font-size:medium; width:45%; display:inline-block; padding-top:1%;">
										Acceptaţi să fiţi înmatriculat pe locurile de taxă
										disponibile în cazul în care nu aţi fost admis pe locurile finanţate de la buget? 
									</label>
									  
									<span style="width:50%;">
										<input type="radio"  name="group26" id="daTaxa" class="css-checkbox" value="1" 	<?php
																															if($v_Radio26 == '')
																																echo '';
																															else
																																if($v_Radio26==1)
																																	echo 'checked="checked"';
																																else
																																	echo '';
																														?>/>   
										<label for="daTaxa" class="css-label" style="margin-right:100px">Da</label>
										<input type="radio" name="group26" id="nuTaxa" class="css-checkbox"  value="2" 	<?php
																															if($v_Radio26 == '')
																																echo '';
																															else
																																if($v_Radio26==2)
																																	echo 'checked="checked"';
																																else
																																	echo '';
																														?>/>
										<label for="nuTaxa" class="css-label" style="margin-right: 50px;">Nu</label>
										<input type="radio" name="group26" id="numaiTaxa" class="css-checkbox" value="3" 	<?php
																																if($v_Radio26==3)
																																	echo 'checked="checked"';
																																else
																																	echo '';
																															?>/>
										<label for="numaiTaxa" class="css-label" >Numai cu Taxă</label>
									</span>
									<span style="color:red">
										<?php
											if(isset($_POST['Submit'])) {
												$v_Radio26 = $_POST["group26"];
												$vradio26 = validRadio3($v_Radio26);
												if($vradio26!==1 && $vradio26!==2 && $vradio26!==3)
													echo "C&#226;mp necompletat!";
											}
										?>
									</span>
								</div>
							</li>
							
							<!--<li class="form-line" data-type="control_cazare" id="id_12">
							<label class="form-label form-label-left form-label-auto" style="color: #3488CB; font-size:larger"> V. Opţiuni de admitere, în ordinea preferinţelor  </label>
							<label class="form-label  form-label-auto" 
										style="color: gray; font-size:medium; width:70%; display:inline-block; padding-top:1%;"> Numerotaţi în ordinea opţiunilor (1 pentru prima opţiune, 2 pentru a doua)
										</label>
							<div class="col-md-12" style="margin-top:40px; padding:0; margin-bottom:10px"> 
							  <div class="col-md-4" style="padding:0;">
								<div class="col-md-12 mrg-t10" >

								  <input type="number" name="InformaticaLimbaRomana" style="width: 40px; height:30px;" value="<?php //echo $_POST["InformaticaLimbaRomana"];?>"/>
								  <span style="font-size:15px;">Informatică (limba română)</span>
									<span style="color:red">
										<?php
											//if(isset($_POST['Submit'])) {
											//	if($_POST["InformaticaLimbaRomana"]=='')
											//		echo "C&#226;mp necompletat!";
											//}
										?>
									</span>
								</div>
					

							<div class="col-md-12 mrg-t10" > 
							  <br>
							  <input type="number" name="InformaticaLimbaEngleza" style="width: 40px; height:30px;" value="<?php //echo $_POST["InformaticaLimbaEngleza"];?>" />
							  <span style="font-size:15px;">Informatică (limba engleză) <span class="info-box">?<span class="info-box__content">Competenţele de limba engleză se dovedesc fie certificate cu
								certificate Cambridge, Toefl sau IELTS valabile şi valide, fie prin obţinerea cel puţin a callificativului B la proba orala de limba engleză la Bacalaureat</span></span> </span>
								<span style="color:red">
									<?php
										//if(isset($_POST['Submit'])) {
										//	if($_POST["InformaticaLimbaEngleza"]=='')
										//		echo "C&#226;mp necompletat!";
										//}
									?>
								</span>
							</div>
					
							<span style="color:red">
								<?php
									//if(isset($_POST['Submit'])) {
										
									//	$v_Optiune1 = $_POST["InformaticaLimbaRomana"];
									//	$v_Optiune2 = $_POST["InformaticaLimbaEngleza"];
									//	$ok_Optiuni=1;
									//	if($v_Optiune1==1  && $v_Optiune2==1 || $v_Optiune1==2  && $v_Optiune2==2)
									//	{
									//		echo "Opțiunile trebuie sa difere!";
									//		$ok_Optiuni=0;
									//	}
									//	if($v_Optiune1!=='' || $v_Optiune2!=='')
									//	if($v_Optiune1>2 ||  $v_Optiune1<1 || $v_Optiune2>2 ||  $v_Optiune2<1){
									//		echo "Opțiunile trebuie sa fie în intervalul [1,2]";
									//		$ok_Optiuni=0;
									//	}
									//}
								?>
							</span>
                    
                    

							  </div>                  
							</div>

							<div  class="form-input jf-required cid_1" style="display:inline-block">
								<br>
									<label class="form-label  form-label-auto" 
										style="color: gray; font-size:medium; width:45%; display:inline-block; padding-top:1%;">Acceptaţi să fiţi înmatriculat pe locurile de taxă
										disponibile în cazul în care nu aţi fost admis pe locurile finanţate de la buget? 
										 </label>
									  
									<span style="width:50%;">
										<input type="radio"  name="group26" id="daTaxa" class="css-checkbox" value="1" <?php
																															//if($v_Radio26 == '')
																														//		echo '';
																														//	else
																														//		if($v_Radio26==1)
																														//			echo 'checked="checked"';
																														//		else
																														//			echo '';
																														?>/>   
										<label for="daTaxa" class="css-label" style="margin-right:100px">Da</label>
										<input type="radio" name="group26" id="nuTaxa" class="css-checkbox"  value="2" <?php
																														//	if($v_Radio26 == '')
																														//		echo '';
																														//	else
																														//		if($v_Radio26==2)
																														//			echo 'checked="checked"';
																														//		else
																														//			echo '';
																														?>/>
										<label for="nuTaxa" class="css-label" style="margin-right: 50px;">Nu</label>
										<input type="radio" name="group26" id="numaiTaxa" class="css-checkbox" value="3" <?php
																															
																														//	if($v_Radio26==3)
																														//		echo 'checked="checked"';
																														//	else
																														//		echo '';
																														?>/>
										<label for="numaiTaxa" class="css-label" >Numai cu Taxă</label>
									</span>
									<span style="color:red">
											<?php
												//  if(isset($_POST['Submit'])) {
												//	$v_Radio26 = $_POST["group26"];
												//	$vradio26 = validRadio($v_Radio26);
												//	if($vradio26!==1 && $vradio26!==2 && $vradio26!==3)
												//			echo "C&#226;mp necompletat!";
												 // }
											?>
										</span>

							  </div>
							</li> -->
							<li class="form-line" data-type="control_cazare" id="id_13">
								<label class="form-label form-label-left form-label-auto" style="color: #3488CB; font-size:large"> VI. Infomaţii privind documentele de studii depuse la dosar</label>
								<label class="form-label  form-label-auto" style="color: gray; font-size:medium; width:100%; display:inline-block; padding-top:1%;"> Vă rugăm bifaţi documentele pe care le-aţi ataşat la dosarul de admitere:</label>
								<br>
								<ul class="checkbox-grid">
									<br>
									<?php 
										$v_Diploma_BAC=$_POST["Diploma_BAC"];
										$v_Adeverinta=$_POST["Adeverinta"];
										$v_Document_Echivalare_Studii=$_POST["Document_Echivalare_Studii"];
										$v_Diploma_Olimpiada=$_POST["Diploma_Olimpiada"];
									?>
								   <li><input type="radio" name="Diploma_BAC" class="css-checkbox" value="1" id="Diploma_BAC_Original"  	<?php
																																				if($v_Diploma_BAC == '')
																																					echo '';
																																				else
																																					if($v_Diploma_BAC==1)
																																						echo 'checked="checked"';
																																					else
																																						echo '';
																																			?> />
				 
									<label for="Diploma_BAC_Original" class="css-label">Diploma de Bacalaureat în original</label></li>
				 
									<li><input type="radio" name="Diploma_BAC" class="css-checkbox" value="2" id="Diploma_BAC_Copie" <?php
																																		if($v_Diploma_BAC == '')
																																			echo '';
																																		else
																																			if($v_Diploma_BAC==2)
																																				echo 'checked="checked"';
																																			else
																																				echo '';
																																	?> />
				 
									<label for="Diploma_BAC_Copie" class="css-label">Diploma de Bacalaureat copie</label></li>
				 
									<li><input type="radio" name="Adeverinta" class="css-checkbox" value="1" id="Adeverinţă_Original" <?php
																																		if($v_Adeverinta == '')
																																			echo '';
																																		else
																																			if($v_Adeverinta==1)
																																				echo 'checked="checked"';
																																			else
																																				echo '';
																																	?> />
				 
									<label for="Adeverinţă_Original" class="css-label">Adeverinţă în original</label></li>
				 
									<li><input type="radio" name="Adeverinta" class="css-checkbox" value="2" id="Adeverinţă_Copie" <?php
																																	if($v_Adeverinta == '')
																																		echo '';
																																	else
																																		if($v_Adeverinta==2)
																																			echo 'checked="checked"';
																																		else
																																			echo '';
																																?> />
				 
									<label for="Adeverinţă_Copie" class="css-label">Adeverinţă copie</label></li>
				 
									<li><input type="radio" name="Document_Echivalare_Studii" class="css-checkbox" value="1" id="Document_Echivalare_Studii_Original" <?php
																																										if($v_Document_Echivalare_Studii == '')
																																											echo '';
																																										else
																																											if($v_Document_Echivalare_Studii==1)
																																												echo 'checked="checked"';
																																											else
																																												echo '';
																																									?> />
				 
									<label for="Document_Echivalare_Studii_Original" class="css-label">Document echivalare studii în original</label></li>
				 
									<li><input type="radio" name="Document_Echivalare_Studii" class="css-checkbox" value="2" id="Document_Echivalare_Studii_Copie" <?php
																																										if($v_Document_Echivalare_Studii == '')
																																											echo '';
																																										else
																																											if($v_Document_Echivalare_Studii==2)
																																												echo 'checked="checked"';
																																											else
																																												echo '';
																																									?> />
				 
									<label for="Document_Echivalare_Studii_Copie" class="css-label">Document echivalare studii copie</label></li> 
				 
									<li><input type="radio" name="Diploma_Olimpiada" class="css-checkbox" value="1" id="Diploma_Olimpiada_Original"   <?php
																																						if($v_Diploma_Olimpiada == '')
																																							echo '';
																																						else
																																							if($v_Diploma_Olimpiada==1)
																																								echo 'checked="checked"';
																																							else
																																								echo '';
																																					?> />

									<label for="Diploma_Olimpiada_Original" class="css-label">Diploma de Olimpiadă în original</label></li>
				 
									<!--    <li><input type="radio" name="Diploma_Olimpiada" class="css-checkbox" value="2" id="Diploma_Olimpiada_Scanata" <?php
																																						//if($v_Diploma_Olimpiada == '')
																																						//	echo '';
																																						//else
																																						//	if($v_Diploma_Olimpiada==2)
																																						//		echo 'checked="checked"';
																																						//	else
																																						//		echo '';
																																					?> />
				 
									<label for="Diploma_Olimpiada_Scanata" class="css-label">Diploma de Olimpiadă (Scanată) <span class="info-box">?<span class="info-box__content">În acest caz diploma în original va trebui prezentată ulterior comisiei de admitere
				 
									</span></span> </label></li> -->
				 
								</ul>
								<div class="form-input jf-required cid_1" style="display:inline-block">
									<br>
									<label class="form-label  form-label-auto" style="color: gray; font-size:medium; width:45%; display:inline-block; padding-top:1%;">Participaţi la alte concursuri de admitere?</label>
									<span style="width:50%;">
										<input type="radio"  onClick="AlteConcursuri()" name="group27" id="daAltConcurs" class="css-checkbox" value="1" <?php
																																							if($v_Radio27 == '')
																																								echo '';
																																							else
																																								if($v_Radio27==1)
																																									echo 'checked="checked"';
																																								else
																																									echo '';
																																						?>/>   
										<label for="daAltConcurs"  class="css-label" style="margin-right:100px">Da</label>
										<input type="radio" onClick="AlteConcursuri()" name="group27" id="nuAltConcurs" class="css-checkbox"  value="2"/  	<?php
																																								if($v_Radio27 == '')
																																									echo '';
																																								else
																																									if($v_Radio27==2)
																																										echo 'checked="checked"';
																																									else
																																										echo '';
																																							?>>
										<label for="nuAltConcurs" class="css-label" style="margin-right: 50px;">Nu</label>
									</span>
										
									<span style="color:red">
										<?php
											if(isset($_POST['Submit'])) {
												$v_Radio27 = $_POST["group27"];
												$vradio27 = validRadio($v_Radio27);
												if($vradio27!==1 && $vradio27!==2)
													echo "C&#226;mp necompletat!";
											}
										?>
									</span>
								</div>
								<div id="AlteConcursuri" style="display:none">
									<div class="form-input jf-required cid_1">
										<div class="general_name" data-wrapper-react="true">
											<span class="form-sub-label-container" style="vertical-align:top;  height: 40px; width:50%;">
												<label class="form-sub-label sublabel_first" style="min-height:13px;"> Denumirea instituţiei de învăţământ superior </label>
												<input type="text" name="Licenta_AlteConcursuri_Univ1" class="form-textbox first_1" size="10" placeholder="ex: Universitatea Gheorghe Asachi"  value="<?php 
																																																			if($v_Licenta_AlteConcursuri_Univ1 == '') 
																																																				echo '';
																																																			else
																																																				echo $v_Licenta_AlteConcursuri_Univ1;
																																																		?>"  data-component="first" />
												<span style="color:red">		
													<?php		
														if(isset($_POST['Submit'])) {
															if($vradio27==1){
																$v_Licenta_AlteConcursuri_Univ1 = $_POST["Licenta_AlteConcursuri_Univ1"];
																$vLicenta_AlteConcursuri_Univ1 = validNume($v_Licenta_AlteConcursuri_Univ1);		
																if(strlen($v_Licenta_AlteConcursuri_Univ1)==0) {
																		echo "C&#226;mp necompletat!";
																	}
																else
																	if($vLicenta_AlteConcursuri_Univ1!==0){
																		echo "C&#226;mp invalid!";
																	}
																	
															}
														}
													?>		
												</span>
											</span>
											<span class="form-sub-label-container" style="vertical-align:top; height: 40px; width:48%; "> 
												<label class="form-sub-label sublabel_first" style="min-height:13px;"> Facultatea </label> 
												<input type="text" name="Licenta_AlteConcursuri_Facultate1" class="form-textbox first_1" size="10" placeholder="ex: Automatică şi calculatoare" value="<?php 
																																																			if($v_Licenta_AlteConcursuri_Facultate1 == '') 
																																																				echo '';
																																																			else
																																																				echo $v_Licenta_AlteConcursuri_Facultate1;
																																																		?>" data-component="first" />       
												<span style="color:red">		
													<?php		
														if(isset($_POST['Submit'])) {
															if($vradio27==1){
																$v_Licenta_AlteConcursuri_Facultate1 = $_POST["Licenta_AlteConcursuri_Facultate1"];		
																$vLicenta_AlteConcursuri_Facultate1 = validScutire($v_Licenta_AlteConcursuri_Facultate1);		
																if(strlen($v_Licenta_AlteConcursuri_Facultate1)==0) {
																	echo "C&#226;mp necompletat!";
																}
																else	
																	if($vLicenta_AlteConcursuri_Facultate1!==0){
																		echo "C&#226;mp invalid!";
																	}
															}
														}
													?>		
												</span>
											</span>
										</div>
										<br>  
									</div>
									<div class="form-input jf-required cid_1">
										<div class="general_name" data-wrapper-react="true">
											<br>
											<span class="form-sub-label-container" style="vertical-align:top;  height: 40px; width:50%;">
												<input type="text" name="Licenta_AlteConcursuri_Univ2" class="form-textbox first_1" size="10" placeholder="ex: Universitatea Gheorghe Asachi" value="<?php 
																																																		if($v_Licenta_AlteConcursuri_Univ2 == '') 
																																																			echo '';
																																																		else
																																																			echo $v_Licenta_AlteConcursuri_Univ2;
																																																	?>"  data-component="first" />
												<span style="color:red">
													<?php		
														if(isset($_POST['Submit'])) {
															if($vradio27==1){
																$v_Licenta_AlteConcursuri_Univ2 = $_POST["Licenta_AlteConcursuri_Univ2"];	
																$vLicenta_AlteConcursuri_Univ2 = validScutire($v_Licenta_AlteConcursuri_Univ2);		
																if(strlen($v_Licenta_AlteConcursuri_Univ2)!=0 && $vLicenta_AlteConcursuri_Univ2!==0){
																	echo "C&#226;mp invalid!";
																}
																else
																	if(strlen($v_Licenta_AlteConcursuri_Facultate2)!=0 && strlen($v_Licenta_AlteConcursuri_Univ2)==0) {
																		echo "Completați și Universitatea!";
																}
															}
														}
													?>		
												</span>
											</span>
											<span class="form-sub-label-container" style="vertical-align:top; height: 40px; width:48%; "> 
												<input type="text" name="Licenta_AlteConcursuri_Facultate2" class="form-textbox first_1" size="10" placeholder="ex: Automatică şi calculatoare" value="<?php 
																																																			if($v_Licenta_AlteConcursuri_Facultate2 == '') 
																																																				echo '';
																																																			else
																																																				echo $v_Licenta_AlteConcursuri_Facultate2;
																																																		?>" data-component="first" />   
												<span style="color:red">		
													<?php		
														if(isset($_POST['Submit'])) {
															if($vradio27==1){
																$v_Licenta_AlteConcursuri_Facultate2 = $_POST["Licenta_AlteConcursuri_Facultate2"];		
																$vLicenta_AlteConcursuri_Facultate2 = validScutire($v_Licenta_AlteConcursuri_Facultate2);		
																if(strlen($v_Licenta_AlteConcursuri_Facultate2)!=0 && $vLicenta_AlteConcursuri_Facultate2!==0){
																	echo "C&#226;mp invalid!";
																}
																else
																	if(strlen($v_Licenta_AlteConcursuri_Univ2)!=0 && strlen($v_Licenta_AlteConcursuri_Facultate2)==0)
																		echo "Completați și Facultatea!";
															}
														}
													?>		
												</span>
											</span>
										</div>
										<br> 
									</div>
									<div class="form-input jf-required cid_1">
										<div class="general_name" data-wrapper-react="true">
											<span class="form-sub-label-container" style="vertical-align:top;  height: 40px; width:50%;">
												<input type="text" name="Licenta_AlteConcursuri_Univ3" class="form-textbox first_1" size="10" placeholder="ex: Universitatea Gheorghe Asachi" value="<?php 
																																																		if($v_Licenta_AlteConcursuri_Univ3 == '') 
																																																			echo '';
																																																		else
																																																			echo $v_Licenta_AlteConcursuri_Univ3;
																																																	?>" data-component="first" />
												<span style="color:red">		
													<?php		
														if(isset($_POST['Submit'])) {
															if($vradio27==1){
																$v_Licenta_AlteConcursuri_Univ3 = $_POST["Licenta_AlteConcursuri_Univ3"];		
																$vLicenta_AlteConcursuri_Univ3 = validScutire($v_Licenta_AlteConcursuri_Univ3);		
																if(strlen($v_Licenta_AlteConcursuri_Univ3)!=0 && $vLicenta_AlteConcursuri_Univ3!==0){
																	echo "C&#226;mp invalid!";
																}
																else
																	if(strlen($v_Licenta_AlteConcursuri_Facultate3)!=0 && strlen($v_Licenta_AlteConcursuri_Univ3)==0)
																		echo "Completați și Universitatea!";
															}
														}
													?>		
												</span>
											</span>
											<span class="form-sub-label-container" style="vertical-align:top; height: 40px; width:48%; "> 
												<input type="text" name="Licenta_AlteConcursuri_Facultate3" class="form-textbox first_1" size="10" placeholder="ex: Automatică şi calculatoare" value="<?php 
																																																			if($v_Licenta_AlteConcursuri_Facultate3 == '') 
																																																				echo '';
																																																			else
																																																				echo $v_Licenta_AlteConcursuri_Facultate3;
																																																		?>" data-component="first" />   
												<span style="color:red">		
													<?php		
														if(isset($_POST['Submit'])) {
															if($vradio27==1){
																$v_Licenta_AlteConcursuri_Facultate3 = $_POST["Licenta_AlteConcursuri_Facultate3"];		
																$vLicenta_AlteConcursuri_Facultate3 = validScutire($v_Licenta_AlteConcursuri_Facultate3);		
																if(strlen($v_Licenta_AlteConcursuri_Facultate3)!=0 && $vLicenta_AlteConcursuri_Facultate3!==0){
																	echo "C&#226;mp invalid!";
																}
																else
																	if(strlen($v_Licenta_AlteConcursuri_Univ3)!=0 && strlen($v_Licenta_AlteConcursuri_Facultate3)==0)
																		echo "Completați și Facultatea!";
															}
														}
													?>		
												</span>
											</span>                           
										</div>
										<br>  
									</div>
								</div>
							</li>
					
							
							<li class="form-line form-line-column form-col-1" data-type="control_phone" style="width:50%; margin-right:50px;">
								<label class="form-label form-label-left form-label-auto"    style="color: #3488CB; font-size:larger">VII. Condiţii de încheiere a contractului </label>
								<div class="informatii-admitere">
									<label class="form-label  form-label-auto" style="color: gray; font-size:medium; width:45%; display:inline-block; padding-top:1%;"> Taxe: </label>
									<ul>
										<li>Taxă de înscriere: 300 RON</li>
										<li>Taxă de școlarizare: 3500 RON</li>
									</ul>
									<label class="form-label  form-label-auto" style="color: gray; font-size:medium; width:45%; display:inline-block; padding-top:1%;"> Acte necesare: </label>
									<ul class="acte_necesare">
										<li>fişa de înscriere</li>

										<li>trei fotografii tip buletin de identitate</li>

										<li>diploma de bacalaureat sau echivalentă cu aceasta, recunoscută de M.E.N.</li>

										<li>candidaţii care au promovat examenul de bacalaureat în sesiunea iunie-iulie 2016 pot prezenta la înscriere, în locul diplomei de bacalaureat, <br>
											adeverinţa eliberată de liceu, în care se menţionează atât media generală, cât şi notele obţinute la probele susţinute şi notele la disciplinele <br>
											care se iau în calcul la stabilirea mediei</li>

										<li>dacă un candidat nu depune la o specializare diploma în original, va depune şi o adeverinţă de la facultatea unde are actele în original</li>

										<li>certificat de naştere, în copie legalizată</li>

										<li>certificatul de căsătorie sau documentul care atestă schimbarea numelui, în copie legalizată (dacă este cazul)</li>

										<li>copie după cartea de identitate, care atestă domiciliul în România</li>

										<li>adeverinţă medicală tip
										chitanţă care dovedeşte plata taxei de înscriere sau actele necesare pentru scutirea de plata taxei</li>

										<li>dosar plic</li>
									</ul>

									<p> Candidaţii cetăţeni români cu domiciliul în România, dar cu studii efectuate în străinătate (inclusiv Republica Moldova) vor prezenta la înscriere <br> diploma  de bacalaureat 
										echivalată de către Ministerul Educaţiei Naţionale
										(CNRED).
									</p>

									<label class="form-label  form-label-auto" style="color: gray; font-size:medium; width:45%; display:inline-block; padding-top:1%;"> Precizare: </label>

									<p>Candidaţii care au absolvit liceul inainte de 2016 vor depune la dosar, după caz:</p>
									
									<ul>
										<li>declaraţie pe propria răspundere că nu au urmat cursurile nici unei facultăţi </li>

										<li>adeverinţă de la facultatea urmată, care să ateste numărul de semestre finanţate de la buget de care au beneficiat </li>

										<li>Întrucât candidaţii au dreptul de a se prezenta concomitent la două sau mai multe domenii, în vederea admiterii în învăţământul superior, <br>
											dosarul cu actele originale se depune la prima opţiune. Înscrierea pentru celelalte domenii se face pe baza documentelor mai sus menţionate, <br> 
											prezentate în copie (pentru domeniile din Universitatea „Alexandru Ioan Cuza” Iaşi) sau în copie legalizată (pentru domeniile altor instituţii <br> 
											în afara Universităţii „Alexandru Ioan Cuza” Iaşi), la care se adaugă o adeverinţă de înscriere de la facultatea unde s-a depus dosarul cu actele <br>
											originale. Indiferent dacă Facultatea de Informatică reprezintă sau nu prima opţiune, testul scris este <br>
											obligatoriu pentru toţi candidaţii.
										</li>
										
									</ul>

								</div>
							</li>


							<li class="form-line" >
								<label class="form-label form-label-left form-label-auto" style="color: #3488CB; font-size:medium"> VIII. Chestionar privind alegerea dumneavoastră</label>
								<label class="form-label  form-label-auto" style="color: gray; font-size:medium; width:100%; display:inline-block; padding-top:1%;">A. De unde aţi aflat despre admiterea la Univeritatea 
									'Alexandru Ioan Cuza' din Iaşi (UAIC)? (puteţi evidenţia mai multe surse)
								</label>
								<br>
								<ul class="checkbox-grid">
									<br>
									<?php 
										$Site_Admitere=$_POST["Site_Admitere"];
										$Site_Facultate=$_POST["Site_Facultate"];
										$Brosura_Admitere=$_POST["Brosura_Admitere"];
										$FB_Univ=$_POST["FB_Univ"];
										$Prieteni_Rude=$_POST["Prieteni_Rude"];
										$Porti_Deschise_UAIC=$_POST["Porti_Deschise_UAIC"];
										$Prezentare_Liceu=$_POST["Prezentare_Liceu"];
										$Profesori_Liceu=$_POST["Profesori_Liceu"];
										$Presa=$_POST["Presa"];
									?>
									<li><input type="checkbox" name="Site_Admitere" class="css-checkbox" value="1" id="Site_Admitere" <?php
																																if($Site_Admitere == '')
																																	echo '';
																																else
																																	if($Site_Admitere!==0)
																																		echo 'checked="checked"';
																																	else
																																		echo '';
																															?>/>
									<label for="Site_Admitere" class="css-label2">Site-ul dedicat admiterii (admitere.uaic.ro) </label></li>
									
									<li><input type="checkbox" name="Site_Facultate" class="css-checkbox" value="1" id="Site_Facultate" <?php
																														if($Site_Facultate == '')
																															echo '';
																														else
																															if($Site_Facultate!==0)
																																echo 'checked="checked"';
																															else
																																echo '';
																													?>/>
									<label for="Site_Facultate" class="css-label2">Site-ul Faculăţii</label></li>
									
									<li><input type="checkbox" name="Brosura_Admitere" class="css-checkbox" value="1" id="Brosura_Admitere" <?php
																														if($Brosura_Admitere == '')
																															echo '';
																														else
																															if($Brosura_Admitere!==0)
																																echo 'checked="checked"';
																															else
																																echo '';
																													?>/>
									<label for="Brosura_Admitere" class="css-label2">Broşură sau pliant despre admitere</label></li>
									
									<li><input type="checkbox" name="FB_Univ" class="css-checkbox" value="1" id="FB_Univ" <?php
																														if($FB_Univ == '')
																															echo '';
																														else
																															if($FB_Univ!==0)
																																echo 'checked="checked"';
																															else
																																echo '';
																													?>/>
									<label for="FB_Univ" class="css-label2">Pagina de Facebook a Universităţii</label></li>
									
									<li><input type="checkbox" name="Prieteni_Rude" class="css-checkbox" value="1" id="Prieteni_Rude" <?php
																														if($Prieteni_Rude == '')
																															echo '';
																														else
																															if($Prieteni_Rude!==0)
																																echo 'checked="checked"';
																															else
																																echo '';
																													?>/>
									<label for="Prieteni_Rude" class="css-label2">Prieteni, Cunoştinţe, Rude</label></li>
									
									<li><input type="checkbox" name="Porti_Deschise_UAIC" class="css-checkbox" value="1" id="Porti_Deschise_UAIC" <?php
																														if($Porti_Deschise_UAIC == '')
																															echo '';
																														else
																															if($Porti_Deschise_UAIC!==0)
																																echo 'checked="checked"';
																															else
																																echo '';
																													?>/>
									<label for="Porti_Deschise_UAIC" class="css-label2">Săptămâna porţilor deschise UAIC</label></li> 
									
									<li><input type="checkbox" name="Prezentare_Liceu" class="css-checkbox" value="1" id="Prezentare_Liceu" <?php
																														if($Prezentare_Liceu == '')
																															echo '';
																														else
																															if($Prezentare_Liceu!==0)
																																echo 'checked="checked"';
																															else
																																echo '';
																													?>/>
									<label for="Prezentare_Liceu" class="css-label2">La o prezentare în liceu</label></li>
									
									<li><input type="checkbox" name="Profesori_Liceu" class="css-checkbox" value="1" id="Profesori_Liceu" <?php
																														if($Profesori_Liceu == '')
																															echo '';
																														else
																															if($Profesori_Liceu!==0)
																																echo 'checked="checked"';
																															else
																																echo '';
																													?>/>
									<label for="Profesori_Liceu" class="css-label2">Profesorii de liceu</label></li>
									
									<li><input type="checkbox" name="Presa" class="css-checkbox" value="1" id="Presa" <?php
																														if($Presa == '')
																															echo '';
																														else
																															if($Presa!==0)
																																echo 'checked="checked"';
																															else
																																echo '';
																													?>/>
									<label for="Presa" class="css-label2">Presă</label></li>
									<li>
									   <label style="
													  height:25px; 
													  display:inline-block;
													  line-height:25px;
													  background-repeat:no-repeat;
													  background-position: 0 0;
													  font-size:15px;
													  color: gray;
													  vertical-align:middle;
													  cursor:pointer;">Alte surse</label>
				 
										<input type="text" id="AlteSurse" name="Alte_Surse" placeholder="vă rugăm specificaţi" style="height:40px; width:40%; margin-left:20px;" value="<?php 
																																															if($v_Alte_Surse == '') 
																																																echo '';
																																															else
																																																echo $v_Alte_Surse;
																																														?>"/>
										<br>
										<span style="color:red">		
											<?php		
												if(isset($_POST['Submit'])) {
													$v_Alte_Surse = $_POST["Alte_Surse"];
													$vAlte_Surse = validAlteSurse($v_Alte_Surse);
													if($vAlte_Surse==1)
														echo "Caractere invalide!";
													else
														if($vAlte_Surse==2)
															echo "Între 6 și 50 caractere!";
													
												}
											?>		
										</span>
									</li>
								</ul>
							</li>

							<label class="form-label  form-label-auto" style="color: gray; font-size:medium; width:100%; display:inline-block; padding-top:3%;">B. Cât de importanţi au fost următorii factori în alegerea facultăţii,
								 apreciaţi cât de mult a contat fiecare în opţiunea dv. privind alegerea facultăţii? (0-deloc, ... 5-foarte mult)
							</label>

							<div  class="form-input jf-required cid_1" style="display:inline-block;">
								<br>
								<label class="form-label  form-label-auto" style="color: gray; font-size:medium; width:30%; display:inline-block; padding-top:1%;">Prestigiul Universităţii/Facultăţii</label>

								<span style="width:70%;">
									<input type="radio" name="group28" id="1_0" class="css-checkbox" value="0" <?php
																													if($v_Radio28 == '')
																														echo '';
																													else
																														if($v_Radio28!==0)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>   
									<label for="1_0" class="css-label" style="margin-right:50px">0</label>
									<input type="radio" name="group28" id="1_1" class="css-checkbox" value="1" <?php
																													if($v_Radio28 == '')
																														echo '';
																													else
																														if($v_Radio28==1)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>   
									<label for="1_1" class="css-label" style="margin-right:50px">1</label>
									<input type="radio"  name="group28" id="1_2" class="css-checkbox" value="2" <?php
																													if($v_Radio28 == '')
																														echo '';
																													else
																														if($v_Radio28==2)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>
									<label for="1_2" class="css-label" style="margin-right:50px">2</label>
									<input type="radio" name="group28" id="1_3" class="css-checkbox" value="3" <?php
																													if($v_Radio28 == '')
																														echo '';
																													else
																														if($v_Radio28==3)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>   
									<label for="1_3" class="css-label" style="margin-right:50px">3</label>
									<input type="radio"  name="group28" id="1_4" class="css-checkbox" value="4" <?php
																													if($v_Radio28 == '')
																														echo '';
																													else
																														if($v_Radio28==4)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>
									<label for="1_4" class="css-label" style="margin-right:50px">4</label>
									<input type="radio"  name="group28" id="1_5" class="css-checkbox" value="5" <?php
																													if($v_Radio28 == '')
																														echo '';
																													else
																														if($v_Radio28==5)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>
									<label for="1_5" class="css-label" style="margin-right:50px">5</label>
								</span>

							</div>
							<div  class="form-input jf-required cid_1" style="display:inline-block">
								<br>
								<label class="form-label  form-label-auto" style="color: gray; font-size:medium; width:30%; display:inline-block; padding-top:1%;">Calitatea Educaţiei la UAIC</label>

								<span style="width:70%">
									<input type="radio" name="group29" id="2_0" class="css-checkbox" value="0" <?php
																													if($v_Radio29 == '')
																														echo '';
																													else
																														if($v_Radio29!==0)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>   
									<label for="2_0" class="css-label" style="margin-right:50px">0</label>
									<input type="radio" name="group29" id="2_1" class="css-checkbox" value="1" <?php
																													if($v_Radio29 == '')
																														echo '';
																													else
																														if($v_Radio29==1)
																															echo 'checked="checked"';
																														else
																															echo '';
																														?>/>   
									<label for="2_1" class="css-label" style="margin-right:50px">1</label>
									<input type="radio"  name="group29" id="2_2" class="css-checkbox" value="2" <?php
																													if($v_Radio29 == '')
																														echo '';
																													else
																														if($v_Radio29==2)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>
									<label for="2_2" class="css-label" style="margin-right:50px">2</label>
									<input type="radio" name="group29" id="2_3" class="css-checkbox" value="3" <?php
																													if($v_Radio29 == '')
																														echo '';
																													else
																														if($v_Radio29==3)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>   
									<label for="2_3" class="css-label" style="margin-right:50px">3</label>
									<input type="radio"  name="group29" id="2_4" class="css-checkbox" value="4" <?php
																													if($v_Radio29 == '')
																														echo '';
																													else
																														if($v_Radio29==4)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>
									<label for="2_4" class="css-label" style="margin-right:50px">4</label>
									<input type="radio"  name="group29" id="2_5" class="css-checkbox" value="5"<?php
																													if($v_Radio29 == '')
																														echo '';
																													else
																														if($v_Radio29==5)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>
									 <label for="2_5" class="css-label" style="margin-right:50px">5</label>
								</span>
							</div>
							<div  class="form-input jf-required cid_1" style="display:inline-block">
								<br>
								<label class="form-label  form-label-auto" style="color: gray; font-size:medium; width:30%; display:inline-block; padding-top:1%;">Sfatul persoanelor apropiate</label>
									  
								<span style="width:70%">
									<input type="radio" name="group30" id="3_0" class="css-checkbox" value="0" <?php
																													if($v_Radio30 == '')
																														echo '';
																													else
																														if($v_Radio30!==0)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>   
									<label for="3_0" class="css-label" style="margin-right:50px">0</label>
									<input type="radio" name="group30" id="3_1" class="css-checkbox" value="1" <?php
																													if($v_Radio30 == '')
																														echo '';
																													else
																														if($v_Radio30==1)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>   
									<label for="3_1" class="css-label" style="margin-right:50px">1</label>
									<input type="radio"  name="group30" id="3_2" class="css-checkbox" value="2" <?php
																													if($v_Radio30 == '')
																														echo '';
																													else
																														if($v_Radio30==2)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>
									<label for="3_2" class="css-label" style="margin-right:50px">2</label>
									<input type="radio" name="group30" id="3_3" class="css-checkbox" value="3" <?php
																													if($v_Radio30 == '')
																														echo '';
																													else
																														if($v_Radio30==3)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>   
									<label for="3_3" class="css-label" style="margin-right:50px">3</label>
									<input type="radio"  name="group30" id="3_4" class="css-checkbox" value="4" <?php
																													if($v_Radio30 == '')
																														echo '';
																													else
																														if($v_Radio30==4)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>
									<label for="3_4" class="css-label" style="margin-right:50px">4</label>
									<input type="radio"  name="group30" id="3_5" class="css-checkbox" value="5" <?php
																													if($v_Radio30 == '')
																														echo '';
																													else
																														if($v_Radio30==5)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>
									<label for="3_5" class="css-label" style="margin-right:50px">5</label>
								</span>
							</div>
							<div class="form-input jf-required cid_1" style="display:inline-block">
								<br>
								<label class="form-label  form-label-auto" style="color: gray; font-size:medium; width:30%; display:inline-block; padding-top:1%;">Statutul profesiei pt care optaţi</label>

								<span style="width:70%">
									<input type="radio" name="group31" id="4_0" class="css-checkbox" value="0" <?php
																													if($v_Radio31 == '')
																														echo '';
																													else
																														if($v_Radio31!==0)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>   
									<label for="4_0" class="css-label" style="margin-right:50px">0</label>
									<input type="radio" name="group31" id="4_1" class="css-checkbox" value="1" <?php
																													if($v_Radio31 == '')
																														echo '';
																													else
																														if($v_Radio31==1)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>   
									<label for="4_1" class="css-label" style="margin-right:50px">1</label>
									<input type="radio"  name="group31" id="4_2" class="css-checkbox" value="2" <?php
																													if($v_Radio31 == '')
																														echo '';
																													else
																														if($v_Radio31==2)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>
									<label for="4_2" class="css-label" style="margin-right:50px">2</label>
									<input type="radio" name="group31" id="4_3" class="css-checkbox" value="3" <?php
																													if($v_Radio31 == '')
																														echo '';
																													else
																														if($v_Radio31==3)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>   
									<label for="4_3" class="css-label" style="margin-right:50px">3</label>
									<input type="radio"  name="group31" id="4_4" class="css-checkbox" value="4" <?php
																													if($v_Radio31 == '')
																														echo '';
																													else
																														if($v_Radio31==4)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>
									<label for="4_4" class="css-label" style="margin-right:50px">4</label>
									<input type="radio"  name="group31" id="4_5" class="css-checkbox" value="5" <?php
																													if($v_Radio31 == '')
																														echo '';
																													else
																														if($v_Radio31==5)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>
									<label for="4_5" class="css-label" style="margin-right:50px">5</label>
								</span>

							</div>
							<div  class="form-input jf-required cid_1" style="display:inline-block">
								<br>
								<label class="form-label  form-label-auto" style="color: gray; font-size:medium; width:30%; display:inline-block; padding-top:1%;">Colegii</label>

								<span style="width:70%">
									<input type="radio" name="group32" id="5_0" class="css-checkbox" value="0" <?php
																													if($v_Radio32 == '')
																														echo '';
																													else
																														if($v_Radio32!==0)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>   
									<label for="5_0" class="css-label" style="margin-right:50px">0</label>
									<input type="radio" name="group32" id="5_1" class="css-checkbox" value="1" <?php
																													if($v_Radio32 == '')
																														echo '';
																													else
																														if($v_Radio32==1)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>   
									<label for="5_1" class="css-label" style="margin-right:50px">1</label>
									<input type="radio"  name="group32" id="5_2" class="css-checkbox" value="2" <?php
																													if($v_Radio32 == '')
																														echo '';
																													else
																														if($v_Radio32==2)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>
									<label for="5_2" class="css-label" style="margin-right:50px">2</label>
									<input type="radio" name="group32" id="5_3" class="css-checkbox" value="3" <?php
																													if($v_Radio32 == '')
																														echo '';
																													else
																														if($v_Radio32==3)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>   
									<label for="5_3" class="css-label" style="margin-right:50px">3</label>
									<input type="radio"  name="group32" id="5_4" class="css-checkbox" value="4" <?php
																													if($v_Radio32 == '')
																														echo '';
																													else
																														if($v_Radio32==4)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>
									<label for="5_4" class="css-label" style="margin-right:50px">4</label>
									<input type="radio"  name="group32" id="5_5" class="css-checkbox" value="5" <?php
																													if($v_Radio32 == '')
																														echo '';
																													else
																														if($v_Radio32==5)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>
									<label for="5_5" class="css-label" style="margin-right:50px">5</label>
								</span>

							</div>
							<div class="form-input jf-required cid_1" style="display:inline-block">
								<br>
								<label class="form-label  form-label-auto" style="color: gray; font-size:medium; width:30%; display:inline-block; padding-top:1%;">Materiile care se studiază</label>
									  
								<span style="width:70%">
									<input type="radio" name="group33" id="6_0" class="css-checkbox" value="0" <?php
																													if($v_Radio33 == '')
																														echo '';
																													else
																														if($v_Radio33!==0)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>   
									<label for="6_0" class="css-label" style="margin-right:50px">0</label>
									<input type="radio" name="group33" id="6_1" class="css-checkbox" value="1" <?php
																													if($v_Radio33 == '')
																														echo '';
																													else
																														if($v_Radio33==1)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>   
									<label for="6_1" class="css-label" style="margin-right:50px">1</label>
									<input type="radio"  name="group33" id="6_2" class="css-checkbox" value="2" <?php
																													if($v_Radio33 == '')
																														echo '';
																													else
																														if($v_Radio33==2)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>
									<label for="6_2" class="css-label" style="margin-right:50px">2</label>
									<input type="radio" name="group33" id="6_3" class="css-checkbox" value="3" <?php
																													if($v_Radio33 == '')
																														echo '';
																													else
																														if($v_Radio33==3)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>   
									<label for="6_3" class="css-label" style="margin-right:50px">3</label>
									<input type="radio"  name="group33" id="6_4" class="css-checkbox" value="4" <?php
																													if($v_Radio33 == '')
																														echo '';
																													else
																														if($v_Radio33==4)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>
									<label for="6_4" class="css-label" style="margin-right:50px">4</label>
									<input type="radio"  name="group33" id="6_5" class="css-checkbox" value="5" <?php
																													if($v_Radio33 == '')
																														echo '';
																													else
																														if($v_Radio33==5)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>
									<label for="6_5" class="css-label" style="margin-right:50px">5</label>
								</span>
							</div>
							<div  class="form-input jf-required cid_1" style="display:inline-block">
								<br>
								<label class="form-label  form-label-auto" style="color: gray; font-size:medium; width:30%; display:inline-block; padding-top:1%;">Informaţiile furnizate de Universitate</label>
								  
								<span style="width:70%">
									<input type="radio" name="group34" id="7_0" class="css-checkbox" value="0" <?php
																													if($v_Radio34 == '')
																														echo '';
																													else
																														if($v_Radio34!==0)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>   
									<label for="7_0" class="css-label" style="margin-right:50px">0</label>
									<input type="radio" name="group34" id="7_1" class="css-checkbox" value="1"<?php
																													if($v_Radio34 == '')
																														echo '';
																													else
																														if($v_Radio34==1)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?> />   
									<label for="7_1" class="css-label" style="margin-right:50px">1</label>
									<input type="radio"  name="group34" id="7_2" class="css-checkbox" value="2" <?php
																													if($v_Radio34 == '')
																														echo '';
																													else
																														if($v_Radio34==2)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>
									<label for="7_2" class="css-label" style="margin-right:50px">2</label>
									<input type="radio" name="group34" id="7_3" class="css-checkbox" value="3" <?php
																													if($v_Radio34 == '')
																														echo '';
																													else
																														if($v_Radio34==3)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>   
									<label for="7_3" class="css-label" style="margin-right:50px">3</label>
									<input type="radio"  name="group34" id="7_4" class="css-checkbox" value="4" <?php
																													if($v_Radio34 == '')
																														echo '';
																													else
																														if($v_Radio34==4)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>
									<label for="7_4" class="css-label" style="margin-right:50px">4</label>
									<input type="radio"  name="group34" id="7_5" class="css-checkbox" value="5" <?php
																													if($v_Radio34 == '')
																														echo '';
																													else
																														if($v_Radio34==5)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>
									<label for="7_5" class="css-label" style="margin-right:50px">5</label>
								</span>
							</div>
							<div  class="form-input jf-required cid_1" style="display:inline-block">
								<br>
								<label class="form-label  form-label-auto" style="color: gray; font-size:medium; width:30%; display:inline-block; padding-top:1%;">Apropierea de domiciliu</label>

								<span style="width:70%">
									<input type="radio" name="group35" id="8_0" class="css-checkbox" value="0" <?php
																													if($v_Radio35 == '')
																														echo '';
																													else
																														if($v_Radio35!==0)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>   
									<label for="8_0" class="css-label" style="margin-right:50px">0</label>
									<input type="radio" name="group35" id="8_1" class="css-checkbox" value="1" <?php
																													if($v_Radio35 == '')
																														echo '';
																													else
																														if($v_Radio35==1)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>   
									<label for="8_1" class="css-label" style="margin-right:50px">1</label>
									<input type="radio"  name="group35" id="8_2" class="css-checkbox" value="2" <?php
																													if($v_Radio35 == '')
																														echo '';
																													else
																														if($v_Radio35==2)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>
									<label for="8_2" class="css-label" style="margin-right:50px">2</label>
									<input type="radio" name="group35" id="8_3" class="css-checkbox" value="3" <?php
																													if($v_Radio35 == '')
																														echo '';
																													else
																														if($v_Radio35==3)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>   
									<label for="8_3" class="css-label" style="margin-right:50px">3</label>
									<input type="radio"  name="group35" id="8_4" class="css-checkbox" value="4" <?php
																													if($v_Radio35 == '')
																														echo '';
																													else
																														if($v_Radio35==4)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>
									<label for="8_4" class="css-label" style="margin-right:50px">4</label>
									<input type="radio"  name="group35" id="8_5" class="css-checkbox" value="5" <?php
																													if($v_Radio35 == '')
																														echo '';
																													else
																														if($v_Radio35==5)
																															echo 'checked="checked"';
																														else
																															echo '';
																												?>/>
									<label for="8_5" class="css-label" style="margin-right:50px">5</label>
								</span>

							</div>
               
							<!--</li>
							</li>-->
				
							<span style="color:red">
								<?php
									if(isset($_POST['Submit'])) {
										if($v_Radio28=='' ||
										   $v_Radio29=='' || 
										   $v_Radio30=='' ||
										   $v_Radio31=='' ||
										   $v_Radio32=='' || 
										   $v_Radio33=='' ||
										   $v_Radio34=='' ||
										   $v_Radio35=='')
												echo "C&#226;mp(uri) necompletat(e)!";
									}
								?>
							</span>

							<li class="form-line" data-type="control_cazare" id="id_13">
								<label class="form-label form-label-left form-label-auto" style="color: #3488CB; font-size:large"> IX. Declar pe propria răspundere, cunoscând consecinţele administrative şi juridice ale declaraţiilor inexacte/ false, că datele furnizate în această fişă sunt conforme cu realitatea şi că am luat cunoştinţă prevederile metodologiei de admitere.
								<br><br>X. Datele declarate de Dumneavoastră sunt prelucrate de Universitatea „Alexandru Ioan Cuza” din Iaşi, în conformitate cu prevederile Legii 677/2001, privind protecţia persoanelor cu privire la prelucrarea datelor cu caracter personal şi libera circulaţie a acestor date, modificată şi completată. </label>                
								<br>                
							</li>
          
              
							<li class="form-line" >
								<div data-wrapper-react="true">
									<!--<span class="form-sub-label-container" style="vertical-align:top;">
										<label class="form-label form-label-left form-label-auto" id="label_9" for="input_9" style="color: #3488CB; font-size:large">XI. Uploadare diplome, certificate (format pdf)</label>
										<object data="YourFile.pdf" type="application/x-pdf" title="SamplePdf" width="500" height="320" style="font-size:30px" >
											<img src="imagini/upload.png" style="height:50px; width:50px; display:inline-block" alt="upload" />
											<input type="file" name="fileToUpload" id="fileToUpload" style="display:inline-block;">
												<?php
                                                    if(isset($_POST["fileToUpload"])) {
                                                        
                                                    }
                                            
                                                    if(isset($_POST['Submit'])) {
                                                        $v_Numele_De_Familie=$_POST["Licenta_Numele_De_Familie_La_nastere"];
                                                         $v_Licenta_Prenumele = $_POST["Licenta_Prenumele"];
                                                    }
                                            
                                                    $target_dir = "uploads/";
                                                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                                                    
                                                    $uploadOk = 1;
                                                    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                                            

                                                    if ($_FILES["fileToUpload"]["size"] > 5000000) {
                                                        echo '';
                                                        $uploadOk = 0;
                                                    }
                                                
                                                    if($imageFileType != "pdf") {
                                                        echo '';
                                                        $uploadOk = 0;
                                                    }

                                                    if ($uploadOk == 0) {
                                                         echo '';
                                                     } else {
                                                         $new_name = $v_Numele_De_Familie . "_" . $v_Licenta_Prenumele .  "." . $imageFileType;
                                                         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$new_name)) {
                                                             echo '';
                                                         } else {
                                                             echo '';
                                                         }
                                                     }

                                            
												?>
										</object>
									</span> -->
								</div>
							</li>
			       
							<li class="form-line" data-type="control_button" id="id_2" style="text-align:center">
								<div id="cid_2" class="form-input-wide" style="text-align:center; padding-top:40px;">
									<div style="text-align:center" class="form-buttons-wrapper">
										<button id="Submit" name="Submit" Value="Register" type="Submit" style="background-color:#3488CB;color:white;height:40px;width:300px; border-radius:25px;" data-component="button" onclick="myFunction();">
											Trimitere formular
										</button>
									</div>
								</div>
							</li>
		   
						</ul>
					</div>   
				</div>
                    
			<!--</div> -->
			</form>

		</div>

		<footer class="footer-distributed">

			<div class="footer-left">
				<h3 class="headernou2">Admitere <span> FII</span></h3>
				<p class="footer-links">
					<a href="DespreFII.html">Despre Fii</a>
					·
					<a href="paginaAdmitere.php">Admitere</a>
					·
					<a href="IntrebariFrecvente.html">&#206;ntrebari frecvente</a>
					·
					<a href="contact.html">Contact</a>	
				</p>
			</div>

			<div class="footer-center">
				<h3 class="headernou2">Contact</h3>
				<div>
					<i class="fa fa-map-marker" id="bloc1"></i>
					<div id="bloc2"><p>&nbsp&nbspStrada General Henri Mathias Barthelot 16</p>
					<p>Iasi, Rom&#226;nia</p></div>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>&nbsp&nbsp0232 201 102</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p class="footer-links"><a href="secretariat AT info.uaic.ro">&nbsp&nbspsecretariat AT info.uaic.ro</a></p>
				</div>

			</div>

			<div class="footer-right">
				<h3 class="headernou">Linkuri</h3>
			
                
                
                <div class="footer-links">
					 <img class="footer_img grayscale" src="imagini/fii.png" alt="fii "  id="bloc1"/>
					 <a href="https://www.info.uaic.ro/bin/Main/"><p id="bloc2" class="footer-links"> &nbsp&nbspFacultatea de informatic&#259; Iasi<p></a>
				</div>
				<div class="footer-links">
					 <img class="footer_img grayscale" src="imagini/logo.png" alt="uaic" id="bloc1" />
					 <a href="http://www.uaic.ro/"><p id="bloc2" > &nbsp&nbspUAIC<p></a>
				</div>
				
				<div class="footer-links">
				<img class="footer_img grayscale" src="imagini/facebook-icon.png" alt="fb" id="bloc1" >
				<a href="https://www.facebook.com/FacultateaDeInformaticaUAICIasi/?fref=ts"><p id="bloc2"> &nbsp&nbspFacebook-ul faculta&#355;ii de informatic&#259;<p></a>
				</div>
				
			</div>
			
			<div class="footer-4">
				<img class="footer_img2 grayscale" src="imagini/fii.png" alt="fii "  id="bloc1"/>
			</div>

			
			<hr class="hr_footer">
				<p class="hr_text">&copy; 2017 Grupa B3 Facultatea de Informatic&#259; Iași</p>
			</hr>
		</footer>
	</body>
</html>
<?php

  date_default_timezone_set('Europe/Bucharest');
  if(isset($_POST['Submit'])){
    $username = 'ADMITERE1';
    $password = 'ADMITERE1';
    $connection_string = 'localhost/xe';

    $connection = oci_connect($username, $password, $connection_string);

    if(!$connection)
      echo "Connection failed. Please try again";
    else {
        
        $v_Chitanta = $_POST["Licenta_Chitanta_nr"];		
		$vChitanta = validChitanta($v_Chitanta);
        
        $v_Suma_Taxa = $_POST["Licenta_Suma_Taxa"];		
        $vsuma = validSuma($v_Suma_Taxa);
        
        $v_Radio1 = $_POST["group1"];		
		$vradio1 = validRadio($v_Radio1);
        
        //v_Radio1 trb sa fie 1 sau 2
		
		$v_verificare_radio_1 = 0;
		
		if($vradio1 == 1) 
		{
			$v_Motiv_Scutire = $_POST["Licenta_Motiv_Scutire_taxa"];
			$vscutire = validScutire($v_Motiv_Scutire);
			
			if($vscutire == 0) $v_verificare_radio_1 = 1;
		}	
        
        $v_Medie_BAC = $_POST["Licenta_Medie_BAC"];
		$vmediebac = validareMedieBac($v_Medie_BAC);
       
        $v_Nota_MI = $_POST["Licenta_Nota_MI"];  // V
		$vnotami = validareMedieBac($v_Nota_MI);
        
        $v_Obiect_Test_Ales = $_POST["Licenta_Obiect_Test_Ales"]; // != null
        
		$v_Echivalare_Preadmitere = $_POST["group21"];
		$vradio21 = validRadio($v_Echivalare_Preadmitere);
			
		$v_Echivalare_MEN = $_POST["group2"];
		$vradio2 = validRadio($v_Echivalare_MEN);
		$v_Numele_De_Familie_La_Nastere=$_POST["Licenta_Numele_De_Familie_La_Nastere"];
		$vNumele_De_Familie_La_Nastere = validNume($v_Numele_De_Familie_La_Nastere);
        
        $v_Initiala_Tata = $_POST["Licenta_Initiala_Tata"];
		$vInitialaTata = validInitialaTata($v_Initiala_Tata);
		
        $v_Numele_De_Familie_Actual=$_POST["Licenta_Numele_De_Familie_Actual"];
		$vNumeleDeFamilieActual = validNume($v_Numele_De_Familie_Actual);
		
        $v_Prenumele = $_POST["Licenta_Prenumele"];
        $vPrenumele = validPrenume($v_Prenumele);
        
        $v_Prenume_Tata = $_POST["Licenta_Prenume_Tata"];                 
		$vPrenumeTata = validPrenume($v_Prenume_Tata);
		
        $v_Prenume_Mama = $_POST["Licenta_Prenume_Mama"];
        $vPrenumeMama = validPrenume($v_Prenume_Mama);
		
		$v_Licenta_CNP = $_POST["Licenta_CNP"];
		$vLicenta_CNP = validCNP($v_Licenta_CNP);
        
        $v_Tara_Nastere = $_POST["Licenta_Tara_Nastere"];
		$vTaraNastere = validTara($v_Tara_Nastere);
        
        $v_Licenta_Localitate_Nastere = $_POST["Licenta_Localitate_Nastere"];
		$vLicenta_Localitate_Nastere = validLocalitate($v_Licenta_Localitate_Nastere);
        
		$v_Licenta_Nationalitate = $_POST["Licenta_Nationalitate"];
		
        $v_Licenta_Cetatenie = $_POST["Licenta_Cetatenie"];
		$vLicenta_Cetatenie = validCetatetnie($v_Licenta_Cetatenie);
        
        $v_Licenta_Etnie = $_POST["Licenta_Etnie"];
		$vLicenta_Etnie = validEtnie($v_Licenta_Etnie);
        
        $v_Licenta_Limba_Materna = $_POST["Licenta_Limba_Materna"];
		$vLicenta_Limba_Materna = validLimbaMaterna($v_Licenta_Limba_Materna);
       
        $v_Licenta_Tip_Buletin = $_POST["Licenta_Tip_Buletin"];  // V
		$vLicenta_Tip_Buletin = validTipBuletin($v_Licenta_Tip_Buletin);
        
        $v_Licenta_Serie_Buletin = $_POST["Licenta_Serie_Buletin"];  // V
		$vLicenta_Serie_Buletin = validSerieBuletin($v_Licenta_Serie_Buletin);
        
        $v_Licenta_Numar_Buletin = $_POST["Licenta_Numar_Buletin"];  // V
		$vLicenta_Numar_Buletin = validNumarBuletin($v_Licenta_Numar_Buletin);
        
        $v_Licenta_Buletin_Eliberat_De = $_POST["Licenta_Buletin_Eliberat_De"];  // V
		$vLicenta_Buletin_Eliberat_De = validEliberareBuletin($v_Licenta_Buletin_Eliberat_De);
       
		$vDomiciliu = $_POST["group3"];  // 1 sau 2
		
        $v_Licenta_Strada = $_POST["Licenta_Strada"];  // V
        $vLicenta_Strada = validareStrada($v_Licenta_Strada);
       
        $v_Licenta_Numar = $_POST["Licenta_Numar"];  // V
        $vLicenta_Numar = validareNumar($v_Licenta_Numar);
        
        $v_Licenta_Bloc = $_POST["Licenta_Bloc"];  // V
         $vLicenta_Bloc = validareBloc($v_Licenta_Bloc);
        
        $v_Licenta_Scara = $_POST["Licenta_Scara"];  // V
		$vLicenta_Scara = validareBloc($v_Licenta_Scara);
        
        $v_Licenta_Etaj = $_POST["Licenta_Etaj"]; 
		$vLicenta_Etaj = validareEtaj($v_Licenta_Etaj);
        
        $v_Licenta_Apartament = $_POST["Licenta_Apartament"];  // V
        $vLicenta_Apartament = validareNumar($v_Licenta_Apartament);
        
        $v_Licenta_Localitate = $_POST["Licenta_Localitate"]; 
		$vLicenta_Localitate = validLocalitate($v_Licenta_Localitate);
        
         $v_Licenta_Cod_Postal = $_POST["Licenta_Cod_Postal"];  // V
         $vLicenta_Cod_Postal = validareCodPostal($v_Licenta_Cod_Postal);
         
        $v_Licenta_Telefon = $_POST["Licenta_Telefon"];  // V
        $vLicenta_Telefon = validTelefon($v_Licenta_Telefon);
        
        $v_Licenta_Email = $_POST["Licenta_Email"];  // V
        $vLicenta_Email = validEmail($v_Licenta_Email);
        
		$v_alegere = $_POST["item-1"];
		
		// Urm dupa date personale
		
		
        $v_Radio4 = $_POST["group4"];	
		$vradio4 = validRadio($v_Radio4); //vradio ==1 sau 2
        
        $v_Radio6 = $_POST["group6"];
		$vradio6 = validRadio($v_Radio6); //vradio ==1 sau 2
        
        $v_Radio5 = $_POST["group5"];
		$vradio5 = validRadio($v_Radio5); //la fle
        
		//Pregatirea anterioara
		
        $v_Licenta_Localitate_Liceu = $_POST["Licenta_Localitate_Liceu"];
		$vLicenta_Localitate_Liceu=validLocalitate($v_Licenta_Localitate_Liceu);
      
        $v_Liceul_Absolvit = $_POST["Liceu_Absolvit"];
        
        $v_Licenta_Profil_Liceu = $_POST["Licenta_Profil_Liceu"];
		$vLicenta_Profil_Liceu = ProfilValidare($v_Licenta_Profil_Liceu);
        
        $v_Licenta_Durata_Liceu = $_POST["Licenta_Durata_Liceu"];
		$vLicenta_Durata_Liceu = validDurata($v_Licenta_Durata_Liceu);
        
        $v_Licenta_An_Liceu = $_POST["Licenta_An_Liceu"];
		$vLicenta_An_Liceu = validareAn($v_Licenta_An_Liceu);
        
        $v_Licenta_Serie_DiplomaBAC = $_POST["Licenta_Serie_DiplomaBAC"];
		$vLicenta_Serie_DiplomaBAC = validSerieBAC($v_Licenta_Serie_DiplomaBAC);
        
        $v_Licenta_Nr_DiplomaBAC = $_POST["Licenta_Nr_DiplomaBAC"];
		$vLicenta_Nr_DiplomaBAC = validNumarBAC($v_Licenta_Nr_DiplomaBAC);
        
        $v_Licenta_Emitere_DiplomaBAC = $_POST["Licenta_Emitere_DiplomaBAC"];
		$vLicenta_Emitere_DiplomaBAC = validBuletinEliberatDe($v_Licenta_Emitere_DiplomaBAC);
        
        $v_Licenta_Nr_FoaieMatricola = $_POST["Licenta_Nr_FoaieMatricola"];
        
		//Absolvite in straintate
		
        $v_Licenta_Serie_ActRecunoastere = $_POST["Licenta_Serie_ActRecunoastere"];
		$vLicenta_Serie_ActRecunoastere = validSerieBAC($v_Licenta_Serie_ActRecunoastere);
		
		$v_Licenta_Nr_ActRecunoastere = $_POST["Licenta_Nr_ActRecunoastere"];
		
		//Alta facultate
		
		$v_Radio25 = $_POST["group25"];
		$vradio25 = validRadio($v_Radio25);
		
		$v_Radio24 = $_POST["group24"];
		$vradio24 = validRadio($v_Radio24);
							
		//Info doc
		
		$v_Diploma_BAC=$_POST["Diploma_BAC"];
		$v_Adeverinta=$_POST["Adeverinta"];
		$v_Document_Echivalare_Studii=$_POST["Document_Echivalare_Studii"];
		$v_Diploma_Olimpiada=$_POST["Diploma_Olimpiada"];
		
		//Participa altundeva
		
		$v_Radio27 = $_POST["group27"];
		$vradio27 = validRadio($v_Radio27);
        
		//Inmatriculare in caz ca nu e acc la buget
		
		$v_Radio26 = $_POST["group26"];
		$vradio26 = validRadio($v_Radio26);
		
		
		//Chestionar
		
		$v_Radio28 = $_POST["group28"];
		$vradio28 = validRadioFinal($v_Radio28);
		
		$v_Radio29 = $_POST["group29"];
		$vradio29 = validRadioFinal($v_Radio29);
		
		$v_Radio30 = $_POST["group30"];
		$vradio30 = validRadioFinal($v_Radio30);
		
		$v_Radio31 = $_POST["group31"];
		$vradio31 = validRadioFinal($v_Radio31);
		
		$v_Radio32 = $_POST["group32"];
		$vradio32 = validRadioFinal($v_Radio32);
		
		$v_Radio33 = $_POST["group33"];
		$vradio33 = validRadioFinal($v_Radio33);
		
		$v_Radio34 = $_POST["group34"];
		$vradio34 = validRadioFinal($v_Radio34);
		
		$v_Radio35 = $_POST["group35"];
		$vradio35 = validRadioFinal($v_Radio35);
		
			$v_verificare_radio_25 = 0;
			
			if($v_Radio25 == 1) 
			{
				$v_Licenta_Localitate_AltaFacultate = $_POST["Licenta_Localitate_AltaFacultate"];
				$vLicenta_Localitate_AltaFacultate = validLocalitate($v_Licenta_Localitate_AltaFacultate);
				
				$v_Licenta_AltaUniversitate = $_POST["Licenta_AltaUniversitate"];
				$vLicenta_AltaUniversitate = validNume($v_Licenta_AltaUniversitate);
				
				$v_Licenta_AltaFacultate = $_POST["Licenta_AltaFacultate"];
				$vLicenta_AltaFacultate = validNume($v_Licenta_AltaFacultate);
				
				$v_Licenta_Domeniu_Licenta = $_POST["Licenta_Domeniu_Licenta"];
				$vLicentaDomeniuLicenta = validNume($v_Licenta_Domeniu_Licenta);
				
				$v_Licenta_Specializare = $_POST["Licenta_Specializare"];
				$vLicentaSpecializare = validNume($v_Licenta_Specializare);
				
				$v_Licenta_An_Facultate = $_POST["Licenta_An_Facultate"];
				$vLicentaAnFacultate = validareAn($v_Licenta_An_Facultate);
				
				$v_Licenta_Semestre_Finantate = $_POST["Licenta_Semestre_Finantate"];
				$vLicenta_Semestre_Finantate = validareNrSemCuBursa($v_Licenta_Semestre_Finantate);
				
				$v_Licenta_Semestre_Bursa = $_POST["Licenta_Semestre_Bursa"];
				$vLicenta_Semestre_Bursa = validareNrSemCuBursa($v_Licenta_Semestre_Bursa);
				
				if($vLicenta_Semestre_Bursa == 0 && $vLicenta_Semestre_Finantate == 0 && $vLicentaAnFacultate == 0 && $vLicentaSpecializare == 0 && $vLicentaDomeniuLicenta == 0 && $vLicenta_AltaFacultate == 0 && $vLicenta_AltaUniversitate == 0 && $vLicenta_Localitate_AltaFacultate == 0) $v_verificare_radio_25 = 1;
				
			}

			$v_verificare_radio_23 = 0;
		
			if($v_Radio23 == 1)
			{
				$v_Licenta_Serie_DiplomaLicenta=$_POST["Licenta_Serie_DiplomaLicenta"];
				$vLicenta_Serie_DiplomaLicenta=validSerieBAC($v_Licenta_Serie_DiplomaLicenta);

				$v_Licenta_Nr_DiplomaLicenta=$_POST["Licenta_Nr_DiplomaLicenta"];
	
				$v_Licenta_AbsolventLicenta_Nr_FoaieMatricola=$_POST["Licenta_AbsolventLicenta_Nr_FoaieMatricola"];

				$v_Licenta_AbsolventLicenta_Nr_ActRecunoastere=$_POST["Licenta_AbsolventLicenta_Nr_ActRecunoastere"];

				$v_Licenta_AbsolventLicenta_Serie_ActRecunoasteree=$_POST["Licenta_AbsolventLicenta_Serie_ActRecunoastere"];
				$vLicenta_AbsolventLicenta_Serie_ActRecunoasteree=validSerieBAC($v_Licenta_AbsolventLicenta_Serie_ActRecunoasteree);
				
				if($vLicenta_Serie_DiplomaLicenta == 0 && $vLicenta_AbsolventLicenta_Serie_ActRecunoasteree == 0 && ctype_digit($v_Licenta_Nr_DiplomaLicenta) && ctype_digit($v_Licenta_AbsolventLicenta_Nr_FoaieMatricola) && ctype_digit($v_Licenta_AbsolventLicenta_Nr_ActRecunoastere)) $v_verificare_radio_23 = 1;

			}

			$v_verificare_radio_24 = 0;
			
			if($v_Radio24 == 1)
			{
				$v_Licenta_AbsolventLicenta_Univ = $_POST["Licenta_AbsolventLicenta_Univ"];
		 		$vLicenta_AbsolventLicenta_Univ = validNume($v_Licenta_AbsolventLicenta_Univ);
				
				$v_Licenta_AbsolventLicenta_Facultate = $_POST["Licenta_AbsolventLicenta_Facultate"];
				$vLicenta_AbsolventLicenta_Facultate = validNume($v_Licenta_AbsolventLicenta_Facultate);
				
				$v_Licenta_AbsolventLicenta_Domeniu_Licenta = $_POST["Licenta_AbsolventLicenta_Domeniu_Licenta"];
				$vLicenta_AbsolventLicenta_Domeniu_Licenta = validNume($v_Licenta_AbsolventLicenta_Domeniu_Licenta);
				
				$v_Licenta_AbsolventLicenta_Specializare = $_POST["Licenta_AbsolventLicenta_Specializare"];
				$vLicenta_AbsolventLicenta_Specializare = validNume($v_Licenta_AbsolventLicenta_Specializare);
				
				$v_Licenta_AbsolventLicenta_An_Facultate = $_POST["Licenta_AbsolventLicenta_An_Facultate"];
				$vLicenta_AbsolventLicenta_An_Facultate = validareNrSemCuBursa($v_Licenta_AbsolventLicenta_An_Facultate);
				
				$v_Licenta_AbsolventLicenta_Durata_Studii = $_POST["Licenta_AbsolventLicenta_Durata_Studii"];
				$vLicenta_AbsolventLicenta_Durata_Studii = validareAniStudii($v_Licenta_AbsolventLicenta_Durata_Studii);
				
				$v_Licenta_AbsolventLicenta_Semestre_Finantate = $_POST["Licenta_AbsolventLicenta_Semestre_Finantate"];
				$vLicenta_AbsolventLicenta_Semestre_Finantate = validareNrSemCuBursa($v_Licenta_AbsolventLicenta_Semestre_Finantate);
				
				$v_Licenta_AbsolventLicenta_Semestre_Bursa = $_POST["Licenta_AbsolventLicenta_Semestre_Bursa"];
				$vLicenta_AbsolventLicenta_Semestre_Bursa = validareNrSemCuBursa($v_Licenta_AbsolventLicenta_Semestre_Bursa);
				
				$v_Licenta_AbsolventLicenta_Localitate_AltaFacultate = $_POST["Licenta_AbsolventLicenta_Localitate_AltaFacultate"];
				$vLicenta_AbsolventLicenta_Localitate_AltaFacultate = validLocalitate($v_Licenta_AbsolventLicenta_Localitate_AltaFacultate);
				
				$v_Radio23 = $_POST["group23"];
				$vradio23 = validRadio($v_Radio23);
				
				if($vLicenta_AbsolventLicenta_Localitate_AltaFacultate == 0 && $vLicenta_AbsolventLicenta_Semestre_Bursa == 0 && $vLicenta_AbsolventLicenta_Semestre_Finantate == 0 && $vLicenta_AbsolventLicenta_Durata_Studii == 0 && $vLicenta_AbsolventLicenta_An_Facultate == 0 && $vLicenta_AbsolventLicenta_Specializare == 0 && $vLicenta_AbsolventLicenta_Domeniu_Licenta == 0 && $vLicenta_AbsolventLicenta_Facultate == 0 & $vLicenta_AbsolventLicenta_Univ == 0 && (($v_Radio23 == 1 && $v_verificare_radio_23 == 1) || $v_Radio23 == 2)) $v_verificare_radio_24 = 1;
				
			}
		
        if ($vChitanta == 0 && $vsuma == 0 && vmediebac == 0 && vnotami == 0 && (($v_Radio1 == 1 && $v_verificare_radio_1 == 1)  || $v_Radio1 == 2) && $v_Obiect_Test_Ales != null && ($v_Radio21 == 1 || $v_Radio21 == 2) && ($v_Radio2 == 1 || $v_Radio2 == 2) && vNumele_De_Familie_La_Nastere == 0 && vInitialaTata == 0 && vNumeleDeFamilieActual == 0 && vPrenumele == 0 && vPrenumeTata == 0 && vPrenumeMama == 0 && vLicenta_CNP == 0 && vTaraNastere == 0 && vLicenta_Localitate_Nastere == 0 && v_Licenta_Nationalitate != null && vLicenta_Cetatenie == 0 && $vLicenta_Etnie == 0 && $vLicenta_Limba_Materna == 0 && $vLicenta_Serie_Buletin == 0 && $vLicenta_Numar_Buletin == 0 && $vLicenta_Buletin_Eliberat_De == 0 && $vLicenta_Strada == 0 && $vLicenta_Numar == 0 && $vLicenta_Bloc == 0 && $vLicenta_Scara == 0&& $vLicenta_Etaj == 0 && $vLicenta_Apartament == 0 && $vLicenta_Localitate == 0 && $vLicenta_Cod_Postal == 0 && $vLicenta_Telefon == 0 && $vLicenta_Email == 0 && $vLicenta_Localitate_Liceu == 0 && $vLicenta_Profil_Liceu == 0 && $vLicenta_Durata_Liceu == 0 && $vLicenta_An_Liceu == 0 && $vLicenta_Serie_DiplomaBAC == 0 && $vLicenta_Nr_DiplomaBAC == 0 && $v_Liceul_Absolvit != null && ($v_Radio4 == 1 || $v_Radio4 == 2) && ($v_Radio5 == 1 || $v_Radio5 == 2))
        
		{
        
        $statement = oci_parse($connection, "SELECT max(formular_id) AS COUNT FROM DATE_PERSONALE_LICENTA");
        oci_execute($statement);

        while (oci_fetch($statement)) {
            $numaratoare_licenta = oci_result($statement, "COUNT") + 1;
        }


        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        $current = mktime(date("H"), date("i"), date("s"), date("m")  , date("d")-1, date("Y"));
        $currDate=date("dmYHis",$current);
        
        $statement = oci_parse($connection, "INSERT INTO FORMULAR_LICENTA VALUES (
          :id, 
          :nr_chitanta, 
          :suma, 
          :scutit, 
          :motiv_scutire,
          to_timestamp(:currDate,'dd-mm-yyyy HH24-MI-SS'),
          NULL,
          0)");

        oci_bind_by_name($statement, ':id', $numaratoare_licenta);
        oci_bind_by_name($statement, ':nr_chitanta', $_POST["Licenta_Chitanta_nr"]);
        oci_bind_by_name($statement, ':suma', $_POST["Licenta_Suma_Taxa"]);
        oci_bind_by_name($statement, ':scutit', $_POST["group1"]);
        oci_bind_by_name($statement, ':motiv_scutire', $_POST["Licenta_Motiv_Scutire_taxa"]);
        oci_bind_by_name($statement,':currDate',$currDate);
        
        if (!$statement) {
            ini_set('display_errors', 1);
            error_reporting(E_ALL);
        }

        $result = oci_execute($statement);

        if (!$result) {
            ini_set('display_errors', 1);
            error_reporting(E_ALL);
        }
        
            
        $statement = oci_parse($connection, "INSERT INTO CERINTE_LICENTA VALUES (:id, :medie_generala_bac, :medie_disciplina_max, :optiune_test_scris, :solicita_echivalare, :an_participare_preadmitere, :vrea_nota_preadmitere, :vrea_sa_sustina_examen)");

        
        oci_bind_by_name($statement, ':id', $numaratoare_licenta);
        oci_bind_by_name($statement, ':medie_generala_bac', $_POST["Licenta_Medie_BAC"]);
        oci_bind_by_name($statement, ':medie_disciplina_max', $_POST["Licenta_Nota_MI"]);
        oci_bind_by_name($statement, ':optiune_test_scris', $_POST["Licenta_Obiect_Test_Ales"]);
        oci_bind_by_name($statement, ':solicita_echivalare', $_POST["group21"]);
        oci_bind_by_name($statement, ':an_participare_preadmitere', $_POST["Licenta_AnPreadmitere"]);
        oci_bind_by_name($statement, ':vrea_nota_preadmitere', $_POST["group21"]);
        oci_bind_by_name($statement, ':vrea_sa_sustina_examen', $_POST["group20"]);

        if (!$statement) {
            ini_set('display_errors', 1);
            error_reporting(E_ALL);
        }

        $result = oci_execute($statement);

        if (!$result) {
            ini_set('display_errors', 1);
            error_reporting(E_ALL);
        }

        $statement = oci_parse($connection, "INSERT INTO DATE_PERSONALE_LICENTA VALUES (
          :id,
          :nume_nastere,
          :initiale,
          :nume_actual,
          :prenume,
          :prenume_tata,
          :prenume_mama,
          :CNP,
          :sex,
          to_date(:zi||'-'||:luna||'-'||:an, 'dd-mm-yyyy'),
          :tara_nastere,
          :judet_nastere,
          :localitate_nastere,
          :cetatenie,
          :nationalitate,
          :etnie,
          :limba_materna,
          :stare_civila,
          :tip_act_ident,
          :serie_CL,
          :numar_CL,
          :eliberat_de,
           to_date(:bZi||'-'||:lZi||'-'||:aZi, 'dd-mm-yyyy'),
           to_date(:eZi||'-'||:elZi||'-'||:eaZi, 'dd-mm-yyyy'),
           :mediu_domiciliu,
           :tara_domiciliu,
           :judet_domiciliu,
           :localitate_domiciliu,
           :strada,
           :numar,
           :bloc,
           :scara,
           :etaj,
           :apartament,
           :cod_postal,
           :telefon,
           :email,
           :solicitare_cazare_studii,
           :solicitare_cazare_admitere,
           :stare_sociala_speciala,
           :dizabilitati)       
          ");                          //44

            oci_bind_by_name($statement, ':id', $numaratoare_licenta);
            oci_bind_by_name($statement, ':nume_nastere', $_POST['Licenta_Numele_De_Familie_La_Nastere']);
            oci_bind_by_name($statement, ':initiale', $_POST['Licenta_Initiala_Tata']);
            oci_bind_by_name($statement, ':nume_actual', $_POST['Licenta_Numele_De_Familie_Actual']);
            oci_bind_by_name($statement, ':prenume', $_POST['Licenta_Prenumele']); 
            oci_bind_by_name($statement, ':prenume_tata', $_POST['Licenta_Prenume_Tata']);
            oci_bind_by_name($statement, ':prenume_mama', $_POST['Licenta_Prenume_Mama']);          
            oci_bind_by_name($statement, ':CNP', $_POST['Licenta_CNP']);
            oci_bind_by_name($statement, ':sex', $_POST['Licenta_Sex']);

            oci_bind_by_name($statement, ':zi', $_POST['Licenta_Nastere_Zi']);
            oci_bind_by_name($statement, ':luna', $_POST['Licenta_Nastere_Luna']);
            oci_bind_by_name($statement, ':an', $_POST['Licenta_Nastere_An']);

            oci_bind_by_name($statement, ':tara_nastere', $_POST['Licenta_Tara']);
            oci_bind_by_name($statement, ':judet_nastere', $_POST['Licenta_Judet']);
            oci_bind_by_name($statement, ':localitate_nastere', $_POST['Licenta_Localitate_Nastere']);
            oci_bind_by_name($statement, ':cetatenie', $_POST['Licenta_Cetatenie']);
            oci_bind_by_name($statement, ':nationalitate', $_POST['Licenta_Nationalitate']);
            oci_bind_by_name($statement, ':etnie', $_POST['Licenta_Etnie']);
            oci_bind_by_name($statement, ':limba_materna', $_POST['Licenta_Limba_Materna']);
            oci_bind_by_name($statement, ':stare_civila', $_POST['Licenta_Stare_Civila']);
            oci_bind_by_name($statement, ':tip_act_ident', $_POST['Licenta_Tip_Buletin']);
            oci_bind_by_name($statement, ':serie_CL', $_POST['Licenta_Serie_Buletin']);
            oci_bind_by_name($statement, ':numar_CL', $_POST['Licenta_Numar_Buletin']);
            oci_bind_by_name($statement, ':eliberat_de', $_POST['Licenta_Buletin_Eliberat_De']);

            oci_bind_by_name($statement, ':bZi' ,$_POST['Licenta_Buletin_Ziua']);
            oci_bind_by_name($statement, ':lZi' ,$_POST['Licenta_Buletin_Luna']);
            oci_bind_by_name($statement, ':aZi' ,$_POST['Licenta_Buletin_Ziua']);
            oci_bind_by_name($statement, ':eZi' ,$_POST['Licenta_Buletin_Ziua']);
            oci_bind_by_name($statement, ':elZi' ,$_POST['Licenta_Buletin_Ziua']);
            oci_bind_by_name($statement, ':eaZi' ,$_POST['Licenta_Buletin_Ziua']);                           

            oci_bind_by_name($statement, ':mediu_domiciliu', $_POST['group3']);
            oci_bind_by_name($statement, ':tara_domiciliu', $_POST['Licenta_Tara']);
            oci_bind_by_name($statement, ':judet_domiciliu', $_POST['Licenta_Judet']);
            oci_bind_by_name($statement, ':localitate_domiciliu', $_POST['Licenta_Localitate']);
            oci_bind_by_name($statement, ':strada', $_POST['Licenta_Strada']);
            oci_bind_by_name($statement, ':numar', $_POST['Licenta_Numar']);
            oci_bind_by_name($statement, ':bloc', $_POST['Licenta_Bloc']);
            oci_bind_by_name($statement, ':scara', $_POST['Licenta_Scara']);            
            oci_bind_by_name($statement, ':etaj', $_POST['Licenta_Etaj']);
            oci_bind_by_name($statement, ':apartament', $_POST['Licenta_Apartament']);
            oci_bind_by_name($statement, ':cod_postal', $_POST['Licenta_Cod_Postal']);
            oci_bind_by_name($statement, ':telefon', $_POST['Licenta_Telefon']);
            oci_bind_by_name($statement, ':email', $_POST['Licenta_Email']);    
            oci_bind_by_name($statement, ':solicitare_cazare_studii', $_POST['group5']);
            oci_bind_by_name($statement, ':solicitare_cazare_admitere', $_POST['group6']); 
            oci_bind_by_name($statement, ':stare_sociala_speciala', $_POST['Licenta_Stare_speciala']);
            oci_bind_by_name($statement, ':dizabilitati', $_POST['group4']);

            if(!$statement){
              ini_set('display_errors', 1); 
              error_reporting(E_ALL);
            }

            $result=oci_execute($statement);

            if(!$result){
              ini_set('display_errors', 1); 
              error_reporting(E_ALL); 
              }
        
		  $statement = oci_parse($connection, "INSERT INTO INFORMATII_DOCUMENTE_LICENTA VALUES (
          :id, 
          :diploma_bac_original,
          :adeverinta_original,
          :document_echiv_studii_original,
          :diploma_olimpiada,
          :diploma_echiv_studii_copie,
          :participa_altundeva,
          :uni1,
          :fac1,
          :uni2,
          :fac2,
          :uni3,
          :fac3)");

        oci_bind_by_name($statement, ':id', $numaratoare_licenta);
        oci_bind_by_name($statement, ':diploma_bac_original', $_POST['Diploma_BAC']);
        oci_bind_by_name($statement, ':adeverinta_original', $_POST['Adeverinţă']);
        oci_bind_by_name($statement, ':document_echiv_studii_original', $_POST['Document_Echivalare_Studii_Original']);
        oci_bind_by_name($statement, ':diploma_olimpiada', $_POST['Diploma_Olimpiada']);
        oci_bind_by_name($statement, ':diploma_echiv_studii_copie', $_POST['Document_Echivalare_Studii']);
        oci_bind_by_name($statement, ':participa_altundeva', $_POST['group27']);
        oci_bind_by_name($statement, ':uni1', $_POST['Licenta_AlteConcursuri_Univ1']);
        oci_bind_by_name($statement, ':fac1', $_POST['Licenta_AlteConcursuri_Facultate1']);
        oci_bind_by_name($statement, ':uni2', $_POST['Licenta_AlteConcursuri_Univ2']);
        oci_bind_by_name($statement, ':fac2', $_POST['Licenta_AlteConcursuri_Facultate2']);
        oci_bind_by_name($statement, ':uni3', $_POST['Licenta_AlteConcursuri_Univ3']);
        oci_bind_by_name($statement, ':fac3', $_POST['Licenta_AlteConcursuri_Facultate3']);

        if (!$statement) {
            ini_set('display_errors', 1);
            error_reporting(E_ALL);
        }

        $result = oci_execute($statement);

        if (!$result) {
            ini_set('display_errors', 1);
            error_reporting(E_ALL);
        }

        $v_emisaZi = $_POST['Licenta_Diploma_Ziua'];
        $v_emisaLuna = $_POST['Licenta_Diploma_Luna'];
        $v_emisaAn = $_POST['Licenta_Diploma_An'];

        

      $statement = oci_parse($connection, "INSERT INTO CHESTIONAR_LICENTA VALUES (
        :id,
        :site_adm,
        :site_fac,
        :brosura_pliant,
        :FBPage,
        :prieteni,
        :sapt_porti,
        :prezentare_liceu,
        :profesori,
        :presa,
        :alte_surse,
        :prestigiu,
        :calitate,
        :sfat_persoane,
        :statut,
        :colegii,
        :materii,
        :informatii_univ,
        :apropierea)
        ");
      oci_bind_by_name($statement, ':id', $numaratoare_licenta);
      oci_bind_by_name($statement, ':site_adm', $_POST['Site_Admitere']);
      oci_bind_by_name($statement, ':site_fac', $_POST['Site_Facultate']);
      oci_bind_by_name($statement, ':brosura_pliant', $_POST['Brosura_Admitere']);  
      oci_bind_by_name($statement, ':FBPage', $_POST['FB_Univ']);  
      oci_bind_by_name($statement, ':prieteni', $_POST['Prieteni_Rude']);
      oci_bind_by_name($statement, ':sapt_porti', $_POST['Porti_Deschise_UAIC']); 
      oci_bind_by_name($statement, ':prezentare_liceu', $_POST['Prezentare_Liceu']);
      oci_bind_by_name($statement, ':profesori', $_POST['Profesori_Liceu']);         
      oci_bind_by_name($statement, ':presa', $_POST['Presa']);      
      oci_bind_by_name($statement, ':alte_surse', $_POST['Alte_Surse']);
      oci_bind_by_name($statement, ':prestigiu', $_POST['group28']);  
      oci_bind_by_name($statement, ':calitate', $_POST['group29']);
      oci_bind_by_name($statement, ':sfat_persoane', $_POST['group30']);  
      oci_bind_by_name($statement, ':statut', $_POST['group31']);  
      oci_bind_by_name($statement, ':colegii', $_POST['group32']);  
      oci_bind_by_name($statement, ':materii', $_POST['group33']);  
      oci_bind_by_name($statement, ':informatii_univ', $_POST['group34']);  
      oci_bind_by_name($statement, ':apropierea', $_POST['group35']);   
        
       if (!$statement) {
          ini_set('display_errors', 1);
          error_reporting(E_ALL);
      }

      $result = oci_execute($statement);

      if (!$result) {
          ini_set('display_errors', 1);
          error_reporting(E_ALL);
      }
        
    
    //Date_preg_ant_licenta
        
        

        $statement = oci_parse($connection, "INSERT into date_preg_anterioara_licenta values (
          :id,
          :liceu_absolvit,
          :tara_liceu,
          :localitate_liceu,
          :judet_liceu,
          :profil_liceu,
          :durata_studii_liceu,
          :an_absolvire_liceu,
          :forma_invatamant_liceu,
          :serie_dipl_liceu,
          :nr_dipl_liceu,
          to_date(:dZi||'-'||:dLuna||'-'||:dAn, 'dd-mm-yyyy'),
          :nr_foi,
          :act_rec_echiv,
          :serie_act,
          to_date(:actZi||'-'||:actLuna||'-'||:actAn, 'dd-mm-yyyy'), 
          :student_alta_fac,
          :tara_fac, 
          :localitate_fac,  
          :judet_fac,
          :denumire_institutie_fac,  
          :denumire_fac,   
          :denumire_domeniu_fac,
          :specializare,
          :forma_invatamant_fac,
          :an_fac,
          :nr_sem_buget_fac,
          :nr_sem_bursa_fac,
          2000,
          :cu_licenta,
          :abs_tara,
          :abs_local,
          :abs_judet,
          :abs_den_inst,
          :abs_den_fac,
          :abs_dom,
          :abs_spec,
          :abs_titlu,
          :abs_forma,
          :abs_sem_buget,
          :abs_sem_bursa,
          :durata_studii_abs,
          :abs_dipl_serie,
          :abs_dipl_nr,
           to_date(:absZi||'-'||:absLuna||'-'||:absAn, 'dd-mm-yyyy'),
           :abs_nr_foi,
           :abs_act_rec_nr,
           :abs_act_rec_serie,
           to_date(:absRecZi||'-'||:absRecLuna||'-'||:absRecAn, 'dd-mm-yyyy'))");

        oci_bind_by_name($statement, ':id', $numaratoare_licenta);
        oci_bind_by_name($statement, ':liceu_absolvit', $_POST['Liceu_Absolvit']);
        oci_bind_by_name($statement, ':tara_liceu', $_POST['Licenta_Tara_Liceu']);
        oci_bind_by_name($statement, ':localitate_liceu', $_POST['Licenta_Localitate_Liceu']);
        oci_bind_by_name($statement, ':judet_liceu', $_POST['Licenta_Judet_Liceu']);       
        oci_bind_by_name($statement, ':profil_liceu', $_POST['Licenta_Profil_Liceu']);
        oci_bind_by_name($statement, ':durata_studii_liceu', $_POST['Licenta_Durata_Liceu']);
        oci_bind_by_name($statement, ':an_absolvire_liceu', $_POST['Licenta_An_Liceu']);
        oci_bind_by_name($statement, ':forma_invatamant_liceu', $_POST['Licenta_FormaInvatamant_Liceu_First']);
        oci_bind_by_name($statement, ':serie_dipl_liceu', $_POST['Licenta_Serie_DiplomaBAC']);
        oci_bind_by_name($statement, ':nr_dipl_liceu', $_POST['Licenta_Nr_DiplomaBAC']);
        
        oci_bind_by_name($statement, ':dZi', $_POST['Licenta_Diploma_Ziua']);
        oci_bind_by_name($statement, ':dLuna', $_POST['Licenta_Diploma_Luna']);
        oci_bind_by_name($statement, ':dAn', $_POST['Licenta_Diploma_An']);  
        
        oci_bind_by_name($statement, ':nr_foi', $_POST['Licenta_Nr_FoaieMatricola']);
        oci_bind_by_name($statement, ':act_rec_echiv', $_POST['Licenta_Nr_ActRecunoastere']);
        oci_bind_by_name($statement, ':serie_act', $_POST['Licenta_Serie_ActRecunoastere']);
        
        oci_bind_by_name($statement, ':actZi', $_POST['Licenta_ActEchivalare_Ziua']);
        oci_bind_by_name($statement, ':actLuna', $_POST['Licenta_ActEchivalare_Luna']);
        oci_bind_by_name($statement, ':actAn', $_POST['Licenta_ActEchivalare_An']);   
        
        
        $v_Radio25 = $_POST["group25"];
        $v_student_alta_fac = 0;
        if($v_Radio25 == 1) $v_student_alta_fac = 1;
        oci_bind_by_name($statement, ':student_alta_fac', $v_student_alta_fac); 
        
        
        oci_bind_by_name($statement, ':tara_fac', $_POST['Licenta_Tara_AltaFacultate']);
        oci_bind_by_name($statement, ':localitate_fac', $_POST['Licenta_Localitate_AltaFacultate']);  
        oci_bind_by_name($statement, ':judet_fac', $_POST['Licenta_Judet_AltaFacultate']);
        oci_bind_by_name($statement, ':denumire_institutie_fac', $_POST['Licenta_AltaUniversitate']);
        oci_bind_by_name($statement, ':denumire_fac', $_POST['Licenta_AltaFacultate']);     
        oci_bind_by_name($statement, ':denumire_domeniu_fac', $_POST['Licenta_Domeniu_Licenta']);    
        oci_bind_by_name($statement, ':specializare', $_POST['Licenta_Specializare']);
        oci_bind_by_name($statement, ':forma_invatamant_fac', $_POST['Licenta_FormaInvatamant_Liceu']);
        oci_bind_by_name($statement, ':an_fac', $_POST['Licenta_An_Facultate']);
        oci_bind_by_name($statement, ':nr_sem_buget_fac', $_POST['Licenta_Semestre_Finantate']);
        oci_bind_by_name($statement, ':nr_sem_bursa_fac', $_POST['Licenta_Semestre_Bursa']);
       
		$v_cu_licenta = 0;
        if($vradio23 == 1) $v_cu_licenta = 1;
        oci_bind_by_name($statement, ':cu_licenta', $v_cu_licenta);     
        
        
        oci_bind_by_name($statement, ':abs_tara', $_POST['Licenta_Tara_AltaFacultate_Licenta']);       
        oci_bind_by_name($statement, ':abs_local', $_POST['Licenta_AbsolventLicenta_Localitate_AltaFacultate']); 
        oci_bind_by_name($statement, ':abs_judet', $_POST['Licenta_AbsolventLicenta_Judet_AltaFacultate']);
        oci_bind_by_name($statement, ':abs_den_inst', $_POST['Licenta_AbsolventLicenta_Univ']);
        oci_bind_by_name($statement, ':abs_den_fac', $_POST['Licenta_AbsolventLicenta_Facultate']);

        oci_bind_by_name($statement, ':abs_dom', $_POST['Licenta_AbsolventLicenta_Domeniu_Licenta']); 
        oci_bind_by_name($statement, ':abs_spec', $_POST['Licenta_AbsolventLicenta_Specializare']); 
        oci_bind_by_name($statement, ':abs_titlu', $_POST['Licenta_AbsolventLicenta_An_Facultate']);       

        oci_bind_by_name($statement, ':abs_forma', $_POST['Licenta_AbsolventLicenta_FormaInvatamant']);
        oci_bind_by_name($statement, ':abs_sem_buget', $_POST['Licenta_AbsolventLicenta_Semestre_Finantate']);  
        oci_bind_by_name($statement, ':abs_sem_bursa', $_POST['Licenta_AbsolventLicenta_Semestre_Bursa']);    
        oci_bind_by_name($statement, ':durata_studii_abs', $_POST['Licenta_AbsolventLicenta_Durata_Studii']);
        oci_bind_by_name($statement, ':abs_dipl_serie', $_POST['Licenta_Serie_DiplomaLicenta']);
        oci_bind_by_name($statement, ':abs_dipl_nr', $_POST['Licenta_Nr_DiplomaLicenta']);
          

       oci_bind_by_name($statement, ':absZi', $_POST['Licenta_DiplomaLicenta_Ziua']);
       oci_bind_by_name($statement, ':absLuna', $_POST['Licenta_DiplomaLicenta_Luna']);
       oci_bind_by_name($statement, ':absAn', $_POST['Licenta_DiplomaLicenta_An']);   

       oci_bind_by_name($statement, ':abs_nr_foi', $_POST['Licenta_AbsolventLicenta_Nr_FoaieMatricola']);
       oci_bind_by_name($statement, ':abs_act_rec_nr', $_POST['Licenta_AbsolventLicenta_Nr_ActRecunoastere']); 
       oci_bind_by_name($statement, ':abs_act_rec_serie', $_POST['Licenta_AbsolventLicenta_Serie_ActRecunoastere']); 

       oci_bind_by_name($statement, ':absRecZi', $_POST['Licenta_AbsolventLicenta_ActEchivalare_Ziua']);
       oci_bind_by_name($statement, ':absRecLuna', $_POST['Licenta__AbsolventLicenta_ActEchivalare_Luna']);
       oci_bind_by_name($statement, ':absRecAn', $_POST['Licenta_AbsolventLicenta_ActEchivalare_An']);   
      
       if (!$statement) {
          ini_set('display_errors', 1);
          error_reporting(E_ALL);
      }

      $result = oci_execute($statement);

      if (!$result) {
          ini_set('display_errors', 1);
          error_reporting(E_ALL);
      }
			
  		    echo '<script>window.location.href = "Validare_Formular.php";</script>';
            
        }

    }
  }
?>