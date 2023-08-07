<?php

namespace src\Interfaces\Services;

use Illuminate\Support\Collection;
use src\Dto\GameDTO;

interface GameSummaryServiceInterface
{
    /**
     * @return Collection<GameDTO>
     */
    public function listGamesByStartTime(): Collection;
}