<section class="contact section " id="contact">
<div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Contact Me</h2>
                        </div>
                        </div>
                        <h3 class="contact-title padd-15">Have You any Question?</h3>
                        <h4 class="contact-sub-title padd-15">I'M AT YOUR SERVICE</h4>
                        <div class="row">
                            <!-- contact item -->
                            @foreach ($contact as $li )
   
                            <div class="contact-info-item padd-15">
                                <div class="icon"><i class="fa fa-phone"></i></div>
                                <h4>Call us On</h4>
                                <p>{{$li->number}}</p>
                            </div>
                            
                            <div class="contact-info-item padd-15">
                                <div class="icon"><i class="fa fa-marker"></i></div>
                                <h4>Office</h4>
                                <p>{{$li->location}}</p>
                            </div>  

                            <div class="contact-info-item padd-15">
                                <div class="icon"><i class="fa fa-envelope"></i></div>
                                <h4>Email</h4>
                                <p>{{$li->email}}</p>
                            </div>  

                            <div class="contact-info-item padd-15">
                                <div class="icon"><i class="fa fa-globe-europe"></i></div>
                                <h4>Website</h4>
                                <p>{{$li->site}}</p>
                            </div>  
                            @endforeach
                        </div>
                        <h3 class="contact-title padd-15">SEND ME AN EMAIL</h3>
                        <h4 class="contact-sub-title padd-15">I'M VERY RESOPONSIVE TO MESSAGE</h4>
                        <div class="row">
                            <div class="contact-form padd-15">
                                <div class="row">
                                    <div class="form-item col-6 padd-15">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" placeholder="name">
                                        </div>
                                    </div>
                                    <div class="form-item col-6 padd-15">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" placeholder="xxxx@gmail.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-item col-12 padd-15">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="subject" placeholder="subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-item col-12 padd-15">
                                        <div class="form-group">
                                            <textarea name=""  class="form-control" id="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-item col-12 padd-15">
                                        <button onclick="sendMail()" class="btn" >Send Message</button>  
                                    </div>
                                </div>
                            </div>

                        </div>
                </div>


                {{-- message --}}
               
                
                    
                <script type="text/javascript"
                src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
            </script>   
   
                <script type="text/javascript">
                (function(){
                emailjs.init("GPElQgkX0JW2B1YFY");
                })();
                </script>
             </section>