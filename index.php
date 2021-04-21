<!DOCTYPE html>
<html lang="en">
<head>
   <title>COVID ONTARIO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      
        <style>
        nav{
            z-index: 10;
        }
        body {
  min-height: 100vh;
  overflow-x: hidden;
}
#firstrow{
    min-height: 100vh;
}
#provinces{
    min-height: 100vh;
}
#info{
    min-height: 100vh;
}
$faq{
    min-height: 100vh;
}
.circle {
  position: absolute;
  border-radius: 50%;
}
.circle:nth-child(1) {
  background: #990000;
  top: 63%;
  left: 43%;
  width: 35px;
  height: 35px;
  opacity: 0.17;
  -webkit-animation: float1 20s infinite linear;
          animation: float1 20s infinite linear;
}
.circle:nth-child(2) {
  background:  #ff6666;
  top: 66%;
  left: 34%;
  width: 44px;
  height: 44px;
  opacity: 0.39;
  -webkit-animation: float2 20s infinite linear;
          animation: float2 20s infinite linear;
}
.circle:nth-child(3) {
  background:  #e60000;
  top: 61%;
  left: 33%;
  width: 22px;
  height: 22px;
  opacity: 0.37;
  -webkit-animation: float3 20s infinite linear;
          animation: float3 20s infinite linear;
}
.circle:nth-child(4) {
  background:  #ff6666;
  top: 58%;
  left: 86%;
  width: 13px;
  height: 13px;
  opacity: 0.41;
  -webkit-animation: float4 20s infinite linear;
          animation: float4 20s infinite linear;
}
.circle:nth-child(5) {
  background: #e60000;
  top: 83%;
  left: 87%;
  width: 50px;
  height: 50px;
  opacity: 0.54;
  -webkit-animation: float5 20s infinite linear;
          animation: float5 20s infinite linear;
}
.circle:nth-child(6) {
  background:  #ff6666;
  top: 11%;
  left: 30%;
  width: 18px;
  height: 18px;
  opacity: 0.92;
  -webkit-animation: float6 20s infinite linear;
          animation: float6 20s infinite linear;
}
.circle:nth-child(7) {
background: #e60000;
  top: 41%;
  left: 98%;
  width: 22px;
  height: 22px;
  opacity: 0.75;
  -webkit-animation: float7 20s infinite linear;
          animation: float7 20s infinite linear;
}
.circle:nth-child(8) {
background: #e60000;
  top: 93%;
  left: 8%;
  width: 40px;
  height: 40px;
  opacity: 0.6;
  -webkit-animation: float8 20s infinite linear;
          animation: float8 20s infinite linear;
}
.circle:nth-child(9) {
  background: #bf5940;
  top: 46%;
  left: 85%;
  width: 69px;
  height: 69px;
  opacity: 0.22;
  -webkit-animation: float9 20s infinite linear;
          animation: float9 20s infinite linear;
}
.circle:nth-child(10) {
  background:  #ff6666;
  top: 78%;
  left: 68%;
  width: 42px;
  height: 42px;
  opacity: 0.36;
  -webkit-animation: float10 20s infinite linear;
          animation: float10 20s infinite linear;
}
.circle:nth-child(11) {
background: #e60000;
  top: 81%;
  left: 89%;
  width: 25px;
  height: 25px;
  opacity: 0.44;
  -webkit-animation: float11 20s infinite linear;
          animation: float11 20s infinite linear;
}
.circle:nth-child(12) {
background: #e60000;
  top: 52%;
  left: 46%;
  width: 22px;
  height: 22px;
  opacity: 0.26;
  -webkit-animation: float12 20s infinite linear;
          animation: float12 20s infinite linear;
}
.circle:nth-child(13) {
  background:  #ff6666;
  top: 49%;
  left: 55%;
  width: 31px;
  height: 31px;
  opacity: 0.19;
  -webkit-animation: float13 20s infinite linear;
          animation: float13 20s infinite linear;
}
.circle:nth-child(14) {
background: #e60000;
  top: 11%;
  left: 44%;
  width: 20px;
  height: 20px;
  opacity: 0.19;
  -webkit-animation: float14 20s infinite linear;
          animation: float14 20s infinite linear;
}
.circle:nth-child(15) {
background: #e60000;
  top: 94%;
  left: 20%;
  width: 7px;
  height: 7px;
  opacity: 0.16;
  -webkit-animation: float15 20s infinite linear;
          animation: float15 20s infinite linear;
}
.circle:nth-child(16) {
  background:  #ff6666;
  top: 62%;
  left: 45%;
  width: 33px;
  height: 33px;
  opacity: 0.3;
  -webkit-animation: float16 20s infinite linear;
          animation: float16 20s infinite linear;
}
.circle:nth-child(17) {
  background:  #ff6666;
  top: 8%;
  left: 8%;
  width: 15px;
  height: 15px;
  opacity: 0.19;
  -webkit-animation: float17 20s infinite linear;
          animation: float17 20s infinite linear;
}
.circle:nth-child(18) {
background: #e60000;
  top: 48%;
  left: 65%;
  width: 26px;
  height: 26px;
  opacity: 0.26;
  -webkit-animation: float18 20s infinite linear;
          animation: float18 20s infinite linear;
}
.circle:nth-child(19) {
  background:  #ff6666;
  top: 7%;
  left: 53%;
  width: 34px;
  height: 34px;
  opacity: 0.4;
  -webkit-animation: float19 20s infinite linear;
          animation: float19 20s infinite linear;
}
.circle:nth-child(20) {
background: #e60000;
  top: 66%;
  left: 57%;
  width: 45px;
  height: 45px;
  opacity: 0.32;
  -webkit-animation: float43 20s infinite linear;
          animation: float43 20s infinite linear;
}
.circle:nth-child(21) {
  background: #992600;
  top: 69%;
  left: 46%;
  width: 22px;
  height: 22px;
  opacity: 0.06;
  -webkit-animation: float21 20s infinite linear;
          animation: float21 20s infinite linear;
}
.circle:nth-child(22) {
  background:  #ff6666;
  top: 19%;
  left: 44%;
  width: 17px;
  height: 17px;
  opacity: 0.08;
  -webkit-animation: float22 20s infinite linear;
          animation: float22 20s infinite linear;
}
.circle:nth-child(23) {
  background: #992600;
  top: 18%;
  left: 40%;
  width: 33px;
  height: 33px;
  opacity: 0.31;
  -webkit-animation: float23 20s infinite linear;
          animation: float23 20s infinite linear;
}
.circle:nth-child(24) {
  background:  #ff6666;
  top: 73%;
  left: 58%;
  width: 22px;
  height: 22px;
  opacity: 0.15;
  -webkit-animation: float24 20s infinite linear;
          animation: float24 20s infinite linear;
}
.circle:nth-child(25) {
  background: #992600;
  top: 51%;
  left: 86%;
  width: 18px;
  height: 18px;
  opacity: 0.44;
  -webkit-animation: float25 20s infinite linear;
          animation: float25 20s infinite linear;
}
.circle:nth-child(26) {
  background:  #ff6666;
  top: 15%;
  left: 8%;
  width: 30px;
  height: 30px;
  opacity: 0.11;
  -webkit-animation: float26 20s infinite linear;
          animation: float26 20s infinite linear;
}
.circle:nth-child(27) {
  background:  #ff6666;
  top: 17%;
  left: 71%;
  width: 24px;
  height: 24px;
  opacity: 0.27;
  -webkit-animation: float16 20s infinite linear;
          animation: float16 20s infinite linear;
}
.circle:nth-child(28) {
background: #e60000;
  top: 76%;
  left: 47%;
  width: 13px;
  height: 13px;
  opacity: 0.44;
  -webkit-animation: float28 20s infinite linear;
          animation: float28 20s infinite linear;
}
.circle:nth-child(29) {
  background: #997300;
  top: 4%;
  left: 36%;
  width: 29px;
  height: 29px;
  opacity: 0.39;
  -webkit-animation: float29 20s infinite linear;
          animation: float29 20s infinite linear;
}
.circle:nth-child(30) {
background: #e60000;
  top: 82%;
  left: 79%;
  width: 25px;
  height: 25px;
  opacity: 0.36;
  -webkit-animation: float30 20s infinite linear;
          animation: float30 20s infinite linear;
}
.circle:nth-child(31) {
background: #997300;
  top: 92%;
  left: 52%;
  width: 35px;
  height: 35px;
  opacity: 0.17;
  -webkit-animation: float31 20s infinite linear;
          animation: float31 20s infinite linear;
}
.circle:nth-child(32) {
  background:  #cccccc;
  top: 97%;
  left: 95%;
  width: 20px;
  height: 20px;
  opacity: 0.25;
  -webkit-animation: float32 20s infinite linear;
          animation: float32 20s infinite linear;
}
.circle:nth-child(33) {
background: #997300;
  top: 80%;
  left: 54%;
  width: 15px;
  height: 15px;
  opacity: 0.18;
  -webkit-animation: float33 20s infinite linear;
          animation: float33 20s infinite linear;
}
.circle:nth-child(34) {
background:  #cccccc;
  top: 31%;
  left: 63%;
  width: 1px;
  height: 1px;
  opacity: 0.24;
  -webkit-animation: float31 20s infinite linear;
          animation: float31 20s infinite linear;
}
.circle:nth-child(35) {
background: #997300;
  top: 17%;
  left: 97%;
  width: 36px;
  height: 36px;
  opacity: 0.35;
  -webkit-animation: float35 20s infinite linear;
          animation: float35 20s infinite linear;
}
.circle:nth-child(36) {
background:  #cccccc;
  top: 54%;
  left: 12%;
  width: 9px;
  height: 9px;
  opacity: 0.41;
  -webkit-animation: float14 20s infinite linear;
          animation: float14 20s infinite linear;
}
.circle:nth-child(37) {
background: #997300;
  top: 91%;
  left: 61%;
  width: 18px;
  height: 18px;
  opacity: 0.32;
  -webkit-animation: float37 20s infinite linear;
          animation: float37 20s infinite linear;
}
.circle:nth-child(38) {
background: #997300;
  top: 21%;
  left: 35%;
  width: 26px;
  height: 26px;
  opacity: 0.37;
  -webkit-animation: float38 20s infinite linear;
          animation: float38 20s infinite linear;
}
.circle:nth-child(39) {
background:  #cccccc;
  top: 46%;
  left: 56%;
  width: 29px;
  height: 29px;
  opacity: 0.28;
  -webkit-animation: float39 20s infinite linear;
          animation: float39 20s infinite linear;
}
.circle:nth-child(40) {
background: #997300;
  top: 11%;
  left: 96%;
  width: 19px;
  height: 19px;
  opacity: 0.35;
  -webkit-animation: float40 20s infinite linear;
          animation: float40 20s infinite linear;
}
.circle:nth-child(41) {
background: #e60000;
  top: 16%;
  left: 50%;
  width: 10px;
  height: 10px;
  opacity: 0.48;
  -webkit-animation: float41 20s infinite linear;
          animation: float41 20s infinite linear;
}
.circle:nth-child(42) {
background: #e60000;
  top: 42%;
  left: 49%;
  width: 26px;
  height: 26px;
  opacity: 0.3;
  -webkit-animation: float42 20s infinite linear;
          animation: float42 20s infinite linear;
}
.circle:nth-child(43) {
background: #e60000;
  top: 68%;
  left: 92%;
  width: 10px;
  height: 10px;
  opacity: 0.18;
  -webkit-animation: float43 20s infinite linear;
          animation: float43 20s infinite linear;
}
.circle:nth-child(44) {
background: #e60000;
  top: 11%;
  left: 77%;
  width: 30px;
  height: 30px;
  opacity: 0.29;
  -webkit-animation: float44 20s infinite linear;
          animation: float44 20s infinite linear;
}
.circle:nth-child(45) {
  background: #e60000;
  top: 32%;
  left: 7%;
  width: 14px;
  height: 14px;
  opacity: 0.23;
  -webkit-animation: float45 20s infinite linear;
          animation: float45 20s infinite linear;
}
.circle:nth-child(46) {
  background: #867979;
  top: 46%;
  left: 95%;
  width: 12px;
  height: 12px;
  opacity: 0.22;
  -webkit-animation: float46 20s infinite linear;
          animation: float46 20s infinite linear;
}
.circle:nth-child(47) {
  background: #867979;
  top: 23%;
  left: 5%;
  width: 21px;
  height: 21px;
  opacity: 0.95;
  -webkit-animation: float47 20s infinite linear;
          animation: float47 20s infinite linear;
}
.circle:nth-child(48) {
  background: #867979;
  top: 25%;
  left: 75%;
  width: 4px;
  height: 4px;
  opacity: 0.14;
  -webkit-animation: float48 20s infinite linear;
          animation: float48 20s infinite linear;
}
.circle:nth-child(49) {
  background: #867979;
  top: 85%;
  left: 26%;
  width: 25px;
  height: 25px;
  opacity: 0.02;
  -webkit-animation: float49 20s infinite linear;
          animation: float49 20s infinite linear;
}
.circle:nth-child(50) {
background: #ec1313;
  top: 70%;
  left: 30%;
  width: 19px;
  height: 19px;
  opacity: 0.42;
  -webkit-animation: float50 20s infinite linear;
          animation: float50 20s infinite linear;
}
.circle:nth-child(51) {
  background: #ec1313;
  top: 37%;
  left: 29%;
  width: 28px;
  height: 28px;
  opacity: 0.53;
  -webkit-animation: float51 20s infinite linear;
          animation: float51 20s infinite linear;
}
.circle:nth-child(52) {
background: #ec1313;
  top: 74%;
  left: 56%;
  width: 33px;
  height: 33px;
  opacity: 0.33;
  -webkit-animation: float52 20s infinite linear;
          animation: float52 20s infinite linear;
}
.circle:nth-child(53) {
  background: #ec1313;
  top: 90%;
  left: 58%;
  width: 15px;
  height: 15px;
  opacity: 0.31;
  -webkit-animation: float53 20s infinite linear;
          animation: float53 20s infinite linear;
}
.circle:nth-child(54) {
background: #ec1313;
  top: 74%;
  left: 48%;
  width: 24px;
  height: 24px;
  opacity: 0.3;
  -webkit-animation: float54 20s infinite linear;
          animation: float54 20s infinite linear;
}
.circle:nth-child(55) {
  background: #ec1313;
  top: 80%;
  left: 48%;
  width: 36px;
  height: 36px;
  opacity: 0.42;
  -webkit-animation: float55 20s infinite linear;
          animation: float55 20s infinite linear;
}
.circle:nth-child(56) {
background: #996666;
  top: 22%;
  left: 19%;
  width: 17px;
  height: 17px;
  opacity: 0.6;
  -webkit-animation: float56 20s infinite linear;
          animation: float56 20s infinite linear;
}
.circle:nth-child(57) {
background: #ac5353;
  top: 60%;
  left: 58%;
  width: 22px;
  height: 22px;
  opacity: 0.58;
  -webkit-animation: float51 20s infinite linear;
          animation: float51 20s infinite linear;
}
.circle:nth-child(58) {
background: #996666;
  top: 11%;
  left: 83%;
  width: 34px;
  height: 34px;
  opacity: 0.7;
  -webkit-animation: float58 20s infinite linear;
          animation: float58 20s infinite linear;
}
.circle:nth-child(59) {
background: #ac5353;
  top: 88%;
  left: 43%;
  width: 15px;
  height: 15px;
  opacity: 0.49;
  -webkit-animation: float59 20s infinite linear;
          animation: float59 20s infinite linear;
}
.circle:nth-child(60) {
background: #996666;
  top: 7%;
  left: 17%;
  width: 30px;
  height: 30px;
  opacity: 0.29;
  -webkit-animation: float60 20s infinite linear;
          animation: float60 20s infinite linear;
}
.circle:nth-child(61) {
background: #ac5353;
top: 66%;
  left: 57%;
  width: 15px;
  height: 15px;
  opacity: 0.32;
  -webkit-animation: float43 20s infinite linear;
          animation: float43 20s infinite linear;
}
.circle:nth-child(62) {
  background: #996666;
  top: 56%;
  left: 81%;
  width: 26px;
  height: 26px;
  opacity: 0.42;
  -webkit-animation: float62 20s infinite linear;
          animation: float62 20s infinite linear;
}
.circle:nth-child(63) {
background: #ac5353;
  top: 50%;
  left: 90%;
  width: 20px;
  height: 20px;
  opacity: 0.44;
  -webkit-animation: float63 20s infinite linear;
          animation: float63 20s infinite linear;
}
.circle:nth-child(64) {
  background:  #cc0000;
  top: 37%;
  left: 5%;
  width: 34px;
  height: 34px;
  opacity: 0.35;
  -webkit-animation: float65 20s infinite linear;
          animation: float65 20s infinite linear;
}
.circle:nth-child(65) {
  background:  #ff3333;
  top: 74%;
  left: 36%;
  width: 22px;
  height: 22px;
  opacity: 0.27;
  -webkit-animation: float51 20s infinite linear;
          animation: float51 20s infinite linear;
}
.circle:nth-child(67) {
  background:  #cc0000;
  top: 37%;
  left: 91%;
  width: 12px;
  height: 12px;
  opacity: 0.13;
  -webkit-animation: float63 20s infinite linear;
          animation: float63 20s infinite linear;
}
.circle:nth-child(68) {
background:  #ff3333;
  top: 80%;
  left: 16%;
  width: 16px;
  height: 16px;
  opacity: 0.25;
  -webkit-animation: float68 20s infinite linear;
          animation: float68 20s infinite linear;
}
.circle:nth-child(69) {
  background:  #cc0000;
  top: 66%;
  left: 63%;
  width: 25px;
  height: 25px;
  opacity: 0.3;
  -webkit-animation: float69 20s infinite linear;
          animation: float69 20s infinite linear;
}
.circle:nth-child(70) {
background:  #ff3333;
  top: 90%;
  left: 57%;
  width: 17px;
  height: 17px;
  opacity: 0.66;
  -webkit-animation: float70 20s infinite linear;
          animation: float70 20s infinite linear;
}
.circle:nth-child(71) {
  background:  #cc0000;
  top: 5%;
  left: 65%;
  width: 31px;
  height: 31px;
  opacity: 0.2;
  -webkit-animation: float71 20s infinite linear;
          animation: float71 20s infinite linear;
}
.circle:nth-child(72) {
background:  #ff3333;
  top: 84%;
  left: 20%;
  width: 30px;
  height: 30px;
  opacity: 0.62;
  -webkit-animation: float72 20s infinite linear;
          animation: float72 20s infinite linear;
}
.circle:nth-child(73) {
  background: #ac5353;
  top: 86%;
  left: 94%;
  width: 24px;
  height: 24px;
  opacity: 0.2;
  -webkit-animation: float73 20s infinite linear;
          animation: float73 20s infinite linear;
}
.circle:nth-child(74) {
  background:  #cc0000;
  top: 87%;
  left: 86%;
  width: 34px;
  height: 34px;
  opacity: 0.38;
  -webkit-animation: float50 20s infinite linear;
          animation: float50 20s infinite linear;
}
.circle:nth-child(75) {
  background:  #cc0000;
  top: 68%;
  left: 21%;
  width: 28px;
  height: 28px;
  opacity: 0.2;
  -webkit-animation: float75 20s infinite linear;
          animation: float75 20s infinite linear;
}
@-webkit-keyframes float1 {
  40% {
    -webkit-transform: translateX(20px) translateY(62px);
            transform: translateX(20px) translateY(62px);
  }
  80% {
    -webkit-transform: translateX(148px) translateY(37px);
            transform: translateX(148px) translateY(37px);
  }
}

