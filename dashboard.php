
<?php 

require_once 'core/init.php';

require_once 'includes/header.php'; 

if(!$user->isLoggedIn()) {
    Redirect::to('index.php');
}
?>


<?php require_once 'includes/footer.php'; ?>