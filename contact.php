<?php
 session_start();
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Contact</title>
  <link rel="stylesheet" href="Portfolio.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
</head>
<body class="bodycontact">
    <header>
        
            <img class="imgindex" src="images/IMG_9420-2.jpg">
            <nav>
                    <ul class="mcd-menu">
                        <li>
                            <a href="index.html">
                                <i class="fa fa-home"></i>
                                <strong>Accueil</strong>
                            </a>
                        </li>
                        <li>
                            <a href="CV.html">
                                <i class="fa fa-home"></i>
                                <strong>CV</strong>
                            </a>
                        </li>
                        <li>
                            <a href="contact.php">
                                <i class="fa fa-home"></i>
                                <strong>Contact</strong>
                            </a>
                        </li>
                        <li>
                            <a href="index.html">
                                <i class="fa fa-comments-o"></i>
                                <strong>HTML</strong>
                            </a>
                            <ul>
                                <li><a href="http://julia-denivet.students-laplateforme.io/App%20Favorites/app-favorites.html" target="_blank"><i class="fa fa-globe"></i>App Favorites</a></li>
                                <li><a href="https://julia-denivet.students-laplateforme.io/BTP/accueil.html" target="_blank"><i class="fa fa-trophy"></i>BTP</a></li>
                                <li><a href="https://julia-denivet.students-laplateforme.io/Menuiserie/accueil.html" target="_blank"><i class="fa fa-certificate"></i>Menuiserie</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="index.html">
                                <i class="fa fa-comments-o"></i>
                                <strong>PHP</strong>
                            </a>
                            <ul>
                                <li><a href="https://julia-denivet.students-laplateforme.io/reservation-salles/index.php" target="_blank"><i class="fa fa-globe"></i>Reservation-salles</a></li>
                                <li><a href="#"><i class="fa fa-trophy"></i>PHP</a></li>
                                <li><a href="#"><i class="fa fa-certificate"></i>PHP</a></li>
                            </ul>
                        </li>
                    </ul>
            </nav>
        
    </header>
    
    <section class="flexsec">
        <article class="taillearticle">
             <form method="POST" class="formcontact">
             <h1 class="h1contact">Contact</h1>

                <label>Votre prénom</label>
                <input class="tailleinput"  type="text" name=" Prénom" placeholder="Votre Prénom" />
                <br>
                                
                <label>Votre Nom</label>
                <input class="tailleinput"  type="text" name=" nom" placeholder="Votre Nom" >
                <br>
                                
                <label>Entreprise</label>
                <input class="tailleinput"  type="text" name="Entreprise" placeholder="Entreprise" >
                <br>
                            
                <label>Votre Message</label>
                <textarea class="tailleinput"   name="message" placeholder="message"></textarea>
                <br>

                <input class="Valider" type="submit" name="Valider">

             </form> 
             <?php
                        if (isset($_POST['Valider']))
		                {
                                $connexion = mysqli_connect('localhost','root','','portfolio');
                                $nom = $_POST['nom'];
                                $prenom = $_POST['Prénom'];
                                $entreprise = $_POST['Entreprise'];
                                $message = $_POST['message'];
                                $requete2 = "INSERT INTO contact (nom, prenom, entreprise,message) VALUES ('$nom','$prenom', '$entreprise', '$message')";
                                mysqli_query($connexion, $requete2);
                                mysqli_close($connexion);
                               
					
				        } 
				
             ?>
		

        </article>
        <article class="margin">
             <h2>Mes réseaux sociaux professionels</h2>
             <p>Mail : julia.denivet@laplateforme.io</p>
             <p>GitHub : julia-denivet</p>
             <p>Linkedln : Julia Denivet</p>
             <p>Viadeo : Julia Denivet</p>
        </article>      
    </section>

       
      


  
</body>
</html>