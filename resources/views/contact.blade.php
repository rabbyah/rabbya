@extends('layout')
@section('title', 'Contact page')


@section('navbar')
@parent
<body background="https://s25743.pcdn.co/wp-content/uploads/2019/01/Best-Mountain-Quotes-The-50-Quotes-About-Mountains-and-Clouds-featured-1400x735.jpg" repeat="no-repeat">
<div class="jumbotron" style="background-image:url('https://pbs.twimg.com/media/C45HFLnVcAA1uDt.jpg')">
<h1 align="center"> <font face="Algerian">  Contact </h1> </font>
</div>

@endsection

@section('content')
<div class="container" align="center"><font size="5%">
<div class="row">
<div class="col-sm-12" align="center">
<div class="card">
<div class="card body">
<h3>First Name</h3>
<input type="text" placeholder="Your name.."><br>
<h3>Last Name</h3>
<input type="text" id="lname" name="lastname" placeholder="Your last name.."><br>
<h3>Country</h3>
<select id="country" name="country" style="width:25%">
<option value="australia">Australia</option>
<option value="canada">Canada</option>
<option value="usa">USA</option>
</select><br>
<h3>Subject</h3>
<input type="textarea" id="subject" name="subject" placeholder="Write something.." style="height:100px"> <br>
<Button style="border:3px solid black; hight:10%; width:12%">Send</Button>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection
