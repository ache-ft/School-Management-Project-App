
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
<!-- =======================================login================================ -->
<section class="bg-[#778fa90a]">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-black">
        <img class="w-14 h-14 mr-5  " src="{{asset('img/graduation-hat-and-diploma.png')}}" alt="logo">

          Golden Frame School     
      </a>
      <div class="w-full bg-[] rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-white-900 md:text-2xl dark:text-">
                  Sign in to your account
              </h1>
              <form class="space-y-4 md:space-y-6" action="/login/action" method="POST">
                 @csrf
                @if ($errors->any())
                  <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                      <strong class="font-bold">Error!</strong>
                     <ul>
                        @foreach ($errors->all() as $error )
                        <li>
                          <span class="block sm:inline">{{ $error }}</span>


                        </li>
                        @endforeach
                        
                     </ul>
                     <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                     </span>
                  </div>
                     
                @endif

                <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-white-900 dark:text-">Your email</label>
                      <input type="email" name="email" id="email" class="bg-white-50 border border-white-300 text-white-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white-700 dark:border-white-600 dark:placeholder-white-400 dark:text- dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-white-900 dark:text-">Password</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="bg-white-50 border border-white-300 text-white-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white-700 dark:border-white-600 dark:placeholder-white-400 dark:text- dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <div class="flex items-center justify-between">
                      <div class="flex items-start">
                          <div class="flex items-center h-5">
                            <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-white-300 rounded bg-white-50 focus:ring-3 focus:ring-primary-300 dark:bg-white-700 dark:border-white-600 dark:focus:ring-primary-600 dark:ring-offset-white-800" >
                          </div>
                          <div class="ml-3 text-sm">
                            <label for="remember" class="text-white-500 dark:text-white-300">Remember me</label>
                          </div>
                      </div>
                      <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot password?</a>
                  </div>
                  <button type="submit" class="w-full text- bg-[#ffa601] hover:bg-[#042d58ac] focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign in</button>
                  <p class="text-sm font-light text-white-500 dark:text-white-400">
                      Don’t have an account yet? <a href="{{ url('/register') }}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section>
</body>
</html>
