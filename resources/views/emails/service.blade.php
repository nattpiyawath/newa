<?php

if($lang == 'en'){
    
    $team = 'Dear Honda Automobile Team';
    $desc = ' You have received service appointment from website. ';
    $below = 'Below are the details:';
    
    $name ='Name';
    $phon = 'Phone Number';
    $model = 'Model';
    $kilo = 'Mileage (kilometers)';
    $type = 'Repair Type';
    $app_date ='Appointment Date';
    $app_time = 'Appointment Time';
    $remark = 'Remark';


} else{
    
    $team = 'Dear Honda Automobile Team';
    $desc = ' You have received service appointment from website. ';
    $below = 'Below are the details:';
    
    $name ='Name';
    $phon = 'Phone Number';
    $model = 'Model';
    $kilo = 'Mileage (kilometers)';
    $type = 'Repair Type';
    $app_date ='Appointment Date';
    $app_time = 'Appointment Time';
    $remark = 'Remark';
    
}

?>

<p> <?=$team?></p>
<p> <?=$desc?> </p>
<p> <?=$below?> </p> <br>

<p> <?=$name?>: <strong>{{ $customername }}</strong></p>
<p> <?=$phon?>: <strong>{{ $com_phone }}</strong></p>
<p> <?=$model?>: <strong>{{ $tycomplaint }}</strong></p>
<p> <?=$kilo?>: <storng>{{ $cus_email }}</storng></p>
<p> <?=$type?>: <strong>{{ $check_dis }}</strong></p>
<p> <?=$app_date?>: <strong>{{ $appoint_date }}</strong></p>
<p> <?=$app_time?>: <strong>{{ $appoint_time }}</strong></p>
<p> <?=$remark?>: <strong> {{ $remark }} </storng></p>


