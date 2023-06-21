{include file= 'header.tpl'}
<section class="los-modelos">
    {foreach $modelos as $modelo}
        <section class="el-modelos">
            <p>fabricante: {$modelo->modelos_fabricante}</p>
            <p>modelos: {$modelo->modelos_modelo}</p>
            <div class="ratio ratio-4x3">
                <img class="lasimagenes" src="{$modelo->modelos_imagen}">
            </div>
            <a class="btn btn-light" href="{$BASE_URL}modelo/{$modelo->modelos_id}">Ver más</a>
            <a class="btn btn-danger" href="{$BASE_URL}borrar/{$modelo->modelos_id}">borrar</a>
            <a class="btn btn-success" href="{$BASE_URL}editar/{$modelo->modelos_id}">editar</a>
        </section>
    {/foreach}
</section>
{include file = 'footer.tpl'}