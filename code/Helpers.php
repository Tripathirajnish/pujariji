<?php
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use \Illuminate\Notifications\Notifiable;
use App\Services\FCMService;
use App\Models\Notifications;
use App\Models\Kathavachak;
use App\Models\KathavachakBooking;
use App\Models\Jajmaan;
use App\Models\AstrologerBooking;
use App\Models\Astrologer;
use App\Models\Pooja;
use App\Models\Temple;
use App\Models\AstroPlan;
use App\Models\PoojaPujari;
use App\Models\Kundali;
use App\Models\KundaliBooking;
use App\Models\FCMServerKey;
use App\Models\Muhurt;
use App\Models\TemplePooja;
use App\Models\VirtualPooja;
use App\Models\VirtualPoojaJajmaan;
use Illuminate\Support\Facades\DB;


// To get last id of the table i.e. 1,2,3,.......
if (! function_exists('last_id')) {
    function last_id($id){
        if(!is_null($id)){
            $get_last = DB::table($id)->latest()->first();
            if(!is_null($get_last)){
                $last = intval($get_last->id) + 1;
            }else{
                $last = '1';
            }
            return $last;
        }else{
            return 0;
        }
    }
}


if(! function_exists('sms')){
        function sms($number, $message){
            $msg = urlencode($message);
            $senderId = "SAPLPU";
            $authkey='953c1b58f56e96729da91a7997a8d';
            $url="http://msg.msgclub.net/rest/services/sendSMS/sendGroupSms?AUTH_KEY=".$authkey."&message=".$msg."&senderId=".$senderId."&routeId=1&mobileNos=".$number."&smsContentType=english";
            $res = file_get_contents($url);
            return $res;
            if ($res) {
                return true;
            } else {
                return false;
            }
    }
}


if(! function_exists('kathavachak_name')){
    function kathavachak_name($id){
        $name = Kathavachak::where('kthavchk_id',$id)->first();
        return !empty($name)?$name->kthavchk_name.''.$name->kthavchk_surname:'';
    }
}

if(! function_exists('kathavachak_number')){
    function kathavachak_number($id){
        $number = Kathavachak::where('kthavchk_id',$id)->first();
        return !empty($number)?$number->kthavchk_phone:'';
    }
}

if(! function_exists('kathavachak_image')){
    function kathavachak_image($id){
        $image = Kathavachak::where('kthavchk_id',$id)->first();
        return !empty($image)?$image->kthavchk_image:'';
    }
}


if(! function_exists('virtual_jajmaan_name')){
    function virtual_jajmaan_name($id){
        $name = VirtualPoojaJajmaan::where('id',$id)->first();
        return !empty($name)?$name->name.''.$name->surname:'';
    }
}

if(! function_exists('virtual_jajmaan_number')){
    function virtual_jajmaan_number($id){
        $number = VirtualPoojaJajmaan::where('id',$id)->first();
        return !empty($number)?$number->phone:'';
    }
}
if(! function_exists('virtual_jajmaan_gender')){
    function virtual_jajmaan_gender($id){
        $number = VirtualPoojaJajmaan::where('id',$id)->first();
        return !empty($number)?($number->gender == '0' ? 'Male' : ($number->gender == '1' ? 'Female' : 'Other')):'';
    }
}


if(! function_exists('virtual_jajmaan_image')){
    function virtual_jajmaan_image($id){
        $image = VirtualPoojaJajmaan::where('id',$id)->first();
        return !empty($image)?$image->image:'';
    }
}


if(! function_exists('jajmaan_name')){
    function jajmaan_name($id){
        $name = Jajmaan::where('jajmaan_id',$id)->first();
        return !empty($name)?$name->name.''.$name->surname:'';
    }
}

if(! function_exists('jajmaan_number')){
    function jajmaan_number($id){
        $number = Jajmaan::where('jajmaan_id',$id)->first();
        return !empty($number)?$number->phone:'';
    }
}
if(! function_exists('jajmaan_gender')){
    function jajmaan_gender($id){
        $number = Jajmaan::where('jajmaan_id',$id)->first();
        return !empty($number)?($number->gender == '0' ? 'Male' : ($number->gender == '1' ? 'Female' : 'Other')):'';
    }
}


