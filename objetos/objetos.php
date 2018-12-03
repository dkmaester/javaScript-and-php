<?php

class pagina
{
	public $title = "<title>Objetos</title>";
	public $keywords = "TLA Consulting, Objetos";
   	public $styles = ""









   public function __get($name)
   {
      return $this->$name;
    }
    public function __set ($name, $value)
    {
      $this->$name = $value;  
    }
}

?>