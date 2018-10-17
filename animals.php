<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Animal abuse</title>
    <style>
        body {
            font-family: sans-serif;
        }
        hr {
            margin: 15px auto;
        }
    </style>
</head>

<body>
<h1>Задание 1</h1>
<h2>1. Исходный массив</h2>
<h3>1.1. Многомерный массив</h3>
<?php
// многомерный массив
$animals = [
    'Africa' => ['Hippotragus leucophaeus', 'Panthera leo'],
    'Antarctica' => ['Aptenodytes forsteri', 'Pygoscelis antarctica'],
    'North America' => ['Martes americana', 'Arvicolinae', 'Cricetidae'],
    'South America' => ['Serrasalmus sanchezi', 'Eunectes murinus'],
    'Eurasia' => ['Laganosuchus', 'Panthera pardus', 'Cylindraspis inepta'],
    'Australia' => ['Myrmecobiidae', 'Thylacinus cynocephalus']
];
echo '<pre>';
print_r ($animals);
echo '</pre>';
?>
<hr>

<h2>2. Названия, состоящие из двух слов:</h2>
<?php
// одномерные массивы
$Africa = ['Hippotragus leucophaeus', 'Panthera leo'];
$Antarctica = ['Aptenodytes forsteri', 'Pygoscelis antarctica'];
$North_America = ['Martes americana', 'Arvicolinae', 'Cricetidae'];
$South_America = ['Serrasalmus sanchezi', 'Eunectes murinus'];
$Eurasia = ['Laganosuchus', 'Panthera pardus', 'Cylindraspis inepta'];
$Australia = ['Myrmecobiidae', 'Thylacinus cynocephalus'];
$all_animals = array_merge($Africa, $Antarctica, $North_America, $South_America, $Eurasia, $Australia); //объединены все названия зверей

echo '<pre>';
print_r ($all_animals); //выводится на экран массив во всеми животными (временно, для наглядности)
echo '</pre>';
?>

<hr>

<h2>3. "Фантазийные" названия:</h2>

<hr>

</body>
</html>