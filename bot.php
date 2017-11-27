<?php
/*
copyright @ fataelislami.com
2017

*/

require_once('./line_class.php');
include "Reply.php";


$channelAccessToken = 'UFwJ5TwuHa4ReMq0eBBMBx+wxGdgEvdkPQefu9Zks8q1ZTqVpP9iWV1kxK4ou7q15pGohB/64ona5oOSr1/n8htkFyFF1Q80qtDaOTICrFq8Tx8KKK02+SLECtV5zjGbPMa2IqSA61g0MIifje9UQgdB04t89/1O/w1cDnyilFU='; //sesuaikan
$channelSecret = 'd420b3aad541588d127de69ec7d113b8';//sesuaikan

$client = new LINEBotTiny($channelAccessToken, $channelSecret);

$bls = new Reply();
//
var_dump($client->parseEvents());


$userId = $client->parseEvents()[0]['source']['userId'];
$groupId=$client->parseEvents()[0]['source']['groupId'];
$roomId=$client->parseEvents()[0]['source']['roomId'];
$replyToken = $client->parseEvents() [0]['replyToken'];
$timestamp =$client->parseEvents() [0]['timestamp'];
$message = $client->parseEvents() [0]['message'];
$postback=$client->parseEvents() [0]['postback'];
$messageid = $client->parseEvents() [0]['message']['id'];
$latitude= $client->parseEvents() [0]['message']['latitude'];
$longitude= $client->parseEvents() [0]['message']['longitude'];
$profil = $client->profil($userId);

//
$pesan_datang = $message['text'];
$post_datang= $message['postback'];
$upPesan = strtoupper($pesan_datang);

