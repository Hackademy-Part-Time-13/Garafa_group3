<form action="{{route('set.language.locale',$lang)}}" method="POST">
    @csrf
    <button type="submit" class="text-center @if($nation == 'it') ita_flag @elseif($nation == 'gb') gb_flag @elseif($nation == 'jp') jp_flag @endif" >
        {{-- <span class="flag-icon flag-icon-{{$nation}} " ></span> --}}
       
    </button>

</form>