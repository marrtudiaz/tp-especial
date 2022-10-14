{include file="header.tpl"}


<ul class="list-group">
    <p class="parrafo p-3 mb-2 bg-danger text-white">Our Tour</p>
    {foreach from=$shows item=$show}
        <li
            class='list-group-item d-flex justify-content-between align-items-center text-light bg-dark rounded-top parrafo '>
            <span> <img src="img/ticket.png"> {$show->name} <a href="showsFromArtist/{$show->id_artist}">{$show->artist}</a> - {$show->date} (Precio
                {$show->price}) <a href="showDetail/{$show->id_show}">Details</a></span>
            {if !isset($smarty.session.USER_ID)}
            {else}
                <div class="ml-auto">
                    <a href='formEditShow/{$show->id_show}' type='button' class='btn btn-primary'>Edit</a>
                    <a href='deleteShow/{$show->id_show}' type='button' class='btn btn-primary'>Delete</a>
                </div>
            {/if}
        </li>
    {/foreach}
</ul>
{if !isset($smarty.session.USER_ID)}
{else}
    {include file="addShow.tpl"}
{/if}
{include file ="footer.tpl"}