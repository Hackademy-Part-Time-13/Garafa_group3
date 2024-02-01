<div class="home_user_card">

    <div class="user_img_name">
        <img class="image_profile" src="https://picsum.photos/400" alt="">
        <h2>{{ $user->name }}</h2>

        @if ($user->is_revisor)           
        <h6>revisore</h6>   
        @else
        <h6>utente</h6>              
        @endif

    </div>

    <div class="user_icons text-center">
        <div class="">
            <i class="bi bi-heart"></i>
            
            <p>{{$allFavorites}}</p>

        </div>
        <div>

            <i class="bi bi-chat-square-text"></i>
            <p>{{App\Models\ChMessage::where('to_id', $user->id)
                ->where('seen', false)
                ->count()}}</p>
        </div>
    </div>
    <a href="{{route('user.seller.profile', $user)}}" type="button">get in contact</a>
</div>