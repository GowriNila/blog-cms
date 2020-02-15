@extends('main')

@section('title', '| Contact')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <h1>Contact Me</h1>
                <hr>
                <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputname4">Name</label>
      <input type="name" class="form-control" id="inputname4" placeholder="Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
      <label name="message">Message: </label>
      <textarea id="message" name="message" class="form-control" placeholder="Type your message here..."></textarea>
</div>
  <button type="submit" class="btn btn-success">Send Message</button>
</form>

            </div>
        </div>

    @endsection
