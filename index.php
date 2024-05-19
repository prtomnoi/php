<?PHP 
   $name = "Hello world 2"; // string
   $surname = "John wick";
   $metung = "Is a dog";
   $age = 123; // Integer
   $price = 10.50;  // float
   $status = false; // boolean (true , false)
   $arr = array("green", "red" , "blue" , "yellow" , "black"); // array
   $arr2 = array("Cat" , 300 , 100.99 , false , ["green", "red"]);
   $arr3 = ["cat" , "dog" , "rat"]; // array
//    echo $arr[1]; // single
//    print_r($arr3); // multiple 
    //  echo count($arr);
//    LOOP ทำซ้ำข้อมูล
    for($i=0; $i<count($arr2); $i++) {
        $arr2[$i]; //$i = 0;
    }

    // $pet = "cat 3";
    // if($pet == "cat") {
    //     echo "Yes cat";
    // }else if($pet == "cat 2") {
    //     echo "Cat 2";
    // }
    // else{
    //     echo "Unknow";
    // }

    $score = $_POST['score'];

    if($score >= 50 && $score < 60){
        echo "Grade D";
    }else if($score >= 60 && $score < 70){
        echo "Grade C";
    }else if($score >= 70 && $score < 80){
        echo "Grade B";
    }else if($score >= 80 ){
        echo "Grade A";
    }else{
        echo "Grade F";
    }
?>

