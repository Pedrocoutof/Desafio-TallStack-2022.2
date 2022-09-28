<div x-data="{ open: false }">
    <span @click="open = true">@yield('trigger')</span>

    <div x-show="open" @click.outside="open = false">
        @yield('content')
    </div>
</div>
