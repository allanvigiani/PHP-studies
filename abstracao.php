<?php 

// Abstração
class Funcionario {
    // atributos
    public $nome;
    public $telContato;
    public $dependentes;

    // getters e setters
    /*
    function setNome($nome){
        $this->nome = $nome;
    }

    function getNome(){
        return $this->nome;
    }

    function setdependete($dependente=false){
        $this->dependentes = $dependente;
    }

    function getDependente(){
        return $this->dependentes;
    }
    */
    function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    function __get($atributo){
        return $this->$atributo;
    }

    // métodos
    function resumirFunc() {
        return $this->nome . ' tem o número de telefone: ' . $this->telContato;
    }

    function mudarDependentes($res) {
        if ($res == 'SIM') {
            $this->dependentes = true;
        }else if ($res == 'NAO'){
            $this->dependentes = false;
        }
    }

}

$funcionario = new Funcionario();
echo $funcionario->resumirFunc();

?>