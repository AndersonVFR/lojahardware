<?php

class ConexaoBanco extends PDO{

  private static $instance = null;

  public function __construct($dns,$user,$pass){

    parent::__construct($dns,$user,$pass);
  }

  public static function getInstance(){

    if(!isset(self::$instance)){
      try{

      self::$instance = new ConexaoBanco ("mysql:dbname=lojahardware;host=localhost","root","");
    }catch(PDOException $e){
      echo "Erro ao conectar. " .$e;
    }
    }
    return self::$instance;
  }
}

 ?>
