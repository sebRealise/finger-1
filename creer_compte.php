<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Créer un compte</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href='https://fonts.googleapis.com/css?family=Barrio' rel='stylesheet'>
    <script src="main.js"></script>
</head>

<body>
    <a href="home.php" id="home"><img class="imghome" src="image/home.png" alt="Maison champignon"></a>
    <div>
        <h1>Créer un compte</h1> 
        <h3>(seulement si vous en avez vraiment envie.... )</h3>
    </div>
    <form action="profil.php" method="post">
    <div>
        <h2>Photo</h2>
        <h3>(pour voir votre sale tronche...)</h3>
        <input type=url id=url name=lien placeholder="Veuillez taper l'URL de votre photo ici" style=width:35%; autofocus required>
    </div>
    <div>
        <h2>Contact</h2>
        <h3>(pour savoir comment</h3>
        <h3>on doit vous appeler...)</h3>
        <table class=input_name>
            <tr>
                <td class="input_td">
                    <h3>Nom</h3>
                </td>
                <td class="input_td"><input class="inputtext" type=text id=nom name=nom placeholder="Veuillez taper votre nom ici" required></td>
            </tr>
            <tr>
                <td class="input_td">
                    <h3>Prénom</h3>
                </td>
                <td class="input_td"><input class="inputtext" type=text id=prenom name=prenom placeholder="Veuillez taper votre prénom ici" required></td>
            </tr>
            <tr>
                <td class="input_td">
                    <h3>Date de naissance</h3>
                </td>
                <td class="input_td"><input class="inputtext" type=date id=naissance name=naissance placeholder="Veuillez taper votre date de naissance ici" required></td>
            </tr>
            <tr>
                <td class="input_td">
                    <h3>Statut</h3>
                </td>
                <td class="input_td"><input class="inputtext" type=text id=statut name=etat placeholder="Veuillez taper votre statut d'état civil ici... ou pas" required></td>
            </tr>
        </table>
    </div>
    <div>
        <h2>Goûts et couleurs</h2>
        <h3>(car on a pas tous les mêmes, y paraît...)</h3>
        <h3>Musique (pour ceux qui aiment la musique...)</h3>
        <?php
            require('connexion.php');
            $appliBD=new Connexion;
            $musiques=$appliBD->selectAllMusics();
            var_dump($musiques);
            for($i=1;$i<count($musiques);$i++){
                echo '<div class="gout"><input type="checkbox" class=musique id="style'.$i.'" name="metal[]" value='.$i.'><label for="style'.$i.'">'.$musiques[($i-1)]["Type"].'Métal!!!!!!</label></div>';
            }
        // <div class="gout"><input type="checkbox" class=musique id="style1" name="metal[]" value="1"><label for="style1">Métal!!!!!!</label></div>
        // <div class="gout"><input type="checkbox" class=musique id="style2" name="metal[]" value="8"><label for="style2">Heavy Métal!!!!!!</label></div>
        // <div class="gout"><input type="checkbox" class=musique id="style3" name="metal[]" value="7"><label for="style3">Progressive Métal!!!!!!</label></div>
        // <div class="gout"><input type="checkbox" class=musique id="style4" name="metal[]" value="4"><label for="style4">Death Métal!!!!!!</label></div>
        // <div class="gout"><input type="checkbox" class=musique id="style5" name="metal[]" value="6"><label for="style5">Brutal Death Métal!!!!!!</label></div>
        // <div class="gout"><input type="checkbox" class=musique id="style6" name="metal[]" value="5"><label for="style6">Métal Symphonique!!!!!!</label></div>
        // <div class="gout"><input type="checkbox" class=musique id="style7" name="metal[]" value="3"><label for="style7">Green Métal!!!!!!</label></div>
        // <div class="gout"><input type="checkbox" class=musique id="style8" name="metal[]" value="2"><label for="style8">Alternative Métal!!!!!!</label></div>
        ?>
        <br>
        <h3>Hobbies (à ne pas confondre avec ceux aux pieds poilus...)</h3>
        <div class="gout"><input type="checkbox" class=hobbies id="hobby1" name="jouer[]" value="1"><label for="hobby1">Jouer à WoW!!!!!!</label></div>
        <div class="gout"><input type="checkbox" class=hobbies id="hobby2" name="jouer[]" value="2"><label for="hobby2">Jouer à ESO!!!!!!</label></div>
        <div class="gout"><input type="checkbox" class=hobbies id="hobby3" name="jouer[]" value="3"><label for="hobby3">Jouer à LoL!!!!!!</label></div>
        <div class="gout"><input type="checkbox" class=hobbies id="hobby4" name="jouer[]" value="4"><label for="hobby4">Jouer à Warhammer!!!!!!</label></div>
        <div class="gout"><input type="checkbox" class=hobbies id="hobby5" name="jouer[]" value="5"><label for="hobby5">Jouer à Guild Wars!!!!!!</label></div>
        <div class="gout"><input type="checkbox" class=hobbies id="hobby6" name="jouer[]" value="6"><label for="hobby6">Jouer à Conan!!!!!!</label></div>
        <div class="gout"><input type="checkbox" class=hobbies id="hobby7" name="jouer[]" value="8"><label for="hobby7">Jouer à Rift!!!!!!</label></div>
        <div class="gout"><input type="checkbox" class=hobbies id="hobby8" name="jouer[]" value="7"><label for="hobby8">Jouer à SWTOR!!!!!!</label></div>
        <br>
    </div>
    <div>
        <h2>Relations sociales</h2>
        <h3>(pour ceux qui en ont de réelles...)</h3>
    


<?php
require('connexion.php');
// error_reporting(0);
$appliBD=new Connexion;
population();
function population(){
    $appliBD=new Connexion;
    $newId=$appliBD->getCompteId();
    for($i=1;$i<=$newId;$i++){
        $nom=$appliBD->getNom($i);
        $prenom=$appliBD->getPrenom($i);
        echo '
            <label for="id'.$i.'">'.$nom.' '.$prenom.'</label>    
                <input type=text name=relations[] class=id'.$i.' placeholder="Veuillez taper le type de relation ici">
            <br>
        ';
    } 
}


echo '
        <br>
    </div>
    <br>
    <br>
        <input id="submit_creer" type="submit" value="Créer le compte!!!!" style=font-size:150%;border-radius:45%;height:3em;>
    </form>
</body>

</html>
';
?>