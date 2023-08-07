<?php

namespace src\Interfaces\Services;

use src\Dto\GameDTO;

interface GameServiceInterface
{
    public function start(GameDTO $gameDTO): void;

    public function finish(string $homeTeam, string $awayTeam): void;
}