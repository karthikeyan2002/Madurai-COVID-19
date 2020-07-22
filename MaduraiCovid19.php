<?php

    
if (!file_get_contents("https://api.covid19india.org/state_district_wise.json")) {
          
    die("FAILED TO GET CONTENT TRY AGAIN");
     
} else{
    
$covidcases=file_get_contents("https://api.covid19india.org/state_district_wise.json");

        $position = strpos($covidcases,'Madurai');
        $cases = substr($covidcases,$position+32,97);

        $Arraycases = explode(',', $cases);

        for($i=0; $i < count($Arraycases); $i++){

            $key_value = explode(':', $Arraycases[$i]);
            $end_array[$key_value [0]] = $key_value [1];

        }

        $madurai = array_values($end_array);
        
        $Activecases = (int)$madurai[0];
        $Deathcases = (int)$madurai[2];
        $Totalcases = (int)$madurai[1];
        $Recoverdcases =(int)($Totalcases - ($Deathcases + $Activecases));
       

        $ActivePercent = round(($Activecases / $Totalcases)*100,2);
        $RecoveryPercent = round(($Recoverdcases / $Totalcases)*100,2);
        $deathPercent = round(($Deathcases / $Totalcases)*100,2);

        $RecoveryPercent1=$RecoveryPercent*10;
        $ActivePercent1=$ActivePercent*10;
        $deathPercent1=$deathPercent*75;
        
        if (!file_get_contents("https://api.covid19india.org/v3/data-all.json")) {
          
            die("FAILED TO GET CONTENT TRY AGAIN");
     
        } else {
        
        $MaduraiDailyCases=file_get_contents("https://api.covid19india.org/v3/data-all.json");
        $MduArray=json_decode($MaduraiDailyCases,true);

        $date = date("Y-m-d");
        $PreviousdayWithYear=date('Y-m-d',strtotime("-1 days"));
       
       if (array_key_exists ($date,$MduArray)){
         
                if(isset($MduArray[$date]['TN']['districts']['Madurai']['delta'])){
                    
                    $MduArray2 = $MduArray["$date"]['TN']['districts']['Madurai']['delta'];
                    $TodayConfirmed = $MduArray2['confirmed'];
                    $TodayDeath = $MduArray2['deceased'];
                    $TodayRecoverd= $MduArray2['recovered']; 
                   
                }else{
                    
                    $MduArray2 = $MduArray[$PreviousdayWithYear]['TN']['districts']['Madurai']['delta'];    
                    $TodayConfirmed = $MduArray2['confirmed'];
                    $TodayDeath = $MduArray2['deceased'];
                    $TodayRecoverd= $MduArray2['recovered'];
            
                  }
         
       }else{
                    $MduArray2 = $MduArray[$PreviousdayWithYear]['TN']['districts']['Madurai']['delta'];    
                    $TodayConfirmed = $MduArray2['confirmed'];
                    $TodayDeath = $MduArray2['deceased'];
                    $TodayRecoverd= $MduArray2['recovered'];
              }
              
        $TodayActive =$TodayConfirmed - ($TodayDeath+$TodayRecoverd);
        $TodayActive1=abs($TodayActive);
           
        echo "Loading... Please Wait ...";
}}
?> 