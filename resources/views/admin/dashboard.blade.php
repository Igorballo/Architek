@extends('layout.master')

@section('content')
    <div class="table-responsive table-responsive-data2" style="margin-left: 30px; padding-right: 60px;">                                
        <div style="margin-top: 100px; margin-bottom: 20px; ">
            <button class="au-btn au-btn-icon au-btn--small" style="background-color: orange;">
                <a href="{{ route('admin') }}" style="color: white;"><i class="zmdi zmdi-plus"></i>ajouter un admin</a></button>
        </div>    
		<table class="table table-data2" >
			<thead>
         	    <tr>
					<th>Photo</th>
          	  		<th>Nom</th>
            		<th>Email</th>
            		<th>Numéro de téléphone</th>
           			<th>date</th>
            		<th></th>
                </tr>                           
            </thead>                        
            <tbody>

                @foreach($alladmins as $admin)

                    <tr class="tr-shadow" >
                        <td >
                            <img style="height: 60px; width: 60px;" src="/storage/image/admins/{{$admin->photo}}" alt="profil">
                        </td>
                        <td>{{ $admin->full_name}}</td>
                        <td>
                            <span class="block-email">{{ $admin->email}}</span>
                        </td>
                        <td class="desc" >{{ $admin->phone_number}}</td>
                        <td>{{ $admin->created_at}}</td>
                                            
                        <td>
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Modifier">
                                    <a href="{{ route('updateadmindata', $admin->id) }}" data-method="DELETE" data-confirm="Etes-vous sur ?"><i class="zmdi zmdi-edit"></i></a>
                                </button>                        
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Supprimer">
                                    <a href="{{route('destroyadmin', $admin->id)}}"><i class="zmdi zmdi-delete"></i></a>                                  
                                </button>
                            </div>
                        </td>
				    </tr>
                    <tr class="spacer"></tr>
                @endforeach
                                    
	        </tbody>
        </table>   
    </div>

@stop