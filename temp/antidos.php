<?php

//------ Phần thông tin cần chỉnh sửa ---------------

$level = 2;				//Mức độ bảo vệ: 1: bảo vệ bình thường; 2: bảo vệ cao

// Nếu bạn chọn $level = 2 thì hãy điền tên miền của bạn ở phần sau:
$yoursite = "sim888.com";		//Nhập tên miền của website bạn - KHÔNG cần http://www.


/* Ok, giờ bạn có hai chọn lựa:
- Điều chỉnh bật/tắt chống ddos trực tiếp trên file này (1)
- Điều chỉnh bật/tắt chống ddos ở một file trên một host khác (2)
*/

$scheme = 1;		//Điền một trong hai số: 1: Chọn cách điều chỉnh thứ (1)	2: Chọn cách điều chỉnh thứ (2)

// Nếu bạn lựa chọn giải pháp (1) thì hãy edit phần này:
$antidos = 1;	//Nhập 1 để bật, 0 để tắt chống ddos

// Nếu bạn lựa chọn giải pháp (2) thì hãy edit phần này:
$determiner = "http://another.com/determiner.txt";		//Link tới file quy định bật/tắt chống ddos - Nếu bạn muốn bật chống ddos chỉ việc nhập vào nội dung file này số "1"


//Có thể chỉnh sửa phần sau hoặc để nguyên vậy cũng được
$redirect = "<br><br><br><br><center>Xin vui long click <a href='".$_SERVER['REQUEST_URI']."'>[ Vao` day ]</a> de toi Sim888.com. Mong ban thong cam vi su phien phuc nay!</center>";

// -------------- Hết phần thông tin cần chỉnh sửa - Không chỉnh sửa phần dưới!!! ------------


//##########################################
// ### Okie, chúng ta vào việc nào (-_-) ###
//##########################################

//Ok, định nghĩa mí cái function đã

function url_exists($url) {	
       $a_url = parse_url($url);
       if (!isset($a_url['port'])) $a_url['port'] = 80;
       $errno = 0;
       $errstr = '';
       $timeout = 30;
       if(isset($a_url['host']) && $a_url['host']!=gethostbyname($a_url['host'])){
           $fid = fsockopen($a_url['host'], $a_url['port'], $errno, $errstr, $timeout);
           if (!$fid) return false;
           $page = isset($a_url['path'])  ?$a_url['path']:'';
           $page .= isset($a_url['query'])?'?'.$a_url['query']:'';
           fputs($fid, 'HEAD '.$page.' HTTP/1.0'."\r\n".'Host: '.$a_url['host']."\r\n\r\n");
           $head = fread($fid, 4096);
           fclose($fid);
           return preg_match('#^HTTP/.*\s+[200|302]+\s#i', $head);
       } else {
           return false;
       }
}
   
   
function on_off($file) {	
	$string = file_get_contents($file);
	$fetch = strstr($string,"1");

	if ($fetch) {
	return true; 
	}

	else {
	return false;
	}
}

function level_1()	{
	global $antidos, $redirect;
	if($antidos){
		if(!$_SERVER['HTTP_REFERER'])	{
     		echo $redirect;
     		exit;
			}
		}
	}
	
function level_2() {
	global $antidos, $redirect, $yoursite;
	if($antidos){
		if(strpos($_SERVER['HTTP_REFERER'], 'http://www.'.$yoursite) !== 0)  {	
			if(strpos($_SERVER['HTTP_REFERER'], 'http://'.$yoursite) !== 0) {
     			echo $redirect;
     			exit;
				}
			}
		}
	}

// Done function definition ^_^


if($scheme == 1) {
	if($level == 1) level_1();
	elseif($level == 2) level_2();
	else { echo "Bạn phải chọn \$level = 1 hoặc \$level = 2"; exit; }
}

elseif($scheme == 2) {
	if (!url_exists($determiner))  	$antidos = 1;
	else   { $antidos = on_off($determiner); }
	
  	if($level == 1) level_1();
	elseif($level == 2) level_2();
	else { echo "Bạn phải chọn \$level = 1 hoặc \$level = 2"; exit; }
}

else {
	echo "Bạn phải chọn \$scheme = 1 hoặc \$scheme = 2";
	exit;
}

?>