// Get references to the sidebar and content elements
const sidebar = document.querySelector('.sidebar');
const content = document.querySelector('.content');

// Function to toggle the visibility of the sidebar
function toggleSidebar() {
  sidebar.classList.toggle('active');
  content.classList.toggle('shifted'); // Add a class to shift content when sidebar is open
}

// Add click event listener to a menu button (replace with your menu button selector)
document.querySelector('.menu-button').addEventListener('click', toggleSidebar);