if($message['type'] == 'text') {

	if($upPesan=='TAJWID'){
		$balas = array(
        'replyToken' =>$replyToken ,
        'messages' =>array(
array (
  'type' => 'template',
  'altText' => 'this is a carousel template',
  'template' =>
  array (
    'type' => 'carousel',
    'columns' =>
    array (
      0 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/tajwid.jpg?attredirects=0&d=1',
        'title' => 'Hukum Membaca Nun Mati/Tanwin',
        'text' => '---',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Lihat',
            'text' => '1.1',
          ),
          1 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
          2 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
        ),
      ),
      1 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/tajwid.jpg?attredirects=0&d=1',
        'title' => 'Hukum Membaca Mim Mati',
        'text' => '---',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Lihat',
            'text' => '2.1',
          ),
          1 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=222',
          ),
          2 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=222',
          ),
        ),
      ),
            2 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/tajwid.jpg?attredirects=0&d=1',
        'title' => 'Qalqalah',
        'text' => '---',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Lihat',
            'text' => '3.1',
          ),
          1 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=222',
          ),
          2 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=222',
          ),
        ),
      ),
            3 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/tajwid.jpg?attredirects=0&d=1',
        'title' => 'Hukum Membaca Ra',
        'text' => '---',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Lihat',
            'text' => '4.1',
          ),
          1 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=222',
          ),
          2 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=222',
          ),
        ),
      ),
            4 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/tajwid.jpg?attredirects=0&d=1',
        'title' => 'Hukum Bacaan Maad',
        'text' => '---',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Lihat',
            'text' => '5.1',
          ),
          1 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=222',
          ),
          2 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=222',
          ),
        ),
      ),
            5 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/tajwid.jpg?attredirects=0&d=1',
        'title' => 'Hukum Bacaan Alif Lam',
        'text' => '---',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Lihat',
            'text' => '6.1',
          ),
          1 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=222',
          ),
          2 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=222',
          ),
        ),
      ),
            6 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/tajwid.jpg?attredirects=0&d=1',
        'title' => 'Tanda-tanda Waqaf',
        'text' => '---',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Lihat',
            'text' => '7.1',
          ),
          1 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=222',
          ),
          2 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=222',
          ),
        ),
      ),
    ),
  ),
)
        )
       );

	}else if($upPesan=='1.1'){
       $balas = array(
          'replyToken' =>$replyToken ,
          'messages' =>array(
           array (
  'type' => 'template',
  'altText' => 'this is a carousel template',
  'template' =>
  array (
    'type' => 'carousel',
    'columns' =>
    array (
      0 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/tajwid.jpg?attredirects=0&d=1',
        'title' => 'Izhar  (إظهار)',
        'text' => 'Nun mati/tanwin jika bertemu dengan huruf-huruf hijaiyyah.',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Lihat',
            'text' => 'IZHAR',
          ),
          1 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
          2 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
        ),
      ),
      1 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/tajwid.jpg?attredirects=0&d=1',
        'title' => 'Idgham  (إدغام)',
        'text' => 'Nun mati/tanwin jika bertemu dengan huruf-huruf hijaiyyah.',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Lihat',
            'text' => 'IDGHAM',
          ),
          1 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=222',
          ),
          2 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
        ),
      ),
       2 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/tajwid.jpg?attredirects=0&d=1',
        'title' => 'Iqlab  (إقلاب)',
        'text' => 'Nun mati/tanwin jika bertemu dengan huruf-huruf hijaiyyah.',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Lihat',
            'text' => 'IQLAB',
          ),
          1 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=222',
          ),
          2 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
        ),
      ),
       3 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/tajwid.jpg?attredirects=0&d=1',
        'title' => 'Ikhfa  (إخفاء)',
        'text' => 'Nun mati/tanwin jika bertemu dengan huruf-huruf hijaiyyah.',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Lihat',
            'text' => 'IKHFA',
          ),
          1 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=222',
          ),
          2 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
        ),
      ),
    ),
  ),
)
          )
        );
  }else if($upPesan=='2.1'){
       $balas = array(
          'replyToken' =>$replyToken ,
          'messages' =>array(
           array (
  'type' => 'template',
  'altText' => 'this is a carousel template',
  'template' =>
  array (
    'type' => 'carousel',
    'columns' =>
    array (
      0 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/tajwid.jpg?attredirects=0&d=1',
        'title' => 'Ikhfa Syafawi  (إخفاء سفوى)',
        'text' => 'Mim mati (مْ) bila bertemu dengan huruf hijaiyyah.',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Lihat',
            'text' => 'IKHFA SYAFAWI',
          ),
          1 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
          2 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
        ),
      ),
      1 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/tajwid.jpg?attredirects=0&d=1',
        'title' => 'Idgham Mimi  ( إدغام ميمى)',
        'text' => 'Mim mati (مْ) bila bertemu dengan huruf hijaiyyah.',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Lihat',
            'text' => 'IDGHAM MIMI',
          ),
          1 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=222',
          ),
          2 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
        ),
      ),
       2 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/tajwid.jpg?attredirects=0&d=1',
        'title' => 'Izhar Syafawi  (إظهار سفوى)',
        'text' => 'Mim mati (مْ) bila bertemu dengan huruf hijaiyyah.',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Lihat',
            'text' => 'IZHAR SYAFAWI',
          ),
          1 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=222',
          ),
          2 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
        ),
      ),

    ),
  ),
)
          )
        );
  }else if($upPesan=='3.1'){
       $balas = array(
          'replyToken' =>$replyToken ,
          'messages' =>array(
           array (
  'type' => 'template',
  'altText' => 'this is a carousel template',
  'template' =>
  array (
    'type' => 'carousel',
    'columns' =>
    array (
      0 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/tajwid.jpg?attredirects=0&d=1',
        'title' => 'Qalqalah',
        'text' => '---',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Pengertian Qalqalah',
            'text' => 'Pengertian Qalqalah',
          ),
          1 =>
          array (
            'type' => 'message',
            'label' => 'Qalqalah Kubra',
            'text' => 'Qalqalah Kubra',
          ),
          2 =>
          array (
            'type' => 'message',
            'label' => 'Qalqalah Sugra',
            'text' => 'Qalqalah Sugra',
          ),
        ),
      ),



    ),
  ),
)
          )
        );
  }else if($upPesan=='4.1'){
       $balas = array(
          'replyToken' =>$replyToken ,
          'messages' =>array(
           array (
  'type' => 'template',
  'altText' => 'this is a carousel template',
  'template' =>
  array (
    'type' => 'carousel',
    'columns' =>
    array (
      0 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/tajwid.jpg?attredirects=0&d=1',
        'title' => 'Hukum Membaca Ra',
        'text' => '---',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Ra dibaca Tafkhim',
            'text' => 'ra tafkhim',
          ),
          1 =>
          array (
            'type' => 'message',
            'label' => 'Ra dibaca tarqiq',
            'text' => 'ra tarqiq',
          ),
          2 =>
          array (
            'type' => 'message',
            'label' => 'Ra dibaca keduanya',
            'text' => 'ra tafkhim/tarqiq',
          ),
        ),
      ),
    ),
  ),
)
          )
        );
  }else if($upPesan=='5.1'){
       $balas = array(
          'replyToken' =>$replyToken ,
          'messages' =>array(
           array (
  'type' => 'template',
  'altText' => 'this is a carousel template',
  'template' =>
  array (
    'type' => 'carousel',
    'columns' =>
    array (
      0 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/tajwid.jpg?attredirects=0&d=1',
        'title' => 'Hukum Membaca Maad',
        'text' => '---',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Pengertian Maad',
            'text' => 'pengertian maad',
          ),
          1 =>
          array (
            'type' => 'message',
            'label' => 'Mad Ashli/thobi’i',
            'text' => 'mad ashli',
          ),
          2 =>
          array (
            'type' => 'message',
            'label' => 'Mad far`i',
            'text' => 'Mad far`i',
          ),
        ),
      ),
    ),
  ),
)
          )
        );
  }else if($upPesan=='6.1'){
       $balas = array(
          'replyToken' =>$replyToken ,
          'messages' =>array(
           array (
  'type' => 'template',
  'altText' => 'this is a carousel template',
  'template' =>
  array (
    'type' => 'carousel',
    'columns' =>
    array (
      0 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/tajwid.jpg?attredirects=0&d=1',
        'title' => 'Hukum Bacaan Alif Lam',
        'text' => '---',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Pengertian',
            'text' => 'pengertian Alif Lam',
          ),
          1 =>
          array (
            'type' => 'message',
            'label' => 'alif lam syamsiyah',
            'text' => '/alif lam syamsiyah',
          ),
          2 =>
          array (
            'type' => 'message',
            'label' => 'alif lam qamariyah',
            'text' => '/alif lam qamariyah',
          ),
        ),
      ),
    ),
  ),
)
          )
        );
  }else if($upPesan=='TAHSIN'){
       $balas = array(
          'replyToken' =>$replyToken ,
          'messages' =>array(
           array (
  'type' => 'template',
  'altText' => 'this is a carousel template',
  'template' =>
  array (
    'type' => 'carousel',
    'columns' =>
    array (
      0 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/tahsin.jpg?attredirects=0&d=1',
        'title' => 'Tahapan 1',
        'text' => 'Dasar-dasar Tahsin',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Lihat',
            'text' => 'Tahapan 1',
          ),
          1 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
          2 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
        ),
      ),
            1 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/tahsin.jpg?attredirects=0&d=1',
        'title' => 'Tahapan 2',
        'text' => 'Penyempurnaan Membaca(hukum tajwid)',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Lihat',
            'text' => 'Tahapan 2',
          ),
          1 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
          2 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
        ),
      ),
            2 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/tahsin.jpg?attredirects=0&d=1',
        'title' => 'Tahapan 3',
        'text' => 'Pengucapan Huruf hijaiyyah',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Lihat',
            'text' => 'Tahapan 3',
          ),
          1 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
          2 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
        ),
      ),
            3 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/tahsin.jpg?attredirects=0&d=1',
        'title' => 'Tahapan 4',
        'text' => 'Ayat-ayat Ghoribah',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Lihat',
            'text' => 'Tahapan 4',
          ),
          1 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
          2 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
        ),
      ),
    ),
  ),
)
          )
        );
  }else if($upPesan=='MAKHORIJUL HURUF'){
       $balas = array(
          'replyToken' =>$replyToken ,
          'messages' =>array(
           array (
  'type' => 'template',
  'altText' => 'this is a carousel template',
  'template' =>
  array (
    'type' => 'carousel',
    'columns' =>
    array (
      0 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/Makhorijul.jpg?attredirects=0&d=1',
        'title' => 'Al-Jauf (الجوف)',
        'text' => 'artinya rongga mulut dan rongga tenggorokan',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Lihat',
            'text' => '1.3',
          ),
          1 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
          2 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
        ),
      ),
            1 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/Makhorijul.jpg?attredirects=0&d=1',
        'title' => 'Al-Halqu (الحلق)',
        'text' => 'artinya tenggorokan/kerongkongan',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Lihat',
            'text' => '2.3',
          ),
          1 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
          2 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
        ),
      ),
            2 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/Makhorijul.jpg?attredirects=0&d=1',
        'title' => 'Al-Lisan(اللسان)',
        'text' => 'artinya lidah',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Lihat',
            'text' => '3.3',
          ),
          1 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
          2 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
        ),
      ),
            3 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/Makhorijul.jpg?attredirects=0&d=1',
        'title' => 'Asy-Syafatain (الشفتين)',
        'text' => 'artinya dua bibir',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Lihat',
            'text' => '4.3',
          ),
          1 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
          2 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
        ),
      ),
       4 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/Makhorijul.jpg?attredirects=0&d=1',
        'title' => 'Al-Khaisyum (الخيشوم)',
        'text' => 'Pangkal Hidung',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Lihat',
            'text' => '5.3',
          ),
          1 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
          2 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
        ),
      ),
    ),
  ),
)
          )
        );
  }else if($upPesan=='3.3'){
       $balas = array(
          'replyToken' =>$replyToken ,
          'messages' =>array(
           array (
  'type' => 'template',
  'altText' => 'this is a carousel template',
  'template' =>
  array (
    'type' => 'carousel',
    'columns' =>
    array (
      0 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/Makhorijul.jpg?attredirects=0&d=1',
        'title' => 'Al-Lisan(اللسان)',
        'text' => 'Artinya Lidah',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Penjelasan',
            'text' => 'Pengertian Al-Lisan',
          ),
          1 =>
          array (
            'type' => 'message',
            'label' => '1',
            'text' => '1/Al-lisan',
          ),
          2 =>
          array (
            'type' => 'message',
            'label' => '2',
            'text' => '2/Al-lisan',
          ),
        ),
      ),
            1 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/Makhorijul.jpg?attredirects=0&d=1',
        'title' => 'Al-Lisan(اللسان)',
        'text' => 'Artinya Lidah',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => '3',
            'text' => '3/Al-lisan',
          ),
          1 =>
          array (
            'type' => 'message',
            'label' => '4',
            'text' => '4/Al-lisan',
          ),
          2 =>
          array (
            'type' => 'message',
            'label' => '5',
            'text' => '5/Al-lisan',
          ),
        ),
      ),
            2 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/Makhorijul.jpg?attredirects=0&d=1',
        'title' => 'Al-Lisan(اللسان)',
        'text' => 'artinya Lidah',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => '6',
            'text' => '6/Al-lisan',
          ),
          1 =>
          array (
            'type' => 'message',
            'label' => '7',
            'text' => '7/Al-lisan',
          ),
          2 =>
          array (
            'type' => 'message',
            'label' => '8',
            'text' => '8/Al-lisan',
          ),
        ),
      ),
            3 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/Makhorijul.jpg?attredirects=0&d=1',
        'title' => 'Al-Lisan(اللسان)',
        'text' => 'Artinya Lidah',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => '9',
            'text' => '9/Al-lisan',
          ),
          1 =>
          array (
            'type' => 'message',
            'label' => '10',
            'text' => '10/Al-lisan',
          ),
          2 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
        ),
      ),

    ),
  ),
)
          )
        );
  }else if($upPesan=='LANGGAM'){
       $balas = array(
          'replyToken' =>$replyToken ,
          'messages' =>array(
array (
  'type' => 'template',
  'altText' => 'this is a carousel template',
  'template' =>
  array (
    'type' => 'carousel',
    'columns' =>
    array (
      0 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/Langgam.jpg?attredirects=0&d=1',
        'title' => 'Seni Membaca Al-qur`an',
        'text' => '---',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Peranan Tausyih',
            'text' => 'Peranan Tausyih',
          ),
          1 =>
          array (
            'type' => 'message',
            'label' => 'Maqamat',
            'text' => 'MAQAMAT',
          ),
        ),
      ),

    ),
  ),
)
          )
        );
  }else if($upPesan=='MAQAMAT'){
       $balas = array(
          'replyToken' =>$replyToken ,
          'messages' =>array(
           array (
  'type' => 'template',
  'altText' => 'this is a carousel template',
  'template' =>
  array (
    'type' => 'carousel',
    'columns' =>
    array (
            0 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/Langgam.jpg?attredirects=0&d=1',
        'title' => 'Bayati',
        'text' => '-',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Bayati?',
            'text' => '/bayati',
          ),
          1 =>
          array (
            'type' => 'message',
            'label' => 'Pilih Qori',
            'text' => 'qori/bayati',
          ),
        ),
      ),
            1 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/Langgam.jpg?attredirects=0&d=1',
        'title' => 'Shoba',
        'text' => '-',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Shoba?',
            'text' => '/shoba',
          ),
          1 =>
          array (
            'type' => 'message',
            'label' => 'Pilih Qori',
            'text' => 'qori/shoba',
          ),
        ),
      ),
            2 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/Langgam.jpg?attredirects=0&d=1',
        'title' => 'Nahawand',
        'text' => '-',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Nahawand?',
            'text' => '/nahawand',
          ),
          1 =>
          array (
            'type' => 'message',
            'label' => 'Pilih Qori',
            'text' => 'qori/nahawand',
          ),
        ),
      ),
            3 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/Langgam.jpg?attredirects=0&d=1',
        'title' => 'Hijaz',
        'text' => '-',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Hijaz?',
            'text' => '/hijaz',
          ),
          1 =>
          array (
            'type' => 'message',
            'label' => 'Pilih Qori',
            'text' => 'qori/hijaz',
          ),
        ),
      ),
                  4 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/Langgam.jpg?attredirects=0&d=1',
        'title' => 'Rost',
        'text' => '-',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Rost?',
            'text' => '/rost',
          ),
          1 =>
          array (
            'type' => 'message',
            'label' => 'Pilih Qori',
            'text' => 'qori/rost',
          ),
        ),
      ),
                  5 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/Langgam.jpg?attredirects=0&d=1',
        'title' => 'Sika',
        'text' => '-',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Sika?',
            'text' => '/sika',
          ),
          1 =>
          array (
            'type' => 'message',
            'label' => 'Pilih Qori',
            'text' => 'qori/sika',
          ),
        ),
      ),
                  6 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/Langgam.jpg?attredirects=0&d=1',
        'title' => 'Jiharka/`Ajam',
        'text' => '-',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Jiharka?',
            'text' => '/jiharka',
          ),
          1 =>
          array (
            'type' => 'message',
            'label' => 'Pilih Qori',
            'text' => 'qori/jiharka',
          ),
        ),
      ),
                        7 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/Langgam.jpg?attredirects=0&d=1',
        'title' => 'Kurdi',
        'text' => '-',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Kurdi?',
            'text' => '/Kurdi',
          ),
          1 =>
          array (
            'type' => 'message',
            'label' => 'Pilih Qori',
            'text' => 'qori/Kurdi',
          ),
        ),
      ),
    ),
  ),
)
          )
        );
  }else if($upPesan=='TAHAPAN 3'){
      $url='https://sites.google.com/site/shorfanadata/audio/Mengenal%20Makhorijul%20Khuruf.mp3?attredirects=0&d=1';
      $get_sub =array();
      $aa        = array(
          'type' => 'text',
          'text' => 'Penting sekali mengetahui bagaimana membaca huruf-huruf hijaaiyah sesuai dengan makhorujul huruf yaitu mengetahui tempat keluar huruf-huruf hijaaiyah'
      );
      array_push($get_sub, $aa);
      $get_sub[] = array(
      'type' => 'audio',
        'originalContentUrl' => $url,
        'duration' => 100000
      );
      $balas     = array(
        'replyToken' => $replyToken,
        'messages' => $get_sub
      );
  }else if($upPesan=='TAHAPAN 4'){
       $balas = array(
          'replyToken' =>$replyToken ,
          'messages' =>array(
           array (
  'type' => 'template',
  'altText' => 'this is a carousel template',
  'template' =>
  array (
    'type' => 'carousel',
    'columns' =>
    array (
      0 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/tahsin.jpg?attredirects=0&d=1',
        'title' => 'Ayat-ayat Ghoribah',
        'text' => '---',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Penjelasan',
            'text' => 'Pengertian Ghoribah',
          ),
          1 =>
          array (
            'type' => 'message',
            'label' => '1',
            'text' => '1/saktah',
          ),
          2 =>
          array (
            'type' => 'message',
            'label' => '2',
            'text' => '2/sadjah',
          ),
        ),
      ),
            1 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/tahsin.jpg?attredirects=0&d=1',
        'title' => 'Ayat-ayat Ghoribah',
        'text' => '-',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => '3',
            'text' => '3/amalah',
          ),
          1 =>
          array (
            'type' => 'message',
            'label' => '4',
            'text' => '4/isymam',
          ),
          2 =>
          array (
            'type' => 'message',
            'label' => '5',
            'text' => '5/naql',
          ),
        ),
      ),
            2 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/tahsin.jpg?attredirects=0&d=1',
        'title' => 'Ayat-ayat Ghoribah',
        'text' => '-',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => '6',
            'text' => '6/Tashil',
          ),
          1 =>
          array (
            'type' => 'message',
            'label' => '7',
            'text' => '7/Nun Wiqoyah',
          ),
          2 =>
          array (
            'type' => 'postback',
            'label' => '-',
            'data' => 'action=add&itemid=111',
          ),
        ),
      ),
    ),
  ),
)
          )
        );
  }else if($upPesan=='QORI/BAYATI'){
       $balas = array(
          'replyToken' =>$replyToken ,
          'messages' =>array(
array (
  'type' => 'template',
  'altText' => 'this is a image carousel template',
  'template' =>
  array (
    'type' => 'image_carousel',
    'columns' =>
    array (
      0 =>
      array (
        'imageUrl' => 'https://sites.google.com/site/shorfanadata/audio/muzammil.JPG?attredirects=0&d=1',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => 'MuzammilBayati',
        ),
      ),
      1 =>
      array (
        'imageUrl' => 'https://example.com/bot/images/item2.jpg',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => 'yes',
        ),
      ),
      2 =>
      array (
        'imageUrl' => 'https://example.com/bot/images/item3.jpg',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => 'http://example.com/page/222',
        ),
      ),
    ),
  ),
)
          )
        );
  }else if($upPesan=='QORI/SHOBA'){
       $balas = array(
          'replyToken' =>$replyToken ,
          'messages' =>array(
array (
  'type' => 'template',
  'altText' => 'this is a image carousel template',
  'template' =>
  array (
    'type' => 'image_carousel',
    'columns' =>
    array (
      0 =>
      array (
        'imageUrl' => 'https://sites.google.com/site/shorfanadata/audio/muzammil.JPG?attredirects=0&d=1',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => 'MuzammilShoba',
        ),
      ),
      1 =>
      array (
        'imageUrl' => 'https://example.com/bot/images/item2.jpg',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => 'yes',
        ),
      ),
      2 =>
      array (
        'imageUrl' => 'https://example.com/bot/images/item3.jpg',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => 'http://example.com/page/222',
        ),
      ),
    ),
  ),
)
          )
        );
  }else if($upPesan=='QORI/NAHAWAND'){
       $balas = array(
          'replyToken' =>$replyToken ,
          'messages' =>array(
array (
  'type' => 'template',
  'altText' => 'this is a image carousel template',
  'template' =>
  array (
    'type' => 'image_carousel',
    'columns' =>
    array (
      0 =>
      array (
        'imageUrl' => 'https://sites.google.com/site/shorfanadata/audio/muzammil.JPG?attredirects=0&d=1',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => 'MuzammilNahawand',
        ),
      ),
      1 =>
      array (
        'imageUrl' => 'https://example.com/bot/images/item2.jpg',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => 'yes',
        ),
      ),
      2 =>
      array (
        'imageUrl' => 'https://example.com/bot/images/item3.jpg',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => 'http://example.com/page/222',
        ),
      ),
    ),
  ),
)
          )
        );
  }else if($upPesan=='QORI/HIJAZ'){
       $balas = array(
          'replyToken' =>$replyToken ,
          'messages' =>array(
array (
  'type' => 'template',
  'altText' => 'this is a image carousel template',
  'template' =>
  array (
    'type' => 'image_carousel',
    'columns' =>
    array (
      0 =>
      array (
        'imageUrl' => 'https://sites.google.com/site/shorfanadata/audio/muzammil.JPG?attredirects=0&d=1',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => 'MuzammilHijaz',
        ),
      ),
      1 =>
      array (
        'imageUrl' => 'https://example.com/bot/images/item2.jpg',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => 'yes',
        ),
      ),
      2 =>
      array (
        'imageUrl' => 'https://example.com/bot/images/item3.jpg',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => 'http://example.com/page/222',
        ),
      ),
    ),
  ),
)
          )
        );
  }else if($upPesan=='QORI/ROST'){
       $balas = array(
          'replyToken' =>$replyToken ,
          'messages' =>array(
array (
  'type' => 'template',
  'altText' => 'this is a image carousel template',
  'template' =>
  array (
    'type' => 'image_carousel',
    'columns' =>
    array (
      0 =>
      array (
        'imageUrl' => 'https://sites.google.com/site/shorfanadata/audio/muzammil.JPG?attredirects=0&d=1',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => 'MuzammilRost',
        ),
      ),
      1 =>
      array (
        'imageUrl' => 'https://example.com/bot/images/item2.jpg',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => 'yes',
        ),
      ),
      2 =>
      array (
        'imageUrl' => 'https://example.com/bot/images/item3.jpg',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => 'http://example.com/page/222',
        ),
      ),
    ),
  ),
)
          )
        );
  }else if($upPesan=='QORI/SIKA'){
       $balas = array(
          'replyToken' =>$replyToken ,
          'messages' =>array(
array (
  'type' => 'template',
  'altText' => 'this is a image carousel template',
  'template' =>
  array (
    'type' => 'image_carousel',
    'columns' =>
    array (
      0 =>
      array (
        'imageUrl' => 'https://sites.google.com/site/shorfanadata/audio/muzammil.JPG?attredirects=0&d=1',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => 'MuzammilSika',
        ),
      ),
      1 =>
      array (
        'imageUrl' => 'https://example.com/bot/images/item2.jpg',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => 'yes',
        ),
      ),
      2 =>
      array (
        'imageUrl' => 'https://example.com/bot/images/item3.jpg',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => 'http://example.com/page/222',
        ),
      ),
    ),
  ),
)
          )
        );
  }else if($upPesan=='QORI/JIHARKA'){
       $balas = array(
          'replyToken' =>$replyToken ,
          'messages' =>array(
array (
  'type' => 'template',
  'altText' => 'this is a image carousel template',
  'template' =>
  array (
    'type' => 'image_carousel',
    'columns' =>
    array (
      0 =>
      array (
        'imageUrl' => 'https://sites.google.com/site/shorfanadata/audio/muzammil.JPG?attredirects=0&d=1',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => 'MuzammilJiharka',
        ),
      ),
      1 =>
      array (
        'imageUrl' => 'https://example.com/bot/images/item2.jpg',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => 'yes',
        ),
      ),
      2 =>
      array (
        'imageUrl' => 'https://example.com/bot/images/item3.jpg',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => 'http://example.com/page/222',
        ),
      ),
    ),
  ),
)
          )
        );
  }else if($upPesan=='QORI/KURDI'){
       $balas = array(
          'replyToken' =>$replyToken ,
          'messages' =>array(
array (
  'type' => 'template',
  'altText' => 'this is a image carousel template',
  'template' =>
  array (
    'type' => 'image_carousel',
    'columns' =>
    array (
      0 =>
      array (
        'imageUrl' => 'https://sites.google.com/site/shorfanadata/audio/muzammil.JPG?attredirects=0&d=1',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => 'MuzammilKurdi',
        ),
      ),
      1 =>
      array (
        'imageUrl' => 'https://example.com/bot/images/item2.jpg',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => 'yes',
        ),
      ),
      2 =>
      array (
        'imageUrl' => 'https://example.com/bot/images/item3.jpg',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => 'http://example.com/page/222',
        ),
      ),
    ),
  ),
)
          )
        );
  }else if($upPesan=='METODE HAFALAN'){
       $balas = array(
          'replyToken' =>$replyToken ,
          'messages' =>array(
           array (
  'type' => 'template',
  'altText' => 'this is a carousel template',
  'template' =>
  array (
    'type' => 'carousel',
    'columns' =>
    array (
      0 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/Hafalan.jpg?attredirects=0&d=1',
        'title' => 'Penyajian',
        'text' => 'Berupa Bacaan',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Lihat',
            'text' => '/Bacaan',
          ),
        ),
      ),

            1 =>
      array (
        'thumbnailImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/Hafalan.jpg?attredirects=0&d=1',
        'title' => 'Penyajian',
        'text' => 'Berupa Video',
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Lihat',
            'text' => '/VIDEOMETODEHAFALAN',
          ),
        ),
      ),
    ),
  ),
)
          )
        );
  }else if($upPesan=='/VIDEOMETODEHAFALAN'){
       $balas = array(
          'replyToken' =>$replyToken ,
          'messages' =>array(
array (
  'type' => 'template',
  'altText' => 'this is a image carousel template',
  'template' =>
  array (
    'type' => 'image_carousel',
    'columns' =>
    array (
      0 =>
      array (
        'imageUrl' => 'https://sites.google.com/site/shorfanadata/audio/downloadaaaaa.jpg?attredirects=0&d=1',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => '/USTADABDULSOMAD',
        ),
      ),
      1 =>
      array (
        'imageUrl' => 'https://sites.google.com/site/shorfanadata/audio/Screenshot_2.JPG?attredirects=0&d=1',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => '/MUZAMMIL',
        ),
      ),
      2 =>
      array (
        'imageUrl' => 'https://sites.google.com/site/shorfanadata/audio/syekhfahad.png?attredirects=0&d=1',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => '/SYEKHFAHAD',
        ),
      ),
    ),
  ),
)
          )
        );
  }else if($upPesan=='/BACAAN'){
       $balas = array(
          'replyToken' =>$replyToken ,
          'messages' =>array(
array (
  'type' => 'template',
  'altText' => 'this is a image carousel template',
  'template' =>
  array (
    'type' => 'image_carousel',
    'columns' =>
    array (
      0 =>
      array (
        'imageUrl' => 'https://sites.google.com/site/shorfanadata/audio/maxresdefault.jpg?attredirects=0&d=1',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => '/UstadAdiHidayat',
        ),
      ),
      1 =>
      array (
        'imageUrl' => 'https://sites.google.com/site/shorfanadata/audio/imam-masjidil-haram-syaikh-saad-alghamidi-kiri-mendengarkan-penjelasan-_130401001252-905.jpg?attredirects=0&d=1',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => '/UstadYusufMansyur',
        ),
      ),
      2 =>
      array (
        'imageUrl' => 'https://sites.google.com/site/shorfanadata/audio/Hafalan.jpg?attredirects=0&d=1',
        'action' =>
        array (
          'type' => 'message',
          'label' => 'Tab',
          'text' => '/UstadRony',
        ),
      ),
    ),
  ),
)
          )
        );
  }else if($upPesan=='/USTADABDULSOMAD'){
      $url='https://sites.google.com/site/shorfanadata/audio/Cara%20Menghapal%20Al%20Quran%20dengan%20Cepat%20-%20Ustadz%20Abdul%20Somad%2C%20Lc.%20MA.mp4?attredirects=0&d=1';
      $get_sub =array();

      array_push($get_sub);
      $get_sub[] = array(
        'type' => 'video',
        'originalContentUrl' => $url,
        'previewImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/downloadaaaaa.jpg?attredirects=0&d=1',
      );
      $balas     = array(
        'replyToken' => $replyToken,
        'messages' => $get_sub
      );
  }else if($upPesan=='/MUZAMMIL'){
      $url='https://sites.google.com/site/shorfanadata/audio/MuzammilTipsHafalQuran.mp4?attredirects=0&d=1';
      $get_sub =array();

      array_push($get_sub);
      $get_sub[] = array(
        'type' => 'video',
        'originalContentUrl' => $url,
        'previewImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/Screenshot_2.JPG?attredirects=0&d=1',
      );
      $balas     = array(
        'replyToken' => $replyToken,
        'messages' => $get_sub
      );
  }else if($upPesan=='/SYEKHFAHAD'){
    $url='https://sites.google.com/site/shorfanadata/audio/Rahasia%20khusus%20menguatkan%20hafalan%20Al%20Quran.mp4?attredirects=0&d=1';
    $get_sub =array();

    array_push($get_sub);
    $get_sub[] = array(
      'type' => 'video',
      'originalContentUrl' => $url,
      'previewImageUrl' => 'https://sites.google.com/site/shorfanadata/audio/syekhfahad.png?attredirects=0&d=1',
    );
    $balas     = array(
      'replyToken' => $replyToken,
      'messages' => $get_sub
    );
  }else if($upPesan=='/MENULAIN'){
		$balas = array(
			 'replyToken' =>$replyToken ,
			 'messages' =>array(
				 array (
				   'type' => 'template',
				   'altText' => 'this is a carousel template',
				   'template' =>
				   array (
				     'type' => 'carousel',
				     'columns' =>
				     array (
				       0 =>
				       array (
				         'thumbnailImageUrl' => 'https://example.com/bot/images/item1.jpg',
				         'title' => 'Menu lain',
				         'text' => 'Tab',
				         'actions' =>
				         array (
				           0 =>
				           array (
				             'type' => 'postback',
				             'label' => 'Buy',
				             'data' => 'action=buy&itemid=111',
				           ),
				           1 =>
				           array (
				             'type' => 'postback',
				             'label' => 'Add to cart',
				             'data' => 'action=add&itemid=111',
				           ),
				           2 =>
				           array (
				             'type' => 'uri',
				             'label' => 'View detail',
				             'uri' => 'http://example.com/page/111',
				           ),
				         ),
				       ),
				       1 =>
				       array (
				         'thumbnailImageUrl' => 'https://example.com/bot/images/item2.jpg',
				         'title' => 'Menu lain',
				         'text' => 'Tab',
				         'actions' =>
				         array (
				           0 =>
				           array (
				             'type' => 'postback',
				             'label' => 'Buy',
				             'data' => 'action=buy&itemid=222',
				           ),
				           1 =>
				           array (
				             'type' => 'postback',
				             'label' => 'Add to cart',
				             'data' => 'action=add&itemid=222',
				           ),
				           2 =>
				           array (
				             'type' => 'uri',
				             'label' => 'View detail',
				             'uri' => 'http://example.com/page/222',
				           ),
				         ),
				       ),
				     ),
				   ),
				 )
			 )
		);
	}
}




$result = json_encode($balas);

// $result = ob_get_clean();

file_put_contents('./balasan.json', $result);
$client->replyMessage($balas);

?>
</body>
</html>
