    @extends('template')
    @section('content')
    


    
<table  class="table table-bordered">
    <thead>
        <tr>
            
            <th>
                Code
            </th>
            <th>
                Libelle
            </th>
            <th>
                Coefficient
            </th>
        </tr>
    </thead>
  <a href="MatiereN/create" class="btn btn-primary">ajouter</a>
    <tbody>
        @foreach($matieres as $matiere)
        <tr>
          
            <td>
                {{$matiere->id}}
            </td>
            <td>
               {{$matiere->lib}}
            </td>
            <td>
               {{$matiere->coef}}
            </td>
            @if(Route::has('login'))
            @auth
            <td>
                <a href="{{route('MatiereN.edit',$matiere->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
            <form action="{{ route('MatiereN.destroy', $matiere->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>

            </td>
            
        </tr>
        @endif
        @endauth
        @endforeach
    </tbody>
</table>
<div>
{!! $matieres->links() !!}
</div>
@endsection