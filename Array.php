<?php

function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

function breakLine()
{
    echo '<br>';
}


$roads = array('Beechuest Ave', 'University Ave', 'Van Voorhis Rd');
$transportModes = ['walking', 'bicycling', 'transit', 'driving', 'rolling'];

inspect($roads);
inspect($transportModes);

echo $roads[1];
breakLine();
echo $transportModes[0];

//Change
$roads[0] = 'Nono Ave';
inspect($roads);

//Count
echo count($transportModes);

//Sort
sort($transportModes);
inspect($transportModes);

rsort($transportModes);
inspect($transportModes);

//Add to the end --- array_push 
array_push($transportModes, 'keep rolling');
inspect($transportModes);

//Remove the last one --- array_pop 
array_pop($roads);
inspect($roads);

//Remove the first --- array_shift
array_shift($transportModes);
inspect($transportModes);

//Add at the beginning --- array_unshift
array_unshift($transportModes, 'standing');
inspect($transportModes);

//Return a slice
$particalTransportMode = array_slice($transportModes, 0, 3);
inspect($particalTransportMode);

//Removes a portion of an array and replaces it with something else
array_splice($transportModes, 1, 2, ['seating in a bus', 'waiting']);
inspect($transportModes);
