@extends('template')
    @section('content')
<div>
<!-- Success message -->
@if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif
<form action="{{ url('/matiere/Fm') }}" method="post">
        @csrf
        <div></div>
        <label for="lib">Entrez la libelle : </label>
        <input type="text" class="{{ $errors->has('lib') ? 'error' : '' }} "name="lib" id="lib" >
        <!-- Error -->
        @if ($errors->has(''))
                <div class="error">
                    {{ $errors->first('lib') }}
                </div>
                @endif
            </div>

        <label for="coef">Entrez le cof: </label>
        <input type="text" name="coef" id="coef">
        @if ($errors->has('coef'))
                <div class="error">
                    {{ $errors->first('coef') }}
                </div>
                @endif
            </div>
            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>
</div>



    @endsection