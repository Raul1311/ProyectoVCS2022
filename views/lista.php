<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Sexo</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($datos as $dato): ?>
            <tr>
                <td> <?= $dato["id"]?></td>
                <td> <?= $dato["nombre"]?></td>
                <td> <?= $dato["edad"]?></td>
                <td> <?= $dato["sexo"]?></td>
            </tr>
            <?php endforeach; ?>
    </tbody>
</table>
