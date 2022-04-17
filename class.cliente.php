<?php

    //Trabalho feito por: Michael Monteiro de Lima e Miryam Estábila Nogueira de Souza;
    //Professor: Alexandre Domingues Goncalves;
    //Disciplina: Desenvolvimento Web II;
    //Turma: INFO 141 (2021.2).
    //Avalição do 2º Bimestre
    //Tema escolhido: Clinica Médica

    class Cliente {
        private $nome_cliente;
        private $id_cliente;
        private $sintomas;
        private $data_consulta;
        private $data_nascimento;
        private $endereco;


        public function setNome_cliente ( $novoNome_cliente ) {
            $this->nome_cliente = $novoNome_cliente;
        }
        public function setId_cliente ( $novoId_cliente ) {
            $this->id_cliente = $novoId_cliente;
        }
        public function setSintomas ( $novoSintomas ) {
            $this->sintomas = $novoSintomas;
        }
        public function setData_consulta ( $novoData_consulta ) {
            $this->data_consulta = $novoData_consulta;
        }
        public function setData_nascimento ( $novoData_nascimento ) {
            $this->data_nascimento = $novoData_nascimento;
        }
        public function setEndereco ( $novoEndereco ) {
            $this->endereco = $novoEndereco;
        }


        public function getNome_cliente () {
            return $this->nome_cliente;
        }
        public function getId_cliente () {
            return $this->id_cliente;
        }
        public function getSintomas () {
            return $this->sintomas;
        }
        public function getData_consulta () {
            return $this->data_consulta;
        }
        public function getData_nascimento () {
            return $this->data_nascimento;
        }
        public function getEndereco () {
            return $this->endereco;
        }
    }
?>