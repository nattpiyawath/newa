<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;

use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

use App\Mail\Notification;
use Mail;
use Response;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class EmailController extends Controller
{
    public $lang;

    public function __construct()
    {
        if(isset($_GET['lang'])){$this->lang = $_GET['lang'];}else{$this->lang = 'en';}
    }

    public function sendContact(Request $request){
        $lang = $request->lang;

        $captcha = $_POST['g-recaptcha-response'];
        
        $secretKey = "6LfyjasdAAAAAEZdZiMDls2oJQemBpHyQe50i5uj";

        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);
        
        $request->validate([
          'name' => 'required',
          'email' => 'required',
          'phone' => 'required|min:9|numeric',
          'subject' => 'subject',
          'msg' => 'required',
        ]);

        $data = [

          'name' => $request->name,
          'email' => $request->email,
          'phone' => $request->phone,
          'subject' => $request->subject,
          'msg' => $request->msg,
          'lang'=> $lang
        ];

        echo $responseKeys["success"];
        
        //should return JSON with success as true
        if($responseKeys["success"]) {

          Mail::send('emails.contact', $data, function($message) {  
              $message->to('minahok43@gmail.com', 'Get in Touch')->subject('Get in Touch From Website Honda Motorcycle');
              //$message->bcc('senglythy168@gmail.com','Amret BCC');
              $message->from('hondacar@giantandro.com','Honda Motorcycle');
          });

          $url_contact = URL('').'/'.$lang.'/contact-us?msg=success';
          return Redirect::to($url_contact);
        }
        
    }
    
    public function sendTest(Request $request) {
        require base_path("vendor/autoload.php");
        $lang = $request->lang;
        $request->validate([
          'smodel' => 'required',
          'test_name' => 'required',
          'test_phone' => 'required',
          'test_date' => 'required',
          'test_time' => 'required',
          'test_location' => 'required',
        ]);        
        
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

        try {
            
$message = '<html>

<head>
  <title>Booking Test Drive form Website NCX Automobiles</title>
</head>

<body>

<p> Dear NCX Team</p>
<p> You have received booking test drive from Website NCX Automobiles</p>
<p> Below are the details: </p>

<p> Model: <strong>'.$request->smodel.'</strong></p>
<p> Cutomer Name: <strong>'.$request->test_name.'</strong></p>
<p> Phone Number: <strong>'.$request->test_phone.'</strong></p>
<p> Date: <storng>'.$request->test_date.'</storng></p>
<p> Time: '.$request->test_time.'</p>
<p> Location: '.$request->test_location.'</p>

<p>Your Sincerely</p>
<p>NCX Automobiles</p>  
  
  
</body>

</html>';            

            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';             //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = 'natt.piyawath@gmail.com';   //  sender username
            $mail->Password = '.g0St+(Nh4Me';       // sender password
            $mail->SMTPSecure = 'ssl';                  // encryption - ssl/tls
            $mail->Port = 465;                          // port - 587/465

            $mail->setFrom('hondacar@ncxhonda.com', 'NCX');
            $mail->addAddress('minahok43@gmail.com');
            //$mail->addCC($request->emailCc);
            //$mail->addBCC($request->emailBcc);

            $mail->addReplyTo('hondacar@ncxhonda.com', 'No-Replay');

            // if(isset($_FILES['emailAttachments'])) {
            //     for ($i=0; $i < count($_FILES['emailAttachments']['tmp_name']); $i++) {
            //         $mail->addAttachment($_FILES['emailAttachments']['tmp_name'][$i], $_FILES['emailAttachments']['name'][$i]);
            //     }
            // }


            $mail->isHTML(true);                // Set email content format to HTML

            $mail->Subject = 'Test';
            $mail->Body    = $message;

            // $mail->AltBody = plain text version of email body;

            if( !$mail->send() ) {
                return back()->with("failed", "Email not sent.")->withErrors($mail->ErrorInfo);
            }
            
            else {
                $url_contact = URL('').'/'.$lang.'/test-drive?msg=success';
                return Redirect::to($url_contact);
            }

        } catch (Exception $e) {
             return back()->with('error','Message could not be sent.');
        }
    }    
    
    public function sendService(Request $request) {
        require base_path("vendor/autoload.php");
        $lang = $request->lang;
        $request->validate([
          'customername' => 'required',
          'com_phone' => 'required',
          'ser_model' => 'required',
          'cus_mile' => 'required',
          'check_dis' => 'required',
          'appoint_date' => 'required',
          'appoint_time' => 'required',
          'remark' => 'required',
        ]);        
        
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

        try {
            
$message = '<html>

<head>
  <title>Service Appointment form Website NCX Automobiles</title>
</head>

<body>

<p> Dear NCX Team</p>
<p> You have received service appointment from Website NCX Automobiles</p>
<p> Below are the details: </p>

<p> Cutomer Name: <strong>'.$request->customername.'</strong></p>
<p> Phone Number: <strong>'.$request->com_phone.'</strong></p>
<p> Model: <strong>'.$request->ser_model.'</strong></p>
<p> Mileage (kilometers): <storng>'.$request->cus_mile.'</storng></p>
<p> Repair Type: <strong>'.$request->check_dis.'</strong></p>
<p> Date: <storng>'.$request->appoint_date.'</storng></p>
<p> Time: '.$request->appoint_time.'</p>
<p> Remark: '.$request->remark.'</p>

<p>Your Sincerely</p>
<p>NCX Automobiles</p>  
  
  
</body>

</html>';            

            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'sg1-ss17.a2hosting.com';             //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = 'ptt@giantandro.com';   //  sender username
            $mail->Password = '.g0St+(Nh4Me';       // sender password
            $mail->SMTPSecure = 'ssl';                  // encryption - ssl/tls
            $mail->Port = 465;                          // port - 587/465

            $mail->setFrom('hondacar@ncxhonda.com', 'NCX');
            $mail->addAddress('minahok43@gmail.com');
            //$mail->addCC($request->emailCc);
            //$mail->addBCC($request->emailBcc);

            $mail->addReplyTo('hondacar@ncxhonda.com', 'No-Replay');

            // if(isset($_FILES['emailAttachments'])) {
            //     for ($i=0; $i < count($_FILES['emailAttachments']['tmp_name']); $i++) {
            //         $mail->addAttachment($_FILES['emailAttachments']['tmp_name'][$i], $_FILES['emailAttachments']['name'][$i]);
            //     }
            // }


            $mail->isHTML(true);                // Set email content format to HTML

            $mail->Subject = 'Test';
            $mail->Body    = $message;

            // $mail->AltBody = plain text version of email body;

            if( !$mail->send() ) {
                return back()->with("failed", "Email not sent.")->withErrors($mail->ErrorInfo);
            }
            
            else {
                $url_contact = URL('').'/'.$lang.'/service-appointment?msg=success';
                return Redirect::to($url_contact);
            }

        } catch (Exception $e) {
             return back()->with('error','Message could not be sent.');
        }
    }      
    
 }



