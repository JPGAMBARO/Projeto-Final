<?php
    require "../conexao.php";
    require "../model/categoria_model.php";

    $model = new CategoriaModel($con);
    //$model->inserir("Produtos de Limpeza");
    //$model->excluir(1);
    //$model->atualizar("Smartphone", 2);
    var_dump($model->buscarPorId(2));
?>