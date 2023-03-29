<x-adminhead>
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div>

                <div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Yangi maxsulot qoshish menyusi</h3>
                        </div>


                        <form action="/admin/addproduct" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputname">Maxsulot nomi</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputname"
                                           placeholder="Maxsulot nomi">
                                    <div data-lastpass-icon-root="true"
                                         style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPrice">Maxsulot narxi</label>
                                    <input type="text" name="price" class="form-control" id="exampleInputPrice"
                                           placeholder="Maxsulot narxi">
                                    <div data-lastpass-icon-root="true"
                                         style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPrice">Kategoriyani tanlang</label>
                                    <select class="form-control custom__form-control" name="category">
                                        <option value="0">Kategoriyani tanlash:</option>
                                        @foreach($categories as $category)
                                            @foreach($category->podcategorys as $podcats)
                                                <option
                                                    value="{{ $category->id }}_{{ $podcats->id }}">{{ $category->name }}->{{ $podcats->name }}</option>
                                            @endforeach
                                        @endforeach
                                    </select>
                                    <div data-lastpass-icon-root="true"
                                         style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputcomment">Maxsulot uchun izox</label>
                                    <input type="text" name="comment" class="form-control" id="exampleInputcomment"
                                           placeholder="Maxsulot uchun izox">
                                    <div data-lastpass-icon-root="true"
                                         style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="photo[]"
                                                   id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Faylni
                                                tanlang</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Saqlash</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>


                </div>


            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
</x-adminhead>
