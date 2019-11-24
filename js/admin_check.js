function checkAdStatus()
    var status = sessionStorage.getItem('Status').value;
    if (!status == true) {
        location = "/admin/index.html";
        return true;
    }