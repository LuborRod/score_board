<?php

namespace src\Services;

use src\Dto\GameDTO;
use src\Interfaces\Services\GameScoreServiceInterface;

class GameScoreService implements GameScoreServiceInterface
{
    public function update(GameDTO $gameDTO, int $homeTeamScore, int $awayTeamScore): void
    {
        // TODO: Implement update() method.
    }
}