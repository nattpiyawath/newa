<?php

if (isset($_GET['page'])){
   echo '<h1>Branch Location</h1>';
}

else{
$currentLocale = app()->getLocale();
?>

<style type="text/css">

    table.list-table thead {
        background: #e21428;
        color: #fff;
    }
    table.list-table th, table.list-table td {
        padding: 10px;
        border: 1px solid #e0e0e0;
        font-size: 13px;
    }
    table.list-table #get-dealers tr {
        background: #f3f3f3;
    }
    table.list-table {
        margin-top: 5rem;
    }

    form.form-inline label.selectbox {
        font-size: 16px;
        font-weight: 500;
        text-transform: uppercase;
        margin-right: 25px;
    }
    input#reset_state:hover {
        background: #eb1b30;
        color: #fff;
        transition: 0.4s;
        filter: drop-shadow(2px 3px 3px #00000050);
    }
    input#reset_state {
        padding: 3px 24px;
        margin-left: 30px;
        border-radius: 50px;
        border: 1px solid #eb1b30;
        padding: 8px 35px;
        cursor: pointer;
    }
    select#type , select#province{
        font-size: 16px;
        border-radius: 50px;
        padding: 8px 50px;
        border: 0 !important;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' fill='%717171'><polygon points='0,0 100,0 50,50'/></svg>") no-repeat;
        background-size: 10px;
        background-position: calc(100% - 15px) 17px;
        background-repeat: no-repeat;
        background-color: #efefef;
    }
    
    #map-canvas {width: 100%;height: 80vh;margin-bottom:-35px;}
    .gm-style-iw-c{max-width: 350px!important;}
    hr {
        margin-top: 10px;
        margin-bottom: 10px;
        border: 0;
        border-top: 1px solid #eee;
    }
    span.map-marker {
        display: inline-flex;
        margin-bottom: 14px;
        line-height: 20px;
    }
    span.map-marker i.fas {
        padding: 5px 10px 0 0;
        color: #163f98;
    }
    span.head-label {
        color: black !important;
        font-weight: bolder;
        display: contents;
    }
    button.gm-ui-hover-effect {
        margin: 10px !important;
    }
</style>

