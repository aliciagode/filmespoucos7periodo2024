<?php


class FluxoFinanceiro {

    private $id;
    private $descricao;
    private $dataPagamento;
    private $dataVencimento;
    private $valor;
    private $fluxo;
    private $situacao;    
    private $idVenda;    
    private $idUsuario;    
    
    function getId() {
        return $this->id;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getDataPagamento() {
        return $this->dataPagamento;
    }

    function getDataVencimento() {
        return $this->dataVencimento;
    }

    function getValor() {
        return $this->valor;
    }

    function getFluxo() {
        return $this->fluxo;
    }

    function getSituacao() {
        return $this->situacao;
    }

    function getIdVenda() {
        return $this->idVenda;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setDataPagamento($dataPagamento) {
        $this->dataPagamento = $dataPagamento;
    }

    function setDataVencimento($dataVencimento) {
        $this->dataVencimento = $dataVencimento;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setFluxo($fluxo) {
        $this->fluxo = $fluxo;
    }

    function setSituacao($situacao) {
        $this->situacao = $situacao;
    }

    function setIdVenda($idVenda) {
        $this->idVenda = $idVenda;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }


}
