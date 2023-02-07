<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/cars.css">
    <script src="https://kit.fontawesome.com/098b29f9ba.js" crossorigin="anonymous"></script>
    <title>CARS</title>
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
            <div class="logout">
                <i class="fa-solid fa-door-open"></i>
                Wyloguj
            </div>

        </header>
        <section class="cars">
            <?php foreach($cars as $car): ?>
                <div id="car-1">
                    <img src="public/uploads/<?= $car->getImage(); ?>">
                    <div>
                        <h2><?= $car->getBrand(); ?></h2>
                        <h2><?= $car->getModel(); ?></h2>
                        <h2><?= $car->getRegister(); ?></h2>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    </main>
</div>
</body>