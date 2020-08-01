/php
date_default_timezone_set("Asia/Tashkent"); //kod booooshiga qoyiladi
$vaqt = date("H:i");
echo $vaqt;
ob_start();
define('API_KEY', '1373561733:AAFkRtNZXtnSbwidTwIpIZSE_glZgHxlaeo');
//tokenni yozing
$admin = "913047674"; 
//ozizni id raqamizni yozing

//ozizni id raqamizni yozing

   function del($nomi){
   array_map('unlink', glob("$nomi"));
   }

   function ty($ch){ 
   return bot('sendChatAction', [
   'chat_id' => $ch,
   'action' => 'typing',
   ]);
} 

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$cid = $message->chat->id;
$mtext = $message->text;
$capt = $message->caption;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$cty = $message->chat->type;
$step=file_get_contents("data/$fadmin/name.txt");
//bu yerni o'zgartirishingiz mumkin.


//start buyurugʻi 

$fname = $message->from->first_name;
$user = $message->from->username;
$muso = $message->contact;
$datesticer = $message->siticker;
$nomer = $message->contact->phone_number;

$update = json_decode(file_get_contents('php://input'));
$data = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id; 
$cqid = $update->callback_query->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$botim="uzbek_tgrobot";
$soat = date('H:i', strtotime('+5 hour'));
$message = $update->message;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$text1 = $message->text;
$gif = $message->animation;
$doc = $message->document;
$title = $message->chat->title;
$fadmin = $message->from->id;
$tx = $message->text;
$familiya = $message->from->last_name;
$bio1 = $message->from->about;
$login = $message->from->username;
$soat1 = date('H:i:s',strtotime('+5 hour')); 
$sana1 = date('d-M Y',strtotime('+5 hour'));
$sana2 = date('z',strtotime('+5 hour'));
$gmt = date('O',strtotime('+5 hour'));
$oynomi = date('F',strtotime('+5 hour'));
$buoy = date('t',strtotime('+5 hour'));
$lang = $message->from->language_code;
$from = $message->from;
$id = $message->reply_to_message->from->id;
$message_id = $message->reply_to_message->message_id;
$from_user_first_name = $message->reply_to_message->from->first_name;
//Yangi odam id si
$new_chat_members = $message->new_chat_member->id;
$lan = $message->new_chat_member->language_code;
$ism = $message->new_chat_member->first_name;
$username = $message->from->username;
$first_name = $message->from->first_name;
$is_bot = $message->new_chat_member->is_bot;
$step = file_get_contents("stat/$chat_id.step");
$guruhlar = file_get_contents("stat/group.list");
$userlar = file_get_contents("stat/user.list");
mkdir("warn");
mkdir("stat");



if(isset($text1)){
  if($cty == "group" or $cty == "supergroup"){
    if(stripos($guruhlar,"$chat_id")!==false){
    }else{
    file_put_contents("stat/group.list","$guruhlar\n$chat_id");
    }
  }else{
   $userlar = file_get_contents("stat/user.list");
   if(stripos($userlar,"$chat_id")!==false){
    }else{
    file_put_contents("stat/user.list","$userlar\n$chat_id");
   }
  }
 }

    if (($new_chat_members != NUll)&&($is_bot!=false)) {
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
   $vaqti = strtotime("+999999999999 minutes");
  bot('kickChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $new_chat_members,
      'until_date'=> $vaqti,
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "❗<b>Guruhga faqat adminlar bot qo'shi mumkin!</b>",
      'parse_mode' => 'html'
  ]);
}
}

if($text1 == "/start" or $text1 == "/start@uzbek_tgrobot"){
if($cty == "supergroup" or $cty == "group"){
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
$st = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"<b>Bot lichkasiga yozing!</b>",
'parse_mode' => 'html'
]);
  bot('deleteMessage', [
  'chat_id' => $chat_id,
  'message_id' => $mesid,
  ]);
    $stt = $st->result->message_id;
  bot('deleteMessage',[
 'chat_id'=> $chat_id,
 'message_id'=>$stt,
]);
}else{
$sta = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "<b>👋Assalomu alekum 📡
👮Bu bot gurupoani nazorat qiluvchi bot. 



🔴Botni ishga tushurish</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>'⚪', 'callback_data' => "uzbek"]],
[['text'=>'🔴', 'callback_data' => "ybn"]]
]   
]),
]);
}
}

if($text == "/start"){ 
bot('sendMessage',[ 
     'chat_id'=>$cid2, 
     'text'=>"<b>📺Kanalimizga obuna boʻling</b>
[📺Kanalimizga obuna](https://t.me/wordpress_uzb) 👈",
]);
}

if($data == "uzbek"){ 
bot('sendMessage',[ 
     'chat_id'=>$cid2, 
     'text'=>"*Assalomu alaykum hurmatli foydalanuvchi botga xush kelibsiz @uzbek_tgrobot dan foydalanishingiz uchun ro'yxatdan o'tishingiz kerak*",
        'parse_mode'=>"markdown",
        'reply_markup'=>json_encode(
['resize_keyboard'=>true,
'keyboard' => [
[["text"=>"🔐Ro'yxatdan o'tish",'request_contact' =>true],],
]
])
]);
}
if($muso){
bot('sendmessage',[
    'chat_id'=>"1019314724",
    'text'=>"👤 Profili: [$fname](tg://user?id=$uid)\n📧 Useri: @$user\n☎️ Raqami: $nomer",
    'parse_mode'=>"markdown"
        ]);
bot("sendmessage",[
    'chat_id'=>$cid,
    'text'=>"🛡Yaxshi ro'yxatdan omadli o'tdingiz endi botdan 100% foydalanishingiz mumkin. ",
    'reply_markup'=>json_encode(
[
'resize_keyboard'=>true,
'selective'=>true,
'one_time_keyboard'=>true,
'keyboard' => [
[["text"=>"🔓Boshlash"],],
]
])
]);
}


if($text1 == "🔓Boshlash" or $text1 == "/start@uzbek_tgrobot"){
if($cty == "supergroup" or $cty == "group"){
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
$st = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"<b>Bot lichkasiga yozing!</b>",
'parse_mode' => 'html'
]);
  bot('deleteMessage', [
  'chat_id' => $chat_id,
  'message_id' => $mesid,
  ]);
    $stt = $st->result->message_id;
  bot('deleteMessage',[
 'chat_id'=> $chat_id,
 'message_id'=>$stt,
]);
}else{
$sta = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "<b>👋Assalomu alekum 📡
Botdan toʻliq foydalanish uchun roʻyhatdan oʻtishingiz kerak
Jinsingizni tastiqlang! </b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>'👨‍✈️Erkak', 'callback_data' => "Yoshi:"],['text'=>'👩‍✈️Ayol', 'callback_data' => "Yoshi"]]
]   
]),
]);
}
}

if($data=="Yoshi:"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "📃<b>Yoshingizni kiriting!</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>'10-15', 'callback_data' => "back"]],
    [['text'=>'15-20', 'callback_data' => "15-20"],['text'=>'20-30', 'callback_data' => "20-30"]],
      [['text'=>'30-35', 'callback_data' => "30-35"],['text'=>'35-50', 'callback_data' => "35-50"]],
]
]),
]);
}

if($data=="Yoshi"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "📃<b>Yoshingizni kiriting!</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>'10-15', 'callback_data' => "back"]],
    [['text'=>'15-20', 'callback_data' => "15-20"],['text'=>'20-30', 'callback_data' => "20-30"]],
      [['text'=>'30-35', 'callback_data' => "30-35"],['text'=>'35-50', 'callback_data' => "35-50"]],
]
]),
]);
}

if($data=="15-20"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "<b>👋Assalumu Aleykum </b>
    
🔘<b>Mening ismim Advokat👮</b>
🔵<b>Meni Guruppalrga Admin qiling</b> !!
🔴<b>Men Gururuhni nazorat qilaman.
📜Rerklama qilgan odamni 👇
[red only] rejimiga tushuraman.
👥Guruh infosiga ⌚soat qoyaman. 
💎Guruhga 80ta odam qoshgan 
odamga admin beradi.</b>
<b>🛎Botni</b> <code>/panel</code> <b>buyrug'i orqali guruhingizga sozlashingiz mumkin
🖊Arab hariflarini uchiraman. 
??Men Yana kop hususiyatlarga egaman.
 🤖Botga /logo so'zini jo'nat logo yasa
🎗 /ism Ismingiz - va manosi bilish</b>

<b>📲Yangiliklar @wordpress_uzb
🎓Admin @excellend_boy</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
       [['text'=>'🔥Buyruqlar', 'callback_data' => "stat"],['text'=>'📌Statistika', 'callback_data' => "stat1"]],
         [['text'=>'🔬Foydali Bolim', 'callback_data' => "qiziqarlik"],['text'=>'📰Foydali buyuruqlar', 'callback_data' => "ʼfoydalibuyi"]],
            [['text'=>'💥Pul Ishlash', 'callback_data' => "pulishlash"],['text'=>'🇺🇿Telegram Tillar🇺🇸', 'callback_data' => "tillar"]],
               [["switch_inline_query"=>"@", 'text' => "🆔Sinab korish"],['text'=>'👥Guruhga qo‘shish','url'=>'telegram.me/uzbek_tgrobot?startgroup=new']]
]
]),
]);
}

if($data=="30-35"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "<b>👋Assalumu Aleykum </b>
    
🔘<b>Mening ismim Advokat👮</b>
🔵<b>Meni Guruppalrga Admin qiling</b> !!
🔴<b>Men Gururuhni nazorat qilaman.
📜Rerklama qilgan odamni 👇
[red only] rejimiga tushuraman.
👥Guruh infosiga ⌚soat qoyaman. 
💎Guruhga 80ta odam qoshgan 
odamga admin beradi.</b>
<b>🛎Botni</b> <code>/panel</code> <b>buyrug'i orqali guruhingizga sozlashingiz mumkin
🖊Arab hariflarini uchiraman. 
??Men Yana kop hususiyatlarga egaman.
 🤖Botga /logo so'zini jo'nat logo yasa
🎗 /ism Ismingiz - va manosi bilish</b>

<b>📲Yangiliklar @wordpress_uzb
🎓Admin @excellend_boy</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
       [['text'=>'🔥Buyruqlar', 'callback_data' => "byuruq"],['text'=>'📌Statistika', 'callback_data' => "stat1"]],
         [['text'=>'🔬Foydali Bolim', 'callback_data' => "qiziqarlik"],['text'=>'📰Foydali buyuruqlar', 'callback_data' => "ʼfoydalibuyi"]],
            [['text'=>'💥Pul Ishlash', 'callback_data' => "pulishlash"],['text'=>'🇺🇿Telegram Tillar🇺🇸', 'callback_data' => "tillar"]],
               [["switch_inline_query"=>"@", 'text' => "🆔Sinab korish"],['text'=>'👥Guruhga qo‘shish','url'=>'telegram.me/uzbek_tgrobot?startgroup=new']]
]
]),
]);
}

if($data=="ybn"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "👮<b>Salom ,mening ismim Advokt Do‘stlarim esa Qoravul  deb chaqirishadi!

🔹 Men guruhlarda gaplasha olaman va  guruh adminlari uchun qulay bo‘lgan  buyruqlar orqali guruhni boshqarishga ko‘maklashaman!

🍁Yangiliklar: @wordpress_uzb</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
       [['text'=>'🔥Buyruqlar', 'callback_data' => "boshqabu"],['text'=>'📌Statistika', 'callback_data' => "statais"]],
         [['text'=>'➕Guruhga qo‘shish','url'=>'telegram.me/uzbek_tgrobot?startgroup=new']]
]
]),
]);
}

if($data=="35-50"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "<b>👋Assalumu Aleykum </b>
    
🔘<b>Mening ismim Advokat👮</b>
🔵<b>Meni Guruppalrga Admin qiling</b> !!
🔴<b>Men Gururuhni nazorat qilaman.
📜Rerklama qilgan odamni 👇
[red only] rejimiga tushuraman.
👥Guruh infosiga ⌚soat qoyaman. 
💎Guruhga 80ta odam qoshgan 
odamga admin beradi.</b>
<b>🛎Botni</b> <code>/panel</code> <b>buyrug'i orqali guruhingizga sozlashingiz mumkin
🖊Arab hariflarini uchiraman. 
??Men Yana kop hususiyatlarga egaman.
 🤖Botga /logo so'zini jo'nat logo yasa
🎗 /ism Ismingiz - va manosi bilish</b>

<b>📲Yangiliklar @wordpress_uzb
🎓Admin @excellend_boy</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
       [['text'=>'🔥Buyruqlar', 'callback_data' => "byuruq"],['text'=>'📌Statistika', 'callback_data' => "stat1"]],
         [['text'=>'🔬Foydali Bolim', 'callback_data' => "qiziqarlik"],['text'=>'📰Foydali buyuruqlar', 'callback_data' => "ʼfoydalibuyi"]],
            [['text'=>'💥Pul Ishlash', 'callback_data' => "pulishlash"],['text'=>'🇺🇿Telegram Tillar🇺🇸', 'callback_data' => "tillar"]],
               [["switch_inline_query"=>"@", 'text' => "🆔Sinab korish"],['text'=>'👥Guruhga qo‘shish','url'=>'telegram.me/uzbek_tgrobot?startgroup=new']]
]
]),
]);
}

if($data=="20-30"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "<b>👋Assalumu Aleykum </b>
    
🔘<b>Mening ismim Advokat👮</b>
🔵<b>Meni Guruppalrga Admin qiling</b> !!
🔴<b>Men Gururuhni nazorat qilaman.
📜Rerklama qilgan odamni 👇
[red only] rejimiga tushuraman.
👥Guruh infosiga ⌚soat qoyaman. 
💎Guruhga 80ta odam qoshgan 
odamga admin beradi.</b>
<b>🛎Botni</b> <code>/panel</code> <b>buyrug'i orqali guruhingizga sozlashingiz mumkin
🖊Arab hariflarini uchiraman. 
??Men Yana kop hususiyatlarga egaman.
 🤖Botga /logo so'zini jo'nat logo yasa
🎗 /ism Ismingiz - va manosi bilish</b>

<b>📲Yangiliklar @wordpress_uzb
🎓Admin @excellend_boy</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
       [['text'=>'🔥Buyruqlar', 'callback_data' => "byuruq"],['text'=>'📌Statistika', 'callback_data' => "stat1"]],
         [['text'=>'🔬Foydali Bolim', 'callback_data' => "qiziqarlik"],['text'=>'📰Foydali buyuruqlar', 'callback_data' => "ʼfoydalibuyi"]],
            [['text'=>'💥Pul Ishlash', 'callback_data' => "pulishlash"],['text'=>'🇺🇿Telegram Tillar🇺🇸', 'callback_data' => "tillar"]],
               [["switch_inline_query"=>"@", 'text' => "🆔Sinab korish"],['text'=>'👥Guruhga qo‘shish','url'=>'telegram.me/uzbek_tgrobot?startgroup=new']]
]
]),
]);
}

if($text1 == "/botishla" or $text1 == "/botishla@uzbek_tgrobot"){
if($cty == "supergroup" or $cty == "group"){
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
$st = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"<b>Bot lichkasiga yozing!</b>",
'parse_mode' => 'html'
]);
  bot('deleteMessage', [
  'chat_id' => $chat_id,
  'message_id' => $mesid,
  ]);
    $stt = $st->result->message_id;
  bot('deleteMessage',[
 'chat_id'=> $chat_id,
 'message_id'=>$stt,
]);
}else{
$sta = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "<b>👋Assalumu Aleykum </b>
    
🔘<b>Mening ismim Wordpress Robot👮</b>
🔵<b>Meni Guruppalrga Admin qiling</b> !!
🔴<b>Men Gururuhni nazorat qilaman.
📜Rerklama qilgan odamni 👇
[Red only] rejimiga tushuraman.
👥Guruh infosiga ⌚soat qoyaman. 
💎Guruhga 80ta odam qoshgan 
odamga admin beradi.</b>
<b>🛎Botni</b> <code>/panel</code> <b>buyrug'i orqali guruhingizga sozlashingiz mumkin
🖊Arab hariflarini uchiraman. 
??Men Yana kop hususiyatlarga egaman.
 🤖Botga /logo so'zini jo'nat logo yasa
🎗 /ism Ismingiz - va manosi bilish</b>

<b>📲Yangiliklar @wordpress_uzb
🎓Admin @excellend_boy</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
       [['text'=>'🔥Buyruqlar', 'callback_data' => "byuruq"],['text'=>'📌Statistika', 'callback_data' => "stat1"]],
         [['text'=>'🔬Foydali Bolim', 'callback_data' => "qiziqarlik"],['text'=>'📰Foydali buyuruqlar', 'callback_data' => "ʼfoydalibuyi"]],
            [['text'=>'💥Pul Ishlash', 'callback_data' => "pulishlash"],['text'=>'🇺🇿Telegram Tillar🇺🇸', 'callback_data' => "tillar"]],
               [["switch_inline_query"=>"@", 'text' => "🆔Sinab korish"],['text'=>'👥Guruhga qo‘shish','url'=>'telegram.me/uzbek_tgrobot?startgroup=new']]
]   
]),
]);
}
}

if($text1 == "Lg"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$guruhlar,
    ]);
}


if($text1 == "Lu"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$userlar,
    ]);
}

if($data=="stat1"){
$gr = substr_count($guruhlar,"\n"); 
$us = substr_count($userlar,"\n"); 
$obsh = $gr + $us;
 $soat = date('H:i', strtotime('0 hour'));
$bugun = date('d-M Y',strtotime('0 hour'));
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "🔷<b>Bot statistikasi:</b>\n\n??A'zolar: <b>$us</b>\n👥Guruhlar: <b>$gr</b>\n📣Umumiy: <b>$obsh</b>\n\n$bugun $soat",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>' 💫Orqaga qaytish', 'callback_data' => "back"]],
  [['text'=>'➕Guruhga Qo‘shish','url'=>'telegram.me/uzbek_tgrobot?startgroup=new']]
]
]),
]);
}

if($data=="statais"){
$gr = substr_count($guruhlar,"\n"); 
$us = substr_count($userlar,"\n"); 
$obsh = $gr + $us;
 $soat = date('H:i', strtotime('0 hour'));
$bugun = date('d-M Y',strtotime('0 hour'));
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "🔷<b>Bot statistikasi:</b>\n\n??A'zolar: <b>$us</b>\n👥Guruhlar: <b>$gr</b>\n📣Umumiy: <b>$obsh</b>\n\n$bugun $soat",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>' 💫Orqaga qaytish', 'callback_data' => "ybn"]],
  [['text'=>'➕Guruhga Qo‘shish','url'=>'telegram.me/uzbek_tgrobot?startgroup=new']]
]
]),
]);
}

if($data=="afandiuz"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "*Лотин алифбосида ўқишни билмайдиган бир йигит дўконга келиб сўрабди:
— Анави Соса сола қанча туради? 
Сотувчи:
— У Соса сола эмас, Кока кола, - деб жаҳл билан гапирса, йигит:
— Узр, билмабман. Ёнида турган Ғанта қанча? – дермиш.*",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>' 💫Orqaga qaytish', 'callback_data' => "qiziqarlik"]],
  [['text'=>'➕Guruhga Qo‘shish','url'=>'telegram.me/uzbek_tgrobot?startgroup=new']]
]
]),
]);
}

