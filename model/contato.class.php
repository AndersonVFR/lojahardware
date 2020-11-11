<?php
  class Contato{

    private $idcontato;
    private $nome;
    private $email;
    private $mensagem;

    public function __construct(){

    }

    public function __get($atributo){
      return $this->$atributo;
    }

    public function __set($atributo,$valor){
      $this->$atributo = $valor;
    }

    public function __toString(){
      return "<br>Código: " .$this->idcontato.
             "<br>Nome: " .$this->nome.
             "<br>Email: " .$this->email.
             "<br>Mensagem: ".$this->mensagem;

    }
  }

 ?>
