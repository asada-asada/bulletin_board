@extends('layouts.sidebar')

@section('content')
<div class="post_create_container d-flex">
  <div class="post_create_area border w-50 m-5 p-5">
    <div class="">
      <p class="mb-0">カテゴリー</p>
      <select class="w-100" form="postCreate" name="post_category_id">
        @foreach($main_categories as $main_category)
        <optgroup label="{{ $main_category->main_category }}">
          @foreach($main_category -> subCategories as $sub_category)
          <option value="">
            {{$sub_category->sub_category}}
        </option>
          @endforeach
        @endforeach
          <select class="w-100" form="subCategoryRequest" name="post_category_id">
            </select>
          </optgroup>
      </select>
    </div>
    <div class="mt-3">
      @if($errors->first('post_title'))
      <span class="error_message">{{ $errors->first('post_title') }}</span>
      @endif
      <p class="mb-0">タイトル</p>
      <input type="text" class="w-100" form="postCreate" name="post_title" value="{{ old('post_title') }}">
    </div>
    <div class="mt-3">
      @if($errors->first('post_body'))
      <span class="error_message">{{ $errors->first('post_body') }}</span>
      @endif
      <p class="mb-0">投稿内容</p>

      <textarea class="w-100" form="postCreate" name="post_body">{{ old('post_body') }}</textarea>
    </div>
    <div class="mt-3 text-right">
      <input type="submit" class="btn btn-primary" value="投稿" form="postCreate">
    </div>
    <form action="{{ route('post.create') }}" method="post" id="postCreate">{{ csrf_field() }}</form>
  </div>
  @can('admin')
  <div class="w-25 ml-auto mr-auto">
    <div class="category_area mt-5 p-5">
      <div class="">
        <p class="m-0">メインカテゴリー</p>
        @if($errors->has('main_category'))
        <span class="error_message">{{ $errors->first('main_category') }}</span>
        @endif
        <input type="text" class="w-100" name="main_category" form="mainCategoryRequest">
        <input type="submit" value="追加" class="w-100 btn btn-primary p-0" form="mainCategoryRequest">
      </div>
      <form action="{{ route('main.category.create') }}" method="post" id="mainCategoryRequest">{{ csrf_field() }}</form>

      <!-- サブカテゴリー追加 -->
      <p class="m-0">サブカテゴリー</p>
      @if($errors->has('sub_category'))
        <span class="error_message">{{ $errors->first('sub_category') }}</span>
        @endif
      <div class="">
        <select class="w-100" form="subCategoryRequest" name="post_category_id">
          <option>---</option>
          @foreach($main_categories as $main_category)
            <option value="{{ $main_category->id }}">{{ $main_category->main_category }}</option>
          @endforeach
        </select>
      </div>

        <input type="text" class="w-100" name="sub_category" form="subCategoryRequest">
        <input type="submit" value="追加" class="w-100 btn btn-primary p-0" form="subCategoryRequest">
        <form action="{{ route('sub.category.create') }}" method="post" id="subCategoryRequest">{{ csrf_field() }}</form>
      </div>
  </div>
  @endcan
</div>
@endsection