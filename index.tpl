


{foreach from=$tabeauArticleSmarty item=tableau}
    
 <img src="img/{$tableau['id']}.jpg" alt="erreur image" width="200px"/>
 <h2> {$tableau['titre']}</h2>
 <p>{$tableau['texte']}<p>;
 <p>{$tableau['date_fr']}</p>


  
  {/foreach}
  
  <div class="pagination" >
      <ul>
          {for $i=1 to $nbpages}
    <li {if $i == $page}class="active"{/if}><a href="index.php?page={$i}">{$i}</a></li>
    
     {/for}     

      </ul>
   </div>