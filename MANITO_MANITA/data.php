<?php
$name = $_GET['name'];
$phoneNumber = $_GET['phoneNumber'];
$department = $_GET['department'];

$phoneNumberArray[] = array('송경민' => '01085761798', '양시현' => '01022828947', '김태하'=>'01064242197', '박경빈' =>'01090089214', '신지우' => '01086916278', '박한희'=> '01044062741', '김민수' =>'01086651444', '안현준' =>'01083575315','이수호' =>'01030240598', '서동국' =>'01064153033','최민기' =>'01095800738', '김수연' =>'01093495377','박세연'=>'01033962404', '홍서정' => '01021284184', '김유빈' =>'01059554371', '구교빈' =>'01093528564','정원준'=> '01071854842', '정다우' =>'01043350144', '김민재' =>'01035008519', '송인서' => '01028858365', '강민준' =>'01084860335', '권해송' =>'01083432124', '김은향' =>'01083730772', '박준서' =>'01082705787', '김한나'=>'01093781386', '이호인' =>'01037010982' ,'김나연' =>'01082067529', '정윤영'=>'01074302466', '전선우'=>'01085402374' ,'김가은' =>'01065329559', '서지선' =>'01023065435', '김희연' => '01030025365', '임아리' => '01054832733', '황혜연' =>'01090399368', '송하원' =>'01091645915', '박지연' =>'01091468758' , '김규연' =>'01092187522', '권영서' =>'01065566252');

$story_members[] = array('권해송' => '최민기','최민기' => '정윤영', '정윤영' => '양시현', '양시현' => '김나연', '김나연' => '박경빈','박경빈' => '서지선','서지선' => '송경민', '송경민' => '김은향','김은향' => '김민수','김민수' => '송하원','송하원' =>'홍서정','홍서정' => '박준서','박준서' => '김태하','김태하' => '김규연','김규연' => '안현준', '안현준' => '이호인','이호인' =>'권영서', '권영서' => '이수호','이수호' => '김유빈','김유빈' =>'권해송');
$conference_members[] = array('전선우' =>'신지우', '신지우' => '강민준', '강민준' =>'정원준','정원준'=>'임아리', '임아리'=>'김민재', '김민재'=>'김한나', '김한나'=>'정다우','정다우'=>'김희연','김희연'=>'구교빈','구교빈'=>'박지연','박지연'=>'서동국','서동국'=>'황혜연','황혜연'=>'박한희','박한희'=>'김가은','김가은'=> '박세연','박세연'=>'김수연','김수연'=>'송인서','송인서' =>'전선우');
$members[] = array('권해송' => '최민기','최민기' => '정윤영', '정윤영' => '양시현', '양시현' => '김나연', '김나연' => '박경빈','박경빈' => '서지선','서지선' => '송경민', '송경민' => '김은향','김은향' => '김민수','김민수' => '송하원','송하원' =>'홍서정','홍서정' => '박준서','박준서' => '김태하','김태하' => '김규연','김규연' => '안현준', '안현준' => '이호인','이호인' =>'권영서', '권영서' => '이수호','이수호' => '김유빈','김유빈' =>'권해송', '전선우' =>'신지우', '신지우' => '강민준', '강민준' =>'정원준','정원준'=>'임아리', '임아리'=>'김민재', '김민재'=>'김한나', '김한나'=>'정다우','정다우'=>'김희연','김희연'=>'구교빈','구교빈'=>'박지연','박지연'=>'서동국','서동국'=>'황혜연','황혜연'=>'박한희','박한희'=>'김가은','김가은'=> '박세연','박세연'=>'김수연','김수연'=>'송인서','송인서' =>'전선우');

function nameCheck($userName, $userDepartment){
    global $story_members;
    global $conference_members;
    
    if(strcmp($userDepartment, 'story') == 0){
        foreach($story_members[0] as $key => $value) {
           
            if (strcmp($key, $userName) == 0){
                return true;
            }
        }
} else {
    foreach($conference_members[0] as $key => $value) {
  
        if (strcmp($key, $userName) == 0){

            return true;
        }
    }
}
}

function phoneNumberCheck($userName, $userPhoneNumber){
   global $phoneNumberArray;
    foreach($phoneNumberArray[0] as $key => $value) {
        if ((strcmp($key, $userName) == 0) && strcmp($value, $userPhoneNumber) == 0) {
            return true;
        }
    }
    return false;
}

if (nameCheck($name, $department ) && phoneNumberCheck($name, $phoneNumber)){
    print '
    <!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>2022-SNU-MUN-MANITO</title>
    <link rel="icon" href="./image/favicon.ico">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Gugi&family=Press+Start+2P&display=swap" rel="stylesheet"> <link rel="stylesheet" href="main.css" />
  </head>
  <body>
    <div class="wrapper">
      <header>
          <div class="banner">
    </div>
        <div> SNU_MUN <br/>MANITO -<br/>  MATCHING</div>

      </header>
      <main>
      <form method="get" action="./data.php" id="form">
      <div class="result">YOUR MANITO IS <br/></div>
      <img src="image/robot.png" class="result" alt="img"/>
      <div class="manito">';
      print
      $members[0][$name];
      print'
    </div>
    </form>
      </main>
      <script src="./main.js"></script>
  </body>
</html>';
} else {

 
    print '
    <!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>2022-SNU-MUN-MANITO</title>
    <link rel="icon" href="./image/favicon.ico">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Gugi&family=Press+Start+2P&display=swap" rel="stylesheet">    <link rel="stylesheet" href="main.css" />
  </head>
  <body>
    <div class="wrapper">
      <header>
          <div class="banner">
    </div>
        <div> SNU_MUN <br/>MANITO -<br/>  MATCHING</div>

      </header>
      <main>
      <form method="get" action="./data.php" id="form">
<div class="wrongMessageField">
<img src="image/game-over.png" alt="img"/>

</div>
</form>
<div><a href="./index.html" class="reinput">
HOME</a>
</div>
      </main>
      <script src="./main.js"></script>
  </body>
</html>';
}

?>

