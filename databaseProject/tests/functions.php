<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class functions extends TestCase
{
    public function testSuccessDisplayPokemons() {
        $input = [['img_source'=>'blastoise.png', 'pokedex_no'=>9, 'name'=>'blastoise', 'type'=>'water']];
        $expectedOutcome = '<tr class="rowBox"><td><img class="pictureOfPokemon" src=blastoise.png alt="Picture of "blastoise</td><td>9</td><td>blastoise</td><td>water</td></tr>';
        $result = displayPokemon($input);
        $this->assertEquals($expectedOutcome, $result);
    }

    public function testFailureDisplayPokemons() {
        $input = [['img'=>'blastoise.png', 'pokedex_no'=>9, 'name'=>'blastoise', 'type'=>'water']];
        $expectedOutcome = '';
        $result = displayPokemon($input);
        $this->assertEquals($expectedOutcome, $result);
    }

    public function testFailureDisplayPokemonsTwo() {
        $input = [['img_source'=>'blastoise.png', 'pokedex'=>9, 'name'=>'blastoise', 'type'=>'water']];
        $expectedOutcome = '';
        $result = displayPokemon($input);
        $this->assertEquals($expectedOutcome, $result);
    }

    public function testFailureDisplayPokemonsThree() {
        $input = [['img_source'=>'blastoise.png', 'pokedex_no'=>9, 'nameeee'=>'blastoise', 'type'=>'water']];
        $expectedOutcome = '';
        $result = displayPokemon($input);
        $this->assertEquals($expectedOutcome, $result);
    }

    public function testFailureDisplayPokemonsFour() {
        $input = [['img_source'=>'blastoise.png', 'pokedex_no'=>9, 'name'=>'blastoise', 'typetttt'=>'water']];
        $expectedOutcome = '';
        $result = displayPokemon($input);
        $this->assertEquals($expectedOutcome, $result);
    }

    public function testMalformedDisplayPokemons () {
            $this->expectException(TypeError::class);
            $input = 89;
            $result = displayPokemon($input);

    }

}

