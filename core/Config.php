<?php

namespace Core;

// Redirecionar ou para o processamento quando o usuário não acessa o arquivo index.php
if (!defined('C7E3L8K9E5')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}

/**
 * Configurações básicas do site.
 */

abstract class Config
{

    /**
     * Possui as constantes com as configurações.
     * Configurações de endereço do projeto.
     * Página principal do projeto.
     * Credenciais de acesso ao banco de dados
     * E-mail do administrador.
     * 
     * @return void
     */
    protected function config(): void
    {
        //URL do projeto
        define('URL', 'http://localhost/mvc-php-Site/');
        define('URLADM', 'http://localhost/mvc-php-Site/adm/');

        define('CONTROLLER', 'Home');
        define('CONTROLLERERRO', 'Erro');

        //Credenciais do banco de dados

        define('EMAILADM', 'seu-EMAIL');
    }
}
