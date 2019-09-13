@extends('admin.layout.master')
@section('content')
    <div class="container">
        <form action="{{route('blog.store')}}" enctype="multipart/form-data" method="POST">
            @method('post')
            @csrf
            <div class="row">
                <div class="col-sm-5 input-blog" >
                    <div class="form-group">
{{--
                            <input id="file"  multiple type="file" name="thumbnail[]">
--}}
                        <label class="row" for="thumnail">thumnail</label>

                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input multiple type="file"   name="thumbnail[]">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="row" for="category">category</label>
                        <input class="col-12 form-control" type="text" name="category">
                    </div>
                    <div class="form-group">
                        <label class="row" for="title">title</label>
                        <input class="col-12 form-control"  type="text" name="title">
                    </div>
                    <div class="form-group">
                        <label class="row" for="detail">detail</label>
                        <input class="col-12 form-control"  type="text" name="detail">
                    </div>

                </div>
                <div class="col-sm-7">
                    <div class="form-group">
                        <label for="contentcheck">content</label>
                        <textarea contenteditable="true" name="contentcheck" class="  form-control rounded-0"
                                  id="ckeditor1"
                                  rows="10"></textarea>
                    </div>

                </div>
                <div class="form-group">

                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('js')
    <script>
        CKEDITOR.replace('contentcheck');
    </script>


@endsection

