<?php
include_once 'Pessoa.php';
//Cliente é uma pessoa
class Cliente extends Pessoa {
    //QUando trabalhamos com herança tudo que for PUBLIC e PROTECTED
    //da outra classe podemos ver

    private $cpf;

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function definirCliente(){
        echo "Ola, ".$this->getNome();
        echo "<br />Cpf...: ".$this->getCpf();
    }
}
?>
