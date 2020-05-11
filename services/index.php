<?php
require_once("../header.php");
$isIndex = true;
if (isset($_GET['url'])) { //проверяем, есть ли переменная
    $service = DB('*', 'services', 'friendly_url="' . $_GET['url'] . '"');
    if (is_array($service) && count($service) > 0) {
        $isIndex = false;
        include '../template/service-single.php';
    }
}
if ($isIndex) { ?>


<?php }


include '../footer.php';