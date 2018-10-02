@extends('main')

@section('title','view posts')

@section('content')


<div class="row">
    <div class="col-md-8">
        <h1>{{$post->title}}</h1>

        <p>{{$post->description}}</p>


    </div>


    <div class=" well col-md-4">

            <dl class="row">
                    <dt class="col-md-6">Created at: </dt>
                    <dd class="col-md-6">{{ date('M j, Y h:ia',strtotime($post->created_at)) }}</dd>
            </dl>

            <dl class="row ">
                    <dt class="col-md-6">Updated at: </dt>
                    <dd class="col-md-6">{{date('M j, Y h:ia',strtotime($post->updated_at)) }}</dd>
            </dl>

            <div class="row">

                <div class="col-md-6">
                        {!!Html::linkRoute('posts.edit','Edit',[$post->id],['class'=>'btn btn-primary btn-block']) !!}

                </div>

                <div class="col-md-6">

                     {{Form::open(['route'=>['posts.destroy',$post->id],'method'=>'DELETE'])}}

                     {{Form::submit('Delete Post',['class'=>'btn btn-danger btn-block'])}}

                     {{Form::close()}}

                </div>

            </div>

    </div>
</div>




@endsection

