{include file="header.tpl"}


<ul class="list-group">
    <p class="parrafo p-3 mb-2 bg-danger text-white">Detail</p>
   
    {foreach from=$showDetail item=$show}
        <li class='list-group-item d-flex justify-content-between align-items-center parrafo p-3 mb-2 bg-dark text-white '>
            <span>   <img  src="img/detalle.jpg"> {$show->name} {$showDetail[0]->artist} - {$show->date} (Precio {$show->price})</span>
        </li>
        
    {/foreach}
   
</ul>


{include file ="footer.tpl"}