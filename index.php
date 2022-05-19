<?php

    $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit doloremque laudantium voluptas commodi recusandae nisi ratione nihil molestias modi, impedit nam repellat officiis nobis magni? Tenetur odio expedita eum sit.
    Cumque labore quibusdam delectus assumenda fuga repellat consequuntur fugit omnis doloribus ex, minima aut quam veritatis accusamus expedita aperiam exercitationem a. Magnam numquam inventore magni, itaque alias praesentium tempora nobis.
    Fuga, itaque molestias? Ullam, accusantium omnis libero, at ipsa sit necessitatibus saepe unde eum officia possimus autem voluptatibus quam culpa laboriosam, quod odit perspiciatis? Qui blanditiis placeat sit quibusdam possimus.
    Alias necessitatibus minus debitis vel nihil excepturi, dicta harum mollitia vitae? Temporibus, quasi cum ipsum iste ab nihil ducimus adipisci nisi porro id magnam, consectetur vero aperiam a modi excepturi?
    Consectetur veniam molestias fuga. Dolore, totam veniam soluta id voluptas ipsam sed voluptates quisquam, laboriosam qui commodi iure perspiciatis quia aliquam tenetur, accusamus nesciunt rem eaque cupiditate praesentium? Odit, quidem.";

    echo($text);

    var_dump(strlen($text));

    $badword = $_GET["badword"];
    var_dump($badword);

    //var_dump(strpos($text, $badword));
    
    $censored_text = str_replace($badword, "***", $text);
    echo($censored_text);
    var_dump(strlen($censored_text));
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    
    

</body>
</html>