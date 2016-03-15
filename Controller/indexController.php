<?php
namespace Controller;
class IndexController{
    public function meetAction(){
        $app = new \MeetMe\App();
    }

    public function matchAction(){
        $app = new \MatchMe\App();
    }

    public  function tweetAction(){
        $u = new \Twitter\User();
        $t =$u->getTimeline();
        var_dump($t);
    }
}