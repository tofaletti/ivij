<?php

require 'app.php';

function incluirTemplate(string $nombre, bool $inicio = false){
    include TEMPLATES_URL . "/{$nombre}.php";
}

function incluirQuestions(string $preguntas){
    include QUESTIONS_URL . "/{$preguntas}.php";
}