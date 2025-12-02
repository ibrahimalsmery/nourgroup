  <div class="my-3">
      <form method="GET">
          <input type="search" name="search" placeholder="بحث" value="{{ request('search') }}"
              class="form-control
                @isset($classes)
                    @foreach ($classes as $cl)
                        {{ $cl }}
                    @endforeach
                @endisset
              ">
      </form>
  </div>