@keyframes float1 {
  40% {
    -webkit-transform: translateX(20px) translateY(62px);
            transform: translateX(20px) translateY(62px);
  }
  80% {
    -webkit-transform: translateX(148px) translateY(37px);
            transform: translateX(148px) translateY(37px);
  }
}
@-webkit-keyframes float2 {
  40% {
    -webkit-transform: translateX(65px) translateY(-134px);
            transform: translateX(65px) translateY(-134px);
  }
  80% {
    -webkit-transform: translateX(145px) translateY(191px);
            transform: translateX(145px) translateY(191px);
  }
}
@keyframes float2 {
  40% {
    -webkit-transform: translateX(65px) translateY(-134px);
            transform: translateX(65px) translateY(-134px);
  }
  80% {
    -webkit-transform: translateX(145px) translateY(191px);
            transform: translateX(145px) translateY(191px);
  }
}
@-webkit-keyframes float3 {
  40% {
    -webkit-transform: translateX(30px) translateY(-230px);
            transform: translateX(30px) translateY(-230px);
  }
  80% {
    -webkit-transform: translateX(28px) translateY(118px);
            transform: translateX(28px) translateY(118px);
  }
}
@keyframes float3 {
  40% {
    -webkit-transform: translateX(30px) translateY(-230px);
            transform: translateX(30px) translateY(-230px);
  }
  80% {
    -webkit-transform: translateX(28px) translateY(118px);
            transform: translateX(28px) translateY(118px);
  }
}
@-webkit-keyframes float4 {
  40% {
    -webkit-transform: translateX(17px) translateY(-275px);
            transform: translateX(17px) translateY(-275px);
  }
  80% {
    -webkit-transform: translateX(20px) translateY(10px);
            transform: translateX(20px) translateY(10px);
  }
}
@keyframes float4 {
  40% {
    -webkit-transform: translateX(17px) translateY(-275px);
            transform: translateX(17px) translateY(-275px);
  }
  80% {
    -webkit-transform: translateX(20px) translateY(10px);
            transform: translateX(20px) translateY(10px);
  }
}
@-webkit-keyframes float5 {
  40% {
    -webkit-transform: translateX(47px) translateY(-225px);
            transform: translateX(47px) translateY(-225px);
  }
  80% {
    -webkit-transform: translateX(6px) translateY(3px);
            transform: translateX(6px) translateY(3px);
  }
}
@keyframes float5 {
  40% {
    -webkit-transform: translateX(47px) translateY(-225px);
            transform: translateX(47px) translateY(-225px);
  }
  80% {
    -webkit-transform: translateX(6px) translateY(3px);
            transform: translateX(6px) translateY(3px);
  }
}
@-webkit-keyframes float6 {
  40% {
    -webkit-transform: translateX(80px) translateY(55px);
            transform: translateX(80px) translateY(55px);
  }
  80% {
    -webkit-transform: translateX(150px) translateY(235px);
            transform: translateX(150px) translateY(235px);
  }
}
@keyframes float6 {
  40% {
    -webkit-transform: translateX(80px) translateY(55px);
            transform: translateX(80px) translateY(55px);
  }
  80% {
    -webkit-transform: translateX(150px) translateY(235px);
            transform: translateX(150px) translateY(235px);
  }
}
@-webkit-keyframes float7 {
  40% {
    -webkit-transform: translateX(31px) translateY(-14px);
            transform: translateX(31px) translateY(-14px);
  }
  80% {
    -webkit-transform: translateX(31px) translateY(100px);
            transform: translateX(31px) translateY(100px);
  }
}
@keyframes float7 {
  40% {
    -webkit-transform: translateX(31px) translateY(-14px);
            transform: translateX(31px) translateY(-14px);
  }
  80% {
    -webkit-transform: translateX(31px) translateY(100px);
            transform: translateX(31px) translateY(100px);
  }
}
@-webkit-keyframes float8 {
  40% {
    -webkit-transform: translateX(22px) translateY(-190px);
            transform: translateX(22px) translateY(-190px);
  }
  80% {
    -webkit-transform: translateX(105px) translateY(77px);
            transform: translateX(105px) translateY(77px);
  }
}
@keyframes float8 {
  40% {
    -webkit-transform: translateX(22px) translateY(-190px);
            transform: translateX(22px) translateY(-190px);
  }
  80% {
    -webkit-transform: translateX(105px) translateY(77px);
            transform: translateX(105px) translateY(77px);
  }
}
@-webkit-keyframes float9 {
  40% {
    -webkit-transform: translateX(46px) translateY(-25px);
            transform: translateX(46px) translateY(-25px);
  }
  80% {
    -webkit-transform: translateX(115px) translateY(214px);
            transform: translateX(115px) translateY(214px);
  }
}
@keyframes float9 {
  40% {
    -webkit-transform: translateX(46px) translateY(-25px);
            transform: translateX(46px) translateY(-25px);
  }
  80% {
    -webkit-transform: translateX(115px) translateY(214px);
            transform: translateX(115px) translateY(214px);
  }
}
@-webkit-keyframes float10 {
  40% {
    -webkit-transform: translateX(23px) translateY(-52px);
            transform: translateX(23px) translateY(-52px);
  }
  80% {
    -webkit-transform: translateX(96px) translateY(114px);
            transform: translateX(96px) translateY(114px);
  }
}
@keyframes float10 {
  40% {
    -webkit-transform: translateX(23px) translateY(-52px);
            transform: translateX(23px) translateY(-52px);
  }
  80% {
    -webkit-transform: translateX(96px) translateY(114px);
            transform: translateX(96px) translateY(114px);
  }
}
@-webkit-keyframes float11 {
  40% {
    -webkit-transform: translateX(3px) translateY(-173px);
            transform: translateX(3px) translateY(-173px);
  }
  80% {
    -webkit-transform: translateX(107px) translateY(24px);
            transform: translateX(107px) translateY(24px);
  }
}
@keyframes float11 {
  40% {
    -webkit-transform: translateX(3px) translateY(-173px);
            transform: translateX(3px) translateY(-173px);
  }
  80% {
    -webkit-transform: translateX(107px) translateY(24px);
            transform: translateX(107px) translateY(24px);
  }
}
@-webkit-keyframes float12 {
  40% {
    -webkit-transform: translateX(60px) translateY(11px);
            transform: translateX(60px) translateY(11px);
  }
  80% {
    -webkit-transform: translateX(35px) translateY(-96px);
            transform: translateX(35px) translateY(-96px);
  }
}
@keyframes float12 {
  40% {
    -webkit-transform: translateX(60px) translateY(11px);
            transform: translateX(60px) translateY(11px);
  }
  80% {
    -webkit-transform: translateX(35px) translateY(-96px);
            transform: translateX(35px) translateY(-96px);
  }
}
@-webkit-keyframes float13 {
  40% {
    -webkit-transform: translateX(69px) translateY(-162px);
            transform: translateX(69px) translateY(-162px);
  }
  80% {
    -webkit-transform: translateX(-7px) translateY(196px);
            transform: translateX(-7px) translateY(196px);
  }
}
@keyframes float13 {
  40% {
    -webkit-transform: translateX(69px) translateY(-162px);
            transform: translateX(69px) translateY(-162px);
  }
  80% {
    -webkit-transform: translateX(-7px) translateY(196px);
            transform: translateX(-7px) translateY(196px);
  }
}
@-webkit-keyframes float14 {
  40% {
    -webkit-transform: translateX(9px) translateY(-146px);
            transform: translateX(9px) translateY(-146px);
  }
  80% {
    -webkit-transform: translateX(8px) translateY(5px);
            transform: translateX(8px) translateY(5px);
  }
}
@keyframes float14 {
  40% {
    -webkit-transform: translateX(9px) translateY(-146px);
            transform: translateX(9px) translateY(-146px);
  }
  80% {
    -webkit-transform: translateX(8px) translateY(5px);
            transform: translateX(8px) translateY(5px);
  }
}
@-webkit-keyframes float15 {
  40% {
    -webkit-transform: translateX(58px) translateY(-98px);
            transform: translateX(58px) translateY(-98px);
  }
  80% {
    -webkit-transform: translateX(37px) translateY(65px);
            transform: translateX(37px) translateY(65px);
  }
}
@keyframes float15 {
  40% {
    -webkit-transform: translateX(58px) translateY(-98px);
            transform: translateX(58px) translateY(-98px);
  }
  80% {
    -webkit-transform: translateX(37px) translateY(65px);
            transform: translateX(37px) translateY(65px);
  }
}
@-webkit-keyframes float16 {
  40% {
    -webkit-transform: translateX(-13px) translateY(-251px);
            transform: translateX(-13px) translateY(-251px);
  }
  80% {
    -webkit-transform: translateX(-4px) translateY(292px);
            transform: translateX(-4px) translateY(292px);
  }
}
@keyframes float16 {
  40% {
    -webkit-transform: translateX(-13px) translateY(-251px);
            transform: translateX(-13px) translateY(-251px);
  }
  80% {
    -webkit-transform: translateX(-4px) translateY(292px);
            transform: translateX(-4px) translateY(292px);
  }
}
@-webkit-keyframes float17 {
  40% {
    -webkit-transform: translateX(41px) translateY(64px);
            transform: translateX(41px) translateY(64px);
  }
  80% {
    -webkit-transform: translateX(10px) translateY(25px);
            transform: translateX(10px) translateY(25px);
  }
}
@keyframes float17 {
  40% {
    -webkit-transform: translateX(41px) translateY(64px);
            transform: translateX(41px) translateY(64px);
  }
  80% {
    -webkit-transform: translateX(10px) translateY(25px);
            transform: translateX(10px) translateY(25px);
  }
}
@-webkit-keyframes float18 {
  40% {
    -webkit-transform: translateX(34px) translateY(-271px);
            transform: translateX(34px) translateY(-271px);
  }
  80% {
    -webkit-transform: translateX(59px) translateY(277px);
            transform: translateX(59px) translateY(277px);
  }
}
@keyframes float18 {
  40% {
    -webkit-transform: translateX(34px) translateY(-271px);
            transform: translateX(34px) translateY(-271px);
  }
  80% {
    -webkit-transform: translateX(59px) translateY(277px);
            transform: translateX(59px) translateY(277px);
  }
}
@-webkit-keyframes float19 {
  40% {
    -webkit-transform: translateX(28px) translateY(73px);
            transform: translateX(28px) translateY(73px);
  }
  80% {
    -webkit-transform: translateX(55px) translateY(175px);
            transform: translateX(55px) translateY(175px);
  }
}
@keyframes float19 {
  40% {
    -webkit-transform: translateX(28px) translateY(73px);
            transform: translateX(28px) translateY(73px);
  }
  80% {
    -webkit-transform: translateX(55px) translateY(175px);
            transform: translateX(55px) translateY(175px);
  }
}
@-webkit-keyframes float20 {
  40% {
    -webkit-transform: translateX(37px) translateY(-248px);
            transform: translateX(37px) translateY(-248px);
  }
  80% {
    -webkit-transform: translateX(107px) translateY(254px);
            transform: translateX(107px) translateY(254px);
  }
}
@keyframes float20 {
  40% {
    -webkit-transform: translateX(37px) translateY(-248px);
            transform: translateX(37px) translateY(-248px);
  }
  80% {
    -webkit-transform: translateX(107px) translateY(254px);
            transform: translateX(107px) translateY(254px);
  }
}
@-webkit-keyframes float21 {
  40% {
    -webkit-transform: translateX(60px) translateY(55px);
            transform: translateX(60px) translateY(55px);
  }
  80% {
    -webkit-transform: translateX(-44px) translateY(66px);
            transform: translateX(-44px) translateY(66px);
  }
}
@keyframes float21 {
  40% {
    -webkit-transform: translateX(60px) translateY(55px);
            transform: translateX(60px) translateY(55px);
  }
  80% {
    -webkit-transform: translateX(-44px) translateY(66px);
            transform: translateX(-44px) translateY(66px);
  }
}
@-webkit-keyframes float22 {
  40% {
    -webkit-transform: translateX(49px) translateY(-251px);
            transform: translateX(49px) translateY(-251px);
  }
  80% {
    -webkit-transform: translateX(81px) translateY(-63px);
            transform: translateX(81px) translateY(-63px);
  }
}
@keyframes float22 {
  40% {
    -webkit-transform: translateX(49px) translateY(-251px);
            transform: translateX(49px) translateY(-251px);
  }
  80% {
    -webkit-transform: translateX(81px) translateY(-63px);
            transform: translateX(81px) translateY(-63px);
  }
}
@-webkit-keyframes float23 {
  40% {
    -webkit-transform: translateX(78px) translateY(-119px);
            transform: translateX(78px) translateY(-119px);
  }
  80% {
    -webkit-transform: translateX(11px) translateY(212px);
            transform: translateX(11px) translateY(212px);
  }
}
@keyframes float23 {
  40% {
    -webkit-transform: translateX(78px) translateY(-119px);
            transform: translateX(78px) translateY(-119px);
  }
  80% {
    -webkit-transform: translateX(11px) translateY(212px);
            transform: translateX(11px) translateY(212px);
  }
}
@-webkit-keyframes float24 {
  40% {
    -webkit-transform: translateX(7px) translateY(89px);
            transform: translateX(7px) translateY(89px);
  }
  80% {
    -webkit-transform: translateX(5px) translateY(109px);
            transform: translateX(5px) translateY(109px);
  }
}
@keyframes float24 {
  40% {
    -webkit-transform: translateX(7px) translateY(89px);
            transform: translateX(7px) translateY(89px);
  }
  80% {
    -webkit-transform: translateX(5px) translateY(109px);
            transform: translateX(5px) translateY(109px);
  }
}
@-webkit-keyframes float25 {
  40% {
    -webkit-transform: translateX(52px) translateY(80px);
            transform: translateX(52px) translateY(80px);
  }
  80% {
    -webkit-transform: translateX(116px) translateY(71px);
            transform: translateX(116px) translateY(71px);
  }
}
@keyframes float25 {
  40% {
    -webkit-transform: translateX(52px) translateY(80px);
            transform: translateX(52px) translateY(80px);
  }
  80% {
    -webkit-transform: translateX(116px) translateY(71px);
            transform: translateX(116px) translateY(71px);
  }
}
@-webkit-keyframes float26 {
  40% {
    -webkit-transform: translateX(23px) translateY(-252px);
            transform: translateX(23px) translateY(-252px);
  }
  80% {
    -webkit-transform: translateX(-9px) translateY(-23px);
            transform: translateX(-9px) translateY(-23px);
  }
}
@keyframes float26 {
  40% {
    -webkit-transform: translateX(23px) translateY(-252px);
            transform: translateX(23px) translateY(-252px);
  }
  80% {
    -webkit-transform: translateX(-9px) translateY(-23px);
            transform: translateX(-9px) translateY(-23px);
  }
}
@-webkit-keyframes float27 {
  40% {
    -webkit-transform: translateX(22px) translateY(-51px);
            transform: translateX(22px) translateY(-51px);
  }
  80% {
    -webkit-transform: translateX(-35px) translateY(-56px);
            transform: translateX(-35px) translateY(-56px);
  }
}
@keyframes float27 {
  40% {
    -webkit-transform: translateX(22px) translateY(-51px);
            transform: translateX(22px) translateY(-51px);
  }
  80% {
    -webkit-transform: translateX(-35px) translateY(-56px);
            transform: translateX(-35px) translateY(-56px);
  }
}
@-webkit-keyframes float28 {
  40% {
    -webkit-transform: translateX(38px) translateY(-99px);
            transform: translateX(38px) translateY(-99px);
  }
  80% {
    -webkit-transform: translateX(-12px) translateY(144px);
            transform: translateX(-12px) translateY(144px);
  }
}
@keyframes float28 {
  40% {
    -webkit-transform: translateX(38px) translateY(-99px);
            transform: translateX(38px) translateY(-99px);
  }
  80% {
    -webkit-transform: translateX(-12px) translateY(144px);
            transform: translateX(-12px) translateY(144px);
  }
}
@-webkit-keyframes float29 {
  40% {
    -webkit-transform: translateX(51px) translateY(39px);
            transform: translateX(51px) translateY(39px);
  }
  80% {
    -webkit-transform: translateX(137px) translateY(269px);
            transform: translateX(137px) translateY(269px);
  }
}
@keyframes float29 {
  40% {
    -webkit-transform: translateX(51px) translateY(39px);
            transform: translateX(51px) translateY(39px);
  }
  80% {
    -webkit-transform: translateX(137px) translateY(269px);
            transform: translateX(137px) translateY(269px);
  }
}
@-webkit-keyframes float30 {
  40% {
    -webkit-transform: translateX(-3px) translateY(0px);
            transform: translateX(-3px) translateY(0px);
  }
  80% {
    -webkit-transform: translateX(110px) translateY(50px);
            transform: translateX(110px) translateY(50px);
  }
}
@keyframes float30 {
  40% {
    -webkit-transform: translateX(-3px) translateY(0px);
            transform: translateX(-3px) translateY(0px);
  }
  80% {
    -webkit-transform: translateX(110px) translateY(50px);
            transform: translateX(110px) translateY(50px);
  }
}
@-webkit-keyframes float31 {
  40% {
    -webkit-transform: translateX(59px) translateY(-207px);
            transform: translateX(59px) translateY(-207px);
  }
  80% {
    -webkit-transform: translateX(-12px) translateY(-51px);
            transform: translateX(-12px) translateY(-51px);
  }
}
@keyframes float31 {
  40% {
    -webkit-transform: translateX(59px) translateY(-207px);
            transform: translateX(59px) translateY(-207px);
  }
  80% {
    -webkit-transform: translateX(-12px) translateY(-51px);
            transform: translateX(-12px) translateY(-51px);
  }
}
@-webkit-keyframes float32 {
  40% {
    -webkit-transform: translateX(-10px) translateY(-123px);
            transform: translateX(-10px) translateY(-123px);
  }
  80% {
    -webkit-transform: translateX(-13px) translateY(179px);
            transform: translateX(-13px) translateY(179px);
  }
}
@keyframes float32 {
  40% {
    -webkit-transform: translateX(-10px) translateY(-123px);
            transform: translateX(-10px) translateY(-123px);
  }
  80% {
    -webkit-transform: translateX(-13px) translateY(179px);
            transform: translateX(-13px) translateY(179px);
  }
}
@-webkit-keyframes float33 {
  40% {
    -webkit-transform: translateX(67px) translateY(-34px);
            transform: translateX(67px) translateY(-34px);
  }
  80% {
    -webkit-transform: translateX(74px) translateY(50px);
            transform: translateX(74px) translateY(50px);
  }
}
@keyframes float33 {
  40% {
    -webkit-transform: translateX(67px) translateY(-34px);
            transform: translateX(67px) translateY(-34px);
  }
  80% {
    -webkit-transform: translateX(74px) translateY(50px);
            transform: translateX(74px) translateY(50px);
  }
}
@-webkit-keyframes float34 {
  40% {
    -webkit-transform: translateX(-19px) translateY(-273px);
            transform: translateX(-19px) translateY(-273px);
  }
  80% {
    -webkit-transform: translateX(-47px) translateY(111px);
            transform: translateX(-47px) translateY(111px);
  }
}
@keyframes float34 {
  40% {
    -webkit-transform: translateX(-19px) translateY(-273px);
            transform: translateX(-19px) translateY(-273px);
  }
  80% {
    -webkit-transform: translateX(-47px) translateY(111px);
            transform: translateX(-47px) translateY(111px);
  }
}
@-webkit-keyframes float35 {
  40% {
    -webkit-transform: translateX(43px) translateY(26px);
            transform: translateX(43px) translateY(26px);
  }
  80% {
    -webkit-transform: translateX(-3px) translateY(299px);
            transform: translateX(-3px) translateY(299px);
  }
}
@keyframes float35 {
  40% {
    -webkit-transform: translateX(43px) translateY(26px);
            transform: translateX(43px) translateY(26px);
  }
  80% {
    -webkit-transform: translateX(-3px) translateY(299px);
            transform: translateX(-3px) translateY(299px);
  }
}
@-webkit-keyframes float36 {
  40% {
    -webkit-transform: translateX(-14px) translateY(-242px);
            transform: translateX(-14px) translateY(-242px);
  }
  80% {
    -webkit-transform: translateX(-32px) translateY(172px);
            transform: translateX(-32px) translateY(172px);
  }
}
@keyframes float36 {
  40% {
    -webkit-transform: translateX(-14px) translateY(-242px);
            transform: translateX(-14px) translateY(-242px);
  }
  80% {
    -webkit-transform: translateX(-32px) translateY(172px);
            transform: translateX(-32px) translateY(172px);
  }
}
@-webkit-keyframes float37 {
  40% {
    -webkit-transform: translateX(36px) translateY(95px);
            transform: translateX(36px) translateY(95px);
  }
  80% {
    -webkit-transform: translateX(82px) translateY(187px);
            transform: translateX(82px) translateY(187px);
  }
}
@keyframes float37 {
  40% {
    -webkit-transform: translateX(36px) translateY(95px);
            transform: translateX(36px) translateY(95px);
  }
  80% {
    -webkit-transform: translateX(82px) translateY(187px);
            transform: translateX(82px) translateY(187px);
  }
}
@-webkit-keyframes float38 {
  40% {
    -webkit-transform: translateX(31px) translateY(47px);
            transform: translateX(31px) translateY(47px);
  }
  80% {
    -webkit-transform: translateX(-36px) translateY(18px);
            transform: translateX(-36px) translateY(18px);
  }
}
@keyframes float38 {
  40% {
    -webkit-transform: translateX(31px) translateY(47px);
            transform: translateX(31px) translateY(47px);
  }
  80% {
    -webkit-transform: translateX(-36px) translateY(18px);
            transform: translateX(-36px) translateY(18px);
  }
}
@-webkit-keyframes float39 {
  40% {
    -webkit-transform: translateX(74px) translateY(-293px);
            transform: translateX(74px) translateY(-293px);
  }
  80% {
    -webkit-transform: translateX(-20px) translateY(36px);
            transform: translateX(-20px) translateY(36px);
  }
}
@keyframes float39 {
  40% {
    -webkit-transform: translateX(74px) translateY(-293px);
            transform: translateX(74px) translateY(-293px);
  }
  80% {
    -webkit-transform: translateX(-20px) translateY(36px);
            transform: translateX(-20px) translateY(36px);
  }
}
@-webkit-keyframes float40 {
  40% {
    -webkit-transform: translateX(64px) translateY(-202px);
            transform: translateX(64px) translateY(-202px);
  }
  80% {
    -webkit-transform: translateX(74px) translateY(105px);
            transform: translateX(74px) translateY(105px);
  }
}
@keyframes float40 {
  40% {
    -webkit-transform: translateX(64px) translateY(-202px);
            transform: translateX(64px) translateY(-202px);
  }
  80% {
    -webkit-transform: translateX(74px) translateY(105px);
            transform: translateX(74px) translateY(105px);
  }
}
@-webkit-keyframes float41 {
  40% {
    -webkit-transform: translateX(-18px) translateY(-210px);
            transform: translateX(-18px) translateY(-210px);
  }
  80% {
    -webkit-transform: translateX(132px) translateY(43px);
            transform: translateX(132px) translateY(43px);
  }
}
@keyframes float41 {
  40% {
    -webkit-transform: translateX(-18px) translateY(-210px);
            transform: translateX(-18px) translateY(-210px);
  }
  80% {
    -webkit-transform: translateX(132px) translateY(43px);
            transform: translateX(132px) translateY(43px);
  }
}
@-webkit-keyframes float42 {
  40% {
    -webkit-transform: translateX(15px) translateY(-46px);
            transform: translateX(15px) translateY(-46px);
  }
  80% {
    -webkit-transform: translateX(-13px) translateY(76px);
            transform: translateX(-13px) translateY(76px);
  }
}
@keyframes float42 {
  40% {
    -webkit-transform: translateX(15px) translateY(-46px);
            transform: translateX(15px) translateY(-46px);
  }
  80% {
    -webkit-transform: translateX(-13px) translateY(76px);
            transform: translateX(-13px) translateY(76px);
  }
}
@-webkit-keyframes float43 {
  40% {
    -webkit-transform: translateX(-1px) translateY(47px);
            transform: translateX(-1px) translateY(47px);
  }
  80% {
    -webkit-transform: translateX(3px) translateY(-84px);
            transform: translateX(3px) translateY(-84px);
  }
}
@keyframes float43 {
  40% {
    -webkit-transform: translateX(-1px) translateY(47px);
            transform: translateX(-1px) translateY(47px);
  }
  80% {
    -webkit-transform: translateX(3px) translateY(-84px);
            transform: translateX(3px) translateY(-84px);
  }
}
@-webkit-keyframes float44 {
  40% {
    -webkit-transform: translateX(28px) translateY(7px);
            transform: translateX(28px) translateY(7px);
  }
  80% {
    -webkit-transform: translateX(-4px) translateY(273px);
            transform: translateX(-4px) translateY(273px);
  }
}
@keyframes float44 {
  40% {
    -webkit-transform: translateX(28px) translateY(7px);
            transform: translateX(28px) translateY(7px);
  }
  80% {
    -webkit-transform: translateX(-4px) translateY(273px);
            transform: translateX(-4px) translateY(273px);
  }
}
@-webkit-keyframes float45 {
  40% {
    -webkit-transform: translateX(37px) translateY(61px);
            transform: translateX(37px) translateY(61px);
  }
  80% {
    -webkit-transform: translateX(-35px) translateY(244px);
            transform: translateX(-35px) translateY(244px);
  }
}
@keyframes float45 {
  40% {
    -webkit-transform: translateX(37px) translateY(61px);
            transform: translateX(37px) translateY(61px);
  }
  80% {
    -webkit-transform: translateX(-35px) translateY(244px);
            transform: translateX(-35px) translateY(244px);
  }
}
@-webkit-keyframes float46 {
  40% {
    -webkit-transform: translateX(44px) translateY(-42px);
            transform: translateX(44px) translateY(-42px);
  }
  80% {
    -webkit-transform: translateX(-31px) translateY(282px);
            transform: translateX(-31px) translateY(282px);
  }
}
@keyframes float46 {
  40% {
    -webkit-transform: translateX(44px) translateY(-42px);
            transform: translateX(44px) translateY(-42px);
  }
  80% {
    -webkit-transform: translateX(-31px) translateY(282px);
            transform: translateX(-31px) translateY(282px);
  }
}
@-webkit-keyframes float47 {
  40% {
    -webkit-transform: translateX(9px) translateY(53px);
            transform: translateX(9px) translateY(53px);
  }
  80% {
    -webkit-transform: translateX(82px) translateY(160px);
            transform: translateX(82px) translateY(160px);
  }
}
@keyframes float47 {
  40% {
    -webkit-transform: translateX(9px) translateY(53px);
            transform: translateX(9px) translateY(53px);
  }
  80% {
    -webkit-transform: translateX(82px) translateY(160px);
            transform: translateX(82px) translateY(160px);
  }
}
@-webkit-keyframes float48 {
  40% {
    -webkit-transform: translateX(39px) translateY(-202px);
            transform: translateX(39px) translateY(-202px);
  }
  80% {
    -webkit-transform: translateX(50px) translateY(130px);
            transform: translateX(50px) translateY(130px);
  }
}
@keyframes float48 {
  40% {
    -webkit-transform: translateX(39px) translateY(-202px);
            transform: translateX(39px) translateY(-202px);
  }
  80% {
    -webkit-transform: translateX(50px) translateY(130px);
            transform: translateX(50px) translateY(130px);
  }
}
@-webkit-keyframes float49 {
  40% {
    -webkit-transform: translateX(38px) translateY(-294px);
            transform: translateX(38px) translateY(-294px);
  }
  80% {
    -webkit-transform: translateX(56px) translateY(67px);
            transform: translateX(56px) translateY(67px);
  }
}
@keyframes float49 {
  40% {
    -webkit-transform: translateX(38px) translateY(-294px);
            transform: translateX(38px) translateY(-294px);
  }
  80% {
    -webkit-transform: translateX(56px) translateY(67px);
            transform: translateX(56px) translateY(67px);
  }
}
@-webkit-keyframes float50 {
  40% {
    -webkit-transform: translateX(22px) translateY(45px);
            transform: translateX(22px) translateY(45px);
  }
  80% {
    -webkit-transform: translateX(70px) translateY(39px);
            transform: translateX(70px) translateY(39px);
  }
}
@keyframes float50 {
  40% {
    -webkit-transform: translateX(22px) translateY(45px);
            transform: translateX(22px) translateY(45px);
  }
  80% {
    -webkit-transform: translateX(70px) translateY(39px);
            transform: translateX(70px) translateY(39px);
  }
}
@-webkit-keyframes float51 {
  40% {
    -webkit-transform: translateX(41px) translateY(-252px);
            transform: translateX(41px) translateY(-252px);
  }
  80% {
    -webkit-transform: translateX(34px) translateY(4px);
            transform: translateX(34px) translateY(4px);
  }
}
@keyframes float51 {
  40% {
    -webkit-transform: translateX(41px) translateY(-252px);
            transform: translateX(41px) translateY(-252px);
  }
  80% {
    -webkit-transform: translateX(34px) translateY(4px);
            transform: translateX(34px) translateY(4px);
  }
}
@-webkit-keyframes float52 {
  40% {
    -webkit-transform: translateX(11px) translateY(-92px);
            transform: translateX(11px) translateY(-92px);
  }
  80% {
    -webkit-transform: translateX(30px) translateY(17px);
            transform: translateX(30px) translateY(17px);
  }
}
@keyframes float52 {
  40% {
    -webkit-transform: translateX(11px) translateY(-92px);
            transform: translateX(11px) translateY(-92px);
  }
  80% {
    -webkit-transform: translateX(30px) translateY(17px);
            transform: translateX(30px) translateY(17px);
  }
}
@-webkit-keyframes float53 {
  40% {
    -webkit-transform: translateX(34px) translateY(-261px);
            transform: translateX(34px) translateY(-261px);
  }
  80% {
    -webkit-transform: translateX(76px) translateY(288px);
            transform: translateX(76px) translateY(288px);
  }
}
@keyframes float53 {
  40% {
    -webkit-transform: translateX(34px) translateY(-261px);
            transform: translateX(34px) translateY(-261px);
  }
  80% {
    -webkit-transform: translateX(76px) translateY(288px);
            transform: translateX(76px) translateY(288px);
  }
}
@-webkit-keyframes float54 {
  40% {
    -webkit-transform: translateX(-5px) translateY(-121px);
            transform: translateX(-5px) translateY(-121px);
  }
  80% {
    -webkit-transform: translateX(0px) translateY(-74px);
            transform: translateX(0px) translateY(-74px);
  }
}
@keyframes float54 {
  40% {
    -webkit-transform: translateX(-5px) translateY(-121px);
            transform: translateX(-5px) translateY(-121px);
  }
  80% {
    -webkit-transform: translateX(0px) translateY(-74px);
            transform: translateX(0px) translateY(-74px);
  }
}
@-webkit-keyframes float55 {
  40% {
    -webkit-transform: translateX(79px) translateY(86px);
            transform: translateX(79px) translateY(86px);
  }
  80% {
    -webkit-transform: translateX(25px) translateY(172px);
            transform: translateX(25px) translateY(172px);
  }
}
@keyframes float55 {
  40% {
    -webkit-transform: translateX(79px) translateY(86px);
            transform: translateX(79px) translateY(86px);
  }
  80% {
    -webkit-transform: translateX(25px) translateY(172px);
            transform: translateX(25px) translateY(172px);
  }
}
@-webkit-keyframes float56 {
  40% {
    -webkit-transform: translateX(-2px) translateY(-54px);
            transform: translateX(-2px) translateY(-54px);
  }
  80% {
    -webkit-transform: translateX(116px) translateY(-13px);
            transform: translateX(116px) translateY(-13px);
  }
}
@keyframes float56 {
  40% {
    -webkit-transform: translateX(-2px) translateY(-54px);
            transform: translateX(-2px) translateY(-54px);
  }
  80% {
    -webkit-transform: translateX(116px) translateY(-13px);
            transform: translateX(116px) translateY(-13px);
  }
}
@-webkit-keyframes float57 {
  40% {
    -webkit-transform: translateX(20px) translateY(-36px);
            transform: translateX(20px) translateY(-36px);
  }
  80% {
    -webkit-transform: translateX(130px) translateY(285px);
            transform: translateX(130px) translateY(285px);
  }
}
@keyframes float57 {
  40% {
    -webkit-transform: translateX(20px) translateY(-36px);
            transform: translateX(20px) translateY(-36px);
  }
  80% {
    -webkit-transform: translateX(130px) translateY(285px);
            transform: translateX(130px) translateY(285px);
  }
}
@-webkit-keyframes float58 {
  40% {
    -webkit-transform: translateX(18px) translateY(-79px);
            transform: translateX(18px) translateY(-79px);
  }
  80% {
    -webkit-transform: translateX(114px) translateY(41px);
            transform: translateX(114px) translateY(41px);
  }
}
@keyframes float58 {
  40% {
    -webkit-transform: translateX(18px) translateY(-79px);
            transform: translateX(18px) translateY(-79px);
  }
  80% {
    -webkit-transform: translateX(114px) translateY(41px);
            transform: translateX(114px) translateY(41px);
  }
}
@-webkit-keyframes float59 {
  40% {
    -webkit-transform: translateX(77px) translateY(-83px);
            transform: translateX(77px) translateY(-83px);
  }
  80% {
    -webkit-transform: translateX(-27px) translateY(116px);
            transform: translateX(-27px) translateY(116px);
  }
}
@keyframes float59 {
  40% {
    -webkit-transform: translateX(77px) translateY(-83px);
            transform: translateX(77px) translateY(-83px);
  }
  80% {
    -webkit-transform: translateX(-27px) translateY(116px);
            transform: translateX(-27px) translateY(116px);
  }
}
@-webkit-keyframes float60 {
  40% {
    -webkit-transform: translateX(-19px) translateY(-244px);
            transform: translateX(-19px) translateY(-244px);
  }
  80% {
    -webkit-transform: translateX(48px) translateY(100px);
            transform: translateX(48px) translateY(100px);
  }
}
@keyframes float60 {
  40% {
    -webkit-transform: translateX(-19px) translateY(-244px);
            transform: translateX(-19px) translateY(-244px);
  }
  80% {
    -webkit-transform: translateX(48px) translateY(100px);
            transform: translateX(48px) translateY(100px);
  }
}
@-webkit-keyframes float61 {
  40% {
    -webkit-transform: translateX(-13px) translateY(-238px);
            transform: translateX(-13px) translateY(-238px);
  }
  80% {
    -webkit-transform: translateX(115px) translateY(147px);
            transform: translateX(115px) translateY(147px);
  }
}
@keyframes float61 {
  40% {
    -webkit-transform: translateX(-13px) translateY(-238px);
            transform: translateX(-13px) translateY(-238px);
  }
  80% {
    -webkit-transform: translateX(115px) translateY(147px);
            transform: translateX(115px) translateY(147px);
  }
}
@-webkit-keyframes float62 {
  40% {
    -webkit-transform: translateX(-2px) translateY(-236px);
            transform: translateX(-2px) translateY(-236px);
  }
  80% {
    -webkit-transform: translateX(24px) translateY(-20px);
            transform: translateX(24px) translateY(-20px);
  }
}
@keyframes float62 {
  40% {
    -webkit-transform: translateX(-2px) translateY(-236px);
            transform: translateX(-2px) translateY(-236px);
  }
  80% {
    -webkit-transform: translateX(24px) translateY(-20px);
            transform: translateX(24px) translateY(-20px);
  }
}
@-webkit-keyframes float63 {
  40% {
    -webkit-transform: translateX(41px) translateY(-204px);
            transform: translateX(41px) translateY(-204px);
  }
  80% {
    -webkit-transform: translateX(49px) translateY(11px);
            transform: translateX(49px) translateY(11px);
  }
}
@keyframes float63 {
  40% {
    -webkit-transform: translateX(41px) translateY(-204px);
            transform: translateX(41px) translateY(-204px);
  }
  80% {
    -webkit-transform: translateX(49px) translateY(11px);
            transform: translateX(49px) translateY(11px);
  }
}
@-webkit-keyframes float64 {
  40% {
    -webkit-transform: translateX(34px) translateY(-152px);
            transform: translateX(34px) translateY(-152px);
  }
  80% {
    -webkit-transform: translateX(-18px) translateY(162px);
            transform: translateX(-18px) translateY(162px);
  }
}
@keyframes float64 {
  40% {
    -webkit-transform: translateX(34px) translateY(-152px);
            transform: translateX(34px) translateY(-152px);
  }
  80% {
    -webkit-transform: translateX(-18px) translateY(162px);
            transform: translateX(-18px) translateY(162px);
  }
}
@-webkit-keyframes float65 {
  40% {
    -webkit-transform: translateX(76px) translateY(-267px);
            transform: translateX(76px) translateY(-267px);
  }
  80% {
    -webkit-transform: translateX(144px) translateY(-26px);
            transform: translateX(144px) translateY(-26px);
  }
}
@keyframes float65 {
  40% {
    -webkit-transform: translateX(76px) translateY(-267px);
            transform: translateX(76px) translateY(-267px);
  }
  80% {
    -webkit-transform: translateX(144px) translateY(-26px);
            transform: translateX(144px) translateY(-26px);
  }
}
@-webkit-keyframes float66 {
  40% {
    -webkit-transform: translateX(-7px) translateY(76px);
            transform: translateX(-7px) translateY(76px);
  }
  80% {
    -webkit-transform: translateX(109px) translateY(232px);
            transform: translateX(109px) translateY(232px);
  }
}
@keyframes float66 {
  40% {
    -webkit-transform: translateX(-7px) translateY(76px);
            transform: translateX(-7px) translateY(76px);
  }
  80% {
    -webkit-transform: translateX(109px) translateY(232px);
            transform: translateX(109px) translateY(232px);
  }
}
@-webkit-keyframes float67 {
  40% {
    -webkit-transform: translateX(67px) translateY(-195px);
            transform: translateX(67px) translateY(-195px);
  }
  80% {
    -webkit-transform: translateX(-48px) translateY(258px);
            transform: translateX(-48px) translateY(258px);
  }
}
@keyframes float67 {
  40% {
    -webkit-transform: translateX(67px) translateY(-195px);
            transform: translateX(67px) translateY(-195px);
  }
  80% {
    -webkit-transform: translateX(-48px) translateY(258px);
            transform: translateX(-48px) translateY(258px);
  }
}
@-webkit-keyframes float68 {
  40% {
    -webkit-transform: translateX(55px) translateY(49px);
            transform: translateX(55px) translateY(49px);
  }
  80% {
    -webkit-transform: translateX(65px) translateY(-34px);
            transform: translateX(65px) translateY(-34px);
  }
}
@keyframes float68 {
  40% {
    -webkit-transform: translateX(55px) translateY(49px);
            transform: translateX(55px) translateY(49px);
  }
  80% {
    -webkit-transform: translateX(65px) translateY(-34px);
            transform: translateX(65px) translateY(-34px);
  }
}
@-webkit-keyframes float69 {
  40% {
    -webkit-transform: translateX(55px) translateY(-234px);
            transform: translateX(55px) translateY(-234px);
  }
  80% {
    -webkit-transform: translateX(97px) translateY(42px);
            transform: translateX(97px) translateY(42px);
  }
}
@keyframes float69 {
  40% {
    -webkit-transform: translateX(55px) translateY(-234px);
            transform: translateX(55px) translateY(-234px);
  }
  80% {
    -webkit-transform: translateX(97px) translateY(42px);
            transform: translateX(97px) translateY(42px);
  }
}
@-webkit-keyframes float70 {
  40% {
    -webkit-transform: translateX(-15px) translateY(79px);
            transform: translateX(-15px) translateY(79px);
  }
  80% {
    -webkit-transform: translateX(53px) translateY(292px);
            transform: translateX(53px) translateY(292px);
  }
}
@keyframes float70 {
  40% {
    -webkit-transform: translateX(-15px) translateY(79px);
            transform: translateX(-15px) translateY(79px);
  }
  80% {
    -webkit-transform: translateX(53px) translateY(292px);
            transform: translateX(53px) translateY(292px);
  }
}
@-webkit-keyframes float71 {
  40% {
    -webkit-transform: translateX(-12px) translateY(-55px);
            transform: translateX(-12px) translateY(-55px);
  }
  80% {
    -webkit-transform: translateX(67px) translateY(11px);
            transform: translateX(67px) translateY(11px);
  }
}
@keyframes float71 {
  40% {
    -webkit-transform: translateX(-12px) translateY(-55px);
            transform: translateX(-12px) translateY(-55px);
  }
  80% {
    -webkit-transform: translateX(67px) translateY(11px);
            transform: translateX(67px) translateY(11px);
  }
}
@-webkit-keyframes float72 {
  40% {
    -webkit-transform: translateX(-3px) translateY(-29px);
            transform: translateX(-3px) translateY(-29px);
  }
  80% {
    -webkit-transform: translateX(74px) translateY(-32px);
            transform: translateX(74px) translateY(-32px);
  }
}
@keyframes float72 {
  40% {
    -webkit-transform: translateX(-3px) translateY(-29px);
            transform: translateX(-3px) translateY(-29px);
  }
  80% {
    -webkit-transform: translateX(74px) translateY(-32px);
            transform: translateX(74px) translateY(-32px);
  }
}
@-webkit-keyframes float73 {
  40% {
    -webkit-transform: translateX(14px) translateY(11px);
            transform: translateX(14px) translateY(11px);
  }
  80% {
    -webkit-transform: translateX(23px) translateY(-97px);
            transform: translateX(23px) translateY(-97px);
  }
}
@keyframes float73 {
  40% {
    -webkit-transform: translateX(14px) translateY(11px);
            transform: translateX(14px) translateY(11px);
  }
  80% {
    -webkit-transform: translateX(23px) translateY(-97px);
            transform: translateX(23px) translateY(-97px);
  }
}
@-webkit-keyframes float74 {
  40% {
    -webkit-transform: translateX(-19px) translateY(73px);
            transform: translateX(-19px) translateY(73px);
  }
  80% {
    -webkit-transform: translateX(47px) translateY(176px);
            transform: translateX(47px) translateY(176px);
  }
}
@keyframes float74 {
  40% {
    -webkit-transform: translateX(-19px) translateY(73px);
            transform: translateX(-19px) translateY(73px);
  }
  80% {
    -webkit-transform: translateX(47px) translateY(176px);
            transform: translateX(47px) translateY(176px);
  }
}
@-webkit-keyframes float75 {
  40% {
    -webkit-transform: translateX(-12px) translateY(-280px);
            transform: translateX(-12px) translateY(-280px);
  }
  80% {
    -webkit-transform: translateX(114px) translateY(168px);
            transform: translateX(114px) translateY(168px);
  }
}
@keyframes float75 {
  40% {
    -webkit-transform: translateX(-12px) translateY(-280px);
            transform: translateX(-12px) translateY(-280px);
  }
  80% {
    -webkit-transform: translateX(114px) translateY(168px);
            transform: translateX(114px) translateY(168px);
  }
}
</style>
    </head>
    <div class="wrapper">
 
  </div>
