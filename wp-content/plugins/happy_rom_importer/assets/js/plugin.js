function update_rom(data = ''){
    let params = {action:'update_rom'};
    if (data !== '') params['data'] = data;
    jQuery.ajax({
        type:'POST',
        data:params,
        url: "/wp-admin/admin-ajax.php",
        success: function(value) {
            value = JSON.parse(value);
            jQuery('.status').append('<p>' + value['message'] + '</p>');
            let result = Object.keys(value['data']).map((key) => [Number(key), value['data'][key]]);
            if (typeof result !== 'undefined' && result.length > 0) {
                update_rom(value['data']);
            }
        }
    });
}

function update_emulator(data = ''){
    let params = {action:'update_emulator'};
    if (data !== '') params['data'] = data;
    jQuery.ajax({
        type:'POST',
        data:params,
        url: "/wp-admin/admin-ajax.php",
        success: function(value) {
            value = JSON.parse(value);
            jQuery('.status').append('<p>' + value['message'] + '</p>');
            let result = Object.keys(value['data']).map((key) => [Number(key), value['data'][key]]);
            if (typeof result !== 'undefined' && result.length > 0) {
                update_emulator(value['data']);
            }
        }
    });
}

jQuery(document).ready(function(){
    jQuery('button.update-rom').on("click", function(e) {
        e.preventDefault();
        jQuery(this).prop('disabled', true);
        let _this = this;
        jQuery('.status').empty().append('<p>Updating data..</p>');
        update_rom();
        jQuery(_this).prop('disabled', false);
    });

    jQuery('button.update-emulator').on("click", function(e) {
        e.preventDefault();
        jQuery(this).prop('disabled', true);
        let _this = this;
        jQuery('.status').empty().append('<p>Updating data..</p>');
        update_emulator();
        jQuery(_this).prop('disabled', false);
    });
});