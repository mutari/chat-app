let oldFetch = window.fetch;

window.fetch = (url, settings = {}) => {
    settings.headers = {
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').dataset.token,
        ...((settings && settings.headers) ? settings.headers : {})
    }
    return oldFetch(url, settings);
}

async function loadHtml(element, url, clearElement = false) {
    let html = await fetchHtml(url);
    let htmlElement = htmlToElement(html);

    if(clearElement)
        element.innerHTML = "";

    element.append(htmlElement);
}

/**
 *
 * @param {String} html
 * @returns {ChildNode}
 */
function htmlToElement(html) {
    let template = document.createElement('template');
    html = html.trim(); // Never return a text node of whitespace as the result
    template.innerHTML = html;
    return template.content.firstChild;
}

/**
 * fetch html from
 *
 * @param path
 * @returns {Promise<string|boolean>}
 */
async function fetchHtml(path) {
    try {
        let response = await fetch(path);

        if(!response.ok) throw response;
        if(response.status !== 200) throw response;

        let data = await response.json();

        return data.html;
    } catch(error) {
        console.error(error);
    }
}



// region good to have function
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
            el.classList.remove('hidden')
        })
    else element.classList.remove('hidden')
}

function hide(...element) {
    if(element instanceof Array)
        element.forEach(el => {
            el.classList.add('hidden')
        })
    else element.classList.add('hidden')
}

function onReady(__callback) {

    document.addEventListener("DOMContentLoaded", function() {
        __callback();
    });

}

function randomStr(length) {
    let result           = '';
    let characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    let charactersLength = characters.length;
    for ( let i = 0; i < length; i++ ) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
}
// endregion
