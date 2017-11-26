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
                        <h3 class="box-title">Modifier promotion d'un produit</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('promotions.update', $promotion->id) }}">

                        {{ csrf_field() }}

                        <div class="box-body">

                            <div class="form-group">
                                <label for="nom">Pourcentage</label>
                                <input value="{{ $promotion->pourcentage }}" type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
                            </div>

                            <div class="form-group">
                                <label for="categorie">prix final</label>
                                <input value="{{ $promotion->prixfinal }}" type="text" class="form-control" name="prixfinal" id="prixfinal" placeholder="Prix final">
                            </div>

                            <div class="form-group">
                                <label for="marque">Date début</label>
                                <input value="{{ $promotion->datedebut }}" type="text" class="form-control" name="datedebut" id="marque" placeholder="Date debut">
                            </div>

                            <div class="form-group">
                                <label for="prix">Date fin</label>
                                <input value="{{ $promotion->datefin }}" type="text" class="form-control" name="datefin" id="datefin" placeholder="Date fin">
                            </div>

                            <div class="form-group">
                                <label for="Quantite">Station</label>
                                <input value="{{ $promotion->station->nom }}" type="text" class="form-control" name="nom" id="station" placeholder="Station">
                            </div>
                            <div class="form-group">
                                <label for="Quantite">Produit</label>
                                <input value="{{ $promotion->product->nom }}" type="text" class="form-control" name="nom" id="product" placeholder="Produit">
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