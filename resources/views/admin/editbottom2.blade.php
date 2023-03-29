<x-adminhead>
    <div class="content-wrapper">
        <section class="content">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Pastdagi 2 bannerni almashtirish</h3>
                </div>


                <form action="/admin/editslider" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                         <label for="banner">Bannerni tanlang</label>
                        <select name="banner" class="form-control">
                            <option value="1">Birinchi banner</option>
                            <option value="2">Ikkinchi banner</option>
                        </select>
                        <div class="form-group">
                            <label for="firsttext">Nomi</label>
                            <input name="nomi" type="text" class="form-control" id="firsttext"
                                   placeholder="Nomi">
                        </div>
                        <div class="form-group">
                            <label for="secondtext">Comment</label>
                            <input name="comment" type="text" class="form-control" id="secondtext"
                                   placeholder="Comment">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Fotografiya</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</x-adminhead>
