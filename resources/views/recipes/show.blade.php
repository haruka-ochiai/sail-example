<x-app-layout>
    <div class="w-10/12 p-4 mx-auto bg-white rounded">
        {{ Breadcrumbs::render('show', $recipe) }}
        <div class="grid grid-cols-2 rounded border border-gray-500 mt-4">
            <div class="col-span-1">
                <img class="object-cover w-full aspect-square" src="{{$recipe['image']}}" alt="{{$recipe['title']}}">
            </div>
            <div class="col-span-1 p-4">
                <p class="mb-4">{{$recipe['description']}}</p>
                <p class="mb-4 text-gray-500">{{$recipe['user']['name']}}</p>
                <h4 class="text-2xl font-bold mb-2">材料</h4>
                <ul class="text-gray-500 ml-6">
            @foreach($recipe['ingredients'] as $i )
                    <li>{{$i['name']}}:{{$i['quantity']}}</li> 
            @endforeach
                </ul>
            </div>
        </div>
        <br>
        <div class="">
            <h4 class="text-2xl  font-bold mb-2">作り方</h4>
            <div class="grid grid-cols-4 gap-4">
            @foreach($recipe['steps'] as $s)
            <div class="mb-2 background-color p-2">
                <div class="w-10 h-10 flex items-center justify-center bg-gray-100 rounded-full mr-4 mb-2">
                    {{ $s['step_number'] }}
                </div>
                <p>{{ $s['description'] }}</p>
            </div>
            @endforeach
            </div>
        </div>
    </div>
    <div class="w-10/12 p-4 mx-auto bg-white rounded">
    </div>
</x-app-layout>