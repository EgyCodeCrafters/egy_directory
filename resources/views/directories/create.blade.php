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
                                    <select multiple required name="category_ids[]" id="category_ids"
                                            class="form-control">
                                        <option value="">اختصار التصنيف</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name}}
                                                ( {{ $category->description}})
                                            </option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group col-sm-6 mb-3">
                                    <label>الوصف</label>
                                    <textarea maxlength="200"  name="description" class="form-control"></textarea>
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
                                    <textarea name="address" class="form-control"></textarea>
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
