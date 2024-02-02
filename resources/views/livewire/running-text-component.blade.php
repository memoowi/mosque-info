<div class="bg-teal-600 bg-opacity-50 px-6 py-2">
    <div class="flex gap-2 text-lg marquee">
        @foreach ($data as $item )
            <p class="run">
                &nbsp;&nbsp;
                {!! $item->informasi !!}
                &nbsp;&nbsp;
            </p>
            <span>|</span>
        @endforeach
    </div>
</div>
