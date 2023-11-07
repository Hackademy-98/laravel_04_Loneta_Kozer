<div class="col-6">
    <div class="card" style="width: 18rem;">
        <img src="{{$data["img"]}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$data["description"]}}</h5>
          <p class="card-text"></p>
          <a href="{{route('tipo.'.$route,["name"=>$data["name"]])}}" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>