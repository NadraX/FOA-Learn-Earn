<?php

require('PHPExcel/Classes/PHPExcel/IOFactory.php');


      $id_formular=$_POST['id_formular'];
      $username = 'ADMITERE1';
      $password = 'ADMITERE1';
      $connection_string = 'localhost/xe';

      $c = oci_connect($username, $password, $connection_string, 'AL32UTF8');
      $s = oci_parse($c, " BEGIN  SELECT dpc.nume_familie_nastere, dpc.initialele_tatalui_mamei, dpc.nume_familie_actual, dpc.prenume_candidat, dpc.prenume_tata,
      dpc.prenume_mama, dpc.cnp, dpc.sex, TO_CHAR(dpc.data_nasterii, 'dd month yyyy', 'NLS_DATE_LANGUAGE=romanian'), dpc.tara_nasterii, dpc.judetul_nasterii, dpc.localitatea_nasterii,
      dpc.cetatenia, dpc.nationalitate, dpc.etnie, dpc.limba_materna, dpc.tip_act_ident,dpc.serie_act, dpc.numar_act, dpc.eliberat_de, TO_CHAR(dpc.data_eliberarii, 'dd month yyyy', 'NLS_DATE_LANGUAGE=romanian'),
      TO_CHAR(dpc.data_expirarii, 'dd month yyyy', 'NLS_DATE_LANGUAGE=romanian'), dpc.institutie_liceu, dpc.tara_liceu, dpc.localitate_liceu, dpc.judet_liceu, f.optiune_test_scris, f.nr_chitanta, f.suma INTO :nume_familie_nastere, :initialele_tatalui_mamei, :nume_familie_actual, :prenume_candidat, :prenume_tata, :prenume_mama, :cnp, :sex, :data_nasterii, :tara_nasterii, :judetul_nasterii, :localitatea_nasterii, :cetatenia, :nationalitate, :etnie, :limba_materna, :tip_act_ident, :serie_act, :numar_act,
      :eliberat_de, :data_eliberarii, :data_expirarii, :institutie_liceu, :tara_liceu, :localitate_liceu, :judet_liceu, :optiune_test_scris, :nr_chitanta, :suma FROM Date_personale_preadmitere dpc
      JOIN Formular_preadmitere f ON f.id=dpc.Formular_id WHERE f.id='$id_formular'; end; ");
     
      oci_bind_by_name($s, ":nume_familie_nastere", $nume_familie_nastere, 100);
      oci_bind_by_name($s, ":initialele_tatalui_mamei", $initialele_tatalui_mamei, 100);
      oci_bind_by_name($s, ":nume_familie_actual", $nume_familie_actual, 100);
      oci_bind_by_name($s, ":prenume_candidat", $prenume_candidat, 100);
      oci_bind_by_name($s, ":prenume_tata", $prenume_tata, 100);
      oci_bind_by_name($s, ":prenume_mama", $prenume_mama, 100);
      oci_bind_by_name($s, ":cnp", $cnp, 100);
      oci_bind_by_name($s, ":sex", $sex, 100);
      oci_bind_by_name($s, ":data_nasterii", $data_nasterii, 100);
      oci_bind_by_name($s, ":tara_nasterii", $tara_nasterii, 100);
      oci_bind_by_name($s, ":judetul_nasterii", $judetul_nasterii, 100);
      oci_bind_by_name($s, ":localitatea_nasterii", $localitatea_nasterii, 100);
      oci_bind_by_name($s, ":cetatenia", $cetatenia, 100);
      oci_bind_by_name($s, ":nationalitate", $nationalitate, 100);
      oci_bind_by_name($s, ":etnie", $etnie, 100);
      oci_bind_by_name($s, ":limba_materna", $limba_materna, 100);
	  oci_bind_by_name($s, ":tip_act_ident", $tip_act_ident, 100);
      oci_bind_by_name($s, ":serie_act", $serie_act, 100);
      oci_bind_by_name($s, ":numar_act", $numar_act, 100);
      oci_bind_by_name($s, ":eliberat_de", $eliberat_de, 100);
      oci_bind_by_name($s, ":data_eliberarii", $data_eliberarii, 100);
      oci_bind_by_name($s, ":data_expirarii", $data_expirarii, 100);
      oci_bind_by_name($s, ":institutie_liceu", $institutie_liceu, 100);
      oci_bind_by_name($s, ":tara_liceu", $tara_liceu, 100);
      oci_bind_by_name($s, ":localitate_liceu", $localitate_liceu, 100);
      oci_bind_by_name($s, ":judet_liceu", $judet_liceu, 100);
      oci_bind_by_name($s, ":optiune_test_scris", $optiune_test_scris, 100);
      oci_bind_by_name($s, ":nr_chitanta", $nr_chitanta, 100);
      oci_bind_by_name($s, ":suma", $suma, 100);
	 
      oci_execute($s);

    $myfile = fopen("csv_preadmitere.csv", "a") or die("Eroare la deschiderea/crearea fisierulu!");
	fwrite($myfile, $nr_chitanta."\t");
    fwrite($myfile, $suma."\t");

    //Date personale

    fwrite($myfile, strtoupper($nume_familie_nastere)."\t");
    fwrite($myfile, strtoupper($initialele_tatalui_mamei)."\t");
    fwrite($myfile, strtoupper($nume_familie_actual)."\t");
    fwrite($myfile, strtoupper($prenume_candidat)."\t");
    fwrite($myfile, strtoupper($prenume_tata)."\t");
    fwrite($myfile, strtoupper($prenume_mama)."\t");
    fwrite($myfile, $cnp."\t");
    fwrite($myfile, $sex."\t");
    fwrite($myfile, $data_nasterii."\t");
    fwrite($myfile, $tara_nasterii."\t");
    fwrite($myfile, $judetul_nasterii."\t");
    fwrite($myfile, $localitatea_nasterii."\t");
    fwrite($myfile, $cetatenia."\t");
    fwrite($myfile, $nationalitate."\t");
    fwrite($myfile, $etnie."\t");
    fwrite($myfile, $limba_materna."\t");
    fwrite($myfile, $tip_act_ident."\t");
    fwrite($myfile, $serie_act."\t");
    fwrite($myfile, $numar_act."\t");
    fwrite($myfile, $eliberat_de."\t");
    fwrite($myfile, $data_eliberarii."\t");
    fwrite($myfile, $data_expirarii."\t");

    //Preg anterioara

    fwrite($myfile, $institutie_liceu."\t");
    fwrite($myfile, $tara_liceu."\t");
    fwrite($myfile, $localitate_liceu."\t");
    fwrite($myfile, $optiune_test_scris);

    fwrite($myfile, "\n");
    oci_close($c);
    
    echo '<script>window.location.href = "Validare_Excel.php";</script>';
    fclose($myfile);


    $objReader = PHPExcel_IOFactory::createReader('CSV');

    $objReader->setDelimiter("\n");
    $objReader->setDelimiter("\t");
    $objReader->setInputEncoding('UTF-8');
    $objPHPExcel = $objReader->load('csv_preadmitere.csv');
    $objPHPExcel->getActiveSheet()->setTitle('Preadmitere');

    $objPHPExcel->getActiveSheet()->setCellValue('A1', 'Nr Chitanta');
    $objPHPExcel->getActiveSheet()->setCellValue('B1', 'Suma');
    $objPHPExcel->getActiveSheet()->setCellValue('C1', 'Nume Familie Nastere');
    $objPHPExcel->getActiveSheet()->setCellValue('D1', 'Initiale tata');
    $objPHPExcel->getActiveSheet()->setCellValue('E1', 'Nume familie actual');
    $objPHPExcel->getActiveSheet()->setCellValue('F1', 'Prenume candidat');
    $objPHPExcel->getActiveSheet()->setCellValue('G1', 'Prenume tata');
    $objPHPExcel->getActiveSheet()->setCellValue('H1', 'Prenume mama');
    $objPHPExcel->getActiveSheet()->setCellValue('I1', 'CNP');
    $objPHPExcel->getActiveSheet()->setCellValue('J1', 'Sex');
    $objPHPExcel->getActiveSheet()->setCellValue('K1', 'Data nasterii');
    $objPHPExcel->getActiveSheet()->setCellValue('L1', 'Tara nasterii');
    $objPHPExcel->getActiveSheet()->setCellValue('M1', 'Judetul nasterii');
    $objPHPExcel->getActiveSheet()->setCellValue('N1', 'Localitatea nasterii');
    $objPHPExcel->getActiveSheet()->setCellValue('O1', 'Cetatenia');
    $objPHPExcel->getActiveSheet()->setCellValue('P1', 'Nationalitate');
    $objPHPExcel->getActiveSheet()->setCellValue('Q1', 'Etnie');
    $objPHPExcel->getActiveSheet()->setCellValue('R1', 'Limba materna');
    $objPHPExcel->getActiveSheet()->setCellValue('S1', 'Tip act de identitate');
    $objPHPExcel->getActiveSheet()->setCellValue('T1', 'Serie act');
    $objPHPExcel->getActiveSheet()->setCellValue('U1', 'Numar act');
    $objPHPExcel->getActiveSheet()->setCellValue('V1', 'Eliberat de');
    $objPHPExcel->getActiveSheet()->setCellValue('W1', 'Data eliberarii');
    $objPHPExcel->getActiveSheet()->setCellValue('X1', 'Data expirarii');

    //Preg anterioara

    $objPHPExcel->getActiveSheet()->setCellValue('Y1', 'Institutie');
    $objPHPExcel->getActiveSheet()->setCellValue('Z1', 'Tara liceu');
    $objPHPExcel->getActiveSheet()->setCellValue('AA1', 'Localitate liceu');
    $objPHPExcel->getActiveSheet()->setCellValue('AB1', 'Judet liceu');
    $objPHPExcel->getActiveSheet()->setCellValue('AC1', 'Optiunea pentru testul scris');

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save('excel_preadmitere.xlsx');

    $objPHPExcel_preadmitere = PHPExcel_IOFactory::load('excel_preadmitere.xlsx');
    $objPHPExcel_master = PHPExcel_IOFactory::load('excel_master.xlsx');

    $worksheet = $objPHPExcel_master->getActiveSheet();
    $objPHPExcel_preadmitere->addExternalSheet($worksheet);
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel_preadmitere, 'Excel2007');
    $objWriter->save('excel_preadmitere.xlsx');
    
    $objPHPExcel_licenta = PHPExcel_IOFactory::load('excel_licenta.xlsx');
    $objPHPExcel_final = PHPExcel_IOFactory::load('excel_preadmitere.xlsx');

    $worksheet = $objPHPExcel_licenta->getActiveSheet();
    $objPHPExcel_final->addExternalSheet($worksheet);
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel_final, 'Excel2007');
    $objWriter->save('excel_final.xlsx');

?>