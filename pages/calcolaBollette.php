<?php
require_once dirname(__FILE__) . "..\..\interfacce\createClassesAndInterfaces.php";



//function calcolaBollette1($consumoKw, $consumoSMC)
function calcolaBollette($consumoKw, $consumoSMC)
{

    $SMCTotali = ($consumoKw / 10.7) + $consumoSMC;                      //calcolo smc e kwh totali
    $KWhTotali = ($consumoSMC * 10.7) + $consumoKw;

    $metodiRiscaldamento = array();
    $metodiRiscaldamento[] = createClaseesAndinterfaces();

    //var_dump($metodiRiscaldamento);

    $bolletteRiscaldamento = array();
    foreach ($metodiRiscaldamento as $element) {
        //var_dump($element[0]);
        foreach ($element as $element) {
            //var_dump($element);
            //echo $element->intGetMateriaPrima();
            //echo("<br>");
            $a = $element->intGetMateriaPrima();
            if ($a == "Corrente") {

                $element->intSetConsumi($consumoKw);
                $element->intCalcolaUtilizzo($consumoSMC);
            } else {

                $element->intSetConsumi($consumoSMC);
                $element->intCalcolaUtilizzo($consumoKw);
            }

            $element->intCalcolaTotale();
            $intBolletta = createBolletta();
            $intBolletta->intSetCostoMateriaPrima($element->intGetTotale());
            $intBolletta->intSetCostoInstallazione($element->intGetCostoInstallazione());
            $intBolletta->intSetMetodoRiscaldamento($element->intGetObj());
            $bolletteRiscaldamento[] = $intBolletta;
        }
    }

    return $bolletteRiscaldamento;
    foreach ($bolletteRiscaldamento as $bollette) {

        $bollette->intCalcolaBolletta();
    }

    sort($bolletteRiscaldamento);

    return $bolletteRiscaldamento;
}
/*
//return di tutta la stringa con i tre valori
function calcolaBollette($consumoKw,$consumoSMC){
    $bolletteRiscaldamento = calcolaBollette1($consumoKw,$consumoSMC);
    foreach($bolletteRiscaldamento as $bollette){

        $bollette->intCalcolaBolletta();

    }

    sort($bolletteRiscaldamento);
    
    return $bolletteRiscaldamento;
}

//return sol costi bolletta 
function calcolaCostoBolletta($consumoKw,$consumoSMC){
    $bolletteRiscaldamento = calcolaBollette1($consumoKw,$consumoSMC);
    foreach($bolletteRiscaldamento as $bollette){

        $bollette->intGetTotale();

    }

    sort($bolletteRiscaldamento);
    
    return $bolletteRiscaldamento;
}

//
function calcolaBollettePerInstallazione($consumoKw,$consumoSMC){
    $bolletteRiscaldamento = calcolaBollette1($consumoKw,$consumoSMC);
    foreach($bolletteRiscaldamento as $bollette){

        $bollette->intGetCostoInstallazione();

    }

    sort($bolletteRiscaldamento);
    
    return $bolletteRiscaldamento;
}*/