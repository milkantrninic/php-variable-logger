<?php
 //this function create log file vit variable content.
//$variable logs variable content. 
//$rowName="" writes custom text at the beginning of a log line.
   function checkError ($variable, $rowName="") {
    $logMessage = date('Y-m-d H:i:s') . ' - ' . $rowName . ' : ' . print_r($variable, true) . "\n";
    $logFile = './logfile.txt';
    // Append the log message to the log file
    file_put_contents($logFile, $logMessage, FILE_APPEND);
  }

?>