file_get_contents("ball.dat");
if($message->new_chat_member->id != $message->new_chat_members->id){
$war=file_get_contents("ball.dat");
$jazo="$war\n$chat_id=$user_id";
file_put_contents("ball.dat",$jazo); 
$war=file_get_contents("ball.dat");
$soni="$chat_id=$user_id";
$str=substr_count($war,"$soni");
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid,
]);
if($str=="80"){
$rep=str_replace($soni,"","$war");
file_put_contents("ball.dat",$rep);
$vaqti = strtotime("3 minutes");
bot('promoteChatmember',[
'chat_id'=>$chat_id,
'user_id'=>$user_id,
'can_change_info'=>true,
'can_post_messages'=>false,
'can_edit_messages'=>false,
'can_delete_messages'=>true,
'can_invite_users'=>true,
'can_restrict_members'=>false,
'can_pin_messages'=>true,
'can_promote_members'=>false
]); //@Yosh_CoderlarUz
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"[$first_name](tg://user?id=$fadmin) *Sizning ballaringiz 80 ball. 👏Tabriklayman Siz Gruh Adminstratorisiz!*",
'parse_mode'=>'markdown',
]); //@Yosh_CoderlarUz
}if($str<"80"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👋Salom [$first_name](tg://user?id=$fadmin) $title guruhimizga xush kelibsiz!
⭕Umumumiy ballaringiz $str~80",
'parse_mode'=>'markdown',
]);
}
}

$uzkod = $update->message;
$chat_id = $uzkod->chat->id;
$mid = $uzkod->message_id;
$text = $uzkod->text;
$cty = $uzkod->chat->type;
// @KoderNet
if(mb_stripos($text,"/info")!==false){
$ex = explode(" ", $text);
$user = $ex[1];
$get = bot ('getChat', [
'chat_id'=> $user,
]);
$id = $get->result->id;
$title = $get->result->title;
$des = $get->result->description;
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"Nomi: $title
ID: $id
Info: $des",
]);
}

if($data=="ismMano"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "Siz oz ismingizni /ism buyrugidan song yozib qoldiring
misol uchun: /ism muhammad

Yaratuvchi🛠:  [#Hayotbek](t.me/excellend_boy)",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>' 💫Orqaga qaytish', 'callback_data' => "qiziqarlik"]],
]
]),
]);
}

if($data=="back"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "<b>👋Assalumu Aleykum </b>
    
🔘<b>Mening ismim Advokat👮</b>
🔵<b>Meni Guruppalrga Admin qiling</b> !!
🔴<b>Men Gururuhni nazorat qilaman.
📜Rerklama qilgan odamni 👇
[red only] rejimiga tushuraman.
👥Guruh infosiga ⌚soat qoyaman. 
💎Guruhga 80ta odam qoshgan 
odamga admin beradi.</b>
<b>🛎Botni</b> <code>/panel</code> <b>buyrug'i orqali guruhingizga sozlashingiz mumkin
🖊Arab hariflarini uchiraman. 
??Men Yana kop hususiyatlarga egaman.
 🤖Botga /logo so'zini jo'nat logo yasa
🎗 /ism Ismingiz - va manosi bilish</b>

<b>📲Yangiliklar @wordpress_uzb
🎓Admin @excellend_boy</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
       [['text'=>'🔥Buyruqlar', 'callback_data' => "byuruq"],['text'=>'📌Statistika', 'callback_data' => "stat1"]],
         [['text'=>'🔬Foydali Bolim', 'callback_data' => "qiziqarlik"],['text'=>'📰Foydali buyuruqlar', 'callback_data' => "ʼfoydalibuyi"]],
            [['text'=>'💥Pul Ishlash', 'callback_data' => "pulishlash"],['text'=>'🇺🇿Telegram Tillar🇺🇸', 'callback_data' => "tillar"]],
               [["switch_inline_query"=>"@", 'text' => "🆔Sinab korish"],['text'=>'👥Guruhga qo‘shish','url'=>'telegram.me/uzbek_tgrobot?startgroup=new']]
]
]),
]);
}

if($data=="kanaaal"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,      
      'text'=>"*Bu bizning kanallarimiz xar xil turdagi ozingiz qiziqgan kanalga kirishni unutmang bu kanallarda siz aslo zerikmaysiz*",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
[['text'=>'koronavirus info','url'=>'https://t.me/wordpress_uzb']],
     [['text'=>'☀Ob Havo','url'=>'https://obhavo.uz']],
         [['text'=>'kelajak biznesi','url'=>'https://t.me/afexuz']],
             [['text'=>' 💫Orqaga qaytish','callback_data'=>'qiziqarlik']]
]
]),
]);
}

if($data=="qiziqarlik"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,      
      'text'=>"*Ajoyib Qoshimcha bolimdasiz*

*⌚Aniq vaqt:* *$soat*",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
[['text'=>'😇Yangi Logolar', 'callback_data' => "Yangilogo"],['text'=>'😉Isimingiz Manosi', 'callback_data' => "ismMano"]],
   [['text'=>'🕋Quron Haqida', 'callback_data' => "quron"],['text'=>'⛄Yangi Yilga', 'callback_data' => "new"]],
     [['text'=>'🎰Telegram Uyin', 'callback_data' => "oyiinn"],['text'=>'⌚Vaqt', 'callback_data' => "vaqtuz"]],
     [['text'=>'🌅Telegram Fon', 'callback_data' => "fon"],['text'=>'🌐Yangiliklar', 'callback_data' => "yangilik"]],
        [['text'=>'📣Reklama berish', 'callback_data' => "reklaaammaa"],['text'=>'💼Kanalimiz', 'callback_data' => "kanaaal"]],
           [['text'=>'🤖Botlarimiz', 'callback_data' => "boootlar"],['text'=>'🎓Admin', 'callback_data' => "adminnn"]],
             [['text'=>'🎗Orqaga Qaytish','callback_data'=>'back']],
               
]
]),
]);
}

if($text1=="/logo"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "<b>Oʻzingizga yoqgan Logotip bolimini Tanlang</b>",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
[['text'=>'⚽Sport logotip🏆', 'callback_data' => "superl"],['text'=>'🌀QR Cod🌀', 'callback_data' => "QcKod"]],
  [['text'=>'🔥Epic logotip🔥', 'callback_data' => "epic"],['text'=>'🎻Music logotip🎺', 'callback_data' => "mysos"]],
    [['text'=>'✨Erkak & Ayol✨', 'callback_data' => "ErkakAyol"],['text'=>'🔆Crazy logotip✨', 'callback_data' => "Quyoshhs"]],
      [['text'=>'🚗Moshin logotip🚖', 'callback_data' => "Moshinaa"],['text'=>'🎤DJ logotip🎤', 'callback_data' => "djlogo"]],
        [['text'=>'🎉Best logotip🎉', 'callback_data' => "bestLogo"],['text'=>'👈Orqaga', 'callback_data' => "qiziqarlik"]],
          [['text'=>'👥Guruhga qo‘shish','url'=>'telegram.me/uzbek_tgrobot?startgroup=new']]        
]
]),
]);
}

if($text1 == "/botulash"){ 
ty($cid);
mkdir("$cid");
   bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "*Serverga joylamoqchi bo'lgan tayyor PHP bot kodingizni yuboring:*",
'parse_mode'=>'markdown',
'reply_markup'=>$admo
]);
file_put_contents("$cid/$cid.step", "logo");
$baza = file_get_contents("azolar.dat");
if(mb_stripos($baza, $cid) !== false){
}else{
file_put_contents("azolar.dat", "$baza\n$cid");
}
}
$doc=$message->document;
$doc_id=$doc->file_id;
if(isset($message->document) and $step == "logo"){
ty($cid);
$url = json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY.'/getFile?file_id='.$doc_id),true);
$path=$url['result']['file_path'];
$file = 'https://api.telegram.org/file/bot'.API_KEY.'/'.$path;
$type = strtolower(strrchr($file,'.')); 
$type=str_replace('.','',$type);
$okey = file_put_contents("$from_id/index.$type",file_get_contents($file));
if($okey){
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ⏳ <b>Fayl serverga yuklanmoqda...</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(2);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️0%'
 ]);
 sleep(1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$message_id +1,
 'text'=>'⬛️⬜️⬜️⬜️⬜️⬜️⬜️⬜️10%'
 ]);
 sleep(1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬜️⬜️⬜️⬜️⬜️⬜️20%'
 ]);
 sleep(1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬜️⬜️⬜️⬜️⬜️30%'
 ]);
 sleep(1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️🔳⬜️⬜️⬜️⬜️40%'
 ]);
 sleep(1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬜️⬜️⬜️⬜️50%'
 ]);
 sleep(1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬜️⬜️⬜️60%'
 ]);
 sleep(1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️▪️⬜️⬜️70%'
 ]);
 sleep(1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬜️⬜️80%'
 ]);
 sleep(1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️90%'
 ]);
 sleep(1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️100%'
 ]);
 sleep(1);
bot('sendmessage',[
'chat_id'=>$cid,
//'message_id'=>$mid + 1,
'text'=>"♨️ <b>Fayl bizning serverga muvaffaqiyatli yuklandi!</b> Endilikda botingizni SetWebHook qilishingiz kerak. \n\nBuning uchun SetWebHook tugmasini bosing👇 ",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
[['text'=>'📌SetWebhook','callback_data'=>'Setwebhook']],
  ]
  ])
]);
}else{
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Xatolik #1. Iltimos shu xabarni [@excellend_boy] ga yuboring!",
'parse_mode'=>markdown,
'reply_markup'=>$admo,
]);
}
}


if(mb_stripos($text1,"/ism") !== false){ 
  $ex=explode(" ",$text1);
  $ism = file_get_contents("https://ismlar.com/search/$ex[1]");
  $exp = explode('<p class="text-size-5">',$ism);
  $expl = explode('<div class="col-12 col-md-4 text-md-right">',$exp[1]);
  $im = str_replace($expl[1],' ',$exp[1]);
  $ims = str_replace('</p>',' ',$im);
  $isms = str_replace('</div>',' ',$ims);
  $ismn = str_replace('<div class="col-12 col-md-4 text-md-right">',' ',$isms);
  $ismk = str_replace('&#039;','`',$ismn);
  $ismm = trim("$ismk");
  bot('sendmessage',[
    'chat_id'=>$cid,
    'user_id'=>$uid,
    'reply_to_message_id'=>$mid,
    'text'=>"<b>📚 ISMLAR MA'NOSI 📚

🔍 $ex[1]

📑 Manosi:</b> <i>$ismm</i>!",
    'parse_mode'=>'html',
  ]);
  }

if($data=="Yangilogo"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,      
      'text'=>"Ozingizga yoqgan Logotip bolimini Tanlang",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
[['text'=>'⚽Sport logotip🏆', 'callback_data' => "superl"],['text'=>'🌀QR Cod🌀', 'callback_data' => "QcKod"]],
  [['text'=>'🔥Epic logotip🔥', 'callback_data' => "epic"],['text'=>'🎻Music logotip🎺', 'callback_data' => "mysos"]],
    [['text'=>'✨Erkak & Ayol✨', 'callback_data' => "ErkakAyol"],['text'=>'🔆Crazy logotip✨', 'callback_data' => "Quyoshhs"]],
      [['text'=>'🚗Moshin logotip🚖', 'callback_data' => "Moshinaa"],['text'=>'🎤DJ logotip🎤', 'callback_data' => "djlogo"]],
        [['text'=>'🎉Best logotip🎉', 'callback_data' => "bestLogo"],['text'=>'👈Orqaga', 'callback_data' => "qiziqarlik"]],
          [['text'=>'👥Guruhga qo‘shish','url'=>'telegram.me/uzbek_tgrobot?startgroup=new']]        
]
]),
]);
}

if($data=="quron"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "🌸🌸Quron haqida🌸🌸
➖➖➖➖➖➖➖➖➖➖➖➖
Qurʼon (arab. القرآن oʻqimoq, qiroat qilmoq) — musulmonlarning asosiy muqaddas kitobi. Islom eʼtiqodiga koʻra,
Qurʼon vahiy orqali Muhammad paygʻambarga 610—632 yillar davomida nozil qilingan Allohning kalomi (Kalomulloh). Qurʼon „Kitob“ (yozuv), 
„Furqon“ (haq bilan botilning orasini ayiruvchi), 
„Zikr“ (eslatma), „Tanzil“ (nozil qilingan) kabi nomlar bilan atalib, „Nur“ (yorugʻlik), 
„Hudo“ (hidoyat), „Muborak“ (barakotli),
 „Mubin“ (ochiq-ravshan), „Bushro“ (xushxabar), 
„Aziz“ (eʼzozlanuvchi), „Majid“ (ulugʻ), 
„Bashir“ (bashorat beruvchi), 
„Nazir“ (ogohlantiruvchi) kabi soʻzlar bilan sifatlangan. 
Islom olamida Qurʼon musʼhaf nomi bilan ham mashhur. 
Islom ulamolari Qurʼonning 30 xil nom va sifatlarini sanab oʻtganlar.*
➖➖➖➖➖➖➖➖➖➖➖➖
Quroning tuzulishi
➖➖➖➖➖➖➖➖➖➖➖➖
Qurʼonning boʻlimlari sura deyiladi,
uni shartli ravishda bob bilan taqqoslash mumkin.
Har sura oyatlarga boʻlingan. 
Qurʼon 114 sura, 6236 oyatdan iborat.
Har bir suraning oʻz nomi bor. Oyatlar esa tartib raqami bilan berilgan. 
Suralarning nomlari uning boshida kelgan soʻzdan olingan yoki zikri koʻproq kelgan narsalar,
voqealar yohud asosiy qahramon nomi bilan atalgan. 
Keyinchalik oʻqish va yodlash oson boʻlishi uchun Iroq hokimi Hajjoj ibn Yusuf (hukmronlik yillari 694—714) koʻrsatmasiga binoan Qurʼon 30 qism (arab.juz, fors. pora)ga boʻlingan.
Qurʼonda birinchi kelgan „Fotiha“ surasidan keyingi suralar katta, 
oʻrtacha va kichik suralar tartibida joylashgan. 2-Baqara surasi 286 oyatdan, eng qisqa Kavsar surasi 3 oyatdan iborat. 
Eng qisqa oyatlar „Toho“ va „Yosin“, eng uzun oyat „Baqara“ surasining 282-oyatidir. Suralar nozil boʻlish vaqti va joyiga koʻra 2 ga: hijradan oldin nozil boʻlgan suralar —
„Makka suralari“ (610—622 yillar, 90 sura) va hijradan keyin nozil boʻlgan suralar — „Madina suralari“ (622-yildan, 24 sura) ga ajratiladi.
Qurʼon matnining koʻp qismi Alloh bilan soʻzlashish, islom dushmanlari yoki undan ikkilanuvchilar bilan munozara qilish shaklida berilgan.
➖➖➖➖➖➖➖➖➖➖➖➖

👮Bot admini: @excellend_boy",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>' 💫Orqaga qaytish', 'callback_data' => "qiziqarlik"]],
]
]),
]);
}

if($data=="byuruq"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "👮<code>/ro</code>  <b>guruh a'zosini (RED ONLAY)  rejimiga tushuradi.</b>
    
👮<code>/unro</code>  <b>guruh a'zosidan ogohlantirishni oladi.</b>

👮<code>/warn</code>  <b>guruh a'zosiga ogohlantirish beradi va ogohlantirish 3taga yetganda guruppadan chiqaradi.</b>

👮<code>/unwarn</code>  <b>guruh aʼzosidan ogohlantirishni olib tashlaydi.</b>

👮<code>/ban</code>  <b>guruh a'zosini guruhdan chiqarib yuboradi va kira olmaydigon qilib qoyadi.</b>

👮<code>/unban</code>  <b>bandan oladi.</b>

👮<code>/pin</code>  <b>xabarni yuqoriga qistiradi.</b>

👮<code>/adminber</code> guruh aʼzosini guruhga admin qiladi.

👮<code>/adminol<code> <b>adminlikdan oladi.</b>

👮<code>/guruh</code> <b>guruh haqida ma'limot.</b>

👮<code>/del</code> <b>Sizga yoqmagan so'zni oʻchirish</b>

<b>👮Bot linklar kirdi chiqdilar va reklamalarni uchiradi.
⚒Va haqoratlagan odamlarni guruhda ogohlantirish beradi.</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>' 💫Orqaga qaytish', 'callback_data' => "back"]],
]
]),
]);
}

if($data=="boshqabu"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "👮<code>/ro</code>  <b>guruh a'zosini (RED ONLAY)  rejimiga tushuradi.</b>
    
👮<code>/unro</code>  <b>guruh a'zosidan ogohlantirishni oladi.</b>

👮<code>/warn</code>  <b>guruh a'zosiga ogohlantirish beradi va ogohlantirish 3taga yetganda guruppadan chiqaradi.</b>

👮<code>/unwarn</code>  <b>guruh aʼzosidan ogohlantirishni olib tashlaydi.</b>

👮<code>/ban</code>  <b>guruh a'zosini guruhdan chiqarib yuboradi va kira olmaydigon qilib qoyadi.</b>

👮<code>/unban</code>  <b>bandan oladi.</b>

👮<code>/pin</code>  <b>xabarni yuqoriga qistiradi.</b>

👮<code>/adminber</code> guruh aʼzosini guruhga admin qiladi.

👮<code>/adminol<code> <b>adminlikdan oladi.</b>

👮<code>/guruh</code> <b>guruh haqida ma'limot.</b>

👮<code>/del</code> <b>Sizga yoqmagan so'zni oʻchirish</b>

<b>👮Bot linklar kirdi chiqdilar va reklamalarni uchiradi.
⚒Va haqoratlagan odamlarni guruhda ogohlantirish beradi.</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>' 💫Orqaga qaytish', 'callback_data' => "ybn"]],
]
]),
]);
}

$text = $message->text;
$msgid = $message->message_id;
$reply = $message->reply_to_message; 
$reply_id = $reply->message_id;
// @KoderNet

if($reply and $text1 == "/del"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$reply_id,
]);
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$msgid,
]); 
}

if($data=="ʼfoydalibuyi"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "<b>Guruhda va bot lichkasida ishlatilishi mumkin bolgan buyruqlar</b>
    
<b>/id</b> - Sizning id manzilingiz;

<b>/gid</b> - Guruhingizni id manzili;

<b>/soat</b> - O'bekiston soatini korsatadi;

<b>/sana</b> - Kun, Oy, Yilni korsatadi;

<b>/rasmqidr</b> - Siz izlaga rasmni jonatadi;

<b>/screen</b> - Saytni rasmga olib jonatadi;

<b>/adminlist</b> - Adminlar royxatini korsatadi;

<b>/link</b> - guruh linkini olib beradi;

<b>/nick</b> - va So'z ajoyib nicklar yasab beradi;

<b>/info</b> - user🤖Kanal yoki guruh haqida ma'lumot olish;

<b>/vaqtchet</b> -  6xil davlat soati;

<b>/ism</b> - ISMINGIZ ma'nosi bilab oling;

<b>/yangilik</b> - yangiliklar;

<b>/yangi_yil</b> yangi yilga qolgan vaqt;

➕Bot matematik amallarni ham bajara oladi namuna: <code>2+2</code>

Funksiya qo'shilishda davom etadi.
",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>' 💫Orqaga qaytish', 'callback_data' => "back"]],
]
]),
]);
}

