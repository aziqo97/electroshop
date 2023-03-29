<x-adminhead>
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div>

                <div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Kategoriya qo'shish menyusi</h3>
                        </div>


                        <form action="/admin/addcategory" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kategoriya nomi</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                           placeholder="Kategoriya nomi">
                                    <div data-lastpass-icon-root="true"
                                         style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Podkategoriyani tanlang</label>
                                    <select class="form-control custom__form-control" name="category">
                                                    <option value="0">Kategoriyani tanlash:</option>
                                                    @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                    <div data-lastpass-icon-root="true"
                                         style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="photo" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Faylni tanlang</label>
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
