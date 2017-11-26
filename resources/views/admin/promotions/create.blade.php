@extends('layouts.main')

@section('content')

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Nouvelle promotion</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('promotions.store', $product->id) }}">

                        {{ csrf_field() }}

                        <div class="box-body">

                            <div class="form-group">
                                <label for="pourcentage">Pourcentage</label>
                                <input type="text" class="form-control" name="pourcentage" id="pourcentage" placeholder="Pourcentage">
                            </div>

                            <div class="form-group">
                                <label for="datedebut">Date début</label>
                                <input type="text" class="form-control" name="datedebut" id="datedebut" placeholder="Date début">
                            </div>

                            <div class="form-group">
                                <label for="datefin">Date fin</label>
                                <input type="text" class="form-control" name="datefin" id="datefin" placeholder="Date fin">
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Confirmer</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->

            </div>
        </div>
    </section>

@endsection