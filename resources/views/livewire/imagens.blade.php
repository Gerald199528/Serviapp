<div>
    @auth
    @foreach ($imagens as $imagen)
    <img src={{ asset($imagen->url) }}   role="button"  class="rounded-circle"  width="36"  />

    @endforeach
   @endauth
</div>
