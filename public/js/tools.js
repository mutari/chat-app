let oldFetch = window.fetch;

window.fetch = (url, settings = {}) => {
    settings.headers = {
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').dataset.token,
        ...((settings && settings.headers) ? settings.headers : {})
    }
    return oldFetch(url, settings);
}

function generateFormData(obj, formData = new FormData()){

    this.formData = formData;

    this.createFormData = function(obj, subKeyStr = ''){
        for(let i in obj) {
            let value          = obj[i];
            let subKeyStrTrans = subKeyStr ? subKeyStr + '[' + i + ']' : i;

            if(typeof(value) === 'string' || typeof(value) === 'number')
                this.formData.append(subKeyStrTrans, value);
            else if(typeof value === 'object')
                this.createFormData(value, subKeyStrTrans);
        }
    }

    this.createFormData(obj);

    return this.formData;
}

function show(...element) {
    if(element instanceof Array)
        element.forEach(el => {
            el.classList.remove('d-none')
        })
    else element.classList.remove('d-none')
}

function hide(...element) {
    if(element instanceof Array)
        element.forEach(el => {
            el.classList.add('d-none')
        })
    else element.classList.add('d-none')
}
