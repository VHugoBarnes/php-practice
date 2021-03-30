<h1>Listado de notas</h1>
<?php while($nota = $notas->fetch_object()): ?>

    <p><?= $nota -> titulo ?> - <?= $nota -> fecha ?></p>

<?php endwhile; ?>