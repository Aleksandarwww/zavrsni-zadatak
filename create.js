const postForm = document.querySelector('#post-form');
const titlePost = document.querySelector("#title-post");
const postBody = document.querySelector("#post-body");
const userNamePost = document.querySelector("#username-post");

postForm.addEventListener('submit', function (e) {
    if (titlePost.value.length < 5 || postBody.value.length < 15 || userNamePost.value.length < 3) {
        e.preventDefault();
        titlePost.classList.add('alert', 'alert-danger');
        postBody.classList.add('alert', 'alert-danger');
        userNamePost.classList.add('alert', 'alert-danger');
    } else {
        titlePost.classList.remove('alert', 'alert-danger');
        postBody.classList.remove('alert', 'alert-danger');
        userNamePost.classList.remove('alert', 'alert-danger');
    }
})

