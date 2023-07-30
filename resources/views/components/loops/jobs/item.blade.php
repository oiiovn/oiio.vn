<x-card>
    <div class="order-note card-body "  style="padding:0px !important;">
        @isset($header)
            {{ $header }}
        @endisset
        @include('jobs.loop.job-simple-content')
        {{ $slot }}
        @isset($footer)
            {{ $footer }}
        @endisset
    </div>
</x-card>