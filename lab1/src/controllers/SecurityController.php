<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';
class SecurityController extends AppController {
    private $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }
    public function login()
    {
        $userRepository = new UserRepository();

        if (!$this->isPost()) {
            return $this->render('login');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $userRepository->getUser($email);
        if (!$user) {
            return $this->render('login', ['messages' => ['Użytkownik nie istnieje!']]);
        }
        if ($user->getEmail() !== $email or !$this->checkPassword($password, $user->getPassword())) {
            return $this->render('login', ['messages' => ['Niepoprawne dane logowania!']]);
        }

        return $this->render('panels');
    }

    public function register()
    {
        if (!$this->isPost()) {
            return $this->render('register');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmedPassword = $_POST['confirmedPassword'];



        if ($password !== $confirmedPassword) {
            return $this->render('register', ['messages' => ['Hasła nie są takie same']]);
        }
        $user = new User( $email,$this->hashPassword($password));


        $this->userRepository->addUser($user);

        return $this->render('login', ['messages' => ['Zostałeś zarejestrowany']]);
    }
    private function hashPassword($pwd) : string {
        return password_hash($pwd, PASSWORD_BCRYPT);
    }
    private function checkPassword($input, $hash) : bool {
        return password_verify($input, $hash);
    }
}