if(! function_exists('jajmaan_image')){
    function jajmaan_image($id){
        $image = Jajmaan::where('jajmaan_id',$id)->first();
        return !empty($image)?$image->image:'';
    }
}

if(! function_exists('jajmaan_fcm')){
    function jajmaan_fcm($id){
        $number = Jajmaan::where('jajmaan_id',$id)->first();
        return !empty($number)?$number->fcm_token:'';
    }
}

if(! function_exists('total_kathavachak_booking')){
    function total_kathavachak_booking($id){
        $total = KathavachakBooking::whereNull('deleted_at')->where('booking_status',$id)->count();
        return $total;
    }
}


if(! function_exists('kathavachak_cash_collected')){
    function kathavachak_cash_collected($id){
        $total = KathavachakBooking::whereNull('deleted_at')->where('booking_status','1')->where('kathavachak_id',$id)->sum('total_price');
        $advance = KathavachakBooking::whereNull('deleted_at')->where('booking_status','1')->where('kathavachak_id',$id)->sum('advance');
        return $total - $advance;
    }
}


if(! function_exists('kathavachak_katha_done')){
    function kathavachak_katha_done($id){
        $total = KathavachakBooking::whereNull('deleted_at')->where('kathavachak_id',$id)->where('booking_status','1')->count();
        return $total;
    }
}


if(! function_exists('state_name')){
    function state_name($id){
        $name = DB::table('pujari_state')->where('id',$id)->first();
        return $name!=null ? $name->state.'('.$name->state_hindi.')':'';
    }
}

if (!function_exists('stringToArray')) {
    function stringToArray($string) {
        // Remove unnecessary white spaces and line breaks
        $string = preg_replace('/\s+/', '', $string);

        // Extract key-value pairs
        preg_match_all('/\{([^}]*)\}/', $string, $matches);

        $result = [];

        foreach ($matches[1] as $match) {
            $pairs = explode(',', $match);
            $item = [];

            foreach ($pairs as $pair) {
                list($key, $value) = explode(':', $pair);
                $item[trim($key)] = trim($value);
            }

            $result[] = $item;
        }

        return $result;
    }
}


if(! function_exists('virtual_category_name')){
    function virtual_category_name($id){
        $name = DB::table('virtual_pooja_categories')->where('cat_id',$id)->first();
        return $name!=null ? $name->cat_name.'('.$name->cat_name_hindi.')':'';
    }
}

if(! function_exists('virtual_pooja_name')){
    function virtual_pooja_name($id){
        $name = DB::table('pooja_details')->where('pooja_id',$id)->where('lang','hi')->first();
        return $response = [
            'eng_name' => $name->name ?? ''
         ];
    }
}

if(! function_exists('virtual_package_name')){
    function virtual_package_name($id){
        $name = DB::table('virtual_pooja_packages')->where('id',$id)->first();
        return $response = [
            'eng_name' => $name->name??'',
            'hindi_name' => $name->name_hindi??'',
    ];
    }
}


if(! function_exists('virtual_pooja_image')){
    function virtual_pooja_image($id){
        $image = VirtualPooja::where('id',$id)->first();
        return !empty($image)?$image->image:'';
    }
}



if(! function_exists('category_name')){
    function category_name($id){
        $name = DB::table('pooja_categories')->where('cat_id',$id)->first();
        return $name!=null ? $name->cat_name.'('.$name->cat_name_hindi.')':'';
    }
}

if(! function_exists('pooja_name')){
    function pooja_name($id){
        $name = DB::table('poojas')->where('pooja_id',$id)->first();
        return $response = [
            'eng_name' => $name->name??'',
            'hindi_name' => $name->name_hindi??'',
    ];
    }
}

if(! function_exists('package_name')){
    function package_name($id){
        $name = DB::table('pooja_packages')->where('package_id',$id)->first();
        return $response = [
            'eng_name' => $name->name??'',
            'hindi_name' => $name->name_hindi??'',
    ];
    }
}


