<?php
ob_start();
$token = "6749511649:AAHDCn5OacMtRgWL0xsqZh7icmBiQ7am2KI"; #توكن بوتك
define("API_KEY",$token);

echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$qqqqbqq = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$qqqqbqq";
$qqqqbqq = file_get_contents($url);
return json_decode($qqqqbqq);
} 
$sudo = 6750861107; #ايديك

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$name = $up->from->first_name;
$update = json_decode(file_get_contents("php://input"));
$message = $update->message;
$reply_id              = $message->reply_to_message->from->id;
$type = $message->chat->type;

$name = $message->from->first_name;
if(isset($update->callback_query)){

$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = $up->from->username;
$name = $up->from->first_name;
$message_id = $up->message->message_id;
$data = $up->data;
}

$setting = json_decode(file_get_contents("setting.json"),true);
if (!file_exists("setting.json")) {
#	$put = [];
$setting["twasl"]["type"]="✅";
$setting["twasl"]["replymod"]="✅";

$setting["twasl"]["modetext1"]="✅";
$setting["twasl"]["modetext2"]="✅";
$setting["twasl"]["modetext3"]="✅";
$setting["twasl"]["modetext4"]="✅";
$setting["twasl"]["modetext5"]="✅";
$setting["twasl"]["modetext6"]="✅";
$setting["twasl"]["modetext7"]="✅";
$setting["twasl"]["modetext8"]="✅";
$setting["twasl"]["modetext9"]="✅";
$setting["twasl"]["modetext10"]="✅";
file_put_contents("setting.json", json_encode($setting));
}
$replymod=$setting["twasl"]["replymod"];
$typeing=$setting["twasl"]["type"];


$modetext1 = $setting["twasl"]["modetext1"];
$modetext2= $setting["twasl"]["modetext2"];
$modetext3 = $setting["twasl"]["modetext3"];
$modetext4= $setting["twasl"]["modetext4"];
$modetext5= $setting["twasl"]["modetext5"];
$modetext6= $setting["twasl"]["modetext6"];
$modetext7= $setting["twasl"]["modetex7"];
$modetext8= $setting["twasl"]["modetext8"];
$modetext9= $setting["twasl"]["modetext9"];
$modetext10= $setting["twasl"]["modetext10"];

$photo=$message->photo;
$video=$message->video;
$document=$message->document;
$sticker=$message->sticker;
$voice=$message->voice;
$audio=$message->audio;

#send fic
#end
if($text == "/start" and $chat_id == $sudo) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"
◾️ إعدادات بوت التواصل ⚙️ .

▫️ ↴ يمكنك تغيير إعدادات البوت و تخصيص الإعدادات كم تريد .
",
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"جاري الكتابه : $typeing",'callback_data'=>"onbott"],["text"=>"رد علي الرسائل : $replymod","callback_data"=>"replymod"]],
       [['text'=>"تعين رساله الاستلام",'callback_data'=>"setstlsm"],['text'=>'تعين رساله الترحيب','callback_data'=>"setsta"]],
       [['text'=>"الوسائط الممنوعة",'callback_data'=>"man3er"]],
       ]
    ])
]);
$setting["twasl"]["moder"]="s";
file_put_contents("setting.json", json_encode($setting));
}

#man3
if($data == "photo" && $chat_id == $sudo){
$setting = json_decode(file_get_contents("setting.json"),true);
$join=$setting["twasl"]["modetext1"];
if($join=="✅"){
$setting["twasl"]["modetext1"]="❌";
}
if($join=="❌"){
$setting["twasl"]["modetext1"]="✅";
}
file_put_contents("setting.json", json_encode($setting));
sendBero($chat_id,$message_id);
}

if($data == "music" && $chat_id == $sudo){
$setting = json_decode(file_get_contents("setting.json"),true);
$join=$setting["twasl"]["modetext2"];
if($join=="✅"){
$setting["twasl"]["modetext2"]="❌";
}
if($join=="❌"){
$setting["twasl"]["modetext2"]="✅";
}
file_put_contents("setting.json", json_encode($setting));
sendBero($chat_id,$message_id);
}

if($data == "file" && $chat_id == $sudo){
$setting = json_decode(file_get_contents("setting.json"),true);
$join=$setting["twasl"]["modetext3"];
if($join=="✅"){
$setting["twasl"]["modetext3"]="❌";
}
if($join=="❌"){
$setting["twasl"]["modetext3"]="✅";
}
file_put_contents("setting.json", json_encode($setting));
sendBero($chat_id,$message_id);
}

