<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<select id="price_input" multiple>
  <option value="Coffee" data-price="10">Coffee</option>
  <option value="Chips" data-price="10">Chips</option>
  <option value="Soda" data-price="2.50">Soda</option>
</select>
<select id="quantity_input">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
</select>
<div>Option Price
  <input type="text" id="opt_price" />
</div>

<script language="javascript">
$(document).ready(function() {
  $('#price_input').on('change', function() {
    $('#opt_price').val(valueFUnction());
  });
  $('#quantity_input').on('change', function() {
    $('#opt_price').val(valueFUnction());
  });
});

function valueFUnction(quan) {
  var $selection = $('#price_input').find(':selected');
  var quantity = $('#quantity_input').val();
  var total = 0;
  $selection.each(function() {
    total += $(this).data('price') * quantity;
  })
  return total;
}
</script>