<?php require(base_path().'/themes/giant/header.php'); ?>

<?php 
$currentLocale = app()->getLocale();

if (isset($_GET['page'])){
   echo '';
} 

else{ 
    $lang_code = app()->getLocale();
    
    $id = pageID();
    $info = \App\Pages::where('id', $id)->first();

    $title1 = 'Earth Dream Technology';
    $title2 = 'Honda Sensing';
    $title3 = 'Safety';
    $cbms = 'Collision Mitigation Braking System (CMBS)';
    $acc = 'Adaptive Cruise Control with Low-Speed Follow (ACC with LSF)';
    $rdm = 'Road Departure Mitigation System with Land Departure Warning (RDM LDW)';
    $lcdn = 'Lead Car Departure Notifications System (LCDN)';
    $lkas = 'Lane Keeping Assist System (LKAS)';
    $ahb = 'Auto High Beam (AHB)';
    $dams = 'Driving Attention Monition System';
    $vsa = 'Vehicle Stability Assist (VSA)';
    $marc = 'Multi-Angle Rear Camera';
    $hlw = 'Honda LaneWatch';
    $hsa = 'Hill Start Assist (HSA)';
    $waal = 'Walk Away Auto Lock';
    $autobh = 'Auto Brake Hold';
    $front_pass = 'Front Passenger & Rear Seat Belt Reminder';
    $rears = 'Rear Seat Reminder';
    $hilld = 'Hill Descent Control (HDC)';
    $agile = 'Agile Handling Assist (AHA)';
    
    $title_tech1 = 'Intelligent Variable Valve Timing and Lift Electronic Control (I-VTEC)';
    $des_tech1 = 'This technology was invented by Ikuo Kakitani, a Honda engineer. I-VTEC technology was developed for four main purposes: to increase engine power, save fuel, protect the environment and increase vehicle performance.';
    $des_tech2 = 'Car models using this technology: Honda CR-V, Honda CIVIC, Honda HR-V and Honda CITY.';  
    
    $sensing = 'Honda SENSING';
    $sensing_des1 = 'Smart safety technology from Honda assists to control the car in any driving situations where there is a risk of accident. It helps to increase the peace of mind and safety to drivers and passengers travelling on the road. Honda SENSING is included with smart technology of the artificial intelligence (AI) by front camera which detect the obstacle on the road. The system assists to analyze in order to alert the driver and helps to control the car in situations where there is a risk of accident through various functions.';
    $sensing_des2 = 'Car models using this technology: Honda CIVIC, Honda HR-V';
    $hlw2 = 'Car models using this technology: Honda CR-V, Honda CIVIC';
    $autobh2 = 'Car models using this technology: Honda CR-V, Honda CIVIC, Honda HR-V';
    
    $cbms1 = 'A system that warns the driver to reduce the speed of the vehicle when there is a car in front of the car on the road or pedestrian within an unsafe distance. The system will alert through the information display and sound signals on the driving information screen. Including a vibrated warning signal of the steering wheel in the event of a car on the road. If the driver still does not respond or in the event of accident, the system will automatically activate the brake to avoid collisions or reduce the severity of accident.';
    $acc1 = 'It is a system to help control the speed of the car to go constantly according to the driver is settings. and the system will automatically adjust the speed with the radar camera detecting the car in front to maintain a safety distance from the vehicle in front at low-speed driving. When encountering a traffic jam where the car is moving slowly, the system will help adjust the speed of the car to follow the car in front including automatic brake and stop. The system will restart when the driver presses a button on the steering wheel or presses the accelerator pedal.';
    $rdm1 = 'It is a system that uses a front-facing camera to detect traffic lanes. If found that the car is in a state of drifting out of the lane, the system will send an alarm on the information display screen with a vibrating warning on the steering wheel. In the event that the car starts to deviate from the lane even more, the system will help delay the steering wheel to get the car back into the proper lane. If the car continues to drift out of the lane until an accident may occur, the brake system will work to slow down the vehicle.';
    $lcdn1 = 'It is a system that detects the movement of the vehicle in front. When encountering a traffic jam, the driver may temporarily take a rest. When the front vehicle has moved, the system will alert through the information display and sound signal so that the driver can begin to follow the vehicle in front.';
    $lkas1 = 'The front-facing camera detects the lane demarcation line, which increases the steering force to help the driver in controlling the car within the normal lane. When driving to long destination, the driver may feel tired or sleepy, and may accidentally release the steering wheel until the car is about to divert outside the lane. The system will increase the damping of the steering wheel to control the car in the lane.';
    $ahb1 = 'It is an automatic high-low beam adjustment system with a radar camera. By adjusting to high beam when driving in the dark and will adjust to low beam when detecting that there is a car on the road or a car in front.';
    $dams1 = 'The system detects the drivers fatigue through the steering wheel control. When it is found that the drivers control performance is reduced, the system will alert through the TFT screen to alert the driver to stop when driving for a long distance. From a long distance, the driver may feel tired or drowsy and unable to control the car as before. The system will alert the driver with a warning sound and the steering wheel vibrates.';
    $vsa1 = 'The system makes the car easy to control while driving in a curve or slippery roads to make the car more grip on the road. When driving on slippery rainy roads or while cornering, the system will increase the car grip on the road even more and easy to control the car.';
    $marc1 = 'Improving the visibility in reverse, the driver can choose from 3 camera angles including 130 degrees, 180 degrees and the view from the top while reversing the car that may make the driver not able to see the area behind. The system will display the image from the rear viewed camera on the screen that improves visibility in reversing. You can choose to view different camera angles, including 130 degrees, 180 degrees and views from above. Therefore, the car can be safely reversed.';
    $hlw1 = 'The system will reduce blind spots in vision of the left side mirror by using the camera on the left side mirror, capturing images, and displaying the results through the car audio screen. Changing lanes to the left, there may be blind spots that the driver cannot see. When turning on the left turn signal, the system will display the image from the camera on the left side mirror on the screen so that the driver can see the blind corner more clearly. So you can change lanes safely.';
    $hsa1 = 'The system will temporarily help to slow down the brake. When the driver takes his foot off the brake pedal to step on the accelerator in order to prevent the car from slipping while the car is stopped on a steep slope. When encountering a car stuck on a bridge or steep slope, if the driver is about to switch from the brake pedal to the accelerator pedal, the system will temporarily help to slow down the brakes in order to prevent the car from slipping backwards';
    $waal1 = 'During the rush to leave the car without locking the car, the system will automatically lock the car. When you leave the car at 1.5 meters or more from the vehicle for 30 seconds.';
    $autobh1 = 'When faced with a traffic jam for a long time, you can press the button to use the system. The system will be ready to work and will automatically stop after the brakes are applied to stop the car completely to prevent the car from moving. The driver does not need to hold the brake pedal all the time, and the system will automatically release the brake when the accelerator pedal is pressed. (The system will only work if the driver is wearing a seatbelt.)';
    $front_pass1 = 'The system will warn you to wear your seat belt in every position by alerting on the screen showing driving information on the TFT gauge. If there are passengers sitting in the car without wearing seat belt, the system will alert passengers to wear seat belt in any positions.';
    $rears1 = ' When the back door is opened to leave things at the back seat and after when the driver turns off the engine, the system will warn on the driving information display on the TFT gauge every time to the drivers to check the rear seat if they have forgotten something or left the child at the back seat. '; 
    $hilld1 = ' The system will help control the accelerator and brake. In order to maintain proper speed when driving down a steep slope, the system will operate at speeds below 20 kilometers per hour (km/h). ';
    $hilld2 = 'Car models using this technology: Honda HR-V '; 
    $agile1 = 'The system will help send braking force to the wheels automatically in relation to speed, and turning corner to help increase the mobility of driving.';
  
  
    if ($lang_code == 'kh'){

    $title1 = 'Earth Dream Technology';
    $title2 = 'Honda Sensing';
    $title3 = 'Safety';
    $cbms = 'ប្រព័ន្ធផ្ដល់សញ្ញាគ្រោះថ្នាក់ពេលមានឧបសគ្គ រឺមានអ្នកថ្មើរជើងឆ្លងកាត់ និងចាប់ហ្រ្វាំងដោយស្វ័យប្រវត្តិ (CMBS)';
    $acc = 'ប្រព័ន្ធកំណត់ល្បឿនបើកបរ និងបន្ថយល្បឿនដោយស្វ័យប្រវត្តិតាមល្បឿនរថយន្តខាងមុខ (ACC with LSF)';
    $rdm = 'ប្រព័ន្ធរំឮកអ្នកបើកបរអោយនៅក្នុងគន្លងផ្លូវ និងបន្តយល្បឿនស្វ័យប្រវត្តិ (RDMS with LDW)';
    $lcdn = ' ប្រព័ន្ធផ្ដល់សញ្ញាពេលរថយន្តនៅខាងមុខមានសកម្មភាព (LCDN) ';
    $lkas = ' ប្រព័ន្ធជំនួយអ្នកបើកបរអោយនៅក្នុងគន្លងផ្លូវ (LKAS) ';
    $ahb = ' ប្រព័ន្ធតំឡើងទំលាក់ភ្លើងខាងមុខដោយស្វ័យប្រវត្តិ (AHB) ';
    $dams = ' ប្រព័ន្ធរំឮកអ្នកបើកបរអោយឈប់សម្រាក ';
    $vsa = ' ប្រព័ន្ធទប់លំនឹង មិនអោយបត់ស្ទើរ/ហួស ';
    $marc = ' កាមេរ៉ាក្រោយបង្ហាញរូបភាពបាន ៣ កម្រិត ';
    $hlw = ' កាមេរ៉ាសុវត្ថិភាពចំហៀង (Honda LaneWatch) '; 
    $hsa = ' ប្រព័ន្ធជំនួយហ្វ្រាំង ពេលឡើងចំណោទ (HAS) ';
    $waal = ' ប្រព័ន្ធចាក់សោដោយស្វ័យប្រវត្តិ ពេលដើរចេញពីរថយន្ត ';
    $autobh = ' ប្រព័ន្ធជំនួយហ្វ្រាំងពេលឈប់ ';
    $front_pass = ' ប្រព័ន្ធរំលឹកអោយពាក់ខ្សែក្រវ៉ាត់កៅអីខាងមុខ និងខាងក្រោយ ';
    $rears = ' ប្រព័ន្ធរំឮកអ្នកបើកបរអោយត្រួតពិនិត្យកៅអីខាងក្រោយ ';
    $hilld = ' ប្រព័ន្ធជំនួយហ្វ្រាំង ពេលចុះចំណោត ';
    $agile = ' ប្រព័ន្ធបែងចែកហ្រ្វាំង និងទប់លំនឹងពេលបត់ ';
    
    $title_tech1 = 'Intelligent Variable Valve Timing and Lift Electronic Control (I-VTEC)';
    $des_tech1 = 'បច្ចេកវិទ្យានេះត្រូវបានបង្កើតឡើងដោយលោក Ikuo Kakitani ដែលជាវិស្វករ Honda ផ្ទាល់។ បច្ចេកវិទ្យា I-VTEC ត្រូវបានបង្កើតឡើងក្នុងគោលបំណងធំៗ ចំនួន ០៤ គឺ បង្កើនកម្លាំងម៉ាស៊ីនអោយកាន់តែខ្លាំង សន្សំសំចៃប្រេងសាំង ថែរក្សាបរិស្ថាន និងធ្វើអោយរថយន្តស្ទុះខ្លាំង។';
    $des_tech2 = 'ម៉ូដែលរថយន្តដែលប្រើបច្ចេកវិទ្យានេះ៖ Honda CR-V, Honda CIVIC, Honda HR-V និង Honda CITY.';     
    
    $sensing = 'Honda SENSING';
    $sensing_des1 = 'បច្ចេកវិទ្យាសុវត្ថិភាពឆ្លាតវៃរបស់ក្រុមហ៊ុន ហុងដា នឹងជួយគ្រប់គ្រងរថយន្តក្នុងស្ថានភាពបើកបរដែលស្ថិតក្នុងស្ថានភាពគ្រោះថ្នាក់។ វាជួយបង្កើនទំនុកចិត្ត និងសុវត្ថិភាពរបស់អ្នកបើកបរ និងអ្នកដំណើរនៅលើដងផ្លូវ។ Honda SENSING ត្រូវបានរួមបញ្ចូលបច្ចេកវិទ្យាដ៏ឆ្លាតវៃនៃបញ្ញាសិម្បនិម្មិត (AI) ដោយកាមេរ៉ារាដាខាងមុខរកមើលឧបសគ្គនៅលើដងផ្លូវ ប្រព័ន្ធនឹងធ្វើការវិភាគដើម្បីជូនដំណឹងដល់អ្នកបើកបរ និងជួយគ្រប់គ្រងរថយន្តក្នុងស្ថានភាពដែលមានហានិភ័យនៃគ្រោះថ្នាក់ទៅតាមមុខងារផ្សេងៗ។';
    $sensing_des2 = 'ម៉ូដែលរថយន្តដែលប្រើបច្ចេកវិទ្យានេះ៖ Honda CIVIC, Honda HR-V';
    $hlw2 = ' ម៉ូដែលរថយន្តដែលប្រើបច្ចេកវិទ្យានេះ៖ Honda CR-V, Honda CIVIC ';
    $autobh2 = ' ម៉ូដែលរថយន្តដែលប្រើបច្ចេកវិទ្យានេះ៖ Honda CR-V, Honda CIVIC, Honda HR-V '; 
    $hilld2 = ' ម៉ូដែលរថយន្តដែលប្រើបច្ចេកវិទ្យានេះ៖ Honda HR-V '; 
    
    $cbms1 = 'ប្រព័ន្ធរំឮកអ្នកបើកបរឱ្យបន្ថយល្បឿនយានយន្តនៅពេលមានយានជំនិះនៅខាងមុខ ឬអ្នកថ្មើរជើងឆ្លងកាត់ដែលស្ថិតក្នុងចម្ងាយមិនមានសុវត្ថិភាពប្រព័ន្ធនេះនឹងជូនដំណឹងតាមរយៈការបង្ហាញព័ត៌មាន និងសញ្ញាសំឡេងនៅលើអេក្រង់បង្ហាញព័ត៌មាននៃការបើកបរ រួមទាំងការផ្ដល់សញ្ញាដោយរំញ័រដៃចង្កូតក្នុងករណីរថយន្តនៅលើផ្លូវ ប្រសិនបើអ្នកបើកបរនៅតែមិនឆ្លើយតប ឬក្នុងករណីអាចមានគ្រោះថ្នាក់ ប្រព័ន្ធនឹងចាប់ហ្វ្រាំងរថយន្តដោយស្វ័យប្រវត្តិដើម្បីជៀសវាងពីការប៉ះទង្គិច ឬកាត់បន្ថយភាពធ្ងន់ធ្ងរនៃគ្រោះថ្នាក់។';
    $acc1 = 'វាជាប្រព័ន្ធសម្រាប់ជួយគ្រប់គ្រងល្បឿនរបស់រថយន្តឱ្យថេរទៅតាមការកំណត់របស់អ្នកបើកបរ។ ហើយប្រព័ន្ធនឹងកែតម្រូវល្បឿនដោយស្វ័យប្រវត្តិជាមួយនឹងកាមេរ៉ារាដាចាប់យកល្បឿនរបស់រថយន្តនៅខាងមុខ ព្រមទាំងរក្សាគម្លាតសុវត្ថិភាពក្នុងការបើកបរក្នុងល្បឿនទាបផងដែរ។ នៅពេលជួបប្រទះការកកស្ទះចរាចរណ៍ដែលដែលធ្វើអោយរថយន្តមានចលនាយឺត ប្រព័ន្ធនឹងជួយសម្រួលល្បឿនរថយន្តឱ្យដើរតាមរថយន្តខាងមុខ រួមទាំងចាប់ហ្វ្រាំងស្វ័យប្រវត្តិ និងឈប់ ប្រព័ន្ធនឹងចាប់ផ្តើមឡើងវិញនៅពេលដែលអ្នកបើកបរចុចប៊ូតុងមួយនៅលើដៃចង្កូត ឬឈ្នាន់បង្កើនល្បឿន។';
    $rdm1 = 'វាជាប្រព័ន្ធដែលប្រើកាមេរ៉ារ៉ាដាខាងមុខដើម្បីចាប់គំនូសសញ្ញាចរាចរណ៍។ ប្រសិនបើរកឃើញថារថយន្តស្ថិតក្នុងស្ថានភាពចាកចេញពីគន្លងផ្លូវ ប្រព័ន្ធនឹងជូនដំណឹងនៅលើអេក្រង់បង្ហាញព័ត៌មាន ជាមួយនឹងការផ្ដល់សញ្ញាដោយរំញ័រនៅលើដៃចង្កូត ហើយក្នុងករណីដែលរថយន្តចាប់ផ្តើមងាកចេញពីគន្លងផ្លូវកាន់តែច្រើន ប្រព័ន្ធនឹងជួយទាញដៃចង្កូត ដើម្បីឱ្យរថយន្តចូលទៅក្នុងផ្លូវវិញ។ ប្រសិនបើរថយន្តនៅតែបន្តរសាត់ចេញពីគន្លងផ្លូវរហូតដល់មានឧបទ្ទវហេតុកើតឡើង ប្រព័ន្ធហ្វ្រាំងនិងដំណើរការដើម្បីបន្ថយល្បឿនរថយន្ត។';
    $lcdn1 = ' វាជាប្រព័ន្ធដែលអាចចាប់ចលនារបស់រថយន្តនៅខាងមុខ។ នៅពេលជួបការកកស្ទះចរាចរណ៍ ហើយអ្នកបើកបរអាចសម្រាកជាបណ្តោះអាសន្នបាន នៅពេលដែលរថយន្តខាងមុខបានផ្លាស់ទី ប្រព័ន្ធនឹងជូនដំណឹងតាមរយៈការបង្ហាញព័ត៌មាន និងសញ្ញាសំឡេង ដើម្បីឱ្យអ្នកបើកបរចាប់ផ្ដើមចេញដំណើរតាមរថយន្តខាងមុខ។ ';
    $lkas1 = ' កាមេរ៉ារ៉ាដាខាងមុខរកឃើញគំនូសចរាចរណ៍លើផ្លូវដែលបង្កើនកម្លាំងចង្កូត ដើម្បីជួយអ្នកបើកបរក្នុងការគ្រប់គ្រងរថយន្តក្នុងគន្លងធម្មតា។ នៅពេលបើកបរផ្លូវឆ្ងាយ អ្នកបើកបរអាចមានអារម្មណ៍អស់កម្លាំង ឬមានអារម្មណ៍ងងុយគេង ហើយអាចនឹងលែងដៃចង្កូតដោយចៃដន្យ រហូតបណ្តាលឱ្យរថយន្តក្រឡាប់នៅក្រៅគន្លងផ្លូវ ប្រព័ន្ធនឹងបង្កើនភាពសើមនៃចង្កូត។ ដើម្បីគ្រប់គ្រងរថយន្តនៅក្នុងគន្លង ';
    $ahb1 = ' វាជាប្រព័ន្ធកែសម្រួលហ្វា/កូដដោយស្វ័យប្រវត្តិជាមួយនឹងកាមេរ៉ារ៉ាដា។ ដោយការលៃតម្រូវទៅនឹងហ្វាខ្ពស់នៅពេលបើកបរក្នុងទីងងឹត ហើយនឹងកែតម្រូវទៅកូដទាបនៅពេលរកឃើញថាមានរថយន្តនៅលើផ្លូវ ឬរថយន្តនៅខាងមុខ។ ';
    $dams1 = ' ប្រព័ន្ធនេះរកឃើញថាអ្នកបើកបរអស់កម្លាំងតាមរយៈការគ្រប់គ្រងដៃចង្កូត។ ពេលដែលប្រព័ន្ធរកឃើញថាដំណើរការត្រួតពិនិត្យរបស់អ្នកបើកបរត្រូវបានកាត់បន្ថយ ប្រព័ន្ធនឹងជូនដំណឹងតាមរយៈអេក្រង់ TFT ដើម្បីជូនដំណឹងដល់អ្នកបើកបរឱ្យឈប់នៅពេលបើកបរពីចម្ងាយ។ ពីចម្ងាយ អ្នកបើកបរអាចមានអារម្មណ៍នឿយហត់ ឬងងុយដេក ហើយមិនអាចគ្រប់គ្រងរថយន្តដូចពីមុន។ ប្រព័ន្ធនឹងជូនដំណឹងដល់អ្នកបើកបរជាមួយនឹងសំឡេងផ្ដល់សញ្ញា ហើយដៃចង្កូតញ័រ។ ';
    $vsa1 = ' ប្រព័ន្ធនេះធ្វើឱ្យរថយន្តងាយស្រួលក្នុងការគ្រប់គ្រង ពេលបើកបរក្នុងផ្លូវកោង ឬផ្លូវរអិលដើម្បីធ្វើឱ្យរថយន្តកាន់តែក្តាប់នៅលើផ្លូវ នៅពេលបើកបរលើផ្លូវភ្លៀងរអិល ឬខណៈពេលកំពុងបត់ ប្រព័ន្ធនេះនឹងបង្កើនការកាន់របស់រថយន្តនៅលើផ្លូវកាន់តែខ្លាំង។ និងងាយស្រួលក្នុងការគ្រប់គ្រងរថយន្ត។ '; 
    $marc1 = ' ការធ្វើអោយប្រសើរឡើងនូវភាពមើលឃើញនៅក្នុងការថយក្រោយ អ្នកបើកបរអាចជ្រើសរើស មុំកាមេរ៉ាចំនួន 3 គឺ 130ដឺក្រេ 180ដឺក្រេ និងទិដ្ឋភាពពីខាងលើពេលកំពុងថយក្រោយរថយន្ត អាចធ្វើឱ្យអ្នកបើកបរមើលមិនឃើញតំបន់ខាងក្រោយ។ ប្រព័ន្ធនឹងបង្ហាញរូបភាពពីកាមេរ៉ាមើលក្រោយនៅលើអេក្រង់។ ធ្វើអោយប្រសើរឡើងនូវភាពមើលឃើញនៅក្នុងការបញ្ច្រាស អ្នកអាចជ្រើសរើសដើម្បីមើលមុំកាមេរ៉ាផ្សេងៗគ្នា រួមទាំង 130 ដឺក្រេ 180 ដឺក្រេ និងទិដ្ឋភាពពីខាងលើ។ ដូច្នេះ រថយន្តអាចបើកបញ្ច្រាសដោយសុវត្ថិភាព។ ';
    $hlw1 = ' ប្រព័ន្ធនឹងកាត់បន្ថយចំណុចមើលមិនឃើញក្នុងការមើលឃើញនៃកញ្ចក់ចំហៀងខាងឆ្វេង ដោយប្រើកាមេរ៉ានៅលើកញ្ចក់ចំហៀងខាងឆ្វេង ចាប់យករូបភាព និងបង្ហាញលទ្ធផលតាមរយៈអេក្រង់កម្សាន្តរថយន្ត។ ការផ្លាស់ប្តូរផ្លូវទៅខាងឆ្វេង ប្រហែលជាមានចំណុចបាំងដែលអ្នកបើកបរមើលមិនឃើញ នៅពេលបើកសញ្ញាបត់ឆ្វេង ប្រព័ន្ធនឹងបង្ហាញរូបភាពពីកាមេរ៉ានៅកញ្ចក់ចំហៀងខាងឆ្វេងឡើងលើអេក្រង់ដើម្បីឱ្យអ្នកបើកបរអាចមើលឃើញជ្រុងបាំងកាន់តែច្បាស់។ ដូច្នេះអ្នកអាចផ្លាស់ប្តូរផ្លូវដោយសុវត្ថិភាព។ ';
    $hsa1 = ' ប្រព័ន្ធនេះនឹងជួយបន្ថយល្បឿនហ្វ្រាំងជាបណ្តោះអាសន្ន។ ពេលអ្នកបើកបរដកជើងចេញពីឈ្នាន់ហ្វ្រាំងដើម្បីជាន់ឈ្នាន់បង្កើនល្បឿន ដើម្បីការពារកុំឱ្យរថយន្តរអិល ខណៈពេលដែលរថយន្តឈប់នៅលើផ្លូវចោត ពេលឡានស្ទះនៅលើស្ពាន ឬផ្លូវចោត ប្រសិនបើអ្នកបើកបរបំរុងនឹងប្តូរពីឈ្នាន់ហ្វ្រាំងទៅឈ្នាន់បង្កើនល្បឿន ប្រព័ន្ធនឹងជួយបន្ថយល្បឿនហ្វ្រាំងជាបណ្តោះអាសន្ន ដើម្បីអោយរថយន្តមិនឱ្យរអិលថយក្រោយ ។ ';
    $waal1 = ' ក្នុងអំឡុងពេលអ្នកកំពុងតែប្រញាប់ប្រញាល់ ចាកចេញពីរថយន្ត ដោយមិនបានចាក់សោរប្រព័ន្ធនឹងដំណើរការចាក់សោរថយន្តដោយស្វ័យប្រវត្តិ នៅពេលដែលអ្នកចាកចេញចម្ងាយ 1,5 ម៉ែត្រឬច្រើនជាងនេះ ឬក៏លើសពី 30 វិនាទី។ '; 
    $autobh1 = ' នៅពេលកកស្ទះចរាចរណ៍ក្នុងរយៈពេលយូរ អ្នកអាចចុចប៊ូតុងដើម្បីប្រើប្រាស់ប្រព័ន្ធ។ ប្រព័ន្ធនឹង ដំណើរការហើយចាប់ហ្វ្រាំងដោយស្វ័យប្រវត្តិបន្ទាប់ពីឈប់រថយន្តទាំងស្រុងដើម្បីការពាររថយន្តពីការផ្លាស់ទីទៅមុខ។ អ្នកបើកបរមិនចាំបាច់ជាន់ឈ្នាន់ហ្វ្រាំងគ្រប់ពេលនោះទេ ហើយប្រព័ន្ធនឹងឈប់ដំណើរការដោយស្វ័យប្រវត្តិនៅពេលដែលអ្នកបើកបរជាន់ឈ្នាន់បង្កើនល្បឿន។ (ប្រព័ន្ធនឹងដំណើរការបានលុះត្រាតែអ្នកបើកបរពាក់ខ្សែក្រវ៉ាត់សុវត្ថិភាព។ ) ';
    $front_pass1 = ' ប្រព័ន្ធរំឮកអ្នកឱ្យពាក់ខ្សែក្រវ៉ាត់សុវត្ថិភាព ដោយធ្វើការជូនដំណឹងនៅលើអេក្រង់បង្ហាញព័ត៌មាននៃការបើកបរ ប្រសិនបើមានអ្នកដំណើរអង្គុយកៅអីណាមួយក្នុងរថយន្តមិនពាក់ប្រព័ន្ធនេះនឹងជូនដំណឹងដល់អ្នកដំណើរគ្រប់ទីតាំងអោយពាក់ខ្សែក្រវ៉ាត់សុវត្ថិភាព។ ';
    $rears1 = ' នៅពេលដែលទ្វារខាងក្រោយត្រូវបានបើក ដើម្បីដាក់របស់របរនៅកៅអីខាងក្រោយ ហើយបន្ទាប់ពីនោះនៅពេលអ្នកបើកបរបិទម៉ាស៊ីន ប្រព័ន្ធនឹងជូនដំណឹងដល់អ្នកបើកបរតាមរយៈអេក្រង់បង្ហាញព័ត៌មានបើកបរគ្រប់ពេលដើម្បីឱ្យអ្នកបើកបរពិនិត្យមើលកៅអីខាងក្រោយ ប្រសិនបើគាត់ភ្លេចអ្វីមួយ ឬកុមារនៅកៅអីខាងក្រោយ។ ';
    $hilld1 = ' ប្រព័ន្ធនេះនឹងជួយគ្រប់គ្រងឧបករណ៍បង្កើនល្បឿន និងហ្វ្រាំង។ ដើម្បីរក្សាល្បឿនបានយ៉ាងសមស្របពេលបើកបរចុះចំណោត ប្រព័ន្ធនេះនឹងដំណើរការក្នុងល្បឿនក្រោម 20 គីឡូម៉ែត្រក្នុងមួយម៉ោង (km/h)។ ';
    $agile1 = ' ប្រព័ន្ធនេះនឹងជួយបញ្ជូនកម្លាំងហ្វ្រាំងទៅកង់ដោយស្វ័យប្រវត្តិសមមាត្រនឹងល្បឿន ព្រមទាំងផ្លូវបត់ ដើម្បីជួយបង្កើនភាពនឹងរបស់រថយន្ត។ ';

 
    } else{echo '';}

?>

<style>
    
    img.overview-banner.mobile, .model-cover-mobile, div#overview .mobile, .main-feature2 .mobile, .product-menu .bxs-down-arrow{display: none!important;}
    .row.model-cover-desktop {
        width: 100%;
        max-width: 100%;
    }
    .model-cover-desktop img {
        width: 100%;
    }
    
    .tap-spec .nav-tabs {
        border-bottom: unset;
    }
    .tap-spec li a.nav-link.active {
        border: 1px solid !important;
        padding: 15px;
        background: #ed1a29;
        color: #fff;
    }
    .tap-spec li a.nav-link {
        border: 1px solid rgb(235, 235, 235) !important;
        padding: 15px;
        color: #383838;
    }
    ul.nav.nav-tabs li {
        margin: 20px 20px;
    }
    .tap-spec ul.nav.nav-tabs {
        justify-content: center;
    }
    .tab-content {
        display: block !important;
    }
    h1.title-tech {
        font-size: 22px;
        font-weight: 600;
        line-height: 28px;
        margin-bottom: 20px;
    }
    .row.tab-one, .row.tab-two, .row.tab-two1, .row.tab-two2, .row.tab-two3, .row.tab-two4, .row.tab-two5, .row.tab-two6,
    .row.tab-three, .row.tab-three1, .row.tab-three2, .row.tab-three3, .row.tab-three4, .row.tab-three5, .row.tab-three6,
    .row.tab-three7, .row.tab-three8, .row.tab-three9, .row.tab-three10{
        align-items: center;
        padding: 15px 0;
    }
    .row.technology {
        padding: 3em 0 2em;
    }
    
    @media screen and (max-device-width: 480px) and (orientation: portrait) {
        
        .row.model-cover-desktop {
            display: none;
        }
        .model-cover-mobile {
            display: block !important;
        }
        .tap-spec ul.nav.nav-tabs {
            justify-content: center;
            display: block;
        }
        ul.nav.nav-tabs li {
            margin: 10px 0px;
            text-align: center;
        }
        .tab-content {
            padding: 0px !important;
            min-height: 100px;
            animation: fadeEffect 1s;
            overflow: hidden;
        }
        h1.title-tech {
            font-size: 20px;
            font-weight: 600;
            line-height: 28px;
            margin-bottom: 10px;
        }
        .row.tab-one img.img-tech {
            margin-top: 15px;
        }
        .row.tab-two1, .row.tab-two3, .row.tab-two5, 
        .row.tab-three1, .row.tab-three3, .row.tab-three5, .row.tab-three7, .row.tab-three9{
            flex-direction: column-reverse;
        }
        .two-tab img.img-tech {
            margin-bottom: 15px;
        }
        .third-tab img.img-tech {
            margin-top: 10px;
        }
        
    }
    
</style>

    <div class="row model-cover-desktop">
        <img src="<?=url('').'/storage/app/uploads/'.$info->header_img?>"/>
    </div>
    <div class="row model-cover-mobile"><img src="<?=url('').'/storage/app/uploads/'.$info->thumbnail?>"/></div>


            <div class="row technology">
                
                <div class="container">
                
                    <div class="tap-title-main" >
                        
                        <div class="tap-spec">
                            <ul class="nav nav-tabs" role="tablist">
                            	<li class="nav-item">
                            		<a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"><?php echo $title2 ?></a>
                            	</li>
                            	<li class="nav-item">
                            		<a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"><?php echo $title3 ?></a>
                            	</li>
                            	<li class="nav-item">
                            		<a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"><?php echo $title1 ?></a>
                            	</li>                            	
                            </ul>
                        </div>
                    </div>
                    
                    <div class="tab-content">
                        
                    	<div class="tab-pane active" id="tabs-1" role="tabpanel">
    
                            <div class="row tab-two">
                                    
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <img class="img-tech" src="https://www.car.giantandro.com/storage/app/uploads/technology/sensing.jpg" />
                                        
                                    </div>
                                    
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <h1 class="title-tech"><?php echo $sensing ?></h1>
                                        <p class="des-tech"><?php echo $sensing_des1 ?></p>
                                        <br>
                                        <p class="des-tech"><?php echo $sensing_des2 ?></p>
                                        
                                    </div>                                    
                                
                            </div>
                            
                            <div class="row tab-two1">
                                    
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <h1 class="title-tech"><?php echo $cbms ?></h1>
                                        <p class="des-tech"><?php echo $cbms1 ?></p>
                                        <br>
                                        <p class="des-tech"><?php echo $sensing_des2 ?></p>
                                        
                                    </div>   
                                    
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <img class="img-tech" src="https://www.car.giantandro.com/storage/app/uploads/technology/cmbs.jpg" />
                                        
                                    </div>                                    
                                
                            </div>                            
                            
                            <div class="row tab-two2">
                                    
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <img class="img-tech" src="https://www.car.giantandro.com/storage/app/uploads/technology/acc.jpg" />
                                        
                                    </div>
                                    
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <h1 class="title-tech"><?php echo $acc ?></h1>
                                        <p class="des-tech"><?php echo $acc1 ?></p>
                                        <br>
                                        <p class="des-tech"><?php echo $sensing_des2 ?></p>
                                        
                                    </div>                                    
                                
                            </div> 
                            
                            <div class="row tab-two3">
                                    
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <h1 class="title-tech"><?php echo $rdm ?></h1>
                                        <p class="des-tech"><?php echo $rdm1 ?></p>
                                        <br>
                                        <p class="des-tech"><?php echo $sensing_des2 ?></p>
                                        
                                    </div>   
                                    
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <img class="img-tech" src="https://www.car.giantandro.com/storage/app/uploads/technology/rdm.jpg" />
                                        
                                    </div>                                    
                                
                            </div>     
                            
                            <div class="row tab-two4">
                                        
                                <div class="col-sm-6 in-tab1">
                                            
                                    <img class="img-tech" src="https://www.car.giantandro.com/storage/app/uploads/technology/lcdn.jpg" />
                                            
                                </div>
                                        
                                <div class="col-sm-6 in-tab1">
                                            
                                        <h1 class="title-tech"><?php echo $lcdn ?></h1>
                                        <p class="des-tech"><?php echo $lcdn1 ?></p>
                                        <br>
                                        <p class="des-tech"><?php echo $sensing_des2 ?></p>
                                            
                                </div>                                    
                                
                            </div>
                            
                            <div class="row tab-two5">
                                    
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <h1 class="title-tech"><?php echo $lkas ?></h1>
                                        <p class="des-tech"><?php echo $lkas1 ?></p>
                                        <br>
                                        <p class="des-tech"><?php echo $sensing_des2 ?></p>
                                        
                                    </div>   
                                    
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <img class="img-tech" src="https://www.car.giantandro.com/storage/app/uploads/technology/lkas.jpg" />
                                        
                                    </div>                                    
                                
                            </div>    
                            
                            <div class="row tab-two6">
                                        
                                <div class="col-sm-6 in-tab1">
                                            
                                    <img class="img-tech" src="https://www.car.giantandro.com/storage/app/uploads/technology/ahb.jpg" />
                                            
                                </div>
                                        
                                <div class="col-sm-6 in-tab1">
                                            
                                        <h1 class="title-tech"><?php echo $ahb ?></h1>
                                        <p class="des-tech"><?php echo $ahb1 ?></p>
                                        <br>
                                        <p class="des-tech"><?php echo $sensing_des2 ?></p>
                                            
                                </div>                                    
                                
                            </div>                            
                            
                    	</div>
                    	
                    	<div class="tab-pane two-tab" id="tabs-2" role="tabpanel">
    
                            <div class="row tab-three">
                                    
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <h1 class="title-tech"><?php echo $dams ?></h1>
                                        <p class="des-tech"><?php echo $dams1 ?></p>
                                        <br>
                                        <p class="des-tech"><?php echo $sensing_des2 ?></p>
                                        
                                    </div>  
                                    
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <img class="img-tech" src="https://www.car.giantandro.com/storage/app/uploads/technology/dams.jpg" />
                                        
                                    </div>                                    
                                
                            </div>
                            
                            <div class="row tab-three1">

                                    <div class="col-sm-6 in-tab1">
                                        
                                        <img class="img-tech" src="https://www.car.giantandro.com/storage/app/uploads/technology/vsa.jpg" />
                                        
                                    </div>  
                                    
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <h1 class="title-tech"><?php echo $vsa ?></h1>
                                        <p class="des-tech"><?php echo $vsa1 ?></p>
                                        <br>
                                        <p class="des-tech"><?php echo $des_tech2 ?></p>
                                        
                                    </div>  
                                
                            </div>         
                            
                            <div class="row tab-three2">
                                    
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <h1 class="title-tech"><?php echo $marc ?></h1>
                                        <p class="des-tech"><?php echo $marc1 ?></p>
                                        <br>
                                        <p class="des-tech"><?php echo $des_tech2 ?></p>
                                        
                                    </div>  

                                    <div class="col-sm-6 in-tab1">
                                        
                                        <img class="img-tech" src="https://www.car.giantandro.com/storage/app/uploads/technology/camera.jpg" />
                                        
                                    </div> 
                                
                            </div>       
                            
                            <div class="row tab-three3">

                                    <div class="col-sm-6 in-tab1">
                                        
                                        <img class="img-tech" src="https://www.car.giantandro.com/storage/app/uploads/technology/hlw.jpg" />
                                        
                                    </div> 
                                    
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <h1 class="title-tech"><?php echo $hlw ?></h1>
                                        <p class="des-tech"><?php echo $hlw1 ?></p>
                                        <br>
                                        <p class="des-tech"><?php echo $hlw2 ?></p>
                                        
                                    </div>  
                                
                            </div>     
                            
                            <div class="row tab-three4">
                                    
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <h1 class="title-tech"><?php echo $hsa ?></h1>
                                        <p class="des-tech"><?php echo $hsa1 ?></p>
                                        <br>
                                        <p class="des-tech"><?php echo $des_tech2 ?></p>
                                        
                                    </div>  

                                    <div class="col-sm-6 in-tab1">
                                        
                                        <img class="img-tech" src="https://www.car.giantandro.com/storage/app/uploads/technology/hsa.jpg" />
                                        
                                    </div> 
                                
                            </div>      
                            
                            <div class="row tab-three5">
                                
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <img class="img-tech" src="https://www.car.giantandro.com/storage/app/uploads/technology/waal.jpg" />
                                        
                                    </div>                                 
                                    
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <h1 class="title-tech"><?php echo $waal ?></h1>
                                        <p class="des-tech"><?php echo $waal1 ?></p>
                                        <br>
                                        <p class="des-tech"><?php echo $des_tech2 ?></p>
                                        
                                    </div>  
                                
                            </div>                             
                            
                            <div class="row tab-three6">
                                
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <h1 class="title-tech"><?php echo $autobh ?></h1>
                                        <p class="des-tech"><?php echo $autobh1 ?></p>
                                        <br>
                                        <p class="des-tech"><?php echo $autobh2 ?></p>
                                        
                                    </div>
                                
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <img class="img-tech" src="https://www.car.giantandro.com/storage/app/uploads/technology/aha.jpg" />
                                        
                                    </div>                                  
                                
                            </div>    
                            
                            <div class="row tab-three7">
                                
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <img class="img-tech" src="https://www.car.giantandro.com/storage/app/uploads/technology/front.jpg" />
                                        
                                    </div>                                 
                                    
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <h1 class="title-tech"><?php echo $front_pass ?></h1>
                                        <p class="des-tech"><?php echo $front_pass1 ?></p>
                                        <br>
                                        <p class="des-tech"><?php echo $sensing_des2 ?></p>
                                        
                                    </div>  
                                
                            </div>
                            
                            <div class="row tab-three8">
                                    
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <h1 class="title-tech"><?php echo $rears ?></h1>
                                        <p class="des-tech"><?php echo $rears1 ?></p>
                                        <br>
                                        <p class="des-tech"><?php echo $sensing_des2 ?></p>
                                        
                                    </div>  
                                    
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <img class="img-tech" src="https://www.car.giantandro.com/storage/app/uploads/technology/crs.jpg" />
                                        
                                    </div>                                     
                                
                            </div>
                            
                            <div class="row tab-three9">
                                
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <img class="img-tech" src="https://www.car.giantandro.com/storage/app/uploads/technology/hdc.jpg" />
                                        
                                    </div>                                 
                                    
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <h1 class="title-tech"><?php echo $hilld ?></h1>
                                        <p class="des-tech"><?php echo $hilld1 ?></p>
                                        <br>
                                        <p class="des-tech"><?php echo $hilld2 ?></p>
                                        
                                    </div>  
                                
                            </div>
                            
                            <div class="row tab-three10">
                                    
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <h1 class="title-tech"><?php echo $agile ?></h1>
                                        <p class="des-tech"><?php echo $agile1 ?></p>
                                        <br>
                                        <p class="des-tech"><?php echo $des_tech2 ?></p>
                                        
                                    </div>  
                                    
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <img class="img-tech" src="https://www.car.giantandro.com/storage/app/uploads/technology/aha.jpg" />
                                        
                                    </div>                                     
                                
                            </div>
    
                    	</div>                	
                    	
                    	<div class="tab-pane third-tab" id="tabs-3" role="tabpanel">
    
                            <div class="row tab-one">
                                    
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <h1 class="title-tech"><?php echo $title_tech1 ?></h1>
                                        <p class="des-tech"><?php echo $des_tech1 ?></p>
                                        <br>
                                        <p class="des-tech"><?php echo $des_tech2 ?></p>
                                        
                                    </div>
                                    
                                    <div class="col-sm-6 in-tab1">
                                        
                                        <img class="img-tech" src="https://www.car.giantandro.com/storage/app/uploads/technology/vtech.jpg" />
                                        
                                    </div>                                    
                              
                            </div>
    
                    	</div>                    	
                    	
                    </div>
                
                </div>

            </div>

<?php }?>

<?php require(base_path().'/themes/giant/footer.php'); ?>