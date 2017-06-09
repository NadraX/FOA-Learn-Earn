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
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style2.css">

		<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

		<script type="text/javascript">
		$(document).ready(function()
		{
			var $logo = $('#scroll');
			var $logo2 = $('#no-scroll');
			var $head2 = $('#header');
			$(document).scroll(function() 
			{
				$head2.css({display: $(this).scrollTop() < 50? "block":"none"});
				$logo2.css({display: $(this).scrollTop() < 50? "block":"none"});
				$logo.css({display: $(this).scrollTop() > 100? "block":"none"});
			});
		});
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
			.ie-8 .form-all:before { display: none; }
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
				width:44.5%;
				padding:0;
				margin:0;
			}
			#prenum {
				width:44.5%;
				padding:0;
				margin:0;
			}
			#initiala {
				width: 10%;
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
				width:40%;
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
		</style>

		<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/buttons/form-submit-button-steel.css?3.3.292"/>
		
		<title>
			Admitere licen&#355;&#259;
		</title>
	</head>
	<body>
		<header id="header"  class="site-header">
			<nav class="brandbar theme-bb-blue">
				<div class="row2">
					<ul class="column">
						<li class="dept-nd">
							<a href="https://www.info.uaic.ro/bin/Main/"></a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		
		<div class="nav-group nav-group--consistent ">
			<div class="bar2">
				<ul class="left-menu">
					<li><a href="DespreFII.html">Despre FII</a></li>
					<li><a href="contact2.html" >Contact</a></li>
				</ul>
				<ul class="right-menu">
					<li>
						<a href="#">Admitere &#9662;</a>
						<ul class="dropdown">
							<li><a class="makeB" href="licenta.html">Licen&#355;&#259;</a></li>
							<li><a class="makeB" href="master.html">Master</a></li>
							<li><a class="makeB" href="licenta.html">Preadmitere</a></li>
						</ul>
					</li>
					<li>
						<a href="IntrebariFrecvente.html">&#206;ntreb&#259;ri frecvente</a>
					</li>
				</ul>
			</div>   

			<a href="#" >
				<img id="no-scroll" class="sigla" src="imagini/sigla2.png" alt="sigla" />
				<img id="scroll" class="sigla" src="imagini/sigla2%20-%20Copy.png" alt="sigla" />
			</a>
		</div >
		
		<div class="container formular2" style="width:100%">
			<form  style="width:90%" action="" method='post'>
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
										
											<p>V&#259; rug&#259;m completa&#355;i toate c&#226;mpurile de mai jos.</p>
											<p>Pentru completarea notelor se acceptă valori cu virgulă (ex: 9,54)</p>
											<p>În câmpul "Notă la Matematică sau Informatică" se va pune nota de la Bacalaureat cea mai mare dintre cele doua</p>
											<p>La uploadarea diplomei şi a certificatului se va încârca un singur pdf: prima pagină certificatul de nastere, a doua pagină diploma de bacalaureat</p>
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
						<ul>
							<li class="form-line" data-type="control_fullname" id="id_1">
								<label class="form-label form-label-left form-label-auto" id="label_1"  style="color: #3488CB; font-size:large"> Informa&#355;ii   generale </label>
								<div  class="form-input jf-required cid_1">
									<div class="general_name" data-wrapper-react="true">
										<span id="num" class="form-sub-label-container" style="vertical-align:top;">
											<input type="text"  name="Licenta_Numele_De_Familie" class="form-textbox first_1" size="10" placeholder="ex: Ionescu" value="" data-component="first" />
											<span style="color:red">
												<?php
													include "ValidClass.php";
													if(isset($_POST['Submit'])) {
														$v_Numele_De_Familie = $_POST["Licenta_Numele_De_Familie"];
														$vNumele_De_Familie = validNume($v_Numele_De_Familie);
														if($vNumele_De_Familie==0)
															echo "C&#226;mp invalid!";
													}
												?>
											</span>
											<label class="form-sub-label sublabel_first" style="min-height:13px;"> Numele de familie </label>
										</span>
										<span id="initiala" class="form-sub-label-container" style="vertical-align:top;">
											<input type="text" name="Licenta_Initiala_Tata" class="form-textbox middle_1" size="10" placeholder="ex: C/C./C.-D." value="" data-component="middle" />
											<span style="color:red">
												<?php
													if(isset($_POST['Submit'])) {
														$v_Licenta_Initiala_Tata = $_POST["Licenta_Initiala_Tata"];
														$vLicenta_Initiala_Tata = validInitialaTata($v_Licenta_Initiala_Tata);
														if($vLicenta_Initiala_Tata==0)
															echo "C&#226;mp invalid!";
														}
												?>
											</span>
											<label class="form-sub-label"  style="min-height:13px;"> Ini&#355;iala tat&#259;lui </label>
										</span>
										<span id="prenum" class="form-sub-label-container" style="vertical-align:top;">
											<input type="text" name="Licenta_Prenumele" class="form-textbox last_1" size="15" placeholder="ex: Ana-Maria / Ana Maria" value="" data-component="last" />
											<span style="color:red">
												<?php
													if(isset($_POST['Submit'])) {
														$v_Licenta_Prenumele = $_POST["Licenta_Prenumele"];
														$vLicenta_Prenumele = validPremume($v_Licenta_Prenumele);
														if($vLicenta_Prenumele==0)
															echo "C&#226;mp invalid!";
														}
												?>
											</span>
											<label class="form-sub-label"  id="sublabel_last" style="min-height:13px;"> Prenumele </label>
										</span>
									</div>
									<br>  
								</div>
								<div  class="form-input jf-required cid_1">
									<div class="general_name" data-wrapper-react="true">
										<span  class="form-sub-label-container" style="vertical-align:top; width:25%;padding:0;margin:0;">
											<input type="text"  name="Licenta_Prenume_Mama" class="form-textbox first_1" size="10" placeholder="ex: Ana / Ana-Maria / Ana Maria " value="" data-component="first" />
											<span style="color:red">
												<?php
													if(isset($_POST['Submit'])) {
														$v_Licenta_Prenume_Mama = $_POST["Licenta_Prenume_Mama"];
														$vLicenta_PrenumeMama = validNume($v_Licenta_Prenume_Mama);
														if($vLicenta_PrenumeMama==0)
															echo "C&#226;mp invalid!";
													}
												?>
											</span>
											<label class="form-sub-label sublabel_first" style="min-height:13px;"> Prenume Mama </label>
										</span>
										<span  class="form-sub-label-container" style="vertical-align:top; width:24%;padding:0;margin:0;">
											<input type="text" name="Licenta_Prenume_Tata" class="form-textbox middle_1" size="10" placeholder="ex: Cristian / Cristi Ionu&#355; / Cristi-Ionu&#355;" value="" data-component="middle" />
											<span style="color:red">
												<?php
													if(isset($_POST['Submit'])) {
														$v_Licenta_Prenume_Tata = $_POST["Licenta_Prenume_Tata"];
														$vLicenta_PrenumeTata = validNume($v_Licenta_Prenume_Tata);
														if($vLicenta_PrenumeTata==0)
															echo "C&#226;mp invalid!";
													}
												?>
											</span>
											<label class="form-sub-label"  style="min-height:13px;"> Prenume Tata </label>
										</span>
										<span  class="form-sub-label-container" style="vertical-align:top; width:24%;padding:0;margin:0;">
											<select class="form-dropdown form-address-country" style="width:100%; height:40px" name="Licenta_Stare_Civila" data-component="country">
												<option value="">Singur/&#259;</option>
												<option value="">C&#259;s&#259;torit/&#259;</option>
											</select>
											<label class="form-sub-label" for="input_3_country"  style="min-height:13px;">Stare civil&#259;</label>
										</span>
										<span  class="form-sub-label-container" style="vertical-align:top; width:25%;padding:0;margin:0;">
											<select class="form-dropdown form-address-country" style="width:100%; height:40px" name="Licenta_Sex" data-component="country">
												<option value="">Feminin</option>
												<option value="">Masculin</option>
											</select>
											<label class="form-sub-label" for="input_3_country"  style="min-height:13px;">Sex</label>
										</span>
									</div> 
									<br> 
								</div>
								<br>
								<div  class="form-input jf-required cid_1">
									<div data-wrapper-react="true">
										<span class="form-sub-label-container" style="vertical-align:top; width:33%;padding:0;margin:0;">
											<input type="text" name="Licenta_Nationalitate"  class="form-textbox first_1" size="20" value="" data-component="first" />
											<span style="color:red">
												<?php
													if(isset($_POST['Submit'])) {
														$v_Licenta_Nationalitate = $_POST["Licenta_Nationalitate"];
														$vLicenta_Nationalitate = validNume($v_Licenta_Nationalitate);
														if($vLicenta_Nationalitate==0)
															echo "C&#226;mp invalid!";
													}
												?>
											</span>
											<label class="form-sub-label sublabel_first"  style="min-height:13px;"> Nationalitate </label>
										</span>
						
										<span class="form-sub-label-container" style="vertical-align:top; width:33%;padding:0;margin:0;">
											<input type="text" name="Licenta_Etnie"  class="form-textbox first_1" size="20"  data-component="first" />
											<span style="color:red">
												<?php
													if(isset($_POST['Submit'])) {
														$v_Licenta_Etnie = $_POST["Licenta_Etnie"];
														$vLicenta_Etnie = validNume($v_Licenta_Etnie);
														if($vLicenta_Etnie==0)
															echo "C&#226;mp invalid!";
													}
												?>
											</span>
											<label class="form-sub-label sublabel_first"  style="min-height:13px;"> Etnie </label>
										</span>

										<span class="form-sub-label-container" style="vertical-align:top; width:33%;padding:0;margin:0;">
											<input type="text" name="Licenta_Limba_Materna"  class="form-textbox first_1" size="20"  data-component="first" />
											<span style="color:red">
												<?php
													if(isset($_POST['Submit'])) {
														$v_Licenta_Limba_Materna = $_POST["Licenta_Limba_Materna"];
														$vLicenta_Limba_Materna = validNume($v_Licenta_Limba_Materna);
														if($vLicenta_Limba_Materna==0)
															echo "C&#226;mp invalid!";
													}
												?>
											</span>
											<label class="form-sub-label sublabel_first"  style="min-height:13px;"> Limba maternă </label>
										</span>

										<br>
									</div>
									<br>
								</div>
								<br>
								<div  class="form-input jf-required cid_1">
									<div data-wrapper-react="true">
										<span id="CNP" class="form-sub-label-container" style="vertical-align:top; padding:0; margin:0">
											<input type="text"  name="Licenta_CNP" class="form-textbox first_1" size="20" placeholder="ex: 1960917404400" value="" data-component="first" />
											<span style="color:red">
												<?php
													if(isset($_POST['Submit'])) {
														$v_Licenta_CNP = $_POST["Licenta_CNP"];
														$vLicenta_CNP = validCNP($v_Licenta_CNP);
														if($vLicenta_CNP==0)
															echo "C&#226;mp invalid!";
													}
												?>
											</span>
											<label class="form-sub-label sublabel_first"  style="min-height:13px;"> CNP </label>
										</span>
										<span  class="form-sub-label-container" style="vertical-align:top; width:6%;padding:0;margin:0;">
											<input type="text"  name="Licenta_Tip_Buletin" class="form-textbox first_1" size="20" placeholder="ex: C.I. / CI" data-component="first" />
											<span style="color:red">
												<?php
													if(isset($_POST['Submit'])) {
														$v_Licenta_Tip_Buletin = $_POST["Licenta_Tip_Buletin"];  // V
														$vLicenta_Tip_Buletin = validTipBuletin($v_Licenta_Tip_Buletin);
														if($vLicenta_Tip_Buletin==0)
															echo "C&#226;mp invalid!";
													}
												?>
											</span>
											<label class="form-sub-label sublabel_first"  style="min-height:13px;"> Tip Buletin </label>
										</span>
										<span  class="form-sub-label-container" style="vertical-align:top; width:10%;padding:0;margin:0;">
											<input type="text"  name="Licenta_Serie_Buletin" class="form-textbox first_1" size="20" placeholder="ex: IS / IF" data-component="first" />
											<span style="color:red">
												<?php
													if(isset($_POST['Submit'])) {
														$v_Licenta_Serie_Buletin = $_POST["Licenta_Serie_Buletin"];  // V
														$vLicenta_Serie_Buletin = validSerieBuletin($v_Licenta_Serie_Buletin);
														if($vLicenta_Serie_Buletin==0)
															echo "C&#226;mp invalid!";
													}
												?>
											</span>
											<label class="form-sub-label sublabel_first"  style="min-height:13px;"> Serie Buletin </label>
										</span>
										<span  class="form-sub-label-container" style="vertical-align:top; width:10%;padding:0;margin:0;">
											<input type="text"  name="Licenta_Numar_Buletin" class="form-textbox first_1" size="20" placeholder="ex: 123456" data-component="first" />
											<span style="color:red">
												<?php
													if(isset($_POST['Submit'])) {
														$v_Licenta_Numar_Buletin = $_POST["Licenta_Numar_Buletin"];  // V
														$vLicenta_Numar_Buletin = validNumarBuletin($v_Licenta_Numar_Buletin);
														if($vLicenta_Numar_Buletin==0)
															echo "C&#226;mp invalid!";
													}
												?>
											</span>
											<label class="form-sub-label sublabel_first"  style="min-height:13px;"> Numar Buletin </label>
										</span>
										<span  class="form-sub-label-container" style="vertical-align:top; width:10%;padding:0;margin:0;">
											<input type="text"  name="Licenta_Buletin_Eliberat_De" class="form-textbox first_1" size="20" placeholder="ex: SPCLEP IA&#350;I" data-component="first" />
											<span style="color:red">
												<?php
													if(isset($_POST['Submit'])) {
														$v_Licenta_Buletin_Eliberat_De = $_POST["Licenta_Buletin_Eliberat_De"];  // V
														$vLicenta_Buletin_Eliberat_De = validEliberareBuletin($v_Licenta_Buletin_Eliberat_De);
														if($vLicenta_Buletin_Eliberat_De==0)
															echo "C&#226;mp invalid!";
													}
												?>
											</span>
											<label class="form-sub-label sublabel_first"  style="min-height:13px;"> Eliberat de </label>
										</span>
										<div  class="form-input jf-required" style="vertical-align:top; width:21%;padding:0;margin:0;height:40px">
											<div data-wrapper-react="true">
												<span class="form-sub-label-container" style="vertical-align:top; ">
													<select style="height:40px;" name="Licenta_Buletin_Luna"  class="form-dropdown" data-component="birthdate-month">
														<option value="January">Ianuarie</option>
														<option value="February"> Februarie</option>
														<option value="March"> Martie </option>
														<option value="April"> Aprilie </option>
														<option value="May"> Mai </option>
														<option value="June"> Iunie </option>
														<option value="July"> Iulie</option>
														<option value="August"> August </option>
														<option value="September"> Septembrie </option>
														<option value="October"> Octombrie </option>
														<option value="November"> Noiembrie</option>
														<option value="December"> Decembrie </option>
													</select>
													<label class="form-sub-label"  style="min-height:13px;">în Luna</label>
												</span>
												<span class="form-sub-label-container" style="vertical-align:top;">
													<select style="height:40px;" name="Licenta_Buletin_Ziua"  class="form-dropdown" data-component="birthdate-day">
														<option value="1"> 1 </option>
														<option value="2"> 2 </option>
														<option value="3"> 3 </option>
														<option value="4"> 4 </option>
														<option value="5"> 5 </option>
														<option value="6"> 6 </option>
														<option value="7"> 7 </option>
														<option value="8"> 8 </option>
														<option value="9"> 9 </option>
														<option value="10"> 10 </option>
														<option value="11"> 11 </option>
														<option value="12"> 12 </option>
														<option value="13"> 13 </option>
														<option value="14"> 14 </option>
														<option value="15"> 15 </option>
														<option value="16"> 16 </option>
														<option value="17"> 17 </option>
														<option value="18"> 18 </option>
														<option value="19"> 19 </option>
														<option value="20"> 20 </option>
														<option value="21"> 21 </option>
														<option value="22"> 22 </option>
														<option value="23"> 23 </option>
														<option value="24"> 24 </option>
														<option value="25"> 25 </option>
														<option value="26"> 26 </option>
														<option value="27"> 27 </option>
														<option value="28"> 28 </option>
														<option value="29"> 29 </option>
														<option value="30"> 30 </option>
														<option value="31"> 31 </option>
													</select>
													<label class="form-sub-label"   style="min-height:13px;"> Ziua </label>
												</span>
												<span class="form-sub-label-container" style="vertical-align:top;">
													<select style="height:40px;" name="Licenta_Buletin_An"  class="form-dropdown" data-component="birthdate-year">
														<option value="2017"> 2017 </option>
														<option value="2016"> 2016 </option>
														<option value="2015"> 2015 </option>
														<option value="2014"> 2014 </option>
														<option value="2013"> 2013 </option>
														<option value="2012"> 2012 </option>
														<option value="2011"> 2011 </option>
														<option value="2010"> 2010 </option>
														<option value="2009"> 2009 </option>
														<option value="2008"> 2008 </option>
														<option value="2007"> 2007 </option>
														<option value="2006"> 2006 </option>
														<option value="2005"> 2005 </option>
														<option value="2004"> 2004 </option>
														<option value="2003"> 2003 </option>
														<option value="2002"> 2002 </option>
														<option value="2001"> 2001 </option>
														<option value="2000"> 2000 </option>
														<option value="1999"> 1999 </option>
														<option value="1998"> 1998 </option>
														<option value="1997"> 1997 </option>
														<option value="1996"> 1996 </option>
														<option value="1995"> 1995 </option>
														<option value="1994"> 1994 </option>
														<option value="1993"> 1993 </option>
														<option value="1992"> 1992 </option>
														<option value="1991"> 1991 </option>
														<option value="1990"> 1990 </option>
														<option value="1989"> 1989 </option>
														<option value="1988"> 1988 </option>
														<option value="1987"> 1987 </option>
														<option value="1986"> 1986 </option>
														<option value="1985"> 1985 </option>
														<option value="1984"> 1984 </option>
														<option value="1983"> 1983 </option>
														<option value="1982"> 1982 </option>
														<option value="1981"> 1981 </option>
														<option value="1980"> 1980 </option>
														<option value="1979"> 1979 </option>
														<option value="1978"> 1978 </option>
														<option value="1977"> 1977 </option>
														<option value="1976"> 1976 </option>
														<option value="1975"> 1975 </option>
														<option value="1974"> 1974 </option>
														<option value="1973"> 1973 </option>
														<option value="1972"> 1972 </option>
														<option value="1971"> 1971 </option>
														<option value="1970"> 1970 </option>
														<option value="1969"> 1969 </option>
														<option value="1968"> 1968 </option>
														<option value="1967"> 1967 </option>
														<option value="1966"> 1966 </option>
														<option value="1965"> 1965 </option>
														<option value="1964"> 1964 </option>
														<option value="1963"> 1963 </option>
														<option value="1962"> 1962 </option>
														<option value="1961"> 1961 </option>
														<option value="1960"> 1960 </option>
														<option value="1959"> 1959 </option>
														<option value="1958"> 1958 </option>
														<option value="1957"> 1957 </option>
														<option value="1956"> 1956 </option>
														<option value="1955"> 1955 </option>
														<option value="1954"> 1954 </option>
														<option value="1953"> 1953 </option>
														<option value="1952"> 1952 </option>
														<option value="1951"> 1951 </option>
														<option value="1950"> 1950 </option>
														<option value="1949"> 1949 </option>
														<option value="1948"> 1948 </option>
														<option value="1947"> 1947 </option>
														<option value="1946"> 1946 </option>
														<option value="1945"> 1945 </option>
														<option value="1944"> 1944 </option>
														<option value="1943"> 1943 </option>
														<option value="1942"> 1942 </option>
														<option value="1941"> 1941 </option>
														<option value="1940"> 1940 </option>
														<option value="1939"> 1939 </option>
														<option value="1938"> 1938 </option>
														<option value="1937"> 1937 </option>
														<option value="1936"> 1936 </option>
														<option value="1935"> 1935 </option>
														<option value="1934"> 1934 </option>
														<option value="1933"> 1933 </option>
														<option value="1932"> 1932 </option>
														<option value="1931"> 1931 </option>
														<option value="1930"> 1930 </option>
														<option value="1929"> 1929 </option>
														<option value="1928"> 1928 </option>
														<option value="1927"> 1927 </option>
														<option value="1926"> 1926 </option>
														<option value="1925"> 1925 </option>
														<option value="1924"> 1924 </option>
														<option value="1923"> 1923 </option>
														<option value="1922"> 1922 </option>
														<option value="1921"> 1921 </option>
														<option value="1920"> 1920 </option>
													</select>
													<label class="form-sub-label"   style="min-height:13px;">Anul</label>
												</span>
											</div>
										</div>
						
									</div>
									<br>
						
									<div class="form-input jf-required cid_1">
										<div>
											<span class="form-sub-label-container liceu" style="vertical-align:top;">
												<select  class="form-dropdown form-address-country liceu" name="Licenta_Liceu" id="input_3_country" data-component="country">
													<option value="">GRUP &#350;COLAR "HOREA CLO&#350;CA &#350;I CRI&#350;AN" ABRUD</option>
													<option value="">LICEUL "HOREA, CLO&#350;CA &#350;I CRI&#350;AN" ABRUD</option>
													<option value="">COLEGIUL NATIONAL "BETHLEN GABOR" AIUD</option>
													<option value="">COLEGIUL TEHNIC AIUD</option>
													<option value="">GRUPUL &#350;COLAR "AVRAM IANCU" AIUD</option>
													<option value="">COLEGIUL DE AFACERI ALBA IULIA</option>
													<option value="">COLEGIUL ECONOMIC "DIONISIE POP MARTIAN" ALBA IULIA</option>
													<option value="">COLEGIUL LICEAL MILITAR "MIHAI VITEAUL" ALBA IULIA</option>
													<option value="">COLEGIUL NA&#354;IONAL "HOREA CLO&#350;CA &#350;I CRI&#350;AN" ALBA IULIA</option>
													<option value="">COLEGIUL NA&#354;IONAL MILITAR "MIHAI VITEAZUL" ALBA IULIA</option>
													<option value="">COLEGIUL TEHNIC "ALEXANDRU DOMSA" ALBA IULIA</option>
													<option value="">COLEGIUL TEHNIC "APULUM" ALBA IULIA</option>
													<option value="">COLEGIUL TEHNIC "DORIN PAVEL" ALBA IULIA</option>
													<option value="">GRUP &#350;COLAR DE COOPERA&#354;IE ALBA IULIA</option>
													<option value="">GRUP &#350;COLAR DE INDUSTRIE USOAR&#258; ALBA IULIA</option>
													<option value="">GRUP &#350;COLAR INDUSTRIAL METALURGIC ALBA IULIA</option>
													<option value="">GRUPUL &#350;COLAR "DORIN PAVEL" ALBA IULIA</option>
													<option value="">GRUPUL &#350;COLAR DE COOPERATIE ALBA IULIA</option>
													<option value="">GRUPUL &#350;COLAR DE INDUSTRIE USOARA ALBA IULIA</option>
													<option value="">GRUPUL &#350;COLAR INDUSTRIAL METALURGIC ALBA IULIA</option>
													<option value="">LICEUL CU PROGRAM SPORTIV ALBA IULIA</option>
													<option value="">LICEUL DE ARTE "REGINA MARIA" ALBA IULIA</option>
													<option value="">LICEUL DE ARTE ALBA IULIA</option>
													<option value="">LICEUL DE MUZICA &#350;I ARTE PLASTICE ALBA IULIA</option>
													<option value="">LICEUL SPORTIV ALBA IULIA</option>
													<option value="">LICEUL TEOLOGIC ROMANO CATOLIC ALBA IULIA</option>
													<option value="">LICEUL TEOLOGIC ROMANO-CATOLIC "GROF MAJLATH GUSZTAV KAROLY" ALBA IULIA</option>
													<option value="">LICEUL TEORETIC "SF&#194;NTUL IOSIF" ALBA IULIA</option>
													<option value="">altul</option>
												</select>
											</span>
											<label class="form-sub-label" for="input_3_country" style="min-height:13px;"> Liceul pe care l-ați absolvit</label>
										</div>
										<br>
									</div>
									<div  class="form-input jf-required cid_1" >
										<div data-wrapper-react="true" class="mg">
											<span class="form-sub-label-container" style="vertical-align:top; width:100%" >
												<input type="text"  name="Licenta_Medie_BAC" class="form-textbox first_1" size="20" value="" data-component="first" />
												<span style="color:red">
													<?php
														if(isset($_POST['Submit'])) {
															$v_Licenta_Medie_BAC = $_POST["Licenta_Medie_BAC"];
															$vLicenta_Medie_BAC = validareMedieBac($v_Licenta_Medie_BAC);
															if($vLicenta_Medie_BAC==0)
																echo "C&#226;mp invalid!";
													}
													?>
												</span>
												<label class="form-sub-label sublabel_first"  style="min-height:13px;">Media general&#259; Bacalaureat</label>
											</span>
										</div> 
										<div data-wrapper-react="true" class="mg">
											<span  class="form-sub-label-container gen" style="vertical-align:top;">
												<input type="text"  name="Licenta_Nota_MI" class="form-textbox first_1" size="20" value="" data-component="first" />
												<span style="color:red">
													<?php
														if(isset($_POST['Submit'])) {
															$v_Licenta_Nota_MI = $_POST["Licenta_Nota_MI"];  // V
															$vLicenta_Nota_MI = validareProbaAlegere($v_Licenta_Nota_MI);
															if($vLicenta_Nota_MI==0)
																echo "C&#226;mp invalid!";
														}
													?>
												</span>
												<label class="form-sub-label sublabel_first"   style="min-height:13px;">Nota la Matematic&#259; sau Informatic&#259;</label>
											</span>
										</div>
										<div class="mg">
											<span class="form-sub-label-container gen" style="vertical-align:top;">
												<select class="form-dropdown form-address-country" style="width:100%; height:40px" name="Licenta_Limba_Aleasa middle_1" data-component="country">
													<option value="">&#206;n limba rom&#226;n&#259;</option>
													<option value="">&#206;n limba englez&#259;</option>
												</select>
												<label class="form-sub-label" for="input_3_country"  style="min-height:13px;">Doresc &#238;nva&#355;&#259;m&#226;nt de zi</label>
											</span>   
										</div>  
										<div data-wrapper-react="true" class="mg">
											<span class="form-sub-label-container gen" style="vertical-align:top;">
												<select class="form-dropdown form-address-country middle_1" name="Licenta_Obiect_Test_Ales"  data-component="country">
													<option value="">Matematic&#259;</option>
													<option value="">Informatic&#259; C/C++</option>
													<option value="">Informatic&#259; Pascal</option>
												</select>
												<label class="form-sub-label" for="input_3_country"  style="min-height:13px;">Doresc s&#259; dau admitere la obiectul</label>
											</span>   
										</div> 
									</div>       
									<br>
								</div>
							</li>
							<li class="form-line" data-type="control_address" id="id_3">
								<label class="form-label form-label-left form-label-auto" id="label_3" style="color: #3488CB; font-size:large"> Adresa dvs. </label>
								<div class="form-input jf-required cid_1">
									<table  style="width:100%">
										<tbody>
								  
											<tr> 
												<td>
								  
													<span class="form-sub-label-container" style="vertical-align:top; width:44%">
														<input type="text"  name="Licenta_Strada" class="form-textbox first_1" size="15" value="" placeholder="ex: Independen&#355;ei" data-component="first" />
														<span style="color:red">
															<?php
																if(isset($_POST['Submit'])) {
																	$v_Licenta_Strada = $_POST["Licenta_Strada"];  // V
																	$vLicenta_Strada = validareStrada($v_Licenta_Strada);
																	if($vLicenta_Strada==0)
																		echo "C&#226;mp invalid!";
																}
															?>
														</span>
														<label class="form-sub-label sublabel_first"   style="min-height:13px;">Strada </label>
													</span>
													<span class="form-sub-label-container" style="vertical-align:top; width:10%">
														<input type="text" name="Licenta_Numar" class="form-textbox middle_1" size="15" placeholder="ex: 17 / -" data-component="middle" />
														<span style="color:red">
															<?php
																if(isset($_POST['Submit'])) {
																	$v_Licenta_Numar = $_POST["Licenta_Numar"];  // V
																	$vLicenta_Numar = validareNumar($v_Licenta_Numar);
																	if($vLicenta_Numar==0)
																		echo "C&#226;mp invalid!";
																}
															?>
														</span>
														<label class="form-sub-label"   style="min-height:13px;"> Num&#259;rul</label>
													</span>
													<span class="form-sub-label-container" style="vertical-align:top; width:10%">
														<input type="text"  name="Licenta_Bloc" class="form-textbox last_1" size="15" placeholder="ex: 123 / - / C345" data-component="last" />
														<span style="color:red">
															<?php
																if(isset($_POST['Submit'])) {
																	$v_Licenta_Bloc = $_POST["Licenta_Bloc"];  // V
																	$vLicenta_Bloc = validareBloc($v_Licenta_Bloc);
																	if($vLicenta_Bloc==0)
																		echo "C&#226;mp invalid!";
																}
															?>
														</span>
														<label class="form-sub-label"  style="min-height:13px;"> Bloc </label>
													</span>
													<span class="form-sub-label-container" style="vertical-align:top; width:10%">
														<input type="text"  name="Licenta_Scara" class="form-textbox last_1" size="15" placeholder="ex: A / D3" data-component="last" />
														<span style="color:red">
															<?php
																if(isset($_POST['Submit'])) {
																	$v_Licenta_Scara = $_POST["Licenta_Scara"];  // V
																	$vLicenta_Scara = validareBloc($v_Licenta_Scara);
																	if($vLicenta_Scara==0)
																		echo "C&#226;mp invalid!";
																}
															?>
														</span>
														<label class="form-sub-label last_1"  style="min-height:13px;"> Scara </label>
													</span>
													<span class="form-sub-label-container" style="vertical-align:top; width:10% ">
														<input type="text"  name="Licenta_Etaj" class="form-textbox last_1" size="15" placeholder="ex: Parter / 17 / -" data-component="last" />
														<span style="color:red">
															<?php
																if(isset($_POST['Submit'])) {
																	$v_Licenta_Etaj = $_POST["Licenta_Etaj"];  // V
																	$vLicenta_Etaj = validareEtaj($v_Licenta_Etaj);
																	if($vLicenta_Etaj==0)
																		echo "C&#226;mp invalid!";
																}
															?>
														</span>
														<label class="form-sub-label"  style="min-height:13px;"> Etaj </label>
													</span>
													<span class="form-sub-label-container" style="vertical-align:top; width:11%; margin:0px; padding:0px">
														<input type="text"  name="Licenta_Apartament" class="form-textbox last_1" size="15" data-component="last" placeholder="ex: 1 / -" style="margin:0px; padding:0px" />
														<span style="color:red">
															<?php
																if(isset($_POST['Submit'])) {
																	$v_Licenta_Apartament = $_POST["Licenta_Apartament"];  // V
																	$vLicenta_Apartament = validareNumar($v_Licenta_Apartament);
																	if($vLicenta_Apartament==0)
																		echo "C&#226;mp invalid!";
																}
															?>
														</span>
														<label class="form-sub-label"  style="min-height:13px;"> Apartament </label>
													</span>
												</td>
											</tr>
											<tr>
												<td>
													<br>
													<span class="form-sub-label-container" style="vertical-align:top; width:24%" >
														<input type="text"  name="Licenta_Localitate" class="form-textbox form-address-city first_1" size="21" placeholder="ex: Ia&#351;i" data-component="city" />
														<span style="color:red">
															<?php
																if(isset($_POST['Submit'])) {
																	$v_Licenta_Localitate = $_POST["Licenta_Localitate"];  // V
																	$vLicenta_Localitate = validPremume($v_Licenta_Localitate);
																	if($vLicenta_Localitate==0)
																		echo "C&#226;mp invalid!";
																}
															?>
														</span>
														<label class="form-sub-label" id="sublabel_3_city" style="min-height:13px;"> Localitate </label>
													</span>
													<span class="form-sub-label-container" style="vertical-align:top; width:24%">
														<select class="form-dropdown form-address-country gen" name="Licenta_Judet"  data-component="country">
															<option value="">Alba</option>
															<option value="">Arad</option>
															<option value="">Arge&#351;</option>  
															<option value="">Bac&#259;u</option>
															<option value="">Bihor</option>
															<option value="">Bistri&#355;a-N&#259;s&#259;ud</option>
															<option value="">Boto&#351;ani</option>
															<option value="">Br&#259;ila</option>
															<option value="">Bra&#351;ov</option>
															<option value="">Bucure&#351;ti</option>
															<option value="">Buz&#259;u</option>
															<option value="">C&#259;l&#259;ra&#351;i</option>
															<option value="">Cara&#351;-Severin</option>
															<option value="">Cluj</option>
															<option value="">Constan&#355;a</option>
															<option value="">Covasna</option>
															<option value="">D&#226;mbovi&#355;a</option>
															<option value="">Gala&#355;i</option>
															<option value="">Giurgiu</option>
															<option value="">Gorj</option>
															<option value="">Harghita</option>
															<option value="">Hunedoara</option>
															<option value="">Ialomi&#355;a</option>
															<option value="">Ia&#351;i</option>
															<option value="">Ilfov</option>
															<option value="">Maramure&#351;</option>
															<option value="">Mehedin&#355;i</option>
															<option value="">Mures</option>
															<option value="">Neam&#355;</option>
															<option value="">Olt</option>
															<option value="">Prahova</option>
															<option value="">S&#259;laj</option>
															<option value="">Satu Mare</option>
															<option value="">Sibiu</option>
															<option value="">Suceava</option>
															<option value="">Teleorman</option>
															<option value="">Timi&#351;</option>
															<option value="">Tulcea</option>
															<option value="">V&#226;lcea</option>
															<option value="">Vaslui</option>
															<option value="">Vrancea</option>
														</select>
														<label class="form-sub-label" for="input_3_country" style="min-height:13px;"> Jude&#355; </label>
													</span>
													<span class="form-sub-label-container" style="vertical-align:top; width:24%">
														<input type="text" name="Licenta_Cod_Postal" class="gen" size="16" value="" placeholder="ex: 404400" data-component="zip" />
														<span style="color:red">
															<?php
																if(isset($_POST['Submit'])) {
																	$v_Licenta_Cod_Postal = $_POST["Licenta_Cod_Postal"];  // V
																	$vLicenta_Cod_Postal = validNumarBuletin($v_Licenta_Cod_Postal);
																	if($vLicenta_Cod_Postal==0)
																		echo "C&#226;mp invalid!";
																}
															?>
														</span>
														<label class="form-sub-label"  id="sublabel_3_postal" style="min-height:13px;"> Cod po&#351;tal</label>
													</span>
													<span class="form-sub-label-container" style="vertical-align:top; width:24%">
														<select class="form-dropdown form-address-country gen" name="Licenta_Tara" data-component="country">
															<option value="United States"> Rom&#226;nia </option>
															<option value="Afghanistan"> Republica Moldova </option>
															<option value="other"> Alta op&#355;iune</option>
														</select>
														<label class="form-sub-label" for="input_3_country"  style="min-height:13px;">&#354;ar&#259; </label>
													</span>
												</td>
								 
											</tr>
										</tbody>
									</table>
								</div>
							</li>
							<li class="form-line form-line-column form-col-1" data-type="control_phone" id="id_6" style="width:50%">
								<label class="form-label form-label-left form-label-auto" id="label_6"   style="color: #3488CB; font-size:large">Contact </label>
								<div id="cid_6" class="form-input jf-required" style="width:100%">
									<div data-wrapper-react="true" style="width:100%">
										<span class="form-sub-label-container" style="vertical-align:top; width:100%" >
											<input type="tel" id="input_6_phone" name="Licenta_Telefon" class="form-textbox" size="20" placeholder="ex: 0751404400" value="" data-component="phone" style="width:100%; height:40px"/>
											<br>
											<span style="color:red">
												<?php
													if(isset($_POST['Submit'])) {
														$v_Licenta_Telefon = $_POST["Licenta_Telefon"];  // V
														$vLicenta_Telefon = validTelefon($v_Licenta_Telefon);
														if($vLicenta_Telefon==0)
															echo "C&#226;mp invalid!";
													}
												?>
											</span>
											<label class="form-sub-label" for="input_6_phone"  style="min-height:13px;"> Num&#259;r de telefon </label>
										</span>
									</div>
									<div data-wrapper-react="true">
										<span class="form-sub-label-container" style="vertical-align:top; width:100%">
											<input type="email" id="input_9" name="Licenta_Email" class="form-textbox validate[Email]" size="30" value="" placeholder="ex: adresamea@yahoo.com" data-component="email"  style="width:100%; height:40px" />
											<br>
											<span style="color:red">
												<?php
													if(isset($_POST['Submit'])) {
														$v_Licenta_Email = $_POST["Licenta_Email"];  // V
														$vLicenta_Email = validEmail($v_Licenta_Email);
														if($vLicenta_Email==0)
															echo "C&#226;mp invalid!";
													}
												?>
											</span>
											<label class="form-sub-label" for="input_6_phone"  style="min-height:13px;"> E-mail </label>
										</span>
									</div>
								</div>
							</li>
			   
							<li class="form-line form-line-column form-col-1" data-type="control_birthdate" id="id_10">
								<label class="form-label form-label-left form-label-auto" id="label_10"  style="color: #3488CB; font-size:large">Data na&#351;tere</label>
								<div id="cid_10" class="form-input jf-required">
									<div data-wrapper-react="true">
										<span class="form-sub-label-container" style="vertical-align:top; ">
											<select style="height:40px;" name="Licenta_Nastere_Luna" id="input_10_month" class="form-dropdown" data-component="birthdate-month">
												<option value="January">Ianuarie</option>
												<option value="February"> Februarie</option>
												<option value="March"> Martie </option>
												<option value="April"> Aprilie </option>
												<option value="May"> Mai </option>
												<option value="June"> Iunie </option>
												<option value="July"> Iulie</option>
												<option value="August"> August </option>
												<option value="September"> Septembrie </option>
												<option value="October"> Octombrie </option>
												<option value="November"> Noiembrie</option>
												<option value="December"> Decembrie </option>
											</select>
											<label class="form-sub-label" for="input_10_month" id="sublabel_month" style="min-height:13px;">Lun&#259;</label>
										</span>
										<span class="form-sub-label-container" style="vertical-align:top;">
											<select style="height:40px;" name="Licenta_Nastere_Zi" id="input_10_day" class="form-dropdown" data-component="birthdate-day">
												<option value="1"> 1 </option>
												<option value="2"> 2 </option>
												<option value="3"> 3 </option>
												<option value="4"> 4 </option>
												<option value="5"> 5 </option>
												<option value="6"> 6 </option>
												<option value="7"> 7 </option>
												<option value="8"> 8 </option>
												<option value="9"> 9 </option>
												<option value="10"> 10 </option>
												<option value="11"> 11 </option>
												<option value="12"> 12 </option>
												<option value="13"> 13 </option>
												<option value="14"> 14 </option>
												<option value="15"> 15 </option>
												<option value="16"> 16 </option>
												<option value="17"> 17 </option>
												<option value="18"> 18 </option>
												<option value="19"> 19 </option>
												<option value="20"> 20 </option>
												<option value="21"> 21 </option>
												<option value="22"> 22 </option>
												<option value="23"> 23 </option>
												<option value="24"> 24 </option>
												<option value="25"> 25 </option>
												<option value="26"> 26 </option>
												<option value="27"> 27 </option>
												<option value="28"> 28 </option>
												<option value="29"> 29 </option>
												<option value="30"> 30 </option>
												<option value="31"> 31 </option>
											</select>
											<label class="form-sub-label" for="input_10_day" id="sublabel_day" style="min-height:13px;"> Zi </label>
										</span>
										<span class="form-sub-label-container" style="vertical-align:top;">
											<select style="height:40px;" name="Licenta_Nastere_An" id="input_10_year" class="form-dropdown" data-component="birthdate-year">
												<option value="2017"> 2017 </option>
												<option value="2016"> 2016 </option>
												<option value="2015"> 2015 </option>
												<option value="2014"> 2014 </option>
												<option value="2013"> 2013 </option>
												<option value="2012"> 2012 </option>
												<option value="2011"> 2011 </option>
												<option value="2010"> 2010 </option>
												<option value="2009"> 2009 </option>
												<option value="2008"> 2008 </option>
												<option value="2007"> 2007 </option>
												<option value="2006"> 2006 </option>
												<option value="2005"> 2005 </option>
												<option value="2004"> 2004 </option>
												<option value="2003"> 2003 </option>
												<option value="2002"> 2002 </option>
												<option value="2001"> 2001 </option>
												<option value="2000"> 2000 </option>
												<option value="1999"> 1999 </option>
												<option value="1998"> 1998 </option>
												<option value="1997"> 1997 </option>
												<option value="1996"> 1996 </option>
												<option value="1995"> 1995 </option>
												<option value="1994"> 1994 </option>
												<option value="1993"> 1993 </option>
												<option value="1992"> 1992 </option>
												<option value="1991"> 1991 </option>
												<option value="1990"> 1990 </option>
												<option value="1989"> 1989 </option>
												<option value="1988"> 1988 </option>
												<option value="1987"> 1987 </option>
												<option value="1986"> 1986 </option>
												<option value="1985"> 1985 </option>
												<option value="1984"> 1984 </option>
												<option value="1983"> 1983 </option>
												<option value="1982"> 1982 </option>
												<option value="1981"> 1981 </option>
												<option value="1980"> 1980 </option>
												<option value="1979"> 1979 </option>
												<option value="1978"> 1978 </option>
												<option value="1977"> 1977 </option>
												<option value="1976"> 1976 </option>
												<option value="1975"> 1975 </option>
												<option value="1974"> 1974 </option>
												<option value="1973"> 1973 </option>
												<option value="1972"> 1972 </option>
												<option value="1971"> 1971 </option>
												<option value="1970"> 1970 </option>
												<option value="1969"> 1969 </option>
												<option value="1968"> 1968 </option>
												<option value="1967"> 1967 </option>
												<option value="1966"> 1966 </option>
												<option value="1965"> 1965 </option>
												<option value="1964"> 1964 </option>
												<option value="1963"> 1963 </option>
												<option value="1962"> 1962 </option>
												<option value="1961"> 1961 </option>
												<option value="1960"> 1960 </option>
												<option value="1959"> 1959 </option>
												<option value="1958"> 1958 </option>
												<option value="1957"> 1957 </option>
												<option value="1956"> 1956 </option>
												<option value="1955"> 1955 </option>
												<option value="1954"> 1954 </option>
												<option value="1953"> 1953 </option>
												<option value="1952"> 1952 </option>
												<option value="1951"> 1951 </option>
												<option value="1950"> 1950 </option>
												<option value="1949"> 1949 </option>
												<option value="1948"> 1948 </option>
												<option value="1947"> 1947 </option>
												<option value="1946"> 1946 </option>
												<option value="1945"> 1945 </option>
												<option value="1944"> 1944 </option>
												<option value="1943"> 1943 </option>
												<option value="1942"> 1942 </option>
												<option value="1941"> 1941 </option>
												<option value="1940"> 1940 </option>
												<option value="1939"> 1939 </option>
												<option value="1938"> 1938 </option>
												<option value="1937"> 1937 </option>
												<option value="1936"> 1936 </option>
												<option value="1935"> 1935 </option>
												<option value="1934"> 1934 </option>
												<option value="1933"> 1933 </option>
												<option value="1932"> 1932 </option>
												<option value="1931"> 1931 </option>
												<option value="1930"> 1930 </option>
												<option value="1929"> 1929 </option>
												<option value="1928"> 1928 </option>
												<option value="1927"> 1927 </option>
												<option value="1926"> 1926 </option>
												<option value="1925"> 1925 </option>
												<option value="1924"> 1924 </option>
												<option value="1923"> 1923 </option>
												<option value="1922"> 1922 </option>
												<option value="1921"> 1921 </option>
												<option value="1920"> 1920 </option>
											</select>
											<label class="form-sub-label" for="input_10_year" id="sublabel_year" style="min-height:13px;">An</label>
										</span>
									</div>
									<div data-wrapper-react="true">
										<span class="form-sub-label-container" style="vertical-align:top;">
											<label class="form-label form-label-left form-label-auto" id="label_9" for="input_9" style="color: #3488CB; font-size:large">Uploadare diplome, certificate (format pdf)</label>
											<object data="YourFile.pdf" type="application/x-pdf" title="SamplePdf" width="500" height="320" style="font-size:30px" >
												<a href="YourFile.pdf">Upload aici</a> 
											</object>
										</span> 
									</div>
								</div>
							</li>
			  
							<li class="form-line" data-type="control_button" id="id_2" style="text-align:center">
								<div id="cid_2" class="form-input-wide" style="text-align:center; padding-top:40px;">
									<div style="text-align:center" class="form-buttons-wrapper">
										<button id="Submit" name="Submit" Value="Register" type="Submit" style="background-color:#3488CB;color:white;height:40px;width:300px; border-radius:25px;" data-component="button">
											Trimitere formular
										</button>
									</div>
								</div>
							</li>
		   
						</ul>
					</div>

				</div>
			</form>

		</div>

	</body>
</html>