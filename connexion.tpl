{if isset($connect)}
    {$connect}
{/if}

<h1>Connexion </h1>       <!-- debut html -->
<h5>Saisissez les identifiants choisis lors de votre inscription </h5>

<form action="connexion.php" method="post" enctype="multipart/form-data" id="form_article" name="form_article">
    <div class="clearfix">
        <label for="email"> EMAIL : </label>
        <div class="input">
            <input type="email"name="email" id="email" value=""/>
        </div>
    </div>
    <div class="clearfix">
        <label for="mdp"> Mot de passe : </label>
        <div class="textearea">
            <textarea name="mdp" id="mdp"></textarea>
        </div>
    </div>



    <div class="form-actions">
        <input type="submit" name="connexion" value="connexion" class="btn btn-large btn-primary"/>
    </div>
</form>                     <!--  fin html -->