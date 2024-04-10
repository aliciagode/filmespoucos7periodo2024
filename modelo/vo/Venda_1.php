<?php


class Venda {
    private $id;
    private $data;
    private $vendedor;
    private $idUsuario;
  
    
    function getId() {
        return $this->id;
    }

    function getData() {
        return $this->data;
    }

    function getVendedor() {
        return $this->vendedor;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setVendedor($vendedor) {
        $this->vendedor = $vendedor;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }


}


