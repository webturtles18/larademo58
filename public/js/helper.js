jq = jQuery.noConflict();

function load_datepicker(){
    jq('.datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
    });
}

function showLoader(selector){
    $(selector).show();
}

function hideLoader(selector){
    $(selector).hide();
}

function confirmAlert(msg,type,title,btntext,callback_func,ele)
{
    var data = {};

    if(title == "" || title == "undefined" || title == null)
        title = "";

    data['title'] = title;

    if(msg == "" || msg == "undefined" || msg == null)
        msg = "Please wait...";

    data['text'] = msg;

    if(type != "" && type != "undefined" && type != null)
        data['type'] = type;
    
    if(btntext == "" || btntext == "undefined" || btntext == null)
        btntext = "Ok";
    
    data['confirmButtonText'] = btntext;
    
    if(callback_func == "" || callback_func == "undefined" || callback_func == null)
        callback_func = "";

    data['showConfirmButton'] = true;
    data['showCancelButton'] = true;
    data['cancelButtonText'] = "Cancel";
    data['html'] = true;
    data['closeOnConfirm'] = true;
    data['confirmButtonColor'] = "#41b3f9";
    
    swal(data, function(isConfirm){
        if(typeof callback_func === "function"){
            callback_func(ele,isConfirm);
        }
    });
}

function confirmDelete(route) {
    showLoader("#full-overlay");
    confirmAlert("On confirm record will be deleted.","warning","Are you sure?","Confirm",function(r,i){
        if(i){
            window.location.href = r;
        }
        else{
            hideLoader("#full-overlay");
        }
    },route);
};