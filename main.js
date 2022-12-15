const hideCommentsBtn = document.querySelector('#hide-comments-btn');
const commentsList = document.querySelector('#comments-list');
const commentText = document.querySelector('#comment');
const userName = document.querySelector('#username');
const commentForm = document.querySelector('#comment-form');
hideCommentsBtn.addEventListener('click', function () {
    if (this.value == "hide") {
        commentsList.className ='hide-comments';
        this.innerText = "Show comments";
        this.value = "show";
    } else if (this.value == "show") {
        commentsList.className = 'show-comments';
        this.innerText = "Hide comments";
        this.value = "hide";
    }
})

commentForm.addEventListener('submit', function (e) {
   
    if (commentText.value < 3 && userName.value < 3) {
        e.preventDefault();
        commentText.classList.add('alert', 'alert-danger');
        username.classList.add('alert', 'alert-danger');
    } else {
        commentText.classList.remove('alert', 'alert-danger');
        username.classList.remove('alert', 'alert-danger');
    }
})