const hideCommentsBtn = document.querySelector('#hide-comments-btn');
const commentsList = document.querySelector('#comments-list');
const commentText = document.querySelector('#comment');
const userNameComment = document.querySelector('#username-comment');
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
   
    if (commentText.value.length < 3 || userNameComment.value.length < 3) {
        e.preventDefault();
        commentText.classList.add('alert', 'alert-danger');
        userNameComment.classList.add('alert', 'alert-danger');
    } else {
        commentText.classList.remove('alert', 'alert-danger');
        userNameComment.classList.remove('alert', 'alert-danger');
    }
})