</div>
    <body>
        <!-- navigation -->
        <nav class="navbar navbar-expand-md bg-dark navbar-dark shadow fixed-top">
  <a class="navbar-brand" href="#">Go Away Covid 19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="#firstrow">Dashboard</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#canada">Canada</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#provinces">Provinces</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#info">Vaccines</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#faq">Vaccine FAQ's</a>
      </li>    
        <li class="nav-item">
        <a class="nav-link" href="#myths">Myths& Facts</a>
      </li>  
       <li class="nav-item">
        <a class="nav-link" href="#news">News</a>
      </li> 
    </ul>
  </div>  
</nav>
<!-- end navigation -->
        
        <div class="row" id="firstrow">
        <div class="container-fluid" id="header">
      <div class="circles">
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    </div><!-- end container fluid header -->
    </div><!-- end first row -->
    
    
    <!-- start main headline -->

<!-- start small dash -->
<div class="container" style="z-index: 10;" id="firstrow">
    <div class="row m-5">
        <div class="col-sm-3"><img src="images/flag.png" class="float-right"></div>
        <div class="col-sm-5 pt-4 mt-4" align="center"><h1 class="display-4">COVID-19 ONTARIO</h1></div>
        <div class="col-sm-3"><img src="images/virus.png" class="float-left"></div>
    </div><!-- end headings row -->
    
        <?php
