<div class="row">
    <form method="get" action="/search" class="d-flex">
        <input required class="form-control me-2" name="query" type="search" placeholder="بحث"
               aria-label="بحث"
               value="{{ request('query') }}"
        >
        <button class="btn btn-outline-dark" type="submit">بحث</button>
    </form>

</div>
