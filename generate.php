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
                
        echo "<h3>Battle $count</h3><div class=\"form\"><p><b>". $battle[$chosen_battle][0] . "</b><i>(" . $battle[$chosen_battle] [1] . "</i>) in the realm of <b>" . $realm[$chosen_realm] . "</b><br></p></div><br>";
        $count++;
}

}


?>