$json_string = file_get_contents("https://api.covid19tracker.ca/summary/split");
$parsed_json = json_decode($json_string, true);
$parsed_json = $parsed_json['data'];
//pr($parsed_json);

foreach($parsed_json as $key => $value)
{
  if ($key == 0) {
    print "<div class='container m-4'>";

    
   echo "<div class='card-deck'>";
   echo "<div class='card shadow text-light text-center bg-primary  p-2'><h4>Total Cases<br>";
   echo number_format($value['total_cases']) . '<br>';
  echo "</h4></div>";
  
    echo "<div class='card shadow text-light text-center p-2 bg-danger'><h4>Total Fatalities<br>";
   echo number_format($value['total_fatalities']) . '<br>';
  echo "</h4></div>";
  
   echo "<div class='card shadow text-light text-center bg-success p-2'><h4>Total In ICU<br>";
   echo number_format($value['total_criticals']) . '<br>';
  echo "</h4></div>";
  
 
    echo "<div class='card shadow text-light text-center p-2 bg-warning'><h4>Total Hospitalizations<br>";
   echo number_format($value['total_hospitalizations']) . '<br>';
  echo "</h4></div>";
echo "</div>"; // end card deck 

  
  
  print "</div>"; // end container
  
      print "<div class='container m-4'>";

  
   echo "<div class='card-deck'>";
  
   echo "<div class='card shadow text-light text-center p-2 bg-success'><h4>Total Tests<br>";
   echo number_format($value['total_tests']) . '<br>';
  echo "</h4></div>";
  
  
  
    echo "<div class='card shadow text-light text-center p-2 bg-warning'><h4>Total Recoveries<br>";
   echo number_format($value['total_recoveries']) . '<br>';
  echo "</h4></div>";
  
  echo "<div class='card shadow text-light text-center p-2 bg-danger'><h4>Total Vaccinations<br>";
   echo number_format($value['total_vaccinations']) . '<br>';
  echo "</h4><p>Newly vaccinated: ";
  echo number_format($value['change_vaccinations']) . '</p>';
  echo "</div>";
  
    echo "<div class='card shadow text-light text-center p-2 bg-primary'><h4>Total Fully Vaccinated<br>";
   echo number_format($value['total_vaccinated']) . '<br>';
 echo "</h4><p>New fully vaccinated: ";
  echo number_format($value['change_vaccinated']) . '</p>';
  echo "</div>"; // end card deck 

  
  
  print "</div>"; // end container

  }
  }

