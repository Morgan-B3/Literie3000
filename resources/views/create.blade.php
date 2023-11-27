@extends('layouts.app')

@section('content')

<h1 class="text-3xl underline mx-auto w-fit font-bold">Ajouter un matelas</h1>

@foreach ($errors->all() as $error)
    <p class="text-red-500">{{ $error }}</p>
@endforeach

<form action="" method="post">

@csrf

<div>
    <label for="nom">Nom du matelas * :</label>
    <input type="text" name="nom" id="nom" value="{{old('nom')}}">
</div>
<div>
    <label for="marque">Marque * :</label>
    <select name="marque" id="marque">
        <option value="">Choisir une marque</option>
        @foreach ($brands as $brand)
            <option value="{{$brand}}" @selected($brand == old('marque'))>{{$brand}}</option>
        @endforeach
    </select>
</div>
<div>
    <label for="dimension">Dimensions * :</label>
    <select name="dimension" id="dimension">
        <option value="">Choisir une dimension</option>
        @foreach ($dimensions as $dimension)
            <option value="{{$dimension}}" @selected($dimension == old('dimension'))>{{$dimension}}</option>
        @endforeach
    </select>
</div>
<div>
    <label for="prix">Prix (€) * :</label>
    <input type="number" name="prix" id="prix" value="{{old('prix')}}" min="1" max="9999">
</div>
<div>
    <label for="remise">Remise (%) :</label>
    <input type="number" name="remise" id="remise" value="{{old('remise')}}" min="0" max="100">
</div>
<div>
    <label for="image">Image (URL) * :</label>
    <input type="text" name="image" id="image" value="{{old('image', 'https://via.placeholder.com/640x480.png/007766?text=facere')}}">
</div>
<button>Ajouter</button>
</form>

@endsection