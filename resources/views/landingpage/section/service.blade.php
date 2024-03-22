<section class="service section " id="service">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Services</h2>
                        </div>
                        </div>
                        <div class="row">
                            @foreach ($service as $item )
                                
                            
                            <!-- service item -->
                            <div class="service-item  padd-15">
                                <div class="service-item-inner">
                                    <div class="icon">
                                        <i class="fa fa-code"></i>
                                    </div>
                                    <h4>{{$item->title}}</h4>
                                    <p>{{$item->description}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
            </section>