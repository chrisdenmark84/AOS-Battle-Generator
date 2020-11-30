<?php

//generates a battle if count if less than 1 currently
function generateBattle($battle, $realm, $num_battles)
{

    $count = 1;

//loop through battle generation twice
    while ($count <= $num_battles){
    
        //select a random realm and battleplan from the array
        $chosen_battle = array_rand($battle);
        $chosen_realm = array_rand($realm);

        //output the chosen realm and battleplan
        echo "<p>The Choas gods have chosen <b>$battle[$chosen_battle]</b> in the realm of <b>$realm[$chosen_realm]</b>.\n";
        $count++;
}

}


?>