{include file="header.tpl"}

<ul class="list-group">
    <p class="parrafo p-3 mb-2 bg-danger text-white"> {$artistShows[0]->artist} Shows</p>
    {foreach from=$artistShows item=$artistShow}
        <li class='list-group-item d-flex justify-content-between align-items-center parrafo p-3 mb-2 bg-dark text-white'>
            <span>  <img class="align-items-center" src="img/cartel.jpg">   {$artistShow->name} - {$artistShows[0]->artist} - {$artistShow->date} - (Precio {$artistShow->price})
           </span>
        </li>
    {/foreach}
</ul>

{include file ="footer.tpl"}