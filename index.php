<?php


    require_once("vendor/autoload.php");


    //create an instance sof the Base class
    $f3 = Base::instance();

    $f3->set('colors', array('pink', 'green', 'blue'));

    //Define a default route
    $f3->route('GET /', function () {
        $view = new View;
        echo $view->render('views/home.html');
    });

    //Define a default route
    $f3->route('GET /pets/show/@pets', function ($f3, $params) {
        switch($params['pets']) {
            case 'dog' :
                echo '<h2>Dog</h2>';
                echo "<img src='../../images/dog.jpeg'>";
                break;
            case 'cat' :
                echo '<h2>Cat</h2>';
                echo "<img src='../../images/cat.jpeg' alt='cat'>";
                break;
            default:
                $f3->error(404);
        }
    });

    //Define a default route
    $f3->route('GET /pets/order', function () {
        $view = new View;
        echo $view->render('views/form1.html');
    });

    //Define a default route
    $f3->route('POST /pets/order2', function ($f3) {
        $view = new View;
        echo Template::instance()->render('views/form2.php');
    });

    //Define a default route
    $f3->route('POST /pets/results', function () {
        $view = new View;
        echo $view->render('views/results.php');
    });

    $f3->route('GET|POST /new-pet', function ($f3) {
        if(isset($_POST['submit'])){
            $color = $_POST['color'];
            $animal = $_POST['animal'];
            $name = $_POST['name'];

            include("./views/model/validate.php");

            $f3->set('color', $color);
            $f3->set('animal', $animal);
            $f3->set('name', $name);
            $f3->set('errors', $errors);
            $f3->set('success', $success);
            $f3->set('submitted', $_POST['submit']);

        }
        echo Template::instance()->render('views/new-pet.php');
    });


    //run fat free
    $f3->run();
