<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <script src="https://cdn.tailwindcss.com"></script>
   </head>
   <body class='bg-gray-300'>
      <nav class="bg-gray-800">
      <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
          <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
            <div class="hidden sm:ml-6 sm:block">
              <div class="flex space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="/posts" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Posts</a>
                <a href="/posts/create" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium acte">Create New</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </nav>
        {{$slot}}
      <script>
         tailwind.config = {
         darkMode: 'class',
         theme: {
         extend: {
           colors: {
             primary: {"50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a","950":"#172554"}
           }
         },
         fontFamily: {
           'body': [
         'Inter', 
         'ui-sans-serif', 
         'system-ui', 
         '-apple-system', 
         'system-ui', 
         'Segoe UI', 
         'Roboto', 
         'Helvetica Neue', 
         'Arial', 
         'Noto Sans', 
         'sans-serif', 
         'Apple Color Emoji', 
         'Segoe UI Emoji', 
         'Segoe UI Symbol', 
         'Noto Color Emoji'
         ],
           'sans': [
         'Inter', 
         'ui-sans-serif', 
         'system-ui', 
         '-apple-system', 
         'system-ui', 
         'Segoe UI', 
         'Roboto', 
         'Helvetica Neue', 
         'Arial', 
         'Noto Sans', 
         'sans-serif', 
         'Apple Color Emoji', 
         'Segoe UI Emoji', 
         'Segoe UI Symbol', 
         'Noto Color Emoji'
         ]
         }
         }
         }
      </script>
   </body>
</html>