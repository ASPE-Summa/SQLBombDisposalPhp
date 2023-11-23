<?php

namespace App\DataSeeds;

final class AdventurerSeed
{
    public const FIGHTER = 'fighter';
    public const WIZARD = 'wizard';
    public const ROGUE = 'rogue';
    public const WARLOCK = 'warlock';
    public const BARD = 'bard';
    public const DRUID = 'druid';
    public const RANGER = 'ranger';
    public const MONK = 'monk';

    public const STR = 'strength';
    public const DEX = 'dexterity';
    public const CON = 'constitution';
    public const INT = 'intelligence';
    public const WIS = 'wisdom';
    public const CHA = 'charisma';

    public const CHARACTERS = [
        [
            'name' => 'Brodal Mosk',
            'level' => 1,
            'class' => self::FIGHTER,
            self::STR => 10,
            self::DEX => 10,
            self::CON => 10,
            self::INT => 10,
            self::WIS => 10,
            self::CHA => 10
        ],
        [
            'name' => 'Athryth Moonwater',
            'level' => 9,
            'class' => self::RANGER,
            self::STR => 13,
            self::DEX => 20,
            self::CON => 14,
            self::INT => 11,
            self::WIS => 15,
            self::CHA => 9
        ],
        [
            'name' => 'Nator Pelim',
            'level' => 12,
            'class' => self::WARLOCK,
            self::STR => 8,
            self::DEX => 14,
            self::CON => 16,
            self::INT => 10,
            self::WIS => 13,
            self::CHA => 20
        ],
        [
            'name' => 'Zellia Gahyrst',
            'level' => 9,
            'class' => self::WARLOCK,
            self::STR => 11,
            self::DEX => 15,
            self::CON => 14,
            self::INT => 9,
            self::WIS => 13,
            self::CHA => 20
        ],
        [
            'name' => 'Captain Gar',
            'level' => 9,
            'class' => self::FIGHTER,
            self::STR => 15,
            self::DEX => 20,
            self::CON => 16,
            self::INT => 10,
            self::WIS => 12,
            self::CHA => 8
        ],
        [
            'name' => 'Turatyl',
            'level' => 4,
            'class' => self::FIGHTER,
            self::STR => 19,
            self::DEX => 13,
            self::CON => 14,
            self::INT => 8,
            self::WIS => 12,
            self::CHA => 11
        ],
        [
            'name' => 'Captain Linette',
            'level' => 12,
            'class' => self::FIGHTER,
            self::STR => 12,
            self::DEX => 20,
            self::CON => 14,
            self::INT => 10,
            self::WIS => 15,
            self::CHA => 9
        ],
        [
            'name' => ' Hudsen Immanen',
            'level' => 7,
            'class' => self::WIZARD,
            self::STR => 8,
            self::DEX => 14,
            self::CON => 14,
            self::INT => 17,
            self::WIS => 12,
            self::CHA => 11
        ],
        [
            'name' => 'Abdimelech',
            'level' => 16,
            'class' => self::WIZARD,
            self::STR => 10,
            self::DEX => 15,
            self::CON => 17,
            self::INT => 9,
            self::WIS => 12,
            self::CHA => 20
        ],
        [
            'name' => 'Captain Jeo',
            'level' => 1,
            'class' => self::WARLOCK,
            self::STR => 19,
            self::DEX => 15,
            self::CON => 13,
            self::INT => 10,
            self::WIS => 12,
            self::CHA => 17
        ],
        [
            'name' => 'Berrator the Fearsome',
            'level' => 2,
            'class' => self::ROGUE,
            self::STR => 10,
            self::DEX => 15,
            self::CON => 12,
            self::INT => 13,
            self::WIS => 14,
            self::CHA => 11
        ],
        [
            'name' => 'Jimiyu Besselach',
            'level' => 20,
            'class' => self::DRUID,
            self::STR => 9,
            self::DEX => 16,
            self::CON => 18,
            self::INT => 12,
            self::WIS => 20,
            self::CHA => 13
        ],
        [
            'name' => 'Golfimb',
            'level' => 3,
            'class' => self::FIGHTER,
            self::STR => 15,
            self::DEX => 15,
            self::CON => 15,
            self::INT => 8,
            self::WIS => 12,
            self::CHA => 10
        ],
        [
            'name' => 'Cade the Shunned',
            'level' => 5,
            'class' => self::WARLOCK,
            self::STR => 9,
            self::DEX => 14,
            self::CON => 13,
            self::INT => 10,
            self::WIS => 14,
            self::CHA => 17
        ],
        [
            'name' => 'Oolha',
            'level' => 1,
            'class' => self::MONK,
            self::STR => 12,
            self::DEX => 17,
            self::CON => 13,
            self::INT => 8,
            self::WIS => 15,
            self::CHA => 10
        ],
        [
            'name' => 'Measos',
            'level' => 7,
            'class' => self::RANGER,
            self::STR => 14,
            self::DEX => 17,
            self::CON => 13,
            self::INT => 10,
            self::WIS => 15,
            self::CHA => 8
        ],
        [
            'name' => 'Osanne',
            'level' => 20,
            'class' => self::ROGUE,
            self::STR => 10,
            self::DEX => 20,
            self::CON => 17,
            self::INT => 16,
            self::WIS => 8,
            self::CHA => 14
        ],
        [
            'name' => 'Xabat',
            'level' => 3,
            'class' => self::MONK,
            self::STR => 14,
            self::DEX => 15,
            self::CON => 13,
            self::INT => 10,
            self::WIS => 15,
            self::CHA => 8
        ],
        [
            'name' => 'Immilzin',
            'level' => 11,
            'class' => self::BARD,
            self::STR => 19,
            self::DEX => 10,
            self::CON => 13,
            self::INT => 9,
            self::WIS => 14,
            self::CHA => 14
        ],
        [
            'name' => 'Doiho',
            'level' => 12,
            'class' => self::ROGUE,
            self::STR => 8,
            self::DEX => 19,
            self::CON => 14,
            self::INT => 13,
            self::WIS => 16,
            self::CHA => 10
        ],
        [
            'name' => 'Mithienye of the Branlani',
            'level' => 3,
            'class' => self::BARD,
            self::STR => 8,
            self::DEX => 16,
            self::CON => 13,
            self::INT => 13,
            self::WIS => 10,
            self::CHA => 15
        ],
        [
            'name' => 'Vulorao Efrine',
            'level' => 3,
            'class' => self::WIZARD,
            self::STR => 8,
            self::DEX => 16,
            self::CON => 14,
            self::INT => 17,
            self::WIS => 12,
            self::CHA => 10
        ],
        [
            'name' => 'Fruni Zigith',
            'level' => 10,
            'class' => self::DRUID,
            self::STR => 15,
            self::DEX => 10,
            self::CON => 16,
            self::INT => 8,
            self::WIS => 19,
            self::CHA => 12
        ],
        [
            'name' => 'Gascon Beileruck',
            'level' => 10,
            'class' => self::DRUID,
            self::STR => 14,
            self::DEX => 9,
            self::CON => 14,
            self::INT => 10,
            self::WIS => 19,
            self::CHA => 12
        ],
        [
            'name' => 'Brodal Mosk',
            'level' => 1,
            'class' => self::FIGHTER,
            self::STR => 10,
            self::DEX => 10,
            self::CON => 10,
            self::INT => 10,
            self::WIS => 10,
            self::CHA => 10
        ],
        [
            'name' => 'Loro',
            'level' => 10,
            'class' => self::FIGHTER,
            self::STR => 20,
            self::DEX => 13,
            self::CON => 14,
            self::INT => 8,
            self::WIS => 14,
            self::CHA => 10
        ],
        [
            'name' => 'Juggor the Vile',
            'level' => 12,
            'class' => self::BARD,
            self::STR => 8,
            self::DEX => 14,
            self::CON => 16,
            self::INT => 11,
            self::WIS => 12,
            self::CHA => 20
        ],
        [
            'name' => 'Pierre Trovane',
            'level' => 10,
            'class' => self::BARD,
            self::STR => 13,
            self::DEX => 15,
            self::CON => 14,
            self::INT => 9,
            self::WIS => 11,
            self::CHA => 20
        ],
        [
            'name' => 'Ahna Jady Qurai',
            'level' => 9,
            'class' => self::WIZARD,
            self::STR => 10,
            self::DEX => 13,
            self::CON => 16,
            self::INT => 19,
            self::WIS => 13,
            self::CHA => 8
        ],
        [
            'name' => 'Julu',
            'level' => 3,
            'class' => self::DRUID,
            self::STR => 8,
            self::DEX => 13,
            self::CON => 16,
            self::INT => 11,
            self::WIS => 15,
            self::CHA => 12
        ],
        [
            'name' => 'Trahrek',
            'level' => 6,
            'class' => self::BARD,
            self::STR => 14,
            self::DEX => 14,
            self::CON => 13,
            self::INT => 6,
            self::WIS => 10,
            self::CHA => 17
        ],
        [
            'name' => 'Poyten Sallex',
            'level' => 3,
            'class' => self::DRUID,
            self::STR => 11,
            self::DEX => 14,
            self::CON => 15,
            self::INT => 9,
            self::WIS => 16,
            self::CHA => 13
        ],
        [
            'name' => 'Miggeo Dietrien',
            'level' => 3,
            'class' => self::FIGHTER,
            self::STR => 17,
            self::DEX => 19,
            self::CON => 18,
            self::INT => 10,
            self::WIS => 12,
            self::CHA => 8
        ],
        [
            'name' => 'Eamalas of House Sanai',
            'level' => 16,
            'class' => self::MONK,
            self::STR => 12,
            self::DEX => 20,
            self::CON => 13,
            self::INT => 8,
            self::WIS => 19,
            self::CHA => 11
        ],
        [
            'name' => 'Lord Tekren the Slayer',
            'level' => 12,
            'class' => self::DRUID,
            self::STR => 12,
            self::DEX => 13,
            self::CON => 16,
            self::INT => 8,
            self::WIS => 20,
            self::CHA => 12
        ],
        [
            'name' => 'Gurdin Brightwood',
            'level' => 4,
            'class' => self::RANGER,
            self::STR => 12,
            self::DEX => 19,
            self::CON => 14,
            self::INT => 8,
            self::WIS => 14,
            self::CHA => 10
        ],
        [
            'name' => 'Mundi Canath',
            'level' => 4,
            'class' => self::MONK,
            self::STR => 14,
            self::DEX => 17,
            self::CON => 15,
            self::INT => 8,
            self::WIS => 14,
            self::CHA => 10
        ],
        [
            'name' => 'Elion of Mithrendain',
            'level' => 12,
            'class' => self::ROGUE,
            self::STR => 10,
            self::DEX => 20,
            self::CON => 12,
            self::INT => 13,
            self::WIS => 17,
            self::CHA => 9
        ],
        [
            'name' => 'Xol Stoneseeker Bryratua',
            'level' => 3,
            'class' => self::FIGHTER,
            self::STR => 17,
            self::DEX => 13,
            self::CON => 15,
            self::INT => 8,
            self::WIS => 12,
            self::CHA => 10
        ],
        [
            'name' => 'Ne of the Lake People',
            'level' => 4,
            'class' => self::FIGHTER,
            self::STR => 18,
            self::DEX => 14,
            self::CON => 14,
            self::INT => 8,
            self::WIS => 12,
            self::CHA => 10
        ],
        [
            'name' => 'Elelyel Sakar',
            'level' => 1,
            'class' => self::WIZARD,
            self::STR => 10,
            self::DEX => 15,
            self::CON => 16,
            self::INT => 12,
            self::WIS => 12,
            self::CHA => 8
        ],
    ];
}