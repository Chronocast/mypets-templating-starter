<?php
    //Require the autoload file
    error_reporting('E_ALL');
    require_once('vendor/autoload.php');
    session_start();
    
    //Create an instance of the Base class
    $f3 = Base::instance();
    
    //Default route
    $f3->route('GET /', function($f3) {
        
        //save variables
        $f3->set('username', 'jschmo');
        $f3->set('password', sha1('Password01'));
        $f3->set('title', 'Working with Templates');
        $f3->set('bookmarks', array('http://www.reddit.com','',''));
        
        $f3->set('addresses', array('primary' => '1000 Apple Ln. Seattle, Wa 98999', 'secondary' => '2510 100th Court Tac, Wa 90000'));
        $f3->set('color', 'purple');
        $f3->set('desserts', array('chocolate' => 'Chocolate Mousse', 'vanilla' => 'Vanilla Custard', 'strawberry' => "Strawberry Shortcake"));
        
        //conditional content
        $f3->set('preferredCustomer', true);
        $f3->set('lastLogin', strtotime('-1 week'));

        //objects
        $pet = new Pet('Fido', 'pink');
        $pet2 = new Pet('Henrietta', 'purple');
        $f3->set('myPet', $pet);
        $f3->set('henrietta', $pet2);
        
        
        //load a template
        echo Template::instance()->render('pages/info.html');

        
        
    });

    //Run fat free
    $f3->run();
    