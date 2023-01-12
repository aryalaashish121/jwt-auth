 @if ($errors->any())
 <div class="alert alert-danger">
     <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
     </ul>
 </div>
 @endif

 @if ($message)
 <p>{{$message}}</p>
 @endif
 <form action="{{route('login')}}" method="post">
     @csrf
     @method('post')
     <div>
         Email
         <input type="email" name="username">
     </div>

     <div>
         Password
         <input type="password" name="password">
     </div>
     <button type="submit">Login</button>
     <a href="/register">Dont have account! Sign up</a>
 </form>