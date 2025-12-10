<?php

class AuthController extends AbstractController
{
    public function home() : void
    {
        $this->render('home/home.html.twig', []);
    }

    public function login() : void
    {
        $errors = [];

        if(!empty($_POST))
        {
            $email = $_POST['email'];
            $password = $_POST['password'];

            if((empty($email)) || (empty($password)))
            {
                $errors[] = "Tout les champs sont obligatoires";
            }
            else
            {
                $userManager = new UserManager();
                $user = $userManager->findByEmail($email);

                
                if($user && password_verify($password, $user->getPassword()))
                {
                    $_SESSION["id"] = $user->getId();
                    $_SESSION["role"] = $user->getRole();
                    $_SESSION["email"] = $user->getEmail();

                    $this->redirect('index.php?route=profile'); 
                    exit;
                }
                else
                {
                    $errors[] = "Email ou mot de passe incorrects.";
                }

                
            }
        }
        $this->render('auth/login.html.twig', [
            'errors' => $errors
        ]);
    }

    public function logout() : void
    {
        session_destroy();
        $this->redirect('index.php');
    }

    public function register() : void
    {
        $errors = [];

        if(!empty($_POST))
        {
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirmPassword'];

            if((empty($firstName)) || (empty($lastName)) || (empty($email)) || (empty($password)) || (empty($confirmPassword)))
            {
                $errors[] = "Tout les champs sont obligatoires";
            }

            if($password != $confirmPassword)
            {
                $errors[] = "Les mots de passe ne correspondent pas";
            }

            $userManager = new UserManager();
            $user = $userManager->findByEmail($email);

            if($user)
            {
                $errors[] = "Email déjà utiliser";
            }

            if(empty($errors))
            {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                $user = new User($firstName, $lastName, $email, $hashedPassword);

                $userManager = new UserManager();
                $user = $userManager->create($user);

                $this->redirect('index.php?route=login');
            }
        }

        $this->render('auth/register.html.twig', [
        'errors' => $errors
        ]);
    }

    public function notFound() : void
    {
        $this->render('error/notFound.html.twig', []);
    }
}