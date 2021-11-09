<?php
require '../app/config.php';
$id=$_GET['id'];

$collection2->deleteOne(['_id' => new MongoDB\BSON\ObjectID($id)]);

if($collection2){
    ?>
        <script>
            Swal.fire({
            title: 'Custom animation with Animate.css',
            showClass: {
                popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            }
            })
        </script>
    <?php
}

header("Location: usuarios.php ");
?>