<div class="head_content">
    <p class="h1 " >
        {{__('ui.homept1')}}<span class="text-white"> {{__('ui.homept2')}}</span> 
    </p>

    <form class="header_form" action="{{route('ad.searched')}}">
        <input type="text" required name="searched">
        <button type="submit">Cerca</button>
    </form>
</div>