<?php

namespace src\Interfaces\Repositories;

use Illuminate\Support\Collection;
use src\Dto\GameDTO;

interface GameRepositoryInterface
{
    /**
     * @return Collection<GameDTO>
     */
    public function getAll(): Collection;

    public function findByHomeAndAwayTeams(string $homeTeam, string $awayTeam): ?GameDTO;
}