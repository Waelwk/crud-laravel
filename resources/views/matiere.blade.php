    @extends('template')
    @section('content')
    


    
<table  class="table table-bordered">
    <thead>
        <tr>
            <th>
                #
            </th>
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
    <tbody>
        @foreach($matieres as $matiere)
        <tr>
            <td>
                1
            </td>
            <td>
                {{$matiere->codeMat}}
            </td>
            <td>
               {{$matiere->lib}}
            </td>
            <td>
               {{$matiere->coef}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection