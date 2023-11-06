<?php

namespace App\DataSeeds;

final class MazeSeed
{
    public const PATTERNS = [
        ['content' => '$####', 'pattern' => '1', 'sequence' => '1'],
        ['content' => '.####', 'pattern' => '1', 'sequence' => '2'],
        ['content' => '....#', 'pattern' => '1', 'sequence' => '3'],
        ['content' => '###.#', 'pattern' => '1', 'sequence' => '4'],
        ['content' => '@...#', 'pattern' => '1', 'sequence' => '5'],
        ['content' => '.#$..', 'pattern' => '2', 'sequence' => '1'],
        ['content' => '####.', 'pattern' => '2', 'sequence' => '2'],
        ['content' => '##...', 'pattern' => '2', 'sequence' => '3'],
        ['content' => '##.##', 'pattern' => '2', 'sequence' => '4'],
        ['content' => '@..##', 'pattern' => '2', 'sequence' => '5'],
        ['content' => '...##', 'pattern' => '3', 'sequence' => '1'],
        ['content' => '.#...', 'pattern' => '3', 'sequence' => '2'],
        ['content' => '.###.', 'pattern' => '3', 'sequence' => '3'],
        ['content' => '.##..', 'pattern' => '3', 'sequence' => '4'],
        ['content' => '$##@#', 'pattern' => '3', 'sequence' => '5'],
        ['content' => '#...#', 'pattern' => '4', 'sequence' => '1'],
        ['content' => '..#..', 'pattern' => '4', 'sequence' => '2'],
        ['content' => '.###.', 'pattern' => '4', 'sequence' => '3'],
        ['content' => '.###.', 'pattern' => '4', 'sequence' => '4'],
        ['content' => '@###$', 'pattern' => '4', 'sequence' => '5'],
    ];

    public static function shufflePatterns(): array
    {
        $shuffled = self::PATTERNS;
        shuffle($shuffled);
        return $shuffled;
    }
}