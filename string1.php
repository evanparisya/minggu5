<?php

$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, provident. Excepturi omnis officiis fuga, magnam vitae molestias maxime ab harum ipsum blanditiis aperiam, cum tenetur deserunt quia pariatur voluptas iure. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur quod cum tempora natus consequuntur beatae, minus sed, suscipit illum, dolores eum iure cumque explicabo hic laudantium saepe voluptates eos aut.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
?>