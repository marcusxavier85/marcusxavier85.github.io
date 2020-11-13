<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pokedex Entry</title>
        <link href="normalize.css" type="text/css" rel="stylesheet">
        <link href="pokeFormStyle.css" type="text/css" rel="stylesheet">
    </head>
    <body class="pokemonFont backgroundImage">
        <header class="formHeader">Add a new Pokemon</header>

        <a href="pokedexDataBaseProject.php" class="backToPokedexButton"><button>Back to Pokedex</button></a>

        <form method="post" action="insertPokemon.php" class="formFormat">
            <div class="formInputs">
                URL for Pokemon image:
                <input type="url" name="addPokemonImage" required>
            </div>
            <div class="formInputs">
                Pokedex Entry #:
                <input type="number" min="1" max="896" name="addPokedexNo" required>
            </div>
            <div class="formInputs">
                Pokemon Name:
                <input type="string" name="addPokemonName" required>
            </div>
            <div class="formInputs checkboxType">
                Pokemon Type:
                <div class="formTypes">
                    Normal<input type="checkbox" name="addPokemonType[]" value="Normal">
                    Fire<input type="checkbox" name="addPokemonType[]" value="Fire">
                    Fighting<input type="checkbox" name="addPokemonType[]" value="Fighting">
                    Water<input type="checkbox" name="addPokemonType[]" value="Water">
                    Flying<input type="checkbox" name="addPokemonType[]" value="Flying">
                    Grass<input type="checkbox" name="addPokemonType[]" value="Grass">
                    Poison<input type="checkbox" name="addPokemonType[]" value="Poison">
                    Electric<input type="checkbox" name="addPokemonType[]" value="Electric">
                    Ground<input type="checkbox" name="addPokemonType[]" value="Ground">
                    Psychic<input type="checkbox" name="addPokemonType[]" value="Psychic">
                    Rock<input type="checkbox" name="addPokemonType[]" value="Rock">
                    Ice<input type="checkbox" name="addPokemonType[]" value="Ice">
                    Bug<input type="checkbox" name="addPokemonType[]" value="Bug">
                    Dragon<input type="checkbox" name="addPokemonType[]" value="Dragon">
                    Ghost<input type="checkbox" name="addPokemonType[]" value="Ghost">
                    Dark<input type="checkbox" name="addPokemonType[]" value="Dark">
                    Steel<input type="checkbox" name="addPokemonType[]" value="Steel">
                    Fairy<input type="checkbox" name="addPokemonType[]" value="Fairy">
                    ???<input type="checkbox" name="addPokemonType[]" value="???">
                </div>
            </div>
            <div class="formInputs">
                <input type="submit" value="submit" class="submitButton">
            </div>
        </form>

    </body>
</html>

