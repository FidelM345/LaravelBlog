@extends('main')

@section('title','All posts')

@section('content')

<div class="row">
    <div class="col-md-10">
        <h1>All Posts</h1>
    </div>

    <div class="col-md-2">
        <a href="{{route('posts.create')}}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create new Posts</a>
    </div>

   <div class="col-md-12">
       <hr>
   </div>

</div> <!--end of row-->

<div class="row">
    <div class="col-md-12">

            <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col">Created at</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>

                         @foreach ($posts as $item)

                             <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->title}}</td>
                                <td>{{ substr($item->description,0,50)}}{{strlen($item->description)>50?"....":""}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>  <a href="{{route('posts.show',$item->id)}}"class="btn btn-default btn-primary">View</a>
                                      <a href="{{route('posts.edit',$item->id)}}"class="btn btn-default btn-success">Edit</a>
                                </td>
                              </tr>


                         @endforeach

                    </tbody>
                  </table>

                    <div class="text-center">

                            {!!$posts->links() !!}

                    </div>

    </div>
</div>




@endsection

