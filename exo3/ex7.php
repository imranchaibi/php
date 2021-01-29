<?php
// MorF = male or female 
function test($age, $MorF){
if($MorF=="Homme" && $age>=18){
return "Vous êtes un homme et vous êtes majeur";
}
else if($MorF=="Homme" && $age<18){
return "Vous êtes un homme et vous êtes mineur";
}else if($MorF=="Femme" && $age<18){
return "Vous êtes une femme et vous êtes mineur";
}else if($MorF=="Femme" && $age>=18){
return "Vous êtes une femme et vous êtes majeur";
}

}
echo test(22, "Homme");
?>