print "<hr>";

?>

</div>
</div><!-- today cont -->

<div class="container" id="canada">
    <div class="row m-5">
        
        <?php

$curl2 = curl_init();

curl_setopt_array($curl2,  [
	CURLOPT_URL => "https://vaccovid-coronavirus-vaccine-and-treatment-tracker.p.rapidapi.com/api/npm-covid-data/country-report-iso-based/Canada/can",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => false,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 500,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: <host>",
		"x-rapidapi-key: <key>"
	],
]);

$response2 = curl_exec($curl2);
$response2 = json_decode($response2, true); //because of true, it's in an array

$err2 = curl_error($curl2);


if ($err2) {
	echo "cURL Error #:" . $err2;
} else {
echo "<div class='card shadow m-5'><div class='card-header bg-danger shadow text-light text-center' id='dash'>";
print "<h2>Canada is ranked ";
echo $response2[0]['rank'];
echo " in the world</h2></div><div class='card-body'>";
print "<table class='table table-borderless table-responsive-sm table-hover' width='100%'>";
print "<tr><td>Total Cases </td><td>";
echo number_format($response2[0]['TotalCases']);
print "</td><td>Total Deaths </td><td>";
echo number_format($response2[0]['TotalDeaths']);
print "</td></tr>";

print "<tr><td>Infection Risk </td><td>";
echo $response2[0]['Infection_Risk'];
print "%</td><td>Case Fatality Rate </td><td>";
echo $response2[0]['Case_Fatality_Rate'];
print "%</td></tr>";

print "<tr><td>Active Cases </td><td>";
echo number_format($response2[0]['ActiveCases']);
print "</td><td>Total Tests </td><td>";
echo number_format($response2[0]['TotalTests']);
print "</td></tr>";

print "<tr><td>Serious Critical </td><td>";
echo number_format($response2[0]['Serious_Critical']);
print "</td><td>Test Percentaeg </td><td>";
echo $response2[0]['Test_Percentage'];
print "%</td></tr>";

print "<tr><td>Total Recovered </td><td>";
echo number_format($response2[0]['TotalRecovered']);
print "</td><td>Recovery Proporation </td><td>";
echo $response2[0]['Recovery_Proporation'];
print "%</td></tr>";

print "<tr><td width='25%'>One case every ";
echo $response2[0]['one_Caseevery_X_ppl'];
print " people</td><td width='25%'>";
print "One death every ";
echo $response2[0]['one_Deathevery_X_ppl'];
print " people</td>";

print "<td width='25%'>One test every ";
echo $response2[0]['one_Testevery_X_ppl'];
print " people</td>";
print "<td width='25%'> ";
echo number_format($response2[0]['Deaths_1M_pop']);
print " deaths per 1 million people</td></tr>";
print "</table>";
print "</div></div>";
}


