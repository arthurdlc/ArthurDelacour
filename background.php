<?php
$page_title = "Arthur Delacour | Stack Tech";
include 'php/header.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <br><br><br>
    <div class="skills-container">
        <div class="timeline"></div>
        <div class="skill-list">
            <!-- Compétence 1 -->
            <div class="skill">
                <div class="skill-point"></div>
                <div class="skill-content">
                    <div class="skill-header">
                        <div class="skill-image">
                            <img src="images/sio.webp" alt="HTML/CSS">
                        </div>
                        <div class="skill-title-wrapper">
                            <h3 class="skill-title">BTS SIO SLAM | Avranches</h3>
                            <p class="skill-subtitle">2022 - 2024</p>
                        </div>
                    </div>
                    <p class="skill-desc">BTS acces sur la conception d'application web metier et la cybersecurité, avec  pour outils principaux etudier : JS, PHP, SQL, Symfony, Bootstrap, Docker ...</p>
                </div>
            </div>
            
            <!-- Compétence 2 -->
            <div class="skill">
                <div class="skill-point"></div>
                <div class="skill-content">
                    <div class="skill-header">
                        <div class="skill-image">
                            <img src="images/mcdanse.jpg" alt="JavaScript">
                        </div>
                        <div class="skill-title-wrapper">
                            <h3 class="skill-title">Stage MC-danse | Flers</h3>
                            <p class="skill-subtitle">2023</p>
                        </div>
                    </div>
                    <p class="skill-desc">Creation d'une interface Web modifiable et personnalisable sans coder pour MC-Danse Flers, avec le framework Symfony. Mise en place de son hebergement </p>
                </div>
            </div>
            
            <!-- Compétence 3 -->
            <div class="skill">
                <div class="skill-point"></div>
                <div class="skill-content">
                    <div class="skill-header">
                        <div class="skill-image">
                            <img src="images/Altilog.jpg" alt="React">
                        </div>
                        <div class="skill-title-wrapper">
                            <h3 class="skill-title">Stage Altilog | Caen</h3>
                            <p class="skill-subtitle">2024</p>
                        </div>
                    </div>
                    <p class="skill-desc">Création de scripts WinDev pour la société Altilog, utilisation des api OpenAI, Deepl, GoogleAPI et autres.</p>
                </div>
            </div>
            
            <!-- Compétence 4 -->
            <div class="skill">
                <div class="skill-point"></div>
                <div class="skill-content">
                    <div class="skill-header">
                        <div class="skill-image">
                            <img src="images/holberton.png" alt="Node.js">
                        </div>
                        <div class="skill-title-wrapper">
                            <h3 class="skill-title">HolbertonSchool Spécialité AR/VR | Rennes</h3>
                            <p class="skill-subtitle">2024 - 2025</p>
                        </div>
                    </div>
                    <p class="skill-desc">Formation en AR/VR et Unity, travail effectuer par projets. creation d'application AR Mobile, VR sur meta Quest 3, et de jeux PC classique sous Unity 6. Apprentissage parralelle de Unreal Engine (peu de code).</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Animation des compétence lors de la generation de la page qd ca veut (a corriger)
        document.addEventListener('DOMContentLoaded', function() {
            
            const skills = document.querySelectorAll('.skill');
    
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        
                        // Trouver et animer la barre de niveau dans cet élément
                        if (bar) {
                            setTimeout(() => {
                                bar.style.width = bar.getAttribute('data-width');
                            }, 300);
                        }
                    }
                });
            }, { threshold: 0.2 });
            
            skills.forEach(skill => {
                observer.observe(skill);
            });
            
            // Animation immédiate pour la première visualisation
            setTimeout(() => {
                skills.forEach((skill, index) => {
                    setTimeout(() => {
                        skill.classList.add('visible');
                        if (bar) {
                            setTimeout(() => {
                                bar.style.width = bar.getAttribute('data-width');
                            }, 300);
                        }
                    }, index * 200);
                });
            }, 500);
        });
    </script>
</body>
</html>
<?php include 'php/footer.php'; ?>
