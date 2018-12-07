<script type="text/javascript">
    function {{ $chart->id }}_create(data) {
        {{ $chart->id }}_rendered = true;
        var loader_element = document.getElementById("{{ $chart->id }}_loader");
        loader_element.parentNode.removeChild(loader_element);
        @if ($chart->type)
            let {{ $chart->id }}_type = {{ $chart->type }}
        @else
            let {{ $chart->id }}_type = data[0].renderAs;
        @endif
        if (!{!! json_encode($chart->keepType) !!}.includes({{ $chart->id }}_type)) {
            {{ $chart->id }}_type = "{{ $chart->comboType }}"
        }
        FusionCharts.ready(function () {
            window.{{ $chart->id }} = new FusionCharts({
                type: {{ $chart->id }}_type,
                renderAt: "{{ $chart->id }}",
                dataFormat: 'json',
                {!! $chart->formatContainerOptions('js', true) !!}
                dataSource: {
                    categories: [{
                        category: {!! $chart->formatLabels() !!}
                    }],
                    dataset: data,
                    chart: {!! $chart->formatOptions(true) !!}
                }
            }).render();
        });
    }
    @include('charts::init')
</script>