<form class="form-inline" style="padding: 20px 0;">
    
    
        <label class="selectbox" for="location_select_list"><?php if($currentLocale == 'kh'){echo'ស្វែងរកតាមតំបន់';}else{echo 'Locator';}?> </label><label id="side_bar" class="">

        <select id="province" name="select-prov" onchange="filterMarkers(this.value);">
                    <option value="" lat="" long=""><?php if($currentLocale == 'kh'){echo'ជ្រើសរើសទីតាំង';}else{echo 'Select Province';}?></option>
                    <option value="1" lat="13.7989147" long="102.8862666"><?php if($currentLocale == 'kh'){echo'ខេត្តបន្ទាយមានជ័យ';}else{echo 'Banteay Meanchey';}?></option>
                	<option value="2" lat="12.9256791" long="103.23171364"><?php if($currentLocale == 'kh'){echo'ខេត្តបាត់ដំបង';}else{echo 'Battambang';}?></option>
                	<option value="3" lat="12.00708458" long="105.37811279"><?php if($currentLocale == 'kh'){echo'ខេត្តកំពង់ចាម';}else{echo 'Kampong Cham';}?></option>
                	<option value="4" lat="12.24339151" long="104.71343994"><?php if($currentLocale == 'kh'){echo'ខេត្តកំពង់ឆ្នាំង';}else{echo 'Kampong Chhnang';}?></option>
                	<option value="5" lat="11.56748917" long="104.2691803"><?php if($currentLocale == 'kh'){echo'ខេត្តកំពង់ស្ពឺ';}else{echo 'Kampong Speu';}?></option>
                	<option value="6" lat="12.81715766" long="104.98397827"><?php if($currentLocale == 'kh'){echo'ខេត្តកំពង់ធំ';}else{echo 'Kampong Thom';}?></option>
                	<option value="7" lat="10.76579845" long="104.31350361"><?php if($currentLocale == 'kh'){echo'ខេត្តកំពត';}else{echo 'Kampot';}?></option>
                	<option value="8" lat="11.39459395" long="105.01840978"><?php if($currentLocale == 'kh'){echo'ខេត្តកណ្ដាល';}else{echo 'Kandal';}?></option>
                	<option value="9" lat="11.36964612" long="103.23989868"><?php if($currentLocale == 'kh'){echo'ខេត្តកោះកុង';}else{echo 'Koh Kong';}?></option>
                	<option value="10" lat="12.6783017" long="106.0581733"><?php if($currentLocale == 'kh'){echo'ខេត្តក្រចេះ';}else{echo 'Kratie';}?></option>
                	<option value="11" lat="10.4026321" long="104.26541726"><?php if($currentLocale == 'kh'){echo'ខេត្តកែប';}else{echo 'Kep';}?></option>
                	<option value="12" lat="12.85515098" long="102.60915041"><?php if($currentLocale == 'kh'){echo'ខេត្តប៉ៃលិន';}else{echo 'Pailin';}?></option>
                	<option value="13" lat="10.5045515" long="103.25784114"><?php if($currentLocale == 'kh'){echo'ខេត្តព្រះសីហនុ';}else{echo 'Preah Sihanouk';}?></option>
                	<option value="14" lat="12.7396454" long="107.00882593"><?php if($currentLocale == 'kh'){echo'ខេត្តមណ្ឌលគិរី';}else{echo 'Mondul Kiri';}?></option>
                	<option value="15" lat="14.1585631" long="103.78279596"><?php if($currentLocale == 'kh'){echo'ខេត្តឧត្ដរមានជ័យ';}else{echo 'Otdar Meanchey';}?></option>
                    <option value="16" lat="11.5730391" long="104.857807"><?php if($currentLocale == 'kh'){echo'រាជធានីភ្នំពេញ';}else{echo 'Phnom Penh';}?></option>
                    <option value="17" lat="14.3989367" long="104.6758555"><?php if($currentLocale == 'kh'){echo'ខេត្តព្រះវិហារ';}else{echo 'Preah Vihear';}?></optio>
                    <option value="18" lat="11.4856226" long="105.3363606"><?php if($currentLocale == 'kh'){echo'ខេត្តព្រៃវែង';}else{echo 'Prey Veng';}?></option>
                    <option value="19" lat="12.53311536" long="103.92242432"><?php if($currentLocale == 'kh'){echo'ខេត្តពោធិ៍សាត់';}else{echo 'Pursat';}?></option>
                    <option value="20" lat="13.9311155" long="107.0391499"><?php if($currentLocale == 'kh'){echo'ខេត្តរតនគិរី';}else{echo 'Ratanak Kiri';}?></option>
                	<option value="21" lat="13.3719067" long="103.99265045"><?php if($currentLocale == 'kh'){echo'ខេត្តសៀមរាប';}else{echo 'Siem Reap';}?></option>
                	<option value="22" lat="13.852468" long="106.0889849"><?php if($currentLocale == 'kh'){echo'ខេត្តស្ទឹងត្រែង';}else{echo 'Stung Treng';}?></option>
                    <option value="23" lat="11.080095" long="105.7974874"><?php if($currentLocale == 'kh'){echo'ខេត្តស្វាយរៀង';}else{echo 'Svay Rieng';}?></option>
                	<option value="24" lat="10.93539205" long="104.789883"><?php if($currentLocale == 'kh'){echo'ខេត្តតាកែវ';}else{echo 'Takeo';}?></option>
                	<option value="25" lat="11.93991393" long="105.81893921"><?php if($currentLocale == 'kh'){echo'ខេត្តត្បូងឃ្មុំ';}else{echo 'Tboung Khmum';}?></option>
        </select>



        </label>
        <input class="btn-reset-map" type="reset" id="reset_state" value="<?php if($currentLocale == 'kh'){echo'កំណត់ឡើងវិញ';}else{echo 'Reset';}?>" onclick="initialize();">
                                                            
    </form>
    

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAc75-rjAtjcViwQqzOjqXsZNuIgkLpIzM&sensor=false&callback=initialise"></script>

<div id="map-canvas"></div><br><br>

    <table class="list-table" style="display:none;">
             <thead>
                  <tr>
                    <th>No.</th>
                    <th>DEALER NAME</th>
                    <th>LOCATION</th>
                    <th>CONTACT NUMBER</th>
                    <th>ACTION</th>
                  </tr>
            </thead>
            
            <tbody id="get-dealers">
                
            </tbody>
    </table>

