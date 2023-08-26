<?php

class Usine
{
    private $id;
    private $nomProd;
    private $numProd;
    private $tempProd;
    private $coutProd;
    private $prixUnite;
    private $materiauRequi_id;
    private $materiauRequiQuantite;
    private $inventaire;

    public $active = false;

    public function __constructor(UsineManager $id, $nomProd, $numProd, $tempProd, $coutProd, $prixUnite, $materiauRequi_id, $materiauRequiQuantite, $inventaire)
    {
        $this->id = $id;
        $this->nomProd = $nomProd;
        $this->numProd = $numProd;
        $this->tempProd = $tempProd;
        $this->coutProd = $coutProd;
        $this->prixUnite = $prixUnite;
        $this->materiauRequi_id = $materiauRequi_id;
        $this->materiauRequiQuantite = $materiauRequiQuantite;
        $this->inventaire = $inventaire;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNomProd()
    {
        return $this->nomProd;
    }

    public function getNumProd()
    {
        return $this->numProd;
    }

    public function getTempProd()
    {
        return $this->tempProd;
    }

    public function getCoutProd()
    {
        return $this->coutProd;
    }

    public function getPrixUnite()
    {
        return $this->prixUnite;
    }

    public function getMateriauRequi_id()
    {
        return $this->materiauRequi_id;
    }

    public function getMateriauRequiQuantite()
    {
        return $this->materiauRequiQuantite;
    }

    public function getInventaire()
    {
        return $this->inventaire;
    }

    public function getActive()
    {
        return $this->active;
    }
}
