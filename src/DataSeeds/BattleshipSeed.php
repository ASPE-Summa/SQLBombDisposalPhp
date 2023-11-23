<?php

namespace App\DataSeeds;

final class BattleshipSeed
{
    public const LIPSUM = "lorem ipsum dolor sit amet consectetur adipiscing elit maecenas magna nisi ultricies non erat non accumsan placerat nunc vestibulum mauris mi vulputate vel lectus at aliquam mattis diam pellentesque ornare sapien a tempus tristique cras convallis nulla nibh ut condimentum justo porttitor vitae integer vitae metus ac sem finibus gravida nullam consequat finibus velit ut dignissim massa blandit vitae sed ut massa vel ligula rutrum ornare interdum et malesuada fames ac ante ipsum primis in faucibus phasellus nec eros sed turpis varius gravida vestibulum venenatis eleifend metus ac fermentum augue scelerisque et maecenas mi enim bibendum fringilla vulputate sit amet volutpat et elit donec posuere leo in justo porta iaculis morbi purus augue mollis sit amet lobortis nec rutrum eu nisl duis ornare commodo neque sed hendrerit nibh ultricies ac aenean pulvinar dapibus massa quis malesuada aliquam suscipit lacus sed ornare dignissim vestibulum eu ligula arcu pellentesque nibh mi feugiat id placerat et gravida vel diam vestibulum fermentum aliquam lectus a bibendum velit pretium et nunc consectetur mauris sed aliquet finibus nibh ipsum placerat ligula eget posuere enim turpis eget leo duis interdum aliquam dignissim duis dapibus leo at vestibulum ultrices nisi libero mollis erat a laoreet velit erat ut nisl pellentesque nisl nunc egestas sit amet porta sed condimentum et felis etiam ut eros sapien fusce elementum ex pharetra sem cursus vulputate morbi commodo metus sem quis varius purus vulputate eu mauris at ante quis felis pulvinar auctor proin id urna nec orci auctor ornare nam scelerisque risus convallis feugiat dapibus odio leo varius ex a pulvinar orci justo sed massa nunc pretium consequat fermentum praesent pharetra ante et ante euismod egestas class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos nunc at sodales risus ut pharetra est vitae rutrum faucibus orci nibh sollicitudin ligula a sollicitudin libero leo a lacus donec viverra tortor et convallis aliquet nisi est eleifend nunc eu pulvinar arcu est nec ante aliquam lectus nulla suscipit consectetur pharetra non volutpat nec ligula maecenas maximus tortor quis sodales mattis donec elementum elementum turpis dignissim lacinia fusce accumsan eros et eros malesuada sit amet hendrerit lorem cursus suspendisse libero dui vulputate vulputate erat eget placerat varius neque curabitur quis erat lectus pellentesque et elit ullamcorper metus aliquam tincidunt morbi pulvinar nisl justo vitae ornare libero viverra sit amet vestibulum cursus purus non consectetur pellentesque nisl est rhoncus libero sodales fringilla quam augue fermentum ante fusce auctor elementum purus sit amet aliquam pellentesque quis interdum nisi";

    public const PATTERNS = [
        ['word1' => 'click', 'word2' => 'await', 'word3' => 'treat'],
        ['word1' => 'bench', 'word2' => 'magic', 'word3' => 'angry'],
        ['word1' => 'unfit', 'word2' => 'shift', 'word3' => 'first'],
        ['word1' => 'elect', 'word2' => 'style', 'word3' => 'plain'],
        ['word1' => 'smith', 'word2' => 'sable', 'word3' => 'stuff'],
        ['word1' => 'husky', 'word2' => 'lingo', 'word3' => 'sneer'],
        ['word1' => 'model', 'word2' => 'close', 'word3' => 'wives'],
        ['word1' => 'buggy', 'word2' => 'based', 'word3' => 'valve'],
        ['word1' => 'puppy', 'word2' => 'mount', 'word3' => 'dough'],
        ['word1' => 'drink', 'word2' => 'proof', 'word3' => 'drain'],
        ['word1' => 'tired', 'word2' => 'exist', 'word3' => 'blame'],
        ['word1' => 'pride', 'word2' => 'guess', 'word3' => 'abyss'],
        ['word1' => 'broke', 'word2' => 'tardy', 'word3' => 'blank'],
        ['word1' => 'wheel', 'word2' => 'alarm', 'word3' => 'guest'],
        ['word1' => 'grass', 'word2' => 'stuck', 'word3' => 'spend'],
        ['word1' => 'mouth', 'word2' => 'fresh', 'word3' => 'teeth'],
        ['word1' => 'money', 'word2' => 'wound', 'word3' => 'heart'],
        ['word1' => 'puppy', 'word2' => 'wound', 'word3' => 'teeth'],
        ['word1' => 'husky', 'word2' => 'close', 'word3' => 'plain'],
        ['word1' => 'proof', 'word2' => 'drink', 'word3' => 'broke'],
        ['word1' => 'click', 'word2' => 'elect', 'word3' => 'wives'],
        ['word1' => 'treat', 'word2' => 'lingo', 'word3' => 'tardy'],
        ['word1' => 'wheel', 'word2' => 'alarm', 'word3' => 'smith'],
    ];

    public static function randomDigit(){
        return rand(0,9);
    }
    public static function randomLetter(){
        return chr(rand(97,106));
    }
    public static function getWordArray(){

        return explode(' ', self::LIPSUM);
    }
}