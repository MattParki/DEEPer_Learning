<?php

namespace App\Hydrator;

use App\DataProvider\DatabaseProvider;
use App\Entity\Fishing;

class EntityHydrator
{
    public function hydrateFishing(array $data): Fishing
    {
        $fishing = new Fishing();
        $fishing->id = $data['id'];
        $fishing->rods = $data['rods'];
        $fishing->bait = $data['bait'];
        $fishing->fish = $data['fish'];
        $fishing->posted = $data['create_time'];

        return $fishing;
    }

}