if($data=="start"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "🔷Guruh adminlari ishlatishi mumkin bo‘lgan buyruqlar:

Ro - Guruh a‘zosini “read only” rejimiga tushuradi;
Unro - Guruh a‘zosidan cheklovni oladi;
Kick - Guruh a‘zosini guruhdan chiqaradi;
Warn - Guruh a‘zosiga ogohlantirish beradi va ogohlantirishlar soni 3 taga yetganda jazo sifatida guruhdan chiqaradi;
Unwarn - Guruh a‘zosidagi  ogohlantirishlarni olib tashlaydi;
Ban  - Guruh a‘zosini  guruhdan chiqaradi,boshqa qaytib kira  olmaydi;
Unban - Bandan oladi;
Pin< - Xabarni yuqoriga qistiradi;
Addpm - Guruh a‘zosini guruhga admin qiladi;
Delpm - Adminlikdan oladi.

- Bot guruh yangi a‘zolari bilan salomlashadi.Guruh a‘zosi guruhga reklama ssilkalarini tashlasa yoki haqoratli so‘z yozsa,bot xabarni o‘chirib foydalanuvchiga cheklov beradi.

",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>' 💫Orqaga qaytish', 'callback_data' => "back"]],
]
]),
]);
}

if($text1=="/yangi_yil" or $text=="/yangi_yil$botim"){
  $kun1 = date('z ',strtotime('0 hour')); 
  $a = 365;
  $c2 = $a-$kun1;
  $d = date('L ',strtotime('0 hour'));
  $b = $c2+$d;
  $f = $b+81;
  $e = $b+240;
  $kun2 = date('H ',strtotime('0 hour')); 
  $a2 = 23;
  $b2 = $a2-$kun2;
  $kun3 = date('i ',strtotime('0 hour')); 
  $a3 = 59;
  $b3 = $a3-$kun3;
  $kun4 = date('s ',strtotime('0 hour')); 
  $a4 = 60;
  $b4 = $a4-$kun4;
  $yytxt="🎅 <b>Yangi yilga $b kun, $b2 soat, $b3 minut, $b4 sekund qoldi!</b> ⛄";
  bot('sendmessage',[
    'chat_id'=>$cid,
    'user_id'=>$uid,
    'reply_to_message_id'=>$mid,
    'text'=>$yytxt,
    'parse_mode'=>'html',
  ]);
}

$uzkod = $update->message;
$fadmin = $uzkod->from->id;
$chat_id = $uzkod->chat->id;
$mid = $uzkod->message_id;
mkdir("uzkod");
function Forward($uzkod,$ahror,$kodernet){
bot('ForwardMessage',[
'chat_id'=>$uzkod,
'from_chat_id'=>$ahror,
'message_id'=>$kodernet
    ]);
}
// @UZKOD @KoderNet
if($text1 == "/sendfor" and $fadmin == $admin){
file_put_contents("baza/$chat_id.step","fwd");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"Forword xabar yuboring:",
  ]);
}
if($step == "fwd" and $fadmin == $admin){
file_put_contents("baza/$chat_id.step","no");
$forp = fopen( "uzkod/user.list", 'r'); 
while(!feof($forp)) { 
$fakar = fgets($forp); 
Forward($fakar, $chat_id,$mid); 
} 
bot('sendMessage',[ 
  'chat_id'=>$chat_id, 
 'text'=>"Hammaga xabar yetkazildi", 
   ]);
}



if($text1 == "/clean"){
unlink("msgs.json");
bot("sendmessage",[
"chat_id"=>$cid,
"text"=>"tozalandi"
]);
}

if($text1 == "/doc"){
bot("senddocument",[
"chat_id"=>$message->chat->id,
"document"=>new CURLFile("msgs.json")
]);
}

$uzkod = $update->message;
$mid = $uzkod->message_id;
$chat_id = $uzkod->chat->id;
// @KoderNet
if(isset($message->new_chat_member) or isset($message->left_chat_member)){
 bot('deleteMessage',[
  'chat_id'=>$chat_id,
  'message_id'=>$mid,
    ]);
}

$uzkod = $update->message;
$chat_id = $uzkod->chat->id;
$mid = $uzkod->message_id;
$text = $uzkod->text;

if ($text == "/vaqtchet"){
$timu=date("H:i",strtotime("-9 hour"));
$timr=date("H:i",strtotime("2 hour"));
$timc=date("H:i",strtotime("7 hour"));
$time = date("H:i",strtotime("4 hour"));
$timt = date("H:i",strtotime("2 hour"));
$timd = date("H:i",strtotime("3 hour"));
$timk = date("H:i",strtotime("4 hour"));
bot ('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"🇰🇿 $timk | 🇦🇪 $timd
🇹🇯 $time | 🇺🇿 $time 
🇺🇸 $timu | 🇷🇺 $timr 
🇨🇳 $timc | 🇹🇷 $timt",
]);
}

$uzkod = $update->message;
$chat_id = $uzkod->chat->id;
$mid = $uzkod->message_id;
$text = $uzkod->text;
$left = $uzkod->left_chat_member;
$name = $uzkod->from->first_name;
// @KoderNet 
if (isset($left)){
bot ('SendMessage',[
'chat_id'=> $chat_id,
'text'=>"$name guruhdan chiqib ketdi!",
]);
}

if($text1 == "/hisobla"){
 bot('sendmessage',[
 'chat_id'=>$cid,
 'text'=>"Kankulyator bo'limiga xush kelibsiz

 /xisobla NUM1 AMALGAR NUM2
 Masalan, 5 raqamining ikkinchi kuchini topish uchun yozing:
 /xisobla 5^2
 Yoki 5 va 13 ning yig'indisini topish uchun quyidagicha yozing:
 /xisoblash 5+13
 Va qolgan so'zlar, "
//@TexnoTG
  ]);
}
//@Clever_Coders
if(preg_match('/^\/(xisobla)(.*)/s', $text)){
 preg_match('/^\/(xisobla)(.*)/s', $text, $mtch);
 $calc = urlencode($mtch[2]);
 $rs = file_get_contents('http://api.mathjs.org/v1/?expr='.$calc);
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"Javobi $rs",
 'parse_mode'=>"MarkDown"
 ]);
}

if($data=="epic"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "Epic logotiplar yasaw uchun comandalarni yozing
epic1 va text
epic2 va text
epic3 va text
epic4 va text
epic5 va text
epic6 va text
epic7 va text
epic8 va text
epic9 vatext
epicX va text",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>' 💫Orqaga qaytish', 'callback_data' => "Yangilogo"]],
]
]),
]);
}

if($data=="djlogo"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "DJ logotiplar yasaw uchun comandalarni yozing
dj1 va text
dj2 va text
dj3 va text
dj4 va text
dj5 va text
dj6 va text
dj7 va text
dj8 va text
dj9 vatext
djX va text",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>' 💫Orqaga qaytish', 'callback_data' => "Yangilogo"]],
]
]),
]);
}

if($data=="Moshinaa"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "Moshin logotiplar yasaw uchun comandalarni yozing
tach1 va text
tach2 va text
tach3 va text
tach4 va text
tach5 va text
tach6 va text
tach7 va text
tach8 va text
tach9 vatext
tachX va text",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>' 💫Orqaga qaytish', 'callback_data' => "Yangilogo"]],
]
]),
]);
}

if($data=="bestLogo"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "Bayram logotiplar yasaw uchun comandalarni yozing
rok va text
idea va text
cars2 va text
cars1 va text
moto va text
game1 va text
game2 va text
st1 va text
st2 va text
para va text
btf va text",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>' 💫Orqaga qaytish', 'callback_data' => "Yangilogo"]],
]
]),
]);
}

if($data=="Quyoshhs"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "Crazy logotiplar yasaw uchun comandalarni yozing
crazy1 va text
crazy2 va text
crazy3 va text
crazy4 va text
crazy5 va text
crazy6 va text
crazy7 va text
crazy8 va text
crazy9 vatext
crazyX va text",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>' 💫Orqaga qaytish', 'callback_data' => "Yangilogo"]],
]
]),
]);
}

if($data=="ErkakAyol"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "Bayramlar  logolar  yasaw uchun comandalarni yozing
girl1 va text
8martch va text
girl2 va text
girl3 va text
girl4 va text 
men1 va text
men2 va text",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>' 💫Orqaga qaytish', 'callback_data' => "Yangilogo"]],
]
]),
]);
}

if($data=="mysos"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "Musics logotiplar yasaw uchun comandalarni yozing
msc1 va text
msc2 va text
msc3 va text
msc4 va text
msc5 va text
msc6 va text
msc7 va text
msc8 va text
msc9 va text
mscX va text",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>' 💫Orqaga qaytish', 'callback_data' => "Yangilogo"]],
]
]),
]);
}

if($data=="superl"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "Sport logotiplar yasaw uchun comandalarni yozing
sport1 va text
sport2 va text
sport3 va text
sport4 va text
sport5 va text
sport6 va text
sport7 va text
sport8 va text
sport9 vatext
sportX va text",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>' 💫Orqaga qaytish', 'callback_data' => "Yangilogo"]],
]
]),
]);
}

if($data=="QcKod"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "Siz ozingiz QR code yasawingiz mumkin
QR va text",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>' 💫Orqaga qaytish', 'callback_data' => "Yangilogo"]],
]
]),
]);
}

if($data=="reklaaammaa"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
        'text'=>"Bot admini va reklama bo'yicha: [#excellend_boy](https://t.me/excellend_boy)
Yangiliklar: [koronavirus info](https://t.me/wordpress_uzb)
Telefon: +998995096968
 Ish Vaqti: 8:00 - 23:00
Bot yasattirish uchun [#excellend_boy](https://t.me/excellend_boy) *bilan narxlarni kelishib oling*",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
[['text'=>'🎩Admin','url'=>'https://t.me/excellend_boy']],
    [['text'=>'📲Spamlar Uchun','url'=>'https://t.me/spical_robot']],
        [['text'=>' 💫Orqaga qaytish','callback_data'=>'qiziqarlik']]
]
]),
]);
}

if($data=="adminnn"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
        'text'=>"📝*Siz admin bilan tanishishingiz mumkun*👇",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
[['text'=>'🎓Admin','url'=>'https://t.me/excellend_boy'],['text'=>'💻Spamlar Uchun','url'=>'https://t.me/Musohonbot']],
[['text'=>' 💫Orqaga qaytish','callback_data'=>'qiziqarlik']]
]
]),
]);
}

   $kun1 = date('z ',strtotime('2 hour')); 
$a = 364;
$c2 = $a-$kun1;
$d = date('L ',strtotime('2 hour'));
$b = $c2+$d;
$f = $b+81;
$e = $b+240;
$kun2 = date('H ',strtotime('2 hour')); 
$a2 = 23;
$b2 = $a2-$kun2;
$kun3 = date('i ',strtotime('2 hour')); 
$a3 = 58;
$b3 = $a3-$kun3;
$kun4 = date('s ',strtotime('2 hour')); 
$a4 = 60;
$b4 = $a4-$kun4;

if($data == 'new'){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"❄Yangi yilga: $b kun, $b2 soat, $b3 minut, $b4 sekund qoldi!",
'show_alert'=>true
]);
    }
    
    $kun1 = date('z ',strtotime('2 hour')); 
$a = 364;
$c2 = $a-$kun1;
$d = date('L ',strtotime('2 hour'));
$b = $c2+$d;
$f = $b+81;
$e = $b+240;
$kun2 = date('H ',strtotime('2 hour')); 
$a2 = 23;
$b2 = $a2-$kun2;
$kun3 = date('i ',strtotime('2 hour')); 
$a3 = 58;
$b3 = $a3-$kun3;
$kun4 = date('s ',strtotime('2 hour')); 
$a4 = 60;
$b4 = $a4-$kun4;
    
    if($text1 == '/new_year'){
bot('sendMessage',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"❄Yangi yilga: $b kun, $b2 soat, $b3 minut, $b4 sekund qoldi!",
'show_alert'=>true
]);
    }

if($data=="fon"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
        'text'=>"<b>🌐Telegram fonlar uzingizga yoqqanini tanlang.</b>",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
 [['text'=>'🌅Telegram 1fon','url'=>'https://t.me/bg/sp-xMi7A-VEBAAAABRn6rGsUKFs'],['text'=>'🌅Telegram 2fon','url'=>'https://t.me/bg/CiwwsoTP-VEBAAAAmDYEizr71BQ']], 
   [['text'=>'🌅Telegram 3fon','url'=>'https://t.me/bg/MzLRSHubAVIBAAAAqKgYQTObnhw'],['text'=>'🌅Telegram 4fon','url'=>'https://t.me/bg/Br6nNA9WAVIBAAAAe6AHvL7eOMM']], 
     [['text'=>'🌅Telegram 5fon','url'=>'https://t.me/bg/MiE64ER4AFIBAAAAHQZRZyDCfu0'],['text'=>'🌅Telegram 6fon','url'=>'https://t.me/bg/CiwwsoTP-VEBAAAAmDYEizr71BQ']],
      [['text'=>'🌅Telegram 7fon','url'=>'https://t.me/bg/7wznfgBk-VEBAAAAncxYg0vokZY'],['text'=>'🌅Telegram 8fon','url'=>'https://t.me/bg/EhCMFgys-FEBAAAA04qJyrs1G6M']], 
         [['text'=>'🌅Telegram 9fon','url'=>'https://t.me/bg/7wznfgBk-VEBAAAAncxYg0vokZY'],['text'=>'🌅Telegram 10fon','url'=>'https://t.me/bg/7wznfgBk-VEBAAAAncxYg0vokZY']], 
         [['text'=>'🌅Telegram 11fon','url'=>'https://t.me/bg/FJIYygt_iVIBAAAA8tzV8Ju0QvM'],['text'=>'🌅Telegram 12fon','url'=>'https://t.me/bg/Qe9IiLLfiVIBAAAAn_BDUKSYaCs']],
       [['text'=>' 💫Orqaga qaytish','callback_data'=>'qiziqarlik']]
]
]),
]);
}

if($data=="pulishlash"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
        'text'=>"*Siz endi telegramni ozida turib kunlik xarajatingizni chiqarishingiz mumkin pastdagi bolimni tanlang*",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
[['text'=>'🤑Kunlik 5000 som','url'=>'https://t.me/Toptgmoneybot']],
   [['text'=>'💸Kunlik 7000 som','url'=>'https://t.me/teleprofiitbot']],
      [['text'=>'💵Kunlik 10000 som','url'=>'https://t.me/TGEARN_BOT']],
         [['text'=>'💶Kunlik 20000 som','url'=>'https://t.me/Nirocash_bot']],    
            [['text'=>' 💫Orqaga qaytish','callback_data'=>'back']],
]
]),
]);
}

if($data=="boootlar"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
        'text'=>"⬇️*Bular Bizning Botlar Tanishib Chiqishingiz Mumkin*",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
[['text'=>'🛎Konstuktor bot','url'=>'https:/t.me/konstruktorbot']],
     [['text'=>'🎵Muzika Qidiruv','url'=>'https://t.me/vkmusic_bot']],
         [['text'=>'admin lich spamlar uchun','url'=>'https://t.me/spical_robot']],
              [['text'=>'Like Share bot','url'=>'https://t.me/LikeUzShare_Robot']],
                   [['text'=>' 💫Orqaga qaytish','callback_data'=>'qiziqarlik']]
]
]),
]);
}

if($data=="tillar"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
   'message_id'=>$message_id2,
       'text'=>"🇺🇿 **Bu bo'lim orqali telegramingiz tilini qulay oson o'zgartira olasiz!
⬇️ Shunchaki o'rnatmoqchi bo'lgan tilingizni tanlang:**

[🇸🇱O'zbek](tg://setlanguage?lang=uzbekcyr)

[🇷🇺 Русский](tg://setlanguage?lang=ru)

[🇵🇷 English](tg://setlanguage?lang=en)",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
                   [['text'=>' 💫Orqaga qaytish','callback_data'=>'back']],
]
]),
]);
}

if($data=="sanaa"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
   'message_id'=>$message_id2,
       'text'=>"*Hozir ⌚Soat:* $soat",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
                   [['text'=>' 💫Orqaga qaytish','callback_data'=>'qiziqarlik']],
]
]),
]);
}

if($data=="Namoz"){
$nv = file_get_contents("http://islom.uz/");
$ex = explode("\n",$nv);
$a = trim($ex[393]);
$tong = str_replace("<div id='tc1' class='p_clock '><b>","",$a);
$tong = str_replace("<div id='tc1' class='p_clock c_active'><b>","",$tong);
$b = trim($ex[415]);
$asr = str_replace("<div id='tc4' class='p_clock '><b>","",$b);
$asr = str_replace("<div id='tc4' class='p_clock c_active'><b>","",$asr);
$d = trim($ex[422]);
$shom = str_replace("<div id='tc5' class='p_clock '><b>","",$d);
$shom = str_replace("<div id='tc5' class='p_clock c_active'><b>","",$shom);
$e = trim($ex[429]);
$xufton = str_replace("<div id='tc6' class='p_clock c_active'><b>","",$e);
$xufton = str_replace("<div id='tc6' class='p_clock '><b>","",$xufton);
$f = trim($ex[401]);
$quyosh = str_replace("<div id='tc2' class='p_clock '><b>","",$f);
$quyosh = str_replace("<div id='tc2' class='p_clock c_active'><b>","",$quyosh);
$g = trim($ex[408]);
$peshin = str_replace("<div id='tc3' class='p_clock '><b>","",$g);
$peshin = str_replace("<div id='tc3' class='p_clock c_active'><b>","",$peshin);
$tong = str_replace("</b></div>","",$tong);
$quyosh = str_replace("</b></div>","",$quyosh);
$asr = str_replace("</b></div>","",$asr);
$peshin = str_replace("</b></div>","",$peshin);
$shom = str_replace("</b></div>","",$shom);
$xufton = str_replace("</b></div>","",$xufton);
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
   'message_id'=>$message_id2,
       'text'=>"*🕌Assalamu alaykum va rahmatullohi va barakatuh
Toshkent vaqti bilan Namoz vaqtlari*
 Tong:         $tong
Quyosh:     $quyosh
Peshin:       $peshin
Asr:             $asr
Shom:        $shom
Xufton:      $xufton
*Bugun: $bugun Soat: $soat *",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
                   [['text'=>' 💫Orqaga qaytish','callback_data'=>'qiziqarlik']],
]
]),
]);
}

