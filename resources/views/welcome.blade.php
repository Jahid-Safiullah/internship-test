<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <section class="max-w-5xl mx-auto flex justify-center  h-screen overflow-scroll">
        <div class="bg-gray-300 p-3 rounded-lg grid grid-cols-4 gap-3">
            <div class="bg-[#3800AF] text-white rounded-lg p-6 col-span-4">
                <h1 class="text-4xl font-semibold text-gray-200 text-center">Show Here Start To End Time</h1>
            </div>
          <div class="bg-[#3800AF] text-gray-200 p-3 rounded-lg flex justify-center items-center row-span-6">
              <h2 class="text-3xl text-center">Say Some About Your Self</h2>
          </div>
            
            @foreach ($posts as $post )

            <div class="bg-[#3800AF] text-gray-200 p-2  rounded-lg space-y-2 py-6">
                <img class="rounded-lg w-full" src="{{ $post->image }}" alt="">
                <h2 class="font-bold line-clamp-3"> {{ $post->title }}</h2>
                <div class=" line-clamp-4 leading-6 text-sm ">{{ $post->description }}</div>
                <div class="bg-blue-400 px-4 w-fit rounded-full">Read More</div>
            </div>
            @endforeach
            {{-- <div class="bg-[#3800AF] text-gray-200 p-2  rounded-lg space-y-2">
                <img class="rounded-lg w-full" src="images/imagePlaceholder.webp" alt="">
                <div class="bg-gray-200 h-6 w-full rounded-full"></div>
                <div class="bg-gray-200 h-4 w-full rounded-full"></div>
                <div class="bg-gray-200 h-4 w-full rounded-full"></div>
            </div> --}}
            <div class="bg-[#3800AF] text-gray-200 p-2  rounded-lg space-y-2 col-span-3 py-10">
               <h2 class="text-center text-4xl">GitHub Repository Link</h2>
            </div>
        </div>
    </section>
</body>
</html>