<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stringhe</title>
</head>
<body>
    <?php 
    
        echo "<h1>lorem ipsum</h1>";
        $str = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis magna augue, consectetur sodales orci ullamcorper, egestas tristique lectus. Fusce eget nisl at lacus tristique congue non eu urna. Cras mollis turpis sit amet molestie ultricies. Vestibulum a congue tortor. Aliquam volutpat, tortor sit amet varius tempor, ante felis consequat ante, sed pulvinar lorem nisi nec quam. Nunc est nisl, suscipit vitae tortor vitae, hendrerit ultrices nulla. In aliquet nisl purus, ac imperdiet enim commodo a. Aenean id auctor augue. Aliquam et felis ac leo aliquam ultrices. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam neque ex, lobortis sit amet lorem sed, vehicula viverra dui. Nulla porta luctus ex. Curabitur ac erat imperdiet, laoreet neque quis, suscipit eros.";

        echo "<p style ='color : green;'>".$str."</p>" ;
        echo "<br>";
        echo "<p style ='color : blue;'>". strtoupper($str) ."</p>" ;
        echo "<br>";
        echo "<p style ='color : red;'>". str_word_count($str) ."</p>";
        echo "<br>";
        echo "<p style ='color : yellow;'>". strlen($str) ."</p>" ;
        echo "<br>";
        // oppure 1 echo e tante variabili per ogni paragrafo
    ?>



</body>
</html>