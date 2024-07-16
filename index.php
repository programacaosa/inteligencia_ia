<!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="theme-color" content="#103ef2">
            <title>BootBlocks</title>
            <!-- bootstrap css -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <!-- bootstrap icons -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
            <!-- sweetalert -->
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <!--material icons-->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!-- Google Gemini -->
         <script type="importmap">
         {
           "imports": {
             "@google/generative-ai": "https://esm.run/@google/generative-ai"
           }
         }
       </script>
        
            </head>
        <body>
        <div id="loading-page-bb" style="opacity: 0; height: 100%;">
            <!-- add_google_gemini --><script type="module">
  import { GoogleGenerativeAI } from "@google/generative-ai";
  const API_KEY = 'AIzaSyAx8ZN5Pp7yiXIYXJcU42DlbsEU7R80Yug';
   window.genAI = new GoogleGenerativeAI(API_KEY);

</script>





  <div class="container" id="id_do_container">
    <div style="width:10px;height:10px;"></div>
    <input type="text" class="form-control" id="input" placeholder="Digite uma pergunta">
    <div style="width:10px;height:10px;"></div>
    <button type="button" onclick="enviar()" id='btn_enviar' class="btn btn-primary">Enviar</button>
    <div style="width:10px;height:10px;"></div>
    <textarea class="form-control" id="resposta" rows="10"></textarea></div>

            <!-- bootstrap js -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <!-- jquery -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js" integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <!-- firebase-app -->
            <script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-app.js"></script>
            <!-- firebase-database -->
            <script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-database.js"></script>
            <!-- firebase-auth -->
            <script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-auth.js"></script>
            <!-- codigo javascript -->
            <script src= "index.js"> </script>
        </div>
        </body>
        </html>