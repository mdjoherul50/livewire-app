<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Livewire App</title>
    @livewireStyles
</head>
<body>
    @livewire('hello-world')

   ..........................
   @livewire('say-hi' , ['name' => $name])

    @livewireScripts
</body>
</html>