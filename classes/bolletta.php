<?php
class Bolletta
{
    protected $costoMateriaPrima;
    protected $spesaTrasGestCont;
    protected $oneri;
    protected $spesaFissaVendita; //QVD o PVC
    protected $totale;
    protected $installazione;
    protected Riscaldamento $metodoRiscaldamento;
    //protected $metodoRiscaldamento;

    public function __construct()
    {
        $this->spesaTrasGestCont = 96;
        $this->oneri = 47;
        $this->spesaFissaVendita = 70;
    }

    public function SetCostoMateriaPrima($spesa)
    {
        $this->costoMateriaPrima = $spesa;
    }

    public function GetSpesaMateriaPrima()
    {
        return "Spesa materia {" . $this->costoMateriaPrima . "}";
    }

    public function __toString()
    {
        return "\nCosto bolletta " . $this->metodoRiscaldamento->ToString() . ": <b>" . round($this->totale, 4) + $this->installazione . "€</b> per il primo anno, di cui <b>" . $this->installazione . "€</b> per l'installazione, per gli anni successivi il prezzo sarebbe pari a <b>" . round($this->totale, 4) . "€</b>\n";
    }

    public function CalcolaBolletta()
    {
        $this->totale = $this->costoMateriaPrima + $this->oneri + $this->spesaTrasGestCont + $this->spesaFissaVendita;
    }

    public function GetTotale()
    {
        return $this->totale;
    }

    public function SetCostoInstallazione($costoInt)
    {
        $this->installazione = $costoInt;
    }

    public function SetMetodoRiscaldamento(Riscaldamento $metodo /*$metodo*/)
    {
        $this->metodoRiscaldamento = $metodo;
    }

    //public Riscaldamento function GetMetodoRiscaldamento()
    public function GetMetodoRiscaldamento()
    {
        return $this->metodoRiscaldamento;
    }
    // da segnare sulla relazione
    public function GetCostoTotalPlusInstallazione()
    {
        return (round($this->totale, 4) + $this->installazione);
    } //Costo totale

    public function GetCostoInstallazione()
    {
        return $this->installazione;
    }
    //return nome del metodo di riscaldamento
    public function GetNomeMetodoRiscaldamento(){
        return $this->metodoRiscaldamento->ToString();
    }
}
