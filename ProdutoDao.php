<?php
include_once 'Dao.php';
include_once 'Produto.php';
class ProdutoDao extends Dao {

    public function gravar(Produto $p){
        $this->sql = "INSERT INTO produto VALUES(NULL,
                        '".$p->getNome()."',".$p->getPreco().")";
        if($this->execute()){
            return true;
        }else{
            return false;
        }
    }

}
?>
