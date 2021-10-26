<?php
class Game{
    public $i;
    private $pins;
    private $input;
    public $h;
    public $j;
    public function roll(){
        do{
            $this->i = 0;    
            $this->pins = 10;
            echo "Roll". "\n";
            $this->input = rtrim(fgets(STDIN), "\n");
            settype($this->input, 'integer');
            $this->h = $this->pins - $this->input;
            $this->j = $this->h - $this->input;
            $this->i++;

        } while($this->pins<=0|$this->i=2|$this->h<=0);
    }
    public function getScore(){
        $this->j = $j;
        $j - 20 == -$score;
        echo "You're score is $score". "\n";
    }
}
$game = new Game();
echo "Let's play a game!". "\n";
$game->roll();

?>