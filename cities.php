<?

require __DIR__ . "/data.php";

$cities = [];

foreach ($teams as $key => $team) :
    array_push($cities, $team['city']);
endforeach;

foreach (array_unique($cities) as $city) :
    echo $city; ?><br><?
                    endforeach;
