<?php 
    $Input = $_POST["firstName"].'/'.$_POST["lastName"].'/'.$_POST["pAge"].'/'.$_POST["birthday"].'/'.$_POST["gender"].'/'.$_POST["ethnicity1"].'/'.$_POST["ethnicity2"].'/'.$_POST["ethnicity3"].'/'.$_POST["ethnicity4"].'/'.$_POST["ethnicity5"].'/'.$_POST["ethnicity6"].'/'.$_POST["history"].'/'.$_POST["listsymptoms"].'/'.$_POST["addnote"];
        file_put_contents("input.txt", $Input);
	header('Location: ResultsOfSearch.html');
?>
