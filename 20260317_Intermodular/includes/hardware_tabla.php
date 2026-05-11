<?php
require_once 'config/db.php';

$stmt = $pdo->query("SELECT tipo_puesto, cpu, gpu, ram FROM equipamiento");

$equipos = $stmt->fetchAll(); 
?>

<section id="hardware" class="seccion">
    <h2>Equipamiento Disponible</h2>
    <div class="contenedor-tabla">
        <table>
            <thead>
                <tr>
                    <th>Tipo de Puesto</th>
                    <th>Procesador (CPU)</th>
                    <th>Gráfica (GPU)</th>
                    <th>RAM</th>
                </tr>
            </thead>
            <tbody>
                
                <?php if (count($equipos) > 0): ?>
                    <?php foreach ($equipos as $equipo): ?>
                        <tr>
                            <td><?= $equipo['tipo_puesto'] ?></td>
                            <td><?= $equipo['cpu'] ?></td>
                            <td><?= $equipo['gpu'] ?></td>
                            <td><?= $equipo['ram'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4">No hay equipamiento en la base de datos.</td>
                    </tr>
                <?php endif; ?>

            </tbody>
        </table>
    </div>
</section>