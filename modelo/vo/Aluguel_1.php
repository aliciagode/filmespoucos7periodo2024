<?php


class Aluguel {
    private $id;
    private $qtDias;
    private $descricao;
    private $preco;
    private $idUsuario;
    function getId() {
        return $this->id;
    }

    function getQtDias() {
        return $this->qtDias;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getPreco() {
        return $this->preco;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setQtDias($qtDias) {
        $this->qtDias = $qtDias;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }


}
