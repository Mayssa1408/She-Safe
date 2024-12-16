<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>She Safe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        footer {
            background-color: #FFCCD2;
            color: #4F1766;
            padding: 10px 0;
        }
    </style>
    <script>
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

        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('commentForm').addEventListener('submit', function (e) {
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
        });
    </script>
</head>

<body>

    <header class="text-center py-4">
        <h1>Besoin d'une Safe Place ?</h1>
        <p>Aidez la communauté à identifier les lieux où les femmes se sentent en sécurité.</p>
        <button class="btn btn-primary">Aidez-nous à rendre Bruxelles plus Safe !</button>
    </header>

    <main class="container">
        <section class="poll my-5">
            <h2>Parcs</h2>

            <div class="option">
                <label for="parc1">
                    <input type="radio" id="parc1" name="vote" value="parc1"> Parc Botanique
                </label>
                <div class="bar-container">
                    <div class="bar" id="bar1"></div>
                    <span class="percentage" id="percentage1">0%</span>
                </div>
            </div>

            <div class="option">
                <label for="parc2">
                    <input type="radio" id="parc2" name="vote" value="parc2"> Parc Cinquantenaire
                </label>
                <div class="bar-container">
                    <div class="bar" id="bar2"></div>
                    <span class="percentage" id="percentage2">0%</span>
                </div>
            </div>

            <div class="option">
                <label for="parc3">
                    <input type="radio" id="parc3" name="vote" value="parc3"> Parc Royal
                </label>
                <div class="bar-container">
                    <div class="bar" id="bar3"></div>
                    <span class="percentage" id="percentage3">0%</span>
                </div>
            </div>
            <button class="btn btn-success mt-3" onclick="submitVote()">Soumettre mon vote</button>
        </section>

        <section class="comments-section my-5">
            <h2 class="text-center">Ce que les femmes disent des Safe Places</h2>
            <div class="row">
                <div class="col-md-4 mb-4" id="comment-template" style="display: none;">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Parc</h5>
                            <p class="card-text">Un commentaire d'exemple.</p>
                            <p class="text-muted">— Utilisateur</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="add-comment my-5">
            <h2 class="text-center">Partagez votre expérience</h2>
            <form id="commentForm" class="text-center">
                <textarea id="commentInput" class="form-control my-3" rows="4"
                    placeholder="Ajoutez votre commentaire..."></textarea>
                <button type="submit" class="btn btn-warning">Soumettre mon commentaire</button>
            </form>
        </section>
    </main>

    <footer class="text-center py-3 bg-light">
        <p>&copy; 2024 She Safe - Tous droits réservés</p>
    </footer>
</body>

</html>