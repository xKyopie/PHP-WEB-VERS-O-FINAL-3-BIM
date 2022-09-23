<?php

    class Cadastro{
        private $nome;
        private $email;
        private $senha;

        public function entrar(){
            echo "<p>";
            $this->nome = explode(" ", $this->nome);//pegar primeira parte do nome
            echo "<strong>Seja bem-vindo(a)</strong><br/>". $this->nome[0];
            echo "</p>";
        }

        public function __construct($nome, $email, $senha){
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
        }

        /*public function setNome(){
            $this->nome = $nome;
        } */

        public function getNome(){
          return $this->nome;
        }

        // public function setEmail(){
        //     $this->email= $email;
        // }

        public function getEmail(){
          return $this->email;
        }

        // public function setSenha(){
        //     $this->senha = $senha;
        // }

        public function getSenha(){
           return $this-> senha;
        }

    }


?>