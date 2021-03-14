@extends('ui.layouts.app')

@section('content')


    <!-- CKEditor -->
    <div class="col-lg-12">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session('success'))
            <div class="alert alert-success">
                <li>{{ session('success') }}</li>
            </div>
        @endif

            @if(isset($wordCount))
                <div class="alert alert-success">
                    <li>Total Lenght: {{$totalLenght}}</li>
                    <li>Word Count: {{$wordCount}}</li>
                    <li>Sentence Count: {{$sentenceCount}}</li>
                </div>
            @endif
        <section class="panel">
            <header class="panel-heading">
                Text
            </header>
            <div class="panel-body">
                <div class="form">
                    <form action="{{route('compute')}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-sm-2">Text</label>
                            <div class="col-sm-10">
                                <textarea class="form-control " name="text" rows="6"></textarea>
                                <button class="btn btn-primary float-right" type="submit"> Submit</button>
                            </div>

                        </div>


                    </form>
                </div>
            </div>
        </section>
    </div>


@endsection

@section('css')

@endsection

@section('js')

@endsection
