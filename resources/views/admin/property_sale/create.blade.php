@extends('layouts.backend.app')

@section('title','Ajouter un nouveau bien')

@push('css')

@endpush

@section('content')
    <div id="page-content">
        <!-- Forms Components Header -->
        <div class="content-header">
            <div class="row">
                <div class="col-sm-6">
                    <div class="header-section">
                        <h1>Ajouter un nouveau bien</h1>
                    </div>
                </div>
                <div class="col-sm-6 hidden-xs">
                    <div class="header-section">
                        <ul class="breadcrumb breadcrumb-top">
                            <li>User Interface</li>
                            <li>Forms</li>
                            <li><a href="">Components</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Forms Components Header -->

        <!-- Property add informations -->
        <div class="block">
            <div class="block-title">
                <div class="block-options pull-right">
                    <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class">Borderless</a>
                </div>
                <h2>Renseignez le formulaire ci-dessous</h2>
            </div>

            <!-- CKEditor Content -->
            <form action="{{ route('admin.property.store') }}" method="post" class="form-horizontal form-bordered"
                  enctype="multipart/form-data">
                  @csrf
                <!-- Nom, ville, quartier, ... -->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="name">Nom <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Entrez le nom du bien" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="city">Ville <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" id="city" name="city" class="form-control" placeholder="Dans quelle ville se trouve le bien ?" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="locality">Localisation <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" id="locality" name="locality" class="form-control" placeholder="Commune - Quartier - en face de ..." required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="surface">Surface (m²) <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" id="surface" name="surface" class="form-control" placeholder="Entrez la surface du bien" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="pieces_number">Nb. pièces <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" id="pieces_number" name="pieces_number" class="form-control" placeholder="Combien de pièces comporte ce bien" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="price">Prix (FCFA) <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" id="price" name="price" class="form-control" placeholder="Entrez le prix de ce bien" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="caution">Caution (mois) <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" id="caution" name="caution" class="form-control" placeholder="Entrez la durée de la caution" required>
                    </div>
                </div>
                <div class="form-group">
                      <label class="col-md-3 control-label" for="status">Statut <span class="text-danger">*</span></label>
                      <div class="col-md-6 {{ $errors->has('status') ? 'focused error' :''}}">
                          <select id="status" name="status" class="form-control" required>
                              <option value="1">Disponible</option>
                              <option value="0">Indisponible</option>
                          </select>
                      </div>
                </div>

                <div class="form-group form-actions">
                    <div class="col-xs-9 ">
                        <a href="{{ route('admin.property.index') }}">
                            <button type="button" class="btn btn-effect-ripple btn-danger"><i class="fa fa-check"></i> Annuler</button>
                        </a>
                        <button type="submit" class="btn btn-effect-ripple btn-primary"><i class="fa fa-check"></i> Valider</button>
                    </div>
                </div>
            </form>
            <!-- END CKEditor Content -->
        </div>
        <!-- END CKEditor Block -->
    </div
@endsection

@push('script')

@endpush

