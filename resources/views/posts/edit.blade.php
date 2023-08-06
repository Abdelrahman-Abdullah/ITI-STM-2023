<x-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Update Post: {{$post->title}}</h2>
            <form action="/posts/{{$post->id}}" method="POST">
                @csrf @method('PUT')
                <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post Ttile</label>
                        <input
                            type="text"
                            name="title"
                            id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{$post->title}}"
                            placeholder="Type product name"
                            required=""
                        />

                        @error('title')
                        <div class="text-red-400">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="w-full sm:col-span-2">
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post Decription</label>
                        <textarea
                            id="desc"
                            name="desc"
                            rows="5"
                            cols="100"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        >
{{$post->description}}
                        </textarea>
                        @error('desc')
                        <div class="text-red-400">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <br />
                </div>
                <div class="flex items-center space-x-4">
                    <button
                        type="submit"
                        class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                    >
                        Update Post
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-layout>
