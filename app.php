<?php
class Game{
    private $pins = 10;
    private $input;
    public $h;
    public $j;
    public $score;
    public function roll(){
         for($i=0;$i<2;$i++){
            echo "Roll". "\n";
            $this->input = rtrim(fgets(STDIN), "\n");
            settype($this->input, 'integer');
            $this->pins = $this->pins - $this->input;
            echo "Remaining $this->pins pins". "\n";
         }
         
        
    }
    public function getScore(){
        $this->j - 20 == $this->score;
        echo "You're score is $this->score". "\n";
    }
}
$game = new Game();
echo "Let's play a game!". "\n";
$game->roll();
$game->getScore();
?>