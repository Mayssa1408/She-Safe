let votes = {
    parc1: 0,
    parc2: 0,
    parc3: 0
};

function submitVote() {
    const selectedOption = document.querySelector('input[name="vote"]:checked');
    if (selectedOption) {
        const selectedParc = selectedOption.value;
        votes[selectedParc] += 10;
        updateBars();
    } else {
        alert("Veuillez sélectionner un parc.");
    }
}

function updateBars() {
    const totalVotes = votes.parc1 + votes.parc2 + votes.parc3;
    if (totalVotes > 0) {
        for (let key in votes) {
            const percentage = (votes[key] / totalVotes) * 100;
            document.getElementById(`bar${key.slice(-1)}`).style.width = percentage + "%";
            document.getElementById(`percentage${key.slice(-1)}`).innerText = Math.round(percentage) + "%";
        }
    }
}

document.getElementById('commentForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const comment = document.getElementById('commentInput').value.trim();
    if (comment) {
        const newComment = document.getElementById('comment-template').cloneNode(true);
        newComment.style.display = "block";
        newComment.querySelector('.card-text').innerText = comment;
        newComment.querySelector('.card-title').innerText = "Nouveau commentaire";
        document.querySelector('.comments-section .row').appendChild(newComment);
        document.getElementById('commentInput').value = "";
    } else {
        alert("Veuillez écrire un commentaire.");
    }
});