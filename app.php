<?php
class Game{
    private $pins = 10;
    private $input;
    private $score;
    private $spare;
    private $strike;
    public function roll(){
        if($this->pins<=0){
            echo "0 Pins left. Next round". "\n";
            $this->pins = 10;
        }
        else{
            for($i=0;$i<2;$i++){
                 if($this->pins<=0 && $i>=1) {
                     echo "STRIKE!". "\n";
                     $this->input = readline("");
                     settype($this->input, 'integer');
                     $this->pins = $this->pins - $this->input;
                     $this->strike = $this->strike + $this->input + $this->input;
                     break;
                }  
                 elseif ($this->pins<=0 && $i=0){
                     echo "SPARE!". "\n";
                     $this->input = readline("");
                     settype($this->input, 'integer');
                     $this->pins = $this->pins - $this->input;
                     $this->spare = $this->spare + $this->input;
             }
                 else{
                     echo "Roll". "\n";
                     $this->input = readline("");
                     settype($this->input, 'integer');
                     $this->pins = $this->pins - $this->input;
                     $this->score = $this->score + $this->input;
             }
            }
        }
    }
         public function getScore(){
        $this->score = $this->score + $this->strike + $this->spare;
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