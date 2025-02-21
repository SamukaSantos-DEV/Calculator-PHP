<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link rel="icon" href="images2.jpg">
    <title>Calculadora</title>
</head>

<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <?php
    $virgula = false;

    $res = 0;

    if (isset($_POST['display'])) {
    $expression = $_POST['display'];

    if (substr($expression, -1) == ' ') {
 
        $expression = substr($expression, 0, -1);

        $res = eval("return $expression;");
    } else {

        $res += $expression;
    }
}
?>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card" style="background-color: rgb(39, 39, 39); margin-top:10%">
                <form method="POST" action="">

                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-8">
                                <input readonly type="text" name="display" id="display" value="<?php echo $res; ?>" style="font-size: 30px; background-color:rgb(39, 39, 39); color:white; padding: 3%; width:100%; margin-top: 1%; cursor:auto; border:0px; " /><br>

                            </div>
                            <div class="col-md-2">
                                <input type="button" value="⌫   " class="btnsd" onclick='del();' />
                            </div>
                            <div class="col-md-2">
                                <input type="button" value="C" class="btnsda" onclick="display.value = ''" />
                            </div>
                            <script>
                                function del() {
                                    var display = document.getElementById('display');
                                    display.value = display.value.slice(0, -1);
                                }
                            </script>

                        </div>
                    </div>

                    <div class="card-body" style="padding-left: 5%; padding-top: 5%">
                        <div class="row">
                            <div class="btn-toolbar mb-2" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="col-md-3"><input type="button" value="7" onclick="display.value += '7'" class="btns"></div>
                                <div class="col-md-3"><input type="button" value="8" onclick="display.value += '8'" class="btns"></div>
                                <div class="col-md-3"><input type="button" value="9" onclick="display.value += '9'" class="btns"></div>
                                <div class="col-md-3"><input type="button" value="÷" onclick="display.value += '/'" class="btnsa"></div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="btn-toolbar mb-2" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="col-md-3"><input type="button" value="4" onclick="display.value += '4'" class="btns"></div>
                                <div class="col-md-3"><input type="button" value="5" onclick="display.value += '5'" class="btns"></div>
                                <div class="col-md-3"><input type="button" value="6" onclick="display.value += '6'" class="btns"></div>
                                <div class="col-md-3"><input type="button" value="x" onclick="display.value += ' * '" class="btnsa" style="padding:30px 42%;"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="btn-toolbar mb-2" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="col-md-3"><input type="button" value="1" onclick="display.value += '1'" class="btns"></div>
                                <div class="col-md-3"><input type="button" value="2" onclick="display.value += '2'" class="btns"></div>
                                <div class="col-md-3"><input type="button" value="3" onclick="display.value += '3'" class="btns"></div>
                                <div class="col-md-3"><input type="button" value="-" onclick="display.value += ' - '" class="btnsa" style="padding:30px 43%;"></div>
                            </div>
                        </div>

                        <div class="row" style="margin-bottom: 1%;">
                            <div class="btn-toolbar mb-2" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="col-md-3"><input type="button" value="0" onclick="display.value += '0'" class="btns"></div>
                                <div class="col-md-3"><input type="button" value="." onclick="display.value += '.'" class="btns" style="padding:30px 43%;"></div>
                                <div class="col-md-3"><input type="submit" class="btnss" onclick="display.value += ' ' " value="=" /></div>
                                <div class="col-md-3"><input type="button" value="+" onclick="display.value += ' + '" class="btnsa""></div>
                        </div>
                    </div>
                </div>
            </form>

            </div>
        </div>
    </div>                                

</body>
</html>

