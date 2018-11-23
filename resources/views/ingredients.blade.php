 @extends('templates/structure')
 @section('title')
 Ingredients
 @endsection
 @section('content')
 <div class="title m-b-md">
    Ingredients!
</div>
<div>
    <table class="table table-hover">
        <tr>
            <th>Ingredient</th>
            <th>Stock</th>
        </tr>
        @foreach($Ing as $Unity => $Stock)
        <tr>
            <td>{{ $Unity }}</td>
            <td>{{ $Stock }}</td>
        </tr>
        @endforeach            
    </table>
</div>
@include('templates/buttons')
<br>
@endsection