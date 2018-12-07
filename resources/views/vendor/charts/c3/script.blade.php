<script type="text/javascript">
    function {{ $chart->id }}_create(data) {
        {{ $chart->id }}_rendered = true;
        var loader_element = document.getElementById("{{ $chart->id }}_loader");
        loader_element.parentNode.removeChild(loader_element);
        document.getElementById("{{ $chart->id }}").style.display = 'block';
        console.log(JSON.stringify(data));
        window.{{ $chart->id }} = c3.generate({
            bindto: '#{{ $chart->id }}',
            data: data,
            {!! $chart->formatOptions(false, true) !!}
        });
    }
    @include('charts::init')
</script>
