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
                        <h3 class="box-title">Modifier gerant</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('managers.update', $manager->id) }}">

                        {{ csrf_field() }}

                        <div class="box-body">

                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input value="{{ $manager->Nom }}" type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
                            </div>

                            <div class="form-group">
                                <label for="categorie">Categorie</label>
                                <input value="{{ $manager->Prenom }}" type="text" class="form-control" name="Prenom" id="Prenom" placeholder="Categorie">
                            </div>

                            <div class="form-group">
                                <label for="marque">Adresse</label>
                                <input value="{{ $manager->Adresse }}" type="text" class="form-control" name="Adresse" id="Adresse" placeholder="Marque">
                            </div>

                            <div class="form-group">
                                <label for="prix">Phone</label>
                                <input value="{{ $manager->Phone }}" type="text" class="form-control" name="Phone" id="Phone" placeholder="Prix">
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