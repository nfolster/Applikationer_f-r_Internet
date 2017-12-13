@extends('layout')
@section('content')
@include('sidebar')
<div class="recipe">
    <img src="img/pancakes.jpg" alt="Picture of pancakes">
    <h1>Breakfast Pancakes</h1>
    <br>
    <h2>Ingredients</h2>
        <ul>
                <li>3 eggs</li>
                <li>2 slices of bread</li>
                <li>10g butter</li>
                <li>2 slices of cheese</li>
                <li>4 dl milk</li>
                <li>2 cups of cereal</li>
        </ul>
        <br>
    <h2>Directions</h2>
        <ol>
            <li>Toast the bread, and add the butter and cheese on them.</li>
            <li>Heat a frying pan and crack the eggs in the frying pan and cook the eggs 
                until the whites and yolk reach the desired consistency for your 
                average sunny side upp eggs.
            </li>
            <li>Add milk and cereal in a bowl.</li>
            <li>Mix the everything together in a bowl and fry in frying pan.</li>
            <li>Enjoy your breakfast flavored pancakes!</li>
        </ol>
        <br>
    <h3>Nutrition facts</h3>
        <ul>
            <li>Total Fat 3.69g - 0.1%</li>
            <li>Saturated Fat 1.394g - 0.1%</li>
            <li>Dietary Fiber 0.1g - 0.1%</li>
            <li>Sugars 8.42kg - 99%</li> 
            <li>Protein 3.47g - 0.1%</li> 
        </ul>
        <br><br><br>
@include('comments')
</div>
@endsection
    