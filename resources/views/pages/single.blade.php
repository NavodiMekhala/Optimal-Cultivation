<div class="btn-group-vertical btn-group-toggle d-none d-md-block justify-content-center" data-toggle="buttons">
    @foreach ($items as $item)
    <strong class="text-dark btn nbs-btn mb-2">
        <input type="radio" id="item_{{ $item->id }}" id="filter_item" value="{{ $item->id }}" name="filter_item"
            onchange="getItemDetails();">
        <label for="item_{{ $item->id }}">{{ $item->name}}</label>
        <div class="check"></div>
    </strong>
    @endforeach
</div>