<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/AnagramGenerator.php";

    // Add symfony debug component and turn it on.
    use Symfony\Component\Debug\Debug;
    Debug::enable();

    // Initialize application
    $app = new Silex\Application();

    // Set Silex debug mode in $app object
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_anagram_result", function() use($app) {
        $my_AnagramGenerator = new AnagramGenerator;
        $anagrams = $my_AnagramGenerator->makeAnagram($_GET['word'], $_GET['list']);
        return $app['twig']->render('view_anagram.html.twig', array('result' => $anagrams));
    });

    return $app;
?>
