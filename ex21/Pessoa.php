<?php
    /*Pedro Lopes Garcia - 16/05/2018
    Escrever um algoritmo que leia os dados de “N” pessoas (nome, sexo, idade e saúde) e informe se está apta ou não
    para cumprir o serviço militar obrigatório. Informe os totais.*/

    class Pessoa {
        private $nome;
        private $sexo;
        private $idade;
        private $saude;
        private $apto;

        public function __construct($nome, $sexo, $idade, $saude){
            $this->nome = $nome;
            $this->sexo = $sexo;
            $this->idade = $idade;
            $this->saude = $saude;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getSexo(){
            return $this->sexo;
        }

        public function setSexo($sexo){
            $this->sexo = $sexo;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function setIdade($idade){
            $this->idade = $idade;
        }

        public function getSaude(){
            return $this->saude;
        }

        public function setSaude($saude){
            $this->saude= $saude;
        }

        public function getApto(){
            return $this->apto;
        }

        public function setApto($apto){
            if($apto){
                $this->apto = "Apto";
            }else{
                $this->apto = "Inapto";
            }
        }

        public function exibir(){
            return array(
                "Nome"=>$this->getNome(),
                "Sexo"=>$this->getSexo(),
                "Idade"=>$this->getIdade(),
                "Saude"=>$this->getSaude(),
                "Status"=>$this->getApto()
            );
        }

        public function verificarAptidao(){
            if($this->getSaude() === "Boa" AND $this->getIdade() >= 18 AND $this->getSexo() === "Masculino"){
                $this->setApto(true);
            }else{
                $this->setApto(false);
            }
        }

    }

?>