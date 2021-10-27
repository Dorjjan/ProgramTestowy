<?php
class Game{
    private $pins;
    private $input;
    private $score;
    public function roll(){
        $this->pins = 10;
        for($i=0;$i<2;$i++){
             if($this->pins<=0)
             {
                 echo "0 pins left";
                 break;
             }
             else{
            echo "Roll". "\n";
            $this->input = readline("");
            settype($this->input, 'integer');
            $this->pins = $this->pins - $this->input;
           
             }
         }
         
        
    }
    public function getScore(){
     $this->score = $this->score + $this->input;
     echo $this->input;
     echo "You're score is $this->score". "\n";
    }
    public function finalResult(){

    }
}
$game = new Game();
echo "Let's play a game!". "\n";
for($i=0;$i<3;$i++){
$game->roll();
$game->getScore();
}
?>