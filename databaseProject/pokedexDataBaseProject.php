<?php
//pokedex Code

require('functions.php');

$db = getDatabaseObject();

$pokemons = getPokemons($db);

?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pokedex</title>
        <link href="normalize.css" type="text/css" rel="stylesheet">
        <link href="pokedexStyle.css" type="text/css" rel="stylesheet">
    </head>
    <body class="backgroundImage">
        <header class="title pokemonFont">
            Pokedex
        </header>

        <a href="pokedexForm.php" class="addNewPokemonButtonBorder"><button class="addNewPokemonButton">Add new Pokemon</button></a>

        <table class="mainTable pokemonFont">
            <tr class="rowBox">
                <th>Image</th>
                <th>Pokedex Entry</th>
                <th>Name</th>
                <th>Type</th>
            </tr>
                <?php echo displayPokemon($pokemons) ?>
        </table>

    </body>
</html>