if($data == "stick" && $chat_id == $sudo){
$setting = json_decode(file_get_contents("setting.json"),true);
$join=$setting["twasl"]["modetext4"];
if($join=="✅"){
$setting["twasl"]["modetext4"]="❌";
}
if($join=="❌"){
$setting["twasl"]["modetext4"]="✅";
}
file_put_contents("setting.json", json_encode($setting));
sendBero($chat_id,$message_id);
}

if($data == "video" && $chat_id == $sudo){
$setting = json_decode(file_get_contents("setting.json"),true);
$join=$setting["twasl"]["modetext5"];
if($join=="✅"){
$setting["twasl"]["modetext5"]="❌";
}
if($join=="❌"){
$setting["twasl"]["modetext5"]="✅";
}
file_put_contents("setting.json", json_encode($setting));
sendBero($chat_id,$message_id);
}

if($data == "mov" && $chat_id == $sudo){
$setting = json_decode(file_get_contents("setting.json"),true);
$join=$setting["twasl"]["modetext6"];
if($join=="✅"){
$setting["twasl"]["modetext6"]="❌";
}
if($join=="❌"){
$setting["twasl"]["modetext6"]="✅";
}
file_put_contents("setting.json", json_encode($setting));
sendBero($chat_id,$message_id);
}

if($data == "contact" && $chat_id == $sudo){
$setting = json_decode(file_get_contents("setting.json"),true);
$join=$setting["twasl"]["modetext7"];
if($join=="✅"){
$setting["twasl"]["modetext7"]="❌";
}
if($join=="❌"){
$setting["twasl"]["modetext7"]="✅";
}
file_put_contents("setting.json", json_encode($setting));
sendBero($chat_id,$message_id);
}

if($data == "i3ad" && $chat_id == $sudo){
$setting = json_decode(file_get_contents("setting.json"),true);
$join=$setting["twasl"]["modetext8"];
if($join=="✅"){
$setting["twasl"]["modetext8"]="❌";
}
if($join=="❌"){
$setting["twasl"]["modetext8"]="✅";
}
file_put_contents("setting.json", json_encode($setting));
sendBero($chat_id,$message_id);
}

if($data == "alllink" && $chat_id == $sudo){
$setting = json_decode(file_get_contents("setting.json"),true);
$join=$setting["twasl"]["modetext9"];
if($join=="✅"){
$setting["twasl"]["modetext9"]="❌";
}
if($join=="❌"){
$setting["twasl"]["modetext9"]="✅";
}
file_put_contents("setting.json", json_encode($setting));
sendBero($chat_id,$message_id);
}

if($data == "linktele" && $chat_id == $sudo){
$setting = json_decode(file_get_contents("setting.json"),true);
$join=$setting["twasl"]["modetext10"];
if($join=="✅"){
$setting["twasl"]["modetext10"]="❌";
}
if($join=="❌"){
$setting["twasl"]["modetext10"]="✅";
}
file_put_contents("setting.json", json_encode($setting));
sendBero($chat_id,$message_id);
}
#endman3
$modetext1 = $setting["twasl"]["modetext1"];
$modetext2= $setting["twasl"]["modetext2"];
$modetext3 = $setting["twasl"]["modetext3"];
$modetext4= $setting["twasl"]["modetext4"];
$modetext5= $setting["twasl"]["modetext5"];
$modetext6= $setting["twasl"]["modetext6"];
$modetext7= $setting["twasl"]["modetex7"];
$modetext8= $setting["twasl"]["modetext8"];
$modetext9= $setting["twasl"]["modetext9"];
$modetext10= $setting["twasl"]["modetext10"];
if($data == "man3er" && $chat_id == $sudo){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾️الوسائط الممنوع إرسالها لك  🚫.

〽️ ملاحظة:
🚫   =  تعني ( ✅  - يمنع إرسالها لك)
✅   =  تعني ( غير ✅ - مسموح إرسالها لك)
-
",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[["text"=>"الصور 🎑","callback_data"=>"photo"],["text"=>"$modetext1","callback_data"=>"null"]],
[["text"=>"الموسيقي 🔈","callback_data"=>"music"],["text"=>"$modetext2","callback_data"=>"null"]],
[["text"=>"الملفات 📁","callback_data"=>"file"],["text"=>"$modetext3","callback_data"=>"null"]],
[["text"=>"الملصقات 🎆 ","callback_data"=>"stick"],["text"=>"$modetext4","callback_data"=>"null"]],
[["text"=>"االفيديو 🎥","callback_data"=>"video"],["text"=>"$modetext5","callback_data"=>"null"]],
[["text"=>"الصوتيات 🎵","callback_data"=>"mov"],["text"=>"$modetext6","callback_data"=>"null"]],
[["text"=>"جهه الاتصال ☎","callback_data"=>"contact"],["text"=>"$modetext7","callback_data"=>"null"]],
[["text"=>"اعاده توجيه 🔄","callback_data"=>"i3ad"],["text"=>"$modetext8","callback_data"=>"null"]],
[["text"=>"جميع الروابط ➰","callback_data"=>"alllink"],["text"=>"$modetext9","callback_data"=>"null"]],
[["text"=>"روابط تيلجرام ➿","callback_data"=>"linktele"],["text"=>"$modetext10","callback_data"=>"null"]],

]])
  ]);
  $setting["twasl"]["moder"]="links";
