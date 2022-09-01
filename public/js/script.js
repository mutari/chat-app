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

async function getComments(postId) {

    let post = document.querySelector(`#post-${postId}`);

    if(post.querySelector('.bi-caret-up')) {
        post.querySelector(`.post-comments`).innerHTML = "";
        post.querySelector('.bi-caret-up').classList.replace('bi-caret-up', 'bi-caret-down');
        return;
    }

    try {
        let response = await fetch(`/post/get/comments/${postId}`);

        if(!response.ok) throw response;

        let data = await response.text();

        let commentsDiv = post.querySelector(`.post-comments`);
        commentsDiv.innerHTML = data;

        let commentSection = post.querySelector(`.post-comment-section`);
        let commentInput = post.querySelector(`.post-comment-input`);
        show(commentSection, commentInput)

        post.querySelector('.bi-caret-down').classList.replace('bi-caret-down', 'bi-caret-up');

    } catch (error) {
        console.error(error)
    }

}

async function publishComment(element, postId) {

    try {

        console.log(element)

        const text = element.closest(`#post-${postId}`).querySelector('#comment-input').value;

        let response = await fetch('/post/new/comment', {
            method: 'POST',
            body: generateFormData({
                text: text,
                post_id: postId
            })
        })

        if(!response.ok) throw response;

        let data = await response.text();

        let postComments = document.querySelector(`#post-${postId} .post-comments`);

        postComments.innerHTML = data + postComments.innerHTML;

        let commentSection = document.querySelector(`#post-${postId} .post-comment-input`);
        hide(commentSection)


    } catch (error) {
        console.error(error);
    }

}

function onReady(__callback) {

    document.addEventListener("DOMContentLoaded", function() {
        __callback();
    });

}
