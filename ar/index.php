
<!doctype html>
<html>

<head>

    <title>[ معهد الفرقان الإسلامي ] عيد الأضحى</title>
    <meta property="og:type" content="website" />
	<meta property="og:title" content="Al-Furqon Idul Adha Card" />
	<meta property="og:image" content="images/logo.png">
	<meta property="og:description" content="Yayasan Pendidikan, Dakwah, dan Sosial Al-Furqon al-islami. JL. Perikanan Desa Srowo, Kecamatan Sidayu Kabupaten Gresik, Prov. Jawa Timur – Indonesia 61153" />
	<meta property="og:url" content="https://www.alfurqongresik.com/" />
	<meta property="og:site_name" content="Al-Furqon Idul Adha Card" />
	<meta property="article:publisher" content="https://www.facebook.com/AlFurqon.AlIslami" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="MA&#8217;HAD AL-FURQON AL-ISLAMI" />
	<meta name="twitter:image" content="images/logo.png">
	<meta name="twitter:description" content="Yayasan Pendidikan, Dakwah, dan Sosial Al-Furqon al-islami. JL. Perikanan Desa Srowo, Kecamatan Sidayu Kabupaten Gresik, Prov. Jawa Timur – Indonesia 61153" />
	<meta name="twitter:site" content="@" />
	<meta name="twitter:creator" content="@" />
    

    
	<script src="canvas2image.js"></script>
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" />

    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" />
    <link href="css/OverrideCss.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/fonts.css" rel="stylesheet" />

	<link rel="icon" href="images/logo.png" sizes="32x32" />
	<link rel="icon" href="images/logo.png" sizes="192x192" />
	<link rel="apple-touch-icon" href="images/logo.png" />
	
    <style>
        @font-face {
            font-family: 'iufont1';
            src: url('fonts/DIN NEXT™ ARABIC BLACK.otf') format('opentype');
        }

        @font-face {
            font-family: 'iufont';
            src: url('fonts/DIN NEXT™ ARABIC MEDIUM.otf') format('opentype');
        }

        .doc {
            width:100%;
            margin: 0 auto;
        }

        canvas {
            display: block;
            border: 2px solid #888;
        }
    </style>
</head>

<body class="rtls boxed-layout" >
    <div class="container" style="max-width:1024px;">
        
        <div class="doc" style="padding-top:0%; ">
            <div style=" text-align:center; font-weight:600;font-size:30px;">
                <h2>بطاقة تهنئة من معهد الفرقان الإسلامي</h2>
				
            </div>
            <hr />
            <canvas width="1024" height="1024" id="myCanvas"></canvas>
            <br />
            <input type="text" id="txt" placeholder="اكتب الاسم هنا ثم انقر زر عرض" class="form-control" style="font-size:18px; text-align:right;  ">

            <br />
            <input type="button" id="btn" value="عرض" onclick="showImg()" class="btn btn-danger" style="font-size:18px; text-align:right;  " />
			<input type="button" id="save" value="حفظ" onclick="saveImg()" class="btn btn-primary hidden" style="font-size:18px; text-align:right;" />
			
            <hr />
			
			<div class="alert alert-info">
                <ul dir="rtl" style="list-style-type: none; padding-right:0%;">
                    <li><span class="fa fa-desktop" style="padding-right:5px;"></span> &nbsp لحفظ الصورة من جهاز الحاسب انقر على الصورة بزر الماوس الأيمن واختر حفظ الصورة.</li>
                    <li><span class="fa fa-mobile-phone fa-2x" style="padding-right:7px;"></span> &nbsp  لحفظ الصورة من الجوال اضغط على الصورة لمدة ثانتين واختر حفظ. </li>
                </ul>
            </div>
			
            
        </div>
        </div>
    <script>

        function saveImg()
        {
            var canvas = document.getElementById("myCanvas"); 
            var img = canvas.toDataURL("image/png");
            document.write('<img src="' + img + '"/>');
        }

        function showImg() {
            var element = document.getElementById("save");
            element.classList.remove("hidden");

			var str1="";
			var str2="";
            var name = document.getElementById("txt").value;
			var res = str1.concat(name, str2);
            var canvas = document.getElementById("myCanvas");
            var context = canvas.getContext("2d");
            context.clearRect(0, 0, 4000, 3000);
            var fontsize = 40;

            if (name.length > 24) {
                fontsize = 40 - (name.length - 24);
            }
            //alert(name.length);
            var imageObj = new Image();
            imageObj.onload = function () {
                //context.scale(0.15, 0.15);
                context.drawImage(imageObj, 0, 0);
                context.font = "bold "+ fontsize + "px iufont";
                context.fillStyle = "#fbee00";
                context.textAlign = "center";
                context.fillText(res, 495, 895);

                

            };
            imageObj.src = "images/idul-adha-ar.png";
        }

        window.onload = function () {
            var canvas = document.getElementById("myCanvas");
            var context = canvas.getContext("2d");
            var imageObj = new Image();
            imageObj.onload = function () {
                //context.scale(0.15, 0.15);
                context.drawImage(imageObj, 0, 0);
                context.font = "bold 40px iufont";
                context.fillStyle = "#fbee00";
                context.textAlign = "center";
                context.fillText("معهد الفرقان الإسلامي", 495, 895);


                

            };
            imageObj.src = "images/idul-adha-ar.png";
        };


    </script>


    <script src="jquery-3.1.1.min.js"></script>
    <script src="bootstrap.min.js"></script>
 </body>
</html>