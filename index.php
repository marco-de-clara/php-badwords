<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-badwords</title>
    </head>
    <body>
        <?php
            // sample text
            $text = "Sopra la panca la capra campa, sotto la panca la capra crepa.";
            // sample text in a paragraph
            $paragraph = '<p>' . $text . '</p>';
            // paragraph's length
            $length = strlen($paragraph);
            // get word from user
            $badword = $_GET['word'];

            // if the badword is in the sample text
            if(strpos($text, $badword) !== FALSE) {
                // replace badword/s with *** 
                $censored_text = str_replace($badword, '***', $paragraph);
                // print censored text
                echo 'The text is:' . $censored_text;
                // print paragraph's length
                echo "The text's length is " . $length . '.';
            }   
        ?>
    </body>
</html>