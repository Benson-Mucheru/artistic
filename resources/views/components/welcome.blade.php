<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="C:\Users\pc\Herd\artistic\resources\views\components\welcome.blade.php">
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Artistic</title>
</head>
<body>
    <h1 class="p-8">Hello {{$name ?? 'Mike'}} to Laravel </h1>
   @php 
   $people = [
        'first' => 'Ben',
        'sec' => 'Mike',
        'third' => 'Nelson'
   ]
   @endphp

   @foreach ($people as $position => $person)
       <p>I am {{$position}} : {{$person}} </p>
   @endforeach

</body>
</html>