file_put_contents("setting.json", json_encode($setting));
}

$he = $setting["twasl"]["moder"];
if($data== "photo"){
$setting = json_decode(file_get_contents("setting.json"),true);
$modetext1 = $setting["twasl"]["modetext1"];
$modetext2= $setting["twasl"]["modetext2"];
$modetext3 = $setting["twasl"]["modetext3"];
$modetext4= $setting["twasl"]["modetext4"];
$modetext5= $setting["twasl"]["modetext5"];
$modetext6= $setting["twasl"]["modetext6"];
$modetext7= $setting["twasl"]["modetex7"];
$modetext8= $setting["twasl"]["modetext8"];
$modetext9= $setting["twasl"]["modetext9"];
$modetext10= $setting["twasl"]["modetext10"];
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
◾️الوسائط الممنوع إرسالها لك  🚫.

〽️ ملاحظة:
🚫   =  تعني ( ✅  - يمنع إرسالها لك)
✅   =  تعني ( غير ✅ - مسموح إرسالها لك)
-g
",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[["text"=>"الصور 🎑","callback_data"=>"photo"],["text"=>"$modetext1","callback_data"=>"null"]],
[["text"=>"الموسيقي 🔈","callback_data"=>"music"],["text"=>"$modetext2","callback_data"=>"null"]],
[["text"=>"الملفات 📁","callback_data"=>"file"],["text"=>"$modetext3","callback_data"=>"null"]],
[["text"=>"الملصقات 🎆 ","callback_data"=>"stick"],["text"=>"$modetext4","callback_data"=>"null"]],
[["text"=>"االفيديو 🎥","callback_data"=>"video"],["text"=>"$modetext5","callback_data"=>"null"]],
[["text"=>"الصوتيات 🎵","callback_data"=>"mov"],["text"=>"$modetext6","callback_data"=>"null"]],
[["text"=>"جهه الاتصال ☎","callback_data"=>"contact"],["text"=>"$modetext7","callback_data"=>"null"]],
[["text"=>"اعاده توجيه 🔄","callback_data"=>"i3ad"],["text"=>"$modetext8","callback_data"=>"null"]],
[["text"=>"جميع الروابط ➰","callback_data"=>"alllink"],["text"=>"$modetext9","callback_data"=>"null"]],
[["text"=>"روابط تيلجرام ➿","callback_data"=>"linktele"],["text"=>"$modetext10","callback_data"=>"null"]],

]])
]);
}

if($data == "setstlsm" && $chat_id == $sudo){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
▫️ إرسل رسالة التسليم التي تريد:
▪️ يمكنك إستخدام الـMarkdown .
-
",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"تعطيل رسالة الاستلام",'callback_data'=>"offstlam"]],
[["text"=>"• رجوع •","callback_data"=>"back"]],
]])
  ]);
$setting["twasl"]["mode"]="set1";
file_put_contents("setting.json", json_encode($setting));
}

if($data == "offstlam" && $chat_id == $sudo){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
▫️ تم تعطيل رساله الستلام
-
",
  ]);
$setting["twasl"]["stlam"]= null;
$setting["twasl"]["mode"]=null;
file_put_contents("setting.json", json_encode($setting));
}

if($text and $setting["twasl"]["mode"]=="set1" && $chat_id == $sudo){
	bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"
$text
",
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"
🚫 تم إضافة ( رسالة تسليم ) إلى بوت التواصل الخاص بك .
▫️ مثل على رسالة التسليم .
",
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
'reply_markup'=>json_encode(['inline_keyboard'=>[

[["text"=>"• رجوع •","callback_data"=>"back"]],
]])
]);
$setting["twasl"]["stlam"]= $text;
$setting["twasl"]["mode"]=null;
file_put_contents("setting.json", json_encode($setting));
}

