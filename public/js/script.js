async function createPost() {

    try {
        let formData = new FormData(document.querySelector('#createPost'));

        let response = await fetch('/post/create/post', {
            method: 'POST',
            body: formData
        });

        if(!response.ok) throw response;

        let data = await response.json();

        window.location.href = "/post/";
    } catch (error) {
        console.error(error);
    }

}

async function getPosts() {

    try {
        //get all posts
        let response = await fetch('/post/all');

        if(!response.ok) throw response;

        let html = await response.text();

        document.querySelector('#posts').innerHTML = html;
    } catch (error) {
        console.error(error)
    }

}

function onReady(__callback) {

    document.addEventListener("DOMContentLoaded", function() {
        __callback();
    });

}
