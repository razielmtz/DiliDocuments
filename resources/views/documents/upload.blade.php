<x-template>
    <div class="body container-fluid p-5">
        <div class="container-fluid d-flex justify-content-center">
            <form method="POST" action="/documents" enctype="multipart/form-data" id="upload-form" class="mb-3 p-3">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-12">
                        <label for="name">Document name</label>
                        <input type="text" class="form-control" name="name">
                        @error('name')
                            <p class=text-danger>{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-12">
                        <label for="document_type">Document type</label>
                        <select class="form-control" name="document_type">
                                <option value="Contract">Contract</option>
                                <option value="Litigation">Litigation</option>
                                <option value="Documentation">Documentation</option>
                        </select>
                        @error('document_type')
                            <p class=text-danger>{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-12">
                        <label for="description">Document description</label>
                        <input type="text" class="form-control" name="description">
                    </div>
                    @error('description')
                        <p class=text-danger>{{$message}}</p>
                    @enderror
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-12">
                        <label for="file">File (Max size of 10,000 kb and doc,docx,pdf,jpg,png format)</label><br>
                        <input type="file" name="file">
                    </div>
                </div>
                <div class="container-fluid d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Upload document</button>
                </div>
        </form>
        </div>
    </div>
</x-template>