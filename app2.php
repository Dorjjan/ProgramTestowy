<?php
class Game{
    private $pins=10;
    private $input;
    private $spare;
    private $strike;
    private $score;
    private $i, $st, $sp;
    public function roll(){
        echo "Let's roll" . "\n";
        $this->input = readline("");
        settype($this->input, 'integer');
        $this->pins = $this->pins - $this->input;
        if($this->pins<0)
        {
            echo "There is $this->pins left". "\n";
            exit;
        }
        else
        {
        echo "You hit $this->input pins" . "\n";
        $this->score = $this->score + $this->input;
        $this->i++;
        }
    }
    public function strike(){   
        if($this->pins<=0 && $this->i==1)
        {
            echo "STRIKE!" . "\n";  
        }
        $this->st++;  
         
        if($this->st>=1 && $this->st<=2)
        {
            $this->strike = $this->strike + $this->input;
        }
        if($this->st==2)
        {
            $this->st = 0;
        }
        
    }
    public function spare(){
        if($this->pins<=0 && $this->i==2)
        {
            echo "SPARE!" . "\n";
            $this->sp++;
        }
        if($this->sp>=2 && $this->sp<=4)
        {
            $this->spare = $this->spare + $this->input;
        }
        if($this->sp==3)
        {
            $this->sp = 0;
        }
        
    }
    public function nextRound(){
        if($this->pins<=0 || $this->i==2)
        {
            echo "Next round" . "\n";
            $this->pins = 10;
            $this->i = 0;
        }
        else{}
    }
    public function getScore(){
        echo "You're score is $this->score". "\n";
        echo "You're strike is $this->strike". "\n";
        echo "You're spare is $this->spare". "\n";
    }
}

$game = new Game();
    echo "Let's play a game!" . "\n";
    for($i=0;$i<20;$i++)
    {
        $game->roll();
        $game->strike();
        $game->spare();
        $game->getScore();
        $game->nextRound();
    }
?>
