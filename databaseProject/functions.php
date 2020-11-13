<?php

/**
 * Links the PHP to the correct Database
 *
 * @param none
 *
 * @return PDO, returning link to database
 */
function getDatabaseObject(): PDO
{
    $db = new PDO('mysql:host=localhost;dbname=marcus_pokedex', 'marcusxavier85', 'ibY9k77!');

    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $db;
}

/**
 * Grabs the data we require from the kanto_pokedex table
 *
 * @param $db, data type is a PDO, is the link to the table
 *
 * @return mixed, returning an associative array of all data listed in kanto_pokedex
 */
function getPokemons(PDO $db): array
{
    $query = $db->prepare('SELECT `id`, `pokedex_no`, `name`, `type`, `img_source` FROM `kanto_pokedex`;');

    $query->execute();

    return $query->fetchAll();
}

/**
 * Displays data gathered in the table on the browser
 *
 * @param $pokemons, nested associative array, used as the base to grab the data from
 *
 * @return string, returning a concatination of all data in one array and then doing it again for the other nested arrays
 */
function displayPokemon(array $pokemons): string
{
    $result = '';
    foreach ($pokemons as $pokemon) {
        if (
            array_key_exists('img_source', $pokemon) &&
            array_key_exists('pokedex_no', $pokemon) &&
            array_key_exists('name', $pokemon) &&
            array_key_exists('type', $pokemon)
        ) {
            $result .= '<tr class="rowBox">';
            $result .= '<td><img class="pictureOfPokemon" src=' . $pokemon['img_source'] . ' alt="Picture of "' . $pokemon['name'] . '</td>';
            $result .= '<td>' . $pokemon['pokedex_no'] . '</td>';
            $result .= '<td>' . $pokemon['name'] . '</td>';
            $result .= '<td>' . $pokemon['type'] . '</td>';
            $result .= '</tr>';
        }
    }
    return $result;
}

/**
 * Adds data to the database
 *
 * @param none
 *
 * @return array, when returned the data will be sent to the database
 */
function addPokemonToDatabase()
{
    if (
        (isset($_POST['addPokedexNo'])) &&
        (isset($_POST['addPokemonName'])) &&
        (isset($_POST['addPokemonType'])) &&
        (isset($_POST['addPokemonImage']))
    ) {
        $dataBase = getDatabaseObject();
        $pokedexNumber = $_POST['addPokedexNo'];
        $pokemonName = $_POST['addPokemonName'];
        $pokemonType = implode(' ', $_POST['addPokemonType']);
        $pokemonImage = $_POST['addPokemonImage'];
        $insert = $dataBase->prepare('INSERT INTO `kanto_pokedex` (`pokedex_no`, `name`, `type`, `img_source`) VALUES (?, ?, ?, ?);');
        $updateCheck = $insert->execute([$pokedexNumber, $pokemonName, $pokemonType, $pokemonImage]);
        if ($updateCheck) {
            header("Location: pokedexDataBaseProject.php");
        } else {
            header("Location: pokedexForm.php");
        }
    } else {
        header("Location: pokedexForm.php");
    }
}