@extends('layouts.app')

@section('main_classes')
comics-details-background
@endsection

@section('main_content')

<section>

  <div class="pre-cover"></div>

  <div class="container">

    <div class="cover">
      <img src="{{ $comics_info ["thumb"] }}" alt="{{ $comics_info ["title"] }}">
      {{-- <div class="cover-text">{{ $comics_info ["type"] }}</div>
      <a href="#" class="cover-text">VIEW GALLERY</a> --}}
    </div>
    
    <div class="section-top">

      <div class="comics-info">

        <h3>{{ $comics_info["title"] }}</h3>
        
        <div class="availability">
          <h5>U.S. Price: {{ $comics_info["price"] }}</h5> 
          <span>AVAILABLE</span>
          <span>Check Availability</span>
        </div>
        
        <div class="comics-description">
          <p>{{ $comics_info["description"] }}</p>
        </div>
      </div>

      <div class="advertisement">
        <h6>ADVERTISEMENT</h6>
        <img src="{{ asset('images/adv.jpg') }}" alt="Advertisement">
      </div>
    </div>
  </div>

  <div class="section-bottom">

    <div class="container">

      <div class="infos">

        <div class="talent">
          <h3>Talent</h3>
    
          <div class="talent-info">
            <h6>Art by:</h6>
              <p class="authors">
                @foreach ($comics_info["artists"] as $artist)
                  <a href="#">{{ $artist }}</a><span>{{ $loop->last ? "." : "," }}</span>
                @endforeach
              </p>
              <h6>Written by:</h6>
              <p class="authors">
                @foreach ($comics_info["writers"] as $writer)
                  <a href="#">{{ $writer }}</a><span>{{ $loop->last ? "." : "," }}</span>
                @endforeach
              </p>
          </div>
        </div>
    
        <div class="specs">
          <h3>Specs</h3>
    
          <div class="specs-info">
            <h6>Series:</h6>
              <p><a href="#" class="text-uppercase">{{ $comics_info["series"] }}</a></p>
            
            <h6>U.S. Price:</h6>
              <p>{{ $comics_info["price"] }}</p>
          
            <h6>On Sale Date:</h6>
            <p>{{ $comics_info["sale_date"] }}</p>
          </div>
        </div>   
      </div>
    </div>
  </div>
</section>
@endsection