<?php
$zip = new ZipArchive;
if ($zip->open('your_project.zip') === TRUE) {
    $zip->extractTo('.');
    $zip->close();
    echo 'Arquivo extraído com sucesso.';
} else {
    echo 'Falha ao extrair o arquivo.';
}
?>