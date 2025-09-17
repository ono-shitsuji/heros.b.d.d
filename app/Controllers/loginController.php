<?php

    if(isset($_POST['email'])) {
        $mail = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        checkFormat('email', $email);
        checkFormat('password', $password);

        isNotEmpty('email');
        isNotEmpty('password');

        var_dump($mail);
        var_dump($password);

        if(empty($arrayerror)){
            $query = "SELECT * FROM `user` WHERE email = :email";
            $statement = $pdo->prepare($query);
            $statement->bindParam(':email',$mail);
            $statement->execute();


            $userInfo = $statement->fetch(); 

            $passwordchecker = password_verify($password,$userInfo['password']);
            var_dump($passwordchecker);
            if(!$passwordchecker){
                errorMessage("please check your log-in once again.");
                  }else{
                //sinon je verifie que la mot de passe que l'user ma donner est le même que celui de la base de donnée 
                //si c'est le même alors c'est vrais
                $passwordchecker = password_verify($password, $userInfo['password']);
                
                //Si c'est pas le même
                if(!$passwordchecker){
                    errorMessage("please check your log-in once more!");
                }else{
                    //sinon on peut le co

                    $_SESSION['user'] = [
                        'id' => uniqid(),
                        'email' => $userInfo['email'],
                        'pseudo' => $userInfo['pseudo'],
                        'role' => $userInfo['role'],
                        'idDatabase' => $userInfo['id']
                    ];

                    //var_dump($_SESSION);
                    redirectToRoute('/');
            }
        }
        }
    }  
    require_once(__DIR__ . "/../Views/login.view.php");