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
                <a href="addCar" class="button">Dodaj pojazd</a>
            </li>
            <li>
                <i class="fa-regular fa-hand"></i>
                <a href="showCars" class="button">Twoje pojazdy</a>
            </li>
            <li>
                <i class="fa-solid fa-dollar-sign"></i>
                <a href="payment" class="button">Opłać postój</a>
            </li>
            <li>
                <i class="fa-solid fa-paperclip"></i>
                <a href="history" class="button">Historia</a>
            </li>

            <li>
                <i class="fa-regular fa-circle-dot"></i>
                <a href="panels" class="button">Strona domowa</a>
            </li>

        </ul>
    </nav>
    <main>
        <header>
            <div class="logout">
                <i class="fa-solid fa-door-open"></i>
                <a href="login" class="logout"></a>
            </div>

        </header>
        <section class="data">
            <h1></h1>

            <form action="payment" method="POST" ENCTYPE="multipart/form-data">
                <div class="messages">
                    <?php
                    if(isset($messages)){
                        foreach($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <input name="street" type="text" placeholder="Ulica">

                <select name="selection">
                    <?php foreach ($cars as $car):?>
                        <option><?= $car->getRegister();?></option>

                    <?php endforeach;?>
                </select>
                <input name="czas" type="text" placeholder="Czas parkowania(w godzinach)">

                <button type="submit">Zapłać</button>
        </section>
    </main>
</div>
</body>