curl_close($curl2);

?>
    </div>
    
</div>

    <div class="container" id="provinces">


    
     <div class="row m-5 p-3 rounded-lg bg-danger text-light shadow">
<div align="center">
<h2>Statistics by Province</h2>
</div></div>
        <?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://api.opencovid.ca/summary",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
]);
$response = curl_exec($curl);
$response = json_decode($response, true); //because of true, it's in an array



if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$rea = $response['summary'];
echo "<table class='table  table rounded-lg table-hover table-responsive-md shadow'>";
 echo "<thead class='bg-secondary text-light rounded-lg shadow'><tr>";
           echo '<th><h4>Province</h4></th>';
                      echo '<th><h4>Active</h4></th>';
           echo '<th><h4>Change</h4></th>';
           echo '<th><h4>Today</h4></th>';
           echo '<th><h4>Recovered</h4></th>';
                echo '<th><h4>Deaths</h4></th>';
           echo '<th><h4>Testing</h4></th>';
                                 echo '<th><h4>Vaccinated</h4></th>';

     

           echo '</tr></thead>';

//	echo $news;
	 foreach ($rea as $dash) {
          print "<tbody>";
          print "<tr><td>";
           echo $dash['province'];
          print "</td><td>";
          
          echo number_format($dash['active_cases']);
          print "</td><td>";
          
           echo number_format($dash['active_cases_change']);
          print "</td><td>";
            
          
           echo number_format($dash['cases']);
          print "</td><td>";
            
          
           echo number_format($dash['recovered']);
          print "</td><td>";
          
         
           echo number_format($dash['deaths']);
          print "</td><td>";
          
         
           echo number_format($dash['testing']);
          print "</td><td>";
          
         
           echo number_format($dash['cvaccine']);
       
          
          echo '</td></tr></tbody>';
          }
}
echo '</table>';

  curl_close($curl);



