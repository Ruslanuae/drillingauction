$(document).ready(function()
{
    $(".buttons-row").append('<div id="idbm" class="count-button plus">+</div><div id="idbp" class="count-button minus">-</div>');

    $(".count-button").on("click", function()
    {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        var bit_increment = Number( document.getElementById("bid_increment").value );
        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + bit_increment;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - bit_increment;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find("input").val(newVal);
    });
});