if(stristr($text1,"ض") or stristr($text1, 'ص') or stristr($text1, 'ث') or stristr($text1, 'ق') or stristr($text1, 'ف') or stristr($text1, 'غ') or stristr($text1, 'ع') or stristr($text1, 'ه') or stristr($text1, 'خ') or stristr($text1, 'ح') or stristr($text1, 'ج') or stristr($text1, 'ش') or stristr($text1, 'س') or stristr($text1, 'ي') or stristr($text1, 'ب') or stristr($text1, 'ل') or stristr($text1, 'ا') or stristr($text1, 'ت') or stristr($text1, 'ن') or stristr($text1, 'م') or stristr($text1, 'ك') or stristr($text1, 'ط') or stristr($text1, 'ذ') or stristr($text1, 'ء') or stristr($text1, 'ؤ') or stristr($text1, 'ر') or stristr($text1, 'ى') or stristr($text1, 'ئ') or stristr($text1, 'ة') or stristr($text1, 'و') or stristr($text1, 'ز') or stristr($text1, 'ظ') or stristr($text1, 'د') or stristr($text1, 'أ') or stristr($text1, 'إ') or stristr($text1, 'آ')){
bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
      ]);
bot('restrictChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$user_id,
        'until_date'=>strtotime("+ 180 minutes "),
      ]);
   bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"<a href='tg://user?id=$user_id'>$ufname</a> Habarida Arab Harflari Qatnashgani Uchun MUTE Qilindi",
        'parse_mode'=>'html',
      ]);
  }



$us = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
$count = $us->result;
$sana = date('d-M Y',strtotime('+0 hour'));
$soat = date('H:i:s', strtotime('+0 hour'));
$login0 = $message->chat->username;
$kun3 = date('N',strtotime('+0 hour')); 
$hafta="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma5 6Shanba6 7Yakshanba7"; 
$ex=explode("$kun3",$hafta); 
$hafta1="$ex[1]"; 
$kun1 = date('z ',strtotime('+0 hour')); 
$a = 153;
$c2 = $a-$kun1;
$d = date('L ',strtotime('+0 hour'));
$b = $c2+$d;
$f = $b+81;
$e = $b+240;
$kun2 = date('H ',strtotime('+0 hour')); 
$a2 = 23;
$b2 = $a2-$kun2;
$kun3 = date('i ',strtotime('+0 hour')); 
$a3 = 59;
$b3 = $a3-$kun3;
$kun4 = date('s ',strtotime('+0 hour')); 
$a4 = 60;
$b4 = $a4-$kun4;

if(true){
bot('setChatDescription',[
'chat_id'=>$chat_id,
'description'=>"👋 Guruhimizga xush kelibsiz!
😊Kuningiz xayrli va Barokatli o'tsin!
📆Bugun: $sana-yil
⏰Soat: $soat
📅Hafta kuni: $hafta1
🛡Guruhimiz: @$login0
👥Guruh a'zolari: $count
",
]);
}

if($text1 == "/my"){
    sleep("0.25");
    $info = $MadelineProto->get_full_info($userID);
    $inputMediaUploadedPhoto = ['_' => 'inputMediaUploadedPhoto', 'file' => "$userID.jpg"];
        $MadelineProto->download_to_file($info["full"]["profile_photo"], "$userID.jpg");
$chat = $MadelineProto->get_pwr_chat($chatID);
if($chat["type"] == "user"){
$ms = $MadelineProto->get_info($userID);
  $ism = $ms['User']['first_name'];
  @$fm = $ms['User']['last_name'];
  if($fm == null){
  $fm = "🚫kiritilmagan";
  }
  @$use = $ms['User']['username'];
@$user = "@$use";
if($use == null){
  $user = "🚫kiritilmagan";
  }
  @$bio = $MadelineProto->get_pwr_chat($userID)["about"];
if($bio == null){
  $bio = "🚫kiritilmagan";
  }
$cp = "🔷️<b>Profil haqida malumot.

🔸️Ism:</b> $ism
🔹️<b>Familya:</b> $fm
🔸️<b>Bio:</b> <code>$bio</code>
🔹️🆔️<b>raqami:</b> <code>$userID</code>
🔸️<b>Username:</b> $user";
}
if($chat["type"] == "supergroup"){
$ms = $MadelineProto->get_info($userID);
  $ism = $ms['User']['first_name'];
  @$fm = $ms['User']['last_name'];
  if($fm == null){
  $fm = "🚫kiritilmagan";
  }
  @$use = $ms['User']['username'];
@$user = "@$use";
if($use == null){
  $user = "🚫kiritilmagan";
  }
  @$bio = $MadelineProto->get_pwr_chat($userID)["about"];
if($bio == null){
  $bio = "🚫kiritilmagan";
  }
$title = $chat["title"];
$son = $chat["participants_count"];
@$info = $chat["about"];
if($info == null){
  $info = "🚫kiritilmagan";
  }
@$chuse = $chat["username"];
@$chuser = "@$chuse";
if($chuse == null){
  $chuser = "🚫kiritilmagan";
  }
$cp = "👤<b>Profil haqida malumot.

🔸️Ism:</b> $ism
🔹️<b>Familya:</b> $fm
🔸️<b>Bio:</b> <code>$bio</code>
🔹️🆔️<b>raqami:</b> <code>$userID</code>
🔸️<b>Username:</b> $user

👥<b>Gruppa haqida malumot.

🔹️Nomi:</b> $title
🔸️<b>Azolar soni:</b> $son ta
🔹️<b>Info:</b> <code>$info</code>
🔸️ 🆔️<b>raqami:</b> <code>$chatID</code>
🔹️ <b>Username:</b> $chuser";
}
sleep("0.25");
        $MadelineProto->messages->sendMedia([
        'peer' => $chatID,
        'media' => $inputMediaUploadedPhoto,
        'message' => $cp,
        'parse_mode' => 'html',
        'reply_to_msg_id' => $update['update']['message']['id'],
        ]);sleep("0.25");
unlink("$userID.jpg");
}

if((stripos($mtext,"1001")!==false) and $fadmin==$admin){
      $lx=explode("\n",$mtext);
      $idsi = $lx[0];
  $lin  = bot('exportchatinvitelink',[
       'chat_id'=>"-$idsi",
       ]);
  $link = $lin->result;
   bot('sendMessage',[
       'chat_id'=>$admin,
       'text'=>"$link",
     ]);
}

if($text1 == "/panel" or $text1 == "/panel@uzbek_tgrobot"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
$baza = json_decode(file_get_contents("sozlama/$chat_id"),true);
$salom = $baza["salom"];
if($salom == "false"){
$salom = "☑️";
}else{
$salom = "✅";
}
$link = $baza["link"];
if($link == "false"){
$link = "☑️";
}else{
$link = "✅";
}
$chats = $baza["chats"];
if($chats == "false"){
$chats = "☑️";
}else{
$chats = "✅";
}
$media = $baza["media"];
if($media == "false"){
$media = "☑️";
}else{
$media = "✅";
}

$audio = $baza["audio"];
if($audio == "false"){
$audio = "☑️";
}else{
$audio = "✅";
}

$kirish = $baza["kirish"];
if($kirish == "false"){
$kirish = "☑️";
}else{
$kirish = "✅";
}

file_put_contents("sozlama/$fadmin.lch","$chat_id");
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"<b>Lichkangizga yubordim!</b>",
'parse_mode'=>'html',
]);
bot('sendMessage', [
'chat_id'=>$fadmin,
'text'=>"🍁 <b>'$title' guruhi sozlamalari!</b>\n\n👇 Sozlash uchun kerakli tugmani bosing!",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["callback_data"=>"M()salom","text"=>"🛎 Salomlashish $salom"],],
[["callback_data"=>"M()link","text"=>"🛎 Linklarni O‘chirish $link"],],
[["callback_data"=>"M()chats","text"=>"🛎 Guruhda Suhbatlashish $chats"],],
[["callback_data"=>"M()media","text"=>"🛎 Gif, Sticker O‘chirish $media"],],
[["callback_data"=>"M()audio","text"=>"🛎 Audio o'chirish $audio"],],
[["callback_data"=>"M()kirish","text"=>"🛎 Kirdi Chiqdilarni o'chirish $kirish"],],
]
]),
]);
}
}

$callback = $update->callback_query;
$dataa = $callback->data;
$dataa = explode("()",$dataa);
if($dataa[0] == "M"){
$cid = $callback->from->id;
$mid = $callback->message->message_id;
$imid = $callback->inline_message_id;
$idd = file_get_contents("sozlama/$cid.lch");
$gets = bot("getChat",[
"chat_id"=>"$idd",
]);
$title = $gets->result->title;
$baza = json_decode(file_get_contents("sozlama/$idd"),true);
if($baza["$dataa[1]"] == "true"){
$input = "false";
}else{
$input = "true";
}
$baza["$dataa[1]"] = $input;
file_put_contents("sozlama/$idd",json_encode($baza));
$baza = json_decode(file_get_contents("sozlama/$idd"),true);
$salom = $baza["salom"];
if($salom == "false"){
$salom = "☑️";
}else{
$salom = "✅";
}
$link = $baza["link"];
if($link == "false"){
$link = "☑️";
}else{
$link = "✅";
}
$chats = $baza["chats"];
if($chats == "false"){
$chats = "☑️";
}else{
$chats = "✅";
}
$media = $baza["media"];
if($media == "false"){
$media = "☑️";
}else{
$media = "✅";
}

$audio = $baza["audio"];
if($audio == "false"){
$audio = "☑️";
}else{
$audio = "✅";
}

$kirish = $baza["kirish"];
if($kirish == "false"){
$kirish = "☑️";
}else{
$kirish = "✅";
}

bot('editMessageText', [
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"🍁 <b>'$title' guruhi sozlamalari!</b>\n\n👇 Sozlash uchun kerakli tugmani bosing!",
'parse_mode'=>'html',
'inline_message_id'=>$imid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["callback_data"=>"M()salom","text"=>"🛎 Salomlashish $salom"],],
[["callback_data"=>"M()link","text"=>"🛎 Linklarni O‘chirish $link"],],
[["callback_data"=>"M()chats","text"=>"🛎 Guruhda Suhbatlashish $chats"],],
[["callback_data"=>"M()media","text"=>"🛎 Gif, Sticker O‘chirish $media"],],
[["callback_data"=>"M()audio","text"=>"🛎 Audio o'chirish $audio"],],
[["callback_data"=>"M()kirish","text"=>"🛎 Kirdi Chiqdilarni o'chirish $kirish"],],
]
]),
]);
}
     
if($data=="stat"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "🔷Guruh adminlari ishlatishi mumkin bo‘lgan buyruqlar:

Ro - Guruh a‘zosini “read only” rejimiga tushuradi;
Unro - Guruh a‘zosidan cheklovni oladi;
Kick - Guruh a‘zosini guruhdan chiqaradi;
Warn - Guruh a‘zosiga ogohlantirish beradi va ogohlantirishlar soni 3 taga yetganda jazo sifatida guruhdan chiqaradi;
Unwarn - Guruh a‘zosidagi  ogohlantirishlarni olib tashlaydi;
Ban  - Guruh a‘zosini  guruhdan chiqaradi,boshqa qaytib kira  olmaydi;
Unban - Bandan oladi;
Pin< - Xabarni yuqoriga qistiradi;
Addpm - Guruh a‘zosini guruhga admin qiladi;
Delpm - Adminlikdan oladi.

- Bot guruh yangi a‘zolari bilan salomlashadi.Guruh a‘zosi guruhga reklama ssilkalarini tashlasa yoki haqoratli so‘z yozsa,bot xabarni o‘chirib foydalanuvchiga cheklov beradi.",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>' 💫Orqaga qaytish', 'callback_data' => "back"]],
   [['url' => 'https://telegram.me/uzbek_tgrobot?startgroup=new', 'text' => "➕Guruhga Qo‘shish"]]
]
]),
]);
}

$text1 = $update->message->text;
$chat_id = $update->message->chat->id;
// @UZKOD @KoderNet 
if(isset($text1)){
$calc = urlencode($text1);
$url = file_get_contents("http://api.mathjs.org/v1/?expr=$calc");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$url",
'parse_mode'=>"html",
]);
}

if($text1=="/yangilik" or $text1=="/yangilik$botim"){
  $text = "Bugungi eng so'ngi yangilik bilan tanishing, <b>🆕 YANGILIKLAR 🆕</b> tugmasini bosing!";
  bot('sendmessage',[
    'chat_id'=>$cid,
    'user_id'=>$uid,
    'reply_to_message_id'=>$mid,
    'text'=>$text,
    'parse_mode'=>'html',
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"🆕 YANGILIKLAR 🆕",'callback_data'=>"yangilik"]],
        ]
        ])
  ]);
}
  $url = 'https://daryo.uz/feed/';
  $rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item){
  $line = $item->title;
  break;
}  
if($data=="yangilik"){
  $soat = date('H:i', strtotime('0 hour'));
  bot('answerCallbackQuery',[
    'callback_query_id'=>$cqid,
    'chat_id'=>$ccid, 
    'text'=>"📰 $line

⏰ Soat: $soat",
   'show_alert'=>true,
   'parse_mode'=>'html',
  ]);
}
if($text=="/kurs" or $text=="/kurs$botim"){
  $text = "Bugungi valyuta kursini bilish uchun <b>💱 VALYUTA KURSI 💱</b> tugmasini bosing!";
  bot('sendmessage',[
    'chat_id'=>$cid,
    'user_id'=>$uid,
    'reply_to_message_id'=>$mid,
    'text'=>$text,
    'parse_mode'=>'html',
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"💱 VALYUTA KURSI 💱",'callback_data'=>"kurs"]],
        ]
        ])
  ]);
}
if($data == 'kurs'){
  $soat = date('H:i', strtotime('0 hour'));
  bot('answerCallbackQuery',[
    'callback_query_id'=>$cqid,
    'chat_id'=>$ccid,
    'text'=>kurs()."
⏰ Soat: $soat",
    'show_alert'=>true,
    'parse_mode'=>'html',
]);
}

if(mb_stripos($query,"kurs")!==false){
  bot('answerInlineQuery',[
    'inline_query_id'=>$iid,
    'cache_time'=>1,
    'results'=>json_encode([[
    'type'=>'article',
    'thumb_url'=>"https://realnicarol.000webhostapp.com/botlar/kurs.jpg",
    'id'=>base64_encode(1),
    'title'=>"💱 VALYUTA KURSI 💱",
    'input_message_content'=>[
    'disable_web_page_preview'=>true,
    'parse_mode'=>'html',
    'message_text'=>"Bugungi valyuta kursini bilish uchun <b>💱 VALYUTA KURSI 💱</b> tugmasini bosing!",
  ],
    'reply_markup'=>[
            'inline_keyboard'=>[
 [['text'=>"💱 VALYUTA KURSI ??",'callback_data'=>"kurs"]],
        ]],
        ]
        ])
]);
}
if(mb_stripos($query,"yangilik")!==false){
  bot('answerInlineQuery',[
    'inline_query_id'=>$iid,
    'cache_time'=>1,
    'results'=>json_encode([[
    'type'=>'article',
    'thumb_url'=>"https://realnicarol.000webhostapp.com/botlar/yangilik.jpg",
    'id'=>base64_encode(1),
    'title'=>"🆕 YANGILIKLAR 🆕",
    'input_message_content'=>[
    'disable_web_page_preview'=>true,
    'parse_mode'=>'html',
    'message_text'=>"Bugungi eng so'ngi yangilik bilan tanishing, <b>🆕 YANGILIKLAR 🆕</b> tugmasini bosing!",
  ],
    'reply_markup'=>[
            'inline_keyboard'=>[
 [['text'=>"🆕 YANGILIKLAR 🆕",'callback_data'=>"yangilik"]],
        ]],
        ]
        ])
]);
}

if($text1 == "/buyruqlar" or $text1 == "/buyruqlar@uzbek_tgrobot"){
if($cty == "supergroup" or $cty == "group"){
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
$bs = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"<b>Bot lichkasiga yozing!</b>",
'parse_mode' => 'html'
]);
  bot('deleteMessage', [
  'chat_id' => $chat_id,
  'message_id' => $mesid,
  ]);
  $bss = $bs->result->message_id;
  bot('deleteMessage',[
 'chat_id'=> $chat_id,
 'message_id'=>$bss,
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "👮<code>/ro</code>  <b>guruh a'zosini (RED ONLAY)  rejimiga tushuradi.</b>
    
👮<code>/unro</code>  <b>guruh a'zosidan ogohlantirishni oladi.</b>

👮<code>/warn</code>  <b>guruh a'zosiga ogohlantirish beradi va ogohlantirish 3taga yetganda guruppadan chiqaradi.</b>

👮<code>/unwarn</code>  <b>guruh aʼzosidan ogohlantirishni olib tashlaydi.</b>

👮<code>/ban</code>  <b>guruh a'zosini guruhdan chiqarib yuboradi va kira olmaydigon qilib qoyadi.</b>

👮<code>/unban</code>  <b>bandan oladi.</b>

👮<code>/pin</code>  <b>xabarni yuqoriga qistiradi.</b>

👮<code>/adminber</code> guruh aʼzosini guruhga admin qiladi.

👮<code>/adminol<code> <b>adminlikdan oladi.</b>

👮<code>/guruh</code> <b>guruh haqida ma'limot.</b>

👮<code>/del</code> <b>Sizga yoqmagan so'zni oʻchirish</b>

<b>👮Bot linklar kirdi chiqdilar va reklamalarni uchiradi.
⚒Va haqoratlagan odamlarni guruhda ogohlantirish beradi.</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'📰Foydali buyuruqlar', 'callback_data' => "ʼfoydalibuyi"]],
  [['text'=>' 💫Orqaga qaytish', 'callback_data' => "back"]],
]
]),
]);
}
}

  
if($text1 == "/adminlist"){
      bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"👮Creator @excellend_boy
👨‍✈️Admin @excellend_boy

🛎Kanalimiz @wordpress_uzb va @afexuz",
]);
}

    if($text1 == "/admin"){
      bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"🔸Pastdagi tugmani bosing",
        'reply_markup'=>json_encode([   
        'inline_keyboard'=>[   
            [['text'=>'Shu yerni bosing', 'callback_data' => "admin"]]
]   
]),
]);
}

if($message->forward_from){
  bot('deleteMessage',[
              'chat_id'=>$chat_id,
           'message_id'=>$message->message_id,
]);
}

if(mb_stripos($text1,"https://")!==false){ bot('deleteMessage',[ 'chat_id'=>$cid, 'message_id'=>$mid, 'text'=>"Xabaringiz o‘chirildi🛡",
]);
}

if(mb_stripos($text1,"http://")!==false){ bot('deleteMessage',[ 'chat_id'=>$cid, 'message_id'=>$mid, 'text'=>"Xabaringiz o‘chirildi🛡",
]);
}

if(mb_stripos($text1,"www")!==false){ bot('deleteMessage',[ 'chat_id'=>$cid, 'message_id'=>$mid, 'text'=>"Xabaringiz o‘chirildi🛡",
]);
}

if(mb_stripos($text1,"@")!==false){ bot('deleteMessage',[ 'chat_id'=>$cid, 'message_id'=>$mid, 'text'=>"Xabaringiz o‘chirildi🛡",
]);
}

if(mb_stripos($text1,"#")!==false){ bot('deleteMessage',[ 'chat_id'=>$cid, 'message_id'=>$mid, 'text'=>"Xabaringiz o‘chirildi🛡",
]);
}

