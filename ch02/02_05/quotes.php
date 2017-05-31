<?php
# this lesson explains the difference between single and double quotes

// $book = 'Hitchhiker\'s Guide to the Galaxy'; #the back slash \ is know as an escape sequence
            #the back slash tells the php engine that the apostrophe is part of the string
// $book = "Hitchhiker's Guide to the Galaxy";  # another way to do it

// $book = '"Hitchhiker\'s Guide to the Galaxy"';

$book = "\"Hitchhiker's Guide to the Galaxy\"";

// echo $book;

// echo 'I love $book';

echo "I love $book";
