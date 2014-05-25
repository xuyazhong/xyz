<?php

	include "ExcelXMLParser.php";
	$ExcelXMLParser = new ExcelXMLParser();	
	
	$result = $ExcelXMLParser->openWorkbook("test.xml",array());
	 $ws =& $ExcelXMLParser->Workbook->getFirstWorksheet(); 
    $row = $ws->Table->getFirstRow();
    unset($row);
    $row = $ws->Table->getNextRow();
    echo $row->getCell(0)->getValue();
    echo '<br> nothing';
    echo $row->getCell(1)->getValue(); 

    unset($ws);
?>