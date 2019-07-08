<?php
namespace App\Controller;

class HelloController extends AppController
{
    public $name = 'Hello';

    // public $auto_render = false;
    public $autoRender = false;

    public function index()
    {
        // echo 'Hello World!';

        // フォワード
        // $this->setAction("other");

        // リダイレクト
        // $this->redirect("./other");
        $this->redirect("https://www.yahoo.co.jp/");
    }

    public function other()
    {
        echo 'これは、index以外の表示です。';
    }
}
?>