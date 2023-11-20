<?php

namespace App\DataSeeds;

final class BattleshipSeed
{
    public const LIPSUM = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas magna nisi, ultricies non erat non, accumsan placerat nunc. Vestibulum mauris mi, vulputate vel lectus at, aliquam mattis diam. Pellentesque ornare sapien a tempus tristique. Cras convallis nulla nibh, ut condimentum justo porttitor vitae. Integer vitae metus ac sem finibus gravida. Nullam consequat finibus velit, ut dignissim massa blandit vitae. Sed ut massa vel ligula rutrum ornare. Interdum et malesuada fames ac ante ipsum primis in faucibus.
Phasellus nec eros sed turpis varius gravida. Vestibulum venenatis eleifend metus, ac fermentum augue scelerisque et. Maecenas mi enim, bibendum fringilla vulputate sit amet, volutpat et elit. Donec posuere leo in justo porta iaculis. Morbi purus augue, mollis sit amet lobortis nec, rutrum eu nisl. Duis ornare commodo neque, sed hendrerit nibh ultricies ac. Aenean pulvinar dapibus massa quis malesuada. Aliquam suscipit lacus sed ornare dignissim. Vestibulum eu ligula arcu. Pellentesque nibh mi, feugiat id placerat et, gravida vel diam. Vestibulum fermentum aliquam lectus, a bibendum velit pretium et. Nunc consectetur, mauris sed aliquet finibus, nibh ipsum placerat ligula, eget posuere enim turpis eget leo.
Duis interdum aliquam dignissim. Duis dapibus, leo at vestibulum ultrices, nisi libero mollis erat, a laoreet velit erat ut nisl. Pellentesque nisl nunc, egestas sit amet porta sed, condimentum et felis. Etiam ut eros sapien. Fusce elementum ex pharetra sem cursus vulputate. Morbi commodo metus sem, quis varius purus vulputate eu. Mauris at ante quis felis pulvinar auctor. Proin id urna nec orci auctor ornare. Nam scelerisque, risus convallis feugiat dapibus, odio leo varius ex, a pulvinar orci justo sed massa.
Nunc pretium consequat fermentum. Praesent pharetra ante et ante euismod egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc at sodales risus. Ut pharetra, est vitae rutrum faucibus, orci nibh sollicitudin ligula, a sollicitudin libero leo a lacus. Donec viverra, tortor et convallis aliquet, nisi est eleifend nunc, eu pulvinar arcu est nec ante. Aliquam lectus nulla, suscipit consectetur pharetra non, volutpat nec ligula. Maecenas maximus tortor quis sodales mattis. Donec elementum elementum turpis dignissim lacinia.
Fusce accumsan eros et eros malesuada, sit amet hendrerit lorem cursus. Suspendisse libero dui, vulputate vulputate erat eget, placerat varius neque. Curabitur quis erat lectus. Pellentesque et elit ullamcorper metus aliquam tincidunt. Morbi pulvinar nisl justo, vitae ornare libero viverra sit amet. Vestibulum cursus, purus non consectetur pellentesque, nisl est rhoncus libero, sodales fringilla quam augue fermentum ante. Fusce auctor elementum purus sit amet aliquam. Pellentesque quis interdum nisi.";

    public const PATTERNS = [
        ['word1' => 'Click', 'word2' => 'Await', 'word3' => 'Treat'],
        ['word1' => 'Bench', 'word2' => 'Magic', 'word3' => 'Angry'],
        ['word1' => 'Unfit', 'word2' => 'Shift', 'word3' => 'First'],
        ['word1' => 'Elect', 'word2' => 'Style', 'word3' => 'Plain'],
        ['word1' => 'Smith', 'word2' => 'Sable', 'word3' => 'Stuff'],
        ['word1' => 'Husky', 'word2' => 'Lingo', 'word3' => 'Sneer'],
        ['word1' => 'Model', 'word2' => 'Close', 'word3' => 'Wives'],
        ['word1' => 'Buggy', 'word2' => 'Based', 'word3' => 'Valve'],
        ['word1' => 'Puppy', 'word2' => 'Mount', 'word3' => 'Dough'],
        ['word1' => 'Drink', 'word2' => 'Proof', 'word3' => 'Drain'],
        ['word1' => 'Tired', 'word2' => 'Exist', 'word3' => 'Blame'],
        ['word1' => 'Pride', 'word2' => 'Guess', 'word3' => 'Abyss'],
        ['word1' => 'Broke', 'word2' => 'Tardy', 'word3' => 'Blank'],
    ];

    public static function randomDigit(){
        return rand(0,9);
    }
    public static function randomLetter(){
        return chr(rand(97,107));
    }
    public static function getWordArray(){
        return explode(' ', self::LIPSUM);
    }
    public static function shufflePatterns(): array
    {
        $shuffled = self::PATTERNS;
        shuffle($shuffled);
        return $shuffled;
    }
}