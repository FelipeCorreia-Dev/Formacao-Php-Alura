<?php

// Crie uma classe ContaBancaria com métodos para realizar operações bancárias como depositar(), sacar() e consultarSaldo(). Em seguida, crie uma subclasse ContaCorrente que herda da classe ContaBancaria. Adicione um método específico para a subclasse, como cobrarTarifaMensal(), que desconta uma tarifa mensal da conta corrente.

// Além disso, no método sacar() da ContaCorrente, cobre uma taxa de saque também. Armazene essa taxa como uma constante da classe.

class ContaBancaria
{
    public function __construct(
        protected int $saldoEmCentavos,
        public readonly string $nomeTitular,
    ){

    }

    public function depositar($valorDeposito): void
    {
        if ($valorDeposito > 0) {
            $this->saldoEmCentavos += $valorDeposito;
        }
    }

    public function sacar($valorSaque): void
    {   
        if ($valorSaque > 0 && $valorSaque < $this->saldoEmCentavos) {
            $this->saldoEmCentavos -= $valorSaque;    
        }
    }

    public function consultarSaldo(): void
    {
        echo "O Saldo do Titular " . $this->nomeTitular . " é de: " . $this->saldoEmCentavos . PHP_EOL;    
    }
}

class ContaCorrente extends ContaBancaria 
{
    public function __construct(
        int $saldoEmCentavos,
        string $nomeTitular,
    ){
        parent::__construct(saldoEmCentavos:$saldoEmCentavos, nomeTitular:$nomeTitular);
    }
     protected float $taxaSaque = 0.005;
     protected float $tarifaMensal = 5;

     public function cobrarTarifaMensal(): void
     {
         $this->saldoEmCentavos -= $this->tarifaMensal;
     }
 

     public function sacarNaContaCorrente(int $valorASacar): void
     {
         $saqueTotal = $valorASacar + $valorASacar * $this->taxaSaque;
 
         if ($saqueTotal > 0 && $this->saldoEmCentavos >= $saqueTotal) {
             $this->saldoEmCentavos -= $saqueTotal;
         }
     }
}

$titular1 = new ContaBancaria(
    saldoEmCentavos: 200000,
    nomeTitular:"Felipe"
);

echo $titular1->consultarSaldo();

$titular1ContaCorrente = new ContaCorrente(
    saldoEmCentavos: 3000,
    nomeTitular: "Super Felps"
);

// $titular1ContaCorrente->cobrarTarifaMensal();
$titular1ContaCorrente->sacarNaContaCorrente(valorASacar:500);
echo $titular1ContaCorrente -> consultarSaldo();

