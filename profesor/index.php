<?php
require_once 'includes/header.php';
require_once '../includes/conexion.php';

$idprofesor = $_SESSION['profesor_id'];

$sql = "SELECT * FROM profesor_materia as pm INNER JOIN grados as g ON pm.grado_id = g.grado_id INNER JOIN aulas as a ON pm.aula_id = a.aula_id INNER JOIN profesor as p ON pm.profesor_id = p.profesor_id INNER JOIN  materias as m ON pm.materia_id = m.materia_id WHERE pm.estado !=0 AND pm.profesor_id =$idprofesor";
$query = $pdo->prepare($sql);
$query->execute();
$row = $query->rowCount();
?>

<main class="app-content">
      
    </main>

<?php
require_once 'includes/footer.php';
?>