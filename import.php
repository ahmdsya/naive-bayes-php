<!-- file ini berfungsi untuk mengimport dataset yang ada pada file excel (/data/dataset.xlsx)
kedalam database pada table dataset -->

<?php

require_once 'function/Import.php';

$obj = new Import();

echo $obj->import();