<script type="text/javascript">
    function {{ $chart->id }}_create(data) {
        {{ $chart->id }}_rendered = true;
        var loader_element = document.getElementById("{{ $chart->id }}_loader");
        loader_element.parentNode.removeChild(loader_element);
        window.{{ $chart->id }} = echarts.init(document.getElementById("{{ $chart->id }}"),'{{ $chart->theme }}');
		window.{{ $chart->id }}.setOption({
            series: data,
            {!! $chart->formatOptions(false, true) !!}
        });
    }
    @include('charts::init')
</script>
