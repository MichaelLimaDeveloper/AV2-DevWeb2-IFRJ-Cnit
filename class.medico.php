<?php

    //Trabalho feito por: Michael Monteiro de Lima e Miryam Estábila Nogueira de Souza;
    //Professor: Alexandre Domingues Goncalves;
    //Disciplina: Desenvolvimento Web II;
    //Turma: INFO 141 (2021.2).
    //Avalição do 2º Bimestre
    //Tema escolhido: Clinica Médica

    class Medico {
        private $nome_medico;
        private $id_medico;
        private $especialidade_medica;
        private $numero_consultorio;
        private $quantidade_auxiliar;
        private $turno;


        public function setNome_medico ( $novoNome_medico ) {
            $this->nome_medico = $novoNome_medico;
        }
        public function setId_medico ( $novoId_medico ) {
            $this->id_medico = $novoId_medico;
        }
        public function setEspecialidade_medica ( $novaEspecialidade_medica ) {
            $this->especialidade_medica = $novaEspecialidade_medica;
        }
        public function setNumero_consultorio ( $novoNumero_consultorio ) {
            $this->numero_consultorio = $novoNumero_consultorio;
        }
        public function setQuantidade_auxiliar ( $novoQuantidade_auxiliar ) {
            $this->quantidade_auxiliar = $novoQuantidade_auxiliar;
        }
        public function setTurno ( $novoTurno ) {
            $this->turno = $novoTurno;
        }


        public function getNome_medico () {
            return $this->nome_medico;
        }
        public function getId_medico () {
            return $this->id_medico;
        }
        public function getEspecialidade_medica () {
            return $this->especialidade_medica;
        }
        public function getNumero_consultorio () {
            return $this->numero_consultorio;
        }
        public function getQuantidade_auxiliar () {
            return $this->quantidade_auxiliar;
        }
        public function getTurno () {
            return $this->turno;
        }
    }
?>