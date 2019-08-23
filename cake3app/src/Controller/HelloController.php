<?php
namespace App\Controller;

class HelloController extends AppController
{
    public function initialize()
    {
        $this->viewBuilder()->layout('Hello');
        
        $this->set('msg', 'Hello/index');
        $this->set('footer', 'Hello\footer2');
    }

    public function index()
    {
    }

    public function sendForm()
    {
        $result = "※送信された情報<br>";

        foreach ($this->request->query as $key => $value)
        {
            $result .= $key." => ".$value."<br>";
        }

        $this->set("result", $result);
    }
}
?>