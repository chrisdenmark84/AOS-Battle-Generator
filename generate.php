<?php



//defind realms and battleplans
//$battle_plan = ["Knife To The Heart", "Total Conquest", "Duality of Death", "Battle for the Pass", "Starstrike", "Scorched Earth", "Total Commitment", "Focal Points", "The Better Part of Valor", "Shifting Objectives", "Places of Arcane Power", "Relocation Orb", "The Bladges Edge", "Forcing the Hand"];
//$realm = ["Azyr", "Shyish", "Hysh", "Ulgu", "Chamon", "Ghyran", "Ghur", "Aqshy"];





function generateGame($battle, $realm)
{

    $count = 1;

//loop through battle generation twice
    while ($count <= 2){
    
        //select a random realm and battleplan from the array
        $chosen_battle = array_rand($battle);
        $chosen_realm = array_rand($realm);

        //output the chosen realm and battleplan
        echo "<h3>GAME $count : The Choas gods have chosen <b>$battle[$chosen_battle]</b> in the realm of <b>$realm[$chosen_realm]</b>.</h3>\n";
        $count++;
}

}

?>