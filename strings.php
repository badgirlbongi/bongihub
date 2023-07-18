<?php
// string is a sequence of character

//return the length of a string using (strlen)
echo strlen("Techcode Hive!"); // outputs 14

//counting words in a string use (str_word_count)
echo str_word_count("Techcode Hive!"); // outputs 2

//reversing a string using (strrev)
echo strrev("Techcode Hive!"); // outputs !eviH edochceT

//searching for a text within a string use(strpos)
echo strpos("Techcode Hive!", "Hive"); // outputs 9

//replace text within a string using (str_replace)
echo str_replace("Techcode", "Bee", "Techcode Hive!"); // outputs Bee Hive!

//addcslashes() function returns a string with backslashes in front of the specified characters
$str = addcslashes("Techcode Hive!","H");
echo($str);

//addslashes() function returns a string with backslashes in front of predefined characters.
$str = addslashes('What does "ASAP" mean?');
echo($str);

//The bin2hex() function converts a string of ASCII characters to hexadecimal values.
// The string can be converted back using the pack() function
$str = "Techcode Hive!";
echo bin2hex($str) . "<br>";
echo pack("T*",bin2hex($str)) . "<br>";
?>