@extends('layouts.tartifly')
@section('content')

      <!-- page content -->
      <div class="right_col" role="main">
          <div class="">

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tous les voyages</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                    @if(session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div><br />
                    @endif
                  </div>
                    <a href="{{ route('create') }}" class="btn btn-app">
                      <i class="fa fa-edit"></i> Nouveau
                    </a>
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action" >
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Libellé</th>
                            <th class="column-title">Pays</th>
                            <th class="column-title">Ville</th>
                            <th class="column-title">Date de départ</th>
                            <th class="column-title">Date de retour</th>
                            <th class="column-title">Coût</th>
                            <th class="column-title">Photo</th>
                            <th class="column-title">Description</th>
                            <th class="column-title">Disponibilité</th>
                            <th class="column-title no-link last"><span class="nobr">Actions</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                            @foreach ($voyages as $voyage)
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">{{$voyage->libelle}}</td>
                            <td class=" ">{{$voyage->pays}}</td>
                            <td class=" ">{{$voyage->ville}}</td>
                            <td class=" ">{{$voyage->date_debut}}</td>
                            <td class=" ">{{$voyage->date_fin}}</td>
                            <td class=" ">{{$voyage->cout}}</td>
                            <td class=" ">{{$voyage->photo}}</td>
                            <td class=" ">{{$voyage->description}}</td>
                            <td class=" ">{{$voyage->disponibilite}}</td>
                            <td class="last" style="display: flex;flex-direction: column;justify-content: space-between;">
                                <a href="#" title="Voir"><i class="fa fa-eye"></i></a>
                                <a href="{{route('edit', ['id' => $voyage->id])}}" title="Modifier"><i class="fa fa-pencil"></i>Modifier</a>
                                <a href="{{route('delete', ['id' => $voyage->id])}}" title="Supprimer"><i style="color:#CF270A" class="fa fa-times"></i>Supprimer</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@stop
