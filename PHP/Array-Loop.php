<!-- Creating Arrays -->

<?php

$cities = array('Morgantown', 'Westover', 'Star City');

$names = ['Jing', 'Kelli', 'Mike', 'Lucy'];

$numbers = [122, 3332, 445, 321, 777, 931, 23];

function inspectArray($array)
{
    echo '<pre>';
    var_dump($array);
    echo '</pre>';
}

inspectArray($cities);
inspectArray($names);

//Assessing Array Items
echo $names[0] . ' is from ' . $cities[2] . '<br>';

//Changing Array Items

$names[1] = 'Annie';
echo 'The changes is made to ' . $names[1];

inspectArray($names);

//count
echo '<br>We have ' . count($names) . ' people in the list';

//sort
sort($numbers);

inspectArray($numbers);.

?>



<!-- For Loop -->

<?php for ($i = 1; $i <= 10; $i++) : ?>
<ul>I love the number <?php echo $i; ?> </ul> <br>
<?php endfor; ?>


<!-- While Loop -->

<?php $i = 1;
while ($i <= 10) : ?>
<li>I like the number <?php echo $i ?> </li>
<?php $i++;
endwhile; ?>