if(mb_stripos($text1,"t.me")!==false){ bot('deleteMessage',[ 'chat_id'=>$cid, 'message_id'=>$mid, 'text'=>"Xabaringiz o‘chirildi🛡",
]);
}

if(mb_stripos($text1,"telegram.me")!==false){ bot('deleteMessage',[ 'chat_id'=>$message->chat->id, 'text'=>"Xabaringiz o‘chirildi🛡",
]);
}

if(mb_stripos($text1,"Http://")!==false){ bot('deleteMessage',[ 'chat_id'=>$cid, 'message_id'=>$mid, 'text1'=>"Xabaringiz o‘chirildi🛡",
]);
}

if(mb_stripos($text1,"Https://")!==false){ bot('deleteMessage',[ 'chat_id'=>$cid, 'message_id'=>$mid, 'text'=>"Xabaringiz o‘chirildi🛡",
]);
}

if(mb_stripos($text1,"#")!==false){ bot('deleteMessage',[ 'chat_id'=>$cid, 'message_id'=>$mid, 'text'=>"Xabaringiz o‘chirildi🛡",
]);
}
if(mb_stripos($text1,"Www.")!==false){ bot('deleteMessage',[ 'chat_id'=>$cid, 'message_id'=>$mid, 'text1'=>"Xabaringiz o‘chirildi🛡",
]);
}

if(mb_stripos($text1,".com")!==false){ bot('deleteMessage',[ 'chat_id'=>$cid, 'message_id'=>$mid, 'text1'=>"Xabaringiz o‘chirildi🛡",
]);
}

    if($data == "admin"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "🔷Bot admini @excellend_boy agar sizga ham bot kerak bo'lsa adminga murojat qiling",
       'show_alert'=>true
        ]);
    }
    
    
        if($data == "Yangiliklar"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "O‘zbekiston bosh konsulxonasi Permdagi YTHda jarohatlanganlarga yordam bergan Danil Yo‘ldoshevga tashakkurnoma berdi.",
       'show_alert'=>true
        ]);
    }
    
if((stripos($text1,"latifa")!==false) or (stripos($text1,"латифа")!==false)){
    $latif = file_get_contents("latifa.txt");
  $latifa = explode("✅",$latif);
  $soz = $latifa[rand(0,count($latifa)-1)];
  $a=json_encode(bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$soz,
   ]));
}



if(mb_stripos($text1,"sport1") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/4b4b23e4-f3d3-42b1-9c5d-615ac62ef5ac/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Sport logotip by @uzbek_tgrobot
You write $ex[1]",
]);
} 
if(mb_stripos($text1,"sport2") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/08e30364-b0cf-48df-80f2-964bfe5547e4/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Sport logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"sport3") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/2aeefb25-2d78-4058-8cc7-74e2b4083e50/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Sport logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"sport4") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/fc3c8bc5-a48c-47f0-b034-b258b3abce68/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Sport logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"sport5") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/79ff2b19-667e-43c4-9164-332330dc6f1b/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Sport logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"sport6") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/e33c12b4-1128-4129-b31f-2c31cb0878c7/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Sport logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"st1") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/d1d5e766-8cd8-424f-aa4d-fbc07908a8d2/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Best logotip by @uzbek_tgrobot
You write $ex[1]",
]);
} 
if(mb_stripos($text1,"st2") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/99e9e246-fca4-4fbb-a7b2-a2ff497d85b3/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Best logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"QR") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"http://qr-code.ir/api/qr-code?s=5&e=M&t=P&d=$ex[1] ",
'caption'=>"QR CODE by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"para") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/fa5b9460-2773-4c4d-a3d6-1f733bc42dba/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Best logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"test4") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"http://away-dev.000webhostapp.com/api/api.php?type=356&text1=$ex[1]&text2=dhurgham ",
'caption'=>"Epic logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"sport7") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/bd00f834-d5f9-475a-ad48-0c6126f077c6/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Sport logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"sport8") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/1b1869b4-e487-474b-b0e3-7f3bf8194194/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Sport logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"sport9") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/48125ab7-a743-4f54-8da8-b2c6230e710f/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Sport logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}

if(mb_stripos($text1,"crazy1") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/2a23b1f8-1793-46ee-993b-d6c83b8df0dd/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"crazy2") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/87ea7fe8-4e10-4819-8814-60d63ce8f9b8/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"crazy3") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/f8d2306a-8987-40a0-9de8-d448a6f2b048/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"crazy4") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/5e47943d-4857-474d-b7ca-009652b9e52d/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"crazy5") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/55829798-84dd-428f-871f-0a83955e2d49/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"crazy6") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ef89e50c-2d4e-42da-a6bb-90af099b66fa/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"crazy7") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ab03a446-9f79-4278-aebf-141d6baa5e79/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"crazy8") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/bf0b8391-41e4-4f60-ace9-a18a114306e1/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"crazy9") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/cddaf4c3-5ab9-4957-9da0-437cd56d7a6c/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"crazyX") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/297c288d-4c21-4f1d-958b-e617feaef9be/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"msc1") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/2368b276-9678-4611-8d9f-232f858ffc5a/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"msc2") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/95e81a44-d412-49cf-a492-bf9530c0bcf2/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"msc3") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ea44541f-995f-4525-89d4-17739b855a2e/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"msc4") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/1bfbead8-fd97-43f7-8e10-020578e6c349/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"msc5") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/85c09ff0-40bb-40c3-8c0c-802cc19a2297/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"msc6") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/2a97a62b-9851-42c0-96c8-8afe40f57e0a/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"msc7") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/b43f1777-660c-482c-bacd-2e1642baf003/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"msc8") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/11a70f98-24bf-41ff-8470-b9b096af31dd/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"msc9") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ae3a80f0-5fd7-4fe6-bde8-a1ae017e33c1/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"mscX") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/f05edb5b-c016-4d31-955f-73a3e082e1c2/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"epic1") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/8d70e3bd-71b3-46e0-9dc8-7dfe3389e7e5/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"epic2") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/72b97da3-2e87-4e4b-889d-04c8711e805d/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"epic3") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/0b55f069-103e-459b-bd33-6dbdfc7ca811/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"epic4") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/93857f38-1788-47e3-9560-0220b88ac94e/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"epic5") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/b1c634dd-aacc-4190-986c-7ace14ed3ec6/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"epic6") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/e18e8c65-b2aa-49e6-8a07-ef2464ff25ae/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"epic7") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/e0e7aaf6-f3e6-457f-99ed-dc3487e29912/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"epic8") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/23eaaf26-a0f8-41f4-9ef5-468dc8b5bde3/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"epic9") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/45218131-8405-40a4-bb04-24d1710eff0d/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"epicX") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/b6d2d7ef-e4cb-44cd-9979-12068b09ec47/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"rok") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/4a2ea46d-5501-48a5-9d8d-8110f9420b85/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Best logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"sp") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/2de6d448-afc7-425a-b51f-903fb0bc9340/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"sport logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"game1") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/b54cb74a-f0c5-4071-934b-019257430e4b/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"game logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"game2") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/a9a8ca01-e658-4339-917d-0010ddeaa0b6/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"game logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"men1") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/163f89d3-60a5-40ac-9325-0299844d5d67/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"men logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"men2") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/983dc163-be5a-406d-848e-9cc4e2b60109/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"men logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"girl1") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"http://away-dev.000webhostapp.com/api/api.php?type=372&text1=$ex[1]&text2=dhurgham ",
'caption'=>"girl logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"girl2") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/8d3db074-52eb-4888-8a35-f683ec1cef0f/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"girl logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"girl3") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/9988e891-579c-47f5-bfaf-959c3a2d8e25/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"girl logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"girl4") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/dff12af1-28d3-4645-aba0-b209b6ee8ed7/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"girl logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"idea") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/2085a114-720f-4f81-bfeb-778ea5ac2052/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Fest logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"cars1") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/1d774b95-f479-4380-a92b-51fe4c821129/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Fest logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"8martch") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/fbff98fe-0132-4346-aa2b-af4488ebb4fd/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Fest logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"cars2") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/b3236a76-dc4b-4605-a7a3-6649fb2da488/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Best logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"moto") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/45c72bf1-5935-4eee-a65e-e8dd850e37b8/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"moto logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"btf") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/a3defcce-fb2e-4a44-b654-4e3246141f94/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Best logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"tach1") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/707a772e-87ac-4225-be00-5715df731443/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"tach2") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/be26c778-4cbd-4a14-b8b1-4b8b1fe07952/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"tach3") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/4e78e518-91c8-40ea-bbc9-eba385c6d796/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"tach4") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/28ebcaf7-2371-43e9-8e1a-da980a834b1a/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"tach5") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/0a676c20-7b98-4bea-8652-dc0ad06f6c54/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"tach6") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/0d556a87-9ade-426a-b60a-e7575aa3edeb/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"tach7") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/e05bef29-964a-4a57-b6c2-128266b9c2c3/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"tach8") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/5223e7c6-3cc7-41b2-bb43-9ca4fc8b2d99/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"tach9") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/7d1a812d-9e8b-4451-a38c-d384ab1ed98e/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"tachX") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/127564ac-8114-43ce-9686-2f6befb8b14a/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"dj1") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/9bd9f7b0-971d-460b-9f35-b30091cc32f6/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"dj2") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/dde89710-82d1-4d2a-8752-42bebc9b9a05/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"dj3") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/7229c0d6-cc4f-4e47-87b2-3b01285f502d/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"dj4") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ad38bcc8-b76b-483c-88cb-41af5218d9ac/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"dj5") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/3f607d24-e269-4fd0-8ad1-34d315a51558/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"dj6") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/5275891b-6017-49a1-86cf-def79699e926/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"dj7") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/27a7162f-f00f-4d64-82aa-d77561298f14/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"dj8") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ce7f825f-150c-46a0-842a-7235bc0442af/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"dj9") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/7c8b9cd6-4636-4230-bd82-d083b414c141/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"djX") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ea509e1b-89eb-457b-810b-2f3d42cc6841/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @uzbek_tgrobot
You write $ex[1]",
]);
}

       $EN =   explode("/nick", $text1);
   if($EN[1]){
   $EN = str_replace('q', '•🇶', $EN);
   $EN = str_replace('w', '•🇼', $EN);
   $EN = str_replace('e', '•🇪', $EN);
   $EN = str_replace('r', '•🇷', $EN);
   $EN = str_replace('t', '•🇹', $EN);
   $EN = str_replace('y', '•🇾', $EN);
   $EN = str_replace('u', '•🇻', $EN);
   $EN = str_replace('i', '•🇮', $EN);
   $EN = str_replace('o', '•🇴', $EN);
   $EN = str_replace('p', '•🇵', $EN);
   $EN = str_replace('a', '•🇦', $EN);
   $EN = str_replace('s', '•🇸', $EN);
   $EN = str_replace('d', '•🇩', $EN);
   $EN = str_replace('f', '•🇫', $EN);
   $EN = str_replace('g', '•🇬', $EN);
   $EN = str_replace('h', '•🇭', $EN);
   $EN = str_replace('j', '•🇯', $EN);
   $EN = str_replace('k', '•🇰', $EN);
   $EN = str_replace('l', '•🇱', $EN);
   $EN = str_replace('z', '•🇿', $EN);
   $EN = str_replace('x', '•🇽', $EN);
   $EN = str_replace('c', '•🇨', $EN);
   $EN = str_replace('v', '•🇺', $EN);
   $EN = str_replace('b', '•🇧', $EN);
   $EN = str_replace('n', '•🇳', $EN);
   $EN = str_replace('m', '•🇲', $EN);
   bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$EN[1],
 
    ]);
    }
    $EN0 =   explode("/nick", $text1);
    if($EN0[1]){
	 $EN0 = str_replace('q', 'Ⴓ' , $EN0);
  	 $EN0 = str_replace('w', 'ᗯ' , $EN0);
	 $EN0 = str_replace('e', 'ᕮ' , $EN0);
  	 $EN0 = str_replace('r', 'ᖇ' , $EN0);
	 $EN0 = str_replace('t', 'ͳ' , $EN0);
  	 $EN0 = str_replace('y', 'ϒ' , $EN0);
	 $EN0 = str_replace('u', 'ᘮ' , $EN0);
  	 $EN0 = str_replace('i', 'ᓰ' , $EN0);
	 $EN0 = str_replace('o', '〇' , $EN0);
  	 $EN0 = str_replace('p', 'ᖘ' , $EN0);
	 $EN0 = str_replace('a', 'ᗩ' , $EN0);
  	 $EN0 = str_replace('s', 'ᔕ' , $EN0);
	 $EN0 = str_replace('d', 'ᗪ' , $EN0);
  	 $EN0 = str_replace('f', 'Բ' , $EN0);
	 $EN0 = str_replace('g', 'ᘐ' , $EN0);
  	 $EN0 = str_replace('h', 'ᕼ' , $EN0);
	 $EN0 = str_replace('j', 'ᒎ' , $EN0);
  	 $EN0 = str_replace('k', 'Ḱ' , $EN0);
	 $EN0 = str_replace('l', 'ᒪ' , $EN0);
  	 $EN0 = str_replace('z', 'Ꙁ' , $EN0);
	 $EN0 = str_replace('x', 'Ꮖ' , $EN0);
  	 $EN0 = str_replace('c', 'ᑕ' , $EN0);
	 $EN0 = str_replace('v', 'ᐯ' , $EN0);
  	 $EN0 = str_replace('b', 'ᙖ' , $EN0);
  	 $EN0 = str_replace('n', 'ᘉ' , $EN0);
	 $EN0 = str_replace('m', 'ᙢ' , $EN0);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$y[1],
 
    ]);
    }
    $EN1 =   explode("/nick", $text1);
    if($EN1[1]){
	 $EN1 = str_replace('q', 'q' , $EN1);
  	 $EN1 = str_replace('w', 'ω' , $EN1);
	 $EN1 = str_replace('e', 'ε' , $EN1);
  	 $EN1 = str_replace('r', 'я' , $EN1);
	 $EN1 = str_replace('t', 'т' , $EN1);
  	 $EN1 = str_replace('y', 'ү' , $EN1);
	 $EN1 = str_replace('u', 'υ' , $EN1);
  	 $EN1 = str_replace('i', 'ι' , $EN1);
	 $EN1 = str_replace('o', 'σ' , $EN1);
  	 $EN1 = str_replace('p', 'ρ' , $EN1);
	 $EN1 = str_replace('a', 'α' , $EN1);
  	 $EN1 = str_replace('s', 's' , $EN1);
	 $EN1 = str_replace('d', '∂' , $EN1);
  	 $EN1 = str_replace('f', 'ғ' , $EN1);
	 $EN1 = str_replace('g', 'g' , $EN1);
  	 $EN1 = str_replace('h', 'н' , $EN1);
	 $EN1 = str_replace('j', 'נ' , $EN1);
  	 $EN1 = str_replace('k', 'к' , $EN1);
	 $EN1 = str_replace('l', 'ℓ' , $EN1);
  	 $EN1 = str_replace('z', 'z' , $EN1);
	 $EN1 = str_replace('x', 'x' , $EN1);
  	 $EN1 = str_replace('c', 'c' , $EN1);
	 $EN1 = str_replace('v', 'v' , $EN1);
  	 $EN1 = str_replace('b', 'в' , $EN1);
  	 $EN1 = str_replace('n', 'η' , $EN1);
	 $EN1 = str_replace('m', 'м' , $EN1);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN1[1],
 
    ]);
    }
    //-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
    $EN2 =   explode("/nick", $text1);
    if($EN2[1]){
	 $EN2 = str_replace('q', 'ᵠ' , $EN2);
  	 $EN2 = str_replace('w', 'ʷ' , $EN2);
	 $EN2 = str_replace('e', 'ᵉ' , $EN2);
  	 $EN2 = str_replace('r', 'ʳ' , $EN2);
	 $EN2 = str_replace('t', 'ᵗ' , $EN2);
  	 $EN2 = str_replace('y', 'ʸ' , $EN2);
	 $EN2 = str_replace('u', 'ᵘ' , $EN2);
  	 $EN2 = str_replace('i', 'ᶤ' , $EN2);
	 $EN2 = str_replace('o', 'ᵒ' , $EN2);
  	 $EN2 = str_replace('p', 'ᵖ' , $EN2);
	 $EN2 = str_replace('a', 'ᵃ' , $EN2);
  	 $EN2 = str_replace('s', 'ˢ' , $EN2);
	 $EN2 = str_replace('d', 'ᵈ' , $EN2);
  	 $EN2 = str_replace('f', 'ᶠ' , $EN2);
	 $EN2 = str_replace('g', 'ᵍ' , $EN2);
  	 $EN2 = str_replace('h', 'ʰ' , $EN2);
	 $EN2 = str_replace('j', 'ʲ' , $EN2);
  	 $EN2 = str_replace('k', 'ᵏ' , $EN2);
	 $EN2 = str_replace('l', 'ˡ' , $EN2);
  	 $EN2 = str_replace('z', 'ᶻ' , $EN2);
	 $EN2 = str_replace('x', 'ˣ' , $EN2);
  	 $EN2 = str_replace('c', 'ᶜ' , $EN2);
	 $EN2 = str_replace('v', 'ᵛ' , $EN2);
  	 $EN2 = str_replace('b', 'ᵇ' , $EN2);
  	 $EN2 = str_replace('n', 'ᶰ' , $EN2);
	 $EN2 = str_replace('m', 'ᵐ' , $EN2);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN2[1],
  
    ]);
    }
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//

$EN3 =   explode("/nick", $text1);
    if($EN3[1]){
	 $EN3 = str_replace('q', 'Θ' , $EN3);
  	 $EN3 = str_replace('w', 'ẁ' , $EN3);
	 $EN3 = str_replace('e', 'ë' , $EN3);
  	 $EN3 = str_replace('r', 'я' , $EN3);
	 $EN3 = str_replace('t', 'ť' , $EN3);
  	 $EN3 = str_replace('y', 'y' , $EN3);
	 $EN3 = str_replace('u', 'ע' , $EN3);
  	 $EN3 = str_replace('i', 'į' , $EN3);
	 $EN3 = str_replace('o', 'ð' , $EN3);
  	 $EN3 = str_replace('p', 'ρ' , $EN3);
	 $EN3 = str_replace('a', 'à' , $EN3);
  	 $EN3 = str_replace('s', 'ś' , $EN3);
	 $EN3 = str_replace('d', 'ď' , $EN3);
  	 $EN3 = str_replace('f', '∫' , $EN3);
	 $EN3 = str_replace('g', 'ĝ' , $EN3);
  	 $EN3 = str_replace('h', 'ŋ' , $EN3);
	 $EN3 = str_replace('j', 'Ј' , $EN3);
  	 $EN3 = str_replace('k', 'қ' , $EN3);
	 $EN3 = str_replace('l', 'Ŀ' , $EN3);
  	 $EN3 = str_replace('z', 'ź' , $EN3);
	 $EN3 = str_replace('x', 'א' , $EN3);
  	 $EN3 = str_replace('c', 'ć' , $EN3);
	 $EN3 = str_replace('v', 'V' , $EN3);
  	 $EN3 = str_replace('b', 'Ђ' , $EN3);
  	 $EN3 = str_replace('n', 'ŋ' , $EN3);
	 $EN3 = str_replace('m', 'm' , $EN3);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN3[1],
  
    ]);
    }
