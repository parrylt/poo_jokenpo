<?php 
class ResultadoJKP
{
    private $nome="";
    private $escolha="";

    public function setNome ($pNome)
    {
        $this->nome = $pNome;
    }

    public function getNome ()
    {
        return $this->nome;
    }

    public function setEscolha ($pEscolha)
    {
        $this->escolha = $pEscolha;
    }

    public function getEscolha ()
    {
        return $this->escolha;
    }

    public function mostrarResultado()
    {
        $rand = rand(1, 3);

        if ($rand == 1 && $this->escolha == "Pedra")
        {
            echo $this->nome, ', Você empatou. O computador também escolheu pedra.<br><img src="./img/pedra.png" alt="Pedra">   vs    <img src="./img/pedra.png" alt="Pedra">';
        }
        else if ($rand == 2 && $this->escolha == "Pedra") {
            echo $this->nome, ', Você perdeu. O computador escolheu papel.<br><img src="./img/pedra.png" alt="Pedra">   vs    <img src="./img/papel.png" alt="Papel">';
        }
        else if ($rand == 3 && $this->escolha == "Pedra") {
            echo $this->nome, ', Você ganhou. O computador escolheu tesoura.<br><img src="./img/pedra.png" alt="Pedra">   vs    <img src="./img/tesoura.png" alt="Tesoura">';
        }
        

        if ($rand == 1 && $this->escolha == "Papel")
        {
            echo $this->nome, ', Você ganhou. O computador escolheu pedra.<br><img src="./img/papel.png" alt="Papel">   vs    <img src="./img/pedra.png" alt="Pedra">';
        }
        else if ($rand == 2 && $this->escolha == "Papel") {
            echo $this->nome, ', Você empatou. O computador também escolheu papel.<br><img src="./img/papel.png" alt="Papel">   vs    <img src="./img/papel.png" alt="Papel">';
        }
        else if ($rand == 3 && $this->escolha == "Papel") {
            echo $this->nome, ', Você perdeu. O computador escolheu tesoura.<br><img src="./img/papel.png" alt="Papel">   vs    <img src="./img/tesoura.png" alt="Tesoura">';
        }

        if ($rand == 1 && $this->escolha == "Tesoura")
        {
            echo $this->nome, ', Você perdeu. O computador escolheu pedra.<br><img src="./img/tesoura.png" alt="Tesoura">   vs    <img src="./img/pedra.png" alt="Pedra">';
        }
        else if ($rand == 2 && $this->escolha == "Tesoura") {
            echo $this->nome, ', Você ganhou. O computador escolheu papel.<br><img src="./img/tesoura.png" alt="Tesoura">    vs    <img src="./img/papel.png" alt="Papel">';
        }
        else if ($rand == 3 && $this->escolha == "Tesoura") {
            echo $this->nome, ', Você empatou. O computador também escolheu tesoura.<br><img src="./img/tesoura.png" alt="Tesoura">    vs    <img src="./img/tesoura.png" alt="Tesoura">';
        }

    }
}
?>