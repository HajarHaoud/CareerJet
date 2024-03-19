<?php
$civilite=null;
$prenom=null;
$Nom=null;
$email=null;
$password=null;
$Titreduposteactuel=null;
$Fonctionactuel=null;
$secteuractuel=null;
$Expérience=null;
$current_salary=null;
$education_level=null;
$training_type=null;
$job_search_country=null;
$telephone=null;
$residence_city=null;
$residence_country=null;
$region=null;
$cv_attachment=null;
$linkedin_profile_url=null;
$erreurs = null;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collecte de données
    if (isset($_POST["civilite"])) {
        $civilite = htmlentities($_POST["civilite"]);
    }
    if (isset($_POST["prenom"])) {
        $prenom = htmlentities($_POST["prenom"]);
    }
    if (isset($_POST["Nom"])) {
        $Nom = htmlentities($_POST["Nom"]);
    }
    if (isset($_POST["email"])) {
        $email = htmlentities($_POST["email"]);
    }
    if (isset($_POST["password"])) {
        $password = htmlentities($_POST["password"]);
    }
    if (isset($_POST["Titreduposteactuel"])) {
        $Titreduposteactuel = htmlentities($_POST["Titreduposteactuel"]);
    }
    if (isset($_POST["Fonctionactuel"])) {
        $Fonctionactuel = htmlentities($_POST["Fonctionactuel"]);
    }
    if (isset($_POST["secteuractuel"])) {
        $secteuractuel = htmlentities($_POST["secteuractuel"]);
    }
    if (isset($_POST["Expérience"])) {
        $Expérience = htmlentities($_POST["Expérience"]);
    }
    if (isset($_POST["current_salary"])) {
        $current_salary = htmlentities($_POST["current_salary"]);
    }
    if (isset($_POST["education_level"])) {
        $education_level = htmlentities($_POST["education_level"]);
    }
    if (isset($_POST["training_type"])) {
        $training_type = htmlentities($_POST["training_type"]);
    }
    if (isset($_POST["job_search_country"])) {
        $job_search_country = htmlentities($_POST["job_search_country"]);
    }
    if (isset($_POST["telephone"])) {
        $telephone = htmlentities($_POST["telephone"]);
    }
    if (isset($_POST["residence_city"])) {
        $residence_city = htmlentities($_POST["residence_city"]);

    } if (isset($_POST["residence_country"])) {
        $residence_country = htmlentities($_POST["residence_country"]);
    }
    if (isset($_POST["region"])) {
        $region = htmlentities($_POST["region"]);
    }
    if (isset($_POST["cv_attachment"])) {
        $cv_attachment = htmlentities($_POST["cv_attachment"]);
    }
    if (isset($_POST["linkedin_profile_url"])) {
        $linkedin_profile_url = htmlentities($_POST["linkedin_profile_url"]);
    }





    if (empty($civilite)) {
        $erreurs["civilite"] = "Veuillez indiquer votre civilite";
    }
    if (empty($prenom)) {
        $erreurs["prenom"] = "Veuillez indiquer votre prénom";
    }
    if (empty( $Nom )) {
        $erreurs["Nom"] = "Veuillez indiquer votre Nom";    
    }

    if (empty( $email )) {

        $erreurs["email"] = "Veuillez indiquer votre email";
    }
    if (empty($password)) {
        $erreurs["password"] = "Veuillez indiquer votre password";    }
    if (empty( $Titreduposteactuel)) {
        $erreurs["Titreduposteactuel"] = "Veuillez indiquer votre Titreduposteactuel";    }
    if (empty($Fonctionactuel )) {
        $erreurs["Fonctionactuel"] = "Veuillez indiquer votre Fonctionactuel";    }
    if (empty($secteuractuel )) {
        $erreurs["secteuractuel"] = "Veuillez indiquer votre secteuractuel";    }
    if (empty($Expérience)) {
        $erreurs["Expérience"] = "Veuillez indiquer votre Expérience";
    }
    if (empty($current_salary )) {
        $erreurs["current_salary"] = "Veuillez indiquer votre current_salary";
    }
    if (empty($education_level)) {
        $erreurs["education_level"] = "Veuillez indiquer votre education_level";
    }
    if (empty($training_type)) {
        $erreurs["training_type"] = "Veuillez indiquer votre training_type";
    }
    if (empty($job_search_country)) {
        $erreurs["job_search_country"] = "Veuillez indiquer votre job_search_country";
    }
    if (empty($telephone)) {
        $erreurs["telephone"] = "Veuillez indiquer votre telephone";    }
    if (empty($residence_city )) {
        $erreurs["residence_city"] = "Veuillez indiquer votre residence_city";
    } 
    if (empty($residence_country )) {
        $erreurs["residence_country"] = "Veuillez indiquer votre residence_country";
    }
    if (empty($region)) {
        $erreurs["region"] = "Veuillez indiquer votre region";
    }
    if (empty($cv_attachment)) {
        $erreurs["cv_attachment"] = "Veuillez indiquer votre cv_attachment";
    }
    if (empty($linkedin_profile_url)) {
        $erreurs["linkedin_profile_url"] = "Veuillez indiquer votre linkedin_profile";
    }
   

    
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            .keyword {
                font-weight: bold;
                font-size: 16px;
            }
        </style>
    </head>

    <body>
        <div class="container mt-3">

            <?php if (!$erreurs) {
                include 'connection.php';
                
                $a="insert into forms (civilite,prenom,Nom,email 
                ,password,Titreduposteactuel,Fonctionactuel
                ,secteuractuel,Expérience,current_salary,education_level,
                training_type,job_search_country
                ,telephone,residence_city,residence_country,region,
                cv_attachment,linkedin_profile_url
                ) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                //preparation de la requête
                $result=$conn->prepare($a);
                //$con est l'objet de ma connexion au serveur de la bd
                //execution de la requête
                $result->execute(
                    [$civilite,$prenom,$Nom,$email,$password,$Titreduposteactuel,$Fonctionactuel
                    ,$secteuractuel,$Expérience,$current_salary,$education_level,$training_type,$job_search_country
                    ,$telephone,$residence_city,$residence_country,$region,$cv_attachment,$linkedin_profile_url]
                );
                echo "<script> alert('your formulair have been send')
                window.location.href='home.php';
                </script>";           
                }
            
            else {
                foreach ($erreurs as $erreur) {
                ?>
                    <p class="alert alert-danger"><?= $erreur; ?></p>
            <?php
                }
            }
            ?>
        </div>
    </body>

    </html>
    <?php
}
?>