if(! function_exists('pooja_image')){
    function pooja_image($id){
        $image = Pooja::where('pooja_id',$id)->first();
        return !empty($image)?$image->image:'';
    }
}


if(! function_exists('temple_pooja_image')){
    function temple_pooja_image($id){
        $image = TemplePooja::where('pooja_id',$id)->first();
        return !empty($image)?$image->image:'';
    }
}



if(! function_exists('temple_name')){
    function temple_name($id){
        $name = Temple::where('temple_id',$id)->first();
        return $response = [
            'eng_name' => $name->temple_name??'',
            'hindi_name' => $name->temple_name_hindi??'',
    ];
    }
}



if(! function_exists('temple_name_by_pooja_id')){
    function temple_name_by_pooja_id($id){
        $pooja = TemplePooja::where('pooja_id',$id)->first();
        $name = Temple::where('temple_id',$pooja->temple_id)->first();
        return $response = [
            'eng_name' => $name->temple_name??'',
            'hindi_name' => $name->temple_name_hindi??'',
    ];
    }
}


if(! function_exists('temple_package_name')){
    function temple_package_name($id){
        $name = DB::table('temple_pooja_packages')->where('package_id',$id)->first();
        return $response = [
            'eng_name' => $name->name??'',
            'hindi_name' => $name->name_hindi??'',
    ];
    }
}


