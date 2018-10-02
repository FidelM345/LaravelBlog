@extends('main')

@section('title','Contacts')

@section('content')

<div class="row">
    <div class="col-md-12">

        <h1>Contact me at:</h1>


        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" class="form-control" id="subject" placeholder="Subject">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Message:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5">
                </textarea>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


    </div>



</div>

<br>



<p>Other contacts include:</p>

<p><b>Email: </b>{{$contacts['email']}}</p>
<p><b>Mobile No: </b>{{$contacts['mobile']}}</p>



@endsection
