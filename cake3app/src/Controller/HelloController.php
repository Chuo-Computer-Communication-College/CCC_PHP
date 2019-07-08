<?php
namespace App\Controller;

class HelloController extends AppController
{
    public $name = 'Hello';

    // public $auto_render = false;
    public $autoRender = false;

    public function index()
    {
        echo 'Hello World!';
    }

    public function other()
    {
        echo 'これは、index以外の表示です。';
    }
}

?>