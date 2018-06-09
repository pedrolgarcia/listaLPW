<?php
    /*Pedro Lopes Garcia - 17/05/2018
    Faça um algoritmo que receba o preço de custo e o preço de venda de 40 produtos. Mostre como resultado se
    houve lucro, prejuízo ou empate para cada produto. Informe media de preço de custo e do preço de venda.*/

    class Produto {
        private $nome;
        private $precoCusto;
        private $precoVenda;
        private $status;

        public function __construct($nome, $precoCusto, $precoVenda){
            $this->nome = $nome;
            $this->precoCusto = $precoCusto;
            $this->precoVenda = $precoVenda;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getPrecoCusto(){
            return $this->precoCusto;
        }

        public function setPrecoCusto($precoCusto){
            $this->precoCurso = $precoCusto;
        }

        public function getPrecoVenda(){
            return $this->precoVenda;
        }

        public function setPrecoVenda($precoVenda){
            $this->precoVenda = $precoVenda;
        }

        public function getStatus(){
            return $this->status;
        }

        public function setStatus($status){
            $this->status = $status;
        }

        public function exibir(){
            return array(
                "Produto"=>$this->getNome(),
                "Preço de custo"=>$this->getPrecoCusto(),
                "Preço de venda"=>$this->getPrecoVenda(),
                "Status"=>$this->getStatus()
            );
        }

        public function calcular(){
            if($this->getPrecoVenda() < $this->getPrecoCusto()){
                $this->setStatus("Prejuízo");
            } elseif ($this->getPrecoVenda() > $this->getPrecoCusto()){
                $this->setStatus("Lucro");
            } else {
                $this->setStatus("Empate");
            }
        }

    }

?>