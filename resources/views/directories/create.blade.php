@extends('layouts.app')

@section('content')
    <div class="card bg-light mb-3">
        <div class="card-body">
            <h5 class="card-title">اضفة للدليل</h5>
            <div class="row" bp-section="crud-operation-create">
                <div class="col-md-12">

                    <form method="post" action="/add-directory" class="needs-validation" novalidate>

                        @csrf
                        <div class="card bg-light mb-3">
                            <div class="card-body row">
                                <div class="form-group col-sm-6 mb-3">
                                    <label>الاسم</label>
                                    <input required type="text" name="name" value="" class="form-control">
                                </div>



                                <div class="form-group col-sm-6 mb-3">
                                    <label>التخصص</label>
                                    <select required name="category_id" id="category_id" class="form-control">

                                        @if(empty($category_id))
                                            <option value="">اختيار التخصص الفرعي</option>
                                        @endif
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ ($category->id == $category_id) ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-sm-6 mb-3">
                                    <label>التخصص الفرعي</label>
                                    <select name="sub_category_id" id="sub_category_id" class="form-control">
                                        @if(empty($sub_category_id))
                                            <option value="">اختيار التخصص الفرعي</option>
                                        @endif
                                        {{-- Subcategories will be loaded via AJAX --}}
                                    </select>
                                </div>




                                <div class="form-group col-sm-6 mb-3">
                                    <label>الوصف</label>
                                    <textarea maxlength="200" name="description" class="form-control"></textarea>
                                </div>

                                <div class="form-group col-sm-6 mb-3">
                                    <label>الهاتف</label>
                                    <input id="phone" oninput="updatePhoneErrorMessage()" required
                                        pattern="^(\+)?[0-9]*$" title="مسموح بارقام انجليزية فقط" type="text"
                                        name="phone" value="" class="form-control">
                                    <div class="invalid-feedback" id="phone-error-message"></div>

                                </div>

                                <div class="form-group col-sm-6 mb-3">
                                    <label>الواتساب</label>
                                    <input id="whatsapp" oninput="updateWhatsappErrorMessage()" required
                                        pattern="^(\+)?[0-9]*$" title="مسموح بارقام انجليزية فقط" type="text"
                                        name="whatsapp" value="" class="form-control">
                                    <div class="invalid-feedback" id="whatsapp-error-message"></div>

                                </div>

                                <div class="form-group col-sm-6 mb-3">
                                    <label>العنوان</label>
                                    <textarea name="sub_category" class="form-control"></textarea>
                                </div>

                                <div class="form-group col-sm-6 mb-3">
                                    <label>خريطة جوجل</label>
                                    <input type="text" name="google_map" value="" class="form-control">
                                </div>

                                <div class="form-group col-sm-6 mb-3">
                                    <label>ملاحظات</label>
                                    <textarea name="notes" class="form-control"></textarea>
                                </div>

                                <div class="form-group col-sm-6 mb-3">
                                    <label>البريد الالكتروني</label>
                                    <input type="email" name="email" value="" class="form-control">
                                </div>

                                <div class="form-group col-sm-6 mb-3">
                                    <label>الفيسبوك</label>
                                    <input type="text" name="facebook" value="" class="form-control">
                                </div>

                                <div class="form-group col-sm-6 mb-3">
                                    <label>تويتر</label>
                                    <input type="text" name="twitter" value="" class="form-control">
                                </div>

                                <div class="form-group col-sm-6 mb-3">
                                    <label>انستجرام</label>
                                    <input type="text" name="instagram" value="" class="form-control">
                                </div>

                                <div class="form-group col-sm-6 mb-3">
                                    <label>الموقع الالكرتوني</label>
                                    <input type="text" name="website" value="" class="form-control">
                                </div>

                            </div>
                        </div>

                        <div class="d-none" id="parentLoadedAssets">[]</div>
                        <div id="saveActions" class="form-group my-3">
                            <input type="hidden" name="_save_action" value="save_and_back">

                            <div class="btn-group" role="group">
                                <button type="submit" class="btn btn-success text-white">
                                    <span class="la la-save" role="presentation" aria-hidden="true"></span> &nbsp;
                                    <span data-value="save_and_back">حفظ</span>
                                </button>
                            </div>

                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        $(document).ready(function() {



            $('#category_id').on('change', function() {
                const categoryId = $(this).val();
                const subSelect = $('#sub_category_id');


                if (categoryId) {

                    const selectedSubCategoryId = "{{ $sub_category_id ?? '' }}";



                    $.ajax({
                        url: '/get-subcategories/' + categoryId,
                        type: 'GET',
                        success: function(data) {
                            subSelect.empty().append(
                                '<option value="">اختيار التخصص الفرعي</option>');

                            if (data.length > 0) {
                                subSelect.prop('required', true); // ✅ make required
                                subSelect.prop('disabled', false); // ✅ enable select
                                $.each(data, function(i, sub) {
                                    const isSelected = sub.id == selectedSubCategoryId ? 'selected' : '';
                                    subSelect.append(`<option value="${sub.id}" ${isSelected}>${sub.name}</option>`);
                                });
                            } else {
                                subSelect.prop('required', false); // ❌ not required
                                subSelect.prop('disabled', true); // ❌ disable select
                            }
                        },
                        error: function() {
                            subSelect.empty()
                                .append(
                                    '<option value="">حدث خطأ أثناء تحميل التخصصات الفرعية</option>'
                                )
                                .prop('required', false)
                                .prop('disabled', true);
                        }
                    });
                } else {
                    subSelect.empty()
                        .append('<option value="">اختيار التخصص الفرعي</option>')
                        .prop('required', false)
                        .prop('disabled', true);
                }
            });
            $('#category_id').change();

        });
    </script>
@endpush
