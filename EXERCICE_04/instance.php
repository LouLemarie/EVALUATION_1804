<?php

include_once 'chat.php';

$chat1 = new Chat("Lou", 22, "rouge", "femelle", "Persan");

$chat1->getInfos();

var_dump($chat1->getInfos());

$chat2 = new Chat("Yankey", 3, "bleu", "male", "BleuRusse");

$chat2->getInfos();

var_dump($chat2->getInfos());

$chat3 = new Chat("Patrick", 41, "Jaune", "male", "Siamois");

$chat3->getInfos();

var_dump($chat3->getInfos());

