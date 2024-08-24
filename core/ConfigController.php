<?php

namespace Core;

/**
 * ConfigController gerencia a URL da solicitação e carrega o controlador correspondente.
 */
class ConfigController extends Config
{
    private string $url;
    private array $urlArray;
    private string $urlController;
    private string $urlSlugController;
    private array $format;

    /**
     * Construtor da classe.
     * Processa a URL e define o controlador a ser usado.
     */
    public function __construct()
    {
        $this->config();
        
        $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT) ?: '';
        $this->clearUrl();
        $this->urlArray = explode("/", $this->url);
        $this->urlController = isset($this->urlArray[0]) 
            ? $this->slugController($this->urlArray[0]) 
            : $this->slugController(CONTROLLERERRO);
        
        echo "Controller: {$this->urlController}<br>";        
    }

    /**
     * Limpa e formata a URL.
     */
    private function clearUrl()
    {
        $this->url = strip_tags(trim($this->url));
        $this->url = rtrim($this->url, "/");
        $this->format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]?;:.,\\\'<>°ºª ';
        $this->format['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr-------------------------------------------------------------------------------------------------';
        //$this->url = strtr(utf8_decode($this->url), utf8_decode($this->format['a']), $this->format['b']);
    }

    /**
     * Formata o nome do controlador para um formato de slug.
     * 
     * @param string $slugController Nome do controlador
     * @return string Nome do controlador formatado
     */
    private function slugController(string $slugController): string
    {
        $this->urlSlugController = strtolower($slugController);
        $this->urlSlugController = str_replace("-", " ", $this->urlSlugController);
        $this->urlSlugController = ucwords($this->urlSlugController);
        return str_replace(" ", "", $this->urlSlugController);
    }

    /**
     * Carrega e executa o controlador correspondente.
     */
    public function loadPage()
    {
        $classLoad = "\\Sts\\Controllers\\" . $this->urlController;
        $classPage = new $classLoad();
        $classPage->index(); 
    }
}
