<?php
class Produto {

    private $idproduto;
    private $nome;
    private $preco;

    public function getIdproduto() {
        return $this->idproduto;
    }

    public function setIdproduto($idproduto) {
        $this->idproduto = $idproduto;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }



}
?>
