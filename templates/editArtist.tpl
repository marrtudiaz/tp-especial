{include file="header.tpl"}

<p class="parrafo p-3 mb-2 bg-primary text-white">Edit Artist</p>
<form class="p-3 mb-2 bg-white text-dark" action="" method="POST" class="my-4">
        <input class="text-light bg-dark rounded-top parrafo" type="text" placeholder="name" name="name" value="">
        <input class="text-light bg-dark rounded-top parrafo" type="text" placeholder="type" name="type" value="">
        <textarea class="text-light bg-dark rounded-top parrafo" placeholder="description" name="description"
                class="form-control" rows="2"></textarea>

        <button type='submit' class='btn btn-secondary parrafo'>Edit Artist</button>
</form>

{include file ="footer.tpl"}