?>
        
    </div><!-- end provinces container-->
    
</div><!-- end provinces row -->
<div id="info">
<!-- start vaccine info -->
 <div class="container">
  <div class="row m-5 p-3 rounded-lg bg-danger text-light shadow">
<div align="center">
<h2>Vaccines in Canada</h2>
</div></div>
  <div class="card-deck m-4">
    <div class="card shadow">
<div class="card-header"><h3>Pfizer-Biontech Vaccine</h3></div>
  <div class="card-body"><p><img src="images/pfizer.jpg" class="float-right m-2" width="100" height="auto">
  <b>Name:</b> Pfizer-Biontech Vaccine
  <br><b>Technology: mRNA</b>
  <br><b>Doses:</b> 2 - 21 days apart
  <br><b>Efficacy Rate:</b> 95%
  <br><b>Ages Used On:</b> 16 and up
  <br><b>Possible Common Side Effects:</b> Pain at injection site, body aches, chills, tired, feverish feeling
  <br><b>Authorization Status:</b> Authorized
  <br><b>Temperature:</b> -70C
  </p></div><!-- card body-->
 
    </div><!-- end card -->
    <div class="card shadow">
<div class="card-header"><h3>Astra Zeneca</h3></div>
<div class="card-body"><p><img src="images/astra.png" class="float-right m-2" width="150" height="auto">
  <b>Name:</b> AstraZeneca Vaccine and Covishield
  <br><b>Technology: Adenovirus vector vaccine</b>
  <br><b>Doses:</b> 2 - 4 to 12 weeks apart
  <br><b>Efficacy Rate:</b> 62% and documented to be higher
  <br><b>Ages Used On:</b> 18 and up
  <br><b>Possible Common Side Effects:</b> Pain at injection site, body chills, tired, feverish feeling
  <br><b>Authorization Status:</b> Authorized
  <br><b>Temperature:</b> 2 to 8C</p></div>
 
    </div><!-- end card -->


</div><!-- end deck -->
</div><!-- end container -->




<div class="container">
  
  <div class="card-deck m-4">
    <div class="card shadow">
<div class="card-header"><h3>Moderna</h3></div>
  <div class="card-body"><p><img src="images/moderna.jpg" class="float-right m-2" width="150" height="auto">
  <b>Name:</b> Moderna Vaccine
  <br><b>Technology:</b> mRNA
  <br><b>Doses:</b> 2 - 1 month apart
  <br><b>Efficacy Rate:</b> 94.1%
  <br><b>Ages Used On:</b> 18 years and up
  <br><b>Possible Common Side Effects:</b> Pain at injection site, body aches, body chills, tired, feverish feeling
  <br><b>Authorization Status:</b> Authorized
  <br><b>Temperature:</b> -20C</p></div>

    </div><!-- end card -->
    <div class="card shadow">
<div class="card-header"><h3>Novavax</h3></div>
  <div class="card-body"><p><img src="images/nova.jpg" class="float-right m-2" width="150" height="auto">
  <b>Name:</b> Novavax Vaccine
  <br><b>Technology:</b> Protein Subunit
  <br><b>Doses:</b> 2 doses - 21 days apart
  <br><b>Efficacy Rate:</b> 95.6%, 85.6%, against UK (B117) variant
  <br><b>Ages Used On:</b> 18 years and up
  <br><b>Possible Common Side Effects:</b> Headache, muscle pain, fatigue
  <br><b>Authorization Status:</b> Not yet authorized
  <br><b>Temperature:</b> 2 to 8C</p></div>
  
    </div><!-- end card -->


</div><!-- end deck -->
</div><!-- end container -->
<div class="row m-4"></div><!-- blank -->



<div class="container">
  
  <div class="card-deck m-4">
    <div class="card shadow">
<div class="card-header"><h3>Johnson & Johnson</h3></div>
  <div class="card-body"><p><img src="images/john.jpg" class="float-right m-2" width="150" height="auto">
  <b>Name:</b> Janssen Vaccine
  <br><b>Technology:</b> Adenovirus vector vaccine
  <br><b>Doses:</b> 1 dose
  <br><b>Efficacy Rate:</b> 66%
  <br><b>Ages Used On:</b> 18 years and up
  <br><b>Possible Common Side Effects:</b> Pain, redness of skin, swelling at injection site, headache, feeling very tired, muscle aches, nausea, fever
  <br><b>Authorization Status:</b> Authorized
  <br><b>Temperature:</b> -20C</p></div>
    </div><!-- end card -->
    <div class="card shadow">
<div class="card-header"><h3>Prevention Helps</h3></div>
  <div class="card-body">

The best way to prevent the spread of infections is to:
<ul>
<li>wash your hands often with soap and water for at least 20 seconds;</li>
<li>avoid touching your eyes, nose or mouth, especially with unwashed hands;</li>
<li>avoid close contact with people who are sick;</li>
<li>cough and sneeze into your sleeve and not your hands;</li>
<li>practice physical distancing at all times;</li>
<li>stay home if you are sick to avoid spreading illness to others; and</li>
<li>wear a non-medical mask or face covering, made with at least two layers of tightly woven fabric, constructed to completely cover the nose and mouth without gaping, and secured to the head by ties or ear loops, to protect the people and surfaces around you.</li>
</ul>
</div>
    </div><!-- end card -->
  

</div><!-- end deck -->
</div><!-- end container -->
</div><!-- end info link -->
<!-- end vaccine info -->

<div class="row m-4"></div><!-- blank -->

<!-- start faq -->
 <div class="container" id="faq">
   
<div class="row m-5 p-3 rounded-lg shadow bg-danger text-light">
            
            <h2>Vaccine FAQ's</h2>
  
      
</div><!-- end card -->


<div id="accordion" class="m-5">

    <div class="card">

      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
          What are the most common side effects from getting a Covid 19 vaccine?
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-parent="#accordion">
        <div class="card-body">
After getting vaccinated, you may have some side effects, which are normal signs that your 
body is building protection. The most common side effects are pain and swelling in the arm where you received the shot. 
In addition, you may have fever, chills, tiredness, and headache. These side effects may affect your ability to do daily activities, 
but they should go away in a few days. <a href="https://www.cdc.gov/coronavirus/2019-ncov/vaccines/expect/after.html">Learn more about what to expect after getting a COVID-19 vaccine.</a>
</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
Can I get vaccinated if I'm pregnant?
</a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
<p></p>Yes. If you are pregnant, you may choose to be vaccinated when it’s available to you. 
There is currently no evidence that antibodies formed from COVID-19 vaccination cause any problem with pregnancy, including the development of the placenta.</p>

<p></p>People who are trying to become pregnant now or who plan to try in the future may receive the COVID-19 vaccine when 
it becomes available to them. There is no evidence that fertility problems are a side effect of any vaccine, including COVID-19 vaccines. 
There is no routine recommendation for taking a pregnancy test before you get a COVID-19 vaccine.</p>
<p></p>
If you have questions about getting vaccinated, talking with a healthcare provider may might help you make an informed decision. 
<a href="https://www.cdc.gov/coronavirus/2019-ncov/vaccines/recommendations/pregnancy.html"></a>Learn more at vaccination considerations for people who are pregnant or breastfeeding</a>. </p>
</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
How long does protection from the vaccine last?        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
<p>We don’t know how long protection lasts for those who are vaccinated. What we do know is that COVID-19 has caused very serious illness and death for a lot of people. 
If you get COVID-19, you also risk giving it to loved ones who may get very sick. Getting a COVID-19 vaccine is a safer choice.</p>

<p>Experts are working to learn more about both natural immunity and vaccine-induced immunity. CDC will keep the public informed as new evidence becomes available.    </p>    </div>
      </div>
    </div>
    
       <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
Do I need to wear a mask and social distance after I'm fully vaccinated?   </a>
      </div>
      <div id="collapseFour" class="collapse" data-parent="#accordion">
        <div class="card-body">
Yes. To protect yourself and others, follow these recommendations:
<ul>
<li>Wear a mask over your nose and mouth</li>
<li>Stay at least 6 feet away from others</li>
<li>Avoid crowds</li>
<li>Avoid poorly ventilated spaces</li>
<li>Wash your hands often</li>
</ul>
<p>It’s important for everyone to continue using all the tools available to help stop this pandemic as we learn more about how COVID-19 vaccines work in 
real-world conditions. Experts are also looking at how many people get vaccinated and how the virus is spreading in communities. We also don’t yet know
whether getting a COVID-19 vaccine will prevent you from spreading the virus that causes COVID-19 to other people, even if you don’t get sick yourself. 
CDC will continue to update this page as we learn more.</p>
<p>
Together, COVID-19 vaccination and following CDC’s recommendations for how to protect yourself and others will offer the best protection from getting
and spreading COVID-19. <a href="https://www.cdc.gov/coronavirus/2019-ncov/vaccines/keythingstoknow.html">Additional information can be found at key things to know about the COVID-19 vaccine</a>. 
</p></div>
      </div>
    </div>
    
     <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
If I've already had Covid19 and recovered do I still need to get the vaccine?  </a>
      </div>
      <div id="collapseFive" class="collapse" data-parent="#accordion">
        <div class="card-body">
<p>Yes, you should be vaccinated regardless of whether you already had COVID-19. 
That’s because experts do not yet know how long you are protected from getting sick again after recovering from COVID-19.
Even if you have already recovered from COVID-19, it is possible—although rare—that you could be infected with the virus that
causes COVID-19 again. <a href="https://www.cdc.gov/coronavirus/2019-ncov/vaccines/vaccine-benefits.html">Learn more about why getting vaccinated</a> is a safer way to build protection than getting infected.</p>
<p>
If you were treated for COVID-19 with monoclonal antibodies or convalescent plasma, you should wait 90 days 
before getting a COVID-19 vaccine. Talk to your doctor if you are unsure what treatments you received or if you have more questions about getting a COVID-19 vaccine.</p>
<p>
Experts are still learning more about how long vaccines protect against COVID-19 in real-world conditions. CDC will keep the public informed as new evidence becomes available.   </p>     </div>
      </div>
    </div>
    
     <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseSix">
What are the ingredients in the vaccines?   </a>
      </div>
      <div id="collapseSix" class="collapse" data-parent="#accordion">
        <div class="card-body">
<p>The ingredients in currently available COVID-19 vaccines include mRNA, lipids, salts, sugars, and buffers. 
Buffers help maintain the stability of the pH solution. Vaccine ingredients can vary by manufacturer. To learn more about the ingredients in 
authorized COVID-19 vaccines, see</p>
<ul>
<li><a href="https://www.cdc.gov/coronavirus/2019-ncov/vaccines/different-vaccines/Pfizer-BioNTech.html">Information about the Pfizer-BioNTech COVID-19 vaccine</a></li>
<li><a href="https://www.cdc.gov/coronavirus/2019-ncov/vaccines/different-vaccines/Moderna.html">Information about the Moderna COVID-19 vaccine</a> </li>
</ul></div>
      </div>
    </div>
    
         <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseSev">
How many shots are needed?  </a>
      </div>
      <div id="collapseSev" class="collapse" data-parent="#accordion">
        <div class="card-body">
 <p>  With both COVID-19 mRNA vaccines, you will need 2 shots to get the most protection. The timing between your first and second shot depends on which vaccine you received.</p>
