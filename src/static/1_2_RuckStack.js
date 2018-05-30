const Element = (id) => {
    return $.querySelector(query);
}

const Selector = (query) => {
    return $.querySelector(query);
}

const url = (dir,base=BASE_URL_) => {
    return base.concat("",dir);    
}

const ajaxReq = (url,callback,selector="") => {
    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = () => {
        if (xhr.readyState < 4){
            if(selector!==""){
                $.querySelector(selector).innerHTML = "Loading...";
            }
            if(DEBUG_){
                console.log('Loading...');
            }
        }else if (xhr.readyState === 4) {
            if (xhr.status == 200 && xhr.status < 300) {
               callback();
            }
        }
    }
    xhr.open("GET", url.toString(), true);
    xhr.send();
};
    
