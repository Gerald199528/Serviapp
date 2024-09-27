<div>
    @auth
    @foreach ($subcategories as $subcategory)

    {{ $subcategory->nombre }}
@endforeach
@endauth
</div>
