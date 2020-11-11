<?php
  class Produto{

    private $idproduto;
    private $nomeproduto;
    private $tipoproduto;
    private $precopruduto;
    private $marca;
    private $produtoimg;

    public function __construct(){

    }
    //gets & sets
    public function getIdproduto()
    {
        return $this->idproduto;
    }

    public function setIdproduto($idproduto)
    {
        $this->idproduto = $idproduto;

        return $this;
    }


    public function getNomeproduto()
    {
        return $this->nomeproduto;
    }


    public function setNomeproduto($nomeproduto)
    {
        $this->nomeproduto = $nomeproduto;

        return $this;
    }


    public function getTipoproduto()
    {
        return $this->tipoproduto;
    }


    public function setTipoproduto($tipoproduto)
    {
        $this->tipoproduto = $tipoproduto;

        return $this;
    }


    public function getPrecopruduto()
    {
        return $this->precopruduto;
    }


    public function setPrecopruduto($precopruduto)
    {
        $this->precopruduto = $precopruduto;

        return $this;
    }

    public function getMarca()
    {
      return $this->marca;
    }

    public function setMarca($marca)
    {
      $this->marca = $marca;
      return $this;
    }


    public function getProdutoimg()
    {
        return $this->produtoimg;
    }


    public function setProdutoimg($produtoimg)
    {
        $this->produtoimg = $produtoimg;

        return $this;
    }

    public function __toString(){
      "<br>Código: " .$this->idproduto.
      "<br>Nome: " .$this->nomeproduto.
      "<br>Tipo do produto: " .$this->tipoproduto.
      "<br> Preço: " .$this->precoproduto;
    }

?>
