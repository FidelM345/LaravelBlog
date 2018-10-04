@extends('main')


@section('title')
Home

@endsection

@section('content')

            <div class="row">
            <div class="col-md-12">
            <div class="jumbotron">
               <h1>Hello, welcome to our laravel blog</h1>
                <p class="lead">we are here to serve you. Catch the latest udates on this site</p>
               <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
             </div>
            </div>
            </div><!--end of header row -->

            <div class="row">
                <div class="col-md-8">


                    @foreach ($posts as $item)


                    <div class="post">
                            <h3>{{$item->title}}</h3>

                          <p>
                                {{ substr($item->description,0,200)}}{{strlen($item->description)>50?"....":""}}

                          </p>

                           <a href="" class="btn btn-primary">Read more</a>

                         </div>

                            <hr>


                    @endforeach


                        <br>

                </div>

                      <div class="col-md-3 col-md-offset-1">
                          <h3>SideBar</h3>
                          According to the prosecutor, the Constitution states that life begins
                        at conception and that the State cannot overlook the fact that a second person
                        was killed during the murder of the expectant mother.

                      </div>


            </div>


 @endsection

