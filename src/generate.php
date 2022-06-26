<?php

class generate{

    // Chris I've added data.php into this class, these are private variables, can be accessed by $this->battle_plan inside this class.

    private $battle_plan = array(
        array("The Prize of Galet", "Seaon 1 22-23"),
        array("The Realmstone Cache", "Seaon 1 22-23"),
        array("Battlelines Drawn", "Seaon 1 22-23"),
        array("The Lurkers Below", "Seaon 1 22-23"),
        array("In the Presence of Idols", "Seaon 1 22-23"),
        array("The Nidus Paths", "Seaon 1 22-23"),
        array("The Mighty and the Cunning", "Seaon 1 22-23"),
        array("Head-on Collision", "Seaon 1 22-23"),
        array("Won't Back Down", "Seaon 1 22-23"),
        array("The Silksteel Nests", "Seaon 1 22-23"),
        array("Close to the Chest", "Seaon 1 22-23"),
        array("Turf War", "Seaon 1 22-23"),
        array("Frontal Assault", "Core Rule Book 2021"),
        array("Burn and Pillage", "Core Rule Book 2021"),
        array("Rising Power", "Core Rule Book 2021")
    );


    private $realm = ["Azyr", "Shyish", "Hysh", "Ulgu", "Chamon", "Ghyran", "Ghur", "Aqshy"];


   //generates a battle if count if less than 1 currently
    function generateBattle($num_battles)
    {
        //Ensure that there is a max of 10 battleplans, if not exit
        if ($num_battles > 10) {
            exit("<div class=\"result\"><h3>Error</h3><p>No, only 10 battles or less silly!</p>");
        }
        $count = 1;

        // Created a new array inside this function
        $return = [];


    //loop through battle generation twice
        while ($count <= $num_battles){
        
            //select a random realm and battleplan from the array
            // @Chris I'm calling the arrays above like this, no need for them to go into the function, we wanna make the function as simple as possible. 
            $chosen_battle = array_rand($this->battle_plan);
            $chosen_realm  = array_rand($this->realm);


            $return[$count]['battle_plan_name']  = $this->battle_plan[$chosen_battle][0];
            $return[$count]['battle_plan_book']  = $this->battle_plan[$chosen_battle][1];
            $return[$count]['realm_name']        = $this->realm[$chosen_realm];
            $return[$count]['count']             = $count;
            $count++;
        }

        return $return;

    } 

}
