<x-app-layout>
    $popular, $recipes
    <div class="grid grid-cols-4">
        <div class="col-span-1 bg-white rounded p-4">
        <h3 class="text-2xl font-bold mb-2">レシピ検索</h3>
        <ul class="ml-6 mb-4">
            <li><a href="">すべてのレシピ</a></li>
            <li><a href="">人気のレシピ</a></li>
        </ul>
        <h3 class="text-2xl font-bold mb-2">レシピ投稿</h3>
        <ul class="ml-6 mb-4">
            <li><a href="">すべてのレシピ</a></li>
            <li><a href="">人気のレシピ</a></li>
        </ul>
        </div>
        <div class="col-span-2 bg-white rounded p-4">
            <h2 class="text-2xl font-bold mb-2">新着レシピ</h2>
        @foreach($recipes as $recipe)
            <div class="mb-4">
                <a href="{{ route('recipe.show', $recipe) }}">
                    <img src="{{ asset('strage/' . $recipe->image) }}" alt="" class="w-1/5 ">
                    <span class ="ml-2">{{ $recipe->title }}</span>
                </a>
            </div>
        @endforeach

        </div>
        <div class="col-span-1 bg-gray ml-4">
            1
        </div>
    </div>
</x-app-layout>