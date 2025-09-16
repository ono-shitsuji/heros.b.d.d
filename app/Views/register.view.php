<?php 
require_once(__DIR__ . '/partials/head.php');
?>
<h1>Inscription</h1>
<p>Ici le formulaire</p>
<form method="POST">
    <div class="container">
        <div class="form-group">
            <label for="pseudo" class="form-label">Donne moi ton pseudo :</label>
            <input type="text" name="pseudo" id="pseudo" placeholder="Toto" class="form-control">
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Donne moi ton email :</label>
            <input type="email" name="email" id="email" placeholder="Toto@gmail.com" class="form-control">
        </div>
        <div class="form-group">
            <label for="password" class="form-label">Donne moi ton mot de pase :</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-success mt-5">Inscription</button>
    </div>
</form>

<?php 
require_once(__DIR__ . '/partials/footer.php');
?>