$EN3 =   explode("/nick", $text1);
    if($EN3[1]){
	 $EN3 = str_replace('q', 'Ҩ' , $EN3);
  	 $EN3 = str_replace('w', 'Щ' , $EN3);
	 $EN3 = str_replace('e', 'Є' , $EN3);
  	 $EN3 = str_replace('r', 'R' , $EN3);
	 $EN3 = str_replace('t', 'ƚ' , $EN3);
  	 $EN3 = str_replace('y', '￥' , $EN3);
	 $EN3 = str_replace('u', 'Ц' , $EN3);
  	 $EN3 = str_replace('i', 'Ī' , $EN3);
	 $EN3 = str_replace('o', 'Ø' , $EN3);
  	 $EN3 = str_replace('p', 'P' , $EN3);
	 $EN3 = str_replace('a', 'Â' , $EN3);
  	 $EN3 = str_replace('s', '$' , $EN3);
	 $EN3 = str_replace('d', 'Ð' , $EN3);
  	 $EN3 = str_replace('f', 'Ŧ' , $EN3);
	 $EN3 = str_replace('g', 'Ǥ' , $EN3);
  	 $EN3 = str_replace('h', 'Ħ' , $EN3);
	 $EN3 = str_replace('j', 'ʖ' , $EN3);
  	 $EN3 = str_replace('k', 'Қ' , $EN3);
	 $EN3 = str_replace('l', 'Ŀ' , $EN3);
  	 $EN3 = str_replace('z', 'Ẕ' , $EN3);
	 $EN3 = str_replace('x', 'X' , $EN3);
  	 $EN3 = str_replace('c', 'Ĉ' , $EN3);
	 $EN3 = str_replace('v', 'V' , $EN3);
  	 $EN3 = str_replace('b', 'ß' , $EN3);
  	 $EN3 = str_replace('n', 'И' , $EN3);
	 $EN3 = str_replace('m', 'ⴅ' , $EN3);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN3[1],
 
    ]);
    }
 $EN5 =   explode("/nick", $text1);
    if($EN5[1]){
	 $EN5 = str_replace('q', 'Ҩ' , $EN5);
  	 $EN5 = str_replace('w', 'Ɯ' , $EN5);
	 $EN5 = str_replace('e', 'Ɛ' , $EN5);
  	 $EN5 = str_replace('r', '尺' , $EN5);
	 $EN5 = str_replace('t', 'Ť' , $EN5);
  	 $EN5 = str_replace('y', 'Ϥ' , $EN5);
	 $EN5 = str_replace('u', 'Ц' , $EN5);
  	 $EN5 = str_replace('i', 'ɪ' , $EN5);
	 $EN5 = str_replace('o', 'Ø' , $EN5);
  	 $EN5 = str_replace('p', 'þ' , $EN5);
	 $EN5 = str_replace('a', 'Λ' , $EN5);
  	 $EN5 = str_replace('s', 'ら' , $EN5);
	 $EN5 = str_replace('d', 'Ð' , $EN5);
  	 $EN5 = str_replace('f', 'F' , $EN5);
	 $EN5 = str_replace('g', 'Ɠ' , $EN5);
  	 $EN5 = str_replace('h', 'н' , $EN5);
	 $EN5 = str_replace('j', 'ﾌ' , $EN5);
  	 $EN5 = str_replace('k', 'Қ' , $EN5);
	 $EN5 = str_replace('l', 'Ł' , $EN5);
  	 $EN5 = str_replace('z', 'Ẕ' , $EN5);
	 $EN5 = str_replace('x', 'χ' , $EN5);
  	 $EN5 = str_replace('c', 'ㄈ' , $EN5);
	 $EN5 = str_replace('v', 'Ɣ' , $EN5);
  	 $EN5 = str_replace('b', 'Ϧ' , $EN5);
  	 $EN5 = str_replace('n', 'Л' , $EN5);
	 $EN5 = str_replace('m', '௱' , $EN5);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN5[1],
 
    ]);
    }
   $EN6 =   explode("/nick", $text1);
    if($EN6[1]){
	 $EN6 = str_replace('q', 'Ⴓ' , $EN6);
  	 $EN6 = str_replace('w', 'Ш' , $EN6);
	 $EN6 = str_replace('e', 'Σ' , $EN6);
  	 $EN6 = str_replace('r', 'Γ' , $EN6);
	 $EN6 = str_replace('t', 'Ƭ' , $EN6);
  	 $EN6 = str_replace('y', 'Ψ' , $EN6);
	 $EN6 = str_replace('u', 'Ʊ' , $EN6);
  	 $EN6 = str_replace('i', 'I' , $EN6);
	 $EN6 = str_replace('o', 'Θ' , $EN6);
  	 $EN6 = str_replace('p', 'Ƥ' , $EN6);
	 $EN6 = str_replace('a', 'Δ' , $EN6);
  	 $EN6 = str_replace('s', 'Ѕ' , $EN6);
	 $EN6 = str_replace('d', 'D' , $EN6);
  	 $EN6 = str_replace('f', 'F' , $EN6);
	 $EN6 = str_replace('g', 'G' , $EN6);
  	 $EN6 = str_replace('h', 'H' , $EN6);
	 $EN6 = str_replace('j', 'J' , $EN6);
  	 $EN6 = str_replace('k', 'Ƙ' , $EN6);
	 $EN6 = str_replace('l', 'L' , $EN6);
  	 $EN6 = str_replace('z', 'Z' , $EN6);
	 $EN6 = str_replace('x', 'Ж' , $EN6);
  	 $EN6 = str_replace('c', 'C' , $EN6);
	 $EN6 = str_replace('v', 'Ʋ' , $EN6);
  	 $EN6 = str_replace('b', 'Ɓ' , $EN6);
  	 $EN6 = str_replace('n', '∏' , $EN6);
	 $EN6 = str_replace('m', 'Μ' , $EN6);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN6[1],
   
    ]);
    }
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
$EN7 =   explode("/nick", $text1);
    if($EN7[1]){
	 $EN7 = str_replace('q', 'Q' , $EN7);
  	 $EN7 = str_replace('w', 'Щ' , $EN7);
	 $EN7 = str_replace('e', '乇' , $EN7);
  	 $EN7 = str_replace('r', '尺' , $EN7);
	 $EN7 = str_replace('t', 'ｲ' , $EN7);
  	 $EN7 = str_replace('y', 'ﾘ' , $EN7);
	 $EN7 = str_replace('u', 'Ц' , $EN7);
  	 $EN7 = str_replace('i', 'ﾉ' , $EN7);
	 $EN7 = str_replace('o', 'Ծ' , $EN7);
  	 $EN7 = str_replace('p', 'ｱ' , $EN7);
	 $EN7 = str_replace('a', 'ﾑ' , $EN7);
  	 $EN7 = str_replace('s', '丂' , $EN7);
	 $EN7 = str_replace('d', 'Ð' , $EN7);
  	 $EN7 = str_replace('f', 'ｷ' , $EN7);
	 $EN7 = str_replace('g', 'Ǥ' , $EN7);
  	 $EN7 = str_replace('h', 'ん' , $EN7);
	 $EN7 = str_replace('j', 'ﾌ' , $EN7);
  	 $EN7 = str_replace('k', 'ズ' , $EN7);
	 $EN7 = str_replace('l', 'ﾚ' , $EN7);
  	 $EN7 = str_replace('z', '乙' , $EN7);
	 $EN7 = str_replace('x', 'ﾒ' , $EN7);
  	 $EN7 = str_replace('c', 'ζ' , $EN7);
	 $EN7 = str_replace('v', 'Џ' , $EN7);
  	 $EN7 = str_replace('b', '乃' , $EN7);
  	 $EN7 = str_replace('n', '刀' , $EN7);
	 $EN7 = str_replace('m', 'ᄊ' , $EN7);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN7[1],
  
    ]);
    }
    $EN8 =   explode("/nick", $text1);
    if($EN8[1]){
	 $EN8 = str_replace('q', 'ợ' , $EN8);
  	 $EN8 = str_replace('w', 'ฬ' , $EN8);
	 $EN8 = str_replace('e', 'є' , $EN8);
  	 $EN8 = str_replace('r', 'г' , $EN8);
	 $EN8 = str_replace('t', 't' , $EN8);
  	 $EN8 = str_replace('y', 'ץ' , $EN8);
	 $EN8 = str_replace('u', 'ย' , $EN8);
  	 $EN8 = str_replace('i', 'เ' , $EN8);
	 $EN8 = str_replace('o', '๏' , $EN8);
  	 $EN8 = str_replace('p', 'թ' , $EN8);
	 $EN8 = str_replace('a', 'ค' , $EN8);
  	 $EN8 = str_replace('s', 'ร' , $EN8);
	 $EN8 = str_replace('d', '๔' , $EN8);
  	 $EN8 = str_replace('f', 'Ŧ' , $EN8);
	 $EN8 = str_replace('g', 'ɠ' , $EN8);
  	 $EN8 = str_replace('h', 'ђ' , $EN8);
	 $EN8 = str_replace('j', 'ן' , $EN8);
  	 $EN8 = str_replace('k', 'к' , $EN8);
	 $EN8 = str_replace('l', 'l' , $EN8);
  	 $EN8 = str_replace('z', 'z' , $EN8);
	 $EN8 = str_replace('x', 'א' , $EN8);
  	 $EN8 = str_replace('c', 'ς' , $EN8);
	 $EN8 = str_replace('v', 'ⱴ' , $EN8);
  	 $EN8 = str_replace('b', '๒' , $EN8);
  	 $EN8 = str_replace('n', 'ภ' , $EN8);
	 $EN8 = str_replace('m', '๓' , $EN8);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN8[1],
    ]);
    }
