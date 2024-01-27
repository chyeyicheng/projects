<?php
require('id_generator.php');

$idGenerator = new IdGenerator();

echo $idGenerator->getId(10000);