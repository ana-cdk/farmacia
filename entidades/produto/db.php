<?php
    function getProdutos($_conn, $categoria = null){

        $sql = "SELECT
            tb_produto.id,
            tb_produto.descricao,
            tb_produto.titulo,
            tb_produto.preco,
            tb_produto.conteudo,
            tb_categoria.nome AS categoria
        FROM
            tb_produto
        INNER JOIN tb_categoria
            ON tb_produto.id_categoria = tb_categoria.id";

        $sql .= $categoria ? ' WHERE id_categoria = ' . $categoria : '';
        #$result = $_conn -> query($sql);
        return mysqli_query($_conn, $sql);
        

    }
?>