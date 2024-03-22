<section class="home section " id="home">
    @foreach ($home as $item )
        
   
                <div class="container">
                    <div class="row">
                        <div class="home-info padd-15">
                            <h3 class="hello"> Hello, my name is <span class="name">{{$item->name}}</span></h3>
                            <h3 class="my-profession">I'm a <span class="typing">{{$item->role}}</span></h3>
                            <p>{{$item->description}}</p>
                            <a href="" class="btn hire-me">Hire me</a>
                        </div>
                        <div class="home-img padd-15">
                            <img src="{{ asset('image/kurt-home.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                @endforeach
            </section>