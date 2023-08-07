<?php

namespace src\Interfaces\Services;

use src\Dto\GameDTO;

interface GameScoreServiceInterface
{
    public function update(GameDTO $gameDTO, int $homeTeamScore, int $awayTeamScore): void;
}