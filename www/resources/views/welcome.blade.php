<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hello Bulma!</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
        <link href="https://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
        <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
       <style>
            .vsc-initialized, .section {
                background-color: rgb(27, 28, 39) !important;
            }

            body {
                background-color: rgb(27, 28, 39) ;
            }
            html,body{
            height:100%;
            }
            .btx{
                border: none;
                margin-left: 3px;
                margin-right: 3px;
                width: 35px !important;
                height: 35px !important;
                text-align: center;
                line-height: 35px;  
                display: inline-block;
                border-radius: 12px;
                background: linear-gradient(145deg, #1d1e2a, #181923);
                box-shadow:  5px 5px 8px #0b0b10, 
                            -5px -5px 8px #2b2d3e;
             }
        </style>
    </head>
    <body>
       
        <section id="app" class="section">
            <div class="container">
                <div  class="columns">
                    <div  class="column">
                        <a target="_blank" href="https://open.spotify.com/artist/4i0SjpbBjUgLY2QLzYliOP" class="btx " >
                            <i class="fab fa-spotify"></i>
                        </a>
                                     
                        <a target="_blank" href="https://trello.com/b/Wk7W5xT6/quarks-board" class="btx " >
                            <i class="fab fa-trello"></i>
                        </a>

                        <a target="_blank" href="https://mail.google.com/mail/u/0/" class="btx " >
                            <i class="fas fa-envelope"></i>
                        </a>
                         
                        <a target="_blank" href="https://web.whatsapp.com/" class="btx " >
                            <i class="fab fa-whatsapp"></i>
                        </a>   
                    </div>
                </div>
                
                <div  class="columns">
                    <div  class="column">
                        <example-component></example-component>
                    </div>
                    <div  class="column">
                        <list-task></list-task>
                    </div>
                </div>
            </div>
            

           
        </div>
        <script src="https://sdk.scdn.co/spotify-player.js"></script>
        <script>

        </script>
        <script src="js/app.js">
        </script>
    
            
      
    </body>
</html>
