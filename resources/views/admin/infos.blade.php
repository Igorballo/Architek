@extends('layout/master')

@section('content')

<!-- MAIN CONTENT-->
<div class="login-wrap width = 150px" style="margin-top: 60px;">
        <div class="login-content" style="width: 550px;">
            <div class="login-form">
                <form action="{{ route('infos') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field()}}
                    <div class="form-group">
                        <label>Siège de l'entreprise</label>
                        <input class="au-input au-input--full" type="text" name="siege" value="{{ $oldcontact->siege}}" placeholder="-- --">
                        {!! $errors->first('siege','<span class="error">:message</span>') !!}
                    </div>          
                    <div class="form-group">
                        <label>Description de l'entreprise</label>
                        <textarea class="au-input au-input--full"  name="description" cols="30" rows="6" placeholder="-- --">{{ $oldcontact->description}}</textarea>
                        {!! $errors->first('description','<span class="error" >:message</span>') !!} 
                    </div>
                    <div class="form-group">
                        <label>Logo de l'entreprise</label>
                        <input type="file" value="{{ $oldcontact->logo}}" name="logo" id="logo"><br>
                        {!! $errors->first('logo','<span class="error">:message</span>') !!}
                    </div>

                    <div style="color: red; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                        <head> *Veuillez bien remplir les champs</head>
                    </div>
                    <button style="background-color: orange;" class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Publier</button>
                </form>
            </div>
        </div>
    </div> 
@stop