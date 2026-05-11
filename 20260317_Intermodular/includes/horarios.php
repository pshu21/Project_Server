<?php
require_once 'config/db.php';

$stmt = $pdo->query("SELECT dia, hora_apertura, hora_cierre FROM horarios");
$filas_horario = $stmt->fetchAll(); 
?>

<section id="horarios" class="seccion">
    <h2>Nuestros Horarios</h2>
    <p>Consulta nuestras horas de apertura al público.</p>
    
    <div class="contenedor-tabla">
        <table>
            <thead>
                <tr>
                    <th>Día de la semana</th>
                    <th>Apertura</th>
                    <th>Cierre</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($filas_horario) > 0): ?>
                    <?php foreach ($filas_horario as $h): ?>
                        <tr>
                            <td><?= $h['dia'] ?></td>
                            <td><?= $h['hora_apertura'] ?></td>
                            <td><?= $h['hora_cierre'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3">No hay horarios registrados.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</section>