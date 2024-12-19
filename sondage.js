let votes = {
    parc1: 0,
    parc2: 0,
    parc3: 0
};

function submitVote() {
    const selectedOption = document.querySelector('input[name="vote"]:checked');
    if (selectedOption) {
        const selectedParc = selectedOption.value;
        votes[selectedParc] += 1;
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
            const barId = `bar${key.slice(-1)}`;
            const percentageId = `percentage${key.slice(-1)}`;
            document.getElementById(barId).style.width = percentage + "%";
            document.getElementById(percentageId).innerText = Math.round(percentage) + "%";
        }
    }
}