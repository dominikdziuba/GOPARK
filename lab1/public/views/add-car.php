<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">

    <script src="https://kit.fontawesome.com/098b29f9ba.js" crossorigin="anonymous"></script>    <title>PANELS</title>
</head>

<body>
<div class="base-container">
    <nav>
        <img src="public/img/logo.svg">
        <ul>
            <li>
                <i class="fa-solid fa-plus"></i>
                <a href="#" class="button">Dodaj pojazd</a>
            </li>
            <li>
                <i class="fa-regular fa-hand"></i>
                <a href="#" class="button">Twoje pojazdy</a>
            </li>
            <li>
                <i class="fa-solid fa-dollar-sign"></i>
                <a href="#" class="button">Opłać postój</a>
            </li>
            <li>
                <i class="fa-solid fa-paperclip"></i>
                <a href="#" class="button">Historia</a>
            </li>
            <li>
                <i class="fa-regular fa-user"></i>
                <a href="#" class="button">Twój profil</a>
            </li>

        </ul>
    </nav>
    <main>
        <header>
            <div class="go-back">
                <i class="fa-solid fa-backward"></i>
                Cofnij

            </div>
            <div class="logout">
                <i class="fa-solid fa-door-open"></i>
                Wyloguj
            </div>

        </header>
        <section class="data">
            <h1>UPLOAD</h1>
            <form action="addCar" method="POST" ENCTYPE="multipart/form-data">
                <div class="messages">
                    <?php
                    if(isset($messages)){
                        foreach($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <input name="brand" type="text" placeholder="Marka">
                <input name="model" type="text" placeholder="Model">
                <input name="register" type="text" placeholder="Nr rej.">

                <input type="file" name="file"/><br/>
                <button type="submit">send</button>
            </form>
        </section>
    </main>
</div>
</body>