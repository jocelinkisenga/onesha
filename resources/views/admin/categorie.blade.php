@extends('layouts.dash')

@section('content')
    <section id="main-content">
      <section class="wrapper ">
        <h3><i class="fa fa-angle-right"></i> categorie Form</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">add categorie</h4>
            <div id="message"></div>
            <form   action="{{route('store-categorie')}}" method="POST">
             @csrf
              <div class="form-group">
                <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <div class="validate"></div>
                <input type="hidden" value="{{Auth::user()->id}}" name="user_id" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >  
              </div>  
              <div class="form-group">
                <select name="entreprise_id">
                @foreach($entreprises as $entreprise)
                  <option value="{{$entreprise->id}}">{{$entreprise->name}}</option>
                @endforeach
                </select>
              </div>    
              <div class="loading"></div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary">Send Message</button>
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