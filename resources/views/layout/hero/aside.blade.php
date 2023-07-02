<div class="col-md-4">
    @section('aside')
    <ul class="list-group">
        <li class="list-group-item active">Recent Projects</li>
        @foreach ($recentProjects as $recent)
          <li class="list-group-item">{{$recent->pro_title}}</li>
        @endforeach
    </ul>
    @show
</div>