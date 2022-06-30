@extends('layout/master')

@section('content')
    
    <!-- MAIN CONTENT-->
<div class="login-wrap width = 150px" style="margin-top: 60px;">
        <div class="login-content" style="width: 550px;">
            <div class="login-form">
                <form action="{{ route('admin') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field()}}
                    <div class="form-group">
                        <label>Nom complet</label>
                        <input class="au-input au-input--full" type="string" name="full_name" placeholder="-- --">
                        {!! $errors->first('full_name','<span class="error">:message</span>') !!}
                    </div>
                    <div class="form-group">
                        <label>Adresse email</label>
                        <input class="au-input au-input--full" type="email" name="email" placeholder="-- --">
                        {!! $errors->first('email','<span class="error">:message</span>') !!}
                    </div>
                    <div class="form-group">
                        <label>Numéro de téléphone</label>
                        <input class="au-input au-input--full" type="string" name="phone_number" placeholder="-- --">
                        {!! $errors->first('phone_number','<span class="error">:message</span>') !!}
                    </div>            
                    <div class="imagebox">
                    <div class="setting image_picker">
                        <h2>Photo de l'admin</h2>
                        <div class="settings_wrap">
                            <label class="drop_target" style="padding-left: 6px; padding-top: 5px;">
                                <div class="image_preview"></div>
                                <input id="inputFile" name="photo" type="file"/>
                                {!! $errors->first('photo','<span class="error">:message</span>') !!}
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