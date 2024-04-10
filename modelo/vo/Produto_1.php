<?php


class Produto {
    private $id;
    private $nome;
    private $precoFornecedor;
    private $descricao;
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getPrecoFornecedor() {
        return $this->precoFornecedor;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setPrecoFornecedor($precoFornecedor) {
        $this->precoFornecedor = $precoFornecedor;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }


}
