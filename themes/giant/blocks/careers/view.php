<style>
    .row.jobs {
    width: 1140px;
    background: unset !important;
    padding: 20px !important;
    border-radius: 7px;
    margin: 10px 0 !important;
    border: 1px solid #cccccc;
}
    .btn-view-job a:hover {
    text-decoration: none;
}
    .btn-view-job a {
    background: #018142;
    color: #fff;
    padding: 8px 15px;
    border-radius:5px !important;
}
select.selectpicker {
    padding: 6px 12px;
    vertical-align: middle;
}
.col-sm-2.btn-view-job {
    padding: 65px 0;
}
h4.career-title{
    color: #525252;
    font-size: 18px;
    font-weight: 600;
    padding-bottom: 5px;
}
.box-content-career div {
    height: 30px;
}
.box-content-career i.bx {
    color: #018142;
    font-size: 18px;
}
 a.btn-outline-info.active {background: #95C11E !important;}
    a.btn-outline-info {background: #ededed !important;border-radius: 5px;display: inline-flex;align-items: center;justify-content: center;padding: 10px 3px;margin: 5px;}
    a.btn-outline-info.active:focus{display:none;}
     .text-center.pagination {justify-content: flex-end;padding: 35px 0;}
</style>


 <div class="career-heading" phpb-blocks-container></div>
    <div class="well well-sm">
        <strong>Filter By:</strong>
            <select class="selectpicker">
              <option selected disabled>Select Department</option>
              <?php

$lang = Helper::getCareers();
// echo $lang;

    foreach ($lang as $value) {?>
        <option><?php echo $value->department ;?></option>
     <?php } ?> 
       </select>
       
          <select class="selectpicker">
              <option selected disabled>Select Location</option>
              <?php

    $lang = Helper::getCareers();
    // echo $lang;
    
        foreach ($lang as $value) {?>
            <option><?php echo $value->location ;?></option>
         <?php } ?> 
           </select>
        </div>
    <br>
    

<div class="main-career">

<?php

$lang = Helper::getCareers();
// echo $lang;

foreach ($lang as $value) {
    //  echo $value->title; 
    echo "<div class='row jobs'>";
     echo "<div class='col-sm-10 box-content-career'>";
     echo "<h4 class='career-title'>".$value->title."</h4>";
     echo "<div class='located'> <i class='bx bxs-map'></i> " .$value->location."</div>";
     echo "<div class='located'> <i class='bx bxs-briefcase-alt'></i> ".$value->position." Positions</div>";
     echo "<div class='department'> Department: " .$value->department."</div>";
     echo "<div class='dealine'> Application Deadline: " .$value->deadline."</div>";
     echo "</div>";
     echo "<div class='col-sm-2 btn-view-job'>";
     echo "<a href= '" .URL('en/career/view') .'/'.$value->slug. "' >View Detail <i class='bx bx-right-arrow-circle'></i></a>";
     echo "</div>";
    echo "</div>";
  }

?>
</div>


<script>

$(document).ready(function() {
  $('.main-career').after('<div id="nav" class="text-center pagination"></div>');
  var rowsShown = 6;
  var rowsTotal = $('.main-career .jobs').length;
  var numPages = rowsTotal / rowsShown;
  for (i = 0; i < numPages; i++) {
    var pageNum = i + 1;
    $('#nav').append('<a href="#" class="btn-outline-info" rel="' + i + '">&emsp;' + pageNum + '&emsp;</a> ');
  }
  $('.main-career .jobs').hide();
  $('.main-career .jobs').slice(0, rowsShown).show();
  $('#nav a:first').addClass('active');
  $('#nav a').bind('click', function(e) {
  	e.preventDefault();
    $('#nav a').removeClass('active');
    $(this).addClass('active');
    var currPage = $(this).attr('rel');
    var startItem = currPage * rowsShown;
    var endItem = startItem + rowsShown;
    $('.main-career .jobs').css('opacity', '1').hide().slice(startItem, endItem).
    css('display', 'flex').animate({
      opacity: 1
    }, 300);
  });
});

</script>