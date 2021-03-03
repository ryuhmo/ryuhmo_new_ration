<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
     <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ration Card Issue Portal</title>
        <!-- Styles -->
        <link rel="stylesheet" href="/css/retrieve.css">
        <link rel="stylesheet" href="/css/apptable.css">
        <link rel="stylesheet" href="/css/form.css">
        <link rel="stylesheet" href="/css/footer.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/mainhome.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        

        
        
      
     </head>
            <body>
                    @yield('content')
                    
                    <footer class="footer">
                    
               <p style="text-align:center">Copyright 2021</p><br>
               <p style="text-align:center">Design by: Ryuhmo</p>
   
        <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
                <a href="https://www.facebook.com/rmachhim"><i class="fa fa-facebook-official"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/rma_chhimchhuak/"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
</footer>
           </body>
</html>