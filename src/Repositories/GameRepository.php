<?php

namespace src\Repositories;

use Illuminate\Support\Collection;
use src\Dto\GameDTO;
use src\Interfaces\Repositories\GameRepositoryInterface;

class GameRepository implements GameRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function getAll(): Collection
    {
        // TODO: Implement getAll() method.
    }

    public function findByHomeAndAwayTeams(string $homeTeam, string $awayTeam): ?GameDTO
    {
        // TODO: Implement findByHomeAndAwayTeams() method.
    }
}