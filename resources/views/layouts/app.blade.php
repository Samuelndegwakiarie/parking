<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digi-park</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/style.css')}}">
    @livewireStyles    
</head>
<body>
    
    <header>
      <h1>DIGI-PARK</h1>
    </header>
    <main>
    {{$slot}}
    </main>   
    <footer>
    
    &copy; <script>document.write(new Date().getFullYear())</script> All rights reserved DIGIPARK.

    </footer>
    @livewireScripts
</body>
</html>