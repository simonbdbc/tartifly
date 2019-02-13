@extends('layouts.tartifly')
@section('content')

<aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
               <li style="background-image: url({{ url('images/cover-img-3.jpg') }});">
                   <div class="overlay"></div>
                   {{-- <div class="container-fluid">
                       <div class="row">
                           <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                               <div class="slider-text-inner text-center">
                                    <h3>Ajout d'un nouveau voyage</h3>
                               </div>
                           </div>
                       </div>
                   </div> --}}
               </li>
              </ul>
          </div>
    </aside>

    <div class="colorlib-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-text-inner text-center">
                                <h3>Edition d'un voyage</h3>
                            </div>
                            <form method="post" action="{{ route('update', ['id' => $voyage->id]) }}" id="form_voyage" data-parsley-validate class="form-horizontal form-label-left">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="libelle">Libellé<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="libelle" name="libelle" value="{{$voyage->libelle}}" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pays">Pays<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="pays" name="pays" value="{{$voyage->pays}}" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ville">Ville<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="ville" name="ville" value="{{$voyage->ville}}" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Disponible<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div id="dispo" class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="dispo" value="true"> Oui
                                    </label>
                                    <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="dispo" value="false"> Non
                                    </label>
                                </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="duree">Durée<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="duree" name="duree" value="{{$voyage->duree}}"  required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date-begin">Date de départ</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="date-begin" name="date-begin" value="{{$voyage->date_debut}}" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date-end">Date de retour</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="date-end" name="date-end" value="{{$voyage->date_fin}}" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cout">Coût<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="cout" name="cout" value="{{$voyage->cout}}" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">description</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="description" name="description" value="{{$voyage->description}}" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="photo">Photo</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="photo" name="photo" value="{{$voyage->photo}}" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>


                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button class="btn btn-primary" type="button">Annuler</button>
                                        <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success">Modifier</button>
                                </div>
                            </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
        <!-- /page content -->
   @stop
