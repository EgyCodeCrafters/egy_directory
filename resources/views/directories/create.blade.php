@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">اضفة للدليل</h5>
            <div class="row" bp-section="crud-operation-create">
                <div class="col-md-12">

                    <form method="post" action="/add-directory">

                        @csrf
                        <div class="card">
                            <div class="card-body row">
                                <div class="form-group col-sm-12 mb-3" element="div" bp-field-wrapper="true"
                                     bp-field-name="category_id" bp-field-type="text" bp-section="crud-field">
                                    <label>التصنيف</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        <option value="">اختصار التصنيف</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name}}</option>
                                        @endforeach
                                    </select>

                                </div>


                                <div class="form-group col-sm-12 mb-3" element="div" bp-field-wrapper="true"
                                     bp-field-name="name" bp-field-type="text" bp-section="crud-field">
                                    <label>الاسم</label>

                                    <input type="text" name="name" value="" class="form-control">


                                </div>
                                <div class="form-group col-sm-12 mb-3" element="div" bp-field-wrapper="true"
                                     bp-field-name="description" bp-field-type="textarea" bp-section="crud-field">
                                    <label>الوصف</label>
                                    <textarea name="description" class="form-control"></textarea>


                                </div>
                                <div class="form-group col-sm-12 mb-3" element="div" bp-field-wrapper="true"
                                     bp-field-name="phone" bp-field-type="text" bp-section="crud-field">
                                    <label>الهاتف</label>

                                    <input type="text" name="phone" value="" class="form-control">


                                </div>
                                <div class="form-group col-sm-12 mb-3" element="div" bp-field-wrapper="true"
                                     bp-field-name="whatsapp" bp-field-type="text" bp-section="crud-field">
                                    <label>الواتساب</label>

                                    <input type="text" name="whatsapp" value="" class="form-control">


                                </div>
                                <div class="form-group col-sm-12 mb-3" element="div" bp-field-wrapper="true"
                                     bp-field-name="address" bp-field-type="textarea" bp-section="crud-field">
                                    <label>العنوان</label>
                                    <textarea name="address" class="form-control"></textarea>


                                </div>
                                <div class="form-group col-sm-12 mb-3" element="div" bp-field-wrapper="true"
                                     bp-field-name="google_map" bp-field-type="text" bp-section="crud-field">
                                    <label>خريطة جوجل</label>

                                    <input type="text" name="google_map" value="" class="form-control">


                                </div>
                                <div class="form-group col-sm-12 mb-3" element="div" bp-field-wrapper="true"
                                     bp-field-name="notes" bp-field-type="textarea" bp-section="crud-field">
                                    <label>ملاحظات</label>
                                    <textarea name="notes" class="form-control"></textarea>


                                </div>
                                <div class="form-group col-sm-12 mb-3" element="div" bp-field-wrapper="true"
                                     bp-field-name="email" bp-field-type="email" bp-section="crud-field">
                                    <label>البريد الالكتروني</label>

                                    <input type="email" name="email" value="" class="form-control">


                                </div>
                                <div class="form-group col-sm-12 mb-3" element="div" bp-field-wrapper="true"
                                     bp-field-name="facebook" bp-field-type="text" bp-section="crud-field">
                                    <label>الفيسبوك</label>

                                    <input type="text" name="facebook" value="" class="form-control">


                                </div>
                                <div class="form-group col-sm-12 mb-3" element="div" bp-field-wrapper="true"
                                     bp-field-name="twitter" bp-field-type="text" bp-section="crud-field">
                                    <label>تويتر</label>

                                    <input type="text" name="twitter" value="" class="form-control">


                                </div>
                                <div class="form-group col-sm-12 mb-3" element="div" bp-field-wrapper="true"
                                     bp-field-name="instagram" bp-field-type="text" bp-section="crud-field">
                                    <label>انستجرام</label>

                                    <input type="text" name="instagram" value="" class="form-control">


                                </div>
                                <div class="form-group col-sm-12 mb-3" element="div" bp-field-wrapper="true"
                                     bp-field-name="website" bp-field-type="text" bp-section="crud-field">
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
