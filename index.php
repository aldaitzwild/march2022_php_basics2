<?php

echo '<p>boucle de 0 à 9</p>';
for ($i = 0; $i < 10; $i++) echo "$i ";
echo '<hr>';

echo '<p>boucle de 0 à 10</p>';
for ($i = 0; $i < 11; $i++) echo "$i ";
echo '<hr>';

echo '<p>boucle de 1 à 10</p>';
for ($i = 1; $i < 11; $i++) echo "$i ";
echo '<hr>';

echo '<p>boucle de 10 à 0</p>';
for ($i = 10; $i > -1; $i--) echo "$i ";
echo '<hr>';

echo '<p>boucle de 25 à 50 de 5 en 5</p>';
for ($i = 25; $i < 51; $i += 5) echo "$i ";
echo '<hr>';

echo '<p>boucle de 10 à -10 de 3 en 3</p>';
for ($i = 10; $i > -11; $i -= 3) echo "$i ";
echo '<hr>';

echo '<hr>';

// Conditions

$name = 'Darth Vader';

/*if ($name === 'Darth Vader' || $name === 'Darth Sidious')
{
    echo 'Sith';
} elseif ($name === 'Yoda') {
    echo 'Jedi';
} else {
    echo 'Sans doute une personne sans pouvoir.';
}*/

echo match ($name) {
    'Darth Vader', 'Darth Sidious' => 'Sith',
    'Yoda' => 'Jedi',
    default => 'Sans doute une personne sans pouvoir.',
};

echo '<hr>';
echo '<hr>';
//Tableau 1
$jedis = ['Obi-Wan Kenobi', 'Yoda', 'Luke Skywalker', 'Windu', 'Qui-gon Jinn'];
$jedis[] = 'Rey';

echo '<p>Jedi le plus vieux : ' .$jedis[1]. '</p>';

echo '<ul>';
foreach($jedis as $jedi) {
    echo "<li>$jedi</li>";
}
echo '</ul>';


echo '<hr><hr>';

//Tableau 2
$characters = [
    'Yoda' => 900,
    'Leia' => 19,
    'Luke Skywalker' => 19,
    'Darth Vader' => 46,
    'Chewbacca' => 200,
];

$characters['Han Solo'] = 29;

asort($characters);

echo '<ul>';
foreach($characters as $name => $age) {
    echo "<li>$name : $age</li>";
}
echo '</ul>';

ksort($characters);

echo '<ul>';
foreach($characters as $name => $age) {
    echo "<li>$name : $age</li>";
}
echo '</ul>';


echo '<ul>';
foreach($characters as $name => $age) {
    if($age > 100)
        echo "<li>$name : $age</li>";
}
echo '</ul>';



echo '<hr><hr>';

//Tableau 3
$families = [
    'Jedi' => ['Luke Skywalker', 'Yoda', 'Windu'],
    'Sith' => ['Darth Vader', 'Darth Maul', 'Dooku'],
    'Gungan' => ['Jar jar Binks'],
    'Human' => ['Han Solo', 'Leia'],
];

foreach($families as $family => $members) {
    echo "<h2>$family</h2>";
    echo '<ul>';
    foreach($members as $member) {
        echo "<li>$member</li>";
    }
    echo '</ul>';
}

foreach($families as $family => $members) {
    echo "<h2>$family : " . count($members) . "</h2>"; 
}