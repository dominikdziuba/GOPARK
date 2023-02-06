<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <title>LOGIN PAGE</title>
</head>
<body>
    <div class="container ">
        <div class="logo">
            <img src="public/img/logo.svg">
        </div>
        <div class="login_container">
            <form class="login" action="login" method="POST">
                <div class="messages">
                    <?php
                    if(isset($messages)){
                        foreach($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <input name="email" type="text" placeholder="example@mail.com">
                <input name="password" type="password" placeholder="********">
                <button type="submit" >Zaloguj</button>
            </form>    
        </div>
    </div>
</body>