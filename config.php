<?php
function getLanguageSuffix() {
    return (strpos($_SERVER['PHP_SELF'], '-TR') !== false) ? '-TR' : '';
}

function switchLanguage($currentFile) {
    $suffix = getLanguageSuffix();
    if ($suffix === '-TR') {
        return str_replace('-TR.php', '.php', $currentFile);
    } else {
        return str_replace('.php', '-TR.php', $currentFile);
    }
}

$languageSuffix = getLanguageSuffix();
$headerFile = "../Header&Footer/header{$languageSuffix}.php";
$footerFile = "../Header&Footer/footer{$languageSuffix}.php";
?>