<?php
    //Constantes
    define("DESC1", 0.12);
    define("DESC2", 0.07);
    //POO
    class Carro {
        private $modelo;
        private $ano;
        private $valor;
        private $desc;
        private $totalPagar;

        //Método construtor
        public function __construct($modelo, $ano, $valor){
            $this->modelo = $modelo;
            $this->ano = $ano;
            $this->valor = $valor;
        }

        //Métodos Getters e Setters
        public function getModelo(){
            return $this->modelo;
        }

        public function setModelo($modelo){
            $this->modelo = $modelo;
        }

        public function getAno(){
            return $this->ano;
        }

        public function setAno($ano){
            $this->ano = $ano;
        }
        
        public function getValor(){
            return $this->valor;
        }

        public function setValor($valor){
            $this->valor = $valor;
        }

        public function getDesc(){
            return $this->desc;
        }

        public function setDesc($desc){
            $this->desc = $desc;
        }

        public function getTotalPagar(){
            return $this->totalPagar;
        }

        //Funções
        //Calcula o valor total do carro com o devido desconto
        public function setTotalPagar(){
            $this->totalPagar = $this->getvalor() - ($this->getValor() * $this->getDesc());
        }

        //Calcula o desconto de acordo com o ano
        public function calcularDesc(){
            if($this->getAno() <= 2000){ //Carros do ano 2000 ou anteriores recebem 12% de desconto
                $this->setDesc(DESC1);
            }else{ //Carros acima do ano 2000 recebem 7% de desconto
                $this->setDesc(DESC2);
            }
        }

        //Converte o objeto em um array
        public function exibir():array{
            $carro = array(
                "modelo"=>$this->getModelo(),
                "ano"=>$this->getAno(),
                "valor"=>"R$" . $this->getValor(),
                "desconto"=>substr(strpbrk($this->getDesc(), '.,'), 1) . "%",
                "total"=>"R$" . $this->getTotalPagar()
            );

            return $carro;
        }

    }

?>