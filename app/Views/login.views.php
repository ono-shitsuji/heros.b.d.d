<?php 
require_once(__DIR__ . '/partials/head.php');
?>
<h1>Connexion</h1>
<form method="POST">
    <div class="container">
        <div class="form-group">
            <label for="email" class="form-label">veuilledz entrer votre adresse mail :</label>
            <input type="email" name="email" id="email" placeholder="Toto@gmail.com" class="form-control">
            <?php 
                if(isset($arrayError['email'])){
                    ?>
                        <p class="text-danger"><?= $arrayError['email']?></p>
                    <?php
                }
            ?>
        </div>
        <div class="form-group">
            <label for="password" class="form-label">veuillez entrer votre mot de passe :</label>
            <input type="password" name="password" id="password" class="form-control">
            <?php 
                if(isset($arrayError['password'])){
                    ?>
                        <p class="text-danger"><?= $arrayError['password']?></p>
                    <?php
                }
            ?>
        </div>
        <button type="submit" class="btn btn-success mt-5">Connexion</button>
    </div>
</form>

<?php 
require_once(__DIR__ . '/partials/footer.php');
?>