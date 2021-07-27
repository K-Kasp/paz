@extends ('layouts.app')

@section ('studentscontent')

    <div class="row">
          <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    {{__('Prideti nauja mokini')}}
                </div>
              <div class="pull-right">
                  <a class="btn btn-primary" href="{{route('students.index') }}">Back</a>
              </div>
          </div>
    </div>

    @if ($errors->any())

        <div class="alert alert-danger">
            <strong>{{__('Kazkas nutiko!')}}</strong> <br><br>
            <ul>
                @foreach($errors->all()as $error)\
                    <li>{{$error}}</li>
                    @endforeach
            </ul>
        </div>
        @endif

        <form action="{{route('students.store')}}" method="POST">
            @csrf

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        {{__('StudentName')}}
                        <input type="text" name="'studname" class="form-control" placeholder="studname">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                     {{__('Course')}}
                        <input type="text" name="'course" class="form-control" placeholder="course">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      {{__('StudentName')}}
                        <input type="text" name="'studname" class="form-control" placeholder="studname">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        {{__('Mark')}}
                        <input type="text" name="'mark" class="form-control" placeholder="mark">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
        @endsection

