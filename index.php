<?php
$userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
$isMobile = preg_match('/iphone|ipod|android|blackberry|mini|windows\sce|palm/i', $userAgent);

if ($isMobile) {
    header('Location: ./app.php');
} else {
    header('Location: ./home.php');
}
exit;
?>