if(! function_exists('temple_pooja_name')){
    function temple_pooja_name($id){
        $name = DB::table('temple_poojas')->where('pooja_id',$id)->first();
        return $response = [
            'eng_name' => $name->name??'',
            'hindi_name' => $name->name_hindi??'',
    ];
    }
}

    // Show Value in Input atttributes
    if (! function_exists('input_value')) {
        function input_value($db_value=NULL,$session_value=NULL){
            $value = '';
            if(isset($db_value)){
                $value = $db_value;
            }
            if(isset($session_value)){
                $value = $session_value;
            }
            if(isset($db_value) && isset($session_value)){
                $value = $session_value;
            }
            return $value;
        }
    }


    if (!function_exists('jajmaan_booking_by_model')) {
        function jajmaan_booking_by_model($model_name, $jajmaan_id) {
            $className = 'App\\Models\\' . $model_name;

            try {
                $model = new $className;
                if($model_name=='EcommerceOrderProduct'){
                    $bookings = $model->where('order_status', '2')->where('jajmaan_id', $jajmaan_id)->count();
                }else{
                    $bookings = $model->where('booking_status', '1')->where('jajmaan_id', $jajmaan_id)->count();
                }
                return $bookings;
            } catch (\Exception $e) {
                return 0;
            }
        }
    }


    if (!function_exists('jajmaan_booking_complete_payment_by_model')) {
        function jajmaan_booking_complete_payment_by_model($model_name, $column_name, $jajmaan_id) {
            $className = 'App\\Models\\' . $model_name;

            try {
                $model = new $className;
                if($model_name=='EcommerceOrderProduct'){
                    $bookings = $model->where('order_status', '2')->where('jajmaan_id', $jajmaan_id)->sum($column_name);
                }else{
                    $bookings = $model->where('booking_status', '1')->where('jajmaan_id', $jajmaan_id)->sum($column_name);
                }
                return number_format($bookings);
            } catch (\Exception $e) {
                return 0;
            }
        }
    }


    if (!function_exists('jajmaan_booking_refund_payment_by_model')) {
        function jajmaan_booking_refund_payment_by_model($model_name, $column_name, $jajmaan_id) {
            $className = 'App\\Models\\' . $model_name;

            try {
                $model = new $className;
                if($model_name=='EcommerceOrderProduct'){
                    $bookings = $model->where('order_status', '4')->where('jajmaan_id', $jajmaan_id)->sum($column_name);
                }else{
                    $bookings = $model->where('booking_status', '3')->where('jajmaan_id', $jajmaan_id)->sum($column_name);
                }
                return number_format($bookings);
            } catch (\Exception $e) {
                return 0;
            }
        }
    }


    if(! function_exists('pujari_name')){
        function pujari_name($id){
            $name = PoojaPujari::where('pujari_id',$id)->first();
            if($name){
                $name = $name->name??'';
                $surname = $name->surname??'';
                return $name.' '.$surname;
            }else{
                return '';
            }
        }
    }


    if(! function_exists('pujari_image')){
        function pujari_image($id){
            $image = PoojaPujari::where('pujari_id',$id)->first();
            return !empty($image)?$image->pujari_image:'';
        }
    }


    if(! function_exists('pujari_number')){
        function pujari_number($id){
            $image = PoojaPujari::where('pujari_id',$id)->first();
            return !empty($image)?$image->phone_number:'';
        }
    }

    if(! function_exists('pujari_fcm')){
        function pujari_fcm($id){
            $fcm = PoojaPujari::where('pujari_id',$id)->first();
            return !empty($fcm)?$fcm->fcm_token:'';
        }
    }

    if(! function_exists('total_astro_plan_bookings')){
        function total_astro_plan_bookings($plan_id){
            $count = AstrologerBooking::where('plan_id',$plan_id)->count();
            return $count;
        }
    }

    if(! function_exists('astro_plan_name')){
        function astro_plan_name($plan_id){
            $plan = AstroPlan::where('plan_id',$plan_id)->first();
            return $plan!=null ? $plan->plan_name :'';
        }
    }


    if(! function_exists('astro_name')){
        function astro_name($id){
            $name = Astrologer::where('astro_id',$id)->first();
            return !empty($name)?$name->astro_name.''.$name->astro_surname:'';
        }
    }

    if(! function_exists('astro_number')){
        function astro_number($id){
            $number = Astrologer::where('astro_id',$id)->first();
            return !empty($number)?$number->astro_phone:'';
        }
    }


    if(! function_exists('astro_image')){
        function astro_image($id){
            $image = Astrologer::where('astro_id',$id)->first();
            return !empty($image)?$image->astro_image:'';
        }
    }


    if(! function_exists('kundali_name')){
        function kundali_name($id){
            $name = Kundali::where('kundali_id',$id)->first();
            return !empty($name)?$name->name.'('.$name->name_hindi.')':'';
        }
    }


    if(! function_exists('muhurt_name')){
        function muhurt_name($id){
            $name = Muhurt::where('muhurt_id',$id)->first();
            return !empty($name)?$name->name.'('.$name->name_hindi.')':'';
        }
    }


    if(! function_exists('send_individual_nitification')){
        function send_individual_nitification($fcm_token,$title,$body){
            return $send = FCMService::send(
                $fcm_token,
                [
                    'title' =>$title,
                    'body' => $body
                ]
            );
        }
    }

    if(! function_exists('send_save_individual_nitification')){
        function send_save_individual_nitification($fcm_token,$title,$body,$sender_id){
            $send = FCMService::send(
                $fcm_token,
                [
                    'title' =>$title,
                    'body' => $body
                ]
            );
           $sender_data = get_vendor_name($sender_id);
            $type = $sender_data['type']=='Jajmaan'?'0':'1';
            $save = Notifications::create([
                'notfication_to' => $type,
                'send_to' => $sender_id,
                'notification_by' => 'Admin',
                'date' => date('d-m-Y'),
                'msg' => $body,
                'title' => $title,
                'body' => $body,
                'image' => '',
            ]);
        }
    }



    if (!function_exists('get_vendor_name')) {
        function get_vendor_name($id)
        {
            $result = [];

            if ($astro = Astrologer::where('astro_id', $id)->first()) {
                $name = $astro->astro_name ?? '';
                $surname = $astro->astro_surname ?? '';
                $name = $name . ' ' . $surname;
                $type = 'Astrologer';
                $result = ['name' => $name, 'type' => $type];
            } elseif ($poojaPujari = PoojaPujari::where('pujari_id', $id)->first()) {
                $name = $poojaPujari->name ?? '';
                $surname = $poojaPujari->surname ?? '';
                $name = $name . ' ' . $surname;
                $type = 'Pujari Ji';
                $result = ['name' => $name, 'type' => $type];
            } elseif ($jajmaan = Jajmaan::where('jajmaan_id', $id)->first()) {
                $name = $jajmaan->name ?? '';
                $surname = $jajmaan->surname ?? '';
                $name = $name . ' ' . $surname;
                $type = 'Jajmaan';
                $result = ['name' => $name, 'type' => $type];
            } elseif ($kathavachak = Kathavachak::where('kthavchk_id', $id)->first()) {
                $name = $kathavachak->kthavchk_name ?? '';
                $surname = $kathavachak->kthavchk_surname ?? '';
                $name = $name . ' ' . $surname;
                $type = 'Kathavachak';
                $result = ['name' => $name, 'type' => $type];
            }

            return $result;
        }
    }


    if(! function_exists('get_fcm_key')){
        function get_fcm_key($id){
            if( $token = Astrologer::where('astro_id',$id)->first()){
                $token = !empty($token)?$token->fcm_token:'';
                return $token;
            }
            if( $token = PoojaPujari::where('pujari_id',$id)->first()){
                $token = !empty($token)?$token->fcm_token:'';
                return $token;
            }
            if($token = Jajmaan::where('jajmaan_id',$id)->first()){
                $token = !empty($token)?$token->fcm_token:'';
                return $token;
            }
            if($token = Kathavachak::where('kthavchk_id',$id)->first()){
                $token = !empty($token)?$token->fcm_token:'';
                return $token;
            }
        }
    }


    if (!function_exists('generateDateList')) {

        function generateDateList($startDate, $endDate)
        {
            $start = new DateTime($startDate);
            $end = new DateTime($endDate);
            $interval = new DateInterval('P1D');

            // Include the end date by adding one more day to the end
            $end->add(new DateInterval('P1D'));

            $dateRange = new DatePeriod($start, $interval, $end);

            $dates = [];
            foreach ($dateRange as $date) {
                $dates[] = $date->format('Y-m-d');
            }

            return $dates;
        }
    }


