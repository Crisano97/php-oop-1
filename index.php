<?php 
    require_once __DIR__ . '/Movie.php';
    $films = [];
    $films[] = new Movie("Shutter Island","Rachel Salado, paziente del manicomio criminale sull'isola di Shutter, scompare all'improvviso. L'agente federale Teddy Daniels, affiancato dall'ufficiale Chuck Aule, deve indagare per risolvere il mistero.","Martin Scorsese");
    $films[] = new Movie("Inception","Dom Cobb possiede una qualifica speciale: è in grado di inserirsi nei sogni altrui per prelevare i segreti nascosti nel più profondo del subconscio. Viene contattato da Saito, un potentissimo industriale giapponese.","Christopher Nolan");
    $films[0]->setVote(5);

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>
<body>
    <h1>FILMS:</h1>
    <div>
        <?php foreach ($films as $film){ ?>
            <h2>
                <?php echo $film->getTitle();?>
            </h2>
            <p>
                <?php echo $film->getPlot();?>
            </p>
            <span>
                <?php echo $film->getDirector();?>
            </span>
            <br>
            <span>VOTE:
                <?php echo $film->checkVote();?>
            </span>
        <?php } ?> 
        </div>
</body>
</html>