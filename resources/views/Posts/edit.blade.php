@extends('main')

@section('title','Edit')

@section('content')

<div class="row">
            {!! Form::model($post,['route'=>['posts.update',$post->id],'method'=>'PUT'])!!}

        <div class="col-md-8">

            {{Form::label('title', 'Blog Title:')}}
            {{Form::text('title',null,['class' => 'form-control input-lg'])}}

            {{Form::label('description', 'Blog Title:',['class' => 'form-spacing-top'])}}
            {{Form::textarea('description',null,['class' => 'form-control'])}}

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
                            {!!Html::linkRoute('posts.show','Cancel',[$post->id],['class'=>'btn btn-danger btn-block']) !!}

                    </div>

                    <div class="col-md-6">

                            {{Form::submit('Save Changes',['class'=>'btn btn-success btn-block'])}}

                    </div>

                </div>

        </div>
        {!! Form::close() !!}
    </div>


@endsection

