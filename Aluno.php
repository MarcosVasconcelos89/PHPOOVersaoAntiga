<?php
class Aluno {

    //Atributos - caracteristicas
    //Tudo que for public, todo mundo consegue ver
    public $matricula;
    protected $email;
    private $mensalidade;

    //Toda classe possui um metodo chamado constutor
    //metodos construtor sao os metodos iniciados junto com a classe
    //ALT + INSERT
    function __construct($matricula = null, $email = null, $mensalidade = null) {
        $this->matricula = $matricula;
        $this->email = $email;
        $this->mensalidade = $mensalidade;
    }

    //metodo de retorno da classe
    public function toString(){
        return $this->matricula.",".$this->email.",".$this->mensalidade;
    }

    //metodos - funções da classe - subprogramas
    public function efetuarMatricula(){
        $this->mensalidade = 120;
        echo "Valor da Matricula..: ".$this->mensalidade;
    }
    //chamado quando a classe e destruida
    public function  __destruct() {
        echo "<br />Classe Destruida";
    }

}
?>
