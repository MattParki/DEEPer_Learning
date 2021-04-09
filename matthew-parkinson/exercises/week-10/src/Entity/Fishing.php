<?php
use App\Hydrator;
use App\Hydrator\EntityHydrator;
namespace App\Entity;
$fishing = \App\Entity\Fishing::class;



class Fishing
{
    public int $id;
    public string $bait;
    public string $fish;
    public string $rods;
    public string $posted;
}
