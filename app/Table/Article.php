<?php

namespace App\Table;

class Article
{

    public $id;
    public $titre;
    public $contenu;
    public $date;

    public function __get($key)
    {
        $method = 'get' . $key;
        return $this->$method();
    }

    public function getURL()
    {
        return 'index.php?p=article&id=' . $this->id;
    }

    public function getExtrait()
    {
        $html = '<p>' . substr($this->contenu, 0, 100) . ' [...]</p>';
        $html .= '<p><a href="' . $this->getURL() . '">Voir la suite</a></p>';
        return $html;
    }
}
