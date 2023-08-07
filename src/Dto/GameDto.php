<?php

namespace src\Dto;

use DateTimeInterface;

final class GameDTO {
    public function __construct(
        public string $homeTeam,
        public string $awayTeam,
        public DateTimeInterface $startTime,
        public int $homeTeamScore = 0,
        public int $awayTeamScore = 0,
    ) {}
}