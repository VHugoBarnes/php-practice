<?php if (isset($gestion)): ?>
	<h1>Gestionar pedidos</h1>
<?php else: ?>
	<h1>Mis pedidos</h1>
<?php endif; ?>

<table>
    <tr>
        <th>No. Pedido</th>
        <th>Coste</th>
        <th>Fecha</th>
    </tr>
    
    <?php while($pedido = $pedidos->fetch_object()): ?>
        <tr>
            <td><a href="<?=base_url?>pedido/detalle&id=<?=$pedido->id?>"><?=$pedido->id?></a></td>
            <td>$<?=$pedido->coste?></td>
            <td><?=$pedido->fecha?></td>
            <td><?=Utils::showStatus($ped->estado)?></td>
        </tr>
    <?php endwhile; ?>
</table>