{include file="templates/header.tpl"}
{foreach from=$tasks item=task}
    <ul class="list-group">
        <li class="list-group-item {if $task->finalizada}finalizada{/if}">
            <a href="viewTask/{$task->id_tarea}">{$task->titulo}</a>: {$task->descripcion}
             <a class="btn btn-danger" href="deleteTask/{$task->id_tarea}'">Borrar</a>
             {if !$task->finalizada}
                - <a class="btn btn-success" href="updateTask/{$task->id_tarea}">Done</a>
             {/if}
        </li>
    </ul>
{/foreach}

 <h2>Crear Tarea:</h2>
<form action="createTask" method="post">
    <input type="text" name="title" id="title">
    <input type="text" name="description" id="description">
    <input type="number" name="priority" id="priority">
    <input type="checkbox" name="done" id="done">
    <input type="submit" class="btn btn-primary" value="Guardar">
</form>
{include file="templates/footer.tpl"}

