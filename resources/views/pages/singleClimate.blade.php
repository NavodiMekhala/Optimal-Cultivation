@if ($climate->rainfall)
<h3 class="text-dark" style="font-weight: bold;">Rainfall Forcasting</h3>
<hr>
<div class="col-lg-12 mt-3">
    <div class="row">
        <div class="col-lg-6">
            <h5 class="text-left">
                Value:-
            </h5>
        </div>
        <div class="col-lg-6">
            <small class="text-left">{{$climate->rainfall}}</small>
        </div>
    </div>
</div>
@elseif ($climate->temperature)
<h3 class="text-dark" style="font-weight: bold;">Temperature Forcasting</h3>
<hr>
<div class="col-lg-12 mt-3">
    <div class="row">
        <div class="col-lg-6">
            <h5 class="text-left">
                Value:-
            </h5>
        </div>
        <div class="col-lg-6">
            <small class="text-left">{{$climate->temperature}}</small>
        </div>
    </div>
</div>
@elseif ($climate->pressure)
<h3 class="text-dark" style="font-weight: bold;">Pressure Forcasting</h3>
<hr>
<div class="col-lg-12 mt-3">
    <div class="row">
        <div class="col-lg-6">
            <h5 class="text-left">
                Value:-
            </h5>
        </div>
        <div class="col-lg-6">
            <small class="text-left">{{$climate->pressure}}</small>
        </div>
    </div>
</div>
@endif
