<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-HL3FE4uYwuOeX5GQeVQlF2Kg45ZcdkGnhTdYI5xIe67tTvJpEwZmiBId+kSdVzkTObVdoKoFFggPiLqT3Bf5ag==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.tailwindcss.com"></script>

    <title>register|Golden Frame</title>
</head>
<body>

<section class="bg-[#778fa90a]">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 ">
      <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-white-900 dark:text-black " >
        <img class="w-14 h-14 mr-5  " src="{{asset('img/graduation-hat-and-diploma.png')}}" alt="logo">
       

          Golden Frame School   
      </a>
      <div class="w-full bg-[] rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0  dark:border-white-700 ">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-white-900 md:text-2xl dark:text-black">
                  Create and account
              </h1>
              <form class="space-y-4 md:space-y-6" action="/register/save" method="POST">
                @csrf
                  <div>
                      <label for="name" class="block mb-2 text-sm font-medium text-white-900 dark:text-black">Your name</label>
                      <input type="name" name="name" id="name" class="bg-white-50 border border-white-300 text-white-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white-700 dark:border-white-600 dark:placeholder-white-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="your name" required="">
                      @error('name')
                      <span class="text-red-600">{{$message}}</span>
                          
                      @enderror
                  </div>  
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-white-900 dark:text-black">Your email</label>
                      <input type="email" name="email" id="email" class="bg-white-50 border border-white-300 text-white-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white-700 dark:border-white-600 dark:placeholder-white-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                      @error('email')
                      <span class="text-red-600">{{$message}}</span>
                          
                      @enderror
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-white-900 dark:text-black">Password</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="bg-white-50 border border-white-300 text-white-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white-700 dark:border-white-600 dark:placeholder-white-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                      @error('password')
                      <span class="text-red-600">{{$message}}</span>
                          
                      @enderror 
                  
                    </div>
                  <div>
                      <label for="password-confirm" class="block mb-2 text-sm font-medium text-white-900 dark:text-black">Confirm password</label>
                      <input type="password" name="password_confirmation" id="password-confirm" placeholder="••••••••" class="bg-white-50 border border-white-300 text-white-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white-700 dark:border-white-600 dark:placeholder-white-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                      @error('password_confirmation')
                      <span class="text-red-600">{{$message}}</span>
                          
                      @enderror  
                    </div>
                  <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-white-300 rounded bg-white-50 focus:ring-3 focus:ring-primary-300 dark:bg-white-700 dark:border-white-600 dark:focus:ring-primary-600 dark:ring-offset-white-800" required="">
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="terms" class="font-light text-white-500 dark:text-white-300">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
                      </div>
                  </div>
                  <button type="submit" class="w-full text- bg-[#ffa601] hover:bg-[#042d58ac] focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create an account</button>
                  <p class="text-sm font-light text-white-500 dark:text-white-400">
                      Already have an account? <a href="{{ url('/login') }}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section>

</body>
</html>