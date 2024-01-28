<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Broadcasting Test</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="antialiased">
    @component('components.nav-bar')
    @endcomponent

    {{-- @if ($errors->any())
        @foreach ($errors->all() as $error)
            @component('components.alert-error', ['error' => $error])
            @endcomponent
        @endforeach
    @endif --}}

    @if (session('error'))
        @component('components.alert-error', ['error' => session('error')])
        @endcomponent
    @endif

    @if (session('success'))
        @component('components.alert-success', ['success' => session('success')])
        @endcomponent
    @endif

    <div class="container mx-auto px-4">
        @yield('content')
    </div>

    <div class="toast toast-end"></div>

    @livewireScripts
    @stack('scripts')

    <script>
        const toast = document.querySelector('.toast.toast-end');
    </script>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                let alertEl_{{ $loop->index }} = document.createElement('div');
                alertEl_{{ $loop->index }}.setAttribute('id', 'alert-{{ $loop->index }}');
                alertEl_{{ $loop->index }}.classList.add('alert', 'alert-error');
                alertEl_{{ $loop->index }}.innerHTML =
                    '<svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg><span>{{ $error }}</span>';

                toast.appendChild(alertEl_{{ $loop->index }});

                setTimeout(() => {
                    alertEl_{{ $loop->index }}.style.visibility = 'none';
                    setTimeout(() => {
                        alertEl_{{ $loop->index }}.remove();
                    }, 1000);
                }, 4000);
            </script>
        @endforeach
    @endif
</body>

</html>
