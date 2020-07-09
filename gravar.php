<?php
include_once 'ProdutoDao.php';

$p = new Produto();
$p->setNome($_POST["nome"]);
$p->setPreco($_POST["preco"]);

$pd = new ProdutoDao();

if($pd->gravar($p)){
    echo "Gravado com sucesso";
}else{
    echo "Erro ao gravar";
}
?>
<br />
<a href="index.php">
Voltar</a>
