<main>
    <div class="container">
        <div class="comics">
            @foreach($comics as $comic)
                <div class="comic">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    <h3>{{$comic['title']}}</h3>
                </div>
            @endforeach
        </div>
        <div class="main-button">
            <a href="#">LOAD MORE</a>
        </div>
    </div>
</main>