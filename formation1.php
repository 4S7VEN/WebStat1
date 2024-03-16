<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formation initiale</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@200..700&family=Protest+Riot&display=swap" rel="stylesheet">

</head>
<body>
    <?php
        include('header.php');
    ?>

    

    
    <section class="corps">
        <section> <!--introducion-->
            <p>
                Notre site propose deux types de formation:
                <br>Il y a les <em>formations initiales</em> et les <em>formations professionelles</em>
                <br>Dans chaque formation, nous proposerons trois modules principaux:
                <ul class="liste">
                    <li>Les langues</li>
                    <li>Domaine informatique</li>
                    <li>Secteur tertiaire</li>
                </ul>
            </p>
        </section>

    
        <div class="formation initiale">
            <p>
                Pour tout initiateur ou débutants, on aura au programme :
            </p>
        
            <div class="langues"> 
                <div class="textlangues">
                <p>
                    <em>Les langues</em>
                    <br>Les quatre langues internationaux étudiées :
                </p>
                
                <ul>
                    <li>Le français</li>
                    <li>L'anglais</li>
                    <li>L'allemand</li>
                    <li>Le chinois</li>
                </ul>
                </div>
                <div class="illustration1">
                    <img src="images/illustration1.jpg" alt="illustration1">
                </div>
            </div>
            
            <div class="informatique">
                <div class="textinfo">
                    <p>
                        <em>Le domaine informatique</em>
                        <br>Des points essentiels de l'informatique seront entamés car c'est un domaine incontournable du monde actuel:
                    </p>
                    <ul>
                        <li>Bureautiques</li>
                        <li>Programmation</li>
                        <li>Réseaux et systèmes</li>
                    </ul>
                </div>
                
                <div class="imginfo">
                    <img src="images/info.jpg" alt="info">
                </div>
            </div>

            
            <div class="tertiaire">
                <div class="texttertiaire">
                    <p>
                        <em>Le domaine teritaire</em>
                        <br>Tout emploi ou travail que peut trouver un sortant de notre plateforme de formation se situera dans le secteur primaire.
                        <br>On en déduit qu'il serait nécessaire d'inclure une formation sur ce domaine. On y étudiera les parcours suivant : 
                    </p>
                    <ul>
                        <li>Commerce</li>
                        <li>Marketing</li>
                        <li>Communication</li>
                        <li>Comptabilité et finance</li>
                    </ul>
                    </div>
                
                    <div class="imgtertiaire">
                        <img src="images/tertiaire.jpg" alt="secteur tertiaire">
                    </div>

               
            </div>
        </div>
    </section>

   <?php
        include('footer.php');
    ?>
</body>
</html>