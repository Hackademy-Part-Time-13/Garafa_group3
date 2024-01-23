<form action="{{route('set.language.locale',$lang)}}" method="POST">
    @csrf
    
    <button type="submit" class="text-center">
        <span class="flag-icon flag-icon-{{$nation}}"></span>
    </button>

</form>