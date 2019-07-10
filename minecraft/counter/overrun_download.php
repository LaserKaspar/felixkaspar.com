<?php

/**
    * Anzahl Downloads sichern
    * Wird ausgelöst, wenn der Button "senden" angeklickt wird
**/
if(isset($_POST['senden'])) {
    //Datei wird geöffnet
    $datei = "counter/overrun_downloads.txt";
    $h = fopen($datei, "r");
    $int = fread($h, filesize ($datei));
    fclose($h);

    //Downloadanzahl um 1 erhöhen
    $int = $int + 1;

    //Neuen Wert speichern
    $h = fopen ("counter/overrun_downloads.txt", "w");
    fwrite($h, $int);
    fclose($h);
	
	//download file
	$dateiname = "http://shadowflamed.de/downloads/the_OverRun.zip"; 
	$anzeigename = "The Overrun - 1.8.8.zip";

	header("Content-Type: application/zip"); 
	header("Content-Disposition: attachment; filename=\"$anzeigename\""); 
	readfile($dateiname); 
}

/**
    * Anzahl Downloads zurücksetzen
    * Wird ausgelöst, wenn der Button "reset" angeklickt wird
**/
if(isset($_POST['reset'])) {
    //Wert wird einfach auf 0 gesetzt
    $h = fopen ("counter/overrun_downloads.txt", "w");
    fwrite($h, 0);
    fclose($h);

    echo "Der Counter wurde zurückgesetzt.";
}

//Download Zahl anzeigen lassen

if(isset($_POST['overrun-counts'])) {
    //Datei wird geöffnet
    $datei = "counter/overrun_downloads.txt";
    $h = fopen($datei, "r");
    $int = fread($h, filesize ($datei));
    fclose($h);

    echo "Overrun wurde {$int} Mal heruntergeladen";
}

?>