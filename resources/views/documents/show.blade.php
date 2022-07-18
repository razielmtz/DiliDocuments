<x-template>
    <div class="generic-container">
        <div class="top-container">
            <div class="container-fluid pb-2">
                <span class="top-paragraph">Click this button to upload a new document<span>
            </div>
            <div class="container-fluid">
                <a class="btn btn-primary" href="/documents/upload">Upload Document</a>
            </div>
        </div>
        <div class="bottom-container">
            <div class="container-fluid">
                @if(count($data) == 0)
                    <span><b>You don't have uploaded documents at the moment</b></span>
                @else
                <table class="table table-primary">
                    <caption>List of documents</caption>
                    <tr>
                        <th>Name</th>
                        <th>Document type</th>
                        <th>Description</th>
                        <th>View</th>
                        <th>Download</th>
                        <th><th>
                    </tr>
                
                    @foreach($data as $data)
                
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->document_type}}</td>
                        <td>{{$data->description}}</td>
                        <td><a href="documents/{{$data->id}}/view">View</a></td>
                        <td><a href="documents/{{$data->file}}/download">Download</a></td>
                        <td>
                            <form method="POST" action="/documents/{{$data->id}}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger"><i class="fa-solid fa-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                
                    @endforeach
                </table>
                @endif
            </div>
        </div>
    </div>
</x-template>