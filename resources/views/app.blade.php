<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Livewire Poll</title>

    <script src="https://cdn.tailwindcss.com"></script>

    {{-- blade-formatter-disable --}}
  <style type="text/tailwindcss">
    .btn {
      @apply rounded-md px-2 py-1 text-center font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50
    }

    label {
      @apply block uppercase text-slate-700 mb-2
    }

    input, 
    textarea {
      @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none
    }

    .error {
      @apply text-red-500 text-sm
    }
  </style>
  {{-- blade-formatter-enable --}}

    @livewireStyles
</head>

<body class="container mx-auto mt-10 mb-10 max-w-lg">
    @livewireScripts

    <div class="flex flex-col">
        <div class="w-full">
            <h2 class="my-4 text-2xl text-center font-bold">Create Poll</h2>
            @livewire('create-poll')
        </div>

        {{-- <div class="border my-4"></div> --}}

        <div class="w-full">
            <h2 class="my-4 text-2xl text-center font-bold">Available Polls</h2>
            @livewire('polls')
        </div>
    </div>
</body>

</html>
