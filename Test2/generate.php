
<!--PHP Code-->
<?php
    $number = $_GET["Generate"];
    isEmpty($number);
   // Input validation
   function isEmpty($variable){
        if(empty($variable) || !is_numeric($variable) || $variable <= 0){
            echo('<input action="action" type="button" value="Back" onclick="window.history.go(-1); return false;" />');
            $emptyString ="<script type='text/javascript'>alert('Please enter a valid number that is greater than 0:');</script>";
            die($emptyString);
                
        }
    }
    
    // Generate random name/surname/age/date_of_birth
    function Generate(){
       //Arrays
        $Names = array("Ashleigh","James","Willem","Grant","Kiana","Christine",
        "Christian","Dwayne","Emily","Johannes","Billy","Bobby","Diana","Dante",
        "Dylan","Anna","David","William","Eve","Adam");

        $Surnames = array("Rossouw","Powell","Wessels","Abbott","Aspeling",
        "Herrington","Beckham","Lamb","September","Conradie","Smith","Willemse","Burger",
        "Flynn","McGregor", "Calzone","Montes","Rodriguez","Fernandez","Zhang");
        
        //random name
        $first_name = $Names[array_rand($Names)];
        $last_name = $Surnames[array_rand($Surnames)];
        
        //random age and initial
        $age = random_int(15,70);
        $initials = substr($first_name, 0, 1);

        //random birth date
        $random = rand(strtotime("70 years ago"),strtotime("18 years ago"));
        $date_of_birth = date("d/m/Y",$random);
        $x = 0;

        $data = array(
            ["Id"=> $x,"name" => $first_name,"surname" => $last_name,"initials" => $initials, "age" => $age,"dob" => $date_of_birth] 
        );

        return $data;
    }   
        

    // Create CSV File function
    function createCSV($numVariations){
        
        $file_path = fopen('output\\output.csv', 'w');

        $y = 0;

        $header =  array(
            ['Id','Name','Surname','Initial','Age','Date_Of_Birth']
        );
        foreach($header as $fields){
            fputcsv($file_path, $fields);
        }
        for($i = 0; $i < $numVariations; $i++){
            $y++;
            $array = Generate();
            $array[0]["Id"] = $y;

            foreach($array as $field){
                fputcsv($file_path, $field);
            }
            
        }
        echo('<input action="action" type="button" value="Back" onclick="window.history.go(-1); return false;" />');
        $CompletedString ="<script type='text/javascript'>alert('CSV File Successfully Created: Can be found in output folder.');</script>";
        echo($CompletedString);
        fclose($file_path);
    }
    
    createCSV($number);

 ?>
