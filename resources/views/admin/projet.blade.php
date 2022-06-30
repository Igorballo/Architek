@extends('layout/master')

@section('content')
        <!-- MAIN CONTENT-->
<div class="login-wrap width = 150px" style="margin-top: 60px; ">
        <div class="login-content" style="width: 550px;">
            <div class="login-form" >
                <form action="{{ route('projetadmin') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field()}}
                    
                    <div class="form-group ">
                        <label>Etat du projet</label>
                        <div class="select-style">
                        <select name="statut" >
                                <option value="">Choisir l'etat du projet</option>
                                <option value="complete">Projet finaliser</option>
                                <option value="running">Projet en cour</option>
                                <option value="upcoming">Projet à venir</option>
                        </select>
                        </div>                
                        {!! $errors->first('titre','<span class="error">:message</span>') !!}
                    </div>
                    <div class="form-group">
                        <label>Nom du projet</label>
                        <input class="au-input au-input--full" type="text" name="nom_projet" placeholder="-- --">
                        {!! $errors->first('nom_projet','<span class="error">:message</span>') !!}
                    </div>
                    <div class="form-group">
                        <label>Description du projet</label>
                        <textarea class="au-input au-input--full" name="description" cols="30" rows="3" placeholder="--  --"></textarea>
                        {!! $errors->first('description','<span class="error" >:message</span>') !!} 
                    </div>        
                    <div class="imagebox">
                    <div class="setting image_picker">
                        <h2>Image descriptive</h2>
                        <div class="settings_wrap">
                            <label class="drop_target" style="padding-left: 6px; padding-top: 5px;">
                                <div class="image_preview"></div>
                                <input id="inputFile" type="file" name="photo"/>
                            </label>
                            <div class="settings_actions vertical">
                                <a data-action="choose_from_uploaded">
                                    <i class="fa fa-picture-o"></i> Choisir une image</a>
                                <a class="disabled" data-action="remove_current_image">
                                    <i class="fa fa-ban"></i> Supprimer l'image</a>
                            </div>
                        </div>
                    </div>
                    </div>

                    <div style="color: red; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                        <head> *Veuillez bien remplir les champs</head>
                    </div>
                    <button style="background-color: orange;" class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Publier</button>
                </form>
            </div>
        </div>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="/admin/imagebox/script.js"></script>
@stop