@extends ('layouts.app')

@section ('studentscontent')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                {{__('edit product')}}
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('students.index')}}">{{__('back')}}</a>
            </div>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>{{__('kazkas nutiko!')}}</strong><br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
            </ul>
        </div>
        @endif

    <form action="{{route('students.update',$student->id) }}" method="post">
        @csrf

        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                     @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-xs-12 col-sm">
                            <strong>{{__('Studname')}}</strong>
                            <input type="text" name="studname" value="{{$student->studname}}"
                                   class="form-control" placeholder="Name">
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </form>