if($data == "setsta" && $chat_id == $sudo){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
▫️ إرسل رسالة الترحيب التي تريد:
▪️ يمكنك إستخدام الـMarkdown .
-
-
",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[["text"=>"• رجوع •","callback_data"=>"back"]],
]])
  ]);
$setting["twasl"]["mode"]="set2";
file_put_contents("setting.json", json_encode($setting));
}


if($text and $setting["twasl"]["mode"]=="set2" && $chat_id == $sudo){
	bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"
$text
",
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"
🚫 تم إضافة ( رساله ترحيب ) إلى بوت التواصل الخاص بك .
▫️ مثل على رسالة الترحيب .
",
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[["text"=>"• رجوع •","callback_data"=>"back"]],
]])
]);
$setting["twasl"]["start"]= $text;
$setting["twasl"]["mode"]=null;
file_put_contents("setting.json", json_encode($setting));
}

$he = $setting["twasl"]["moder"];
if($he== "s"){
function sendBero($chat_id,$message_id){
$setting = json_decode(file_get_contents("setting.json"),true);
$typeing=$setting["twasl"]["type"];
$replymod=$setting["twasl"]["replymod"];
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"
◾️ إعدادات بوت التواصل ⚙️ .

▫️ ↴ يمكنك تغيير إعدادات البوت و تخصيص الإعدادات كم تريد .
",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"جاري الكتابه : $typeing",'callback_data'=>"onbott"],["text"=>"رد علي الرسائل : $replymod","callback_data"=>"replymod"]],
       [['text'=>"تعين رساله الاستلام",'callback_data'=>"setstlsm"],['text'=>'تعين رساله الترحيب','callback_data'=>"setsta"]],
       [['text'=>"الوسائط الممنوعة",'callback_data'=>"man3er"]],
]])
]);
} 
}

if($data == "onbott" && $chat_id == $sudo){
$setting = json_decode(file_get_contents("setting.json"),true);
$join=$setting["twasl"]["type"];
if($join=="✅"){
$setting["twasl"]["type"]="❌";
}
if($join=="❌"){
$setting["twasl"]["type"]="✅";
}
file_put_contents("setting.json", json_encode($setting));
sendBero($chat_id,$message_id);
}

if($data == "replymod" && $chat_id == $sudo){
$setting = json_decode(file_get_contents("setting.json"),true);
$join=$setting["twasl"]["replymod"];
if($join=="✅"){
$setting["twasl"]["replymod"]="❌";
}
if($join=="❌"){
$setting["twasl"]["replymod"]="✅";
}
file_put_contents("setting.json", json_encode($setting));
sendBero($chat_id,$message_id);
}


	
if($text == "/start") {
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"
• اهلا بك ([$name](tg://user?id=$from_id)) في بوت التواصل الخاص بي ❤

- ارسل رسالتك الان لكي يتم ارسالها الى مدير البوت وسوف يرد عليك باقرب وقت 📢
",
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
]);
}

$stqbal = $setting["twasl"]["stlam"];
$type = $setting["twasl"]["type"];
if($text and $from_id != $sudo){
	if($setting["twasl"]["replymod"]=="❌"){
	bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"
$stqbal
",
]);
bot('forwardMessage',[
'chat_id'=>$sudo,
'from_chat_id'=>$chat_id,
  'message_id'=>$update->message->message_id,
'text'=>$text,
]);
}
}

if($text and $from_id != $sudo){
if($setting["twasl"]["replymod"]=="✅"){
	bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"
$stqbal
",
'reply_to_message_id'=>$message_id,
]);
bot('forwardMessage',[
'chat_id'=>$sudo,
'from_chat_id'=>$chat_id,
  'message_id'=>$update->message->message_id,
'text'=>$text,
]);
}
}




if($message->reply_to_message->forward_from->id and $chat_id == $sudo){
	if($setting["twasl"]["type"]=="✅"){
		bot('sendChatAction' , ['chat_id' =>$chat_id,
'action' => 'typing' ,
]);
    bot('sendMessage',[
       'chat_id'=>$message->reply_to_message->forward_from->id,
        'text'=>$text,
    ]);
    bot('sendmessage',[ 
       'chat_id'=>$sudo,
        'text'=>"
تم ارسال الرساله
",
]);
}
}

if($message->reply_to_message->forward_from->id and $chat_id == $sudo){
	if($setting["twasl"]["type"]=="❌"){
    bot('sendMessage',[
       'chat_id'=>$message->reply_to_message->forward_from->id,
        'text'=>$text,
    ]);
    bot('sendmessage',[ 
       'chat_id'=>$sudo,
        'text'=>"
تم ارسال الرساله
",
]);
}
}