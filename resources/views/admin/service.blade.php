@extends('layout/master')

@section('content')

        <!-- MAIN CONTENT width = 150px -->
<div class="login-wrap" style="margin-top: 60px;">
        <div class="login-content" style="width: 600px;">
            <div class="login-form">
                <form action="{{ route('serviceadmin') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field()}}
                    
                    <div class="form-group">
                        <label>Titre du service</label>
                        <input class="au-input au-input--full" type="string" name="titre" value="Titre" placeholder="-- --">
                        {!! $errors->first('titre','<span class="error">:message</span>') !!}
                    </div>
                    <div class="form-group">
                        <label>Description du service</label>
                        <textarea class="au-input au-input--full" name="description" cols="30" rows="4.5" placeholder="--  --">Description</textarea>
                        {!! $errors->first('description','<span class="error" >:message</span>') !!} 
                    </div>        
                    <div class="imagebox">
                    <div class="setting image_picker">
                        <h2>Image descriptive</h2>
                        <div class="settings_wrap">
                            <label class="drop_target" style="padding-left: 6px; padding-top: 5px;">
                                <div class="image_preview"></div>
                                <input id="inputFile" type="file" name="service_photo"/>
                            </label>
                            <div class="settings_actions vertical">
                                <a data-action="choose_from_uploaded">
                                    <i class="fa fa-picture-o"></i> Choisir une image</a>
                                <a class="disabled" data-action="remove_current_image">
                                    <i class="fa fa-ban"></i> Supprimer l'image</a>
                            </div> 
                        </div>
                        {!! $errors->first('service_photo','<span class="error" >:message</span>') !!} 
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
    <hr>
    <div style="padding: 25px;">
		<table class="table table-data2"  >
			<thead>
         	    <tr>
          	  		<th>Titre</th>
            		<th></th>
                </tr>                           
            </thead>                        
            <tbody>

                @foreach($allservices as $service)

                    <tr class="tr-shadow" >
                        <td>{{ $service->titre}}</td>
                        <td>
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Modifier">
                                    <a href="{{ route('updateadmindata', $service->id) }}" data-method="DELETE" data-confirm="Etes-vous sur ?"><i class="zmdi zmdi-edit"></i></a>
                                </button>                        
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Supprimer">
                                    <a href="{{route('destroyadmin', $service->id)}}"><i class="zmdi zmdi-delete"></i></a>                                  
                                </button>
                            </div>
                        </td>
				    </tr>
                    <tr class="spacer"></tr>
                @endforeach
                                    
	        </tbody>
        </table>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="/admin/imagebox/script.js"></script>
@stop