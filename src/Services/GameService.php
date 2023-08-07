<?php

namespace src\Services;

use src\Dto\GameDTO;
use src\Interfaces\Services\GameServiceInterface;

class GameService implements GameServiceInterface
{
    public function start(GameDTO $gameDTO): void
    {
        // TODO: Implement start() method.
    }

    public function finish(string $homeTeam, string $awayTeam): void
    {
        // TODO: Implement finish() method.
    }
}