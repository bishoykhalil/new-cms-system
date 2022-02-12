<x-admin-master>

@section('content')


<h1 class="h3 mb-4 text-gray-800">Dash Board</h1>

<canvas id="myChart" ></canvas>

@endsection

@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js">
</script>

<script>

const DATA_COUNT = 5;
const NUMBER_CFG = {count: DATA_COUNT, min: 0, max: 100};

const data = {
  labels: ['Red', 'Orange', 'Yellow', 'Green', 'Blue'],
  datasets: [
    {
      label: 'Dataset 1',
      data: Utils.numbers(NUMBER_CFG),
      backgroundColor: Object.values(Utils.CHART_COLORS),
    }
  ]
};

</script>


@endsection

</x-admin-master>