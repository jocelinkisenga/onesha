@extends('layouts.dash')

@section('content')
    <section id="main-content">
      <section class="wrapper ">
        <h3><i class="fa fa-angle-right"></i> Entreprise Form</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">add Entreprise</h4>
            <div id="message"></div>
            <form   action="{{route('store-entreprise')}}" method="POST">
             @csrf
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <div class="validate"></div>
                <input type="hidden" value="{{Auth::user()->id}}" name="user_id" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                
              </div>      
              <div class="form-group">
                <input type="text" name="url_name" class="form-control" id="contact-name" placeholder="Your Company url name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <div class="validate"></div>
              </div>  
              <div class="loading"></div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary">add Entreprise</button>
              </div>

            </form>
          </div>

         
        </div>
        <!-- /row -->


        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
@endsection