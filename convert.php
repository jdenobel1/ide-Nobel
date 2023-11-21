<?php
$inputFile = $_FILES['file']['tmp_name'];
$outputFile = pathinfo($_FILES['file']['name'], PATHINFO_FILENAME) . '.py';

$command = "jupyter nbconvert --to script --output $outputFile $inputFile";
exec($command, $output, $returnCode);

if ($returnCode === 0) {
    echo 'Conversion successful';
} else {
    echo 'Conversion failed';
}
?>
