<?php
require '../app/config.php';
$id=$_GET['id'];

$collection->deleteOne(['_id' => new MongoDB\BSON\ObjectID($id)]);

if($collection){
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

header("Location: index.php ");
?>