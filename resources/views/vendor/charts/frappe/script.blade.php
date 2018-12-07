<script type="text/javascript">
    function {{ $chart->id }}_getType(data) {
        var special_datasets = {!! json_encode($chart->special_datasets) !!};
        for (var i = 0; i < special_datasets.length; i++) {
            for (var k = 0; k < data.length; k++) {
                if (special_datasets[i] == data[k].chartType) {
                    return special_datasets[i];
                }
            }
        }
        return 'axis-mixed';
    }
    function {{ $chart->id }}_create(data) {
        {{ $chart->id }}_rendered = true;
        var loader_element = document.getElementById("{{ $chart->id }}_loader");
        loader_element.parentNode.removeChild(loader_element);
        window.{{ $chart->id }} = new frappe.Chart("#{{ $chart->id }}", {
            {!! $chart->formatContainerOptions('js') !!}
            labels: {!! $chart->formatLabels() !!},
            type: {{ $chart->id }}_getType(data),
            data: {
                labels: {!! $chart->formatLabels() !!},
                datasets: data
            },
            {!! $chart->formatOptions(false, true) !!}
        });
    }
    @include('charts::init')
</script>