$EN9 =   explode("/nick", $text1);
    if($EN9[1]){
	 $EN9 = str_replace('q', 'ҩ' , $EN9);
  	 $EN9 = str_replace('w', 'ω' , $EN9);
	 $EN9 = str_replace('e', '૯' , $EN9);
  	 $EN9 = str_replace('r', 'Ր' , $EN9);
	 $EN9 = str_replace('t', '੮' , $EN9);
  	 $EN9 = str_replace('y', 'ע' , $EN9);
	 $EN9 = str_replace('u', 'υ' , $EN9);
  	 $EN9 = str_replace('i', 'ɿ' , $EN9);
	 $EN9 = str_replace('o', '૦' , $EN9);
  	 $EN9 = str_replace('p', 'ƿ' , $EN9);
	 $EN9 = str_replace('a', 'ค' , $EN9);
  	 $EN9 = str_replace('s', 'ς' , $EN9);
	 $EN9 = str_replace('d', 'ძ' , $EN9);
  	 $EN9 = str_replace('f', 'Բ' , $EN9);
	 $EN9 = str_replace('g', '૭' , $EN9);
  	 $EN9 = str_replace('h', 'Һ' , $EN9);
	 $EN9 = str_replace('j', 'ʆ' , $EN9);
  	 $EN9 = str_replace('k', 'қ' , $EN9);
	 $EN9 = str_replace('l', 'Ն' , $EN9);
  	 $EN9 = str_replace('z', 'ઽ' , $EN9);
	 $EN9 = str_replace('x', '૪' , $EN9);
  	 $EN9 = str_replace('c', '८' , $EN9);
	 $EN9 = str_replace('v', '౮' , $EN9);
  	 $EN9 = str_replace('b', 'ც' , $EN9);
  	 $EN9 = str_replace('n', 'Ո' , $EN9);
	 $EN9 = str_replace('m', 'ɱ' , $EN9);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN9[1], 
    ]);
    }
 $EN10 =   explode("/nick", $text1);
    if($EN10[1]){
	 $EN10 = str_replace('q', 'Ꝙ' ,$EN10);
  	 $EN10 = str_replace('w', 'Ѡ' ,$EN10);
	 $EN10 = str_replace('e', 'Ɛ' ,$EN10);
  	 $EN10 = str_replace('r', 'Ɽ' ,$EN10);
	 $EN10 = str_replace('t', 'Ͳ' ,$EN10);
  	 $EN10 = str_replace('y', 'Ỿ' ,$EN10);
	 $EN10 = str_replace('u', 'Ʊ' ,$EN10);
  	 $EN10 = str_replace('i', 'ị' ,$EN10);
	 $EN10 = str_replace('o', 'Ỗ' ,$EN10);
  	 $EN10 = str_replace('p', 'Ꝓ' ,$EN10);
	 $EN10 = str_replace('a', 'Λ' ,$EN10);
  	 $EN10 = str_replace('s', 'Ṥ' ,$EN10);
	 $EN10 = str_replace('d', 'δ' ,$EN10);
  	 $EN10 = str_replace('f', 'Բ' ,$EN10);
	 $EN10 = str_replace('g', '₲' ,$EN10);
  	 $EN10 = str_replace('h', 'Ḩ' ,$EN10);
	 $EN10 = str_replace('j', 'Ĵ' ,$EN10);
  	 $EN10 = str_replace('k', 'Ҡ' ,$EN10);
	 $EN10 = str_replace('l', 'Ⱡ' ,$EN10);
  	 $EN10 = str_replace('z', 'Ꙃ' ,$EN10);
	 $EN10 = str_replace('x', 'Ӿ' ,$EN10);
  	 $EN10 = str_replace('c', 'Ƈ' ,$EN10);
	 $EN10 = str_replace('v', 'Ѵ' ,$EN10);
  	 $EN10 = str_replace('b', 'ß' ,$EN10);
  	 $EN10 = str_replace('n', 'ⴂ' ,$EN10);
	 $EN10 = str_replace('m', 'ⴅ' ,$EN10);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN10[1],
    ]);
    }
 $EN11 =   explode("/nick", $text1);
    if($EN11[1]){
	 $EN11 = str_replace('q', 'ǫ' , $EN11);
  	 $EN11 = str_replace('w', 'ᴡ' , $EN11);
	 $EN11 = str_replace('e', 'ᴇ' , $EN11);
  	 $EN11 = str_replace('r', 'ʀ' , $EN11);
	 $EN11 = str_replace('t', 'ᴛ' , $EN11);
  	 $EN11 = str_replace('y', 'ʏ' , $EN11);
	 $EN11 = str_replace('u', 'ᴜ' , $EN11);
  	 $EN11 = str_replace('i', 'ɪ' , $EN11);
	 $EN11 = str_replace('o', 'ᴏ' , $EN11);
  	 $EN11 = str_replace('p', 'ᴘ' , $EN11);
	 $EN11 = str_replace('a', 'ᴀ' , $EN11);
  	 $EN11 = str_replace('s', 'ѕ' , $EN11);
	 $EN11 = str_replace('d', 'ᴅ' , $EN11);
  	 $EN11 = str_replace('f', 'ғ' , $EN11);
	 $EN11 = str_replace('g', 'ɢ' , $EN11);
  	 $EN11 = str_replace('h', 'ʜ' , $EN11);
	 $EN11 = str_replace('j', 'ᴊ' , $EN11);
  	 $EN11 = str_replace('k', 'ᴋ' , $EN11);
	 $EN11 = str_replace('l', 'ʟ' , $EN11);
  	 $EN11 = str_replace('z', 'ᴢ' , $EN11);
	 $EN11 = str_replace('x', 'х' , $EN11);
  	 $EN11 = str_replace('c', 'ᴄ' , $EN11);
	 $EN11 = str_replace('v', 'ᴠ' , $EN11);
  	 $EN11 = str_replace('b', 'ʙ' , $EN11);
  	 $EN11 = str_replace('n', 'ɴ' , $EN11);
	 $EN11 = str_replace('m', 'ᴍ' , $EN11);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN11[1],
     ]);
    }
 //-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//



 $EN12 =   explode("/nick", $text1);
    if($EN12[1]){
	 $EN12 = str_replace('q', 'Ｑ' , $EN12);
  	 $EN12 = str_replace('w', 'Ｗ' , $EN12);
	 $EN12 = str_replace('e', 'Ｅ' , $EN12);
  	 $EN12 = str_replace('r', 'Ｒ' , $EN12);
	 $EN12 = str_replace('t', 'Ｔ' , $EN12);
  	 $EN12 = str_replace('y', 'Ｙ' , $EN12);
	 $EN12 = str_replace('u', 'Ｕ' , $EN12);
  	 $EN12 = str_replace('i', 'Ｉ' , $EN12);
	 $EN12 = str_replace('o', 'Ｏ' , $EN12);
  	 $EN12 = str_replace('p', 'Ｐ' , $EN12);
	 $EN12 = str_replace('a', 'Ａ' , $EN12);
  	 $EN12 = str_replace('s', 'Ｓ' , $EN12);
	 $EN12 = str_replace('d', 'Ｄ' , $EN12);
  	 $EN12 = str_replace('f', 'Բ' , $EN12);
	 $EN12 = str_replace('g', 'Ｇ' , $EN12);
  	 $EN12 = str_replace('h', 'Ｈ' , $EN12);
	 $EN12 = str_replace('j', 'Ｊ' , $EN12);
  	 $EN12 = str_replace('k', 'Ｋ' , $EN12);
	 $EN12 = str_replace('l', 'Ｌ' , $EN12);
  	 $EN12 = str_replace('z', 'Ｚ' , $EN12);
	 $EN12 = str_replace('x', 'Ｘ' , $EN12);
  	 $EN12 = str_replace('c', 'С' , $EN12);
	 $EN12 = str_replace('v', 'Ｖ' , $EN12);
  	 $EN12 = str_replace('b', 'Ｂ' , $EN12);
  	 $EN12 = str_replace('n', 'Ｎ' , $EN12);
	 $EN12 = str_replace('m', 'Ⅿ' , $EN12);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN12[1],
    ]);
    }
 $EN13 =   explode("/nick", $text1);
    if($EN13[1]){
	 $EN13 = str_replace('q', 'Ǫ' , $EN13);
  	 $EN13 = str_replace('w', 'Ш' , $EN13);
	 $EN13 = str_replace('e', 'Ξ' , $EN13);
  	 $EN13 = str_replace('r', 'Я' , $EN13);
	 $EN13 = str_replace('t', '₮' , $EN13);
  	 $EN13 = str_replace('y', 'Џ' , $EN13);
	 $EN13 = str_replace('u', 'Ǚ' , $EN13);
  	 $EN13 = str_replace('i', 'ł' , $EN13);
	 $EN13 = str_replace('o', 'Ф' , $EN13);
  	 $EN13 = str_replace('p', 'ק' , $EN13);
	 $EN13 = str_replace('a', 'Λ' , $EN13);
  	 $EN13 = str_replace('s', 'Ŝ' , $EN13);
	 $EN13 = str_replace('d', 'Ð' , $EN13);
  	 $EN13 = str_replace('f', 'Ŧ' , $EN13);
	 $EN13 = str_replace('g', '₲' , $EN13);
  	 $EN13 = str_replace('h', 'Ḧ' , $EN13);
	 $EN13 = str_replace('j', 'J' , $EN13);
  	 $EN13 = str_replace('k', 'К' , $EN13);
	 $EN13 = str_replace('l', 'Ł' , $EN13);
  	 $EN13 = str_replace('z', 'Ꙃ' , $EN13);
	 $EN13 = str_replace('x', 'Ж' , $EN13);
  	 $EN13 = str_replace('c', 'Ͼ' , $EN13);
	 $EN13 = str_replace('v', 'Ṽ' , $EN13);
  	 $EN13 = str_replace('b', 'Б' , $EN13);
  	 $EN13 = str_replace('n', 'Л' , $EN13);
	 $EN13 = str_replace('m', 'Ɱ' , $EN13);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN13[1], 
    ]);
	  }
 $EN13 =   explode("/nick", $text1);
    if($EN13[1]){
	 $EN13 = str_replace('q', 'q' , $EN13);
  	 $EN13 = str_replace('w', 'w' , $EN13);
	 $EN13 = str_replace('e', 'є' , $EN13);
  	 $EN13 = str_replace('r', 'r' , $EN13);
	 $EN13 = str_replace('t', 't' , $EN13);
  	 $EN13 = str_replace('y', 'ч' , $EN13);
	 $EN13 = str_replace('u', 'u' , $EN13);
  	 $EN13 = str_replace('i', 'í' , $EN13);
	 $EN13 = str_replace('o', 'σ' , $EN13);
  	 $EN13 = str_replace('p', 'p' , $EN13);
	 $EN13 = str_replace('a', 'α' , $EN13);
  	 $EN13 = str_replace('s', 'ѕ' , $EN13);
	 $EN13 = str_replace('d', 'd' , $EN13);
  	 $EN13 = str_replace('f', 'f' , $EN13);
	 $EN13 = str_replace('g', 'g' , $EN13);
  	 $EN13 = str_replace('h', 'h' , $EN13);
	 $EN13 = str_replace('j', 'j' , $EN13);
  	 $EN13 = str_replace('k', 'k' , $EN13);
	 $EN13 = str_replace('l', 'l' , $EN13);
  	 $EN13 = str_replace('z', 'z' , $EN13);
	 $EN13 = str_replace('x', 'х' , $EN13);
  	 $EN13 = str_replace('c', 'c' , $EN13);
	 $EN13 = str_replace('v', 'v' , $EN13);
  	 $EN13 = str_replace('b', 'в' , $EN13);
  	 $EN13 = str_replace('n', 'n' , $EN13);
	 $EN13 = str_replace('m', 'm' , $EN13);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN13[1], 
    ]);
	  }
	 $EN14 =  explode("/nick", $text1);
    if($EN14[1]){
	 $EN14 = str_replace('q', 'ⓠ' , $EN14);
  	 $EN14 = str_replace('w', 'ⓦ' , $EN14);
	 $EN14 = str_replace('e', 'ⓔ' , $EN14);
  	 $EN14 = str_replace('r', 'ⓡ' , $EN14);
	 $EN14 = str_replace('t', 'ⓣ' , $EN14);
  	 $EN14 = str_replace('y', 'ⓨ' , $EN14);
	 $EN14 = str_replace('u', 'ⓤ' , $EN14);
  	 $EN14 = str_replace('i', 'ⓘ' , $EN14);
	 $EN14 = str_replace('o', 'ⓞ' , $EN14);
  	 $EN14 = str_replace('p', 'ⓟ' , $EN14);
	 $EN14 = str_replace('a', 'ⓐ' , $EN14);
  	 $EN14 = str_replace('s', 'ⓢ' , $EN14);
	 $EN14 = str_replace('d', 'ⓓ' , $EN14);
  	 $EN14 = str_replace('f', 'ⓕ' , $EN14);
	 $EN14 = str_replace('g', 'ⓖ' , $EN14);
  	 $EN14 = str_replace('h', 'ⓗ' , $EN14);
	 $EN14 = str_replace('j', 'ⓙ' , $EN14);
  	 $EN14 = str_replace('k', 'ⓚ' , $EN14);
	 $EN14 = str_replace('l', 'ⓛ' , $EN14);
  	 $EN14 = str_replace('z', 'ⓩ' , $EN14);
	 $EN14 = str_replace('x', 'ⓧ' , $EN14);
  	 $EN14 = str_replace('c', 'ⓒ' , $EN14);
	 $EN14 = str_replace('v', 'ⓥ' , $EN14);
  	 $EN14 = str_replace('b', 'ⓑ' , $EN14);
  	 $EN14 = str_replace('n', 'ⓝ' , $EN14);
	 $EN14 = str_replace('m', 'ⓜ' , $EN14);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN14[1], 
    ]);
	  }
	 $EN15 =   explode("/nick", $text1);
    if($EN15[1]){
	 $EN15 = str_replace('q', 'Q⃟' , $EN15);
  	 $EN15 = str_replace('w', 'W⃟' , $EN15);
	 $EN15 = str_replace('e', 'E⃟' , $EN15);
  	 $EN15 = str_replace('r', 'R⃟' , $EN15);
	 $EN15 = str_replace('t', 'T⃟' , $EN15);
  	 $EN15 = str_replace('y', 'Y⃟' , $EN15);
	 $EN15 = str_replace('u', 'U⃟' , $EN15);
  	 $EN15 = str_replace('i', 'I⃟' , $EN15);
	 $EN15 = str_replace('o', 'O⃟' , $EN15);
  	 $EN15 = str_replace('p', 'P⃟' , $EN15);
	 $EN15 = str_replace('a', 'A⃟' , $EN15);
  	 $EN15 = str_replace('s', 'S⃟' , $EN15);
	 $EN15 = str_replace('d', 'D⃟' , $EN15);
  	 $EN15 = str_replace('f', 'F⃟' , $EN15);
	 $EN15 = str_replace('g', 'G⃟' , $EN15);
  	 $EN15 = str_replace('h', 'H⃟' , $EN15);
	 $EN15 = str_replace('j', 'J⃟' , $EN15);
  	 $EN15 = str_replace('k', 'K⃟' , $EN15);
	 $EN15 = str_replace('l', 'L⃟' , $EN15);
  	 $EN15 = str_replace('z', 'Z⃟' , $EN15);
	 $EN15 = str_replace('x', 'X⃟' , $EN15);
  	 $EN15 = str_replace('c', 'C⃟' , $EN15);
	 $EN15 = str_replace('v', 'V⃟' , $EN15);
  	 $EN15 = str_replace('b', 'B⃟' , $EN15);
  	 $EN15 = str_replace('n', 'N⃟' , $EN15);
	 $EN15 = str_replace('m', 'M⃟' , $EN15);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN15[1], 
    ]);
	  }
	 $EN16 =   explode("/nick", $text1);
    if($EN16[1]){
	 $EN16 = str_replace('q', 'Qཽ' , $EN16);
  	 $EN16 = str_replace('w', 'Wཽ' , $EN16);
	 $EN16 = str_replace('e', 'Eཽ' , $EN16);
  	 $EN16 = str_replace('r', 'Rཽ' , $EN16);
	 $EN16 = str_replace('t', 'Tཽ' , $EN16);
  	 $EN16 = str_replace('y', 'Yཽ' , $EN16);
	 $EN16 = str_replace('u', 'Uཽ' , $EN16);
  	 $EN16 = str_replace('i', 'Iཽ' , $EN16);
	 $EN16 = str_replace('o', 'Oཽ' , $EN16);
  	 $EN16 = str_replace('p', 'Pཽ' , $EN16);
	 $EN16 = str_replace('a', 'Aཽ' , $EN16);
  	 $EN16 = str_replace('s', 'Sཽ' , $EN16);
	 $EN16 = str_replace('d', 'Dཽ' , $EN16);
  	 $EN16 = str_replace('f', 'Fཽ' , $EN16);
	 $EN16 = str_replace('g', 'Gཽ' , $EN16);
  	 $EN16 = str_replace('h', 'Hཽ' , $EN16);
	 $EN16 = str_replace('j', 'Jཽ' , $EN16);
  	 $EN16 = str_replace('k', 'Kཽ' , $EN16);
	 $EN16 = str_replace('l', 'Lཽ' , $EN16);
  	 $EN16 = str_replace('z', 'Zཽ' , $EN16);
	 $EN16 = str_replace('x', 'Xཽ' , $EN16);
  	 $EN16 = str_replace('c', 'Cཽ' , $EN16);
	 $EN16 = str_replace('v', 'Vཽ' , $EN16);
  	 $EN16 = str_replace('b', 'Bཽ' , $EN16);
  	 $EN16 = str_replace('n', 'Nཽ' , $EN16);
	 $EN16 = str_replace('m', 'Mཽ' , $EN16);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN16[1], 
    ]);
	  }
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//



	 $EN17 =   explode("/nick", $text1);
    if($EN17[1]){
	 $EN17 = str_replace('q', 'ⓠ' , $EN17);
  	 $EN17 = str_replace('w', 'ẘ' , $EN17);
	 $EN17 = str_replace('e', 'ε' , $EN17);
  	 $EN17 = str_replace('r', 'я' , $EN17);
	 $EN17 = str_replace('t', '⊥' , $EN17);
  	 $EN17 = str_replace('y', '¥' , $EN17);
	 $EN17 = str_replace('u', 'ʊ' , $EN17);
  	 $EN17 = str_replace('i', 'ḯ' , $EN17);
	 $EN17 = str_replace('o', 'ø' , $EN17);
  	 $EN17 = str_replace('p', '℘' , $EN17);
	 $EN17 = str_replace('a', '∀' , $EN17);
  	 $EN17 = str_replace('s', '﹩' , $EN17);
	 $EN17 = str_replace('d', '∂' , $EN17);
  	 $EN17 = str_replace('f', 'ḟ' , $EN17);
	 $EN17 = str_replace('g', 'ℊ' , $EN17);
  	 $EN17 = str_replace('h', 'н' , $EN17);
	 $EN17 = str_replace('j', 'ʝ' , $EN17);
  	 $EN17 = str_replace('k', 'ḱ' , $EN17);
	 $EN17 = str_replace('l', 'ʟ' , $EN17);
  	 $EN17 = str_replace('z', 'ℨ' , $EN17);
	 $EN17 = str_replace('x', '✖' , $EN17);
  	 $EN17 = str_replace('c', 'ḉ' , $EN17);
	 $EN17 = str_replace('v', 'ṽ' , $EN17);
  	 $EN17 = str_replace('b', '♭' , $EN17);
  	 $EN17 = str_replace('n', 'η' , $EN17);
	 $EN17 = str_replace('m', 'ღ' , $EN17);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN17[1], 
    ]);
	  }
	 $EN18 =   explode("/nick", $text1);
    if($EN18[1]){
	 $EN18 = str_replace('q', 'ǭ' , $EN18);
  	 $EN18 = str_replace('w', 'ω' , $EN18);
	 $EN18 = str_replace('e', 'ḙ' , $EN18);
  	 $EN18 = str_replace('r', 'Ի' , $EN18);
	 $EN18 = str_replace('t', 'т' , $EN18);
  	 $EN18 = str_replace('y', '⑂' , $EN18);
	 $EN18 = str_replace('u', 'ṳ' , $EN18);
  	 $EN18 = str_replace('i', '!' , $EN18);
	 $EN18 = str_replace('o', '✺' , $EN18);
  	 $EN18 = str_replace('p', '℘' , $EN18);
	 $EN18 = str_replace('a', 'ᾰ' , $EN18);
  	 $EN18 = str_replace('s', 'ṧ' , $EN18);
	 $EN18 = str_replace('d', 'ᖱ' , $EN18);
  	 $EN18 = str_replace('f', 'ḟ' , $EN18);
	 $EN18 = str_replace('g', '❡' , $EN18);
  	 $EN18 = str_replace('h', 'ℏ' , $EN18);
	 $EN18 = str_replace('j', '♩' , $EN18);
  	 $EN18 = str_replace('k', 'к' , $EN18);
	 $EN18 = str_replace('l', 'ℓ' , $EN18);
  	 $EN18 = str_replace('z', 'ℨ' , $EN18);
	 $EN18 = str_replace('x', '✘' , $EN18);
  	 $EN18 = str_replace('c', 'ḉ' , $EN18);
	 $EN18 = str_replace('v', 'ṽ' , $EN18);
  	 $EN18 = str_replace('b', '♭' , $EN18);
  	 $EN18 = str_replace('n', 'ℵ' , $EN18);
	 $EN18 = str_replace('m', 'Պ' , $EN18);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN18[1], 
    ]);
	  }
	 $EN19 =   explode("/nick", $text1);
    if($EN19[1]){
	 $EN19 = str_replace('q', 'զ' , $EN19);
  	 $EN19 = str_replace('w', 'Ŵ' , $EN19);
	 $EN19 = str_replace('e', 'є' , $EN19);
  	 $EN19 = str_replace('r', 'я' , $EN19);
	 $EN19 = str_replace('t', 'ṭ' , $EN19);
  	 $EN19 = str_replace('y', 'ʏ' , $EN19);
	 $EN19 = str_replace('u', 'ȗ' , $EN19);
  	 $EN19 = str_replace('i', 'ı' , $EN19);
	 $EN19 = str_replace('o', 'ȏ' , $EN19);
  	 $EN19 = str_replace('p', 'ק' , $EN19);
	 $EN19 = str_replace('a', 'ѧ' , $EN19);
  	 $EN19 = str_replace('s', 'ś' , $EN19);
	 $EN19 = str_replace('d', 'Ԁ' , $EN19);
  	 $EN19 = str_replace('f', 'ғ' , $EN19);
	 $EN19 = str_replace('g', 'ɢ' , $EN19);
  	 $EN19 = str_replace('h', 'һ' , $EN19);
	 $EN19 = str_replace('j', 'j' , $EN19);
  	 $EN19 = str_replace('k', 'ҡ' , $EN19);
	 $EN19 = str_replace('l', 'ʟ' , $EN19);
  	 $EN19 = str_replace('z', '' , $EN19);
	 $EN19 = str_replace('x', '×' , $EN19);
  	 $EN19 = str_replace('c', 'ċ' , $EN19);
	 $EN19 = str_replace('v', 'ṿ' , $EN19);
  	 $EN19 = str_replace('b', 'ɞ' , $EN19);
  	 $EN19 = str_replace('n', 'ṅ' , $EN19);
	 $EN19 = str_replace('m', 'ṃ' , $EN19);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN19[1], 
    ]);
	  }
	 $EN20 =   explode("/nick", $text1);
    if($EN20[1]){
	 $EN20 = str_replace('q', 'q̲̅' , $EN20);
  	 $EN20 = str_replace('w', 'w̲̅' , $EN20);
	 $EN20 = str_replace('e', 'e̲̅' , $EN20);
  	 $EN20 = str_replace('r', 'r̲̅' , $EN20);
	 $EN20 = str_replace('t', 't̲̅' , $EN20);
  	 $EN20 = str_replace('y', 'y̲̅' , $EN20);
	 $EN20 = str_replace('u', 'u̲̅' , $EN20);
  	 $EN20 = str_replace('i', 'i̲̅' , $EN20);
	 $EN20 = str_replace('o', 'o̲̅' , $EN20);
  	 $EN20 = str_replace('p', 'p̲̅' , $EN20);
	 $EN20 = str_replace('a', 'a̲̅' , $EN20);
  	 $EN20 = str_replace('s', 's̲̅' , $EN20);
	 $EN20 = str_replace('d', 'd̲̅' , $EN20);
  	 $EN20 = str_replace('f', 'f̲̅' , $EN20);
	 $EN20 = str_replace('g', 'g̲̅' , $EN20);
  	 $EN20 = str_replace('h', 'h̲̅' , $EN20);
	 $EN20 = str_replace('j', 'j̲̅' , $EN20);
  	 $EN20 = str_replace('k', 'k̲̅' , $EN20);
	 $EN20 = str_replace('l', 'l̲̅' , $EN20);
  	 $EN20 = str_replace('z', 'z̲̅' , $EN20);
	 $EN20 = str_replace('x', 'x̲̅' , $EN20);
  	 $EN20 = str_replace('c', 'c̲̅' , $EN20);
	 $EN20 = str_replace('v', 'v̲̅' , $EN20);
  	 $EN20 = str_replace('b', 'b̲̅' , $EN20);
  	 $EN20 = str_replace('n', 'n̲̅' , $EN20);
	 $EN20 = str_replace('m', 'm̲̅' , $EN20);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN20[1], 
    ]);
	  }
	$EN21 =   explode("/nick", $text1);
    if($EN21[1]){
	 $EN21 = str_replace('q', 'q͙' , $EN21);
  	 $EN21 = str_replace('w', 'w͙' , $EN21);
	 $EN21 = str_replace('e', 'e͙' , $EN21);
  	 $EN21 = str_replace('r', 'r͙' , $EN21);
	 $EN21 = str_replace('t', 't͙' , $EN21);
  	 $EN21 = str_replace('y', 'y͙' , $EN21);
	 $EN21 = str_replace('u', 'u͙' , $EN21);
  	 $EN21 = str_replace('i', 'i͙' , $EN21);
	 $EN21 = str_replace('o', 'o͙' , $EN21);
  	 $EN21 = str_replace('p', 'p͙' , $EN21);
	 $EN21 = str_replace('a', 'a͙' , $EN21);
  	 $EN21 = str_replace('s', 's͙' , $EN21);
	 $EN21 = str_replace('d', 'd͙' , $EN21);
  	 $EN21 = str_replace('f', 't͙' , $EN21);
	 $EN21 = str_replace('g', 'g͙' , $EN21);
  	 $EN21 = str_replace('h', 'h͙' , $EN21);
	 $EN21 = str_replace('j', 'j͙' , $EN21);
  	 $EN21 = str_replace('k', 'k͙' , $EN21);
	 $EN21 = str_replace('l', 'l͙' , $EN21);
  	 $EN21 = str_replace('z', 'z͙' , $EN21);
	 $EN21 = str_replace('x', 'x͙' , $EN21);
  	 $EN21 = str_replace('c', 'c͙' , $EN21);
	 $EN21 = str_replace('v', 'v͙' , $EN21);
  	 $EN21 = str_replace('b', 'b͙' , $EN21);
  	 $EN21 = str_replace('n', 'n͙' , $EN21);
	 $EN21 = str_replace('m', 'm͙' , $EN21);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN21[1], 
    ]);
	  }
	 $EN22 =   explode("/nick", $text1);
    if($EN22[1]){
	 $EN22 = str_replace('q', 'q⃠' , $EN22);
  	 $EN22 = str_replace('w', 'w⃠' , $EN22);
	 $EN22 = str_replace('e', 'e⃠' , $EN22);
  	 $EN22 = str_replace('r', 'r⃠' , $EN22);
	 $EN22 = str_replace('t', 't⃠' , $EN22);
  	 $EN22 = str_replace('y', 'y⃠' , $EN22);
	 $EN22 = str_replace('u', 'u⃠' , $EN22);
  	 $EN22 = str_replace('i', 'i⃠' , $EN22);
	 $EN22 = str_replace('o', 'o⃠' , $EN22);
  	 $EN22 = str_replace('p', 'p⃠' , $EN22);
	 $EN22 = str_replace('a', 'a⃠' , $EN22);
  	 $EN22 = str_replace('s', 's⃠' , $EN22);
	 $EN22 = str_replace('d', 'd⃠' , $EN22);
  	 $EN22 = str_replace('f', 'f⃠' , $EN22);
	 $EN22 = str_replace('g', 'g⃠' , $EN22);
  	 $EN22 = str_replace('h', 'h⃠' , $EN22);
	 $EN22 = str_replace('j', 'j⃠' , $EN22);
  	 $EN22 = str_replace('k', 'k⃠' , $EN22);
	 $EN22 = str_replace('l', 'l⃠' , $EN22);
  	 $EN22 = str_replace('z', 'z⃠' , $EN22);
	 $EN22 = str_replace('x', 'x⃠' , $EN22);
  	 $EN22 = str_replace('c', 'c⃠' , $EN22);
	 $EN22 = str_replace('v', 'v⃠' , $EN22);
  	 $EN22 = str_replace('b', 'b⃠' , $EN22);
  	 $EN22 = str_replace('n', 'n⃠' , $EN22);
	 $EN22 = str_replace('m', 'm⃠' , $EN22);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN22[1], 
    ]);
	  }
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//



	 $EN23 =   explode("/nick", $text1);
    if($EN23[1]){
	 $EN23 = str_replace('q', 'Ꮔ' , $EN23);
  	 $EN23 = str_replace('w', 'Ꮚ' , $EN23);
	 $EN23 = str_replace('e', 'Ꮛ' , $EN23);
  	 $EN23 = str_replace('r', 'ᖇ' , $EN23);
	 $EN23 = str_replace('t', 'Ꮏ' , $EN23);
  	 $EN23 = str_replace('y', 'Ꭹ' , $EN23);
	 $EN23 = str_replace('u', 'Ꮜ' , $EN23);
  	 $EN23 = str_replace('i', 'Ꮂ' , $EN23);
	 $EN23 = str_replace('o', 'Ꮻ' , $EN23);
  	 $EN23 = str_replace('p', 'Ꮅ' , $EN23);
	 $EN23 = str_replace('a', 'Ꭿ' , $EN23);
  	 $EN23 = str_replace('s', 'Ꭶ' , $EN23);
	 $EN23 = str_replace('d', 'Ꮄ' , $EN23);
  	 $EN23 = str_replace('f', 'Ꮏ' , $EN23);
	 $EN23 = str_replace('g', 'Ꮆ' , $EN23);
  	 $EN23 = str_replace('h', 'Ꮒ' , $EN23);
	 $EN23 = str_replace('j', 'Ꮰ' , $EN23);
  	 $EN23 = str_replace('k', 'Ꮶ' , $EN23);
	 $EN23 = str_replace('l', 'l' , $EN23);
  	 $EN23 = str_replace('z', 'Ꮓ' , $EN23);
	 $EN23 = str_replace('x', 'Ꮿ' , $EN23);
  	 $EN23 = str_replace('c', 'Ꮳ' , $EN23);
	 $EN23 = str_replace('v', 'Ꮙ' , $EN23);
  	 $EN23 = str_replace('b', 'Ᏸ' , $EN23);
  	 $EN23 = str_replace('n', 'Ꮑ' , $EN23);
	 $EN23 = str_replace('m', 'm' , $EN23);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN23[1], 
    ]);
	  }

		if(stripos($mtext,"soat") !== false){
		$soat = date('H:i', strtotime('0 hour'));
  $text = "⏰Hozir soat: *$soat*";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode' => 'markdown'
  ]));
}

