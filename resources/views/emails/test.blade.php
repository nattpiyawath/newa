<?php

if($lang == 'en'){
    
    $amret_team = 'Dear Honda Team,';
    $desc = ' You have received a test drive booking from customer via Honda Automobiles (www.ncxhonda.com/automobiles).';
    $below = 'Below are the details:';
    $modeltest ='Model';
    $cuname = 'Customer Name';
    $phone = 'Phone Number';
    $date_book = 'Date';
    $cutime = 'Time';
    $culocat = 'Location';

} else{
    
    $amret_team = ' សួស្តីក្រុមការងារ ហុងដា! ';
    $desc = ' អ្នកបានទទួលការកក់បើកបរសាកល្បងពីអតិថិជន តាមរយៈគេហទំព័រ (www.ncxhonda.com/automobiles)។ ';
    $below = ' ខាងក្រោមនេះជាព័ត៌មានលម្អិត៖ ';
    $modeltest = ' ម៉ូឌែល ';
    $cuname = 'ឈ្មោះអតិថិជន';
    $phone = ' លេខទូរស័ព្ទ ';
    $date_book = ' ថ្ងៃខែ ';
    $cutime = ' ពេលវេលា ';
    $culocat = 'ទីតាំង';
    
}

?>

<p> <?=$amret_team?></p>
<p> <?=$desc?> </p>
<p> <?=$below?> </p>
<p> <?=$modeltest?>: <strong>{{ $smodel }}</strong></p>
<p> <?=$cuname?>: <strong>{{ $test_name }}</strong></p>
<p> <?=$phone?>: <strong>{{ $test_phone }}</strong></p>
<p> <?=$date_book?>: <strong>{{ $test_date }}</strong></p>
<p> <?=$cutime?>: <string>{{ $test_time }}</string></p><br>
<p> <?=$culocat?>: <string>{{ $test_location }}</string></p>

