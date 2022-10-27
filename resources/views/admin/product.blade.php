@extends('layouts.dash')

@section('content')
    <section id="main-content">
      <section class="wrapper ">
        <h3><i class="fa fa-angle-right"></i> Product form</h3>
        <div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">add product</h4>
            <div id="message"></div>
            <form action="{{route('store-product')}}" method="POST" enctype="multipart/form-data">
             @csrf
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="contact-name" placeholder="Your product name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <div class="validate"></div>
                
              </div>      
              <div class="loading"></div>
              <div class="error-message"></div>
               <div class="form-group">
                  <Textarea type="text" name="description" placeholder="add an description" class="form-control"></Textarea>   
              </div>
               <div class="form-group">
                  <input type="file" name="image" > 
              </div>

              <div class="form-group">
                <input type="text" name="price" class="form-control" id="contact-name" placeholder="Your product name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <div class="validate"></div>
                
              </div>     

               <div class="form-group">
              <select name="categorie_id">
              @foreach($categories as $categorie)
                <option value="{{$categorie->id}}">{{$categorie->name}}</option>
              @endforeach
              </select>    
              </div>
             
              <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary">add product</button>
              </div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </form>
          </div>       
        </div>
      </section>
      <!-- /wrapper -->
    </section>
@endsection