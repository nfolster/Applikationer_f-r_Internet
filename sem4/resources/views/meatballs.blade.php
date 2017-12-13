@extends('layout')
@section('content')
@include('sidebar')
<div class="recipe">
<img src="img/meatballs.jpg" alt="Picture of Meatballs">
    <h1>Our Signature Meatballs</h1>
        <br>
        <h2>Ingredients</h2>
            <ul>
                <li>1 pack of <i>Our Signature Meatballs</i></li>
            </ul>
            <br>
        <h2>Directions</h2>
            <ol>
                <li>Remove the meatballs from the package. and put on a plate.</li>
                <li>Microwave for 2 minutes.</li>
                <li>Enjoy!</li>
            </ol>
            <br>
        <h3>Nutrition facts</h3>
            <ul>
                <li>Total Fat 30.69g - 60%</li>
                <li>Saturated Fat 1.394g - 0.7%</li>
                <li>Polyunsaturated Fat 0.163g</li> 
                <li>Monounsaturated Fat 1.57g</li> 
                <li>Cholesterol 21mg - 0.2%</li>
                <li>odium 134mg - 0.6%</li>
                <li>Potassium 60mg</li>
                <li>Total Carbohydrate 2.12g - 0.1%</li>
                <li>Dietary Fiber 0.1g - 0%</li>
                <li>Sugars 80.42g - 38%</li> 
                <li>Protein 3.47g</li> 
            </ul>
        <br><br><br>
@include('comments')
</div>
@endsection