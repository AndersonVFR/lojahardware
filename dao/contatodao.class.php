<?php

  require '../persistence/conexaobanco.class.php';

  class ContatoDAO {

    private $conexao = null;

    public function __construct(){

      $this->conexao = ConexaoBanco::getInstance();
    }

    public function __destruct(){

    }


  public function cadastrarContato($c){
      try{
        $stat = $this->conexao->prepare("INSERT INTO contato (idcontato,nome,email,mensagem)VALUES(NULL,?,?,?)");

        $stat->bindValue(1,$c->nome);
        $stat->bindValue(2,$c->email);
        $stat->bindValue(3,$c->mensagem);

        $stat->execute();
      }catch(PDOException $e){
        echo "Erro ao cadastrar contato" .$e;
      }
  }


  public function buscarContatos(){
    try {

      $stat = $this->conexao->query("SELECT * FROM contato");

      $array = array();
      $array = $stat->fetchALL(PDO::FETCH_CLASS,'Contato');

      $this->conexao = null;
      return $array;

    }catch(PDOException $e){
      echo "Não foi possivel buscar os contatos." .$e;
    }
  }

  public function deletarContato($idcontato){

    try {
      $stat = $this->conexao->prepare("DELETE FROM contato WHERE idcontato=?");

      $stat->bindValue(1,$idcontato);

      $stat->execute();

      $this->conexao = null;
    } catch (PDOException $e){
      echo "não foi possível excluir. " .$e;
    }
  }

public function alterarContato($c){

  try {
    $stat = $this->conexao->prepare("UPDATE contato SET nome = ?, email = ?, mensagem = ? WHERE idcontato = ?");

    $stat->bindValue(1,$c->nome);
    $stat->bindValue(2,$c->email);
    $stat->bindValue(3,$c->mensagem);
    $stat->bindValue(4,$c->idcontato);

    $stat->execute();

    $this->conexao = null;
  } catch (PDOException $e) {
    echo "Não foi possível fazer a alteração. " .$e;
  }
}




}
 ?>
