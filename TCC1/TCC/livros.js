const commentForm = document.querySelector('.comment-form');
const commentList = document.querySelector('.comment-list');
const starElements = document.querySelectorAll('.star-icon');

commentForm.addEventListener('submit', (event) => {
  event.preventDefault(); // Prevent default form submission

  const comment = document.querySelector('[name="comment"]').value;
  const rating = getRating(); // Get the selected rating

  // Handle comment submission and rating (implementation depends on your backend)
  console.log(`Comment: ${comment}, Rating: ${rating}`); // Log for demonstration

  // Example: Clear the comment field and reset star selection
  document.querySelector('[name="comment"]').value = '';
  starElements.forEach((star) => star.classList.remove('ativo'));
});

function getRating() {
  const selectedStar = document.querySelector('.star-icon.ativo');
  return selectedStar ? selectedStar.getAttribute('data-avaliacao') : 0; // Default to 0 if no star is selected
}

// Improved star rating event listener (attaches once)
document.addEventListener('click', (event) => {
  const clickedElement = event.target;

  if (clickedElement.classList.contains('star-icon')) {
    const classStar = clickedElement.classList;
    if (!classStar.contains('ativo')) {
      starElements.forEach((star) => star.classList.remove('ativo')); // Clear previous selection
      classStar.add('ativo');
      console.log(clickedElement.getAttribute('data-avaliacao')); // Log selected rating for demonstration
    }
  }
});
