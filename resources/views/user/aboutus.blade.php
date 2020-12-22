@extends('user.layout')
@section('content')
<br><br>
<div style="width:99%; height:500px; padding: 10px;">
    <div style="float: left; background-color: rgb(23, 35, 63); height: 500px; width: 50%;">
        <div style="color: white; font-size: 30px; margin-left: 40px; background-color: none;">
            <h1>Innovation and Discovery</h1>
        </div>
        <p style="color: white;  margin-left: 40px; background-color: none;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore voluptates nemo, ipsam ut hic voluptatum ullam tenetur vero libero necessitatibus eos, perspiciatis, amet laudantium numquam consequatur dolorem placeat repellat. Neque!</p>
        <br><br>
        <button style="margin-left: 40px; background-color: rgb(1, 135, 172); margin-top: 0px; padding:10px;  border-radius: 5px; color:white;">Sign Up for Excustion</button>
        <button style="margin-left: 20px; background-color: rgb(23, 35, 63); margin-top: 0px; padding:10px; border: 2px solid white; border-radius: 5px; color:white;">Learn More</button>
    </div>
    <div style="margin-left: 50%;  height:500px;"><img src="pict1.jpg" style="width:100%; height:100%;"></div>
</div>
<h1 style="text-align: center;">Our Team</h1>
<hr style="width:70px; text-align: center; border: solid 2px rgb(23, 35, 63);background-color: rgb(23, 35, 63);"><br>
<div style="flex-wrap: wrap; text-align: center; ">
    <figure style="vertical-align: top; display: inline-block; text-align: left; margin: 0px;">
        <img src="hu.jpg" style="border-radius: 5px; width:300px; height:300px;  margin: 10px;">
        <figcaption style="margin-left: 25px; display: block;"><b style="color: rgb(22, 135, 160);">Antonio Fernandie</b></figcaption>
        <figcaption style="margin-left: 25px; display: block; color: gainsboro;">217116575</figcaption>
    </figure>
    <figure style="vertical-align: top; display: inline-block; text-align: left; margin: 0px;">
        <img src="hi.jpg" style="border-radius: 5px; width:300px; height:300px;  margin: 10px;">
        <figcaption style="margin-left: 25px; display: block;"><b style="color: rgb(22, 135, 160);">Gedion Saputra</b></figcaption>
        <figcaption style="margin-left: 25px; display: block; color: gainsboro;">217116600</figcaption>
    </figure>
    <figure style="vertical-align: top; display: inline-block; text-align: left; margin: 0px;">
        <img src="ha.jpg" style="border-radius: 5px; width:300px; height:300px;  margin: 10px;">
        <figcaption style="margin-left: 25px; display: block;"><b style="color: rgb(22, 135, 160);">Alvin Sucita</b></figcaption>
        <figcaption style="margin-left: 25px; display: block; color: gainsboro;">217116573</figcaption>
    </figure>
    <figure style="vertical-align: top; display: inline-block; text-align: left; margin: 0px;">
        <img src="he.jpg" style="border-radius: 5px; width:300px; height:300px;  margin: 10px;">
        <figcaption style="margin-left: 25px; display: block;"><b style="color: rgb(22, 135, 160);">Dana Mediana Wirawati</b></figcaption>
        <figcaption style="margin-left: 25px; display: block; color: gainsboro;">216011660</figcaption>
    </figure>
</div>
<br><br>
<hr style="width:70px; text-align: center; border: solid 2px rgb(23, 35, 63);background-color: rgb(23, 35, 63);"><br>
<br><br>
<div style="width:99%; height:500px; padding: 10px;">
    <div style="float: left; width: 50%; height:500px;"><img src="pict.jpg" style="width:100%; height:100%;"></div>
    <div style="margin-left: 50%; background-color: rgb(23, 35, 63); height: 500px; width: 50%;">
        <div style=" color: white; width: 60%; height: 500px; margin-left:auto; margin-right:auto; ">
            <h1 style="margin-top: 0px;margin-bottom: 0px; padding-top: 50px;">Fill in the Form</h1>
            <br><br>
            First Name<br>
            <input style="width: 100%; padding: 15px; border-radius: 5px;" type="text" placeholder="Your First Name"><br><br>
            Last Name<br>
            <input style="width: 100%; padding: 15px; border-radius: 5px;" type="text" placeholder="Your Last Name"><br><br>
            Phone<br>
            <input style="width: 100%; padding: 15px; border-radius: 5px;" type="text" placeholder="Your Phone Number"><br><br>
        </div>
    </div>
</div>
@endsection
