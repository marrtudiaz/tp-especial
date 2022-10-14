<p class="parrafo p-3 mb-2 bg-secondary text-white">Add Show</p>
<form class="p-3 mb-2 bg-white text-dark" action="addShow" method="POST" class="my-4">
  <input class="text-light bg-dark rounded-top parrafo" type="text" placeholder="Name" name="name" value="">
  <select class="text-light bg-dark parrafo" name="id_artist">
    {foreach from=$artists item=artist}
      <option value="{$artist->id_artist}">{$artist->name}</option>
    {/foreach}
  </select>
  <input class="text-light bg-dark rounded-top parrafo" type="number" placeholder="Price" name="price" value="">
  <input class="text-light bg-dark rounded-top parrafo" type="date" placeholder="Date" name="date" value="">
  <button type='submit' class='btn btn-primary parrafo'>Add new show</button>
</form>