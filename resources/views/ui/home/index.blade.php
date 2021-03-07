@extends('ui.layouts.app')

@section('content')


    <!-- CKEditor -->
    <div class="col-lg-12">
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
