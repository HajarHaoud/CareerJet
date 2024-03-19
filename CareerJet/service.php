<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="css/candidat-inscription.css">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>
    <body>
 <div class="Container">
    <h3><strong>First step for you: fill out this form to allow us to create your account.</strong></h3>
    <form action="contact_Post.php" method="post">
        
        <div class="content">
            <div class="input-box">
                <label for="civilité">Gender * </label>
            <select name="civilite" id="civilité" required>
                <option value="" ></option>
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Miss">Miss</option>
            </select>
                <!-- <label for="civilité">Civilité</label>
                <input type="text"   name="civilite" id="civilité"> -->
            </div>
            <div class="input-box">
                <label for="prénom">First Name  *</label>
                <input type="text"   name="prenom" id="prénom" required>
            </div>
            <div class="input-box">
                <label for="name">Last Name *</label>
                <input type="text"   name="Nom" id="name" required>
            </div>
            <div class="input-box1">
                <label for="email">Email *</label>
                <input class="input" type="email"   name="email" id="Email" required>
            </div>
            <div class="input-box1">
                <label for="mdp">Password  *</label>
                <input type="password"   name="password" id="mdp" required>
            </div>
            <div class="input-box2">
                <label for="tpa">Current job title *</label>
                <input type="text"   name="Titreduposteactuel" id="tpa" required>
            </div>
            <div class="input-box3">
                <label for="Fonction actuel">Current position *</label>
                <select name="Fonctionactuel" id="Fonctionactuel" required>
                    <option value=""></option>
                    <option value="Etudes">Studies</option>
                    <option value="Enseignement">Teaching</option>
                    <option value="Informatique"> Computer Science</option>
                    <option value="Multimédia/Internet">Multimedia/Internet</option>
                    <option value="Télécoms/Réseaux">Telecommunications/Networks</option>
                    <option value="Informatique/Electronique">Computer/Electronics</option>
                    <option value="Production/Qualité/Sécurité/Maintenance">Production/Quality/Security/Maintenance</option>
                   
                </select>
                
            </div>
            <div class="input-box3">
                <label for="Sa">Current Sector *</label>
                <select name="secteuractuel" id="Sa" required>
                    <option value=""></option>
                    <option value="Aéronautique/Spacial">Aerospace/Space</option>
                    <option value="Automobile/Motos/Cycles">Automobile/Motorcycles/Cycles</option>
                    <option value="Enseignement/Formation">Teaching/Education</option>
                    <option value="Informatique">Information Technology</option>
                    <option value="Administration">Administration</option>
                    <option value="Multimédia/Internet">Multimedia/Internet</option>
                    <option value="Autre Services">Other Services</option>
                </select>
                
            </div>
            <div class="input-box3">
                <label for="Ex">Experience *</label>
                <select name="Expérience" id="Ex" required>
                    <option value=""></option>
                    <option value="Débutant">Beginner</option>
                    <option value="Moins de 1">Less than 1 year</option>
                    <option value="de 1 à 3 ans">1 to 3 years</option>
                    <option value="de 3 à 5 ans">3 to 5 years</option>
                    <option value="de 5 à 10 ans">5 to 10 years</option>
                    <option value="de 10 à 20 ans">de 10 à 20 ans</option>
                    <option value="Plus de 20 ans">More than 20 years </option>
                </select>
                
            </div>
            <div class="input-box3">
                <label for="current_salary">Current Salary *</label>
                <select name="current_salary" id="current_salary" required>
                    <option value=""></option>
                    <option value="No Salary">No Salary</option>
                    <option value="Less than 4000">Less than 4000</option>
                    <option value="4000-6000">4000-6000</option>
                    <option value="6000-8000">6000-8000</option>
                    <option value="8000-10000">8000-10000</option>
                    <option value="10000-15000">10000-15000</option>
                    <option value="15000-20000">15000-20000</option>
                </select>
            </div>
            <div class="input-box3">
                <label for="education_level">Education Level *</label>
                <select name="education_level" id="education_level" required>
                    <option value=""></option>
                    <option value="Self-taught">Self-taught</option>
                    <option value="Pre-Baccalaureate Qualification">Pre-Baccalaureate Qualification</option>
                    <option value="High School Diploma">High School Diploma</option>
                    <option value="Bachelor's degree">Bachelor's degree</option>
                    <option value="Master's degree">Master's degree</option>
                    <option value="Doctorate">Doctorate</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="input-box3">
                    <label for="training_type">Training Type *</label>
                    <select name="training_type" id="training_type" required>
                        <option value=""></option>
                        <option value="Doctorate/DEA">Doctorate/DEA</option>
                        <option value="Master">Master</option>
                        <option value="IT School">IT School</option>
                        <option value="Engineering School">Engineering School</option>
                        <option value="BTS/DUT">BTS/DUT</option>
                        <option value="Professional Training">Professional Training</option>
                        <option value="Specialized Training">Specialized Training</option>
                        <option value="High School Diploma">High School Diploma</option>
                        <option value="Pre-Baccalaureate">Pre-Baccalaureate</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

            <div class="input-box3">
                    <label for="job_search_country">Job Search Country *</label>
                    <select name="job_search_country" id="job_search_country" required>
                        <option value=""></option>
                        <option value="Any Country">Any Country</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Algeria">Algeria</option>
                    </select>
                </div>

                <div class="input-box1">
                    <label for="telephone">Telephone *</label>
                    <input class="input" type="tel" name="telephone" id="telephone" required>
                </div>
                <div class="input-box">
                    <label for="residence_city">City of Residence *</label>
                    <input type="text" name="residence_city" id="residence_city" required>
                </div>
                <div class="input-box">
                    <label for="residence_country">Country of Residence * </label>
                    <select name="residence_country" id="residence_country" required>
                        <option value=""></option>
                        <option value="Morocco">Morocco</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Algeria">Algeria</option>
                        <option value="France">France</option>
                        <option value="Canada">Canada</option>
                    </select>
                    
                </div>
                <div class="input-box">
                    <label for="region">Region *</label>
                    <input type="text" name="region" id="region" required>
                </div>
                <div class="input-box1">
                    <label for="cv_attachment">CV Attachment (pdf, word) *</label>
                    <input class="input" type="file" name="cv_attachment" id="cv_attachment" required>
                </div>
                <div class="input-box1">
                    <label for="linkedin_profile_url">LinkedIn Profile URL (optional) </label>
                    <input type="url" class="input" name="linkedin_profile_url" id="linkedin_profile_url" required>
                </div>
            </div>
            <div class="g-recaptcha" data-sitekey="6LdFu5MpAAAAABH2w5YtRc5z8djAIVNoNNPZsfR4
            "></div>
            <div class="alert">
                <p>By clicking the "Register" button, you agree to <a href="#">the Terms of Use</a>, <a href="#">Privacy Policy</a>, and the <a href="#">Cookie Policy of RecruitMe</a>.</p>
            </div>
            <div class="button-container">
                <button name="send" >Register</button>
                <button name="clear" type="reset" class="btn btn-secondary">Vider</button>
            </div>   
        </form>
    </div>       




    <?php

    


    ?>
    </body>
</html>