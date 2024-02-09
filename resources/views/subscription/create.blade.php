<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подписка на рассылку</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
      * {
   box-sizing: border-box;
}
.transparent {
   position: relative;
   max-width: 600px;
   padding: 60px 50px;
   margin: 50px auto 0;
   background-image: url(https://klike.net/uploads/posts/2022-08/1660545340_1.jpg);
   background-size: cover;
}
.transparent:before {
   content: "";
   position: absolute;
   top: 0;
   left: 0;
   right: 0;
   bottom: 0;
   background: linear-gradient(to right bottom, rgba(43, 44, 78, .5), rgba(104, 22, 96, .5));
}
.form-inner {
   position: relative;
}
.form-inner h3 {
   position: relative;
   margin-top: 0;
   color: white;
   font-family: 'Roboto', sans-serif;
   font-weight: 300;
   font-size: 26px;
   text-transform: uppercase;
}
.form-inner h3:after {
   content: "";
   position: absolute;
   left: 0;
   bottom: -6px;
   height: 2px;
   width: 60px;
   background: #1762EE;
}
.form-inner label {
   display: block;
   padding-left: 15px;
   font-family: 'Roboto', sans-serif;
   color: rgba(255, 255, 255, .6);
   text-transform: uppercase;
   font-size: 14px;
}
.form-inner input {
   display: block;
   width: 100%;
   padding: 0 15px;
   margin: 10px 0 15px;
   border-width: 0;
   line-height: 40px;
   border-radius: 20px;
   color: white;
   background: rgba(255, 255, 255, .2);
   font-family: 'Roboto', sans-serif;
}
.form-inner input[type="checkbox"] {
   position: absolute;
   opacity: 0;
}
#custom-checkbox+label {
   position: relative;
   margin: 20px 0;
   text-transform: none;
   cursor: pointer;
}
#custom-checkbox+label:before {
   content: "";
   display: inline-block;
   width: 20px;
   height: 20px;
   margin-right: 10px;
   vertical-align: text-top;
   background: white;
}
#custom-checkbox:checked+label:before {
   background: #1762EE;
}
#custom-checkbox:checked+label:after {
   content: "";
   position: absolute;
   width: 2px;
   height: 2px;
   left: 20px;
   top: 9px;
   background: white;
   box-shadow: 2px 0 0 white, 4px 0 0 white, 4px -2px 0 white, 4px -4px 0 white, 4px -6px 0 white, 4px -8px 0 white;
   transform: rotate(45deg);
}
.form-inner input[type="submit"] {
   background: #1762EE;
}
     
    </style>
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="post" action="{{ route('subscription.store') }}">
        @csrf
        
        <div class="transparent"> 
            <div class="form-inner">
                <h3>Подписка на рассылку</h3>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                <input type="submit" value="Подписаться">
            </div>
        </div>
        
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js"></script>
</body>
</html>