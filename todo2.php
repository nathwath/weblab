<Pre>
    <?php
    print_r($_GET)
    ?>
</Pre>
 <?php
  $home = $_GET["homework"] ;
   $Midtern = $_GET["Midterm"] ;
    $Midtern = $_GET["Midterm"] ;
       $Final = $_GET["Final"] ;
       $total = $home + $Midtern +$Final ;
       $grade = "" ;


       
   

 ?>
 <div  style="border : solid 2px">
    <?php
 echo" ข้อมูลคะแนน";
echo "<br>";

echo "Homework  :" .$home;
    echo "<br>";

    echo "Midterm:" .$Midtern;
    echo "<br>";

    echo "Final  :" .$Final;
    echo "<br>";

    echo "Toall  :" .$total;
    echo "<br>";

     if ($total >= 80) {
    echo  $grade ="Grade: A";
} elseif ($total >= 70) {
    echo  $grade = "Grade: B";
} elseif ($total >= 60) {
    echo  $grade = "Grade: C";
} elseif ($total >= 50) {
    echo  $grade = "Grade: D";
} else {
    echo  $grade = "Grade: F";
}


    ?>

 </div>
 <a href="javascript:history.back()">Back</a>
 
 ?>