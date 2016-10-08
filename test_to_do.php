<!DOCTYPE html>
<html>
    <head>
        <style>
            #grad1 {
                height: 200px;
                background: linear-gradient(blue, yellow); /* Standard syntax (must be last) */
            }
            #myCanvas{
                height: 500px;
                width: 500px;
                margin: auto;
                position: absolute;
                left: 37%;
                border: 5px solid #6d18ff;
            }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.1/css/uikit.gradient.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.1/js/uikit.min.js"></script>

    </head>
    <body>
    <div  id="grad1" >

    </div>
        <form action="test_do.php" method="GET" class="uk-form" align="center">
            </br>
            </br>
            <input type='text' placeholder="name" name='name' class="uk-form-success">
            </br></br>
            <input type='text' placeholder="phone" name='phone' class="uk-form-success">
            </br></br>
            <input type='submit'  name='OK' class="uk-button">
            </br>

        </form>
    </br>
    <canvas id="myCanvas">
    </canvas>
    </body>
</html>