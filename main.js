const hideCommentsBtn = document.querySelector('#hide-comments-btn');
const commentsList = document.querySelector('#comments-list')
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