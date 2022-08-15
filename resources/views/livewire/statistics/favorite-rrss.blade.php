<div class="px-4 mx-auto">
    <div class="p-6 m-10 bg-white rounded shadow">
        {!! $chart->container() !!}
    </div>
    
    <script src="{{ $chart->cdn() }}"></script>
    {{ $chart->script() }}
</div>

