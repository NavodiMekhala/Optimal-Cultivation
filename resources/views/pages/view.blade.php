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
            <div class="col-lg-8 addons-section">
                <div class="card mt-1">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="card mt-1">
                                    <div class="card-body" style="background-color: #d8d8de66;">
                                        <div>
                                            <div class="btn-group btn-group-toggle d-none d-md-block justify-content-center"
                                                data-toggle="buttons">
                                                @foreach ($categories as $category)
                                                <strong class="text-dark btn nb-btn mr-1">
                                                    <input type="radio" id="cat_{{ $category->id }}" id="filter_type"
                                                        value="{{ $category->id }}" name="filter_type"
                                                        onchange="getItem();">
                                                    <label for="cat_{{ $category->id }}">{{ $category->name}}</label>
                                                    <div class="check"></div>
                                                </strong>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-4 center-align">
                                            <div id="item"></div>
                                        </div>
                                        <div class="card mt-4">
                                            <div class="card-body" style="background-color: #ffffff;">
                                                <div id="item_details"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card mt-1">
                                    <div class="card-body" style="background-color: #d8d8de66;">
                                        <div class="btn-group-vertical btn-group-toggle d-none d-md-block justify-content-center"
                                            data-toggle="buttons">
                                            <strong class="text-dark btn nbc-btn mb-4">
                                                <input type="radio" id="climate_1"
                                                    value="1" name="climate"
                                                    onchange="getClimate();">
                                                <label for="">Rainfall</label>
                                                <div class="check"></div>
                                            </strong>
                                            <strong class="text-dark btn nbc-btn mb-4">
                                                <input type="radio" id="climate_2" value="2" name="climate"
                                                    onchange="getClimate();">
                                                <label for="">Temperature</label>
                                                <div class="check"></div>
                                            </strong>
                                            <strong class="text-dark btn nbc-btn">
                                                <input type="radio" id="climate_3" value="3" name="climate"
                                                    onchange="getClimate();">
                                                <label for="">Pressure</label>
                                                <div class="check"></div>
                                            </strong>
                                        </div>
                                        <div class="col-lg-12 mt-4 center-align">
                                            <div id="climate"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--  {{dd($categories)}} --}}
        </div>
    </div>
</x-guest-layout>
