<?php

class UserController extends AbstractController
{
    private function checkAdmin() : void
    {
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'ADMIN') {
            $this->redirect('index.php?route=login');
            exit;
        }
    }

    public function profile() : void
    {
        if (!isset($_SESSION['id'])) {
            $this->redirect('index.php?route=login');
            exit;
        }

        $this->render('member/profile.html.twig', []);
    }

    public function create() : void
    {
        $this->checkAdmin();
        $errors = [];

        if(!empty($_POST))
        {
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirmPassword'];
            $role = $_POST['role'];

            if((empty($firstName)) || (empty($lastName)) || (empty($email)) || (empty($password)) || (empty($confirmPassword)) || (empty($role)))
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

                $user = new User($firstName, $lastName, $email, $hashedPassword, $role);

                $userManager = new UserManager();
                $user = $userManager->create($user);

                $this->redirect('index.php?route=list');
            }
        }

        $this->render('admin/users/create.html.twig', [
        'errors' => $errors
        ]);
    }

    public function update() : void
{
    $this->checkAdmin();
    $errors = [];

    if (isset($_GET['id'])) 
    {
        $userManager = new UserManager();
        $user = $userManager->findById($_GET['id']);
    } 
    else 
    {

        $this->redirect('index.php?route=list');
        exit;
    }

    if (!empty($_POST)) 
    {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $role = $_POST['role'];
        $password = $_POST['password'];

        if (empty($firstName) || empty($lastName) || empty($email) || empty($role)) 
        {
            $errors[] = "Tous les champs sont obligatoires";
        }

        if (empty($errors)) 
        {
            $user->setFirstName($firstName);
            $user->setLastName($lastName);
            $user->setEmail($email);
            $user->setRole($role);
            
            if (!empty($password)) 
            {
                $user->setPassword(password_hash($password, PASSWORD_DEFAULT));
            }

            $userManager->update($user);
            
            $this->redirect('index.php?route=list');
            exit;
        }
    }

    $this->render('admin/users/update.html.twig', [
        'errors' => $errors,
        'users' => $user
    ]);
}

    public function delete() : void
    {
        $this->checkAdmin();
        if (isset($_GET['id'])) 
        {
            $userManager = new UserManager();
            $user = $userManager->findById($_GET['id']);

            if($user)
            {
                $userManager->delete($user);
            }
        } 
        $this->redirect("index.php?route=list");
    }

    public function list() : void
    {
        $this->checkAdmin();
        $userManager = new UserManager();
        $users = $userManager->findAll();
        $this->render('admin/users/index.html.twig', [
            'users' => $users
        ]);
    }

    public function show() : void
    {
        $this->checkAdmin();
        if(isset($_GET['id']))
        {
        $userManager = new UserManager();
        $users = $userManager->findById($_GET['id']);
        $this->render('admin/users/show.html.twig', [
            'users' => $users
        ]);
        }
        else
        {
            $this->render('admin/users/list', []);
        }
    }
}