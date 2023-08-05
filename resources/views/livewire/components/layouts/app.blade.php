<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dclaos Accounts</title>
    <link rel="shortcut icon"
        href="https://res.cloudinary.com/dojyijib7/image/upload/v1687863840/lftxhq0adjr4crulle2z.jpg" type="image/x-icon">

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.1/dist/full.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css');
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Lao:wght@300&display=swap');

        .rounded-xl {
            border-radius: 1rem
        }

        * {
            font-family: 'Noto Sans Lao', sans-serif;
        }
    </style>
    @livewireStyles
</head>

<body class="min-w-screen min-h-screen bg-gray-200 flex items-center justify-center px-5 py-5">
    <div class="bg-white text-gray-800 rounded-xl shadow-lg overflow-hidden relative flex"
        style="width:414px;height:736px">
        <div class="bg-white h-full w-full px-5 pt-6 pb-20 overflow-y-auto">
            {{ $slot }}
        </div>

        @include('livewire.components.layouts.navigation')

    </div>
</body>

@livewireScripts

</html>
