 @if ($errors->any())
 <div class="alert alert-danger">
     <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
     </ul>
 </div>
 @endif
 <form action="{{route('register')}}" method="post">
     @csrf

     <div>
         Name
         <input type="text" name="name">
     </div>

     <div>
         Username
         <input type="text" name="username">
     </div>

     <div>
         Email
         <input type="email" name="email">
     </div>
     <div>
         Contact no.
         <input type="text" name="contact_no">
     </div>

     <div>
         user Role
         <select id="user_role" name="user_role">
             <option value="admin">Admin</option>
             <option value="student">Student</option>
         </select>
     </div>


     <div>
         Password
         <input type="password" name="password">
     </div>

     <div>
         Password Confirm
         <input type="password" name="password_confirmation">
     </div>

     <button type="submit">Register</button>
     <a href="/login">Already have account! Sign in</a>
 </form>