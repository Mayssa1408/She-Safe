
/**
 * Soumet le vote pour un thème donné.
 * @param {string} theme - Le thème pour lequel le vote est soumis (parcs, cafes, arrets, bars).
 */
function submitVote(theme) {
    const selectedOption = document.querySelector(`input[name="vote-${theme}"]:checked`);
    if (selectedOption) {
        const selectedValue = selectedOption.value;
        votes[theme][selectedValue] += 1;
        alert(`Merci pour votre vote dans la catégorie ${theme}!`);
    } else {
        alert(`Veuillez sélectionner une option dans la catégorie ${theme}.`);
    }
}

/**
 * Met à jour les barres de progression et les pourcentages pour un thème donné.
 * @param {string} theme - Le thème pour lequel les barres sont mises à jour (parcs, cafes, arrets, bars).
 */
function updateBars(theme) {
    const totalVotes = Object.values(votes[theme]).reduce((sum, val) => sum + val, 0);

    if (totalVotes > 0) {
        Object.keys(votes[theme]).forEach((key, index) => {
            const percentage = (votes[theme][key] / totalVotes) * 100;
            const barElement = document.getElementById(`bar-${theme}-${index + 1}`);
            const percentageElement = document.getElementById(`percentage-${theme}-${index + 1}`);

            if (barElement && percentageElement) {
                barElement.style.width = `${percentage}%`;
                barElement.style.transition = "width 0.5s ease";
                percentageElement.innerText = `${Math.round(percentage)}%`;
            }
        });
    }
}

// Initialisation des barres à zéro pour chaque thème
function initializeBars() {
    Object.keys(votes).forEach(theme => {
        Object.keys(votes[theme]).forEach((_, index) => {
            const barElement = document.getElementById(`bar-${theme}-${index + 1}`);
            const percentageElement = document.getElementById(`percentage-${theme}-${index + 1}`);
            if (barElement && percentageElement) {
                barElement.style.width = "0%";
                percentageElement.innerText = "0%";
            }
        });
    });
}

document.addEventListener("DOMContentLoaded", initializeBars);

console.log('sondage.js est chargé correctement !');
