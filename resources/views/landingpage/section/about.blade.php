<section class="about section " id="about">
    @foreach ($about as $item )
        
    
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>About Me</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="about-content padd-15">
                            <div class="row">
                                <div class="about-text padd-15">
                                    <h3>I'm {{$item->name}} and <span>{{$item->role}}</span></h3>
                                    <p>{{$item->description}}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="personal-info padd-15">
                                    <div class="row">
                                        <div class="info-item padd-15">
                                            <p>Birthday:<span>{{$item->month}} {{$item->day}} {{$item->year}}</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Age:<span>{{$item->age}}</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Website:<span>{{$item->site}}</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Email:<span>{{$item->email}}</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Degree:<span>{{$item->course}}</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Phone:<span>{{$item->phone}}</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>City:<span>{{$item->location}}</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Freelance:<span>Available</span></p>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="row">
                                        <div class="buttons padd-15">
                                            <a href="" class="btn">Download CV</a>
                                            <a href="#contact" class="btn hire-me">Hire Me</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="skills padd-15">
                                    <div class="row">
                                        @foreach ($skill as $id )
                                            
                                       
                                        <div class="skill-item padd-15">
                                            <h5>{{$id->title}}</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: {{$id->percent}}%;"></div>
                                                <div class="skill-percent">{{$id->percent}}</div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="education padd-15">
                                    <h3 class="title">Education</h3>
                                   
                                    <div class="row">
                                        <div class="timeline-box padd-15">
                                            <div class="timeline shadow-dark">
                                               <!-- timeline item -->
                                               @foreach ($education as $i )
                                               <div class="timeline-item">
                                                 <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                    <i class="fa fa-calendar"></i> {{$i->start}}
                                                    </h3>
                                                    <h4 class="timeline-title">{{$i->level}}</h4>
                                                    <p class="timeline-text">Wester Mindanao State University</p>
                                               </div>  
                                              @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="experience padd-15">
                                    <h3 class="title">Experience</h3>
                                    <div class="row">
                                        <div class="timeline-box padd-15">
                                            <div class="timeline shadow-dark">
                                               <!-- timeline item -->
                                               @foreach ($experience as $ex )
                                                   
                                              
                                               <div class="timeline-item">
                                                 <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                    <i class="fa fa-calendar"></i> {{$ex->start}}-{{$ex->end}}
                                                    </h3>
                                                    <h4 class="timeline-title">{{$ex->company}}</h4>
                                                    <p>{{$ex->role}}</p>
                                                    
                                               </div>
                                               @endforeach
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>