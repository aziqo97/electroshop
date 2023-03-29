<x-adminhead>
    <div class="content-wrapper">
        <section class="content">
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Nomi</th>
                        <th>Narxi</th>
                        <th>Vaqti</th>
                        <th>Sotilgan</th>
                        <th>Info</th>
                        <th>Categ</th>
                        <th>PodCat</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>


@foreach($products as $products)
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>{{$products->id}}</td>
                        <td>{{$products->name}}</td>
                        <td>{{$products->price}}</td>
                        <td>{{$products->created_at}}</td>
                        <td>{{$products->selled}}</td>
                        <td>{{$products->comment}}</td>
                        <td>{{$products->category}}</td>
                        <td>{{$products->podkategory}}</td>
                        <td><img style="width: 20px;" src="/all_files/delete.png"></td>
                        <td><img style="width: 20px;" src="/all_files/edit.png"></td>
                    </tr>
@endforeach


                    </tbody>
                </table>
            </div>
        </section>
    </div>
</x-adminhead>
