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
        $str = $this->request->query['text1'];

        $result = "";

        if ($str != "")
        {
            $result = "Your Type: ".$str;
        }
        else
        {
            $result = "Empty...";
        }

        $this->set("result", $result);
    }
}
?>