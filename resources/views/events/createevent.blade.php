@extends('layout')

@section('title')
<title>Création évènement</title>
@endsection
    @section('contenu')



        <div class="container container-fluid blc text-center">
            <div class="row ble1 menuTop">
                <h1>Ajouter un évènement</h1>
            </div>

            <form action="{{ route('events.store') }}" enctype="multipart/form-data" method="POST">

                @csrf
                    <div class="marginTop25">
                        <div class="col-lg-3 col-md-3 col-sm-3"><label>Titre</label> <input type="text" name="title"></div>            
                        <div class="col-lg-3 col-md-3 col-sm-3"><label>Description</label><input type="text" name="description"></div>
                        <div class="col-lg-2 col-md-2 col-sm-2"><label>Date</label> <input type="date" name="date_event"></div> 
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <label>Récurence</label>
                            <select name="recurence">
                                <option value="0">non-récurent</option>
                                <option value="1">journalier</option>
                                <option value="2">hebdomadaire</option>
                                <option value="3">une fois toute les deux semaines</option>
                                <option value="4">mensuel</option>
                                <option value="5">tous les deux mois</option>
                                <option value="6">trimestriel</option>
                                <option value="7">annuel</option>
                            </select>
                        </div> 
                    </div>
                    <input type="hidden" name="id_author" value="{{ auth()->user()->id }}">
                

                <button type="submit">Submit</button>
            </form>
        </div>