<script type="text/javascript">
                                        
                                    var gmarkers1 = [];
                                    var markers1 = [];
                                    var infowindow = new google.maps.InfoWindow({
                                        content: ''
                                    });
                                    
                                    // Our markers
                                    markers1 = [
                                            
                                                <?php
                                                $data = getAll_Branches();
                                                $i = 0;
                                                
                                                foreach ($data as $item): ?>

                                                    ["<?php print $i?>", "<?php print $item['title']."<hr> <span class='map-marker'><i class='fas fa-map-marker-alt'></i> <span class='head-label'> Address: </span><br> ".$item['address']."</span><br> <span class='map-marker'><i class='fas fa-mobile-alt'></i> <span class='head-label'>Contact Phone: </span><br> ".$item['number']."</span><br> <span class='map-marker'>"; $email = $item['email']; if(!empty($email)){ print"<i class='fas fa-envelope-open'></i> <span class='head-label'>Email: </span><br>".$item['email']; }?>", <?php print $item['latitude'] ?>, <?php print $item['longitude'] ?>, "<?php print $item['province'] ?>", "<?php print $item['title']?>"],
                                                     
                                                <?php
                                                $i++;
                                                endforeach; ?>
                                            
                                    ];
                                    
                                    /**
                                     * Function to init map
                                     */
                                    
                                    function initialize() {
                                        var center = new google.maps.LatLng(12.5223906, 104.81506348);
                                        var mapOptions = {
                                            zoom: 7.5,
                                            center: center,
                                            mapTypeId: google.maps.MapTypeId.roadmap
                                        };
                                    
                                        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
                                        for (i = 0; i < markers1.length; i++) {
                                            addMarker(markers1[i]);
                                        }
                                    }
                                    
                                    /**
                                     * Function to add marker to map
                                     */
                                    
                                    function addMarker(marker) {
                                        var category = marker[4];
                                        var title = marker[5];
                                        var pos = new google.maps.LatLng(marker[2], marker[3]);
                                        var content = marker[1];
                                        var icon = {
                                            url: "<?=myUpload()?>marker-map.png", // url
                                            scaledSize: new google.maps.Size(30, 40), // size
                                        };
                                    
                                        marker1 = new google.maps.Marker({
                                            title: title,
                                            position: pos,
                                            icon: icon,
                                            category: category,
                                            map: map
                                        });
                                    
                                        gmarkers1.push(marker1);
                                        
                                        function toggleBounce() {
                                            map.setZoom(12);
                                        }
                                    
                                        // Marker click listener
                                        google.maps.event.addListener(marker1, 'click', (function (marker1, content) {
                                            return function () {
                                                //console.log('Gmarker 1 gets pushed');
                                                infowindow.setContent(content);
                                                infowindow.open(map, marker1);
                                                map.panTo(this.getPosition());
                                                map.setZoom(10);
                                                setTimeout(toggleBounce, 100);
                                            }
                                        })(marker1, content));
                                    }
                                    
                                    /**
                                     * Function to filter markers by category
                                     */
                                    
                                    filterMarkers = function (category) {
                                        var center = new google.maps.LatLng(12.5223906, 104.81506348);
                                        var mapOptions = {
                                            zoom: 1,
                                            center: center,
                                            mapTypeId: google.maps.MapTypeId.roadmap
                                        };
                                        
                                       var bounds = new google.maps.LatLngBounds();
                                        infowindow.close();
                                        
                                        for (i = 0; i < gmarkers1.length; i++) {
                                            marker = gmarkers1[i];
                                            // If is same category or category not picked
                                            if (marker.category == category || category.length === 0) {
                                                marker.setVisible(true);
                                                bounds.extend(marker.getPosition());
                                                map.fitBounds(bounds);
                                                map.setZoom(10);
                                            }
                                            // Categories don't match
                                            else {
                                                marker.setVisible(false);
                                                map.setZoom(center);
                                            }
                                        }
                                    }
                                    
                                    $('#province').on('change', function(){
                                        
                                        $('.list-table').show();
                                        var dealer_url= '<?= route("getdealer") ?>';
                                        
                                        var provid = $(this).val();
                                        
                                        //console.log($(this).val());
                                        //$("input[name='dealer']").removeAttr('checked');
                                        //$(this).find('input').prop('checked', true); 
                                        
                                        var dt = provid;
                                        
                                        filterMarkers(dt);
                                        
                                        $.ajaxSetup({
                                            headers: {
                                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                }
                                            });
                                    
                                            //var id = ($(this).find('input').attr('value'));
                                            var data = {
                                                    type: provid,
                                                    lang: '<?=$currentLocale?>'
                                                }
                                            
                                            $.ajax({
                                                 type:"GET",
                                                 data:data,
                                                 url:dealer_url,
                                                 success : function(results) {
                                                    //console.log(results);
                                                    $('#get-dealers').html(results);
                                                 }
                                            });

                                    })                                     
                                    
                                    // Init map
                                    initialize();

</script>
    
<?php }?>
