<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
        @yield('title')
    </title>

            <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

            <style>
                html, body {
                    height: 100%;
                }

                body {
                    margin: 0;
                    padding: 0;
                    width: 100%;
                    display: table;
                    font-weight: 100;
                    font-family: 'Lato';

                }
                a{
                  text-decoration:inherit;
                  color: inherit;
                }

                .container {
                    text-align: center;
                    display: table-cell;
                    vertical-align: middle;
                }

                .content {
                    text-align: right;
                    display: inline-block;
                    font-size: 25px;

                }
                .home{
                  text-align: center;
                }
                .title {
                    font-size: 96px;
                }
                /***FIRST STYLE THE BUTTON***/
              input#gobutton{
              cursor:pointer; /*forces the cursor to change to a hand when the button is hovered*/
              padding:5px 25px; /*add some padding to the inside of the button*/
              background:#35b128; /*the colour of the button*/
              border:1px solid #33842a; /*required or the default border for the browser will appear*/
              /*give the button curved corners, alter the size as required*/
              -moz-border-radius: 5px;
              -webkit-border-radius: 5px;
              border-radius: 5px;
              /*give the button a drop shadow*/
              -webkit-box-shadow: 0 0 4px rgba(0,0,0, .75);
              -moz-box-shadow: 0 0 4px rgba(0,0,0, .75);
              box-shadow: 0 0 4px rgba(0,0,0, .75);
              /*style the text*/
              color:#f3f3f3;
              font-size:.8em;
              }
              /***NOW STYLE THE BUTTON'S HOVER AND FOCUS STATES***/
              input#gobutton:hover, input#gobutton:focus{
              background-color :#399630; /*make the background a little darker*/
              /*reduce the drop shadow size to give a pushed button effect*/
              -webkit-box-shadow: 0 0 1px rgba(0,0,0, .75);
              -moz-box-shadow: 0 0 1px rgba(0,0,0, .75);
              box-shadow: 0 0 1px rgba(0,0,0, .75);
              }
            </style>
  </head>
  <body>
    <div class="container">
        <div class="content">
          @yield('content')
        </div>
    </div>

  </body>
</html>
