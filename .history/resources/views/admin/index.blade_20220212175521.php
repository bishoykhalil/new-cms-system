<x-admin-master>

@section('content')


<h1 class="h3 mb-4 text-gray-800">Dash Board</h1>


<div class="card-body">
    <div class="chart-pie pt-4"><div class="chartjs-size-monitor">5<div class="chartjs-size-monitor-expand">6<div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
      <canvas id="myPieChart" width="301" height="253" style="display: block; width: 301px; height: 253px;" class="chartjs-render-monitor"></canvas>
    </div>
    <hr>
    Styling for the donut chart can be found in the <code>/js/demo/chart-pie-demo.js</code> file.
  </div>

@endsection

@section('scripts')

<script src={{asset('js/demo/chart-pie-demo.js')}}>
</script>
<script>


</script>


@endsection

</x-admin-master>