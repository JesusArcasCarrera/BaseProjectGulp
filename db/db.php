 <?php 
    require('../vendor/autoload.php');

    $urlStars = 'mongodb://virtualSky:tgbYHN741@127.0.0.1:27017/stars';    
    $mc =  new MongoDB\Client($urlStars);
    $db = $mc->stars;

?>