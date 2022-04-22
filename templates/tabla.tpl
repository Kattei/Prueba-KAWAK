<script src="./js/tabla.js"></script>
<table id="documentos">
    <thead>
        <tr>
            <th>documento</th>
            <th>contenido</th>
            <th>proceso</th>
            <th>tipo</th>
            <th>codigo</th>
        </tr>
    </thead>
    <tbody>
        {foreach key=key item=item from=$contenidotabla}
            <tr>
        <td style="cursor: pointer;" class="doc_datos" data-nombre="{$item.DOC_NOMBRE}" data-docid="{$item.DOC_ID}"
            data-contenido="{$item.DOC_CONTENIDO}" data-tipid="{$item.TIP_ID}" data-proid="{$item.PRO_ID}">{$item.DOC_NOMBRE}</td>
        <td>{$item.DOC_CONTENIDO}</td>
        <td>({$item.PRO_PREFIJO}){$item.PRO_NOMBRE}</td>
        <td>({$item.TIP_PREFIJO}){$item.TIP_NOMBRE}</td>
        <td>{$item.TIP_PREFIJO}-{$item.PRO_PREFIJO}-{$item.DOC_ID}</td>
    </tr>
{/foreach}
</tbody>
</table>


<input type="button" value="Nuevo" id="nuevo">
<br><br>



<input placeholder="documento" id="documento">
<input id="docid" hidden>
<textarea placeholder="contenido" id="contenido">
    
</textarea>
<select id="proceso">
     <option value="">Seleccione</option>
    {foreach key=key item=item from=$procesos}
        <option value="{$item.PRO_ID}">{$item.PRO_NOMBRE}-{$item.PRO_PREFIJO}</option>
    {/foreach}
</select>
<select id="tipo">
    <option value="">Seleccione</option>
    {foreach key=key item=item from=$tipos}
        <option value="{$item.TIP_ID}">{$item.TIP_NOMBRE}-{$item.TIP_PREFIJO}</option>
    {/foreach}
</select>
<button id="agregar">Agregar</button>
<button id="modificar" hidden>Modificar</button>
<button id="eliminar" hidden>Eliminar</button>





<br><br><br>
<button id="deslogear" >Log out</button>