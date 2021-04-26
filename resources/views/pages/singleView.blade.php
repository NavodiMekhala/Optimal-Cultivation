<div class="row justify-content-center">
    <div class="col-lg-12 text-center">
        <h3 class="text-dark" style="font-weight: bold;">{{ $item->name}} Details</h3>
        <hr>
        <div class="col-lg-12 mt-3">
            <div class="row">
                <div class="col-lg-6">
                    <h5 class="text-left">
                        Name:-
                    </h5>
                </div>
                <div class="col-lg-6">
                    <small class="text-left">{{$item->name}}</small>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mt-3">
            <div class="row">
                <div class="col-lg-6">
                    <h5 class="text-left">
                        Actual area in purchase:-
                    </h5>
                </div>
                <div class="col-lg-6">
                    <small class="text-left">{{$item->calculated_area}}</small>
                </div>
            </div>
        </div>
    </div>
</div>
