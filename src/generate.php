<?php

//generates a battle if count if less than 1 currently
function generateBattle($battle, $realm, $num_battles)
{
    //Ensure that there is a max of 10 battleplans, if not exit
    if ($num_battles > 10) {
        exit("<div class=\"result\"><h3>Error</h3><p>No, only 10 battles or less silly!</p>");
    }
    $count = 1;

//loop through battle generation twice
    while ($count <= $num_battles){
    
        //select a random realm and battleplan from the array
        $chosen_battle = array_rand($battle);
        $chosen_realm = array_rand($realm);

        //output the chosen realm and battleplan
                
        echo "<div class=\"result\"><h3>Battle $count:</h3><h4>Battleplan:</h4><p>". $battle[$chosen_battle][0] . " (" . $battle[$chosen_battle] [1] . ")</p><h4>Realm:</h4> <p>" . $realm[$chosen_realm] . "</p></div>";
        $count++;
}

}


?>