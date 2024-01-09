<x-main title="login Presto.it">
   

    <form action="/login" method="POST">
        @csrf 

        <div class="mb-3">
          <label  class="form-label">Email address</label>
          <input type="email" name="email" class="form-control"  value="{{old('name')}}"  aria-describedby="emailHelp">
          @error('email') {{$message}} @enderror 
        </div>

         <div class="mb-3">
          <label  class="form-label">Password</label>
          <input type="password" name="password" class="form-control" >
          @error('password') {{$message}} @enderror  
        </div>
      
        <button type="submit" class="btn btn-primary">login</button>
      </form>
    
    </x-main>