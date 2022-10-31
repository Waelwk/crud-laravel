@extends('template')
@section('content')

  
                
     
<table  class="table table-bordered">
    <thead>
        <tr>
            <th>
                #
            </th>
            <th>
                date
            </th>
            <th>
                lieu
            </th>
            <th>
                code
            </th>
            <th>
                codeMat
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($epreuves as $epreuve)
        <tr>
            <td>
                1
            </td>
            <td>   {{ $epreuve->dateepreuve }}
               
            </td>
            <td>
            {{ $epreuve->	lieu }}
            </td>
            <td>
            {{ $epreuve->numepreuve }}
              
            </td>
            <td>
            {{ $epreuve->codeMat }}
              
            </td>
            <td>
            {{ $epreuve->matiere->lib }}
              
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection