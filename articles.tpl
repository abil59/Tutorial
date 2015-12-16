{if isset($_msg_error)}
<div  class="alert alert-error" id="notif">  
    {$_msg_error}
    
{/if}


<form action="article.php" method="post" enctype="multipart/form-data" id="form_article" name="form_article">
            <div class="clearfix">
                <label for="titre"> Titre : </label>
                <div class="input">
                    <input type="text"name="titre" id="titre" value=""/>
                </div>
            </div>
            <div class="clearfix">
                <label for="texte"> Texte : </label>
                <div class="textearea">
                    <textarea name="texte" id="texte"></textarea>
                </div>
            </div>
            <div class="clearfix">
                <label for="image"> Image : </label>
                <div class="input">
                    <input type="file" name="image" id="image"/>
                </div>
            </div>
            <div class="clearfix">
                <label for="Publie"> Publié : </label>
                <div class="input">
                    <input type="checkbox"name="publie" id="publie" value="1"/>
                </div>
            </div>
            <div class="form-actions">
                <input type="submit" name="envoyer" value="envoyer" class="btn btn-large btn-primary"/>
            </div>
        </form>