<x-guest-layout>
    <div class="container">
        <div class="row justify-content-center mt-4" style="margin-bottom: 50px;">
            <div class="col-lg-10">
                <div class="sec-title text-center mb-3">
                    <h2>Optimal Cultivation Planning & Management</h2>
                    <div class="decor topdecor">
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card mt-1">
                    <div class="card-body">
                        <form action="{{route('home.import')}}" enctype="multipart/form-data" method="post" id="insert">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="inp_file">Insert Your Forcasting
                                            Values</label>
                                        <input type="file" class="form-control form-control-alternative" name="file1"
                                            id="inp_file" accept=".csv" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="inp_file">Insert Your Mathlab
                                            Result</label>
                                        <input type="file" class="form-control form-control-alternative" name="file2"
                                            id="inp_file" accept=".csv" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-6 text-center mt-2">
                                    <button type="submit" class="btn btn-danger btn-block">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
