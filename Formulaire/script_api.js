	
function ajaxCall() {
    this.send = function(data, url, method, success, type) {
        type = type||'json';
        var successRes = function(data) {
            success(data);
        }
        var errorRes = function(e) {
            console.log(e);
        }
        jQuery.ajax({
            url: url,
            type: method,
            data: data,
            success: successRes,
            error: errorRes,
            dataType: type,
            timeout: 60000
        });
    }
}
function locationInfo() {
    var rootUrl = "https://geodata.solutions/api/api.php";
    var addParams = '';
    if(jQuery("#gds_appid").length > 0) {
        addParams += '&appid=' + jQuery("#gds_appid").val();
    }
    if(jQuery("#gds_hash").length > 0) {
        addParams += '&hash=' + jQuery("#gds_hash").val();
    }
    var call = new ajaxCall();
    this.confCity = function(id) {
        var url = rootUrl+'?type=confCity&countryId='+ jQuery('#idPays option:selected').attr('countryId') +'&stateId=' + jQuery('#idEtat option:selected').attr('stateid') + '&cityId=' + id;
        var method = "post";
        var data = {};
        call.send(data, url, method, function(data) {
            if(data){
            }
            else{
            }
        });
    };
    this.getCities = function(id) {
        jQuery(".ville option:gt(0)").remove();
        var stateClasses = jQuery('#idVille').attr('class');
        var cC = stateClasses.split(" ");
        cC.shift();
        var addClasses = '';
        if(cC.length > 0)
        {
            acC = cC.join();
            addClasses = '&addClasses=' + encodeURIComponent(acC);
        }
        var url = rootUrl+'?type=getCities&countryId='+ jQuery('#idPays option:selected').attr('countryId') +'&stateId=' + id + addParams + addClasses;
        var method = "post";
        var data = {};
        jQuery('.ville').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            jQuery('.ville').find("option:eq(0)").html("Sélectionner la ville");
            if(data.tp == 1){
                var listlen = Object.keys(data['result']).length;
                if(listlen > 0)
                {
                    jQuery.each(data['result'], function(key, val) {
                        var option = jQuery('<option>');
                        option.attr('value', val).text(val);
                        jQuery('.ville').append(option);
                    });
                }
                else
                {
                    var usestate = jQuery('#idEtat option:selected').val();
                    var option = jQuery('<option>');
                    option.attr('value', usestate).text(usestate);
                    option.attr('selected', 'selected');
                    jQuery('.ville').append(option);
                }
                jQuery(".ville").prop("disabled",false);
            }
            else{
                alert(data.msg);
            }
        });
    };
    this.getStates = function(id) {
        jQuery(".etat option:gt(0)").remove();
        jQuery(".ville option:gt(0)").remove();
        var stateClasses = jQuery('#idEtat').attr('class');
        var cC = stateClasses.split(" ");
        cC.shift();
        var addClasses = '';
        if(cC.length > 0)
        {
            acC = cC.join();
            addClasses = '&addClasses=' + encodeURIComponent(acC);
        }
        var url = rootUrl+'?type=getStates&countryId=' + id + addParams  + addClasses;
        var method = "post";
        var data = {};
        jQuery('.etat').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            jQuery('.etat').find("option:eq(0)").html("Sélectionner l'état ou la province");
            if(data.tp == 1){
                jQuery.each(data['result'], function(key, val) {
                    var option = jQuery('<option>');
                    option.attr('value', val).text(val);
                    option.attr('stateid', key);
                    jQuery('.etat').append(option);
                });
                jQuery(".etat").prop("disabled",false);
            }
            else{
                alert(data.msg);
            }
        });
    };
    this.getCountries = function() {
        var countryClasses = jQuery('#idPays').attr('class');
        var cC = countryClasses.split(" ");
        cC.shift();
        var addClasses = '';
        if(cC.length > 0)
        {
            acC = cC.join();
            addClasses = '&addClasses=' + encodeURIComponent(acC);
        }
        var presel = false;
        var iip = 'N';
        jQuery.each(cC, function( index, value ) {
            if (value.match("^presel-")) {
                presel = value.substring(7);
            }
            if(value.match("^presel-byi"))
            {
                var iip = 'Y';
            }
        });
        var url = rootUrl+'?type=getCountries' + addParams + addClasses;
        var method = "post";
        var data = {};
        jQuery('.pays').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            jQuery('.pays').find("option:eq(0)").html("Sélectionnez le pays");
            if(data.tp == 1){
                if(presel == 'byip')
                {
                    presel = data['presel'];
                    console.log('2 presel is set as ' + presel);
                }
                if(jQuery.inArray("group-continents",cC) > -1)
                {
                    var $select = jQuery('.pays');
                    console.log(data['result']);
                    jQuery.each(data['result'], function(i, optgroups) {
                        var $optgroup = jQuery("<optgroup>", {label: i});
                        if(optgroups.length > 0)
                        {
                            $optgroup.appendTo($select);
                        }
                        jQuery.each(optgroups, function(groupName, options) {
                            var coption = jQuery('<option>');
                            coption.attr('value', options.name).text(options.name);
                            coption.attr('countryId', options.id);
                            if(presel) {
                                if (presel.toUpperCase() == options.id) {
                                    coption.attr('selected', 'selected');
                                }
                            }
                            coption.appendTo($optgroup);
                        });
                    });
                }
                else
                {
                    jQuery.each(data['result'], function(key, val) {
                        var option = jQuery('<option>');
                        option.attr('value', val).text(val);
                        option.attr('countryId', key);
                        if(presel)
                        {
                            if(presel.toUpperCase() ==  key)
                            {
                                option.attr('selected', 'selected');
                            }
                        }
                        jQuery('.pays').append(option);
                    });
                }
                if(presel)
                {
                    jQuery('.pays').trigger('change');
                }
                jQuery(".pays").prop("disabled",false);
            }
            else{
                alert(data.msg);
            }
        });
    };
}
jQuery(function() {
    var loc = new locationInfo();
    loc.getCountries();
    jQuery(".pays").on("change", function(ev) {
        var countryId = jQuery("option:selected", this).attr('countryId');
        if(countryId != ''){
            loc.getStates(countryId);
        }
        else{
            jQuery(".etat option:gt(0)").remove();
        }
    });
    jQuery(".etat").on("change", function(ev) {
        var stateId = jQuery("option:selected", this).attr('stateid');
        if(stateId != ''){
            loc.getCities(stateId);
        }
        else{
            jQuery(".ville option:gt(0)").remove();
        }
    });
    jQuery(".ville").on("change", function(ev) {
        var cityId = jQuery("option:selected", this).val();
        if(cityId != ''){
            loc.confCity(cityId);
        }
    });
});