<ul>
<li><a href="https://www.cdc.gov/coronavirus/2019-ncov/vaccines/different-vaccines/Pfizer-BioNTech.html">Pfizer-BioNTech doses should be given 3 weeks (21 days) apart</a></li>
<li><a href="https://www.cdc.gov/coronavirus/2019-ncov/vaccines/different-vaccines/Moderna.html">Moderna doses should be given 1 month (28 days) apart</a>
</li></ul>
<p>You should <strong>get your second shot as close to the recommended 3-week or 1-month interval as possible</strong>. 
However, your second dose may be given up to <a href="https://www.cdc.gov/vaccines/covid-19/info-by-product/clinical-considerations.html#Administration">6 weeks (42 days)</a>
after the first dose, if necessary. You should not get the second dose earlier than the recommended interval.</p>
        </div>
      </div>
    </div>
    
    
         <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseEight">
Can I get a vaccine if I have an underlying condition?</a>      </div>
      <div id="collapseEight" class="collapse" data-parent="#accordion">
        <div class="card-body">
People with underlying medical conditions can receive the FDA-authorized COVID-19 vaccines as long as they have not had an <a href="https://www.cdc.gov/coronavirus/2019-ncov/vaccines/safety/allergic-reaction.html">
    immediate or 
severe allergic reaction to a COVID-19 vaccine</a> or to any of the ingredients in the vaccine. <a href="https://www.cdc.gov/coronavirus/2019-ncov/vaccines/recommendations/underlying-conditions.html">
    
Learn more about vaccination considerations</a>< for 
people with underlying medical conditions. Vaccination is an important consideration for adults of any age with <strong>certain underlying medical conditions</strong>
because they are at increased risk for severe illness from COVID-19.        </div>
      </div>
    </div>
    
     <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseNine">
Can I get vaccinated if I'm currently sick with Covid19?</a>      </div>
      <div id="collapseNine" class="collapse" data-parent="#accordion">
        <div class="card-body">
No. People with COVID-19 who have symptoms should wait to be vaccinated until they have recovered from their illness 
and have met the <a href="https://www.cdc.gov/coronavirus/2019-ncov/testing/diagnostic-testing.html">criteria</a> for discontinuing isolation; those without 
symptoms should also wait until they <a href="https://www.cdc.gov/coronavirus/2019-ncov/testing/serology-overview.html">meet the criteria</a>
before getting vaccinated. This guidance also applies to people who get COVID-19 before getting their second dose of vaccine.        </div>
      </div>
    </div>
    <!-- end single q stuff -->
  </div></div>
</div><!-- end container -->
</div><!-- end row -->

<!-- end faq -->

<div class="row m-5"></div><!-- spacer -->

<!--- start myths -->
<div class="container" id="myths">
  
<div class="row m-5 p-3 rounded-lg shadow bg-danger text-light">
<div align="center">
<h2>Vaccine Myths and Facts</h2>
</div></div>
    <div class="row m-5 bg-white border m-4 p-3 shadow rounded-lg">
       <h4>Can I get sick with Covid19 from the vaccine?</h4>
        <p>
   <img src="images/cough.jpg" class="float-right m-2" width="30%" height="auto">         <strong>No</strong>. None of the authorized and recommended COVID-19 vaccines or COVID-19 vaccines currently in development in the United States, or Canada
            contain the live virus that causes COVID-19. This means that a COVID-19 vaccine cannot make you sick with COVID-19.
<br><br>There are several different types of vaccines in development. All of them teach our immune systems how to recognize and fight the 
virus that causes COVID-19. Sometimes this process can cause symptoms, such as fever. These symptoms are normal and are a sign that the body is 
building protection against the virus that causes COVID-19. Learn more about how COVID-19 vaccines work.</p>
<br><br>
It typically takes a few weeks for the body to build immunity (protection against the virus that causes COVID-19) after vaccination. That means
it’s possible a person could be infected with the virus that causes COVID-19 just before or just after vaccination and still get sick. This 
is because the vaccine has not had enough time to provide protection.</p>
            
        </p>
  </div><!-- end myths row1-->
    
       <div class="row m-5 bg-white border m-4 p-3 shadow rounded-lg">
        <h4>Will I test positive for Covid19 after getting vaccinated?</h4>
        <p><img src="images/covidtest.jpg" width="25%" height="auto" class="float-left m-1">No. Neither the recently authorized and recommended vaccines nor the other COVID-19 vaccines currently in clinical trials in 
        the United States can cause you to test positive on <a href="https://www.cdc.gov/coronavirus/2019-ncov/testing/diagnostic-testing.html">viral tests</a>, which are used to see if you have a <strong>current infection.​</strong>
        <br><br>
If your body develops an immune response—the goal of vaccination—there is a possibility you may test positive on some <a href="https://www.cdc.gov/coronavirus/2019-ncov/testing/serology-overview.html">>antibody tests</a>. 
Antibody tests indicate you had a previous infection and that you may have some level of protection against the virus. Experts are currently 
looking at how COVID-19 vaccination may affect antibody testing results.</p>
  </div><!-- end myths row2-->
  <div class="row m-5 bg-white border m-4 p-3 shadow rounded-lg">
      <h4>I've already had Covid19, does that mean I don't need a vaccine?</h4>
        <p>
         <img src="images/vax.png" class="float-right m-1" width="27%" height="auto">   You should be vaccinated regardless of whether you already had COVID-19. That’s because experts do not yet know how long you are protected 
            from getting sick again after recovering from COVID-19. Even if you have already recovered from COVID-19, it is possible—although rare—that 
            you could be infected with the virus that causes COVID-19 again. Learn more about why getting vaccinated is a safer way to build protection than getting infected.
<br><br>
If you were treated for COVID-19 with monoclonal antibodies or convalescent plasma, you should wait 90 days before getting a COVID-19 vaccine. Talk to your doctor 
if you are unsure what treatments you received or if you have more questions about getting a COVID-19 vaccine.
<br><br>
Experts are still learning more about how long vaccines protect against COVID-19 in real-world conditions. CDC will keep the public informed as new evidence becomes available.
            
        </p>
  </div><!-- end myths row3-->
    
       <div class="row m-5 bg-white border m-4 p-3 shadow rounded-lg">
        <h4>Will a vaccine keep me from getting sick with Covid19?</h4>
        <p>
     <img src="images/shield.png" class="float-left m-1" width="25%" height="auto">            Yes. COVID-19 vaccination works by teaching your immune system how to recognize and fight the virus that causes COVID-19, and this protects you from getting sick with COVID-19.

<br><br>Being protected from getting sick is important because even though many people with COVID-19 have only a mild illness, others may get a 
<a href="https://www.cdc.gov/coronavirus/2019-ncov/symptoms-testing/symptoms.html">severe illness</a>, have <a href="https://www.cdc.gov/coronavirus/2019-ncov/long-term-effects.html">long-term health effects</a>, or even die. 
There is no way to know how COVID-19 will affect you, even if you don’t have an 
<a href="https://www.cdc.gov/coronavirus/2019-ncov/need-extra-precautions/index.html">increased risk of developing severe complications</a>. <a href="https://www.cdc.gov/coronavirus/2019-ncov/vaccines/about-vaccines/how-they-work.html">Learn more about how COVID-19 vaccines work.</a>
            
        </p>
  </div><!-- end myths row4-->
  <div class="row m-5 bg-white border m-4 p-3 shadow rounded-lg">
      <h4>Will a Covid19 vaccine alter my DNA?</h4>
        <p>
             <img src="images/image3.png" class="float-right m-1" width="27%" height="auto">  <strong>No. COVID-19 mRNA vaccines do not change or interact with your DNA in any way.</strong>
<br><br>
Messenger RNA vaccines—also called mRNA vaccines—are the first COVID-19 vaccines authorized for use in the United States. 
mRNA vaccines teach our cells how to make a protein that triggers an immune response. The mRNA from a COVID-19 vaccine
never enters the nucleus of the cell, which is where our DNA is kept. This means the mRNA cannot affect or interact with our 
DNA in any way. Instead, COVID-19 mRNA vaccines work with the body’s natural defenses to safely develop immunity to disease.
<a href="https://www.cdc.gov/coronavirus/2019-ncov/vaccines/different-vaccines/mrna.html">Learn more about how COVID-19 mRNA vaccines work. ​</a>
<br><br>
At the end of the process, our bodies have learned how to protect against future infection. That immune response 
and making antibodies is what protects us from getting infected if the real virus enters our bodies.
            
        </p>
  </div><!-- end myths row5-->
    
       <div class="row m-5 bg-white border m-4 p-3 shadow rounded-lg">
        <h4>Is it safe for me to get a Covid19 vaccine if I want to have a baby one day?</h4>
        <p> <img src="images/preg.jpg" class="float-left m-1" width="29%" height="auto">Yes. People who want to get pregnant in the future may receive the COVID-19 vaccine.
<br><br>
Based on current knowledge, experts believe that COVID-19 vaccines are unlikely to pose a risk to a person trying to
become pregnant in the short or long term. Scientists study every vaccine carefully for side effects immediately 
and for years afterward.  The COVID-19 vaccines are being studied carefully now and will continue to be studied 
for many years, similar to other vaccines.
<br><br>
The COVID-19 vaccine, like other vaccines, works by training our bodies to develop antibodies to fight
against the virus that causes COVID-19, to prevent future illness. There is currently no evidence that 
antibodies formed from COVID-19 vaccination cause any problems with pregnancy, including the development
of the placenta. In addition, there is no evidence suggesting that fertility problems are a side effect
of ANY vaccine. People who are trying to become pregnant now or who plan to try in the future may 
receive the COVID-19 vaccine when it becomes available to them.</p>
  </div><!-- end myths row-6 -->
    
</div><!-- end myths container-->

<!-- end myths -->


<div class="container" id="news">
<div class="row m-5 p-3 rounded-lg bg-danger text-light shadow">

<h2>Trending in the News</h2>
</div>
    <div class="card p-3 shadow rounded-lg">
       
 
<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://vaccovid-coronavirus-vaccine-and-treatment-tracker.p.rapidapi.com/api/news/get-coronavirus-news/0",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: <vaccovidhost>",
		"x-rapidapi-key: <vaccovidkey>"
	],
]);
$response = curl_exec($curl);
$response = json_decode($response, true); //because of true, it's in an array



if ($err) {
	echo "cURL Error #:" . $err;
} else {
//	echo $response;
	$news = $response['news'];
//	echo $news;
	 foreach ($news as $post) {
              echo '<h4><a href="' . $post['link'] . '">'  . $post['title'] . '</a></h4>';
         //    echo '<a href="' . $post['link'] . '">Source</a>';
             echo 'Date Published: ' . $post['pubDate'] . ' by ';
             echo $post['reference'];
             echo '<br>';
             echo $post['content'];
             echo '<hr>';
          }
}
  curl_close($curl);

?>

</div><!-- end card -->
  </div>  <!--end row-->
</div><!-- end container -->

<div class="row m-5"></div><!--blank-->

<div class="row p-4">
    <div class="col-sm-4">
        <p>Thank you to:
        <br><a href="https://rapidapi.com/organization/vaccovidlive">VACCOVIDlive</a> for the stats on Canada, and the News articles.
        <br><a href="https://api.covid19tracker.ca">CovidTracker Canada</a> for the stats in the Dashboard and all of the provinces.
        </p>
    </div>
    <div class="col-sm-4">This site designed by <a href="mailto: sandorfalot@gmail.com">San Glover</a> and is open source.  Feel free to use my code! </div>
    <div class="col-sm-4">This site was coded in PHP, Javascript, HTML5, CSS3, and used Bootstrap because I'm lazy. I'm not a designer, I just tinker with things, so if you see anything that needs help, let me know!</div>
    
</div>
    </body>
</html>
