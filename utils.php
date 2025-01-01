<?php
function isCurrentPage($pageName) {
    $currentFile = basename($_SERVER['PHP_SELF']);
    return $currentFile === $pageName;
}
?> 