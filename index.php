<?php

$index_home = __DIR__ . '/index.html';

if (is_file($index_home)) {
    include $index_home;
} else {
    http_response_code(404);
    echo 'Erro crítico: Arquivo principal do site não encontrado.';
}
?>