<?

require __DIR__ . "/data.php";

$cities = [];

//pushes cities to a new array and loops through each unique city-value.

foreach ($teams as $key => $team) :
    array_push($cities, $team['city']);
endforeach;

foreach (array_unique($cities) as $city) :
    echo $city; ?><br><?
                    endforeach;
