{include file="header.tpl"}

<p class="parrafo p-3 mb-2 bg-danger text-white">Edit Show</p>
<form class="p-3 mb-2 bg-white text-dark" action="" method="POST" class="my-4">
  <input class="text-light bg-dark rounded-top parrafo" type="text" placeholder="name" name="name" value="">
  <select class="text-light bg-dark rounded-top parrafo" name="id_artist">
    {foreach from=$artists item=artist}
      <option value="{$artist->id_artist}">{$artist->name}</option>
    {/foreach}
  </select>
  <input class="text-light bg-dark rounded-top parrafo" type="number" placeholder="price" name="price" value="">
  <input class="text-light bg-dark rounded-top parrafo" type="date" placeholder="date" name="date" value="">
  <button type='submit' class='btn btn-secondary parrafo'>Edit show</button>
</form>

{include file ="footer.tpl"}