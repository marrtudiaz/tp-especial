{include file="header.tpl"}


<ul class="list-group">
    <p class="parrafo p-3 mb-2 bg-danger text-white">Our Artists</p>
    {if $error}
        <div class="alert bg-primary rounded-top parrafo">
            {$error}
        </div>
    {/if}
    {foreach from=$artists item=$artist}
        <li
            class='text-uppercase list-group-item d-flex justify-content-between align-items-center text-light bg-dark rounded-top parrafo'>
            <span> <img src="img/constructivismo.jpg"> -NAME: {$artist->name} <br>-TYPE: {$artist->type}<br>-{$artist->description}  </span>
            {if !isset($smarty.session.USER_ID)}
            {else}
                <div class="ml-auto">

                    <a href='formEditArtist/{$artist->id_artist}' type='button' class='btn btn-primary'>Edit</a>
                    <a href='deleteArtist/{$artist->id_artist}' type='button' class='btn btn-primary'>Delete</a>
                </div>
            {/if}
           
        </li>

    {/foreach}
</ul>

{if !isset($smarty.session.USER_ID)}
{else}
    {include file="addArtist.tpl"}
{/if}
{include file ="footer.tpl"}