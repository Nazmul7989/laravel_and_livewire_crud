<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card p-4 shadow">
                <div class="clearfix">
                    <h3 class="float-start">Post List</h3>
                    <a href="{{ route('posts.create') }}" class="float-end btn btn-outline-success">Create</a>
                </div>
                <hr>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td width="150">
                                <button class="btn btn-outline-warning btn-sm">Edit</button>
                                <button class="btn btn-outline-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
