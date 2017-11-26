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
                        <h3 class="box-title">Nouveau gérant</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('managers.store') }}">

                        {{ csrf_field() }}

                        <div class="box-body">

                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
                            </div>

                            <div class="form-group">
                                <label for="categorie">Prenom</label>
                                <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom">
                            </div>

                            <div class="form-group">
                                <label for="marque">Adresse</label>
                                <input type="text" class="form-control" name="adresse" id="adresse" placeholder="Adresse">
                            </div>

                            <div class="form-group">
                                <label for="prix">Phone</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
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