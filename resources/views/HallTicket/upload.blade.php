<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upload CSV') }}
        </h2>
    </x-slot>

    <div class=" w-full h-full flex justify-center items-center">
        <form  class="h-96 w-96 bg-white shadow-xl rounded" action="{{route('read.csv')}}" method="post" enctype="multipart/form-data">

            <div class="flex-col items-center w-auto h-auto">
                <label class="font-serif m-2 font-bold" for="csv">Upload Csv</label>
                <input class="w-96 border rounded border-gray-200 p-2" type="file" name="csv" id="csv">
            </div>
            <div>
                <input class="p-4 bg-gray-400 text-white font-serif font-bold" type="submit" value="upload"/>
            </div>

@csrf
        </form>
    </div>
</x-app-layout>