<?php

require __DIR__ . "/ex001.php";
class ContasBancarias
{
    private int $saldoEmCentavos;
    public function __construct(
        private readonly string $nome,
        private readonly TipoConta $tipoConta,
    ){
        $this->saldoEmCentavos = 0;
    }

    public function depositar(int $valorADepositar): void
    {
        if ($valorADepositar > 0 ) {
            $this->saldoEmCentavos += $valorADepositar;
        } else{
            echo "Não foi possivel fazer o depósito";
        }
    }

    public function sacar($valorASacar): void 
    {
        if ($valorASacar > $this->saldoEmCentavos && $valorASacar > 0) {
            $this->saldoEmCentavos -= $valorASacar;
        }
    }
}

// $conta1 = new ContasBancarias(
//     nome: "Mano Felps",
//     saldo: 2000,
//     tipoConta: TipoConta::Corrente
// );

// var_dump( $conta1);
