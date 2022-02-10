<section class="comics-list">
    
    <div class="container">
    
        <div class="button-top">
            <a href="#">CURRENT SERIES</a> 
        </div>
    
        <div class="comics">
            @foreach($comics as $comic)         
                <div class="comic">
                    <a href="{{ route('comics-details', ['id' => $comic['id']]) }}">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                        <h3>{{$comic['title']}}</h3>
                    </a>
                </div>
            @endforeach
        </div>
    
        <div class="main-button">
            <a href="#">LOAD MORE</a>
        </div>
    </div>
</section>
