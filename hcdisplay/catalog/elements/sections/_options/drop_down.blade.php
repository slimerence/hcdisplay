<?php
/**
 * 当产品的option是下拉列表时
 */
if($product_option->items){
$uuid = \Ramsey\Uuid\Uuid::uuid4()->toString();
?>
<div class="product-option-input-wrap mb-10">
    <label class="label">{{ $product_option->name }}</label>
    <select class="select" v-on:change="dropDownClickedHandler($event, {{ $product_option->id }})"
            name="product_option_{{ $product_option->id }}"
            id="product_option_{{ $uuid }}"
            data-type="product_option"
            data-value="{{ $product_option->id }}">
        @foreach($product_option->items as $key=>$item)
            <option value="{{ $item->id }}" data-value="{{ $item->extra_value }}">
                {{ $item->label }}
                {{ $item->extra_value > 0 ? '+'.config('system.CURRENCY').number_format($item->extra_value,2) : null }}
            </option>
        @endforeach
    </select>
</div>
<?php
}
?>