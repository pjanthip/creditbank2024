function change_lang(lang_pre,site_url){
    var lang = "";
    if(lang_pre == "TH"){
        lang = "EN";
    }else{
        lang = "TH";
    }

    $.post(site_url+'website/language/sub_lang', {lang:lang}, function(response){
        if(response.lang){
            location.reload();
        }
    }, 'json');
}