<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Audric FULLHARDT</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="#travaux">Mes Travaux</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="accueil">
            <div id="landing-flex">
                <h1>Audric FULLHARDT</h1>
                <p>Junior Developer</p>
            </div>
            <a href="#presentation" id="a-decouvrir"><img src="images/down-arrow.svg" alt="double flèche vers le bas" id="down-arrow"></a>
        </div>
        <div id="presentation">
            <div id="presentation-grid">
                <div id="corporate"></div>
                <div id="txt">
                    <p>My name is Audric FULLHARDT, I am 19 years old and I am currently a student in the BUT MMI program at the IUT of Troyes<br><br>As part of my training, I am looking for an apprenticeship in web development for my second and third years, which will take place from September 2024 to July 2026.<br><br>I am open to opportunities in both Paris and Troyes.</p>
                    <a href="#contact"><button>Me contacter</button></a>
                </div>
            </div>
        </div>
        <div id="travaux">
            <h1>MY SKILLS</h1>
            <div id="travaux-grid">
                <div id="dev">
                    <h2>DEVELOPMENT</h2>
                    <div id="dev-grid">
                        <button class="button-grid" id="button1"></button>
                        <button class="button-grid" id="button2"></button>
                        <button class="button-grid" id="button3"></button>
                        <button class="button-grid" id="button4"></button>
                        <button class="button-grid" id="button5"></button>
                    </div>
                </div>

                <div id="infographie">
                    <h2>GRAPHIC DESIGN</h2>
                    <div id="crea-grid">
                        <button class="button-grid" id="button6"></button>
                        <button class="button-grid" id="button7"></button>
                    </div>
                </div>

                <div id="audio-visuel">
                    <h2>AUDIO-VISUAL</h2>
                    <div id="visuel-grid">
                        <button class="button-grid" id="button8"></button>
                        <button class="button-grid" id="button9"></button>
                    </div>
                </div>

                <div id="gestion-proj">
                    <h2>PROJECT MANAGEMENT</h2>
                    <div id="proj-grid">
                        <button class="button-grid" id="button10"></button>
                        <button class="button-grid" id="button11"></button>
                        <button class="button-grid" id="button12"></button>
                        <button class="button-grid" id="button13"></button>
                    </div>
                </div>
            </div>
        </div>
        <div id="contact">
            <h1>CONTACT ME</h1>
            <div id="contact-container">
                <a href="https://www.linkedin.com/in/audric-fullhardt/" target="_blank"><button class="contact-button"></button></a>
                <a href="mailto: audric.fullhardt.pro@gmail.com"><button class="contact-button"></button></a>
                <a href="tel:0783629498"><button class="contact-button"></button></a>
            </div>
        </div>
        </main>
</body>
</html>