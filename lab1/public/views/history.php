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
            <table border = "1">
                <tr>
                    <th>nr_płatności</th>
                    <th>ulica</th>
                    <th>nr_rejestr.</th>
                    <th>czas</th>
                <?php foreach ($pays as $pay):?>
                <?php for ($i = 1; $i <= 3; $i++)?>
                </tr>
                <tr id="record">
                    <td><?=$pay->getPaymentNumber();?></td>
                    <td><?=$pay->getStreetName();?></td>
                    <td><?=$pay->getRegisterNumber();?></td>
                    <td><?=$pay->getParkingTime();?></td>
                </tr>
                <?php endforeach;?>
            </table>

        </section>
    </main>
</div>
</body>