if (!function_exists('get_fcm_token')) {
    function get_fcm_token()
    {
        // return 'AAAAJU_P1eg:APA91bGcz56YWb4sYVq6MuAFFq5f_jH46SdXNG19nSFkfTLbVyQs2LqNYIxJ2XagzQ6TNQV1_gfKFIawuJUXEbX-upg_KzP3NAMGCcHbLYMGPMLr4GZgGHRXHhDyIR2NtLexT0ZrxHbO';
        try {
            $token = DB::table('fcmserver_keys')->first();

            // Check if the query returned a result
            if ($token !== null) {
                return $token->server_key;
            } else {
                // Log or handle the case where no record was found
                return null;
            }
        } catch (\Exception $e) {
            // Log or handle the exception as needed
            return null;
        }
    }
}


if (!function_exists('generate_otp')) {
    function generate_otp($length)
    {
        $type='static';
        if (!in_array($type, ['random', 'static'])) {
            return '';
        }

        if ($type === 'random') {
            $otp = '';
            for ($i = 0; $i < $length; $i++) {
                $otp .= mt_rand(0, 9);
            }
            return $otp;
        } elseif ($type === 'static') {
            return '1234';
        }
    }
}



if(! function_exists('get_pooja_name_by_package_id')){
    function get_pooja_name_by_package_id($id){
        $name =  DB::table('pooja_packages')->where('package_id',$id)->first();
        if($name){
            $pooja = DB::table('poojas')->where('pooja_id',$name->pooja_id)->first();
            return [
                'pooja_id' => $pooja->pooja_id,
                'pooja_name' => $pooja->name
            ];
        }
        return [
            'pooja_id' => '',
            'pooja_name' => ''
        ];
    }
}

if(! function_exists('get_temple_pooja_name_by_package_id')){
    function get_temple_pooja_name_by_package_id($id){
        $name =  DB::table('temple_pooja_packages')->where('package_id',$id)->first();
        if($name){
            $pooja = DB::table('temple_poojas')->where('pooja_id',$name->pooja_id)->first();
            return [
                'pooja_id' => $pooja->pooja_id,
                'pooja_name' => $pooja->name
            ];
        }
        return [
            'pooja_id' => '',
            'pooja_name' => ''
        ];
    }
}


?>
