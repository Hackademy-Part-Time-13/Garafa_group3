<div class="card mb-3 mx-2 p-0" style="width: 50mm; height: 65mm">
    <img src="https://cdn-icons-png.flaticon.com/512/55/55283.png" class="card-img-top" style="height: 40mm">
    <div class="card-body py-2">
      <h5 class="card-text text-center"><a href="{{route('adsByCat',$category)}}">{{$title}}</a></h5>
      <p class="card-text text-center">

    @if($ads == 0)
        Nessun annuncio
    @elseif($ads == 1)
        {{$ads}} annuncio
    @elseif($ads > 1)
        {{$ads}} annunci
    @endif 
    

        </p>
    </div>
</div>