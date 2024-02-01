<div class="seller_continor">

    <div class="user_img_name text-center">
        <img class="image_profile" src="https://picsum.photos/400" alt="">
        <h2>{{ $ad->user->name }}</h2>

        @if ($ad->user->is_revisor)           
        <h6>revisore</h6>   
        @else
        <h6>utent</h6>              
        @endif

    </div>

    <div class="user_icons text-center">
        <div class="">
            <i class="bi bi-heart"></i>
            <p>23</p>

        </div>
        <div>

            <i class="bi bi-chat-square-text"></i>
            <p>{{App\Models\ChMessage::where('to_id', $user->id)
                ->where('seen', false)
                ->count()}}</p>
        </div>
    </div>
    <p>add frieds</p>
</div>