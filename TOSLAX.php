<?php
/*
⌯⁞ قنـاه خاصة بالبرمجة والتطويـر ٠
⌯⁞ نقـوم بنـشر البوتات الخدميه المميزة •
⌯⁞ نقـوم بنشر الملفات والتطبيقات المدفوعة •
⌯⁞ تنشر كل ما يخص مجال البرمجة والتطوير •

⌯⁞ قنوات ذات صلة ↯
⌯⁞ تيم مستر اكس مصر ⋙ @AX_GB⌯
ـ @O_1_W ⌯
*/
ob_start();
define('6749511649:AAHDCn5OacMtRgWL0xsqZh7icmBiQ7am2KI','توكن');//BOT TOKEN
echo "https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME'];
$admin ="6750861107"; //ADMIN ID 
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
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$reply_text = $message->reply_to_message->text;
$user_id = $message->from->id;
$id = $message->from->id;
$reply_menu = json_encode([
           'resize_keyboard'=>false,
            'force_reply' => true,
            'selective' => true
        ]);


if(mb_stripos($text,"/start")!==false){
   $baza=file_get_contents("azo.dat");
   if(mb_stripos($baza,$chat_id) !==false){
   }else{
   $txt="n$chat_id";
   $file=fopen("azo.dat","a");
   fwrite($file,$txt);
   fclose($file);
   }
}

if ($text=="/admin") {
      $baza=file_get_contents("azo.dat");
      $all=substr_count($baza,"n");
      $gr=substr_count($baza,"-");
      $us=$all-$gr;
      $tx = "<b>👥 مستخدمو البوت: $all </b>";
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'parse_mode'=>'html',
   'text'=>$tx,
'parse_mode'=>'html',
'reply_markup'=>$main_menu,
]);
}

if($text == "/start"){
    bot('sendMessage',[
       'chat_id'=> $chat_id,
        'text'=>"<b>• اهلا بك عزيزي في بوت التواصل الخاص بي ❤️

- ارسل رسالتك الان لكي يتم ارسالها الى مدير البوت وسوف يرد عليك باقرب وقت 📢</b>",
'parse_mode'=>'html',
'reply_markup'=>$main_menu,
]);
}
mkdir("mid");
if ($text==$text and $chat_id <> $admin){ 
if($text == "/start" or $text == "/stat"){
}else{
    $mid5=bot('ForwardMessage',[
        'chat_id'=> $admin,
        'from_chat_id'=>$chat_id,
        'message_id'=>$message->message_id,
    ])->result->message_id;
    $mid=$message->message_id;
file_put_contents("mid/$mid5.txt","$chat_id|$mid");
    bot('sendMessage',[
       'chat_id'=>$chat_id,
       'reply_to_message_id'=>$mid,
        'text'=>"<b>حسنًا📝، لقد تم تسليم رسالتك إلى المشرف! سوف✅ يقوم المشرف👨‍💻 بالرد عليك خلال 24 ساعة!</b>",
'parse_mode'=>'html',
'reply_markup'=>$main_menu,
]);
}
}

if($message->reply_to_message->message_id and $user_id == $admin){
$rchid=$message->reply_to_message->message_id;
$chid=file_get_contents("mid/$rchid.txt");
$ex=explode ("|",$chid);
    bot('SendMessage',[
       'chat_id'=>$ex[0],
        'text'=>"<b>$text</b>",
'parse_mode'=>'html',
'reply_markup'=>$main_menu,
    ]);
    bot('SendMessage',[
       'chat_id'=> $admin,
       'reply_to_message_id'=>$mid,
        'text'=> "<b>👤 لقد تم إرسال رسالتك إلى المستخدم!✅</b>",
'parse_mode'=>'html',
'reply_markup'=>$main_menu,
]);
}
/*
⌯⁞ قنـاه خاصة بالبرمجة والتطويـر ٠
⌯⁞ نقـوم بنـشر البوتات الخدميه المميزة •
⌯⁞ نقـوم بنشر الملفات والتطبيقات المدفوعة •
⌯⁞ تنشر كل ما يخص مجال البرمجة والتطوير •

⌯⁞ قنوات ذات صلة ↯
⌯⁞ تيم مستر اكس مصر ⋙ @AX_GB⌯
ـ @O_1_W ⌯
*/