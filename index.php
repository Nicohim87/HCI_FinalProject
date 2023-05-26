<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" type="image/x-icon" href="./favicon.png">
    <title>Augmented Reality Room Tour</title>
</head>

<body>
    <div id="box">

        <div id="top-text" class="center">
            <h1>Binus @Malang Augmented Reality Room Tour</h1>
        </div>

        <div class="center" id="center-element">
            <b>
                <div class="button" type="button" onclick="openCreativeClass()">
                    <p>Creative Class</p>
                </div>

                <div class="button" type="button" onclick="openSmartClass()">
                    <p>Smart Class</p>
                </div>
            </b>
        </div>
    </div>
    <script>
        function openCreativeClass(){
            window.open("https://editor.assemblrworld.com/Viewer/-wWz5Ylo47H58QRTCtU6?mode=marker", "_blank")
        }
        function openSmartClass(){
            window.open("https://editor.assemblrworld.com/Viewer/-zqZA7ferktxlrg7FfZG?mode=marker", "_blank")
        }
    </script>
</body>
</html>