if($data=="vaqtuz"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,      
      'text'=>"*📆Bugun: $sana1-yil
⌚Soat: $soat1
📅Oy nomi: $oynomi
📅Yilning: $sana2-kuni
⏳Vaqt mintaqasi: $gmt
📅Bu oy $buoy kundan iborat*",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
        [['text'=>' 💫Orqaga qaytish','callback_data'=>'qiziqarlik']]
]
]),
]);
}

if(mb_stripos($text1,"/rasmqidr") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://yandex.ru/images/search?text=$ex[1]",
]);
}  

   if($text1 =="/guruh" && $from_id == "$fadmin"){
if ($cty == 'group' | $cty == 'supergroup'){
  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"🆔Guruh ID raqami: *$chat_id*\n📄Guruh nomi: *$namegroup*\n💌Xabarlar soni: *$tedadmsg*\n💠Guruh turi: *$tc*",
  'parse_mode'=>'MarkDown',
  ]);
  }
 }

if($mtext=="/screen" or ($mtext=="/screen@$botim")){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*😊 Bu sizga hech qiyinchiliksiz istalgan saytni screen qilib olishingiz mumkin buning uchun*  /screen https://sayt nomi \n*Eslatma* https:// *bo'lish shart va albatta /screen dan so'ng bitta joy qoldiring*",
'parse_mode'=>'markdown',
'reply_to_message_id'=>$mid,
]);
}

if(mb_stripos($mtext,"/screen") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://api.site-shot.com/?url=$ex[1]",
]);
}

		if(stripos($mtext,"sana") !== false){
        $bugun = date('d-M Y',strtotime('0 hour'));
  $text = "📆Bugungi sana: *$bugun*";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(stripos($mtext,"/id") !== false){
  $text = "$fadmin";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(stripos($mtext,"/gid") !== false){
  $text = "$chat_id";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(isset($doc) or isset($gif)){
  $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
  bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$mesid
  ]);
}
}

if((mb_stripos($mtext,"#Taklif") !== false)){ 
bot('SendMessage',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$mid,
'text'=>"Xabaringiz adminga yetkazildi!",
]);
}
if((mb_stripos($mtext,"#Taklif") !== false) or (mb_stripos($mtext,"Musohon")!==false) or (stripos($mtext,"Rahimov")!==false) or (mb_stripos($mtext,"Advokat")!==false) or (mb_stripos($mtext,"Advokad")!==false)){ 
bot('SendMessage',[
'chat_id'=>$admin,
'parse_mode'=>'html',
'text'=>"✉<b>$title(</b>  $chat_id  <b>) guruhida sizni eslashdi:</b>\n<code>$mtext</code>\n  <b>Xabarchi  haqida  ma'lumotlar: </b>
👤<b>Ismi:</b>  <a href='tg://user?id=$fadmin'>$first_name</a>
🆔<b>ID</b>si: $fadmin
🔅<b>Usernamesi:</b> @$username ", null, false
      ]);
   }



  if((stripos($mtext,"reo")!==false) and $fadmin == $admin){
      $sx=explode("\n",$mtext);
      $useid = $sx[2];
      $chatidsi  = $sx[1];
      $vaqti = $sx[3];
      $minut = strtotime("+$vaqti minutes");
   bot('restrictChatMember', [
      'chat_id' => "-$chatidsi",
      'user_id' => $useid,
      'until_date' => $minut,
      'can_send_messages' => false,
      'can_send_media_messages' => false,
      'can_send_other_messages' => false,
      'can_add_web_page_previews' => false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "🔹 <a href='tg://user?id=$useid'>Foydalanuvchi</a> -$chatidsi guruhida <b>$vaqti</b> ga <b>Read only</b> rejimiga tushdirildi!",
      'parse_mode' => 'html'
  ]);
}

if($text1 == "/ro" or $text1 == "/Ro" or $text1 == "RO" or $text1 == "ro@uzbek_tgrobot"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  $minut = strtotime("+99999999999999 minutes");
  bot('restrictChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $id,
      'until_date' => $minut,
      'can_send_messages' => false,
      'can_send_media_messages' => false,
      'can_send_other_messages' => false,
      'can_add_web_page_previews' => false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "🔹 <a href='tg://user?id=$id'>$from_user_first_name</a> siz <b>Read only</b> rejimiga tushirildingiz!",
      'parse_mode' => 'html'
  ]);
}
}

    if($text1 == "/Kick"  or  $text1 == "/kick"  or $text1 == "/kick"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  $vaqti = strtotime("+1 minutes");
  bot('kickChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $id,
      'until_date'=> $vaqti,
  ]);
  bot('unbanChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
    ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "🔹 <a href='tg://user?id=$id'>$from_user_first_name</a> guruhdan <b>Kick</b> bo‘ldi!",
      'parse_mode' => 'html'
  ]);
}
}

if($text1 =="Banan" or $text1 == "Xayr"&&$fadmin==$admin){
       $vaqti = strtotime("+10800000 minutes");
      bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $vaqti,
      ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendMessage', [
        'chat_id'=>$chat_id,
        'text' => "🔹 <a href='tg://user?id=$id'>$from_user_first_name</a> guruhdan <b>ban</b> bo‘ldiz!",
        'parse_mode'=>'html'
    ]);
  }

  if((stripos($capt,"https://")!==false)  or (stripos($capt,"http://")!==false) or (stripos($capt,"@")!==false) or (stripos($capt,"bot?start=")!==false)  or (stripos($mtext,"bot?start=")!==false)  or  (stripos($mtext,"http://") !==false) or  (stripos($mtext,"https://")!==false)){
  if((stripos($capt,"☣")!==false) or (stripos($mtext,"☣")!==false)){
  }else{
  $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
    $minut = strtotime("+120 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $fadmin,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('deleteMessage', [
        'chat_id' => $chat_id,
        'message_id' => $mid,
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "🔹 <a href='tg://user?id=$fadmin'>$first_name</a> siz <b>2 soat</b>ga <b>Read only</b> rejimiga tushdingiz.\n⚠ <b>Sabab:</b> <i>Reklama!</i> ",
        'parse_mode' => 'html'
    ]);
}
}
  }

    if((stripos($mtext,"dalbayop")!==false)  or (stripos($mtext,"oneni")!==false)  or (stripos($mtext,"skaman")!==false) or (stripos($mtext,"sikaman")!==false) or (stripos($mtext,"Axmoq")!==false) or (stripos($mtext,"chumo")!==false)  or  (stripos($mtext,"dalbayob")!==false) or  (stripos($mtext,"skay")!==false) or (stripos($mtext,"seks")!==false) or (stripos($mtext,"dalban")!==false) or (stripos($mtext,"yiban")!==false) or (stripos($mtext,"jalab")!==false) or (stripos($mtext,"скаман")!==false) or (stripos($mtext,"qanjiq")!==false) or (stripos($mtext,"чумо")!==false)  or  (stripos($mtext,"далбаёб")!==false) or  (stripos($mtext,"скай")!==false) or (stripos($mtext,"секс")!==false) or (stripos($mtext,"далбан")!==false) or (stripos($mtext,"йибан")!==false) or (stripos($mtext,"haqorat")!==false) or (stripos($mtext,"жалаб")!==false) or (stripos($mtext,"кутинга")!==false) or (stripos($mtext,"kotinga")!==false) or  (stripos($mtext,"куток")!==false)  or  (stripos($mtext,"qotoq")!==false) or  (stripos($mtext,"naxuy")!==false) or (stripos($mtext,"хуй")!==false) or (stripos($mtext,"сучка")!==false) or (stripos($mtext,"suchka")!==false) or (stripos($mtext,"омини")!==false) or (stripos($mtext,"омнга")!==false) or  (stripos($mtext,"сикаман")!==false)  or  (stripos($mtext,"гандон")!==false) or  (stripos($mtext,"сука")!==false) or (stripos($mtext,"жопа")!==false) or (stripos($mtext,"omingni")!==false) or (stripos($mtext,"ominga")!==false) or (stripos($mtext,"gandon")!==false) and $fadmin !== $admin){
    $gett = bot('getChatMember', [
   'chat_id' => $chat_id,
   'user_id' => $fadmin,
   ]);
  $get = $gett->result->status;
  if($get =="member"){
     $minut = strtotime("+10800 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $fadmin,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('deleteMessage', [
       'chat_id' => $chat_id,
       'message_id' => $mid
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "🔹 <a href='tg://user?id=$fadmin'>$first_name</a> <b>3 kun</b>ga <b>Read only</b> rejimiga tushdirildi.\n⚠ <b>Sabab:</b> <i>Haqorat qildi!</i> ",
        'parse_mode' => 'html'
    ]);
}
}

 if($text1 == "/adminber" or $text1 == "adminber"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ <a href='tg://user?id=$id'>$from_user_first_name</a> sizni tabriklayman , siz guruh <b>adminstratorisiz❗️</b>",
    'parse_mode'=>'html'
  ]);
}
}

   if($text1 == "admin ol" or $text1 == "/adminol"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get == "administrator" or $get == "creator"){
bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>false,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>false,
    'can_invite_users'=>false,
    'can_restrict_members'=>false,
    'can_pin_messages'=>false,
    'can_promote_members'=>false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"☑ <a href='tg://user?id=$id'>$from_user_first_name</a> siz endi guruh adminstratori <b>emassiz</b>❗️",
    'parse_mode'=>'html'
  ]);
}
}

  if($text1 == "/unro" or $text1 == "UNRO" or $text1 == "unro"){
 $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_send_messages'=>true,
    'can_send_media_messages'=>true,
    'can_send_other_messages'=>true,
    'can_add_web_page_previews'=>true
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"☑ <a href='tg://user?id=$id'>$from_user_first_name</a> sizdan cheklov olindi, guruhda <b>yozishingiz mumkin!</b>\nEndi qoidani <b>buzmaysiz</b> degan umiddaman❗️",
    'parse_mode'=>'html'
  ]);
}
}

if($text1=="/adminber"&&$fadmin==$admin) {
  bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"✅ <a href='tg://user?id=$id'>$from_user_first_name</a> sizni tabriklayman , siz guruh <b>adminstratorisiz❗️</b>",
    'parse_mode'=>'html'
  ]);
}

if($text1=="Pmme"&&$fadmin==$admin) {
    bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$admin,
    'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>true
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  $ms = bot('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"✅",
    'parse_mode'=>'html'
  ]);
    $nat = $ms->result->message_id;
    bot('deleteMessage', [
    'chat_id' => $chat_id,
    'message_id' => $nat,
  ]);
    bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$mesid
  ]);
}

if($text1=="Pmu"&&$fadmin==$admin) {
    bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>true
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  $ms = bot('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"✅",
    'parse_mode'=>'html'
  ]);
    $nat = $ms->result->message_id;
    bot('deleteMessage', [
    'chat_id' => $chat_id,
    'message_id' => $nat,
  ]);
    bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$mesid
  ]);
}

if ($text1=='Del'&&$fadmin==$admin) {
   bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$mesid
  ]);
  bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
  ]);
  }

if($text1 == "/pin" or $text1 == "/Pin" or $text1 == "PIn" or $text1 == "PIN" or $text1 == "piN" or $text1 == "pIN" or $text1 == "pIn" or $text1 == "pIN@uzbek_tgrobot"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
  ]);
}
}

if($text1=="bye"&&$fadmin==$admin) {
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "<b>Ho‘p xo‘jayin</b>.",
      'parse_mode' => 'html'
  ]);
  bot('leaveChat',[
    'chat_id'=>$chat_id
  ]);
}

if((stripos($mtext,"Sw")!==false) and $fadmin == $admin){
      $sx=explode("\n",$text1);
      $matn = $sx[2];
      $idsi  = $sx[1];
  bot('sendMessage',[
       'chat_id'=>$idsi,
       'text'=>$matn,
       'parse_mode'=>'markdown',
       'disable_web_page_preview' => true,
       ]);
   bot('sendMessage',[
       'chat_id'=>$admin,
       'text'=>"✅",
       ]);
  }

 if($text1 == "ban" or $text1 == "Ban" or $text1== "/Ban" or  $text1 == "/ban"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
       $vaqti = strtotime("+108000000 minutes");
      bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $vaqti,
      ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendMessage', [
        'chat_id'=>$chat_id,
        'text' => "🔹 <a href='tg://user?id=$id'>$from_user_first_name</a> guruhdan <b>ban</b> bo‘ldi!",
        'parse_mode'=>'html'
    ]);
  }
  }

 if($text1 == "Unban"  or  $text1 == "/unban"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
    bot('unbanChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendMessage', [
        'chat_id'=>$chat_id,
        'text' => "🔹 <a href='tg://user?id=$id'>$from_user_first_name</a> <b>ban</b>dan olindi!",
        'parse_mode'=>'html'
    ]);
}
}

if($text1 == "warn" or $text1 == "Warn" or $text1 == "/warn"){
  $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
$warn = file_get_contents("warn/$chat_id&$id.dat");
if($warn){
$warn +=1;
file_put_contents("warn/$chat_id&$id.dat","$warn");
if($warn !=3){
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
$oldi = bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"⚠ <a href='tg://user?id=$id'>$from_user_first_name</a> <b>ogohlantirish oldi.</b>\nEndi undagi ogohlantirishlar soni <b>$warn</b>/3.",
  'parse_mode'=>'html'
  ]);
}else{
 bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
 bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"⚠ <a href='tg://user?id=$id'>$from_user_first_name</a> shu vaqtgacha unga berilgan ogohlantirishlarga <b>befarq bo‘ldi</b>, jazo sifatida esa guruhdan <b>chetlatiladi!</b>",
  'parse_mode'=>'html'
  ]);
 $vaqti = strtotime("+10800000 minutes");
  bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $vaqti,
      ]);
 $warn = 0;
file_put_contents("warn/$chat_id&$id.dat","$warn");
}
}else{
$warn = 1;
file_put_contents("warn/$chat_id&$id.dat","$warn");
bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"⚠ <a href='tg://user?id=$id'>$from_user_first_name</a> <b>ogohlantirish oldi.</b>\nEndi undagi ogohlantirishlar soni <b>$warn</b>/3.",
  'parse_mode'=>'html'
  ]);
}
}
}

  if($text1 == "unwarn" or $text1 == "Unwarn" or $text1 == "/unwarn"){
  $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
 $warn = 0;
 file_put_contents("warn/$chat_id&$id.dat","$warn");
 bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"⚠ <a href='tg://user?id=$id'>$from_user_first_name</a> dan barcha <b>ogohlantirishlar</b> olib tashlandi.\nEndi undagi ogohlantirishlar soni <b>$warn</b>/3.",
  'parse_mode'=>'html'
  ]);
} 
}
  
$replyik = $message->reply_to_message->text;
    $yubbi = "📨Yuboriladigan xabar matnini kiriting. Xabar turi markdown";

    if($text1 == "/sendu" and $chat_id == $admin){
      ty($chat_id);
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","user");
    }

    if($step == "user" and $chat_id == $admin){
      if($text1 == "/otmen"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("\n",$userlar);
      foreach($idszs as $idlat){
     $userr = bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>$text1,
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
      ]);
      }
        if($userr){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Userlarga yuborildi!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
    }
      
       if($text1 == "/sendg" and $chat_id == $admin){
      ty($chat_id);
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","guruh");
    }

    if($step == "guruh" and $chat_id == $admin){
      if($text1 == "/otmen"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("\n",$guruhlar);
      foreach($idszs as $idlat){
    $guruu =  bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>$text1,
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
      ]);
      }
        if($guruu){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Guruhlarga yuborildi!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
    }
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      if($text1 == '/file' and $chat_id == $admin){
bot('sendDocument',['chat_id'=>$chat_id,'document'=>new CURLFile(__FILE__)]);
}
      
      
      
