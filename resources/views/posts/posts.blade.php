<x-layout>
    <section class="py-1 bg-blueGray-50">
        <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4 mx-auto mt-24">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-blueGray-700 text-center text-2xl mb-4">Posts</h3>
                        </div>
                    </div>
                </div>

                <div class="block w-full overflow-x-auto">
                    <table class="items-center bg-transparent w-full border-collapse">
                        <thead>
                            <tr>
                                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-md uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-cente">
                                    Title
                                </th>
                                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-md uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-cente">
                                    Description
                                </th>
                                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-md uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-cente">
                                    Author
                                </th>
                                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-md uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                    Action
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($posts as $post)

                            <tr>
                                <th class="border-t-0 px-6 align-middle text-center border-l-0 border-r-0 text-s whitespace-nowrap p-4 text-left text-blueGray-700">
                                    {{ucwords($post->title)}}
                                </th>
                                <td class="border-t-0 px-6 align-middle text-center border-l-0 border-r-0 text-s whitespace-nowrap p-4">
                                    {{substr($post->description , 0 , 80)}}
                                </td>
                                <td class="border-t-0 px-6 align-center text-center border-l-0 border-r-0 text-s whitespace-nowrap p-4">
                                    {{$post->user->name}}
                                </td>
                                <td class="border-t-0 px-6 align-middle text-center border-l-0 border-r-0 text-s whitespace-nowrap p-4">
                                    <a href="/posts/{{$post['id']}}/edit" class="text-green-400"> Edit</a>
                                    <form class="inline mx-2" action="/posts/{{$post['id']}}" method="POST">
                                        @csrf @method("DELETE")
                                        <button class="text-red-400">Delete</button>
                                    </form>
                                    <a href="/posts/{{$post['id']}}" class="text-blue-400"> View</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-layout>
