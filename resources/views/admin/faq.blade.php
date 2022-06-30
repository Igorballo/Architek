@extends('layout/master')

@section('content')

    <!-- MAIN CONTENT-->
    <div class="login-wrap width = 150px" style="margin-top: 60px;">
        <div class="login-content" style="width: 550px;">
            <div class="login-form">
                <form action="{{ route('faq') }}" method="POST">
                    {{ csrf_field()}}
                    <div class="form-group">
                        <label>Question </label>
                        <input class="au-input au-input--full" type="text" name="question" placeholder="-- --">
                        {!! $errors->first('question','<span class="error">:message</span>') !!}
                    </div>          
                    <div class="form-group">
                        <label>Réponse</label>
                        <textarea  class="au-input au-input--full" name="reponse" cols="30" rows="6" placeholder="--  --"></textarea>
                        {!! $errors->first('reponse','<span class="error" >:message</span>') !!} 
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

