<?php
if(isset($_POST['submit'])){

    $finalResult = calc($_POST['num1'],$_POST['num2'],$_POST['operation']);
    header("location:calc.php?finalResult=$finalResult");
}  
else{
    header("location:calc.php");
}
function calc(int|float $num1 , int|float $num2 , string $operation): int|float|string{
    if($operation == 'add'){
        return $num1+$num2;
    }
    elseif($operation == 'sub'){
        return $num1-$num2;
    }
    elseif($operation == 'multi'){
        return $num1*$num2;
    }
    elseif($operation == 'div'){
        return $num1/$num2;
    }
    else{
        return "not valid";
    }
} 
?>