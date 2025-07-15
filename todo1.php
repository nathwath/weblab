<Pre>
    <?php
    print_r($_GET)
    ?>
</Pre>
   <?php
    $num1 = $_GET["number1"] ;
    $num2 = $_GET["number2"] ;
    $operator = $_GET["Operator"] ;
    echo $num1."<br>". $num2 ."<br>". $operator ."<br>";
    switch ($operator) {
        case '+': echo"ผลบวกเลขสองจำนวน" .$resule =$num1 + $num2; break;
        case "-": echo "ผลลบเลขสองจำนวน".$resule =$num1 - $num2; break;
        case "*": echo "ผลคูณเลขสองจำนวน".$resule =$num1 * $num2; break;
        case "/": echo "ผลหารเลขสองจำนวน".$resule =$num1 / $num2; break;
        case "%": echo "ผลหารเอาเศษของเลขสองจำนวน".$resule =$num1 % $num2; break;
        default: echo "อย่ามั่วจร้า";
    }

       ?>
       
       <div  style="border : solid 2px"> 
       <?php
       echo " ข้อมูลที่ผู้ใช้กรอกมา";
       echo "<br>";
        
    echo "Number 1 :" .$num1;
    echo "<br>";

    echo "Number 2 :" .$num2;
    echo "<br>";

     echo "Operator :" .$operator;
    echo "<br>";
    echo "resule :" .$resule;
     echo "<br>";

        
       
       ?>
       
       </div>
        
       