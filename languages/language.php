<?php
function getUserLanguage($language) {
    return $language;
}
if (isset($_GET["lg"])) {
    $userLanguage = getUserLanguage($_GET['lg']);
    $langFile = $userLanguage.".php";
    if (file_exists('languages/'.$langFile)) $lang = include("languages/". $langFile);
    else $lang = include("languages/eng.php");
}
else $lang = include("languages/eng.php");


?>