<?php
require_once 'config/db.php';

$stmt = $pdo->query("SELECT url, descripcion FROM fotos");

$fotos = $stmt->fetchAll(); 
?>

<section id="galeria" class="seccion">
    <h2>Nuestras Instalaciones</h2>
    
    <div class="galeria-grid">
        
        <?php if (count($fotos) > 0): ?>
            <?php foreach ($fotos as $foto): ?>
                <div class="foto-item">
                    <img src="assets/img/<?= $foto['url'] ?>" alt="<?= $foto['descripcion'] ?>">
                    <p><?= $foto['descripcion'] ?></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No hay fotos en la base de datos.</p>
        <?php endif; ?>

    </div>
</section>