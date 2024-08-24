<?php

namespace Core;

/**
 * Config fornece configurações básicas para o projeto.
 * 
 * Esta classe define constantes usadas na aplicação, como URLs e credenciais.
 */
abstract class Config
{
    /**
     * Define configurações essenciais do projeto.
     * - URL base do projeto
     * - URL do painel administrativo
     * - Controlador padrão e controlador de erro
     * - Credenciais de email
     */
    protected function config(): void
    {
        define('URL', 'http://localhost/mvc-php-Site/');
        define('URLADM', 'http://localhost/mvc-php-Site/adm/');
        
        define('CONTROLLER', 'Home');
        define('CONTROLLERERRO', 'Erro');
        define('EMAILADM', 'seu email');
    }
}
