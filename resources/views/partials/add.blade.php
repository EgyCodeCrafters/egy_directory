<div class="row mb-3">
    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-center gap-2 flex-wrap">
        <span>اضغط</span>
        <a
            class="btn btn-sm btn-info"
            href="{{ route('add-directory', ['category_id' => $category->id ?? $sub_category->category->id, 'sub_category_id' => $sub_category?->id ?? '']) }}"
        >
            اضافة
        </a>
        <span>اذا كنت تزاول نفس النشاط</span>
    </div>
</div>
