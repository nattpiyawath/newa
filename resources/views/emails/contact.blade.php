<?php

if($lang == 'en'){
    
    $amret_team = 'Hi Honda Team,';
    $desc = ' You have received a new inquery from customer via Honda Motorcycle (www.ncxhonda.com/motorcycles). ';
    $below = 'Below are the details:';
    $name ='Name';
    $email = 'Email';
    $phone = 'Phone Number';
    $subject = 'Subject';
    $msg = 'Message';

} else{
    
    $amret_team = ' សួស្តីក្រុមការងារ ហុងដា! ';
    $desc = ' អ្នកបានទទួលការសាកសួរព័ត៌មានពីអតិថិជន តាមរយៈគេហទំព័រ (www.ncxhonda.com/motorcycles)។ ';
    $below = ' ខាងក្រោមនេះជាព័ត៌មានលម្អិត៖ ';
    $name = ' ឈ្មោះ​ ';
    $email = 'អ៊ីម៉ែល';
    $phone = ' លេខទូរស័ព្ទ ';
    $subject = ' គោលបំណង ';
    $msg = ' សារ ';
    
}

?>

<p> <?=$amret_team?></p>
<p> <?=$desc?> </p>
<p> <?=$below?> </p>
<p> <?=$name?>: <strong>{{ $name }}</strong></p>
<p> <?=$email?>: <strong>{{ $email }}</strong></p>
<p> <?=$phone?>: <strong>{{ $phone }}</strong></p>
<p> <?=$subject?>: <strong>{{ $subject }}</strong></p>
<p> <?=$msg?>: <br> {{ $msg }}</p><br>