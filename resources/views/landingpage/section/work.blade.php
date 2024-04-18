<section class="portfolio section" id="work">
    <div class="container">
        <div class="row">
            <div class="section-title padd-15">
                <h2>Portfolio</h2>
            </div>
        </div>
        <div class="row">
            <div class="portfolio-heading padd-15">
                <h2>My Last Project:</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($work as $item)
            <div class="portfolio-item padd-15" 
                data-name="{{ $item->name }}"
                data-description="{{ $item->description }}">
                <div class="portfolio-item-inner shadow-dark">
                    <div class="portfolio-img" >
                        <img src="{{ asset('upload/'.$item->image) }}" alt="">
                    </div>
                    <a href="{{route('site.index', ['site'=>$item->site])}}" target="">{{$item->site}}</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Hidden Popup Container -->
    <div class="popup" id="portfolio-popup">
        <div class="popup-content">
            <span id="close-btn" class="close-btn"><i class="fa fa-close"></i></span>
            <!-- Popup Content -->
            <h2 id="popup-name"></h2>
            <p id="popup-description"></p>
           
        </div>
    </div>
</section>