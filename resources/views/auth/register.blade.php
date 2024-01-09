<x-main>
    <form  action="/register" method="POST">
        @csrf
        <div class="mb-3">

            
            <label  class="form-label">Username</label>
            <input type="text" name="name" class="form-control"value="{{old('name')}}"
            @error('name') {{$message}} @enderror  >
            
          </div>

        <div class="mb-3">


          <label  class="form-label">Email </label>
          <input type="email" name="email" class="form-control" value="{{old('email')}}" aria-describedby="emailHelp">
          @error('email') {{$message}} @enderror
        </div>
        <div class="mb-3">
          <label  class="form-label">Password</label>
          <input type="password" name="password" class="form-control" >
          @error('password') {{$message}} @enderror
        </div>
        <div class="mb-3">
            <label  class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" >
          </div>
       
        <button type="submit" class="btn btn-primary">Register</button>
      </form>


</x-main>