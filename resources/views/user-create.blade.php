<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Post Management') }}
        </h2>
    </x-slot>
    <div class="p-5 w-full flex flex-col py-6 items-center justify-center">
    <h2 class="py-4 font-bold text-2xl">Create Post</h2>
        @if($errors->any())
                <div class="w-[700px]">
                    <ul class="flex flex-col gap-2 py-4">
                        @foreach ($errors->all() as $error)
                        <li class="bg-red-200 rounded p-4  text-red-600">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if(session('success'))
                <div class="p-4 rounded bg-green-200 text-green-600 mb-4">
                    {{ session('success') }}
                </div>
            @endif
        <div class="w-[700px] min-h-[400px] bg-white rounded-md">
      
        <form action=" {{ route('posts.store')}}" method="POST" class="h-[400px] p-2 flex flex-col gap-2 justify-center items-center">
                @csrf
                <input name="title" class="w-full rounded" type="text" placeholder="Post" />
                <textarea name="description"  class=" w-full h-[120px] rounded" placeholder="type here.." ></textarea>
                <div class=" w-full flex justify-end items-center">
                    <button class="p-2 px-4 bg-green-400 rounded">
                        <span class="text-md text-white">Submit</span>
                    </button>
                </div>
            </form>

            <!-- <form class="h-[400px] p-2 flex flex-col gap-2 justify-center items-center" >
                @csrf
              
                <button class="w-full bg-green-500 text-white font-bold p-2 rounded" >Create Post</button>
            </form> -->
        </div>
</x-guest-layout>