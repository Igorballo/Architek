@extends('layout/master')

@section('content')

    <!-- MAIN CONTENT-->
    <div class="login-wrap width = 150px" style="margin-top: 60px;">
        <div class="login-content" style="width: 550px;">
            <div class="login-form">
                <form action="{{ route('contactadmin') }}" method="POST">
                    {{ csrf_field()}}
                    <div class="form-group">
                        <label>Adresse email </label>
                        <input class="au-input au-input--full" type="email" name="email" value="{{ $oldcontact->email}}" placeholder="-- --">
                        {!! $errors->first('email','<span class="error">:message</span>') !!}
                    </div>          
                    <div class="form-group">
                        <label>Lien facebook</label>
                        <input class="au-input au-input--full" type="string" name="lien_facebook" value="{{ $oldcontact->lien_facebook}}" placeholder="-- --">
                        {!! $errors->first('lien_facebook','<span class="error" >:message</span>') !!} 
                    </div> 
                    <div class="form-group">
                        <label>Lien youtube</label>
                        <input class="au-input au-input--full" type="string" name="lien_youtube" value="{{ $oldcontact->lien_youtube}}" placeholder="-- --">
                        {!! $errors->first('lien_youtube','<span class="error" >:message</span>') !!} 
                    </div> 
                    <div class="form-group">
                        <label>Numéro de téléphone</label>
                        <input class="au-input au-input--full" type="string" name="phone_number" value="{{ $oldcontact->phone_number}}" placeholder="-- --">
                        {!! $errors->first('phone_number','<span class="error" >:message</span>') !!} 
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