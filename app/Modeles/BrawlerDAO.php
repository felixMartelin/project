<?php

namespace App\Modeles;

use Illuminate\Database\Eloquent\Model;
use App\Metier\Brawler;
use DB;

class BrawlerDAO extends Model
{
    //
    public function getLesBrawlers()
    {
        $Brawlers= DB::table('Brawler')->get();
        $LesBrawlers=array();

        foreach($Brawlers as $brawler)
        {
            $idBrawler=$brawler->IdBrawler;
            $LesBrawlers[$idBrawler]=$this->creerObjetMetier($brawler);
        }

        return $LesBrawlers;
    }

    public function creerObjetMetier(\stdClass $unBrawler)
    {
        $leBrawler = new Brawler();
        $leBrawler->setIdBrawler($unBrawler->IdBrawler);
        $leBrawler->setNomBrawler($unBrawler->NomBrawler);
        $leBrawler->setRareteBrawler($unBrawler->RareteBrawler);
        $leBrawler->setDescBrawler($unBrawler->DescBrawler);
        $leBrawler->setVieBrawler($unBrawler->VieBrawler);
        $leBrawler->setDegatBrawler($unBrawler->DegatBrawler);
        $leBrawler->setDegatSuperBrawler($unBrawler->DegatSuperBrawler);
        $leBrawler->setStarPowerBrawler($unBrawler->StarPowerBrawler);
        $leBrawler->setDescStarPower($unBrawler->DescStarPower);

        return $leBrawler;
    }

    public function getUnBrawler($id)
    {
        $Brawlers= DB::table('Brawler')->get();

        foreach($Brawlers as $brawler)
        {
            $idBrawler=$brawler->IdBrawler;
            if($idBrawler==$id)
            {
                return $this->creerBrawler($brawler);
            }
        }
    }
}
